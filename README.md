VSY-Projekt: Ticketsystem
=========================

Projekt herunterladen
---------------------

1. Git herunterladen
2. Git Bash öffnen
3. Zum gewünschten Verzeichnis wechseln
4. `git clone https://github.com/Heddy147/VSY-Ticket.git [vsy_projekt]`
In `[]` ist optional. Das ist der Ordner, in dem das Projekt gespeichert wird.

Datenbankverbindung konfigurieren
---------------------------------

Im Ordner `config` eine neue Datei `db-data.php` erstellen und folgenden Code einfügen:
```php
<?php
return [
	'db1' => [
		'host' => 'localhost',
		'database' => 'vsy_projekt',
		'user' => 'root',
		'password' => ''
	],
	'db2' => [
		'host' => 'localhost:3307',
		'database' => 'vsy_projekt',
		'user' => 'root',
		'password' => ''
	]
];
```
Jeweils die Daten in `db1` und `db2` anpassen!

Apache konfigurieren
--------------------
Ihr MÜSST für das Projekt einen Virtual Host einrichten.
Zuerst die `hosts`-Datei bearbeiten:
`127.0.0.1 vsy_projekt`
Auch hier ist vsy_projekt variabel, muss aber rein!

Die `http-vhosts.conf` muss in der Konfiguration freigeschaltet werden:
Bei WAMP
`C:\wamp\bin\apache\apache2.4.9\conf\httpd.conf`
Bei XAMPP
`C:\xampp\apache\conf\httpd.conf`

Nach `Include conf/extra/httpd-vhosts.conf` suchen und die Raute `#` davor entfernen.

Datei `http-vhosts.conf` öffnen (liegt ein Ordner tiefer `extra`) und folgende Zeilen einfügen:
```
NameVirtualHost *

<VirtualHost *:80>
    DocumentRoot "C:\wamp\www"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:\Users\Dominik\Documents\Uni\vsy_projekt\web"
    ServerName vsy_projekt
    ServerAdmin dominik.hendrix@hotmail.de
</VirtualHost>
```

`DocumentRoot` zu dem Ordner ändern, in dem ihr das Projekt gespeichert habt. Wichtig hierbei ist, dass ihr auf den `web`-Ordner zeigt, nicht auf den Root-Ordner des Projekts.
ServerName wie in der `hosts`-Datei anpassen (nicht 127.0.0.1 :D)
ServerAdmin ist egal, was ihr eintragt, ist sowieso nur lokal :P.

Danach erst den WAMP-/XAMPP-Server starten. Wenn ihr nun `vsy_projekt` (oder was ihr eingetragen habt) im Browser aufruft, werdet Ihr das Projekt wiederfinden.