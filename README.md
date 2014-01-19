Dummy AddOn für REDAXO 4
========================

AddOn Beschreibungstext

Features
--------

* Simple AddOn Vorlage für eigene AddOns
* Start und Einstellungen Seite
* Patentierte X-Step SmartSetup(TM) Technologie
* Hile Section inkl. automatisch geparster Readme, Changelog und License
* Umbauanleitung

Anleitung um ein eigenes AddOn draus zu machen
----------------------------------------------

* Sinnvollen Addon Name sowie Key überlegen, gerne ohne Rex-Prefix ;)
* Alle kleingeschriebenen `dummy` in jeder Datei ersetzen durch eigenen AddOn-Key, z.B. `my_addon`
* Alle großgeschriebenen `Dummy` in jeder Datei  ersetzen durch eigenen AddOn-Namen, z.B. `Mein AddOn`
* Statische Helferklasse `class.rex_dummy_utils.inc.php` umbenennen (`dummy` durch AddOn-Key ersetzen).
* Checken: In der `/pages/index.inc.php` müssen die CSS IDs mit Bindestrich sein, nicht mit Unterstrich.
* Seiten Start, Setup und/oder Einstellungen anpassen oder entfernen usw.
* Langfiles checken und unnötige Keys raus
* Readme, Changelog und Lizenz anpassen

Beispiel AddOns mit Dummy-Features und weitere Techniken
--------------------------------------------------------

* [Magnific Popup](https://github.com/RexDude/magnific_popup)
* [CKEditor](https://github.com/RexDude/ckeditor)
* [SEO42](https://github.com/RexDude/seo42)

Codebeispiele
-------------

```php
<?php
// output something
echo foo();
?>
```

Hinweise
--------

* Getestet mit REDAXO 4.5
* AddOn-Ordner lautet: `dummy`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)

Credits
-------

* [Parsedown](http://parsedown.org/) Class by Emanuil Rusev
