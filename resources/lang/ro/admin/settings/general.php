<?php

return [
    'ad'				        => 'Director activ',
    'ad_domain'				    => 'Domeniu Active Directory',
    'ad_domain_help'			=> 'Acest lucru este uneori același cu domeniul dvs. de e-mail, dar nu întotdeauna.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'Dacă doriți să trimiteți o copie a e-mailurilor de predare/ primire trimise utilizatorilor către un cont de e-mail suplimentar, introduceți-l aici. În caz contrar, lăsați acest câmp necompletat.',
    'is_ad'				        => 'Acesta este un server Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Trimite alerte catre',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Alerte activată',
    'alert_interval'			=> 'Termenul de expirare a alertelor (în zile)',
    'alert_inv_threshold'		=> 'Ajustarea pragului de inventar',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'ID-uri de active',
    'audit_interval'            => 'Interval de audit',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Prag de avertizare privind auditul',
    'audit_warning_days_help'   => 'Câte zile în avans trebuie să vă avertizăm când activele sunt scadente pentru audit?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Prefix (optional)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Copiile de rezervă',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Setări cod de bare',
    'confirm_purge'			    => 'Confirmați purjarea',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS personalizat',
    'custom_css_help'			=> 'Introduceți orice suprascrieri personalizate CSS pe care doriți să le utilizați. Nu includeți etichetele &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Adresă URL personalizată pentru resetarea parolei',
    'custom_forgot_pass_url_help'	=> 'Acest lucru înlocuiește URL-ul de parolă uitată încorporat pe ecranul de conectare, util pentru a direcționa utilizatorii către funcția de resetare parole LDAP internă sau găzduită. Acesta va dezactiva efectiv funcționalitatea parolei uitate de utilizatorul local.',
    'dashboard_message'			=> 'Mesajul din tabloul de bord',
    'dashboard_message_help'	=> 'Acest text va apărea în tabloul de bord pentru orice persoană cu permisiunea de a vizualiza tabloul de bord.',
    'default_currency'  		=> 'Moneda implicita',
    'default_eula_text'			=> 'EULA implicita',
    'default_language'			=> 'Limba implicita',
    'default_eula_help_text'	=> 'De asemenea, puteți asocia clauze personalizate personalizate cu anumite categorii de active.',
    'display_asset_name'        => 'Afiseaza nume activ',
    'display_checkout_date'     => 'Arata data predare',
    'display_eol'               => 'Arata EOL in tabel',
    'display_qr'                => 'Afișați codurile pătrată',
    'display_alt_barcode'		=> 'Afișați coduri de bare 1D',
    'email_logo'                => 'Logo e-mail',
    'barcode_type'				=> 'Tip de cod de bare 2D',
    'alt_barcode_type'			=> 'Tip de cod de bare 1D',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Setările EULA',
    'eula_markdown'				=> 'Această licență EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown markdown</a>.',
    'favicon'                   => 'Pictogramă',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Textul suplimentar în subsol ',
    'footer_text_help'          => 'Acest text va apărea în subsolul din dreapta. Linkurile sunt permise folosind <a href="https://help.github.com/articles/github-flavored-markdown/">marcaje de tip Github</a>. Pauzele de linii, anteturile, imaginile etc. pot avea rezultate imprevizibile.',
    'general_settings'			=> 'setari generale',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Generați Backup',
    'header_color'              => 'Culoarea antetului',
    'info'                      => 'Aceste setari va lasa sa modificati anumite aspecte ale instalarii.',
    'label_logo'                => 'Sigla etichetei',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versiune Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP activat',
    'ldap_integration'          => 'Integrarea LDAP',
    'ldap_settings'             => 'Setări LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Introduceți un nume de utilizator LDAP și o parolă valabilă din DN-ul de bază pe care l-ați specificat mai sus pentru a testa dacă datele de conectare LDAP sunt configurate corect. TREBUIE SĂ SAȚI PRIMUL SETĂRI LDAP ACTUALIZATE.',
    'ldap_login_sync_help'      => 'Acest lucru testează numai faptul că LDAP poate sincroniza corect. Dacă interogarea dvs. de autentificare LDAP nu este corectă, este posibil ca utilizatorii să nu se poată conecta. TREBUIE SĂ ACTUALIZAȚI SETĂRILE LDAP MAI ÎNTÂI.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Acest lucru ar trebui să înceapă cu ldap: // (pentru TCP sau TLS) sau ldaps: // (pentru SSL)',
    'ldap_server_cert'			=> 'Validarea certificatelor SSL pentru LDAP',
    'ldap_server_cert_ignore'	=> 'Permiteți certificatul SSL nevalid',
    'ldap_server_cert_help'		=> 'Bifați această casetă de selectare dacă utilizați un certificat SSL auto-semnat și doriți să acceptați un certificat SSL nevalid.',
    'ldap_tls'                  => 'Utilizați TLS',
    'ldap_tls_help'             => 'Acest lucru trebuie verificat numai dacă executați STARTTLS pe ​​serverul LDAP.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Parola de legare LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Filtrul LDAP',
    'ldap_pw_sync'              => 'Sincronizare parolă LDAP',
    'ldap_pw_sync_help'         => 'Debifați această casetă dacă nu doriți să păstrați parolele LDAP sincronizate cu parolele locale. Dacă dezactivați acest lucru, este posibil ca utilizatorii dvs. să nu poată să se conecteze dacă serverul dvs. LDAP nu este accesibil din anumite motive.',
    'ldap_username_field'       => 'Nume câmp',
    'ldap_lname_field'          => 'Numele de familie',
    'ldap_fname_field'          => 'Numele LDAP',
    'ldap_auth_filter_query'    => 'Solicitare de autentificare LDAP',
    'ldap_version'              => 'Versiunea LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Numărul angajatului LDAP',
    'ldap_email'                => 'LDAP e-mail',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Licență software',
    'load_remote_text'          => 'Scripturi de la distanță',
    'load_remote_help_text'		=> 'Această instalare Snipe-IT poate încărca scripturi din lumea exterioară.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Conectați-vă Notă',
    'login_note_help'           => 'Opțional includeți câteva propoziții în ecranul de conectare, de exemplu, pentru a ajuta persoanele care au găsit un dispozitiv pierdut sau furat. Acest câmp acceptă markdown <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromdown</a>',
    'login_remote_user_text'    => 'Opțiuni de conectare la utilizatorul de la distanță',
    'login_remote_user_enabled_text' => 'Activați autentificarea cu Antet utilizator la distanță',
    'login_remote_user_enabled_help' => 'Această opțiune permite autentificarea prin intermediul antetului REMOTE_USER în conformitate cu "Interfața comună a gateway-ului (rfc3875)"',
    'login_common_disabled_text' => 'Dezactivați alte mecanisme de autentificare',
    'login_common_disabled_help' => 'Această opțiune dezactivează alte mecanisme de autentificare. Activați această opțiune numai dacă sunteți sigur că datele dvs. de conectare REMOTE_USER funcționează deja',
    'login_remote_user_custom_logout_url_text' => 'Adresa URL de ieșire personalizată',
    'login_remote_user_custom_logout_url_help' => 'Dacă este furnizată aici o adresă URL, utilizatorii vor fi redirecționați către această adresă URL după ce utilizatorul va ieși din Snipe-IT. Acest lucru este util pentru a închide corect sesiunile de utilizator ale furnizorului dvs. de autentificare.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Siglă',
    'logo_print_assets'         => 'Utilizați la imprimare',
    'logo_print_assets_help'    => 'Utilizați brand-urie pe listele de materiale tipărite ',
    'full_multiple_companies_support_help_text' => 'Restricționarea utilizatorilor (inclusiv a administratorilor) atribuite companiilor activelor companiei lor.',
    'full_multiple_companies_support_text' => 'Suport complet pentru multiple companii',
    'show_in_model_list'   => 'Afișați în lista de selecție de model',
    'optional'					=> 'facultativ',
    'per_page'                  => 'Rezultate pe pagina',
    'php'                       => 'Versiune PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Trebuie sa instalati php-gd ca sa afisati coduri QR, verificati instructiunile de instalare.',
    'php_gd_warning'            => 'PHP Image Processing si GD plugin NU sunt instalate.',
    'pwd_secure_complexity'     => 'Complexitatea parolei',
    'pwd_secure_complexity_help' => 'Selectați oricare dintre regulile de complexitate a parolei pe care doriți să le impuneți.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Caractere minime de caractere',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Împiedicați parolele comune',
    'pwd_secure_uncommon_help'  => 'Acest lucru va interzice utilizatorilor să folosească parole comune din primele 10.000 de parole raportate în încălcare.',
    'qr_help'                   => 'Activeaza codurile QR inainte sa setati asta',
    'qr_text'                   => 'Text cod QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Setare',
    'settings'                  => 'Setari',
    'show_alerts_in_menu'       => 'Afișați alertele din meniul de sus',
    'show_archived_in_list'     => 'Active arhivate',
    'show_archived_in_list_text'     => 'Arată activele arhivate în lista cu toate activele',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Afișați imaginile în e-mailuri',
    'show_images_in_email_help'   => 'Debifați această casetă dacă instalarea dvs. Snipe-IT se află în spatele unei rețele VPN sau închisă, iar utilizatorii din afara rețelei nu vor putea încărca imagini din această instalare în e-mailurile lor.',
    'site_name'                 => 'Nume site',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Odată ce ați salvat informațiile Slack, va apărea un buton de testare.',
    'slack_test_help'           => 'Verificați dacă integrarea Slack este configurată corect. TREBUIE SĂ SALVAȚI SETĂRILE DUMNEAVOASTRĂ DE SLACK MAI ÎNTÂI.',
    'snipe_version'  			=> 'Snipe-IT versiune',
    'support_footer'            => 'Legăturile de suport in subsol ',
    'support_footer_help'       => 'Specificați cine vede legăturile la informațiile despre asistența Snipe-IT și la Manualul utilizatorilor',
    'version_footer'            => 'Versiune în subsol ',
    'version_footer_help'       => 'Specificați cine vede versiunea Snipe-IT și numărul de construcție.',
    'system'                    => 'Informatii sistem',
    'update'                    => 'Actualizeaza setari',
    'value'                     => 'Valoare',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Despre Setări',
    'about_settings_text'       => 'Aceste setări vă permit să personalizați anumite aspecte ale instalării.',
    'labels_per_page'           => 'Etichete pe pagină',
    'label_dimensions'          => 'Dimensiunile etichetelor (inci)',
    'next_auto_tag_base'        => 'Următoarea creștere automată',
    'page_padding'              => 'Marjele paginii (inci)',
    'privacy_policy_link'       => 'Legătura cu la politica de confidențialitate',
    'privacy_policy'            => 'Politica de confidenţialitate',
    'privacy_policy_link_help'  => 'Dacă este inclus aici o adresă URL, un link către politica dvs. de confidențialitate va fi inclus în subsolul aplicației și în orice e-mailuri trimise de sistem, în conformitate cu GDPR. ',
    'purge'                     => 'Eliminați înregistrările șterse',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Etichetați jgheabul de jos',
    'labels_display_sgutter'    => 'Eticheta jgheab',
    'labels_fontsize'           => 'Dimensiunea fontului etichetei',
    'labels_pagewidth'          => 'Etichetă lățime foaie',
    'labels_pageheight'         => 'Înălțimea foii de etichete',
    'label_gutters'        => 'Intervalele etichetelor (inci)',
    'page_dimensions'        => 'Dimensiunile paginii (inci)',
    'label_fields'          => 'Etichetați câmpurile vizibile',
    'inches'        => 'inch',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link către Snipe-IT în e-mailuri',
    'show_url_in_emails_help_text'      => 'Debifați această casetă dacă nu doriți să vă conectați la instalarea dvs. Snipe-IT în subsolul dvs. de e-mail. Utile dacă majoritatea utilizatorilor dvs. nu se înregistrează niciodată.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max înălțime miniatură',
    'thumbnail_max_h_help'   => 'Înălțimea maximă în pixeli pe care miniaturile ar putea să o afișeze în vizualizarea înregistrării. Min 25, max 500.',
    'two_factor'        => 'Două autentificare cu factori',
    'two_factor_secret'        => 'Codul cu doi factori',
    'two_factor_enrollment'        => 'Înscrierea în doi factori',
    'two_factor_enabled_text'        => 'Activați doi factori',
    'two_factor_reset'        => 'Resetați secretul cu două factori',
    'two_factor_reset_help'        => 'Acest lucru va obliga utilizatorul să-și înregistreze din nou dispozitivul cu Google Authenticator. Acest lucru poate fi util dacă dispozitivul înmatriculat în prezent este pierdut sau furat.',
    'two_factor_reset_success'          => 'Aparatul cu două factori se resetează',
    'two_factor_reset_error'          => 'Restabilirea dispozitivului cu două factori a eșuat',
    'two_factor_enabled_warning'        => 'Dacă activați două factori dacă nu este activat în prezent, vă forțați imediat să vă autentificați cu un dispozitiv Google Auth înscris. Veți avea capacitatea de a vă înregistra dispozitivul dacă nu sunteți înscris în prezent.',
    'two_factor_enabled_help'        => 'Aceasta va activa autentificarea cu doi factori utilizând Google Authenticator.',
    'two_factor_optional'        => 'Selectiv (Utilizatorii pot activa sau dezactiva dacă este permis)',
    'two_factor_required'        => 'Obligatoriu pentru toți utilizatorii',
    'two_factor_disabled'        => 'invalid',
    'two_factor_enter_code'	=> 'Introduceți codul cu doi factori',
    'two_factor_config_complete'	=> 'Trimiteți codul',
    'two_factor_enabled_edit_not_allowed' => 'Administratorul nu vă permite să editați această setare.',
    'two_factor_enrollment_text'	=> "Este necesară autentificarea cu două factori, cu toate acestea, dispozitivul dvs. nu a fost încă înscris. Deschideți aplicația Google Authenticator și scanați codul QR de mai jos pentru a vă înregistra dispozitivul. După ce ați înscris dispozitivul, introduceți codul de mai jos",
    'require_accept_signature'      => 'Solicită semnătura',
    'require_accept_signature_help_text'      => 'Activarea acestei funcții va impune utilizatorilor să se deconecteze fizic la acceptarea unui activ.',
    'left'        => 'stânga',
    'right'        => 'dreapta',
    'top'        => 'top',
    'bottom'        => 'fund',
    'vertical'        => 'vertical',
    'horizontal'        => 'orizontală',
    'unique_serial'                => 'Numere de serie unice',
    'unique_serial_help_text'                => 'Verificarea acestei casete va impune o constrângere de unicitate în serialele de active',
    'zerofill_count'        => 'Lungimea etichetelor de activ, inclusiv zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
