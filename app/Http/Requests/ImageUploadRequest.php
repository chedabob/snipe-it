<?php

namespace App\Http\Requests;

use App\Models\SnipeModel;
use enshrined\svgSanitize\Sanitizer;
use Intervention\Image\Facades\Image;
use App\Http\Traits\ConvertsBase64ToFiles;
use Illuminate\Http\UploadedFile;
use Storage;

class ImageUploadRequest extends Request
{
    use ConvertsBase64ToFiles;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
            return [
                'image' => 'mimes:png,gif,jpg,jpeg,svg,bmp,svg+xml,webp',
                'avatar' => 'mimes:png,gif,jpg,jpeg,svg,bmp,svg+xml,webp',
            ];
    }

    public function response(array $errors)
    {
        return $this->redirector->back()->withInput()->withErrors($errors, $this->errorBag);
    }
    
    /** 
     * Fields that should be traited from base64 to files
     */
    protected function base64FileKeys(): array
    {
        /**
         * image_source is here just legacy reasons. Api\AssetController
         * had it once to allow encoded image uploads.
        */ 
        return [
            'image' => 'auto',
            'image_source' => 'auto'
        ];
    }

    /**
     * Handle and store any images attached to request
     * @param SnipeModel $item Item the image is associated with
     * @param string $path  location for uploaded images, defaults to uploads/plural of item type.
     * @return SnipeModel        Target asset is being checked out to.
     */
    public function handleImages($item, $w = 600, $form_fieldname = null, $path = null, $db_fieldname = 'image')
    {
        $type = strtolower(class_basename(get_class($item)));

        if (is_null($path)) {
            $path = str_plural($type);

            if ($type == 'assetmodel') {
                $path = 'models';
            }

            if ($type == 'user') {
                $path = 'avatars';
            }
        }

        if (is_null($form_fieldname)) {
            $form_fieldname = 'image';
        }

        // This is dumb, but we need it for overriding field names for exceptions like avatars and logo uploads
        if (is_null($db_fieldname)) {
            $use_db_field = $form_fieldname;
        } else {
            $use_db_field = $db_fieldname;
        }

        
        // ConvertBase64ToFiles just changes object type, 
        // as it cannot currently insert files to $this->files
        if ($this->offsetGet($form_fieldname) instanceof UploadedFile) {
           $image=$this->offsetGet($form_fieldname);
        } else {
            if ($this->hasFile($form_fieldname)) {
                $image = $this->file($form_fieldname);
            }
        }

        if (isset($image)) {
            \Log::debug($image);

            if (!config('app.lock_passwords')) {

                $ext = $image->getClientOriginalExtension();
                $file_name = $type.'-'.$form_fieldname.'-'.str_random(10).'.'.$ext;

                \Log::info('File name will be: '.$file_name);
                \Log::debug('File extension is: '.$ext);

                if (($image->getClientOriginalExtension() !== 'webp') && ($image->getClientOriginalExtension() !== 'svg')) {
                    \Log::debug('Not an SVG or webp - resize');
                    \Log::debug('Trying to upload to: '.$path.'/'.$file_name);
                    $upload = Image::make($image->getRealPath())->resize(null, $w, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                     });

                    // This requires a string instead of an object, so we use ($string)
                    Storage::disk('public')->put($path.'/'.$file_name, (string) $upload->encode());
                } else {
                    // If the file is a webp, we need to just move it since webp support
                    // needs to be compiled into gd for resizing to be available
                    if ($image->getClientOriginalExtension() == 'webp') {
                        \Log::debug('This is a webp, just move it');
                        Storage::disk('public')->put($path.'/'.$file_name, file_get_contents($image));
                    // If the file is an SVG, we need to clean it and NOT encode it
                    } else {
                        \Log::debug('This is an SVG');
                        $sanitizer = new Sanitizer();
                        $dirtySVG = file_get_contents($image->getRealPath());
                        $cleanSVG = $sanitizer->sanitize($dirtySVG);

                        try {
                            \Log::debug('Trying to upload to: '.$path.'/'.$file_name);
                            Storage::disk('public')->put($path.'/'.$file_name, $cleanSVG);
                        } catch (\Exception $e) {
                            \Log::debug('Upload no workie :( ');
                            \Log::debug($e);
                        }
                    }
                }

                 // Remove Current image if exists
                if (($item->{$use_db_field}!='') && (Storage::disk('public')->exists($path.'/'.$item->{$use_db_field}))) {
                    \Log::debug('A file already exists that we are replacing - we should delete the old one.');
                    try {
                         Storage::disk('public')->delete($path.'/'.$item->{$use_db_field});
                         \Log::debug('Old file '.$path.'/'.$file_name.' has been deleted.');
                    } catch (\Exception $e) {
                        \Log::debug('Could not delete old file. '.$path.'/'.$file_name.' does not exist?');
                    }
                }

                $item->{$use_db_field} = $file_name;
            }

        // If the user isn't uploading anything new but wants to delete their old image, do so
        } else {
            if ($this->input('image_delete') == '1') {
                \Log::debug('Deleting image');
                try {
                    Storage::disk('public')->delete($path.'/'.$item->{$use_db_field});
                        $item->{$use_db_field} = null;
                } catch (\Exception $e) {
                    \Log::debug($e);
                }
            }
        }

        return $item;
    }
    
}
