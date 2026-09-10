# robertogava.it

**Ruolo:** sito contenuti / marketing (FluentCRM, form) — Roberto Gava.  
**URL canonico:** https://www.robertogava.it  
**WordPress path:** installazione sotto `/wp` (`url` REST = `https://www.robertogava.it/wp`)  
**REST index:** https://www.robertogava.it/wp-json/  
**Nota URL:** `https://robertogava.it/wp-json/` → **404**; usare sempre `www`.  
**Ultimo aggiornamento doc:** 2026-09-10  
**Ultimo refresh wp-json:** 2026-09-10

> Living doc: aggiornare quando si tocca questo sito. Periodicamente rieseguire fetch di `/wp-json/` (vedi `sites/README.md`).

---

## Stack (da wp-json + noto)

| Componente | Versione / note | Verificato il |
|------------|-----------------|---------------|
| WordPress | REST ok sotto `/wp`; versione numerica non in index | 2026-09-10 |
| Site name (REST) | `RobertoGava.it` — «Cardiologo, Farmacologo, Tossicologo e Omeopata» | 2026-09-10 |
| WooCommerce | **assente** dai namespaces REST | 2026-09-10 |
| FluentCRM | `fluent-crm/v1`, `fluent-crm/v2` — target **3.x** | 2026-09-10 |
| Fluent Forms / SMTP | `fluentform/v1`, `fluent-smtp` | 2026-09-10 |
| Theme | GeneratePress (`generatepress/v1`, `generatepress-pro/v1`) | 2026-09-10 |
| Page builder | Elementor + Pro (+ AI / One) | 2026-09-10 |
| SEO | Yoast (`yoast/v1`) | 2026-09-10 |
| Hosting | SiteGround (`siteground-optimizer`, `sg-security`, `siteground-settings`) | 2026-09-10 |

---

## Plugin rilevati da REST (`namespaces`)

| Namespace / segnale | Plugin / area |
|---------------------|---------------|
| `fluent-crm/*`, `fluentform/*`, `fluent-smtp` | FluentCRM / Forms / SMTP |
| `fluentcrm-sync/v1` | **FluentCRM Multi-Site Sync** (custom) |
| `elementor/*`, `elementor-pro`, `elementor-ai`, `elementor-one` | Elementor suite |
| `generatepress/*` | GeneratePress (+ Pro) |
| `yoast/v1` | Yoast SEO |
| `meta-box/v1`, `mbb`, `mb-relationships` | Meta Box |
| `pixelyoursite-pro`, `pys/*` | PixelYourSite Pro |
| `code-snippets/v1` | Code Snippets |
| `redirection/v1` | Redirection |
| `duplicate-post/v1` | Duplicate Post |
| `regenerate-thumbnails/v1` | Regenerate Thumbnails |
| `quadlayers/search-exclude` | Search Exclude |
| `performance-lab/v1` | Performance Lab |
| `siteground-*`, `sg-security` | SiteGround |

Nessun namespace WooCommerce / LearnDash: sito non e-commerce/corsi lato REST.

---

## Plugin custom Salus (workspace)

| Plugin | Repo | Note |
|--------|------|------|
| FluentCRM Multi-Site Sync | [fluentcrm-multisite-sync](../fluentcrm-multisite-sync/) | Confermato attivo via `fluentcrm-sync/v1` |
| Consent Solution | [consent-solution](../consent-solution/) | Registro form Fluent — *no namespace REST tipico* |
| Serialized Search Replace | [serialized-search-replace](../serialized-search-replace/) | Utility admin — *uso ad hoc* |

---

## Snippet (repo `snippet`)

Cartella dedicata: [snippet/robertogava/](../snippet/robertogava/)

### Snippet sito (`robertogava/`)

| File | Note |
|------|------|
| `hide-vaccinazioni-category.php` | Nasconde categoria vaccinazioni |
| `search-post-by-link.php` | Ricerca post da link |

### Snippet condivisi rilevanti

| Path | Note |
|------|------|
| [snippet/consent-magic/](../snippet/consent-magic/) | `mu-salus-admin-ajax-json.php` (nota: submission Fluent su robertogava); `consent-magic-banner.php` |
| [snippet/wordpress/](../snippet/wordpress/) | Sicurezza / notifiche admin; `wp-normalizza-formato-anagrafica.php` **attivo** (Title Case nome/cognome + email minuscolo + tel/P.IVA: WP, WC, Fluent Forms, FluentCRM) |

---

## Integrazioni / note operative

- FluentCRM multi-sito: sync con corsisalus.it e libriomeopatia.it.
- Attention su form Fluent + Consent Magic (admin-ajax JSON MU).
- Deploy tipico: FTP su hosting remoto.
- Sempre usare URL con `www` per REST.

---

## Changelog configurazione

| Data | Modifica |
|------|----------|
| 2026-09-10 | Attivato su RG lo snippet condiviso `wordpress/wp-normalizza-formato-anagrafica.php`. |
| 2026-09-10 | Creazione doc iniziale da mapping workspace (plugin + snippet noti). |
| 2026-09-10 | Refresh da `https://www.robertogava.it/wp-json/`: stack, namespaces, nota 404 senza www, path `/wp`. |
