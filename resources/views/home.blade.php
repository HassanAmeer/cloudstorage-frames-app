<!DOCTYPE html>
<html lang="en-US">

<head>
    <link rel="shortcut icon" href="{{asset($baseUrl.'/uploads/'.$settingsData['websiteLogo'])}}" type="image/x-icon"
        sizes="32x32">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>{{$settingsData['websiteName']}}</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="stylesheet" id="elementor-frontend-css" href="./homeassets/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="elementor-post-6-css" href="./homeassets/post-6.css" media="all">
    <link rel="stylesheet" id="elementor-post-174-css" href="./homeassets/post-174.css" media="all">
    <link rel="stylesheet" id="astra-theme-css-css" href="./homeassets/main.min.css" media="all">
    <style id="astra-theme-css-inline-css">
    :root {
        --ast-post-nav-space: 0;
        --ast-container-default-xlg-padding: 2.5em;
        --ast-container-default-lg-padding: 2.5em;
        --ast-container-default-slg-padding: 2em;
        --ast-container-default-md-padding: 2.5em;
        --ast-container-default-sm-padding: 2.5em;
        --ast-container-default-xs-padding: 2.4em;
        --ast-container-default-xxs-padding: 1.8em;
        --ast-code-block-background: #ECEFF3;
        --ast-comment-inputs-background: #F9FAFB;
        --ast-normal-container-width: 1200px;
        --ast-narrow-container-width: 750px;
        --ast-blog-title-font-weight: 600;
        --ast-blog-meta-weight: 600;
    }

    html {
        font-size: 100%;
    }

    a {
        color: var(--ast-global-color-0);
    }

    a:hover,
    a:focus {
        color: var(--ast-global-color-1);
    }



    body,
    button,
    input,
    select,
    textarea,
    .ast-button,
    .ast-custom-button {
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
        font-weight: 400;
        font-size: 16px;
        font-size: 1rem;
        line-height: var(--ast-body-line-height, 1.65);
    }

    blockquote {
        color: var(--ast-global-color-3);
    }

    h1,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6,
    .site-title,
    .site-title a {
        font-weight: 600;
    }

    .site-title {
        font-size: 26px;
        font-size: 1.625rem;
        display: block;
    }

    .site-header .site-description {
        font-size: 15px;
        font-size: 0.9375rem;
        display: none;
    }

    .entry-title {
        font-size: 20px;
        font-size: 1.25rem;
    }

    .ast-blog-single-element.ast-taxonomy-container a {
        font-size: 14px;
        font-size: 0.875rem;
    }

    .ast-blog-meta-container {
        font-size: 13px;
        font-size: 0.8125rem;
    }

    .archive .ast-article-post .ast-article-inner,
    .blog .ast-article-post .ast-article-inner,
    .archive .ast-article-post .ast-article-inner:hover,
    .blog .ast-article-post .ast-article-inner:hover {
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        border-bottom-left-radius: 6px;
        overflow: hidden;
    }

    h1,
    .entry-content h1 {
        font-size: 36px;
        font-size: 2.25rem;
        font-weight: 600;
        line-height: 1.4em;
    }

    h2,
    .entry-content h2 {
        font-size: 30px;
        font-size: 1.875rem;
        font-weight: 600;
        line-height: 1.3em;
    }

    h3,
    .entry-content h3 {
        font-size: 24px;
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.3em;
    }

    h4,
    .entry-content h4 {
        font-size: 20px;
        font-size: 1.25rem;
        line-height: 1.2em;
        font-weight: 600;
    }

    h5,
    .entry-content h5 {
        font-size: 18px;
        font-size: 1.125rem;
        line-height: 1.2em;
        font-weight: 600;
    }

    h6,
    .entry-content h6 {
        font-size: 16px;
        font-size: 1rem;
        line-height: 1.25em;
        font-weight: 600;
    }

    ::selection {
        background-color: var(--ast-global-color-0);
        color: #ffffff;
    }

    body,
    h1,
    .entry-title a,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6 {
        color: var(--ast-global-color-3);
    }

    .tagcloud a:hover,
    .tagcloud a:focus,
    .tagcloud a.current-item {
        color: #ffffff;
        border-color: var(--ast-global-color-0);
        background-color: var(--ast-global-color-0);
    }

    input:focus,
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    input[type="reset"]:focus,
    input[type="search"]:focus,
    textarea:focus {
        border-color: var(--ast-global-color-0);
    }

    input[type="radio"]:checked,
    input[type=reset],
    input[type="checkbox"]:checked,
    input[type="checkbox"]:hover:checked,
    input[type="checkbox"]:focus:checked,
    input[type=range]::-webkit-slider-thumb {
        border-color: var(--ast-global-color-0);
        background-color: var(--ast-global-color-0);
        box-shadow: none;
    }

    .site-footer a:hover+.post-count,
    .site-footer a:focus+.post-count {
        background: var(--ast-global-color-0);
        border-color: var(--ast-global-color-0);
    }

    .single .nav-links .nav-previous,
    .single .nav-links .nav-next {
        color: var(--ast-global-color-0);
    }

    .entry-meta,
    .entry-meta * {
        line-height: 1.45;
        color: var(--ast-global-color-0);
        font-weight: 600;
    }

    .entry-meta a:not(.ast-button):hover,
    .entry-meta a:not(.ast-button):hover *,
    .entry-meta a:not(.ast-button):focus,
    .entry-meta a:not(.ast-button):focus *,
    .page-links>.page-link,
    .page-links .page-link:hover,
    .post-navigation a:hover {
        color: var(--ast-global-color-1);
    }

    #cat option,
    .secondary .calendar_wrap thead a,
    .secondary .calendar_wrap thead a:visited {
        color: var(--ast-global-color-0);
    }

    .secondary .calendar_wrap #today,
    .ast-progress-val span {
        background: var(--ast-global-color-0);
    }

    .secondary a:hover+.post-count,
    .secondary a:focus+.post-count {
        background: var(--ast-global-color-0);
        border-color: var(--ast-global-color-0);
    }

    .calendar_wrap #today>a {
        color: #ffffff;
    }

    .page-links .page-link,
    .single .post-navigation a {
        color: var(--ast-global-color-3);
    }

    .ast-search-menu-icon .search-form button.search-submit {
        padding: 0 4px;
    }

    .ast-search-menu-icon form.search-form {
        padding-right: 0;
    }

    .ast-search-menu-icon.slide-search input.search-field {
        width: 0;
    }

    .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-form,
    .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field:focus {
        transition: all 0.2s;
    }

    .search-form input.search-field:focus {
        outline: none;
    }

    .ast-search-menu-icon .search-form button.search-submit:focus,
    .ast-theme-transparent-header .ast-header-search .ast-dropdown-active .ast-icon,
    .ast-theme-transparent-header .ast-inline-search .search-field:focus .ast-icon {
        color: var(--ast-global-color-1);
    }

    .ast-header-search .slide-search .search-form {
        border: 2px solid var(--ast-global-color-0);
    }

    .ast-header-search .slide-search .search-field {
        background-color: #fff;
    }

    .ast-archive-title {
        color: var(--ast-global-color-2);
    }

    .widget-title,
    .widget .wp-block-heading {
        font-size: 22px;
        font-size: 1.375rem;
        color: var(--ast-global-color-2);
    }

    .ast-single-post .entry-content a,
    .ast-comment-content a:not(.ast-comment-edit-reply-wrap a) {
        text-decoration: underline;
    }

    .ast-single-post .elementor-button-wrapper .elementor-button,
    .ast-single-post .entry-content .uagb-tab a,
    .ast-single-post .entry-content .uagb-ifb-cta a,
    .ast-single-post .entry-content .uabb-module-content a,
    .ast-single-post .entry-content .uagb-post-grid a,
    .ast-single-post .entry-content .uagb-timeline a,
    .ast-single-post .entry-content .uagb-toc__wrap a,
    .ast-single-post .entry-content .uagb-taxomony-box a,
    .ast-single-post .entry-content .woocommerce a,
    .entry-content .wp-block-latest-posts>li>a,
    .ast-single-post .entry-content .wp-block-file__button,
    li.ast-post-filter-single,
    .ast-single-post .ast-comment-content .comment-reply-link,
    .ast-single-post .ast-comment-content .comment-edit-link {
        text-decoration: none;
    }

    .ast-search-menu-icon.slide-search a:focus-visible:focus-visible,
    .astra-search-icon:focus-visible,
    #close:focus-visible,
    a:focus-visible,
    .ast-menu-toggle:focus-visible,
    .site .skip-link:focus-visible,
    .wp-block-loginout input:focus-visible,
    .wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,
    .ast-header-navigation-arrow:focus-visible,
    .woocommerce .wc-proceed-to-checkout>.checkout-button:focus-visible,
    .woocommerce .woocommerce-MyAccount-navigation ul li a:focus-visible,
    .ast-orders-table__row .ast-orders-table__cell:focus-visible,
    .woocommerce .woocommerce-order-details .order-again>.button:focus-visible,
    .woocommerce .woocommerce-message a.button.wc-forward:focus-visible,
    .woocommerce #minus_qty:focus-visible,
    .woocommerce #plus_qty:focus-visible,
    a#ast-apply-coupon:focus-visible,
    .woocommerce .woocommerce-info a:focus-visible,
    .woocommerce .astra-shop-summary-wrap a:focus-visible,
    .woocommerce a.wc-forward:focus-visible,
    #ast-apply-coupon:focus-visible,
    .woocommerce-js .woocommerce-mini-cart-item a.remove:focus-visible,
    #close:focus-visible,
    .button.search-submit:focus-visible,
    #search_submit:focus,
    .normal-search:focus-visible,
    .ast-header-account-wrap:focus-visible {
        outline-style: dotted;
        outline-color: inherit;
        outline-width: thin;
    }

    input:focus,
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    input[type="reset"]:focus,
    input[type="search"]:focus,
    input[type="number"]:focus,
    textarea:focus,
    .wp-block-search__input:focus,
    [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,
    .ast-mobile-popup-drawer.active .menu-toggle-close:focus,
    .woocommerce-ordering select.orderby:focus,
    #ast-scroll-top:focus,
    #coupon_code:focus,
    .woocommerce-page #comment:focus,
    .woocommerce #reviews #respond input#submit:focus,
    .woocommerce a.add_to_cart_button:focus,
    .woocommerce .button.single_add_to_cart_button:focus,
    .woocommerce .woocommerce-cart-form button:focus,
    .woocommerce .woocommerce-cart-form__cart-item .quantity .qty:focus,
    .woocommerce .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
    .woocommerce #order_comments:focus,
    .woocommerce #place_order:focus,
    .woocommerce .woocommerce-address-fields .woocommerce-address-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
    .woocommerce .woocommerce-MyAccount-content form button:focus,
    .woocommerce .woocommerce-MyAccount-content .woocommerce-EditAccountForm .woocommerce-form-row .woocommerce-Input.input-text:focus,
    .woocommerce .ast-woocommerce-container .woocommerce-pagination ul.page-numbers li a:focus,
    body #content .woocommerce form .form-row .select2-container--default .select2-selection--single:focus,
    #ast-coupon-code:focus,
    .woocommerce.woocommerce-js .quantity input[type=number]:focus,
    .woocommerce-js .woocommerce-mini-cart-item .quantity input[type=number]:focus,
    .woocommerce p#ast-coupon-trigger:focus {
        border-style: dotted;
        border-color: inherit;
        border-width: thin;
    }

    input {
        outline: none;
    }

    .ast-logo-title-inline .site-logo-img {
        padding-right: 1em;
    }

    body .ast-oembed-container * {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        left: 0;
    }

    body .wp-block-embed-pocket-casts .ast-oembed-container * {
        position: unset;
    }

    .ast-single-post-featured-section+article {
        margin-top: 2em;
    }

    .site-content .ast-single-post-featured-section img {
        width: 100%;
        overflow: hidden;
        object-fit: cover;
    }

    .ast-separate-container .site-content .ast-single-post-featured-section+article {
        margin-top: -80px;
        z-index: 9;
        position: relative;
        border-radius: 4px;
    }

    @media (min-width: 922px) {
        .ast-no-sidebar .site-content .ast-article-image-container--wide {
            margin-left: -120px;
            margin-right: -120px;
            max-width: unset;
            width: unset;
        }

        .ast-left-sidebar .site-content .ast-article-image-container--wide,
        .ast-right-sidebar .site-content .ast-article-image-container--wide {
            margin-left: -10px;
            margin-right: -10px;
        }

        .site-content .ast-article-image-container--full {
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            max-width: 100vw;
            width: 100vw;
        }

        .ast-left-sidebar .site-content .ast-article-image-container--full,
        .ast-right-sidebar .site-content .ast-article-image-container--full {
            margin-left: -10px;
            margin-right: -10px;
            max-width: inherit;
            width: auto;
        }
    }

    .site>.ast-single-related-posts-container {
        margin-top: 0;
    }

    @media (min-width: 922px) {
        .ast-desktop .ast-container--narrow {
            max-width: var(--ast-narrow-container-width);
            margin: 0 auto;
        }
    }

    .ast-page-builder-template .hentry {
        margin: 0;
    }

    .ast-page-builder-template .site-content>.ast-container {
        max-width: 100%;
        padding: 0;
    }

    .ast-page-builder-template .site .site-content #primary {
        padding: 0;
        margin: 0;
    }

    .ast-page-builder-template .no-results {
        text-align: center;
        margin: 4em auto;
    }

    .ast-page-builder-template .ast-pagination {
        padding: 2em;
    }

    .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
        margin-top: 0;
    }

    .ast-page-builder-template .entry-header.ast-header-without-markup {
        margin-top: 0;
        margin-bottom: 0;
    }

    .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
        margin-bottom: 0;
    }

    .ast-page-builder-template.single .post-navigation {
        padding-bottom: 2em;
    }

    .ast-page-builder-template.single-post .site-content>.ast-container {
        max-width: 100%;
    }

    .ast-page-builder-template .entry-header {
        margin-top: 2em;
        margin-left: auto;
        margin-right: auto;
    }

    .ast-page-builder-template .ast-archive-description {
        margin: 2em auto 0;
        padding-left: 20px;
        padding-right: 20px;
    }

    .ast-page-builder-template .ast-row {
        margin-left: 0;
        margin-right: 0;
    }

    .single.ast-page-builder-template .entry-header+.entry-content,
    .single.ast-page-builder-template .ast-single-entry-banner+.site-content article .entry-content {
        margin-bottom: 2em;
    }

    @media(min-width: 921px) {

        .ast-page-builder-template.archive.ast-right-sidebar .ast-row article,
        .ast-page-builder-template.archive.ast-left-sidebar .ast-row article {
            padding-left: 0;
            padding-right: 0;
        }
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="password"],
    input[type="search"],
    input[type=reset],
    input[type=tel],
    input[type=date],
    select,
    textarea {
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        width: 100%;
        padding: 12px 16px;
        border-radius: 4px;
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
        color: var(--ast-form-input-text, #475569);
    }

    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="password"],
    input[type="search"],
    input[type=reset],
    input[type=tel],
    input[type=date],
    select {
        height: 40px;
    }

    input[type="date"] {
        border-width: 1px;
        border-style: solid;
        border-color: var(--ast-border-color);
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    input[type="search"]:focus,
    input[type=reset]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    select:focus,
    textarea:focus {
        border-color: #6E04D2FF;
        box-shadow: none;
        outline: none;
        color: var(--ast-form-input-focus-text, #475569);
    }

    label,
    legend {
        color: #111827;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 20px;
    }

    select {
        padding: 6px 10px;
    }

    fieldset {
        padding: 30px;
        border-radius: 4px;
    }

    button,
    .ast-button,
    .button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        border-radius: 4px;
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
    }

    :root {
        --ast-comment-inputs-background: #FFF;
    }

    ::placeholder {
        color: var(--ast-form-field-color, #9CA3AF);
    }

    ::-ms-input-placeholder {
        color: var(--ast-form-field-color, #9CA3AF);
    }

    @media (max-width:921.9px) {
        #ast-desktop-header {
            display: none;
        }
    }

    @media (min-width:922px) {
        #ast-mobile-header {
            display: none;
        }
    }

    .wp-block-buttons.aligncenter {
        justify-content: center;
    }

    @media (max-width:921px) {

        .ast-theme-transparent-header #primary,
        .ast-theme-transparent-header #secondary {
            padding: 0;
        }
    }

    @media (max-width:921px) {
        .ast-plain-container.ast-no-sidebar #primary {
            padding: 0;
        }
    }

    .ast-plain-container.ast-no-sidebar #primary {
        margin-top: 0;
        margin-bottom: 0;
    }

    .wp-block-button.is-style-outline .wp-block-button__link {
        border-color: var(--ast-global-color-0);
    }

    div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
    div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
        color: var(--ast-global-color-0);
    }

    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,
    .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
    .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover {
        color: #ffffff;
        background-color: var(--ast-global-color-1);
        border-color: var(--ast-global-color-1);
    }

    .post-page-numbers.current .page-link,
    .ast-pagination .page-numbers.current {
        color: #ffffff;
        border-color: var(--ast-global-color-0);
        background-color: var(--ast-global-color-0);
    }

    .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
    .ast-outline-button,
    .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button {
        border-color: var(--ast-global-color-0);
        font-family: inherit;
        font-weight: 500;
        font-size: 16px;
        font-size: 1rem;
        line-height: 1em;
        padding-top: 13px;
        padding-right: 30px;
        padding-bottom: 13px;
        padding-left: 30px;
    }

    .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
    .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color),
    .ast-outline-button {
        color: var(--ast-global-color-0);
    }

    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,
    .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
    .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover,
    .ast-outline-button:hover,
    .ast-outline-button:focus,
    .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:hover,
    .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:focus {
        color: #ffffff;
        background-color: var(--ast-global-color-1);
        border-color: var(--ast-global-color-1);
    }

    .ast-single-post .entry-content a.ast-outline-button,
    .ast-single-post .entry-content .is-style-outline>.wp-block-button__link {
        text-decoration: none;
    }

    .uagb-buttons-repeater.ast-outline-button {
        border-radius: 9999px;
    }

    @media (max-width:921px) {

        .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
        .ast-outline-button,
        .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button {
            padding-top: 12px;
            padding-right: 28px;
            padding-bottom: 12px;
            padding-left: 28px;
        }
    }

    @media (max-width:544px) {

        .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
        .ast-outline-button,
        .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button {
            padding-top: 10px;
            padding-right: 24px;
            padding-bottom: 10px;
            padding-left: 24px;
        }
    }

    .entry-content[ast-blocks-layout]>figure {
        margin-bottom: 1em;
    }

    h1.widget-title {
        font-weight: 600;
    }

    h2.widget-title {
        font-weight: 600;
    }

    h3.widget-title {
        font-weight: 600;
    }

    #page {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .ast-404-layout-1 h1.page-title {
        color: var(--ast-global-color-2);
    }

    .single .post-navigation a {
        line-height: 1em;
        height: inherit;
    }

    .error-404 .page-sub-title {
        font-size: 1.5rem;
        font-weight: inherit;
    }

    .search .site-content .content-area .search-form {
        margin-bottom: 0;
    }

    #page .site-content {
        flex-grow: 1;
    }

    .widget {
        margin-bottom: 1.25em;
    }

    #secondary li {
        line-height: 1.5em;
    }

    #secondary .wp-block-group h2 {
        margin-bottom: 0.7em;
    }

    #secondary h2 {
        font-size: 1.7rem;
    }

    .ast-separate-container .ast-article-post,
    .ast-separate-container .ast-article-single,
    .ast-separate-container .comment-respond {
        padding: 3em;
    }

    .ast-separate-container .ast-article-single .ast-article-single {
        padding: 0;
    }

    .ast-article-single .wp-block-post-template-is-layout-grid {
        padding-left: 0;
    }

    .ast-separate-container .comments-title,
    .ast-narrow-container .comments-title {
        padding: 1.5em 2em;
    }

    .ast-page-builder-template .comment-form-textarea,
    .ast-comment-formwrap .ast-grid-common-col {
        padding: 0;
    }

    .ast-comment-formwrap {
        padding: 0;
        display: inline-flex;
        column-gap: 20px;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
    }

    .comments-area textarea#comment:focus,
    .comments-area textarea#comment:active,
    .comments-area .ast-comment-formwrap input[type="text"]:focus,
    .comments-area .ast-comment-formwrap input[type="text"]:active {
        box-shadow: none;
        outline: none;
    }

    .archive.ast-page-builder-template .entry-header {
        margin-top: 2em;
    }

    .ast-page-builder-template .ast-comment-formwrap {
        width: 100%;
    }

    .entry-title {
        margin-bottom: 0.6em;
    }

    .ast-archive-description p {
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
    }

    .ast-separate-container .ast-comment-list li.depth-1,
    .hentry {
        margin-bottom: 1.5em;
    }

    .site-content section.ast-archive-description {
        margin-bottom: 2em;
    }

    @media (min-width:921px) {

        .ast-left-sidebar.ast-page-builder-template #secondary,
        .archive.ast-right-sidebar.ast-page-builder-template .site-main {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width:544px) {
        .ast-comment-formwrap.ast-row {
            column-gap: 10px;
            display: inline-block;
        }

        #ast-commentform .ast-grid-common-col {
            position: relative;
            width: 100%;
        }
    }

    @media (min-width:1201px) {

        .ast-separate-container .ast-article-post,
        .ast-separate-container .ast-article-single,
        .ast-separate-container .ast-author-box,
        .ast-separate-container .ast-404-layout-1,
        .ast-separate-container .no-results {
            padding: 3em;
        }
    }

    @media (max-width:921px) {

        .ast-separate-container #primary,
        .ast-separate-container #secondary {
            padding: 1.5em 0;
        }

        #primary,
        #secondary {
            padding: 1.5em 0;
            margin: 0;
        }

        .ast-left-sidebar #content>.ast-container {
            display: flex;
            flex-direction: column-reverse;
            width: 100%;
        }
    }

    @media (min-width:922px) {

        .ast-separate-container.ast-right-sidebar #primary,
        .ast-separate-container.ast-left-sidebar #primary {
            border: 0;
        }

        .search-no-results.ast-separate-container #primary {
            margin-bottom: 4em;
        }
    }

    .wp-block-button .wp-block-button__link {
        color: #ffffff;
    }

    .wp-block-button .wp-block-button__link:hover,
    .wp-block-button .wp-block-button__link:focus {
        color: #ffffff;
        background-color: var(--ast-global-color-1);
        border-color: var(--ast-global-color-1);
    }

    .elementor-widget-heading h1.elementor-heading-title {
        line-height: 1.4em;
    }

    .elementor-widget-heading h2.elementor-heading-title {
        line-height: 1.3em;
    }

    .elementor-widget-heading h3.elementor-heading-title {
        line-height: 1.3em;
    }

    .elementor-widget-heading h4.elementor-heading-title {
        line-height: 1.2em;
    }

    .elementor-widget-heading h5.elementor-heading-title {
        line-height: 1.2em;
    }

    .elementor-widget-heading h6.elementor-heading-title {
        line-height: 1.25em;
    }

    .wp-block-button .wp-block-button__link,
    .wp-block-search .wp-block-search__button,
    body .wp-block-file .wp-block-file__button {
        border-color: var(--ast-global-color-0);
        background-color: var(--ast-global-color-0);
        color: #ffffff;
        font-family: inherit;
        font-weight: 500;
        line-height: 1em;
        font-size: 16px;
        font-size: 1rem;
        padding-top: 15px;
        padding-right: 30px;
        padding-bottom: 15px;
        padding-left: 30px;
    }

    .ast-single-post .entry-content .wp-block-button .wp-block-button__link,
    .ast-single-post .entry-content .wp-block-search .wp-block-search__button,
    body .entry-content .wp-block-file .wp-block-file__button {
        text-decoration: none;
    }

    @media (max-width:921px) {

        .wp-block-button .wp-block-button__link,
        .wp-block-search .wp-block-search__button,
        body .wp-block-file .wp-block-file__button {
            padding-top: 14px;
            padding-right: 28px;
            padding-bottom: 14px;
            padding-left: 28px;
        }
    }

    @media (max-width:544px) {

        .wp-block-button .wp-block-button__link,
        .wp-block-search .wp-block-search__button,
        body .wp-block-file .wp-block-file__button {
            padding-top: 12px;
            padding-right: 24px;
            padding-bottom: 12px;
            padding-left: 24px;
        }
    }

    .menu-toggle,
    button,
    .ast-button,
    .ast-custom-button,
    .button,
    input#submit,
    input[type="button"],
    input[type="submit"],
    input[type="reset"],
    #comments .submit,
    .search .search-submit,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
    body .wp-block-file .wp-block-file__button,
    .search .search-submit,
    .woocommerce-js a.button,
    .woocommerce button.button,
    .woocommerce .woocommerce-message a.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce input.button.alt,
    .woocommerce input.button,
    .woocommerce input.button:disabled,
    .woocommerce input.button:disabled[disabled],
    .woocommerce input.button:disabled:hover,
    .woocommerce input.button:disabled[disabled]:hover,
    .woocommerce #respond input#submit,
    .woocommerce button.button.alt.disabled,
    .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
    .wc-block-grid__product-onsale,
    [CLASS*="wc-block"] button,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
    .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
    [CLASS*="wc-block"] .wc-block-components-button {
        border-style: solid;
        border-top-width: 0;
        border-right-width: 0;
        border-left-width: 0;
        border-bottom-width: 0;
        color: #ffffff;
        border-color: var(--ast-global-color-0);
        background-color: var(--ast-global-color-0);
        padding-top: 15px;
        padding-right: 30px;
        padding-bottom: 15px;
        padding-left: 30px;
        font-family: inherit;
        font-weight: 500;
        font-size: 16px;
        font-size: 1rem;
        line-height: 1em;
    }

    button:focus,
    .menu-toggle:hover,
    button:hover,
    .ast-button:hover,
    .ast-custom-button:hover .button:hover,
    .ast-custom-button:hover,
    input[type=reset]:hover,
    input[type=reset]:focus,
    input#submit:hover,
    input#submit:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,
    body .wp-block-file .wp-block-file__button:hover,
    body .wp-block-file .wp-block-file__button:focus,
    .woocommerce-js a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce .woocommerce-message a.button:hover,
    .woocommerce #respond input#submit:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce input.button:hover,
    .woocommerce button.button.alt.disabled:hover,
    .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover,
    [CLASS*="wc-block"] button:hover,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping):hover,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout:hover,
    .woocommerce button.button.alt.disabled.wc-variation-selection-needed:hover,
    [CLASS*="wc-block"] .wc-block-components-button:hover,
    [CLASS*="wc-block"] .wc-block-components-button:focus {
        color: #ffffff;
        background-color: var(--ast-global-color-1);
        border-color: var(--ast-global-color-1);
    }

    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button.has-icon {
        padding-top: calc(15px - 3px);
        padding-right: calc(30px - 3px);
        padding-bottom: calc(15px - 3px);
        padding-left: calc(30px - 3px);
    }

    @media (max-width:921px) {

        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        #comments .submit,
        .search .search-submit,
        form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
        body .wp-block-file .wp-block-file__button,
        .search .search-submit,
        .woocommerce-js a.button,
        .woocommerce button.button,
        .woocommerce .woocommerce-message a.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce input.button.alt,
        .woocommerce input.button,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit,
        .woocommerce button.button.alt.disabled,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
        .wc-block-grid__product-onsale,
        [CLASS*="wc-block"] button,
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
        .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
        [CLASS*="wc-block"] .wc-block-components-button {
            padding-top: 14px;
            padding-right: 28px;
            padding-bottom: 14px;
            padding-left: 28px;
        }
    }

    @media (max-width:544px) {

        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        #comments .submit,
        .search .search-submit,
        form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
        body .wp-block-file .wp-block-file__button,
        .search .search-submit,
        .woocommerce-js a.button,
        .woocommerce button.button,
        .woocommerce .woocommerce-message a.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce input.button.alt,
        .woocommerce input.button,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit,
        .woocommerce button.button.alt.disabled,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
        .wc-block-grid__product-onsale,
        [CLASS*="wc-block"] button,
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
        .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
        [CLASS*="wc-block"] .wc-block-components-button {
            padding-top: 12px;
            padding-right: 24px;
            padding-bottom: 12px;
            padding-left: 24px;
        }
    }

    @media (max-width:921px) {
        .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
            display: inline-block;
        }

        .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
            margin: 0;
        }

        .ast-comment-avatar-wrap img {
            max-width: 2.5em;
        }

        .ast-comment-meta {
            padding: 0 1.8888em 1.3333em;
        }
    }

    @media (min-width:544px) {
        .ast-container {
            max-width: 100%;
        }
    }

    @media (max-width:544px) {

        .ast-separate-container .ast-article-post,
        .ast-separate-container .ast-article-single,
        .ast-separate-container .comments-title,
        .ast-separate-container .ast-archive-description {
            padding: 1.5em 1em;
        }

        .ast-separate-container #content .ast-container {
            padding-left: 0.54em;
            padding-right: 0.54em;
        }

        .ast-separate-container .ast-comment-list .bypostauthor {
            padding: .5em;
        }

        .ast-search-menu-icon.ast-dropdown-active .search-field {
            width: 170px;
        }
    }

    .ast-separate-container {
        background-color: var(--ast-global-color-4);
        ;
    }

    @media (max-width:921px) {
        .site-title {
            display: block;
        }

        .site-header .site-description {
            display: none;
        }

        h1,
        .entry-content h1 {
            font-size: 30px;
        }

        h2,
        .entry-content h2 {
            font-size: 25px;
        }

        h3,
        .entry-content h3 {
            font-size: 20px;
        }
    }

    @media (max-width:544px) {
        .site-title {
            display: block;
        }

        .site-header .site-description {
            display: none;
        }

        h1,
        .entry-content h1 {
            font-size: 30px;
        }

        h2,
        .entry-content h2 {
            font-size: 25px;
        }

        h3,
        .entry-content h3 {
            font-size: 20px;
        }
    }

    @media (max-width:921px) {
        html {
            font-size: 91.2%;
        }
    }

    @media (max-width:544px) {
        html {
            font-size: 91.2%;
        }
    }

    @media (min-width:922px) {
        .ast-container {
            max-width: 1240px;
        }
    }

    @media (min-width:922px) {
        .site-content .ast-container {
            display: flex;
        }
    }

    @media (max-width:921px) {
        .site-content .ast-container {
            flex-direction: column;
        }
    }

    .entry-content h1,
    .entry-content h2,
    .entry-content h3,
    .entry-content h4,
    .entry-content h5,
    .entry-content h6 {
        clear: none;
    }

    @media (min-width:922px) {

        .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
        .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
            margin-left: -0px;
        }
    }

    .entry-content li>p {
        margin-bottom: 0;
    }

    .site .comments-area {
        padding-bottom: 2em;
        margin-top: 2em;
    }

    .wp-block-file {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .wp-block-pullquote {
        border: none;
    }

    .wp-block-pullquote blockquote::before {
        content: "\201D";
        font-family: "Helvetica", sans-serif;
        display: flex;
        transform: rotate(180deg);
        font-size: 6rem;
        font-style: normal;
        line-height: 1;
        font-weight: bold;
        align-items: center;
        justify-content: center;
    }

    .has-text-align-right>blockquote::before {
        justify-content: flex-start;
    }

    .has-text-align-left>blockquote::before {
        justify-content: flex-end;
    }

    figure.wp-block-pullquote.is-style-solid-color blockquote {
        max-width: 100%;
        text-align: inherit;
    }

    html body {
        --wp--custom--ast-default-block-top-padding: 3em;
        --wp--custom--ast-default-block-right-padding: 3em;
        --wp--custom--ast-default-block-bottom-padding: 3em;
        --wp--custom--ast-default-block-left-padding: 3em;
        --wp--custom--ast-container-width: 1200px;
        --wp--custom--ast-content-width-size: 1200px;
        --wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));
    }

    .ast-narrow-container {
        --wp--custom--ast-content-width-size: 750px;
        --wp--custom--ast-wide-width-size: 750px;
    }

    @media(max-width: 921px) {
        html body {
            --wp--custom--ast-default-block-top-padding: 3em;
            --wp--custom--ast-default-block-right-padding: 2em;
            --wp--custom--ast-default-block-bottom-padding: 3em;
            --wp--custom--ast-default-block-left-padding: 2em;
        }
    }

    @media(max-width: 544px) {
        html body {
            --wp--custom--ast-default-block-top-padding: 3em;
            --wp--custom--ast-default-block-right-padding: 1.5em;
            --wp--custom--ast-default-block-bottom-padding: 3em;
            --wp--custom--ast-default-block-left-padding: 1.5em;
        }
    }

    .entry-content>.wp-block-group,
    .entry-content>.wp-block-cover,
    .entry-content>.wp-block-columns {
        padding-top: var(--wp--custom--ast-default-block-top-padding);
        padding-right: var(--wp--custom--ast-default-block-right-padding);
        padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);
        padding-left: var(--wp--custom--ast-default-block-left-padding);
    }

    .ast-plain-container.ast-no-sidebar .entry-content>.alignfull,
    .ast-page-builder-template .ast-no-sidebar .entry-content>.alignfull {
        margin-left: calc(-50vw + 50%);
        margin-right: calc(-50vw + 50%);
        max-width: 100vw;
        width: 100vw;
    }

    .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,
    .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,
    .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    [ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {
        height: 0;
    }

    [ast-blocks-layout] .wp-block-separator {
        margin: 20px auto;
    }

    [ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        max-width: 100px;
    }

    [ast-blocks-layout] .wp-block-separator.has-background {
        padding: 0;
    }

    .entry-content[ast-blocks-layout]>* {
        max-width: var(--wp--custom--ast-content-width-size);
        margin-left: auto;
        margin-right: auto;
    }

    .entry-content[ast-blocks-layout]>.alignwide {
        max-width: var(--wp--custom--ast-wide-width-size);
    }

    .entry-content[ast-blocks-layout] .alignfull {
        max-width: none;
    }

    .entry-content .wp-block-columns {
        margin-bottom: 0;
    }

    blockquote {
        margin: 1.5em;
        border-color: rgba(0, 0, 0, 0.05);
    }

    .wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {
        border-left: 5px solid rgba(0, 0, 0, 0.05);
    }

    .has-text-align-right>blockquote,
    blockquote.has-text-align-right {
        border-right: 5px solid rgba(0, 0, 0, 0.05);
    }

    .has-text-align-left>blockquote,
    blockquote.has-text-align-left {
        border-left: 5px solid rgba(0, 0, 0, 0.05);
    }

    .wp-block-site-tagline,
    .wp-block-latest-posts .read-more {
        margin-top: 15px;
    }

    .wp-block-loginout p label {
        display: block;
    }

    .wp-block-loginout p:not(.login-remember):not(.login-submit) input {
        width: 100%;
    }

    .wp-block-loginout input:focus {
        border-color: transparent;
    }

    .wp-block-loginout input:focus {
        outline: thin dotted;
    }

    .entry-content .wp-block-media-text .wp-block-media-text__content {
        padding: 0 0 0 8%;
    }

    .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
        padding: 0 8% 0 0;
    }

    .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
        padding: 8%;
    }

    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {
        color: var(--ast-global-color-5);
    }

    .wp-block-loginout .login-remember input {
        width: 1.1rem;
        height: 1.1rem;
        margin: 0 5px 4px 0;
        vertical-align: middle;
    }

    .wp-block-latest-posts>li>*:first-child,
    .wp-block-latest-posts:not(.is-grid)>li:first-child {
        margin-top: 0;
    }

    .wp-block-search__inside-wrapper .wp-block-search__input {
        padding: 0 10px;
        color: var(--ast-global-color-3);
        background: var(--ast-global-color-5);
        border-color: var(--ast-border-color);
    }

    .wp-block-latest-posts .read-more {
        margin-bottom: 1.5em;
    }

    .wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .wp-block-latest-posts .wp-block-latest-posts__post-date,
    .wp-block-latest-posts .wp-block-latest-posts__post-author {
        font-size: 1rem;
    }

    .wp-block-latest-posts>li>*,
    .wp-block-latest-posts:not(.is-grid)>li {
        margin-top: 12px;
        margin-bottom: 12px;
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>*,
    .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignfull>* {
        max-width: none;
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignwide>* {
        max-width: var(--wp--custom--ast-wide-width-size);
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>.inherit-container-width>*,
    .ast-page-builder-template .entry-content[ast-blocks-layout]>*>*,
    .entry-content[ast-blocks-layout]>.wp-block-cover .wp-block-cover__inner-container {
        max-width: var(--wp--custom--ast-content-width-size);
        margin-left: auto;
        margin-right: auto;
    }

    .entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {
        width: auto;
    }

    @media(max-width: 1200px) {

        .ast-separate-container .entry-content>.alignfull,
        .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
        .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide,
        .ast-plain-container .entry-content .alignfull {
            margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
            margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
        }
    }

    @media(min-width: 1201px) {
        .ast-separate-container .entry-content>.alignfull {
            margin-left: calc(-1 * var(--ast-container-default-xlg-padding));
            margin-right: calc(-1 * var(--ast-container-default-xlg-padding));
        }

        .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
        .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide {
            margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding));
            margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding));
        }
    }

    @media(min-width: 921px) {

        .ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)),
        .ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)) {
            max-width: calc(var(--wp--custom--ast-content-width-size) + 80px);
        }

        .ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,
        .ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {
            margin-left: -60px;
            margin-right: -60px;
        }
    }

    @media(min-width: 544px) {
        .entry-content>.alignleft {
            margin-right: 20px;
        }

        .entry-content>.alignright {
            margin-left: 20px;
        }
    }

    @media (max-width:544px) {
        .wp-block-columns .wp-block-column:not(:last-child) {
            margin-bottom: 20px;
        }

        .wp-block-latest-posts {
            margin: 0;
        }
    }

    @media(max-width: 600px) {

        .entry-content .wp-block-media-text .wp-block-media-text__content,
        .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
            padding: 8% 0 0;
        }

        .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
            padding: 8%;
        }
    }

    .ast-page-builder-template .entry-header {
        padding-left: 0;
    }

    .ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .entry-content ul,
    .entry-content ol {
        padding: revert;
        margin: revert;
        padding-left: 20px;
    }

    :root .has-ast-global-color-0-color {
        color: var(--ast-global-color-0);
    }

    :root .has-ast-global-color-0-background-color {
        background-color: var(--ast-global-color-0);
    }

    :root .wp-block-button .has-ast-global-color-0-color {
        color: var(--ast-global-color-0);
    }

    :root .wp-block-button .has-ast-global-color-0-background-color {
        background-color: var(--ast-global-color-0);
    }

    :root .has-ast-global-color-1-color {
        color: var(--ast-global-color-1);
    }

    :root .has-ast-global-color-1-background-color {
        background-color: var(--ast-global-color-1);
    }

    :root .wp-block-button .has-ast-global-color-1-color {
        color: var(--ast-global-color-1);
    }

    :root .wp-block-button .has-ast-global-color-1-background-color {
        background-color: var(--ast-global-color-1);
    }

    :root .has-ast-global-color-2-color {
        color: var(--ast-global-color-2);
    }

    :root .has-ast-global-color-2-background-color {
        background-color: var(--ast-global-color-2);
    }

    :root .wp-block-button .has-ast-global-color-2-color {
        color: var(--ast-global-color-2);
    }

    :root .wp-block-button .has-ast-global-color-2-background-color {
        background-color: var(--ast-global-color-2);
    }

    :root .has-ast-global-color-3-color {
        color: var(--ast-global-color-3);
    }

    :root .has-ast-global-color-3-background-color {
        background-color: var(--ast-global-color-3);
    }

    :root .wp-block-button .has-ast-global-color-3-color {
        color: var(--ast-global-color-3);
    }

    :root .wp-block-button .has-ast-global-color-3-background-color {
        background-color: var(--ast-global-color-3);
    }

    :root .has-ast-global-color-4-color {
        color: var(--ast-global-color-4);
    }

    :root .has-ast-global-color-4-background-color {
        background-color: var(--ast-global-color-4);
    }

    :root .wp-block-button .has-ast-global-color-4-color {
        color: var(--ast-global-color-4);
    }

    :root .wp-block-button .has-ast-global-color-4-background-color {
        background-color: var(--ast-global-color-4);
    }

    :root .has-ast-global-color-5-color {
        color: var(--ast-global-color-5);
    }

    :root .has-ast-global-color-5-background-color {
        background-color: var(--ast-global-color-5);
    }

    :root .wp-block-button .has-ast-global-color-5-color {
        color: var(--ast-global-color-5);
    }

    :root .wp-block-button .has-ast-global-color-5-background-color {
        background-color: var(--ast-global-color-5);
    }

    :root .has-ast-global-color-6-color {
        color: var(--ast-global-color-6);
    }

    :root .has-ast-global-color-6-background-color {
        background-color: var(--ast-global-color-6);
    }

    :root .wp-block-button .has-ast-global-color-6-color {
        color: var(--ast-global-color-6);
    }

    :root .wp-block-button .has-ast-global-color-6-background-color {
        background-color: var(--ast-global-color-6);
    }

    :root .has-ast-global-color-7-color {
        color: var(--ast-global-color-7);
    }

    :root .has-ast-global-color-7-background-color {
        background-color: var(--ast-global-color-7);
    }

    :root .wp-block-button .has-ast-global-color-7-color {
        color: var(--ast-global-color-7);
    }

    :root .wp-block-button .has-ast-global-color-7-background-color {
        background-color: var(--ast-global-color-7);
    }

    :root .has-ast-global-color-8-color {
        color: var(--ast-global-color-8);
    }

    :root .has-ast-global-color-8-background-color {
        background-color: var(--ast-global-color-8);
    }

    :root .wp-block-button .has-ast-global-color-8-color {
        color: var(--ast-global-color-8);
    }

    :root .wp-block-button .has-ast-global-color-8-background-color {
        background-color: var(--ast-global-color-8);
    }

    :root {
        --ast-global-color-0: #3404D2FF;
        --ast-global-color-1: #045cb4;
        --ast-global-color-2: #1e293b;
        --ast-global-color-3: #334155;
        --ast-global-color-4: #F0F5FA;
        --ast-global-color-5: #FFFFFF;
        --ast-global-color-6: #D1D5DB;
        --ast-global-color-7: #111111;
        --ast-global-color-8: #111111;
    }

    :root {
        --ast-border-color: var(--ast-global-color-6);
    }

    .ast-single-entry-banner {
        -js-display: flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        position: relative;
        background: #eeeeee;
    }

    .ast-single-entry-banner[data-banner-layout="layout-1"] {
        max-width: 1200px;
        background: inherit;
        padding: 20px 0;
    }

    .ast-single-entry-banner[data-banner-width-type="custom"] {
        margin: 0 auto;
        width: 100%;
    }

    .ast-single-entry-banner+.site-content .entry-header {
        margin-bottom: 0;
    }

    .site .ast-author-avatar {
        --ast-author-avatar-size: ;
    }

    a.ast-underline-text {
        text-decoration: underline;
    }

    .ast-container>.ast-terms-link {
        position: relative;
        display: block;
    }

    a.ast-button.ast-badge-tax {
        padding: 4px 8px;
        border-radius: 3px;
        font-size: inherit;
    }

    header.entry-header .entry-title {
        font-weight: 600;
        font-size: 32px;
        font-size: 2rem;
    }

    header.entry-header>*:not(:last-child) {
        margin-bottom: 10px;
    }

    header.entry-header .post-thumb-img-content {
        text-align: center;
    }

    header.entry-header .post-thumb img,
    .ast-single-post-featured-section.post-thumb img {
        aspect-ratio: 16/9;
        width: 100%;
        height: 100%;
    }

    .ast-archive-entry-banner {
        -js-display: flex;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        position: relative;
        background: #eeeeee;
    }

    .ast-archive-entry-banner[data-banner-width-type="custom"] {
        margin: 0 auto;
        width: 100%;
    }

    .ast-archive-entry-banner[data-banner-layout="layout-1"] {
        background: inherit;
        padding: 20px 0;
        text-align: left;
    }

    body.archive .ast-archive-description {
        max-width: 1200px;
        width: 100%;
        text-align: left;
        padding-top: 3em;
        padding-right: 3em;
        padding-bottom: 3em;
        padding-left: 3em;
    }

    body.archive .ast-archive-description .ast-archive-title,
    body.archive .ast-archive-description .ast-archive-title * {
        font-weight: 600;
        font-size: 32px;
        font-size: 2rem;
    }

    body.archive .ast-archive-description>*:not(:last-child) {
        margin-bottom: 10px;
    }

    @media (max-width:921px) {
        body.archive .ast-archive-description {
            text-align: left;
        }
    }

    @media (max-width:544px) {
        body.archive .ast-archive-description {
            text-align: left;
        }
    }

    .ast-breadcrumbs .trail-browse,
    .ast-breadcrumbs .trail-items,
    .ast-breadcrumbs .trail-items li {
        display: inline-block;
        margin: 0;
        padding: 0;
        border: none;
        background: inherit;
        text-indent: 0;
        text-decoration: none;
    }

    .ast-breadcrumbs .trail-browse {
        font-size: inherit;
        font-style: inherit;
        font-weight: inherit;
        color: inherit;
    }

    .ast-breadcrumbs .trail-items {
        list-style: none;
    }

    .trail-items li::after {
        padding: 0 0.3em;
        content: "\00bb";
    }

    .trail-items li:last-of-type::after {
        display: none;
    }

    h1,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6 {
        color: var(--ast-global-color-2);
    }

    .entry-title a {
        color: var(--ast-global-color-2);
    }

    @media (max-width:921px) {

        .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
        .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
            grid-column: 1 / -1;
        }
    }

    @media (max-width:544px) {

        .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
        .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
            grid-column: 1 / -1;
        }
    }

    .ast-builder-layout-element[data-section="title_tagline"] {
        display: flex;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
            display: flex;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
            display: flex;
        }
    }

    .ast-builder-menu-1 {
        font-family: inherit;
        font-weight: inherit;
    }

    .ast-builder-menu-1 .menu-item>.menu-link {
        color: var(--ast-global-color-3);
    }

    .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-3);
    }

    .ast-builder-menu-1 .menu-item:hover>.menu-link,
    .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
    .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
    .ast-builder-menu-1 .current-menu-ancestor>.menu-link {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .sub-menu,
    .ast-builder-menu-1 .inline-on-mobile .sub-menu {
        border-top-width: 2px;
        border-bottom-width: 0px;
        border-right-width: 0px;
        border-left-width: 0px;
        border-color: var(--ast-global-color-0);
        border-style: solid;
    }

    .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
    .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
        margin-top: 0px;
    }

    .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
    .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
        height: calc(0px + 5px);
    }

    .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
        border-style: none;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children>.ast-menu-toggle {
            right: -15px;
        }

        .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
            content: unset;
        }

        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0;
        }
    }

    .ast-builder-menu-1 {
        display: flex;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-builder-menu-1 {
            display: flex;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-builder-menu-1 {
            display: flex;
        }
    }

    .site-below-footer-wrap {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] {
        background-color: var(--ast-global-color-5);
        ;
        background-image: none;
        ;
        min-height: 60px;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        border-top-color: #eaeaea;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
        max-width: 1200px;
        min-height: 60px;
        margin-left: auto;
        margin-right: auto;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
    .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
        align-items: center;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
        display: flex;
        margin-bottom: 0;
    }

    .ast-builder-grid-row-full .ast-builder-grid-row {
        grid-template-columns: 1fr;
    }

    @media (max-width:921px) {
        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
            display: block;
            margin-bottom: 10px;
        }

        .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width:544px) {
        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
            display: block;
            margin-bottom: 10px;
        }

        .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] {
        display: none;
    }

    @media (max-width:921px) {
        .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: none;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: none;
        }
    }

    .ast-footer-copyright {
        text-align: center;
    }

    .ast-footer-copyright {
        color: var(--ast-global-color-3);
    }

    @media (max-width:921px) {
        .ast-footer-copyright {
            text-align: center;
        }
    }

    @media (max-width:544px) {
        .ast-footer-copyright {
            text-align: center;
        }
    }

    .ast-footer-copyright {
        font-size: 16px;
        font-size: 1rem;
    }

    .ast-footer-copyright.ast-builder-layout-element {
        display: flex;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }
    }

    .footer-widget-area.widget-area.site-footer-focus-item {
        width: auto;
    }

    .elementor-widget-heading .elementor-heading-title {
        margin: 0;
    }

    .elementor-page .ast-menu-toggle {
        color: unset !important;
        background: unset !important;
    }

    .elementor-post.elementor-grid-item.hentry {
        margin-bottom: 0;
    }

    .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
    .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
        width: auto;
        margin: 0;
        float: none;
    }

    .elementor-toc__list-wrapper {
        margin: 0;
    }

    body .elementor hr {
        background-color: #ccc;
        margin: 0;
    }

    .ast-left-sidebar .elementor-section.elementor-section-stretched,
    .ast-right-sidebar .elementor-section.elementor-section-stretched {
        max-width: 100%;
        left: 0 !important;
    }

    .elementor-posts-container [CLASS*="ast-width-"] {
        width: 100%;
    }

    .elementor-template-full-width .ast-container {
        display: block;
    }

    .elementor-screen-only,
    .screen-reader-text,
    .screen-reader-text span,
    .ui-helper-hidden-accessible {
        top: 0 !important;
    }

    @media (max-width:544px) {
        .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
            width: auto;
            margin: 0;
        }

        .elementor-element .woocommerce .woocommerce-result-count {
            float: none;
        }
    }

    .ast-header-break-point .main-header-bar {
        border-bottom-width: 1px;
    }

    @media (min-width:922px) {
        .main-header-bar {
            border-bottom-width: 1px;
        }
    }

    .main-header-menu .menu-item,
    #astra-footer-menu .menu-item,
    .main-header-bar .ast-masthead-custom-menu-items {
        -js-display: flex;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .main-header-menu>.menu-item>.menu-link,
    #astra-footer-menu>.menu-item>.menu-link {
        height: 100%;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -js-display: flex;
        display: flex;
    }

    .ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
        top: .2em;
        margin-top: 0px;
        margin-left: 0px;
        width: .65em;
        transform: translate(0, -2px) rotateZ(270deg);
    }

    .ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
        transform: rotateX(180deg);
        overflow-y: auto;
    }

    @media (min-width:922px) {
        .ast-builder-menu .main-navigation>ul>li:last-child a {
            margin-right: 0;
        }
    }

    .ast-separate-container .ast-article-inner {
        background-color: var(--ast-global-color-5);
        ;
    }

    @media (max-width:921px) {
        .ast-separate-container .ast-article-inner {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    @media (max-width:544px) {
        .ast-separate-container .ast-article-inner {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    .ast-separate-container .ast-article-single:not(.ast-related-post),
    .woocommerce.ast-separate-container .ast-woocommerce-container,
    .ast-separate-container .error-404,
    .ast-separate-container .no-results,
    .single.ast-separate-container .site-main .ast-author-meta,
    .ast-separate-container .related-posts-title-wrapper,
    .ast-separate-container .comments-count-wrapper,
    .ast-box-layout.ast-plain-container .site-content,
    .ast-padded-layout.ast-plain-container .site-content,
    .ast-separate-container .ast-archive-description,
    .ast-separate-container .comments-area {
        background-color: var(--ast-global-color-5);
        ;
    }

    @media (max-width:921px) {

        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .woocommerce.ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .site-main .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .ast-archive-description {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    @media (max-width:544px) {

        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .woocommerce.ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .site-main .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .ast-archive-description {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    .ast-separate-container.ast-two-container #secondary .widget {
        background-color: var(--ast-global-color-5);
        ;
    }

    @media (max-width:921px) {
        .ast-separate-container.ast-two-container #secondary .widget {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    @media (max-width:544px) {
        .ast-separate-container.ast-two-container #secondary .widget {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    .ast-plain-container,
    .ast-page-builder-template {
        background-color: var(--ast-global-color-5);
        ;
    }

    @media (max-width:921px) {

        .ast-plain-container,
        .ast-page-builder-template {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    @media (max-width:544px) {

        .ast-plain-container,
        .ast-page-builder-template {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    #ast-scroll-top {
        display: none;
        position: fixed;
        text-align: center;
        cursor: pointer;
        z-index: 99;
        width: 2.1em;
        height: 2.1em;
        line-height: 2.1;
        color: #ffffff;
        border-radius: 2px;
        content: "";
        outline: inherit;
    }

    @media (min-width: 769px) {
        #ast-scroll-top {
            content: "769";
        }
    }

    #ast-scroll-top .ast-icon.icon-arrow svg {
        margin-left: 0px;
        vertical-align: middle;
        transform: translate(0, -20%) rotate(180deg);
        width: 1.6em;
    }

    .ast-scroll-to-top-right {
        right: 30px;
        bottom: 30px;
    }

    .ast-scroll-to-top-left {
        left: 30px;
        bottom: 30px;
    }

    #ast-scroll-top {
        background-color: var(--ast-global-color-0);
        font-size: 15px;
    }

    @media (max-width:921px) {
        #ast-scroll-top .ast-icon.icon-arrow svg {
            width: 1em;
        }
    }

    .ast-mobile-header-content>*,
    .ast-desktop-header-content>* {
        padding: 10px 0;
        height: auto;
    }

    .ast-mobile-header-content>*:first-child,
    .ast-desktop-header-content>*:first-child {
        padding-top: 10px;
    }

    .ast-mobile-header-content>.ast-builder-menu,
    .ast-desktop-header-content>.ast-builder-menu {
        padding-top: 0;
    }

    .ast-mobile-header-content>*:last-child,
    .ast-desktop-header-content>*:last-child {
        padding-bottom: 0;
    }

    .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,
    .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {
        width: 100%;
    }

    .ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
        transform: rotateX(180deg);
    }

    #ast-desktop-header .ast-desktop-header-content,
    .ast-mobile-header-content .ast-search-icon,
    .ast-desktop-header-content .ast-search-icon,
    .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {
        display: none;
    }

    .ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,
    .ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {
        display: block;
    }

    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
        opacity: 1;
        visibility: visible;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {
        width: unset;
        margin: unset;
    }

    .ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle,
    .ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
        left: calc(20px - 0.907em);
        right: auto;
    }

    .ast-mobile-header-content .ast-search-menu-icon,
    .ast-mobile-header-content .ast-search-menu-icon.slide-search,
    .ast-desktop-header-content .ast-search-menu-icon,
    .ast-desktop-header-content .ast-search-menu-icon.slide-search {
        width: 100%;
        position: relative;
        display: block;
        right: auto;
        transform: none;
    }

    .ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,
    .ast-mobile-header-content .ast-search-menu-icon .search-form,
    .ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,
    .ast-desktop-header-content .ast-search-menu-icon .search-form {
        right: 0;
        visibility: visible;
        opacity: 1;
        position: relative;
        top: auto;
        transform: none;
        padding: 0;
        display: block;
        overflow: hidden;
    }

    .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,
    .ast-mobile-header-content .ast-search-menu-icon .search-field,
    .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,
    .ast-desktop-header-content .ast-search-menu-icon .search-field {
        width: 100%;
        padding-right: 5.5em;
    }

    .ast-mobile-header-content .ast-search-menu-icon .search-submit,
    .ast-desktop-header-content .ast-search-menu-icon .search-submit {
        display: block;
        position: absolute;
        height: 100%;
        top: 0;
        right: 0;
        padding: 0 1em;
        border-radius: 0;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {
        padding-left: 30px;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
        padding-left: 40px;
    }

    .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
        background-color: #ffffff;
        ;
    }

    .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-desktop-header-content {
        background-color: #ffffff;
        ;
    }

    .ast-mobile-popup-content>*,
    .ast-mobile-header-content>*,
    .ast-desktop-popup-content>*,
    .ast-desktop-header-content>* {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .content-align-flex-start .ast-builder-layout-element {
        justify-content: flex-start;
    }

    .content-align-flex-start .main-header-menu {
        text-align: left;
    }

    .ast-mobile-popup-drawer.active .menu-toggle-close {
        color: #3a3a3a;
    }

    .ast-mobile-header-wrap .ast-primary-header-bar,
    .ast-primary-header-bar .site-primary-header-wrap {
        min-height: 80px;
    }

    .ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
        line-height: 80px;
    }

    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-primary-header-bar,
    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-below-header-bar,
    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-above-header-bar {
        padding-left: 20px;
        padding-right: 20px;
    }

    .ast-header-break-point .ast-primary-header-bar {
        border-bottom-width: 1px;
        border-bottom-color: #eaeaea;
        border-bottom-style: solid;
    }

    @media (min-width:922px) {
        .ast-primary-header-bar {
            border-bottom-width: 1px;
            border-bottom-color: #eaeaea;
            border-bottom-style: solid;
        }
    }

    .ast-primary-header-bar {
        background-color: #ffffff;
        ;
    }

    .ast-primary-header-bar {
        display: block;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-primary-header-bar {
            display: grid;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-primary-header-bar {
            display: grid;
        }
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
        color: var(--ast-global-color-0);
        border: none;
        background: transparent;
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
        width: 20px;
        height: 20px;
        fill: var(--ast-global-color-0);
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
        color: var(--ast-global-color-0);
    }

    .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
        color: var(--ast-global-color-3);
    }

    .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-3);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item:hover>.menu-link,
    .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.menu-link,
    .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.menu-link,
    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
    }

    .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
        content: unset;
    }

    .ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
    .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
    .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
        border-style: none;
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
    }

    @media (max-width:921px) {
        .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
            color: var(--ast-global-color-3);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-3);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item:hover>.menu-link,
        .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
            background: var(--ast-global-color-4);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.menu-link,
        .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
        .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.menu-link,
        .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.ast-menu-toggle {
            color: var(--ast-global-color-1);
            background: var(--ast-global-color-4);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
            content: unset;
        }

        .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-builder-menu-mobile .main-navigation .main-header-menu .sub-menu {
            background-color: var(--ast-global-color-5);
            ;
        }
    }

    @media (max-width:544px) {
        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }
    }

    .ast-builder-menu-mobile .main-navigation {
        display: block;
    }

    @media (max-width:921px) {
        .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
            display: block;
        }
    }

    @media (max-width:544px) {
        .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
            display: block;
        }
    }

    :root {
        --e-global-color-astglobalcolor0: #3404D2FF;
        --e-global-color-astglobalcolor1: #045cb4;
        --e-global-color-astglobalcolor2: #1e293b;
        --e-global-color-astglobalcolor3: #334155;
        --e-global-color-astglobalcolor4: #F0F5FA;
        --e-global-color-astglobalcolor5: #FFFFFF;
        --e-global-color-astglobalcolor6: #D1D5DB;
        --e-global-color-astglobalcolor7: #111111;
        --e-global-color-astglobalcolor8: #111111;
    }
    </style>
    <link rel="stylesheet" id="font-awesome-css" href="./homeassets/font-awesome.min.css" media="all">
    <style id="wp-emoji-styles-inline-css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <style id="global-styles-inline-css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
        --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
        --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
        --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
        --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
        --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
        --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
        --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
        --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    body {
        margin: 0;
        --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
        --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    :where(.wp-site-blocks)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child:last-child {
        margin-block-end: 0;
    }

    body {
        --wp--style--block-gap: 24px;
    }

    :where(body .is-layout-flow)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(body .is-layout-flow)> :last-child:last-child {
        margin-block-end: 0;
    }

    :where(body .is-layout-flow)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :where(body .is-layout-constrained)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(body .is-layout-constrained)> :last-child:last-child {
        margin-block-end: 0;
    }

    :where(body .is-layout-constrained)>* {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :where(body .is-layout-flex) {
        gap: 24px;
    }

    :where(body .is-layout-grid) {
        gap: 24px;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    body {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        text-decoration: none;
    }

    .wp-element-button,
    .wp-block-button__link {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-color {
        color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-color {
        color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-color {
        color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-color {
        color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-color {
        color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-color {
        color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-color {
        color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-color {
        color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-color {
        color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-background-color {
        background-color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-background-color {
        background-color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-background-color {
        background-color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-background-color {
        background-color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-background-color {
        background-color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-background-color {
        background-color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-background-color {
        background-color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-background-color {
        background-color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-background-color {
        background-color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-border-color {
        border-color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-border-color {
        border-color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-border-color {
        border-color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-border-color {
        border-color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-border-color {
        border-color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-border-color {
        border-color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-border-color {
        border-color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-border-color {
        border-color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-border-color {
        border-color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel="stylesheet" id="happy-icons-css" href="./homeassets/style.min.css" media="all">
    <link rel="stylesheet" id="swiper-css" href="./homeassets/swiper.min.css" media="all">
    <link rel="stylesheet" id="elementor-post-5-css" href="./homeassets/post-5.css" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css" href="./homeassets/all.min.css" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css" href="./homeassets/v4-shims.min.css" media="all">
    <link rel="stylesheet" id="elementor-global-css" href="./homeassets/global.css" media="all">
    <link rel="stylesheet" id="elementor-post-25-css" href="./homeassets/post-25.css" media="all">
    <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="./homeassets/ekiticons.css" media="all">
    <link rel="stylesheet" id="ekit-widget-styles-css" href="./homeassets/widget-styles.css" media="all">
    <link rel="stylesheet" id="ekit-responsive-css" href="./homeassets/responsive.css" media="all">
    <link rel="stylesheet" id="eael-general-css" href="./homeassets/general.min.css" media="all">
    <link rel="stylesheet" id="wpr-text-animations-css-css" href="./homeassets/text-animations.min.css" media="all">
    <link rel="stylesheet" id="wpr-addons-css-css" href="./homeassets/frontend.min.css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="./homeassets/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="./homeassets/style.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-happy-icons-css" href="./homeassets/style.min.css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <meta name="generator"
        content="Elementor 3.21.5; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, e_lazyload; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {

        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
    </style>
    <style id="wpr_lightbox_styles">
    .lg-backdrop {
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .lg-toolbar,
    .lg-dropdown {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-dropdown:after {
        border-bottom-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-sub-html {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-thumb-outer,
    .lg-progress-bar {
        background-color: #444444 !important;
    }

    .lg-progress {
        background-color: #a90707 !important;
    }

    .lg-icon {
        color: #efefef !important;
        font-size: 20px !important;
    }

    .lg-icon.lg-toogle-thumb {
        font-size: 24px !important;
    }

    .lg-icon:hover,
    .lg-dropdown-text:hover {
        color: #ffffff !important;
    }

    .lg-sub-html,
    .lg-dropdown-text {
        color: #efefef !important;
        font-size: 14px !important;
    }

    #lg-counter {
        color: #efefef !important;
        font-size: 14px !important;
    }

    .lg-prev,
    .lg-next {
        font-size: 35px !important;
    }

    /* Defaults */
    .lg-icon {
        background-color: transparent !important;
    }

    #lg-counter {
        opacity: 0.9;
    }

    .lg-thumb-outer {
        padding: 0 10px;
    }

    .lg-thumb-item {
        border-radius: 0 !important;
        border: none !important;
        opacity: 0.5;
    }

    .lg-thumb-item.active {
        opacity: 1;
    }
    </style>
</head>




<body itemtype="https://schema.org/WebPage" itemscope="itemscope"
    class="home page-template-default page page-id-25 ast-desktop ast-page-builder-template ast-no-sidebar astra-4.6.14 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-kit-5 elementor-page elementor-page-25 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
    style="" data-elementor-device-mode="desktop">


    <div class="hfeed site" id="page">
        <div class="ekit-template-content-markup ekit-template-content-header">
            <div data-elementor-type="wp-post" data-elementor-id="6" class="elementor elementor-6">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e9a7920 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                    data-id="e9a7920" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-632c3ff"
                            data-id="632c3ff" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-45df306 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                    data-id="45df306" data-element_type="section"
                                    data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-97f9090"
                                            data-id="97f9090" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-194f6cf elementor-widget elementor-widget-heading"
                                                    data-id="194f6cf" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                        /*! elementor - v3.21.0 - 08-05-2024 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                        </style>
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            {{$settingsData['websiteName']}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a03af7"
                                            data-id="2a03af7" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-bd315e7 elementor-widget-mobile__width-auto elementor-widget elementor-widget-ekit-nav-menu"
                                                    data-id="bd315e7" data-element_type="widget"
                                                    data-widget_type="ekit-nav-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="ekit-wid-con ekit_menu_responsive_tablet"
                                                            data-hamburger-icon="" data-hamburger-icon-type="icon"
                                                            data-responsive-breakpoint="1024"> <button
                                                                class="elementskit-menu-hamburger elementskit-menu-toggler"
                                                                type="button" aria-label="hamburger-icon">
                                                                <span
                                                                    class="elementskit-menu-hamburger-icon"></span><span
                                                                    class="elementskit-menu-hamburger-icon"></span><span
                                                                    class="elementskit-menu-hamburger-icon"></span>
                                                            </button>
                                                            <div id="ekit-megamenu-main-menu"
                                                                class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover"
                                                                ekit-dom-added="yes">
                                                                <ul id="menu-main-menu"
                                                                    class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
                                                                    <li id="menu-item-9"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9 nav-item elementskit-mobile-builder-content active"
                                                                        data-vertical-menu="750px"><a href="/"
                                                                            class="ekit-menu-nav-link active menu-link">Home</a>
                                                                    </li>
                                                                    <li id="menu-item-10"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10 nav-item elementskit-mobile-builder-content active"
                                                                        data-vertical-menu="750px"><a href="#about"
                                                                            class="ekit-menu-nav-link active menu-link">About</a>
                                                                    </li>
                                                                    <li id="menu-item-11"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-11 nav-item elementskit-mobile-builder-content active"
                                                                        data-vertical-menu="750px"><a href="#why"
                                                                            class="ekit-menu-nav-link active menu-link">Why
                                                                            Us</a></li>
                                                                    <li id="menu-item-12"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12 nav-item elementskit-mobile-builder-content active"
                                                                        data-vertical-menu="750px"><a href="#contact"
                                                                            class="ekit-menu-nav-link active menu-link">Contact</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="elementskit-nav-identity-panel">
                                                                    <div class="elementskit-site-title">
                                                                        <a class="elementskit-nav-logo" href="/"
                                                                            target="_self" rel="">
                                                                            <img src="/" title="" alt="">
                                                                        </a>
                                                                    </div><button
                                                                        class="elementskit-menu-close elementskit-menu-toggler"
                                                                        type="button">X</button>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6307042 elementor-hidden-tablet elementor-hidden-mobile"
                                            data-id="6307042" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-28a7e12 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="28a7e12" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                onclick="showPopup()">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">generate
                                                                        report</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="content" class="site-content">
            <div class="ast-container">


                <div id="primary" class="content-area primary">


                    <main id="main" class="site-main">
                        <article class="post-25 page type-page status-publish ast-article-single" id="post-25"
                            itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


                            <header class="entry-header ast-no-thumbnail ast-no-title ast-header-without-markup">
                            </header> <!-- .entry-header -->


                            <div class="entry-content clear" itemprop="text">


                                <div data-elementor-type="wp-page" data-elementor-id="25"
                                    class="elementor elementor-25">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-4e9fadd elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="4e9fadd" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62480a1"
                                                data-id="62480a1" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0fea5a4 elementor-widget elementor-widget-heading"
                                                        data-id="0fea5a4" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Opt for Smart Decision-Making with<br> an Instant
                                                                Vehicle History Report.</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-0fc718c elementor-widget elementor-widget-text-editor"
                                                        data-id="0fc718c" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                            /*! elementor - v3.21.0 - 08-05-2024 */
                                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                background-color: #69727d;
                                                                color: #fff
                                                            }

                                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                color: #69727d;
                                                                border: 3px solid;
                                                                background-color: transparent
                                                            }

                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                margin-top: 8px
                                                            }

                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                width: 1em;
                                                                height: 1em
                                                            }

                                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                                float: left;
                                                                text-align: center;
                                                                line-height: 1;
                                                                font-size: 50px
                                                            }

                                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                display: inline-block
                                                            }
                                                            </style> Access essential information swiftly for confident
                                                            decision-making. <br> Uncover accident history, title
                                                            issues, and ownership records promptly.
                                                        </div>
                                                    </div>


                                                    <div class="elementor-element elementor-element-b5f6308 elementor-widget elementor-widget-button"
                                                        data-id="b5f6308" data-element_type="widget"
                                                        data-widget_type="button.default">














                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a onclick="showPopup()"
                                                                    class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                    style="cursor: pointer;">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Generate
                                                                            Report</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>























                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <style>
                                    .headerbike {
                                        margin-left: 20%;
                                        animation: fadeleft 1s ease-in-out alternate;
                                        transform: rotateY(180deg);
                                    }

                                    @keyframes fadeleft {
                                        0% {
                                            margin-right: -50%;
                                            width: 1%;
                                            opacity: 0.01;
                                            transform: rotateY(180deg) rotateX(100deg) rotateZ(100deg);
                                        }

                                        5% {
                                            opacity: 0.02;
                                        }


                                        30% {
                                            margin-top: -20%;
                                            margin-right: -20%;
                                            width: 50%;
                                            opacity: 0.3;
                                        }

                                        100% {
                                            margin-right: 0%;
                                            opacity: 1;
                                        }
                                    }

                                    .headercar {
                                        margin-left: 20%;
                                        animation: swipright 1s ease-in-out alternate;
                                        /* transform: rotateY(180deg); */
                                    }



                                    @keyframes swipright {
                                        0% {
                                            margin-right: -50%;
                                            width: 1%;
                                            opacity: 0.01;
                                        }

                                        100% {
                                            margin-right: 0%;
                                            opacity: 1;
                                        }
                                    }

                                    .headerbikelight {
                                        width: 30%;
                                        hight: 30%;
                                        position: absolute;
                                        top: 25%;
                                        left: 27%;
                                        z-index: 1;
                                        opacity: 0;
                                        animation-delay: 1s;
                                        animation: blink 1s ease-in-out infinite alternate, swiprightlight 1s ease-in-out alternate;
                                    }

                                    @keyframes blink {
                                        0% {
                                            opacity: 1;
                                        }

                                        50% {
                                            opacity: 0.6;
                                        }

                                        100% {
                                            opacity: 0.3;
                                        }
                                    }

                                    .headercarlight {
                                        width: 55%;
                                        hight: 30%;
                                        position: absolute;
                                        top: 35%;
                                        left: 29%;
                                        z-index: 1;
                                        opacity: 0;
                                        animation-delay: 1s;
                                        animation: blink 1s ease-in-out infinite alternate, swiprightlight 1s ease-in-out alternate;
                                    }

                                    @keyframes blink {
                                        0% {
                                            opacity: 1;
                                        }

                                        50% {
                                            opacity: 0.6;
                                        }

                                        100% {
                                            opacity: 0.3;
                                        }
                                    }


                                    @media screen and (max-width: 600px) {
                                        .headercarlight {
                                            width: 70%;
                                            hight: 30%;
                                            top: 37%;
                                            left: 25%;
                                        }
                                    }

                                    @media screen and (max-width: 600px) {
                                        .headerbikelight {
                                            width: 30%;
                                            hight: 30%;
                                            top: 28%;
                                            left: 22%;
                                        }
                                    }

                                    @keyframes swiprightlight {
                                        0% {
                                            margin-right: -50%;
                                            width: 1%;
                                            opacity: 0.01;
                                        }

                                        99% {
                                            width: 1%;
                                            opacity: 0.5;
                                        }

                                        100% {
                                            margin-right: 0%;
                                            opacity: 1;
                                        }
                                    }





                                    /*! elementor - v3.21.0 - 08-05-2024 */
                                    .elementor-widget-image {
                                        text-align: center
                                    }

                                    .elementor-widget-image a {
                                        display: inline-block
                                    }

                                    .elementor-widget-image a img[src$=".svg"] {
                                        width: 48px
                                    }

                                    .elementor-widget-image img {
                                        vertical-align: middle;
                                        display: inline-block
                                    }

                                    /* @media screen and (max-width: 600px) {
                                        .headercar,
                                        .headerbike {
										max-width: 85% !important;
										}
                                    }
                                    */
                                    </style>

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-bcc00f0 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="bcc00f0" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-071f81d"
                                                data-id="071f81d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-1020731 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="1020731" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-87e0d4c"
                                                                data-id="87e0d4c" data-element_type="column">
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>

                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-16da9fa"
                                                                data-id="16da9fa" data-element_type="column">
                                                                <!-- car box -->
                                                                <div class="carbox elementor-widget-wrap elementor-element-populated"
                                                                    style="position: relative">
                                                                    <div class="elementor-element elementor-element-26fc495 elementor-widget elementor-widget-image"
                                                                        data-id="26fc495" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img fetchpriority="high" decoding="async"
                                                                                width="1165" height="664"
                                                                                src="{{asset('assets/carside.webp')}}"
                                                                                class="headercar attachment-full size-full wp-image-35"
                                                                                alt=""
                                                                                sizes="(max-width: 1165px) 100vw, 1165px">
                                                                        </div>
                                                                    </div>
                                                                    <!-- light section -->
                                                                    <img src="{{asset('assets/car-light-01.webp')}}"
                                                                        class="headercarlight">
                                                                    <!-- end light section -->

                                                                </div>
                                                                <!-- end car box -->
                                                                <!-- bike box -->
                                                                <div class="bikebox elementor-widget-wrap elementor-element-populated"
                                                                    style="display:none; poistion:relative !important;">
                                                                    <div class="elementor-element elementor-element-26fc495 elementor-widget elementor-widget-image"
                                                                        data-id="26fc495" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">

                                                                            <img fetchpriority="high" decoding="async"
                                                                                width="1165" height="664"
                                                                                src="{{asset('assets/bike.png')}}"
                                                                                class="headerbike attachment-full size-full wp-image-35"
                                                                                alt="" srcset=""
                                                                                sizes="(max-width: 1165px) 100vw, 1165px">
                                                                        </div>
                                                                    </div>
                                                                    <!-- light section -->
                                                                    <img src="{{asset('assets/bikelight.png')}}"
                                                                        class="headerbikelight" alt="" srcset="">
                                                                    <!-- <div
                                                                        class=" elementor-element elementor-element-b1dd0a3 elementor-widget elementor-widget-image">
                                                                       
                                                                        <div class="elementor-widget-container">
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end light section -->
                                                                </div>
                                                                <!-- end bike box -->
                                                                <script>
                                                                let toggle = true;
                                                                setInterval(() => {
                                                                    const box1 = document
                                                                        .getElementsByClassName(
                                                                            'bikebox')[0];
                                                                    const box2 = document
                                                                        .getElementsByClassName(
                                                                            'carbox')[0];

                                                                    if (toggle) {
                                                                        box1.style.display =
                                                                            'block';
                                                                        box2.style.display =
                                                                            'none';
                                                                    } else {
                                                                        box1.style.display =
                                                                            'none';
                                                                        box2.style.display =
                                                                            'block';
                                                                    }

                                                                    toggle = !toggle;
                                                                }, 5500);
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>




                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-dc39341 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="dc39341" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c5e0b93"
                                                data-id="c5e0b93" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-55cdfcd elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="55cdfcd" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-324b738"
                                                                data-id="324b738" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-1239e0e elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="1239e0e" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="50"
                                                                                        viewBox="0 0 50 50" fill="none">
                                                                                        <mask id="mask0_3316_65"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="50"
                                                                                            height="50">
                                                                                            <rect width="50" height="50"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_3316_65)">
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M48.1581 13.2712L48.028 12.6814L47.852 12.1085L47.6302 11.5352L47.352 10.954C46.9883 10.3294 46.5735 9.72986 46.1111 9.16019C45.8295 8.81548 45.53 8.48291 45.2134 8.16359C44.6224 7.61574 44.0013 7.09474 43.3523 6.60254L42.5834 6.07081L42.5003 6.02102C41.5096 5.4065 40.4717 4.85855 39.4075 4.35186C38.3981 3.8702 37.324 3.49637 36.2588 3.13107L35.2031 2.81556L34.314 2.56605L34.1107 2.51627C32.583 2.15922 31.0458 1.86846 29.4901 1.66078L28.2492 1.52791L27.0083 1.43659L25.7493 1.37827L24.4712 1.35352C22.9432 1.37827 21.4155 1.46988 19.897 1.61099C19.4389 1.66045 18.982 1.7186 18.5267 1.78539C16.9064 2.01782 15.3136 2.3834 13.7488 2.81528C13.3875 2.91485 13.0265 3.02268 12.6744 3.13079C12.1512 3.30828 11.6325 3.49647 11.1188 3.69523C10.6477 3.87321 10.1814 4.06151 9.72055 4.25997C8.832 4.6687 7.96381 5.11209 7.11846 5.58886C6.36552 6.05396 5.63924 6.55285 4.94239 7.08363C4.3568 7.56601 3.80046 8.07618 3.27576 8.61196C2.91445 8.99404 2.59058 9.40088 2.27559 9.81625L1.89589 10.3975L1.57201 10.954L1.29445 11.5352L1.07209 12.1085L0.896034 12.6814L0.766294 13.2712L0.701266 13.8692C0.664152 14.4673 0.701266 15.0653 0.766294 15.6548C0.895402 16.244 1.07181 16.8241 1.29413 17.3905C1.58042 17.9789 1.90824 18.5504 2.27559 19.1015C2.72 19.6827 3.21105 20.2392 3.72017 20.7706C4.46468 21.452 5.25974 22.0874 6.09989 22.6725C6.58142 23.0131 7.10926 23.3121 7.62759 23.6028C8.60936 24.1346 9.61841 24.6162 10.6557 25.0646C10.813 25.1226 10.9704 25.1809 11.1185 25.239C11.9518 25.538 12.7851 25.8285 13.6372 26.0862L14.8039 26.4017C15.9522 26.6675 17.1097 26.8916 18.2764 27.0743C18.3598 27.0911 18.4429 27.0993 18.5264 27.1158C19.2394 27.2239 19.9525 27.3153 20.6745 27.3901C21.943 27.4814 23.2024 27.548 24.4709 27.5642C25.9986 27.5395 27.5174 27.4481 29.0359 27.307C30.2118 27.1907 31.3975 26.9747 32.555 26.7423C33.1381 26.6177 33.731 26.4851 34.314 26.3437C34.4348 26.3107 34.5643 26.2777 34.6845 26.2441C35.8791 25.9369 37.0369 25.5297 38.1665 25.0814C38.8236 24.8185 39.4721 24.5388 40.1113 24.2427C40.9251 23.8196 41.7219 23.3708 42.5003 22.8973L42.5834 22.8475C43.5096 22.2079 44.3893 21.5189 45.2042 20.7712C45.7197 20.2363 46.2018 19.6764 46.6484 19.0938C47.1366 18.3747 47.5401 17.612 47.8523 16.8181C48.0188 16.2451 48.1492 15.6721 48.2228 15.0823L48.2599 14.4596L48.232 13.8783L48.1581 13.2712ZM18.5264 18.3538H15.489L14.637 16.9253H7.51656L6.58142 18.3538H2.84023L9.22982 8.60371L8.55385 7.54082H12.341L18.5267 17.4403L19.0913 18.3538H18.5264ZM28.1934 15.0983C28.2121 17.3074 25.5634 18.5532 23.0079 18.5532C21.2858 18.5532 19.4336 17.7558 18.5264 16.6181C18.1654 16.1614 17.9522 15.663 17.9522 15.1316V10.4555H21.045V14.1597C21.045 15.4138 21.9338 16.1364 23.1101 16.1364C24.0452 16.1364 25.1656 15.5051 25.1656 14.2428V10.4555H28.1934V15.0983ZM34.314 18.578C31.1289 18.578 28.536 16.6846 28.536 14.3591C28.536 12.0504 31.0917 10.1568 34.2401 10.1318L32.3603 7.64039H35.7957L39.0179 11.9008C39.7031 12.5901 40.1015 13.4456 40.1015 14.3591C40.1018 16.6844 37.5093 18.578 34.314 18.578ZM43.9909 18.3205H41.0091V10.4476H43.9909V18.3205Z"
                                                                                                fill="#CC2229"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M11.1189 11.372L8.9707 14.6691H13.2765L11.1839 11.2725L11.1189 11.372Z"
                                                                                                fill="#CC2229"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M49.4356 13.7876L49.3525 13.115L49.2132 12.4425L49.0187 11.7861L48.7599 11.1383L48.4544 10.4908C47.8064 9.36133 47.0466 8.38123 46.1026 7.41791C45.4536 6.82753 44.7768 6.26228 44.074 5.72372L43.2966 5.19227C43.0371 5.03437 42.7687 4.86822 42.5004 4.71886C41.6112 4.19567 40.6945 3.73051 39.7501 3.28214L38.768 2.86677L37.7403 2.47643L36.676 2.10289L35.5737 1.77913L34.4441 1.47187C34.3978 1.45536 34.3512 1.44683 34.3141 1.43858C32.7758 1.08258 31.2183 0.797048 29.6476 0.583088L28.3695 0.450227L27.0921 0.358903L25.7953 0.292614L24.4713 0.267578C22.7213 0.30058 21.0175 0.408405 19.2858 0.582804L18.5264 0.682663L18.0541 0.748952L16.8411 0.964887C15.291 1.26807 13.7607 1.64789 12.2574 2.1026C11.8777 2.23546 11.498 2.37658 11.1186 2.51797C10.4677 2.76071 9.82245 3.01549 9.18328 3.28214C8.24814 3.71401 7.3406 4.18742 6.45177 4.68558C5.65069 5.17892 4.87803 5.70839 4.13676 6.27195C3.46998 6.82843 2.84032 7.40141 2.25696 8.01593L1.71992 8.6222L1.25711 9.23672L0.831096 9.86802L0.479308 10.4908L0.164316 11.1383L-0.0859637 11.7861L-0.289614 12.4425L-0.428552 13.115L-0.511979 13.7876C-0.549093 14.4852 -0.511979 15.1247 -0.428552 15.8223C-0.289614 16.4866 -0.0859638 17.1344 0.164316 17.7822C0.476632 18.4391 0.841862 19.0748 1.25711 19.6841C1.73864 20.3237 2.26648 20.9214 2.82192 21.5112C3.69984 22.3067 4.63726 23.0475 5.62766 23.7286C7.08144 24.6256 8.55394 25.373 10.1559 26.0538C10.4797 26.1784 10.8039 26.2948 11.1189 26.4111C11.8577 26.6696 12.6017 26.916 13.3505 27.1502L14.4804 27.4575C15.8324 27.7648 17.1659 28.0222 18.5271 28.2217C19.1939 28.3215 19.8695 28.4046 20.555 28.4791C21.8607 28.5705 23.1663 28.637 24.4719 28.6533C26.2022 28.627 27.9299 28.5218 29.6482 28.338C31.2406 28.1306 32.7775 27.8396 34.3147 27.466C34.7315 27.3662 35.1579 27.2586 35.5744 27.1505C37.3346 26.619 39.0466 25.9666 40.6951 25.1991C41.3057 24.8825 41.9078 24.553 42.501 24.2108C42.7694 24.0529 43.0374 23.887 43.2972 23.7291C44.2896 23.0501 45.2272 22.3092 46.1033 21.5117C46.6615 20.9288 47.1838 20.3188 47.6677 19.6847C48.2184 18.8804 48.6716 18.0257 49.0197 17.135C49.2141 16.4809 49.3534 15.8146 49.4365 15.1418L49.4736 14.4607L49.4356 13.7876ZM48.8249 15.1415C48.7507 15.7643 48.6118 16.3706 48.4357 16.9768C48.1394 17.716 47.7876 18.4221 47.3521 19.1029C47.0654 19.5348 46.732 19.9416 46.3894 20.3405C46.1483 20.6062 45.9079 20.8802 45.6576 21.1376C44.8055 21.9183 43.898 22.6241 42.9445 23.2887C42.7963 23.3801 42.6482 23.4714 42.5004 23.5545C41.8171 23.9625 41.1191 24.3503 40.4074 24.7172C39.1385 25.3067 37.8516 25.8216 36.5184 26.27C36.1479 26.3946 35.7682 26.511 35.3885 26.6273C35.0329 26.7264 34.6746 26.8178 34.3141 26.9013C33.0535 27.2099 31.7775 27.4649 30.4901 27.6655C30.184 27.7153 29.8785 27.7568 29.573 27.7986C27.8693 27.9727 26.1839 28.0808 24.471 28.1059C23.1837 28.0891 21.8968 28.0228 20.6188 27.9315C19.9152 27.8567 19.2205 27.7736 18.5261 27.6655C17.6557 27.5409 16.7945 27.3833 15.9336 27.2089C15.6229 27.1503 15.3141 27.0839 15.0076 27.0097C14.3408 26.8603 13.6928 26.6774 13.0447 26.4783C12.3975 26.2718 11.7553 26.053 11.1186 25.8219C10.887 25.7388 10.6463 25.6478 10.4055 25.5562C9.34777 25.1069 8.31556 24.6108 7.31268 24.0697C6.77565 23.7621 6.22909 23.4549 5.71996 23.1064C4.85775 22.4992 4.04106 21.8417 3.27521 21.1382C2.73599 20.5828 2.23209 20.0005 1.76592 19.3942C1.37823 18.8138 1.03189 18.2119 0.728954 17.5922C0.497706 16.9859 0.302938 16.3711 0.173516 15.7404C0.0992883 15.1091 0.0621743 14.4695 0.0900889 13.8303L0.173516 13.1992L0.303255 12.5597L0.48819 11.9452L0.728954 11.3389L1.02523 10.7244L1.36782 10.1346L1.76592 9.52833L2.21033 8.9471L2.76577 8.31608C3.32153 7.73484 3.91408 7.20311 4.53454 6.6802C5.25592 6.13257 6.00681 5.617 6.78453 5.13537C7.65471 4.65239 8.54423 4.19803 9.45133 3.77318C10.0017 3.54144 10.5574 3.31995 11.118 3.10888C11.5624 2.93448 12.0163 2.77658 12.4607 2.61897C12.7846 2.51939 13.1088 2.42807 13.433 2.33646C15.0996 1.8713 16.7941 1.48125 18.5258 1.23203C18.961 1.17371 19.3962 1.11567 19.8315 1.07414C21.3779 0.932739 22.9243 0.841414 24.4707 0.816663L25.7668 0.833448L27.0448 0.899737L28.3131 0.991061L29.7113 1.14042C31.2485 1.35636 32.767 1.64683 34.277 1.99591L34.3134 2.00416L35.3878 2.29492L36.4714 2.61868L37.5179 2.98427C38.2491 3.26649 38.9901 3.54075 39.6937 3.87276C40.1105 4.07219 40.5178 4.27134 40.9162 4.48756C41.4568 4.76216 41.985 5.05581 42.4997 5.36781C43.0211 5.68232 43.5219 6.02333 43.9998 6.38916C44.5724 6.83751 45.1253 7.30567 45.6573 7.7926C45.9627 8.09986 46.2501 8.4239 46.5277 8.74766C47.0416 9.37328 47.4998 10.0342 47.898 10.7244L48.1943 11.3389L48.4354 11.9452L48.6206 12.5597L48.7501 13.1992L48.8338 13.8303L48.8703 14.4616L48.8249 15.1415Z"
                                                                                                fill="#CC2229"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M34.3151 12.4258C32.8524 12.4258 31.667 13.2895 31.667 14.3609C31.667 15.4238 32.8521 16.2958 34.3151 16.2958C35.7784 16.2958 36.9638 15.4238 36.9638 14.3609C36.9638 13.2895 35.7787 12.4258 34.3151 12.4258Z"
                                                                                                fill="#CC2229"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M14.0259 46.5629C13.7397 46.18 13.5065 45.7673 13.3315 45.3339L13.2664 45.3421L12.8312 45.3504C12.5634 44.6529 12.4257 43.9205 12.4236 43.1828C12.4236 42.0701 12.7291 41.032 13.2664 40.1267C13.4825 39.76 13.7367 39.4125 14.0259 39.0888C14.0443 39.0638 14.0627 39.0388 14.0906 39.014L14.5626 38.9972L14.7849 38.989L14.9423 38.8479C14.8221 38.7398 14.6923 38.6319 14.5626 38.5238C14.3922 38.3923 14.2129 38.2703 14.0259 38.1585C13.7821 38.0118 13.5285 37.8786 13.2664 37.7599C12.4515 37.4029 11.544 37.2117 10.5438 37.1787H10.1733C6.56186 37.27 3.6543 39.9275 3.6543 43.1828V43.3404C3.6635 43.3819 3.6635 43.4317 3.6635 43.4815V43.4898C3.6635 43.5398 3.6727 43.5896 3.6727 43.6309V43.6477C3.68189 43.6892 3.68189 43.739 3.69141 43.7805V43.7973C3.70061 43.8474 3.70061 43.8886 3.71013 43.9305V43.9552C3.71933 43.9967 3.71933 44.03 3.72884 44.0716C3.72884 44.0881 3.73804 44.0963 3.73804 44.1131C3.74756 44.1464 3.74756 44.1794 3.75676 44.2212C3.75676 44.2295 3.76596 44.246 3.76596 44.2628C3.77515 44.2958 3.77515 44.329 3.78467 44.3538C3.79387 44.3788 3.79387 44.3953 3.80339 44.4201C3.80339 44.4451 3.81259 44.4702 3.8221 44.4952C3.8221 44.5199 3.8313 44.545 3.8405 44.5697C3.8405 44.5865 3.8497 44.6113 3.8589 44.6363C3.8681 44.6611 3.8681 44.6943 3.87761 44.7194C3.88681 44.7359 3.88681 44.7524 3.89633 44.7692C3.90553 44.8107 3.92393 44.844 3.93344 44.8852C3.98896 45.0431 4.04447 45.1845 4.09998 45.3336C4.9057 47.194 6.71127 48.6142 8.92445 49.0461L9.23025 48.6059C9.53572 48.6557 9.8504 48.689 10.1746 48.697H10.3506C11.3505 48.697 12.3878 48.4563 13.2674 48.066C13.499 47.9661 13.721 47.85 13.925 47.7254L14.0268 47.7174L14.5635 47.6842L14.8043 47.6674L14.934 47.5595C14.8058 47.4444 14.6822 47.3253 14.5635 47.2022C14.3655 47.0024 14.1857 46.7886 14.0259 46.5629ZM13.2664 47.4765C13.1091 47.5598 12.9423 47.6426 12.7757 47.7177C12.5258 47.8173 12.2758 47.9086 12.0163 47.9917C11.7384 48.058 11.4793 48.1163 11.2017 48.1578C10.9146 48.1908 10.6368 48.2076 10.3497 48.2159C10.2847 48.2159 10.2291 48.2159 10.1736 48.2076C9.94207 48.1994 9.72002 48.1826 9.49766 48.1578C9.22279 48.1161 8.95073 48.0606 8.68274 47.9917C8.41406 47.9086 8.17361 47.8173 7.91413 47.7177C7.67253 47.607 7.43757 47.485 7.21024 47.3521C6.98885 47.2126 6.77561 47.063 6.57138 46.9038C6.37682 46.7375 6.19135 46.5629 6.01562 46.3806C5.85009 46.1894 5.69254 45.9928 5.54329 45.7911C5.40702 45.5783 5.28345 45.3593 5.17311 45.1348C5.07389 44.9053 4.98427 44.6726 4.90443 44.4372C4.84174 44.1931 4.7923 43.9464 4.75629 43.698C4.73758 43.432 4.72838 43.1828 4.73757 42.9174C4.75629 42.6681 4.79309 42.4189 4.84892 42.17C4.91363 41.9208 4.97834 41.6883 5.07097 41.4556C5.17279 41.2232 5.28381 41.0072 5.41355 40.783C5.54329 40.5668 5.69143 40.3677 5.84877 40.1685C6.0153 39.9773 6.19136 39.8029 6.37661 39.6203C6.58026 39.4541 6.77471 39.2962 6.98756 39.1469C7.21912 39.0058 7.43197 38.8729 7.67305 38.7565C7.91683 38.6424 8.16714 38.5398 8.42294 38.4493C8.68266 38.3655 8.94888 38.2989 9.21946 38.2501L9.7749 38.1671C9.90464 38.1588 10.0341 38.1588 10.173 38.1503H10.6358C10.9229 38.1671 11.1913 38.2001 11.4786 38.2501C11.7473 38.2999 12.0065 38.3665 12.2748 38.4493C12.5248 38.5406 12.7748 38.6405 13.0155 38.7565C13.099 38.7981 13.1824 38.8396 13.2658 38.8894L13.3213 38.9144L13.386 38.9642C13.3489 39.0143 13.3026 39.0641 13.2658 39.1136C12.3491 40.2763 11.8859 41.6465 11.8859 43.1831C11.8845 44.6067 12.3657 45.9971 13.2658 47.1698C13.3213 47.2446 13.3768 47.3109 13.4324 47.3857C13.3751 47.4131 13.3197 47.4434 13.2664 47.4765Z"
                                                                                                fill="#D0D1D3"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M38.5737 36.0918C38.5179 36.0918 38.4621 36.0918 38.3977 36.1C36.7031 36.1331 35.1469 36.6483 33.8695 37.495C33.7066 37.3852 33.5399 37.2801 33.3696 37.1797C32.9536 36.9454 32.5133 36.7479 32.0547 36.59C31.1656 36.2662 30.1838 36.0918 29.1659 36.0918C29.11 36.0918 29.045 36.0918 28.9898 36.1C27.3621 36.1293 25.7853 36.6143 24.48 37.487C24.3177 37.3789 24.1508 37.2764 23.9798 37.1797C23.8009 37.0806 23.6188 36.9864 23.4335 36.8972C23.1813 36.7787 22.9216 36.6734 22.6557 36.5817C21.742 36.257 20.7678 36.0908 19.785 36.0918C19.7295 36.0918 19.6647 36.0918 19.6092 36.1C19.313 36.1 19.0259 36.1248 18.7388 36.1581C17.3773 36.316 16.1183 36.7976 15.0626 37.5035C14.9012 37.3917 14.7343 37.2865 14.5624 37.188C14.3886 37.0888 14.2095 36.9973 14.0257 36.914C12.8933 36.3754 11.6313 36.0932 10.3495 36.0921C10.2845 36.0921 10.229 36.0921 10.1734 36.1003C5.89553 36.1834 2.44141 39.3308 2.44141 43.1841C2.44141 47.0294 5.89521 50.1768 10.1734 50.2681H10.3495C11.3773 50.2681 12.3587 50.0852 13.2663 49.7617C13.5252 49.6713 13.7787 49.5687 14.0257 49.4545C14.2077 49.3652 14.3866 49.2711 14.5624 49.1722C14.7384 49.0724 14.905 48.9646 15.0626 48.8565C16.1183 49.5623 17.3773 50.0442 18.7388 50.2019C19.0259 50.2434 19.313 50.2599 19.6092 50.2681H19.785C20.7679 50.2694 21.7421 50.1031 22.6557 49.7779C22.9241 49.6869 23.1836 49.5788 23.4335 49.4624C23.6207 49.3794 23.803 49.288 23.9798 49.1885C24.1466 49.0889 24.3132 48.9811 24.48 48.8732C25.7489 49.7202 27.3038 50.2351 28.9898 50.2681H29.1659C30.1838 50.2681 31.1659 50.094 32.0547 49.7779C32.5118 49.6139 32.9519 49.4137 33.3696 49.1799C33.5361 49.0804 33.7122 48.9808 33.8695 48.8644C35.1469 49.7199 36.7035 50.2349 38.3977 50.2681H38.5737C42.9256 50.2681 46.4812 47.0874 46.4812 43.1841C46.4812 39.2808 42.9256 36.0918 38.5737 36.0918ZM45.4718 43.1841C45.4718 46.5893 42.3698 49.3631 38.5737 49.3631H38.398C38.3422 49.3631 38.2864 49.3549 38.2315 49.3549H38.2128C38.1664 49.3549 38.1106 49.3466 38.0554 49.3466H38.0367C37.9904 49.3384 37.9346 49.3384 37.8886 49.3301H37.8607C37.8143 49.3216 37.7677 49.3216 37.7217 49.3131H37.6846C37.6383 49.3051 37.5917 49.2966 37.5552 49.2966C37.5358 49.2883 37.5273 49.2883 37.5089 49.2883C37.4718 49.2801 37.4251 49.2801 37.3886 49.2715C37.3699 49.2633 37.3515 49.2633 37.3328 49.2633C37.2958 49.2551 37.2588 49.2468 37.2218 49.2385C37.2024 49.2385 37.1847 49.2385 37.166 49.2303C37.1196 49.222 37.0822 49.2135 37.0365 49.2053C35.814 48.956 34.7491 48.4579 33.8695 47.7022L33.8508 47.6855C33.7677 47.7685 33.5919 47.9096 33.3692 48.0675C33.2763 48.1338 33.184 48.2004 33.0825 48.2667C32.7569 48.4667 32.4131 48.6418 32.0547 48.7899C31.1496 49.1669 30.1638 49.3626 29.1659 49.3631H28.9898H28.9806C28.9248 49.3631 28.869 49.3549 28.8134 49.3549H28.8049C28.7491 49.3549 28.7027 49.3466 28.6469 49.3466H28.6288C28.5825 49.3384 28.5267 49.3384 28.4715 49.3301H28.4436C28.3973 49.3216 28.3506 49.3216 28.3043 49.3131H28.277C28.2307 49.3051 28.1841 49.2966 28.1378 49.2966C28.1292 49.2883 28.1105 49.2883 28.1013 49.2883C28.055 49.2801 28.0176 49.2801 27.9713 49.2715C27.9532 49.2633 27.944 49.2633 27.9253 49.2633C27.8881 49.255 27.8415 49.2468 27.8044 49.2385C27.7863 49.2385 27.7679 49.2385 27.7492 49.2303C27.7121 49.222 27.6655 49.2135 27.6283 49.2053C26.7645 49.0256 25.9473 48.6985 25.2213 48.2416C24.9711 48.059 24.7392 47.8929 24.4895 47.7022C24.3046 47.8433 24.1377 47.968 23.9804 48.0843C23.8786 48.1506 23.786 48.2172 23.6933 48.2752C23.6099 48.3253 23.5173 48.3751 23.4342 48.4246C23.1851 48.5655 22.9252 48.6903 22.6564 48.7981C21.7859 49.1634 20.8134 49.3629 19.7856 49.3629H19.6099C19.5544 49.3629 19.4988 49.3546 19.443 49.3546H19.4246C19.3783 49.3546 19.3228 49.3464 19.267 49.3464H19.2486C19.2022 49.3381 19.1467 49.3381 19.1004 49.3299H19.0728C19.0265 49.3213 18.9802 49.3213 18.9247 49.3128H18.8968C18.8505 49.3048 18.8041 49.2963 18.7578 49.2963C18.7578 49.2963 18.7483 49.288 18.7391 49.288H18.7204C18.6833 49.2798 18.637 49.2798 18.5907 49.2713C18.5815 49.263 18.5631 49.263 18.5444 49.263C18.5072 49.2548 18.4701 49.2465 18.4238 49.2383C18.4054 49.2383 18.3867 49.2383 18.3775 49.23C18.3312 49.2217 18.2941 49.2132 18.2478 49.205C17.0347 48.9557 15.9419 48.416 15.0623 47.6769V47.6687C14.9142 47.7847 14.8587 47.8431 14.5621 48.059C14.4882 48.1091 14.3955 48.1754 14.275 48.2499C14.1916 48.3082 14.1085 48.358 14.025 48.4078C13.7748 48.5409 13.5248 48.6653 13.2656 48.7816C12.3528 49.1651 11.3569 49.3636 10.3489 49.3629H10.1636C10.1081 49.3629 10.0523 49.3546 9.99676 49.3546H9.98756C9.93173 49.3546 9.87622 49.3464 9.82102 49.3464H9.81151C9.756 49.3381 9.70968 49.3381 9.65417 49.3299H9.62657C9.58026 49.3213 9.53395 49.3213 9.48763 49.3128H9.45052C9.40813 49.3028 9.36459 49.2973 9.32078 49.2963C9.30207 49.288 9.29318 49.288 9.28367 49.288C9.23735 49.2798 9.19104 49.2798 9.15393 49.2713C9.13553 49.263 9.11681 49.263 9.10761 49.263C9.06731 49.2557 9.02722 49.2474 8.98739 49.2383C8.96868 49.2383 8.95028 49.2383 8.93188 49.23C8.89476 49.2217 8.84845 49.2132 8.81134 49.205C6.54296 48.7398 4.69076 47.2618 3.88535 45.3346L3.39463 45.3514C3.11924 44.6554 2.97827 43.9223 2.97781 43.1838C2.97781 39.5963 6.19085 36.6648 10.1728 36.5814H10.2746L10.4786 36.9968C11.4972 37.0136 12.4231 37.2127 13.2659 37.5615C13.5251 37.6694 13.7751 37.7857 14.0254 37.9268C14.2103 38.0267 14.3863 38.1428 14.5621 38.2588C14.7381 38.3834 14.9047 38.5081 15.0623 38.6495C15.0874 38.6582 15.1097 38.6725 15.127 38.691L15.2289 38.6162L15.2476 38.0016C16.3308 37.2958 17.4696 36.8141 18.7385 36.648C19.0256 36.6065 19.3126 36.5897 19.6089 36.5814H19.7107L19.9144 36.9968C20.9142 37.0136 21.831 37.2042 22.6554 37.5365C22.9238 37.6446 23.1833 37.7689 23.4332 37.91C23.5258 37.9598 23.6185 38.0181 23.7111 38.0679C23.7111 38.0762 23.7019 38.0762 23.7019 38.0762C23.7111 38.0762 23.7111 38.0762 23.7295 38.0844C23.8129 38.1342 23.896 38.1925 23.9795 38.2423C24.0258 38.2753 24.0721 38.3172 24.1276 38.3502C24.1368 38.3584 24.1463 38.3672 24.1368 38.3752C24.1368 38.3672 24.146 38.3672 24.146 38.3672C24.2941 38.4668 24.4331 38.5829 24.5625 38.691L24.7018 38.5911C24.7477 38.5496 24.6554 37.9766 24.7018 37.9436C25.9306 37.0883 27.434 36.6106 28.9892 36.5814H29.0907L29.2947 36.9968C30.304 37.0136 31.2303 37.2127 32.0541 37.545C32.5261 37.7362 32.961 37.9769 33.3689 38.2509C33.5355 38.3755 33.7115 38.5001 33.8689 38.633C33.8968 38.6577 33.9152 38.6745 33.9431 38.691L34.0541 38.5664L34.082 37.9601C35.3176 37.0961 36.831 36.6126 38.3974 36.5814H38.4989L38.7029 36.9968C41.5362 37.0466 43.953 38.633 44.9621 40.8671C44.9808 40.9087 44.9992 40.942 45.0179 40.9832C45.0179 40.9915 45.0271 41 45.0271 41C45.0458 41.0415 45.055 41.0831 45.0734 41.1164C45.0734 41.1243 45.0826 41.1411 45.0826 41.1494C45.1007 41.1826 45.1099 41.2156 45.1286 41.2575C45.1286 41.2654 45.1378 41.2822 45.1378 41.2905C45.147 41.3238 45.1657 41.3568 45.1749 41.3903C45.1841 41.4071 45.1841 41.4319 45.1936 41.4566L45.2216 41.5314C45.2308 41.5565 45.2308 41.5815 45.2403 41.5977C45.2507 41.6217 45.2568 41.6469 45.2584 41.6725C45.2676 41.7056 45.2771 41.7309 45.2863 41.7556C45.2863 41.7724 45.2955 41.7972 45.2955 41.8219C45.3047 41.8469 45.3142 41.8802 45.3234 41.9132C45.3234 41.9297 45.3326 41.9465 45.3326 41.963L45.3605 42.0629C45.3605 42.0797 45.3605 42.0962 45.3697 42.1127C45.3697 42.146 45.3789 42.1878 45.3884 42.2208V42.2623C45.3976 42.2956 45.4071 42.3374 45.4071 42.3787C45.4163 42.3869 45.4163 42.4037 45.4163 42.4117C45.4249 42.4532 45.4249 42.495 45.4344 42.5363V42.561C45.4436 42.6026 45.4436 42.6527 45.4531 42.6942V42.711C45.4531 42.7608 45.4531 42.8105 45.4623 42.8603V42.8683C45.4623 42.9184 45.4623 42.9682 45.4715 43.0179V43.0259L45.4718 43.1841Z"
                                                                                                fill="#D0D1D3"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M38.7786 37.1787H38.3992C36.6396 37.2202 35.0469 37.8763 33.871 38.9227C33.6948 39.0808 33.5279 39.2471 33.3711 39.4209C32.7509 40.1185 32.2875 40.9324 32.0562 41.8294C31.9437 42.2735 31.8878 42.7277 31.8897 43.1831V43.3407C31.8897 43.3822 31.8897 43.432 31.8989 43.4818V43.4901C31.8989 43.5401 31.8989 43.5899 31.9081 43.6312V43.648C31.9081 43.6895 31.9167 43.7393 31.9262 43.7808V43.7976C31.9262 43.8477 31.9354 43.8889 31.9354 43.9307C31.9446 43.939 31.9446 43.9472 31.9446 43.9555C31.9538 43.997 31.9538 44.0303 31.9633 44.0719C31.9633 44.0884 31.9633 44.0966 31.9725 44.1134C31.9725 44.1467 31.9817 44.1797 31.9912 44.2215C31.9912 44.2298 31.9912 44.2463 32.0004 44.263C32.0004 44.296 32.0096 44.3293 32.0191 44.3541C32.0191 44.3791 32.0283 44.3956 32.0283 44.4204L32.0562 44.4955V44.537C32.0654 44.5453 32.0654 44.5535 32.0654 44.57C32.0768 44.5908 32.083 44.6135 32.0835 44.6366C32.0927 44.6613 32.1022 44.6946 32.1114 44.7197C32.1206 44.7362 32.1206 44.7527 32.1301 44.7695C32.1393 44.811 32.1489 44.8443 32.1673 44.8855C32.2136 45.0434 32.2688 45.1848 32.3338 45.3339C32.5839 45.9137 32.9339 46.4546 33.3711 46.9371C33.5192 47.1032 33.6765 47.2611 33.8526 47.4184C33.8526 47.4105 33.8618 47.4019 33.8713 47.3934C33.9176 47.3436 33.9915 47.2443 34.0103 47.2275C34.0195 46.9701 34.094 46.671 34.1032 46.4218L34.2326 46.3058C34.8994 45.4255 35.3162 44.3376 35.3162 43.1828C35.319 42.5546 35.1999 41.9308 34.9644 41.3392L35.3993 40.9904C35.1954 40.5253 34.8994 40.0769 34.5568 39.6698L34.6126 39.62C34.6491 39.5867 34.6862 39.562 34.7237 39.5287C35.064 39.9406 35.3441 40.39 35.557 40.8658C35.5757 40.9074 35.5941 40.9407 35.6128 40.9819C35.6128 40.9902 35.6128 40.9987 35.622 40.9987C35.6312 41.0402 35.6499 41.0818 35.668 41.1151C35.668 41.123 35.668 41.1398 35.6778 41.1481C35.6864 41.1813 35.7051 41.2143 35.7143 41.2562C35.7235 41.2641 35.7235 41.2809 35.733 41.2892L35.7609 41.389C35.7701 41.4058 35.7797 41.4306 35.7889 41.4553C35.7981 41.4804 35.7981 41.5051 35.8076 41.5301C35.8171 41.5552 35.8263 41.5802 35.8349 41.5964C35.8349 41.6215 35.8441 41.6462 35.8542 41.6712C35.8628 41.7042 35.8628 41.7296 35.8723 41.7543C35.8815 41.7711 35.8815 41.7959 35.891 41.8206C35.9002 41.8456 35.9097 41.8789 35.9189 41.9119C35.9189 41.9284 35.9189 41.9452 35.9281 41.9617C35.9373 41.995 35.9373 42.0283 35.9468 42.0616C35.9468 42.0784 35.956 42.0949 35.956 42.1114C35.9652 42.1447 35.9747 42.1865 35.9747 42.2195C35.9839 42.2363 35.9839 42.2445 35.9839 42.261C35.9931 42.2943 35.9931 42.3361 36.0027 42.3774C36.0027 42.3856 36.0027 42.4024 36.0119 42.4104C36.0119 42.4519 36.0204 42.4937 36.0204 42.535C36.0204 42.5432 36.0303 42.5518 36.0303 42.5597C36.0303 42.6013 36.0388 42.6514 36.0388 42.6929V42.7097C36.048 42.7595 36.048 42.8092 36.048 42.859V42.867C36.0572 42.9171 36.0572 42.9669 36.0572 43.0166V43.1825C36.0572 44.5447 35.5665 45.807 34.724 46.8284C34.4372 47.1189 34.2425 47.3849 34.0667 47.551C34.9371 48.2984 35.937 48.8048 37.1595 49.0458L37.465 48.6056C37.7705 48.6554 38.0852 48.6887 38.4005 48.6967H38.5765C41.9656 48.6967 44.7342 46.2221 44.7342 43.1822C44.7342 42.5347 44.6042 41.9117 44.3824 41.3387L44.8081 40.9899C43.8533 38.8146 41.5193 37.2532 38.7786 37.1787ZM34.6678 42.17C34.7138 42.4189 34.7509 42.6681 34.7789 42.9174C34.7789 43.1831 34.7789 43.4323 34.7509 43.698C34.7151 43.9464 34.6657 44.1931 34.6028 44.4372C34.5304 44.6737 34.4437 44.9066 34.3433 45.1348C34.2262 45.3578 34.0995 45.5768 33.9636 45.7911C33.9362 45.8346 33.9054 45.8762 33.8713 45.9157C33.8434 45.8742 33.8063 45.8326 33.779 45.7911C33.6425 45.5784 33.5188 45.3593 33.4085 45.1348C33.3898 45.1097 33.3806 45.0767 33.3714 45.0517C33.2817 44.8508 33.2044 44.6456 33.1398 44.4372C33.0773 44.193 33.0279 43.9464 32.9917 43.698C32.973 43.432 32.9638 43.1828 32.973 42.9174C32.9917 42.6681 33.0288 42.4189 33.0751 42.17C33.1395 41.9208 33.2141 41.6883 33.3064 41.4556C33.3251 41.4058 33.3435 41.3557 33.3714 41.3145C33.4512 41.1335 33.5407 40.9562 33.6398 40.783C33.714 40.6667 33.7971 40.5589 33.8713 40.4507C33.9551 40.5589 34.0287 40.6667 34.1029 40.783C34.2323 41.0072 34.3341 41.2232 34.4363 41.4556C34.5283 41.6883 34.6028 41.9208 34.6678 42.17ZM44.168 43.698C44.1318 43.9464 44.0824 44.193 44.0199 44.4372C43.9401 44.6727 43.8503 44.9054 43.7509 45.1348C43.6399 45.3589 43.5196 45.5752 43.381 45.7911C43.2322 45.9902 43.0749 46.1897 42.9084 46.3806C42.7327 46.5628 42.5474 46.7374 42.3532 46.9038C42.1488 47.063 41.9353 47.2126 41.7137 47.3521C41.4825 47.485 41.2509 47.6096 41.0099 47.7177C40.751 47.8173 40.5099 47.9086 40.2416 47.9917C39.9763 48.0597 39.7073 48.1152 39.4355 48.1578C39.1393 48.1908 38.8712 48.2076 38.5749 48.2159C38.5191 48.2159 38.4633 48.2159 38.3989 48.2076C38.1729 48.1989 37.9474 48.1823 37.7229 48.1578C37.4447 48.1163 37.1859 48.058 36.9077 47.9917C36.6509 47.9089 36.3977 47.8175 36.1486 47.7177C35.9304 47.6178 35.717 47.5096 35.5091 47.3934C36.5216 46.1776 37.0674 44.7003 37.0647 43.1828C37.0647 41.5802 36.5188 40.1432 35.5275 38.9639C35.6483 38.8891 35.7778 38.8228 35.9072 38.7565C36.1488 38.644 36.3961 38.5415 36.6482 38.4493C36.9086 38.3677 37.1745 38.3011 37.4444 38.2501L38.0093 38.1671C38.1388 38.1588 38.2682 38.1588 38.3986 38.1503H38.8706C39.1481 38.1671 39.4263 38.2001 39.7039 38.2501C39.9744 38.299 40.2405 38.3655 40.5001 38.4493C40.7596 38.5406 41 38.6405 41.2503 38.7565C41.4907 38.8729 41.7131 39.0058 41.9355 39.1469C42.1486 39.2962 42.3425 39.4541 42.5464 39.6203C42.7317 39.8029 42.9077 39.9773 43.0743 40.1685C43.2316 40.3677 43.3804 40.5668 43.5098 40.783C43.6392 41.0072 43.7502 41.2232 43.8524 41.4556C43.9447 41.688 44.0189 41.9208 44.0741 42.17C44.1299 42.4189 44.1671 42.6681 44.1858 42.9174C44.1959 43.1831 44.1867 43.4323 44.168 43.698Z"
                                                                                                fill="#D0D1D3"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M32.1196 45.3345L32.0552 45.3427L31.6197 45.351C31.3522 44.6534 31.2147 43.921 31.2127 43.1834C31.2127 42.0789 31.5181 41.0325 32.0552 40.1105C32.2743 39.7455 32.5283 39.3982 32.8143 39.0726L33.37 38.9978L33.6384 38.9563L33.7685 38.8482C33.6384 38.7318 33.509 38.624 33.37 38.5159C32.9624 38.2086 32.5275 37.9511 32.0552 37.7517C31.2492 37.4029 30.3514 37.212 29.3602 37.1787H28.9903C26.9617 37.2285 25.1657 38.0922 23.9806 39.4129C23.7769 39.6285 23.6012 39.8613 23.4343 40.1019C23.0795 40.6335 22.8172 41.2104 22.6565 41.8129C22.541 42.2623 22.4819 42.7219 22.4805 43.1831C22.4805 43.2332 22.4897 43.2829 22.4897 43.3324V43.4901C22.4989 43.5401 22.4989 43.5899 22.5084 43.6312V43.648C22.5084 43.6895 22.5176 43.7393 22.5176 43.7808V43.7976C22.5268 43.8477 22.5268 43.8889 22.5363 43.9307V43.9555C22.5455 43.997 22.555 44.0303 22.555 44.0719C22.5642 44.0884 22.5642 44.0966 22.5642 44.1134C22.5734 44.1467 22.5826 44.1797 22.5826 44.2215C22.5918 44.2298 22.5918 44.2463 22.5918 44.263C22.601 44.296 22.6102 44.3293 22.6102 44.3541C22.6194 44.3791 22.6194 44.3956 22.6289 44.4204C22.6384 44.4451 22.6381 44.4704 22.6476 44.4955C22.6568 44.512 22.6568 44.5285 22.6568 44.5453C22.666 44.5532 22.666 44.5621 22.666 44.57C22.6752 44.5868 22.6752 44.6116 22.6848 44.6366C22.694 44.6613 22.7031 44.6946 22.7123 44.7197C22.7123 44.7362 22.7216 44.7527 22.7216 44.7695C22.7403 44.811 22.7495 44.8443 22.7587 44.8855C22.8142 45.0434 22.8697 45.1848 22.9347 45.3339C23.0712 45.6536 23.2385 45.962 23.4346 46.2557C23.5998 46.4985 23.7823 46.7315 23.9809 46.9533C24.1198 47.1112 24.2775 47.2608 24.4348 47.4102C24.4811 47.3769 24.5921 47.3103 24.6109 47.2938C24.6197 47.0446 24.6759 46.7541 24.6851 46.4964L24.8332 46.3302C25.5092 45.4417 25.9349 44.3453 25.9441 43.1828C25.9426 42.555 25.8237 41.9318 25.5923 41.3392L26.0186 40.9904C25.8147 40.5253 25.5095 40.0687 25.1666 39.6615L25.2129 39.62C25.2494 39.5867 25.296 39.5537 25.3332 39.5201C25.6797 39.9329 25.963 40.3854 26.1757 40.8655C26.1944 40.9071 26.2128 40.9404 26.2315 40.9816C26.2315 40.9899 26.2315 40.9984 26.2407 40.9984C26.2499 41.0399 26.2594 41.0815 26.2772 41.1148C26.2772 41.1227 26.2864 41.1395 26.2864 41.1478C26.3051 41.1811 26.3143 41.2141 26.3235 41.2559C26.3327 41.2638 26.3327 41.2806 26.3422 41.2889C26.3514 41.3222 26.3609 41.3552 26.3793 41.3887C26.3793 41.4055 26.3885 41.4303 26.398 41.455C26.4072 41.4801 26.4161 41.5048 26.4259 41.5299C26.4262 41.5529 26.4324 41.5756 26.444 41.5961C26.4532 41.6212 26.4532 41.6459 26.4627 41.671C26.4719 41.704 26.4815 41.7293 26.4815 41.754C26.493 41.7746 26.4994 41.7973 26.5002 41.8203C26.5094 41.8454 26.5189 41.8786 26.5281 41.9117C26.5281 41.9282 26.5373 41.9449 26.5373 41.9614C26.5465 41.9947 26.556 42.028 26.556 42.0613C26.5635 42.077 26.5666 42.0941 26.5652 42.1111C26.5744 42.1444 26.5839 42.1862 26.5931 42.2192V42.2607C26.6023 42.294 26.6112 42.3358 26.6112 42.3771C26.6112 42.3853 26.6204 42.4021 26.6204 42.4101C26.6204 42.4516 26.6296 42.4935 26.6391 42.5347V42.5595C26.6391 42.601 26.6483 42.6511 26.6483 42.6926V42.7094C26.6575 42.7592 26.6575 42.809 26.667 42.8588V43.0243C26.6762 43.0744 26.6762 43.1242 26.6762 43.1822C26.6762 44.5524 26.1763 45.815 25.3338 46.8449C25.0835 47.1106 25.1673 47.0608 24.667 47.5342C25.5378 48.2816 26.5189 48.8048 27.7414 49.0455L28.0561 48.6054C28.3616 48.6551 28.6671 48.6884 28.9916 48.6964H29.1676C30.2135 48.6964 31.1955 48.4643 32.0565 48.0489C32.2046 47.9826 32.334 47.9078 32.4726 47.8329L32.6579 47.7416L33.371 47.7086L33.5004 47.7004C33.5842 47.6255 33.6121 47.609 33.6949 47.5342C33.5838 47.4344 33.4725 47.3265 33.371 47.2187C32.828 46.6651 32.4038 46.0263 32.1196 45.3345ZM25.2859 42.1705C25.3417 42.4195 25.3696 42.6687 25.3975 42.9179C25.4067 43.1836 25.3975 43.4329 25.3696 43.6986C25.3417 43.9475 25.2859 44.1885 25.2215 44.4377C25.1491 44.6743 25.0624 44.9071 24.962 45.1353C24.851 45.3595 24.7308 45.5757 24.5918 45.7917C24.5547 45.8332 24.5179 45.883 24.4808 45.9328C24.4457 45.8864 24.4117 45.8394 24.379 45.7917C24.2433 45.5772 24.1167 45.3583 23.9993 45.1353C23.9901 45.1188 23.9901 45.0938 23.9806 45.0773C23.8878 44.868 23.8075 44.6546 23.7398 44.4377C23.6771 44.1936 23.6277 43.947 23.5917 43.6986C23.5637 43.4326 23.5637 43.1834 23.5637 42.9179C23.5917 42.6687 23.6193 42.4195 23.6751 42.1705C23.7398 41.9213 23.814 41.6889 23.8971 41.4562C23.925 41.3981 23.9526 41.3398 23.9806 41.29C24.0548 41.1159 24.1474 40.9498 24.24 40.7836C24.314 40.659 24.3974 40.5426 24.4808 40.4263C24.5639 40.5426 24.6477 40.659 24.7213 40.7836C24.8513 41.0078 24.9623 41.2237 25.0645 41.4562C25.1473 41.6889 25.2215 41.9213 25.2859 42.1705ZM32.0552 47.4856C31.9071 47.5686 31.7583 47.6435 31.5917 47.7183C31.3427 47.8182 31.0894 47.9096 30.8327 47.9923C30.5637 48.0586 30.2956 48.1169 30.0181 48.1584C29.7307 48.1914 29.4531 48.2082 29.166 48.2165C29.1102 48.2165 29.0452 48.2165 28.99 48.2082C28.7638 48.1998 28.5381 48.1832 28.3134 48.1584C28.0388 48.1157 27.7669 48.0602 27.4988 47.9923C27.242 47.9095 26.9888 47.8181 26.7397 47.7183C26.5287 47.6247 26.3244 47.5193 26.1281 47.4028C27.1007 46.2232 27.6837 44.7618 27.6837 43.1837C27.6837 41.5728 27.1279 40.1358 26.1373 38.9568C26.2489 38.8826 26.3665 38.816 26.4891 38.7574C26.733 38.6433 26.9834 38.5407 27.2393 38.4501C27.4996 38.3685 27.7656 38.302 28.0355 38.251L28.5912 38.1679C28.7302 38.1597 28.8596 38.1597 28.9897 38.1511H29.4525C29.7392 38.1679 30.0076 38.2009 30.295 38.251C30.5633 38.3008 30.8228 38.3674 31.0912 38.4501C31.3448 38.5391 31.5923 38.6417 31.8322 38.7574C31.9153 38.7907 31.9895 38.8322 32.0546 38.8738C32.0818 38.8903 32.1098 38.8985 32.1377 38.9153L32.2306 38.9403C32.1748 39.0152 32.1098 39.0814 32.0546 39.1563C31.1654 40.3022 30.6747 41.6727 30.6747 43.1839C30.6729 44.6101 31.1541 46.0031 32.0546 47.1786C32.1189 47.2537 32.1748 47.32 32.2306 47.3945C32.1754 47.4297 32.1167 47.4602 32.0552 47.4856Z"
                                                                                                fill="#D0D1D3"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M23.98 47.2193L23.7488 46.9868C23.6374 46.8622 23.5359 46.7294 23.4338 46.5965C23.1432 46.2014 22.9039 45.7778 22.7207 45.3339L22.656 45.3421L22.2208 45.3504C21.9484 44.6539 21.8105 43.9209 21.8131 43.1828C21.8131 42.0619 22.1186 41.0237 22.656 40.1099C22.878 39.7446 23.1375 39.3958 23.4246 39.0721H23.4338L23.98 38.9972L24.2579 38.9557L24.3876 38.8476C24.2563 38.7298 24.1203 38.6162 23.98 38.507C23.8064 38.3755 23.6239 38.2535 23.4338 38.1417C23.1875 37.9895 22.9273 37.8562 22.656 37.7432C21.8595 37.3944 20.9614 37.2117 19.9892 37.1787H19.6095C19.3178 37.1865 19.0271 37.2114 18.739 37.2533C17.3224 37.4527 16.0443 38.059 15.0629 38.9309C14.8887 39.0938 14.7219 39.2627 14.5626 39.4374C14.3682 39.6615 14.1829 39.8943 14.0259 40.1432C13.6738 40.6664 13.4238 41.2397 13.2665 41.8456C13.154 42.2841 13.098 42.7326 13.0996 43.1825V43.3401C13.0996 43.3817 13.0996 43.4314 13.1092 43.4812V43.4895C13.1092 43.5396 13.1092 43.5893 13.1184 43.6306V43.6474C13.1184 43.6889 13.1276 43.7387 13.1276 43.7802C13.1276 43.7885 13.1276 43.797 13.1368 43.797C13.1368 43.8471 13.146 43.8884 13.146 43.9302C13.146 43.9384 13.1552 43.9467 13.1552 43.9549C13.1552 43.9965 13.1644 44.0298 13.1739 44.0713V44.1128C13.1831 44.1461 13.1923 44.1791 13.2015 44.2209C13.2015 44.2292 13.2015 44.2457 13.2107 44.2625C13.2107 44.2955 13.2199 44.3288 13.2294 44.3535C13.2294 44.3786 13.2386 44.3951 13.2386 44.4198C13.2478 44.4448 13.257 44.4699 13.257 44.4949C13.257 44.5029 13.2662 44.5114 13.2662 44.5114C13.2662 44.5282 13.2754 44.5447 13.2754 44.5695C13.287 44.5901 13.2934 44.6129 13.2941 44.636C13.3033 44.6608 13.3128 44.6941 13.322 44.7191C13.3312 44.7356 13.3312 44.7521 13.3404 44.7689C13.3496 44.8104 13.3591 44.8437 13.368 44.885H13.3772C13.4229 45.0372 13.4785 45.1869 13.5437 45.3333C13.6781 45.6431 13.8392 45.9431 14.0256 46.2304C14.1842 46.4748 14.3636 46.708 14.5623 46.9277C14.7191 47.1016 14.8861 47.268 15.0626 47.4261C15.0717 47.4261 15.0717 47.4344 15.0809 47.4344C15.1181 47.4676 15.146 47.3345 15.1828 47.3595L15.2291 46.5371C15.2941 46.4292 15.3309 46.3712 15.3956 46.3132C16.102 45.3909 16.4856 44.3007 16.4976 43.1819C16.4976 42.5344 16.3774 41.9114 16.1458 41.3384L16.5718 40.9896C16.3774 40.533 16.0811 40.0928 15.7477 39.6857C15.7753 39.6689 15.794 39.6442 15.8216 39.6194C15.8496 39.5944 15.8867 39.5694 15.9143 39.5446C16.2495 39.9522 16.5263 40.3959 16.7384 40.8653C16.7571 40.9068 16.7663 40.9401 16.7847 40.9813C16.7939 40.9896 16.7939 40.9981 16.7939 40.9981C16.8126 41.0397 16.831 41.0812 16.8402 41.1145C16.8494 41.1224 16.8494 41.1392 16.8494 41.1475C16.8681 41.1808 16.877 41.2138 16.8957 41.2556C16.8957 41.2636 16.9049 41.2803 16.9049 41.2886C16.9233 41.3219 16.9325 41.3549 16.942 41.3885C16.9535 41.4091 16.9598 41.4317 16.9604 41.4547L16.9883 41.5296C16.9975 41.5546 17.0071 41.5796 17.0071 41.5959L17.0347 41.6707C17.0354 41.6991 17.0416 41.7272 17.0531 41.7538C17.0623 41.7705 17.0623 41.7953 17.0718 41.82C17.081 41.8451 17.081 41.8784 17.0905 41.9114C17.0997 41.9279 17.0997 41.9447 17.0997 41.9612L17.1273 42.061C17.1273 42.0778 17.1365 42.0943 17.1365 42.1108C17.1457 42.1441 17.1457 42.1859 17.1552 42.2189C17.1552 42.2357 17.1644 42.2439 17.1644 42.2604C17.1644 42.2937 17.1736 42.3356 17.1831 42.3768V42.4098C17.1923 42.4513 17.1923 42.4932 17.2015 42.5344V42.5592C17.2107 42.6007 17.2107 42.6508 17.2199 42.6923V42.7091C17.2199 42.7589 17.2291 42.8087 17.2291 42.8585V42.8664C17.2291 42.9165 17.2383 42.9663 17.2383 43.0161V43.1819C17.2383 44.5359 16.7476 45.7979 15.9143 46.8196C15.6551 47.1268 15.4515 47.3678 15.2291 47.5669C16.1067 48.3058 17.1918 48.8168 18.3682 49.0452L18.6737 48.6051C18.6944 48.6118 18.7164 48.6147 18.7384 48.6133C19.0255 48.6631 19.3126 48.6882 19.6088 48.6961H19.7846C20.8219 48.6961 21.8033 48.464 22.6553 48.0568C22.7664 48.0071 22.8682 47.9487 22.97 47.8989L23.2292 47.7496L23.4328 47.7328L23.9791 47.6913L24.0809 47.683C24.1643 47.5999 24.1919 47.6082 24.2845 47.5337L24.229 47.4836L23.98 47.2193ZM15.8499 42.17C15.8962 42.4189 15.9333 42.6681 15.9517 42.9174C15.9609 43.1831 15.9517 43.4323 15.9333 43.698C15.8973 43.9464 15.8478 44.1931 15.7852 44.4372C15.7112 44.6781 15.6186 44.9023 15.5165 45.1348C15.4055 45.3589 15.2852 45.5752 15.1463 45.7911C15.1187 45.8241 15.0908 45.8574 15.0629 45.8989C15.0437 45.8601 15.0187 45.8238 14.9886 45.7911C14.8524 45.5783 14.7288 45.3593 14.6185 45.1348L14.5629 45.0101C14.4821 44.8222 14.4111 44.631 14.3501 44.4372C14.2871 44.1931 14.2377 43.9465 14.202 43.698C14.1832 43.432 14.1744 43.1828 14.1832 42.9174C14.202 42.6681 14.2388 42.4189 14.2851 42.17C14.3501 41.9208 14.424 41.6883 14.5166 41.4556C14.5258 41.4141 14.5442 41.3808 14.5629 41.3475C14.6464 41.1566 14.7482 40.9739 14.85 40.783C14.9239 40.6749 14.989 40.5668 15.0629 40.4675C15.1368 40.5671 15.211 40.6749 15.2852 40.783C15.4055 41.0072 15.5165 41.2232 15.6186 41.4556C15.7109 41.6883 15.7852 41.9208 15.8499 42.17ZM22.656 47.5015C22.5139 47.5784 22.3687 47.6505 22.2208 47.7177C21.9616 47.8173 21.7208 47.9086 21.4522 47.9917C21.1838 48.058 20.9151 48.1163 20.6372 48.1578C20.3502 48.1908 20.0818 48.2076 19.7852 48.2159C19.7297 48.2159 19.665 48.2159 19.6095 48.2076C19.3835 48.1989 19.158 48.1823 18.9335 48.1578C18.8688 48.1496 18.8037 48.1328 18.739 48.1246C18.5354 48.083 18.3314 48.0415 18.1186 47.9917C17.8617 47.9089 17.6084 47.8175 17.3592 47.7177C17.1279 47.6096 16.9148 47.5015 16.7016 47.3854C17.7069 46.17 18.2491 44.6965 18.248 43.1831C18.248 41.5805 17.7018 40.152 16.7108 38.9725C16.8434 38.8957 16.9794 38.8236 17.1184 38.7565C17.3582 38.6409 17.6055 38.5383 17.8591 38.4493C18.1195 38.3677 18.3854 38.3012 18.6553 38.2501L18.7387 38.2334L19.211 38.1671C19.35 38.1588 19.4797 38.1588 19.6091 38.1503H20.072C20.359 38.1671 20.6366 38.2001 20.9145 38.2501C21.1924 38.2999 21.4515 38.3665 21.711 38.4493C21.9668 38.5398 22.2171 38.6424 22.4609 38.7565C22.5256 38.7898 22.5906 38.8228 22.6553 38.8564C22.6924 38.8812 22.7292 38.8979 22.7572 38.9144L22.7943 38.956C22.748 39.014 22.7016 39.0638 22.6553 39.1218C21.7478 40.2763 21.2755 41.6547 21.2755 43.1828C21.2751 44.6113 21.7561 46.0066 22.6553 47.1857C22.72 47.2608 22.7756 47.3268 22.8311 47.4019C22.7742 47.4372 22.7158 47.4704 22.656 47.5015Z"
                                                                                                fill="#D0D1D3"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-e80d6a4 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="e80d6a4" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1673"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                transform="matrix(-1 0 0 1 99 0)"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1673)">
                                                                                            <path
                                                                                                d="M76.942 31.6178C78.5261 31.0396 80.3967 31.5347 81.4737 32.8018C82.5728 34.0965 82.7586 35.9818 81.8611 37.4334C80.9636 38.888 79.2221 39.6107 77.5246 39.3001C75.6508 38.9557 74.3471 37.3134 74.2463 35.502C74.2431 35.4651 74.24 35.4251 74.24 35.3851C74.24 35.3359 74.2431 35.2898 74.2494 35.2437C74.3376 33.6198 75.358 32.1929 76.942 31.6178ZM78.3434 37.7501C79.6692 37.747 80.7683 36.6707 80.7652 35.3759C80.762 34.0812 79.6598 33.0048 78.334 33.0109C76.983 33.0171 75.9406 34.0873 75.9122 35.3851C75.9437 36.6799 76.9955 37.7532 78.3434 37.7501Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M75.5784 27.7715C78.8945 26.5628 82.8153 27.6023 85.0544 30.2749C87.325 32.9874 87.6746 36.8931 85.7945 39.9039C83.9364 42.884 80.3337 44.4063 76.8349 43.7574C72.8701 43.0224 70.02 39.5041 69.9728 35.6076C70.0011 32.117 72.2276 28.9924 75.5784 27.7715ZM76.1201 41.8722C78.8662 42.8379 81.9241 42.0198 83.7979 39.8424C85.6433 37.6989 85.8386 34.522 84.3742 32.1416C82.9098 29.7643 79.9747 28.4634 77.1782 29.0201C73.9723 29.6598 71.6734 32.4153 71.645 35.6045C71.6797 38.357 73.4369 40.9311 76.1201 41.8722Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.4159 31.7135C26 31.1353 27.8706 31.6304 28.9476 32.8975C30.0467 34.1923 30.2325 36.0775 29.335 37.5291C28.4374 38.9837 26.6959 39.7064 24.9985 39.3958C23.1247 39.0514 21.8209 37.4091 21.7202 35.5977C21.717 35.5608 21.7139 35.5208 21.7139 35.4808C21.7139 35.4316 21.717 35.3855 21.7233 35.3394C21.8115 33.7155 22.8318 32.2916 24.4159 31.7135ZM25.8173 37.8458C27.1431 37.8427 28.2422 36.7664 28.2391 35.4716C28.2359 34.1769 27.1337 33.1005 25.8079 33.1066C24.4568 33.1128 23.4144 34.183 23.3861 35.4808C23.4207 36.7756 24.4694 37.8489 25.8173 37.8458Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M23.0526 27.8672C26.3688 26.6586 30.2896 27.698 32.5287 30.3706C34.7992 33.0831 35.1488 36.9888 33.2687 39.9996C31.4107 42.9797 27.808 44.502 24.3092 43.8531C20.3443 43.1181 17.4942 39.5998 17.447 35.7033C17.4785 32.2127 19.7019 29.0912 23.0526 27.8672ZM23.5943 41.971C26.3404 42.9366 29.3983 42.1186 31.2721 39.9412C33.1176 37.7976 33.3128 34.6208 31.8484 32.2404C30.384 29.8631 27.449 28.5622 24.6524 29.1189C21.4465 29.7586 19.1476 32.5141 19.1192 35.7033C19.1539 38.4527 20.9112 41.0268 23.5943 41.971Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M87.1265 17.8149C87.1265 17.6611 87.2525 17.5535 87.4037 17.5412C89.5042 17.3905 93.7494 17.5781 93.8155 20.3951C93.8186 20.5428 93.6864 20.6688 93.5384 20.6688C91.5229 20.6719 89.5074 20.675 87.4919 20.6811C87.4068 20.6811 87.3439 20.6504 87.2966 20.6043C87.2966 20.6043 87.2935 20.6043 87.2935 20.6012C87.0226 20.389 87.1423 19.5586 87.136 19.2726C87.1297 18.7867 87.1265 18.3008 87.1265 17.8149ZM87.7375 20.2629C87.7438 20.269 87.747 20.2752 87.7501 20.2813C87.7501 20.2783 87.7469 20.269 87.7343 20.2567C87.7343 20.2598 87.7375 20.2598 87.7375 20.2629ZM87.6903 19.002C87.6934 19.2788 87.6997 19.5525 87.7092 19.8293C87.7123 19.9277 87.7312 20.0353 87.7281 20.1368C89.5609 20.1337 91.3969 20.1307 93.2297 20.1276C93.003 18.8205 91.3811 18.3838 90.197 18.2024C89.3751 18.0763 88.5217 18.0332 87.684 18.0732C87.6871 18.3808 87.6871 18.6914 87.6903 19.002Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M7.95826 18.1907C9.00066 17.6525 11.3311 16.9667 12.0271 18.3844C12.6349 19.6177 11.0729 20.8816 10.1281 21.3891C9.03845 21.9765 6.79306 22.65 5.99315 21.2722C5.98055 21.2507 5.97112 21.2292 5.96482 21.2076C5.96482 21.2076 5.96482 21.2076 5.96482 21.2046C5.41056 19.9344 6.97256 18.7012 7.95826 18.1907ZM6.4813 21.0108C7.12374 22.078 9.12978 21.3214 9.92653 20.8755C10.5721 20.5157 11.9893 19.4916 11.5106 18.5905C11.265 18.1292 10.5784 18.083 10.1155 18.1107C9.40062 18.1538 8.69834 18.4029 8.08109 18.7473C7.36622 19.1471 6.12858 20.0636 6.4813 21.0108Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M52.6106 18.9249L54.897 18.9219C55.2654 18.9219 55.5677 19.214 55.5677 19.5739C55.5677 19.9337 55.2686 20.2289 54.9001 20.2289L52.6138 20.232C52.2453 20.232 51.943 19.9398 51.943 19.58C51.943 19.2202 52.2453 18.9249 52.6106 18.9249Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M37.5834 9.49583C39.2305 7.98889 40.8933 6.50348 42.5372 4.99961C43.4662 4.1508 44.5023 3.56647 45.7714 3.36042C46.6973 3.20972 47.6294 3.20972 48.5648 3.20665C50.6055 3.20357 52.6462 3.2005 54.6869 3.19435C55.8899 3.19128 57.0079 3.63721 57.4173 4.84892C57.6408 5.51013 57.5369 6.33433 57.5401 7.02014C57.5432 8.13959 57.5432 9.25595 57.5464 10.3754C57.5464 11.0458 57.6188 11.7563 57.5117 12.4236C57.3196 13.6507 56.2394 14.4257 55.0081 14.4442C54.5514 14.4503 54.0948 14.4472 53.6382 14.4472C51.6857 14.4503 49.73 14.4534 47.7775 14.4564C44.0456 14.4626 40.3075 14.5364 36.5757 14.478C36.5032 14.478 36.4308 14.478 36.3615 14.478C36.3111 14.478 36.2639 14.4749 36.2167 14.4657C35.4797 14.3857 34.8688 13.9429 34.8436 13.1494C34.8184 12.3929 35.2939 11.6578 35.7978 11.1227C36.3458 10.5476 36.9945 10.031 37.5834 9.49583ZM45.0124 12.8326C48.3254 12.8265 51.6416 12.8142 54.9546 12.8142C55.4805 12.8142 55.8489 12.5466 55.8773 12.0023C55.9151 11.3011 55.8741 10.5845 55.8741 9.88026C55.871 8.85308 55.871 7.82589 55.8678 6.79871C55.8678 6.34047 56.0221 5.48244 55.6883 5.09494C55.3293 4.67669 54.4885 4.82431 53.9972 4.82739C52.9642 4.83046 51.9313 4.83047 50.8984 4.83354C50.0134 4.83662 49.1316 4.83661 48.2467 4.83968C47.3618 4.84276 46.4642 4.83354 45.6013 5.05804C44.5904 5.31945 43.926 5.9376 43.1891 6.65417C42.3923 7.4261 41.5325 8.11806 40.7137 8.86538C39.4918 9.98175 38.1849 11.0489 37.026 12.2299C36.8497 12.4082 36.689 12.6204 36.5883 12.848C39.4005 12.8419 42.2065 12.8357 45.0124 12.8326Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M60.714 5.8718C60.714 5.23519 60.7139 4.62626 61.0824 4.05731C61.5926 3.27308 62.4397 3.00245 63.3404 3.00245C64.9276 2.99938 66.5117 2.99629 68.0989 2.99322C69.9065 2.99014 71.6197 3.12239 73.2605 3.96197C75.4303 5.07527 77.0647 7.14809 77.597 9.48539C77.8079 10.4203 77.9308 11.5305 77.7765 12.487C77.5907 13.6279 76.5955 14.3691 75.446 14.4091C74.4099 14.446 73.3644 14.4122 72.3283 14.4152C69.2767 14.4214 66.2251 14.4275 63.1735 14.4306C63.142 14.4337 63.1074 14.4337 63.0727 14.4306C63.0129 14.4306 62.9531 14.4245 62.8995 14.4152C61.6682 14.283 60.7769 13.3665 60.7266 12.1302C60.7077 11.6597 60.7234 11.183 60.7234 10.7125C60.7203 9.10096 60.7171 7.48638 60.714 5.8718ZM63.0664 12.8007C65.4126 12.7976 67.7556 12.7914 70.1018 12.7884C71.5158 12.7853 72.933 12.7822 74.347 12.7791C74.6839 12.7791 75.0272 12.7945 75.3673 12.776C75.9436 12.7484 76.1389 12.4101 76.1389 11.8842C76.1357 9.87596 75.6067 8.0338 74.1108 6.57914C72.7724 5.27825 70.993 4.62011 69.1161 4.62011C67.7651 4.62011 66.4109 4.62625 65.0599 4.62625C64.4552 4.62625 63.8537 4.62933 63.2491 4.62933C62.7861 4.62933 62.424 4.78925 62.3862 5.30284C62.2854 6.65602 62.3925 8.05532 62.3956 9.41464C62.3956 10.1527 62.3988 10.8908 62.3988 11.6289C62.3988 12.1333 62.3579 12.7668 63.0664 12.8007Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M0.859772 27.3956C0.784195 27.1711 0.746368 26.9251 0.746368 26.6668C0.746368 25.9164 0.570023 24.8923 0.954231 24.2064C1.31009 23.5729 2.01552 23.2746 2.6863 23.3515C2.6863 22.7948 2.69575 22.2413 2.72094 21.6908C2.90044 18.0833 5.98355 15.2324 9.665 15.1801C10.7357 15.1771 11.8033 15.1771 12.8741 15.174C14.4865 15.1709 16.102 15.1678 17.7176 15.1648C17.8278 15.1002 17.9632 15.0571 18.1207 15.0479C19.1221 14.9987 19.8622 14.8849 20.8227 14.7004C22.5863 14.3652 24.3845 13.8608 25.8929 12.8767C26.6677 12.3692 27.1652 11.7449 27.6565 10.9853C28.321 9.95814 29.0642 8.97708 29.8704 8.05446C31.3443 6.36914 33.0795 4.8991 34.9911 3.70277C39.0977 1.13174 43.8782 -0.0307577 48.7154 0.0153732C51.3041 0.0399764 53.8927 0 56.4814 0C58.6921 0 60.906 0.0922686 63.1168 0.141475C64.6757 0.175304 66.2471 0.15378 67.8029 0.298323C70.5994 0.562807 73.3959 1.12866 75.994 2.18352C79.1621 3.47211 82.1665 5.6741 83.0325 9.08471C83.5742 11.2221 84.2261 13.3134 86.4053 14.4451C87.1958 14.8572 88.0776 15.011 88.9688 15.0172C89.0255 15.0172 89.0822 15.0233 89.1326 15.0325C89.2932 15.0325 89.4506 15.0325 89.6112 15.0325C91 15.0295 92.3542 15.3001 93.5541 16.0167C94.9681 16.8624 96.0388 18.1817 96.5679 19.7164C96.886 20.642 96.9143 21.5924 96.9174 22.555C96.9174 22.9148 96.9206 23.2746 96.9206 23.6344C97.5032 23.5268 98.1362 23.6959 98.5613 24.1818C99.1439 24.8492 98.977 25.8579 98.9802 26.6698C98.9802 27.1188 98.9991 27.5617 98.7692 27.9707C98.47 28.5028 97.878 28.8503 97.2576 28.8503C97.1222 28.8441 96.993 28.8257 96.8734 28.798C96.7411 29.8006 96.3852 30.757 95.8499 31.6028C95.9506 31.6427 96.0262 31.735 96.0199 31.8488C95.9191 33.5679 95.579 35.4439 93.7934 36.2036C92.5243 36.7418 91.2551 36.6587 89.9041 36.6618C89.8758 36.6618 89.8506 36.6556 89.8254 36.6495L87.6871 36.6526C87.7815 34.835 87.3469 32.9867 86.3801 31.3967C84.3898 28.1214 80.3934 26.3254 76.5923 27.0942C73.188 27.78 70.5364 30.2496 69.516 33.3896C69.4404 33.6756 69.3775 33.9647 69.3302 34.2599C69.3176 34.3429 69.283 34.4198 69.2357 34.4906C69.1287 35.038 69.072 35.6008 69.0657 36.1728C69.0688 36.345 69.0751 36.5172 69.0877 36.6895L66.4392 36.7848V36.7817C63.4128 36.8678 60.3833 36.8156 57.3569 36.8217C52.315 36.8309 47.273 36.8402 42.2343 36.8494C41.0502 36.8525 39.8629 36.8525 38.6788 36.8555C38.6725 36.8555 38.6662 36.8525 38.6599 36.8525L36.8712 36.8555V36.8371L35.2556 36.8402C35.3028 36.0775 35.2556 35.3117 35.117 34.5582C35.0667 34.4875 35.0289 34.4075 35.0163 34.3214C34.9375 33.8632 34.8273 33.4172 34.6824 32.9805C34.4903 32.4669 34.251 31.9687 33.9644 31.4921C31.9898 28.2168 28.0281 26.4207 24.2553 27.1896C19.9283 28.0691 16.8263 31.8734 16.7885 36.2651C16.7917 36.468 16.8011 36.671 16.8169 36.8709L14.5557 36.874C14.5557 36.8678 14.5557 36.8617 14.5557 36.8555C14.1904 36.8648 13.8251 36.8771 13.4598 36.8863C13.4409 36.8924 13.4189 36.8955 13.4 36.8955C11.8065 36.8986 10.2161 36.9048 8.6226 36.9078C6.86219 36.9109 4.69237 36.8033 3.63737 35.1917C2.85007 33.9893 2.97917 32.427 3.22796 31.083C3.22796 31.0553 3.23428 31.0277 3.24372 31.0031C3.25632 30.9477 3.28151 30.9077 3.31615 30.877C3.20277 30.6217 3.10202 30.3572 3.02014 30.0897L1.45183 30.0927C0.655075 30.0927 0 29.4592 0 28.6811C0.00630188 28.1153 0.359047 27.6201 0.859772 27.3956ZM97.2607 28.309C98.4763 28.3059 98.4291 27.1096 98.4291 26.2731C98.4259 25.4151 98.5173 24.1388 97.2544 24.1357C97.1347 24.1357 97.0277 24.148 96.93 24.1695C96.9363 25.4458 96.9458 26.719 96.9332 27.9953C96.9332 28.0845 96.93 28.1737 96.9237 28.2629C97.0245 28.2844 97.1379 28.3029 97.2607 28.309ZM32.7646 7.45783C31.9269 8.22668 31.149 9.06012 30.4404 9.94276C30.1885 10.2564 29.9618 10.5824 29.7382 10.9146C33.0543 9.69057 35.876 7.31944 37.3845 4.22867C35.7091 5.10516 34.1534 6.18154 32.7646 7.45783ZM61.0005 32.8914C61.8886 32.8883 62.7735 32.8883 63.6616 32.8852C64.5339 27.9646 68.798 24.3694 73.5596 23.0163C78.8944 21.5001 84.9567 22.598 89.1231 26.2669C90.9465 27.8754 92.3322 29.9544 92.9557 32.2732C93.6611 31.7965 94.25 31.1568 94.6626 30.4034C95.1507 29.5115 95.2641 28.5612 95.2641 27.5679C95.261 26.5745 95.2609 25.5811 95.2578 24.5909C95.2547 22.5857 95.5066 20.4821 94.2154 18.763C93.173 17.376 91.526 16.6625 89.7907 16.6625C88.3295 16.6625 86.8683 16.6686 85.4102 16.6717C82.3617 16.6779 79.3101 16.684 76.2617 16.6871C72.1488 16.6933 68.0359 16.7025 63.923 16.7086C62.4618 16.7117 60.9974 16.7148 59.5361 16.7178V17.0592C59.5361 17.3422 59.3377 17.582 59.0701 17.6558C59.0732 19.3012 59.0763 20.9465 59.0795 22.5919C59.3188 22.681 59.4889 22.9056 59.492 23.167L59.4952 25.2982C59.4952 25.5627 59.3251 25.7872 59.0858 25.8764C59.0889 27.6909 59.0921 29.5054 59.0952 31.3198C59.0952 31.7166 59.1141 32.1133 59.0984 32.51C59.0921 32.6453 59.0763 32.7714 59.048 32.8944C59.6967 32.8944 60.3486 32.8944 61.0005 32.8914ZM33.1771 17.3022C33.1803 19.5042 33.1866 21.7092 33.1897 23.9112C34.5218 24.5017 35.7689 25.2705 36.8806 26.2239C38.9181 27.9707 40.3888 30.3142 40.8644 32.9313C43.4027 32.9252 45.9409 32.9221 48.4792 32.916C51.8016 32.9098 55.1209 32.9037 58.4434 32.8975C58.5378 32.5777 58.5378 32.224 58.5347 31.8457C58.5315 29.8559 58.5284 27.8631 58.5221 25.8733C58.2922 25.781 58.1253 25.5596 58.1253 25.3013L58.1221 23.17C58.1221 22.9117 58.2859 22.6903 58.5158 22.598C58.5126 20.9342 58.5095 19.2735 58.5063 17.6097C58.3048 17.5052 58.1662 17.2991 58.1662 17.0654V16.7271C55.4358 16.7332 52.7055 16.7363 49.9751 16.7425C45.3205 16.7517 40.6691 16.7609 36.0146 16.7671C35.0698 16.7701 34.1219 16.7701 33.1771 16.7732C33.1771 16.9485 33.1771 17.1269 33.1771 17.3022ZM33.174 15.1371C33.2873 15.1371 33.3976 15.1371 33.5109 15.1371C38.2001 15.1279 42.8893 15.1186 47.5754 15.1125C51.1057 15.1063 54.6328 15.1002 58.1631 15.094V14.9341C58.1631 14.6973 58.3016 14.4913 58.5 14.3867C58.4969 13.4579 58.4969 12.5292 58.4937 11.6004C58.4937 11.5081 58.4937 11.4128 58.4937 11.3205C58.4937 11.3175 58.4937 11.3174 58.4937 11.3144C58.4906 9.2231 58.4843 7.13185 58.4811 5.04058C58.4811 4.73304 58.5095 4.39474 58.4434 4.09335C58.2292 3.11845 57.2214 2.63561 56.283 2.61101C55.3949 2.58948 54.4942 2.57103 53.6093 2.5741C51.4363 2.57718 49.2634 2.57717 47.0904 2.5864C45.4811 2.59255 43.9097 2.84167 42.5272 3.69047C40.9337 4.66845 39.6803 6.14156 38.367 7.4363C36.7861 8.9986 35.1863 10.5394 33.5928 12.0925C33.2023 12.4984 33.1834 12.9628 33.1834 13.4948C33.1834 13.5563 33.2149 13.7809 33.1803 13.9223C33.1992 14.0453 33.1677 14.3959 33.1677 14.439C33.174 14.6727 33.174 14.9065 33.174 15.1371ZM32.6984 13.6794C32.6795 13.6671 32.6323 13.4795 32.6323 13.418C32.6323 13.1934 32.6386 12.9659 32.6732 12.7444C32.7394 12.3354 32.9157 12.0125 33.2055 11.7111C34.6572 10.2934 36.1122 8.87867 37.564 7.46091C38.8772 6.17847 40.1117 4.76994 41.5918 3.66894C43.0405 2.59256 44.719 2.11587 46.5267 2.05128C48.8067 1.96825 51.0994 2.0359 53.3825 2.02975C54.3021 2.02668 55.2217 2.0636 56.1476 2.06668C57.6088 2.06975 59.0008 2.91855 59.0449 4.45932C59.1078 6.73819 59.0543 9.02629 59.0574 11.3082C59.0574 11.3082 59.0574 11.3113 59.0574 11.3144C59.0606 12.3231 59.0606 13.3288 59.0637 14.3375C59.3314 14.4082 59.5298 14.6481 59.5298 14.931V15.091C60.3203 15.091 61.1108 15.0879 61.9044 15.0879C66.1905 15.0787 70.4765 15.0725 74.7626 15.0633C77.9654 15.0571 81.1682 15.051 84.3709 15.0448C84.1662 14.8726 83.9678 14.6881 83.782 14.4882C82.8026 13.4364 82.1318 12.1355 81.7256 10.7762C81.4736 9.9366 81.3792 9.08472 80.9855 8.28204C80.2958 6.87043 79.1338 5.75714 77.7985 4.91755C75.2256 3.2999 72.1456 2.51874 69.1476 2.08819C68.7728 2.03283 68.8484 2.04514 68.4894 2.00209C68.2469 1.97441 68.0044 1.94673 67.7588 1.9252C67.4627 1.89752 67.1699 1.87291 66.8738 1.85753C66.3322 1.82985 65.7842 1.82985 65.2425 1.81755C60.2038 1.70684 55.1807 1.63304 50.142 1.64227C48.8854 1.64534 47.6226 1.58997 46.3661 1.68531C45.0906 1.78065 44.0325 1.94672 42.7098 2.26041C41.4155 2.56795 40.1432 2.98006 38.9213 3.4998C37.9702 6.33839 35.6744 8.88789 33.1771 10.4748C31.8198 11.3359 30.3113 11.9602 28.7524 12.3723C28.6296 12.5415 28.5068 12.7075 28.3745 12.8675C27.5305 13.9008 26.3496 14.6204 25.0993 15.1494C27.5935 15.1463 30.0909 15.1402 32.5851 15.1371C32.5913 14.6758 32.6071 14.2145 32.6386 13.7593C32.6417 13.7286 32.6827 13.7009 32.6984 13.6794ZM4.3995 27.6663C4.67033 27.9246 4.84036 28.2813 4.84036 28.6781C4.84036 28.9764 4.7459 29.2532 4.58215 29.4807C4.75535 30.1296 5.05137 30.7447 5.47967 31.2921C6.08117 32.0641 6.89998 32.6484 7.81641 32.9929C7.91088 32.9898 8.00535 32.9898 8.09982 32.9898C9.19576 32.9867 10.2885 32.9867 11.3845 32.9836C12.2599 28.0353 16.5681 24.431 21.3581 23.0932C25.0269 22.069 29.0957 22.2597 32.6323 23.6744C32.6292 22.1275 32.626 20.5775 32.6228 19.0305C32.6228 18.2832 32.6008 17.5267 32.5882 16.7732C29.5838 16.7794 26.5795 16.7855 23.5751 16.7886C20.5078 16.7947 17.4404 16.8009 14.3762 16.804C12.874 16.807 11.3656 16.8347 9.8634 16.8132C9.79726 16.8132 9.73428 16.8132 9.66815 16.8132C6.95982 16.8501 4.56641 18.9291 4.3995 21.6139C4.30502 23.1485 4.3932 24.7108 4.39635 26.2454C4.3995 26.719 4.39635 27.1927 4.3995 27.6663ZM1.41089 27.2726C1.42664 27.2726 1.4392 27.2695 1.45494 27.2695L2.72094 27.2664C2.72409 27.0881 2.72409 26.9128 2.72409 26.7344C2.72094 25.7903 2.69576 24.8369 2.68945 23.8866C2.62017 23.8774 2.54775 23.8712 2.46902 23.8712C1.25343 23.8681 1.30064 25.0737 1.30064 25.9071C1.30379 26.35 1.28177 26.8605 1.41089 27.2726Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-f9e2713"
                                                                data-id="f9e2713" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b38508c elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="b38508c" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="50"
                                                                                        viewBox="0 0 50 50" fill="none">
                                                                                        <mask id="mask0_611_1658"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="50"
                                                                                            height="50">
                                                                                            <rect width="50" height="50"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_611_1658)">
                                                                                            <mask id="mask1_611_1658"
                                                                                                style="mask-type:alpha"
                                                                                                maskUnits="userSpaceOnUse"
                                                                                                x="0" y="0" width="50"
                                                                                                height="50">
                                                                                                <rect width="50"
                                                                                                    height="50"
                                                                                                    fill="#D9D9D9">
                                                                                                </rect>
                                                                                            </mask>
                                                                                            <g
                                                                                                mask="url(#mask1_611_1658)">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M25.0001 0C38.7697 0 50.0001 11.2304 50.0001 25C50.0001 38.7697 38.7697 50 25.0001 50C11.2306 50 0 38.7697 0 25C0 11.2304 11.2306 0 25.0001 0Z"
                                                                                                    fill="black"></path>
                                                                                                <path
                                                                                                    d="M10.4754 17.5024L4.57617 12.4284L6.78518 9.86009C7.23473 9.3375 7.65551 8.97042 8.04501 8.75656C8.43701 8.54236 8.83356 8.45352 9.23568 8.48889C9.63621 8.52313 9.97406 8.65566 10.2461 8.88954C10.4973 9.10567 10.6664 9.38972 10.7518 9.74042C10.8388 10.0895 10.8116 10.485 10.6737 10.9232C11.1342 10.5988 11.5856 10.4354 12.0287 10.4285C12.4733 10.4228 12.8672 10.5676 13.2106 10.863C13.482 11.0942 13.6874 11.3932 13.8059 11.7295C13.9269 12.0692 13.9656 12.3938 13.9235 12.704C13.8814 13.0142 13.7623 13.347 13.5706 13.7032C13.3789 14.0595 13.0954 14.4559 12.7199 14.8925L10.4754 17.5024ZM7.83513 13.6543L9.10805 12.1743C9.45204 11.7742 9.67671 11.4659 9.78216 11.2517C9.92026 10.9715 9.97224 10.7138 9.93493 10.4794C9.89751 10.245 9.77659 10.0385 9.57046 9.86112C9.37549 9.69333 9.15582 9.59869 8.91421 9.57946C8.67009 9.56069 8.43405 9.62929 8.20654 9.78285C7.97767 9.93802 7.65142 10.2615 7.2278 10.754L6.05214 12.121L7.83513 13.6543ZM10.5588 15.9968L12.0236 14.2938C12.2757 14.0007 12.4429 13.7868 12.5264 13.6534C12.6729 13.4164 12.7687 13.1965 12.8137 12.9915C12.8602 12.7875 12.8491 12.5783 12.7844 12.3646C12.7169 12.1513 12.5918 11.9634 12.4036 11.8015C12.184 11.6125 11.9368 11.5135 11.6609 11.5037C11.3866 11.495 11.1163 11.5785 10.8502 11.7546C10.5871 11.93 10.2663 12.2362 9.89216 12.6712L8.53154 14.2532L10.5588 15.9968ZM20.2838 8.78614V2.11328H22.043L24.1312 6.83786C24.3243 7.27763 24.4662 7.60695 24.5525 7.82605C24.6532 7.58363 24.8094 7.22622 25.023 6.75561L27.1358 2.11328H28.708V8.78614H27.5818V3.20078L25.0169 8.78614H23.9626L21.4099 3.10591V8.78614H20.2838ZM36.2419 12.6826L40.3249 7.14636L40.882 7.83401L38.1169 11.3526C37.8323 11.7183 37.537 12.0756 37.2313 12.4239C37.8891 12.1057 38.2683 11.9236 38.3729 11.8778L42.6463 10.0112L43.3019 10.8203L41.2714 13.6672C40.7694 14.3748 40.265 15.0006 39.7602 15.5445C40.1382 15.3438 40.5827 15.1242 41.0895 14.8853L45.0566 12.9855L45.6033 13.6601L39.305 16.4625L38.7813 15.8161L41.8569 11.5555C42.1143 11.1984 42.2736 10.9815 42.3349 10.9045C42.0544 11.0436 41.8121 11.1579 41.6073 11.2477L36.7962 13.3665L36.2419 12.6826Z"
                                                                                                    fill="white"></path>
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M39.7679 25.2476C39.7679 33.2452 33.2452 39.7679 25.2476 39.7679V25.2476H39.7679Z"
                                                                                                    fill="#00ACEC">
                                                                                                </path>
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M39.7679 24.7525C39.7679 16.755 33.2452 10.2322 25.2476 10.2322V24.7525H39.7679Z"
                                                                                                    fill="white"></path>
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M10.2322 24.7525C10.2322 16.755 16.7549 10.2322 24.7525 10.2322V24.7525H10.2322Z"
                                                                                                    fill="#00ACEC">
                                                                                                </path>
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M10.2322 25.2476C10.2322 33.2452 16.7549 39.7679 24.7525 39.7679V25.2476H10.2322Z"
                                                                                                    fill="white"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3b94b4e elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="3b94b4e" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1661"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1661)">
                                                                                            <path
                                                                                                d="M73.1722 31.9441C76.1409 31.0416 79.6529 31.8258 81.6551 33.8209C83.6732 35.8314 83.9954 38.7161 82.3531 40.9631C80.7045 43.2205 77.4516 44.3723 74.2965 43.8915C70.7341 43.3464 68.1791 40.706 68.1412 37.7905C68.1728 35.181 70.1656 32.8593 73.1722 31.9441ZM73.6744 42.3746C76.0746 43.0765 78.7654 42.5057 80.4077 40.9091C82.0215 39.3434 82.2173 37.0372 80.9382 35.2889C79.6686 33.5535 77.1042 32.5868 74.6534 32.9827C71.83 33.4404 69.7993 35.4509 69.7708 37.7879C69.7993 39.7933 71.3247 41.6882 73.6744 42.3746Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M74.3629 34.9602C75.7178 34.5412 77.319 34.8806 78.257 35.783C79.2139 36.7085 79.3718 38.0686 78.5949 39.1098C77.8306 40.1357 76.3526 40.6524 74.9124 40.4365C73.2891 40.1948 72.1648 39.0199 72.0827 37.7086C72.0795 37.6855 72.0764 37.6598 72.0795 37.6341C72.0795 37.6032 72.0827 37.5724 72.0858 37.5441C72.1616 36.3897 73.0175 35.3768 74.3629 34.9602ZM75.5851 39.4929C76.8294 39.4955 77.8716 38.6471 77.8685 37.6341C77.8653 36.6185 76.8326 35.7753 75.5851 35.7753C74.3155 35.7753 73.3333 36.6211 73.3017 37.6341C73.3365 38.6496 74.3155 39.4903 75.5851 39.4929Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M22.859 31.9441C25.8277 31.0416 29.3396 31.8258 31.3419 33.8209C33.36 35.8314 33.6821 38.7161 32.0399 40.9631C30.3913 43.2205 27.1384 44.3723 23.9833 43.8915C20.4177 43.3464 17.8659 40.706 17.828 37.7905C17.8596 35.181 19.8524 32.8593 22.859 31.9441ZM23.3611 42.3746C25.7614 43.0765 28.4522 42.5057 30.0944 40.9091C31.7083 39.3434 31.9041 37.0372 30.625 35.2889C29.3554 33.5535 26.791 32.5868 24.3402 32.9827C21.5168 33.4404 19.486 35.4509 19.4576 37.7879C19.486 39.7933 21.0115 41.6882 23.3611 42.3746Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.0465 34.9602C25.4014 34.5412 27.0026 34.8806 27.9405 35.783C28.8975 36.7085 29.0554 38.0686 28.2785 39.1098C27.5142 40.1357 26.0362 40.6524 24.596 40.4365C22.9727 40.1948 21.8484 39.0199 21.7663 37.7086C21.7631 37.6855 21.76 37.6598 21.7631 37.6341C21.7631 37.6032 21.7663 37.5724 21.7694 37.5441C21.8452 36.3897 22.7011 35.3768 24.0465 34.9602ZM25.2719 39.4929C26.5162 39.4955 27.5584 38.6471 27.5553 37.6341C27.5521 36.6185 26.5194 35.7753 25.2719 35.7753C24.0023 35.7753 23.0201 36.6211 22.9885 37.6341C23.0201 38.6496 24.0023 39.4903 25.2719 39.4929Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M0.0126266 27.43H3.23716C3.23716 27.1986 3.23716 26.9646 3.23716 26.7332C2.4255 26.7332 1.617 26.7332 0.805344 26.7332C0.726387 26.7332 0.663216 26.7101 0.622162 26.6741C0.619003 26.6715 0.615852 26.669 0.612694 26.6664C0.609535 26.6638 0.609528 26.6638 0.606377 26.6613C0.562157 26.6253 0.533737 26.5764 0.533737 26.5096C0.533737 25.656 0.533737 24.7999 0.533737 23.9463C0.533737 23.8254 0.660065 23.7252 0.805344 23.7252C1.65174 23.7252 2.49812 23.7252 3.34136 23.7252C3.61613 22.8896 4.40885 22.0977 5.19208 21.5938C6.01006 21.0668 6.85644 20.8019 7.86074 20.6245C9.81567 20.28 11.8148 20.0949 13.8013 19.9458C16.9058 19.7144 20.0261 19.6013 23.1433 19.5473C25.0919 19.5062 27.0436 19.4933 28.9922 19.5087C29.8418 15.1483 31.4051 10.6671 34.7086 7.10367C34.7433 7.02654 34.797 6.9597 34.8665 6.90057C35.4729 6.02386 36.4551 5.34254 37.5826 4.93632C38.2805 4.68436 38.9943 4.53523 39.7491 4.46068C40.2038 4.41697 40.9776 4.29872 41.5366 4.40927C43.3968 4.40927 45.2538 4.40927 47.114 4.40927V3.44514H43.6652C43.0589 3.44514 42.5314 3.16747 42.2788 2.76382C41.9693 2.56843 41.7356 2.29332 41.6377 1.95395C41.3534 0.974402 42.1493 0.053991 43.3905 0C44.8432 0 46.2992 0 47.7519 0C51.1565 0 54.5578 0 57.9624 0C61.8754 0 65.7884 0 69.7046 0C72.6796 0 75.6546 0 78.6296 0C79.3307 0 80.0319 0 80.7298 0C80.992 0 81.2478 0.00514702 81.5004 0.069422C82.6721 0.370229 83.1048 1.59145 82.4668 2.40902C82.4574 2.41931 82.4479 2.42959 82.4416 2.43987C82.3152 3.00807 81.6805 3.44257 80.9225 3.44257H77.1895V4.40669C78.0706 4.40669 78.9486 4.40669 79.8298 4.40669C80.9635 4.40669 82.0973 4.40669 83.2311 4.40669C84.785 4.40669 85.7798 5.4171 86.5662 6.39922C88.2179 8.46373 89.2854 10.8856 90.2171 13.2149C90.5866 14.1354 90.9245 15.0635 91.2214 16.0019C91.4235 15.9608 91.6351 15.9376 91.8498 15.9376H96.4008C97.8315 15.9376 99 16.8889 99 18.0535V29.2708C99 30.4355 97.8315 31.3867 96.4008 31.3867H93.9027C93.9027 31.4896 93.9027 31.5924 93.8995 31.6953C93.8742 33.5695 92.6583 35.2895 90.7034 36.2768C88.9411 37.1689 87.0083 37.1175 85.025 37.1175C84.6997 37.1175 84.2891 36.9118 84.2354 36.629C84.1849 36.3693 84.1502 36.0994 84.1059 35.832C84.0333 35.7626 83.9796 35.6803 83.9607 35.5903C83.787 34.7368 83.4364 33.9192 82.9311 33.1787C81.292 31.5719 78.8507 30.5923 76.2515 30.5537C73.5039 30.5152 70.8668 31.5153 69.1392 33.2559C68.1728 34.2277 67.5823 35.4001 67.3328 36.6264C67.2759 36.9093 66.8748 37.1149 66.5432 37.1149C62.9902 37.1149 59.4373 37.1149 55.8843 37.1149C50.228 37.1149 44.5748 37.1149 38.9185 37.1149C37.6299 37.1149 36.3414 37.1149 35.0528 37.1149C34.7244 37.1149 34.3233 36.9093 34.2633 36.6264C33.7232 33.9835 31.4556 31.7441 28.3006 30.9111C25.1235 30.073 21.561 30.7517 19.205 32.6851C17.8912 33.7623 17.0732 35.1327 16.77 36.6264C16.7132 36.9093 16.3121 37.1149 15.9805 37.1149C14.2056 37.1149 12.4275 37.1149 10.6526 37.1149C9.67355 37.1149 8.70399 37.0944 7.766 36.8321C6.19953 36.3951 4.84468 35.5055 4.02987 34.3254C3.2719 33.225 3.18031 32.0732 3.18031 30.8468C3.18031 30.7774 3.19294 30.7131 3.21188 30.654C3.18031 30.0987 3.20242 29.5382 3.21505 28.9854H7.62939e-06V27.43H0.0126266ZM34.7086 9.48699C34.1117 10.3149 33.5874 11.1787 33.139 12.0631C32.3747 13.5672 31.7873 15.1278 31.3262 16.7115C31.5125 16.7141 31.6988 16.7141 31.8788 16.7038C32.1852 16.6832 32.2704 16.5058 32.4157 16.2256C32.6557 15.7525 32.8263 15.246 33.0347 14.7627C33.6032 13.436 34.1749 12.112 34.7433 10.7853C34.9423 10.3226 35.2423 9.79037 34.7086 9.48699ZM47.9541 0.671027C46.5234 0.671027 45.0927 0.671027 43.6621 0.671027C43.5705 0.671027 43.4789 0.671027 43.3873 0.671027C42.0672 0.73016 42.0988 2.36275 43.3999 2.42702C43.5294 2.43474 43.6589 2.42702 43.7884 2.42702C44.5369 2.42702 45.2854 2.42702 46.0307 2.42702C46.6718 2.42702 47.3129 2.42702 47.9509 2.42702V0.671027H47.9541ZM54.7221 0.671027C52.9409 0.671027 51.1628 0.671027 49.3816 0.671027C49.1005 0.671027 48.8163 0.671027 48.5352 0.671027V2.42702C50.5975 2.42702 52.6598 2.42702 54.7221 2.42702V0.671027ZM49.2647 3.45027V4.4144C54.621 4.4144 59.9773 4.4144 65.3336 4.4144C68.5708 4.4144 71.8079 4.4144 75.0451 4.4144V3.45027H49.2647ZM62.0144 0.671027C61.2374 0.671027 60.4574 0.671027 59.6773 0.671027C58.2182 0.671027 56.7591 0.671027 55.3 0.671027V2.42702C57.536 2.42702 59.7752 2.42702 62.0112 2.42702V0.671027H62.0144ZM68.7824 0.671027C66.7201 0.671027 64.6578 0.671027 62.5955 0.671027V2.42702C63.7356 2.42702 64.8725 2.42702 66.0126 2.42702C66.9348 2.42702 67.8602 2.42702 68.7824 2.42702V0.671027ZM75.5472 0.671027C73.9808 0.671027 72.4111 0.671027 70.8447 0.671027C70.3488 0.671027 69.8562 0.671027 69.3603 0.671027V2.42702C71.4226 2.42702 73.4849 2.42702 75.5472 2.42702V0.671027ZM80.8877 2.42702C81.652 2.40645 82.1037 1.85369 81.9015 1.25722C81.7594 0.835578 81.2952 0.676166 80.8088 0.668453C80.2087 0.66074 79.6087 0.668453 79.0055 0.668453C78.0454 0.668453 77.0853 0.668453 76.1252 0.668453V2.42445C77.7138 2.42959 79.3055 2.46816 80.8877 2.42702ZM89.3359 15.4234C88.619 13.364 87.7726 11.3047 86.6609 9.35587C86.2409 9.34301 85.7829 9.32243 85.4103 9.45612C84.7786 9.68237 84.4628 10.2146 84.4502 10.7519C84.4312 11.5695 84.4502 12.3871 84.4502 13.2021C84.4502 13.9939 84.4312 14.7884 84.4502 15.5802C84.4628 16.133 84.8134 16.6755 85.4734 16.8837C85.8366 16.9969 86.2788 16.9557 86.6609 16.9557C87.7189 16.9557 88.7738 16.9557 89.8318 16.9557C89.6802 16.4415 89.5128 15.9299 89.3359 15.4234ZM90.3592 19.3982C90.3465 19.2593 90.3371 19.1205 90.3181 18.9817C90.3118 18.938 90.3055 18.8943 90.2992 18.8531C90.2992 18.848 90.296 18.8403 90.296 18.8326C90.2739 18.722 90.255 18.6115 90.2297 18.5009C90.2139 18.4289 90.1981 18.3569 90.1823 18.2875C90.176 18.2875 90.1697 18.2875 90.1665 18.2875C88.998 18.2875 87.8326 18.2875 86.6641 18.2875C86.1177 18.2875 85.5682 18.3081 85.0408 18.1667C83.9701 17.8787 83.1301 17.11 82.9027 16.2127C82.6784 15.3386 82.8174 14.3539 82.8174 13.4669C82.8174 12.5542 82.789 11.6389 82.8174 10.7262C82.8458 9.76721 83.4175 8.84424 84.4597 8.35832C84.9081 8.15007 85.3787 8.07293 85.8587 8.04465C85.3819 7.31448 84.8702 6.61775 84.1912 6.09069C84.1281 6.04185 84.0617 5.993 83.9954 5.94672C83.9891 5.94158 83.9828 5.93644 83.9765 5.93387C83.9733 5.9313 83.9701 5.93129 83.967 5.92872C83.9354 5.91072 83.9038 5.89015 83.8691 5.87472C83.8122 5.84644 83.7585 5.82074 83.7017 5.7976C83.7333 5.81559 83.6038 5.77189 83.5438 5.75132C83.5343 5.74875 83.528 5.74619 83.5217 5.74362C83.509 5.74619 83.4964 5.74618 83.4743 5.74875C83.449 5.75132 83.4238 5.74875 83.4017 5.74875C82.4511 5.76932 81.4973 5.74875 80.5498 5.74875C75.9262 5.74875 71.3058 5.74875 66.6822 5.74875C61.228 5.74875 55.7706 5.74875 50.3164 5.74875C48.3236 5.74875 46.3307 5.74875 44.3411 5.74875C43.3999 5.74875 42.4493 5.78217 41.5082 5.74875C41.4798 5.74875 41.4513 5.74619 41.4229 5.74362C41.4261 5.74619 41.4324 5.74618 41.4355 5.74875C39.4143 5.65105 37.2004 6.14469 36.2024 7.70014C36.1961 7.713 36.1866 7.72328 36.1771 7.73357C36.0256 7.95724 35.7729 8.17063 35.5802 8.38659C36.4835 8.89308 36.9162 9.7518 36.5182 10.6876C36.2561 11.3047 35.9877 11.9191 35.7255 12.5336C35.1223 13.9348 34.6075 15.4003 33.9001 16.7706C33.5937 17.3645 33.12 17.8916 32.2957 18.0073C31.8694 18.0664 31.4146 18.0433 30.9788 18.0356C30.8366 18.6089 30.7103 19.1822 30.5966 19.7581C31.683 19.7581 32.7694 19.7581 33.8559 19.7581C33.8495 19.4676 33.8022 19.1436 33.8685 18.8608C33.938 18.5729 34.1212 18.2747 34.2412 17.997C35.596 14.8655 36.9477 11.734 38.3026 8.60256C38.4131 8.34547 38.5237 8.08837 38.6374 7.83127C39.0479 6.97769 39.9544 6.47378 41.0787 6.46349C41.5556 6.45835 42.0356 6.46349 42.5125 6.46349C44.559 6.46349 46.6087 6.46349 48.6552 6.46349C50.8565 6.46349 53.0577 6.46349 55.259 6.46349C55.9285 6.46349 56.598 6.46349 57.2707 6.46349C57.716 6.46349 58.1929 6.43007 58.6256 6.50977C59.5225 6.67945 60.1321 7.25279 60.3184 7.94439C60.3405 7.90325 60.3658 7.86211 60.3942 7.82097C60.9437 6.98283 62.0175 6.48149 63.1734 6.46349C63.4198 6.45835 63.6661 6.46349 63.9093 6.46349C67.2412 6.46349 70.5762 6.46349 73.9081 6.46349C75.2662 6.46349 76.6242 6.46349 77.9822 6.46349C78.3138 6.46349 78.6454 6.45578 78.9739 6.49692C80.1424 6.64346 81.1278 7.3402 81.491 8.25547C81.7373 8.87508 81.6394 9.61554 81.6394 10.2583C81.6394 11.4667 81.6394 12.675 81.6394 13.8808C81.6394 15.8399 81.6394 17.799 81.6394 19.7556C81.8415 19.7556 82.0436 19.7556 82.2458 19.7556C82.6532 19.7556 83.0606 19.7556 83.4648 19.7556C85.5524 19.7556 87.6526 19.7067 89.7433 19.7324C89.9644 19.7273 90.1855 19.7273 90.4065 19.7273C90.3844 19.6193 90.3687 19.5087 90.3592 19.3982ZM59.832 24.4682C59.832 23.6275 59.832 22.7868 59.832 21.946C59.5604 21.892 59.3583 21.6941 59.3583 21.4576V21.0873C57.0055 21.0873 54.6526 21.0873 52.2966 21.0873C49.8237 21.0873 47.3508 21.0873 44.878 21.0873C42.2093 21.0873 39.5438 21.0873 36.8751 21.0873C36.0508 21.0873 35.2202 21.095 34.3928 21.1028C34.3928 21.2853 34.3928 21.4704 34.3928 21.6529C34.3928 23.4192 34.3928 25.1829 34.3928 26.9492C34.3928 27.4557 34.3896 27.9647 34.3928 28.4712C34.3991 29.4045 35.1602 30.1424 36.3414 30.1758C39.2564 30.2581 42.1903 30.1758 45.1085 30.1758C49.0121 30.1758 52.9156 30.1758 56.8191 30.1758C57.1602 30.1758 57.5013 30.1835 57.8392 30.1758C58.9541 30.1527 59.791 29.4945 59.8257 28.5792C59.8415 28.1936 59.8384 27.8079 59.8352 27.4223C59.5604 27.3708 59.3552 27.1703 59.3552 26.9312V24.9515C59.3583 24.7201 59.5604 24.5222 59.832 24.4682ZM34.3959 19.0228C34.3959 19.2054 34.3959 19.3879 34.3959 19.573C34.3959 19.6347 34.3959 19.6964 34.3959 19.7581C34.7338 19.7581 35.0718 19.7581 35.4129 19.7581C37.731 19.7581 40.0491 19.7581 42.3672 19.7581C44.979 19.7581 47.5909 19.7581 50.2027 19.7581C53.2535 19.7581 56.3075 19.7581 59.3583 19.7581V19.4805C59.3583 19.2439 59.5604 19.046 59.832 18.992C59.832 18.0793 59.832 17.164 59.832 16.2513C59.832 13.6674 59.832 11.0836 59.832 8.49972C59.832 7.85183 59.5162 7.24764 58.7172 7.00082C58.2814 6.86713 57.7697 6.91084 57.3055 6.91084C55.7011 6.91084 54.0999 6.91084 52.4955 6.91084C48.7531 6.91084 45.0138 6.91084 41.2713 6.91084C40.346 6.91084 39.5185 7.19879 39.1553 7.9521C38.0279 10.5617 36.8972 13.1712 35.7697 15.7834C35.3181 16.8272 34.7718 17.8761 34.4054 18.9431C34.4022 18.956 34.3991 18.9611 34.3959 18.9637C34.3959 18.9714 34.3959 18.9894 34.3959 19.0228ZM81.0899 9.03192C81.0583 7.86211 79.9213 6.93398 78.4844 6.91084C77.7359 6.89799 76.9811 6.91084 76.2326 6.91084C72.8217 6.91084 69.414 6.91084 66.0032 6.91084C65.0747 6.91084 64.1461 6.89799 63.2176 6.91084C61.6006 6.93141 60.5616 7.95981 60.5616 9.22217C60.5616 11.1633 60.5616 13.1044 60.5616 15.0455C60.5616 16.3567 60.5616 17.6679 60.5616 18.9791C60.8742 19.0048 61.1174 19.2208 61.1174 19.4805V19.7581C61.9954 19.7581 62.8734 19.7581 63.7514 19.7581C65.182 19.7581 66.6127 19.7581 68.0434 19.7581C72.3922 19.7581 76.741 19.7581 81.0899 19.7581C81.0899 18.596 81.0899 17.4339 81.0899 16.2718C81.0899 13.9939 81.0899 11.7135 81.0899 9.43557C81.0899 9.30187 81.093 9.16561 81.0899 9.03192ZM81.0899 25.0852C81.0899 24.7613 81.0899 24.4373 81.0899 24.1134C81.0899 23.103 81.0899 22.0952 81.0899 21.0848C77.439 21.0848 73.7881 21.0848 70.1372 21.0848C68.8455 21.0848 67.557 21.0848 66.2653 21.0848C64.5504 21.0848 62.8323 21.0848 61.1174 21.0848V21.455C61.1174 21.7147 60.8711 21.9306 60.5616 21.9563C60.5616 22.5528 60.5616 23.1518 60.5616 23.7483C60.5616 23.9823 60.5584 24.2188 60.5553 24.4528C60.8711 24.4759 61.1174 24.6919 61.1174 24.9541V26.9338C61.1174 27.2037 60.8521 27.4248 60.5237 27.4351C60.5332 27.7205 60.5426 28.0084 60.5647 28.2913C60.65 29.3942 61.8059 30.2889 63.1671 30.2889C63.4671 30.2581 63.7924 29.6745 63.9535 29.4842C64.1525 29.2502 64.3641 29.0214 64.582 28.7978C64.9831 28.3915 65.4157 28.0059 65.8863 27.6511C66.739 27.0058 67.7023 26.4556 68.7445 26.0339C70.6426 25.2652 72.7554 24.9233 74.8651 24.9053C76.7221 24.8898 78.5823 25.1161 80.3793 25.4992C80.6635 25.5609 80.9825 25.5943 81.0899 25.3141C81.1151 25.2523 81.0899 25.1521 81.0899 25.0852ZM4.8731 30.6617C4.8731 30.744 4.87941 30.8263 4.88573 30.9085C5.58369 32.5668 7.46913 33.6981 9.64513 33.7238C11.4264 33.7238 13.2076 33.7238 14.992 33.7238C15.791 30.8648 18.4376 28.4995 21.8737 27.5765C25.5656 26.5816 29.7692 27.4325 32.4852 29.6899C33.8243 30.8006 34.7654 32.2095 35.1855 33.7238C38.4921 33.7238 41.7956 33.7238 45.1022 33.7238C50.6764 33.7238 56.2506 33.7238 61.8249 33.7238C62.8797 33.7238 63.9314 33.7238 64.9831 33.7238C65.7505 30.978 68.2076 28.7103 71.4447 27.6974C74.9598 26.597 79.0244 27.2397 81.8636 29.222C83.4301 30.3146 84.5449 31.8007 85.0881 33.4153C85.126 33.5258 85.1292 33.6286 85.1071 33.7212C85.3692 33.7212 85.6314 33.7212 85.8903 33.7212C88.7138 33.6929 91.0319 31.8804 91.0445 29.5665C91.0508 28.0753 91.0445 26.5841 91.0445 25.0904C91.0445 24.3731 90.8929 23.6917 90.7318 22.9899C90.7097 22.8922 90.7129 22.7919 90.735 22.6942C90.615 22.1569 90.4981 21.6221 90.3781 21.0848C88.559 21.0848 86.7399 21.0848 84.9239 21.0848C84.6018 21.0848 84.2796 21.0848 83.9575 21.0848C83.1806 21.0848 82.4068 21.0848 81.6299 21.0848C81.6299 21.6324 81.6299 22.18 81.6299 22.7276C81.6299 23.5478 81.6394 24.3679 81.6299 25.1855C81.6268 25.5223 81.532 25.8488 81.0899 25.9825C80.6856 26.1059 80.1582 25.9054 79.7539 25.8257C79.3181 25.7408 78.8791 25.6637 78.437 25.5994C73.8513 24.9284 68.9908 25.5763 65.681 28.4352C65.201 28.8492 64.7683 29.294 64.3735 29.7619C64.0482 30.1501 63.8493 30.6103 63.2618 30.7157C63.2334 30.7234 63.1987 30.7311 63.1639 30.7311C63.1355 30.7337 63.1071 30.7337 63.085 30.7286C61.768 30.7029 60.7353 30.0293 60.2742 29.1114C59.9994 29.9084 59.1815 30.5229 58.114 30.6052C57.1823 30.6771 56.2127 30.6154 55.2811 30.6154C53.2093 30.6154 51.1344 30.6154 49.0626 30.6154C45.0959 30.6154 41.1324 30.6154 37.1657 30.6154C36.8909 30.6154 36.6161 30.6206 36.3414 30.6154C34.9581 30.5846 33.8906 29.7156 33.8527 28.5895C33.8117 27.4171 33.8527 26.237 33.8527 25.0647C33.8527 23.7432 33.8527 22.4217 33.8527 21.1028C32.3621 21.1156 30.8682 21.1259 29.3839 21.0822C29.3491 21.0822 29.3144 21.0822 29.2765 21.0822C28.3132 21.0822 27.3531 21.0822 26.3899 21.0822C23.3896 21.0822 20.3704 21.1567 17.3733 21.0822C17.3322 21.0822 17.2911 21.0822 17.2532 21.0822C17.1617 21.0873 17.0795 21.0796 17.0037 21.0642C14.5877 21.1747 12.178 21.3521 9.79672 21.6735C8.96927 21.7841 8.03446 21.8663 7.24491 22.108C6.71433 22.27 6.19953 22.5939 5.80791 22.923C5.41314 23.2521 4.88572 23.8126 4.8794 24.2908C4.8794 25.3346 4.86993 26.3784 4.86678 27.4223H7.05225V28.9906H4.86362C4.86362 29.5536 4.86678 30.1064 4.8731 30.6617ZM3.24032 24.2985C3.24032 24.2677 3.24346 24.2394 3.24662 24.2137C3.24662 24.2008 3.24978 24.1854 3.24978 24.1725C2.52656 24.1725 1.80333 24.1725 1.07694 24.1725C1.07694 24.8796 1.07694 25.5866 1.07694 26.2936C1.79701 26.2936 2.51709 26.2936 3.23716 26.2936C3.24032 25.6277 3.24032 24.9618 3.24032 24.2985Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M9.25673 22.3855C9.27568 22.3803 9.29463 22.3752 9.31674 22.37C10.0652 22.2595 10.8137 22.1464 11.5622 22.0358C11.897 21.987 12.2223 21.9278 12.5602 22.005C13.1129 22.1309 13.5298 22.5372 13.5487 23.0076C13.5866 23.8715 12.6297 24.0926 11.7959 24.216C11.3159 24.288 10.8327 24.36 10.3526 24.432C10.0557 24.4757 9.74308 24.5451 9.4399 24.5245C7.89554 24.4114 7.87344 22.7171 9.25673 22.3855ZM9.6673 24.0797C9.90732 24.0643 10.1537 24.0103 10.3905 23.9743C11.019 23.8818 11.6759 23.8227 12.2949 23.6915C13.2582 23.4859 13.1729 22.3803 12.1307 22.4035C11.8938 22.4086 11.6443 22.4703 11.4138 22.5063C10.7632 22.604 10.1126 22.6991 9.46201 22.7968C8.47033 22.9999 8.60614 24.144 9.6673 24.0797Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M56.118 23.2386H53.6356C53.2756 23.2386 52.9819 22.9995 52.9819 22.7064V22.6318C52.9819 22.3387 53.2756 22.0996 53.6356 22.0996H56.118C56.478 22.0996 56.7717 22.3387 56.7717 22.6318V22.7064C56.7717 22.9995 56.4749 23.2386 56.118 23.2386Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M80.0381 15.9919C80.0254 17.1129 79.2011 18.1335 77.8368 18.4395C77.3062 18.5578 76.7346 18.5269 76.1914 18.5269C72.3952 18.5269 68.5991 18.5269 64.8029 18.5269C64.7019 18.5269 64.6008 18.5269 64.4997 18.5269C64.465 18.5269 64.4303 18.5243 64.3955 18.5218C62.7785 18.4369 61.5437 17.4085 61.5026 16.0742C61.4837 15.5188 61.5026 14.9635 61.5026 14.4082C61.5026 12.9864 61.3921 11.5312 61.5089 10.112C61.6163 8.8034 62.9175 7.82641 64.5124 7.79299C64.964 7.7827 65.4156 7.79299 65.8672 7.79299C67.9864 7.79299 70.1055 7.79299 72.2247 7.79299C73.8038 7.79299 75.3829 7.77756 76.962 7.79299C78.3011 7.80584 79.5106 8.46659 79.9086 9.53099C80.117 10.0863 80.0381 10.7291 80.0381 11.3024C80.0381 12.8656 80.0539 14.4313 80.0381 15.9919ZM77.8715 9.35616C77.4452 9.09135 76.9557 9.12476 76.4598 9.12476C75.7334 9.12476 75.0039 9.12476 74.2775 9.12476C71.0246 9.12476 67.7527 9.03221 64.5029 9.12476C63.546 9.15305 63.1417 9.7778 63.1417 10.472C63.1417 11.1481 63.1417 11.8243 63.1417 12.5005C63.1417 13.3386 63.1417 14.1793 63.1417 15.0175C63.1417 15.4417 63.0501 15.9636 63.1922 16.3801C63.3596 16.866 63.8965 17.1797 64.506 17.1951C67.7495 17.1951 70.993 17.1951 74.2364 17.1951C74.9786 17.1951 75.7208 17.1951 76.4661 17.1951C76.9651 17.1951 77.4547 17.2285 77.8779 16.9637C78.4747 16.5909 78.4084 16.0305 78.4084 15.4931C78.4084 14.7141 78.4084 13.9377 78.4084 13.1587C78.4084 12.3796 78.4084 11.6032 78.4084 10.8242C78.4021 10.2894 78.4684 9.72896 77.8715 9.35616Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M37.5447 14.0606C37.9773 13.1196 38.41 12.1761 38.8427 11.2351C39.1838 10.4946 39.4522 9.68989 39.9038 8.99572C40.3933 8.23985 41.1797 7.94162 42.184 7.94162C42.9546 7.94162 43.7221 7.94162 44.4927 7.94162C47.0066 7.94162 49.5174 7.94162 52.0281 7.94162C53.0609 7.94162 54.0936 7.94162 55.1232 7.94162C55.6253 7.94162 56.1622 7.90304 56.6612 7.9776C58.2182 8.21413 58.8814 9.5202 58.8846 10.6797C58.8877 11.541 58.8846 12.4023 58.8846 13.2636C58.8846 14.1377 58.8846 15.0093 58.8846 15.8834C58.8846 17.0095 58.3256 18.2796 56.8475 18.6087C56.3707 18.7167 55.8243 18.6755 55.3316 18.6755C54.4378 18.6755 53.5441 18.6755 52.6503 18.6755C48.292 18.6755 43.9337 18.6755 39.5754 18.6755C39.4806 18.6755 39.3859 18.6755 39.2911 18.6755C39.2532 18.6755 39.2153 18.673 39.1806 18.6704C37.5004 18.5701 36.0856 17.3129 36.6919 15.9194C36.9635 15.2947 37.2604 14.6802 37.5447 14.0606ZM39.2911 17.3412C42.8536 17.3412 46.416 17.3412 49.9785 17.3412C51.845 17.3412 53.7146 17.3412 55.5811 17.3412C55.9696 17.3412 56.4117 17.4003 56.7244 17.1844C57.3908 16.7242 57.2486 15.886 57.2486 15.2484C57.2486 13.6724 57.2834 12.0963 57.2486 10.5203C57.236 9.87757 56.8665 9.27082 56.0296 9.27082C55.3663 9.27082 54.7063 9.27082 54.0431 9.27082C50.0353 9.27082 46.0244 9.25025 42.0167 9.27082C41.8461 9.27082 41.6977 9.2631 41.5777 9.34537C41.1671 9.62304 41.0092 10.2915 40.8355 10.6874C40.5923 11.2351 40.3365 11.775 40.087 12.32C39.6701 13.2276 39.2532 14.1377 38.8363 15.0453C38.6911 15.3615 38.5458 15.6777 38.4005 15.9965C38.3247 16.1637 38.1763 16.3976 38.17 16.5725C38.151 17.025 38.7984 17.3283 39.2911 17.3412Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-6616f2b"
                                                                data-id="6616f2b" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-f4d38ce elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="f4d38ce" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="50"
                                                                                        viewBox="0 0 50 50" fill="none">
                                                                                        <mask id="mask0_3316_100"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="50"
                                                                                            height="50">
                                                                                            <rect width="50" height="50"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_3316_100)">
                                                                                            <path
                                                                                                d="M49.4521 24.999C49.4521 38.5146 38.5146 49.4521 24.999 49.4521C11.4834 49.4521 0.545898 38.5146 0.545898 24.999C0.545898 11.4834 11.4834 0.545898 24.999 0.545898C38.5146 0.545898 49.4521 11.4834 49.4521 24.999ZM24.999 2.03027C12.2646 2.03027 2.03027 12.2646 2.03027 24.999C2.03027 37.7334 12.3428 47.9678 24.999 47.9678C37.7334 47.9678 47.9678 37.6553 47.9678 24.999C47.9678 12.2646 37.7334 2.03027 24.999 2.03027Z"
                                                                                                fill="url(#paint0_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M25 2.03223C12.2656 2.03223 2.03125 12.2666 2.03125 25.001C2.03125 37.7353 12.3437 47.9697 25 47.9697C37.7344 47.9697 47.9687 37.6572 47.9687 25.001C47.9687 12.2666 37.7344 2.03223 25 2.03223ZM25 46.4853C13.125 46.4853 3.51562 36.876 3.51562 25.001C3.51562 13.126 13.125 3.5166 25 3.5166C36.875 3.5166 46.4844 13.126 46.4844 25.001C46.4844 36.876 36.875 46.4853 25 46.4853Z"
                                                                                                fill="url(#paint1_linear_3316_100)">
                                                                                            </path>
                                                                                            <path opacity="0.4"
                                                                                                d="M25 49.4531C38.5156 49.4531 49.4531 38.5156 49.4531 25C49.4531 11.4844 38.5156 0.546875 25 0.546875C11.4844 0.546875 0.546875 11.4844 0.546875 25C0.546875 38.5156 11.4844 49.4531 25 49.4531ZM25 0C38.75 0 50 11.25 50 25C50 38.75 38.75 50 25 50C11.25 50 0 38.75 0 25C0 11.25 11.25 0 25 0Z"
                                                                                                fill="url(#paint2_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M1.71777 25.0771C1.71777 12.2646 12.1084 1.71777 24.999 1.71777C37.8896 1.71777 48.2803 12.1865 48.2803 25.0771C48.2803 37.8896 37.8896 48.2803 24.999 48.2803C12.1084 48.2803 1.71777 37.8896 1.71777 25.0771ZM8.9834 8.9834C4.84277 13.124 2.26465 18.8271 2.26465 25.0771C2.26465 31.3271 4.84277 37.0303 8.90527 41.0928C13.0459 45.1553 18.749 47.7334 24.999 47.7334C31.249 47.7334 36.9521 45.2334 41.0146 41.0928C45.1553 37.0303 47.6553 31.3271 47.6553 25.0771C47.6553 18.8271 45.0771 13.124 41.0146 8.9834C36.9521 4.84277 31.249 2.26465 24.999 2.26465C18.749 2.26465 13.0459 4.84277 8.9834 8.9834Z"
                                                                                                fill="white"></path>
                                                                                            <path opacity="0.4"
                                                                                                d="M25 46.5615C19.2188 46.5615 13.8281 44.2959 9.76563 40.2334C5.70313 36.1709 3.4375 30.7803 3.4375 24.999C3.4375 19.2178 5.70313 13.8271 9.76563 9.76465C13.8281 5.70215 19.2188 3.43652 25 3.43652C30.7813 3.43652 36.1719 5.70215 40.2344 9.76465C44.2969 13.8271 46.5625 19.2178 46.5625 24.999C46.5625 30.7803 44.2969 36.1709 40.2344 40.2334C36.1719 44.2959 30.7813 46.5615 25 46.5615ZM25 45.9365C30.5469 45.9365 35.8594 43.749 39.7656 39.8428C43.75 35.8584 45.8594 30.624 45.8594 25.0771C45.8594 19.5303 43.6719 14.2178 39.7656 10.3115C35.7813 6.32715 30.5469 4.21777 25 4.21777C19.4531 4.21777 14.1406 6.40527 10.2344 10.3115C6.25 14.1396 4.0625 19.4522 4.0625 24.999C4.0625 30.5459 6.25 35.8584 10.1563 39.7647C14.1406 43.749 19.4531 45.9365 25 45.9365Z"
                                                                                                fill="url(#paint3_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M43.9854 35.1572C43.5947 34.8447 28.5166 22.8916 28.5166 22.8916L25.001 2.81348C24.7666 2.8916 24.4541 3.12598 24.2979 3.43848L21.7979 22.9697L6.25098 34.9229C6.25098 34.9229 5.93848 35.3135 5.78223 35.5479C5.7041 35.7041 5.7041 35.9385 5.7041 36.1729L24.9229 28.2822L44.1416 36.1729C44.2979 35.7822 44.1416 35.3916 43.9854 35.1572Z"
                                                                                                fill="white"></path>
                                                                                            <path
                                                                                                d="M25.1563 25.6232L25 29.2169L42.6562 36.3263C43.2812 36.6388 43.75 36.4826 44.2187 36.1701L25.3906 25.5451C25.3125 25.4669 25.1563 25.5451 25.1563 25.6232Z"
                                                                                                fill="#565F64"></path>
                                                                                            <path
                                                                                                d="M25.1553 25.6232C25.1553 25.6232 26.1709 27.4201 27.3428 28.6701C28.9834 30.4669 31.1709 31.7169 31.1709 31.7169L42.6553 36.3263C43.2803 36.6388 43.749 36.4826 44.2178 36.1701L25.3896 25.5451C25.3115 25.4669 25.1553 25.5451 25.1553 25.6232Z"
                                                                                                fill="url(#paint4_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M44.1406 35.4678C44.1406 35.3896 44.0625 35.3115 43.9844 35.1553L27.8906 23.3584L25.7031 24.7646C25.7031 24.7646 25.8594 24.8428 25.9375 24.7646C26.1719 24.6865 26.6406 24.6084 27.1094 24.7646C27.5 24.9209 44.1406 35.5459 44.1406 35.4678C44.1406 35.5459 44.1406 35.5459 44.1406 35.4678Z"
                                                                                                fill="#A4AAAE"
                                                                                                fill-opacity="0.6">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M43.5928 34.7666L28.5928 22.8916L27.8896 23.3604L43.9834 35.2354C43.9053 35.0791 43.749 34.9229 43.5928 34.7666Z"
                                                                                                fill="#333E46"></path>
                                                                                            <path
                                                                                                d="M25.3906 24.4521L25.3125 24.5303C25.3125 24.5303 25.3125 24.6865 25.4687 24.6084C25.5469 24.5303 27.8125 23.3584 28.5937 22.8896L25.8594 4.13965C25.7812 3.43652 25.4687 3.12402 24.9219 2.88965L25.2344 24.6084L25.3906 24.4521Z"
                                                                                                fill="#565F64"></path>
                                                                                            <path
                                                                                                d="M24.0625 4.13965V5.15527L22.3438 22.4209C22.3438 22.6553 22.4219 22.8896 22.6563 23.0459L23.6719 23.8271L24.375 4.76465L24.4531 3.28027C24.2187 3.43652 24.1406 3.74902 24.0625 4.13965ZM23.125 24.1396L22.1875 23.3584L6.32813 34.8428C6.32813 34.8428 5.85938 35.1553 5.78125 35.4678L6.32813 35.1553L22.9688 24.6865C23.2813 24.5303 23.3594 24.374 23.125 24.1396Z"
                                                                                                fill="#A4AAAE"
                                                                                                fill-opacity="0.6">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M24.7666 25.6232C24.7666 25.5451 24.6885 25.4669 24.6104 25.5451L5.7041 36.2482C6.17285 36.5607 6.6416 36.6388 7.2666 36.4044L24.9229 29.2951L24.7666 25.6232Z"
                                                                                                fill="#565F64"></path>
                                                                                            <path
                                                                                                d="M25.3125 24.5303C25.3125 24.5303 25.3125 24.6084 25.3906 24.6084H25.4687C25.5469 24.5303 27.8125 23.3584 28.5937 22.8896L28.2812 20.624L25.8594 4.13965C25.8594 3.82715 25.7812 3.59277 25.625 3.43652C25.625 3.43652 26.7969 19.2178 26.7969 20.9365C26.7969 23.2021 25.3125 24.5303 25.3125 24.5303Z"
                                                                                                fill="url(#paint5_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M24.7666 25.6232C24.7666 25.5451 24.6885 25.4669 24.6104 25.5451L5.7041 36.2482C6.17285 36.5607 6.6416 36.6388 7.2666 36.4044L24.9229 29.2951L24.7666 25.6232Z"
                                                                                                fill="url(#paint6_linear_3316_100)"
                                                                                                fill-opacity="0.8">
                                                                                            </path>
                                                                                            <path opacity="0.8"
                                                                                                d="M7.26465 36.3281L24.9209 29.2188L24.7646 25.7812C24.4521 26.7188 23.9053 27.7344 22.4209 28.5156C21.3271 29.1406 10.8584 34.2969 7.1084 36.0938C6.87402 36.25 6.56152 36.3281 6.40527 36.4062C6.71777 36.5625 6.95215 36.4844 7.26465 36.3281Z"
                                                                                                fill="url(#paint7_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M25.3906 24.4521L25.3125 24.5303C25.3125 24.5303 25.3125 24.6865 25.4687 24.6084C25.5469 24.5303 27.8125 23.3584 28.5937 22.8896L25.8594 4.13965C25.7812 3.43652 25.4687 3.12402 24.9219 2.88965L25.2344 24.6084L25.3906 24.4521Z"
                                                                                                fill="url(#paint8_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M25.3906 24.4521L25.3125 24.5303C25.3125 24.5303 25.3125 24.6865 25.4687 24.6084C25.5469 24.5303 27.8125 23.3584 28.5937 22.8896L25.8594 4.13965C25.7812 3.43652 25.4687 3.12402 24.9219 2.88965L25.2344 24.6084L25.3906 24.4521Z"
                                                                                                fill="url(#paint9_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M3.9834 34.6875C3.43652 33.4375 0.311524 27.3438 3.74902 15.625H2.4209C1.71777 17.9688 1.1709 19.375 0.858398 21.4844C0.858398 21.4844 0.702148 22.2656 0.624023 23.125C0.545898 23.9844 0.545898 24.4531 0.545898 25C0.545898 29.6875 1.71777 32.4219 1.71777 32.4219C2.96777 36.3281 5.15527 39.8438 8.12402 42.5C10.7021 44.7656 14.6865 46.4844 17.9678 47.1094C17.4209 47.0312 8.0459 43.0469 3.9834 34.6875Z"
                                                                                                fill="url(#paint10_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M25.3125 25.4689H24.6094C24.6875 25.4689 24.7656 25.4689 24.7656 25.547L24.9219 29.1408H25L25.1563 25.547C25.1563 25.4689 25.2344 25.3908 25.3125 25.4689Z"
                                                                                                fill="url(#paint11_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M32.8125 1.79785C41.0156 4.92285 48.75 13.5166 48.75 24.376C48.75 37.501 38.2812 48.2041 25 48.2041V49.4541C38.2812 49.4541 49.4531 38.5166 49.4531 25.001C49.4531 14.2197 42.5781 5.15723 32.8125 1.79785Z"
                                                                                                fill="url(#paint12_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M45.9375 15.7822C40.4687 3.2041 28.125 2.50098 27.4219 2.42285H27.3438C36.7969 4.1416 42.8125 10.3135 44.9219 16.7979V16.876C45.8594 19.376 46.3281 22.0322 46.4062 24.9229C46.4844 27.6572 45.8594 30.7041 44.6875 33.5166C44.6094 33.9072 44.5312 34.376 44.4531 34.376H45.7031C49.4531 27.3447 47.8125 20.2354 45.9375 15.7822Z"
                                                                                                fill="url(#paint13_linear_3316_100)">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M1.71777 25.0771C1.71777 12.2646 12.1084 1.71777 24.999 1.71777C37.8896 1.71777 48.2803 12.1865 48.2803 25.0771C48.2803 37.8896 37.8896 48.2803 24.999 48.2803C12.1084 48.2803 1.71777 37.8896 1.71777 25.0771ZM8.9834 8.9834C4.84277 13.124 2.26465 18.8271 2.26465 25.0771C2.26465 31.3271 4.84277 37.0303 8.90527 41.0928C13.0459 45.1553 18.749 47.7334 24.999 47.7334C31.249 47.7334 36.9521 45.2334 41.0146 41.0928C45.1553 37.0303 47.6553 31.3271 47.6553 25.0771C47.6553 18.8271 45.0771 13.124 41.0146 8.9834C36.9521 4.84277 31.249 2.26465 24.999 2.26465C18.749 2.26465 13.0459 4.84277 8.9834 8.9834Z"
                                                                                                fill="#FBFBFB"></path>
                                                                                            <path
                                                                                                d="M6.17188 34.999L22.1094 23.5146C22.9687 23.9834 24.375 24.6084 24.5312 24.6084C24.6875 24.6865 24.6875 24.5303 24.6875 24.5303L22.7344 22.8896C22.5 22.7334 22.4219 22.499 22.4219 22.2646L24.2969 3.43652C24.2188 3.51465 24.2188 3.6709 24.1406 3.74902C24.0625 3.90527 24.0625 3.9834 24.0625 4.13965L21.3281 22.9678L6.32813 34.7646C6.25 34.8428 6.17188 34.9209 6.17188 34.999Z"
                                                                                                fill="#333F47"></path>
                                                                                        </g>
                                                                                        <defs>
                                                                                            <lineargradient
                                                                                                id="paint0_linear_3316_100"
                                                                                                x1="6.24746"
                                                                                                y1="9.29434"
                                                                                                x2="43.7506"
                                                                                                y2="40.7037"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="white">
                                                                                                </stop>
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#CDD0D0">
                                                                                                </stop>
                                                                                                <stop offset="0.2"
                                                                                                    stop-color="#A5ACAF">
                                                                                                </stop>
                                                                                                <stop offset="0.3"
                                                                                                    stop-color="#98A0A4">
                                                                                                </stop>
                                                                                                <stop offset="0.4"
                                                                                                    stop-color="#828A8F">
                                                                                                </stop>
                                                                                                <stop offset="0.5"
                                                                                                    stop-color="#667075">
                                                                                                </stop>
                                                                                                <stop offset="0.6"
                                                                                                    stop-color="#535C63">
                                                                                                </stop>
                                                                                                <stop offset="0.7"
                                                                                                    stop-color="#475158">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#434D54">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#475157">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint1_linear_3316_100"
                                                                                                x1="7.39922"
                                                                                                y1="10.2033"
                                                                                                x2="42.5555"
                                                                                                y2="39.7346"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#0B1F2A">
                                                                                                </stop>
                                                                                                <stop offset="0.2"
                                                                                                    stop-color="#333F47">
                                                                                                </stop>
                                                                                                <stop offset="0.5"
                                                                                                    stop-color="#81898D">
                                                                                                </stop>
                                                                                                <stop offset="0.7"
                                                                                                    stop-color="#B3B8B8">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#DEE0DD">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#FBFBFB">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint2_linear_3316_100"
                                                                                                x1="33.5445"
                                                                                                y1="48.4867"
                                                                                                x2="16.4352"
                                                                                                y2="1.45625"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#E1E3E1">
                                                                                                </stop>
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#C1C5C4">
                                                                                                </stop>
                                                                                                <stop offset="0.3"
                                                                                                    stop-color="#9BA1A2">
                                                                                                </stop>
                                                                                                <stop offset="0.5"
                                                                                                    stop-color="#7D8487">
                                                                                                </stop>
                                                                                                <stop offset="0.7"
                                                                                                    stop-color="#687074"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#5B6469"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#576065"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint3_linear_3316_100"
                                                                                                x1="14.2195"
                                                                                                y1="6.32793"
                                                                                                x2="35.7805"
                                                                                                y2="43.6701"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#E1E3E1">
                                                                                                </stop>
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#C1C5C4">
                                                                                                </stop>
                                                                                                <stop offset="0.3"
                                                                                                    stop-color="#9BA1A2">
                                                                                                </stop>
                                                                                                <stop offset="0.5"
                                                                                                    stop-color="#7D8487">
                                                                                                </stop>
                                                                                                <stop offset="0.7"
                                                                                                    stop-color="#687074"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#5B6469"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#576065"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint4_linear_3316_100"
                                                                                                x1="34.7553" y1="30.774"
                                                                                                x2="33.4271"
                                                                                                y2="32.9615"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#27343C">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#00111E"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint5_linear_3316_100"
                                                                                                x1="30.9219"
                                                                                                y1="22.7428"
                                                                                                x2="28.7344"
                                                                                                y2="19.2272"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#02131F">
                                                                                                </stop>
                                                                                                <stop offset="0.9"
                                                                                                    stop-color="#02131F"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint6_linear_3316_100"
                                                                                                x1="24.9869"
                                                                                                y1="28.3857"
                                                                                                x2="21.7057"
                                                                                                y2="29.3232"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.2"
                                                                                                    stop-color="#02131F">
                                                                                                </stop>
                                                                                                <stop offset="0.9"
                                                                                                    stop-color="#02131F"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint7_linear_3316_100"
                                                                                                x1="16.242" y1="32.7375"
                                                                                                x2="15.7732"
                                                                                                y2="31.5656"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#02131F">
                                                                                                </stop>
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#02131F">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#02131F"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint8_linear_3316_100"
                                                                                                x1="27.8141"
                                                                                                y1="13.4475"
                                                                                                x2="25.1578" y2="13.76"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.3"
                                                                                                    stop-color="#02131F">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#02131F"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint9_linear_3316_100"
                                                                                                x1="27.8969"
                                                                                                y1="13.4029"
                                                                                                x2="26.0992"
                                                                                                y2="13.6373"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.4"
                                                                                                    stop-color="#27343C">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#3B474E"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint10_linear_3316_100"
                                                                                                x1="-0.282227"
                                                                                                y1="25.6492"
                                                                                                x2="21.5146"
                                                                                                y2="38.2273"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#25323B"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                                <stop offset="0.1"
                                                                                                    stop-color="#27343C">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint11_linear_3316_100"
                                                                                                x1="24.9609"
                                                                                                y1="29.2189"
                                                                                                x2="24.9609"
                                                                                                y2="25.4689"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.3"
                                                                                                    stop-color="#A5ABAF">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#A5ABAF"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint12_linear_3316_100"
                                                                                                x1="37.2266"
                                                                                                y1="1.79785"
                                                                                                x2="37.2266"
                                                                                                y2="49.4541"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop
                                                                                                    stop-color="#6B7378">
                                                                                                </stop>
                                                                                                <stop offset="0.2"
                                                                                                    stop-color="#333F47">
                                                                                                </stop>
                                                                                                <stop offset="0.5"
                                                                                                    stop-color="#27343C">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="#333F47">
                                                                                                </stop>
                                                                                                <stop offset="1"
                                                                                                    stop-color="#434D54">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                            <lineargradient
                                                                                                id="paint13_linear_3316_100"
                                                                                                x1="44.757" y1="6.32363"
                                                                                                x2="34.2102"
                                                                                                y2="21.7924"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.7"
                                                                                                    stop-color="#49545B">
                                                                                                </stop>
                                                                                                <stop offset="0.8"
                                                                                                    stop-color="white"
                                                                                                    stop-opacity="0">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                        </defs>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-f9a450d elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="f9a450d" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1562"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                fill="#ffffff"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1562)">
                                                                                            <path
                                                                                                d="M36.6607 9.8069C38.3423 7.5807 40.9209 6.08178 43.7554 5.13571C46.8423 4.10687 50.1305 3.82305 53.4118 3.82305C55.1514 3.82305 58.3133 3.55401 58.327 5.73292C58.3372 7.23184 58.3099 8.73075 58.3031 10.2297C58.2997 11.0013 58.2928 11.7729 58.2894 12.5475C58.286 13.1447 58.3167 13.6976 57.7948 14.1765C57.2082 14.7146 56.3316 14.892 55.5095 14.9156C52.5932 14.9156 49.6768 14.9156 46.7605 14.9156C44.8094 14.9156 42.8583 14.9156 40.9073 14.9156C39.8806 14.9156 38.7993 14.9925 37.7795 14.8624C36.3264 14.6791 34.7881 13.7538 35.2929 12.3288C35.6033 11.4448 36.0774 10.5815 36.6607 9.8069ZM37.0564 12.9762C37.3053 13.3132 38.1069 13.3487 38.4992 13.3546C41.1495 13.399 43.8066 13.3546 46.4569 13.3546C49.4722 13.3546 52.4874 13.3546 55.5027 13.3546C55.8608 13.3458 56.0996 13.2334 56.4202 13.1506C56.4543 13.1418 56.4748 13.124 56.4885 13.1152C56.5055 12.9999 56.4782 12.855 56.4782 12.7486C56.4816 12.0922 56.485 11.4389 56.4885 10.7825C56.4987 9.26587 56.5055 7.74626 56.5157 6.2296C56.5191 5.82752 56.6556 5.63831 56.2054 5.48458C55.5027 5.24806 54.4828 5.38997 53.7495 5.38997C50.9184 5.38997 48.1385 5.54962 45.4166 6.28873C42.7765 7.00419 40.1637 8.25181 38.5094 10.2267C37.9773 10.8624 37.51 11.5926 37.2098 12.2874C37.1109 12.5298 36.9165 12.784 37.0564 12.9762Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M74.8769 9.3243C75.7944 10.0279 76.654 10.7877 77.4385 11.6037C77.8205 12.0028 78.2196 12.3931 78.223 12.943C78.2264 13.4515 77.916 13.9098 77.4555 14.2084C76.7119 14.6843 75.7057 14.575 74.8325 14.575C73.4681 14.575 72.1038 14.575 70.7394 14.575C68.2562 14.575 65.7731 14.575 63.2899 14.575C63.2524 14.5779 63.2115 14.5779 63.1705 14.575C63.1023 14.575 63.0409 14.569 62.9795 14.5602C61.9733 14.4508 61.1615 13.8861 61.1001 12.9489C61.0796 12.6444 61.0933 12.334 61.0899 12.0265C61.0762 10.7375 61.0626 9.45143 61.0523 8.16242C61.0455 7.63321 61.0421 7.10696 61.0353 6.57776C61.0319 6.19342 61.0046 5.82091 61.2024 5.45727C61.8334 4.30721 63.2933 4.45207 64.494 4.65311C65.8004 4.87485 67.0658 5.23258 68.2903 5.68196C70.7053 6.57185 72.9156 7.82538 74.8769 9.3243ZM64.2109 6.19933C63.8971 6.14316 63.1501 5.89482 62.8635 6.09881C62.8022 6.14316 62.8635 6.07516 62.8397 6.19933C62.7817 6.49793 62.8465 6.85271 62.8499 7.15427C62.8635 8.43737 62.8772 9.71751 62.8874 11.0006C62.8908 11.515 62.8977 12.0294 62.9045 12.5439C62.9079 12.8839 62.8056 12.9933 63.1739 13.0139C67.3012 13.0139 71.4284 13.0139 75.5591 13.0139C75.7501 13.0139 75.9547 13.0317 76.1423 13.0139C76.1764 13.011 76.2105 13.0139 76.2447 13.008C76.3095 13.0021 76.347 12.9755 76.3947 12.9519C76.3333 12.8661 76.2412 12.7863 76.1662 12.7094C75.9957 12.532 75.8183 12.3547 75.6409 12.1832C74.1503 10.7375 72.4312 9.47508 70.5313 8.44919C68.5837 7.39965 66.4621 6.60437 64.2109 6.19933Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M76.2003 30.0916C79.4168 29.0539 83.2336 29.9644 85.3928 32.2734C87.5689 34.6031 87.9169 37.9291 86.1193 40.519C84.3183 43.1177 80.788 44.4422 77.3668 43.8686C73.5227 43.2241 70.7769 40.1878 70.736 36.8382C70.7769 33.8226 72.9394 31.1441 76.2003 30.0916ZM76.7563 42.1036C79.3486 42.9166 82.2479 42.2367 84.0182 40.4066C85.7611 38.6061 85.9487 35.9483 84.5639 33.9497C83.1825 31.9571 80.406 30.8632 77.7659 31.3303C74.737 31.8684 72.5745 34.1685 72.5369 36.8411C72.571 39.1472 74.2185 41.3083 76.7563 42.1036Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M77.5204 33.5554C78.9871 33.0883 80.7062 33.4904 81.709 34.5252C82.7391 35.5924 82.9096 37.1416 82.0842 38.3419C81.2724 39.5186 79.6931 40.1306 78.1377 39.9029C76.347 39.6398 75.0986 38.2798 75.0065 36.7455C75.0031 36.7159 74.9997 36.6863 75.0031 36.6568C75.0031 36.6183 75.0065 36.5828 75.0099 36.5474C75.0952 35.2051 76.04 34.0255 77.5204 33.5554ZM78.8063 38.7854C80.1434 38.7884 81.2656 37.8157 81.2622 36.6568C81.2588 35.4949 80.1502 34.5281 78.8063 34.5281C77.4385 34.5281 76.3879 35.4949 76.3504 36.6568C76.3879 37.8216 77.4419 38.7824 78.8063 38.7854Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.0676 30.0916C27.2841 29.0539 31.101 29.9644 33.2601 32.2734C35.4397 34.6031 35.7842 37.9291 33.9866 40.519C32.1856 43.1177 28.6553 44.4422 25.2342 43.8686C21.39 43.2241 18.6442 40.1878 18.6033 36.8382C18.6442 33.8226 20.8067 31.1441 24.0676 30.0916ZM24.6236 42.1036C27.2159 42.9166 30.1152 42.2367 31.8855 40.4066C33.6285 38.6061 33.8161 35.9483 32.4312 33.9497C31.0498 31.9571 28.2733 30.8632 25.6332 31.3303C22.6043 31.8684 20.4418 34.1685 20.4043 36.8411C20.4384 39.1472 22.0858 41.3083 24.6236 42.1036Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M25.3875 33.5554C26.8543 33.0883 28.5734 33.4904 29.5762 34.5252C30.6063 35.5924 30.7768 37.1416 29.9514 38.3419C29.1396 39.5186 27.5603 40.1306 26.0049 39.9029C24.2142 39.6398 22.9658 38.2798 22.8737 36.7455C22.8703 36.7159 22.8669 36.6863 22.8703 36.6568C22.8703 36.6183 22.8737 36.5828 22.8771 36.5474C22.9624 35.2051 23.9072 34.0255 25.3875 33.5554ZM26.6735 38.7854C28.0106 38.7884 29.1328 37.8157 29.1294 36.6568C29.1259 35.4949 28.0174 34.5281 26.6735 34.5281C25.3057 34.5281 24.2551 35.4949 24.2176 36.6568C24.2551 37.8216 25.3091 38.7824 26.6735 38.7854Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M46.3 2.95908C47.2176 2.76691 47.985 2.65752 48.9026 2.65456C50.0384 2.65161 51.1708 2.64865 52.3067 2.6457C54.6466 2.63978 56.9865 2.63091 59.3298 2.625C59.4731 2.625 59.6163 2.625 59.763 2.625C61.83 2.68117 63.9312 3.08029 65.9095 3.56515C70.3096 4.64425 74.4641 6.52751 77.8375 9.21788C78.8711 10.0398 79.8261 10.9385 80.6891 11.8935C81.5214 12.8159 82.6231 13.8684 82.6674 15.0923C82.7118 16.405 82.6674 17.7236 82.6674 19.0333C82.6674 19.7428 82.548 20.4021 82.0023 20.9698C81.2178 21.7798 80.174 21.8242 79.0518 21.8567C76.8961 21.9217 74.737 22.1789 72.67 22.7229C70.2857 23.3527 68.0004 24.4052 66.3597 26.0637C65.9266 26.5042 65.5445 26.9802 65.2205 27.4858C64.8965 27.9943 64.6509 28.5235 64.2245 28.9817C63.3854 29.8834 62.1336 30.4245 60.8033 30.4895C60.4554 30.5073 60.1075 30.5102 59.7596 30.5191C57.8802 30.5191 56.0007 30.5191 54.1213 30.5191C52.1907 30.5191 50.2124 30.6285 48.2852 30.5013C46.283 30.3683 44.3728 29.5523 43.0665 28.2219C41.7089 26.8383 40.3548 25.5256 38.6084 24.4909C36.9165 23.4916 34.7779 23.0895 33.509 21.6172C32.6631 20.6386 32.4039 19.5181 32.4039 18.3237C32.4039 15.8758 32.0628 13.4486 33.1782 11.1455C35.4123 6.54229 40.9619 4.0707 46.3 2.95908ZM60.0632 12.1625C60.0632 13.3185 60.0632 14.4715 60.0632 15.6275C60.3394 15.7162 60.5373 15.9468 60.5373 16.2128V18.9742C60.5373 19.2432 60.3394 19.4738 60.0632 19.5595C60.0632 20.5145 60.0632 21.4694 60.0632 22.4243C60.3394 22.513 60.5373 22.7407 60.5373 23.0097V25.771C60.5373 26.0401 60.3394 26.2707 60.0632 26.3564C60.0632 26.5279 60.0632 26.7023 60.0632 26.8738C60.0632 27.9115 60.0632 28.9463 60.0632 29.984C61.0319 29.9544 61.9528 29.8775 62.8055 29.3986C64.0335 28.7068 64.4087 27.5272 65.1932 26.5279C66.5064 24.8545 68.4268 23.6365 70.5518 22.8382C72.5438 22.0873 74.6824 21.6764 76.8381 21.4694C77.7454 21.3807 78.6562 21.3334 79.5703 21.3186C80.921 21.2979 82.0193 20.6268 82.0705 19.3792C82.1217 18.1138 82.0705 16.8396 82.0705 15.5742C82.0705 15.4146 82.0773 15.249 82.0705 15.0894C82.0364 14.3651 81.5759 13.8329 81.1189 13.2564C80.3105 12.2482 79.4066 11.2992 78.4174 10.4212C75.1975 7.56227 71.1146 5.52232 66.7349 4.31609C64.6031 3.73071 62.3212 3.24585 60.0666 3.15125C60.0631 6.15796 60.0632 9.16171 60.0632 12.1625ZM33.0076 16.6356C33.0076 17.4161 32.9701 18.2025 33.0144 18.983C33.0656 19.867 33.4476 20.7332 34.0854 21.4221C34.7574 22.1464 35.6102 22.5426 36.572 22.9092C38.5197 23.6542 40.2456 24.7895 41.7294 26.1022C43.1415 27.3498 44.1716 28.8103 46.1056 29.5198C48.0533 30.2353 50.4102 30.0017 52.4841 30.0017C54.7557 30.0017 57.0274 30.0017 59.3025 30.0017C59.3571 30.0017 59.4117 30.0017 59.4628 30.0017C59.4628 28.8014 59.4628 27.5981 59.4628 26.3978C59.1047 26.3594 58.8284 26.0962 58.8284 25.7769V23.0156C58.8284 22.6963 59.1081 22.4332 59.4628 22.3948C59.4628 21.9247 59.4628 21.4546 59.4628 20.9845C59.4628 20.5233 59.4628 20.0592 59.4628 19.598C59.1047 19.5595 58.8284 19.2964 58.8284 18.9771V16.2158C58.8284 15.8965 59.1081 15.6334 59.4628 15.5949C59.4628 12.4848 59.4628 9.37457 59.4628 6.26439C59.4628 5.22372 59.4628 4.186 59.4628 3.14533C55.7074 3.15716 51.9519 3.16603 48.1965 3.17786C47.7974 3.17786 47.4222 3.27246 47.0334 3.34637C46.0101 3.54446 44.9936 3.78097 44.001 4.06775C42.3604 4.54078 40.7709 5.14981 39.3042 5.94509C37.2679 7.04489 35.4771 8.5172 34.3003 10.3443C33.683 11.3051 33.2123 12.3724 33.0451 13.4693C32.8984 14.3976 33.0076 15.6304 33.0076 16.6356Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M1.20407 26.7174H3.01869C3.01528 26.3833 3.01527 26.0522 3.01527 25.7181C1.73618 25.4166 0.351326 24.6243 0.726532 23.3293C1.13584 21.9161 3.11418 21.3101 4.5843 21.1445C4.75484 21.1297 4.92539 21.1238 5.09594 21.1179C6.35117 19.4623 8.24083 18.2502 10.243 17.3307C14.4965 15.3794 19.3537 14.4334 24.0812 13.8332C25.0397 13.712 25.9981 13.6026 26.9634 13.5169C27.2807 13.4873 27.5979 13.4607 27.9151 13.4371C27.9424 13.4341 27.9697 13.4341 27.997 13.4311C28.0004 13.4075 28.0038 13.3838 28.0106 13.3602C28.0413 13.2124 28.0822 13.0645 28.1266 12.9167C28.2391 12.5442 28.3824 12.1806 28.5461 11.8228C28.9316 10.9714 29.4023 10.1524 29.9412 9.36898C31.2681 7.44138 32.9701 5.68525 34.9382 4.22476C37.3395 2.44203 40.1365 1.04954 43.2336 0.428685C45.0278 0.0709547 46.8424 0 48.6741 0C52.01 0 55.3424 0 58.6783 0C60.2951 0 61.5845 0.218777 63.2422 0.49964C65.8208 0.937194 68.3688 1.52257 70.8451 2.28238C78.5334 4.64162 85.3996 8.75109 90.0078 14.6433C92.8082 18.2235 94.7046 22.3448 95.629 26.5962C96.1202 26.5962 96.6079 26.5962 97.0991 26.5962C97.9587 26.5962 98.808 26.8445 98.9717 27.6901C99.1423 28.5563 98.5283 29.3516 97.4811 29.393C97.0241 29.4107 96.5636 29.4019 96.1031 29.3989C96.1884 30.0996 96.243 30.8003 96.26 31.5039C96.2634 31.6872 96.2737 31.8735 96.2635 32.0568H97.6074C98.4362 32.0568 98.9615 32.8254 98.5658 33.4581L97.3208 35.4271C97.1298 35.7316 96.7614 35.9179 96.3624 35.9179H89.8577C89.0664 35.9179 88.3705 35.4626 88.1522 34.8004L87.3916 32.4677C84.5878 28.3346 76.7563 27.7463 72.6052 30.8417C71.5239 31.6458 70.7224 32.6451 70.296 33.8011L70.0947 34.9659C70.0027 35.5099 69.4637 35.909 68.8293 35.909H36.8142C36.2037 35.909 35.6784 35.5336 35.559 35.0132L35.3032 33.8779C33.4715 28.4942 24.3984 27.4211 19.8141 30.8387C19.0126 31.4359 18.3611 32.1425 17.904 32.9378L17.2593 34.963C17.0786 35.5247 16.4885 35.9149 15.8131 35.9149H3.88165C3.4928 35.9149 3.13465 35.7257 2.94705 35.4242L1.73276 33.4552C1.19724 32.4115 1.46329 32.1425 3.73157 32.0745C3.5883 31.8557 3.46211 31.6251 3.35637 31.3857C3.0835 30.7618 3.01869 30.1144 3.01869 29.4551C3.01869 29.2363 3.01527 29.0205 3.00845 28.8047H1.20407C0.542351 28.8047 0 28.3346 0 27.761C0 27.1875 0.542351 26.7174 1.20407 26.7174ZM95.8303 27.6221C95.9053 28.036 95.9701 28.4529 96.0315 28.8697C96.3931 28.8697 96.7512 28.8697 97.1128 28.8697C97.3925 28.8697 97.6892 28.8934 97.9416 28.7633C98.3987 28.5268 98.5317 27.903 98.2657 27.5068C97.9212 26.9953 97.1025 27.1195 96.5261 27.1195C96.26 27.1195 95.9974 27.1195 95.7313 27.1195C95.7654 27.2851 95.7996 27.4536 95.8303 27.6221ZM7.45632 28.8017H4.81966C4.81966 28.8904 4.82307 28.9761 4.82307 29.0648C4.82307 29.4906 4.78896 29.934 4.88446 30.3539C5.03455 31.0072 5.41999 31.5808 5.93845 32.0509C6.56947 32.0509 7.27894 32.0538 8.08051 32.0538H13.3504C15.7244 26.9037 18.8932 23.4092 26.1278 23.4092C33.11 23.4092 39.2155 26.6642 42.5344 31.5187C42.5446 31.7316 42.548 31.9089 42.548 32.0538H65.5173C67.4137 26.7913 71.7695 23.4092 79.0314 23.4092C85.3246 23.4092 90.9015 26.0522 94.3704 30.1262C94.3636 30.0582 94.3601 29.9873 94.3533 29.9193C94.309 29.4876 94.2544 29.0589 94.193 28.6273C94.193 28.6214 94.193 28.6184 94.1896 28.6125C94.1794 28.5563 94.1725 28.5002 94.1623 28.444C94.1384 28.308 94.118 28.172 94.0907 28.036C94.0429 27.767 93.9884 27.4979 93.9338 27.2318C93.6745 26.0049 93.3369 24.7898 92.9207 23.5984C91.8702 20.5946 90.3796 17.854 88.2716 15.2109C85.7578 12.0564 82.4048 9.31872 78.6221 7.24034C73.5466 4.45241 67.7719 2.78793 61.8846 1.86256C61.4412 1.79161 60.9944 1.72657 60.5475 1.66448C60.3019 1.63196 59.9029 1.629 59.6027 1.55805C56.0315 1.55805 52.4636 1.55805 48.8924 1.55805C46.3273 1.55805 43.8305 1.72657 41.4054 2.54255C38.066 3.666 35.1361 5.83603 32.9667 8.2751C31.9946 9.36898 31.1453 10.5604 30.4869 11.8169C30.2516 12.2663 30.0504 12.7334 29.9003 13.2124C29.8321 13.4193 29.7809 13.6292 29.7331 13.8421C29.7229 13.8864 29.7161 13.9308 29.7093 13.9781C29.7434 13.7859 29.7024 14.0638 29.6888 14.1082C29.624 14.3476 29.4807 14.5605 29.2624 14.7202C29.0748 14.8591 28.8736 14.9242 28.6826 14.933C28.2767 15.001 27.8401 15.001 27.4308 15.0365C26.7247 15.0956 26.022 15.1666 25.3194 15.2464C24.586 15.3292 23.4741 15.48 22.5975 15.613C21.4855 15.7845 20.3803 15.9766 19.282 16.2013C16.9626 16.6744 14.6431 17.2657 12.467 18.1171C10.4954 18.8917 8.55122 19.8732 7.13908 21.3219C6.70589 21.7654 6.38187 22.2975 5.9828 22.7765C5.40976 23.4624 4.87764 24.098 4.82307 24.9761C4.78896 25.5526 4.80601 26.135 4.81624 26.7145H7.45291C8.11463 26.7145 8.65696 27.1845 8.65696 27.7581C8.65696 28.3346 8.11804 28.8017 7.45632 28.8017ZM3.01869 25.1682C3.03233 24.4262 3.22675 23.7196 3.60536 23.0544C3.88506 22.5607 4.28415 22.1113 4.65935 21.6589C4.63206 21.6619 4.60817 21.6619 4.58089 21.6649C3.40752 21.7979 1.75323 22.2709 1.3371 23.3648C0.965309 24.3463 2.03293 24.9199 3.01527 25.1801C3.01868 25.1742 3.01869 25.1712 3.01869 25.1682Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M14.0701 18.2414C15.0593 17.9103 17.7198 17.2806 18.2724 18.5459C18.767 19.6783 16.6999 20.6155 15.8029 20.9348C14.7728 21.3043 12.0781 21.9991 11.4232 20.7308C11.4096 20.713 11.3994 20.6923 11.3925 20.6657C11.0037 19.4595 13.0809 18.5726 14.0701 18.2414ZM11.969 20.509C12.467 21.325 14.5408 20.7869 15.2537 20.5652C15.9086 20.3612 16.5669 20.0803 17.0956 19.6842C17.3583 19.4861 17.846 19.1018 17.7198 18.7529C17.5697 18.3479 16.775 18.339 16.3862 18.342C15.6869 18.3508 14.9842 18.4986 14.3328 18.7115C13.671 18.9273 11.7268 19.6546 11.969 20.509Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M36.074 17.8604H39.2598C39.6555 17.8604 39.9829 18.1412 39.9829 18.4871C39.9829 18.833 39.6589 19.1139 39.2598 19.1139H36.074C35.6783 19.1139 35.3509 18.833 35.3509 18.4871C35.3509 18.1412 35.6749 17.8604 36.074 17.8604Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M75.6921 17.8604H78.878C79.2736 17.8604 79.6011 18.1412 79.6011 18.4871C79.6011 18.833 79.277 19.1139 78.878 19.1139H75.6921C75.2965 19.1139 74.969 18.833 74.969 18.4871C74.969 18.1412 75.2965 17.8604 75.6921 17.8604Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-2f4d2ec"
                                                                data-id="2f4d2ec" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-efa6ef2 elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="efa6ef2" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="51"
                                                                                        viewBox="0 0 50 51" fill="none">
                                                                                        <mask id="mask0_3316_2"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="50"
                                                                                            height="51">
                                                                                            <rect y="0.544922"
                                                                                                width="50" height="50"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_3316_2)">
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M12.3263 34.169C12.3263 36.7863 10.3604 38.9002 7.93336 38.9002C5.50601 38.9002 3.54297 36.7863 3.54297 34.169C3.54297 31.5565 5.50601 29.4404 7.93336 29.4404C10.3604 29.4404 12.3263 31.5562 12.3263 34.169ZM46.6341 34.169C46.6341 36.7863 44.6653 38.9002 42.2411 38.9002C39.8141 38.9002 37.8453 36.7863 37.8453 34.169C37.8453 31.5565 39.8141 29.4404 42.2411 29.4404C44.6653 29.4404 46.6341 31.5562 46.6341 34.169ZM14.6117 30.2625C14.0418 30.2625 13.5829 30.7718 13.5829 31.1551V43.963C13.5829 44.3461 14.0418 44.8599 14.6117 44.8599C15.1818 44.8599 15.6433 44.3461 15.6433 43.963V31.1551C15.6433 30.7718 15.1818 30.2625 14.6117 30.2625ZM18.0985 30.2625C17.5341 30.2625 17.0726 30.7718 17.0726 31.1551V43.963C17.0726 44.3461 17.5344 44.8599 18.0985 44.8599C18.6684 44.8599 19.1301 44.3461 19.1301 43.963V31.1551C19.1301 30.7718 18.6684 30.2625 18.0985 30.2625ZM21.5879 30.2625C21.0152 30.2625 20.5566 30.7718 20.5566 31.1551V43.963C20.5566 44.3461 21.0152 44.8599 21.5879 44.8599C22.1552 44.8599 22.6166 44.3461 22.6166 43.963V31.1551C22.6166 30.7718 22.1552 30.2625 21.5879 30.2625ZM25.0716 30.2625C24.5046 30.2625 24.0457 30.7718 24.0457 31.1551V43.963C24.0457 44.3461 24.5046 44.8599 25.0716 44.8599C25.6471 44.8599 26.1117 44.3461 26.1117 43.963V31.1551C26.1117 30.7718 25.6471 30.2625 25.0716 30.2625ZM28.5724 30.2625C28.0022 30.2625 27.5382 30.7718 27.5382 31.1551V43.963C27.5382 44.3461 28.0022 44.8599 28.5724 44.8599C29.1396 44.8599 29.6014 44.3461 29.6014 43.963V31.1551C29.6014 30.7718 29.1396 30.2625 28.5724 30.2625ZM32.0563 30.2625C31.4862 30.2625 31.0279 30.7718 31.0279 31.1551V43.963C31.0279 44.3461 31.4862 44.8599 32.0563 44.8599C32.6265 44.8599 33.0854 44.3461 33.0854 43.963V31.1551C33.0854 30.7718 32.6265 30.2625 32.0563 30.2625ZM35.5457 30.2625C34.9756 30.2625 34.5138 30.7718 34.5138 31.1551V43.963C34.5138 44.3461 34.9756 44.8599 35.5457 44.8599C36.113 44.8599 36.5742 44.3461 36.5742 43.963V31.1551C36.5745 30.7718 36.1133 30.2625 35.5457 30.2625Z"
                                                                                                fill="#5f5f5f"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M48.6572 7.36133L1.34237 7.36746C-0.111986 7.36746 0.00209802 8.81095 0.00209802 8.81095V33.389C0.594425 29.6579 3.60557 26.8147 7.23691 26.8147H42.8263C46.3465 26.8147 49.2799 29.4795 50 33.0327V8.81402C50.0003 8.81371 50.0003 7.36133 48.6572 7.36133Z"
                                                                                                fill="#5f5f5f"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M29.6112 15.1588C28.721 15.1588 28.0647 15.8384 27.9042 16.9225L27.8954 16.9957H31.1876V16.9299C31.1376 15.9258 30.459 15.1588 29.6112 15.1588ZM20.7471 15.1588C19.8518 15.1588 19.1983 15.8384 19.0427 16.9225L19.0316 16.9957H22.3207L22.3178 16.9299C22.2709 15.9258 21.5952 15.1588 20.7471 15.1588ZM39.1479 22.1692C38.2193 22.1692 37.491 21.7874 36.9764 21.0446L36.9596 21.0207H36.8372V24.7326H34.4096V13.6721H36.7177V14.641H36.8372L36.8589 14.6155C37.3399 13.8385 38.0634 13.4282 38.9531 13.4282C41.4746 13.4282 42.3699 15.8807 42.3699 17.9845C42.3705 20.0641 41.3753 22.1692 39.1479 22.1692ZM33.6176 18.4065H27.9008L27.9042 18.4723C27.9566 19.7032 28.6294 20.4367 29.7028 20.4367C30.3868 20.4367 30.9458 20.0834 31.1876 19.5144H33.4591C33.023 21.1749 31.6187 22.1692 29.675 22.1692C27.0806 22.1692 25.4709 20.4845 25.4709 17.7746C25.4709 15.3399 27.2892 13.4279 29.6112 13.4279C30.7925 13.4279 31.7828 13.8486 32.4807 14.6345C33.2204 15.4686 33.6258 16.7068 33.6258 18.1325C33.6258 18.2281 33.6204 18.3136 33.6176 18.4065ZM24.7506 18.4065H19.037V18.4723C19.0842 19.7032 19.7599 20.4367 20.8359 20.4367C21.5172 20.4367 22.0788 20.0834 22.3207 19.5144H24.5924C24.1557 21.1749 22.7491 22.1692 20.8083 22.1692C18.2196 22.1692 16.6068 20.4845 16.6068 17.7746C16.6068 15.3399 18.4253 13.4279 20.7468 13.4279C21.9258 13.4279 22.9127 13.8486 23.6163 14.6345C24.3557 15.4686 24.7563 16.7068 24.7563 18.1325C24.7563 18.2281 24.7537 18.3136 24.7506 18.4065ZM15.784 18.3393C15.784 20.9144 14.58 22.1695 12.0997 22.1695C9.57794 22.1695 8.40723 20.8099 8.40723 17.9036V17.4664H10.9125V18.468C10.9125 19.2616 11.3296 19.7093 12.0525 19.7093C12.7865 19.7093 13.1146 19.2285 13.1146 18.1475V10.5234H15.784V18.3393ZM38.3667 15.4015C37.5855 15.4015 36.7482 16.0109 36.7482 17.7103C36.7482 19.3842 37.2739 20.1928 38.3556 20.1928C39.5203 20.1928 39.9403 18.9126 39.9403 17.7103C39.9405 16.5962 39.526 15.4015 38.3667 15.4015ZM43.5605 24.4525C43.1122 24.4525 42.6823 24.2606 42.3653 23.9192C42.0484 23.5777 41.8703 23.1147 41.8703 22.6318C41.8703 21.6302 42.6294 20.8096 43.5605 20.8096C44.4917 20.8096 45.2507 21.6302 45.2507 22.6318C45.2508 22.8709 45.2071 23.1077 45.1221 23.3286C45.0372 23.5495 44.9127 23.7502 44.7558 23.9193C44.5988 24.0883 44.4125 24.2224 44.2074 24.3139C44.0023 24.4054 43.7825 24.4525 43.5605 24.4525ZM43.5605 21.2662C43.2245 21.2672 42.9026 21.4114 42.665 21.6673C42.4274 21.9232 42.2935 22.27 42.2925 22.6318C42.2925 23.3822 42.8626 23.9929 43.5605 23.9929C44.2584 23.9929 44.8285 23.3819 44.8285 22.6318C44.8275 22.27 44.6935 21.9233 44.456 21.6674C44.2184 21.4116 43.8965 21.2673 43.5605 21.2662ZM43.8299 23.6127L43.5548 22.8522H43.2598V23.6127H42.8348V21.6899H43.6217C43.8524 21.6899 43.975 21.7273 44.0863 21.8202C44.1975 21.925 44.2723 22.0972 44.2723 22.2678C44.2723 22.4474 44.1918 22.6168 44.0666 22.7051C44.0444 22.7278 44.0132 22.7397 43.9605 22.7636L44.2917 23.6127H43.8299ZM43.5079 22.0313H43.2601V22.5225H43.5136C43.7469 22.5225 43.8413 22.452 43.8413 22.2724C43.8413 22.0972 43.7523 22.0313 43.5079 22.0313Z"
                                                                                                fill="white"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-7650d36 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="7650d36" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1673"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                transform="matrix(-1 0 0 1 99 0)"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1673)">
                                                                                            <path
                                                                                                d="M76.942 31.6178C78.5261 31.0396 80.3967 31.5347 81.4737 32.8018C82.5728 34.0965 82.7586 35.9818 81.8611 37.4334C80.9636 38.888 79.2221 39.6107 77.5246 39.3001C75.6508 38.9557 74.3471 37.3134 74.2463 35.502C74.2431 35.4651 74.24 35.4251 74.24 35.3851C74.24 35.3359 74.2431 35.2898 74.2494 35.2437C74.3376 33.6198 75.358 32.1929 76.942 31.6178ZM78.3434 37.7501C79.6692 37.747 80.7683 36.6707 80.7652 35.3759C80.762 34.0812 79.6598 33.0048 78.334 33.0109C76.983 33.0171 75.9406 34.0873 75.9122 35.3851C75.9437 36.6799 76.9955 37.7532 78.3434 37.7501Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M75.5784 27.7715C78.8945 26.5628 82.8153 27.6023 85.0544 30.2749C87.325 32.9874 87.6746 36.8931 85.7945 39.9039C83.9364 42.884 80.3337 44.4063 76.8349 43.7574C72.8701 43.0224 70.02 39.5041 69.9728 35.6076C70.0011 32.117 72.2276 28.9924 75.5784 27.7715ZM76.1201 41.8722C78.8662 42.8379 81.9241 42.0198 83.7979 39.8424C85.6433 37.6989 85.8386 34.522 84.3742 32.1416C82.9098 29.7643 79.9747 28.4634 77.1782 29.0201C73.9723 29.6598 71.6734 32.4153 71.645 35.6045C71.6797 38.357 73.4369 40.9311 76.1201 41.8722Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.4159 31.7135C26 31.1353 27.8706 31.6304 28.9476 32.8975C30.0467 34.1923 30.2325 36.0775 29.335 37.5291C28.4374 38.9837 26.6959 39.7064 24.9985 39.3958C23.1247 39.0514 21.8209 37.4091 21.7202 35.5977C21.717 35.5608 21.7139 35.5208 21.7139 35.4808C21.7139 35.4316 21.717 35.3855 21.7233 35.3394C21.8115 33.7155 22.8318 32.2916 24.4159 31.7135ZM25.8173 37.8458C27.1431 37.8427 28.2422 36.7664 28.2391 35.4716C28.2359 34.1769 27.1337 33.1005 25.8079 33.1066C24.4568 33.1128 23.4144 34.183 23.3861 35.4808C23.4207 36.7756 24.4694 37.8489 25.8173 37.8458Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M23.0526 27.8672C26.3688 26.6586 30.2896 27.698 32.5287 30.3706C34.7992 33.0831 35.1488 36.9888 33.2687 39.9996C31.4107 42.9797 27.808 44.502 24.3092 43.8531C20.3443 43.1181 17.4942 39.5998 17.447 35.7033C17.4785 32.2127 19.7019 29.0912 23.0526 27.8672ZM23.5943 41.971C26.3404 42.9366 29.3983 42.1186 31.2721 39.9412C33.1176 37.7976 33.3128 34.6208 31.8484 32.2404C30.384 29.8631 27.449 28.5622 24.6524 29.1189C21.4465 29.7586 19.1476 32.5141 19.1192 35.7033C19.1539 38.4527 20.9112 41.0268 23.5943 41.971Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M87.1265 17.8149C87.1265 17.6611 87.2525 17.5535 87.4037 17.5412C89.5042 17.3905 93.7494 17.5781 93.8155 20.3951C93.8186 20.5428 93.6864 20.6688 93.5384 20.6688C91.5229 20.6719 89.5074 20.675 87.4919 20.6811C87.4068 20.6811 87.3439 20.6504 87.2966 20.6043C87.2966 20.6043 87.2935 20.6043 87.2935 20.6012C87.0226 20.389 87.1423 19.5586 87.136 19.2726C87.1297 18.7867 87.1265 18.3008 87.1265 17.8149ZM87.7375 20.2629C87.7438 20.269 87.747 20.2752 87.7501 20.2813C87.7501 20.2783 87.7469 20.269 87.7343 20.2567C87.7343 20.2598 87.7375 20.2598 87.7375 20.2629ZM87.6903 19.002C87.6934 19.2788 87.6997 19.5525 87.7092 19.8293C87.7123 19.9277 87.7312 20.0353 87.7281 20.1368C89.5609 20.1337 91.3969 20.1307 93.2297 20.1276C93.003 18.8205 91.3811 18.3838 90.197 18.2024C89.3751 18.0763 88.5217 18.0332 87.684 18.0732C87.6871 18.3808 87.6871 18.6914 87.6903 19.002Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M7.95826 18.1907C9.00066 17.6525 11.3311 16.9667 12.0271 18.3844C12.6349 19.6177 11.0729 20.8816 10.1281 21.3891C9.03845 21.9765 6.79306 22.65 5.99315 21.2722C5.98055 21.2507 5.97112 21.2292 5.96482 21.2076C5.96482 21.2076 5.96482 21.2076 5.96482 21.2046C5.41056 19.9344 6.97256 18.7012 7.95826 18.1907ZM6.4813 21.0108C7.12374 22.078 9.12978 21.3214 9.92653 20.8755C10.5721 20.5157 11.9893 19.4916 11.5106 18.5905C11.265 18.1292 10.5784 18.083 10.1155 18.1107C9.40062 18.1538 8.69834 18.4029 8.08109 18.7473C7.36622 19.1471 6.12858 20.0636 6.4813 21.0108Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M52.6106 18.9249L54.897 18.9219C55.2654 18.9219 55.5677 19.214 55.5677 19.5739C55.5677 19.9337 55.2686 20.2289 54.9001 20.2289L52.6138 20.232C52.2453 20.232 51.943 19.9398 51.943 19.58C51.943 19.2202 52.2453 18.9249 52.6106 18.9249Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M37.5834 9.49583C39.2305 7.98889 40.8933 6.50348 42.5372 4.99961C43.4662 4.1508 44.5023 3.56647 45.7714 3.36042C46.6973 3.20972 47.6294 3.20972 48.5648 3.20665C50.6055 3.20357 52.6462 3.2005 54.6869 3.19435C55.8899 3.19128 57.0079 3.63721 57.4173 4.84892C57.6408 5.51013 57.5369 6.33433 57.5401 7.02014C57.5432 8.13959 57.5432 9.25595 57.5464 10.3754C57.5464 11.0458 57.6188 11.7563 57.5117 12.4236C57.3196 13.6507 56.2394 14.4257 55.0081 14.4442C54.5514 14.4503 54.0948 14.4472 53.6382 14.4472C51.6857 14.4503 49.73 14.4534 47.7775 14.4564C44.0456 14.4626 40.3075 14.5364 36.5757 14.478C36.5032 14.478 36.4308 14.478 36.3615 14.478C36.3111 14.478 36.2639 14.4749 36.2167 14.4657C35.4797 14.3857 34.8688 13.9429 34.8436 13.1494C34.8184 12.3929 35.2939 11.6578 35.7978 11.1227C36.3458 10.5476 36.9945 10.031 37.5834 9.49583ZM45.0124 12.8326C48.3254 12.8265 51.6416 12.8142 54.9546 12.8142C55.4805 12.8142 55.8489 12.5466 55.8773 12.0023C55.9151 11.3011 55.8741 10.5845 55.8741 9.88026C55.871 8.85308 55.871 7.82589 55.8678 6.79871C55.8678 6.34047 56.0221 5.48244 55.6883 5.09494C55.3293 4.67669 54.4885 4.82431 53.9972 4.82739C52.9642 4.83046 51.9313 4.83047 50.8984 4.83354C50.0134 4.83662 49.1316 4.83661 48.2467 4.83968C47.3618 4.84276 46.4642 4.83354 45.6013 5.05804C44.5904 5.31945 43.926 5.9376 43.1891 6.65417C42.3923 7.4261 41.5325 8.11806 40.7137 8.86538C39.4918 9.98175 38.1849 11.0489 37.026 12.2299C36.8497 12.4082 36.689 12.6204 36.5883 12.848C39.4005 12.8419 42.2065 12.8357 45.0124 12.8326Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M60.714 5.8718C60.714 5.23519 60.7139 4.62626 61.0824 4.05731C61.5926 3.27308 62.4397 3.00245 63.3404 3.00245C64.9276 2.99938 66.5117 2.99629 68.0989 2.99322C69.9065 2.99014 71.6197 3.12239 73.2605 3.96197C75.4303 5.07527 77.0647 7.14809 77.597 9.48539C77.8079 10.4203 77.9308 11.5305 77.7765 12.487C77.5907 13.6279 76.5955 14.3691 75.446 14.4091C74.4099 14.446 73.3644 14.4122 72.3283 14.4152C69.2767 14.4214 66.2251 14.4275 63.1735 14.4306C63.142 14.4337 63.1074 14.4337 63.0727 14.4306C63.0129 14.4306 62.9531 14.4245 62.8995 14.4152C61.6682 14.283 60.7769 13.3665 60.7266 12.1302C60.7077 11.6597 60.7234 11.183 60.7234 10.7125C60.7203 9.10096 60.7171 7.48638 60.714 5.8718ZM63.0664 12.8007C65.4126 12.7976 67.7556 12.7914 70.1018 12.7884C71.5158 12.7853 72.933 12.7822 74.347 12.7791C74.6839 12.7791 75.0272 12.7945 75.3673 12.776C75.9436 12.7484 76.1389 12.4101 76.1389 11.8842C76.1357 9.87596 75.6067 8.0338 74.1108 6.57914C72.7724 5.27825 70.993 4.62011 69.1161 4.62011C67.7651 4.62011 66.4109 4.62625 65.0599 4.62625C64.4552 4.62625 63.8537 4.62933 63.2491 4.62933C62.7861 4.62933 62.424 4.78925 62.3862 5.30284C62.2854 6.65602 62.3925 8.05532 62.3956 9.41464C62.3956 10.1527 62.3988 10.8908 62.3988 11.6289C62.3988 12.1333 62.3579 12.7668 63.0664 12.8007Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M0.859772 27.3956C0.784195 27.1711 0.746368 26.9251 0.746368 26.6668C0.746368 25.9164 0.570023 24.8923 0.954231 24.2064C1.31009 23.5729 2.01552 23.2746 2.6863 23.3515C2.6863 22.7948 2.69575 22.2413 2.72094 21.6908C2.90044 18.0833 5.98355 15.2324 9.665 15.1801C10.7357 15.1771 11.8033 15.1771 12.8741 15.174C14.4865 15.1709 16.102 15.1678 17.7176 15.1648C17.8278 15.1002 17.9632 15.0571 18.1207 15.0479C19.1221 14.9987 19.8622 14.8849 20.8227 14.7004C22.5863 14.3652 24.3845 13.8608 25.8929 12.8767C26.6677 12.3692 27.1652 11.7449 27.6565 10.9853C28.321 9.95814 29.0642 8.97708 29.8704 8.05446C31.3443 6.36914 33.0795 4.8991 34.9911 3.70277C39.0977 1.13174 43.8782 -0.0307577 48.7154 0.0153732C51.3041 0.0399764 53.8927 0 56.4814 0C58.6921 0 60.906 0.0922686 63.1168 0.141475C64.6757 0.175304 66.2471 0.15378 67.8029 0.298323C70.5994 0.562807 73.3959 1.12866 75.994 2.18352C79.1621 3.47211 82.1665 5.6741 83.0325 9.08471C83.5742 11.2221 84.2261 13.3134 86.4053 14.4451C87.1958 14.8572 88.0776 15.011 88.9688 15.0172C89.0255 15.0172 89.0822 15.0233 89.1326 15.0325C89.2932 15.0325 89.4506 15.0325 89.6112 15.0325C91 15.0295 92.3542 15.3001 93.5541 16.0167C94.9681 16.8624 96.0388 18.1817 96.5679 19.7164C96.886 20.642 96.9143 21.5924 96.9174 22.555C96.9174 22.9148 96.9206 23.2746 96.9206 23.6344C97.5032 23.5268 98.1362 23.6959 98.5613 24.1818C99.1439 24.8492 98.977 25.8579 98.9802 26.6698C98.9802 27.1188 98.9991 27.5617 98.7692 27.9707C98.47 28.5028 97.878 28.8503 97.2576 28.8503C97.1222 28.8441 96.993 28.8257 96.8734 28.798C96.7411 29.8006 96.3852 30.757 95.8499 31.6028C95.9506 31.6427 96.0262 31.735 96.0199 31.8488C95.9191 33.5679 95.579 35.4439 93.7934 36.2036C92.5243 36.7418 91.2551 36.6587 89.9041 36.6618C89.8758 36.6618 89.8506 36.6556 89.8254 36.6495L87.6871 36.6526C87.7815 34.835 87.3469 32.9867 86.3801 31.3967C84.3898 28.1214 80.3934 26.3254 76.5923 27.0942C73.188 27.78 70.5364 30.2496 69.516 33.3896C69.4404 33.6756 69.3775 33.9647 69.3302 34.2599C69.3176 34.3429 69.283 34.4198 69.2357 34.4906C69.1287 35.038 69.072 35.6008 69.0657 36.1728C69.0688 36.345 69.0751 36.5172 69.0877 36.6895L66.4392 36.7848V36.7817C63.4128 36.8678 60.3833 36.8156 57.3569 36.8217C52.315 36.8309 47.273 36.8402 42.2343 36.8494C41.0502 36.8525 39.8629 36.8525 38.6788 36.8555C38.6725 36.8555 38.6662 36.8525 38.6599 36.8525L36.8712 36.8555V36.8371L35.2556 36.8402C35.3028 36.0775 35.2556 35.3117 35.117 34.5582C35.0667 34.4875 35.0289 34.4075 35.0163 34.3214C34.9375 33.8632 34.8273 33.4172 34.6824 32.9805C34.4903 32.4669 34.251 31.9687 33.9644 31.4921C31.9898 28.2168 28.0281 26.4207 24.2553 27.1896C19.9283 28.0691 16.8263 31.8734 16.7885 36.2651C16.7917 36.468 16.8011 36.671 16.8169 36.8709L14.5557 36.874C14.5557 36.8678 14.5557 36.8617 14.5557 36.8555C14.1904 36.8648 13.8251 36.8771 13.4598 36.8863C13.4409 36.8924 13.4189 36.8955 13.4 36.8955C11.8065 36.8986 10.2161 36.9048 8.6226 36.9078C6.86219 36.9109 4.69237 36.8033 3.63737 35.1917C2.85007 33.9893 2.97917 32.427 3.22796 31.083C3.22796 31.0553 3.23428 31.0277 3.24372 31.0031C3.25632 30.9477 3.28151 30.9077 3.31615 30.877C3.20277 30.6217 3.10202 30.3572 3.02014 30.0897L1.45183 30.0927C0.655075 30.0927 0 29.4592 0 28.6811C0.00630188 28.1153 0.359047 27.6201 0.859772 27.3956ZM97.2607 28.309C98.4763 28.3059 98.4291 27.1096 98.4291 26.2731C98.4259 25.4151 98.5173 24.1388 97.2544 24.1357C97.1347 24.1357 97.0277 24.148 96.93 24.1695C96.9363 25.4458 96.9458 26.719 96.9332 27.9953C96.9332 28.0845 96.93 28.1737 96.9237 28.2629C97.0245 28.2844 97.1379 28.3029 97.2607 28.309ZM32.7646 7.45783C31.9269 8.22668 31.149 9.06012 30.4404 9.94276C30.1885 10.2564 29.9618 10.5824 29.7382 10.9146C33.0543 9.69057 35.876 7.31944 37.3845 4.22867C35.7091 5.10516 34.1534 6.18154 32.7646 7.45783ZM61.0005 32.8914C61.8886 32.8883 62.7735 32.8883 63.6616 32.8852C64.5339 27.9646 68.798 24.3694 73.5596 23.0163C78.8944 21.5001 84.9567 22.598 89.1231 26.2669C90.9465 27.8754 92.3322 29.9544 92.9557 32.2732C93.6611 31.7965 94.25 31.1568 94.6626 30.4034C95.1507 29.5115 95.2641 28.5612 95.2641 27.5679C95.261 26.5745 95.2609 25.5811 95.2578 24.5909C95.2547 22.5857 95.5066 20.4821 94.2154 18.763C93.173 17.376 91.526 16.6625 89.7907 16.6625C88.3295 16.6625 86.8683 16.6686 85.4102 16.6717C82.3617 16.6779 79.3101 16.684 76.2617 16.6871C72.1488 16.6933 68.0359 16.7025 63.923 16.7086C62.4618 16.7117 60.9974 16.7148 59.5361 16.7178V17.0592C59.5361 17.3422 59.3377 17.582 59.0701 17.6558C59.0732 19.3012 59.0763 20.9465 59.0795 22.5919C59.3188 22.681 59.4889 22.9056 59.492 23.167L59.4952 25.2982C59.4952 25.5627 59.3251 25.7872 59.0858 25.8764C59.0889 27.6909 59.0921 29.5054 59.0952 31.3198C59.0952 31.7166 59.1141 32.1133 59.0984 32.51C59.0921 32.6453 59.0763 32.7714 59.048 32.8944C59.6967 32.8944 60.3486 32.8944 61.0005 32.8914ZM33.1771 17.3022C33.1803 19.5042 33.1866 21.7092 33.1897 23.9112C34.5218 24.5017 35.7689 25.2705 36.8806 26.2239C38.9181 27.9707 40.3888 30.3142 40.8644 32.9313C43.4027 32.9252 45.9409 32.9221 48.4792 32.916C51.8016 32.9098 55.1209 32.9037 58.4434 32.8975C58.5378 32.5777 58.5378 32.224 58.5347 31.8457C58.5315 29.8559 58.5284 27.8631 58.5221 25.8733C58.2922 25.781 58.1253 25.5596 58.1253 25.3013L58.1221 23.17C58.1221 22.9117 58.2859 22.6903 58.5158 22.598C58.5126 20.9342 58.5095 19.2735 58.5063 17.6097C58.3048 17.5052 58.1662 17.2991 58.1662 17.0654V16.7271C55.4358 16.7332 52.7055 16.7363 49.9751 16.7425C45.3205 16.7517 40.6691 16.7609 36.0146 16.7671C35.0698 16.7701 34.1219 16.7701 33.1771 16.7732C33.1771 16.9485 33.1771 17.1269 33.1771 17.3022ZM33.174 15.1371C33.2873 15.1371 33.3976 15.1371 33.5109 15.1371C38.2001 15.1279 42.8893 15.1186 47.5754 15.1125C51.1057 15.1063 54.6328 15.1002 58.1631 15.094V14.9341C58.1631 14.6973 58.3016 14.4913 58.5 14.3867C58.4969 13.4579 58.4969 12.5292 58.4937 11.6004C58.4937 11.5081 58.4937 11.4128 58.4937 11.3205C58.4937 11.3175 58.4937 11.3174 58.4937 11.3144C58.4906 9.2231 58.4843 7.13185 58.4811 5.04058C58.4811 4.73304 58.5095 4.39474 58.4434 4.09335C58.2292 3.11845 57.2214 2.63561 56.283 2.61101C55.3949 2.58948 54.4942 2.57103 53.6093 2.5741C51.4363 2.57718 49.2634 2.57717 47.0904 2.5864C45.4811 2.59255 43.9097 2.84167 42.5272 3.69047C40.9337 4.66845 39.6803 6.14156 38.367 7.4363C36.7861 8.9986 35.1863 10.5394 33.5928 12.0925C33.2023 12.4984 33.1834 12.9628 33.1834 13.4948C33.1834 13.5563 33.2149 13.7809 33.1803 13.9223C33.1992 14.0453 33.1677 14.3959 33.1677 14.439C33.174 14.6727 33.174 14.9065 33.174 15.1371ZM32.6984 13.6794C32.6795 13.6671 32.6323 13.4795 32.6323 13.418C32.6323 13.1934 32.6386 12.9659 32.6732 12.7444C32.7394 12.3354 32.9157 12.0125 33.2055 11.7111C34.6572 10.2934 36.1122 8.87867 37.564 7.46091C38.8772 6.17847 40.1117 4.76994 41.5918 3.66894C43.0405 2.59256 44.719 2.11587 46.5267 2.05128C48.8067 1.96825 51.0994 2.0359 53.3825 2.02975C54.3021 2.02668 55.2217 2.0636 56.1476 2.06668C57.6088 2.06975 59.0008 2.91855 59.0449 4.45932C59.1078 6.73819 59.0543 9.02629 59.0574 11.3082C59.0574 11.3082 59.0574 11.3113 59.0574 11.3144C59.0606 12.3231 59.0606 13.3288 59.0637 14.3375C59.3314 14.4082 59.5298 14.6481 59.5298 14.931V15.091C60.3203 15.091 61.1108 15.0879 61.9044 15.0879C66.1905 15.0787 70.4765 15.0725 74.7626 15.0633C77.9654 15.0571 81.1682 15.051 84.3709 15.0448C84.1662 14.8726 83.9678 14.6881 83.782 14.4882C82.8026 13.4364 82.1318 12.1355 81.7256 10.7762C81.4736 9.9366 81.3792 9.08472 80.9855 8.28204C80.2958 6.87043 79.1338 5.75714 77.7985 4.91755C75.2256 3.2999 72.1456 2.51874 69.1476 2.08819C68.7728 2.03283 68.8484 2.04514 68.4894 2.00209C68.2469 1.97441 68.0044 1.94673 67.7588 1.9252C67.4627 1.89752 67.1699 1.87291 66.8738 1.85753C66.3322 1.82985 65.7842 1.82985 65.2425 1.81755C60.2038 1.70684 55.1807 1.63304 50.142 1.64227C48.8854 1.64534 47.6226 1.58997 46.3661 1.68531C45.0906 1.78065 44.0325 1.94672 42.7098 2.26041C41.4155 2.56795 40.1432 2.98006 38.9213 3.4998C37.9702 6.33839 35.6744 8.88789 33.1771 10.4748C31.8198 11.3359 30.3113 11.9602 28.7524 12.3723C28.6296 12.5415 28.5068 12.7075 28.3745 12.8675C27.5305 13.9008 26.3496 14.6204 25.0993 15.1494C27.5935 15.1463 30.0909 15.1402 32.5851 15.1371C32.5913 14.6758 32.6071 14.2145 32.6386 13.7593C32.6417 13.7286 32.6827 13.7009 32.6984 13.6794ZM4.3995 27.6663C4.67033 27.9246 4.84036 28.2813 4.84036 28.6781C4.84036 28.9764 4.7459 29.2532 4.58215 29.4807C4.75535 30.1296 5.05137 30.7447 5.47967 31.2921C6.08117 32.0641 6.89998 32.6484 7.81641 32.9929C7.91088 32.9898 8.00535 32.9898 8.09982 32.9898C9.19576 32.9867 10.2885 32.9867 11.3845 32.9836C12.2599 28.0353 16.5681 24.431 21.3581 23.0932C25.0269 22.069 29.0957 22.2597 32.6323 23.6744C32.6292 22.1275 32.626 20.5775 32.6228 19.0305C32.6228 18.2832 32.6008 17.5267 32.5882 16.7732C29.5838 16.7794 26.5795 16.7855 23.5751 16.7886C20.5078 16.7947 17.4404 16.8009 14.3762 16.804C12.874 16.807 11.3656 16.8347 9.8634 16.8132C9.79726 16.8132 9.73428 16.8132 9.66815 16.8132C6.95982 16.8501 4.56641 18.9291 4.3995 21.6139C4.30502 23.1485 4.3932 24.7108 4.39635 26.2454C4.3995 26.719 4.39635 27.1927 4.3995 27.6663ZM1.41089 27.2726C1.42664 27.2726 1.4392 27.2695 1.45494 27.2695L2.72094 27.2664C2.72409 27.0881 2.72409 26.9128 2.72409 26.7344C2.72094 25.7903 2.69576 24.8369 2.68945 23.8866C2.62017 23.8774 2.54775 23.8712 2.46902 23.8712C1.25343 23.8681 1.30064 25.0737 1.30064 25.9071C1.30379 26.35 1.28177 26.8605 1.41089 27.2726Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-e74d633"
                                                                data-id="e74d633" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-ac885f2 elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="ac885f2" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="50"
                                                                                        viewBox="0 0 50 50" fill="none">
                                                                                        <g
                                                                                            clip-path="url(#clip0_107_2)">
                                                                                            <path
                                                                                                d="M25 50C38.7756 50 50 38.8558 50 25C49.9358 11.1599 38.7836 0 25 0C11.1601 0 0 11.1442 0 25C0 38.8558 11.1601 50 25 50ZM29.6615 37.6958C29.2683 39.6237 28.5462 43.5894 26.9095 45.2508C26.388 45.7681 25.7943 46.0187 25.2728 46.0187H25.008C20.4189 46.0187 16.0864 44.7335 12.5401 42.6802L12.4118 42.5548C12.0828 42.3042 11.8902 42.0377 11.8902 41.6615C11.8902 41.2696 11.9545 41.1442 12.0908 40.8933L12.2914 40.5017C13.1419 39.0908 15.6371 35.5017 20.3626 32.0377C21.9994 30.7523 24.1015 29.2162 26.2676 28.3229C27.431 27.8371 32.1566 26.4262 29.6615 37.6958ZM42.3219 12.5862C42.386 12.3354 42.5225 12.069 42.715 11.9436C42.8434 11.9436 42.9798 11.9436 43.2366 12.3354C46.1891 15.9248 47.8979 20.2821 47.8979 25.0312C47.8979 33.6206 42.2577 41.0502 34.1223 44.2633C33.6007 44.5142 33.2718 44.5142 33.1354 44.2633C33.0712 44.1379 33.0071 43.8715 33.1354 43.4952C33.1996 43.37 33.2638 43.1035 33.336 42.8527C37.7327 32.7273 41.1425 17.7273 42.0651 13.3699C42.1935 13.0878 42.2577 12.7116 42.3219 12.5862ZM20.3466 12.1944C20.7397 10.2665 21.4618 6.30094 23.0985 4.6395C23.62 4.24765 24.2779 3.99687 24.8074 3.99687H25.0722C29.6615 3.99687 33.9939 5.28212 37.5401 7.33542L37.6684 7.46081C37.9974 7.7116 38.19 7.97806 38.19 8.35423C38.19 8.73042 38.1258 8.87148 37.9894 9.12225L37.7889 9.5141C36.9383 10.9248 34.4432 14.3887 29.7818 17.9781C28.1451 19.2633 26.043 20.7994 23.8768 21.6927C22.577 22.069 17.8515 23.4796 20.3466 12.1944ZM15.8135 5.78371C16.335 5.53292 16.664 5.53292 16.8004 5.78371C16.8646 5.90908 16.8646 6.17554 16.8004 6.55173C16.7363 6.67712 16.672 6.94358 16.5998 7.19435C12.2031 17.3197 8.79332 32.3198 7.87067 36.6771C7.80648 36.9279 7.7423 37.3198 7.67009 37.4452C7.60591 37.6958 7.46951 37.9623 7.27696 38.0877C7.14858 38.0877 7.0122 38.0877 6.75546 37.6958C3.80295 34.1067 2.09403 29.7492 2.09403 25C2.03786 16.4263 7.75032 8.99687 15.8135 5.78371Z"
                                                                                                fill="#02b5ff"></path>
                                                                                        </g>
                                                                                        <defs>
                                                                                            <clippath id="clip0_107_2">
                                                                                                <rect width="50"
                                                                                                    height="50"
                                                                                                    fill="white"></rect>
                                                                                            </clippath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-df9fff2 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="df9fff2" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1661"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1661)">
                                                                                            <path
                                                                                                d="M73.1722 31.9441C76.1409 31.0416 79.6529 31.8258 81.6551 33.8209C83.6732 35.8314 83.9954 38.7161 82.3531 40.9631C80.7045 43.2205 77.4516 44.3723 74.2965 43.8915C70.7341 43.3464 68.1791 40.706 68.1412 37.7905C68.1728 35.181 70.1656 32.8593 73.1722 31.9441ZM73.6744 42.3746C76.0746 43.0765 78.7654 42.5057 80.4077 40.9091C82.0215 39.3434 82.2173 37.0372 80.9382 35.2889C79.6686 33.5535 77.1042 32.5868 74.6534 32.9827C71.83 33.4404 69.7993 35.4509 69.7708 37.7879C69.7993 39.7933 71.3247 41.6882 73.6744 42.3746Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M74.3629 34.9602C75.7178 34.5412 77.319 34.8806 78.257 35.783C79.2139 36.7085 79.3718 38.0686 78.5949 39.1098C77.8306 40.1357 76.3526 40.6524 74.9124 40.4365C73.2891 40.1948 72.1648 39.0199 72.0827 37.7086C72.0795 37.6855 72.0764 37.6598 72.0795 37.6341C72.0795 37.6032 72.0827 37.5724 72.0858 37.5441C72.1616 36.3897 73.0175 35.3768 74.3629 34.9602ZM75.5851 39.4929C76.8294 39.4955 77.8716 38.6471 77.8685 37.6341C77.8653 36.6185 76.8326 35.7753 75.5851 35.7753C74.3155 35.7753 73.3333 36.6211 73.3017 37.6341C73.3365 38.6496 74.3155 39.4903 75.5851 39.4929Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M22.859 31.9441C25.8277 31.0416 29.3396 31.8258 31.3419 33.8209C33.36 35.8314 33.6821 38.7161 32.0399 40.9631C30.3913 43.2205 27.1384 44.3723 23.9833 43.8915C20.4177 43.3464 17.8659 40.706 17.828 37.7905C17.8596 35.181 19.8524 32.8593 22.859 31.9441ZM23.3611 42.3746C25.7614 43.0765 28.4522 42.5057 30.0944 40.9091C31.7083 39.3434 31.9041 37.0372 30.625 35.2889C29.3554 33.5535 26.791 32.5868 24.3402 32.9827C21.5168 33.4404 19.486 35.4509 19.4576 37.7879C19.486 39.7933 21.0115 41.6882 23.3611 42.3746Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.0465 34.9602C25.4014 34.5412 27.0026 34.8806 27.9405 35.783C28.8975 36.7085 29.0554 38.0686 28.2785 39.1098C27.5142 40.1357 26.0362 40.6524 24.596 40.4365C22.9727 40.1948 21.8484 39.0199 21.7663 37.7086C21.7631 37.6855 21.76 37.6598 21.7631 37.6341C21.7631 37.6032 21.7663 37.5724 21.7694 37.5441C21.8452 36.3897 22.7011 35.3768 24.0465 34.9602ZM25.2719 39.4929C26.5162 39.4955 27.5584 38.6471 27.5553 37.6341C27.5521 36.6185 26.5194 35.7753 25.2719 35.7753C24.0023 35.7753 23.0201 36.6211 22.9885 37.6341C23.0201 38.6496 24.0023 39.4903 25.2719 39.4929Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M0.0126266 27.43H3.23716C3.23716 27.1986 3.23716 26.9646 3.23716 26.7332C2.4255 26.7332 1.617 26.7332 0.805344 26.7332C0.726387 26.7332 0.663216 26.7101 0.622162 26.6741C0.619003 26.6715 0.615852 26.669 0.612694 26.6664C0.609535 26.6638 0.609528 26.6638 0.606377 26.6613C0.562157 26.6253 0.533737 26.5764 0.533737 26.5096C0.533737 25.656 0.533737 24.7999 0.533737 23.9463C0.533737 23.8254 0.660065 23.7252 0.805344 23.7252C1.65174 23.7252 2.49812 23.7252 3.34136 23.7252C3.61613 22.8896 4.40885 22.0977 5.19208 21.5938C6.01006 21.0668 6.85644 20.8019 7.86074 20.6245C9.81567 20.28 11.8148 20.0949 13.8013 19.9458C16.9058 19.7144 20.0261 19.6013 23.1433 19.5473C25.0919 19.5062 27.0436 19.4933 28.9922 19.5087C29.8418 15.1483 31.4051 10.6671 34.7086 7.10367C34.7433 7.02654 34.797 6.9597 34.8665 6.90057C35.4729 6.02386 36.4551 5.34254 37.5826 4.93632C38.2805 4.68436 38.9943 4.53523 39.7491 4.46068C40.2038 4.41697 40.9776 4.29872 41.5366 4.40927C43.3968 4.40927 45.2538 4.40927 47.114 4.40927V3.44514H43.6652C43.0589 3.44514 42.5314 3.16747 42.2788 2.76382C41.9693 2.56843 41.7356 2.29332 41.6377 1.95395C41.3534 0.974402 42.1493 0.053991 43.3905 0C44.8432 0 46.2992 0 47.7519 0C51.1565 0 54.5578 0 57.9624 0C61.8754 0 65.7884 0 69.7046 0C72.6796 0 75.6546 0 78.6296 0C79.3307 0 80.0319 0 80.7298 0C80.992 0 81.2478 0.00514702 81.5004 0.069422C82.6721 0.370229 83.1048 1.59145 82.4668 2.40902C82.4574 2.41931 82.4479 2.42959 82.4416 2.43987C82.3152 3.00807 81.6805 3.44257 80.9225 3.44257H77.1895V4.40669C78.0706 4.40669 78.9486 4.40669 79.8298 4.40669C80.9635 4.40669 82.0973 4.40669 83.2311 4.40669C84.785 4.40669 85.7798 5.4171 86.5662 6.39922C88.2179 8.46373 89.2854 10.8856 90.2171 13.2149C90.5866 14.1354 90.9245 15.0635 91.2214 16.0019C91.4235 15.9608 91.6351 15.9376 91.8498 15.9376H96.4008C97.8315 15.9376 99 16.8889 99 18.0535V29.2708C99 30.4355 97.8315 31.3867 96.4008 31.3867H93.9027C93.9027 31.4896 93.9027 31.5924 93.8995 31.6953C93.8742 33.5695 92.6583 35.2895 90.7034 36.2768C88.9411 37.1689 87.0083 37.1175 85.025 37.1175C84.6997 37.1175 84.2891 36.9118 84.2354 36.629C84.1849 36.3693 84.1502 36.0994 84.1059 35.832C84.0333 35.7626 83.9796 35.6803 83.9607 35.5903C83.787 34.7368 83.4364 33.9192 82.9311 33.1787C81.292 31.5719 78.8507 30.5923 76.2515 30.5537C73.5039 30.5152 70.8668 31.5153 69.1392 33.2559C68.1728 34.2277 67.5823 35.4001 67.3328 36.6264C67.2759 36.9093 66.8748 37.1149 66.5432 37.1149C62.9902 37.1149 59.4373 37.1149 55.8843 37.1149C50.228 37.1149 44.5748 37.1149 38.9185 37.1149C37.6299 37.1149 36.3414 37.1149 35.0528 37.1149C34.7244 37.1149 34.3233 36.9093 34.2633 36.6264C33.7232 33.9835 31.4556 31.7441 28.3006 30.9111C25.1235 30.073 21.561 30.7517 19.205 32.6851C17.8912 33.7623 17.0732 35.1327 16.77 36.6264C16.7132 36.9093 16.3121 37.1149 15.9805 37.1149C14.2056 37.1149 12.4275 37.1149 10.6526 37.1149C9.67355 37.1149 8.70399 37.0944 7.766 36.8321C6.19953 36.3951 4.84468 35.5055 4.02987 34.3254C3.2719 33.225 3.18031 32.0732 3.18031 30.8468C3.18031 30.7774 3.19294 30.7131 3.21188 30.654C3.18031 30.0987 3.20242 29.5382 3.21505 28.9854H7.62939e-06V27.43H0.0126266ZM34.7086 9.48699C34.1117 10.3149 33.5874 11.1787 33.139 12.0631C32.3747 13.5672 31.7873 15.1278 31.3262 16.7115C31.5125 16.7141 31.6988 16.7141 31.8788 16.7038C32.1852 16.6832 32.2704 16.5058 32.4157 16.2256C32.6557 15.7525 32.8263 15.246 33.0347 14.7627C33.6032 13.436 34.1749 12.112 34.7433 10.7853C34.9423 10.3226 35.2423 9.79037 34.7086 9.48699ZM47.9541 0.671027C46.5234 0.671027 45.0927 0.671027 43.6621 0.671027C43.5705 0.671027 43.4789 0.671027 43.3873 0.671027C42.0672 0.73016 42.0988 2.36275 43.3999 2.42702C43.5294 2.43474 43.6589 2.42702 43.7884 2.42702C44.5369 2.42702 45.2854 2.42702 46.0307 2.42702C46.6718 2.42702 47.3129 2.42702 47.9509 2.42702V0.671027H47.9541ZM54.7221 0.671027C52.9409 0.671027 51.1628 0.671027 49.3816 0.671027C49.1005 0.671027 48.8163 0.671027 48.5352 0.671027V2.42702C50.5975 2.42702 52.6598 2.42702 54.7221 2.42702V0.671027ZM49.2647 3.45027V4.4144C54.621 4.4144 59.9773 4.4144 65.3336 4.4144C68.5708 4.4144 71.8079 4.4144 75.0451 4.4144V3.45027H49.2647ZM62.0144 0.671027C61.2374 0.671027 60.4574 0.671027 59.6773 0.671027C58.2182 0.671027 56.7591 0.671027 55.3 0.671027V2.42702C57.536 2.42702 59.7752 2.42702 62.0112 2.42702V0.671027H62.0144ZM68.7824 0.671027C66.7201 0.671027 64.6578 0.671027 62.5955 0.671027V2.42702C63.7356 2.42702 64.8725 2.42702 66.0126 2.42702C66.9348 2.42702 67.8602 2.42702 68.7824 2.42702V0.671027ZM75.5472 0.671027C73.9808 0.671027 72.4111 0.671027 70.8447 0.671027C70.3488 0.671027 69.8562 0.671027 69.3603 0.671027V2.42702C71.4226 2.42702 73.4849 2.42702 75.5472 2.42702V0.671027ZM80.8877 2.42702C81.652 2.40645 82.1037 1.85369 81.9015 1.25722C81.7594 0.835578 81.2952 0.676166 80.8088 0.668453C80.2087 0.66074 79.6087 0.668453 79.0055 0.668453C78.0454 0.668453 77.0853 0.668453 76.1252 0.668453V2.42445C77.7138 2.42959 79.3055 2.46816 80.8877 2.42702ZM89.3359 15.4234C88.619 13.364 87.7726 11.3047 86.6609 9.35587C86.2409 9.34301 85.7829 9.32243 85.4103 9.45612C84.7786 9.68237 84.4628 10.2146 84.4502 10.7519C84.4312 11.5695 84.4502 12.3871 84.4502 13.2021C84.4502 13.9939 84.4312 14.7884 84.4502 15.5802C84.4628 16.133 84.8134 16.6755 85.4734 16.8837C85.8366 16.9969 86.2788 16.9557 86.6609 16.9557C87.7189 16.9557 88.7738 16.9557 89.8318 16.9557C89.6802 16.4415 89.5128 15.9299 89.3359 15.4234ZM90.3592 19.3982C90.3465 19.2593 90.3371 19.1205 90.3181 18.9817C90.3118 18.938 90.3055 18.8943 90.2992 18.8531C90.2992 18.848 90.296 18.8403 90.296 18.8326C90.2739 18.722 90.255 18.6115 90.2297 18.5009C90.2139 18.4289 90.1981 18.3569 90.1823 18.2875C90.176 18.2875 90.1697 18.2875 90.1665 18.2875C88.998 18.2875 87.8326 18.2875 86.6641 18.2875C86.1177 18.2875 85.5682 18.3081 85.0408 18.1667C83.9701 17.8787 83.1301 17.11 82.9027 16.2127C82.6784 15.3386 82.8174 14.3539 82.8174 13.4669C82.8174 12.5542 82.789 11.6389 82.8174 10.7262C82.8458 9.76721 83.4175 8.84424 84.4597 8.35832C84.9081 8.15007 85.3787 8.07293 85.8587 8.04465C85.3819 7.31448 84.8702 6.61775 84.1912 6.09069C84.1281 6.04185 84.0617 5.993 83.9954 5.94672C83.9891 5.94158 83.9828 5.93644 83.9765 5.93387C83.9733 5.9313 83.9701 5.93129 83.967 5.92872C83.9354 5.91072 83.9038 5.89015 83.8691 5.87472C83.8122 5.84644 83.7585 5.82074 83.7017 5.7976C83.7333 5.81559 83.6038 5.77189 83.5438 5.75132C83.5343 5.74875 83.528 5.74619 83.5217 5.74362C83.509 5.74619 83.4964 5.74618 83.4743 5.74875C83.449 5.75132 83.4238 5.74875 83.4017 5.74875C82.4511 5.76932 81.4973 5.74875 80.5498 5.74875C75.9262 5.74875 71.3058 5.74875 66.6822 5.74875C61.228 5.74875 55.7706 5.74875 50.3164 5.74875C48.3236 5.74875 46.3307 5.74875 44.3411 5.74875C43.3999 5.74875 42.4493 5.78217 41.5082 5.74875C41.4798 5.74875 41.4513 5.74619 41.4229 5.74362C41.4261 5.74619 41.4324 5.74618 41.4355 5.74875C39.4143 5.65105 37.2004 6.14469 36.2024 7.70014C36.1961 7.713 36.1866 7.72328 36.1771 7.73357C36.0256 7.95724 35.7729 8.17063 35.5802 8.38659C36.4835 8.89308 36.9162 9.7518 36.5182 10.6876C36.2561 11.3047 35.9877 11.9191 35.7255 12.5336C35.1223 13.9348 34.6075 15.4003 33.9001 16.7706C33.5937 17.3645 33.12 17.8916 32.2957 18.0073C31.8694 18.0664 31.4146 18.0433 30.9788 18.0356C30.8366 18.6089 30.7103 19.1822 30.5966 19.7581C31.683 19.7581 32.7694 19.7581 33.8559 19.7581C33.8495 19.4676 33.8022 19.1436 33.8685 18.8608C33.938 18.5729 34.1212 18.2747 34.2412 17.997C35.596 14.8655 36.9477 11.734 38.3026 8.60256C38.4131 8.34547 38.5237 8.08837 38.6374 7.83127C39.0479 6.97769 39.9544 6.47378 41.0787 6.46349C41.5556 6.45835 42.0356 6.46349 42.5125 6.46349C44.559 6.46349 46.6087 6.46349 48.6552 6.46349C50.8565 6.46349 53.0577 6.46349 55.259 6.46349C55.9285 6.46349 56.598 6.46349 57.2707 6.46349C57.716 6.46349 58.1929 6.43007 58.6256 6.50977C59.5225 6.67945 60.1321 7.25279 60.3184 7.94439C60.3405 7.90325 60.3658 7.86211 60.3942 7.82097C60.9437 6.98283 62.0175 6.48149 63.1734 6.46349C63.4198 6.45835 63.6661 6.46349 63.9093 6.46349C67.2412 6.46349 70.5762 6.46349 73.9081 6.46349C75.2662 6.46349 76.6242 6.46349 77.9822 6.46349C78.3138 6.46349 78.6454 6.45578 78.9739 6.49692C80.1424 6.64346 81.1278 7.3402 81.491 8.25547C81.7373 8.87508 81.6394 9.61554 81.6394 10.2583C81.6394 11.4667 81.6394 12.675 81.6394 13.8808C81.6394 15.8399 81.6394 17.799 81.6394 19.7556C81.8415 19.7556 82.0436 19.7556 82.2458 19.7556C82.6532 19.7556 83.0606 19.7556 83.4648 19.7556C85.5524 19.7556 87.6526 19.7067 89.7433 19.7324C89.9644 19.7273 90.1855 19.7273 90.4065 19.7273C90.3844 19.6193 90.3687 19.5087 90.3592 19.3982ZM59.832 24.4682C59.832 23.6275 59.832 22.7868 59.832 21.946C59.5604 21.892 59.3583 21.6941 59.3583 21.4576V21.0873C57.0055 21.0873 54.6526 21.0873 52.2966 21.0873C49.8237 21.0873 47.3508 21.0873 44.878 21.0873C42.2093 21.0873 39.5438 21.0873 36.8751 21.0873C36.0508 21.0873 35.2202 21.095 34.3928 21.1028C34.3928 21.2853 34.3928 21.4704 34.3928 21.6529C34.3928 23.4192 34.3928 25.1829 34.3928 26.9492C34.3928 27.4557 34.3896 27.9647 34.3928 28.4712C34.3991 29.4045 35.1602 30.1424 36.3414 30.1758C39.2564 30.2581 42.1903 30.1758 45.1085 30.1758C49.0121 30.1758 52.9156 30.1758 56.8191 30.1758C57.1602 30.1758 57.5013 30.1835 57.8392 30.1758C58.9541 30.1527 59.791 29.4945 59.8257 28.5792C59.8415 28.1936 59.8384 27.8079 59.8352 27.4223C59.5604 27.3708 59.3552 27.1703 59.3552 26.9312V24.9515C59.3583 24.7201 59.5604 24.5222 59.832 24.4682ZM34.3959 19.0228C34.3959 19.2054 34.3959 19.3879 34.3959 19.573C34.3959 19.6347 34.3959 19.6964 34.3959 19.7581C34.7338 19.7581 35.0718 19.7581 35.4129 19.7581C37.731 19.7581 40.0491 19.7581 42.3672 19.7581C44.979 19.7581 47.5909 19.7581 50.2027 19.7581C53.2535 19.7581 56.3075 19.7581 59.3583 19.7581V19.4805C59.3583 19.2439 59.5604 19.046 59.832 18.992C59.832 18.0793 59.832 17.164 59.832 16.2513C59.832 13.6674 59.832 11.0836 59.832 8.49972C59.832 7.85183 59.5162 7.24764 58.7172 7.00082C58.2814 6.86713 57.7697 6.91084 57.3055 6.91084C55.7011 6.91084 54.0999 6.91084 52.4955 6.91084C48.7531 6.91084 45.0138 6.91084 41.2713 6.91084C40.346 6.91084 39.5185 7.19879 39.1553 7.9521C38.0279 10.5617 36.8972 13.1712 35.7697 15.7834C35.3181 16.8272 34.7718 17.8761 34.4054 18.9431C34.4022 18.956 34.3991 18.9611 34.3959 18.9637C34.3959 18.9714 34.3959 18.9894 34.3959 19.0228ZM81.0899 9.03192C81.0583 7.86211 79.9213 6.93398 78.4844 6.91084C77.7359 6.89799 76.9811 6.91084 76.2326 6.91084C72.8217 6.91084 69.414 6.91084 66.0032 6.91084C65.0747 6.91084 64.1461 6.89799 63.2176 6.91084C61.6006 6.93141 60.5616 7.95981 60.5616 9.22217C60.5616 11.1633 60.5616 13.1044 60.5616 15.0455C60.5616 16.3567 60.5616 17.6679 60.5616 18.9791C60.8742 19.0048 61.1174 19.2208 61.1174 19.4805V19.7581C61.9954 19.7581 62.8734 19.7581 63.7514 19.7581C65.182 19.7581 66.6127 19.7581 68.0434 19.7581C72.3922 19.7581 76.741 19.7581 81.0899 19.7581C81.0899 18.596 81.0899 17.4339 81.0899 16.2718C81.0899 13.9939 81.0899 11.7135 81.0899 9.43557C81.0899 9.30187 81.093 9.16561 81.0899 9.03192ZM81.0899 25.0852C81.0899 24.7613 81.0899 24.4373 81.0899 24.1134C81.0899 23.103 81.0899 22.0952 81.0899 21.0848C77.439 21.0848 73.7881 21.0848 70.1372 21.0848C68.8455 21.0848 67.557 21.0848 66.2653 21.0848C64.5504 21.0848 62.8323 21.0848 61.1174 21.0848V21.455C61.1174 21.7147 60.8711 21.9306 60.5616 21.9563C60.5616 22.5528 60.5616 23.1518 60.5616 23.7483C60.5616 23.9823 60.5584 24.2188 60.5553 24.4528C60.8711 24.4759 61.1174 24.6919 61.1174 24.9541V26.9338C61.1174 27.2037 60.8521 27.4248 60.5237 27.4351C60.5332 27.7205 60.5426 28.0084 60.5647 28.2913C60.65 29.3942 61.8059 30.2889 63.1671 30.2889C63.4671 30.2581 63.7924 29.6745 63.9535 29.4842C64.1525 29.2502 64.3641 29.0214 64.582 28.7978C64.9831 28.3915 65.4157 28.0059 65.8863 27.6511C66.739 27.0058 67.7023 26.4556 68.7445 26.0339C70.6426 25.2652 72.7554 24.9233 74.8651 24.9053C76.7221 24.8898 78.5823 25.1161 80.3793 25.4992C80.6635 25.5609 80.9825 25.5943 81.0899 25.3141C81.1151 25.2523 81.0899 25.1521 81.0899 25.0852ZM4.8731 30.6617C4.8731 30.744 4.87941 30.8263 4.88573 30.9085C5.58369 32.5668 7.46913 33.6981 9.64513 33.7238C11.4264 33.7238 13.2076 33.7238 14.992 33.7238C15.791 30.8648 18.4376 28.4995 21.8737 27.5765C25.5656 26.5816 29.7692 27.4325 32.4852 29.6899C33.8243 30.8006 34.7654 32.2095 35.1855 33.7238C38.4921 33.7238 41.7956 33.7238 45.1022 33.7238C50.6764 33.7238 56.2506 33.7238 61.8249 33.7238C62.8797 33.7238 63.9314 33.7238 64.9831 33.7238C65.7505 30.978 68.2076 28.7103 71.4447 27.6974C74.9598 26.597 79.0244 27.2397 81.8636 29.222C83.4301 30.3146 84.5449 31.8007 85.0881 33.4153C85.126 33.5258 85.1292 33.6286 85.1071 33.7212C85.3692 33.7212 85.6314 33.7212 85.8903 33.7212C88.7138 33.6929 91.0319 31.8804 91.0445 29.5665C91.0508 28.0753 91.0445 26.5841 91.0445 25.0904C91.0445 24.3731 90.8929 23.6917 90.7318 22.9899C90.7097 22.8922 90.7129 22.7919 90.735 22.6942C90.615 22.1569 90.4981 21.6221 90.3781 21.0848C88.559 21.0848 86.7399 21.0848 84.9239 21.0848C84.6018 21.0848 84.2796 21.0848 83.9575 21.0848C83.1806 21.0848 82.4068 21.0848 81.6299 21.0848C81.6299 21.6324 81.6299 22.18 81.6299 22.7276C81.6299 23.5478 81.6394 24.3679 81.6299 25.1855C81.6268 25.5223 81.532 25.8488 81.0899 25.9825C80.6856 26.1059 80.1582 25.9054 79.7539 25.8257C79.3181 25.7408 78.8791 25.6637 78.437 25.5994C73.8513 24.9284 68.9908 25.5763 65.681 28.4352C65.201 28.8492 64.7683 29.294 64.3735 29.7619C64.0482 30.1501 63.8493 30.6103 63.2618 30.7157C63.2334 30.7234 63.1987 30.7311 63.1639 30.7311C63.1355 30.7337 63.1071 30.7337 63.085 30.7286C61.768 30.7029 60.7353 30.0293 60.2742 29.1114C59.9994 29.9084 59.1815 30.5229 58.114 30.6052C57.1823 30.6771 56.2127 30.6154 55.2811 30.6154C53.2093 30.6154 51.1344 30.6154 49.0626 30.6154C45.0959 30.6154 41.1324 30.6154 37.1657 30.6154C36.8909 30.6154 36.6161 30.6206 36.3414 30.6154C34.9581 30.5846 33.8906 29.7156 33.8527 28.5895C33.8117 27.4171 33.8527 26.237 33.8527 25.0647C33.8527 23.7432 33.8527 22.4217 33.8527 21.1028C32.3621 21.1156 30.8682 21.1259 29.3839 21.0822C29.3491 21.0822 29.3144 21.0822 29.2765 21.0822C28.3132 21.0822 27.3531 21.0822 26.3899 21.0822C23.3896 21.0822 20.3704 21.1567 17.3733 21.0822C17.3322 21.0822 17.2911 21.0822 17.2532 21.0822C17.1617 21.0873 17.0795 21.0796 17.0037 21.0642C14.5877 21.1747 12.178 21.3521 9.79672 21.6735C8.96927 21.7841 8.03446 21.8663 7.24491 22.108C6.71433 22.27 6.19953 22.5939 5.80791 22.923C5.41314 23.2521 4.88572 23.8126 4.8794 24.2908C4.8794 25.3346 4.86993 26.3784 4.86678 27.4223H7.05225V28.9906H4.86362C4.86362 29.5536 4.86678 30.1064 4.8731 30.6617ZM3.24032 24.2985C3.24032 24.2677 3.24346 24.2394 3.24662 24.2137C3.24662 24.2008 3.24978 24.1854 3.24978 24.1725C2.52656 24.1725 1.80333 24.1725 1.07694 24.1725C1.07694 24.8796 1.07694 25.5866 1.07694 26.2936C1.79701 26.2936 2.51709 26.2936 3.23716 26.2936C3.24032 25.6277 3.24032 24.9618 3.24032 24.2985Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M9.25673 22.3855C9.27568 22.3803 9.29463 22.3752 9.31674 22.37C10.0652 22.2595 10.8137 22.1464 11.5622 22.0358C11.897 21.987 12.2223 21.9278 12.5602 22.005C13.1129 22.1309 13.5298 22.5372 13.5487 23.0076C13.5866 23.8715 12.6297 24.0926 11.7959 24.216C11.3159 24.288 10.8327 24.36 10.3526 24.432C10.0557 24.4757 9.74308 24.5451 9.4399 24.5245C7.89554 24.4114 7.87344 22.7171 9.25673 22.3855ZM9.6673 24.0797C9.90732 24.0643 10.1537 24.0103 10.3905 23.9743C11.019 23.8818 11.6759 23.8227 12.2949 23.6915C13.2582 23.4859 13.1729 22.3803 12.1307 22.4035C11.8938 22.4086 11.6443 22.4703 11.4138 22.5063C10.7632 22.604 10.1126 22.6991 9.46201 22.7968C8.47033 22.9999 8.60614 24.144 9.6673 24.0797Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M56.118 23.2386H53.6356C53.2756 23.2386 52.9819 22.9995 52.9819 22.7064V22.6318C52.9819 22.3387 53.2756 22.0996 53.6356 22.0996H56.118C56.478 22.0996 56.7717 22.3387 56.7717 22.6318V22.7064C56.7717 22.9995 56.4749 23.2386 56.118 23.2386Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M80.0381 15.9919C80.0254 17.1129 79.2011 18.1335 77.8368 18.4395C77.3062 18.5578 76.7346 18.5269 76.1914 18.5269C72.3952 18.5269 68.5991 18.5269 64.8029 18.5269C64.7019 18.5269 64.6008 18.5269 64.4997 18.5269C64.465 18.5269 64.4303 18.5243 64.3955 18.5218C62.7785 18.4369 61.5437 17.4085 61.5026 16.0742C61.4837 15.5188 61.5026 14.9635 61.5026 14.4082C61.5026 12.9864 61.3921 11.5312 61.5089 10.112C61.6163 8.8034 62.9175 7.82641 64.5124 7.79299C64.964 7.7827 65.4156 7.79299 65.8672 7.79299C67.9864 7.79299 70.1055 7.79299 72.2247 7.79299C73.8038 7.79299 75.3829 7.77756 76.962 7.79299C78.3011 7.80584 79.5106 8.46659 79.9086 9.53099C80.117 10.0863 80.0381 10.7291 80.0381 11.3024C80.0381 12.8656 80.0539 14.4313 80.0381 15.9919ZM77.8715 9.35616C77.4452 9.09135 76.9557 9.12476 76.4598 9.12476C75.7334 9.12476 75.0039 9.12476 74.2775 9.12476C71.0246 9.12476 67.7527 9.03221 64.5029 9.12476C63.546 9.15305 63.1417 9.7778 63.1417 10.472C63.1417 11.1481 63.1417 11.8243 63.1417 12.5005C63.1417 13.3386 63.1417 14.1793 63.1417 15.0175C63.1417 15.4417 63.0501 15.9636 63.1922 16.3801C63.3596 16.866 63.8965 17.1797 64.506 17.1951C67.7495 17.1951 70.993 17.1951 74.2364 17.1951C74.9786 17.1951 75.7208 17.1951 76.4661 17.1951C76.9651 17.1951 77.4547 17.2285 77.8779 16.9637C78.4747 16.5909 78.4084 16.0305 78.4084 15.4931C78.4084 14.7141 78.4084 13.9377 78.4084 13.1587C78.4084 12.3796 78.4084 11.6032 78.4084 10.8242C78.4021 10.2894 78.4684 9.72896 77.8715 9.35616Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M37.5447 14.0606C37.9773 13.1196 38.41 12.1761 38.8427 11.2351C39.1838 10.4946 39.4522 9.68989 39.9038 8.99572C40.3933 8.23985 41.1797 7.94162 42.184 7.94162C42.9546 7.94162 43.7221 7.94162 44.4927 7.94162C47.0066 7.94162 49.5174 7.94162 52.0281 7.94162C53.0609 7.94162 54.0936 7.94162 55.1232 7.94162C55.6253 7.94162 56.1622 7.90304 56.6612 7.9776C58.2182 8.21413 58.8814 9.5202 58.8846 10.6797C58.8877 11.541 58.8846 12.4023 58.8846 13.2636C58.8846 14.1377 58.8846 15.0093 58.8846 15.8834C58.8846 17.0095 58.3256 18.2796 56.8475 18.6087C56.3707 18.7167 55.8243 18.6755 55.3316 18.6755C54.4378 18.6755 53.5441 18.6755 52.6503 18.6755C48.292 18.6755 43.9337 18.6755 39.5754 18.6755C39.4806 18.6755 39.3859 18.6755 39.2911 18.6755C39.2532 18.6755 39.2153 18.673 39.1806 18.6704C37.5004 18.5701 36.0856 17.3129 36.6919 15.9194C36.9635 15.2947 37.2604 14.6802 37.5447 14.0606ZM39.2911 17.3412C42.8536 17.3412 46.416 17.3412 49.9785 17.3412C51.845 17.3412 53.7146 17.3412 55.5811 17.3412C55.9696 17.3412 56.4117 17.4003 56.7244 17.1844C57.3908 16.7242 57.2486 15.886 57.2486 15.2484C57.2486 13.6724 57.2834 12.0963 57.2486 10.5203C57.236 9.87757 56.8665 9.27082 56.0296 9.27082C55.3663 9.27082 54.7063 9.27082 54.0431 9.27082C50.0353 9.27082 46.0244 9.25025 42.0167 9.27082C41.8461 9.27082 41.6977 9.2631 41.5777 9.34537C41.1671 9.62304 41.0092 10.2915 40.8355 10.6874C40.5923 11.2351 40.3365 11.775 40.087 12.32C39.6701 13.2276 39.2532 14.1377 38.8363 15.0453C38.6911 15.3615 38.5458 15.6777 38.4005 15.9965C38.3247 16.1637 38.1763 16.3976 38.17 16.5725C38.151 17.025 38.7984 17.3283 39.2911 17.3412Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-f6a9af3"
                                                                data-id="f6a9af3" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-d55edd7 elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="d55edd7" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="50" height="50"
                                                                                        viewBox="0 0 50 50" fill="none">
                                                                                        <mask id="mask0_3316_79"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="50"
                                                                                            height="50">
                                                                                            <rect width="50" height="50"
                                                                                                fill="#D9D9D9"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_3316_79)">
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M45.4544 4.23455V5.18734L25.5672 1.94776L5.68164 5.18734V4.23455L25.5672 0.973633L45.4544 4.23455Z"
                                                                                                fill="white"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M45.4544 3.26007V4.23447L25.5672 0.973553L5.68164 4.23447V3.26007L25.5672 0L45.4544 3.26007Z"
                                                                                                fill="#33A457"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M45.4544 5.18685L25.5672 1.94727L5.68164 5.18685L5.68195 8.47394L5.85427 8.38319C5.92436 8.34677 12.9807 4.71031 25.6055 4.71031C38.2312 4.71031 45.2052 8.34762 45.2759 8.38375L45.4464 8.47479L45.4544 5.18685Z"
                                                                                                fill="#CC2131"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M25.6059 5.34668C37.0067 5.34668 43.6826 8.32879 44.7646 8.8517V18.3147C44.7646 23.4738 43.4573 28.6132 40.8808 33.5931C35.241 44.47 26.7546 48.7409 25.5677 49.2983C24.3798 48.7409 15.887 44.47 10.2488 33.5931C7.67219 28.6132 6.36523 23.4738 6.36523 18.3147V8.85284C7.45702 8.3305 14.203 5.34668 25.6059 5.34668Z"
                                                                                                fill="#FFF22D"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M5.85396 8.38186L5.68164 8.47261V18.3126C5.68164 23.5684 7.01094 28.8012 9.6328 33.8649C15.7877 45.7427 25.33 49.8978 25.4255 49.9385L25.5669 49.9986L25.708 49.9385C25.8044 49.8978 35.3388 45.7416 41.4934 33.8649C44.1165 28.8012 45.4461 23.5684 45.4461 18.3126V8.47347L45.2756 8.38243C45.2052 8.34629 38.2309 4.70898 25.6052 4.70898C12.9804 4.70898 5.92405 8.34544 5.85396 8.38186ZM25.6052 5.34455C37.006 5.34455 43.6819 8.32667 44.7639 8.84957V18.3126C44.7639 23.4716 43.4566 28.6111 40.88 33.591C35.2402 44.4679 26.7539 48.7388 25.5669 49.2961C24.379 48.7388 15.8863 44.4679 10.248 33.591C7.67145 28.6111 6.3645 23.4716 6.3645 18.3126V8.85071C7.45628 8.32837 14.2022 5.34455 25.6052 5.34455Z"
                                                                                                fill="black"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M28.5928 40.1269C28.9239 40.3397 28.6837 40.7092 28.4385 40.767C28.1832 40.8316 27.965 40.5681 27.8413 40.8569C27.7719 41.0119 27.9604 42.1866 29.2533 42.1866C30.4601 42.1866 31.0359 40.7465 31.1494 40.5297C31.2636 40.3135 31.3371 40.0375 31.2229 40.0375C30.6934 40.0375 30.5391 40.3297 30.5391 40.3297C30.5391 40.3297 30.499 40.0486 30.7622 39.8364C30.9793 39.6631 31.2639 39.7052 31.3667 39.7052C31.5825 39.7052 31.5486 39.5559 31.6789 39.2603C31.9761 38.5647 32.1806 38.5334 32.3737 38.2162C32.5338 37.9578 32.2314 37.8566 31.6349 37.8045C31.0365 37.7516 30.716 37.7741 30.4488 37.8102C30.181 37.8457 29.9144 37.9467 29.7482 38.3274C29.6591 38.5337 29.8223 38.7368 30.1357 38.6842C30.4488 38.6298 30.7503 38.4096 30.7503 38.4096C30.7503 38.4096 30.6092 38.9308 30.1418 39.0386C29.7084 39.1377 29.1967 38.8947 29.2655 38.487C29.3552 37.9581 29.7485 37.5706 30.466 37.4401C31.1846 37.3055 31.9009 37.4085 32.5396 37.5544C33.1763 37.7038 33.6449 37.6133 34.2368 37.5812C35.5132 37.5177 36.3041 37.2378 36.3041 37.2378C36.3041 37.2378 35.729 37.6716 34.9316 37.8722C34.1343 38.0745 33.4233 37.9906 33.1931 38.0745C33.0073 38.1485 32.7447 38.4913 32.5283 38.883C32.3294 39.2432 32.1176 39.6583 32.2091 39.6583C32.9504 39.6845 33.2219 39.5337 33.2219 39.5337C33.2219 39.5337 33.0753 39.831 32.7221 39.9715C32.4769 40.0637 32.0609 40.0637 32.0609 40.0637C32.0609 40.0637 31.8739 40.5038 31.6633 40.901C31.4512 41.2979 31.1038 41.9178 30.4785 42.2245C29.8507 42.5306 28.6503 42.9124 27.8943 41.9016C27.0945 40.8412 27.8245 39.635 28.5928 40.1269ZM19.3109 40.2651C19.4585 40.6162 19.145 40.7991 18.9629 40.7991C18.7802 40.7991 18.5528 40.6731 18.5053 40.8853C18.4619 41.0959 18.9905 42.1818 20.2203 42.1818C21.4507 42.1818 22.021 41.52 21.9343 40.9271C21.8379 40.2654 20.707 40.0025 19.8056 39.5618C19.3645 39.3468 18.3676 39.2028 18.3676 38.3354C18.3676 36.4833 21.3999 37.6662 21.3999 37.6662C21.3999 37.6662 21.4063 37.4346 21.5475 37.4238C21.6157 37.4179 21.7528 37.3928 21.7984 37.6022C21.8434 37.8133 22.0439 38.9257 22.0439 38.9257C22.0439 38.9257 21.5983 38.0788 20.3752 37.7089C20.1588 37.6383 19.2127 37.4711 19.2182 38.1672C19.2295 38.5806 19.7716 38.7661 20.7112 39.1052C21.9463 39.5553 22.5789 39.9744 22.2872 41.1812C22.0096 42.34 20.7908 42.5306 20.1983 42.5306C19.6069 42.5306 18.2461 42.1451 18.2461 40.8737C18.2461 39.9746 19.1949 39.9957 19.3109 40.2651ZM25.7903 33.3012L26.2883 33.5205C26.5754 33.6238 26.7587 33.5783 26.8245 33.5527C26.894 33.5248 27.1569 33.2625 27.2142 33.0391C27.2411 32.9481 27.2267 32.869 27.1747 32.8107C26.981 32.5973 26.6378 31.6172 26.5105 31.0875C26.4634 30.8909 26.5206 30.3484 26.565 29.9117C26.6039 29.5367 26.6277 29.3037 26.6075 29.2437C26.5736 29.1509 26.4245 29.0613 26.2531 28.9603L25.9816 28.7885C25.8368 28.6784 25.8304 28.5284 25.8224 28.3674L25.7937 28.1173C25.7306 27.8846 24.4564 26.6749 24.259 26.6638C23.9728 26.6465 23.8984 26.9384 23.8801 27.1139C23.8687 27.2166 23.9964 27.6752 24.1115 28.0818L24.2385 28.572C24.3689 29.3427 25.2504 30.7 25.6263 31.2792L25.8047 31.5609C25.8818 31.7242 25.8518 31.8531 25.7147 31.9253C25.5816 31.9965 24.4359 31.8852 23.8886 31.768C23.6536 31.7179 23.3634 31.609 23.0803 31.5023C22.7562 31.3822 22.4489 31.2656 22.2713 31.2573C22.0641 31.2474 21.9659 31.2864 21.8896 31.3191L21.7654 31.3512L21.6417 31.3145C21.4899 31.2522 21.2062 31.1384 20.4315 31.0733C19.3024 30.9748 19.2176 31.1859 19.1717 31.3C19.1157 31.4451 19.8059 32.1273 19.9292 32.2187C20.0862 32.3364 20.594 32.516 20.9041 32.4682C21.2585 32.4152 21.8364 32.3487 21.908 32.362L22.0243 32.428L22.1324 32.4992C22.2303 32.5364 22.8614 32.5686 23.0521 32.578C23.2722 32.5891 23.8501 32.7003 24.2725 32.7825L24.7444 32.871C24.9293 32.9026 25.4056 33.1211 25.7903 33.3012Z"
                                                                                                fill="black"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M37.4698 19.6915C37.4447 19.6628 37.4239 19.6611 37.4107 19.6642C37.3988 19.6679 37.3825 19.6784 37.378 19.7126C37.3571 19.8588 37.1597 20.2346 37.003 20.2901C36.6856 20.4042 36.5212 20.7501 36.4022 21.0022C36.3413 21.1322 36.2819 21.2563 36.2348 21.258C36.2146 21.2594 36.1922 21.2392 36.1677 21.1971C35.9721 20.8836 36.0817 20.4042 36.1696 20.0178L36.1898 19.9231C36.2614 19.5974 36.6715 19.141 36.9167 18.8673L37.025 18.7461C37.1919 18.5527 37.2338 17.8972 37.2026 17.848C37.1925 17.8451 37.1857 17.8505 37.1818 17.8562C37.1779 17.8591 37.1747 17.8625 37.1723 17.8665L37.1686 17.8659V17.8693C37.1585 17.8796 37.1499 17.8807 37.1417 17.9137C37.0979 18.1185 36.6951 18.5348 36.007 19.0878C35.8659 19.2013 35.7052 19.4065 35.5736 19.5712C35.4888 19.6793 35.3894 19.8039 35.363 19.8099C35.1926 18.9644 35.5011 18.481 35.6477 18.2474L35.716 18.1288C36.007 17.3925 36.7566 16.8349 36.7646 16.8298C36.7747 16.8084 36.7747 16.7857 36.7563 16.7712C36.7275 16.7507 36.6749 16.7595 36.5919 16.7982L36.5466 16.8192C36.2853 16.9373 35.4968 17.2943 35.0132 18.1541C34.6658 18.7732 34.5314 19.4651 34.5314 19.9868C34.5314 20.2531 34.566 20.4739 34.6248 20.6201C34.7947 21.0412 35.0922 22.0876 35.1837 22.4984C35.2406 22.753 35.2495 23.6273 35.2495 24.1752C35.2495 24.4429 35.2483 24.6304 35.2483 24.6375C35.2464 24.6375 35.0983 25.0819 35.0983 25.0819C35.0977 25.0865 35.0261 25.4336 34.4157 26.0137C33.8011 26.5972 33.1167 26.7826 33.1106 26.7849C32.8358 26.8048 32.5851 26.7943 32.5762 26.761C32.5762 26.0942 31.3476 24.5428 30.7189 24.031C30.0774 23.5084 29.5647 23.134 28.6936 22.6412C27.8066 22.1394 26.8201 20.0355 26.8088 20.015L26.7234 19.7308C26.7234 19.7308 26.6756 19.1632 26.6625 19.0156C26.6946 19.0326 26.7365 19.0568 26.7365 19.0568L27.0389 19.2204L27.3863 19.3444C27.3894 19.3453 27.8412 19.4275 27.8412 19.4275C27.8412 19.4284 28.094 19.5487 28.094 19.5487L28.3284 19.6904L28.693 19.9351L29.0673 20.118C29.075 20.12 29.5169 20.141 29.5169 20.141L29.5271 20.1072C29.5271 20.1072 29.0153 19.8838 29.0141 19.8838C29.0141 19.877 28.8298 19.584 28.8298 19.584C28.7582 19.4884 28.6866 19.3927 28.6152 19.2969C28.6082 19.2924 28.3493 19.1487 28.3493 19.1487C28.2397 19.1332 28.1299 19.1188 28.0199 19.1055C28.0199 19.1029 27.9553 19.0514 27.922 19.0235C27.9507 19.0079 28.0049 18.9766 28.0049 18.9766C28.0049 18.9803 28.3575 19.0181 28.3587 19.0181C28.3587 19.0215 28.6725 19.2198 28.6725 19.2198L29.015 19.4651C29.0205 19.4676 29.3391 19.5826 29.3391 19.5826L29.381 19.5979L29.2412 19.2597C29.1537 19.1818 29.0657 19.1045 28.977 19.0278L28.5889 18.7211C28.5859 18.7185 28.2841 18.574 28.2841 18.574C28.281 18.5735 27.959 18.4725 27.959 18.4725C27.959 18.4719 27.6183 18.2699 27.6183 18.2699C27.6183 18.2699 27.622 18.2483 27.6245 18.2298C27.6676 18.2451 28.0961 18.405 28.0961 18.405C28.0986 18.4053 28.5069 18.5086 28.5069 18.5086C28.5063 18.5072 28.8494 18.6304 28.8494 18.6304C28.8482 18.6292 29.3419 18.8531 29.3419 18.8531C29.3462 18.8551 29.7551 18.9376 29.7551 18.9376C29.7621 18.9379 30.2595 18.8551 30.2595 18.8551C30.2659 18.8523 30.74 18.5456 30.74 18.5456C30.7455 18.5373 30.8328 18.355 30.8328 18.355L30.8514 18.3129L30.699 18.3715C30.6978 18.3715 30.2687 18.574 30.2681 18.574L29.9709 18.6358C29.9709 18.6343 29.6354 18.5732 29.6348 18.5732H29.6354C29.6354 18.5695 29.3633 18.3342 29.3633 18.3342L28.977 17.9865L28.6278 17.8204C28.6229 17.8184 28.2146 17.7569 28.2146 17.7569C28.2146 17.7561 27.966 17.6386 27.9618 17.6366C27.963 17.6366 27.9636 17.6323 27.9636 17.6264C27.9636 17.5985 27.9559 17.5376 27.9529 17.5091L28.4665 17.5493L29.0291 17.5072C29.0291 17.5086 29.3459 17.5686 29.3459 17.5686L29.6663 17.6915L29.9944 17.7328L30.0535 17.7402L29.6877 17.415C29.6841 17.4133 29.3189 17.168 29.3189 17.168C29.3146 17.166 29.0128 17.0633 29.0128 17.0633C29.0073 17.0622 28.5041 17.0227 28.494 17.0218C28.4983 17.0215 28.4989 17.0135 28.4989 17.0019C28.4989 16.9734 28.494 16.933 28.4913 16.9123L28.7291 16.8747C28.7291 16.8761 29.1099 16.9558 29.1099 16.9558C29.1099 16.9569 29.4704 17.1581 29.4704 17.1581L29.8601 17.2818C29.8714 17.2821 30.4291 17.2007 30.4291 17.2007L30.4624 17.1965L30.2926 16.9879C30.2831 16.9811 30.0027 16.9 30.0021 16.9C30.0021 16.8986 29.7707 16.7396 29.7707 16.7396L29.4257 16.5143C29.4208 16.5117 29.1634 16.4303 29.1634 16.4303C29.1591 16.4289 28.7533 16.3686 28.7521 16.3683C28.7521 16.3643 28.5525 16.1936 28.5482 16.1908C28.5543 16.1896 28.5669 16.1302 28.5715 16.1032L28.786 16.1589L29.0621 16.2812L29.4542 16.3968L29.3676 16.236L29.2152 16.0881L29.0817 15.9282L29.1396 15.9148C29.1396 15.9197 29.5567 16.1174 29.5567 16.1174L29.8818 16.2204C29.8818 16.2221 30.1328 16.4409 30.1328 16.4409C30.1365 16.4437 30.6115 16.6929 30.6115 16.6929L30.6592 16.718L30.5726 16.5023C30.5702 16.4975 30.3124 16.1911 30.3124 16.1911L30.0979 15.8462C30.096 15.8423 29.7076 15.475 29.7076 15.475C29.704 15.4716 29.2096 15.226 29.2084 15.226C29.2084 15.2241 29.0202 15.0258 29.0202 15.0258C28.905 14.9168 28.79 14.8077 28.6752 14.6983C28.6752 14.694 28.64 14.5819 28.622 14.525C28.6804 14.5424 28.9568 14.6277 28.9568 14.6277L29.3437 14.7293C29.3437 14.7302 29.6198 14.8901 29.6198 14.8901C29.6198 14.8918 29.85 15.1515 29.85 15.1515C29.8582 15.1575 30.2249 15.3009 30.2249 15.3009L31.1594 15.4135L31.2138 15.4198L30.9574 15.1689C30.9509 15.1643 30.4557 14.9598 30.4557 14.9598L30.1585 14.7583C30.1585 14.7546 29.9923 14.4775 29.9923 14.4775L29.819 14.1919C29.816 14.1876 29.5362 13.9427 29.5362 13.9427C29.5319 13.9398 29.1876 13.756 29.1876 13.756L28.8469 13.4926C28.8469 13.49 28.7649 13.3321 28.7126 13.2269L28.9492 13.4388L29.4013 13.8067C29.4068 13.8098 29.7517 13.9529 29.7517 13.9529L30.0471 14.1748L30.3902 14.5003C30.4021 14.5054 30.9384 14.5757 30.9384 14.5757L31.0054 14.5848L30.4609 14.1464C30.4609 14.1384 30.3379 13.7871 30.3379 13.7871C30.2437 13.7019 30.1486 13.6176 30.0526 13.5341L29.9044 13.3723C29.9044 13.368 29.7569 12.9501 29.7569 12.9501C29.6555 12.8519 29.5533 12.7545 29.4502 12.6579C29.4502 12.6556 28.9584 12.2291 28.9571 12.2274V12.2266C28.9571 12.22 28.9397 12.1549 28.9296 12.1119C28.9672 12.1296 29.0187 12.1549 29.0187 12.1549L29.4701 12.3993C29.4744 12.4013 30.0119 12.5441 30.0119 12.5441L30.5726 12.6676L31.2206 12.7637L31.0682 12.4772C31.0574 12.4681 30.7351 12.3461 30.7351 12.3461L30.4361 12.1839C30.433 12.1831 30.0679 12.0397 30.0679 12.0397L29.7462 11.9173C29.7462 11.9145 29.5375 11.6641 29.4211 11.5259C29.5329 11.5956 29.7052 11.7045 29.7052 11.7045C29.7135 11.7071 29.995 11.7279 29.995 11.7279L30.8781 11.7281C30.8781 11.7304 31.2356 11.9099 31.2356 11.9105C31.2356 11.9116 31.5404 12.2172 31.5404 12.2172L31.5805 12.2573L31.5435 11.9125C31.5398 11.9025 31.3461 11.6775 31.3461 11.6775C31.3406 11.6735 30.823 11.4078 30.823 11.4078L30.4116 11.2638C30.4086 11.263 29.7887 11.1611 29.7857 11.1611V11.1603C29.7857 11.1549 29.6672 11.0237 29.6672 11.0237C29.6648 11.0226 29.2136 10.6345 29.2136 10.6345C29.1407 10.5991 29.0676 10.5641 28.9942 10.5295C28.9942 10.5284 28.9253 10.4627 28.8824 10.4212H29.1145C29.1145 10.4246 29.4701 10.6231 29.4701 10.6231C29.4732 10.6251 29.9479 10.7674 29.9479 10.7674L30.5536 10.8496H30.553C30.553 10.8556 30.7777 11.0894 30.7777 11.0894L31.1052 11.2764C31.2294 11.2977 31.3538 11.3182 31.4783 11.3381L31.5303 11.3458L30.7639 10.4729C30.759 10.4687 30.3926 10.2852 30.3926 10.2852C30.3896 10.2835 29.9598 10.1608 29.9598 10.1608C29.9598 10.1566 29.5815 9.7577 29.5815 9.7577C29.5772 9.75344 29.1034 9.48857 29.1034 9.48857C28.9889 9.46163 28.8741 9.43564 28.7591 9.41061C28.7805 9.37847 28.8518 9.26922 28.8518 9.26865C28.8531 9.27178 29.2314 9.11275 29.2314 9.11275C29.2314 9.1136 29.786 9.01203 29.786 9.01203C29.801 9.00008 29.8429 8.8769 29.8429 8.8769C29.8359 8.85613 29.599 8.71331 29.599 8.71331C29.5045 8.68478 29.4098 8.65671 29.3149 8.6291C29.2975 8.63109 29.1475 8.71274 29.1475 8.71331C29.1475 8.71075 28.6835 8.73038 28.6835 8.73038C28.6835 8.7301 28.1289 8.6089 28.1289 8.60833C28.1289 8.60577 27.5574 8.16309 27.5574 8.16309C27.47 8.12123 27.3823 8.07969 27.2945 8.03848C27.2881 8.03734 26.3441 7.93464 26.3417 7.93464C26.3417 7.92354 26.1198 7.61572 26.1198 7.61572L25.8162 7.30732C25.8149 7.30561 25.4296 6.98242 25.4296 6.98242L25.4176 7.00604L25.2885 7.27176C25.2891 7.2692 25.1612 7.45298 25.1612 7.45298V7.45753C25.1612 7.49139 25.1792 7.66892 25.1792 7.66892C25.1847 7.68001 25.3096 7.79893 25.3124 7.80235C25.3059 7.80235 25.2652 7.98727 25.2652 7.98869C25.264 7.97589 24.7473 7.99552 24.7464 7.99552C24.7464 7.99324 24.3243 7.81316 24.3243 7.81316C24.3216 7.81145 23.9981 7.7096 23.9981 7.7096C23.9916 7.70761 23.239 7.72923 23.239 7.72923C23.2224 7.7372 23.0948 7.92098 23.0948 7.92098L23.0777 7.94516L23.4089 7.98955C23.4089 7.99068 23.4578 8.0197 23.4851 8.03592L23.4003 8.10022C23.4003 8.09623 22.9396 8.0766 22.9396 8.0766C22.932 8.07774 22.6078 8.19979 22.6078 8.19979L22.5742 8.21316L22.7349 8.31359C22.745 8.317 23.4333 8.3372 23.4333 8.3372L23.9445 8.45954V8.46011C23.9445 8.46665 24.0418 8.59581 24.0418 8.59581C24.0418 8.59581 24.111 8.68657 24.137 8.72213L23.9182 8.83422C23.9209 8.83394 23.2962 9.07889 23.2962 9.07889L22.0049 9.75287C22.0036 9.75173 21.1546 9.86951 21.1546 9.86951C21.1482 9.8715 20.8222 10.0402 20.8222 10.0402C20.8151 10.0448 20.5534 10.3819 20.5534 10.3819C20.5507 10.3862 20.4026 10.8058 20.4026 10.8058C20.3909 11.5187 20.4215 11.5352 20.4325 11.5409C20.458 11.5557 20.6796 11.6724 20.851 11.587C21.045 11.4889 21.4604 11.3924 21.6761 11.3498C21.7827 11.3296 21.8326 11.3651 21.8414 11.4018C21.8531 11.4419 21.8209 11.4966 21.7413 11.5168L21.6967 11.529C21.3214 11.6237 20.9385 11.7384 20.951 11.8729L21.0172 11.9757C21.1846 12.0892 21.6198 12.0354 21.8509 11.9867L22.0921 11.9239C22.3002 11.865 22.5368 11.7993 22.7388 11.8203C22.8555 11.8328 22.9583 11.8795 23.0798 11.9327C23.2445 12.0067 23.4327 12.0906 23.7134 12.1077C24.1814 12.1378 24.5009 12.2257 24.526 12.2513C24.5888 12.37 24.5484 12.5455 24.5169 12.6866L24.4927 12.8144C24.3617 13.9185 23.0354 15.1669 22.3963 15.7657C22.2237 15.9279 22.1096 16.0349 22.0851 16.0795L22.0116 16.2374C21.9495 16.384 21.899 16.5103 21.6963 16.5859C21.5791 16.6283 21.3058 16.8195 20.9887 17.0403C20.5308 17.3578 19.963 17.7527 19.8066 17.7356C19.5449 17.7069 18.3228 16.9248 18.2713 16.8767C17.081 15.8061 16.583 16.0258 16.2849 16.1566L16.2377 16.1771C15.8827 16.3273 15.5099 17.2622 15.4762 17.4628L15.3324 18.0386L15.2219 18.4616C15.1891 18.6047 15.0425 18.9564 14.9026 19.2961L14.6155 20.0358C14.5681 20.207 14.453 20.4477 14.3593 20.6423L14.2323 20.9305C14.1439 21.2688 14.1423 23.1214 14.2963 23.2853L14.303 23.2921L14.3333 23.3004C14.4879 23.2856 14.8197 22.9678 14.9788 22.8145L15.0156 22.7789C15.1502 22.6532 15.2932 22.3174 15.2932 22.1763C15.2932 22.0381 15.2237 21.749 15.1962 21.6702C14.9807 21.0585 15.0621 20.4756 15.1013 20.1962L15.1169 20.0716C15.1282 19.9419 15.2681 19.7982 15.404 19.6605L15.5757 19.4759C15.67 19.3592 15.7747 19.3205 15.868 19.2861L16.0213 19.2048L16.0452 19.1817C16.1468 19.087 16.3173 18.9271 16.392 18.7131L16.5377 18.1274L16.5695 17.9709C16.5769 17.9396 16.594 17.9222 16.6225 17.9165C16.6803 17.9046 16.767 17.9473 16.804 17.9931L17.8575 19.1294C18.1275 19.343 18.4048 19.5979 18.4048 19.654L18.4045 19.6588C18.4045 19.658 18.398 19.6591 18.398 19.6591C18.2505 19.6733 17.5083 19.5262 17.3849 19.4935C16.3764 19.2187 15.9161 19.2671 15.561 19.6801C15.1564 20.1533 15.2837 21.6022 15.3663 21.761C15.4422 21.9049 15.8114 23.6702 15.8279 23.9055C15.8444 24.1362 15.9405 24.5488 16.0409 24.6435L16.0685 24.6697C16.1928 24.784 16.5203 25.0899 16.5781 25.3915C16.6405 25.7198 17.3907 26.5989 17.6769 26.6777C17.6984 26.6834 17.721 26.6844 17.7429 26.6804C17.7649 26.6765 17.7855 26.6677 17.803 26.6549C18.0213 26.511 18.1204 25.8074 18.1324 25.5104C18.1464 25.1402 18.0035 24.9613 17.8517 24.7698L17.7935 24.695C17.6818 24.5533 17.485 24.5018 17.3552 24.468C17.2998 24.4535 17.2239 24.4364 17.2239 24.4205C17.2239 24.4151 17.2086 23.8728 17.0225 23.7681C16.8778 23.6853 16.7296 23.1621 16.7122 22.963C16.6953 22.7652 16.613 22.2879 16.5025 22.0782C16.3908 21.8677 16.2968 21.4796 16.3446 21.1803C16.3645 21.0517 16.463 21.0113 16.5432 20.9997C16.6816 20.9792 16.8413 21.0346 16.8661 21.0796C16.9212 21.1826 17.9848 21.7789 18.3436 21.9069C18.5664 21.9854 18.8679 22.2221 19.1342 22.4332C19.3236 22.5809 19.4865 22.7081 19.5881 22.7533C19.7252 22.8148 20.1139 22.8219 20.4261 22.8276C20.5917 22.8301 20.7637 22.8338 20.787 22.8466C20.6603 22.8938 20.6618 23.1004 20.6722 23.167C20.8017 24.0213 24.1456 26.3681 24.4042 26.4999C24.7036 26.6492 25.7773 27.6913 25.8713 27.833C25.9686 27.973 26.0632 28.1252 26.0451 28.2424C26.0194 28.4157 26.0941 28.6137 26.2434 28.7753C26.3864 28.9258 26.5728 29.0165 26.7451 29.0165C26.8945 29.0165 26.9943 28.8919 27.068 28.802L27.0836 28.7832C27.2832 28.5377 27.5792 28.1781 27.6174 27.6157C27.6581 27.039 27.9416 26.81 28.034 26.7949C28.0753 26.7878 28.1056 26.7994 28.1166 26.8248C28.128 26.8509 28.1142 26.8947 28.0582 26.9292C27.9357 27.0063 27.8592 27.2615 27.7754 27.5343C27.7748 27.5366 27.7441 27.8128 27.7441 27.8128C27.7371 28.0191 27.7285 28.2529 27.5069 28.4797C27.1751 28.8137 26.7944 29.5838 26.6958 30.5562C26.6361 31.142 26.9199 31.9858 27.5388 33.0612L27.5819 33.1381L27.7493 33.3992C27.9186 33.6521 28.2014 34.0726 28.1883 34.1711C28.1702 34.3099 28.1561 34.4189 27.8984 34.7196C27.615 35.0502 26.5807 36.1688 26.4797 36.1865C26.2741 36.1865 26.2395 36.2109 26.0739 36.3276L25.8994 36.451C25.7084 36.5771 25.6751 36.6715 25.6429 36.7549C25.6193 36.8178 25.597 36.8727 25.5082 36.9344L25.4418 36.9759C25.4281 36.987 25.3907 37.036 24.9751 37.4226C24.4985 37.8604 24.2858 38.356 24.3592 38.8485C24.3828 39.0024 24.5254 39.0562 24.9484 39.0741C25.3708 39.0923 26.3392 38.4624 26.3824 38.2573L26.3974 38.1791C26.4344 37.9942 26.4966 37.6823 26.6061 37.6374C26.7384 37.5836 26.9649 37.3407 27.1311 37.164L27.1632 37.1307C27.2517 37.0357 27.2731 36.9412 27.2942 36.8513C27.3123 36.7802 27.3288 36.7085 27.379 36.6431C27.4185 36.5953 27.4763 36.5691 27.5434 36.5404C27.6719 36.4832 27.8338 36.4104 27.9504 36.1381C28.0664 35.8712 28.7588 35.4095 29.2644 35.0735C29.5228 34.9028 29.7254 34.7662 29.7737 34.7062C29.8402 34.6257 29.8809 34.4706 29.8809 34.3062C29.8809 34.111 29.8246 33.9034 29.6926 33.7878C29.5007 33.6223 29.3201 33.1295 29.2663 32.975V32.9716C29.2663 32.9076 29.2598 32.7904 29.2494 32.5722C29.2482 32.5622 29.2482 32.5517 29.2482 32.5423C29.2482 31.9651 30.1713 31.4003 30.5699 31.1571L30.7517 31.0405C32.1967 29.8558 32.4795 28.9551 32.533 28.7078L32.5624 28.4117C32.5713 28.2066 32.5787 28.0111 32.7118 27.9855C32.7638 27.9761 32.8504 28.0151 32.9031 28.0734C32.9331 28.105 32.9772 28.1707 32.9478 28.2467C32.882 28.4128 32.8599 30.0831 32.8593 30.1525C32.8642 30.1642 33.0148 30.3292 33.0148 30.3292L33.0424 30.3591L33.0506 30.3201C33.0525 30.3008 33.1354 29.8456 33.1354 29.6845C33.1354 29.5044 33.447 28.7332 33.5223 28.7198C33.5223 28.7221 33.5272 28.7286 33.5272 28.7286C33.5636 28.8353 33.6101 29.0988 33.6101 29.3764C33.6101 29.6493 33.5658 29.936 33.4231 30.1022C33.2067 30.3511 33.0344 30.7451 32.9221 31.0052L32.818 31.2262C32.8063 31.2569 32.8012 31.2893 32.803 31.3218C32.803 31.5335 32.9202 31.9847 32.9974 32.0686C33.0176 32.0885 33.0338 32.0885 33.0451 32.0848C33.0702 32.076 33.0929 32.0459 33.0929 31.8686C33.0929 31.1935 33.7032 30.7039 33.7105 30.7002C34.2486 30.3033 34.3658 29.5673 34.3658 29.0066C34.3658 28.5821 34.2988 28.2581 34.297 28.2492C34.2119 28.1319 34.1258 28.0153 34.0386 27.8993C34.0512 27.905 34.1213 27.8515 34.1445 27.8342C34.1678 27.862 34.413 28.1642 34.413 28.1642C34.4543 28.2179 34.559 28.3747 34.559 28.437C34.559 28.7844 34.6165 29.0222 34.6575 29.1966L34.6676 29.2379C34.7108 29.4228 34.9798 30.0137 34.9918 30.039L35.0205 30.1013L35.0294 30.0336C35.0294 30.0308 35.072 29.7218 35.0294 29.4575C35.0049 29.3093 35.0355 29.1275 35.0665 28.9312L35.1154 28.4805C35.1154 28.1144 35.0591 27.8831 34.9186 27.6726L34.847 27.5716C34.8188 27.5303 34.7913 27.4899 34.7944 27.4817L34.847 27.4606C35.9835 27.1021 36.5124 26.3243 36.7278 25.8936C36.9537 25.4373 36.9657 24.7345 36.9657 24.5994C36.9657 24.4233 36.9574 23.5101 36.7924 23.0409C36.6957 22.7641 36.7266 22.4668 36.7591 22.1459L36.7943 21.5965C36.7943 21.2207 37.007 20.9416 37.2133 20.6719L37.4591 20.318C37.6198 20.0233 37.5344 19.7652 37.4698 19.6915Z"
                                                                                                fill="black"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M24.7499 7.92619C24.7688 7.92733 25.0103 7.82064 25.0103 7.82064C25.0211 7.80044 24.965 7.58792 24.965 7.58792C24.7907 7.39576 24.6156 7.20429 24.4395 7.01352L24.4135 6.98535L24.4046 7.02063L24.3483 7.25079C24.3486 7.24851 24.1815 7.62007 24.1815 7.62007L24.1738 7.63571L24.5258 7.803L24.7499 7.92619Z"
                                                                                                fill="black"></path>
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M24.8541 9.40315C24.9099 9.42249 24.994 9.41396 25.0736 9.38096C25.1954 9.32776 25.2674 9.23672 25.2364 9.17157L25.1804 9.12462C25.1253 9.10499 25.0412 9.11381 24.9628 9.14738C24.8584 9.19063 24.7917 9.26261 24.7917 9.32377C24.7917 9.33487 24.7951 9.34682 24.7991 9.35621L24.8541 9.40315ZM26.9566 8.59659L27.057 8.64695C27.065 8.6631 27.0769 8.67737 27.0917 8.6887C27.1065 8.70002 27.1238 8.70812 27.1424 8.71239C27.1638 8.71654 27.1859 8.71614 27.2071 8.71121C27.2283 8.70629 27.248 8.69696 27.2648 8.68394C27.2918 8.66431 27.2982 8.6276 27.281 8.58123C27.2541 8.50413 27.1675 8.41992 27.0741 8.41992C26.9538 8.41992 26.844 8.43272 26.844 8.51523C26.8443 8.5616 26.9015 8.57924 26.9566 8.59659ZM27.0769 8.92633C27.0304 8.95819 27.0099 9.00115 27.023 9.04468L27.0325 9.08081C27.0444 9.12349 27.0487 9.13231 27.091 9.13686L27.1675 9.14966C27.2654 9.17299 27.4203 9.11637 27.4555 9.04354C27.4674 9.01993 27.4769 8.97412 27.4102 8.93088C27.2954 8.85976 27.154 8.87512 27.0769 8.92633ZM27.39 10.1926C27.3618 10.1801 27.3738 10.1386 27.3955 10.0783C27.413 10.029 27.4289 9.98182 27.4016 9.95593C27.3778 9.93459 27.3352 9.9363 27.263 9.96133C27.0028 10.0484 26.963 10.2948 26.9343 10.4749L26.9254 10.5303C26.9104 10.6106 26.9548 10.6379 26.9823 10.647C27.072 10.6766 27.2339 10.6009 27.2703 10.5431C27.311 10.4808 27.5357 10.4239 27.6994 10.3824L27.7622 10.3665C27.8381 10.3471 27.877 10.3201 27.8825 10.2834C27.8907 10.2353 27.8335 10.1915 27.7827 10.1633C27.7356 10.1374 27.6655 10.1559 27.592 10.1756C27.5192 10.1941 27.4408 10.2131 27.39 10.1926ZM24.6402 10.2851C24.6977 10.2797 24.7427 10.2589 24.7712 10.2208C24.8541 10.1059 24.8584 9.94313 24.7779 9.79547C24.7002 9.65464 24.567 9.56446 24.4311 9.55991L24.433 9.56048L24.4033 9.55678L24.1529 9.57498C24.0207 9.6023 23.898 9.69305 23.8683 9.78238C23.8533 9.82762 23.8618 9.86887 23.8952 9.89988C24.096 10.0976 24.4428 10.299 24.6402 10.2851ZM22.1747 10.0979C22.2047 10.1665 22.3422 10.1741 22.5439 10.1184L22.5882 10.1059L22.9497 9.97442L23.4734 9.65436C23.4887 9.64326 23.6255 9.54767 23.5974 9.48651C23.5775 9.44639 23.5092 9.4535 23.46 9.46204C23.3155 9.48651 23.1738 9.55109 23.0229 9.61937L22.8098 9.71126L22.7159 9.74711C22.3917 9.87172 22.1261 9.98352 22.1747 10.0979ZM21.0735 10.4541C20.9645 10.4541 20.9155 10.509 20.8757 10.5576L20.8271 10.6089C20.7432 10.6757 20.7175 10.8373 20.7279 10.9602C20.7322 11.0114 20.7478 11.1042 20.802 11.1338C20.9057 11.1932 20.9553 11.1514 21.0612 11.0578L21.1433 10.9924C21.2473 10.9113 21.3682 10.8194 21.3832 10.678C21.3906 10.6182 21.3753 10.569 21.3394 10.532C21.2758 10.4677 21.1595 10.4541 21.0735 10.4541ZM21.6758 10.4988C21.6446 10.4925 21.6259 10.5016 21.6161 10.511C21.5846 10.5397 21.5975 10.6012 21.6073 10.6504L21.6134 10.6848L21.607 10.7056C21.5999 10.7232 21.592 10.7457 21.607 10.7648C21.6204 10.7838 21.6532 10.7921 21.7089 10.7921C21.7796 10.7926 21.7866 10.7858 21.8105 10.7272L21.8295 10.682C21.8466 10.6421 21.8469 10.6063 21.8307 10.5778C21.8016 10.5278 21.7294 10.5087 21.6758 10.4988ZM22.2583 11.3761C22.2953 11.3746 22.3301 11.3598 22.3557 11.3349C22.3813 11.31 22.3955 11.277 22.3955 11.2426C22.3955 11.2082 22.3813 11.1751 22.3557 11.1502C22.3301 11.1254 22.2953 11.1106 22.2583 11.109C22.2396 11.1091 22.2211 11.1127 22.2039 11.1194C22.1867 11.1262 22.1711 11.1361 22.158 11.1485C22.1449 11.1609 22.1346 11.1756 22.1277 11.1917C22.1207 11.2078 22.1173 11.2251 22.1175 11.2424C22.1175 11.3161 22.1802 11.3761 22.2583 11.3761ZM24.8823 11.0507C24.8621 11.0472 24.8412 11.0489 24.822 11.0556C24.8027 11.0623 24.7858 11.0738 24.773 11.0888C24.7342 11.1309 24.4976 11.2817 24.3246 11.3921L24.1015 11.5394L24.0834 11.5557C24.0556 11.5801 24.0418 11.5952 24.0599 11.6458L24.0871 11.6814L24.1459 11.6703L24.2328 11.6404L24.358 11.6222C24.4813 11.6074 24.6163 11.5904 24.68 11.5298L24.7629 11.4037L24.8863 11.2197C24.9454 11.1591 24.9484 11.1175 24.9402 11.0939C24.9354 11.0827 24.9275 11.0728 24.9174 11.0652C24.9072 11.0576 24.8952 11.0526 24.8823 11.0507ZM25.1416 11.7944C25.1416 11.8624 25.178 11.8891 25.1985 11.8985C25.2539 11.9258 25.3335 11.8993 25.3809 11.8379L25.5413 11.7082C25.6282 11.6501 25.7252 11.5847 25.8113 11.4831C25.8908 11.3878 25.8566 11.3292 25.8281 11.3042C25.7736 11.2547 25.6616 11.2433 25.6236 11.2723L25.5774 11.3016C25.4724 11.365 25.2239 11.515 25.1614 11.6973C25.1491 11.7284 25.1424 11.7612 25.1416 11.7944ZM26.1865 11.721C26.1538 11.6766 26.0974 11.6581 26.0555 11.6771L25.9426 11.7568C25.863 11.8171 25.7638 11.8936 25.6778 11.9161C25.4691 11.9682 25.1859 12.055 25.1685 12.1881L25.1682 12.2055C25.1682 12.2422 25.1859 12.2641 25.2031 12.2763C25.2823 12.3363 25.4749 12.3008 25.6141 12.2518C25.8278 12.1784 25.9576 12.0888 26.1253 11.9471C26.2284 11.8598 26.2238 11.7725 26.1865 11.721ZM25.3748 13.2544L25.3068 13.2473C25.1311 13.2908 24.8312 13.771 24.6206 14.1289L24.583 14.191L23.9518 15.292L23.7538 15.6425C23.7318 15.6743 23.7394 15.721 23.7725 15.7514C23.8031 15.7799 23.8566 15.7955 23.9215 15.7574C24.0268 15.6923 24.4109 15.3381 24.5891 15.0598L24.8263 14.7557C24.9784 14.5711 25.1517 14.3645 25.2533 14.1184L25.2891 14.0336C25.53 13.453 25.5676 13.3642 25.3748 13.2544ZM27.7481 11.138C27.7301 11.1376 27.7123 11.1406 27.6955 11.1466C27.6788 11.1526 27.6635 11.1617 27.6505 11.1732C27.6375 11.1848 27.6271 11.1986 27.6198 11.2139C27.6126 11.2292 27.6086 11.2456 27.6082 11.2623C27.6082 11.3309 27.671 11.3867 27.7481 11.3867C27.8252 11.3867 27.8868 11.3309 27.8868 11.2623C27.8865 11.2457 27.8827 11.2293 27.8756 11.214C27.8684 11.1988 27.8581 11.185 27.8452 11.1734C27.8324 11.1618 27.8171 11.1528 27.8005 11.1467C27.7838 11.1406 27.766 11.1377 27.7481 11.138ZM27.6817 11.6567C27.6817 11.7255 27.7444 11.7813 27.8216 11.7813C27.8394 11.7815 27.857 11.7784 27.8735 11.7722C27.89 11.7661 27.9051 11.7569 27.9178 11.7453C27.9305 11.7338 27.9406 11.72 27.9476 11.7048C27.9546 11.6895 27.9582 11.6732 27.9584 11.6567C27.958 11.6233 27.9434 11.5914 27.9177 11.5681C27.8921 11.5447 27.8575 11.5317 27.8216 11.532C27.7853 11.5315 27.7503 11.5443 27.7241 11.5676C27.6979 11.591 27.6827 11.623 27.6817 11.6567ZM27.8102 11.9323C27.723 11.9323 27.6508 11.9861 27.6508 12.0504C27.6508 12.1156 27.723 12.1688 27.8102 12.1688C27.8987 12.1688 27.9703 12.1158 27.9703 12.0504C27.9706 11.9861 27.8987 11.9323 27.8102 11.9323ZM27.8038 12.2771C27.7034 12.2771 27.6232 12.336 27.6232 12.4086C27.6232 12.4806 27.7034 12.5395 27.8038 12.5395C27.9042 12.5395 27.9832 12.4803 27.9832 12.4086C27.9832 12.336 27.9042 12.2771 27.8038 12.2771ZM27.8102 12.7147C27.6998 12.7147 27.6082 12.7759 27.6082 12.853C27.6082 12.9289 27.6998 12.9901 27.8102 12.9901C27.9214 12.9901 28.011 12.9289 28.011 12.853C28.011 12.7759 27.9214 12.7147 27.8102 12.7147ZM27.742 13.4481C27.8675 13.4379 27.9596 13.3739 27.9526 13.2999L27.9131 13.2328C27.8699 13.1989 27.7946 13.1819 27.7181 13.1884C27.5969 13.1986 27.5072 13.2595 27.5072 13.3292L27.5078 13.3363L27.5486 13.4032C27.5926 13.4379 27.6646 13.455 27.742 13.4481ZM27.735 13.9087C27.8754 13.8894 27.9746 13.8177 27.9633 13.7437L27.922 13.6823C27.873 13.6473 27.7852 13.6334 27.6955 13.6456C27.5574 13.6635 27.4558 13.7366 27.4671 13.8106L27.5097 13.8718C27.5593 13.907 27.6453 13.9204 27.735 13.9087ZM27.4984 14.1309C27.4984 14.2115 27.6036 14.2758 27.7417 14.2758C27.8791 14.2758 27.9832 14.2115 27.9832 14.1309C27.9832 14.0504 27.8791 13.987 27.7417 13.987C27.6033 13.9873 27.4984 14.0504 27.4984 14.1309ZM27.9287 14.6018C27.9287 14.5164 27.8032 14.4513 27.6428 14.4513C27.4843 14.4513 27.3588 14.5164 27.3588 14.6018C27.3588 14.6866 27.4843 14.7529 27.6428 14.7529C27.8032 14.7529 27.9287 14.6866 27.9287 14.6018ZM27.7463 14.9992C27.7463 14.9159 27.6523 14.8484 27.5388 14.8484C27.4234 14.8484 27.3294 14.9159 27.3294 14.9992C27.3294 15.0826 27.4234 15.1503 27.5388 15.1503C27.6526 15.1503 27.7463 15.0826 27.7463 14.9992ZM27.6483 15.4962C27.6483 15.4026 27.5492 15.3255 27.4258 15.3255C27.304 15.3255 27.2051 15.4026 27.2051 15.4962C27.2051 15.5907 27.3037 15.6667 27.4258 15.6667C27.5492 15.6667 27.6483 15.5907 27.6483 15.4962ZM27.4677 15.9799C27.4677 15.8957 27.3863 15.8288 27.2872 15.8288C27.1886 15.8288 27.1054 15.8954 27.1054 15.9799C27.1054 16.0627 27.1883 16.1304 27.2872 16.1304C27.3863 16.1307 27.4677 16.0627 27.4677 15.9799ZM27.1549 16.2661C27.0594 16.2661 26.9805 16.3335 26.9805 16.4172C26.9805 16.5 27.0594 16.5674 27.1549 16.5674C27.2501 16.5674 27.3282 16.4997 27.3282 16.4172C27.3285 16.3335 27.2501 16.2661 27.1549 16.2661ZM27.0074 16.9919C27.1054 16.9919 27.1886 16.9332 27.1886 16.8607C27.1886 16.7882 27.1057 16.7304 27.0074 16.7304C26.9088 16.7304 26.828 16.7884 26.828 16.8607C26.828 16.933 26.9088 16.9919 27.0074 16.9919ZM26.8412 17.3096C26.9321 17.3096 27.0068 17.2604 27.0068 17.1984C27.0068 17.1367 26.9333 17.0877 26.8412 17.0877C26.746 17.0877 26.6738 17.1364 26.6738 17.1984C26.6738 17.2604 26.7485 17.3096 26.8412 17.3096ZM26.6799 17.6152C26.7665 17.6152 26.84 17.5654 26.84 17.5037C26.84 17.4425 26.7665 17.3927 26.6799 17.3927C26.5908 17.3927 26.5204 17.4425 26.5204 17.5037C26.5201 17.5654 26.5908 17.6152 26.6799 17.6152ZM21.9608 17.3446L21.9896 17.3498L22.2075 17.3133C22.4009 17.2735 22.6923 17.2129 23.0507 17.2041C23.3127 17.1975 23.5968 17.2826 23.8031 17.3452C23.9904 17.4032 24.0837 17.4283 24.1193 17.3924C24.1416 17.3688 24.1278 17.3344 24.1156 17.3102C24.0593 17.1973 23.8126 16.826 23.0076 16.8089C22.4845 16.7978 22.0581 17.1284 21.9669 17.2681C21.9489 17.2966 21.944 17.3176 21.9531 17.3333L21.9608 17.3446ZM24.9542 18.7512C25.0053 18.7208 25.0274 18.667 25.024 18.5899C25.0069 18.2872 24.9196 18.2528 24.74 18.2528C24.5579 18.2528 24.4262 18.4226 24.4262 18.5108C24.4262 18.5936 24.4917 18.6661 24.6188 18.7253C24.6907 18.7606 24.8563 18.8109 24.9542 18.7512ZM27.424 22.4517C27.6835 22.5643 27.7747 22.6044 27.8136 22.6155C27.8148 22.6155 27.8161 22.6189 27.8161 22.6189C27.8161 22.6189 27.8179 22.6175 27.8179 22.617C27.836 22.6221 27.8418 22.6201 27.8461 22.6144C27.8436 22.6127 27.8335 22.5985 27.828 22.5945C27.8311 22.5922 27.8341 22.5862 27.8341 22.5862C27.8341 22.5862 27.8179 22.58 27.8167 22.5785C27.645 22.3771 26.611 21.0107 26.391 20.1114C26.3564 19.9632 26.3157 19.8252 26.2116 19.77C26.1531 19.7395 26.0794 19.7373 25.9897 19.7651H25.9891C25.9683 19.7708 25.9533 19.7868 25.9438 19.8101C25.9349 19.8354 25.9311 19.862 25.9325 19.8886C25.9325 20.2098 26.3007 21.094 26.421 21.2758C27.0864 22.2798 27.4114 22.4448 27.424 22.4517ZM35.8754 22.8423L35.8359 22.8494C35.8371 22.8551 35.846 23.1234 35.846 23.4679C35.846 23.9703 35.8274 24.6403 35.7337 24.9413C35.6578 25.1851 35.3098 25.652 35.0288 26.0255C35.0288 26.0255 34.7019 26.4813 34.7019 26.4819C34.6926 26.4971 34.6878 26.5144 34.6881 26.5319C34.6881 26.5769 34.7126 26.6193 34.7558 26.6457C34.7885 26.6668 34.907 26.7208 35.072 26.5379L35.2807 26.3328C35.5592 26.0745 35.9054 25.7538 36.1493 25.046C36.4169 24.269 35.88 22.8557 35.8754 22.8423ZM27.1678 25.3737C27.1929 25.3971 27.2336 25.4036 27.2761 25.3894C27.3089 25.3789 27.3377 25.3597 27.3589 25.3342C27.3802 25.3088 27.393 25.2781 27.3958 25.246C27.4059 25.1487 27.4788 25.0181 27.5871 24.9066C27.6436 24.8469 27.673 24.7693 27.6691 24.6899C27.6652 24.6105 27.6284 24.5356 27.5663 24.481L27.4277 24.4295C27.3386 24.4323 27.2722 24.4986 27.2685 24.5006C27.222 24.7073 27.1766 24.9143 27.1323 25.1214V25.1208C27.1191 25.1553 27.1072 25.3197 27.1678 25.3737ZM31.6763 27.6651L31.6693 27.6622L31.6622 27.6651C31.6567 27.6691 31.5404 27.7194 31.5074 27.825C31.4847 27.8961 31.527 27.9578 31.56 28.0088L31.5989 28.0765L31.6157 28.2116L31.642 28.4105C31.6486 28.431 31.6624 28.4489 31.6813 28.4612C31.7002 28.4735 31.7231 28.4795 31.7461 28.4782C31.8006 28.4765 31.8639 28.4375 31.8848 28.3587C31.9129 28.252 31.9267 28.1075 31.9267 27.9152C31.9261 27.7396 31.687 27.6674 31.6763 27.6651ZM24.6788 26.0472C24.6632 26.0304 23.0103 24.3632 22.6531 23.9265C22.2892 23.479 22.1154 23.4451 21.9372 23.5367C21.9241 23.5437 21.913 23.5535 21.9048 23.5654C21.8967 23.5772 21.8917 23.5907 21.8904 23.6047C21.8647 23.7865 22.2776 24.2264 22.6391 24.5493C23.1444 25.0013 24.6371 26.0639 24.6524 26.0745L24.6788 26.0472ZM18.2006 21.1268C17.8658 20.9336 17.2861 20.8263 17.2802 20.824L17.2649 20.8568L17.908 21.3074C18.0139 21.3882 18.4819 21.6582 18.6331 21.5478C18.6429 21.5409 18.6507 21.532 18.656 21.5217C18.6612 21.5114 18.6636 21.5 18.6631 21.4886C18.6582 21.4076 18.496 21.2992 18.2006 21.1268ZM18.0436 18.5762L18.0889 18.5583C18.1467 18.4977 18.0136 18.3256 17.8517 18.1865C17.7057 18.0613 17.5572 17.9805 17.4795 17.9845L17.4354 18.0021C17.426 18.0128 17.4212 18.0264 17.422 18.0402C17.422 18.1188 17.5377 18.2576 17.672 18.3742C17.8183 18.4994 17.968 18.5808 18.0436 18.5762ZM19.7619 18.3586L19.6961 18.3623C19.5712 18.4109 19.3729 18.706 19.2147 19.0795C19.1032 19.3432 19.0191 19.6309 19.0191 19.8041C19.0191 19.8863 19.038 19.9421 19.0803 19.9586L19.1452 19.9549C19.2701 19.9054 19.4678 19.6098 19.6279 19.2374C19.739 18.9731 19.8222 18.6855 19.8222 18.5119C19.8222 18.4303 19.8042 18.3742 19.7619 18.3586ZM16.6687 16.5367C16.5074 16.5367 16.3788 16.6078 16.3788 16.6977C16.3788 16.787 16.5074 16.8573 16.6687 16.8573C16.8324 16.8573 16.9598 16.787 16.9598 16.6977C16.9598 16.6078 16.8324 16.5367 16.6687 16.5367ZM15.64 18.5273L15.6902 18.523C15.7774 18.4832 15.9093 18.2627 16.0088 17.9876C16.1141 17.6949 16.1716 17.3805 16.0697 17.3469L16.0204 17.3517C15.9317 17.3924 15.8 17.6123 15.7015 17.8872C15.5944 18.1802 15.5402 18.4946 15.64 18.5273ZM15.9093 20.0417C15.995 19.935 16.0122 19.8149 15.9485 19.77L15.8744 19.7552C15.8126 19.7626 15.7388 19.8109 15.6837 19.8824C15.598 19.989 15.5809 20.1088 15.6443 20.1529L15.7186 20.1691C15.7801 20.1603 15.8548 20.1125 15.9093 20.0417ZM15.8108 21.7003L15.8037 21.6963L15.7716 21.6932C15.6559 21.7182 15.7373 22.1865 15.797 22.4329C15.8818 22.7768 15.9965 23.0545 16.0761 23.1006L16.0829 23.1052L16.1144 23.1083C16.2319 23.0832 16.1487 22.6127 16.0893 22.3686C16.0051 22.0226 15.8916 21.7467 15.8108 21.7003ZM14.6452 22.329C14.5519 22.329 14.4766 22.3933 14.4766 22.4736C14.4766 22.5498 14.5519 22.6141 14.6452 22.6141C14.738 22.6141 14.8157 22.5498 14.8157 22.4736C14.816 22.3933 14.7383 22.329 14.6452 22.329ZM17.5089 25.7282C17.4572 25.728 17.4076 25.7467 17.3707 25.7804C17.3339 25.814 17.3128 25.8598 17.3121 25.9077C17.3121 26.0045 17.4005 26.0844 17.5089 26.0844C17.5603 26.0853 17.6099 26.0671 17.647 26.034C17.684 26.0009 17.7055 25.9555 17.7066 25.9077C17.7059 25.8596 17.6847 25.8137 17.6476 25.78C17.6106 25.7464 17.5607 25.7278 17.5089 25.7282ZM27.1898 30.464C27.196 30.4728 27.2137 30.5024 27.2406 30.4996L27.252 30.499L27.2728 30.47L27.4503 29.967L27.589 29.6318L27.7074 29.3769C27.7438 29.2913 27.7438 29.2341 27.708 29.2008C27.6511 29.1525 27.5336 29.1937 27.5192 29.1985C27.5097 29.2057 27.1855 29.7086 27.1855 29.7086C27.1222 29.7985 27.0983 29.9197 27.0983 30.0444C27.0983 30.2219 27.1461 30.3991 27.1898 30.464ZM27.9997 32.9767L28.0061 32.926C28.0104 32.8962 28.1078 32.1966 27.8764 31.9263C27.8527 31.897 27.8228 31.8726 27.7884 31.8548C27.754 31.8369 27.716 31.8259 27.6768 31.8225C27.6073 31.8165 27.5596 31.8353 27.5332 31.876C27.3921 32.0905 27.9458 32.8984 27.9703 32.9334L27.9997 32.9767ZM29.296 34.3076C29.2695 34.3073 29.2433 34.3118 29.2188 34.3209C29.1943 34.3301 29.1719 34.3436 29.153 34.3608C29.1342 34.378 29.1191 34.3985 29.1088 34.4211C29.0984 34.4437 29.093 34.4679 29.0927 34.4925C29.0927 34.5963 29.1836 34.6768 29.296 34.6768C29.3486 34.6768 29.3992 34.6574 29.4364 34.6228C29.4737 34.5881 29.4946 34.5412 29.4946 34.4922C29.4946 34.4432 29.4737 34.3963 29.4364 34.3616C29.3992 34.327 29.3486 34.3076 29.296 34.3076ZM26.244 32.0543C26.1489 32.0543 26.0677 32.1232 26.0677 32.2082C26.0677 32.2956 26.1492 32.3627 26.244 32.3627C26.3414 32.3627 26.4197 32.2956 26.4197 32.2082C26.4197 32.1232 26.3414 32.0543 26.244 32.0543ZM28.468 34.7827L28.4466 34.7781C28.3413 34.7781 27.9428 35.1022 27.603 35.4254C27.573 35.4549 26.8354 36.1582 26.933 36.2498L26.9385 36.2555L26.9624 36.2601C27.0689 36.2601 27.4668 35.9349 27.8047 35.6134C27.8366 35.5835 28.5754 34.8828 28.4747 34.7878L28.468 34.7827ZM26.2529 36.684C26.1914 36.684 26.095 36.7375 26.009 36.8174C25.9061 36.913 25.8315 37.0453 25.8865 37.0996L25.941 37.1178C26.0038 37.1178 26.1005 37.0655 26.1862 36.9838C26.2866 36.8871 26.3637 36.7577 26.3065 36.7028L26.2529 36.684ZM25.2811 37.9856C25.2055 37.9856 25.0987 38.0433 25.0053 38.1312C24.9077 38.2223 24.8517 38.323 24.8517 38.393C24.8517 38.4197 24.8593 38.4413 24.8774 38.4564L24.9463 38.4809C25.0207 38.4809 25.1305 38.4248 25.2221 38.3363C25.3576 38.2075 25.4121 38.0695 25.3506 38.0097L25.2811 37.9856ZM20.2005 31.4299C20.0548 31.4299 19.9364 31.507 19.9364 31.6043C19.9364 31.701 20.0551 31.7755 20.2005 31.7755C20.3475 31.7755 20.4647 31.701 20.4647 31.6043C20.465 31.507 20.3475 31.4299 20.2005 31.4299ZM22.3523 31.5698C22.2488 31.5698 22.1683 31.6216 22.1683 31.6899C22.1683 31.7539 22.2488 31.8065 22.3523 31.8065C22.452 31.8065 22.5347 31.7536 22.5347 31.6899C22.5347 31.623 22.452 31.5698 22.3523 31.5698ZM24.9784 32.3866L24.9943 32.3639C25.024 32.2489 24.4045 32.0694 24.0733 31.9915C23.6757 31.897 23.2032 31.8213 23.0988 31.8797L23.0914 31.8842L23.0746 31.9081C23.0446 32.0242 23.6638 32.2014 23.9956 32.2819C24.3929 32.3747 24.8655 32.4481 24.9714 32.3903L24.9784 32.3866Z"
                                                                                                fill="white"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4cb3d2d elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                                                        data-id="4cb3d2d" data-element_type="widget"
                                                                        data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div
                                                                                    class="elementor-icon elementor-animation-grow">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="99" height="44"
                                                                                        viewBox="0 0 99 44" fill="none">
                                                                                        <mask id="mask0_2660_1562"
                                                                                            style="mask-type:alpha"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="99"
                                                                                            height="44">
                                                                                            <rect width="99" height="44"
                                                                                                fill="#ffffff"></rect>
                                                                                        </mask>
                                                                                        <g mask="url(#mask0_2660_1562)">
                                                                                            <path
                                                                                                d="M36.6607 9.8069C38.3423 7.5807 40.9209 6.08178 43.7554 5.13571C46.8423 4.10687 50.1305 3.82305 53.4118 3.82305C55.1514 3.82305 58.3133 3.55401 58.327 5.73292C58.3372 7.23184 58.3099 8.73075 58.3031 10.2297C58.2997 11.0013 58.2928 11.7729 58.2894 12.5475C58.286 13.1447 58.3167 13.6976 57.7948 14.1765C57.2082 14.7146 56.3316 14.892 55.5095 14.9156C52.5932 14.9156 49.6768 14.9156 46.7605 14.9156C44.8094 14.9156 42.8583 14.9156 40.9073 14.9156C39.8806 14.9156 38.7993 14.9925 37.7795 14.8624C36.3264 14.6791 34.7881 13.7538 35.2929 12.3288C35.6033 11.4448 36.0774 10.5815 36.6607 9.8069ZM37.0564 12.9762C37.3053 13.3132 38.1069 13.3487 38.4992 13.3546C41.1495 13.399 43.8066 13.3546 46.4569 13.3546C49.4722 13.3546 52.4874 13.3546 55.5027 13.3546C55.8608 13.3458 56.0996 13.2334 56.4202 13.1506C56.4543 13.1418 56.4748 13.124 56.4885 13.1152C56.5055 12.9999 56.4782 12.855 56.4782 12.7486C56.4816 12.0922 56.485 11.4389 56.4885 10.7825C56.4987 9.26587 56.5055 7.74626 56.5157 6.2296C56.5191 5.82752 56.6556 5.63831 56.2054 5.48458C55.5027 5.24806 54.4828 5.38997 53.7495 5.38997C50.9184 5.38997 48.1385 5.54962 45.4166 6.28873C42.7765 7.00419 40.1637 8.25181 38.5094 10.2267C37.9773 10.8624 37.51 11.5926 37.2098 12.2874C37.1109 12.5298 36.9165 12.784 37.0564 12.9762Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M74.8769 9.3243C75.7944 10.0279 76.654 10.7877 77.4385 11.6037C77.8205 12.0028 78.2196 12.3931 78.223 12.943C78.2264 13.4515 77.916 13.9098 77.4555 14.2084C76.7119 14.6843 75.7057 14.575 74.8325 14.575C73.4681 14.575 72.1038 14.575 70.7394 14.575C68.2562 14.575 65.7731 14.575 63.2899 14.575C63.2524 14.5779 63.2115 14.5779 63.1705 14.575C63.1023 14.575 63.0409 14.569 62.9795 14.5602C61.9733 14.4508 61.1615 13.8861 61.1001 12.9489C61.0796 12.6444 61.0933 12.334 61.0899 12.0265C61.0762 10.7375 61.0626 9.45143 61.0523 8.16242C61.0455 7.63321 61.0421 7.10696 61.0353 6.57776C61.0319 6.19342 61.0046 5.82091 61.2024 5.45727C61.8334 4.30721 63.2933 4.45207 64.494 4.65311C65.8004 4.87485 67.0658 5.23258 68.2903 5.68196C70.7053 6.57185 72.9156 7.82538 74.8769 9.3243ZM64.2109 6.19933C63.8971 6.14316 63.1501 5.89482 62.8635 6.09881C62.8022 6.14316 62.8635 6.07516 62.8397 6.19933C62.7817 6.49793 62.8465 6.85271 62.8499 7.15427C62.8635 8.43737 62.8772 9.71751 62.8874 11.0006C62.8908 11.515 62.8977 12.0294 62.9045 12.5439C62.9079 12.8839 62.8056 12.9933 63.1739 13.0139C67.3012 13.0139 71.4284 13.0139 75.5591 13.0139C75.7501 13.0139 75.9547 13.0317 76.1423 13.0139C76.1764 13.011 76.2105 13.0139 76.2447 13.008C76.3095 13.0021 76.347 12.9755 76.3947 12.9519C76.3333 12.8661 76.2412 12.7863 76.1662 12.7094C75.9957 12.532 75.8183 12.3547 75.6409 12.1832C74.1503 10.7375 72.4312 9.47508 70.5313 8.44919C68.5837 7.39965 66.4621 6.60437 64.2109 6.19933Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M76.2003 30.0916C79.4168 29.0539 83.2336 29.9644 85.3928 32.2734C87.5689 34.6031 87.9169 37.9291 86.1193 40.519C84.3183 43.1177 80.788 44.4422 77.3668 43.8686C73.5227 43.2241 70.7769 40.1878 70.736 36.8382C70.7769 33.8226 72.9394 31.1441 76.2003 30.0916ZM76.7563 42.1036C79.3486 42.9166 82.2479 42.2367 84.0182 40.4066C85.7611 38.6061 85.9487 35.9483 84.5639 33.9497C83.1825 31.9571 80.406 30.8632 77.7659 31.3303C74.737 31.8684 72.5745 34.1685 72.5369 36.8411C72.571 39.1472 74.2185 41.3083 76.7563 42.1036Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M77.5204 33.5554C78.9871 33.0883 80.7062 33.4904 81.709 34.5252C82.7391 35.5924 82.9096 37.1416 82.0842 38.3419C81.2724 39.5186 79.6931 40.1306 78.1377 39.9029C76.347 39.6398 75.0986 38.2798 75.0065 36.7455C75.0031 36.7159 74.9997 36.6863 75.0031 36.6568C75.0031 36.6183 75.0065 36.5828 75.0099 36.5474C75.0952 35.2051 76.04 34.0255 77.5204 33.5554ZM78.8063 38.7854C80.1434 38.7884 81.2656 37.8157 81.2622 36.6568C81.2588 35.4949 80.1502 34.5281 78.8063 34.5281C77.4385 34.5281 76.3879 35.4949 76.3504 36.6568C76.3879 37.8216 77.4419 38.7824 78.8063 38.7854Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M24.0676 30.0916C27.2841 29.0539 31.101 29.9644 33.2601 32.2734C35.4397 34.6031 35.7842 37.9291 33.9866 40.519C32.1856 43.1177 28.6553 44.4422 25.2342 43.8686C21.39 43.2241 18.6442 40.1878 18.6033 36.8382C18.6442 33.8226 20.8067 31.1441 24.0676 30.0916ZM24.6236 42.1036C27.2159 42.9166 30.1152 42.2367 31.8855 40.4066C33.6285 38.6061 33.8161 35.9483 32.4312 33.9497C31.0498 31.9571 28.2733 30.8632 25.6332 31.3303C22.6043 31.8684 20.4418 34.1685 20.4043 36.8411C20.4384 39.1472 22.0858 41.3083 24.6236 42.1036Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M25.3875 33.5554C26.8543 33.0883 28.5734 33.4904 29.5762 34.5252C30.6063 35.5924 30.7768 37.1416 29.9514 38.3419C29.1396 39.5186 27.5603 40.1306 26.0049 39.9029C24.2142 39.6398 22.9658 38.2798 22.8737 36.7455C22.8703 36.7159 22.8669 36.6863 22.8703 36.6568C22.8703 36.6183 22.8737 36.5828 22.8771 36.5474C22.9624 35.2051 23.9072 34.0255 25.3875 33.5554ZM26.6735 38.7854C28.0106 38.7884 29.1328 37.8157 29.1294 36.6568C29.1259 35.4949 28.0174 34.5281 26.6735 34.5281C25.3057 34.5281 24.2551 35.4949 24.2176 36.6568C24.2551 37.8216 25.3091 38.7824 26.6735 38.7854Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M46.3 2.95908C47.2176 2.76691 47.985 2.65752 48.9026 2.65456C50.0384 2.65161 51.1708 2.64865 52.3067 2.6457C54.6466 2.63978 56.9865 2.63091 59.3298 2.625C59.4731 2.625 59.6163 2.625 59.763 2.625C61.83 2.68117 63.9312 3.08029 65.9095 3.56515C70.3096 4.64425 74.4641 6.52751 77.8375 9.21788C78.8711 10.0398 79.8261 10.9385 80.6891 11.8935C81.5214 12.8159 82.6231 13.8684 82.6674 15.0923C82.7118 16.405 82.6674 17.7236 82.6674 19.0333C82.6674 19.7428 82.548 20.4021 82.0023 20.9698C81.2178 21.7798 80.174 21.8242 79.0518 21.8567C76.8961 21.9217 74.737 22.1789 72.67 22.7229C70.2857 23.3527 68.0004 24.4052 66.3597 26.0637C65.9266 26.5042 65.5445 26.9802 65.2205 27.4858C64.8965 27.9943 64.6509 28.5235 64.2245 28.9817C63.3854 29.8834 62.1336 30.4245 60.8033 30.4895C60.4554 30.5073 60.1075 30.5102 59.7596 30.5191C57.8802 30.5191 56.0007 30.5191 54.1213 30.5191C52.1907 30.5191 50.2124 30.6285 48.2852 30.5013C46.283 30.3683 44.3728 29.5523 43.0665 28.2219C41.7089 26.8383 40.3548 25.5256 38.6084 24.4909C36.9165 23.4916 34.7779 23.0895 33.509 21.6172C32.6631 20.6386 32.4039 19.5181 32.4039 18.3237C32.4039 15.8758 32.0628 13.4486 33.1782 11.1455C35.4123 6.54229 40.9619 4.0707 46.3 2.95908ZM60.0632 12.1625C60.0632 13.3185 60.0632 14.4715 60.0632 15.6275C60.3394 15.7162 60.5373 15.9468 60.5373 16.2128V18.9742C60.5373 19.2432 60.3394 19.4738 60.0632 19.5595C60.0632 20.5145 60.0632 21.4694 60.0632 22.4243C60.3394 22.513 60.5373 22.7407 60.5373 23.0097V25.771C60.5373 26.0401 60.3394 26.2707 60.0632 26.3564C60.0632 26.5279 60.0632 26.7023 60.0632 26.8738C60.0632 27.9115 60.0632 28.9463 60.0632 29.984C61.0319 29.9544 61.9528 29.8775 62.8055 29.3986C64.0335 28.7068 64.4087 27.5272 65.1932 26.5279C66.5064 24.8545 68.4268 23.6365 70.5518 22.8382C72.5438 22.0873 74.6824 21.6764 76.8381 21.4694C77.7454 21.3807 78.6562 21.3334 79.5703 21.3186C80.921 21.2979 82.0193 20.6268 82.0705 19.3792C82.1217 18.1138 82.0705 16.8396 82.0705 15.5742C82.0705 15.4146 82.0773 15.249 82.0705 15.0894C82.0364 14.3651 81.5759 13.8329 81.1189 13.2564C80.3105 12.2482 79.4066 11.2992 78.4174 10.4212C75.1975 7.56227 71.1146 5.52232 66.7349 4.31609C64.6031 3.73071 62.3212 3.24585 60.0666 3.15125C60.0631 6.15796 60.0632 9.16171 60.0632 12.1625ZM33.0076 16.6356C33.0076 17.4161 32.9701 18.2025 33.0144 18.983C33.0656 19.867 33.4476 20.7332 34.0854 21.4221C34.7574 22.1464 35.6102 22.5426 36.572 22.9092C38.5197 23.6542 40.2456 24.7895 41.7294 26.1022C43.1415 27.3498 44.1716 28.8103 46.1056 29.5198C48.0533 30.2353 50.4102 30.0017 52.4841 30.0017C54.7557 30.0017 57.0274 30.0017 59.3025 30.0017C59.3571 30.0017 59.4117 30.0017 59.4628 30.0017C59.4628 28.8014 59.4628 27.5981 59.4628 26.3978C59.1047 26.3594 58.8284 26.0962 58.8284 25.7769V23.0156C58.8284 22.6963 59.1081 22.4332 59.4628 22.3948C59.4628 21.9247 59.4628 21.4546 59.4628 20.9845C59.4628 20.5233 59.4628 20.0592 59.4628 19.598C59.1047 19.5595 58.8284 19.2964 58.8284 18.9771V16.2158C58.8284 15.8965 59.1081 15.6334 59.4628 15.5949C59.4628 12.4848 59.4628 9.37457 59.4628 6.26439C59.4628 5.22372 59.4628 4.186 59.4628 3.14533C55.7074 3.15716 51.9519 3.16603 48.1965 3.17786C47.7974 3.17786 47.4222 3.27246 47.0334 3.34637C46.0101 3.54446 44.9936 3.78097 44.001 4.06775C42.3604 4.54078 40.7709 5.14981 39.3042 5.94509C37.2679 7.04489 35.4771 8.5172 34.3003 10.3443C33.683 11.3051 33.2123 12.3724 33.0451 13.4693C32.8984 14.3976 33.0076 15.6304 33.0076 16.6356Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M1.20407 26.7174H3.01869C3.01528 26.3833 3.01527 26.0522 3.01527 25.7181C1.73618 25.4166 0.351326 24.6243 0.726532 23.3293C1.13584 21.9161 3.11418 21.3101 4.5843 21.1445C4.75484 21.1297 4.92539 21.1238 5.09594 21.1179C6.35117 19.4623 8.24083 18.2502 10.243 17.3307C14.4965 15.3794 19.3537 14.4334 24.0812 13.8332C25.0397 13.712 25.9981 13.6026 26.9634 13.5169C27.2807 13.4873 27.5979 13.4607 27.9151 13.4371C27.9424 13.4341 27.9697 13.4341 27.997 13.4311C28.0004 13.4075 28.0038 13.3838 28.0106 13.3602C28.0413 13.2124 28.0822 13.0645 28.1266 12.9167C28.2391 12.5442 28.3824 12.1806 28.5461 11.8228C28.9316 10.9714 29.4023 10.1524 29.9412 9.36898C31.2681 7.44138 32.9701 5.68525 34.9382 4.22476C37.3395 2.44203 40.1365 1.04954 43.2336 0.428685C45.0278 0.0709547 46.8424 0 48.6741 0C52.01 0 55.3424 0 58.6783 0C60.2951 0 61.5845 0.218777 63.2422 0.49964C65.8208 0.937194 68.3688 1.52257 70.8451 2.28238C78.5334 4.64162 85.3996 8.75109 90.0078 14.6433C92.8082 18.2235 94.7046 22.3448 95.629 26.5962C96.1202 26.5962 96.6079 26.5962 97.0991 26.5962C97.9587 26.5962 98.808 26.8445 98.9717 27.6901C99.1423 28.5563 98.5283 29.3516 97.4811 29.393C97.0241 29.4107 96.5636 29.4019 96.1031 29.3989C96.1884 30.0996 96.243 30.8003 96.26 31.5039C96.2634 31.6872 96.2737 31.8735 96.2635 32.0568H97.6074C98.4362 32.0568 98.9615 32.8254 98.5658 33.4581L97.3208 35.4271C97.1298 35.7316 96.7614 35.9179 96.3624 35.9179H89.8577C89.0664 35.9179 88.3705 35.4626 88.1522 34.8004L87.3916 32.4677C84.5878 28.3346 76.7563 27.7463 72.6052 30.8417C71.5239 31.6458 70.7224 32.6451 70.296 33.8011L70.0947 34.9659C70.0027 35.5099 69.4637 35.909 68.8293 35.909H36.8142C36.2037 35.909 35.6784 35.5336 35.559 35.0132L35.3032 33.8779C33.4715 28.4942 24.3984 27.4211 19.8141 30.8387C19.0126 31.4359 18.3611 32.1425 17.904 32.9378L17.2593 34.963C17.0786 35.5247 16.4885 35.9149 15.8131 35.9149H3.88165C3.4928 35.9149 3.13465 35.7257 2.94705 35.4242L1.73276 33.4552C1.19724 32.4115 1.46329 32.1425 3.73157 32.0745C3.5883 31.8557 3.46211 31.6251 3.35637 31.3857C3.0835 30.7618 3.01869 30.1144 3.01869 29.4551C3.01869 29.2363 3.01527 29.0205 3.00845 28.8047H1.20407C0.542351 28.8047 0 28.3346 0 27.761C0 27.1875 0.542351 26.7174 1.20407 26.7174ZM95.8303 27.6221C95.9053 28.036 95.9701 28.4529 96.0315 28.8697C96.3931 28.8697 96.7512 28.8697 97.1128 28.8697C97.3925 28.8697 97.6892 28.8934 97.9416 28.7633C98.3987 28.5268 98.5317 27.903 98.2657 27.5068C97.9212 26.9953 97.1025 27.1195 96.5261 27.1195C96.26 27.1195 95.9974 27.1195 95.7313 27.1195C95.7654 27.2851 95.7996 27.4536 95.8303 27.6221ZM7.45632 28.8017H4.81966C4.81966 28.8904 4.82307 28.9761 4.82307 29.0648C4.82307 29.4906 4.78896 29.934 4.88446 30.3539C5.03455 31.0072 5.41999 31.5808 5.93845 32.0509C6.56947 32.0509 7.27894 32.0538 8.08051 32.0538H13.3504C15.7244 26.9037 18.8932 23.4092 26.1278 23.4092C33.11 23.4092 39.2155 26.6642 42.5344 31.5187C42.5446 31.7316 42.548 31.9089 42.548 32.0538H65.5173C67.4137 26.7913 71.7695 23.4092 79.0314 23.4092C85.3246 23.4092 90.9015 26.0522 94.3704 30.1262C94.3636 30.0582 94.3601 29.9873 94.3533 29.9193C94.309 29.4876 94.2544 29.0589 94.193 28.6273C94.193 28.6214 94.193 28.6184 94.1896 28.6125C94.1794 28.5563 94.1725 28.5002 94.1623 28.444C94.1384 28.308 94.118 28.172 94.0907 28.036C94.0429 27.767 93.9884 27.4979 93.9338 27.2318C93.6745 26.0049 93.3369 24.7898 92.9207 23.5984C91.8702 20.5946 90.3796 17.854 88.2716 15.2109C85.7578 12.0564 82.4048 9.31872 78.6221 7.24034C73.5466 4.45241 67.7719 2.78793 61.8846 1.86256C61.4412 1.79161 60.9944 1.72657 60.5475 1.66448C60.3019 1.63196 59.9029 1.629 59.6027 1.55805C56.0315 1.55805 52.4636 1.55805 48.8924 1.55805C46.3273 1.55805 43.8305 1.72657 41.4054 2.54255C38.066 3.666 35.1361 5.83603 32.9667 8.2751C31.9946 9.36898 31.1453 10.5604 30.4869 11.8169C30.2516 12.2663 30.0504 12.7334 29.9003 13.2124C29.8321 13.4193 29.7809 13.6292 29.7331 13.8421C29.7229 13.8864 29.7161 13.9308 29.7093 13.9781C29.7434 13.7859 29.7024 14.0638 29.6888 14.1082C29.624 14.3476 29.4807 14.5605 29.2624 14.7202C29.0748 14.8591 28.8736 14.9242 28.6826 14.933C28.2767 15.001 27.8401 15.001 27.4308 15.0365C26.7247 15.0956 26.022 15.1666 25.3194 15.2464C24.586 15.3292 23.4741 15.48 22.5975 15.613C21.4855 15.7845 20.3803 15.9766 19.282 16.2013C16.9626 16.6744 14.6431 17.2657 12.467 18.1171C10.4954 18.8917 8.55122 19.8732 7.13908 21.3219C6.70589 21.7654 6.38187 22.2975 5.9828 22.7765C5.40976 23.4624 4.87764 24.098 4.82307 24.9761C4.78896 25.5526 4.80601 26.135 4.81624 26.7145H7.45291C8.11463 26.7145 8.65696 27.1845 8.65696 27.7581C8.65696 28.3346 8.11804 28.8017 7.45632 28.8017ZM3.01869 25.1682C3.03233 24.4262 3.22675 23.7196 3.60536 23.0544C3.88506 22.5607 4.28415 22.1113 4.65935 21.6589C4.63206 21.6619 4.60817 21.6619 4.58089 21.6649C3.40752 21.7979 1.75323 22.2709 1.3371 23.3648C0.965309 24.3463 2.03293 24.9199 3.01527 25.1801C3.01868 25.1742 3.01869 25.1712 3.01869 25.1682Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M14.0701 18.2414C15.0593 17.9103 17.7198 17.2806 18.2724 18.5459C18.767 19.6783 16.6999 20.6155 15.8029 20.9348C14.7728 21.3043 12.0781 21.9991 11.4232 20.7308C11.4096 20.713 11.3994 20.6923 11.3925 20.6657C11.0037 19.4595 13.0809 18.5726 14.0701 18.2414ZM11.969 20.509C12.467 21.325 14.5408 20.7869 15.2537 20.5652C15.9086 20.3612 16.5669 20.0803 17.0956 19.6842C17.3583 19.4861 17.846 19.1018 17.7198 18.7529C17.5697 18.3479 16.775 18.339 16.3862 18.342C15.6869 18.3508 14.9842 18.4986 14.3328 18.7115C13.671 18.9273 11.7268 19.6546 11.969 20.509Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M36.074 17.8604H39.2598C39.6555 17.8604 39.9829 18.1412 39.9829 18.4871C39.9829 18.833 39.6589 19.1139 39.2598 19.1139H36.074C35.6783 19.1139 35.3509 18.833 35.3509 18.4871C35.3509 18.1412 35.6749 17.8604 36.074 17.8604Z"
                                                                                                fill="#ffffff"></path>
                                                                                            <path
                                                                                                d="M75.6921 17.8604H78.878C79.2736 17.8604 79.6011 18.1412 79.6011 18.4871C79.6011 18.833 79.277 19.1139 78.878 19.1139H75.6921C75.2965 19.1139 74.969 18.833 74.969 18.4871C74.969 18.1412 75.2965 17.8604 75.6921 17.8604Z"
                                                                                                fill="#ffffff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-a24fab5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="a24fab5" data-element_type="section" id="about"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f0e5a74"
                                                data-id="f0e5a74" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7a88f0e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="7a88f0e" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fb7e27e"
                                                                data-id="fb7e27e" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-9d366d4 elementor-widget elementor-widget-image"
                                                                        data-id="9d366d4" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img decoding="async" width="1020"
                                                                                height="890"
                                                                                src="{{asset('assets/carfront.png')}}"
                                                                                class="attachment-full size-full wp-image-124"
                                                                                alt=""
                                                                                sizes="(max-width: 1020px) 100vw, 1020px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1bec50a"
                                                                data-id="1bec50a" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-f1cac48 elementor-widget elementor-widget-heading"
                                                                        data-id="f1cac48" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                ABOUT US
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-8552156 elementor-widget elementor-widget-heading"
                                                                        data-id="8552156" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Uncover Your Vehicle's Complete History
                                                                                with Vista vin</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-e7d9476 elementor-widget elementor-widget-text-editor"
                                                                        data-id="e7d9476" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            Vista Vin delivers detailed history reports
                                                                            for U.S. and Canadian vehicles, providing an
                                                                            in-depth analysis of crucial elements like
                                                                            Crash History, Issue Inspections, Ownership
                                                                            Records, Recalls, Market Values, and
                                                                            detailed specifications. From accident
                                                                            records to salvage value, we offer a
                                                                            thorough and transparent overview, equipping
                                                                            you with the insights necessary for
                                                                            confident, informed decisions about your
                                                                            vehicle’s history and condition. Trust Vista
                                                                            Vin for a comprehensive exploration of your
                                                                            vehicle’s past.





                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-43b319e elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="43b319e" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0268a41"
                                                data-id="0268a41" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-3d78a8c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="3d78a8c" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7340630"
                                                                data-id="7340630" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-f9b4a94 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="f9b4a94" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <link rel="stylesheet"
                                                                                href="./homeassets/widget-icon-box.min.css">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-menu-11"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Data Sources </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        72

                                                                                    </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-33faa89"
                                                                data-id="33faa89" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-684a4ba elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="684a4ba" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-check"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            VIN Searches </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        40000 </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7561f06"
                                                                data-id="7561f06" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b40a637 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="b40a637" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-document"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Reports Generated </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        9200 </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-1ea725c elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="1ea725c" data-element_type="section" id="why"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78a1d1d"
                                                data-id="78a1d1d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9a647cc elementor-widget elementor-widget-heading"
                                                        data-id="9a647cc" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                WHY CHOOSE US</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-671402c elementor-hidden-mobile elementor-widget elementor-widget-heading"
                                                        data-id="671402c" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Obtain the Ultimate Authentic, Reliable, and <br>Premium
                                                                Vehicle Report from Vista Vin.</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-cca5c9c elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-heading"
                                                        data-id="cca5c9c" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Obtain the Ultimate Authentic, Reliable, and Premium
                                                                Vehicle Report from Vista Vin.</h2>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-5315c1d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="5315c1d" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-56e0583"
                                                                data-id="56e0583" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-38a6a9e elementor-view-stacked elementor-shape-square elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="38a6a9e" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-tick"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Additional Information
                                                                                        </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        Sales History Manufacturer
                                                                                        Information Awards &amp;
                                                                                        Accolades NHTSA Recalls Location
                                                                                        History Performance Safety &amp;
                                                                                        Security. </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-367554d elementor-hidden-tablet elementor-hidden-mobile"
                                                                data-id="367554d" data-element_type="column">
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-473ea67"
                                                                data-id="473ea67" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-975eba2 elementor-view-stacked elementor-shape-square elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="975eba2" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-tick"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Automobile Specs </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        Engine Type Transmission Type
                                                                                        Standard Specifications Optional
                                                                                        Specifications Type Standard
                                                                                        Generic Equipment Type </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-f566160 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="f566160" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-81e7996"
                                                                data-id="81e7996" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b80feb0 elementor-view-stacked elementor-shape-square elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="b80feb0" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-tick"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Problems Check </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        Junk and Salvage Total Loss
                                                                                        Recalls/Defects Flood Damage
                                                                                        Theft and Vandalism Fire Damage
                                                                                        Hail Damage Accidents

                                                                                    </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-889f29f elementor-hidden-tablet elementor-hidden-mobile"
                                                                data-id="889f29f" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2fe3623 elementor-widget elementor-widget-image"
                                                                        data-id="2fe3623" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="462" height="500"
                                                                                src="{{asset('assets/tyre.webp')}}"
                                                                                class="attachment-full size-full wp-image-38"
                                                                                alt=""
                                                                                sizes="(max-width: 462px) 100vw, 462px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2471d45"
                                                                data-id="2471d45" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-dd82d1f elementor-view-stacked elementor-shape-square elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="dd82d1f" data-element_type="widget"
                                                                        data-widget_type="icon-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">

                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span
                                                                                        class="elementor-icon elementor-animation-">
                                                                                        <i aria-hidden="true"
                                                                                            class="icon icon-tick"></i>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="elementor-icon-box-content">

                                                                                    <h3
                                                                                        class="elementor-icon-box-title">
                                                                                        <span>
                                                                                            Title Records &amp; Pricing
                                                                                        </span>
                                                                                    </h3>

                                                                                    <p
                                                                                        class="elementor-icon-box-description">
                                                                                        Mileage Odometer Records Sales
                                                                                        History Title Brand (Problem
                                                                                        Check) Title Issues, Trade-In
                                                                                        Retail Private Party Residuals.
                                                                                    </p>

                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-ca9b894 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                        data-id="ca9b894" data-element_type="section" id="contact"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27f6b4c"
                                                data-id="27f6b4c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-d9e44c6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                                        data-id="d9e44c6" data-element_type="section"
                                                        data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3668e68"
                                                                data-id="3668e68" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-262aac5 elementor-widget elementor-widget-heading"
                                                                        data-id="262aac5" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                ASK A QUERY
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-ef35fb4 elementor-hidden-mobile elementor-widget elementor-widget-heading"
                                                                        data-id="ef35fb4" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Need an Assistance? Please Feel Free
                                                                                to Contact Us</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-bf992c6 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                                        data-id="bf992c6" data-element_type="widget"
                                                                        data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <link rel="stylesheet"
                                                                                href="./homeassets/widget-icon-list.min.css">
                                                                            <ul
                                                                                class="elementor-icon-list-items elementor-inline-items">
                                                                                <li
                                                                                    class="elementor-icon-list-item elementor-inline-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <svg aria-hidden="true"
                                                                                            class="e-font-icon-svg e-fas-arrow-left"
                                                                                            viewBox="0 0 448 512"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                                                                            </path>
                                                                                        </svg> </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">Reply
                                                                                        Within 24 Hours</span>
                                                                                </li>
                                                                                <li
                                                                                    class="elementor-icon-list-item elementor-inline-item">
                                                                                    <span
                                                                                        class="elementor-icon-list-icon">
                                                                                        <svg aria-hidden="true"
                                                                                            class="e-font-icon-svg e-fas-mobile-alt"
                                                                                            viewBox="0 0 320 512"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                                                                                            </path>
                                                                                        </svg> </span>
                                                                                    <span
                                                                                        class="elementor-icon-list-text">24
                                                                                        Hrs Chat Support</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-adef81e elementor-widget elementor-widget-text-editor"
                                                                        data-id="adef81e" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            At Vista Vin, we are dedicated to delivering
                                                                            unparalleled support to our valued
                                                                            customers. Our committed support team is
                                                                            available 24/7 to handle any questions,
                                                                            concerns, or assistance you may need. We
                                                                            firmly believe that exceptional customer
                                                                            service is the cornerstone of our success.





                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e716a51"
                                                                data-id="e716a51" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-c4fd340 wpr-step-type-number_text wpr-step-content-layout-vertical wpr-custom-styles-yes elementor-widget elementor-widget-wpr-form-builder"
                                                                        data-id="c4fd340" data-element_type="widget">
                                                                        <div class="elementor-widget-container">
                                                                            <form class="wpr-form" method="post"
                                                                                action="{{route('sendcontactusmsg')}}"
                                                                                name="New Form" page="Home" page_id="25"
                                                                                novalidate="">
                                                                                @csrf
                                                                                <div class="wpr-step-wrap"></div>
                                                                                <div
                                                                                    class="wpr-form-fields-wrap wpr-labels-">
                                                                                    <div
                                                                                        class="wpr-form-field-type-text wpr-field-group wpr-column wpr-field-group-name elementor-repeater-item-29aeeb5">
                                                                                        <label for="form-field-name"
                                                                                            class="wpr-form-field-label wpr-hidden-element">
                                                                                            Name </label>
                                                                                        <input size="1 " type="text"
                                                                                            name="name"
                                                                                            id="form-field-name"
                                                                                            class="wpr-form-field  wpr-form-field-textual"
                                                                                            placeholder="Name"
                                                                                            required="required"
                                                                                            aria-required="true">
                                                                                    </div>
                                                                                    <div
                                                                                        class="wpr-form-field-type-email wpr-field-group wpr-column wpr-field-group-email elementor-repeater-item-c347cc5 wpr-form-field-required">
                                                                                        <label for="form-field-email"
                                                                                            class="wpr-form-field-label wpr-hidden-element">
                                                                                            Email </label>
                                                                                        <input size="1 " type="email"
                                                                                            name="email"
                                                                                            id="form-field-email"
                                                                                            class="wpr-form-field  wpr-form-field-textual"
                                                                                            placeholder="Email"
                                                                                            required="required"
                                                                                            aria-required="true">
                                                                                    </div>
                                                                                    <div
                                                                                        class="wpr-form-field-type-textarea wpr-field-group wpr-column wpr-field-group-message elementor-repeater-item-36bc2db">
                                                                                        <label for="form-field-message"
                                                                                            class="wpr-form-field-label wpr-hidden-element">
                                                                                            Message </label>
                                                                                        <textarea
                                                                                            class="wpr-form-field-textual wpr-form-field "
                                                                                            name="message"
                                                                                            id="form-field-message"
                                                                                            rows="7"
                                                                                            placeholder="Message"
                                                                                            required="required"
                                                                                            aria-required="true"></textarea>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wpr-field-group wpr-stp-btns-wrap wpr-column wpr-form-field-type-submit">
                                                                                        <button type="submit"
                                                                                            class="wpr-button">
                                                                                            <span>
                                                                                                <span>Send query</span>
                                                                                            </span>
                                                                                            <div
                                                                                                class="wpr-double-bounce wpr-loader-hidden">
                                                                                                <div
                                                                                                    class="wpr-child wpr-double-bounce1">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="wpr-child wpr-double-bounce2">
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>












                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>



                            </div><!-- .entry-content .clear -->



                        </article><!-- #post-## -->

                    </main><!-- #main -->


                </div><!-- #primary -->


            </div> <!-- ast-container -->
        </div><!-- #content -->
        @include('footer.footer', ['settingsData' => $settingsData])

    </div><!-- #page -->

    <div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both"
        style="display: block;">
        <span class="ast-icon icon-arrow"><svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px"
                viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
                <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
            </svg></span> <span class="screen-reader-text">Scroll to Top</span>
    </div>
    <script type="text/javascript">
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
    </script>
    <link rel="stylesheet" id="wpr-loading-animations-css-css" href="./homeassets/loading-animations.min.css"
        media="all">
    <link rel="stylesheet" id="e-animations-css" href="./homeassets/animations.min.css" media="all">
    <script src="./homeassets/frontend.min.js" id="astra-theme-js-js"></script>

    <script src="./homeassets/happy-addons.min.js" id="happy-elementor-addons-js"></script>
    <script src="./homeassets/particles.js" id="wpr-particles-js"></script>
    <script src="./homeassets/jarallax.min.js" id="wpr-jarallax-js"></script>
    <script src="./homeassets/parallax.min.js" id="wpr-parallax-hover-js"></script>
    <!-- <script src="./homeassets/frontend-script.js" id="elementskit-framework-js-frontend-js"></script> -->
    <script src="./homeassets/widget-scripts.js" id="ekit-widget-scripts-js"></script>
    <script src="./homeassets/general.min.js" id="eael-general-js"></script>
    <script src="./homeassets/premium-wrapper-link.min.js" id="pa-wrapper-link-js"></script>
    <script src="./homeassets/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
    <script src="./homeassets/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
    <script src="./homeassets/waypoints.min.js" id="elementor-waypoints-js"></script>
    <script src="./homeassets/core.min.js" id="jquery-ui-core-js"></script>
    <script src="./homeassets/frontend(1).min.js" id="elementor-frontend-js"></script><span id="elementor-device-mode"
        class="elementor-screen-only"></span>
    <script src="./homeassets/animate-circle.min.js" id="animate-circle-js"></script>
    <script src="./homeassets/elementor.js" id="elementskit-elementor-js"></script>

    <script data-cfasync="false" src="./homeassets/frontend(2).min.js" id="wpr-addons-js-js"></script>
    <script src="./homeassets/modal-popups.min.js" id="wpr-modal-popups-js-js"></script>




</body>


</html>