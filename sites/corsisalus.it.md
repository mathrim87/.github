# corsisalus.it

**Ruolo:** piattaforma corsi (LearnDash + WooCommerce) — Corsi Salus.  
**URL:** https://www.corsisalus.it  
**REST index:** https://www.corsisalus.it/wp-json/  
**Ultimo aggiornamento doc:** 2026-09-10 (schema Course List)  
**Ultimo refresh wp-json:** 2026-09-10

> Living doc: aggiornare quando si tocca questo sito. Periodicamente rieseguire fetch di `/wp-json/` (vedi `sites/README.md`).

---

## Stack (da wp-json + noto)

| Componente | Versione / note | Verificato il |
|------------|-----------------|---------------|
| WordPress | REST ok; versione numerica non in index pubblico | 2026-09-10 |
| Site name (REST) | `CorsiSalus.it` — «Per crescere in Conoscenza e Consapevolezza» | 2026-09-10 |
| WooCommerce | namespaces `wc/v3`, `wc-admin`, `wc/store`, … | 2026-09-10 |
| LearnDash | `ldlms/v1\|v2`, `learndash/v1`, `ld-propanel/v1`, `learndashCourseReviews/v1` | 2026-09-10 |
| FluentCRM | `fluent-crm/v1`, `fluent-crm/v2` — target **3.x** | 2026-09-10 |
| Fluent Forms / SMTP | `fluentform/v1`, `fluent-smtp` | 2026-09-10 |
| Theme | GeneratePress (`generatepress/v1`, `generatepress-pro/v1`) | 2026-09-10 |
| Page builder | Elementor + Pro (+ AI / One) | 2026-09-10 |
| SEO | Yoast (`yoast/v1`) | 2026-09-10 |
| Hosting | SiteGround (`siteground-optimizer`, `sg-security`) | 2026-09-10 |
| HPOS WooCommerce | da verificare (non esposto nell’index) | — |

---

## Plugin rilevati da REST (`namespaces`)

Indicano plugin **attivi** che registrano route (non è l’elenco completo dei plugin senza REST).

| Namespace / segnale | Plugin / area |
|---------------------|---------------|
| `wc/*`, `wc-admin`, `wc-analytics`, `wc-stripe`, `paypal` | WooCommerce + Stripe + PayPal |
| `ldlms/*`, `learndash/*`, `ld-propanel`, `learndashCourseReviews` | LearnDash (+ ProPanel, Course Reviews) |
| `fluent-crm/*`, `fluentform/*`, `fluent-smtp` | FluentCRM / Forms / SMTP |
| `fluentcrm-sync/v1` | **FluentCRM Multi-Site Sync** (custom) |
| `elementor/*`, `elementor-pro`, `elementor-ai`, `elementor-one` | Elementor suite |
| `generatepress/*` | GeneratePress (+ Pro) |
| `yoast/v1` | Yoast SEO |
| `jetpack/v4` | Jetpack |
| `meta-box/v1`, `mbb`, `mb-relationships` | Meta Box |
| `pixelyoursite-pro`, `pys/*` | PixelYourSite Pro |
| `code-snippets/v1` | Code Snippets |
| `redirection/v1` | Redirection |
| `duplicate-post/v1` | Duplicate Post |
| `regenerate-thumbnails/v1` | Regenerate Thumbnails |
| `quadlayers/search-exclude` | Search Exclude |
| `performance-lab/v1` | Performance Lab |
| `liquidweb/harbor/v1` | Liquid Web Harbor |
| `siteground-optimizer`, `sg-security` | SiteGround |

---

## Plugin custom Salus (workspace)

| Plugin | Repo | Note |
|--------|------|------|
| OTP Email Login Form | [otp-email-login-form](../otp-email-login-form/) | Login OTP; URL hardcoded su corsisalus.it — *no namespace REST dedicato* |
| LearnDash Gestione Rinnovo Corsi | [learndash-gestione-rinnovo-corsi](../learndash-gestione-rinnovo-corsi/) | Scadenza accesso + rinnovo scontato |
| LearnDash Course Transfer | [learndash-course-transfer](../learndash-course-transfer/) | Trasferimento studenti tra corsi LD |
| FluentCRM Multi-Site Sync | [fluentcrm-multisite-sync](../fluentcrm-multisite-sync/) | Confermato attivo via `fluentcrm-sync/v1` |
| Consent Solution | [consent-solution](../consent-solution/) | Policy / consensi — *no namespace REST tipico* |
| WC Custom Checkout Account Fields | [wc-custom-checkout-account-fields](../wc-custom-checkout-account-fields/) | Campi checkout IT — *da confermare se attivo* |
| Serialized Search Replace | [serialized-search-replace](../serialized-search-replace/) | Utility admin — *uso ad hoc* |

