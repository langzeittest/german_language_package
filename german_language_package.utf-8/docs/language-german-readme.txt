Package: German Language Files
Version: 2.4.0
Author: Oliver Riesen <oliver@riesen.org>

=== English instructions / Englische Anleitung ===

German instructions: see below! Deutsche Anleitung: siehe unten!

German language files for the Phorum core, core modules and frequently used
modules. Offers three kind of forms of address and gender: formal "Sie",
informal "Du" with male suffix for nouns and informal "Du" with female suffix
(feminist).

Tested on version 5.2.20


License:
-------

Free to use, modify, or redistribute this code so long as I am given credit for
the original development somewhere. This code comes with absolutely no warranty.


Installation:
------------

- Unpack the archive to your Phorum directory keeping the directory structure.
  Override existing german language files.

- Move or copy for each supported module (see list below) in /mods/ the
  corresponding german language files from /mods/german_language_support/mods
  keeping the directory structure. Take care that some modules contain multiple
  sub folders (help, lang).

  Example BBCode Module:

  - copy subfolders from /mods/german_language_support/mods/bbcode/help/
    to /mods/bbcode/help/

  - copy files from /mods/german_language_support/mods/bbcode/lang/
    to /mods/bbcode/lang/

- Optional: Login as administrator in Phorum's administrative interface and go
  to the "Modules" section. Enable the module "German Language Support". Set
  module settings. See /mods/german_language_support/README for more
  informations.

- Optional: Add text replacements to
  /mods/german_language_support/lang/german*.php.


Update from 2.1 to 2.2/2.3/2.4:
------------------------------

- Follow installation instruction.

- Remove old language files in all subfolders:

  - german.php
  - german-du-female.php
  - german-du-male.php

- Remove help file directories (BBCode and Smileys Module):

  - \german\
  - \german-du-female\
  - \german-du-male\

- Login as administrator in Phorum's administrative interface and change the
  language in the following sections:

  - "Default Settings"
  - "Manage Forums" (for each forum which is not inherit from Default Forums
    Settings)

- Inform your users, that they have to choose there prefered language in
  control center.


Module support:
--------------

The German Language Files Package supports the following modules:

- Automatic Mobile Template
  http://www.phorum.org/phorum5/read.php?62,147914

- BBCode (Core)

- BBcode Google
  http://www.phorum.org/phorum5/read.php?62,123949

- BBcode Spoiler
  http://www.phorum.org/phorum5/read.php?62,124591

- CarCost (Car Operating Costs and Mileage Statistics)
  http://www.phorum.org/phorum5/read.php?62,130538

- Editor Tools (Core)

- Embed Attachments
  http://www.phorum.org/phorum5/read.php?62,125586

- Embed Images
  http://www.phorum.org/phorum5/read.php?62,125584

- Forum Stats
  http://www.phorum.org/phorum5/read.php?62,126491

- Go To Topic
  http://www.phorum.org/phorum5/read.php?62,123953

- Google Maps
  http://www.phorum.org/phorum5/read.php?62,123960

- Hide Signatures
  http://www.phorum.org/phorum5/read.php?62,123969

- Ignore User
  http://www.phorum.org/phorum5/read.php?62,128240

- Impersonate User
  http://www.phorum.org/phorum5/read.php?62,124298

- Jumpmenu
  http://www.phorum.org/phorum5/read.php?62,125516

- Mailinglist
  http://www.phorum.org/phorum5/read.php?62,129244

- New Count
  http://www.phorum.org/phorum5/read.php?62,126482

- Online Users
  http://www.phorum.org/phorum5/read.php?62,126368

- Post Previews
  http://www.phorum.org/phorum5/read.php?62,133957

- Readable Dates
  http://www.phorum.org/phorum5/read.php?62,128691

- Recent Messages
  http://www.phorum.org/phorum5/read.php?62,125518

- Search Spelling
  http://www.phorum.org/phorum5/read.php?62,124900

- Show Moderators
  http://www.phorum.org/phorum5/read.php?62,125053

- Signature Restrictions
  http://www.phorum.org/phorum5/read.php?62,124255

- Smileys (Core)

- Spam Hurdles (Core)

