<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>BBCode-Hilfe</title>
    <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS["PHORUM"]["http_path"] ?>/mods/bbcode/help/help.css"/>
  </head>
  <body>
    <h2>BBCode-Hilfe</h2>
    <p>
      BBCode ist die Kurzform f&uuml;r Bulletin Board Code. Es ist eine Formatierungssprache, welche von Ihnen zur Formatierung von Nachrichten verwendet werden kann. Diese Hilfeseite beschreibt die in diesem Forum nutzbaren Formatierungen. Bitte beachten Sie, dass einige der hier beschriebenen Formatierung in diesem Forum eventuell nicht verf&uuml;gbar sind. Der Administrator kann die einzelnen Formatierungen ein- und ausschalten.
    </p>
    <h3>
      Fetter Text: [b]&hellip;[/b]<br />
      Unterstrichener Text: [u]&hellip;[/u]<br />
      Kursiver Text: [i]&hellip;[/i]<br />
      Durchgestrichener Text: [s]&hellip;[/s]<br />
    </h3>
    <p>
      Mit diesen Markierungen k&ouml;nnen Sie Formatierungen zu Textbl&ouml;cken hinzuf&uuml;gen. Beispiele:
    </p>
    <tt>
      [b]Dieser Text ist fett.[/b]<br />
      [i]Dieser Text ist kursiv.[/i]<br />
      [u]Dieser Text ist unterstrichen.[/u]<br />
      [s]Dieser Text ist durchgestrichen.[/s]<br />
      [b][i]Dieser Text[/i] ist [s]gemischt[/s] formatiert[/b]
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <p>
      <b>Dieser Text ist fett.</b><br />
      <i>Dieser Text ist kursiv.</i><br />
      <u>Dieser Text ist unterstrichen.</u><br />
      <strike>Dieser Text ist durchgestrichen.</strike><br />
      <b><i>Dieser Text</i> ist <s>gemischt</s> formatiert</b>
    </p>
    <h3>
      Hochgestellt: [sup]&hellip;[/sup]<br />
      Tiefgestellt: [sub]&hellip;[/sub]
    </h3>
    <p>
      Mit diesen Markierungen k&ouml;nnen Sie Text hoch- oder tiefstellen. Das ist zum Beispiel in den folgenden F&auml;llen sinnvoll: &quot;2<sup>4</sup> = 16&quot; oder &quot;H<sub>2</sub>O&quot;.
    </p>
    <p>
      Beispiel:
    </p>
    <tt>
      [sup]hochgestellt[/sup] normal [sub]tiefgestellt[/sub]
    </tt>
    <p>
      Dies wird wie folgt angezeigt:
    </p>
    <p>
      <sup>hochgestellt</sup> normal <sub>tiefgestellt</sub>
    </p>
    <h3>
      Textfarbe: [color=&hellip;]&hellip;[/color]
    </h3>
    <p>
      Diese Markierung kann genutzt werden, um Textteile farblich hervorzuheben. Die Farbe muss ein g&uuml;ltiger HTML-Wert sein, (zum Beispiel &quot;blue&quot;, &quot;red&quot;, &quot;#ff0000&quot;, &quot;#888&quot;).
    </p>
    <p>
      Beispiel:
    </p>
    <tt>
      Wer hat Angst vor [color=red]rot[/color], [color=#eeaa00]gelb[/color] und [color=#30f]blau[/color]?
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <p>
      Wer hat Angst vor <span style="color: red">rot</span>, <span style="color: #eeaa00">gelb</span> und <span style="color: #30f">blau</span>?
    </p>
    <h3>
      Textgr&ouml;&szlig;e: [size=&hellip;]&hellip;[/size]
    </h3>
    <p>
      Diese Markierung kann genutzt werden, um die Schriftgr&ouml;&szlig;e von Textteile zu &auml;ndern. Die Gr&ouml;&szlig;e muss eine g&uuml;ltige HTML-Angabe sein (zum Beispiel &quot;12px&quot;, &quot;small&quot;, &quot;large&quot;).
    </p>
    <p>
      Beispiel:
    </p>
    <tt>
      <span style="font-size: x-small">Es</span><br />
      <span style="font-size: small">wird</span><br />
      <span style="font-size: medium">immer</span><br />
      <span style="font-size: large">etwas</span><br />
      <span style="font-size: x-large">gr&ouml;&szlig;er!</span>
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <p>
      <span style="font-size: x-small">Es</span>
      <span style="font-size: small">wird</span>
      <span style="font-size: medium">immer</span>
      <span style="font-size: large">etwas</span>
      <span style="font-size: x-large">gr&ouml;&szlig;er!</span>
    </p>
    <h3>
      Zentrierter Text: [center]&hellip;[/center]<br />
      Linksbündiger Test: [left]&hellip;[/left]<br />
      Rechtsbündiger Text: [right]&hellip;[/right]
    </h3>
    <p>
      Mit diesen Markierungen können Sie Text auf dem Bildschirm ausrichten. Beispiele:
    </p>
    <tt>
      [center]Ich bin im Zentrum von allem.[/center]<br />
      [left]Ich bin links ausgerichtet.[/left]<br />
      [right]Ich bin rechts ausgerichtet.[/right]
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <p>
      <span style="text-align: center;">Ich bin im Zentrum von allem.</span><br />
      <span style="text-align: left;">Ich bin links ausgerichtet.</span><br />
      <span style="text-align: right;">Ich bin rechts ausgerichtet.</span>
    </p>
    <h3>
      Eine Grafik aus dem Web anzeigen/verlinken: [img]&hellip;[/img]<br />
      Eine Webseite verlinken: [url]&hellip;[/url] oder [url=&hellip;]&hellip;[/url]<br />
      Eine Emailadresse verlinken [email]&hellip;[/email]
    </h3>
    <p>
      Dies sind alles Markierungen um Web-Adressen zu verlinken. Hier sind ein paar Beispiele:
    </p>
    <tt>
      [img]http://www.somesite.com/cool/thumbsup.gif[/img]<br />
      [url]http://www.phorum.org[/url]<br />
      [url=http://www.phorum.org]Besuche Phorum.org![/url]<br />
      [email]someuser@somesite.com[/email]
    </tt>
    <p>
      Diese werden angezeigt als:
    </p>
    <p>
      <img src="<?php print $GLOBALS['PHORUM']['http_path'] ?>/mods/bbcode/help/thumbsup.gif" alt="" /><br />
      [<a href="http://www.phorum.org">www.phorum.org</a>]<br />
      <a rel="nofollow" href="http://www.phorum.org">Besuche Phorum.org!</a><br />
      <a href="mailto:someuser@somesite.com">someuser@somesite.com</a>
    </p>
    <h3>
      Nichtproportionale Schrift, formatierter Code: [code]&hellip;[/code]
    </h3>
    <p>
      Manchmal hat man Text wie zum Beispiel ASCII-Art oder Programm-Code, welchen man in seinem Beitrag darstellen will. F&uuml;r diese F&auml;lle gibt es die [code] Markierung. Beispiel:
    </p>
<pre>
[code]
 _____  _
|  __ \| |
| |__) | |__   ___  _ __ _   _ _ __ ___
|  ___/| &#x2019;_ \ / _ \| &#x2019;__| | | | &#x2019;_ ` _ \
| |    | | | | (_) | |  | |_| | | | | | |
|_|    |_| |_|\___/|_|   \__,_|_| |_| |_|
[/code]
</pre>
    <p>
      Ohne das [code] darum, w&uuml;rde es komplett zerst&ouml;rt aussehen:
    </p>
    <p>
       _____  _<br />
      |  __ \| |<br />
      | |__) | |__   ___  _ __ _   _ _ __ ___<br />
      |  ___/| &#x2019;_ \ / _ \| &#x2019;__| | | | &#x2019;_ ` _ \<br />
      | |    | | | | (_) | |  | |_| | | | | | |<br />
      |_|    |_| |_|\___/|_|   \__,_|_| |_| |_|
    </p>
    <p>
      Aber mit [code] darum, sieht es wie folgt aus:
    </p>
<pre style="border: 1px solid #dde; background-color: #ffe; padding: 0px 0px 0px 10px">
 _____  _
|  __ \| |
| |__) | |__   ___  _ __ _   _ _ __ ___
|  ___/| &#x2019;_ \ / _ \| &#x2019;__| | | | &#x2019;_ ` _ \
| |    | | | | (_) | |  | |_| | | | | | |
|_|    |_| |_|\___/|_|   \__,_|_| |_| |_|
</pre>
    <h3>
      Zitierter Text: [quote]&hellip;[/quote] oder [quote=&hellip;]&hellip;[/quote]
    </h3>
    <p>
      Wenn Sie ein Zitat Ihrer Nachricht hinzuf&uuml;gen wollen, dann k&ouml;nnen Sie diese Markierung nutzen. Dabei k&ouml;nnen Sie ausw&auml;hlen, ob Sie denjenigen, den Sie zitieren m&ouml;chten, mit angeben oder nicht.
    </p>
    <p>
      Beispiele:
    </p>
    <tt>
      [quote]Phorum ist spitze![/quote]<br />
      [quote=Aus Hamlet von William Shakespeare]<br />
      Sein oder Nichtsein; das ist hier die Frage:<br />
      Obs edler im Gem&uuml;t, die Pfeil und Schleudern<br />
      Des w&uuml;tenden Geschicks erdulden oder,<br />
      Sich waffnend gegen eine See von Plagen,<br />
      Durch Widerstand sie enden?<br />
      [/quote]
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <blockquote class="bbcode">Zitat:<div>Phorum ist spitze!</div></blockquote>
    <blockquote class="bbcode">
      Zitat:
      <div>
        <strong>Aus Hamlet von William Shakespeare</strong><br />
        Sein oder Nichtsein; das ist hier die Frage:<br />
        Obs edler im Gem&uuml;t, die Pfeil und Schleudern<br />
        Des w&uuml;tenden Geschicks erdulden oder,<br />
        Sich waffnend gegen eine See von Plagen,<br />
        Durch Widerstand sie enden?<br />
      </div>
    </blockquote>
    <h3>
      Eine horizontale Linie einf&uuml;gen: [hr]
    </h3>
    <p>
      Um eine Trennungslinie einzuf&uuml;gen, k&ouml;nnen Sie die [hr]-Markierung nutzen. Das w&uuml;rde dann wie folgt aussehen:
    </p>
    <hr />
    <p>
      Dies ist haupts&auml;chlich sinnvoll, um l&auml;ngeren Text zu strukturieren.
    </p>
    <h3>
      Aufz&auml;hlungslisten:<br />[list]<br />[*] Eintrag 1<br />[*] Eintrag 2<br />[/list]
    </h3>
    <p>
      Mit dieser Markierung k&ouml;nnen Sie eine Aufz&auml;hlungsliste in Ihren Beitrag aufnehmen. Standardm&auml;&szlig;ig werden die einzelnen Eintr&auml;ge mit einem Punkt vorweg angezeigt. Durch zus&auml;tzliche Angabe eines der folgenden Zeichen kann das Aufz&auml;hlungszeichen ge&auml;ndert werden: &quot;1&quot; (Zahlen), &quot;a&quot; (Kleinbuchstaben), &quot;A&quot; (Gro&szlig;buchstaben), &quot;i&quot; (R&ouml;mische Zahlen) oder &quot;I&quot; (Gro&szlig;e r&ouml;mische Zahlen). Beispiele:
    </p>
    <tt>
      [list]<br />
      [*] Eintrag 1<br />
      [*] Eintrag 2<br />
      [list]<br />
      [list=A]<br />
      [*] Weiterer Eintrag 1<br />
      [*] Weiterer Eintrag 2<br />
      [/list]<br />
    </tt>
    <p>
      Dies wird angezeigt als:
    </p>
    <ul>
      <li>Eintrag 1</li>
      <li>Eintrag 2</li>
    </ul>
    <ol type="A">
      <li>Weiterer Eintrag 1</li>
      <li>Weiterer Eintrag 2</li>
    </ol>
  </body>
</html>
