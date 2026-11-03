# corsisalus.it

**Ruolo:** piattaforma corsi (LearnDash + WooCommerce) — Corsi Salus.  
**URL:** https://www.corsisalus.it  
**REST index:** https://www.corsisalus.it/wp-json/  
**Ultimo aggiornamento doc:** 2026-11-03  
**Ultimo refresh wp-json:** 2026-11-03

> Living doc: aggiornare quando si tocca questo sito. Periodicamente rieseguire fetch di `/wp-json/` (vedi `sites/README.md`).

---

## Stack (da wp-json + noto)

| Componente | Versione / note | Verificato il |
|------------|-----------------|---------------|
| WordPress | REST ok; versione numerica non in index pubblico | 2026-09-10 |
| Site name (REST) | `CorsiSalus.it` — «Per crescere in Conoscenza e Consapevolezza» | 2026-09-10 |
| WooCommerce | **11.2.1** (Automattic). Anche WooCommerce.com Update Manager **1.0.3**, WooCommerce Analytics **0.10.0**, PayPal Payments **4.2.0**, Stripe (Payment Plugins) **4.0.19**, Satispay **2.2.10** | 2026-11-03 |
| LearnDash | LMS **5.2.2.1** (ultima disponibile 5.2.3) + Certificate Builder **1.1.5**. Namespace `ld-propanel/v1` e `learndashCourseReviews/v1` ancora registrati, senza un plugin omonimo in elenco admin | 2026-11-03 |
| FluentCRM | **3.2.6** + Pro **3.2.6** (ultima disponibile 3.3.1). Forms **6.2.16** + Pro **6.2.16** (ultima 6.2.17). SMTP **2.4.1** | 2026-11-03 |
| Theme | GeneratePress + GP Premium **2.5.6** | 2026-11-03 |
| Page builder | Elementor **4.3.5** (ultima 4.3.6) + Pro **4.3.2** (ultima 4.3.3). `elementor-ai` e `elementor-one` sono nel pacchetto, non plugin a parte | 2026-11-03 |
| SEO | Yoast SEO **28.8** | 2026-11-03 |
| Hosting | SiteGround: Speed Optimizer **7.8.6**, Security Optimizer **1.6.9**. Disable XML-RPC acceso | 2026-11-03 |
| Backup | UpdraftPlus **2.26.14.26** | 2026-11-03 |
| Cache | NitroPack **1.20.3** (namespace REST `liquidweb/harbor/v1`) | 2026-11-03 |
| PHP | **8.2.34** (64 bit), SAPI `apache2handler`. Limiti in «Runtime PHP» | 2026-10-02 |
| Web server | Apache su Linux 6.12.91-MCIclouder1135-C9 x86_64 | 2026-10-02 |
| HPOS WooCommerce | **spento**: gli ordini restano nei post `shop_order` | 2026-10-29 |

### Runtime PHP (Site Health, 2026-10-02)

| Parametro | Valore |
|-----------|--------|
| `max_input_vars` | **3000** |
| `max_execution_time` | 120 |
| `max_input_time` | 120 |
| `memory_limit` | 768M |
| `upload_max_filesize` | 256M |
| `post_max_size` | 256M |
| cURL | 8.15.0 OpenSSL/3.5.8 |
| Suhosin | no |
| Imagick | no |
| Opcode cache | disabilitata |
| Permalink pretty | sì |
| `.htaccess` | regole custom |
| `robots.txt` | file statico (WordPress non lo serve in dinamico) |

---

## Plugin attivi (admin)

**Fonte:** pagina Plugin di WordPress. **Lettura:** 2026-11-03. **Auto-update:** disabilitati su tutti. La colonna «Ultima disponibile» è valorizzata solo quando WordPress la mostrava in quella lettura.

Il plugin **Jetpack non è installato.** Il namespace `jetpack/v4` (route di connection e di sync) lo registra la libreria Jetpack Connection distribuita con WooCommerce, WooCommerce.com Update Manager e WooCommerce Analytics. È quella libreria a scrivere l’avviso «WordPress.com requests to your site are being blocked»: WordPress.com richiama `xmlrpc.php`, Security Optimizer risponde 403. I backup di UpdraftPlus non passano da quella chiamata.