- Spritmonitor (Gas Mileage and Vehicle's Costs Calculator)
  http://www.phorum.org/phorum5/read.php?62,130539

- Terms of Service
  http://www.phorum.org/phorum5/read.php?62,129366

- Topic Poll
  http://www.phorum.org/phorum5/read.php?62,123477

- User Avatar Module
  http://www.phorum.org/phorum5/read.php?62,124297

- Username Restrictions (Core)

If you want to translate a missing module to german, you'll have to do the
following:

Copy from the directory docs/example_mods/example_language/lang/ the following
files to the modules lang directory:

- german.*.php
- german-informal-female.*.php and
- german-informal-male.*.php

After this, copy and translate the strings from the english language file of
the module to german.*.php ("Sie"), german-informal-male.*.php ("Du") and
german-informal-female.*.php ("Du" plus feminist word endings like in
"Teilnehmerin").

Take care to save the files in correct charset (iso-8859-1 and utf-8).

If you have created a translation, please post a zip file containing the above
mentioned files to the German Language Files Package thread at phorum.org, so
the translation can be added to the package. See:

http://www.phorum.org/phorum5/read.php?65,129717


Obsolete Modules:
----------------

Do not use the Customize Mail Messages Modul. Its functionality is already
included in the German Language Files Package.


Changing text:
-------------

If you want to change some text in the language files provided by this package
use the included Language Support Module. It will be easier for you in the
future to update the German Language Files Package if you don't merge your own
text in our language files.

See examples in directory mods/german_language_support/lang.


Known issues:
------------

It's not possible to use the informal language files in "Manage Language Files"
for generating an updated language file since there are incomplete. To avoid
redundant texts informal languages files always include first the formal
language file, but this "include" is not executed by the "Manage Language
Files" part of administration.


Contribution:
------------

Contribute on GitHub:
https://github.com/langzeittest/german_language_package


Changelog:
---------

2008/04/10 version 2.0.0 by Oliver Riesen (oliver@riesen.org)
- Rewrite for Phorum 5.2.

2008/04/27 version 2.1.0 by Oliver Riesen (oliver@riesen.org)
- Bug fix in some german-du-*.php files; thanks to Kili.
- Translation for new BBCode Module added.

2008/05/11 version 2.2.0 by Oliver Riesen (oliver@riesen.org)
- Language files renamed according to structuring the language file and charset
  support (http://www.phorum.org/phorum5/read.php?14,129937).
- Added UTF-8 files.

2008/05/14 version 2.2.1 by Oliver Riesen (oliver@riesen.org)
- Text correction for Forumstats Module; thanks to Ulf Dunkel.
- Bux fix in language files for German Language Support Module.

2011/01/04 version 2.3.0 by Oliver Riesen (oliver@riesen.org)
- Support for BBCode Module version 1 removed.
- CarCost Module added.
- Ignore User Module added.
- Post Previews Module added.
- Readable Dates Module added.
- Search Spelling Module added.
- Show Moderators Module added.
- Signature Restrictions Module added.
- Spritmonitor Module added.
- User Avatar Module added.
- Some small bug fixes in language files.
- Dispensable line feeds removed; bug fix for "header already send".
- Dynamic include of base language file changed; thanks to Maurice Makkay
  (http://www.phorum.org/phorum5/read.php?62,123960,130426#msg-130426)

2015/09/17 version 2.4.0 by Oliver Riesen (oliver@riesen.org)
- Additional comments for the "locale" setting.
- Value for HCHARSET added.
- German Language Support Module updated.
- Fixing translations for Recent Messages Module.
- Automatic Mobile Template Module added.


=== German instructions / Deutsche Anleitung ===

Das Deutsche Sprachpaket erfüllt folgende Wünsche:

- Vollständige deutsche Übersetzung für Phorum 5.2 (aktuell Version 5.2.20)
  inklusive der im Lieferumfang enthaltenen Module.

- Vollständige deutsche Übersetzung für weit verbreitete zusätzliche Module.

- Drei Varianten in der Anrede: "Sie" (förmlich), "Du" (formlos) und "Du" in
  Verbindung mit weiblichen Wortendungen (wie "Teilnehmerin" und
  "Administratorin").

- Auswahl aus verschiedenen Übersetzungen für "Buddy" (Buddy, Freund/Freundin,
  Kollege/Kollegin, Kumpel/Bekannte oder Kontakt) und "Sticky" (Festgepinnt,
  Pickert [österr.][ugs.], Sticky oder Wichtig) über die Administration.

- Auswahl zwischen einfachem und erweitertem Emailversand über die
  Administration. Beim erweiterten Emailversand werden Autor, Betreff und
  Beitrag in die Email eingefügt.

- Individuelle Änderungen vorhandener Texte oder Ergänzung eigener Texte, ohne
  dass diese bei zukünftigen Updates des German Language Files Packages
  verloren gehen.


Welcher Zeichensatz? ISO-8859-1 oder UTF-8?
------------------------------------------

Das Sprachpaket ist für zwei verschiedene Zeichensätzen verfügbar: ISO-8859-1
(ein westeuropäischer Zeichensatz) und UTF-8 (ein Unicode-Zeichensatz). Der
Zeichensatz ist in den Dateinamen der einzelnen Dateien enthalten.

Beispiel:

- german.iso-8859-1.php
- german.utf-8.php

Die Wahl des "richtigen" Zeichensatzes für Ihr Diskussionforum hängt
ausschließlich vom Zeichensatz Ihrer Datenbank ab. Prüfen Sie daher, welchen
Zeichensatz Ihre Datenbank verwendet. Bei MySQL entspricht der Zeichensatz
"latin1" dem "ISO-8859-1".

Verwenden Sie jeweils nur die Dateien eines Zeichensatzes für Ihr Forum.


Ergänzende Hinweise zur Installation:
------------------------------------

Nach dem Entpacken des Pakets in das Phorum-Verzeichnis steht zunächst nur die
deutsche Übersetzung für die Kern-Software zur Verfügung.

Die Übersetzungen für die Module müssen (sofern genutzt) in die einzelnen
Modulverzeichnisse kopiert oder verschoben werden. Diese Unanehmlichkeit kommt
daher, dass Phorum unvollständige Modulverzeichnisse in der Administration
bemängelt und daher die deutschen Sprachdateien nicht "auf Verdacht" an die
richtigen Stellen abgelegt werden können.

Achten Sie darauf, dass sie die Sprachdateien für alle vorhandenen Module
kopieren/verschieben.

Nachdem Sie das German Language Support Module aktiviert haben, können Sie für
"Buddy" und "Sticky" zwischen verschiedenen Übersetzungen wählen. Zusätzlich
können Sie zwischen einem einfachen und erweiterten Emailversand wählen.

Bitte ändern Sie keine Texte in den Sprachdateien dieses Pakets! Sie erschweren
sich damit zukünftige Updates. Wenn Sie Texte an eigene Bedürfnisse anpassen
möchten oder zusätzliche Texte für Ihr Template benötigen, bietet Ihnen das
German Language Support Module "leere" Sprachdateien, in denen Sie die Texte
ergänzen können (siehe nachfolgende Beschreibung).


Änderung von Texten:
-------------------

Im Verzeichnis /mods/german_language_support/lang/ stehen Ihnen je Zeichensatz
drei (leere) Dateien zur Verfügung, in denen Sie vorhandene Texte von Phorum
oder den Modulen nach Belieben ändern können:

- german.*.php ("Sie")
- german-informal-male.*.php ("Du")
- german-informal-female.*.php ("Du", weibliche Wortendung)

So ist eine individuelle Anpassung der Texte an Ihre Bedürfnisse möglich, ohne
dass sie sich zukünftige Updates von Phorum oder des deutschen Sprachpaketes
erschweren (Ihre Änderungen würden ja durch jedes Update überschrieben).

Tragen Sie alle Textänderungen in german.*.php ein. Sie stehen dann automatisch
auch in den beiden Du-Sprachvarianten zur Verfügung. Wenn der Text auch als
"Du"-Variante benötigt wird, tragen Sie ihn in german-du-male.*.php ein. Und
wenn der Text Wörter enthält, für die auch eine weibliche Wortendung möglich
ist, tragen Sie den Text in german-du-female.*.php ein.

Beispiele:

1. Text ohne Anrede

- german.*.php:

$PHORUM['DATA']['LANG']['Home'] = 'Foren auf phorum.org';


2. Text mit Anrede

- german.*.php:

$PHORUM['DATA']['LANG']['YourEmail'] = 'Ihre Emailadresse';

- german-informal-male.*.php:

$PHORUM['DATA']['LANG']['YourEmail'] = 'Deine Emailadresse';


3. Text mit Anrede und weichlicher Wortendung

- german.*.php:

$PHORUM['DATA']['LANG']['GroupJoinSuccess']
    = 'Sie wurden erfolgreich Teilnehmer der Gruppe.';

- german-informal-male.*.php:

$PHORUM['DATA']['LANG']['GroupJoinSuccess']
    = 'Du wurdest erfolgreich Teilnehmer der Gruppe.';

- german-informal-female.*.php:

$PHORUM['DATA']['LANG']['GroupJoinSuccess']
    = 'Du wurdest erfolgreich Teilnehmerin der Gruppe.';


FAQ:
---

Frage: In welcher Reihenfolge werden die verschiedenen Sprachdateien eingebunden?

Antwort: Die Sprachdateien werden in folgender Reihenfolge eingebunden:

- Deutsch (Sie)

  /include/lang/german.*.php
  /mods/*/lang/german.*.php
  /mods/german_language_support/lang/german.*.php

- Deutsch (Du) männlich

  /include/lang/german.*.php
  /include/lang/german-informal-male.*.php
  /mods/*/lang/german.*.php
  /mods/*/lang/german-informal-male.*.php
  /mods/german_language_support/lang/german.*.php
  /mods/german_language_support/lang/german-informal-male.*.php

- Deutsch (Du) weiblich

  /include/lang/german.*.php
  /include/lang/german-informal-male.*.php
  /include/lang/german-informal-female.*.php
  /mods/*/lang/german.*.php
  /mods/*/lang/german-informal-male.*.php
  /mods/*/lang/german-informal-female.*.php
  /mods/german_language_support/lang/german.*.php
  /mods/german_language_support/lang/german-informal-male.*.php
  /mods/german_language_support/lang/german-informal-female.*.php


Mitwirkung:
----------

Beteilige Dich auf GitHub:
https://github.com/langzeittest/german_language_package
