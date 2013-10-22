<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

// Do not change anything in this file!

// Buddy
switch ($PHORUM['mod_german_language_support']['buddy']) {
case 0:
    // Buddy
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Buddy-Liste hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Buddy-Liste hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Buddy-Liste ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Buddy-Liste hinzuf�gen&quot;.';
    break;
case 1:
    // Freund
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Liste der Freunde hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Liste der Freunde hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Liste der Freunde ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Liste der Freunde hinzuf�gen&quot;.';
    break;
case 2:
    // Kollege
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Liste der Kollegen hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Liste der Kollegen hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Liste der Kollegen ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Liste der Kollegen hinzuf�gen&quot;.';
    break;
case 3:
    // Kumpel
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Liste der Kumpel hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Liste der Kumpel hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Liste der Kumpel ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Liste der Kumpel hinzuf�gen&quot;.';
    break;
case 4:
    // Kontakt
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Kontaktliste hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Kontaktliste hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Kontaktliste ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Kontaktliste hinzuf�gen&quot;.';
    break;
default:
    // Kontakt
    $PHORUM['DATA']['LANG']['BuddyAddFail']     = 'Der Teilnehmer konnte nicht Deiner Kontaktliste hinzugef�gt werden.';
    $PHORUM['DATA']['LANG']['BuddyAddSuccess']  = 'Der Teilnehmer wurde Deiner Kontaktliste hinzugef�gt.';
    $PHORUM['DATA']['LANG']['BuddyListIsEmpty'] = 'Deine Kontaktliste ist leer.<br />Um Teilnehmer hinzuzuf�gen, �ffne deren Profil und klicke auf &quot;Teilnehmer meiner Kontaktliste hinzuf�gen&quot;.';
    break;
}

// Email format
if ($PHORUM['mod_german_language_support']['email_format'] == 0) {
    // Restore standard email format (extended format is included in /include/lang/german.'.$PHORUM['DATA']['CHARSET'].'.php)
    $PHORUM['DATA']['LANG']['NewModeratedMessage']   = "Ein neuer Beitrag wurde in einem von Dir moderierten Forum gemacht.\nDer Beitrag hat das Thema %subject%\nund kann unter\n%approve_url%\nbearbeitet werden.\n";

    $PHORUM['DATA']['LANG']['NewReplyMessage']       = "Es hat einen neuen Beitrag in einem von Dir beobachteten Thema gegeben.\nDer Beitrag hat den Betreff %subject%\nund kann unter\n%read_url%\neingesehen werden.\n";

    $PHORUM['DATA']['LANG']['NewUnModeratedMessage'] = "Es existiert ein neuer Beitrag in einem von Dir moderierten Forum.\nDieser Beitrag wurde von %author% mit dem Betreff %subject%\ngeschrieben und kann unter\n%read_url%\ngelesen werden.\n";

    $PHORUM['DATA']['LANG']['PMNotifyMessage']       = "Du hast eine neue Privatnachricht erhalten.\n\nAutor: %author%\nBetreff: %subject%\n\nDu kannst die Nachricht unter\n%read_url%\neinsehen.\n";
}

?>