| Plugin | Autore | Versione installata | Ultima disponibile |
|--------|--------|---------------------|--------------------|
| Advanced Order Export For WooCommerce | AlgolPlus | 4.1.4 | — |
| Better Search Replace | WP Engine | 1.4.11 | — |
| Code Snippets | Code Snippets Pro | 4.0.0 | — |
| ConsentMagic Pro | ConsentMagic | 5.1.2.4 | — |
| Consent Solution | mitoff | 1.4.2 | — |
| Elementor | Elementor.com | 4.3.5 | 4.3.6 |
| Elementor Pro | Elementor.com | 4.3.2 | 4.3.3 |
| Enable Media Replace | ShortPixel | 4.2.3 | — |
| FluentCRM - Marketing Automation For WordPress | WP Email Newsletter Team - FluentCRM | 3.2.6 | 3.3.1 |
| FluentCRM Multi-Site Sync | mitoff | 4.5.3 | — |
| FluentCRM Pro | Fluent CRM | 3.2.6 | 3.3.1 |
| Fluent Forms | Contact Form - WPManageNinja LLC | 6.2.16 | 6.2.17 |
| Fluent Forms Pro Add On Pack | Fluent Forms | 6.2.16 | 6.2.17 |
| FluentSMTP | FluentSMTP & WPManageNinja Team | 2.4.1 | — |
| GP Premium | Tom Usborne | 2.5.6 | — |
| Hide Backend Notice | mitoff | 1.0.0 | — |
| Kadence WooCommerce Email Designer | Kadence WP | 1.5.19.2 | — |
| LearnDash Course Transfer | mitoff | 1.6.11 | — |
| LearnDash Gestione Rinnovo Corsi | mitoff | 1.0.16 | — |
| LearnDash LMS | LearnDash | 5.2.2.1 | 5.2.3 |
| LearnDash LMS - Certificate Builder | LearnDash | 1.1.5 | — |
| Loco Translate | Tim Whitlock | 2.8.9 | — |
| Manage Notification E-mails | Virgial Berveling | 1.9.2 | — |
| MB Core | MetaBox.io | 2.8.0 | 2.11.1 |
| Modern Image Formats | WordPress Performance Team | 2.7.1 | — |
| NextMove Lite - Thank You Page for WooCommerce | XLPlugins | 2.24.0 | — |
| NitroPack | NitroPack Inc. | 1.20.3 | — |
| OTP email | mitoff | 1.3.11 | — |
| Payment Plugins for Stripe WooCommerce | Payment Plugins | 4.0.19 | — |
| Performance Lab | WordPress Performance Team | 4.2.0 | — |
| PixelYourSite Microsoft UET (Bing) | PixelYourSite | 4.2.5 | 4.2.6 |
| PixelYourSite PRO | PixelYourSite | 12.6.9 | — |
| PixelYourSite Super Pack | PixelYourSite | 6.2.5 | — |
| Questionario per repertorizzazione omeopatica | Mitoff | 1.1.2 | — |
| Redirection | John Godley | 5.10.1 | — |
| Regenerate Thumbnails | Alex Mills (Viper007Bond) | 3.1.6 | — |
| Reusable Blocks Extended | audrasjb | 0.9.1 | — |
| Safe SVG | 10up | 2.5.2 | — |
| Satispay for WooCommerce | Satispay | 2.2.10 | — |
| Search Exclude | QuadLayers | 2.6.8 | — |
| Security Optimizer | SiteGround | 1.6.9 | — |
| Simple CAPTCHA with Cloudflare Turnstile | Elliot Sowersby, RelyWP | 1.44.0 | 1.44.5 |
| Simple CSS | Tom Usborne | 1.1.1 | — |
| Speed Optimizer | SiteGround | 7.8.6 | — |
| UpdraftPlus - Backup/Restore | TeamUpdraft, DavidAnderson | 2.26.14.26 | — |
| Upsell Funnel Builder for WooCommerce | WP Swings | 3.0.6 | 3.1.7 |
| Upsell Order Bump Offer for WooCommerce Pro | WP Swings | 2.3.7 | 3.0.1 |
| User Notes | cartpauj | 2.1.1 | — |
| User Role Editor | Vladimir Garagulya | 4.66.3 | — |
| WC Orders Google Sheet | mitoff | 1.0.8 | — |
| WFatture for WooCommerce Fattureincloud Premium | Woofatture | 3.4.3 | — |
| WooCommerce | Automattic | 11.2.1 | — |
| WooCommerce.com Update Manager | Automattic | 1.0.3 | — |
| WooCommerce Analytics | WooCommerce | 0.10.0 | — |
| WooCommerce PayPal Payments | PayPal | 4.2.0 | — |
| WP Chat App | NinjaTeam | 3.8.2 | — |
| WP Crontrol | Duplicator | 2.0.0 | — |
| YITH WooCommerce Checkout Manager | YITH | 1.60.0 | — |
| Yoast Duplicate Post | Enrico Battocchi & Team Yoast | 4.7 | — |
| Yoast SEO | Team Yoast | 28.8 | — |

