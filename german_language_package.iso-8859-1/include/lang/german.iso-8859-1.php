<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// DON'T TOUCH THIS FILE IF YOU WANT BE ABLE TO UPDATE THE GERMAN LANGUAGE
// FILES PACKAGE IN THE FUTURE. USE INSTEAD THE FILES IN
// mods/german_language_support/lang/

// The following explanations are written in german only.

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

$language = 'Deutsch (Sie)';

// Setzen Sie den nachfolgenden Wert auf 1, wenn Sie diese Sprachdatei von
// der Teilnehmerauswahl ausschließen möchten.
$language_hide = 0;

// Einstellungen für die Datums- und Zeitanzeige
// Konsultieren Sie die Dokumentation zu PHP, um mehr über die Syntax
// dieser Eintragungen zu erfahren:
// http://www.php.net/manual/de/function.date.php
//
// Vermeiden Sie das Formatzeichen T (Zeitzoneneinstellung des Rechners),
// da die Teilnehmer Ihre Zeitzonen selbst festlegen können.
$PHORUM['long_date_time'] = '%d. %B %Y %H:%M';
$PHORUM['short_date_time'] = '%d.%m.%y %H:%M';
$PHORUM['long_date'] = '%d. %B %Y';
$PHORUM['short_date'] = '%d.%m.%y';

// Einstellungen für lokalisierte Datums- und Zeitanzeige
// Konsultieren Sie die Dokumentation zu PHP, um mehr über die Syntax
// dieser Eintragungen zu erfahren:
// http://de.php.net/manual/de/function.setlocale.php
// Der Eintrag muss auf Ihrem Server auch vorhanden sein!
// Unter Linux kontrollieren Sie dies mit "locale -a".
//
$PHORUM['locale'] = 'de_DE';
// Alternativen:
// $PHORUM['locale'] = 'de_DE';
// $PHORUM['locale'] = 'de_AT';
// $PHORUM['locale'] = 'de_CH';
// $PHORUM['locale'] = 'de';
// $PHORUM['locale'] = 'DE';
// $PHORUM['locale'] = 'ge'; // Win XP und Win2000 Advanced Server

// Numeric separators used to format numbers
$PHORUM['thous_sep'] = '.';
$PHORUM['dec_sep'] = ',';

// Zeichensatz für die Darstellung spezieller Zeichen.
// iso-8859-1 Westeuropäisch, Latin-1.
// utf-8 ASCII-kompatibles Multi-Byte 8-Bit Unicode.
$PHORUM['DATA']['CHARSET'] = 'iso-8859-1';

// The charset to use for htmlspecialchars() calls. PHP does
// not implement all available charsets, which might result in
// warning messages if an unsupported charset is used.
//
// See http://www.php.net/htmlspecialchars for info on charset
// compatibility. If the charset that you specified above is
// compatible with htmlspecialchars(), then you can leave this
// variable empty. Otherwise, specify a compatible character
// set (ISO-8859-1 is usually a good choice for this).
$PHORUM['DATA']['HCHARSET']='ISO-8859-1';

// Einige Sprachen benötigen eine zusätzliche Angabe des Zeichensatzes im
// Meta-Tag.
$PHORUM['DATA']['LANG_META'] = '';

// Zeichensatz für ausgehende Emails
$PHORUM['DATA']['MAILENCODING'] = '8bit';

/*-----------------------------------------------------*/

