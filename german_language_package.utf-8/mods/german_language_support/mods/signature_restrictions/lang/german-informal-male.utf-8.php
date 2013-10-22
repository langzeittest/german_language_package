<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

include(str_replace('-informal-male', '', __FILE__));

$PHORUM['DATA']['LANG']['mod_signature_restrictions']['deny_images']                 = 'Bitte verzichte auf Bilder in Deiner Signatur.';
$PHORUM['DATA']['LANG']['mod_signature_restrictions']['deny_markup']                 = 'Bitte verzichte auf Textauszeichnungen in Deiner Signatur. Es ist nur Reintext in der Signatur erlaubt.';
$PHORUM['DATA']['LANG']['mod_signature_restrictions']['markup_user_registered_days'] = 'Du bist noch nicht lange genug registriert, dass Dir Textauszeichnungen in Deiner Signatur erlaubt sind. Bis zum %date% darfst Du nur Reintext verwenden.';
$PHORUM['DATA']['LANG']['mod_signature_restrictions']['max_length']                  = 'Bitte kürze die Anzahl der Zeichen in Deiner Signatur. Du darfst maximal %length% Zeichen verwenden.';
$PHORUM['DATA']['LANG']['mod_signature_restrictions']['max_line_length']             = 'Bitte kürze die Länge der Zeile %line_nr% in Deiner Signatur. Du darfst maximal %line_length% Zeichen in einer Zeile verwenden.';
$PHORUM['DATA']['LANG']['mod_signature_restrictions']['max_lines']                   = 'Bitte kürze die Anzahl der Zeilen in Deiner Signatur. Du darfst maximal %lines% Zeilen verwenden.';

?>