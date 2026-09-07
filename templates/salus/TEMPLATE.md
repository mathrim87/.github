# Template Salus (plugin WordPress)

Cartella **sorgente condivisa** per `{plugin}/salus/` nei plugin Salus del workspace.  
Path canonico: `.github/templates/salus/` (repo `mathrim87/.github`).

## Contenuto

| Path | Ruolo | Copiato nei plugin? |
|------|--------|---------------------|
| `salus-admin-menu.php` | Helper menu Salus | Sì |
| `salus-puc-manual-check.php` | Link "Update now" nel notice PUC | Sì |
| `plugin-update-checker/` | Libreria PUC (vedi `manifest.json`) | Sì (intera cartella) |
| `class-update-checker.php.stub` | Stub update checker | No — generare per plugin |
| `README.md` | Doc cartella `salus/` nel plugin | Sì (sostituire `{{PREFIX}}`) |
| `manifest.json` | Elenco path condivisi + versione PUC | Solo template |
| `plugins.json` | Registry plugin con `salus/` | Solo template |

## Nuovo plugin

1. Copiare in `{plugin}/salus/` i path in `manifest.json` + `README.md` (con `{{PREFIX}}` → es. `WCMT`)
2. Generare `salus/class-{prefix}-update-checker.php` da `class-update-checker.php.stub`
3. Bootstrap: `require_once {PREFIX}_PLUGIN_DIR . 'salus/salus-admin-menu.php'`; init update checker in admin
4. Aggiungere il repo a `plugins.json`

## Allineamento template → plugin (per agent AI)

Quando si aggiorna PUC o un helper condiviso:

1. Modificare **solo** `.github/templates/salus/` (+ `manifest.json` se cambia versione PUC)
2. Per ogni repo in `plugins.json`: copiare i path condivisi in `{plugin}/salus/` (sovrascrivendo)
3. **Non** toccare `class-*-update-checker.php` salvo refactor esplicito dello stub
4. Verificare: `grep`/diff sui file condivisi; path bootstrap `{PREFIX}_PLUGIN_DIR . 'salus/...'` (mai `includes/salus/`)
5. Commit nel repo `.github`; commit separati nei plugin toccati (bump versione solo se si rilascia)

Propagazione mirata (un solo plugin): copiare solo dal template al plugin interessato, stesse regole.
