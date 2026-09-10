# Configurazione siti Salus

Documentazione viva della stack dei tre siti di produzione. Ogni file si arricchisce man mano che ci si lavora.

| Sito | Scheda | REST index |
|------|--------|------------|
| [corsisalus.it](https://www.corsisalus.it) | [corsisalus.it.md](corsisalus.it.md) | https://www.corsisalus.it/wp-json/ |
| [libriomeopatia.it](https://www.libriomeopatia.it) | [libriomeopatia.it.md](libriomeopatia.it.md) | https://www.libriomeopatia.it/wp-json/ |
| [robertogava.it](https://www.robertogava.it) | [robertogava.it.md](robertogava.it.md) | https://www.robertogava.it/wp-json/ |

> **robertogava:** usare sempre `www` (`https://robertogava.it/wp-json/` → 404). WP è sotto `/wp`.

## Uso (agent / sviluppo)

1. Prima di lavorare su un sito, **leggere** il relativo `.md`.
2. Dopo modifiche rilevanti (plugin, snippet, versioni, integrazioni), **aggiornare** quel file.
3. Regola Cursor: `.cursor/rules/salus-sites-config.mdc` (`alwaysApply: true`).

## Refresh periodico da `/wp-json/`

Quando si lavora su un sito, o se la scheda è vecchia / incompleta:

1. Fetch dell’URL REST index della tabella sopra.
2. Aggiornare nella scheda: `name`/`home`/`url`, tabella **Stack**, tabella **Plugin rilevati da REST**, data **Ultimo refresh wp-json**.
3. Confrontare i `namespaces` con i plugin custom (es. `fluentcrm-sync/v1`, `cpvc/v1`).
4. Non basarsi solo su REST: plugin senza route pubbliche (OTP, Consent Solution, molti WC custom) restano nella sezione workspace.

Limitazioni: l’index non espone versioni numeriche WP/plugin; elenca solo chi registra route REST; su CS/LO il dump `routes` è enorme — usare `namespaces`.

I link ai plugin e agli snippet puntano ai repo sibling (`../nome-repo/`, `../snippet/...`).
