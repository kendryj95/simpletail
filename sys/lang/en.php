<?php

    if (!defined("APP_SIGNATURE")) {

        header("Location: /");
        exit;
    }

	$TEXT = array();
	$SEX = array("Male" => 0, "Female" => 1);

    $TEXT['lang-code'] = "en";
    $TEXT['lang-name'] = "English";


    // For admin panel

    $TEXT['apanel-dashboard'] = "Dashboard";
    $TEXT['apanel-home'] = "Home";
    $TEXT['apanel-support'] = "Support";
    $TEXT['apanel-settings'] = "Settings";
    $TEXT['apanel-logout'] = "Logout";
    $TEXT['apanel-login'] = "Log In";
    $TEXT['apanel-market'] = "Market";
    $TEXT['apanel-reports'] = "Reports";
    $TEXT['apanel-messages'] = "Messages";
    $TEXT['apanel-chats'] = "Chats";
    $TEXT['apanel-chat'] = "Chat";
    $TEXT['apanel-items'] = "Items";
    $TEXT['apanel-users'] = "Users";
    $TEXT['apanel-fcm'] = "Push Notifications";
    $TEXT['apanel-admob'] = "Admob";
    $TEXT['apanel-profile'] = "Profile";

    $TEXT['apanel-categories'] = "Categories";
    $TEXT['apanel-subcategories'] = "Subcategories";
    $TEXT['apanel-category-new'] = "Create Category";
    $TEXT['apanel-category-edit'] = "Edit Category";

    $TEXT['apanel-subcategory-new'] = "Create Subcategory";
    $TEXT['apanel-subcategory-edit'] = "Edit Subcategory";

    $TEXT['apanel-label-category'] = "Category";
    $TEXT['apanel-label-subcategory'] = "Subcategory";
    $TEXT['apanel-label-categories'] = "Categories";
    $TEXT['apanel-label-subcategories'] = "Subcategories";

    $TEXT['apanel-label-general'] = "General";
    $TEXT['apanel-label-stream'] = "Stream";
    $TEXT['apanel-label-settings'] = "Settings";

    $TEXT['apanel-placeholder-username'] = "Username";
    $TEXT['apanel-placeholder-password'] = "Password";
    $TEXT['apanel-placeholder-search'] = "Enter a text";
    $TEXT['apanel-placeholder-category-title'] = "Enter category name";

    $TEXT['apanel-action-login'] = "Log In";
    $TEXT['apanel-action-delete'] = "Delete";
    $TEXT['apanel-action-cancel'] = "Cancel";
    $TEXT['apanel-action-approve'] = "Approve";
    $TEXT['apanel-action-reject'] = "Reject";
    $TEXT['apanel-action-view-more'] = "View more";
    $TEXT['apanel-action-search'] = "Search";
    $TEXT['apanel-action-view'] = "View";
    $TEXT['apanel-action-send'] = "Send";
    $TEXT['apanel-action-edit'] = "Edit";
    $TEXT['apanel-action-rename'] = "Rename";
    $TEXT['apanel-action-save'] = "Save";
    $TEXT['apanel-action-add'] = "Add";
    $TEXT['apanel-action-create'] = "Create";
    $TEXT['apanel-action-close-all-auth'] = "Close all authorizations";
    $TEXT['apanel-action-verified-set'] = "Set account as verified";
    $TEXT['apanel-action-verified-unset'] = "Unset verified";
    $TEXT['apanel-action-create-fcm'] = "Send Personal FCM Message";
    $TEXT['apanel-action-account-block'] = "Block account";
    $TEXT['apanel-action-account-unblock'] = "Unblock account";
    $TEXT['apanel-action-remove-connection'] = "Remove connection";
    $TEXT['apanel-action-admob-on'] = "Turn On AdMob in this account";
    $TEXT['apanel-action-admob-off'] = "Turn Off AdMob in this account";
    $TEXT['apanel-action-delete-photo'] = "Delete Photo";
    $TEXT['apanel-action-delete-cover'] = "Delete Cover";

    $TEXT['apanel-auth-label-title'] = "Authorizations";

    $TEXT['apanel-label-create-at'] = "Create At";
    $TEXT['apanel-label-close-at'] = "Close At";
    $TEXT['apanel-label-signup-at'] = "SignUp Date";
    $TEXT['apanel-label-app-type'] = "App Type";

    $TEXT['apanel-label-account-edit'] = "Edit Profile";
    $TEXT['apanel-label-location'] = "Location";
    $TEXT['apanel-label-balance'] = "Balance";
    $TEXT['apanel-label-fullname'] = "Fullname";
    $TEXT['apanel-label-admob-state'] = "AdMob (on/off AdMob in account)";
    $TEXT['apanel-label-admob-state-active'] = "On (AdMob is active in account)";
    $TEXT['apanel-label-admob-state-inactive'] = "Off (AdMob is not active in account)";
    $TEXT['apanel-label-account-state'] = "Account state";
    $TEXT['apanel-label-account-state-enabled'] = "Account is active";
    $TEXT['apanel-label-account-state-blocked'] = "Account is blocked";
    $TEXT['apanel-label-account-state-disabled'] = "Account is disabled by user";
    $TEXT['apanel-label-account-state-verified'] = "Account verified";
    $TEXT['apanel-label-account-verified'] = "Account is verified.";
    $TEXT['apanel-label-account-unverified'] = "Account is not verified.";
    $TEXT['apanel-label-account-facebook-connected'] = "Connected to Facebook";
    $TEXT['apanel-label-connected'] = "Connected";
    $TEXT['apanel-label-not-connected'] = "Not Connected";

    $TEXT['apanel-label-account-chats'] = "Active chats (not removed)";
    $TEXT['apanel-label-account-items'] = "Items (not removed)";
    $TEXT['apanel-label-account-reports'] = "Reports to profile";

    $TEXT['apanel-label-sort-type'] = "Sort";
    $TEXT['apanel-label-moderation-type'] = "Moderation";
    $TEXT['apanel-label-active-type'] = "Active";
    $TEXT['apanel-label-category'] = "Category";
    $TEXT['apanel-label-search'] = "Search";
    $TEXT['apanel-label-list-empty'] = "List is empty.";
    $TEXT['apanel-label-list-empty-desc'] = "This means that there is no data to display :)";

    $TEXT['apanel-sort-type-new'] = "From new to old";
    $TEXT['apanel-sort-type-old'] = "From old to new";

    $TEXT['apanel-active-type-all'] = "All items";
    $TEXT['apanel-active-type-active'] = "Only active items";

    $TEXT['apanel-moderation-type-all'] = "All items";
    $TEXT['apanel-moderation-type-moderated'] = "Only moderated items";
    $TEXT['apanel-moderation-type-unmoderated'] = "Only not moderated items";

    $TEXT['apanel-report-type-item'] = "Items Reports";
    $TEXT['apanel-report-type-profile'] = "Profile Reports";

    $TEXT['apanel-label-item-active'] = "Active";
    $TEXT['apanel-label-item-inactive'] = "Inactive";
    $TEXT['apanel-label-item-approved'] = "Approved";
    $TEXT['apanel-label-item-rejected'] = "Rejected";

    $TEXT['apanel-label-name'] = "Name";
    $TEXT['apanel-label-count'] = "Count";
    $TEXT['apanel-label-value'] = "Value";

    $TEXT['apanel-label-error'] = "Error!";
    $TEXT['apanel-label-thanks'] = "Thanks!";

    $TEXT['apanel-settings-label-change-password'] = "Change Password";
    $TEXT['apanel-settings-label-change-password-desc'] = "Enter the current and new password";
    $TEXT['apanel-settings-label-current-password'] = "Current Password";
    $TEXT['apanel-settings-label-new-password'] = "New Password";

    $TEXT['apanel-settings-label-password-saved'] = "New password is saved";
    $TEXT['apanel-settings-label-password-error'] = "Invalid current password or incorrectly enter a new password";

    $TEXT['apanel-fcm-label-title'] = "Send Push Notification";
    $TEXT['apanel-fcm-label-recently-title'] = "Recently push-messages";
    $TEXT['apanel-fcm-type-for-all'] = "It will be shown, even if the user is not authorized";
    $TEXT['apanel-fcm-type-for-authorized'] = "Only an authorized user";
    $TEXT['apanel-fcm-type-for-all-users'] = "For all users";
    $TEXT['apanel-fcm-type-for-authorized-users'] = "Only for authorized users";

    $TEXT['apanel-label-tickets'] = "Tickets";
    $TEXT['apanel-label-unknown'] = "Unknown";
    $TEXT['apanel-label-reports'] = "Reports";
    $TEXT['apanel-label-items'] = "Items";
    $TEXT['apanel-label-messages'] = "Messages";
    $TEXT['apanel-label-chats'] = "Chats";

    $TEXT['apanel-label-img'] = "Image";
    $TEXT['apanel-label-abuse'] = "Abuse";
    $TEXT['apanel-label-to-item'] = "To Item";
    $TEXT['apanel-label-to'] = "To";
    $TEXT['apanel-label-from'] = "From";
    $TEXT['apanel-label-subject'] = "Subject";
    $TEXT['apanel-label-text'] = "Text";
    $TEXT['apanel-label-date'] = "Date";
    $TEXT['apanel-label-action'] = "Action";
    $TEXT['apanel-label-warning'] = "Warning!";
    $TEXT['apanel-label-app-changes-effect-desc'] = "In application changes will take effect during the next user authorization.";
    $TEXT['apanel-label-demo-fcm-off-desc'] = "Sending push notifications (FCM) is not available in the demo version mode. That we turned off the sending push notifications (FCM) in the demo version mode to protect users from spam and of foul language.";
    $TEXT['apanel-label-type'] = "Type";
    $TEXT['apanel-label-status'] = "Status";
    $TEXT['apanel-label-delivered'] = "Delivered";
    $TEXT['apanel-label-demo-mode'] = "Demo version!";
    $TEXT['apanel-label-demo-mode-desc'] = "Warning! Enabled demo version mode! The changes you've made will not be saved.";

    $TEXT['apanel-label-total-accounts'] = "Total Accounts";
    $TEXT['apanel-label-total-market-items'] = "Total products";
    $TEXT['apanel-label-total-chats'] = "Total Chats";
    $TEXT['apanel-label-total-messages'] = "Total Messages";
    $TEXT['apanel-label-removed-chats'] = "Removed Chats";
    $TEXT['apanel-label-removed-messages'] = "Removed Messages";
    $TEXT['apanel-label-active-chats'] = "Active Chats";
    $TEXT['apanel-label-active-messages'] = "Active Messages";

    $TEXT['apanel-label-stats-total-items'] = "Total";
    $TEXT['apanel-label-stats-approved-items'] = "Approved";
    $TEXT['apanel-label-stats-rejected-items'] = "Rejected";
    $TEXT['apanel-label-stats-active-items'] = "Active";
    $TEXT['apanel-label-stats-inactive-items'] = "Inactive";
    $TEXT['apanel-label-stats-removed-items'] = "Removed";
    $TEXT['apanel-label-stats-unmoderated-items'] = "Needs moderation";
    $TEXT['apanel-label-stats-blocked-items'] = "Blocked";

    $TEXT['apanel-label-stats-active-items-reports'] = "Reports to items";
    $TEXT['apanel-label-stats-active-profiles-reports'] = "Reports to profiles";
    $TEXT['apanel-label-stats-active-support-items'] = "Support tickets";
    $TEXT['apanel-label-stats-active-likes'] = "Items in favorites";

    $TEXT['apanel-label-stats-market'] = "Products";
    $TEXT['apanel-label-stats-messages'] = "Messages and Chats";
    $TEXT['apanel-label-stats-accounts'] = "Accounts";
    $TEXT['apanel-label-stats-reports'] = "Reports";
    $TEXT['apanel-label-stats-support'] = "Support";
    $TEXT['apanel-label-stats-other'] = "Other";
    $TEXT['apanel-label-stats-recently-profiles-list'] = "The recently registered users";
    $TEXT['apanel-label-stats-recently-profiles-list-desc'] = "Click on Profile to view details";

    $TEXT['apanel-label-stats-profile-chats'] = "User Active Chats";
    $TEXT['apanel-label-stats-profile-chats-desc'] = "Click on Chat to view messages";

    $TEXT['apanel-label-stats-profile-reports'] = "Active reports to profile";
    $TEXT['apanel-label-stats-profile-items'] = "All Profile items";

    $TEXT['apanel-action-admob-action-off-for-new-users'] = "Turn Off AdMob for new users";
    $TEXT['apanel-action-admob-action-on-for-new-users'] = "Turn On AdMob for new users";
    $TEXT['apanel-action-admob-action-off-for-all-users'] = "Turn Off AdMob in all accounts";
    $TEXT['apanel-action-admob-action-on-for-all-users'] = "Turn On AdMob in all accounts";

    $TEXT['apanel-label-admob-active-accounts'] = "AdMob active in accounts (On)";
    $TEXT['apanel-label-admob-inactive-accounts'] = "Accounts count with deactivated AdMob (Off)";
    $TEXT['apanel-label-admob-default-for-new-accounts'] = "Default AdMob value for new users";

    $TEXT['apanel-delete-dialog-title'] = "Delete";
    $TEXT['apanel-delete-dialog-header'] = "Do you really want to delete it?";
    $TEXT['apanel-delete-category-dialog-sub-header'] = "If you delete a category, all subcategories will be deleted and all items that fall into this category and subcategories will have a default value of 0 (category and subcategory fields in db table)";
    $TEXT['apanel-delete-subcategory-dialog-sub-header'] = "If you delete a subcategory, all items that fall into this subcategory will have a default value of 0 (subcategory field in db table)";

    $TEXT['apanel-label-moderation'] = "Moderation";
    $TEXT['apanel-label-moderation-photos'] = "Profile Photos";
    $TEXT['apanel-label-moderation-covers'] = "Profile Covers";
    // For Web site

    $TEXT['topbar-users'] = "Utenti";

    $TEXT['topbar-stats'] = "Statistiche";

    $TEXT['topbar-signin'] = "Accedi";

    $TEXT['topbar-logout'] = "Esci";

    $TEXT['topbar-signup'] = "Iscriviti";


    $TEXT['topbar-settings'] = "Impostazioni";

    $TEXT['topbar-messages'] = "Messaggi";

    $TEXT['topbar-support'] = "Assistenza e supporto";

    $TEXT['topbar-profile'] = "Profilo";

    $TEXT['topbar-likes'] = "Notifiche";

    $TEXT['topbar-notifications'] = "Notifiche";

    $TEXT['topbar-search'] = "Cerca";

    $TEXT['topbar-main-page'] = "Home";

    $TEXT['topbar-wall'] = "Home";

    $TEXT['topbar-messages'] = "Messaggi";


    $TEXT['footer-about'] = "Chi siamo";

    $TEXT['footer-terms'] = "Termini e condizioni di utilizzo";

    $TEXT['footer-contact'] = "Contattaci";

    $TEXT['footer-support'] = "Assistenza e supporto";

    $TEXT['page-main'] = "Main";

    $TEXT['page-ad'] = "Ads";

    $TEXT['page-users'] = "Utenti";

    $TEXT['page-terms'] = "Termini e condizioni di utilizzo";

    $TEXT['page-about'] = "Chi siamo";

    $TEXT['page-language'] = "Seleziona la lingua";

    $TEXT['page-support'] = "Assistenza e supporto";

    $TEXT['page-restore'] = "Recupera password";

    $TEXT['page-restore-sub-title'] = "Inserisci la mail utilizzata nel form di registrazione";

    $TEXT['page-signup'] = "Crea un nuovo profilo";

    $TEXT['page-login'] = "Accedi";

    $TEXT['page-blacklist'] = "Black list";

    $TEXT['page-messages'] = "Messaggi";



    $TEXT['page-search'] = "Cerca";

    $TEXT['page-profile-report'] = "Segnala";

    $TEXT['page-profile-block'] = "Blocca";

    $TEXT['page-profile-upload-avatar'] = "Carica foto profilo";

    $TEXT['page-profile-upload-cover'] = "Carica foto di copertina";

    $TEXT['page-profile-report-sub-title'] = "I profili segnalati verranno verificati dal team Simple Tail. Saranno bloccati se violano i termini e le condizioni di utilizzo della piattaforma";

    $TEXT['page-profile-block-sub-title'] = "Non portrait commentare i tuoi items, mandare messaggi e non visualizzerai le notifiche";



    $TEXT['page-likes'] = "People who like this";

    $TEXT['page-services'] = "Servizi";

    $TEXT['page-services-sub-title'] = "Connetti Simpletail alle principali piattaforme social";

    $TEXT['page-prompt'] = "Crea un nuovo profilo or accedi";

    $TEXT['page-settings'] = "Impostazioni";

    $TEXT['page-profile-settings'] = "Profilo";

    $TEXT['page-profile-password'] = "Cambia la password";

    $TEXT['page-notifications-likes'] = "Notifiche";

    $TEXT['page-profile-deactivation'] = "Elimina il profilo";

    $TEXT['page-profile-deactivation-sub-title'] = "Vuoi abbandonare Simpletail?<br>Tutte le tue informazioni verranno cancellate!<br>If you proceed with deactivating your account, you can always come back. Just enter your login and password on the log-in page. We hope to see you again!";

    $TEXT['page-error-404'] = "Pagina non trovata";

    $TEXT['label-location'] = "Indirizzo";
    $TEXT['label-facebook-link'] = "Pagina Facebook";
    $TEXT['label-instagram-link'] = "Pagina Instagram";
    $TEXT['label-status'] = "Inserisci una breve descrizione della tua azienda";

    $TEXT['label-error-404'] = "Pagina non trovata.";

    $TEXT['label-account-disabled'] = "Questo user ha eliminato il suo account.";

    $TEXT['label-account-blocked'] = "Profilo bloccato dall’amministratore della piattaforma.";

    $TEXT['label-account-deactivated'] = "Profilo non attivo.";

    $TEXT['label-reposition-cover'] = "Trascina per riposizionare l’immagine di copertina";

    $TEXT['label-or'] = "o";

    $TEXT['label-and'] = "e";

    $TEXT['label-signup-confirm'] = "Cliccando Iscriviti accetti i termini e condizioni di utilizzo";



    $TEXT['label-empty-page'] = "Qui è vuoto.";

    $TEXT['label-empty-friends-header'] = "Non hai amici.";

    $TEXT['label-empty-likes-header'] = "Non ci sono notifiche.";

    $TEXT['label-empty-list'] = "Lista vuota.";

    $TEXT['label-empty-feeds'] = "Here you'll see updates your friends.";

    $TEXT['label-search-result'] = "Risultati di ricerca";

    $TEXT['label-search-empty'] = "Nessun risultato trovato.";

    $TEXT['label-search-prompt'] = "Cerca prodotti per keywords, range di prezzo e paese d’origine.";

    $TEXT['label-who-us'] = "See who with us";

    $TEXT['label-thanks'] = "Grazie!";





    $TEXT['label-messages-privacy'] = "Impostazioni privacy per i messaggi";

    $TEXT['label-messages-allow'] = "Ricevi messaggi.";

    $TEXT['label-messages-allow-desc'] = "Potrai ricevere messaggi da ogni utente";

    $TEXT['label-settings-saved'] = "Impostazioni salvate.";

    $TEXT['label-settings-saved-not-verify'] = "Il tuo negozio è stato salvato con successo. A breve riceverai nella tua sezione notifiche la conferma di approvazione da parte del team Simpletail. Una volta approvato potrai iniziare la tua ricerca di nuovi marchi.";

    $TEXT['label-password-saved'] = "Password aggiornata con successo.";

    $TEXT['label-profile-settings-links'] = "E puoi anche";

    $TEXT['label-photo'] = "Foto";

    $TEXT['label-background'] = "Sfondo";

    $TEXT['label-username'] = "Nome utente";

    $TEXT['label-fullname'] = "Nome e cognome";

    $TEXT['label-services'] = "Servizi";

    $TEXT['label-blacklist'] = "Black list";

    $TEXT['label-blacklist-desc'] = "Visualizza black list";

    $TEXT['label-profile'] = "Profilo";

    $TEXT['label-email'] = "Email";

    $TEXT['label-password'] = "Password";

    $TEXT['label-old-password'] = "Password attuale";

    $TEXT['label-new-password'] = "Nuova password";

    $TEXT['label-change-password'] = "Cambia password";

    $TEXT['label-facebook'] = "Facebook";

    $TEXT['label-placeholder-message'] = "Scrivi un messaggio...";

    $TEXT['label-img-format'] = "Dimensione massima 3 Mb. JPG, PNG";

    $TEXT['label-message'] = "Messaggio";

    $TEXT['label-subject'] = "Oggetto";

    $TEXT['label-support-message'] = "Per cosa ci stai contattando?";

    $TEXT['label-support-sub-title'] = "Siamo felici di sentirti! ";

    $TEXT['label-success'] = "Sucesso";


    $TEXT['label-verify'] = "Verifica";

    $TEXT['label-account-verified'] = "Profilo verificato";

    $TEXT['label-true'] = "vero";

    $TEXT['label-false'] = "falso";

    $TEXT['label-state'] = "status profilo";

    $TEXT['label-stats'] = "Statistiche";

    $TEXT['label-id'] = "Id";

    $TEXT['label-count'] = "Conta";

    $TEXT['label-repeat-password'] = "Ripeti password";

    $TEXT['label-category'] = "Categoria";

    $TEXT['label-from-user'] = "da";

    $TEXT['label-to-user'] = "a";

    $TEXT['label-reason'] = "Oggetto";

    $TEXT['label-action'] = "Azione";

    $TEXT['label-warning'] = "Attenzione!";
    $TEXT['action-signup-with'] = "Iscriviti con";
    $TEXT['action-delete-profile-photo'] = "Cancella foto";
    $TEXT['action-delete-profile-cover'] = "Rimuovi immagine di copertina";
    $TEXT['action-change-photo'] = "Cambia foto";
    $TEXT['action-change-password'] = "Cambia password";

    $TEXT['action-more'] = "Visualizza altro";

    $TEXT['action-next'] = "Procedi";

    $TEXT['action-add-img'] = "Aggiungi un’immagine";

    $TEXT['action-remove-img'] = "Cancella immagine";

    $TEXT['action-close'] = "Chiudi";

    $TEXT['action-go-to-conversation'] = "Vai alla conversazione";

    $TEXT['action-post'] = "Posta";

    $TEXT['action-remove'] = "Cancella";

    $TEXT['action-report'] = "Segnala";

    $TEXT['action-block'] = "Blocca";

    $TEXT['action-unblock'] = "Sblocca";

    $TEXT['action-send-message'] = "Messaggio";

    $TEXT['action-change-cover'] = "Cambia immagine di copertina";

    $TEXT['action-change'] = "Cambia";

    $TEXT['action-change-image'] = "Cambia immagine";

    $TEXT['action-edit-profile'] = "Modifica profilo";

    $TEXT['action-edit'] = "Modifica";

    $TEXT['action-restore'] = "Ripristina";

    $TEXT['action-accept'] = "Accetta";

    $TEXT['action-reject'] = "Rifiuta";

    $TEXT['label-question-removed'] = "La domanda è stata rimossa.";

    $TEXT['action-deactivation-profile'] = "Elimina profilo";

    $TEXT['action-connect-profile'] = "Connetti Simpletail alle principali piattaforme social";

    $TEXT['action-connect-facebook'] = "Connettiti con Facebook";

    $TEXT['action-disconnect'] = "Rimuovi connessione";

    $TEXT['action-back-to-default-signup'] = "Torna al form di registrazione";

    $TEXT['action-back-to-main-page'] = "Torna alla pagina principale";

    $TEXT['action-back-to-previous-page'] = "Torna alla pagina precedente";

    $TEXT['action-forgot-password'] = "Hai dimenticato password o nome utente?";

    $TEXT['action-full-profile'] = "Vedi profilo completo";

    $TEXT['action-delete-image'] = "Elimina immagine";

    $TEXT['action-send'] = "Invia";

    $TEXT['action-cancel'] = "Elimina";

    $TEXT['action-upload'] = "Carica";

    $TEXT['action-search'] = "Cerca";

    $TEXT['action-change'] = "Cambia";

    $TEXT['action-save'] = "Salva";

    $TEXT['action-login'] = "Accedi";

    $TEXT['action-signup'] = "Iscriviti";

    $TEXT['action-join'] = "UNISCITI ORA!";