---

## Snippet (repo `snippet`)

Cartella dedicata: [snippet/corsisalus/](../snippet/corsisalus/)

### Snippet sito (`corsisalus/`)

| File | Note |
|------|------|
| `endpoint-corsi-acquistati.php` | Endpoint area account corsi |
| `LD-lezione-avvertenze-obbligatoria.php` | LearnDash avvertenze |
| `LD-export-users-csv.php` | Export utenti LD |
| `disable-repeated-purchase.php` | Blocco riacquisto |
| `hide-plugins-by-role.php` | Nasconde plugin per ruolo |
| `user-role-editor.php` | Ruoli |
| `log-last-login.php` | Ultimo login |
| `telegram-notifications.php` | Notifiche Telegram |
| `twitter-tracking-code.php` | Tracking |
| `custom-image-size.php` | Image size |
| `shop-page-tag-corsi.php` | Shop / tag corsi |
| `black-friday-2024.php` | Promo stagionale |
| `debug-disattivazioni-plugin.php` | Debug |
| `wc-iva-estero-privati.php` | IVA estero |
| `wc-disable-error-messages.php` | Messaggi errore WC |
| `wc-set-delay-period-on-processing-status.php` | Delay processing |
| `wc-invio-email-fattura-elettronica.php` | Email FE |
| `invio-email-notifica-fattura-elettronica.php` | Notifica FE |
| `wc-webhook-ordine-trigger-manuale.php` | Webhook Integrately |
| `wc-webhook-integra-payload-pys-meta.php` | Payload webhook |
| `wc-log-webhooks-delivery.php` | Log webhook |
| `yoast-schema-course-list.php` | Schema Course List **v1.5.1**: ItemList shop (13); Course con prezzo **IVA inclusa** (`wc_get_price_including_tax` + `valueAddedTaxIncluded`) |

### Snippet condivisi rilevanti

| Path | Note |
|------|------|
| [snippet/learndash/](../snippet/learndash/) | Es. `shortcode-course-author-for-certificates.php` |
| [snippet/woocommerce/](../snippet/woocommerce/) | Utility WC riusabili — *confermare quali attivi qui* |
| [snippet/wordpress/](../snippet/wordpress/) | Sicurezza / notifiche admin; `wp-normalizza-formato-anagrafica.php` **attivo** (Title Case nome/cognome + email minuscolo + tel/P.IVA: WP, WC, Fluent Forms, FluentCRM) |
| [snippet/consent-magic/](../snippet/consent-magic/) | Banner / MU ajax — *da confermare* |

---

## Integrazioni / note operative

- FluentCRM multi-sito: sync con libriomeopatia.it e robertogava.it (`fluentcrm-sync/v1` presente).
- Deploy tipico: modifiche locali → FTP su hosting remoto (vedi `staging-browser-verify.mdc`).
- Area account / OTP: vedi README di `otp-email-login-form`.
- Index REST molto grande: leggere soprattutto `name` / `namespaces` (non tutto il dump `routes`).
- **Schema SEO (Course List):** snippet `yoast-schema-course-list.php` **v1.5.0** — `ItemList` allineato al loop shop (cat. `corso` + `exclude-from-catalog`). Dopo deploy: `?nonitro` per verificare senza NitroPack.

---

## Changelog configurazione

| Data | Modifica |
|------|----------|
| 2026-09-10 | Attivato su CS lo snippet condiviso `wordpress/wp-normalizza-formato-anagrafica.php` (normalizzazione nome/email/tel/P.IVA). |
| 2026-09-10 | Schema Course List v1.5.1: Offer con prezzo IVA inclusa + valueAddedTaxIncluded. |
| 2026-09-10 | Schema Course List v1.5.0: ItemList = 13 prodotti shop (visibility WC), non più 18. |
| 2026-09-10 | Snippet `yoast-schema-course-list.php`: Course List (ItemList catalogo + Course landing); doc operativa schema vs redirect prodotto. |
| 2026-09-10 | Creazione doc iniziale da mapping workspace (plugin + snippet noti). |
| 2026-09-10 | Refresh da `https://www.corsisalus.it/wp-json/`: stack + tabella namespaces. |
