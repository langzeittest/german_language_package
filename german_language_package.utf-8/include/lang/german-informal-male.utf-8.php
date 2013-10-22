<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// DON'T TOUCH THIS FILE IF YOU WANT BE ABLE TO UPDATE THE GERMAN LANGUAGE
// FILES PACKAGE IN THE FUTURE. USE INSTEAD THE FILES IN
// mods/german_language_support/lang/

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

include(str_replace('-informal-male', '', __FILE__));

$language = 'Deutsch (Du) männlich';

$PHORUM['DATA']['LANG']['AdminOnlyMessage']          = 'Das Forum ist zurzeit nicht verfügbar. Bitte versuche es später noch einmal.';
$PHORUM['DATA']['LANG']['AreYouSure']                = 'Bist Du sicher?';
$PHORUM['DATA']['LANG']['AttachCancel']              = 'Dein Beitrag wurde abgebrochen.';
$PHORUM['DATA']['LANG']['AttachFull']                = 'Du hast die maximal erlaubte Anzahl an Dateianhängen erreicht.';
$PHORUM['DATA']['LANG']['AttachmentsMissing']        = 'Das Anhängen der Dateien ist fehlgeschlagen, versuche es bitte erneut.';
$PHORUM['DATA']['LANG']['AttachNotAllowed']          = 'Es ist Dir leider nicht erlaubt Dateien anzuhängen.';
$PHORUM['DATA']['LANG']['BookmarkedThread']          = 'Du verfolgst dieses Thema in Deinem Kontrollcenter';
$PHORUM['DATA']['LANG']['Buddies']                   = 'Liste der Kumpel';
$PHORUM['DATA']['LANG']['Buddy']                     = 'Kumpel';
$PHORUM['DATA']['LANG']['BuddyAdd']                  = 'Teilnehmer meiner Liste der Kumpel hinzufügen';
$PHORUM['DATA']['LANG']['BuddyAddFail']              = 'Der Teilnehmer konnte nicht Deiner Liste der Kumpel hinzugefügt werden.';
$PHORUM['DATA']['LANG']['BuddyAddSuccess']           = 'Der Teilnehmer wurde Deiner Liste der Kumpel hinzugefügt.';
$PHORUM['DATA']['LANG']['BuddyListIsEmpty']          = 'Deine Liste der Kumpel ist leer.<br />Um Teilnehmer hinzuzufügen, öffne dessen Profil und klicke auf &quot;Teilnehmer meiner Liste der Kumpel hinzufügen&quot;.';
$PHORUM['DATA']['LANG']['CancelConfirm']             = 'Bist Du sicher, dass Du abbrechen willst?';
$PHORUM['DATA']['LANG']['ClickHereToLogin']          = 'Klicke hier, um Dich einzuloggen';
$PHORUM['DATA']['LANG']['ConfirmDeleteMessage']      = 'Willst Du diesen Beitrag wirklich löschen?';
$PHORUM['DATA']['LANG']['ConfirmDeleteThread']       = 'Willst Du dieses Thema wirklich löschen?';
$PHORUM['DATA']['LANG']['ConfirmReportMessage']      = 'Willst Du diesen Beitrag wirklich melden?';
$PHORUM['DATA']['LANG']['EditPostForbidden']         = 'Du hast leider keine Berechtigung, diesen Beitrag zu bearbeiten. Vielleicht liegt dies aber auch daran, dass der Administrator ein Zeitlimit für das Bearbeiten der Beiträge gesetzt hat.';
$PHORUM['DATA']['LANG']['EmailVerifyBody']           = "Hallo %uname%,\n\nDiese Email erhältst, weil Du im Profil eine Änderung Deiner Emailadresse angegeben hast. Um zu bestätigen, dass diese Adresse gültig ist, enthält diese Nachricht einen Bestätigungscode. Falls Du nicht %uname% bist, ignoriere diese Nachricht.\n\nDie neue Emailadresse ist: %newmail%\nDer Überprüfungs-Code lautet: %mailcode%\n\nGebe diesen Code zur Bestätigung der Änderung in Deinem Profil ein:\n\n<%cc_url%>\n\nDanke, ".$PHORUM['title'];
$PHORUM['DATA']['LANG']['EmailVerifyEnterCode']      = 'Bitte Email-Überprüfungs-Code eingeben, der Dir zugesandt wurde';
$PHORUM['DATA']['LANG']['EmailVerifySubject']        = 'Überprüfung Deiner neuen Emailadresse';
$PHORUM['DATA']['LANG']['ErrBannedContent']          = 'Ein Wort, das Du in Deiner Nachricht verwendest, wurde von uns gesperrt. Verwende bitte ein anderes Wort oder setze Dich mit den Administratoren des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrBannedEmail']            = 'Deine Emailadresse wurde von der Benutzung ausgeschlossen. Bitte benutze eine andere Emailadresse oder setze Dich mit den Administratoren des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrBannedIP']               = 'Deine IP-Adresse, Domain oder Dein Internetprovider wurde gesperrt. Bitte setze Dich mit den Administratoren des Forums in Verbindung';
$PHORUM['DATA']['LANG']['ErrBannedName']             = 'Dein Name oder Teilnehmername wurde von der Verwendung ausgeschlossen. Bitte wähle einen anderen Namen oder setze Dich mit den Administratoren des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrEmail']                  = 'Die Emailadresse scheint nicht gültig zu sein. Bitte überprüfe das noch einmal.';
$PHORUM['DATA']['LANG']['ErrPassword']               = 'Entweder ist das Kennwort falsch oder es wurde gar nicht eingegeben. Versuche es bitte nochmal.';
$PHORUM['DATA']['LANG']['ErrRegisterdEmail']         = 'Die von Dir angegebene Emailadresse wird bereits von einem anderen Teilnehmer verwendet. Wenn Du dieser Teilnehmer bist, logge Dich bitte ein. Ansonsten nutze bitte eine andere Emailadresse.';
$PHORUM['DATA']['LANG']['ErrRegisterdName']          = 'Dieser Name wird bereits von einem anderen Teilnehmer verwendet. Wenn Du derjenige bist, logge Dich bitte ein. Ansonsten nutze bitte einen anderen Namen.';
$PHORUM['DATA']['LANG']['ErrWrongMailcode']          = 'Du hast einen falschen Code eingegeben. Bitte versuche es noch einmal.';
$PHORUM['DATA']['LANG']['FileOverQuota']             = 'Die Datei konnte nicht hochgeladen werden. Die Größe der Datei würde dazu führen, dass Dein Speicherlimit überschritten würde. Es stehen Dir '.$PHORUM['file_space_quota'].'&nbsp;kB auf dem Server zur Verfügung.';
$PHORUM['DATA']['LANG']['FileQuotaLimits']           = 'Insgesamt darfst Du auf dem Server ablegen: ';
$PHORUM['DATA']['LANG']['FileTooLarge']              = 'Die Datei, die Du hochladen willst, überschreitet die erlaubte Größe. Bitte versuche nicht, Dateien hochzuladen, die größer als '.$PHORUM['max_file_size'].'&nbsp;kB sind.';
$PHORUM['DATA']['LANG']['FileWrongType']             = 'Dateien dieses Typs sind hier nicht für den Upload freigegeben. Folgende Dateitypen kannst Du hochladen: '.str_replace(';', ', ', $PHORUM['file_types']).'.';
$PHORUM['DATA']['LANG']['FollowExplanation']         = 'Abonnierte Themen werden in Deinem Kontrollzentrum aufgelistet.';
$PHORUM['DATA']['LANG']['FollowExplanationMail']     = 'Wenn Du die Email-Benachrichtigung auswählst, wirst Du informiert, sobald es neue Beiträge zu diesem Thema gibt.';
$PHORUM['DATA']['LANG']['FollowWithEmail']           = 'Willst Du per Email benachrichtigt werden, wenn zu diesem Thema ein neuer Beitrag geschrieben wird?';
$PHORUM['DATA']['LANG']['GroupJoinFail']             = 'Du konntest nicht als Teilnehmer hinzugefügt werden.';
$PHORUM['DATA']['LANG']['GroupJoinSuccess']          = 'Du wurdest erfolgreich Teilnehmer der Gruppe.';
$PHORUM['DATA']['LANG']['GroupJoinSuccessModerated'] = 'Dein Gesuch wurde registriert. Weil es sich um eine moderierte Gruppe handelt, muss Deine Zugehörigkeit von einem Moderator bestätigt werden.';
$PHORUM['DATA']['LANG']['HowToFollowThreads']        = 'Du kannst das Thema mit einem Klick auf &quot;Diese Diskussion verfolgen&quot; beim Lesen des Beitrags abonnieren. Wenn Du zusätzlich &quot;Antworten auf dieses Thema per Email zusenden&quot; beim Verfassen eines Beitrags anklickst, wird der Beitrag der Liste der Diskussionen hinzugefügt, die Du verfolgst.';
$PHORUM['DATA']['LANG']['InvalidLogin']              = 'Ungültige Anmeldung!<br /><br />Dies kann einen der folgende Gründe haben:<ol><li>1. Dein Teilnehmername wurde nicht gefunden oder Dein Kennwort ist falsch. Bitte kontrolliere Deine Eingaben und wiederhole die Anmeldung. Wenn Du Dein Kennwort vergessen hast, kannst Du ein neues Kennwort anfordern.</li><li>2. Deine Zugangsdaten wurden deaktiviert. Wende Dich bitte an einen Moderator.</li><li>3. Du hast Dich erst vor kurzem registriert und Deine Zugangsdaten sind noch nicht bestätigt. Du hast dazu von uns eine Email mit einem Bestätigungslink erhalten. Hast Du diesen Link bereits angeklickt? Oder es fehlt noch die die Zustimmung eines Moderators zu Deiner Registrierung.</li></ol>';
$PHORUM['DATA']['LANG']['JoinGroupDescription']      = 'Um einer Gruppe beizutreten, wähle diese aus der Liste aus. Die mit einem * markierten Gruppen sind moderiert, d.h. Deine Zugehörigkeit muss von einem Moderator akzeptiert werden.';
$PHORUM['DATA']['LANG']['LoginTitle']                = 'Bitte gebe für die Anmeldung Deinen Teilnehmernamen und das Kennwort ein.';
$PHORUM['DATA']['LANG']['LostPassEmailBody1']        = 'Du hast ein neues Kennwort für '.$PHORUM['title']." angefordert. Wenn Du selbst gar kein neues Kennwort angefordert hast, kannst Du getrost diese Email ignorieren und wie gewohnt Deine bisherigen Zugangsdaten verwenden.\n\nAnsonsten ist dies Dein neues Kennwort:";
$PHORUM['DATA']['LANG']['LostPassEmailBody2']        = 'Du kannst Dich nun bei '.$PHORUM['title'].' auf '.phorum_get_url(PHORUM_LOGIN_URL)." einloggen.\n\nDanke, ".$PHORUM['title'];
$PHORUM['DATA']['LANG']['LostPassEmailSubject']      = 'Deine Zugangsdaten für '.$PHORUM['title'];
$PHORUM['DATA']['LANG']['LostPassInfo']              = 'Wenn Du hier Deine Emailadresse eingibst, senden wir Dir ein neues Kennwort.';
$PHORUM['DATA']['LANG']['LostPassSent']              = 'Ein neues Kennwort wurde Dir per Email zugesandt.';
$PHORUM['DATA']['LANG']['LostPassword']              = 'Hast Du Dein Kennwort vergessen?';
$PHORUM['DATA']['LANG']['MergeThreadAction2']        = 'Möchtest Du die Verschmelzung fortsetzen?';
$PHORUM['DATA']['LANG']['MergeThreadInfo1']          = 'Du möchtest das folgende Thema mit einem anderen Thema verschmelzen.';
$PHORUM['DATA']['LANG']['MergeThreadInfo2']          = 'Gehe jetzt zum Thema, das mit dem gewählten Thema verschmolzen werden soll und wähle erneut &quot;Thema verschmelzen&quot;.';
$PHORUM['DATA']['LANG']['ModeratedForum']            = 'Dies ist ein moderiertes Forum. Dein Beitrag bleibt solange unsichtbar, bis er von einem Moderator genehmigt wurde.';
$PHORUM['DATA']['LANG']['MovedMessage']              = 'Dieses Thema wurde verschoben. Du wirst zur neuen Position weitergeleitet.';
$PHORUM['DATA']['LANG']['NewPrivateMessages']        = 'Du hast neue Privatnachrichten';
$PHORUM['DATA']['LANG']['NoGroupMembership']         = 'Du gehörst zu keiner Gruppe.';
$PHORUM['DATA']['LANG']['NoMoreEmails']              = 'Du erhältst keine weiteren Emails, wenn es neue Beiträge zum Thema gibt.';
$PHORUM['DATA']['LANG']['NoPost']                    = 'Du hast nicht die erforderliche Berechtigung, um in diesem Forum zu schreiben.';
$PHORUM['DATA']['LANG']['NoRead']                    = 'Du hast nicht die erforderliche Berechtigung, um dieses Forum einzusehen.';
$PHORUM['DATA']['LANG']['NoResultsHelp']             = 'Hinweis:<ul><li>Stelle sicher, dass alles richtig geschrieben ist.</li><li>Versuche andere Suchworte.</li><li>Versuche weiter gefasste Suchworte.</li><li>Versuche weniger Suchworte.</li></ul>';
$PHORUM['DATA']['LANG']['NotRegistered']             = 'Nicht registriert? &ndash; Klicke hier, um Dich zu registrieren.';
$PHORUM['DATA']['LANG']['PeriodicLogin']             = 'Zu Deiner Sicherheit ist es notwendig, Deine Anmelde-Informationen zu bestätigen, sobald Du diese Seite verlassen hast.';
$PHORUM['DATA']['LANG']['PermAdministrator']         = 'Du bist Administrator.';
$PHORUM['DATA']['LANG']['PleaseLoginRead']           = 'Entschuldige, nur registrierte Teilnehmer düfen dieses Forum lesen.';
$PHORUM['DATA']['LANG']['PMFolderDeleteConfirm']     = 'Bist Du sicher, dass Du den Ordner und alle enthaltenen Nachrichten löschen willst?';
$PHORUM['DATA']['LANG']['PMFolderDeleteExplain']     = '<b>Warnung:</b> Wenn Du einen Ordner löschst, werden auch alle enthaltenen Nachrichten gelöscht! Wenn diese einmal gelöscht sind, können sie nicht wieder hergestellt werden. Wenn Du die Nachrichten behalten willst, verschiebe diese bitte vorher in einen anderen Ordner.';
$PHORUM['DATA']['LANG']['PMFromMailboxFull']         = 'Du kannst keine Kopie dieser Nachricht speichern.<br />Dein Postfach ist voll.';
$PHORUM['DATA']['LANG']['PMNoRecipients']            = 'Du hast keine Empfänger für Deine Nachricht ausgewählt';
$PHORUM['DATA']['LANG']['PMNotSent']                 = 'Deine private Nachricht wurde nicht versandt. Es gab einen Fehler.';
$PHORUM['DATA']['LANG']['PMSent']                    = 'Deine private Nachricht wurde erfolgreich versandt.';
$PHORUM['DATA']['LANG']['PMSpaceFull']               = 'Dein Postfach für private Nachrichten ist voll.';
$PHORUM['DATA']['LANG']['PMSpaceLeft']               = 'Du kannst noch %pm_space_left% weitere private Nachricht(en) speichern.';
$PHORUM['DATA']['LANG']['PostErrorDuplicate']        = 'Es ist bereits ein exakt gleicher Beitrag im Forum enthalten. Duplikate sind nicht erlaubt; daher konnte Dein Beitrag nicht gespeichert werden.';
$PHORUM['DATA']['LANG']['PreviewExplain']            = 'So wird Dein Beitrag im Forum aussehen.';
$PHORUM['DATA']['LANG']['ReadOnlyMessage']           = 'In diesem Forum können zur Zeit keine Beiträge verfasst werden. Bitte versuche es später noch einmal.';
$PHORUM['DATA']['LANG']['RegAcctActive']             = 'Deine Registrierung war erfolgreich.';
$PHORUM['DATA']['LANG']['RegApprovedEmailBody']      = 'Du wurdest im Forum: '.$PHORUM['title'].' aufgenommen. Du kannst Dich in das Forum: '.$PHORUM['title'].' unter '.phorum_get_url(PHORUM_LOGIN_URL)." einloggen.\n\nDanke, ".$PHORUM['title'];
$PHORUM['DATA']['LANG']['RegApprovedSubject']        = 'Du wurdest aufgenommen.';
$PHORUM['DATA']['LANG']['RegVerifyEmail']            = 'Danke für die Registrierung. Du wirst in Kürze Details zur Aktivierung per Email bekommen.';
$PHORUM['DATA']['LANG']['RegVerifyFailed']           = 'Entschuldige, Deine Daten konnten nicht überprüft werden. Bitte stelle sicher, dass Du die komplette Web-Adresse verwendest, die Du per Email erhalten hast.';
$PHORUM['DATA']['LANG']['RegVerifyMod']              = 'Danke für Deine Registrierung. Die Zustimmung eines Moderators steht noch aus. Du erhältst eine Email, sobald man über Deine Zugehörigkeit entschieden hat.';
$PHORUM['DATA']['LANG']['RemoveFollowed']            = 'Du verfolgst diese Diskussion nicht.';
$PHORUM['DATA']['LANG']['ReportPostExplanation']     = 'Gib bitte eine Erläuterung, warum Du diesen Beitrag melden möchtest. Dies erleichtert es den Moderatoren, Deine Meldung zu verstehen.';
$PHORUM['DATA']['LANG']['ReportPostNotAllowed']      = 'Um einen Beitrag zu melden, mußt Du registriert sein.';
$PHORUM['DATA']['LANG']['RequireCookies']            = 'Bedaure! Du musst in Deinem Browser Cookies erlauben, damit Du Dich in diesem Forum erfolgreich anmelden kannst.';
$PHORUM['DATA']['LANG']['ScriptUsage']               = 'Syntax : php script.php [--module=<module_name> | --scheduled] [options]--module=<module_name>   Führt das entsprechende Modul aus. --scheduled   Führt alle Module aus, die keine Einträge brauchen.  [options] Während des Ausführens werden diese Optionen an das Modul weitergegeben. Bitte konsultiere die Dokumentation des entsprechenden Moduls. Mit --scheduled werden diese ignoriert.';
$PHORUM['DATA']['LANG']['SearchRunning']             = 'Deine Suche läuft. Bitte ein wenig Geduld.';
$PHORUM['DATA']['LANG']['UploadNotAllowed']          = 'Du darfst leider keine Dateien auf diesen Server hochladen.';
$PHORUM['DATA']['LANG']['UserNotFound']              = 'Der Teilnehmer, an den Deine Nachricht adressiert war, konnte nicht gefunden werden. Bitte überprüfe den Namen und versuchen es noch einmal.';
$PHORUM['DATA']['LANG']['UserNotFoundGroup']         = 'Der Teilnehmer, den Du der Gruppe hinzufügen wollest, konnte nicht gefunden werden. Bitte überprüfe den Namen und versuche es noch einmal.';
$PHORUM['DATA']['LANG']['VerifyRegEmailBody1']       = "Vielen Dank für Deine Registrierung in unserem Diskussionsforum.\n\nBitte aktiviere Deinen Benutzer durch einen Klick auf:";
$PHORUM['DATA']['LANG']['VerifyRegEmailBody2']       = 'Anschließend kannst Du Dich hier einloggen: '.phorum_get_url(PHORUM_LOGIN_URL)."\n\nViele Grüße\n".$PHORUM['title'];
$PHORUM['DATA']['LANG']['VerifyRegEmailSubject']     = 'Deine Registrierung bei '.$PHORUM['title'];
$PHORUM['DATA']['LANG']['YourEmail']                 = 'Deine Emailadresse';
$PHORUM['DATA']['LANG']['YourName']                  = 'Dein vollständiger Name';
$PHORUM['DATA']['LANG']['YouWantToFollow']           = 'Du hast angegeben, dass Du dieser Diskussion folgen möchtest:';

?>