//    $TEXT['action-join'] = "Регистрация";

    $TEXT['action-forgot-password'] = "Hai dimenticato la password?";

    $TEXT['msg-loading'] = "Caricamento...";



    $TEXT['msg-login-taken'] = "Nome utente già utilizzato da un altro utente.";

    $TEXT['msg-login-incorrect'] = "Nome utente nel formato non corretto.";

    $TEXT['msg-login-incorrect'] = "Nome utente nel formato non corretto.";

    $TEXT['msg-fullname-incorrect'] = "Nome e cognome non corretti.";

    $TEXT['msg-password-incorrect'] = "Password non corretta";

    $TEXT['msg-password-save-error'] = "La password non è stata aggiornata, password attuale non corretta.";

    $TEXT['msg-email-incorrect'] = "Formato email non corretto.";

    $TEXT['msg-email-taken'] = "Mail già utilizzata da un altro utente.";

    $TEXT['msg-email-not-found'] = "Non è stato trovato nessun utente con questa mail nel nostro database.";

    $TEXT['msg-reset-password-sent'] = "Ti abbiamo inviato una mail con il link per resettare la tua password.";

    $TEXT['msg-error-unknown'] = "Errore. Prova più tardi.";

    $TEXT['msg-error-authorize'] = "Nome utente o password non corretti.";

    $TEXT['msg-error-deactivation'] = "Password non corretta.";

    $TEXT['placeholder-users-search'] = "Cerca utenti per nome utente. Minimo 5 caratteri.";

    $TEXT['ticket-send-success'] = 'La tua richiesta è stata presa in carico, a breve riceverai una risposta al tuo indirizzo email';

    $TEXT['ticket-send-error'] = 'Completa tutti i campi.';



    $TEXT['action-show-all'] = "Mostra tutto";


    $TEXT['label-image-upload-description'] = "JPG, PNG or GIF files sono supportati.";

    $TEXT['action-select-file-and-upload'] = "Seleziona un file e carica";

    $TEXT['fb-linking'] = "Connettiti con Facebook";


    $TEXT['label-gender'] = "Sesso";
    $TEXT['label-birth-date'] = "Data di nascita";
    $TEXT['label-join-date'] = "Data di registrazione";

    $TEXT['gender-unknown'] = "Non specificato";
    $TEXT['gender-male'] = "Maschio";
    $TEXT['gender-female'] = "Femmina";

    $TEXT['month-jan'] = "Gennaio";
    $TEXT['month-feb'] = "Febbraio";
    $TEXT['month-mar'] = "Marzo";
    $TEXT['month-apr'] = "Aprile";
    $TEXT['month-may'] = "Maggio";
    $TEXT['month-june'] = "Giugno";
    $TEXT['month-july'] = "Luglio";
    $TEXT['month-aug'] = "Agosto";
    $TEXT['month-sept'] = "Settembre";
    $TEXT['month-oct'] = "Ottobre";
    $TEXT['month-nov'] = "Novembre";
    $TEXT['month-dec'] = "Dicembre";

    $TEXT['topbar-stream'] = "Items recenti";
    $TEXT['page-categories'] = "Categorie";
    $TEXT['topbar-categories'] = "Categorie";
    $TEXT['page-favorites'] = "Preferiti";
    $TEXT['topbar-favorites'] = "Preferiti";

    $TEXT['msg-added-to-favorites'] = "Aggiunto ai Preferiti.";
    $TEXT['msg-removed-from-favorites'] = "Eliminato dai Preferiti.";

    $TEXT['page-create-item'] = "Crea un nuovo Item";
    $TEXT['page-edit-item'] = "Modifica ";
    $TEXT['page-view-item'] = "Visualizza Item";

    $TEXT['action-create'] = "Crea";

    $TEXT['label-title'] = "Titolo";
    $TEXT['label-category'] = "Categoria";
    $TEXT['label-category-choose'] = "Seleziona categoria";
    $TEXT['label-subcategory-choose'] = "Seleziona Sottocategoria ";
    $TEXT['label-price'] = "Prezzo";
    $TEXT['label-description'] = "Descrizione";
    $TEXT['label-description-placeholder'] = "Descrizione per item";
    $TEXT['label-image'] = "immagine";
    $TEXT['label-image-placeholder'] = "Immagine per item";
    $TEXT['label-allow-comments'] = "autorizza commenti per questo item";

    $TEXT['label-items'] = "Items";
    $TEXT['label-phone'] = "Numero di telefono, esempio: +15417543010";
    $TEXT['msg-phone-incorrect'] = "Formato numero di telefono non corretto.";
    $TEXT['msg-phone-taken'] = "Numero di telefono già utilizzato da un altro utente.";

    $TEXT['msg-item-removed'] = "Item eliminato.";
    $TEXT['msg-item-reported'] = "Item segnalato.";

    $TEXT['notify-comment'] = "Commento aggiunto al tuo prodotto";
    $TEXT['notify-comment-reply'] = "Risposto al tuo commento.";

    $TEXT['label-placeholder-comment'] = "Scrivi un commento...";
    $TEXT['label-placeholder-comments'] = "Commenti";

    $TEXT['label-currency'] = "$";


    // new engine

    $TEXT['main-page-browser-title'] = "";

    $TEXT['action-continue'] = "Continua";

    $TEXT['label-ad-title'] = "Inserisci il titolo del tuo prodotto"; 
    $TEXT['label-ad-category'] = "Categoria"; 
    $TEXT['label-ad-subcategory'] = "Sottocategoria"; 
    $TEXT['label-ad-currency'] = "Valuta"; 
    $TEXT['label-ad-price'] = "PREZZO AL PUBBLICO SUGGERITO IN EURO (€)"; 
    $TEXT['label-wholesale_price'] = "PREZZO D'ACQUISTO AL DETTAGLIANTE IN EURO (€)"; 
    $TEXT['label-ad-description'] = "Descrizione"; 
    $TEXT['label-ad-photos'] = "Foto"; 
    $TEXT['label-ad-phone'] = "Numero di telefono"; 
    $TEXT['label-ad-location'] = "Indirizzo";

    $TEXT['label-ad-sub-title'] = "da 5 a 70 caratteri"; 
    $TEXT['label-ad-sub-price'] = "Non deve essere 0";
    $TEXT['label-ad-sub-wholesale_price'] = "Non deve essere 0";
    $TEXT['label-ad-sub-description'] = "da 10 a 500 caratteri"; 
    $TEXT['label-ad-sub-photos'] = "Almeno una foto. Fino a 5 foto. Formati:  jpg, jpeg, png";
    $TEXT['label-ad-sub-phone'] = "esempio: +14567189456"; 
    $TEXT['label-ad-sub-location'] = "Trascina l’indicatore o fai doppio click sulla location desderata.";

    $TEXT['placeholder-ad-title'] = "Inserisci il titolo del tuo prodotto"; 
    $TEXT['placeholder-ad-description'] = "Inserisci la descrizione del tuo prodotto, specifica gli attributi principali"; 
    $TEXT['placeholder-ad-phone'] = "Inserisci il tuo numero di telefono";

    $TEXT['page-edit-ad-title'] = "Modifica prodotto";
    $TEXT['page-new-ad-title'] = "Crea Prodotto";
    $TEXT['action-new-ad'] = "Crea";

    $TEXT['msg-error-ad-title'] = "Inserisci il titolo del tuo prodotto"; 
    $TEXT['msg-error-ad-category'] = "Seleziona la categoria di appartenenza del tuo prodotto.";
    $TEXT['msg-error-ad-subcategory'] = "Seleziona la subcategoria di appartenenza del tuo prodotto.";
    $TEXT['msg-error-ad-currency'] = "Seleziona la valuta di fatturazione"; 
    $TEXT['msg-error-ad-price'] = "Inserisci il prezzo unitario del tuo prodotto"; 
    $TEXT['msg-error-ad-description'] = "Inserisci la descrizione del tuo prodotto."; 
    $TEXT['msg-error-ad-photos'] = "Aggiungi la foto del tuo prodotto"; 
    $TEXT['msg-error-ad-phone'] = "Inserisci il tuo numero di telefono";
    $TEXT['msg-error-ad-phone-incorrect'] = "Formato numero di telefono non valido"; 
    $TEXT['msg-error-ad-length-title'] = "almeno 5 caratteri"; 
    $TEXT['msg-error-ad-length-description'] = "almeno 10 caratteri";

    // Restore send

    $TEXT['label-restore-sent-title'] = "Email inviata con successo.";
    $TEXT['label-restore-sent-msg'] = "Ti abbiamo inviato una mail con le istruzioni e il link per cambiare la tua password.";

    // Restore success

    $TEXT['label-restore-success-title'] = "Recupera password";
    $TEXT['label-restore-success-msg'] = "Congratulazioni! La tua nuova password è stata impostata";

    // Restore new

    $TEXT['label-restore-new-title'] = "Crea nuova password"; 
    $TEXT['label-restore-new-invalid-password-error-msg'] = "Formato password non valido"; 
    $TEXT['label-restore-new-match-passwords-error-msg'] = "Password non corretta"; 

    // Login page

    $TEXT['label-signup-promo'] = "Non sei registrato? Iscriviti ora!";
    $TEXT['label-remember'] = "Ricorda le mie credenziali";

    $TEXT['label-login-empty-field'] = "Questo campo deve essere compilato"; 

    // Signup page

    $TEXT['label-login-promo'] = "Hai già un profilo? Accedi";
    $TEXT['label-terms-start'] = "Cliccando Iscriviti accetti i termini e condizioni di utilizzo";
    $TEXT['label-terms-link'] = "Termini e condizioni di utilizzo";
    $TEXT['label-terms-and'] = "e";
    $TEXT['label-terms-privacy-link'] = "Privacy policy";
    $TEXT['label-terms-cookies-link'] = "Utilizzo dei cookies";

    $TEXT['label-signup-sex'] = "Sesso";

    $TEXT['label-signup-tooltip-username'] = "Questo è il tuo accesso. Utilizzato come nome di profilo. Solo lettere e numeri. Al meno 5 caratteri";
    $TEXT['label-signup-tooltip-fullname'] = "Il tuo nome e cognome. Esempio: mostrato nel tuo profilo e nei messaggi. Almeno 2 caratteri";
    $TEXT['label-signup-tooltip-password'] = "Password del tuo profilo. Al meno 6 caratteri";
    $TEXT['label-signup-tooltip-email'] = " Inserisci il tuo indirizzo email. Verrà utilizzato per la procedura di ripristino password.";
    $TEXT['label-signup-tooltip-sex'] = "Specifica il tuo sesso. Questa informazione renderà il tuo profilo maggiormente completo";

    $TEXT['label-signup-placeholder-username'] = "Il tuo accesso";
    $TEXT['label-signup-placeholder-fullname'] = "Come ti chiami?";
    $TEXT['label-signup-placeholder-password'] = "Inserisci la password";
    $TEXT['label-signup-placeholder-email'] = "Indirizzo e-mail";

    $TEXT['label-signup-error-username'] = "Formato non valido. Solo caratteri e numeri. Almeno 5 caratteri"; 
    $TEXT['label-signup-error-fullname'] = "Formato non valido. Almeno 2 caratteri"; 
    $TEXT['label-signup-error-password'] = "Formato non valido. Solo caratteri e numeri. Almeno 6 caratteri"; 
    $TEXT['label-signup-error-email'] = "Formato non valido"; 

    // Footer

    $TEXT['label-footer-about'] = "Chi siamo";
    $TEXT['label-footer-terms'] = "Termini e condizioni di utilizzo";
    $TEXT['label-footer-privacy'] = "Privacy policy";
    $TEXT['label-footer-cookies'] = "Utilizzo dei cookies";
    $TEXT['label-footer-help'] = "Aiuto";
    $TEXT['label-footer-support'] = "Assistenza e supporto";

    // Topbar

    $TEXT['label-topbar-home'] = "Home";
    $TEXT['label-topbar-main'] = "Home";
    $TEXT['label-topbar-messages'] = "Messaggi";
    $TEXT['label-topbar-notifications'] = "Notifiche";
    $TEXT['label-topbar-help'] = "Assistenza e supporto";
    $TEXT['label-topbar-search'] = "Cerca";
    $TEXT['label-topbar-favorites'] = "Preferiti";

    // Actions

    $TEXT['action-favorites-promo-button'] = "Inizia la tua ricerca di nuovi prodotti!"; 
    $TEXT['action-new-classified'] = "Aggiungi un nuovo prodotto";
    $TEXT['action-see-classified'] = "Visualizza prodotti";
    $TEXT['action-find'] = "Cerca";
    $TEXT['action-see-all'] = "Visualizza tutti";
    $TEXT['action-show'] = "Mostra";
    $TEXT['action-yes'] = "Si";
    $TEXT['action-no'] = "No";
    $TEXT['action-sold'] = "Venduto";
    $TEXT['action-remove-forever'] = "Cancella per sempre";
    $TEXT['action-item-inactivate'] = "Disabilita";
    $TEXT['action-item-activate'] = "Attiva";
    $TEXT['action-show-map'] = "Mostra su mappa";

    // Error messages

    $TEXT['msg-photo-file-size-exceeded'] = "Dimensione file superata";
    $TEXT['msg-photo-file-size-error'] = "Dimensione file troppo grande (3mb Max.)";
    $TEXT['msg-photo-format-error'] = "Formato file non valido";
    $TEXT['msg-photo-width-height-error'] = "Altezza e larghezza devono essere maggiori di 300 pixels";
    $TEXT['msg-photo-file-upload-limit'] = "Superato limite file caricabile";
    $TEXT['msg-empty-fields'] = "E’ richiesto il completamento di tutti i campi";
    $TEXT['msg-ad-published'] = "Il tuo prodotto è stato salvato con successo. A breve riceverai nella tua sezione notifiche la conferma di approvazione da parte del team Simple tail. Una volta approvato il tuo prodotto sarà visibile ai negozi.";
    $TEXT['msg-ad-saved'] = "Modifiche salvate con successo"; 
    $TEXT['msg-selected-location-error'] = "Indirizzo non specificato o indirizzo incorretto";
    $TEXT['msg-contact-promo'] = "Vuoi contattarci %s? Unisciti ora!"; 
    $TEXT['msg-publish-ad-promo'] = "Pubblica il tuo primo prodotto!";
    $TEXT['msg-empty-profile-items'] = "Non ci sono prodotti.";
    $TEXT['msg-search-empty'] = "Non abbiamo trovato risultati per la tua ricerca :("; 
    $TEXT['msg-search-success'] = "Trovati %d prodotti"; 
    $TEXT['msg-search-all'] = "Trovati %d prodotti"; 
    $TEXT['msg-confirm-delete'] = "Sei sicuro vuoi cancellarlo?"; 
    $TEXT['msg-feature-disabled'] = "Questa funzione è temporaneamente disabilitata dall’amministratore . Ci scusiamo per il temporaneo inconveniente. Riprova più tardi.";
    $TEXT['msg-block-user-text'] = "Utente %s sarà aggiunto alla tua black list. Non riceverai più notifiche o messaggi da %s. Confermi di volerlo inserire nella tua black list?";
    $TEXT['msg-unblock-user-text'] = "Utente %s sarà rimosso dalla tua black list. Confermi di volerlo rimuovere dalla tua black list?";
    $TEXT['msg-unblock-user-text-2'] = "L’utente sarà rimosso dalla tua black list. Confermi di volerlo rimuovere dalla tua black list?";
    $TEXT['msg-item-success-removed'] = "Il tuo prodotto è stato eliminato con successo"; 
    $TEXT['msg-item-success-inactivated'] = "Il tuo prodotto è stato disattivato con successo";
    $TEXT['msg-favorites-added'] = "Aggiunto alla tua lista preferiti";
    $TEXT['msg-favorites-removed'] = "Rimosso dalla tua lista preferiti";

    $TEXT['msg-item-not-active'] = "Il  prodotto non è attivo.";
    $TEXT['msg-item-make-active-promo'] = "Per attivare il tuo prodotto devi modificarlo.";
    $TEXT['msg-item-make-active-description'] = "Correggi il tuo annuncio. Inserisci il titolo, categoria, descrizione e immagine corretti.";

        $TEXT['msg-confirm-inactive-hint'] = "Potrai cancellare, modificare o attivare nuovamente questo prodotto in ogni momento."; 
    $TEXT['msg-confirm-inactive-subtitle'] = "Sei sicuro di volerlo fare?"; 

    // Info messages

    $TEXT['page-notifications-empty-list'] = "Non ci sono nuove notifiche";
    $TEXT['page-messages-empty-list'] = "Non ci sono conversazioni attive";
    $TEXT['page-classified-items-empty-list'] = "Non hai ancora prodotti attivi";
    $TEXT['page-empty-list'] = "La lista è vuota";
    $TEXT['page-blacklist-empty-list'] = "La tua black list è vuota";
    $TEXT['page-favorites-empty-list'] = "Non ci sono ancora prodotti nella tua lista preferiti";

    // Item View

    $TEXT['page-item-view-title'] = "Prodotto"; 
    $TEXT['msg-item-not-found'] = "Il prodotto non esiste o è stato cancellato."; 

    // Pages

    $TEXT['page-about'] = "Chi siamo";
    $TEXT['page-terms'] = "Termini e condizioni di utilizzo";
    $TEXT['page-privacy'] = "Privacy policy";
    $TEXT['page-cookies'] = "Utilizzo dei cookies";
    $TEXT['page-gdpr'] = "GDPR (General Data Protection Regulation) Diritti Privacy"; 
    $TEXT['page-support'] = "Assistenza e supporto";
    $TEXT['page-profile'] = "Profilo";
    $TEXT['page-favorites'] = "Preferiti";
    $TEXT['page-notifications'] = "Notifiche";
    $TEXT['page-messages'] = "Messaggi";
    $TEXT['page-chat'] = "Chat";
    $TEXT['page-items'] = "Prodotti";

    $TEXT['page-404'] = "Pagina non trovata"; 
    $TEXT['page-404-description'] = "Pagina richiesta non trovata"; 

    $TEXT['page-under-construction'] = "Coming Soon"; 
    $TEXT['page-under-construction-description'] = "Stiamo eseguendo una manutenzione programmata alla piattaforma, tra poche ore tornerà operativa. Vi ringraziamo per l’attesa";

    // Support

    $TEXT['label-support-subject'] = "Oggetto";
    $TEXT['label-support-details'] = "Dettagli"; 
    $TEXT['label-support-email-placeholder'] = "La tua Email"; 
    $TEXT['label-support-subject-placeholder'] = "Cosa vuoi segnalarci? Oggetto del messaggio."; 
    $TEXT['label-support-details-placeholder'] = "Descrivi il tuo problema"; 
    $TEXT['label-support-sent-title'] = "La tua richiesta è stata ricevuta e presa in carico dal team Simpletail"; 
    $TEXT['label-support-sent-msg'] = "A breve riceverai una risposta dal nostro team di supporto."; 

    // Labels

    $TEXT['placeholder-login-username'] = "Inserisci il tuo nome utente o il tuo indirizzo email";
    $TEXT['placeholder-login-password'] = "Inserisci la tua password";

    $TEXT['label-username-or-email'] = "Nome utente o email";

    $TEXT['label-search-query'] = "Cerca"; 
    $TEXT['placeholder-search-query'] = "Inizia la tua ricerca di nuovi prodotti!?"; 
    $TEXT['label-all-categories'] = "Tutte le categorie"; 
    $TEXT['label-all-profile-items'] = "%d prodotti"; 
    $TEXT['label-cookie-message'] = "Usiamo strumenti, come \"cookies\", per permettere servizi essenziali volti ad aumentare la funzionalità del nostro sito e raccogliamo dati sull’interazione degli utenti nel nostro sito, oltre che di prodotti e servizi. Usando la nostra piattaforma accetti i nostri termini e condizioni di utilizzo";

    $TEXT['label-filters'] = "Filtri"; //
    $TEXT['label-filters-all'] = "Tutti"; //
    $TEXT['label-filters-comments'] = "Commenti"; //
    $TEXT['label-filters-likes'] = "Likes"; //
    $TEXT['label-filters-replies'] = "Risposte"; //
    $TEXT['label-filters-approved'] = "Approvato"; //
    $TEXT['label-filters-rejected'] = "Rifiutato"; //


    $TEXT['label-optional'] = "Opzionale";
    $TEXT['label-detail'] = "Dettaglio";

    $TEXT['label-just-now'] = "Adesso";

    $TEXT['label-item-approved'] = "Verificato";
    $TEXT['label-item-approved-title'] = "Verified dall’amministratore";
    $TEXT['label-item-rejected'] = "Rejected";
    $TEXT['label-item-rejected-title'] = "Rejected dall’amministratore";

    $TEXT['label-item-active'] = "Attivo";
    $TEXT['label-item-inactive'] = "Non attivo";
    $TEXT['label-item-hot'] = "Hot";
    $TEXT['label-item-popular'] = "Di tendenza";
    $TEXT['label-item-new'] = "Nuovo";

    $TEXT['label-favorites-add'] = "Aggiungi ai preferiti";
    $TEXT['label-favorites-remove'] = "Rimuovi dai preferiti";

    $TEXT['label-notify-item'] = "Prodotto";
    $TEXT['label-notify-item-approved'] = "Il tuo %s è  stato approvato dall’amministratore.";
    $TEXT['label-notify-item-rejected'] = "il tuo %s è stato rifiutato dall’amministratore.";

    $TEXT['label-safety-tips-title'] = "Consigli per i Negozi";
    $TEXT['label-safety-tips-1'] = "Do not send money before receiving the goods";
    $TEXT['label-safety-tips-2'] = "Check the item before you buy";
    $TEXT['label-safety-tips-3'] = "Payment after receiving and check the goods";
    $TEXT['label-safety-tips-4'] = "Meet the seller at a safe location";

    $TEXT['label-created-by-web-app'] = "Posted from web version";
    $TEXT['label-created-by-android-app'] = "Posted from Android app";
    $TEXT['label-created-by-ios-app'] = "Posted from iOS app";

    $TEXT['label-item-stats'] = "Statistiche";
    $TEXT['label-item-stats-views'] = "Visualizzazioni";
    $TEXT['label-item-stats-likes'] = "Likes";
    $TEXT['label-item-stats-favorites'] = "Aggiunto ai preferiti";
    $TEXT['label-item-stats-phone-views'] = "Visualizzazioni numero di telefono";

    $TEXT['label-item-disclaimer-title'] = "Informazioni generali";
    $TEXT['label-item-disclaimer-desc'] = "Se hai bisogno di informazioni aggiuntive sul prodotto, puoi mandare un messaggio al produttore/distributore cliccando sull icona a forma di busta";

    $TEXT['label-items-related'] = "Prodotti correlati";
    $TEXT['label-items-more-from-author'] = "Più da %s";
    $TEXT['label-items-latest'] = "Prodotti pubblicati di recente";
    $TEXT['label-items-featured'] = "Caratteristiche di prodotto";
    $TEXT['label-items-popular'] = "Prodotti di tendenza";

    // Settings

    $TEXT['page-settings'] = "Impostazioni";
    $TEXT['page-settings-account'] = "Impostazioni";
    $TEXT['page-settings-profile'] = "Profilo";
    $TEXT['page-settings-privacy'] = "Privacy";
    $TEXT['page-settings-password'] = "Cambia password";
    $TEXT['page-settings-blacklist'] = "Blacklist";
    $TEXT['page-settings-connections'] = "Social networks";
    $TEXT['page-settings-deactivation'] = "Elimina account";

    $TEXT['label-privacy-messages'] = "Messaggi";
    $TEXT['label-privacy-allow-messages'] = "Ricevi messaggi";

    $TEXT['label-sex'] = "Sesso";
    $TEXT['label-sex-unknown'] = "Non specificato";
    $TEXT['label-sex-male'] = "Maschio";
    $TEXT['label-sex-female'] = "Femmina";

    $TEXT['label-bio'] = "Inserisci una breve descrizione della tua azienda";
    $TEXT['label-phone-number'] = "Numero di telefono";
    $TEXT['placeholder-phone-number'] = "Numero di telefono, esempio: +395417543010";


    $TEXT['placeholder-bio'] = "Descrivi brevemente la tua azienda";
    $TEXT['placeholder-facebook-page'] = "Link alla pagina Facebook";
    $TEXT['placeholder-instagram-page'] = "Link alla pagina instagram";

    $TEXT['action-deactivate'] = "Disattiva";
    $TEXT['label-password'] = "Password";
    $TEXT['placeholder-password-current'] = "Password attuale";
    $TEXT['label-password-current'] = "Password attuale";
    $TEXT['label-password-new'] = "Nuova password";
    $TEXT['placeholder-password-new'] = "Nuova password";

    $TEXT['msg-deactivation-promo'] = "<strong>Warning!</strong><br>Tutti i dati legati al prfilo verranno eliminati. Non potrai più recuperare tali dati dalla piattaforma";

    $TEXT['msg-deactivation-error'] = "Password non corretta.";

    $TEXT['msg-settings-saved'] = "Impostazioni salvate.";
    $TEXT['msg-password-saved'] = "Password aggiornata con successo.";

    $TEXT['msg-password-new-format-error'] = "Password non modificata, formato non corretto della nuova password.";
    $TEXT['msg-password-current-format-error'] = "Password non modificata, formato non corretto della password attuale.";
    $TEXT['msg-password-current-error'] = "Password non modificata, Password attuale non corretta";

    // Dialogs

    $TEXT['dlg-confirm-block-title'] = "Blocca utente";
    $TEXT['dlg-confirm-unblock-title'] = "Sblocca utente"; 
    $TEXT['dlg-confirm-action-title'] = "Conferma azione";
    $TEXT['dlg-item-title'] = "Item";
    $TEXT['dlg-message-title'] = "Messaggio";
    $TEXT['dlg-message-placeholder'] = "Inserisci messaggio...";
    $TEXT['dlg-report-profile-title'] = "Segnala Item";
    $TEXT['dlg-report-item-title'] = "Report";
    $TEXT['dlg-report-sub-title'] = "Motivo del tuo reclamo";
    $TEXT['dlg-report-description-label'] = "Descrizione";
    $TEXT['dlg-report-description-placeholder'] = "Descrivi nel dettaglio il motivo del tuo reclamo..";



    // Social connections

    $TEXT['page-settings-connections-sub-title'] = "Connect %s with your social network accounts";

    $TEXT['label-notify-profile-photo-rejected'] = "Your profile photo has been rejected by moderator. Please upload another photo/image.";
    $TEXT['label-notify-profile-cover-rejected'] = "Your profile cover has been rejected by moderator. Please upload another photo/image.";

    //

    $TEXT['label-currency-choose'] = "Seleziona una valuta";
    $TEXT['label-currency-free'] = "Libero";
    $TEXT['label-currency-negotiable'] = "Prezzo negoziabile";


    // New Content By Kendry

    $TEXT['label-type-user'] = "Type user";
    $TEXT['label-type-user-option-value-1'] = "BRAND";
    $TEXT['label-type-user-option-text-1'] = "Brand";
    $TEXT['label-type-user-option-value-2'] = "STORE";
    $TEXT['label-type-user-option-text-2'] = "Store";
    $TEXT['label-signup-tooltip-type-user'] = "Choose if you are a Store or Brand.";
    $TEXT['label-fullname-brand'] = "Brand name";
    $TEXT['label-signup-tooltip-fullname-brand'] = "Il vero nome del marchio";
    $TEXT['label-signup-placeholder-fullname-brand'] = "What is your brand's name?";

    $TEXT['label-fullname-store'] = "Company name";
    $TEXT['label-signup-tooltip-fullname-store'] = "Il vero nome della società";
    $TEXT['label-signup-placeholder-fullname-store'] = "What is your company's name?";

    $TEXT['label-country-brand'] = "Brand country of origin";
    $TEXT['label-signup-tooltip-country-brand'] = "Where are your brand from?";
    $TEXT['label-country-store'] = "Company country of origin";
    $TEXT['label-signup-tooltip-country-store'] = "Where are your company from?";
    $TEXT['select-country'] = "Select a country";
    $TEXT['label-date-incorporation'] = "Date of incorporation";
    $TEXT['label-category-brand'] = "Brand category";
    $TEXT['label-category-store'] = "Company category";
    $TEXT['label-attributes-brand'] = "Enter the attributes that bestdescribe your business (hasta 5 keywords)";
    $TEXT['label-address-company'] = "Company address";
    $TEXT['label-annual-turnover'] = "Annual turnover";
    $TEXT['label-type-business'] = "Type of business";
    $TEXT['label-content-related'] = "Insert content related to your brand ";
    $TEXT['label-website-company-brand'] = "URL Website Brand";
    $TEXT['label-youtube-company-brand'] = "URL Youtube Brand";
    $TEXT['label-number-stores'] = "Number of stores";
    $TEXT['label-type-business'] = "Type of Business";
    $TEXT['label-website-company'] = "Store website";
    $TEXT['label-address-store'] = "Store address";
    $TEXT['label-cities-stores'] = "Enter the cities where your stores are located";
    $TEXT['label-attributes-essentials'] = "Enter the attributes that you believe are essential in your business
