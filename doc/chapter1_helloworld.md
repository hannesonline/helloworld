Kapitel 1: Hello world!
=======================

![](media/action_20px.png)
[Meine Welt (Kapitel 1)](http://localhost/meinewelt/001/index.php)

### Ziele
* Ausgabe mit `echo`
* Variablen
* `for`-Schleife

### Voraussetzungen
Das Projekt "`helloworld`" ist in Eclipse angelegt und der Browser zeigt:  
![](media/help_initial_screen.png)

(Nachschlagen: ![](media/backward-icon_20px.png) [Projekt `helloworld` installieren](install.md))

## Ausgabe



## Variablen

Variablen können alle Datentypen speichern: Strings, Zahlen, Objekte, usw.:

    $vorname = "Hans";
    $lieblingszahl = 42;
    $dbh = new PDO('mysql:host=localhost;dbname=meinewelt');

Variablen ausgeben kannst Du so:

    echo $vorname;

oder so:

    echo "Hallo $vorname!";

oder so:

    echo "Hallo " . $vorname . "!";

Rechnen kannst Du natürlich nur mit Zahlen:

    $summe = $summand1 + $summand2;

Übrigens: `$i` um eins erhöhen ("inkrementieren") geht so:

    $i = $i + 1;

Und das braucht man beim Programmieren so oft, dass es dafür eine Kurzschreibweise gibt:

    $i++;


## Schleifen


## Nächstes Kapitel
![](media/forward-icon_20px.png)
...
