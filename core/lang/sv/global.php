<?php
/**
 * EVO Manager language file
 *
 * @version 3.1.x
 * @date 2023/11/28
 * @author The EVO Project Team
 *
 * @language English
 * @package modx
 * @subpackage manager
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
//$modx_textdir = 'rtl'; // uncomment this line for RTL languages
$modx_lang_attribute = 'sv'; // Manager HTML/XML Language Attribute see http://en.wikipedia.org/wiki/ISO_639-1
$modx_manager_charset = 'UTF-8';

$_lang["about_msg"] = 'Evolution CMS is a <a href="https://evo-cms.com/" target="_blank">PHP Application Framework and Content Management System</a> licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU GPL</a>.';
$_lang["about_title"] = 'Om MODX';

// days
$_lang["monday"] = 'Måndag';
$_lang["tuesday"] = 'Tisdag';
$_lang["wednesday"] = 'Onsdag';
$_lang["thursday"] = 'Torsdag';
$_lang["friday"] = 'Fredag';
$_lang["saturday"] = 'Lördag';
$_lang["sunday"] = 'Söndag';

// templates
$_lang["template"] = 'Mall';
$_lang["templates"] = 'Templates';
$_lang['templatecontroller'] = 'Template Controller';
$_lang["template_assignedtv_tab"] = 'Tilldelade mallvariabler';
$_lang["template_code"] = 'Mall-kod (html)';
$_lang["template_desc"] = 'Beskrivning';
$_lang["template_edit_tab"] = 'Redigera mall';
$_lang["template_inuse"] = 'This template is in use. Please set the documents using the template to another template. Documents using this template:';
$_lang["template_management_msg"] = 'Skapa en ny mall eller välja en redan befintlig för redigering.';
$_lang["template_msg"] = 'Skapa och redigera mallar här. Ändrade eller nya mallar kommer inte att synas på din webbplats cachade sidor, förrän cachen har tömts. Du kan däremot använda förhandsgranskningen för att se hur den uppdaterade mallen kommer att se ut.';
$_lang["template_name"] = 'Mallnamn';
$_lang["template_no_tv"] = 'Inga mallvariabler har tilldelats den här mallen än.';
$_lang["template_notassigned_tv"] = 'These Template Variables are available for assigning.';
$_lang["template_reset_all"] = 'Återställ alla sidor så de använder standardmallen';
$_lang["template_reset_specific"] = 'Återställ endast "%s" sidor';
$_lang["template_assigned_blade_file"] = 'Motsvarande blade-fil';
$_lang["template_create_blade_file"] = 'Skapa mallfil vid spara';
$_lang["template_selectable"] = 'Template selectable when creating or editing ressources.';
$_lang["template_title"] = 'Skapa/redigera mallar';
$_lang["template_tv_edit"] = 'Redigera mallvariablernas sorteringsordning';
$_lang["template_tv_edit_message"] = 'Dra för att ändra ordningen på mallvariablerna för denna mall.';
$_lang["template_tv_edit_title"] = 'Sorteringsordning för mallvariabler';
$_lang["template_tv_msg"] = 'Mallvariablerna som tilldelats den här mallen visas nedan.';

// tmplvars
$_lang["tv"] = 'Mallvariabel';
$_lang["tmplvar"] = 'Template Variable';
$_lang["tmplvars"] = 'Mallvariabler';
$_lang["tmplvar_access_msg"] = 'Välj de resursgrupper som ska kunna modifiera innehållet eller värdet av denna mallvariabel.';
$_lang["tmplvar_change_template_msg"] = 'Ändrar du denna mall, kommer sidan att ladda om alla mallvariabler. Alla icke sparade ändringar kommer att förloras.\n\nÄr du säker på att du vill ändra denna mall?';
$_lang["tmplvar_inuse"] = 'Följande resurser använder för närvarande denna mallvariabel. För att fortsätta med denna borttagningsoperation, klicka på knappen "Ta bort". Klicka på knappen "Avbryt" för att avbryta.';
$_lang["tmplvar_tmpl_access"] = 'Mallåtkomst';
$_lang["tmplvar_tmpl_access_msg"] = 'Välj de mallar som har behörighet att använda denna mallvariabel.';
$_lang["tmplvars_binding_msg"] = 'Detta fält tillåter bindning av datakällor med @-kommandon';
$_lang["tmplvars_caption"] = 'Rubrik';
$_lang["tmplvars_default"] = 'Standardvärde';
$_lang["tmplvars_description"] = 'Beskrivning';
$_lang["tmplvars_elements"] = 'Inmatningsvärden';
$_lang["tmplvars_inherited"] = 'Value inherited';
$_lang["tmplvars_management_msg"] = 'Hantera ytterligare innehållsfält (mallvariabler) för dina resurser.';
$_lang["tmplvars_msg"] = 'Lägga till och redigera mallvariabeln här. Den måste tilldelas till en eller flera mallar för att den ska kunna kommas åt från snippets och resurser.';
$_lang["tmplvars_name"] = 'Mallvariabelnamn';
$_lang["tmplvars_novars"] = 'Inga mallvariabler funna';
$_lang["tmplvars_rank"] = 'Sorteringsordning';
$_lang["tmplvars_rank_edit_message"] = 'Drag to reorder the Template Variables.';
$_lang["tmplvars_reset_params"] = 'Återställ parametrar';
$_lang["tmplvars_title"] = 'Skapa/redigera mallvariabel';
$_lang["tmplvars_type"] = 'Inmatningstyp';
$_lang["tmplvars_widget"] = 'Widget';
$_lang["tmplvars_widget_prop"] = 'Widget-inställningar';
$_lang["role_no_tv"] = 'No Variables have been assigned to this Role yet.';
$_lang["role_notassigned_tv"] = 'These Variables are available for assigning.';
$_lang["role_tv_msg"] = 'The Variables assigned to this Role are listed below.';
$_lang["tmplvar_roles_access_msg"] = 'Select the Roles that are allowed to access/process this Template Variable';

// snippets
$_lang["snippet"] = 'Snippet';
$_lang["snippets"] = 'Snippets';
$_lang["snippet_code"] = 'Snippet-kod (php)';
$_lang["snippet_desc"] = 'Beskrivning';
$_lang["snippet_execonsave"] = 'Kör snippeten efter att den sparats.';
$_lang["snippet_management_msg"] = 'Skapa nya snippets eller välja en redan befintlig för redigering.';
$_lang["snippet_msg"] = 'Skapa och redigera snippets. Kom ihåg att snippets är "rå" PHP-kod - om du vill att snippeten ska skriva något i mallen, så måste du returnera ett värde från snippeten.';
$_lang["snippet_name"] = 'Snippetnamn';
$_lang["snippet_properties"] = 'Standardegenskaper';
$_lang["snippet_title"] = 'Skapa/redigera snippet';

// chunks
$_lang["htmlsnippet"] = 'Chunk';
$_lang["htmlsnippets"] = 'Chunks';
$_lang["htmlsnippet_desc"] = 'Beskrivning';
$_lang["htmlsnippet_management_msg"] = 'Skapa nya chunks eller välja en redan befintlig för redigering.';
$_lang["htmlsnippet_msg"] = 'Skapa och redigera chunks. Kom ihåg att chunks är "rå" HTML-kod, så ingen PHP-kod kommer att tolkas.';
$_lang["htmlsnippet_name"] = 'Chunknamn';
$_lang["htmlsnippet_title"] = 'Skapa/redigera chunk';
$_lang["chunk"] = 'Chunk';
$_lang["chunk_code"] = 'Chunk-kod (html)';
$_lang["chunk_multiple_id"] = 'Fel: Flera chunks har samma unika ID.';
$_lang["chunk_no_exist"] = 'Chunken existerar inte.';

// plugins
$_lang["plugin"] = 'Plugin';
$_lang["plugins"] = 'Plugins';
$_lang["plugin_code"] = 'Plugin-kod (php)';
$_lang["plugin_config"] = 'Konfigurera plugin';
$_lang["plugin_desc"] = 'Beskrivning';
$_lang["plugin_disabled"] = 'Pluginen avstängd';
$_lang["plugin_event_msg"] = 'Välj de händelser som pluginen ska lyssna till.';
$_lang["plugin_management_msg"] = 'Skapa en ny plugin eller välja en redan befintlig för redigering.';
$_lang["plugin_msg"] = 'Skapa och redigera plugins. Plugins använder PHP-kod som körs när valda systemhändelser triggas.';
$_lang["plugin_name"] = 'Pluginnamn';
$_lang["plugin_priority"] = 'Redigera körordningen för plugins efter händelse';
$_lang["plugin_priority_instructions"] = 'Dra för att ändra ordningen på plugins under varje händelserubrik. Den plugin som ska köras först ska vara högst upp.';
$_lang["plugin_priority_title"] = 'Körordning för plugins';
$_lang["purge_plugin"] = 'Purge obsolete plugins';
$_lang["purge_plugin_confirm"] = 'Are you sure you want to purge obsolete plugins?';
$_lang["plugin_title"] = 'Skapa/redigera plugin';

// categories
$_lang["category"] = 'Category';
$_lang["categories"] = 'Categories';
$_lang["category_heading"] = 'Kategori';
$_lang["category_manager"] = 'Category Manager';
$_lang["category_management"] = 'Category management';
$_lang["category_msg"] = 'Visa och redigera alla element grupperade i kategorier.';

// file
$_lang["file_delete_file"] = 'Ta bort fil';
$_lang["file_delete_folder"] = 'Ta bort katalog';
$_lang["file_deleted"] = 'Klart!';
$_lang["file_download_file"] = 'Ladda ner fil';
$_lang["file_download_unzip"] = 'Zippa upp fil';
$_lang["file_folder_chmod_error"] = 'Kunde inte ändra behörigheterna. Du måste själv ändra behörigheterna utanför EVO.';
$_lang["file_folder_created"] = 'Katalog skapad!';
$_lang["file_folder_deleted"] = 'Katalogen togs bort!';
$_lang["file_folder_not_created"] = 'Kunde inte skapa katalog';
$_lang["file_folder_not_deleted"] = 'Kunde inte ta bort katalogen. Se till att den är tom innan borttagning sker.';
$_lang["file_not_deleted"] = 'Misslyckades!';
$_lang["file_not_saved"] = 'Kan inte spara filen. Kontrollera att målkatalogen är skrivbar!';
$_lang["file_saved"] = 'Filen uppdaterades utan problem!';
$_lang["file_unzip"] = 'Uppzippningen klar!';
$_lang["file_unzip_fail"] = 'Uppzippningen misslyckades!';

// files
$_lang["files"] = 'Files';
$_lang["files_files"] = 'Filer';
$_lang["files_access_denied"] = 'Åtkomst nekad!';
$_lang["files_data"] = 'Data';
$_lang["files_dir_listing"] = 'Kataloglista för:';
$_lang["files_directories"] = 'Kataloger';
$_lang["files_directory_is_empty"] = 'This directory is empty.';
$_lang["files_dirwritable"] = 'Är katalogen skrivbar?';
$_lang["files_editfile"] = 'Redigera fil';
$_lang["files_file_type"] = 'Filtyp: ';
$_lang["files_filename"] = 'Filnamn';
$_lang["files_fileoptions"] = 'Alternativ';
$_lang["files_filesize"] = 'Filstorlek';
$_lang["files_filetype_notok"] = 'Det är inte tillåtet att ladda upp en fil av den här typen!';
$_lang["files_management"] = 'Manage Files';
$_lang["files_management_no_permission"] = 'You do not have enough permissions to view or edit these files. Ask the administrator to grant you access to <b>%s</b>.';
$_lang["files_modified"] = 'Ändrad';
$_lang["files_top_level"] = 'Till toppnivån';
$_lang["files_up_level"] = 'Upp en nivå';
$_lang["files_upload_copyfailed"] = 'Kunde inte kopiera filen till målkatalogen - uppladdningen misslyckades!';
$_lang["files_upload_error"] = 'Fel';
$_lang["files_upload_error0"] = 'Ett fel uppstod med din uppladdning.';
$_lang["files_upload_error1"] = 'Filen du försöker ladda upp är för stor.';
$_lang["files_upload_error2"] = 'Filen du försöker ladda upp är för stor.';
$_lang["files_upload_error3"] = 'Filen du försöker ladda upp blev endast delvis uppladdad.';
$_lang["files_upload_error4"] = 'Du måste välja en fil att ladda upp.';
$_lang["files_upload_error5"] = 'Ett fel inträffade vid din uppladdning.';
$_lang["files_upload_inhibited_msg"] = '<b>Uppladdning nekad</b> - se till att uppladdningar stöds och att PHP har skrivrättigheter i den aktuella katalogen.';
$_lang["files_upload_ok"] = 'Filen laddades upp!';
$_lang["files_upload_permissions_error"] = 'Möjligt behörighetsproblem - den katalog som du vill ladda upp till behöver vara skrivbar för din webbserver.';
$_lang["files_uploadfile"] = 'Ladda upp fil';
$_lang["files_uploadfile_msg"] = 'Välj en fil att ladda upp:';
$_lang["files_uploading"] = 'Laddar upp <b>%s</b> till <b>%s/</b>';
$_lang["files_viewfile"] = 'Visa fil';

// modules
$_lang["module"] = 'Module';
$_lang["modules"] = 'Moduler';
$_lang["module_code"] = 'Modul-kod (php)';
$_lang["module_config"] = 'Modulinställningar';
$_lang["module_desc"] = 'Beskrivning';
$_lang["module_disabled"] = 'Modulen avstängd';
$_lang["module_edit_click_title"] = 'Klicka här för att redigera denna modul';
$_lang["module_group_access_msg"] = 'Välj de användargrupper som har tillstånd att köra den här modulen innifrån innehållshanteraren.';
$_lang["module_management"] = 'Hantera moduler';
$_lang["module_management_msg"] = 'Välj den modul du vill köra eller ändra. Klicka på ikonen i tabellen för att köra modulen. Klicka på modulnamnet för att redigera modulen.';
$_lang["module_msg"] = 'Lägg till och redigera moduler. En modul är en samling element (dvs plugins, snippets etc).';
$_lang["module_name"] = 'Modulnamn';
$_lang["module_resource_msg"] = 'Lägg till eller ta bort element som den här modulen är beroende av. Klicka på en av "Lägg till"-knapparna nedan för att lägga till ett nytt element.';
$_lang["module_resource_title"] = 'Modulberoenden';
$_lang["module_title"] = 'Skapa/redigera modul';
$_lang["module_viewdepend_msg"] = 'Se vilka element som den här modulen är beroende av. Klicka på knappen "Hantera beroenden" för att ändra beroendena.';

// elements
$_lang["element"] = 'Element';
$_lang["elements"] = 'Element';
$_lang["element_categories"] = 'Kombinerad vy';
$_lang["element_filter_msg"] = 'Type here to filter list';
$_lang["element_management"] = 'Hantera element';
$_lang["element_name"] = 'Elementnamn';
$_lang["element_selector_msg"] = 'Välj element i nedanstående lista och klicka på "Lägg till".';
$_lang["element_selector_title"] = 'Elementväljare';

// resource
$_lang["resource"] = 'Resurs';
$_lang["resource_alias"] = 'URL-alias';
$_lang["resource_alias_help"] = 'Ange ett URL-alias för att göra resursen tillgänglig som http://dinserver/alias. Detta fungerar endast om vänliga adresser är aktiverade i webbplatsens konfiguration.';
$_lang["resource_content"] = 'Resursinnehåll';
$_lang["resource_description"] = 'Beskrivning';
$_lang["resource_description_help"] = 'Ange en valfri beskrivning av denna resurs.';
$_lang["resource_duplicate"] = 'Duplicera resurs';
$_lang["resource_long_title_help"] = 'Ange en valfri längre titel för din resurs. Denna kan användas för automatiska header-taggar för sökmotorer, och beskriver kanske din resurs bättre.';
$_lang["resource_metatag_help"] = 'Välj de META-taggar och nyckelord som du vill knyta till den här resursen. Håll ner Ctrl för att välja flera nyckelord eller META-taggar.';
$_lang["resource_opt_contentdispo"] = 'Innehållsdisposition';
$_lang["resource_opt_contentdispo_help"] = 'Använd innehållsdispositionsfältet för att specificera hur den här resursen ska hanteras av webbläsaren. För filnedladdningar väljer du inställningen "Bifogad fil".';
$_lang["resource_opt_emptycache"] = 'Töm cachen';
$_lang["resource_opt_emptycache_help"] = 'Lämnar du detta fält markerat, kommer EVO att tömma sin cache när du sparar resursen. Det gör att dina besökare inte kommer att se en gammal version av resursen.';
$_lang["resource_opt_folder"] = 'Behållare';
$_lang["resource_opt_folder_help"] = 'Markera här om resursen ska fungera som en behållare för andra resurser. En "behållare" är som en mapp, men den kan också ha ett eget innehåll.';
$_lang["resource_opt_menu_index"] = 'Menyindex';
$_lang["resource_opt_menu_index_help"] = 'Menyindex är ett fält som kan användas för att kontrollera sorteringen av resurser. Speciellt i snippets som bygger menyer. Du kan också använda det för andra ändamål i dina snippets.';
$_lang["resource_opt_menu_title"] = 'Menytitel';
$_lang["resource_opt_menu_title_help"] = 'Menytitel är ett valfritt fält som används för att visa en kort titel i menysnippets eller moduler.';
$_lang["resource_opt_published"] = 'Publicerad';
$_lang["resource_opt_published_help"] = 'Markera detta fält om resursen ska publiceras direkt när den sparas.';
$_lang["resource_opt_richtext"] = 'Richtext';
$_lang["resource_opt_richtext_help"] = 'Lämna denna ikryssad för att använda en richtext-editor vid resursredigering. Om dina resurser innehåller javascript eller formulär - avmarkera denna för att redigera i HTML-läge, så editorn inte stökar till i dina resurser.';
$_lang["resource_opt_show_menu"] = 'Visa i meny';
$_lang["resource_opt_show_menu_help"] = 'Välj den här inställningen för att visa resursen i en webbmeny. Notera att vissa menybyggarsnippets kan välja att strunta i den här inställningen.';
$_lang["resource_opt_trackvisit_help"] = 'Logga varje besökares besök på den här sidan';
$_lang["resource_overview"] = 'Resursöversikt';
$_lang["resource_parent"] = 'Resursförälder';
$_lang["resource_parent_help"] = 'Klicka på ikonen för att aktivera val av förälder för denna resurs. Klicka sedan på en resurs i webbplatsträdet för att ange den som ny förälder.';
$_lang["resource_permissions_error"] = 'Tilldela denna resurs till minst en resursgrupp som du kan komma åt.';
$_lang["resource_setting"] = 'Resursinställningar';
$_lang["resource_summary"] = 'Sammanfattning';
$_lang["resource_summary_help"] = 'Skriv en kort sammanfattning av resursen';
$_lang["resource_title"] = 'Titel';
$_lang["resource_title_help"] = 'Skriv namnet/titeln på resursen här. Undvik omvända snedstreck i namnet.';
$_lang["resource_to_be_moved"] = 'Resursen som ska flyttas';
$_lang["resource_type"] = 'Resurstyp';
$_lang["resource_type_message"] = 'Webblänkar refererar till resurser på internet, inklusive en annan EVO-resurs, en extern sida, en bild eller en annan fil på internet. Webblänkar ska ha internetmediatypen "text/html" och innehållsdispositionen "inline".';
$_lang["resource_type_weblink"] = 'Webblänk';
$_lang["resource_type_webpage"] = 'Webbsida';
$_lang["resource_weblink_help"] = 'Ange adressen till objektet du vill referera till med denna webblänk.';
$_lang["resources_in_container"] = 'resurser i den här behållaren';
$_lang["resources_in_container_no"] = 'Den här behållaren har inga underresurser.';

// role
$_lang["role"] = 'Roll';
$_lang["role_about"] = 'Visa Om-sidan';
$_lang["role_actionok"] = 'Visa "Åtgärd utförd"-sidan';
$_lang["role_assets_images"] = 'Manage assets/images';
$_lang["role_assets_files"] = 'Manage assets/files';
$_lang["role_bk_manager"] = 'Använda hanteraren för säkerhetskopiering';
$_lang["role_cache_refresh"] = 'Tömma webbplatsens cache';
$_lang["role_category_manager"] = 'Use the Category Manager';
$_lang["role_change_password"] = 'Byta lösenord';
$_lang["role_change_resourcetype"] = 'Förändring resurstyp';
$_lang["role_chunk_management"] = 'Chunk-hantering';
$_lang["role_config_management"] = 'Konfigurationshantering';
$_lang["role_content_management"] = 'Innehållshantering';
$_lang["role_create_chunk"] = 'Skapa nya chunks';
$_lang["role_create_doc"] = 'Skapa nya resurser';
$_lang["role_create_plugin"] = 'Skapa nya plugins';
$_lang["role_create_snippet"] = 'Skapa nya snippets';
$_lang["role_create_template"] = 'Skapa nya mallar';
$_lang["role_credits"] = 'Visa erkännandesidan';
$_lang["role_delete_chunk"] = 'Ta bort chunks';
$_lang["role_delete_doc"] = 'Ta bort resurser';
$_lang["role_delete_eventlog"] = 'Ta bort händelselogg';
$_lang["role_delete_module"] = 'Ta bort moduler';
$_lang["role_delete_plugin"] = 'Ta bort plugins';
$_lang["role_delete_role"] = 'Ta bort roller';
$_lang["role_delete_snippet"] = 'Ta bort snippets';
$_lang["role_delete_template"] = 'Ta bort mallar';
$_lang["role_delete_user"] = 'Ta bort användare';
$_lang["role_delete_web_user"] = 'Ta bort webbanvändare';
$_lang["role_edit_chunk"] = 'Redigera chunks';
$_lang["role_edit_doc"] = 'Redigera resurser';
$_lang["role_edit_doc_metatags"] = 'Redigera resursers META-taggar och nyckelord';
$_lang["role_edit_module"] = 'Redigera moduler';
$_lang["role_edit_plugin"] = 'Redigera plugins';
$_lang["role_edit_role"] = 'Redigera roller';
$_lang["role_edit_settings"] = 'Ändra webbplatsens inställningar';
$_lang["role_edit_snippet"] = 'Redigera snippets';
$_lang["role_edit_template"] = 'Redigera mallar';
$_lang["role_edit_user"] = 'Redigera användare';
$_lang["role_edit_web_user"] = 'Redigera webbanvändare';
$_lang["role_empty_trash"] = 'Permanent radera borttagna resurser';
$_lang["role_errors"] = 'Visa feldialog';
$_lang["role_eventlog_management"] = 'Hantera händelseloggar';
$_lang["role_export_static"] = 'Exportera statisk HTML';
$_lang["role_file_management"] = 'File Management';
$_lang["role_file_manager"] = 'Använda filhanteraren';
$_lang["role_frames"] = 'Ladda innehållshanteraren';
$_lang["role_help"] = 'Visa hjälpsidor';
$_lang["role_home"] = 'Ladda introduktionssidan';
$_lang["role_import_static"] = 'Importera HTML';
$_lang["role_logout"] = 'Logga ut från innehållshanteraren';
$_lang["role_list_module"] = 'List Module';
$_lang["role_manage_metatags"] = 'Hantera webbplatsens META-taggar och nyckelord';
$_lang["role_management_msg"] = 'Skapa en ny roll eller välja en redan befintlig för redigering.';
$_lang["role_management_title"] = 'Roller';
$_lang["role_messages"] = 'Läsa och skicka meddelanden';
$_lang["role_module_management"] = 'Hantera moduler';
$_lang["role_name"] = 'Rollnamn';
$_lang["role_new_module"] = 'Skapa ny modul';
$_lang["role_new_role"] = 'Skapa nya roller';
$_lang["role_new_user"] = 'Skapa nya användare';
$_lang["role_new_web_user"] = 'Skapa nya webbanvändare';
$_lang["role_plugin_management"] = 'Hantera plugins';
$_lang["role_publish_doc"] = 'Publicera resurser';
$_lang["role_remove_locks"] = 'Ta bort lås';
$_lang["role_role_management"] = 'Roller';
$_lang["role_run_module"] = 'Kör modul';
$_lang["role_save_chunk"] = 'Spara chunks';
$_lang["role_save_doc"] = 'Spara resurser';
$_lang["role_save_module"] = 'Spara moduler';
$_lang["role_save_password"] = 'Spara lösenord';
$_lang["role_save_plugin"] = 'Spara plugin';
$_lang["role_save_role"] = 'Spara roller';
$_lang["role_save_snippet"] = 'Spara snippets';
$_lang["role_save_template"] = 'Spara mallar';
$_lang["role_save_user"] = 'Spara användare';
$_lang["role_save_web_user"] = 'Spara webbanvändare';
$_lang["role_snippet_management"] = 'Snippethantering';
$_lang["role_template_management"] = 'Mallhantering';
$_lang["role_title"] = 'Skapa/redigera roll';
$_lang["role_udperms"] = 'Behörighetshantering';
$_lang["role_user_management"] = 'Användarhantering';
$_lang["role_view_docdata"] = 'Visa resursdata';
$_lang["role_view_eventlog"] = 'Visa händelselogg';
$_lang["role_view_logs"] = 'Visa systemloggar';
$_lang["role_view_unpublished"] = 'Visa opublicerade resurser';
$_lang["role_web_access_persmissions"] = 'Rättigheter för webbåtkomst';
$_lang["role_web_user_management"] = 'Hantera webbanvändare';

// user
$_lang["user"] = 'Användare';
$_lang["users"] = 'Säkerhet';
$_lang["user_block"] = 'Blockerad';
$_lang["user_blockedafter"] = 'Blockerad efter';
$_lang["user_blockeduntil"] = 'Blockerad till';
$_lang["user_changeddata"] = 'Dina användardata har ändrats. Var snäll och logga in igen.';
$_lang["user_country"] = 'Land';
$_lang["user_dob"] = 'Födelsedatum';
$_lang["user_doesnt_exist"] = 'Användaren finns inte';
$_lang["user_edit_self_msg"] = '<b>Efter att ha sparat kan du behöva logga ut och sedan logga in igen för att dina inställningar ska uppdateras fullständigt.</b> Nya lösenord kommer att skickas till din e-postadress eller visas på skärmen.';
$_lang["user_email"] = 'E-postadress';
$_lang["user_failedlogincount"] = 'Misslyckade inloggningar';
$_lang["user_fax"] = 'Fax';
$_lang["user_female"] = 'Kvinna';
$_lang["user_full_name"] = 'Fullständigt namn';
$_lang["user_first_name"] = 'First name';
$_lang["user_last_name"] = 'Last Name';
$_lang["user_middle_name"] = 'Middle Name';
$_lang["user_gender"] = 'Kön';
$_lang["user_is_blocked"] = 'Denna användare är blockerad!';
$_lang["user_logincount"] = 'Antal inloggningar';
$_lang["user_male"] = 'Man';
$_lang["user_management_msg"] = 'Skapa nya användare av innehållshanteraren eller välj en redan befintlig för redigering. Dessa användare kan logga in i innehållshanteraren.';
$_lang["user_management_title"] = 'Användare av hanteraren';
$_lang["user_mobile"] = 'Mobilnummer';
$_lang["user_phone"] = 'Telefonnummer';
$_lang["user_photo"] = 'Användarfoto';
$_lang["user_photo_message"] = 'Skriv in sökvägen till bilden för den här användaren, eller använd "Infoga"-knappen för att öppna ett nytt fönster där du kan välja en bild och ladda upp den till servern.';
$_lang["user_prevlogin"] = 'Senaste inloggning';
$_lang["user_role"] = 'Användarens roll';
$_lang["no_user_role"] = 'No user role';
$_lang["user_state"] = 'Kommun';
$_lang["user_title"] = 'Skapa/redigera användare';
$_lang["user_upload_message"] = ' Om du vill hindra denna användare från att ladda upp några filtyper i den här kategorin, se då till att "Använd systemets konfigurationsinställning" inte är förbockad och lämna fältet blankt.';
$_lang["user_use_config"] = 'Använd systemets konfigurationsinställning';
$_lang["user_verification"] = 'User is verified';
$_lang["user_zip"] = 'Postnummer';
$_lang["username"] = 'Användarnamn';
$_lang["username_unique"] = 'User name is already in use!';
$_lang["user_street"] = 'Street';
$_lang["user_city"] = 'City';
$_lang["user_other"] = 'Other';

// add
$_lang["add"] = 'Lägg till';
$_lang["add_chunk"] = 'Lägg till chunk';
$_lang["add_doc"] = 'Lägg till resurs';
$_lang["add_folder"] = 'Ny katalog';
$_lang["add_plugin"] = 'Lägg till plugin';
$_lang["add_resource"] = 'Ny resurs';
$_lang["add_snippet"] = 'Lägg till snippet';
$_lang["add_tag"] = 'Lägg till tagg';
$_lang["add_template"] = 'Lägg till mall';
$_lang["add_tv"] = 'Lägg till mallvariabel';
$_lang["add_weblink"] = 'Ny webblänk';

// new
$_lang["new_category"] = 'Ny kategori';
$_lang["new_file_permissions_message"] = 'När en ny fil laddas upp med Filhanteraren, kommer Filhanteraren att försöka ändra filbehörigheterna till dom som anges i denna inställning. Det här kanske inte fungerar på alla system, t&nbsp;ex IIS, i vilket fall du blir tvungen att ändra behörigheterna manuellt.';
$_lang["new_file_permissions_title"] = 'Behörigheter för nya filer';
$_lang["new_folder_permissions_message"] = 'När en ny katalog skapas i Filhanteraren, kommer Filhanteraren att försöka ändra katalogbehörigheterna till dom som anges i denna inställning. Det här kanske inte fungerar på alla system, t&nbsp;ex IIS, i vilket fall du blir tvungen att ändra behörigheterna manuellt.';
$_lang["new_folder_permissions_title"] = 'Behörigheter för nya mappar';
$_lang["new_permission"] = 'New Permission';
$_lang["new_htmlsnippet"] = 'Ny chunk';
$_lang["new_keyword"] = 'Lägg till nytt nyckelord:';
$_lang["new_module"] = 'Ny modul';
$_lang["new_parent"] = 'Ny förälder';
$_lang["new_plugin"] = 'Ny plugin';
$_lang["new_role"] = 'Skapa en ny roll';
$_lang["new_snippet"] = 'Ny snippet';
$_lang["new_template"] = 'Ny mall';
$_lang["new_tmplvars"] = 'Ny mallvariabel';
$_lang["new_user"] = 'Ny användare';
$_lang["new_web_user"] = 'Ny webbanvändare';
$_lang["new_resource"] = 'Ny resurs';

// manage
$_lang["manage_categories"] = 'Manage Categories';
$_lang["manage_depends"] = 'Hantera beroenden';
$_lang["manage_files"] = 'Hantera filer';
$_lang["manage_htmlsnippets"] = 'Manage Chunks';
$_lang["manage_metatags"] = 'Hantera META-taggar och nyckelord';
$_lang["manage_modules"] = 'Hantera moduler';
$_lang["manage_plugins"] = 'Manage Plugins';
$_lang["manage_snippets"] = 'Manage Snippets';
$_lang["manage_templates"] = 'Manage Templates';
$_lang["manage_documents"] = 'Manage Documents';
$_lang["manage_permission"] = 'Manage Permissions';

// move
$_lang["move"] = 'Flytta';
$_lang["move_resource"] = 'Flytta resurs';
$_lang["move_resource_message"] = 'Flytta en resurs och alla dess underresurser genom att välja en ny förälder i webbplatsträdet. Om du väljer en resurs som inte redan är en behållare, kommer den att ändras till en. Klicka på den nya föräldern i trädet.';
$_lang["move_resource_new_parent"] = 'Välj en ny förälder i webbplatsträdet.';
$_lang["move_resource_title"] = 'Flytta resurs';

$_lang["access_permissions"] = 'Åtkomstinställningar';
$_lang["access_permission_denied"] = 'Du har inte behörighet för denna resurs.';
$_lang["access_permission_parent_denied"] = 'Du har inte behörighet att skapa en resurs här eller att flytta en hit! Välj en annan plats.';
$_lang["access_permissions_add_resource_group"] = 'Skapa en ny resursgrupp';
$_lang["access_permissions_add_user_group"] = 'Skapa en ny användargrupp';
$_lang["access_permissions_docs_message"] = 'Välj vilka resursgrupper denna resurs ska tillhöra:';
$_lang["access_permissions_group_link"] = 'Skapa en ny grupplänk';
$_lang["access_permissions_introtext"] = 'Hantera de användargrupper och resursgrupper som används för åtkomstkontroll. För att lägga till en användare i en grupp - redigera användaren och välj de grupper som han/hon ska vara medlem i. För att lägga till en resurs till en användargrupp - redigera resursen och välj de grupper som den ska tillhöra.';
$_lang["access_permissions_link_to_group"] = 'till resursgrupp';
$_lang["access_permissions_context"] = 'in context';
$_lang["access_permissions_link_user_group"] = 'Länka användargrupp';
$_lang["access_permissions_links"] = 'Användar/resursgruppslänkar';
$_lang["access_permissions_links_tab"] = 'Ange vilka användargrupper som har behörighet för de olika resursgrupperna (dvs kan redigera eller skapa underresurser). För att länka en resursgrupp till en användargrupp - välj de lämpliga grupperna från rullgardinsmenyerna och klicka på "Skicka". För att ta bort länken för en grupp - klicka på "Ta bort". Detta tar genast bort länken.';
$_lang["access_permissions_no_resources_in_group"] = 'Inga.';
$_lang["access_permissions_no_users_in_group"] = 'Inga.';
$_lang["access_permissions_off"] = '<span class="warning">Åtkomstinställningar är inte aktiverade.</span> Detta betyder att förändringar som görs här inte kommer att ha någon effekt förrän åtkomstinställningarna är aktiverade i dina inställningar.';
$_lang["access_permissions_resource_groups"] = 'Resursgrupper';
$_lang["access_permissions_resources_in_group"] = '<b>Resurser i gruppen:</b> ';
$_lang["access_permissions_resources_tab"] = 'Se vilka resursgrupper som har skapats. Det går också att skapa nya eller byta namn på grupper samt se vilka resurser som tillhör de olika grupperna (håll musen över resursens ID för att se dess namn). För att lägga till eller ta bort en resurs från en grupp - redigera resursen direkt.';
$_lang["access_permissions_user_toggle"] = 'Toggle access permissions';
$_lang["access_permissions_user_groups"] = 'Användargrupper';
$_lang["access_permissions_user_message"] = 'Ange vilka användargrupper denna användare ska tillhöra:';
$_lang["access_permissions_users_in_group"] = 'Användare i gruppen:';
$_lang["access_permissions_users_tab"] = 'Se de användargrupper som har skapats. Du kan också skapa nya, byta namn på och ta bort grupper samt se vilka användare som är medlemmar i de olika grupperna. För att lägga till eller ta bort en användare från en grupp - redigera användaren direkt. Administratörer (som har roll-ID 1) har alltid tillgång till alla resurser, så de behöver inte läggas till i några grupper.';

$_lang["users_list"] = 'Users list';
$_lang["documents_list"] = 'Resources list';

$_lang["account_email"] = 'Kontots e-post';
$_lang["actioncomplete"] = '<b>Åtgärden har utförts!</b><br /> - Vänta medan MODX rensar upp.';
$_lang["activity_message"] = 'Denna lista visar de senaste resurserna som du skapat eller redigerat.';
$_lang["activity_title"] = 'Nyligen skapade/redigerade resurser';

$_lang["administrator_role_message"] = 'Denna roll kan inte redigeras eller tas bort.';
$_lang["administrators"] = 'Administratörer';
$_lang["after_saving"] = 'Efter sparande';
$_lang["alert_delete_self"] = 'Du kan inte ta bort dig själv!';
$_lang["alias"] = 'URL-alias';
$_lang["all_doc_groups"] = 'Alla resursgrupper (Offentlig)';
$_lang["all_events"] = 'Alla händelser';
$_lang["all_usr_groups"] = 'Alla användargrupper (Offentlig)';
$_lang["allow_mgr_access"] = 'Åtkomst till hanterarens gränssnitt';
$_lang["allow_mgr_access_message"] = 'Använd den här inställningen för att tillåta eller förbjuda åtkomst till hanterarens gränssnitt.<br /><b>Notera: Om den här inställningen är satt till "Nej" kommer användaren att omdirigeras till inloggningssidan eller webbplatsens startsida.</b>';
$_lang["already_deleted"] = 'har redan tagits bort.';
$_lang["attachment"] = 'Bifogad fil';
$_lang["author_infos"] = 'Author information';
$_lang["automatic_alias_message"] = 'Välj "Ja" för att låta systemet automatiskt skapa ett URL-alias baserat på resursens titel när den sparas.';
$_lang["automatic_alias_title"] = 'Generera URL-alias automatiskt';
$_lang["backup"] = 'Säkerhetskopiera';
$_lang["bk_manager"] = 'Säkerhetskopiering';
$_lang["block_message"] = 'Denna användare kommer att blockeras när användarens data sparats!';
$_lang["blocked_minutes_message"] = 'Ange hur många minuter en användare blir blockerad efter att ha gjort för många misslyckade inloggningsförsök. Ange värdet som ett tal (inga kommatecken, mellanslag etc).';
$_lang["blocked_minutes_title"] = 'Blockeringstid';
$_lang["cache_files_deleted"] = 'Följande filer togs bort:';
$_lang["cancel"] = 'Avbryt';
$_lang["captcha_code"] = 'Säkerhetskod';
$_lang["captcha_message"] = 'Använd detta för att stärka säkerheten genom att låta användare skriva in en säkerhetskod som är oläsbar för maskiner (och scriptkidsens hackingscript).';
$_lang["captcha_title"] = 'Använd CAPTCHA-koder';
$_lang["captcha_words_default"] = 'MODX,Access,Better,BitCode,Chunk,Cache,Desc,Design,Excell,Enjoy,URLs,TechView,Gerald,Griff,Humphrey,Holiday,Intel,Integration,Joystick,Join(),Oscope,Genetic,Light,Likeness,Marit,Maaike,Niche,Netherlands,Ordinance,Oscillo,Parser,Phusion,Query,Question,Regalia,Righteous,Snippet,Sentinel,Template,Thespian,Unity,Enterprise,Verily,Tattoo,Veri,Website,WideWeb,Yap,Yellow,Zebra,Zygote';
$_lang["captcha_words_message"] = 'Skriv en lista med CAPTCHA-ord som används om CAPTCHA är påslaget. Separera orden med kommatecken. Detta textfält är begränsat till 255 tecken.';
$_lang["captcha_words_title"] = 'CAPTCHA-ord';

$_lang["cfg_base_path"] = 'MODX_BASE_PATH';
$_lang["cfg_base_url"] = 'MODX_BASE_URL';
$_lang["cfg_manager_path"] = 'MODX_MANAGER_PATH';
$_lang["cfg_manager_url"] = 'MODX_MANAGER_URL';
$_lang["cfg_site_url"] = 'MODX_SITE_URL';

$_lang["change_name"] = 'Ändra namn';
$_lang["change_password"] = 'Byt lösenord';
$_lang["change_password_confirm"] = 'Bekräfta lösenord';
$_lang["change_password_message"] = 'Skriv in ditt nya lösenord, och gör det sedan en gång till för att bekräfta. Ditt lösenord måste vara mellan 6 och 15 tecken långt.';
$_lang["change_password_new"] = 'Nytt lösenord';
$_lang["charset_message"] = 'Välj den teckenkodning som ska användas som standard för systemvariabeln [(modx_charset)]. Det här påverkar inte hanteraren.';
$_lang["charset_title"] = 'Teckenkodning';

$_lang["cleaningup"] = 'Rensar upp';
$_lang["clean_uploaded_filename"] = 'Använd transliteration vid filuppladdningar';
$_lang["clean_uploaded_filename_message"] = 'Använd standard- eller transaliasinställningar för filnamnet för att städa bort specialtecken, men bevara punkter, i uppladdade filers namn.';
$_lang["clear_log"] = 'Rensa logg';
$_lang["click_to_context"] = 'Klicka för att komma åt snabbmenyn';
$_lang["click_to_edit_title"] = 'Klicka här för att redigera den här posten';
$_lang["click_to_view_details"] = 'Klicka här för att se detaljer';
$_lang["close"] = 'Stäng';
$_lang["code"] = 'Kod';
$_lang["collapse_tree"] = 'Fäll ihop webbplatsträd';
$_lang["comment"] = 'Kommentar';

$_lang["configcheck_admin"] = 'Kontakta en systemadministratör och varna om detta meddelande!';
$_lang["configcheck_cache"] = 'cache directory is not writable';
$_lang["configcheck_cache_msg"] = 'Evolution CMS cannot write to the cache directory. Evolution CMS will still function as expected, but no caching will take place. To solve this, make the \'cache\' directory writable.';
$_lang["configcheck_configinc"] = 'Konfigurationsfilen är fortfarande skrivbar';
$_lang["configcheck_configinc_msg"] = 'Elaka människor kan orsaka stora skador på din webbplats och allt som hör till den. <strong>På riktigt.</strong> Se till att konfigurationsfilen (/[+MGR_DIR+]/includes/config.inc.php) blir skrivskyddad!';
$_lang["configcheck_default_msg"] = 'En ospecificerad varning hittades, vilket är konstigt.';
$_lang["configcheck_errorpage_unavailable"] = 'Felsidan för din webbplats är inte tillgänglig.';
$_lang["configcheck_errorpage_unavailable_msg"] = 'Detta betyder att din felsida inte är tillgänglig för vanliga användare eller att den inte existerar. Det här kan leda till att ett tillstånd med upprepande loopar skapas och ger upphov till att många fel rapporteras i webbplatsens loggar. Kontrollera att inga webbanvändargrupper är anslutna till sidan.';
$_lang["configcheck_errorpage_unpublished"] = 'Felsidan för din webbplats är inte publicerad eller existerar inte.';
$_lang["configcheck_errorpage_unpublished_msg"] = 'Detta betyder att din felsida inte är tillgänglig för allmänheten. Publicera sidan eller kontrollera under Verktyg &gt; Konfiguration att den angivna sidan är en existerande resurs i webbplatsens resursträd.';
$_lang["configcheck_filemanager_path"] = 'The currently set <a href="index.php?a=17&tab=4">File Manager path</a> seems incorrect.';
$_lang["configcheck_filemanager_path_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_hide_warning"] = '<a href="javascript:hideConfigCheckWarning(\'%s\');"><em>Visa inte detta igen.</em></a>';
$_lang["configcheck_images"] = 'Bildkatalogen är inte skrivbar';
$_lang["configcheck_images_msg"] = 'Bildkatalogen är inte skrivbar eller finns inte. Detta betyder att bildhanteringsfunktionerna i editorn inte kommer att fungera!';
$_lang["configcheck_installer"] = 'Installationsprogrammet är fortfarande kvar';
$_lang["configcheck_installer_msg"] = 'Katalogen /install innehåller installationsprogrammet för EVO. Tänk vad som kan hända om en elaka människor hittar katalogen och kör installationen! De kommer förhoppningsvis inte så långt, eftersom databasen kräver inloggningsuppgifter, men det är ändå bäst att ta bort katalogen från servern.';
$_lang["configcheck_lang_difference"] = 'Fel antal fraser i språkfilen';
$_lang["configcheck_lang_difference_msg"] = 'Språket som för närvarande är valt har ett annat antal fraser än standardspråket. Detta behöver inte vara ett problem, men kan betyda att språkfilen behöver uppdateras.';
$_lang["configcheck_notok"] = 'En eller flera konfigurationsdetaljer är inte korrekta:';
$_lang["configcheck_ok"] = 'Kontrollen utförd OK - inga varningar att rapportera.';
$_lang["configcheck_php_gdzip"] = 'GD och/eller Zip PHP-tillägg kunde inte hittas';
$_lang["configcheck_php_gdzip_msg"] = 'EVO behöver tilläggen GD och Zip aktiverade för PHP. Även om EVO kommer att fungera utan dom, så kommer du inte att kunna utnyttja alla möjligheterna i den inbyggda filhanteraren, bildredigeraren eller captcha för inloggningar.';
$_lang["configcheck_rb_base_dir"] = 'The currently set <a href="index.php?a=17&tab=5">File base path</a> seems incorrect.';
$_lang["configcheck_rb_base_dir_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_register_globals"] = 'register_globals är satt till ON i din konfigurationsfil för php - php.ini';
$_lang["configcheck_register_globals_msg"] = 'Denna konfiguration gör din webbplats betydligt mer sårbar för så kallade serveröverskridande scriptattacker (Cross Site Scripting eller XSS). Du bör ta kontakt med din webbhost och ta reda på vad du kan göra för att stänga av den här inställningen.';
$_lang["configcheck_title"] = 'Konfigurationskontroll';
$_lang["configcheck_templateswitcher_present"] = 'Pluginen TemplateSwitcher upptäckt';
$_lang["configcheck_templateswitcher_present_delete"] = '<a href="javascript:deleteTemplateSwitcher();">Ta bort TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_disable"] = '<a href="javascript:disableTemplateSwitcher();">Inaktivera TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_msg"] = 'Pluginen TemplateSwitcher har funnits orsaka cachnings- och preestandaproblem och bör endast användas om den funktionaliteten krävs på din webbplats.';
$_lang["configcheck_unauthorizedpage_unavailable"] = 'Din webbplats otillåten-sida är inte publicerad eller existerar inte.';
$_lang["configcheck_unauthorizedpage_unavailable_msg"] = 'Detta betyder att din webbplats otillåten-sida inte är tillgänglig för vanliga användare eller att den inte existerar. Det här kan leda till att ett tillstånd med upprepande loopar skapas och ger upphov till att många fel rapporteras i webbplatsens loggar. Kontrollera att inga webbanvändargrupper är knutna till sidan.';
$_lang["configcheck_unauthorizedpage_unpublished"] = 'Den otillåten-sida som angetts i inställningarna är inte publicerad.';
$_lang["configcheck_unauthorizedpage_unpublished_msg"] = 'Detta betyder att din otillåten-sida är oåtkomlig för allmänheten. Publicera sidan eller kontrollera under Verktyg &gt; Konfiguration att den angivna sidan är en existerande resurs i webbplatsens resursträd.';
$_lang["configcheck_validate_referer"] = 'Säkerhetsvarning: validering av HTTP-header';
$_lang["configcheck_validate_referer_msg"] = 'Konfigurationsinställningen <strong>Kontrollera HTTP_REFERER-headers?</strong> är inaktiverad. Vi rekommenderar att den aktiveras. <a href="index.php?a=17">Gå till konfigurationssidan</a>.';
$_lang["configcheck_warning"] = 'Konfigurationsvarning: ';
$_lang["configcheck_what"] = 'Vad betyder det här?';

$_lang["safe_mode_warning"] = 'Safe mode is enabled. Manager functionality is limited.';

$_lang["confirm_block"] = 'Är du säker på att du vill blockera denna användare?';
$_lang["confirm_delete_category"] = 'Are you sure you want to delete this category?';
$_lang["confirm_delete_eventlog"] = 'Är du säker på att du vill ta bort den här händelseloggen?';
$_lang["confirm_delete_file"] = 'Är du säker på att du vill ta bort filen?\n\nDetta kan göra att din webbplats slutar fungera! Ta endast bort denna fil om du vet säkert att du inte förstör något.';
$_lang["confirm_delete_group"] = 'Are you sure you want to delete this group?';
$_lang["confirm_delete_htmlsnippet"] = 'Är du säker på att du vill ta bort denna chunk?';
$_lang["confirm_delete_keywords"] = 'Är du säker på att du vill ta bort dessa nyckelord?';
$_lang["confirm_delete_module"] = 'Är du säker på att du vill ta bort den här modulen?';
$_lang["confirm_delete_plugin"] = 'Är du säker på att du vill ta bort denna plugin?';
$_lang["confirm_delete_record"] = 'Är du säker på att du vill ta bort de valda posterna?';
$_lang["confirm_delete_resource"] = 'Är du säker på att du vill ta bort denna resurs?\nEventuella underresurser kommer också att tas bort.';
$_lang["confirm_delete_role"] = 'Är du säker på att du vill ta bort denna roll?';
$_lang["confirm_delete_snippet"] = 'Är du säker på att du vill ta bort denna snippet?';
$_lang["confirm_delete_tags"] = 'Är du säker på att du vill ta bort de valda META-taggarna?';
$_lang["confirm_delete_template"] = 'Vill du verkligen ta bort denna mall?';
$_lang["confirm_delete_tmplvars"] = 'Är du säker på att du vill ta bort denna mallvariabel och alla dess lagrade värden?';
$_lang["confirm_delete_user"] = 'Vill du verkligen ta bort denna användare?';

$_lang["delete_yourself"] = 'You can\'t delete yourself';
$_lang["delete_last_admin"] = 'You can\'t delete last admin user';

$_lang["confirm_delete_permission"] = 'Are you sure you want to delete this Permission?';
$_lang["confirm_duplicate_record"] = 'Är du säker på att du vill duplicera denna post?';
$_lang["confirm_empty_trash"] = 'Detta kommer att permanent radera ALLA borttagna resurser!\n\nFortsätt?';
$_lang["confirm_load_depends"] = 'Är du säker på att du vill ladda skärmen "Hantera beroenden" utan att spara dina ändringar?';
$_lang["confirm_name_change"] = 'Ändring av användarnamnet kan påverka andra program som är länkade till innehållshanteraren.\n\n Är du säker på att du vill ändra detta användarnamn?';
$_lang["confirm_publish"] = '\n\nOm du publicerar denna resurs nu, kommer alla eventuella (av)publiceringsdatum att tas bort. Om du vill behålla eller ändra (av)publiceringsdatum, välj att redigera resursen istället.\n\nFortsätt?';
$_lang["confirm_remove_locks"] = 'Ibland stänger användare sin webbläsare medan de redigerar resurser, mallar, snippets eller tolkar, vilket kan lämna resursen i fråga i ett låst tillstånd. Genom att trycka OK, tar du bort ALLA nuvarande låsningar.\n\nFortsätt?';
$_lang["confirm_reset_sort_order"] = 'Are you sure you want to reset the \"sort order/index\" of all listed elements to 0 ?';
$_lang["confirm_resource_duplicate"] = 'Är du säker på att du vill duplicera denna resurs?\nEventuella underresurser som den innehåller kommer också att dupliceras.';
$_lang["confirm_setting_language_change"] = 'Du har modifierat standardvärdet och kommer att förlora ändringarna. Fortsätt?';
$_lang["confirm_unblock"] = 'Är du säker på att du vill avblockera denna användare?';
$_lang["confirm_undelete"] = '\n\nEventuella underresurser som togs bort samtidigt som denna resurs kommer också att återställas, men underresurser som tagits bort tidigare kommer fortfarande att vara borttagna.';
$_lang["confirm_unpublish"] = '\n\nOm du avpublicerar denna resurs nu, kommer alla eventuella (av)publiceringsdatum att tas bort. Om du vill behålla eller ändra (av)publiceringsdatum, välj att redigera resursen istället.\n\nFortsätt?';
$_lang["confirm_unzip_file"] = 'Är du säker på att du vill zippa upp denna fil?\n\nExisterande filer kommer att skrivas över.';

$_lang["could_not_find_user"] = 'Kunde inte hitta användaren';

$_lang["create_folder_here"] = 'Skapa behållare här';
$_lang["create_resource_here"] = 'Skapa resurs här';
$_lang["create_resource_title"] = 'Skapa resurs';
$_lang["create_weblink_here"] = 'Skapa webblänk här';
$_lang["createdon"] = 'Skapat datum';
$_lang["create_new"] = 'Create new';

$_lang["credits"] = 'Erkännanden';
$_lang["credits_shouts_msg"] = '<p>EVO förvaltas och underhålls på <a href="https://evo-cms.com//" target="_blank">evo-cms.com</a>.</p>';
$_lang["custom_contenttype_message"] = 'Lägg till egna innehållstyper för resurser. Skriv in innehållstypen i det övre fältet och klicka på "Lägg till" för att lägga till en ny. Markera den innehållstyp som du vill ta bort i det nedre fältet och klicka på "Ta bort".';
$_lang["custom_contenttype_title"] = 'Egna innehållstyper';

$_lang["database_charset"] = 'Databasens teckenuppsättning';
$_lang["database_collation"] = 'Databasens kollationering';
$_lang["database_name"] = 'Databasens namn';
$_lang["database_overhead"] = '<b style="color:#990033;">Notera:</b><br />"Overhead" är oanvänt utrymme reserverat av MySQL. Klicka på ett overhead-belopp för att frigöra utrymmet.';
$_lang["database_server"] = 'Databasens server';
$_lang["database_table_clickbackup"] = 'för att säkerhetskopiera och ladda ner de valda tabellerna.';
$_lang["database_table_clickhere"] = 'Klicka här';
$_lang["database_table_datasize"] = 'Datastorlek';
$_lang["database_table_droptablestatements"] = 'Generera DROP TABLE kommando.';
$_lang["database_table_effectivesize"] = 'Effektiv storlek';
$_lang["database_table_indexsize"] = 'Indexstorlek';
$_lang["database_table_overhead"] = 'Overhead';
$_lang["database_table_records"] = 'Poster';
$_lang["database_table_tablename"] = 'Tabellnamn';
$_lang["database_table_totals"] = 'Totalt:';
$_lang["database_table_totalsize"] = 'Total storlek';
$_lang["database_tables"] = 'Databasens tabeller';
$_lang["database_version"] = 'Databasversion';

$_lang["date"] = 'Datum';
$_lang["datechanged"] = 'Ändrat datum';
$_lang["datepicker_offset"] = 'Datumväljarens tidsförskjutning';
$_lang["datepicker_offset_message"] = 'Antal år som visas bakåt i tiden i datumväljaren.';
$_lang["datetime_format"] = 'Datumformat';
$_lang["datetime_format_message"] = 'Formatet för datum i hanteraren.';

$_lang["default"] = 'Standard:';
$_lang["defaultcache_message"] = 'Välj "Ja" för att göra alla nya resurser cachebara som standard.';
$_lang["defaultcache_title"] = 'Cachebara som standard';
$_lang["defaultmenuindex_message"] = 'Välj "Ja" för att aktivera automatisk ökning av menyindex som standard.';
$_lang["defaultmenuindex_title"] = 'Standardvärde för menyindexering';
$_lang["defaultpublish_message"] = 'Välj "Ja" för att göra alla nya resurser publicerade som standard.';
$_lang["defaultpublish_title"] = 'Publicerade som standard';
$_lang["defaultsearch_message"] = 'Välj "Ja" för att göra alla nya resurser sökbara som standard.';
$_lang["defaultsearch_title"] = 'Sökbara som standard';
$_lang["defaulttemplate_message"] = 'Välj den standarmall du vill använda för nya resurser. Du kan fortfarande välja en annan mall när du redigerar resursen. Denna inställning är bara den förvalda.';
$_lang["defaulttemplate_title"] = 'Standardmall';
$_lang["defaulttemplate_logic_title"] = 'Automatisk malltilldelning';
$_lang["defaulttemplate_logic_general_message"] = 'Nya resurser kommer att använda följande mallar och faller tillbaka på högre nivåer om de inte hittas:';
$_lang["defaulttemplate_logic_system_message"] = '<strong>System</strong>: systemets standardmall.';
$_lang["defaulttemplate_logic_parent_message"] = '<strong>Förälder</strong>: samma mall som föräldrabehållaren.';
$_lang["defaulttemplate_logic_sibling_message"] = '<strong>Syskon</strong>: samma mall som andra resurser i samma behållare.';

$_lang["delete"] = 'Ta bort';
$_lang["delete_resource"] = 'Ta bort resurs';
$_lang["delete_tags"] = 'Ta bort taggar';
$_lang["deleting_file"] = 'Tar bort filen `%s`: ';
$_lang["description"] = 'Beskrivning';
$_lang["deselect_keywords"] = 'Rensa nyckelord';
$_lang["deselect_metatags"] = 'Rensa META-taggar';
$_lang["disabled"] = 'Avstängd';
$_lang["doc_data_title"] = 'Visa resursdata';
$_lang["documentation"] = 'Documentation';

$_lang["duplicate"] = 'Duplicera';
$_lang["duplicate_alias_found"] = 'Resursen "%s" använder redan URL-aliaset "%s". Ange ett unikt URL-alias.';
$_lang["duplicate_template_alias_found"] = 'Template \'%s\' is already using the URL alias \'%s\'. Please enter a unique alias.';
$_lang["duplicate_alias_message"] = 'Välj "Ja" för att tillåta att dubletter på URL-alias sparas.<br /><b>Notera: Den här inställningen bör användas med "Vänliga URL-aliassökvägar" satt till "Ja" för att undvika problem med refereringen av resurser.</b>';
$_lang["duplicate_alias_title"] = 'Tillåt dubletter på URL-alias';
$_lang["duplicate_name_found_general"] = 'Det finns redan en %s som heter "%s". Ange ett unikt namn.';
$_lang["duplicate_name_found_module"] = 'Det finns redan en modul som heter "%s". Ange ett unikt namn.';
$_lang["duplicated_el_suffix"] = 'Duplicate';

$_lang["edit"] = 'Redigera';
$_lang["edit_resource"] = 'Redigera resurs';
$_lang["edit_resource_title"] = 'Redigera resurs';
$_lang["edit_settings"] = 'Konfiguration';
$_lang["editedon"] = 'Redigerat datum';
$_lang["editing_file"] = 'Redigerar fil: ';
$_lang["editor_css_path_message"] = 'Skriv in sökvägen till den CSS-fil du vill använda i editorn. Det bästa sättet att ange sökvägen är att göra det från serverns rot, tex /assets/site/style.css. Lämna fältet tomt om du inte vill ladda en stilmall i editorn.';
$_lang["editor_css_path_title"] = 'Sökväg till CSS-fil';

$_lang["email"] = 'E-post';
$_lang["email_sent"] = 'E-post skickad';
$_lang["email_unique"] = 'Email is already in use!';
$_lang["emailsender_message"] = 'Ange den e-postadress som används för att skicka användarnamn och lösenord till en användare.';
$_lang["emailsender_title"] = 'E-postadress';
$_lang["emailsubject_default"] = 'Dina inloggningsuppgifter';
$_lang["emailsubject_message"] = 'Ange ämnet för e-posten som skickas vid registrering.';
$_lang["emailsubject_title"] = 'Ämne för e-post';

$_lang["empty_folder"] = 'Denna behållare är tom';
$_lang["empty_recycle_bin"] = 'Radera borttagna resurser';
$_lang["empty_recycle_bin_empty"] = 'Det finns inga borttagna resurser att radera.';
$_lang["enable_resource"] = 'Använd elementfil.';
$_lang["enable_sharedparams"] = 'Använd parameterdelning';
$_lang["enable_sharedparams_msg"] = '<b>Notera:</b> Ovanstående globalt unika ID (GUID) kommer att användas för att unikt identifiera denna modul och dess delade parametrar. GUID:t används också för att länka mellan modulen och de plugins eller snippets som använder dess delade parametrar.';
$_lang["enabled"] = 'Aktiverad';
$_lang["error"] = 'Fel';
$_lang["error_sending_email"] = 'Fel vid utskick av e-post';
$_lang["errorpage_message"] = 'Ange ID till en publicerad och offentlig resurs som användare kan omdirigeras till när de försöker nå en resurs som inte existerar.';
$_lang["errorpage_title"] = 'Felsida';
$_lang["event_id"] = 'Händelse-ID';
$_lang["eventlog"] = 'Händelselogg';
$_lang["eventlog_msg"] = 'Händelseloggen används för att visa informations-, varnings- och felmeddelanden genererade av innehållshanteraren. Källkolumnen visar i vilken del av informationshanteraren händelsen inträffade.';
$_lang["eventlog_viewer"] = 'Systemhändelser';
$_lang["everybody"] = 'Alla';
$_lang["existing_category"] = 'Existerande kategori';
$_lang["expand_tree"] = 'Veckla ut webbplatsträd';
$_lang["failed_login_message"] = 'Ange hur många misslyckade inloggningsförsök som är tillåtna innan användaren blockeras.';
$_lang["failed_login_title"] = 'Misslyckade inloggningsförsök';
$_lang["fe_editor_lang_message"] = 'Här kan du ange språk för editorn som används.';
$_lang["fe_editor_lang_title"] = 'Editorns språk';

$_lang["filemanager_path_message"] = 'IIS fyller oftast inte i inställningarna för document_root ordentligt, vilket används av filhanteraren för att bestämma vad du kan se. Om du har problem med filhanteraren, se till så att denna sökväg pekar till roten på din EVO-installation.';
$_lang["filemanager_path_title"] = 'Sökväg till filhanteraren';

$_lang["folder"] = 'Mapp';
$_lang["forgot_password_email_fine_print"] = '* URL:en ovan upphör att fungera när du ändrat ditt lösenord eller när denna dag är slut.';
$_lang["forgot_password_email_instructions"] = 'Härifrån kommer du att kunna ändra ditt lösenord via menyn Mitt konto.';
$_lang["forgot_password_email_intro"] = 'En förfrågan om att ändra ditt kontos lösenord har gjorts.';
$_lang["forgot_password_email_link"] = 'Klicka här för att fullborda processen.';
$_lang["forgot_your_password"] = 'Glömt ditt lösenord?';
$_lang["friendly_alias_message"] = 'Om vänliga URL:er aktiveras kommer resursens URL-alias att användas istället för resursens ID. Det betyder att en resurs med ID 1 som har URL-aliaset "introduktion", inget prefix (tomt) och suffixet satt till ".html" vid en aktivering av vänliga URL:er kommer att få adressen "introduktion.html". Om det inte finns något URL-alias, kommer EVO att generera adressen "1.html".';
$_lang["friendly_alias_title"] = 'Använd vänliga URL-alias';
$_lang["friendlyurls_message"] = 'Använd sökmotorvänliga adesser på Apache-webbservrar med mod_rewrite eller på IIS-servrar med plugins från tredje part. För mer information, se .htaccess-filen placerad i webbplatsens rot som följde med i distributionen.';
$_lang["friendlyurls_title"] = 'Använd vänliga URL:er';
$_lang["friendlyurlsprefix_message"] = 'Om prefixet "sida" anges, kommer adressen /index.php?id=2 att omvandlas till URL-aliaset "sida2.html" (om suffixet är satt till .html).';
$_lang["friendlyurlsprefix_title"] = 'Prefix för vänliga URL:er';
$_lang["friendlyurlsuffix_message"] = 'Vilket suffix som helst, även ett tomt, kommer att fungera. Om du anger ".aspx" kommer .aspx att läggas till i slutet av alla URL-alias.';
$_lang["friendlyurlsuffix_title"] = 'Suffix för vänliga URL:er';
$_lang["functionnotimpl"] = 'Ursäkta!';
$_lang["functionnotimpl_message"] = 'Denna funktion har inte implementerats än.';
$_lang["further_info"] = 'Further information';
$_lang["global_tabs"] = 'Global Tabs';
$_lang["go"] = 'Utför';
$_lang["group_access_permissions"] = 'Användargruppsåtkomst';
$_lang['group_tvs'] = 'Group TV';
$_lang["guid"] = 'GUID';
$_lang["help"] = 'Hjälp';
$_lang["help_msg"] = '<p>Besök <a href="http://forums.modx.com/" target="_blank">EVO Forum</a> om du behöver hjälp med EVO. Det finns också en växande mängd <a href="http://rtfm.modx.com/evolution/1.0" target="blank">dokumentation och guider</a> som berör i stort sett alla aspekter av EVO.</p><p>Vi planerar också att erbjuda kommersiella supporttjänster. Sänd oss ett <a href="mailto:hello@modx.com?subject=MODX Commercial Support Inquiry">e-postmeddelande om du är intresserad</a>.</p>';
$_lang["help_title"] = 'Hjälp';
$_lang["hide_tree"] = 'Dölj webbplatsträd';
$_lang["home"] = 'Hem';

$_lang["icon"] = 'Ikon';
$_lang["icon_description"] = 'CSS class value. e.g. fa&nbsp;fa-star';
$_lang["id"] = 'ID';
$_lang["illegal_parent_child"] = 'Föräldraval:\n\nResursen är ett barn till den valda resursen.';
$_lang["illegal_parent_self"] = 'Föräldraval:\n\nDen valda resursen kan inte bli tilldelad sig själv.';
$_lang["images_management"] = 'Manage Images';
$_lang["import_files_found"] = '<b>Hittade %s resurser för import...</b>';
$_lang["import_params"] = 'Importera en moduls delade parametrar';
$_lang["import_params_msg"] = 'Du kan importera parametrarna eller inställningarna från en modul genom att välja modulens namn i ovanstående meny.<br /><b>Notera:</b> För att moduler ska synas i menyn måste denna plugin/snippet vara med i modulens beroendelista och modulen måste vara inställd för parameterdelning.';
$_lang["import_parent_resource"] = 'Föräldraresurs';
$_lang["update_tree"] = 'Bygg om trädet';
$_lang["update_tree_description"] = '<ul>
<li>Closure table database design pattern that makes working with the document tree more convenient and fast </li>
<li>If the data in the tree is updated not through models, then there is a possibility of an incorrect linking of documents in the database </li>
<li>This operation fixes the problem when site_content is not updated through the model (save, create) and the links (Closure table) are not updated </li>
<li>It is also possible to perform this operation in CLI mode via the \'php artisan closuretable: rebuild\' command </li>
</ul>';
$_lang["update_tree_danger"] = 'If you have more than 1000 resources, it is better to perform this operation in CLI mode using the \'php artisan closuretable: rebuild command\'';
$_lang["update_tree_time"] = 'Rebuild tree finished. Documents processed: <b>%s</b><br>Import took <b>%s</b> seconds to complete.';
$_lang["info"] = 'Information';
$_lang["information"] = 'Information';
$_lang["inline"] = 'Inline';
$_lang["insert"] = 'Infoga';
$_lang["maxImageWidth"] = 'Maximum image width';
$_lang["maxImageHeight"] = 'Maximum image height';
$_lang["clientResize"] = 'Resize images on client-side';
$_lang["clientResize_message"] = 'If enabled then images will be resized by browser before upload to the server';
$_lang["noThumbnailsRecreation"] = 'Create thumbnails on upload only';
$_lang["noThumbnailsRecreation_message"] = 'File browser will create thumbnails only on upload; if there\'s no thumbnails for some images, they will not be created';
$_lang["thumbWidth"] = 'Maximum thumbnail width';
$_lang["thumbHeight"] = 'Maximum thumbnail height';
$_lang["thumbsDir"] = 'Thumbnails directory location';
$_lang["jpegQuality"] = 'JPEG compression';
$_lang["denyZipDownload"] = 'Disable zip-archives downloading';
$_lang["denyExtensionRename"] = 'Disable renaming of file extensions';
$_lang["maxImageWidth_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["maxImageHeight_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["thumbWidth_message"] = 'Maximum thumbnail width.';
$_lang["thumbHeight_message"] = 'Maximum thumbnail height.';
$_lang["thumbsDir_message"] = 'The name of thumbnail directory.';
$_lang["jpegQuality_message"] = 'JPEG compression quality of thumbnails and resized images';
$_lang["showHiddenFiles"] = 'Show hidden files in file browser';
$_lang["keyword"] = 'Nyckelord';
$_lang["keywords"] = 'Nyckelord';
$_lang["keywords_intro"] = 'För att ändra ett nyckelord skriver du helt enkelt in det nya nyckelordet i fältet bredvid nyckelordet du vill ändra. Bocka för "Ta bort" för det nyckelord du vill ta bort. Om du bockar för "Ta bort" och dessutom ändrar nyckelordets namn, så kommer namnändringen inte att ske eftersom nyckelordet tas bort!';
$_lang["language_message"] = 'Välj vilket språket du vill använda i EVO innehållshanterare.';
$_lang["language_title"] = 'Språk';
$_lang["last_update"] = 'Last update';
$_lang["launch_site"] = 'Visa webbplatsen';
$_lang["license"] = 'License';
$_lang["link_attributes"] = 'Länkattribut';
$_lang["link_attributes_help"] = 'Ange frivilliga attribut för en länk till denna sida, t.ex. target=&quot;_blank&quot; eller rel=&quot;external&quot;.';
$_lang["list_mode"] = 'Sätt på/av listläget - används för att lista alla poster i tabellen.';
$_lang["loading_doc_tree"] = 'Laddar webbplatsträd...';
$_lang["loading_menu"] = 'Laddar meny...';
$_lang["loading_page"] = 'Vänta medan EVO laddar sidan...';
$_lang["localtime"] = 'Lokal tid';

$_lang["lock_htmlsnippet"] = 'Lås chunk för redigering';
$_lang["lock_htmlsnippet_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna chunk.';
$_lang["lock_module"] = 'Lås modulen för redigering';
$_lang["lock_module_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna modul.';
$_lang["lock_msg"] = '%s redigerar just nu den/det här %s. Vänta tills den användaren är klar och försök sedan igen.';
$_lang["lock_plugin"] = 'Lås plugin för redigering';
$_lang["lock_plugin_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna plugin.';
$_lang["lock_settings_msg"] = '%s redigerar just nu de här inställningarna. Vänta tills den användaren är klar och försök sedan igen.';
$_lang["lock_snippet"] = 'Lås snippeten för redigering';
$_lang["lock_snippet_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna snippet.';
$_lang["lock_template"] = 'Lås mall för redigering';
$_lang["lock_template_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna mall.';
$_lang["lock_tmplvars"] = 'Lås mallvariabel för redigering';
$_lang["lock_tmplvars_msg"] = 'Endast administratörer (roll-ID 1) kan redigera denna mallvariabel.';
$_lang["locked"] = 'Låst';

$_lang["login_allowed_days"] = 'Tillåtna dagar';
$_lang["login_allowed_days_message"] = 'Välj de dagar som den här användaren får logga in.';
$_lang["login_allowed_ip"] = 'Tillåten IP-adress';
$_lang["login_allowed_ip_message"] = 'Ange de IP-adresser som den här användaren får logga in från.<br /><b>Notera: Separera flera IP-adresser med kommatecken (,).</b>';
$_lang["login_button"] = 'Logga in';
$_lang["login_cancelled_install_in_progress"] = 'Installation/uppdatering av den här webbplatsen pågår. Försök igen om ett par minuter!';
$_lang["login_cancelled_site_was_updated"] = 'Installationen/uppdateringen av den här webbplatsen är klar. Nu kan du logga in igen!';
$_lang["login_captcha_message"] = 'Skriv in säkerhetskoden som visas i bilden. Om du har problem att läsa koden, så kan du klicka på bilden för att generera en ny kod eller kontakta webbplatsens administratör.';
$_lang["login_homepage"] = 'Startsida efter inloggning';
$_lang["login_homepage_message"] = 'Ange ID till den resurs du vill skicka användaren till efter den har loggat in.<br /><b>OBS: Se till att det ID du anger tillhör en existerande resurs, att den har blivit publicerad och kan kommas åt av användaren!</b>';
$_lang["login_message"] = 'Fyll i dina inloggningsuppgifter för att starta din session. Det är skillnad mellan stora och små bokstäver i ditt användarnamn och lösenord.';
$_lang["logo_slogan"] = 'Skapa och gör mer med mindre - \nEVO innehållshanterare';
$_lang["logout"] = 'Logga ut';
$_lang["long_title"] = 'Lång titel';

$_lang["manager"] = 'Hanterare';
$_lang["manager_lockout_message"] = 'Du är för närvarande inloggad i innehållshanteraren. Klicka på "Logga ut" om du vill stänga din session. <p />Klicka på "Hem"-knappen om du vill gå till din start- eller hemsida.';
$_lang["manager_permissions"] = 'Rättigheter för hanteraren';
$_lang["manager_theme"] = 'Tema för hanteraren';
$_lang["manager_theme_message"] = 'Välj tema för innehållshanteraren.';
$_lang["manager_theme_mode"] = 'Color Scheme:';
$_lang["manager_theme_mode1"] = 'everything is light';
$_lang["manager_theme_mode2"] = 'the header is dark';
$_lang["manager_theme_mode3"] = 'header and sidebar are dark';
$_lang["manager_theme_mode4"] = 'everything is dark';
$_lang['manager_theme_mode_message'] = 'This setting is used as the "default" and can be overridden by the manager when using the theme color mode switch button in the Resource Tree: <i class="fa fa-lg fa-adjust"></i>';
$_lang['manager_theme_mode_title'] = 'Theme color mode switch';

$_lang["meta_keywords"] = 'META-nyckelord';
$_lang["metatag_intro"] = 'På den här sidan kan du skapa, redigera eller ta bort META-taggar. För att länka META-taggar till resurser klickar du på fliken för META-nyckelord när du redigerar resursen och väljer de önskade META-taggarna och nyckelorden. Om du vill lägga in en ny tagg skriver du in namnet och värdet och klickar på "Lägg till tagg". Klicka på taggens namn i tabellen för att redigera den.';
$_lang["metatag_notice"] = 'Använd <a href="http://www.html-reference.com/META.asp" target="_blank">HTML-referensguiden</a> för att få mer information. Det här är inte en komplett lista med möjliga META-taggar.';
$_lang["metatags"] = 'META-taggar';
$_lang["mgr_access_permissions"] = 'Åtkomsträttigheter i hanteraren';
$_lang["mgr_login_start"] = 'Startsida efter inloggning i hanteraren';
$_lang["mgr_login_start_message"] = 'Ange ID för den resurs du vill att användaren ska komma till när den loggat in i hanteraren.<br /><b>Notera: Kontrollera att det ID du valt hör till en existerande resurs, att den är publicerad och att användaren har behörighet för den!</b>';

$_lang["mgrlog_action"] = 'Händelse';
$_lang["mgrlog_actionid"] = 'Händelse-ID';
$_lang["mgrlog_anyall"] = 'Alla';
$_lang["mgrlog_datecheckfalse"] = 'checkdate() returnerade false.';
$_lang["mgrlog_datefr"] = 'Datum fr o m';
$_lang["mgrlog_dateinvalid"] = 'Ogiltigt datumformat.';
$_lang["mgrlog_dateto"] = 'Datum t o m';
$_lang["mgrlog_emptysrch"] = 'Din sökning gav inga träffar (dvs inga matchande loggdata hittades).';
$_lang["mgrlog_field"] = 'Fält';
$_lang["mgrlog_itemid"] = 'Objekt-ID';
$_lang["mgrlog_itemname"] = 'Objektnamn';
$_lang["mgrlog_msg"] = 'Meddelande';
$_lang["mgrlog_noquery"] = 'Du har inte angivit någon sökfras.';
$_lang["mgrlog_qresults"] = 'Sökresultat';
$_lang["mgrlog_query"] = 'Sök i loggen';
$_lang["mgrlog_query_msg"] = 'Välj ut vad du vill läsa i loggen. Du kan välja loggposter efter datum, men var medveten om att datumen du anger inte är inkluderande - för att välja alla loggposter för 01-01-2009 så anger du "Datum fr&nbsp;o&nbsp;m" till 01-01-2009 och "Datum t&nbsp;o&nbsp;m" till 02-01-2009.<br /><br />Meddelande och händelse är vanligen samma sak. Om du söker efter ett specifikt meddelande är det bäst att ange händelsen till "Alla".';
$_lang["mgrlog_results"] = 'Antal träffar';
$_lang["mgrlog_searchlogs"] = 'Sök i loggen';
$_lang["mgrlog_sortinst"] = 'Sortera tabellen genom att klicka på kolumnrubrikerna. Om loggen är för stor kan du <a href="index.php?a=55">tömma loggfilen</a> för att ta bort alla loggposter fram till nu. Denna operation kan inte ångras!';
$_lang["mgrlog_time"] = 'Tid';
$_lang["mgrlog_user"] = 'Användare';
$_lang["mgrlog_username"] = 'Användarnamn';
$_lang["mgrlog_value"] = 'Värde';
$_lang["mgrlog_view"] = 'Visa loggen för hanteraren';

$_lang["modx_news"] = 'EVO Nyhetsnotiser';
$_lang["modx_news_tab"] = 'EVO Nyheter';
$_lang["modx_news_title"] = 'EVO Nyheter';
$_lang["modx_security_notices"] = 'EVO Säkerhetsnotiser';
$_lang["modx_version"] = 'EVO-version';

$_lang["name"] = 'Namn';

$_lang["no"] = 'Nej';
$_lang["no_active_users_found"] = 'Inga aktiva användare funna.';
$_lang["no_activity_message"] = 'Du har ännu inte skapat eller redigerat några resurser.';
$_lang["no_category"] = 'okategoriserade';
$_lang["no_docs_pending_publishing"] = 'Inga resurser väntar på publicering.';
$_lang["no_docs_pending_pubunpub"] = 'Inga händelser funna';
$_lang["no_docs_pending_unpublishing"] = 'Inga resurser väntar på avpublicering.';
$_lang["no_edits_creates"] = 'Inga redigeringar eller nyskapningar funna.';
$_lang["no_groups_found"] = 'Inga grupper hittade.';
$_lang["no_keywords_found"] = 'Det finns inga nyckelord än.';
$_lang["no_records_found"] = 'Inga poster funna.';
$_lang["no_results"] = 'Inga resultat funna';
$_lang["nologentries_message"] = 'Ange hur många loggposter som visas per sida när du utforskar granskningsloggen.';
$_lang["nologentries_title"] = 'Antal loggposter';
$_lang["none"] = 'Ingen';
$_lang["noresults_message"] = 'Ange antalet resultat som visas när listningar och sökresultat presenteras.';
$_lang["noresults_title"] = 'Antal resultat';
$_lang["not_deleted"] = 'har inte tagits bort.';
$_lang["not_set"] = 'Ej satt';

$_lang["offline"] = 'Offline';

$_lang["online"] = 'Online';
$_lang["onlineusers_action"] = 'Handling';
$_lang["onlineusers_actionid"] = 'Handlings-ID';
$_lang["onlineusers_ipaddress"] = 'Användarens IP-adress';
$_lang["onlineusers_lasthit"] = 'Senaste träff';
$_lang["onlineusers_message"] = 'Denna lista visar alla användare som varit aktiva de senaste 20 minuterna (klockan är nu ';
$_lang["onlineusers_title"] = 'Inloggade användare';
$_lang["onlineusers_user"] = 'Användare';
$_lang["onlineusers_userid"] = 'Användarens ID';

$_lang["optimize_table"] = 'Klicka här för att optimera den här tabellen';

$_lang["page_data_alias"] = 'Alias';
$_lang["page_data_cacheable"] = 'Cachebar';
$_lang["page_data_cacheable_help"] = 'Denna inställning tillåter resursen att sparas i webbplatsens cache och påverkar alla snippets på denna sida';
$_lang["page_data_cached"] = '<b>Källa hämtad från cache:</b>';
$_lang["page_data_changes"] = 'Ändringar';
$_lang["page_data_contentType"] = 'Internetmediatyp';
$_lang["page_data_contentType_help"] = 'Välj innehållstyp för denna resurs. Om du inte är säker på vilken innehållstyp resursen ska ha, låt den stå som text/html.';
$_lang["page_data_created"] = 'Skapad';
$_lang["page_data_edited"] = 'Redigerad';
$_lang["page_data_editor"] = 'Redigera med en richtext-editor';
$_lang["page_data_folder"] = 'Resursen är en behållare';
$_lang["page_data_general"] = 'Allmänt';
$_lang["page_data_markup"] = 'Uppmärkning/struktur';
$_lang["page_data_mgr_access"] = 'Åtkomst till hanteraren';
$_lang["page_data_notcached"] = 'Resursen har inte blivit cachad än.';
$_lang["page_data_publishdate"] = 'Publiceringsdatum';
$_lang["page_data_publishdate_help"] = 'Om du sätter ett publiceringsdatum, kommer resursen att publiceras så snart som datumet är nått. Klicka på kalenderikonen för att välja ett datum, eller ikonen bredvid för att ta bort det. Om datumet tas bort, kommer resursen aldrig att publiceras automatiskt.';
$_lang["page_data_published"] = 'Publicerad';
$_lang["page_data_searchable"] = 'Sökbar';
$_lang["page_data_searchable_help"] = 'Om detta fält markeras, kommer resursen att bli sökbar. Du kan också använda det för andra ändamål i dina snippets.';
$_lang["page_data_source"] = 'Källa';
$_lang["page_data_status"] = 'Status';
$_lang["page_data_template"] = 'Använder mall';
$_lang["page_data_template_help"] = 'Välj mall för denna resurs.';
$_lang["page_data_title"] = 'Siddata';
$_lang["page_data_unpublishdate"] = 'Avpubliceringsdatum';
$_lang["page_data_unpublishdate_help"] = 'Om du sätter ett avpubliceringsdatum, kommer resursen att avpubliceras så snart som datumet är nått. Klicka på kalenderikonen för att välja ett datum, eller ikonen bredvid för att ta bort det. Om datumet tas bort, kommer resursen aldrig att avpubliceras automatiskt.';
$_lang["page_data_unpublished"] = 'Avpublicerad';
$_lang["page_data_web_access"] = 'Webbåtkomst';

$_lang["pagetitle"] = 'Resursens titel';
$_lang["pagination_table_first"] = 'Första';
$_lang["pagination_table_gotopage"] = 'Gå till sidan';
$_lang["pagination_table_last"] = 'Sista';
$_lang["paging_first"] = 'första';
$_lang["paging_last"] = 'sista';
$_lang["paging_next"] = 'nästa';
$_lang["paging_prev"] = 'föregående';
$_lang["paging_showing"] = 'Visar';
$_lang["paging_to"] = 'till';
$_lang["paging_total"] = 'totalt';
$_lang["parameter"] = 'Parameter';
$_lang["parse_docblock"] = 'Parse DocBlock';
$_lang["parse_docblock_msg"] = 'Attention (!): <b>Resets</b> actual name, configuration, description and category to install-defaults by parsing the source code.';

$_lang["password"] = 'Lösenord';
$_lang["password_change_request"] = 'Förfrågan om ändrat lösenord';
$_lang["password_confirmed"] = 'Passwords doesn\'t match';
$_lang["password_gen_gen"] = 'Låt EVO generera ett lösenord';
$_lang["password_gen_length"] = 'Lösenordet du anger måste vara minst 6 tecken långt.';
$_lang["password_gen_method"] = 'Ny lösenordsmetod';
$_lang["password_gen_specify"] = 'Låt mig ange ett lösenord:';
$_lang["password_method"] = 'Metod för tillkännagivande av lösenord';
$_lang["password_method_email"] = 'Skicka det nya lösenordet med e-post.';
$_lang["password_method_screen"] = 'Visa det nya lösenordet på skärmen.';
$_lang["password_msg"] = 'Det nya lösenordet för <b>:username</b> är <b>:password</b><br>';

$_lang["php_version_check"] = 'MODX är kompatibelt med PHP version 7.4 eller högre. Du behöver uppgradera din installation av PHP!';

$_lang["preview"] = 'Förhandsgranska';
$_lang["preview_msg"] = 'Detta är en förhandsgranskning av dina senast sparade ändringar. Klicka här för att <a href="javascript:;" onclick="saveRefreshPreview();">spara och ladda om</a> dina nuvarande ändringar';
$_lang["preview_resource"] = 'Förhandsgranska';

$_lang["private"] = 'Privat';
$_lang["public"] = 'Offentlig';
$_lang["publish_date"] = 'Publiceringsdatum';
$_lang["publish_events"] = 'Publicera händelser';
$_lang["publish_resource"] = 'Publicera resurs';

$_lang["rb_base_dir_message"] = 'Ange den fysiska sökvägen till filhanterarens katalog. Den här inställningen görs vanligen automatiskt, men om du använder IIS är det möjligt att EVO inte kan räkna ut sökvägen själv, vilket orsakar ett felmeddelande i filhanteraren. I så fall kan du skriva in sökvägen till bildkatalogen här (sökvägen som den visas i Utforskaren).<br /><b>OBS: Filhanterarens katalog måste innehålla underkatalogerna images, files, flash och media för att filhanteraren ska fungera korrekt.</b>';
$_lang["rb_base_dir_title"] = 'Sökväg till filer';
$_lang["rb_base_url_message"] = 'Ange den virtuella sökvägen till filhanterarens katalog. Den här inställningen görs vanligen automatiskt, men om du använder IIS är det möjligt att EVO inte kan räkna ut adressen på egen hand, vilket orsakar ett felmeddelande i filhanteraren. I så fall kan du skriva in adressen till bildkatalogen här (adressen som du skulle skriva den i Internet Explorer).';
$_lang["rb_base_url_title"] = 'Filhanterarens URL';
$_lang["rb_message"] = 'Välj "Ja" för att använda filhanteraren. Detta låter dina användare läsa och ladda upp filer såsom bilder, flash- och mediafiler till servern.';
$_lang["rb_title"] = 'Använd filhanterare';
$_lang["rb_webuser_message"] = 'Vill du tillåta att en webbanvändare kan använda filhanteraren? <b>Varning:</b> Genom att tillåta webbanvändare att använda filhanteraren så exponerar man även filer som är tillgängliga för användare av hanteraren. Använda bara den här inställningen för betrodda webbanvändare.';
$_lang["rb_webuser_title"] = 'Webbanvändare?';
$_lang["recent_docs"] = 'Senaste resurser';
$_lang["recommend_setting_change_title"] = 'Rekommenderad inställningsändring';
$_lang["recommend_setting_change_description"] = 'Din webbplats är inte konfigurerad för att validera HTTP_REFERER på inkommande förfrågningar till hanteraren. Vi rekommenderar starkt att du aktiverar den inställningen för att minska risken för CSRF-attacker (Cross Site Request Forgery).';
$_lang["references"] = 'References';
$_lang["refresh_cache"] = 'Cache: Hittade <b>%s</b> filer i cachekatalogen, och tog bort <b>%d</b> cachefiler. <p>Nya cachefiler kommer automatiskt att skapas när sidorna hämtas.';
$_lang["refresh_published"] = '<b>%s</b> resurser publicerades.';
$_lang["refresh_site"] = 'Rensa cachen';
$_lang["refresh_title"] = 'Uppdatera webbplatsen';
$_lang["refresh_tree"] = 'Uppdatera webbplatsträd';
$_lang["refresh_unpublished"] = '<b>%s</b> resurser avpublicerades.';
$_lang["release_date"] = 'Släppdatum';
$_lang["remember_last_tab"] = 'Kom ihåg flikar';
$_lang["remember_last_tab_message"] = 'Sidor i hanteraren som har flikar öppnas på den flik man senast var på, istället för på den första fliken.';
$_lang["remember_username"] = 'Kom ihåg mig';
$_lang["remove"] = 'Ta bort';
$_lang["remove_date"] = 'Ta bort datum';
$_lang["remove_locks"] = 'Ta bort lås';
$_lang["rename"] = 'Byt namn';
$_lang["reports"] = 'Rapporter';
$_lang["report_issues"] = 'Report issues';
$_lang["required_field"] = 'Field :field is required';
$_lang["require_tagname"] = 'Ett namn på taggen krävs';
$_lang["require_tagvalue"] = 'Ett värde på taggen krävs';
$_lang["reserved_name_warning"] = 'Du har använt ett reserverat namn.';
$_lang["reset"] = 'Rensa';
$_lang["reset_failedlogins"] = 'nollställ';
$_lang["reset_sort_order"] = 'Reset sort order';

$_lang["manager_access_permissions"] = 'Manager access permission';
$_lang["manage_groups"] = 'Manage document and user groups';
$_lang["manage_document_permissions"] = 'Manage document permissions';
$_lang["manage_module_permissions"] = 'Manage module permissions';
$_lang["manage_tv_permissions"] = 'Manage TV permissions';

$_lang["rss_url_news_default"] = 'https://github.com/evocms-community/evolution/releases.atom';
$_lang["rss_url_news_message"] = 'Ange URL:en för EVO nyhetsflöde.';
$_lang["rss_url_news_title"] = 'RSS nyhetsflöde';
$_lang["rss_url_security_default"] = 'https://github.com/extras-evolution/security-fix/releases.atom';
$_lang["rss_url_security_message"] = 'Ange URL:en för EVO säkerhetsflöde.';
$_lang["rss_url_security_title"] = 'RSS säkerhetsflöde';

$_lang["run_module"] = 'Kör modul';
$_lang["save"] = 'Spara';
$_lang["save_all_changes"] = 'Spara alla ändringar';
$_lang["save_tag"] = 'Spara tagg';
$_lang["saving"] = 'Sparar, vänta...';

$_lang["search"] = 'Sök';
$_lang["search_criteria"] = 'Sökkriterier';
$_lang["search_criteria_content"] = 'Sök efter innehåll';
$_lang["search_criteria_content_msg"] = 'Hitta samtliga resurser med söktexten i innehållet.';
$_lang["search_criteria_id"] = 'Sök efter ID';
$_lang["search_criteria_id_msg"] = 'Skriv resursens ID för att snabbt lokalisera resursen.';
$_lang["search_criteria_top"] = 'Search in main fields';
$_lang["search_criteria_top_msg"] = 'Pagetitle, Longtitle, Alias, ID';
$_lang["search_criteria_template_id"] = 'Search by template ID';
$_lang["search_criteria_template_id_msg"] = 'Find all Resources using the specified template.';
$_lang["search_criteria_url_msg"] = 'Find Resource by exact URL.';
$_lang["search_criteria_longtitle"] = 'Sök efter lång titel';
$_lang["search_criteria_longtitle_msg"] = 'Hitta alla resurser med söktexten i den långa titeln.';
$_lang["search_criteria_title"] = 'Sök efter titel';
$_lang["search_criteria_title_msg"] = 'Hitta samtliga resurser med söktexten i titeln.';
$_lang["search_empty"] = 'Din sökning gav inga resultat. Bredda dina sökkriterier och försök igen.';
$_lang["search_item_deleted"] = 'Denna post har tagits bort';
$_lang["search_results"] = 'Sökresultat';
$_lang["search_results_returned_desc"] = 'Beskrivning';
$_lang["search_results_returned_id"] = 'ID';
$_lang["search_results_returned_msg"] = 'Your search criteria returned <b>%s</b> Resources. If a lot of results are being returned, try to enter a more specific search.';
$_lang["search_results_returned_title"] = 'Titel';
$_lang["search_view_docdata"] = 'Visa denna post';

$_lang["security"] = 'Säkerhet';
$_lang["security_notices_tab"] = 'Säkerhetsnotiser';
$_lang["security_notices_title"] = 'Säkerhetsnotiser';

$_lang["select_date"] = 'Välj ett datum';
$_lang["send"] = 'Skicka';
$_lang["server_protocol_http"] = 'http';
$_lang["server_protocol_https"] = 'https';
$_lang["server_protocol_message"] = 'Ange om din sida använder en http- eller en https-anslutning.';
$_lang["server_protocol_title"] = 'Servertyp';
$_lang["serveroffset"] = 'Serverns tidsskillnad';
$_lang["serveroffset_message"] = 'Välj det antal timmar som skiljer mellan dig och servern. Nuvarande tid på servern är <b>[%s]</b>, och den nuvarande tiden med modifieraren är <b>[%s]</b>.';
$_lang["serveroffset_title"] = 'Serverns tidsförskjutning';
$_lang["servertime"] = 'Serverns tid';
$_lang["set_automatic"] = 'Set automatic';
$_lang["set_default"] = 'Set default';
$_lang["set_default_all"] = 'Set defaults';

$_lang["settings_after_install"] = 'Eftersom detta är en ny installation, måste du gå igenom dessa inställningar och ändra det du vill. När du är klar med kontrollen av alla inställningar, klicka på "Spara" för att uppdatera inställningsdatabasen.';
$_lang["settings_config"] = 'Konfiguration';
$_lang["settings_dependencies"] = 'Beroenden';
$_lang["settings_events"] = 'Systemhändelse';
$_lang["settings_furls"] = 'Vänliga adresser';
$_lang["settings_general"] = 'Allmänt';
$_lang["settings_group_tv_message"] = 'Choose if Template Variables should be grouped in sections or tabs (named by TV category) when editing a Resource';
$_lang["settings_group_tv_options"] = 'No,Sections in General tab,Tabs in General tab,Sections in new tab,Tabs in new tab,New tabs';
$_lang["settings_misc"] = 'Filhanteraren';
$_lang["settings_security"] = 'Security';
$_lang["settings_KC"] = 'File Browser';
$_lang["settings_page_settings"] = 'Inställningar';
$_lang["settings_photo"] = 'Foto';
$_lang["settings_properties"] = 'Egenskaper';
$_lang["settings_site"] = 'Webbplatsen';
$_lang["settings_strip_image_paths_message"] = 'Om denna inställning sätts till "Nej", så kommer EVO att skriva sökvägarna till filer i filhanteraren (bilder, filer, flash etc.) som absoluta URL:er. Relativa URL:er är användbara om du ska flytta din EVO-installation, t&nbsp;ex från en testserver till en produktionsserver. Om du inte har någon aning om vad det här betyder, så är det bäst att lämna inställningen satt till "Ja".';
$_lang["settings_strip_image_paths_title"] = 'Skriv om sökvägar till resurser?';
$_lang["settings_templvars"] = 'Mallvariabler';
$_lang["settings_title"] = 'Systeminställningar';
$_lang["settings_ui"] = 'Gränssnitt &amp; funktioner';
$_lang["settings_users"] = 'Användare';
$_lang["settings_email_templates"] = 'Email & Templates';

$_lang["show_fullscreen_btn_message"] = 'Show Menu toggle Fullscreen button';
$_lang["show_newresource_btn_message"] = 'Show Menu New Resource button';
$_lang["settings_show_picker_message"] = 'Customize manager theme and save to localstorage';
$_lang["show_fullscreen_btn"] = 'Toggle Fullscreen button';
$_lang["show_newresource_btn"] = 'New Resource button';

$_lang["show_meta"] = 'Visa fliken META-nyckelord';
$_lang["show_meta_message"] = 'Visa fliken META-nyckelord (som inte används längre) när resurser redigeras i hanteraren.';
$_lang["show_tree"] = 'Visa webbplatsträd';
$_lang["show_picker"] = 'Show Color Switcher';
$_lang["showing"] = 'Visande';
$_lang["signupemail_message"] = 'Ange det meddelande som skickas till användare med deras användarnamn och lösenord när konton skapas.<br /><b>Notera:</b> Följande begrepp ersätts av innehållshanteraren när meddelandet sänds:<br /><br />[+sname+] - Namnet på din webbplats<br />[+saddr+] - Webbplatsens e-postadress<br />[+surl+] - Webbplatsens adress<br />[+uid+] - Användarens login eller ID<br />[+pwd+] - Användarens lösenord<br />[+ufn+] - Användarens namn<br /><br /><b>Låt [+uid+] och [+pwd+] stå kvar i meddelandet, annars innehåller mailet inte användarnamn och lösenord, vilket gör att dina användare inte kan logga in!</b>';
$_lang["signupemail_title"] = 'Registreringsmeddelande';
$_lang["site"] = 'Webbplats';
$_lang["site_schedule"] = 'Schema';
$_lang["sitename_message"] = 'Skriv in namnet på din webbplats här.';
$_lang["sitename_title"] = 'Webbplatsens namn';
$_lang["sitestart_message"] = 'Ange ID för den resurs du vill ha som startsida här.<br /><b>OBS: Se till att detta ID tillhör en existerande resurs, och att den har blivit publicerad!</b>';
$_lang["sitestart_title"] = 'Startsida';
$_lang["sitestatus_message"] = 'Välj "Online" för att publicera din webbplats. Väljer du "Offline", kommer dina besökare att se meddelandet för "Webbplatsen inte tillgänglig" och kommer inte att kunna surfa på webbplatsen.';
$_lang["sitestatus_title"] = 'Webbplatsens status';
$_lang["siteunavailable_message"] = 'Meddelandet som visas när webbplatsen är offline, eller när något fel har inträffat.<br /><b>OBS: Detta meddelande visas bara om ingen "Webbplatsen inte tillgänglig"-sida bestämts.</b>';
$_lang["siteunavailable_message_default"] = 'Webbplatsen är inte tillgänglig för tillfället.';
$_lang["siteunavailable_page_message"] = 'Ange ID för den resurs du vill använda som en offline-sida här. <br /><b>OBS: Kontrollera att detta ID hör till en existerande resurs och att den blivit publicerad!</b>';
$_lang["siteunavailable_page_title"] = 'Sida för<br />"Webbplatsen inte tillgänglig"';
$_lang["siteunavailable_title"] = 'Meddelande för<br />"Webbplatsen inte tillgänglig"';
$_lang["controller_namespace"] = 'Controller Namespace';
$_lang["controller_namespace_message"] = 'Specify the full Namespace from which it is worth taking controllers, for example: <b>EvolutionCMS\\Main\\Controllers\\</b>';
$_lang["update_repository"] = 'GitHub repository path';
$_lang["update_repository_message"] = 'Enter GitHub repository path for example: <b>evocms-community/evolution</b>';

$_lang["sort_alphabetically"] = 'Sort alphabetically';
$_lang["sort_asc"] = 'Stigande';
$_lang["sort_desc"] = 'Fallande';
$_lang["sort_menuindex"] = 'Sort menu index';
$_lang["sort_tree"] = 'Sortera webbplatsträdet';
$_lang['sort_updating'] = 'Updating ...';
$_lang['sort_updated'] = 'Updated!';
$_lang['sort_nochildren'] = 'Parent does not have any children';
$_lang["sort_elements_msg"] = 'Drag to reorder the listed elements.';

$_lang["source"] = 'Källa';
$_lang["stay"] = 'Fortsätt redigera';
$_lang["stay_new"] = 'Lägg till en till';
$_lang["submit"] = 'Skicka';
$_lang["sys_alert"] = 'Systemlarm';
$_lang["sysinfo_activity_message"] = 'Denna lista visar vilka resurser som nyligen redigerats av dina användare.';
$_lang["sysinfo_userid"] = 'Användare';
$_lang["system"] = 'System';
$_lang["system_email_signup"] = 'Hello [+uid+]

Here are your login details for [+sname+] Content Manager:

Username: [+uid+]
Password: [+pwd+]

Once you log into the Content Manager ([+surl+]), you can change your password.

Regards,
Site Administrator';
$_lang["system_email_webreminder"] = 'Hej [+uid+]!

Klicka på följande länk för att aktivera ditt nya lösenord:

[+surl+]

Om allt går bra använder du följande lösenord för att logga in:

Lösenord:[+pwd+]

Om du inte har bett om det här brevet så kan du strunta i det.

Vänliga hälsningar
Webmastern';
$_lang["system_email_websignup"] = 'Hej [+uid+]!

Här kommer dina inloggningsuppgifter för [+sname+].

Användarnamn: [+uid+]
Lösenord: [+pwd+]

Du kan ändra ditt lösenord när du loggat in i [+sname+] ([+surl+]).

Vänliga hälsningar
Webmastern';
$_lang["table_hoverinfo"] = 'Placera markören över ett tabellnamn för att se en kort beskrivning av tabellens funktion (gäller dock inte alla tabellnamn).';
$_lang["table_prefix"] = 'Tabellprefix';
$_lang["tag"] = 'Tagg';

$_lang["to"] = 'till';
$_lang["toggle_fullscreen"] = 'Toggle Fullscreen';
$_lang["tools"] = 'Verktyg';
$_lang["top_howmany_message"] = 'När rapporter visas, hur långa ska "Topp..."-listorna vara?';
$_lang["top_howmany_title"] = 'Hur många i toppen';
$_lang["total"] = 'totalt';
$_lang["track_visitors_message"] = 'Erbjuder en krok för analysplugins, för att t&nbsp;ex flagga om besök till en specifik resurs ska loggas eller inte.';
$_lang["track_visitors_title"] = 'Aktivera insamling av statistik';
$_lang["tree_page_click"] = 'Beteende vid sidklick';
$_lang["tree_page_click_message"] = 'Standardbeteendet när man klickar på en sida i webbplatsträdet.';
$_lang["use_breadcrumbs"] = 'Show navigation';
$_lang["use_breadcrumbs_message"] = 'Show the navigation when creating or editing Resource in the Manager';
$_lang["tree_show_protected"] = 'Visa skyddade sidor';
$_lang["tree_show_protected_message"] = 'När den här inställningen är satt till "Nej" visas inte skyddade resurser (och deras underresurser) i webbplatsträdet. "Nej" är den traditionella inställningen för EVO.';
$_lang["truncate_table"] = 'Klicka här för att trunkera den här tabellen';
$_lang["type"] = 'Typ';
$_lang["udperms_allowroot_message"] = 'Tillåt användare att skapa nya resurser i roten på webbplatsen. ';
$_lang["udperms_allowroot_title"] = 'Tillåt rot';
$_lang["udperms_message"] = 'Kontrollera åtkomsten till resurser genom användargrupper och resursgrupper.';
$_lang["udperms_title"] = 'Använd åtkomsträttigheter';
$_lang["unable_set_link"] = 'Kunde inte ange länken!';
$_lang["unable_set_parent"] = 'Kunde inte skapa ny förälder!';
$_lang["unauthorizedpage_message"] = 'Ange ID till en publicerad och offentlig resurs som användare kan omdirigeras till när de försöker nå en resurs som är säker eller otillåten.';
$_lang["unauthorizedpage_title"] = 'Otillåten-sida';
$_lang["unblock_message"] = 'Denna användare kommer inte längre att blockeras när användarens data sparats.';
$_lang["undelete_resource"] = 'Återställ resurs';
$_lang["unpublish_date"] = 'Avpubliceringsdatum';
$_lang["unpublish_events"] = 'Avpublicera händelser';
$_lang["unpublish_resource"] = 'Avpublicera resurs';
$_lang["untitled_resource"] = 'Namnlös resurs';
$_lang["untitled_weblink"] = 'Namnlös webblänk';
$_lang["update_params"] = 'Uppdatera parametervisningen';
$_lang["update_settings_from_language"] = 'Ersätt nuvarande med:';

$_lang["upload_maxsize_message"] = 'Skriv den största filstorleken som kan laddas upp via filhanteraren. Storleken måste anges i bytes.<br /><b>OBS: Stora filer kan ta väldigt lång tid att ladda upp!</b>';
$_lang["upload_maxsize_title"] = 'Största storlek för uppladdningar';
$_lang["uploadable_files_message"] = 'Skriv en lista med de typer av filer som kan laddas upp till "assets/files/" med filhanteraren. Ange filtypernas suffix, separerade med kommatecken.';
$_lang["uploadable_files_title"] = 'Uppladdningsbara filtyper';
$_lang["uploadable_flash_message"] = 'Skriv en lista med de typer av flashfiler som kan laddas upp till "assets/flash/" med filhanteraren. Ange flashtypernas suffix, separerade med kommatecken.';
$_lang["uploadable_flash_title"] = 'Uppladdningsbara flashtyper';
$_lang["uploadable_images_message"] = 'Skriv en lista med de typer av bildfiler som kan laddas upp till "assets/images/" med filhanteraren. Ange bildfilernas suffix, separerade med kommatecken.';
$_lang["uploadable_images_title"] = 'Uppladdningsbara bildtyper';
$_lang["uploadable_media_message"] = 'Skriv en lista med de typer av mediafiler som kan laddas upp till "assets/media/" med filhanteraren. Ange mediatypernas suffix, separerade med kommatecken.';
$_lang["uploadable_media_title"] = 'Uppladdningsbara mediatyper';
$_lang["use_alias_path_message"] = 'Med denna inställning aktiverad kommer en virtuell sökväg till resursen att genereras. Om exempelvis resursen "barn.html" befinner sig i behållaren "foralder", kommer hela URL-aliassökvägen att bli "/foralder/barn.html".';
$_lang["use_alias_path_title"] = 'Använd vänliga URL-aliassökvägar';
$_lang["use_editor_message"] = 'Möjliggör redigering med en richtext-editor. Denna inställning gäller för samtliga resurser, men kan åsidosättas i användarinställningarna.';
$_lang["use_editor_title"] = 'Aktivera editor';
$_lang["use_global_tabs"] = 'Use global Tabs';

$_lang["valid_hostnames_message"] = 'Hjälp till att förhindra XSS-attacker som missbrukar systeminställningen för site_url genom att ange en kommaseparerad lista med hostnamn för den här installationen. Det här är viktigt för vissa typer av delade hostar eller hostar som är direkt åtkomliga via en IP-adress. Det första hostnamnet i listan används om HTTP_HOST inte matchar något godkänt hostnamn.';
$_lang["valid_hostnames_title"] = 'Godkända hostnames';
$_lang["validate_referer_message"] = 'Kontrollera HTTP_REFERER-headers för att minska risken för att dina innehållsredaktörer ska kunna luras att utföra oavsiktliga handlingar i redigeraren, pga att de blivit offer för CSRF-attacker (Cross Site Request Forgery). Det är möjligt att vissa konfigurationer inte kan använda denna kontroll om servern inte skickar några HTTP_REFERER-headers.';
$_lang["validate_referer_title"] = 'Kontrollera HTTP_REFERER-headers?';
$_lang["value"] = 'Värde';
$_lang["version"] = 'Version';
$_lang["view"] = 'Visa';
$_lang["view_child_resources_in_container"] = 'Underresurser';
$_lang["view_log"] = 'Visa logg';
$_lang["view_logging"] = 'Aktiviteter i hanteraren';
$_lang["view_sysinfo"] = 'Systeminformation';
$_lang["warning"] = 'Varning!';
$_lang["warning_not_saved"] = 'De ändringar du gjort har ännu inte sparats. Du kan välja att stanna kvar på den nuvarande sidan och spara ändringarna (\"Avbryt\"), eller så kan du lämna sidan, och förlora alla ändringar du gjort (\"OK\").';
$_lang["warning_visibility"] = 'Konfigurationsvarningar synliga för';
$_lang["warning_visibility_message"] = 'Kontrollera synligheten på de konfigurationsvarningar som visas på hanterarens välkomstsida';
$_lang["web_access_permissions"] = 'Rättigheter för webbåtkomst';
$_lang["web_access_permissions_user_groups"] = 'Webbanvändargrupper';
$_lang["web_permissions"] = 'Rättigheter för webbåtkomst';
$_lang["web_user_management_msg"] = 'Skapa nya webbanvändare eller välj en redan befintlig för redigering. Webbanvändare är användare som endast kan logga in till webbplatsen (inte till innehållshanteraren).';
$_lang["web_user_management_title"] = 'Webbanvändare';
$_lang["web_user_management_select_role"] = 'All roles';
$_lang["web_user_title"] = 'Skapa/redigera webbanvändare';
$_lang["web_users"] = 'Webbanvändare';
$_lang["weblink"] = 'Webblänk';
$_lang["webpwdreminder_message"] = 'Skriv ett meddelande som skickas till dina webbanvändare när de begärt ett nytt lösenord via e-post. Innehållshanteraren kommer att skicka ett e-postmeddelande med deras nya lösenord och aktiveringsinformation.<br /><b>Notera:</b> Följande platshållare ersätts av innehållshanteraren när ett meddelande skickas:<br /><br />[+sname+] - Namnet på din webbplats<br />[+saddr+] - E-postadressen till din webbplats<br />[+surl+] - Adressen till din webbplats<br />[+uid+] - Användarens inloggningsnamn eller ID<br />[+pwd+] - Användarens lösenord<br />[+ufn+] - Användarens namn<br /><br /><b>Lämna [+uid+] och [+pwd+] i meddelandet, annars får inte mottagaren av e-posten reda på sitt nya användarnamn och lösenord!</b>';
$_lang["webpwdreminder_title"] = 'E-post för webbpåminnelse';
$_lang["websignupemail_message"] = 'Ange det meddelande som skickas till användare med deras användarnamn och lösenord när konton skapas.<br /><b>Notera:</b> Följande platshållare ersätts av innehållshanteraren när meddelandet skickas:<br /><br />[+sname+] - Namnet på din webbplats<br />[+saddr+] - E-postadressen till din webbplats<br />[+surl+] - Adressen till din webbplats<br />[+uid+] - Användarens inloggningsnamn eller ID<br />[+pwd+] - Användarens lösenord<br />[+ufn+] - Användarens namn<br /><br /><b>Lämna [+uid+] och [+pwd+] i meddelandet, annars får inte mottagaren av e-posten reda på sitt användarnamn och lösenord!</b>';
$_lang["websignupemail_title"] = 'E-post för webbregistreringar';
$_lang["allow_multiple_emails_title"] = 'Duplicate Web User email address';
$_lang["allow_multiple_emails_message"] = 'Allows Web Users to share the same email address for situations when a member may not have their own email address or there is just one family email address.<br/>Note: Any password reminder and registration logic will need to account for this option if set to yes.';
$_lang["welcome_title"] = 'Välkommen till webbpubliceringsverktyget EVO';
$_lang["which_editor_message"] = 'Välj vilken richtext-editor du vill använda. Du kan ladda ner och installera fler richtext-editorer från EVO nedladdningssida.';
$_lang["which_editor_title"] = 'Editor att använda';
$_lang["working"] = 'Arbetar...';
$_lang["wrap_lines"] = 'Radbryt';
$_lang["xhtml_urls_message"] = 'Ersätter et-tecken (&amp;) i URLer som genereras av EVO med den validerande &amp;<!-- -->amp; html-entiteten.';
$_lang["xhtml_urls_title"] = 'XHTML-URL:er';
$_lang["yes"] = 'Ja';
$_lang["you_got_mail"] = 'Du har fått e-post';

$_lang["yourinfo_message"] = 'Denna sektion visar information om dig.';
$_lang["yourinfo_previous_login"] = 'Din senaste inloggning';
$_lang["yourinfo_role"] = 'Din roll är';
$_lang["yourinfo_title"] = 'Din information';
$_lang["yourinfo_total_logins"] = 'Totalt antal inloggningar';
$_lang["yourinfo_username"] = 'Du är inloggad som';

$_lang["a17_error_reporting_title"] = 'Detection level of PHP errors';
$_lang["a17_error_reporting_msg"] = 'Set the detection level of the PHP errors.';
$_lang["a17_error_reporting_opt0"] = 'Ignore all';
$_lang["a17_error_reporting_opt1"] = 'Ignore warnings of a slight notice level (<a href="https://www.google.com/search?q=E_DEPRECATED+E_STRICT" target="_blank">E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT</a>)';
$_lang["a17_error_reporting_opt2"] = 'Detect all errors except E_NOTICE and E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt99"] = 'Detect all except E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt199"] = 'Detect all';

$_lang["pwd_hash_algo_title"] = 'Hash algorithm';
$_lang["pwd_hash_algo_message"] = 'Password hash algorithm.';

$_lang["enable_bindings_title"] = 'Enable @Bindings commands';
$_lang["enable_bindings_message"] = 'Prevents the execution of PHP functions through TV @Bindings. Useful if you have Manager users who should not be able to create PHP code but need to be able to create or edit TVs. The output of any TV with an @Binding will be "@Bindings disabled".';
$_lang["enable_filter_title"] = 'Enable filters';
$_lang["enable_filter_message"] = 'Filters allow you to manipulate the way data is presented or parsed in a tag. They allow you to modify values from inside your templates. This is analogous to PHx. <a href="https://github.com/modxcms/evolution/issues/623" target="ext_help">More info</a>'; // todo: change link to documentation
$_lang["enable_filter_phx_warning"] = 'När PHx plugin aktiverad, inbyggda filter är inaktiverade som standard';

$_lang["enable_at_syntax_title"] = 'Enable &lt;@SYNTAX&gt;';
$_lang["enable_at_syntax_message"] = '&lt;@SYNTAX&gt;(atmark syntax) is simple and lightweight template syntax. This is designed to consider coexistence with HTML tags and content strings.';

$_lang["bkmgr_alert_mkdir"] = 'A file cannot be created in a directory.  Please check the permission of [+snapshot_path+]';
$_lang["bkmgr_restore_msg"] = '<p>Database tables could be restored by SQL:</p>';
$_lang["bkmgr_restore_title"] = 'Restore';
$_lang["bkmgr_import_ok"] = 'SQL recovery was performed normally.';
$_lang["bkmgr_snapshot_ok"] = 'The snapshot was saved normally.';
$_lang["bkmgr_run_sql_file_label"] = 'Execute by SQL file';
$_lang["bkmgr_run_sql_direct_label"] = 'Direct execute SQL commands';
$_lang["bkmgr_run_sql_submit"] = 'Execute restore';
$_lang["bkmgr_run_sql_result"] = 'Result';
$_lang["bkmgr_snapshot_title"] = 'Snapshot save and recovery';
$_lang["bkmgr_snapshot_msg"] = '<p>The contents of the database are saved in and restored from a server directory.<br />Location: [+snapshot_path+] ($modx->config[\'snapshot_path\'])</p>';
$_lang["bkmgr_snapshot_submit"] = 'Add Snapshot';
$_lang["bkmgr_snapshot_list_title"] = 'List of snapshots';
$_lang["bkmgr_restore_submit"] = 'Återgå dessa data';
$_lang["bkmgr_restore_confirm"] = 'Är du säker på att du vill återställa backup\n[+filename+] ?';
$_lang["bkmgr_snapshot_nothing"] = 'No snapshots available';

$_lang["files.dynamic.php1"] = 'New File';
$_lang["files.dynamic.php2"] = 'This directory cannot be displayed.';
$_lang["files.dynamic.php3"] = 'There is a problem in a file name.';
$_lang["files.dynamic.php4"] = 'The text file was created.';
$_lang["files.dynamic.php5"] = 'File could not be duplicated.';
$_lang["files.dynamic.php6"] = 'File or directory could not be renamed.';
$_lang["files_dynamic_new_folder_name"] = 'Ange nytt katalognamn:';
$_lang["files_dynamic_new_file_name"] = 'Ange nytt filnamn:';
$_lang["not_readable_dir"] = 'Can not read this directory.';
$_lang["confirm_delete_dir"] = 'Are you sure you want to delete the directory?';
$_lang["confirm_delete_dir_recursive"] = 'Are you sure you want to delete this directory?\n\nAll files inside this directory will also be deleted.';

$_lang["make_folders_title"] = 'End Container URL with Slash';
$_lang["make_folders_message"] = 'Append trailing slash to Resources that are set as containers when using Friendly URLs.';

$_lang["check_files_onlogin_title"] = 'Check core files on login';
$_lang["check_files_onlogin_message"] = 'By enabling this option, important system files will be checked for modification typical of scripted website attacks. While not a foolproof guarantee, it may alert you to a compromised Evolution CMS file and website.';

$_lang["configcheck_sysfiles_mod"] = 'Important System Files have been modified.';
$_lang["configcheck_sysfiles_mod_msg"] = 'You have configured Evolution CMS to check important system files for possible website script attacks. This warning does not necessarily mean your site has been compromised, however, you should review the watched files in your installation (set in System configuration -> User -> Check core files on login). If you find your files unaltered or changes were made by site administrators, go to System Configuration and click to re-save settings to dismiss this message. Changes in the following files have been found:';

$_lang['email_method_title'] = 'Sendmail method';
$_lang['email_method_mail'] = 'PHP mail() function';
$_lang['email_method_smtp'] = 'SMTP Server';
$_lang['smtp_auth_title'] = 'SMTP－AUTH';
$_lang['smtp_autotls_title'] = 'SMTPAutoTLS';
$_lang['smtp_host_title'] = 'SMTP host';
$_lang['smtp_secure_title'] = 'Encrypted SMTP';
$_lang['smtp_username_title'] = 'SMTP username';
$_lang['smtp_password_title'] = 'SMTP password';
$_lang['smtp_port_title'] = 'SMTP port';

$_lang["setting_resource_tree_node_name"] = 'Display Name in Resource Tree';
$_lang["setting_resource_tree_node_name_desc"] = 'Select the Resource field to show as the Resource name in the Resource Tree. The default setting is pagetitle.';
$_lang["setting_resource_tree_node_name_desc_add"] = 'Note: Since Evolution CMS 1.1 you can change this Display Name within Resource-Tree´s sorting option. This setting is used when Display Name in Resource Tree is set to &quot;Default&quot;.';

$_lang["resource_opt_alvisibled"] = 'Använd aktuellt alias i aliassökväg';
$_lang["resource_opt_alvisibled_help"] = 'Denna resurs alias infogas i vänliga URL-aliassökvägar';
$_lang['resource_opt_is_published'] = 'Publicerad';

$_lang["enable_cache_title"] = 'Document caching';
$_lang["disable_chunk_cache_title"] = 'Disable chunk caching';
$_lang["disable_snippet_cache_title"] = 'Disable snippet caching';
$_lang["disable_plugins_cache_title"] = 'Disable plugins caching';
$_lang["disabled_at_login"] = 'Disabled at login';

$_lang["cache_type_title"] = 'Document caching type';
$_lang["cache_type_1"] = 'Cache is based only on Resource ID (standard)';
$_lang["cache_type_2"] = 'Cache is based on Resource ID and $_GET parameters';
$_lang["seostrict_title"] = 'Use SEO Strict URLs';
$_lang["seostrict_message"] = 'Enforces the use of strict URLs to prevent duplicate content (if needed)';

$_lang["alias_listing_title"] = 'Use AliasListing cache';
$_lang["alias_listing_message"] = 'Caching page aliases, have to be disabled if a site have huge amount of resources. "Disabled" reduces memory consumption when site have large number of resources.';
$_lang["alias_listing_disabled"] = 'Disabled';
$_lang["alias_listing_folders"] = 'Only for folders';
$_lang["alias_listing_enabled"] = 'Enabled';

$_lang["settings_friendlyurls_alert"] = 'It is necessary to rename the ht.access file in the Evolution CMS installation directory at .htaccess to use the Friendly URL function.';
$_lang["settings_friendlyurls_alert2"] = 'Since Evolution CMS was installed in a subdirectory, it is necessary to change the content of .htaccess.';

$_lang["mutate_settings.dynamic.php6"] = 'Skicka mail vid fel i EVO';
$_lang["mutate_settings.dynamic.php7"] = 'Avisera inte';
$_lang["mutate_settings.dynamic.php8"] = 'Om ett fel inträffar i EVO kommer ett mail med felkällan att skickas till [(emailsender)] ([+emailsender+]). Detaljerna kring felet kan kan ses i EVO logg för systemhändelser.';

$_lang["error_no_privileges"] = "Du har inte tillräckliga rättigheter för den här aktionen!";
$_lang["error_no_optimise_tablename"] = "Tabellen som ska optimeras finns inte i anropet!";
$_lang["error_no_truncate_tablename"] = "Tabellen som ska trunkeras finns inte i anropet!";
$_lang["error_double_action"] = "Dubbla aktioner i anropet (GET & POST)!";
$_lang["error_no_id"] = "Dokumentets ID angavs inte i anropet!";
$_lang["error_id_nan"] = "ID:t i anroppet är inte ett nummer!";
$_lang["error_parent_deleted"] = "Failed because resource parent is deleted!";
$_lang["error_no_parent"] = "Kunde inte hitta föräldradokumentets namn!";
$_lang["error_many_results"] = "Databasen returnerade för många resultat!";
$_lang["error_no_results"] = "Databasen returnerade inte tillräckligt många eller inga resultat alls!";
$_lang["error_no_user_selected"] = "Ingen användare vald som mottagare av detta meddelande!";
$_lang["error_no_group_selected"] = "Inga grupp vald som mottagare av detta meddelande!";
$_lang["error_movedocument1"] = "Ett dokument kan inte vara sin egen förälder!";
$_lang["error_movedocument2"] = "Dokumentets ID angavs inte i anropet!";
$_lang["error_movedocument3"] = "Ingen ny förälder angavs i anropet!";
$_lang["error_internet_connection"] = "Server isn't available. Check your internet connection!";

$_lang["login_processor_unknown_user"] = "Felaktigt användarnamn eller lösenord angivet!";
$_lang["login_processor_wrong_password"] = "Felaktigt användarnamn eller lösenord angivet!";
$_lang["login_processor_many_failed_logins"] = "Du har blivit blockerad på grund av för många felaktiga inloggningsförsök!";
$_lang["login_processor_verified"] = "User verification required!";
$_lang["login_processor_blocked1"] = "Du är blockerad och kan inte logga in!";
$_lang["login_processor_blocked2"] = "Du är blockerad och kan inte logga in! Försök igen senare.";
$_lang["login_processor_blocked3"] = "Du har blockerats automatiskt efter ett angivet datum och kan inte logga in längre!";
$_lang["login_processor_bad_code"] = "Säkerhetskoden du angav var inte korrekt! Försök att logga in en gång till.";
$_lang["login_processor_remotehost_ip"] = "Ditt värdnamn pekar inte tillbaka till din ip-adress!";
$_lang["login_processor_remote_ip"] = "Du får inte logga in från den här platsen.";
$_lang["login_processor_date"] = "Du får inte logga in just nu. Försök senare.";
$_lang["login_processor_captcha_config"] = "Captcha är inte korrekt konfigurerad.";

$_lang["dp_dayNames"] = "['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag']";
$_lang["dp_monthNames"] = "['Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December']";
$_lang["dp_startDay"] = "1";

$_lang["check_all"] = "Välj alla";
$_lang["check_none"] = "Välj ingen";
$_lang["check_toggle"] = "Växla val";

$_lang["version_notices"] = "Version Notices";

$_lang["em_button_shift"] = " (Shift-Mouseclick to open multiple windows)";

$_lang["reset_sysfiles_checksum_button"] = "Rebuild Checksums";
$_lang["reset_sysfiles_checksum_alert"] = "Are you sure you want to reset the system files checksums?";

$_lang["file_browser_disabled_msg"] = "The File Browser Feature is not enabled.";
$_lang["which_browser_default_title"] = "Default File Browser";
$_lang["which_browser_default_msg"] = "Choose the File Browser you prefer as default. In User-Settings you can choose a Custom Browser per User, or leave it on &quot;default&quot;.";
$_lang["which_browser_title"] = "File Browser";
$_lang["which_browser_msg"] = "You can choose a custom File Browser for this user. To use the System´s default Browser, leave it on &quot;Default&quot;.";
$_lang["option_default"] = "Default";
$_lang["position"] = "Position";
$_lang["are_you_sure"] = "Are you sure?";

$_lang['evo_downloads_title'] = "Evolution CMS Downloads";
$_lang['help_translating_title'] = "Help translating Evolution CMS";
$_lang['download'] = "Download";
$_lang['downloads'] = "Downloads";
$_lang["previous_releases"] = "Previous Releases";
$_lang["extras"] = "Extras";

$_lang["display_locks"] = "Display Locks";
$_lang["role_display_locks"] = "Display Locks";
$_lang["session_timeout"] = "Session Timeout";
$_lang["session_timeout_msg"] = "Evolution CMS will ping the server, if the last ping exceeds this setting, the associated session will be considered invalid and all related locks will be removed automatically. Set value in minutes (>2min, default 15min).";
$_lang["unlock_element_id_warning"] = "Are you sure you want to unlock this [+element_type+] (ID [+id+])?";
$_lang["lock_element_type_1"] = "Template";
$_lang["lock_element_type_2"] = "Template-Variable";
$_lang["lock_element_type_3"] = "Chunk";
$_lang["lock_element_type_4"] = "Snippet";
$_lang["lock_element_type_5"] = "Plugin";
$_lang["lock_element_type_6"] = "Module";
$_lang["lock_element_type_7"] = "Resource";
$_lang["lock_element_type_8"] = "Role";
$_lang["lock_element_editing"] = "You are editing this [+element_type+] since\n[+lasthit_df+]";
$_lang["lock_element_locked_by"] = "This [+element_type+] is locked by user\n[+username+] since [+lasthit_df+]";

$_lang["minifyphp_incache_title"] = 'Minify php code in site cache';
$_lang["minifyphp_incache_message"] = 'Minify php code (snippets and plugins) and store in the site cache file, ref:<a href="https://github.com/modxcms/evolution/issues/938" target="_blank">#938</a>';

$_lang["logout_reminder_msg"] = "Reminder: It seems on [+date+] you forgot to logout. Please pay attention in future to do so after your work is finished.";

$_lang["allow_eval_title"] = "Eval php code in snippet call";
$_lang["allow_eval_msg"] = "For developer : Please use \$modx-&gt;safeEval().";
$_lang["allow_eval_with_scan"] = "Execute only permitted functions";
$_lang["allow_eval_with_scan_at_post"] = "Execute all. However, at POST, only permitted functions";
$_lang["allow_eval_everytime_eval"] = "Unlimited (Use only for debugging)";
$_lang["allow_eval_dont_eval"] = "Do not allow all functions";

$_lang["safe_functions_at_eval_title"] = "Functions to allow eval";
$_lang["safe_functions_at_eval_msg"] = "Comma separated list";

$_lang["multiple_sessions_msg"] = "Information: Multiple active user sessions (total [+total+]) found for user <b>[+username+]</b>.";
$_lang["iconv_not_available"] = "It is important to install/enable extension iconv. Please speak to your host if you don´t know how to enable it.";

$_lang["cm_create_new_category"] = "Create the new category";
$_lang["cm_category_name"] = "Category name";
$_lang["cm_category_position"] = "Category position";
$_lang["cm_no_x_assigned"] = "No %s assigned";
$_lang["cm_save_categorization"] = "Save categorization";
$_lang["cm_update_categories"] = "Update categories";
$_lang["cm_assigned_elements"] = "Assigned elements";
$_lang["cm_edit_name"] = "Edit name";
$_lang["cm_mark_for_deletion"] = "Mark for deletion";
$_lang["cm_delete_now"] = "Delete immediately";
$_lang["cm_delete_element_x_now"] = "Delete &quot;%s&quot; immediately";
$_lang["cm_select_element_group"] = "Select an element group";
$_lang["cm_global_messages"] = "Global Messages";
$_lang["cm_add_new_category"] = "Add a new category";
$_lang["cm_edit_categories"] = "Edit categories";
$_lang["cm_sort_categories"] = "Sort categories";
$_lang["cm_categorize_elements"] = "Categorize elements";
$_lang["cm_translation"] = "Translation";
$_lang["cm_translations"] = "Translations";
$_lang["cm_categorize_x"] = "Categorize <span class=\"highlight\">%s</span>";
$_lang["cm_unknown_error"] = "Something went wrong.";
$_lang["cm_x_assigned_to_category_y"] = "<span class=\"highlight\">%s(%s)</span> has been assigned to category <span class=\"highlight\">%s(%s)</span>";
$_lang["cm_no_categorization"] = "No categorization made.";
$_lang["cm_no_changes"] = "Nothing to change, so no changes made.";
$_lang["cm_x_changes_made"] = "<span class=\"highlight\">%s</span> changes made";
$_lang["cm_enter_name_for_category"] = "Please enter a name for the new category.";
$_lang["cm_category_x_exists"] = "Category <span class=\"highlight\">%s</span> already exists.";
$_lang["cm_category_x_saved_at_position_y"] = "The new category <span class=\"highlight\">%s</span> was saved at position <span class=\"highlight\">%s</span>.";
$_lang["cm_category_x_moved_to_position_y"] = "Category <span class=\"highlight\">%s</span> was moved to position <span class=\"highlight\">%s</span>";
$_lang["cm_category_x_deleted"] = "Category <span class=\"highlight\">%s</span> has been deleted";
$_lang["cm_category_x_renamed_to_y"] = "Category <span class=\"highlight\">%s</span> was renamed to <span class=\"highlight\">%s</span>";
$_lang["cm_translation_for_x_empty"] = "Translation for <span class=\"highlight\">%s</span> was empty";
$_lang["cm_translation_for_x_to_y_success"] = "Translation for <span class=\"highlight\">%s</span> to <span class=\"highlight\">%s</span> successfully saved";
$_lang["cm_save_new_sorting"] = "Save new sorting";
$_lang["cm_translate_phrases"] = "Translate phrases";
$_lang["cm_translate_module_phrases"] = "Translate module-phrases";
$_lang["cm_native_phrase"] = "Native phrase";

$_lang["btn_view_options"] = 'View Options';
$_lang["view_options_msg"] = 'The display & listing of elements can be customized via &quot;View Options&quot;-button. Settings are saved and restored per Browser using HTML5´s localStorage.';
$_lang["viewopts_title"] = 'View Options';
$_lang["viewopts_cb_buttons"] = 'Buttons';
$_lang["viewopts_cb_descriptions"] = 'Descriptions';
$_lang["viewopts_cb_icons"] = 'Icons';
$_lang["viewopts_radio_list"] = 'List';
$_lang["viewopts_radio_inline"] = 'Inline';
$_lang["viewopts_radio_flex"] = 'Flex';
$_lang["viewopts_fontsize"] = 'Font-Size';
$_lang["viewopts_cb_alltabs"] = 'All Tabs';

$_lang['email_sender_method'] = 'The envelope sender of the message';
$_lang['auto'] = 'Auto-detect';
$_lang['use_emailsender'] = 'Use [(emailsender)] value';
$_lang['email_sender_method_message'] = 'The envelope sender of the message. This will usually be turned into a Return-Path header by the receiver, and is the address that bounces will be sent to. Auto-detect will work in most cases.';

$_lang['login_form_position_title'] = 'Login form postiton';
$_lang['login_form_position_left'] = 'left';
$_lang['login_form_position_center'] = 'center';
$_lang['login_form_position_right'] = 'right';
$_lang["login_form_style"] = 'Login form style:';
$_lang["login_form_style_dark"] = 'dark';
$_lang["login_form_style_light"] = 'light';
$_lang['login_logo_title'] = 'Login page logo image';
$_lang['login_logo_message'] = 'Recomended login logo image width: 360px, type .png';
$_lang['login_bg_title'] = 'Login page background image';
$_lang['login_bg_message'] = 'Recomended login page background image width: 1920px  ';

$_lang['manager_menu_position_title'] = 'Main menu position';
$_lang['manager_menu_position_top'] = 'top';
$_lang['manager_menu_position_left'] = 'left';

$_lang['invalid_event_response'] = 'The %s event has ivalid output';

$_lang['chunk_processor'] = 'Chunks processing class';

$_lang["permission_title"] = 'Create / edit permission';
$_lang["groups_permission_title"] = 'Create / edit category';
$_lang["lang_key_desc"] = 'Key language from array $_lang';
$_lang["key_desc"] = 'Key for checked permission';

$_lang["setting_from_file"] = '<strong class="text-danger">Parameter value is defined in core/custom/config/cms/settings</strong>';
$_lang['disable'] = 'Disable';
$_lang['enable'] = 'Enable';

return $_lang;
