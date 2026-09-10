# libriomeopatia.it

**Ruolo:** e-commerce libri (WooCommerce) — Libri Omeopatia.  
**URL:** https://www.libriomeopatia.it (anche https://libriomeopatia.it)  
**REST index:** https://www.libriomeopatia.it/wp-json/  
**Ultimo aggiornamento doc:** 2026-09-10  
**Ultimo refresh wp-json:** 2026-09-10

> Living doc: aggiornare quando si tocca questo sito. Periodicamente rieseguire fetch di `/wp-json/` (vedi `sites/README.md`).

---

## Stack (da wp-json + noto)

| Componente | Versione / note | Verificato il |
|------------|-----------------|---------------|
| WordPress | REST ok; versione numerica non in index pubblico | 2026-09-10 |
| Site name (REST) | `LibriOmeopatia.it` | 2026-09-10 |
| WooCommerce | namespaces `wc/v3`, `wc-admin`, `wc/store`, … — docs plugin: **11.0.1** | 2026-09-10 |
| HPOS WooCommerce | attivo (citato in wc-marketing-tools / wc-feedback) | — |
| FluentCRM | `fluent-crm`, `fluent-crm/v1`, `fluent-crm/v2` — target **3.x** | 2026-09-10 |
| Fluent Forms / SMTP | `fluentform/v1`, `fluent-smtp` | 2026-09-10 |
| Theme | Hello Elementor (`elementor-hello-elementor/v1`) — non GeneratePress | 2026-09-10 |
| Page builder | Elementor + Pro (+ AI / One) | 2026-09-10 |
| SEO | Rank Math (`rankmath/v1` …) — non Yoast | 2026-09-10 |
| WP All Import | `wp-all-import/v1` | 2026-09-10 |
| Meta Box | `meta-box/v1`, `mbb`, `mb-relationships` | 2026-09-10 |
| Hosting | SiteGround (`siteground-optimizer`, `sg-security`, `siteground-settings`) | 2026-09-10 |

---

## Plugin rilevati da REST (`namespaces`)

| Namespace / segnale | Plugin / area |
|---------------------|---------------|
| `wc/*`, `wc-admin`, `wc-analytics`, `paypal` | WooCommerce + PayPal |
| `cpvc/v1` | **Custom Post Views Counter** (custom) |
| `fluent-crm*`, `fluentform/*`, `fluent-smtp` | FluentCRM / Forms / SMTP |
| `fluentcrm-sync/v1` | **FluentCRM Multi-Site Sync** (custom) |
| `elementor/*`, `elementor-pro`, `elementor-hello-elementor` | Elementor + Hello theme |
| `rankmath/v1` (+ sotto-route) | Rank Math SEO |
| `wp-all-import/v1` | WP All Import |
| `meta-box/v1`, `mbb`, `mb-relationships`, `mcp` | Meta Box (+ MCP) |
| `pixelyoursite-pro`, `pys/*` | PixelYourSite Pro |
| `code-snippets/v1` | Code Snippets |
| `jetpack/v4` | Jetpack |
| `redirection/v1` | Redirection |
| `regenerate-thumbnails/v1` | Regenerate Thumbnails |
| `siteground-*`, `sg-security` | SiteGround |

---

## Plugin custom Salus (workspace)

| Plugin | Repo | Note |
|--------|------|------|
| WC Back In Stock | [wc-back-in-stock](../wc-back-in-stock/) | Avvisi disponibilità — *no namespace REST tipico* |
| WC Marketing Tools | [wc-marketing-tools](../wc-marketing-tools/) | Tool marketing WC |
| WC Feedback | [wc-feedback](../wc-feedback/) | Feedback ordini; copy default LO |
| WC Sync Magazzino | [wc-sync-magazzino](../wc-sync-magazzino/) | Import stock CSV |
| Custom Post Views Counter | [custom-post-views-counter](../custom-post-views-counter/) | Confermato attivo via `cpvc/v1` |
| Consent Solution | [consent-solution](../consent-solution/) | Policy + registro ordini/form |
| FluentCRM Multi-Site Sync | [fluentcrm-multisite-sync](../fluentcrm-multisite-sync/) | Confermato attivo via `fluentcrm-sync/v1` |
| WC Custom Checkout Account Fields | [wc-custom-checkout-account-fields](../wc-custom-checkout-account-fields/) | Campi checkout IT — *da confermare se attivo* |
| Serialized Search Replace | [serialized-search-replace](../serialized-search-replace/) | Utility admin — *uso ad hoc* |

---

## Snippet (repo `snippet`)

Cartella dedicata: [snippet/libri-omeopatia/](../snippet/libri-omeopatia/) (molti file; sotto-cartelle principali sotto).

### Aree principali

| Path | Contenuto tipico |
|------|------------------|
| [Woocommerce/](../snippet/libri-omeopatia/Woocommerce/) | Stock, prezzi, spedizioni, checkout override, email, pagamenti |
| [Woocommerce/spedizioni/](../snippet/libri-omeopatia/Woocommerce/spedizioni/) | Regole shipping + `SHIPPING-BACKEND.md` |
| [template-single-product/](../snippet/libri-omeopatia/template-single-product/) | Accordion, schede, recensioni, stesso autore |
| [loop elementor/](../snippet/libri-omeopatia/loop%20elementor/) | Loop libri/post (featured, più venduti, più visti, …) |
| [fluentcrm/](../snippet/libri-omeopatia/fluentcrm/) | Sync professione, newsletter checkout, template email prodotti |
| [wp all import/](../snippet/libri-omeopatia/wp%20all%20import/) | Import Nimaia, SKU, shipping, noindex |
| [rank-math-seo/](../snippet/libri-omeopatia/rank-math-seo/) | Schema / noindex add-to-cart |
| [widget cerca/](../snippet/libri-omeopatia/widget%20cerca/) | Widget ricerca |
| Root `libri-omeopatia/*.php` | Meta Box autori, user/order meta, Elementor helper, stili, login text, … |

> Non elencare ogni `.php` qui se non serve: la cartella repo è la fonte; aggiungere in tabella solo snippet «critici» o appena modificati.

### Snippet condivisi rilevanti

| Path | Note |
|------|------|
| [snippet/woocommerce/](../snippet/woocommerce/) | Utility WC (analytics, stock column, blocca email, …) — *confermare attivi* |
| [snippet/wordpress/](../snippet/wordpress/) | Es. `sicurezza.php`; `wp-normalizza-formato-anagrafica.php` **attivo** (Title Case nome/cognome + email minuscolo + tel/P.IVA: WP, WC, Fluent Forms, FluentCRM) |
| [snippet/consent-magic/](../snippet/consent-magic/) | Banner / MU ajax |

---

## Integrazioni / note operative

- FluentCRM multi-sito: sync con corsisalus.it e robertogava.it.
- Consent Solution + WC Feedback: audit form custom `wcfb` (vedi docs plugin).
- Deploy tipico: FTP su hosting remoto.
- Index REST grande: usare `namespaces`, non scaricare/analizzare tutto `routes`.

---

## Changelog configurazione

| Data | Modifica |
|------|----------|
| 2026-09-10 | Attivato su LO lo snippet condiviso `wordpress/wp-normalizza-formato-anagrafica.php`. |
| 2026-09-10 | Creazione doc iniziale da mapping workspace (plugin + aree snippet). |
| 2026-09-10 | Refresh da `https://www.libriomeopatia.it/wp-json/`: stack + namespaces (`cpvc`, Rank Math, Hello Elementor, …). |
