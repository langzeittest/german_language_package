<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

$PHORUM['DATA']['LANG']['mod_spamhurdles'] = array(
    // Code CAPTCHA
    'CaptchaExplain'            => 'Bitte geben Sie den Code aus dem unten stehenden Bild ein. Damit werden Programme geblockt, die versuchen dieses Formular automatisch auszufüllen.',
    'CaptchaFieldLabel'         => 'Code eingeben: ',
    'CaptchaSpoken'             => 'Diesen Code (auf English) vorlesen lassen.',
    'CaptchaTitle'              => 'Schutz gegen unerwünschte Werbebeiträge (SPAM):',
    'CaptchaUnclearExplain'     => 'Wenn der Code schwer zu lesen ist, versuchen Sie ihn einfach zu raten. Wenn Sie einen falschen Code eingeben, wird ein neues Bild erzeugt und Sie bekommen eine weitere Chance.',
    'CaptchaWrongCode'          => 'Sie haben einen falschen Code eingegeben. Bitte versuchen Sie es erneut.',

    // Mathematical CAPTCHA
    'MaptchaExplain'            => 'Bitte geben Sie die Lösung der Mathematikaufgabe ein. Damit werden Programme geblockt, die versuchen dieses Formular automatisch auszufüllen.',
    'MaptchaFieldLabel'         => 'Antwort: ',
    'MaptchaQuestion'           => 'Frage: Was ergibt {NUMBER1} plus {NUMBER2}?',
    'MaptchaSpoken'             => 'Die Aufgabe (auf English) vorlesen lassen.',
    'MaptchaTitle'              => 'Schutz gegen unerwünschte Werbebeiträge (SPAM):',
    'MaptchaWrongAnswer'        => 'Sie haben eine falsche Antwort auf die Mathematikaufgabe eingegeben. Bitte versuchen Sie es erneut.',

    // Javascript CAPTCHA
    'JavascriptCaptchaNoscript' => '[Bitte schalten Sie Javascript in Ihren Browser-Optionen ein, damit Sie den Code sehen können.]',

    // A message that is shown when a bot post is suspected.
    'PostingRejected'           => 'Ihr Beitrag wurde verworfen, da es aussieht, als wäre er von einem Bot (Computerprogramm zum automatischen Eintragen von Werbebeiträgen) erstellt.',

    // A message for failed spam hurdle checks, for which a repost
    // of the form could make a difference.
    'TryResubmit'               => 'Sie können Ihren Beitrag erneut absenden.',

    // A message for failed spam hurdle checks, for which the problem
    // might be lack of javascript support in the browser (either
    // absent or disabled).
    'NeedJavascript'            => 'Wenn Javascript in Ihrem Browser ausgeschaltet ist oder der Browser kein Javascript unterstützt, könnte dies ein Grund dafür sein. Einige der verwendeten Schutzmaßnahmen benötigen Javascript.',

    // A message that tells the user to contact the site owner
    // if the problems persist.
    'ContactSiteOwner'          => 'Sollten Sie bereits mehrfach dieses Problem gehabt haben, wenden Sie sich bitte an einen Administrator oder Moderator des Forums.'
);

?>
