# Installation unter Windows

## Empfohlene Tools
### 7-Zip
### Notepad++
### Firefox

## Apache

### Herunterladen

[Apache HTTP Server Project](https://httpd.apache.org/)
&rarr; [Download](https://httpd.apache.org/download.cgi)
&rarr; [Windows](https://httpd.apache.org/docs/current/platform/windows.html#down)
&rarr; [Apache Haus](https://www.apachehaus.com/cgi-bin/download.plx)
:  
![](Download-icon_20px.png)
[Apache 2.4.43 x64 OpenSSL](https://de.apachehaus.com/downloads/httpd-2.4.43-o111g-x64-vc15.zip) (12 MB)

### Entpacken
Entpacken nach `C:\Program Files\Apache24`

### Pfad registrieren
`C:\Program Files\Apache24\conf\httpd.conf`:

    Define SRVROOT "C:/Program Files/Apache24"

### Als Dienst installieren

    httpd.exe -k install
(Quelle: https://httpd.apache.org/docs/2.4/platform/windows.html)

### Verknüpfung zu `ApacheMonitor.exe` in den Autostart
Autostart-Verzeichnis unter Windows 10: `Win+R` &rarr; `shell:startup`

    C:\Program Files\Apache24\bin\ApacheMonitor.exe

### Installation testen
Im Browser aufrufen: [`http://localhost`](http://localhost)

## PHP

## Eclipse

