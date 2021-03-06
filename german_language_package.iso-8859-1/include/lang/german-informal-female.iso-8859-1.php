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

include(str_replace('-informal-female', '-informal-male', __FILE__));

$language = 'Deutsch (Du) weiblich';

$PHORUM['DATA']['LANG']['Admin']                     = 'Administratorin';
$PHORUM['DATA']['LANG']['AddToGroup']                = 'Neue Teilnehmerin zu Gruppe hinzuf�gen:';
$PHORUM['DATA']['LANG']['AllowSeeActivity']          = 'Andere Teilnehmerinnen sollen sehen, dass ich online bin';
$PHORUM['DATA']['LANG']['AllowSeeEmail']             = 'Meine Emailadresse anderen Teilnehmerinnen sichtbar machen';
$PHORUM['DATA']['LANG']['AnonymousUser']             = 'Anonyme Teilnehmerin';
$PHORUM['DATA']['LANG']['Author']                    = 'Autorin';
$PHORUM['DATA']['LANG']['Buddies']                   = 'Liste der Freundinnen';
$PHORUM['DATA']['LANG']['Buddy']                     = 'Freundin';
$PHORUM['DATA']['LANG']['BuddyAdd']                  = 'Teilnehmerin meiner Liste der Freundinnen hinzuf�gen';
$PHORUM['DATA']['LANG']['BuddyAddFail']              = 'Die Teilnehmerin konnte nicht Deiner Liste der Freundinnen hinzugef�gt werden.';
$PHORUM['DATA']['LANG']['BuddyAddSuccess']           = 'Die Teilnehmerin wurde Deiner Liste der Freundinnen hinzugef�gt.';
$PHORUM['DATA']['LANG']['BuddyListIsEmpty']          = 'Deine Liste der Freundinnen ist leer.<br />Um Teilnehmerinnen hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmerin meiner Liste der Freundinnen hinzuf�gen&quot;.';
$PHORUM['DATA']['LANG']['EditPostForbidden']         = 'Du hast leider keine Berechtigung, diesen Beitrag zu bearbeiten. Vielleicht liegt dies aber auch daran, dass die Administratorin ein Zeitlimit f�r das Bearbeiten der Beitr�ge gesetzt hat.';
$PHORUM['DATA']['LANG']['ErrAuthor']                 = 'Bitte Autorin angeben.';
$PHORUM['DATA']['LANG']['ErrBannedContent']          = 'Ein Wort, das Du in Deiner Nachricht verwendest, wurde von uns gesperrt. Verwende bitte ein anderes Wort oder setze Dich mit den Administratorinnen des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrBannedEmail']            = 'Deine Emailadresse wurde von der Benutzung ausgeschlossen. Bitte benutze eine andere Emailadresse oder setze Dich mit den Administratorinnen des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrBannedIP']               = 'Deine IP-Adresse, Domain oder Dein Internetprovider wurde gesperrt. Bitte setze Dich mit den Administratorinnen des Forums in Verbindung';
$PHORUM['DATA']['LANG']['ErrBannedName']             = 'Dein Name oder Teilnehmername wurde von der Verwendung ausgeschlossen. Bitte w�hle einen anderen Namen oder setze Dich mit den Administratorinnen des Forums in Verbindung.';
$PHORUM['DATA']['LANG']['ErrBannedUser']             = 'Die Teilnehmerin &quot;%name%&quot; wurde gesperrt.';
$PHORUM['DATA']['LANG']['ErrEmailExists']            = 'Die eingegebene Emailadresse ist bereits einer anderen Teilnehmerin zugeordnet.';
$PHORUM['DATA']['LANG']['ErrRegisterdEmail']         = 'Die von Dir angegebene Emailadresse wird bereits von einer anderen Teilnehmerin verwendet. Wenn Du diese Teilnehmerin bist, logge Dich bitte ein. Ansonsten nutze bitte eine andere Emailadresse.';
$PHORUM['DATA']['LANG']['ErrRegisterdName']          = 'Dieser Name wird bereits von einer anderen Teilnehmerin verwendet. Wenn Du diejenige bist, logge Dich bitte ein. Ansonsten nutze bitte einen anderen Namen.';
$PHORUM['DATA']['LANG']['ErrUserAddUpdate']          = 'Teilnehmerin nicht hinzugef�gt/ge�ndert. Unbekannter Fehler.';
$PHORUM['DATA']['LANG']['ErrUsername']               = 'Bitte Name der Teilnehmerin angeben.';
$PHORUM['DATA']['LANG']['GroupJoinFail']             = 'Du konntest nicht als Teilnehmerin hinzugef�gt werden.';
$PHORUM['DATA']['LANG']['GroupJoinSuccess']          = 'Du wurdest erfolgreich Teilnehmerin der Gruppe.';
$PHORUM['DATA']['LANG']['GroupJoinSuccessModerated'] = 'Dein Gesuch wurde registriert. Weil es sich um eine moderierte Gruppe handelt, muss Deine Zugeh�rigkeit von einer Moderatorin best�tigt werden.';
$PHORUM['DATA']['LANG']['GroupMemberList']           = 'Liste aller Gruppenteilnehmerinnen';
$PHORUM['DATA']['LANG']['InvalidLogin']              = 'Ung�ltige Anmeldung!<br /><br />Dies kann einen der folgende Gr�nde haben:<ol><li>1. Dein Name der Teilnehmerin wurde nicht gefunden oder Dein Kennwort ist falsch. Bitte kontrolliere Deine Eingaben und wiederhole die Anmeldung. Wenn Du Dein Kennwort vergessen hast, kannst Du ein neues Kennwort anfordern.</li><li>2. Deine Zugangsdaten wurden deaktiviert. Wende Dich bitte an eine Moderatorin.</li><li>3. Du hast Dich erst vor kurzem registriert und Deine Zugangsdaten sind noch nicht best�tigt. Du hast dazu von uns eine Email mit einem Best�tigungslink erhalten. Hast Du diesen Link bereits angeklickt? Oder es fehlt noch die die Zustimmung einer Moderatorin zu Deiner Registrierung.</li></ol>';
$PHORUM['DATA']['LANG']['JoinGroupDescription']      = 'Um einer Gruppe beizutreten, w�hle diese aus der Liste aus. Die mit einem * markierten Gruppen sind moderiert, d.h. Deine Zugeh�rigkeit muss von einer Moderatorin akzeptiert werden.';
$PHORUM['DATA']['LANG']['Member']                    = 'Teilnehmerin';
$PHORUM['DATA']['LANG']['ModeratedForum']            = 'Dies ist ein moderiertes Forum. Dein Beitrag bleibt solange unsichtbar, bis er von einer Moderatorin genehmigt wurde.';
$PHORUM['DATA']['LANG']['NewModeratedMessage']       = "Forum: %forumname%\nBetreff: %subject%\nAutorin: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n\n--\nBeitrag freigeben: %approve_url%\n";
$PHORUM['DATA']['LANG']['NewReplyMessage']           = "Forum: %forumname%\nBetreff: %subject%\nAutorin: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n\n--\nAbo f�r dieses Thema aufheben: %remove_url%\nKeine weitere Email, aber das Thema weiter beobachten: %noemail_url%\nAbonnierte Themen anzeigen: %followed_threads_url%\n";
$PHORUM['DATA']['LANG']['NewUnModeratedMessage']     = "Forum: %forumname%\nBetreff: %subject%\nAutorin: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n";
$PHORUM['DATA']['LANG']['NoUnapprovedUsers']         = 'Zur Zeit keine neuen Teilnehmerinnen vorhanden';
$PHORUM['DATA']['LANG']['PermAdministrator']         = 'Du bist Administratorin.';
$PHORUM['DATA']['LANG']['PermModerator']             = 'Moderatorin';
$PHORUM['DATA']['LANG']['PleaseLoginPost']           = 'In diesem Forum d�rfen leider nur registrierte Teilnehmerinnen schreiben.';
$PHORUM['DATA']['LANG']['PleaseLoginRead']           = 'Entschuldige, nur registrierte Teilnehmerinnen d�fen dieses Forum lesen.';
$PHORUM['DATA']['LANG']['PMNoRecipients']            = 'Du hast keine Empf�ngerinnen f�r Deine Nachricht ausgew�hlt';
$PHORUM['DATA']['LANG']['PMNotifyMessage']           = 'Privatnachricht bei '.$PHORUM['title']."\n\nBetreff: %subject%\nAutorin: %author%\nLink zur Nachricht: %read_url%\n\n%plain_body%\n";
$PHORUM['DATA']['LANG']['PMSelectARecipient']        = 'Empf�ngerin ausw�hlen&nbsp;&hellip;';
$PHORUM['DATA']['LANG']['PMToMailboxFull']           = 'Die Nachricht konnte nicht versandt werden.<br />Das Postfach der Teilnehmerin &quot;%recipient%&quot; ist voll.';
$PHORUM['DATA']['LANG']['ReceiveModerationMails']    = 'Ich m�chte Benachrichtigungen f�r Moderatorinnen empfangen.';
$PHORUM['DATA']['LANG']['Recipients']                = 'Empf�ngerinnen';
$PHORUM['DATA']['LANG']['RegVerifyMod']              = 'Danke f�r Deine Registrierung. Die Zustimmung einer Moderatorin steht noch aus. Du erh�ltst eine Email, sobald man �ber Deine Zugeh�rigkeit entschieden hat.';
$PHORUM['DATA']['LANG']['ReportPostEmailBody']       = '"%reportedby% hat aus folgendem Grund einen Beitrag gemeldet:\n%explanation%\n\nBeitrag : %url%\n\nForum:    %forumname%\nBetreff:  %subject%\nAutorin:  %author%\nIP:       %ip%\nDatum:    %date%\n\n%body%\n\n\nBeitrag l�schen:\n%delete_url%\n\nBeitrag verbergen:\n%hide_url%\n\nBeitrag bearbeiten:\n%edit_url%\n\nProfil von %reportedby% anzeigen:\n%reporter_url%"';
$PHORUM['DATA']['LANG']['ReportPostExplanation']     = 'Gib bitte eine Erl�uterung, warum Du diesen Beitrag melden m�chtest. Dies erleichtert es den Moderatorinnen, Deine Meldung zu verstehen.';
$PHORUM['DATA']['LANG']['ReportPostSuccess']         = 'Dieser Beitrag wurde den Moderatorinnen des Forums gemeldet.';
$PHORUM['DATA']['LANG']['SearchAuthors']             = 'Autorinnen durchsuchen';
$PHORUM['DATA']['LANG']['ShowGroupModerator']        = 'Gruppenmoderatorinnen';
$PHORUM['DATA']['LANG']['ShowSuspended']             = 'Gesperrte Teilnehmerinnen';
$PHORUM['DATA']['LANG']['ShowUnapproved']            = 'Noch nicht akzeptierte Teilnehmerinnen';
$PHORUM['DATA']['LANG']['TotalRecipients']           = 'Anzahl Empf�ngerinnen';
$PHORUM['DATA']['LANG']['UnapprovedGroupMembers']    = 'Es gibt Gruppenteilnehmerinnen, die noch nicht akzeptiert wurden';
$PHORUM['DATA']['LANG']['UnapprovedUsers']           = '(Noch) nicht akzeptierte Teilnehmerinnen';
$PHORUM['DATA']['LANG']['UnapprovedUsersLong']       = 'Es gibt Teilnehmerinnen, die noch nicht akzeptiert wurden';
$PHORUM['DATA']['LANG']['UnknownUser']               = 'Diese Teilnehmerin existiert nicht oder wurde deaktiviert.';
$PHORUM['DATA']['LANG']['UserAddedToGroup']          = 'Teilnehmerin wurde der Gruppe hinzugef�gt.';
$PHORUM['DATA']['LANG']['Username']                  = 'Name der Teilnehmerin';
$PHORUM['DATA']['LANG']['UserNotFound']              = 'Die Teilnehmerin, an die Deine Nachricht adressiert war, konnte nicht gefunden werden. Bitte �berpr�fe den Namen und versuchen es noch einmal.';
$PHORUM['DATA']['LANG']['UserNotFoundGroup']         = 'Die Teilnehmerin, die Du der Gruppe hinzuf�gen wollest, konnte nicht gefunden werden. Bitte �berpr�fe den Namen und versuche es noch einmal.';
$PHORUM['DATA']['LANG']['UserPermissions']           = 'Rechte der Teilnehmerin';
$PHORUM['DATA']['LANG']['UserProfile']               = 'Profil der Teilnehmerin';

?>