## Plugin rilevati da REST (`namespaces`)

Refresh `https://www.corsisalus.it/wp-json/` del 2026-11-03. Copre solo chi registra route.

| Namespace / segnale | Plugin / area |
|---------------------|---------------|
| `wc/*`, `wc-admin`, `wc-analytics`, `wc-stripe/v1`, `paypal/v1`, `wccom-site/v3` | WooCommerce, Analytics, Stripe, PayPal, WooCommerce.com Update Manager |
| `ldlms/*`, `learndash/v1`, `ld-propanel/v1`, `learndashCourseReviews/v1` | LearnDash LMS (ProPanel e Course Reviews non sono plugin separati in elenco admin) |
| `fluent-crm/*`, `fluentform/v1`, `fluent-smtp` | FluentCRM / Forms / SMTP |
| `fluentcrm-sync/v1` | **FluentCRM Multi-Site Sync** 4.5.3 |
| `consent-solution/v1` | **Consent Solution** 1.4.2 |
| `elementor/*`, `elementor-pro`, `elementor-ai`, `elementor-one` | Elementor + Pro (AI e One inclusi) |
| `generatepress/*` | GeneratePress + GP Premium |
| `yoast/v1` | Yoast SEO |
| `jetpack/v4` | Libreria Jetpack Connection (WooCommerce / Update Manager / Analytics). Plugin Jetpack assente |
| `meta-box/v1`, `mbb`, `mb-relationships`, `mcp` | MB Core |
| `pys/*` | PixelYourSite PRO + Super Pack + Microsoft UET |
| `code-snippets/v1` | Code Snippets |
| `redirection/v1` | Redirection |
| `duplicate-post/v1` | Yoast Duplicate Post |
| `regenerate-thumbnails/v1` | Regenerate Thumbnails |
| `quadlayers/search-exclude` | Search Exclude |
| `performance-lab/v1` | Performance Lab |
| `safe-svg/v1` | Safe SVG |
| `liquidweb/harbor/v1` | NitroPack |
| `siteground-optimizer/v1`, `sg-security/v1` | Speed Optimizer, Security Optimizer |

---

## Plugin custom Salus (workspace)

