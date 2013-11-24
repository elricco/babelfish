Dummy AddOn für REDAXO 4
========================

AddOn Beschreibungstext

Features
--------

* AddOn Vorlage für eigene AddOns
* Patentierte X-Step SmartSetup(TM) Technologie
* Hile Section inkl. automatisch geparster Readme, Changelog und License

Eigenes AddOn draus machen
--------------------------

* Alle kleingeschriebenen `dummy` in jeder Datei ersetzen durch eigenen AddOn-Key, z.B. `my_addon`
* Alle großgeschriebenen `Dummy` in jeder Datei  ersetzen durch eigenen AddOn-Namen, z.B. `Mein AddOn`
* Checken: In der `/pages/index.inc.php` müssen die CSS IDs mit Bindestrich sein, nicht mit Unterstrich.
* Readme, Changelog und Lizenz anpassen
* Setup und/oder Einstellungen anpassen oder entfernen usw.

Codebeispiel
------------

```php
<?php
// output something
echo foo();
?>
```

Hinweise
--------

* Getestet mir REDAXO 4.5
* AddOn-Ordner lautet: `dummy`

Changelog
---------

siehe [CHANGELOG.md](CHANGELOG.md)

Lizenz
------

siehe [LICENSE.md](LICENSE.md)

Credits
-------

* Parsedown Class by Emanuil Rusev
