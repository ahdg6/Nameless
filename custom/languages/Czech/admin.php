<?php 
/*
 *	Made by Samerton, translated by Zemos and Renzotom
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Czech Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Prosím ověřte přihlášení',
	
	// Sidebar
	'admin_cp' => 'Ovládací panel administrátora',
	'administration' => 'Administrace',
	'overview' => 'Přehled',
	'core' => 'Nastavení',
	'minecraft' => 'Minecraft',
	'modules' => 'Doplňky',
	'security' => 'Zabezpečení',
	'styles' => 'Styly',
	'users_and_groups' => 'Uživatelé a skupiny',
	
	// Overview
	'running_nameless_version' => 'NamelessMC běží na verzi <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP verze <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiky',
    'notices' => 'Upozornění',
    'no_notices' => 'Žádná upozornění.',
    'email_errors_logged' => 'Chyby s e-maily byly zaznamenány. Pro zobrazení klikněte <a href="{x}">zde</a>.', // Don't replace "{x}"
	
	// Core
	'settings' => 'Nastavení',
	'general_settings' => 'Obecné nastavení',
	'sitename' => 'Název stránky',
	'default_language' => 'Hlavní jazyk',
	'default_language_help' => 'Uživatelé si budou moci vybrat z libovolných nainstalovaných jazyků.',
	'installed_languages' => 'Všechny nové jazyky byly úspěšně nainstalovány.',
	'default_timezone' => 'Základní časové pásmo',
	'registration' => 'Registrace',
	'enable_registration' => 'Povolit registraci?',
	'verify_with_mcassoc' => 'Povolit ověřování pomocí MCAssoc?',
	'email_verification' => 'Povolit ověřování pomocí e-mailu?',
	'homepage_type' => 'Typ hlavní stránky',
	'post_formatting_type' => 'Typ formátování',
	'portal' => 'Portál',
	'missing_sitename' => 'Vložte název webu o délce 2 až 64 znaků.',
	'use_friendly_urls' => 'Přátelské URL adresy?',
	'use_friendly_urls_help' => 'DŮLEŽITÉ: Váš server musí být nakonfigurován tak, aby umožnil použití souborů mod_rewrite a .htaccess.',
	'config_not_writable' => 'Váš <strong>core/config.php</strong> není přepisovatelný. Zkontrolujte oprávnění pro tento soubour.',
	'social_media' => 'Sociální média',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Použít pro Twitter tmavý vzhled?',
	'discord_id' => 'ID Discord serveru',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Úspěšně aktualizováno',
    'debugging_and_maintenance' => 'Debugging a údržba',
    'enable_debug_mode' => 'Zapnout debug mód?',
    'force_https' => 'Vynucené https?',
    'force_https_help' => 'Pokud je zapnuto, všechny požadavky na Váš web budou přesměrovány na https. Jestli chcete, aby to tato možnost fungovala správně, tak musíte mít platný a aktivovaný SSL certifikát.',
    'contact_email_address' => 'Kontaktní e-mailová adresa',
    'emails' => 'E-maily',
    'email_errors' => 'Chyby s e-maily',
    'registration_email' => 'Registrační e-mail',
    'contact_email' => 'Kontaktní e-mail',
    'forgot_password_email' => 'E-mail se zapomenutým heslem',
    'unknown' => 'Neznámý',
    'delete_email_error' => 'Smazat chybu',
    'confirm_email_error_deletion' => 'Jste si jist, že chcete smazat tuto chybu?',
    'viewing_email_error' => 'Zobrazení chyby',
    'unable_to_write_email_config' => 'Nepodařilo se psát do souboru <strong>core/email.php</core>. Zkontrolujte prosím soubor s oprávněními.',
    'enable_mailer' => 'Zapnout PHPMailer?',
    'enable_mailer_help' => 'Zapněte tuto možnost, pokud nejsou emaily posílány standartně. Použití PHPMailer vyžaduje, abyste měli službu schopnou posílat emaily, jako Gmail nebo poskytovatel SMTP.',
    'outgoing_email' => 'Odchozí e-mailová adresa',
    'outgoing_email_info' => 'Toto je e-mailová adresa, z jaké NamelessMC posílá e-maily.',
    'mailer_settings_info' => 'Jestliže máte zapnutý PHPMailer, tak jsou následující pole povinná. Pro více informací, jak tyto pole vyplnit, se podívejte na <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">wiki</a>.',
    'host' => 'Host',
	'email_port' => 'Port',
    'email_password_hidden' => 'Z bezpečnostních důvodů neni heslo zobrazeno.',
    'send_test_email' => 'Odeslat zkušební e-mail',
    'send_test_email_info' => 'Následující tlačítko se pokusí odeslat e-mail na Vaši e-mailovou adresu, <strong>{x}</strong>. Objeví se zde všechny chyby při odesílání e-mailu.', // Don't replace {x}
    'send' => 'Odeslat',
    'test_email_error' => 'Chyby zkušebního e-mailu:',
    'test_email_success' => 'Zkušební e-mail úspěšně odeslán!',
    'terms_error' => 'Ujistěte se prosím, že Vaše podmínky nejsou delší než 2048 znaků.',
    'terms_updated' => 'Podmínky úspěšně aktualizovány.',
    'avatars' => 'Avatary',
    'allow_custom_avatars' => 'Povolit vlastní avatary uživatelů?',
    'default_avatar' => 'Výchozí avatar',
    'custom_avatar' => 'Vlastní avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Zdroj avatara z Minecraftu',
    'built_in_avatars' => 'Zabudovaná služba avatarů',
    'minecraft_avatar_perspective' => 'Perspektiva Minecraft avatara',
    'face' => 'Obličej',
    'head' => 'Hlava',
    'select_default_avatar' => 'Vyberte nového výchozího avatara:',
    'no_avatars_available' => 'Žádný avatar není dostupný. Nahrajte prosím nový obrázek výše.',
    'avatar_settings_updated_successfully' => 'Nastavení avatarů úspěšně aktualizováno.',

	// Reactions
	'icon' => 'Ikonka',
	'type' => 'Typ',
	'positive' => 'Pozitivní',
	'neutral' => 'Neutrální',
	'negative' => 'Negativní',
	'editing_reaction' => 'Upravit reakce',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nová reakce',
	'creating_reaction' => 'Vytvořit reakci',
	
	// Custom profile fields
	'custom_fields' => 'Vlastní profilová pole',
	'new_field' => '<i class="fa fa-plus-circle"></i> nové pole',
	'required' => 'Povinný',
	'public' => 'Veřejný',
	'text' => 'Text',
	'textarea' => 'Oblast textu',
	'date' => 'Datum',
	'creating_profile_field' => 'Vytváření profilového pole',
	'editing_profile_field' => 'Upravování profilového pole',
	'field_name' => 'Název pole',
	'profile_field_required_help' => 'Požadovaná pole musí být vyplněna uživatelem a zobrazí se už při registraci.',
	'profile_field_public_help' => 'Veřejná pole budou zobrazena všem uživatelům. Pokud je tato možnost vypnuta, pouze moderátoři a vyšší mohou vidět hodnoty v polích.',
	'profile_field_error' => 'Vložte prosím název pole dlouhý 2 až 16 znaků.',
	'description' => 'Popis',
	'display_field_on_forum' => 'Zobrazit pole na fórum?',
	'profile_field_forum_help' => 'Pokud je zapnuto, pole bude zobrazeno vedle příspěvku uživatele.',
	
	// Minecraft
	'enable_minecraft_integration' => 'Povolit Minecraft?',
    'mc_service_status' => 'Stav provozu Minecraftu',
    'service_query_error' => 'Nepodařilo se načíst stav provozu.',
    'authme_integration' => 'Integrace AuthMe',
    'authme_integration_info' => 'Když je integrace AuthMe zapnuta, hráči se mohou registrovat pouze ve hře.',
    'enable_authme' => 'Zapnout integraci AuthMe?',
    'authme_db_address' => 'Adresa na databázi s pluginem AuthMe',
    'authme_db_port' => 'Port na databázi',
    'authme_db_name' => 'Název databáze',
    'authme_db_user' => 'Uživatelské jméno k databázi',
    'authme_db_password' => 'Heslo k databázi',
    'authme_hash_algorithm' => 'AuthMe Hashing Algorithm',
    'authme_db_table' => 'Hráčská tabulka',
    'enter_authme_db_details' => 'Zadejte prosím správné údaje databáze.',
    'authme_password_sync' => 'Synchronizovat heslo s AuthMe?',
    'authme_password_sync_help' => 'Pokud je zapnuto, tak kdykoli bude hráčovo heslo změněno ve hře, bude změněno i na webu.',
    'minecraft_servers' => 'Minecraft servery',
    'account_verification' => 'Ověření Minecraft účtu',
    'server_banners' => 'Bannery serveru',
    'query_errors' => 'Query chyby',
    'add_server' => '<i class="fa fa-plus-circle"></i> Přidat server',
    'no_servers_defined' => 'Dosud nebyly definovány žádné servery',
    'query_settings' => 'Nastavení Query',
    'default_server' => 'Výchozí server',
    'no_default_server' => 'Žádný výchozí server',
    'external_query' => 'Použít externí query?',
    'external_query_help' => 'Pokud výchozí query serveru nefunguje, povolte tuto možnost.',
    'adding_server' => 'Přidat server',
    'server_name' => 'Název serveru',
    'server_address' => 'Adresa serveru',
    'server_address_help' => 'Zde je IP adresa, nebo doména serveru sloužící k připojení, bez portu.',
    'server_port' => 'Server Port',
    'parent_server' => 'Nadřazený server',
    'parent_server_help' => 'Nadřazený server je typicky Bungee případ, na který se server připojuje (pokud nějaký je).',
    'no_parent_server' => 'Žádný nadřazený server',
    'bungee_instance' => 'BungeeCord případ?',
    'bungee_instance_help' => 'Vyberte tuto možnost, pokud je to případ BungeeCord.',
    'server_query_information' => 'Chcete-li zobrazit seznam online hráčů na Vašem webu, Váš server <strong>musí</strong> mít povolenou možnost \'enable-query\' ve Vašem serverovém souboru <strong>server.properties</strong>.',
    'enable_status_query' => 'Povolit stav query?',
    'status_query_help' => 'Pokud je toto povoleno, stránka se stavem zobrazí tento server jako online či offline.',
    'enable_player_list' => 'Povolit seznam hráčů?',
    'pre_1.7' => 'Minecraft verze starší jak 1.7?',
    'player_list_help' => 'Pokud je tato možnost zapnuta, stránka se stavem zobrazí seznam online hráčů.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'Toto je možnost query.port ve Vašem serverovém souboru server.properties, za předpokladu, že možnost enable-query ve stejném souboru je nastavena na true.',
    'server_name_required' => 'Zadejte prosím název serveru',
    'server_name_minimum' => 'Zajistěte, aby název Vašeho serveru byl minimálně 1 znak dlouhý.',
    'server_name_maximum' => 'Zajistěte, aby název Vašeho serveru byl maximálně 20 znaků dlouhý.',
    'server_address_required' => 'Zadejte prosím adresu serveru',
    'server_address_minimum' => 'Zajistěte, aby adresa Vašeho serveru byla minimálně 1 znak dlouhý.',
    'server_address_maximum' => 'Zajistěte, aby název Vašeho serveru byla maximálně 64 znak dlouhý.',
    'server_port_required' => 'Zadejte prosím port serveru',
    'server_port_minimum' => 'Zajistěte, aby port Vašeho serveru byl minimálně 2 znak dlouhý.',
    'server_port_maximum' => 'Zajistěte, aby port Vašeho serveru byl maximálně 5 znaků dlouhý.',
    'server_parent_required' => 'Vyberte prosím nadřazený server',
    'query_port_maximum' => 'Zajistěte prosím, aby Váš query port byl maximálně 5 znaků dlouhý.',
    'server_created' => 'Server úspěšně vytvořen.',
    'confirm_delete_server' => 'Jste si jist, že chcete smazat tento server?',
    'server_updated' => 'Server úspěšně aktualizován.',
    'editing_server' => 'Upravování serveru',
    'server_deleted' => 'Server úspěšně smazán.',
    'unable_to_delete_server' => 'Nepodařilo se smazat server.',
    'leave_port_empty_for_srv' => 'Pokud je port 25565, nebo pokud Vaše doména používá SRV záznam, tak toto pole můžete nechat prázdné.',
    'viewing_query_error' => 'Zobrazení Query chyby',
    'confirm_query_error_deletion' => 'Jste si jist, že chcete odstranit tuto Query chybu?',
    'no_query_errors' => 'Žádné Query chyby nezaznamenány.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nový banner',
    'purge_errors' => 'Vymazat chyby',
    'confirm_purge_errors' => 'Jste si jist, že chcete vymazat všechny chyby?',
    'mcassoc_help' => 'mcassoc je externí služba, která může být použita k ověření, zda uživatelé vlastní Minecraft účet, se kterým se zaregistrovali. Pro použití této možnosti se budete muset zaregistrovat pro získání sdíleného klíče <a href="https://mcassoc.lukegb.com/" target="_blank">zde</a>.',
    'mcassoc_key' => 'mcassoc sdílený klíč',
    'mcassoc_instance' => 'mcassoc případový klíč',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klikněte k vygenerování případového klíče</a>',
    'mcassoc_error' => 'Ujistěte se prosím, zda jste zadal Váš sdílený klíč správně, a následně správně vygeneroval případový klíč.',
    'updated_mcassoc_successfully' => 'nastavení mcassoc úspěšně aktualizováno.',
    'force_premium_accounts' => 'Vyžadovat prémiové účty?',
    'banner_background' => 'Pozadí banneru',
    'query_interval' => 'Query interval (in minutes, must be between 5 and 60)',
    'player_graphs' => 'Player Graphs',
    'player_count_cronjob_info' => 'You can set up a cron job to query your servers every {x} minutes with the following command:',
	
	// Modules
	'modules_installed_successfully' => 'Všechny nové moduly se nainstalovaly.',
	'enabled' => 'Zapnuto',
	'disabled' => 'Zakázáno',
	'enable' => 'Povolit',
	'disable' => 'Zakázat',
	'module_enabled' => 'Modul povolen.',
	'module_disabled' => 'Modul zakázán.',
	'author' => 'Author:',
	
	// Styles
	'templates' => 'Šablony',
	'template_outdated' => 'Zjistili jsme, že šablona je určena pro verze {x} , ale Vy používáte verzi {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktivní',
	'deactivate' => 'Deaktivovat',
	'activate' => 'Aktiovat',
	'warning_editing_default_template' => 'Varování! Doporučuje se, abyste neupravovali výchozí šablonu.',
	'images' => 'Obrázek',
	'upload_new_image' => 'Nahrát nový obrázek',
	'reset_background' => 'Resetovat pozadí',
	'install' => '<i class="fa fa-plus-circle"></i> nainstalován',
	'template_updated' => 'Šablona úspěšně aktualizována.',
	'default' => 'Výchozí',
	'make_default' => 'Nastavit jako výchozí',
	'default_template_set' => 'Výchozí šablona {x} byla úspěšně nastavena.', // Don't replace {x}
	'template_deactivated' => 'Šablona zakázána.',
	'template_activated' => 'Šablona aktivována.',
	'permissions' => 'Oprávnění',
	'setting_perms_for_x' => 'Nastavení oprávnění pro šablonu {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Jste si jist, že chcete smazat tuto šablonu?',
	'delete' => 'Smazat',
	'template_deleted_successfully' => 'Šablona úspěšně odstraněna.',

	// Users & groups
	'users' => 'Uživatel',
	'groups' => 'Skupiny',
	'group' => 'Skupina',
	'new_user' => '<i class="fa fa-plus-circle"></i> nový uživatel',
	'creating_new_user' => 'Vytvořit nového uživatele',
	'registered' => 'Registrován',
	'user_created' => 'Uživatel úspěšně vytvořen',
	'cant_delete_root_user' => 'Nemůžete smazat hlavního uživatele!',
	'cant_modify_root_user' => 'Nemůžete změnit skupinu pro hlavního uživatele!',
	'user_deleted' => 'Uživatel úspěšně smazán.',
	'confirm_user_deletion' => 'Opravdu chcete smazat uživatele <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Ověřit uživatele',
	'update_uuid' => 'Aktualizovat UUID',
	'update_mc_name' => 'Aktualizovat Minecraft jméno',
	'reset_password' => 'Obnovit heslo',
	'punish_user' => 'Potrestat uživatele',
	'delete_user' => 'Smazat uživatele',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Další akce',
	'disable_avatar' => 'Zakázat avatar',
	'select_user_group' => 'Musíte vybrat skupinu uživatele!',
	'uuid_max_32' => 'UUID musí být maximálně 32 znaků dlouhé.',
	'title_max_64' => 'Uživatelské jméno musí mít maximálně 64 znaků.',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Skupina ID',
	'name' => 'Název',
	'title' => 'Jméno uživatele',
	'new_group' => '<i class="fa fa-plus-circle"></i> nová skupina',
	'group_name_required' => 'Prosím zadejte název skupiny.',
	'group_name_minimum' => 'Zajistěte, aby název Vaší skupiny byl minimálně 2 znaky dlouhý.',
	'group_name_maximum' => 'Zajistětě, aby název Vaší skupiny byl maximálně 20 znaků dlouhý.',
	'creating_group' => 'Vytvořit novou skupinu',
	'group_html_maximum' => 'Zajistěte, aby Vaše HTML skupiny nebylo delší než 1024 znaků.',
	'group_html' => 'HTML skupiny',
	'group_html_lg' => 'Velké HTML skupiny',
	'group_username_colour' => 'Barva názvu skupiny',
	'group_staff' => 'Bude tato skupina pracovní?',
	'group_modcp' => 'Uvidí OP moderátora?',
	'group_admincp' => 'Uvidí OP administrátora?',
	'delete_group' => 'Smazat skupinu',
	'confirm_group_deletion' => 'Opravdu chcete smazat tuto skupinu: {x}?', // Don't replace {x}
	'group_not_exist' => 'Tato skupina neexistuje.',
	'secondary_groups' => 'Vedlejší skupiny',
	'secondary_groups_info' => 'Od těchto skupin získá uživatel jakákoliv další oprávnění',
	
	// General Admin language
	'task_successful' => 'Úkol úspěšný.',
	'invalid_action' => 'Neplatná akce.',
	'enable_night_mode' => 'Zapnout noční režim.',
	'disable_night_mode' => 'Vypnout noční režim.',
	'view_site' => 'Přejít na web',
	'signed_in_as_x' => 'Přihlášen jako {x}', // Don't replace {x}
	'warning' => 'Varování',

	// Maintenance
	'maintenance_mode' => 'Režim údržby',
	'maintenance_enabled' => 'Režim údržby je aktuálně zapnutý.',
	'enable_maintenance_mode' => 'Zapnout režim údržby?',
	'maintenance_mode_message' => 'Zpráva režimu údržby',
	'maintenance_message_max_1024' => 'Ujistěte se prosím, že Vaše zpráva o údržbě je maximálně 1024 zprávů dlouhá.',

	// Security
	'acp_logins' => 'Přihlášení správce',
	'please_select_logs' => 'Vyberte protokoly, které chcete zobrazit',
	'ip_address' => 'IP Adresa',
	'template_changes' => 'Změna šablony',
	'file_changed' => 'Soubor byl změněn',
	
	// Updates
	'update' => 'Aktualizace',
	'current_version_x' => 'Současná verze: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nová verze: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'K dispozici je nová aktualizace',
	'up_to_date' => 'Používáte nejnovější verzi!',
	'urgent' => 'Tato aktualizace je důležitá!',
	'changelog' => 'Seznam změn',
	'update_check_error' => 'Při kontrole aktualizace došlo k chybě:',
	'instructions' => 'Instrukce',
	'download' => 'Stáhnout',
	'install' => 'Instalovat',
	'install_confirm' => 'Ujistěte se prosím, že jste stáhl balíček a nejprve jste nahrál obsažené soubory!',

	// Widgets
	'widgets' => 'Widgety',
	'widget_enabled' => 'Widget zapnut.',
	'widget_disabled' => 'Widget vypnut.',
	'editing_widget_x' => 'Upravování widgetu {x}', // Don't replace {x}

	// File uploads
	'drag_files_here' => 'Soubory přetáhněte sem pro nahrání.',
	'invalid_file_type' => 'Špatný formát souboru!',
	'file_too_big' => 'Soubor je velmi velký! Tvůj soubor má {{filesize}} a limit je {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
