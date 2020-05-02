Projekt `helloworld` installieren
=================================

### Voraussetzungen
*Git*, *Apache* und *PHP* sind installiert und korrekt konfiguriert.  
(Siehe: [Entwicklungsumgebung einrichten unter Windows](basics.md))

### Projektordner anlegen

    cd "C:\Program Files\Apache24\htdocs"
    md "meinewelt"

### Repository klonen

    cd "C:\Program Files\Apache24\htdocs\meinewelt"
    git clone https://github.com/hannesonline/helloworld.git .

### Installation testen
Im Browser aufrufen: [`http://localhost/meinewelt/001/index.php`](http://localhost/meinewelt/001/index.php)

### Projekt in Eclipse anlegen
* `File` &rarr; `New` &rarr; `PHP Project`
* `Projekt name`: `Meine Welt`  
  `Create project at existing location`  
  `Directory`: `C:\Program Files\Apache24\htdocs\meinewelt`
* `Finish`


## Nächstes Kapitel
![](media/forward-icon_20px.png)
[Hello world!](chapter1_helloworld.md)
