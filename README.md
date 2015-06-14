Babelfish AddOn für REDAXO 4
============================

Hier steht der AddOn Beschreibungstext.

Features
--------

* Simple AddOn Vorlage für eigene AddOns
* Start und Einstellungen Seite
* Settings werden in Data-Verzeichnis gespeichert
* Patentierte X-Step SmartSetup(TM) Technologie ;)
* Hilfe Section inkl. automatisch geparster Readme, Changelog und License
* Umbauanleitung

Anleitung um ein eigenes AddOn draus zu machen
----------------------------------------------

* Sinnvollen AddOn Name überlegen, gerne ohne Rex-Prefix ;)
* Alle kleingeschriebenen `babelfish` in jeder Datei ersetzen durch eigenen AddOn-Key, z.B. `my_addon`
* Alle großgeschriebenen `Babelfish` in jeder Datei  ersetzen durch eigenen AddOn-Namen, z.B. `Mein AddOn`
* Statische Helferklasse `class.rex_babelfish_utils.inc.php` umbenennen (`babelfish` durch AddOn-Key ersetzen).
* Checken: In der `/files/backend.css` müssen die CSS IDs mit Bindestrich sein, nicht mit Unterstrich.
* Seiten Start, Setup und/oder Einstellungen anpassen oder entfernen usw.
* Langfiles checken und unnötige Keys raus
* Readme, Changelog und Lizenz (Copyright ergänzen!) sowie Author in der `config.inc.php` anpassen
* Addon kann nun installiert werden

Beispiel AddOns mit Babelfish-Features und weitere Techniken
------------------------------------------------------------

* [Magnific Popup](https://github.com/RexDude/magnific_popup) (Startseite, Modul-Installation)
* [SEO42](https://github.com/RexDude/seo42) (Start, Setup, Tools, Erweitere Hilfe)
* [Backend Utilities](https://github.com/RexDude/be_utilities) (Container für Plugins)

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

* Getestet mit REDAXO 4.6
* AddOn-Ordner lautet: `babelfish`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)

Credits
-------

* [Parsedown](http://parsedown.org/) Class by Emanuil Rusev
