# Návod: Instalace WordPressu pomocí MAMP a GitHub repozitáře

Tento návod popisuje, jak si správně nastavit WordPress pro lokální vývoj s využitím MAMPu a vlastního GitHub repozitáře.

---

## 1. Stažení WordPressu

- Stáhni si aktuální verzi WordPressu z oficiální stránky: [cs.wordpress.org](https://cs.wordpress.org/)

## 2. Rozbalení a přesun do repozitáře

- Rozbal stažený .zip soubor.
- Otevři si složku, kde máš lokální GitHub repozitář.
- Přesuň **veškerý obsah** složky `wordpress` (ne samotnou složku) do svého repozitáře.

## 3. Nastavení MAMPu

- Spusť **MAMP**.
- Jdi do**Preferences → Server**.
- Nastav **Document Root** na cestu ke tvému repozitáři.
- Ulož nastavení (**Save**).

## 4. Vytvoření databáze v phpMyAdmin

- Otevři **phpMyAdmin** (v MAMP WebStart Page > Tools > phpMyAdmin).
- Klikni na **Databases**.
- Vytvoř novou databázi:
  - **Název**: např. `moje_stranka`
  - **Kódování znaků (Collation)**: `utf8_czech_ci`
- Klikni na **Create**.

## 5. Instalace WordPressu

- Otevři prohlížeč a jdi na [http://localhost](http://localhost)
- Vyplň přístupové údaje k databázi:
  - **Database Name**: tvoje nově vytvořená databáze
  - **Username**: `root`
  - **Password**: `root`
  - **Database Host**: `localhost`
  - **Table Prefix**: `wp_`

## 6. Nastavení administračního účtu

Pro **lokální vývoj** použi:

- **Username**: `admin`
- **Password**: `admin`
- **Email**: např. `test@example.com`

**Upozornění:** Tyto údaje (admin/admin) nikdy nepoužívej v produkčním prostředí!

## 7. Dokončení

WordPress je nyní připraven na `http://localhost/`. Všechny změny v souborech se automaticky ukládají do tvého GitHub repozitáře.

---

## Shrnutí důležitých pravidel

- **Přesouvej obsah složky WordPressu, ne složku samotnou.**
- **Používej správné kódování databáze: `utf8_czech_ci`.**
- **Admin/admin pouze pro lokální vývoj.**

---

> Tento návod je určen pro lokální vývojové účely.
