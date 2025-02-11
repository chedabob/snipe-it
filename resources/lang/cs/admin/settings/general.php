<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Doména služby Active Directory',
    'ad_domain_help'			=> 'Toto je někdy stejné jako vaše emailová doména, ale ne vždy.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'Ve skryté kopii',
    'admin_cc_email_help'       => 'Chcete-li poslat kopii e-mailů pro check-in / checkout, které jsou uživatelům zaslány na další e-mailový účet, zadejte je zde. V opačném případě nechte toto pole prázdné.',
    'is_ad'				        => 'Toto je server služby Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Zasílat upozornění na',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Upozornění zapnutá',
    'alert_interval'			=> 'Mez upozornění na vypršení (ve dnech)',
    'alert_inv_threshold'		=> 'Mez upozornění skladu',
    'allow_user_skin'           => 'Povolit vzhled uživatele',
    'allow_user_skin_help_text' => 'Zaškrtnutí tohoto políčka umožní uživateli přepsat vzhled uživatelského rozhraní jiným.',
    'asset_ids'					=> 'ID majetku',
    'audit_interval'            => 'Interval auditu',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Prah výstrahy auditu',
    'audit_warning_days_help'   => 'Kolik dní předem bychom vás měli varovat, když jsou aktiva splatná pro audit?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Předpona (volitnelná)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Zálohy',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Nastavení čárového kódu',
    'confirm_purge'			    => 'Potvrdit vyčištění',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Vlastní CSS',
    'custom_css_help'			=> 'Zadejte libovolné vlastní CSS, které chcete použít. Nezahrnujte &lt;style&gt;&lt;/style&gt; tagy.',
    'custom_forgot_pass_url'	=> 'Uživatelem určená URL adresa pro resetování hesla',
    'custom_forgot_pass_url_help'	=> 'Nahrazuje vestavěnou URL pro změnu zapomenutého hesla na přihlašovací obrazovce, slouží k přesměrování uživatelů na interní nebo hostované funkce obnovení hesla LDAP. Zablokuje přístup k funkci změny hesla lokálního uživatele.',
    'dashboard_message'			=> 'Hlášení na nástěnce',
    'dashboard_message_help'	=> 'Tento text se objeví na nástěnce každému, kdo má oprávnění k zobrazení nástěnky.',
    'default_currency'  		=> 'Výchozí měna',
    'default_eula_text'			=> 'Výchozí EULA',
    'default_language'			=> 'Výchozí jazyk',
    'default_eula_help_text'	=> 'Můžete také spojit vlastní EULA se specifickými kategoriemi majetku.',
    'display_asset_name'        => 'Zobrazit název majetku',
    'display_checkout_date'     => 'Zobrazit den převzetí',
    'display_eol'               => 'Zobrazit EOL v tabulkovém zobrazení',
    'display_qr'                => 'Zobrazit kódy',
    'display_alt_barcode'		=> 'Zobrazit 1D čárový kód',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'Typ 2D čárového kódu',
    'alt_barcode_type'			=> 'Typ 1D čárového kódu',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Nastavení EULA',
    'eula_markdown'				=> 'Tato EULA umožňuje <a href="https://help.github.com/articles/github-flavored-markdown/">Github markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Další text do zápatí ',
    'footer_text_help'          => 'Tento text se zobrazí v pravém zápatí. Odkazy jsou povoleny pomocí <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Zalamování řádků, záhlaví, obrázky atd. mohou mít za následek nepředvídatelné výsledky.',
    'general_settings'			=> 'Obecné nastavení',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Vytvořit zálohu',
    'header_color'              => 'Barva záhlaví',
    'info'                      => 'Tato nastavení umožňují zvolit určité prvky instalace.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Verze Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP povoleno',
    'ldap_integration'          => 'LDAP integrace',
    'ldap_settings'             => 'Nastavení LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Zadejte platné LDAP uživatelské jméno a heslo ze základu rozlišeného názvu který jste určili výše a vyzkoušejte zda je LDAP přihlašování správně nastavené. NEJPRVE JE TŘEBA ULOŽIT ZMĚNĚNÉ NASTAVENÍ LDAP.',
    'ldap_login_sync_help'      => 'Otestujte, že LDAP může správně synchronizovat. Pokud ověřovací LDAP dotaz není správný, uživatelé se nemusí být schopni přihlásit. JE NUTNÉ NEJPRVE NEJDŘÍVE ULOŽIT NASTAVENÍ LDAP POKUD BYLO ZMĚNĚNO.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'Toto by mělo začít s ldap: // (pro nešifrované nebo TLS) nebo ldaps: // (pro SSL)',
    'ldap_server_cert'			=> 'Validace certifikátů LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Povolit neplatný certifikát SSL',
    'ldap_server_cert_help'		=> 'Zaškrtněte toto políčko, pokud používáte SSL certifikát s vlastním podpisem a chcete přijmout neplatný certifikát SSL.',
    'ldap_tls'                  => 'Použít TLS',
    'ldap_tls_help'             => 'Tuto možnost byste měli zkontrolovat pouze v případě, že používáte STARTTLS na serveru LDAP. ',
    'ldap_uname'                => 'LDAP uživatelské jméno připojení',
    'ldap_dept'                 => 'LDAP oddělení',
    'ldap_phone'                => 'LDAP telefonní číslo',
    'ldap_jobtitle'             => 'LDAP pracovní pozice',
    'ldap_country'              => 'LDAP země',
    'ldap_pword'                => 'LDAP heslo připojení',
    'ldap_basedn'               => 'Základní svázání DN',
    'ldap_filter'               => 'LDAP filtr',
    'ldap_pw_sync'              => 'LDAP heslo synchronizace',
    'ldap_pw_sync_help'         => 'Zrušte zaškrtnutí tohoto políčka, pokud si nepřejete zachovat hesla LDAP synchronizovaná s lokálními hesly. Pokud to zakážete znamená to, že se uživatelé nemusí přihlásit, pokud je váš LDAP server z nějakého důvodu nedostupný.',
    'ldap_username_field'       => 'Pole uživatelského jména',
    'ldap_lname_field'          => 'Příjmení',
    'ldap_fname_field'          => 'LDAP jméno',
    'ldap_auth_filter_query'    => 'LDAP ověřovací dotaz',
    'ldap_version'              => 'Verze LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP číslo zaměstnance',
    'ldap_email'                => 'LDAP email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Softwarová licence',
    'load_remote_text'          => 'Vzdálené skripty',
    'load_remote_help_text'		=> 'Tato instalace Snipe-IT může nahrávat skripty z vnějšího světa.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Přihlásit se Poznámka',
    'login_note_help'           => 'Volitelně můžete na obrazovce přihlášení zadat několik vět, například pomoci lidem, kteří nalezli ztracené nebo ukradené zařízení. Toto pole akceptuje značku <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavedmarkdown</a>',
    'login_remote_user_text'    => 'Volby vzdáleného přihlašování uživatele',
    'login_remote_user_enabled_text' => 'Zapnout přihlašování s hlavičkou vzdálený uživatel',
    'login_remote_user_enabled_help' => 'Tato volba zapne ověřování prostřednictvím hlavičky REMOTE_USER v souladu s „ommon Gateway Interface (norma rfc3875)“',
    'login_common_disabled_text' => 'Vypnout ostatní způsoby ověřování',
    'login_common_disabled_help' => 'Tato volba vypne ostatní způsoby ověřování. Použijte ji pouze pokud jste si jistí, že už funguje přihlašování REMOTE_USER',
    'login_remote_user_custom_logout_url_text' => 'Uživatelsky určená URL adresa odhlašování',
    'login_remote_user_custom_logout_url_help' => 'Pokud je zde uvedena adresa URL, uživatelé budou po odhlášení ze Snipe-IT přesměrování na tuto URL. To je užitečné pro správné ukončení relací Authentication providera.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Použijte v tisku',
    'logo_print_assets_help'    => 'Používat branding na seznamech k tisku ',
    'full_multiple_companies_support_help_text' => 'Omezení uživatelů (včetně správců) jsou přiřazená ke společnostem s majetkem společnosti.',
    'full_multiple_companies_support_text' => 'Plná podpora více společností',
    'show_in_model_list'   => 'Zobrazit v rozbalovacích nabídkách modelu',
    'optional'					=> 'volitelný',
    'per_page'                  => 'Výsledků na stránku',
    'php'                       => 'Verze PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Je nutné nainstalovat php-gd pro zobrazení QR kódů. Více v instalační příručce.',
    'php_gd_warning'            => 'PHP pluginy pro zpracování obrazu a GD nejsou nainstalovány.',
    'pwd_secure_complexity'     => 'Složitost hesla',
    'pwd_secure_complexity_help' => 'Zvolte pravidla složitosti hesla, která chcete vynutit.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Minimální znaky hesla',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Zabraňte běžným heslům',
    'pwd_secure_uncommon_help'  => 'To uživatelům zakáže používání běžných hesel z nejvyšších 10 000 hesel hlášených v porušení.',
    'qr_help'                   => 'Nejprve povolte QR kódy',
    'qr_text'                   => 'Text QR kódu',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'URL metadat',
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
    'setting'                   => 'Nastavení',
    'settings'                  => 'Nastavení',
    'show_alerts_in_menu'       => 'Zobrazovat upozornění v horní nabídce',
    'show_archived_in_list'     => 'Archivovaný majetek',
    'show_archived_in_list_text'     => 'Zobrazit archivovaný majetek ve výpisu „veškerý majetek“',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Zobrazovat obrázky v e-mailech',
    'show_images_in_email_help'   => 'Zrušte zaškrtnutí této kolonky, pokud je instalace Snipe-IT za VPN nebo uzavřenou sítí a uživatelé mimo síť nebudou moci do svých e-mailů načíst obrázky z této instalace.',
    'site_name'                 => 'Název stránky',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack kanál',
    'slack_endpoint'            => 'Slack koncový bod',
    'slack_integration'         => 'Nastavení Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Po uložení informací ke Slack se zobrazí tlačítko pro vyzkoušení.',
    'slack_test_help'           => 'Zkontrolujte, zda je správně nakonfigurována integrace Slack. MUSÍTE NEJDŘÍVE ULOŽIT NASTAVENÍ SLACK POKUD BYLO ZMĚNĚNO.',
    'snipe_version'  			=> 'Verze Snipe-IT',
    'support_footer'            => 'Odkazy v zápatí na podporu ',
    'support_footer_help'       => 'Určete, kdo uvidí odkazy na Snipe-IT podporu a uživatelskou příručku',
    'version_footer'            => 'Verze v zápatí ',
    'version_footer_help'       => 'Určete kdo uvidí verzi Snipe-IT a číslo sestavení.',
    'system'                    => 'Systémové informace',
    'update'                    => 'Upravit nastavení',
    'value'                     => 'Hodnota',
    'brand'                     => 'Opatřit značkou',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'O nastavení',
    'about_settings_text'       => 'Tato nastavení umožňují zvolit určité prvky instalace.',
    'labels_per_page'           => 'Štítků na stránku',
    'label_dimensions'          => 'Rozměry štítku (palce)',
    'next_auto_tag_base'        => 'Další auto přírůstek',
    'page_padding'              => 'Okraje stránky (palce)',
    'privacy_policy_link'       => 'Odkaz na zásady osobních údajů',
    'privacy_policy'            => 'Zásady ochrany soukromí',
    'privacy_policy_link_help'  => 'Pokud je zde zahrnuta URL adresa, odkaz na zásady ochrany osobních údajů budou obsaženy do zápatí aplikace a pokud bude zahrnuto ve všech e-mailech, které systém odešle, díky čemuž bude odpovídat požadavkům předpisu GDPR. ',
    'purge'                     => 'Vyčištění odstraněných záznamů',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Spodní okraj štítku',
    'labels_display_sgutter'    => 'Boční okraj štítku',
    'labels_fontsize'           => 'Velikost písma štítku',
    'labels_pagewidth'          => 'Šířka listu štítku',
    'labels_pageheight'         => 'Výška listu štítku',
    'label_gutters'        => 'Mezery štítku (palce)',
    'page_dimensions'        => 'Rozměry stránky (palce)',
    'label_fields'          => 'Viditelná pole štítku',
    'inches'        => 'palce',
    'width_w'        => 'š',
    'height_h'        => 'v',
    'show_url_in_emails'                => 'Odkaz na Snipe-IT v e-mailech',
    'show_url_in_emails_help_text'      => 'Zrušte zaškrtnutí tohoto políčka, pokud nechcete odkazovat zpět na instalaci Snipe-IT do vašich emailových patek. Užitečné, pokud se většina vašich uživatelů nikdy nepřihlásí.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximální výška miniatur',
    'thumbnail_max_h_help'   => 'Maximální výška v pixelech, která se v zobrazení seznamu zobrazí miniaturám. Min 25, max 500.',
    'two_factor'        => 'Dvoufaktorové ověření',
    'two_factor_secret'        => 'Dvojfaktorový kód',
    'two_factor_enrollment'        => 'Dvojfaktorový zápis',
    'two_factor_enabled_text'        => 'Povolit Dvoufaktorové ověření',
    'two_factor_reset'        => 'Resetovat dvou faktorové tajemství',
    'two_factor_reset_help'        => 'Tímto bude uživatel přinucen, aby znovu zaregistroval své zařízení pomocí aplikace Google Authenticator. To může být užitečné, pokud ztratil nebo mu bylo odcizeno jeho aktuálně zapsané zařízení. ',
    'two_factor_reset_success'          => 'Resetování dvoufaktorového zařízení bylo úspěšné',
    'two_factor_reset_error'          => 'Resetování dvoufaktorového zařízení selhalo',
    'two_factor_enabled_warning'        => 'Povolení dvoufaktorového zabezpečení, pokud již není v současné době povoleno vás okamžitě donutí k ověření pomocí zařízení zapsaného v Google Auth. Pokud není v současné době žádné registrován. Budete mít možnost zapsat svoje zařízení.',
    'two_factor_enabled_help'        => 'Toto zapne dvoufaktorovou autentizaci pomocí služby Google Authenticator.',
    'two_factor_optional'        => 'Selektivní (Uživatelé mohou povolit nebo zakázat, je-li povolen)',
    'two_factor_required'        => 'Požadováno pro všechny uživatele',
    'two_factor_disabled'        => 'Zakázáno',
    'two_factor_enter_code'	=> 'Zadejte dvoufaktorový kód',
    'two_factor_config_complete'	=> 'Odeslat kód',
    'two_factor_enabled_edit_not_allowed' => 'Váš administrátor vám nedovolil upravit toto nastavení.',
    'two_factor_enrollment_text'	=> "Je vyžadováno dvoufaktorové ověření, nicméně vaše zařízení ještě nebylo zaregistrováno. Otevřete aplikaci Google Authenticator a oskenujte níže uvedený QR kód pro registraci vašeho zařízení. Jakmile zaregistrujete své zařízení, zadejte níže uvedený kód",
    'require_accept_signature'      => 'Požadovat podpis',
    'require_accept_signature_help_text'      => 'Aktivace této funkce bude vyžadovat, aby se uživatelé fyzicky přihlásili k přijetí určitého materiálu.',
    'left'        => 'vlevo',
    'right'        => 'vpravo',
    'top'        => 'nahoře',
    'bottom'        => 'dole',
    'vertical'        => 'svislé',
    'horizontal'        => 'vodorovné',
    'unique_serial'                => 'Neopakující se sériová čísla',
    'unique_serial_help_text'                => 'Zaškrtnutím tohoto políčka bude vynucena jedinečnost seriových čísel položek majetku',
    'zerofill_count'        => 'Délka značek majetku včetně zerofill',
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