search for new brands";
    $TEXT['alert-profile-uncompleted'] = "You must complete your profile to allow you to create new products";


    // ADD classified

    $TEXT['label-ad-country'] = "Country of origin";
    $TEXT['label-ad-incoTerms'] = "RESA";
    $TEXT['label-ad-luogo'] = "LUOGO";
    $TEXT['label-external-shipping-packing'] = "External shipping packing";
    $TEXT['label-internal-shipping-packing-detail'] = "Internal shipping packing details";
    $TEXT['placeholder-internal-shipping-packing-detail'] = "Insert the type of packaging and material, example: carton box";
    $TEXT['label-external-shipping-packing-detail'] = "External shipping packing details";
    $TEXT['placeholder-external-shipping-packing-detail'] = "Insert the type of packaging and material, example: carton box";
    $TEXT['label-external-shipping-packing-grs'] = "External packaging weight in grs";
    $TEXT['label-quantity-pieces-per-references'] = "Quantity of pieces per references";
    $TEXT['label-ean-code'] = "EAN Code";
    $TEXT['label-classified-certifications'] = "Product certifications";
    $TEXT['label-classified-availability'] = "Product availability";
    $TEXT['label-ingredients'] = "Ingredients";
    $TEXT['label-keywords'] = "Keywords that make your product distinctive";
    $TEXT['label-unit-measure'] = "Unit of measure";
    $TEXT['label-ad-amount-product'] = "Quantità prodotto per singola referenza";
    $TEXT['label-ad-amount-product-value'] = "Unità di misura";
    $TEXT['label-ad-total-weight'] = "Peso totale del prodotto (prodotto + packaging)";
    $TEXT['label-ad-quantity-items-per-case'] = "Quantità prodotti per unità di vendita";

    $TEXT['label-search-by'] = "Search by";
    $TEXT['option-classified-name'] = "Product name";
    $TEXT['option-keywords'] = "Keywords";
    $TEXT['option-country-brand'] = "Country of the brand";
    $TEXT['option-range-prices'] = "Range of prices";

    $TEXT['label-all-stores'] = "List Stores";
    $TEXT['msg-stores-empty'] = "There are no stores registered :(";



    //desde 808 en italiano

    
    $TEXT['label-type-user'] = "Tipologia di utente";
    $TEXT['label-type-user-option-value-1'] = "MARCHIO";
    $TEXT['label-type-user-option-text-1'] = "Marchio";
    $TEXT['label-type-user-option-value-2'] = "Negozio";
    $TEXT['label-type-user-option-text-2'] = "Negozio";
    $TEXT['label-signup-tooltip-type-user'] = "Seleziona se sei un Marchio o un Negozio.";
    $TEXT['label-fullname-brand'] = "Nome del marchio";
    $TEXT['label-signup-tooltip-fullname-brand'] = "Il vero nome del marchio";
    $TEXT['label-signup-placeholder-fullname-brand'] = "Qual è il nome del tuo marchio?";

    $TEXT['label-fullname-store'] = "Nome dell’azienda";
    $TEXT['label-signup-tooltip-fullname-store'] = "Il vero nome dell'azienda";
    $TEXT['label-signup-placeholder-fullname-store'] = "Qual è il nome della tua azienda?";

    $TEXT['label-country-brand'] = "Paese d’origine del marchio";
    $TEXT['label-signup-tooltip-country-brand'] = "Qual è il paese d’origine del tuo marchio?";
    $TEXT['label-country-store'] = "Paese d’origine dell’azienda";
    $TEXT['label-signup-tooltip-country-store'] = "Qual è il paese d’origine della tua azienda?";
    $TEXT['select-country'] = "Seleziona un Paese";
    $TEXT['label-date-incorporation'] = "Anno di costituzione della tua azienda";
    $TEXT['label-category-brand'] = "Categoria Marchio";
    $TEXT['label-category-store'] = "Categoria Azienda";
    $TEXT['label-attributes-brand'] = "Inserisci gli attributi che meglio descrivono il tuo marchio (fino a 5 keywords)";
    $TEXT['label-address-company'] = "Indirizzo azienda";
    $TEXT['label-annual-turnover'] = "Range fatturato annuale";
    $TEXT['label-type-business'] = "Tipologia business";
    $TEXT['label-content-related'] = "Inserisci dei contenuti relativi al tuo marchio ";
    $TEXT['label-number-stores'] = "Numero di punti vendita";
    $TEXT['label-type-business'] = "Tipologia di business";
    $TEXT['label-website-company'] = "Website negozio/i";
    $TEXT['label-address-store'] = "Indirizzo/i Negozio/i";
    $TEXT['label-cities-stores'] = "Inserisci le città dove sono ubicati i tuoi negozi";
    $TEXT['label-attributes-essentials'] = "Inserisci gli attributi che ritieni essenziali nella ricerca di nuovi prodotti";
    $TEXT['label-company-name'] = "Ragione sociale dell'azienda";
    $TEXT['label-signup-tooltip-company-name'] = "Inserisci la ragione sociale dell'azienda";
    $TEXT['label-signup-placeholder-company-name'] = "Qual è la ragione sociale della tua azienda?";





    // ADD product

    $TEXT['label-ad-country'] = "Paese d’origine";
    $TEXT['label-ad-incoTerms'] = "Incoterms/Resa";
    $TEXT['label-external-shipping-packing'] = "Dimensioni packaging esterno";
    $TEXT['label-internal-shipping-packing-detail'] = "Descrizione packaging interno ";
    $TEXT['placeholder-internal-shipping-packing-detail'] = "Descrizione packaging interno (inserire la tipologia del packaging e del materiale, esempio: scatola in cartone)";
    $TEXT['label-external-shipping-packing-detail'] = "Descrizione packaging esterno";
    $TEXT['placeholder-external-shipping-packing-detail'] = "Descrizione packaging esterno (inserire la tipologia del packaging e del materiale, esempio: scatola in cartone)";
    $TEXT['label-external-shipping-packing-grs'] = "Peso prodotto completo (packaging + prodotto) in grammi";
    $TEXT['label-quantity-pieces-per-references'] = "Quantità di pezzi a referenza";
    $TEXT['label-ean-code'] = "Codice EAN";
    $TEXT['label-classified-certifications'] = "Certificazioni di prodotto";
    $TEXT['label-classified-availability'] = "Disponibilità di prodotto";
    $TEXT['label-ingredients'] = "Ingredienti";
    $TEXT['label-keywords'] = "Parole chiave/Attributi che rendono il tuo prodotto distintivo";
    $TEXT['label-unit-measure'] = "Unità di misura";
    $TEXT['label-pdf-document'] = "Documento in PDF";


    $TEXT['label-search-by'] = "Cerca per";
    $TEXT['option-classified-name'] = "Nome prodotto";
    $TEXT['option-keywords'] = "Parole chiave";
    $TEXT['option-country-brand'] = "Paese d’origine del marchio";
    $TEXT['option-range-prices'] = "Range di prezzo in EURO";
    $TEXT['action-stores'] = "Negozi";
    $TEXT['text-see-pdf'] = "Vedi documento PDF";
    $TEXT['placeholder-text-url'] = "Copia e incolla il link comprendendo la dicitura http://";
    $TEXT['label-ad-logistic-costs'] = "Costi logistici a carico di";




