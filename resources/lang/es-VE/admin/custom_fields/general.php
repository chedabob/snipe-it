<?php

return [
    'custom_fields'		        => 'Campos Personalizados',
    'manage'                    => 'Gestionar',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Acerca de Fieldsets',
    'about_fieldsets_text'		=> 'Los conjuntos de campos le permiten crear grupos de campos personalizados que se reutilizan con frecuencia para tipos de modelos de activos específicos.',
    'custom_format'             => 'Formato de expresion regular personalizada...',
    'encrypt_field'      	        => 'Encriptar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'ADVERTENCIA: Encriptar un campo hace que no pueda ser buscado.',
    'encrypted'      	        => 'Encriptado',
    'fieldset'      	        => 'Grupo de Campos',
    'qty_fields'      	      => 'Campos de Cantidad',
    'fieldsets'      	        => 'Grupo de Campos',
    'fieldset_name'           => 'Nombre del Grupo de Campos',
    'field_name'              => 'Nombre del Campo',
    'field_values'            => 'Valores del Campo',
    'field_values_help'       => 'Añadir opciones seleccionables, una por línea. Líneas en blanco además de la primera serán ignoradas.',
    'field_element'           => 'Elemento de Formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato Personalizado de Regex',
    'field_custom_format_help'     => 'Este campo te permite usar una expresión regex para la validación. Debería empezar como "regex:" - por ejemplo, para validar que un campo personalizado contiene un IMEI válido (15 dígitos numéricos), tú usarías <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado por Modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo Fieldset',
    'create_fieldset_title' => 'Crear un nuevo conjunto de campos',
    'create_field'            => 'Nuevo Campo Personalizado',
    'create_field_title' => 'Crear un campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Sólo los administradores podrán ver el valor desencriptado',
    'show_in_email'     => '¿Incluirá el valor de este campo en las notificaciones por correo de asignaciones de activos? Ten en cuenta que los campos cifrados no se pueden incluir en los correos electrónicos.',
    'help_text' => 'Texto de Ayuda',
    'help_text_description' => 'Este es un texto opcional que aparecerá debajo de los elementos del formulario al editar un activo para proporcionar contexto en el campo.',
    'about_custom_fields_title' => 'Acerca de campos personalizados',
    'about_custom_fields_text' => 'Los campos personalizados le permiten agregar atributos arbitrarios a los activos.',
    'add_field_to_fieldset' => 'Agregar campo a un conjunto de campos',
    'make_optional' => 'Requerido - haga click para hacerlo opcional',
    'make_required' => 'Opcional - haga click para hacerlo opcional',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo de DB',
    'db_convert_warning' => 'ADVERTENCIA. Este campo aparece en la tabla de campos personalizados como <code>:db_column</code>, pero se esperaba <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser unico en todos los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
];