$PHORUM['DATA']['LANG'] = array(
    'Activity'                  => 'Nur Beiträge zeigen, die aktiv waren in den letzten',
    'ActivityPost'              =>  '', // needed for some languages
    'Add'                       => 'Hinzufügen',
    'AddSig'                    => 'Meine Signatur hinzufügen.',
    'AddSigDefault'             => '&quot;Meine Signatur hinzufügen&quot; standardmäßig aktivieren',
    'AddToGroup'                => 'Neuen Teilnehmer zu Gruppe hinzufügen:',
    'Admin'                     => 'Administrator',
    'AdminOnlyMessage'          => 'Das Forum ist zur Zeit nicht verfügbar. Bitte versuchen Sie es später noch einmal.',
    'Advanced'                  => 'Erweiterte Suche',
    'again'                     => 'Kennwort wiederholen',
    'AllDates'                  => 'jeden Alters',
    'AllNotShown'               => 'alle unsichtbaren Beiträge',
    'AllowReplies'              => 'Antworten erlauben',
    'AllowSeeActivity'          => 'Andere Teilnehmer sollen sehen, dass ich online bin',
    'AllowSeeEmail'             => 'Meine Emailadresse anderen Teilnehmern sichtbar machen',
    'Announcement'              => 'Bekanntmachung',
    'Announcements'             => 'Bekanntmachungen',
    'AnonymousUser'             => 'Anonymer Teilnehmer',
    'Approved'                  => 'Akzeptiert',
    'ApproveMessage'            => 'Akzeptieren',
    'ApproveMessageReplies'     => 'Akzeptieren&nbsp;und&nbsp;antworten',
    'ApproveUser'               => 'akzeptieren',
    'AreYouSure'                => 'Sind Sie sicher?',
    'ATOM'                      => 'Atom',
    'Attach'                    => 'anhängen',
    'AttachAnotherFile'         => 'weitere Datei anhängen',
    'AttachCancel'              => 'Ihr Beitrag wurde verworfen.',
    'AttachDownload'            => 'Download',
    'AttachAFile'               => 'Datei anhängen',
    'AttachFileSize'            => 'Die Dateien dürfen jeweils nicht größer sein als: %size%',
    'AttachFileTypes'           => 'Folgende Dateitypen können angehängt werden: %types%',
    'AttachFull'                => 'Sie haben die maximal erlaubte Anzahl an Dateianhängen erreicht.',
    'AttachInvalidType'         => 'Diese Datei ist kein gültiger Anhang.',
    'AttachMaxAttachments'      => '%count% zusätzliche Dateien können an den Beitrag angehängt werden',
    'AttachmentAdded'           => 'Die Datei wurde erfolgreich zum Beitrag hinzugefügt.',
    'Attachments'               => 'Anhänge',
    'AttachmentsMissing'        => 'Das Anhängen der Dateien ist fehlgeschlagen, versuchen Sie es bitte erneut.',
    'AttachNotAllowed'          => 'Es ist Ihnen leider nicht erlaubt, Dateien anzuhängen.',
    'AttachOpen'                => 'Öffnen',
    'AttachTotalFileSize'       => 'alle Dateien zusammen dürfen nicht größer sein als %size%',
    'Author'                    => 'Autor',

    'BacktoForum'               => 'Zurück zum Forum',
    'BackToForumList'           => 'Zurück zur Forenliste',
    'BackToList'                => 'Hier klicken, um zur Themenübersicht zurückzukehren.',
    'BackToSearch'              => 'Hier klicken, um zur Suche zurückzukehren.',
    'BackToThread'              => 'Hier klicken, um zum Thema zurückzukehren.',
    'BookmarkedThread'          => 'Sie verfolgen dieses Thema in Ihrem Kontrollzentrum.',
    'Buddies'                   => 'Liste der Kontakte',
    'Buddy'                     => 'Kontakt',
    'BuddyAdd'                  => 'Teilnehmer meiner Liste der Kontakte hinzufügen',
    'BuddyAddFail'              => 'Der Teilnehmer konnte nicht Ihrer Liste der Kontakte hinzugefügt werden.',
    'BuddyAddSuccess'           => 'Der Teilnehmer wurde Ihrer Liste der Kontakte hinzugefügt.',
    'BuddyListIsEmpty'          => 'Ihre Liste der Kontakte ist leer.<br />Um Teilnehmer hinzuzufügen, öffnen Sie dessen Profil und klicken auf &quot;Teilnehmer meiner Liste der Kontakte hinzufügen&quot;.',
    'by'                        => 'von',

    'Cancel'                    => 'Abbrechen',
    'CancelConfirm'             => 'Sind Sie sicher, dass Sie abbrechen wollen?',
    'CannotBeRunFromBrowser'    => 'Dieses Skript kann nicht von einem Webbrowser aus gestartet werden.',
    'ChangeBy'                  => 'geändert durch',
    'ChangeDate'                => 'Änderungsdatum',
    'ChangeHistory'             => 'Änderungshistorie',
    'ChangePassword'            => 'Kennwort ändern',
    'ChangesSaved'              => 'Die Änderungen wurden gespeichert.',
    'ClickHereToLogin'          => 'Klicken Sie hier, um sich einzuloggen',
    'CloseThread'               => 'Beenden',
    'ConfirmDeleteMessage'      => 'Wollen Sie diesen Beitrag wirklich löschen?',
    'ConfirmDeleteThread'       => 'Wollen Sie dieses Thema wirklich löschen?',
    'ConfirmReportMessage'      => 'Wollen Sie diesen Beitrag wirklich melden?',
    'CurrentPage'               => 'Aktuelle Seite',

    'Date'                      => 'Datum',
    'DateActive'                => 'Zuletzt aktiv',
    'DateAdded'                 => 'Datum hinzugefügt',
    'DatePosted'                => 'gesendet innerhalb',
    'DateReg'                   => 'Registrierungsdatum',
    'Day'                       => 'Tag',
    'Days'                      => 'Tage',
    'Default'                   => 'Standard',
    'Delete'                    => 'Löschen',
    'DeleteMessage'             => 'Beitrag&nbsp;löschen',
    'DeleteThread'              => 'Thema löschen',
    'DelMessReplies'            => 'Beitrag samt Antworten löschen',
    'DenyUser'                  => 'ablehnen',
    'Detach'                    => 'Löschen',

    'EditBoardsettings'         => 'Foreneinstellungen',
    'EditedMessage'             => '%count%-mal bearbeitet. Zuletzt am %lastedit%.',
    'EditFolders'               => 'Ordner bearbeiten',
    'EditMailsettings'          => 'Email-Einstellungen ändern',
    'EditMessage'               => 'Beitrag bearbeiten',
    'EditMyFiles'               => 'Meine Dateien bearbeiten',
    'EditPost'                  => 'Bearbeiten',
    'EditPostForbidden'         => 'Sie haben leider keine Berechtigung, diesen Beitrag zu bearbeiten. Vielleicht liegt dies aber auch daran, dass der Administrator ein Zeitlimit für das Bearbeiten der Beiträge gesetzt hat.',
    'EditPrivacy'               => 'Privatsphäre anpassen',
    'EditSignature'             => 'Signatur ändern',
    'EditUserinfo'              => 'Mein Profil ändern',
    'Email'                     => 'Email',
    'EmailConfirmRequired'      => 'Bestätigung via Email obligatorisch',
    'EmailReplies'              => 'Email an mich bei Antworten zu diesem Thema.',
    'EmailVerify'               => 'Email-Überprüfung',
    'EmailVerifyBody'           => "Guten Tag %uname%,\n\nDiese Email erhalten Sie, weil Sie im Profil eine Änderung Ihrer Emailadresse angegeben haben. Um zu bestätigen, dass diese Adresse gültig ist, enthält diese Nachricht einen Bestätigungscode. Falls Sie nicht %uname% sind, ignorieren Sie diese Nachricht.\n\nDie neue Emailadresse ist: %newmail%\nDer Überprüfungs-Code lautet: %mailcode%\n\nGeben Sie diesen Code zur Bestätigung der Änderung in Ihrem Profil ein:\n\n<%cc_url%>\n\nDanke, ".$PHORUM['title'],
    'EmailVerifyDesc'           => 'Überprüfung neuer Emailadressen',
    'EmailVerifyEnterCode'      => 'Bitte Email-Überprüfungs-Code eingeben, der Ihnen zugesandt wurde',
    'EmailVerifySubject'        => 'Überprüfung Ihrer neuen Emailadresse',
    'EnableNotifyDefault'       => 'Welche Option für das Abonnement möchten Sie als Standard festlegen?',
    'ErrAuthor'                 => 'Bitte Autor angeben.',
    'ErrBannedContent'          => 'Ein Wort, das Sie in Ihrer Nachricht verwenden, wurde von uns gesperrt. Verwenden Sie bitte ein anderes Wort oder setzen Sie sich mit den Administratoren des Forums in Verbindung.',
    'ErrBannedEmail'            => 'Ihre Emailadresse wurde von der Benutzung ausgeschlossen. Bitte benutzen Sie eine andere Emailadresse oder setzen Sie sich mit den Administratoren des Forums in Verbindung.',
    'ErrBannedIP'               => 'Ihre IP-Adresse, Domain oder Ihr Internetprovider wurde gesperrt. Bitte setzen Sie sich mit den Administratoren des Forums in Verbindung.',
    'ErrBannedName'             => 'Ihr Name oder Teilnehmername wurde von der Verwendung ausgeschlossen. Bitte wählen Sie einen anderen Namen oder setzen Sie sich mit den Administratoren des Forums in Verbindung.',
    'ErrBannedUser'             => 'Der Teilnehmer &quot;%name%&quot; wurde gesperrt.',
    'ErrBody'                   => 'Bitte einen Beitrag schreiben.',
    'ErrBodyTooLarge'           => 'Bitte den Beitrag kürzen, es sind zuviele Zeichen.',
    'ErrEmail'                  => 'Die Emailadresse scheint nicht gültig zu sein. Bitte überprüfen Sie das noch einmal.',
    'ErrEmailExists'            => 'Die eingegebene Emailadresse ist bereits einem anderen Teilnehmer zugeordnet.',
    'ErrOriginalPassword'       => 'Das eingegebene Original-Kennwort entspricht nicht dem gespeicherten Kennwort.',
    'ErrPassword'               => 'Entweder ist das Kennwort falsch oder es wurde kein neues Kennwort eingegeben. Versuchen Sie es bitte nochmal.',
    'ErrRegisterdEmail'         => 'Die von Ihnen angegebene Emailadresse wird bereits von einem anderen Teilnehmer verwendet. Wenn Sie dieser Teilnehmer sind, loggen Sie sich bitte ein. Ansonsten nutzen Sie bitte eine andere Emailadresse.',
    'ErrRegisterdName'          => 'Dieser Name wird bereits von einem anderen Teilnehmer verwendet. Wenn Sie derjenige sind, loggen Sie sich bitte ein. Ansonsten nutzen Sie bitte einen anderen Namen.',
    'ErrRequired'               => 'Bitte die geforderten Felder ausfüllen.',
    'ErrSubject'                => 'Bitte ein Thema angeben.',
    'ErrUserAddUpdate'          => 'Teilnehmer nicht hinzugefügt/geändert. Unbekannter Fehler.',
    'ErrUsername'               => 'Bitte Teilnehmername angeben.',
    'ErrWrongMailcode'          => 'Sie haben einen falschen Code eingegeben. Bitte versuchen Sie es noch einmal.',

    'FileAdded'                 => 'Die Datei wurde erfolgreich hochgeladen.',
    'Filename'                  => 'Dateiname',
    'FileOverQuota'             => 'Die Datei konnte nicht hochgeladen werden. Die Größe der Datei würde dazu führen, dass Ihr Speicherlimit überschritten würde. Es stehen Ihnen '.$PHORUM['file_space_quota'].'&nbsp;kB auf dem Server zur Verfügung.',
    'FileQuotaLimits'           => 'Insgesamt dürfen Sie auf dem Server ablegen: ',
    'Files'                     => 'Meine Dateien',
    'Filesize'                  => 'Dateigröße',
    'FileSizeLimits'            => 'Die maximale Größe der Dateien für den Upload beträgt: ',
    'FileTooLarge'              => 'Die Datei, die Sie hochladen wollen, überschreitet die erlaubte Größe. Bitte versuchen Sie nicht, Dateien hochzuladen, die größer als '.$PHORUM['max_file_size'].'&nbsp;kB sind.',
    'FileTypeLimits'            => 'Nur die folgenden Dateitypen dürfen hochgeladen werden: '.str_replace(';', ', ', $PHORUM['file_types']).'.',
    'FileWrongType'             => 'Dateien dieses Typs sind hier nicht für den Upload freigegeben. Folgende Dateitypen können Sie hochladen: '.str_replace(';', ', ', $PHORUM['file_types']).'.',
    'Filter'                    => 'Filter',
    'FirstPage'                 => 'Anfang',
    'Folders'                   => 'Ordnerliste',
    'FollowExplanation'         => 'Abonnierte Themen werden in Ihrem Kontrollzentrum aufgelistet.',
    'FollowExplanationMail'     => 'Wenn Sie die Email-Benachrichtigung auswählen, werden Sie informiert, sobald es neue Beiträge zu diesem Thema gibt.',
    'FollowThread'              => 'Abonnieren',
    'FollowWithEmail'           => 'Benachrichtigen, wenn zu diesem Thema ein neuer Beitrag geschrieben wird?',
    'FollowWithEmailCC'         => 'Thema abonnieren und Antworten per Email zusenden.',
    'Forum'                     => 'Forum',
    'ForumFolder'               => 'Forenordner',
    'ForumList'                 => 'Forenliste',
    'Forums'                    => 'Foren',
    'From'                      => 'Von',

    'Go'                        => 'Start',
    'Goto'                      => 'Navigation',
    'GotoThread'                => 'Gehe zum Thema',
    'Group'                     => 'Gruppe',
    'GroupJoinFail'             => 'Sie konnten nicht als Teilnehmer hinzugefügt werden.',
    'GroupJoinSuccess'          => 'Sie wurden erfolgreich Teilnehmer der Gruppe.',
    'GroupJoinSuccessModerated' => 'Ihr Gesuch wurde registriert. Weil es sich um eine moderierte Gruppe handelt, muss Ihre Zugehörigkeit von einem Moderator bestätigt werden.',
    'GroupMemberList'           => 'Liste aller Gruppenteilnehmer: ',
    'GroupMembership'           => 'Meine Gruppen sind',

    'Hidden'                    => 'versteckt',
    'HideMessage'               => 'Beitrag samt Antworten verstecken',
    'Home'                      => 'Home',
    'HowToFollowThreads'        => 'Sie können das Thema mit einem Klick auf &quot;Diese Diskussion verfolgen&quot; beim Lesen des Beitrags abonnieren. Wenn Sie zusätzlich &quot;Antworten auf dieses Thema per Email zusenden&quot; beim Verfassen eines Beitrags anklicken, wird der Beitrag der Liste der Diskussionen hinzugefügt, die Sie verfolgen.',

    'INBOX'                     => 'Eingang',
    'InReplyTo'                 => 'Als Antwort auf',
    'InvalidLogin'              => 'Ungültige Anmeldung!<br /><br />Dies kann einen der folgende Gründe haben:<ol><li>Ihr Teilnehmername wurde nicht gefunden oder Ihr Kennwort ist falsch. Bitte kontrollieren Sie Ihre Eingaben und wiederholen sie die Anmeldung. Wenn Sie Ihr Kennwort vergessen haben, können Sie ein neues Kennwort anfordern.</li><li>Ihre Zugangsdaten wurden deaktiviert. Wenden Sie sich bitte an einen Moderator.</li><li>Sie haben sich erst vor kurzem registriert und Ihre Zugangsdaten sind noch nicht bestätigt. Sie haben dazu von uns eine Email mit einem Bestätigungslink erhalten. Haben Sie diesen Link bereits angeklickt? Oder es fehlt noch die die Zustimmung eines Moderators zu Ihrer Registrierung.</li></ol>',
    'IP'                        => 'IP-Adresse/Host',
    'IPLogged'                  => 'IP-Adresse bekannt',
    'IsDST'                     => 'Sommerzeit aktiv',

    'Join'                      => 'Beitreten',
    'JoinAGroup'                => 'Einer Gruppe beitreten',
    'JoinGroupDescription'      => 'Um einer Gruppe beizutreten, wählen Sie diese aus der Liste aus. Die mit einem * markierten Gruppen sind moderiert, d.h. Ihre Zugehörigkeit muss von einem Moderator akzeptiert werden.',

    'KeepCopy'                  => 'Eine Kopie in &quot;Gesendet&quot; speichern',

    'Language'                  => 'Sprache',
    'Last30Days'                => 'Die letzten 30 Tage',
    'Last365Days'               => 'Letzten Jahres',
    'Last90Days'                => 'Die letzten 90 Tage',
    'LastPage'                  => 'Ende  ',
    'LastPost'                  => 'Letzter Beitrag',
    'LastPostLink'              => 'Letzter Beitrag',
    'ListThreads'               => 'Abonnierte Themen',
    'LogIn'                     => 'Anmelden',
    'LoginTitle'                => 'Bitte geben Sie für die Anmeldung Ihren Teilnehmernamen und das Kennwort ein.',
    'LogOut'                    => 'Abmelden',
    'LostPassEmailBody1'        => 'Sie haben ein neues Kennwort für '.$PHORUM['title']." angefordert. Wenn Sie selbst gar kein neues Kennwort angefordert haben, können Sie getrost diese Email ignorieren und wie gewohnt Ihre bisherigen Zugangsdaten verwenden.\n\nAnsonsten ist dies Ihr neues Kennwort:",
    'LostPassEmailBody2'        => 'Sie können sich nun bei '.$PHORUM['title'].' auf '.phorum_get_url(PHORUM_LOGIN_URL)." einloggen.\n\nDanke, ".$PHORUM['title'],
    'LostPassEmailSubject'      => 'Ihre Zugangsdaten für '.$PHORUM['title'],
    'LostPassError'             => 'Die Emailadresse wurde nicht gefunden.',
    'LostPassInfo'              => 'Wenn Sie hier Ihre Emailadresse eingeben, senden wir Ihnen ein neues Kennwort.',
    'LostPassSent'              => 'Ein neues Kennwort wurde Ihnen per Email zugesandt.',
    'LostPassword'              => 'Haben Sie Ihr Kennwort vergessen?',

    'MakeSticky'                => 'Als &quot;Wichtig&quot; kennzeichnen',
    'MarkForumRead'             => 'Forum als &quot;gelesen&quot; markieren',
    'MarkRead'                  => 'Alle als &quot;gelesen&quot; markieren',
    'MarkThreadRead'            => 'Als&nbsp;&quot;gelesen&quot;&nbsp;markieren',
    'MatchAll'                  => 'Alle Worte',
    'MatchAllForums'            => 'Alle Foren durchsuchen',
    'MatchAny'                  => 'Irgendeines der Worte',
    'MatchMessages'             => 'Zeige Suchergebnisse als Beiträge',
    'MatchPhrase'               => 'Exakt dieser Ausdruck',
    'MatchThreads'              => 'Zeige Suchergebnisse als Themen',
    'Member'                    => 'Teilnehmer',
    'MembershipType'            => 'Typ der Zugehörigkeit',
    'MergeThread'               => 'Verschmelzen',
    'MergeThreadAction1'        => 'Die folgenden Themen werden verschmolzen. Thema 2 wird in Thema 1 eingearbeitet.',
    'MergeThreadAction2'        => 'Möchten Sie die Verschmelzung fortsetzen?',
    'MergeThreadCancel'         => '&quot;Thema verschmelzen&quot; abbrechen',
    'MergeThreadInfo1'          => 'Sie möchten das folgende Thema mit einem anderen Thema verschmelzen.',
    'MergeThreadInfo2'          => 'Gehen Sie jetzt zum Thema, das mit dem gewählten Thema verschmolzen werden soll und wählen Sie erneut &quot;Themen verschmelzen&quot;.',
    'MergeThreads'              => 'Themen verschmelzen',
    'Message'                   => 'Nachricht',
    'MessageList'               => 'Themenübersicht',
    'MessageNotFound'           => 'Leider konnte der angeforderte Beitrag nicht gefunden werden.',
    'Moderate'                  => 'Moderieren',
    'ModeratedForum'            => 'Dies ist ein moderiertes Forum. Ihr Beitrag bleibt solange unsichtbar, bis er von einem Moderator genehmigt wurde.',
    'Moderating'                => 'in Moderation',
    'Moderator'                 => 'Moderator',
    'Month'                     => 'Monat',
    'Months'                    => 'Monate',
    'MovedMessage'              => 'Dieses Thema wurde verschoben. Sie werden zur neuen Position weitergeleitet.',
    'MovedMessageTo'            => 'Zur aktuellen Position dieses Themas.',
    'MovedSubject'              => 'Verschoben',
    'MoveNotification'          => 'Eine Benachrichtigung hinterlassen',
    'MoveThread'                => 'Thema verschieben',
    'MoveThreadTo'              => 'Thema verschieben ins Forum',
    'MsgApprovedOk'             => 'Beitrag/Beiträge akzeptiert',
    'MsgDeletedOk'              => 'Beitrag/Beiträge gelöscht',
    'MsgHiddenOk'               => 'Beitrag/Beiträge versteckt.',
    'MsgMergeCancel'            => '&quot;Themen verschmelzen&quot; wurde abgebrochen.',
    'MsgMergeOk'                => 'Die Themen wurden zu einem gemeinsamen Thema verschmolzen.',
    'MsgModEdited'              => 'Der geänderte Beitrag wurde gespeichert.',
    'MsgMoveOk'                 => 'Das Thema wurde in das gewählte Forum verschoben.',
    'MsgMoveSelectForum'        => 'Bitte zuerst ein Forum auswählen.',
    'MsgSplitOk'                => 'Das Thema wurde erfolgreich in zwei Themen aufgeteilt.',
    'Mutual'                    => 'beiderseitig',
    'MyProfile'                 => 'Kontrollzentrum',

    'Navigate'                  => 'navigieren',
    'NeedsAttention'            => 'Die folgenden Punkte benötigen Beachtung',
    'New'                       => 'Neu',
    'NewerThread'               => 'Neuere Themen',
    'newflag'                   => 'NEU',
    'NewMessage'                => 'Neuer Beitrag',
    'NewMessages'               => 'Aktualisiert!',
    'NewModeratedMessage'       => "Forum: %forumname%\nBetreff: %subject%\nAutor: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n\n--\nBeitrag freigeben: %approve_url%\n",
    'NewModeratedSubject'       => '%forumname%: %subject%',
    'NewPassword'               => 'Neues Kennwort',
    'NewPrivateMessages'        => 'Sie haben neue Privatnachrichten',
    'NewReplyMessage'           => "Forum: %forumname%\nBetreff: %subject%\nAutor: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n\n--\nAbo für dieses Thema aufheben: %remove_url%\nKeine weitere Email, aber das Thema weiter beobachten: %noemail_url%\nAbonnierte Themen anzeigen: %followed_threads_url%\n",
    'NewReplySubject'           => '%forumname%: %subject%',
    'NewTopic'                  => 'Neues Thema',
    'NewUnModeratedMessage'     => "Forum: %forumname%\nBetreff: %subject%\nAutor: %author%\nLink zum Beitrag: %read_url%\n\n%plain_body%\n",
    'NewUnModeratedSubject'     => '%forumname%: %subject%',
    'NextMessage'               => 'nächster Beitrag',
    'NextPage'                  => 'nächste Seite',
    'No'                        => 'Nein',
    'NoFollowedThreads'         => 'Kein Thema entspricht den Suchkriterien.',
    'NoForums'                  => 'Keine Foren vorhanden.',
    'NoGroupMembership'         => 'Sie gehören zu keiner Gruppe.',
    'NoGroupsJoin'              => 'Keine Gruppen für den Beitritt vorhanden.',
    'NoMoreEmails'              => 'Sie erhalten keine weiteren Emails, wenn es neue Beiträge zum Thema gibt.',
    'None'                      => 'Kein',
    'NoPost'                    => 'Sie haben nicht die erforderliche Berechtigung, um in diesem Forum zu schreiben.',
    'NoRead'                    => 'Sie haben nicht die erforderliche Berechtigung, um dieses Forum einzusehen.',
    'noreplies'                 => 'keine Antworten',
    'NoResults'                 => 'Nichts gefunden.',
    'NoResultsHelp'             => 'Hinweis:<ul><li>Stellen Sie sicher, dass alles richtig geschrieben ist.</li><li>Versuchen Sie andere Suchworte.</li><li>Versuchen Sie weiter gefasste Suchworte.</li><li>Versuchen Sie weniger Suchworte.</li></ul>',
    'NotRegistered'             => 'Nicht registriert? &ndash; Klicken Sie hier, um sich zu registrieren.',
    'NoUnapprovedMessages'      => 'Zur Zeit sind keine ungenehmigten Beiträge vorhanden.',
    'NoUnapprovedUsers'         => 'Zur Zeit sind keine neuen Teilnehmer vorhanden.',
    'NoUserMatchFilter'         => 'Kein Autorenname entspricht den Suchkriterien.',

    'of'                        => 'von',
    'OlderThread'               => 'Ältere Themen',
    'OnlyUnapproved'            => 'nur Beiträge zur Genehmigung',
    'Options'                   => 'Optionen',
    'OriginalMessage'           => 'Ursprünglicher Beitrag',
    'OriginalPassword'          => 'Ursprüngliches Kennwort',

    'Page'                      => 'Seite',
    'Pages'                     => 'Seiten',
    'Password'                  => 'Kennwort',
    'PeriodicLogin'             => 'Zu Ihrer Sicherheit ist es notwendig, Ihre Anmelde-Informationen zu bestätigen, sobald Sie diese Seite verlassen haben.',
    'PermAdministrator'         => 'Sie sind Administrator.',
    'PermAllowPost'             => 'Erlaubnis, Beiträge zu verfassen',
    'PermAllowRead'             => 'Erlaubnis, Beiträge zu lesen',
    'PermAllowReply'            => 'Erlaubnis, Beiträgen zu antworten',
    'PermGroupModerator'        => 'Erlaubnis für Gruppenmoderation',
    'Permission'                => 'Erlaubnis',
    'PermModerator'             => 'Moderator',
    'PersProfile'               => 'Persönliches Profil',
    'PleaseLoginPost'           => 'In diesem Forum dürfen leider nur registrierte Teilnehmer schreiben.',
    'PleaseLoginRead'           => 'Entschuldigen Sie, nur registrierte Teilnehmer düfen dieses Forum lesen.',
    'PMAddRecipient'            => 'Empfänger hinzufügen',
    'PMCloseMessage'            => 'Schließen',
    'PMDisabled'                => 'Privatnachrichten sind deaktiviert.',
    'PMFolderCreate'            => 'Neuen Ordner anlegen',
    'PMFolderCreateSuccess'     => 'Der Ordner wurde erfolgreich angelegt.',
    'PMFolderDelete'            => 'Ordner löschen',
    'PMFolderDeleteConfirm'     => 'Sind Sie sicher, dass Sie den Ordner und alle enthaltenen Nachrichten löschen wollen?',
    'PMFolderDeleteExplain'     => '<b>Warnung:</b> Wenn Sie einen Ordner löschen, werden auch alle enthaltenen Nachrichten gelöscht! Wenn diese einmal gelöscht sind, können sie nicht wieder hergestellt werden. Wenn Sie die Nachrichten behalten wollen, verschieben Sie diese bitte vorher in einen anderen Ordner.',
    'PMFolderDeleteSuccess'     => 'Der Ordner wurde erfolgreich gelöscht',
    'PMFolderExistsError'       => 'Der Ordner kann nicht angelegt werden; er existiert bereits.',
    'PMFolderIsEmpty'           => 'Es gibt keine Nachrichten in diesem Ordner.',
    'PMFolderNotAvailable'      => 'Der ausgewählte Ordner ist nicht verfügbar',
    'PMFolderRename'            => 'Ordner umbenennen',
    'PMFolderRenameSuccess'     => 'Der Ordner wurde erfolgreich umbenannt',
    'PMFolderRenameTo'          => 'in',
    'PMFromMailboxFull'         => 'Sie können keine Kopie dieser Nachricht speichern.<br />Ihr Postfach ist voll.',
    'PMMoveToFolder'            => 'Verschieben',
    'PMNoRecipients'            => 'Sie haben keine Empfänger für Ihre Nachricht ausgewählt',
    'PMNotAvailable'            => 'Die gewählte Nachricht ist nicht verfügbar.',
    'PMNotifyEnableSetting'     => 'Email an mich bei privaten Nachrichten zulassen',
    'PMNotifyMessage'           => 'Privatnachricht bei '.$PHORUM['title']."\n\nBetreff: %subject%\nAutor: %author%\nLink zur Nachricht: %read_url%\n\n%plain_body%\n",
    'PMNotifySubject'           => 'Privatnachricht: %subject%',
    'PMNotSent'                 => 'Ihre private Nachricht wurde nicht versendet. Es gab einen Fehler.',
    'PMRead'                    => 'Gelesen',
    'PMReply'                   => 'Antworten',
    'PMReplyToAll'              => 'Allen antworten',
    'PMRequiredFields'          => 'Bitte Thema und Beitrag eingeben.',
    'PMSelectAFolder'           => 'Ordner auswählen&nbsp;&hellip;',
    'PMSelectARecipient'        => 'Empfänger auswählen&nbsp;&hellip;',
    'PMSent'                    => 'Ihre private Nachricht wurde erfolgreich versendet',
    'PMSpaceFull'               => 'Ihr Postfach für private Nachrichten ist voll.',
    'PMSpaceLeft'               => 'Sie können noch %pm_space_left% weitere private Nachricht(en) speichern.',
    'PMToMailboxFull'           => 'Die Nachricht konnte nicht versendet werden.<br />Das Postfach des Teilnehmers &quot;%recipient%&quot; ist voll.',
    'PMUnread'                  => 'Ungelesen',
    'Post'                      => 'Senden',
    'Posted'                    => 'Datum/Zeit',
    'Postedby'                  => 'geschrieben von',
    'PostErrorDuplicate'        => 'Es ist bereits ein exakt gleicher Beitrag im Forum enthalten. Duplikate sind nicht erlaubt; daher konnte Ihr Beitrag nicht gespeichert werden.',
    'PostErrorOccured'          => 'Beim Senden der Nachricht trat ein Fehler auf.',
    'PostPM'                    => 'Private Nachricht senden',
    'Posts'                     => 'Beiträge',
    'Preview'                   => 'Vorschau',
    'PreviewExplain'            => 'So wird Ihr Beitrag im Forum aussehen.',
    'PreviewNoClickAttach'      => 'Anhänge können in der Vorschau nicht geöffnet werden',
    'PreviousMessage'           => 'vorheriger Beitrag',
    'PrevPage'                  => 'vorherige Seite',
    'PrintView'                 => 'Druckansicht',
    'PrivateMessages'           => 'Private Nachrichten',
    'PrivateReply'              => 'Privatnachricht',
    'ProfileUpdatedOk'          => 'Profil erfolgreich geändert.',

    'QuoteMessage'              => 'Zitieren',

    'ReadOnlyMessage'           => 'In diesem Forum können zur Zeit keine Beiträge verfasst oder geändert werden. Eine Anmeldung ist ebenfalls nicht möglich.',
    'RealName'                  => 'Vollständiger Name',
    'ReceiveModerationMails'    => 'Ich möchte Benachrichtigungen für Moderatoren empfangen.',
    'Recipients'                => 'Empfänger',
    'RegAcctActive'             => 'Ihre Registrierung war erfolgreich.',
    'RegApprovedEmailBody'      => 'Sie wurden im Forum: '.$PHORUM['title'].' aufgenommen. Sie können sich in das Forum: '.$PHORUM['title'].' unter '.phorum_get_url(PHORUM_LOGIN_URL)." einloggen.\n\nDanke, ".$PHORUM['title'],
    'RegApprovedSubject'        => 'Sie wurden aufgenommen.',
    'RegBack'                   => 'Zum Einloggen hier klicken.',
    'Register'                  => 'Ein neues Profil erzeugen',
    'RegThanks'                 => 'Danke für die Registrierung.',
    'RegVerifyEmail'            => 'Danke für die Registrierung. Sie werden in Kürze Details zur Aktivierung per Email bekommen.',
    'RegVerifyFailed'           => 'Entschuldigen Sie, Ihre Daten konnten nicht überprüft werden. Bitte stellen Sie sicher, dass Sie die komplette Web-Adresse verwenden, die Sie per Email erhalten haben.',
    'RegVerifyMod'              => 'Danke für Ihre Registrierung. Die Zustimmung eines Moderators steht noch aus. Sie erhalten eine Email, sobald man über Ihre Zugehörigkeit entschieden hat.',
    'RemoveFollowed'            => 'Sie verfolgen diese Diskussion nicht.',
    'RemoveFromGroup'           => 'Aus Gruppe entfernen',
    'ReopenThread'              => 'Dieses Thema wieder öffnen',
    'Reply'                     => 'Antworten',
    'reply'                     => 'Antwort',
    'replies'                   => 'Antworten',
    'Report'                    => 'Melden',
    'ReportPostEmailBody'       => "%reportedby% hat aus folgendem Grund einen Beitrag gemeldet:\n%explanation%\n\nBeitrag : %url%\n\nForum:    %forumname%\nBetreff:  %subject%\nAutor:    %author%\nIP:       %ip%\nDatum:    %date%\n\n%body%\n\n\nBeitrag löschen:\n%delete_url%\n\nBeitrag verbergen:\n%hide_url%\n\nBeitrag bearbeiten:\n%edit_url%\n\nProfil von %reportedby% anzeigen:\n%reporter_url%",
    'ReportPostEmailSubject'    => '%forumname% Gemeldeter Beitrag',
    'ReportPostExplanation'     => 'Geben Sie bitte eine Erläuterung, warum Sie diesen Beitrag melden möchten. Dies erleichtert es den Moderatoren, Ihre Meldung zu verstehen.',
    'ReportPostNotAllowed'      => 'Um einen Beitrag zu melden, müssen Sie registriert sein.',
    'ReportPostSuccess'         => 'Dieser Beitrag wurde den Moderatoren des Forums gemeldet.',
    'RequireCookies'            => 'Bedaure! Sie müssen in Ihrem Browser Cookies erlauben, damit Sie sich in diesem Forum erfolgreich anmelden können.',
    'Required'                  => 'Pflichtfelder',
    'Results'                   => 'Ergebnisse',
    'RSS'                       => 'RSS',

    'SaveChanges'               => 'Änderungen speichern',
    'ScriptUsage'               => "\nUsage: php script.php [--module=<module_name>] [--scheduled] [options]

--module=<module_name>  Run the \"external\" hook in the specified module,
                        unless --scheduled is specified as well, in which
                        case this parameter will be used to restrict the
                        module(s) for which to run the \"scheduled\" hook.
--scheduled             Run the \"scheduled\" hooks in all available modules.
                        If one or more modules are configured using
                        --module / -m, then the \"scheduled\" hook will
                        only run for the specified module(s).

-m <module_name>        Alias for --module=<module_name>
-s                      Alias for --scheduled

[options]               When running the \"external\" hook for a module,
                        then these options are passed to the hook function.
                        When using --scheduled, these are ignored.\n\n",
    'Search'                    => 'Suche',
    'SearchAllPosts'            => 'Zeige alle Beiträge eines Teilnehmers',
    'SearchAuthors'             => 'Nach Autoren suchen',
    'SearchMessages'            => 'Beiträge durchsuchen',
    'SearchRunning'             => 'Ihre Suche läuft. Bitte ein wenig Geduld.',
    'SelectForum'               => 'Das Forum wählen&nbsp;&hellip;',
    'SelectGroupMod'            => 'Gruppe zum Moderieren wählen',
    'SendPM'                    => 'Privatnachricht senden',
    'SentItems'                 => 'Gesendet',
    'ShowAll'                   => 'Zeige alle',
    'ShowApproved'              => 'Akzeptierte Teilnehmer',
    'ShowGroupModerator'        => 'Gruppenmoderatoren',
    'ShowOnlyMessages'          => 'Zeige',
    'ShowPosts'                 => 'Zeige alle Beiträge',
    'ShowSuspended'             => 'Gesperrte Teilnehmer',
    'ShowUnapproved'            => 'Noch nicht akzeptierte Teilnehmer',
    'Signature'                 => 'Signatur',
    'Special'                   => 'Spezial',
    'SplitThread'               => 'Thema teilen',
    'SplitThreadInfo'           => 'Diesen Beitrag und die zugehörigen Antworten in ein eigenes Thema verschieben',
    'StartedBy'                 => 'begonnen von',
    'StartNewTopic'             => 'Neues Thema beginnen',
    'Sticky'                    => 'Wichtig',
    'Subject'                   => 'Thema',
    'Submit'                    => 'Senden',
    'Subscriptions'             => 'Abos',
    'Suspended'                 => 'Gesperrt',

    'Template'                  => 'Vorlage',
    'Thread'                    => 'Thema',
    'ThreadClosed'              => 'Dieses Thema wurde beendet. Eine Antwort ist daher nicht möglich.',
    'ThreadClosedOk'            => 'Thema beendet.',
    'ThreadReopenedOk'          => 'Das Thema wurde wiedereröffnet.',
    'Threads'                   => 'Themen',
    'ThreadViewList'            => 'Standardeinstellung für &quot;Themenübersicht&quot;',
    'ThreadViewRead'            => 'Standardeinstellung für &quot;Beitrag lesen&quot;',
    'Timezone'                  => 'Teilnehmerzeitzone',
    'To'                        => 'An',
    'TotalFiles'                => 'Gesamtzahl Dateien',
    'TotalFileSize'             => 'Verbrauchter Speicher',
    'TotalRecipients'           => 'Anzahl Empfänger',

    'Unapproved'                => '(Noch) nicht akzeptiert sind',
    'UnapprovedGroupMembers'    => 'Es gibt Gruppenteilnehmer, die noch nicht akzeptiert wurden',
    'UnapprovedMessage'         => 'Beitrag nicht genehmigt',
    'UnapprovedMessages'        => 'Beiträge zur Freigabe',
    'UnapprovedMessagesLong'    => 'Es gibt Beiträge zur Freigabe',
    'UnapprovedUsers'           => '(Noch) nicht akzeptierte Teilnehmer',
    'UnapprovedUsersLong'       => 'Es gibt Teilnehmer, die noch nicht akzeptiert wurden',
    'UnknownUser'               => 'Dieser Teilnehmer existiert nicht oder wurde deaktiviert.',
    'Update'                    => 'Aktualisieren',
    'UploadFile'                => 'Eine neue Datei hochladen',
    'UploadNotAllowed'          => 'Sie dürfen leider keine Dateien auf diesen Server hochladen.',
    'UserAddedToGroup'          => 'Teilnehmer wurde der Gruppe hinzugefügt.',
    'Username'                  => 'Teilnehmername',
    'UserNotFound'              => 'Der Teilnehmer, an den Ihre Nachricht adressiert war, konnte nicht gefunden werden. Bitte überprüfen Sie den Namen und versuchen Sie es noch einmal.',
    'UserNotFoundGroup'         => 'Der Teilnehmer, den Sie der Gruppe hinzufügen wollen, konnte nicht gefunden werden. Bitte überprüfen Sie den Namen und versuchen Sie es noch einmal.',
    'UserPermissions'           => 'Teilnehmerrechte',
    'UserProfile'               => 'Teilnehmerprofil',

    'VerifyRegEmailBody1'       => "Vielen Dank für Ihre Registrierung in unserem Diskussionsforum.\n\nBitte aktivieren Sie Ihren Benutzer durch einen Klick auf:",
    'VerifyRegEmailBody2'       => 'Anschließend können Sie sich hier einloggen: '.phorum_get_url(PHORUM_LOGIN_URL)."\n\nViele Grüße\n".$PHORUM['title'],
    'VerifyRegEmailSubject'     => 'Ihre Registrierung bei '.$PHORUM['title'],
    'ViewChanges'               => 'Änderungen ansehen',
    'ViewFlatList'              => 'Ein Eintrag pro Thema',
    'ViewFlatRead'              => 'Mehrere Beiträge pro Seite chronologisch sortiert',
    'ViewHybridRead'            => 'Mehrere Beiträge pro Seite nach Diskussionsverlauf sortiert',
    'ViewJoinGroups'            => 'Einer Gruppe beitreten',
    'ViewProfile'               => 'Mein Profil einsehen',
    'Views'                     => 'Klicks',
    'Views_Subject'             => 'Klicks',
    'ViewThreadedList'          => 'Alle Beiträge eines Themas in Baumansicht',
    'ViewThreadedRead'          => 'Ein Beitrag pro Seite mit Diskussionsverlauf',

    'Welcome'                   => 'Willkommen',
    'WrittenBy'                 => 'geschrieben von',
    'Wrote'                     => 'schrieb',

    'Year'                      => 'Jahr',
    'Yes'                       => 'Ja',
    'YourEmail'                 => 'Ihre Emailadresse',
    'YourName'                  => 'Ihr vollständiger Name',
    'YouWantToFollow'           => 'Sie haben angegeben, dass Sie dieser Diskussion folgen möchten:',

    // Readable Dates Module
    //
    // These are separate as they are all related to the relative time formatting
    // Examples: Today, Yesterday, 1 Day ago, 1 month ago, 1 year ago
    'relative_ago'                => 'zuvor',
    'relative_days'               => 'Tage',
    'relative_months'             => 'Monate',
    'relative_one_day'            => '1 Tag',
    'relative_one_year'           => '1 Jahr',
    'relative_today'              => 'Heute',
    'relative_tomorrow'           => 'Morgen',
    'relative_weeks'              => 'Wochen',
    'relative_years'              => 'Jahre',
    'relative_yesterday'          => 'Gestern',

);