| Plugin | Repo | Note |
|--------|------|------|
| OTP Email Login Form | [otp-email-login-form](../otp-email-login-form/) | Attivo come «OTP email» **1.3.11** |
| LearnDash Gestione Rinnovo Corsi | [learndash-gestione-rinnovo-corsi](../learndash-gestione-rinnovo-corsi/) | Attivo **1.0.16** |
| LearnDash Course Transfer | [learndash-course-transfer](../learndash-course-transfer/) | Attivo **1.6.11** |
| FluentCRM Multi-Site Sync | [fluentcrm-multisite-sync](../fluentcrm-multisite-sync/) | Attivo **4.5.3** (`fluentcrm-sync/v1`) |
| Consent Solution | [consent-solution](../consent-solution/) | Attivo **1.4.2** (`consent-solution/v1`) |
| Hide Backend Notice | [hide-backend-notice](../hide-backend-notice/) | Attivo **1.0.0** |
| Quiz Omeopatia | [quiz-omeopatia](../quiz-omeopatia/) | Attivo come «Questionario per repertorizzazione omeopatica» **1.1.2** |
| WC Orders Google Sheet | [wc-orders-google-sheet](../wc-orders-google-sheet/) | Attivo **1.0.8**. HPOS spento: gli ordini restano nei post |
| WC Custom Checkout Account Fields | [wc-custom-checkout-account-fields](../wc-custom-checkout-account-fields/) | Non in elenco admin del 2026-11-03 |
| Serialized Search Replace | [serialized-search-replace](../serialized-search-replace/) | Non in elenco admin; uso ad hoc |

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
| `log-last-login.php` | Ultimo login sito + accessi pagine corso LD in profilo utente (2026-09-11) |
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
| [snippet/wordpress/](../snippet/wordpress/) | Sicurezza / notifiche admin; `wp-normalizza-formato-anagrafica.php` **attivo** (Title Case nome/cognome + email minuscolo + tel/P.IVA: WP, WC, Fluent Forms, FluentCRM); `telegram-notifications.php` **attivo** sui tre siti (bot e chat; qui lo usano la fattura elettronica e l'avviso pause FluentCRM) |
| [snippet/consent-magic/](../snippet/consent-magic/) | Banner / MU ajax — *da confermare* |

---

## Integrazioni / note operative

- FluentCRM multi-sito: sync con libriomeopatia.it e robertogava.it (`fluentcrm-sync/v1` presente). Tab Gruppi: sync elenco SKU verso destinazioni + filtro inbound OR con keyword; backfill contatti per gruppo via Action Scheduler.
- Deploy tipico: modifiche locali → FTP su hosting remoto (vedi `staging-browser-verify.mdc`).
- Area account / OTP: vedi README di `otp-email-login-form`.
- Quiz omeopatia: repo [quiz-omeopatia](../quiz-omeopatia/), plugin attivo **1.1.2**.
- Avviso «WordPress.com requests to your site are being blocked»: Disable XML-RPC di Security Optimizer risponde 403 a `xmlrpc.php`. Il controllo è la libreria Jetpack Connection di WooCommerce, non il plugin Jetpack. WordPress.com ha una registrazione di `corsisalus.it`; `libriomeopatia.it` risulta «Unknown blog» e lì l’avviso non compare.
- Index REST molto grande: leggere soprattutto `name` / `namespaces` (non tutto il dump `routes`).
- **Schema SEO (Course List):** snippet `yoast-schema-course-list.php` **v1.5.1** — `ItemList` allineato al loop shop (cat. `corso` + `exclude-from-catalog`); Offer con prezzo IVA inclusa. Dopo deploy: `?nonitro` per verificare senza NitroPack.

---

## Changelog configurazione

| Data | Modifica |
|------|----------|
| 2026-11-03 | Elenco plugin attivi dall’admin (60). Jetpack assente: `jetpack/v4` è la libreria in WooCommerce. WC Orders Google Sheet **1.0.8** attivo. Hide Backend Notice **1.0.0** attivo. Quiz **1.1.2**. Refresh `/wp-json/`. |
| 2026-10-29 | HPOS spento (ordini nei post). Repo `wc-orders-google-sheet` 1.0.0, in quella data non installato. |
| 2026-10-12 | `telegram-notifications.php` spostato da `snippet/corsisalus/` a `snippet/wordpress/` e caricato su corsisalus.it, robertogava.it e libriomeopatia.it. |
| 2026-10-02 | Site Health: PHP 8.2.34, Apache, `max_input_vars` 3000, memoria 768M. |
| 2026-09-22 | Doc: aggiunto repo `quiz-omeopatia`; FluentCRM Multi-Site Sync v4.5.x (Gruppi + backfill); `log-last-login.php` accessi corsi; nota schema Course List allineata a v1.5.1. |
| 2026-09-17 | FluentCRM Multi-Site Sync 4.5.2: backfill contatti per gruppo via Action Scheduler. |
| 2026-09-16 | FluentCRM Multi-Site Sync 4.5.0/4.5.1: tab Gruppi (SKU catalogo Autori/Editori, filtro inbound, UI checklist). |
| 2026-09-11 | Snippet `log-last-login.php`: traccia anche visite alle pagine corso LearnDash nel profilo utente. |
| 2026-09-10 | Attivato su CS lo snippet condiviso `wordpress/wp-normalizza-formato-anagrafica.php` (normalizzazione nome/email/tel/P.IVA). |
| 2026-09-10 | Schema Course List v1.5.1: Offer con prezzo IVA inclusa + valueAddedTaxIncluded. |
| 2026-09-10 | Schema Course List v1.5.0: ItemList = 13 prodotti shop (visibility WC), non più 18. |
| 2026-09-10 | Snippet `yoast-schema-course-list.php`: Course List (ItemList catalogo + Course landing); doc operativa schema vs redirect prodotto. |
| 2026-09-10 | Creazione doc iniziale da mapping workspace (plugin + snippet noti). |
| 2026-09-10 | Refresh da `https://www.corsisalus.it/wp-json/`: stack + tabella namespaces. |
