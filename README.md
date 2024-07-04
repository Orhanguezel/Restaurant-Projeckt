# Antalya Döner Pizzeria

Dieses Projekt ist eine webbasierte Anwendung zur Verwaltung eines Restaurants. Es umfasst Funktionen wie Menüanzeige, Bestellverwaltung und eine Administrationsseite für den Restaurantbesitzer.

## Inhalt

- [Funktionen](#funktionen)
- [Voraussetzungen](#voraussetzungen)
- [Installation](#installation)
- [Verwendung](#verwendung)
- [Dateistruktur](#dateistruktur)

## Funktionen

- **Menüanzeige:** Zeigt die Menüelemente in Kategorien an, die aus JSON-Dateien geladen werden.
- **Bestellung:** Kunden können Bestellungen aufgeben, die im System gespeichert werden.
- **Administrationspanel:** Der Administrator kann alle eingegangenen Bestellungen einsehen.

## Voraussetzungen

- Apache Webserver
- MySQL
- PHP 7.x oder höher
- Bootstrap 4.5.2
- JQuery 3.5.1

## Installation

1. **MySQL-Datenbank einrichten:**

    ```sql
    CREATE DATABASE restaurant;
    USE restaurant;

    CREATE TABLE orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_name VARCHAR(255),
        order_details TEXT,
        order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        role ENUM('admin', 'user') DEFAULT 'user'
    );
    ```

2. **Projektdateien kopieren:**

    ```bash
    sudo cp -r /path/to/restaurant-management/* /var/www/html/
    ```

3. **Dateiberechtigungen setzen:**

    ```bash
    sudo chown -R www-data:www-data /var/www/html/
    sudo chmod -R 755 /var/www/html/
    ```

4. **Apache Webserver neu starten:**

    ```bash
    sudo systemctl restart apache2
    ```

## Verwendung

1. **Webseite aufrufen:**

    Öffnen Sie Ihren Webbrowser und navigieren Sie zu `http://localhost/index.php`.

2. **Benutzerregistrierung:**

    Registrieren Sie sich über das Registrierungsformular. Der Administrator kann sich direkt über die Konsole registrieren.

3. **Anmeldung:**

    Melden Sie sich mit Ihren Zugangsdaten an, um Bestellungen aufzugeben oder das Administrationspanel zu sehen.

4. **Bestellung aufgeben:**

    Gehen Sie zum Abschnitt "Place an Order" und füllen Sie das Formular aus, um eine Bestellung aufzugeben.

5. **Administrationspanel:**

    Der Administrator kann sich anmelden und zum Administrationspanel navigieren, um alle eingegangenen Bestellungen einzusehen.

## Dateistruktur

- **index.php:** Hauptseite der Anwendung.
- **admin.php:** Administrationsseite.
- **login.html:** Anmeldeseite.
- **register.html:** Registrierungsseite.
- **css/styles.css:** Benutzerdefinierte CSS-Stile.
- **js/menu.js:** JavaScript zur Handhabung der Menüanzeige.
- **php/get_menu.php:** PHP-Skript zum Laden der Menüdaten aus JSON-Dateien.
- **php/add_order.php:** PHP-Skript zum Hinzufügen von Bestellungen.
- **php/connect.php:** PHP-Skript zur Datenbankverbindung.
- **images/:** Verzeichnis für Bilder (Logo, Hero, Galerie).
- **data/:** Verzeichnis für die Menü-JSON-Dateien.

## Kontakt

Bei Fragen oder Problemen wenden Sie sich bitte an:

- Email:orhan.guezel@dci-student.org
- Telefon: +172 384 6068