// Zeitzonen
$PHORUM['DATA']['LANG']['TIME'] = array(
    '-12'  => '(GMT - 12:00 Stunden) Eniwetok, Kwajalien',
    '-11'  => '(GMT - 11:00 Stunden) Midway-Inseln, Samoa',
    '-10'  => '(GMT - 10:00 Stunden) Hawaii',
    '-9'   => '(GMT - 9:00 Stunden) Alaska',
    '-8'   => '(GMT - 8:00 Stunden) Pazifik (USa &amp; Kanada)Tijuana',
    '-7'   => '(GMT - 7:00 Stunden) Arizona &amp;  Gebirge (USA &amp; Kanada)',
    '-6'   => '(GMT - 6:00 Stunden) Zentral-Zeit (USA &amp; Kanada), Mexiko-Stadt',
    '-5'   => '(GMT - 5:00 Stunden) Ost-Zeit (USA &amp; Kanada), Bogota, Lima, Quito',
    '-4.5' => "(GMT - 4:30 Stunden) Caracas (Venezuela)",
    '-4'   => '(GMT - 4:00 Stunden) Atlantik (Kanada), La Paz',
    '-3.5' => '(GMT - 3:30 Stunden) Neufundland',
    '-3'   => '(GMT - 3:00 Stunden) Brasilien, Buenos Aires, Georgetown, Falkland-Inseln',
    '-2'   => '(GMT - 2:00 Stunden) Mittel-Atlantik, Ascention-Inseln, St. Helena',
    '-1'   => '(GMT - 1:00 Stunde) Azoren, Cape-Verde-Inseln',
    '0'    => '(GMT) Casablanca, Dublin, Edinburgh, London, Lissabon, Monrovia',
    '1'    => '(GMT + 1:00 Stunde) Berlin, Brüssel, Kopenhagen, Madrid, Paris, Rom',
    '2'    => '(GMT + 2:00 Stunden) Kaliningrad, Südafrika, Warschau',
    '3'    => '(GMT + 3:00 Stunden) Bagdad, Riad, Moskau, Nairobi',
    '3.5'  => '(GMT + 3:30 Stunden) Teheran',
    '4'    => '(GMT + 4:00 Stunden) Abu Dhabi, Baku, Muscat, Tbilisi',
    '4.5'  => '(GMT + 4:30 Stunden) Kabul',
    '5'    => '(GMT + 5:00 Stunden) Ekaterinburg, Islamabad, Karachi, Tashkent',
    '5.5'  => '(GMT + 5:30 Stunden) Bombay, Colomba, Kalkutta, Madras, Neu Delhi',
    '5.75' => '(GMT + 5:45 Stunden) Nepal',
    '6'    => '(GMT + 6:00 Stunden) Almaty, Dhakra',
    '7'    => '(GMT + 7:00 Stunden) Bangkok, Hanoi, Jakarta',
    '8'    => '(GMT + 8:00 Stunden) Peking, Hong Kong, Perth, Singapur, Taipei',
    '9'    => '(GMT + 9:00 Stunden) Osaka, Sapporo, Seoul, Tokio, Yakutsk',
    '9.5'  => '(GMT + 9:30 Stunden) Adelaide, Darwin',
    '10'   => '(GMT + 10:00 Stunden) Melbourne, Papua-Neuguinea, Sydney, Wladiwostok',
    '11'   => '(GMT + 11:00 Stunden) Magadan, Neu-Kaledonien, Solomon-Inseln',
    '12'   => '(GMT + 12:00 Stunden) Auckland, Wellington, Fiji, Marshall-Inseln'
);

?>
