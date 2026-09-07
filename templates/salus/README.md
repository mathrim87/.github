# Cartella Salus – Helper e aggiornamenti

Questa cartella contiene i file helper condivisi tra i plugin Salus, tra cui il sistema di **aggiornamenti automatici** tramite Plugin Update Checker (PUC) e GitHub.

I file condivisi (`salus-admin-menu.php`, `salus-puc-manual-check.php`, `plugin-update-checker/`) provengono dal template in `.github/templates/salus/` (repo `mathrim87/.github`). Vedi `manifest.json` e regola workspace `salus-plugins-standards.mdc`.

---

## Aggiornamenti automatici (PUC)

I plugin che usano questa struttura possono ricevere aggiornamenti direttamente dalla schermata **Plugin** di WordPress, come i plugin da WordPress.org. Il flusso si basa su:

- **Plugin Update Checker (PUC)**: libreria che controlla le Release su GitHub
- **GitHub Actions**: workflow che crea automaticamente una Release con tag e ZIP al push
- **Token GitHub**: necessario per accedere ai repository privati

Dopo **Controlla aggiornamenti** nella riga plugin, se c'e' una nuova versione il notice in alto include il link **Update now** (helper `Salus_Puc_Manual_Check`).

---

## Configurazione in WordPress

Per i repository privati, aggiungi il token in `wp-config.php`:

```php
define( 'GITHUB_TOKEN', 'ghp_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx' );
```

---

## Disabilitare il controllo in sviluppo

```php
define( '{{PREFIX}}_DISABLE_UPDATE_CHECK', true );
```

---

## Requisiti del workflow

- **Repository**: `mathrim87/.github` con workflow `wp-plugin-auto-release.yml`
- **Variabile**: `ENABLE_AUTO_RELEASE = true` nel repo del plugin
- **Header**: `Version: X.Y.Z` nel file principale del plugin
