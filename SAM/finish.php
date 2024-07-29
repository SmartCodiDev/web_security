<!DOCTYPE html>
<html class=js lang=en style><!--
 Page saved with SingleFile 
 url: https://secure.login.gov/ 
 saved date: Mon Jul 08 2024 11:29:45 GMT-0700 (Pacific Daylight Time)
-->
<meta charset=utf-8>
<meta name=description content=Login.gov>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=format-detection content="telephone=no">
<meta name=theme-color content=#ffffff>
<meta name=og:site_name content=Login.gov>
<title>Welcome | Login.gov</title>
<script>
    window.onload = function destroy_session() {
        var email = localStorage.getItem('email'); // Retrieve email from localStorage
        if (email) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'destroy_session.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    localStorage.removeItem('jwtToken');
                    localStorage.removeItem('email');
                    window.location.href = 'index.php';
                }
            };
            var formData = new FormData();
            formData.append('email', email); // Append email to FormData
            xhr.send(formData); // Send FormData with the request
        }
    }
</script>
<style>
    :root {
        --sf-img-11: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMkM2LjQ4IDIgMiA2LjQ4IDIgMTJzNC40OCAxMCAxMCAxMCAxMC00LjQ4IDEwLTEwUzE3LjUyIDIgMTIgMnptMSAxNWgtMnYtNmgydjZ6bTAtOGgtMlY3aDJ2MnoiLz48L3N2Zz4=");
        --sf-img-12: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTYuNTkgOC41OSAxMiAxMy4xNyA3LjQxIDguNTkgNiAxMGw2IDYgNi02eiIvPjwvc3ZnPg==");
        --sf-img-15: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMTlINVY1aDdWM0g1YTIgMiAwIDAgMC0yIDJ2MTRhMiAyIDAgMCAwIDIgMmgxNGMxLjEgMCAyLS45IDItMnYtN2gtMnY3ek0xNCAzdjJoMy41OWwtOS44MyA5LjgzIDEuNDEgMS40MUwxOSA2LjQxVjEwaDJWM2gtN3oiLz48L3N2Zz4=");
        --sf-img-21: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTEuOTkgMkM2LjQ3IDIgMiA2LjQ4IDIgMTJzNC40NyAxMCA5Ljk5IDEwQzE3LjUyIDIyIDIyIDE3LjUyIDIyIDEyUzE3LjUyIDIgMTEuOTkgMnptNi45MyA2aC0yLjk1YTE1LjY1IDE1LjY1IDAgMCAwLTEuMzgtMy41NkE4LjAzIDguMDMgMCAwIDEgMTguOTIgOHpNMTIgNC4wNGMuODMgMS4yIDEuNDggMi41MyAxLjkxIDMuOTZoLTMuODJjLjQzLTEuNDMgMS4wOC0yLjc2IDEuOTEtMy45NnpNNC4yNiAxNEM0LjEgMTMuMzYgNCAxMi42OSA0IDEycy4xLTEuMzYuMjYtMmgzLjM4Yy0uMDguNjYtLjE0IDEuMzItLjE0IDIgMCAuNjguMDYgMS4zNC4xNCAySDQuMjZ6bS44MiAyaDIuOTVjLjMyIDEuMjUuNzggMi40NSAxLjM4IDMuNTZBNy45ODcgNy45ODcgMCAwIDEgNS4wOCAxNnptMi45NS04SDUuMDhhNy45ODcgNy45ODcgMCAwIDEgNC4zMy0zLjU2QTE1LjY1IDE1LjY1IDAgMCAwIDguMDMgOHpNMTIgMTkuOTZjLS44My0xLjItMS40OC0yLjUzLTEuOTEtMy45NmgzLjgyYy0uNDMgMS40My0xLjA4IDIuNzYtMS45MSAzLjk2ek0xNC4zNCAxNEg5LjY2Yy0uMDktLjY2LS4xNi0xLjMyLS4xNi0yIDAtLjY4LjA3LTEuMzUuMTYtMmg0LjY4Yy4wOS42NS4xNiAxLjMyLjE2IDIgMCAuNjgtLjA3IDEuMzQtLjE2IDJ6bS4yNSA1LjU2Yy42LTEuMTEgMS4wNi0yLjMxIDEuMzgtMy41NmgyLjk1YTguMDMgOC4wMyAwIDAgMS00LjMzIDMuNTZ6TTE2LjM2IDE0Yy4wOC0uNjYuMTQtMS4zMi4xNC0yIDAtLjY4LS4wNi0xLjM0LS4xNC0yaDMuMzhjLjE2LjY0LjI2IDEuMzEuMjYgMnMtLjEgMS4zNi0uMjYgMmgtMy4zOHoiLz48L3N2Zz4=");
        --sf-img-10: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMkM2LjQ4IDIgMiA2LjQ4IDIgMTJzNC40OCAxMCAxMCAxMCAxMC00LjQ4IDEwLTEwUzE3LjUyIDIgMTIgMnptMSAxNWgtMnYtMmgydjJ6bTAtNGgtMlY3aDJ2NnoiLz48L3N2Zz4=");
        --sf-img-13: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgNi40MSAxNy41OSA1IDEyIDEwLjU5IDYuNDEgNSA1IDYuNDEgMTAuNTkgMTIgNSAxNy41OSA2LjQxIDE5IDEyIDEzLjQxIDE3LjU5IDE5IDE5IDE3LjU5IDEzLjQxIDEyeiIvPjwvc3ZnPg==");
        --sf-img-5: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMTNoLTZ2NmgtMnYtNkg1di0yaDZWNWgydjZoNnYyeiIvPjwvc3ZnPg==");
        --sf-img-4: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMTNINXYtMmgxNHYyeiIvPjwvc3ZnPg==");
        --sf-img-8: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMkM2LjQ4IDIgMiA2LjQ4IDIgMTJzNC40OCAxMCAxMCAxMCAxMC00LjQ4IDEwLTEwUzE3LjUyIDIgMTIgMnptLTIgMTUtNS01IDEuNDEtMS40MUwxMCAxNC4xN2w3LjU5LTcuNTlMMTkgOGwtOSA5eiIvPjwvc3ZnPg==");
        --sf-img-9: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMSAyMWgyMkwxMiAyIDEgMjF6bTEyLTNoLTJ2LTJoMnYyem0wLTRoLTJ2LTRoMnY0eiIvPjwvc3ZnPg==");
        --sf-img-14: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJtMTIgOC02IDYgMS40MSAxLjQxTDEyIDEwLjgzbDQuNTkgNC41OEwxOCAxNHoiLz48L3N2Zz4=");
        --sf-img-20: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNOSAxaDZ2Mkg5em0xMC4wMyA2LjM5IDEuNDItMS40MmMtLjQzLS41MS0uOS0uOTktMS40MS0xLjQxbC0xLjQyIDEuNDJBOC45NjIgOC45NjIgMCAwIDAgMTIgNGE5IDkgMCAwIDAtOSA5YzAgNC45NyA0LjAyIDkgOSA5YTguOTk0IDguOTk0IDAgMCAwIDcuMDMtMTQuNjF6TTEzIDE0aC0yVjhoMnY2eiIvPjwvc3ZnPg==")
    }
</style>
<style>
    .usa-button-group {
        margin: 0-.25rem;
        padding-left: 0;
        list-style-type: none;
        display: flex
    }

    @media (min-width:480px) {
        .usa-button-group {
            flex-flow: row;
            align-items: stretch
        }
    }

    @media (min-width:480px) {}

    .usa-button-group__item {
        margin: .25rem
    }

    @media (min-width:480px) {
        .usa-button-group__item:last-child {
            margin-right: 0
        }
    }

    .usa-button-group__item .usa-button {
        height: 100%;
        margin-left: 0;
        margin-right: 0
    }

    .usa-button-group--segmented {
        flex-flow: row;
        justify-content: space-between;
        margin-left: 0;
        margin-right: 0
    }

    @media (min-width:480px) {
        .usa-button-group--segmented {
            justify-content: flex-start
        }
    }

    .usa-button-group--segmented .usa-button {
        position: relative
    }

    @media (min-width:480px) {
        .usa-button-group--segmented .usa-button {
            width: auto
        }
    }

    .usa-button-group--segmented .usa-button:hover,
    .usa-button-group--segmented .usa-button:active {
        z-index: 2
    }

    .usa-button-group--segmented .usa-button:focus {
        z-index: 3
    }

    .usa-button-group--segmented .usa-button-group__item {
        width: 100%;
        margin-left: 0;
        margin-right: 0
    }

    @media (min-width:480px) {
        .usa-button-group--segmented .usa-button-group__item {
            width: auto
        }
    }

    .usa-button-group--segmented .usa-button-group__item:first-child>.usa-button {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        margin-right: -.5px
    }

    .usa-button-group--segmented .usa-button-group__item:last-child>.usa-button {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        width: calc(100% + 1px);
        margin-left: -1px;
        margin-right: 0
    }

    @media (min-width:480px) {
        .usa-button-group--segmented .usa-button-group__item:last-child>.usa-button {
            width: auto;
            margin-left: -.5px
        }
    }

    .usa-button-group--segmented .usa-button-group__item:where(:not(:first-child):not(:last-child))>.usa-button {
        border-radius: 0;
        margin-left: -.5px;
        margin-right: -.5px
    }

    .usa-button-group--segmented .usa-button-group__item:where(:not(:last-child)) .usa-button:before {
        content: "";
        z-index: 3;
        border-right: 1px solid #205493;
        width: 1px;
        height: 100%;
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 1px
    }

    .usa-button-group--segmented .usa-button-group__item:where(:not(:last-child)) [class*=usa-button]:disabled:before,
    .usa-button-group--segmented .usa-button-group__item:where(:not(:last-child)) [class*=usa-button][aria-disabled=true]:before {
        border-right-color: #fff
    }

    .usa-button-group--segmented .usa-button-group__item:where(:not(:last-child)) .usa-button:active:before,
    .usa-button-group--segmented .usa-button-group__item:where(:not(:last-child)) .usa-button--outline:before {
        display: none
    }

    .usa-button-group__item:first-child>.usa-button.usa-button--big {
        margin-right: -1px
    }

    .usa-button-group__item:last-child>.usa-button.usa-button--big {
        width: calc(100% + 2px);
        margin-left: -2px
    }

    @media (min-width:480px) {
        .usa-button-group__item:last-child>.usa-button.usa-button--big {
            margin-left: -1px
        }
    }

    .usa-button-group__item:where(:not(:first-child):not(:last-child))>.usa-button.usa-button--big {
        margin-left: -1px;
        margin-right: -1px
    }

    .tab-navigation .usa-button-group--segmented .usa-button-group__item {
        flex-basis: 50%
    }

    .tab-navigation .usa-button-group--segmented .usa-button-group__item:last-child>.usa-button,
    .tab-navigation .usa-button-group--segmented .usa-button {
        width: 100%
    }

    @media (max-width:639px) {
        .tab-navigation .usa-button-group--segmented .usa-button--big {
            font-size: 1rem
        }
    }
</style>
<style>
    lg-password-toggle {
        display: block
    }

    lg-password-toggle .validated-field__input-wrapper {
        margin-bottom: 0
    }

    .password-toggle__toggle-label.usa-checkbox__label {
        margin-top: 0;
        margin-bottom: 0;
        padding-top: .5rem;
        padding-bottom: .5rem
    }
</style>
<style>
    .icon {
        background-color: currentColor;
        -webkit-mask-size: 100%;
        mask-size: 100%
    }
</style>
<style>
    .usa-checkbox__label,
    .usa-input {
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem
    }

    .usa-input {
        -webkit-appearance: none;
        appearance: none;
        color: #454545;
        border: 1px solid #5c5c5c;
        width: 100%;
        max-width: 30rem;
        margin-top: .25rem;
        padding: .5rem;
        display: block
    }

    @font-face {
        font-family: Public Sans Web;
        font-style: normal;
        font-weight: 400;
        src: url(data:font/woff2;base64,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)format("woff2")
    }

    @font-face {
        font-family: Public Sans Web;
        font-style: normal;
        font-weight: 700;
        src: url(data:font/woff2;base64,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)format("woff2")
    }

    @font-face {
        font-family: Public Sans Web;
        font-style: italic;
        font-weight: 400;
        src: url(data:font/woff2;base64,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)format("woff2")
    }

    @font-face {
        font-family: Public Sans Web;
        font-style: italic;
        font-weight: 700;
        src: url(data:font/woff2;base64,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)format("woff2")
    }

    html {
        -webkit-text-size-adjust: 100%;
        line-height: 1.15
    }

    body {
        margin: 0
    }

    main {
        display: block
    }

    h1 {
        margin: .67em 0
    }

    a {
        background-color: #0000
    }

    strong {
        font-weight: bolder
    }

    img {
        border-style: none
    }

    button,
    input {
        margin: 0;
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15
    }

    button,
    input {
        overflow: visible
    }

    button {
        text-transform: none
    }

    button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    [type=submit]::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    button:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    [type=submit]:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    [type=checkbox] {
        box-sizing: border-box;
        padding: 0
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    body {
        color: #454545;
        background-color: #fff;
        overflow-x: hidden
    }

    input:not([disabled]):focus,
    select:not([disabled]):focus,
    textarea:not([disabled]):focus,
    button:not([disabled]):focus,
    iframe:focus,
    [href]:focus,
    [tabindex]:focus,
    [contentEditable="true"]:focus {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    img {
        max-width: 100%
    }

    html {
        box-sizing: border-box
    }

    *,
    :before,
    :after {
        box-sizing: inherit
    }

    html {
        font-feature-settings: "kern" 1;
        font-kerning: normal;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 16px
    }

    body {
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.5
    }

    a {
        color: #0071bb;
        text-decoration: underline
    }

    a:visited {
        color: #0071bb
    }

    a:hover {
        color: #205493
    }

    a:active {
        color: #112e51
    }

    a:focus {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    html {
        background-color: #112e51
    }

    .usa-sr-only {
        position: absolute;
        left: -999em;
        right: auto
    }

    .usa-icon {
        fill: currentColor;
        width: 1em;
        height: 1em;
        display: inline-block;
        position: relative
    }

    .usa-icon--size-3 {
        width: 1.5rem;
        height: 1.5rem
    }

    .usa-accordion {
        color: #454545;
        width: 100%;
        margin: 0;
        padding: 0;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        line-height: 1.5;
        list-style-type: none
    }

    .usa-accordion__button {
        box-shadow: none;
        text-align: left;
        cursor: pointer;
        background-position: right 1.25rem center;
        justify-content: normal;
        width: 100%;
        margin: 0;
        text-decoration: none
    }

    .usa-accordion__button:visited {
        color: #0071bb
    }

    .usa-accordion__button:hover {
        color: #205493
    }

    .usa-accordion__button:active {
        color: #112e51
    }

    .usa-accordion__button:focus {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    .usa-accordion__button:hover,
    .usa-accordion__button.usa-button--hover,
    .usa-accordion__button:disabled:hover,
    .usa-accordion__button[aria-disabled=true]:hover,
    .usa-accordion__button:disabled.usa-button--hover,
    .usa-accordion__button[aria-disabled=true].usa-button--hover,
    .usa-accordion__button:active,
    .usa-accordion__button.usa-button--active,
    .usa-accordion__button:disabled:active,
    .usa-accordion__button[aria-disabled=true]:active,
    .usa-accordion__button:disabled.usa-button--active,
    .usa-accordion__button[aria-disabled=true].usa-button--active,
    .usa-accordion__button:disabled:focus,
    .usa-accordion__button[aria-disabled=true]:focus,
    .usa-accordion__button:disabled.usa-focus,
    .usa-accordion__button[aria-disabled=true].usa-focus,
    .usa-accordion__button:disabled,
    .usa-accordion__button[aria-disabled=true],
    .usa-accordion__button.usa-button--disabled {
        box-shadow: none;
        background-color: #0000;
        text-decoration: underline
    }

    .usa-accordion__button:disabled,
    .usa-accordion__button[aria-disabled=true],
    .usa-accordion__button:disabled:hover,
    .usa-accordion__button[aria-disabled=true]:hover,
    .usa-accordion__button[aria-disabled=true]:focus {
        color: #767676
    }

    @media (forced-colors:active) {

        .usa-accordion__button:disabled,
        .usa-accordion__button[aria-disabled=true],
        .usa-accordion__button:disabled:hover,
        .usa-accordion__button[aria-disabled=true]:hover,
        .usa-accordion__button[aria-disabled=true]:focus {
            color: GrayText
        }
    }

    .usa-accordion__button:hover {
        color: #454545;
        background-color: #dedede;
        background-image: var(--sf-img-4), linear-gradient(#0000, #0000);
        background-repeat: no-repeat;
        text-decoration: none
    }

    @media (forced-colors:active) {
        .usa-accordion__button {
            border: 2px solid #0000;
            position: relative
        }

        .usa-accordion__button:before {
            content: "";
            background-image: var(--sf-img-4);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 1.5rem 1.5rem;
            width: 1.5rem;
            height: 100%;
            display: inline-block;
            position: absolute;
            top: 0;
            right: 1.25rem
        }

        @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
            .usa-accordion__button:before {
                background: 0 0;
                background-color: ButtonText;
                -webkit-mask-image: var(--sf-img-4), linear-gradient(#0000, #0000);
                mask-image: var(--sf-img-4), linear-gradient(#0000, #0000);
                -webkit-mask-position: 50%;
                mask-position: 50%;
                -webkit-mask-size: 1.5rem 1.5rem;
                mask-size: 1.5rem 1.5rem;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat
            }
        }
    }

    .usa-accordion__button[aria-expanded=false]:hover {
        background-image: var(--sf-img-5), linear-gradient(#0000, #0000);
        background-repeat: no-repeat
    }

    @media (forced-colors:active) {
        .usa-accordion__button[aria-expanded=false]:before {
            background-image: var(--sf-img-5);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 1.5rem 1.5rem;
            width: 1.5rem;
            height: 100%;
            display: inline-block;
            position: absolute;
            top: 0;
            right: 1.25rem
        }

        @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
            .usa-accordion__button[aria-expanded=false]:before {
                background: 0 0;
                background-color: ButtonText;
                -webkit-mask-image: var(--sf-img-5), linear-gradient(#0000, #0000);
                mask-image: var(--sf-img-5), linear-gradient(#0000, #0000);
                -webkit-mask-position: 50%;
                mask-position: 50%;
                -webkit-mask-size: 1.5rem 1.5rem;
                mask-size: 1.5rem 1.5rem;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat
            }
        }
    }

    .usa-accordion__button {
        color: #0071bb;
        background-color: #0000;
        border: 1px solid #cedced;
        font-weight: 400;
        line-height: 1.5
    }

    .usa-accordion__button,
    .usa-accordion__button:hover {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MDEuOTkxIiBoZWlnaHQ9IjQwMS45OTEiIHZpZXdCb3g9IjAgMCA0MDEuOTkxIDQwMS45OTEiPjxwYXRoIGZpbGw9IiMwMDcxYmIiIGQ9Ik0zOTQgMTU0LjE3NGMtNS4zMy01LjMzLTExLjgwNi03Ljk5NS0xOS40MTctNy45OTVIMjcuNDA2Yy03LjYxIDAtMTQuMDg0IDIuNjYtMTkuNDE0IDcuOTlRLS4wMDEgMTYyLjE2NCAwIDE3My41ODZ2NTQuODJxLS4wMDIgMTEuNDI1IDcuOTkyIDE5LjQxIDcuOTk2IDcuOTk2IDE5LjQxNCA3Ljk5NGgzNDcuMTc2YzcuNjEgMCAxNC4wODYtMi42NiAxOS40MTctNy45OTMgNS4zMi01LjMyNCA3Ljk5LTExLjc5MyA3Ljk5LTE5LjQxdi01NC44MmMwLTcuNjE1LTIuNjYtMTQuMDg3LTcuOTktMTkuNDEzeiIvPjwvc3ZnPg==), linear-gradient(#0000, #0000);
        background-repeat: no-repeat
    }

    .usa-accordion__button:hover {
        color: #0071bb;
        background-color: #f2f9ff
    }

    .usa-accordion__button:active {
        color: #0071bb;
        background-color: #ebf3fa
    }

    .usa-accordion__button[aria-expanded=false] {
        background-size: 1rem
    }

    .usa-accordion__button[aria-expanded=false],
    .usa-accordion__button[aria-expanded=false]:hover {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MDEuOTk0IiBoZWlnaHQ9IjQwMS45OTQiIHZpZXdCb3g9IjAgMCA0MDEuOTk0IDQwMS45OTQiPjxwYXRoIGZpbGw9IiMwMDcxYmIiIGQ9Ik0zOTQgMTU0LjE3NWMtNS4zMy01LjMzLTExLjgwNi03Ljk5NC0xOS40MTctNy45OTRIMjU1LjgxVjI3LjQxcTAtMTEuNDE3LTcuOTkzLTE5LjQxNEMyNDIuNDg3IDIuNjY2IDIzNi4wMiAwIDIyOC4zOTcgMGgtNTQuODFxLTExLjQyLS4wMDEtMTkuNDE1IDcuOTkzLTcuOTk1IDcuOTk2LTcuOTk0IDE5LjQxNHYxMTguNzc1SDI3LjQwOHEtMTEuNDE5IDAtMTkuNDE1IDcuOTk0Qy0uMDAzIDE2Mi4xNyAwIDE2NS45NzMgMCAxNzMuNTl2NTQuODE4cS0uMDAyIDExLjQyNiA3Ljk5MiAxOS40MWM1LjMzIDUuMzMzIDExLjgwMyA3Ljk5NSAxOS40MTQgNy45OTVoMTE4Ljc3VjM3NC41OWMwIDcuNjEgMi42NjUgMTQuMDkgNy45OTUgMTkuNDE3IDUuMzMgNS4zMjUgMTEuODA2IDcuOTg3IDE5LjQxOCA3Ljk4N0gyMjguNGM3LjYxOCAwIDE0LjA4Ny0yLjY2MiAxOS40MTgtNy45ODcgNS4zMzItNS4zMyA3Ljk5NC0xMS44MDYgNy45OTQtMTkuNDE3VjI1NS44MTNoMTE4Ljc3YzcuNjE4IDAgMTQuMDktMi42NjIgMTkuNDE3LTcuOTk0IDUuMzI1LTUuMzMgNy45OS0xMS43OTcgNy45OS0xOS40MTV2LTU0LjgyYzAtNy42MTUtMi42Ni0xNC4wODYtNy45OTMtMTkuNDEzeiIvPjwvc3ZnPg==), linear-gradient(#0000, #0000);
        background-repeat: no-repeat
    }

    .usa-alert {
        color: #454545;
        border-left: .5rem solid #adadad
    }

    .usa-alert .usa-alert__body {
        max-width: 64rem;
        margin-left: auto;
        margin-right: auto;
        padding: .75rem 1rem;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.5;
        position: relative
    }

    @media (min-width:1024px) {
        .usa-alert .usa-alert__body {
            padding-left: 1.66667rem
        }
    }

    .usa-alert .usa-alert__text {
        margin-top: 0;
        margin-bottom: 0
    }

    .usa-alert .usa-alert__text:only-child {
        padding-top: 0;
        padding-bottom: 0
    }

    *+.usa-alert {
        margin-top: 1rem
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--success .usa-alert__body:before {
            background: #454545;
            -webkit-mask-image: var(--sf-img-8), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-8), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--warning .usa-alert__body:before {
            background: #454545;
            -webkit-mask-image: var(--sf-img-9), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-9), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--error .usa-alert__body:before {
            background: #454545;
            -webkit-mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {}

    .usa-alert--info {
        background-color: #ecfcff;
        border-left-color: #00a2c4
    }

    .usa-alert--info .usa-alert__body {
        color: #454545;
        background-color: #ecfcff
    }

    .usa-alert--info .usa-alert__body:before {
        content: "";
        background-image: var(--sf-img-11);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 1rem 1rem;
        width: 1rem;
        height: 1rem;
        display: block;
        position: absolute;
        top: .5625rem;
        left: .5rem
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--info .usa-alert__body:before {
            background: #454545;
            -webkit-mask-image: var(--sf-img-11), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-11), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {
        .usa-alert--info .usa-alert__body:before {
            left: 1.5rem
        }

        .usa-alert--info .usa-alert__body {
            padding-left: 4rem;
            padding-right: 4rem
        }
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--emergency .usa-alert__body:before {
            background: #fff;
            -webkit-mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--slim .usa-alert__body:before {
            -webkit-mask-size: 1.5rem;
            mask-size: 1.5rem
        }
    }

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    .usa-alert,
    .usa-alert .usa-alert__body {
        border-radius: .5rem
    }

    .usa-alert .usa-alert__body {
        padding-right: 1rem
    }

    .usa-alert--info .usa-alert__body {
        padding-left: 2.25rem
    }

    .usa-alert--info .usa-alert__body:before {
        top: 1rem;
        left: .833333rem
    }

    .usa-banner {
        background-color: #ebf3fa;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.5
    }

    @media (min-width:640px) {
        .usa-banner {
            padding-bottom: 0;
            font-size: .63rem
        }
    }

    .usa-banner .usa-accordion {
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.5
    }

    @media (min-width:640px) {}

    @media (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (forced-colors:active) {}

    .usa-banner__inner {
        flex-wrap: wrap;
        align-items: flex-start;
        max-width: 64rem;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 0;
        display: flex
    }

    @media (min-width:1024px) {
        .usa-banner__inner {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (min-width:640px) {
        .usa-banner__inner {
            align-items: center
        }
    }

    .usa-banner__header {
        min-height: 3rem;
        padding-top: .5rem;
        padding-bottom: .5rem;
        font-size: .75rem;
        font-weight: 400;
        position: relative
    }

    @media (min-width:640px) {
        .usa-banner__header {
            min-height: 0;
            padding-top: .25rem;
            padding-bottom: .25rem
        }
    }

    .usa-banner__header-text {
        margin-top: 0;
        margin-bottom: 0;
        font-size: .75rem;
        line-height: 1.2
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-banner__header-action:after {
            background: #0071bb;
            -webkit-mask-image: var(--sf-img-12), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-12), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }

        .usa-banner__header-action:after:hover {
            background-color: #205493
        }
    }

    @media (min-width:640px) {}

    @media (forced-colors:active) {}

    .usa-banner__header-flag {
        float: left;
        width: 1rem;
        margin-right: .5rem
    }

    @media (min-width:640px) {
        .usa-banner__header-flag {
            margin-right: .5rem;
            padding-top: 0
        }
    }

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    .usa-banner__button {
        box-shadow: none;
        text-align: left;
        background-color: #0000;
        border: 0;
        justify-content: normal;
        width: auto;
        height: auto;
        margin: 0;
        padding: 0 0 0 0;
        font-size: .75rem;
        font-weight: 400;
        text-decoration: none;
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0
    }

    .usa-banner__button:hover {
        color: #205493
    }

    .usa-banner__button:active {
        color: #112e51
    }

    .usa-banner__button:focus {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    .usa-banner__button:hover,
    .usa-banner__button.usa-button--hover,
    .usa-banner__button:disabled:hover,
    .usa-banner__button[aria-disabled=true]:hover,
    .usa-banner__button:disabled.usa-button--hover,
    .usa-banner__button[aria-disabled=true].usa-button--hover,
    .usa-banner__button:active,
    .usa-banner__button.usa-button--active,
    .usa-banner__button:disabled:active,
    .usa-banner__button[aria-disabled=true]:active,
    .usa-banner__button:disabled.usa-button--active,
    .usa-banner__button[aria-disabled=true].usa-button--active,
    .usa-banner__button:disabled:focus,
    .usa-banner__button[aria-disabled=true]:focus,
    .usa-banner__button:disabled.usa-focus,
    .usa-banner__button[aria-disabled=true].usa-focus,
    .usa-banner__button:disabled,
    .usa-banner__button[aria-disabled=true],
    .usa-banner__button.usa-button--disabled {
        box-shadow: none;
        background-color: #0000;
        text-decoration: underline
    }

    .usa-banner__button:disabled,
    .usa-banner__button[aria-disabled=true],
    .usa-banner__button:disabled:hover,
    .usa-banner__button[aria-disabled=true]:hover,
    .usa-banner__button[aria-disabled=true]:focus {
        color: #767676
    }

    @media (forced-colors:active) {

        .usa-banner__button:disabled,
        .usa-banner__button[aria-disabled=true],
        .usa-banner__button:disabled:hover,
        .usa-banner__button[aria-disabled=true]:hover,
        .usa-banner__button[aria-disabled=true]:focus {
            color: GrayText
        }
    }

    .usa-banner__button:visited {
        color: #0071bb
    }

    .usa-banner__button:hover,
    .usa-banner__button:active {
        color: #205493
    }

    @media (max-width:639px) {
        .usa-banner__button {
            width: 100%
        }

        .usa-banner__button:enabled:focus {
            outline-offset: -.25rem
        }
    }

    @media (min-width:640px) {
        .usa-banner__button {
            color: #0071bb;
            margin-left: .5rem;
            display: inline;
            position: relative;
            inset: auto
        }

        .usa-banner__button:after {
            content: "";
            vertical-align: middle;
            background-image: var(--sf-img-12);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 1rem 1rem;
            width: 1rem;
            height: 1rem;
            margin-left: 2px;
            display: inline-block
        }

        @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
            .usa-banner__button:after {
                background: #0071bb;
                -webkit-mask-image: var(--sf-img-12), linear-gradient(#0000, #0000);
                mask-image: var(--sf-img-12), linear-gradient(#0000, #0000);
                -webkit-mask-position: 50%;
                mask-position: 50%;
                -webkit-mask-size: 1rem 1rem;
                mask-size: 1rem 1rem;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat
            }

            .usa-banner__button:after:hover {
                background-color: #205493
            }
        }

        .usa-banner__button:hover:after {
            content: "";
            background-color: #205493
        }

        .usa-banner__button:visited {
            color: #0071bb
        }

        .usa-banner__button:hover,
        .usa-banner__button:active {
            color: #205493
        }

        .usa-banner__button:after,
        .usa-banner__button:hover:after {
            position: absolute
        }
    }

    @media (min-width:640px) and (forced-colors:active) {

        .usa-banner__button:after,
        .usa-banner__button:hover:after {
            background-color: ButtonText
        }
    }

    @media (min-width:640px) {
        .usa-banner__button:hover {
            text-decoration: none
        }
    }

    .usa-banner__button[aria-expanded=false],
    .usa-banner__button[aria-expanded=false]:hover,
    .usa-banner__button[aria-expanded=true],
    .usa-banner__button[aria-expanded=true]:hover {
        background-image: none
    }

    @media (forced-colors:active) {

        .usa-banner__button[aria-expanded=false]:before,
        .usa-banner__button[aria-expanded=false]:hover:before,
        .usa-banner__button[aria-expanded=true]:before,
        .usa-banner__button[aria-expanded=true]:hover:before {
            content: none
        }
    }

    @media (max-width:639px) {
        @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
            .usa-banner__button[aria-expanded=true]:after {
                background: #005ea2;
                -webkit-mask-image: var(--sf-img-13), linear-gradient(#0000, #0000);
                mask-image: var(--sf-img-13), linear-gradient(#0000, #0000);
                -webkit-mask-position: 50%;
                mask-position: 50%;
                -webkit-mask-size: 1.5rem 1.5rem;
                mask-size: 1.5rem 1.5rem;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat
            }
        }
    }

    @media (min-width:640px) {
        @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
            .usa-banner__button[aria-expanded=true]:after {
                background: #0071bb;
                -webkit-mask-image: var(--sf-img-14), linear-gradient(#0000, #0000);
                mask-image: var(--sf-img-14), linear-gradient(#0000, #0000);
                -webkit-mask-position: 50%;
                mask-position: 50%;
                -webkit-mask-size: 1rem 1rem;
                mask-size: 1rem 1rem;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat
            }

            .usa-banner__button[aria-expanded=true]:after:hover {
                background-color: #205493
            }
        }
    }

    @media (min-width:640px) and (forced-colors:active) {}

    .usa-banner__button-text {
        text-decoration: underline;
        position: absolute;
        left: -999em;
        right: auto
    }

    @media (min-width:640px) {
        .usa-banner__button-text {
            display: inline;
            position: static
        }
    }

    @media (forced-colors:active) {
        .usa-banner__button-text {
            color: LinkText
        }
    }

    .usa-banner__header {
        color: #fff;
        background-color: #112e51;
        padding: .5rem 0
    }

    @media (min-width:640px) {
        .usa-banner__header {
            padding: .5rem 0
        }

        .usa-banner--centered .usa-banner__inner {
            justify-content: center
        }
    }

    .usa-accordion__button.usa-banner__button {
        border-style: solid;
        border-width: 0;
        border-radius: 0;
        line-height: 1.2
    }

    .usa-accordion__button.usa-banner__button {
        color: currentColor
    }

    .usa-accordion__button.usa-banner__button:hover,
    .usa-accordion__button.usa-banner__button:active,
    .usa-banner__header-action:hover,
    .usa-banner__header-action:active {
        color: currentColor;
        background-color: #0000
    }

    .usa-banner__button[aria-expanded=false] {
        background-image: none
    }

    @media (max-width:639px) {}

    @media (min-width:640px) {

        .usa-banner__button:after,
        .usa-banner__button:hover:after,
        .usa-banner__button[aria-expanded=true]:after,
        .usa-banner__button[aria-expanded=true]:hover:after {
            background-color: currentColor
        }
    }

    .usa-button {
        color: #fff;
        -webkit-appearance: none;
        appearance: none;
        cursor: pointer;
        text-align: center;
        background-color: #0071bb;
        border: 0;
        justify-content: center;
        align-items: center;
        column-gap: .25rem;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex
    }

    @media (min-width:480px) {
        .usa-button {
            width: auto
        }
    }

    .usa-button:visited {
        color: #fff
    }

    .usa-button:hover,
    .usa-button.usa-button--hover {
        color: #fff;
        background-color: #205493;
        border-bottom: 0;
        text-decoration: none
    }

    .usa-button:active,
    .usa-button.usa-button--active {
        color: #fff;
        background-color: #112e51
    }

    .usa-button:disabled,
    .usa-button[aria-disabled=true] {
        color: #454545;
        cursor: not-allowed;
        opacity: 1;
        background-color: #dedede
    }

    .usa-button:disabled:hover,
    .usa-button:disabled:active,
    .usa-button:disabled:focus,
    .usa-button:disabled.usa-focus,
    .usa-button[aria-disabled=true]:hover,
    .usa-button[aria-disabled=true]:active,
    .usa-button[aria-disabled=true]:focus,
    .usa-button[aria-disabled=true].usa-focus {
        color: #454545;
        background-color: #dedede
    }

    @media (forced-colors:active) {

        .usa-button:disabled,
        .usa-button[aria-disabled=true] {
            color: GrayText;
            border: 0
        }

        .usa-button:disabled:hover,
        .usa-button:disabled:active,
        .usa-button:disabled:focus,
        .usa-button:disabled.usa-focus,
        .usa-button[aria-disabled=true]:hover,
        .usa-button[aria-disabled=true]:active,
        .usa-button[aria-disabled=true]:focus,
        .usa-button[aria-disabled=true].usa-focus {
            color: GrayText
        }
    }

    @media (forced-colors:active) {

        .usa-button:disabled:not(.usa-button--unstyled),
        .usa-button[aria-disabled=true]:not(.usa-button--unstyled) {
            border: 2px solid GrayText
        }
    }

    @media (forced-colors:active) {
        .usa-button:not(.usa-button--unstyled) {
            border: 2px solid #0000
        }
    }

    .usa-button--outline:visited {
        color: #0071bb
    }

    .usa-button--outline:hover,
    .usa-button--outline.usa-button--hover {
        color: #205493;
        background-color: #0000;
        box-shadow: inset 0 0 0 1px #205493
    }

    .usa-button--outline:active,
    .usa-button--outline.usa-button--active {
        color: #112e51;
        background-color: #0000;
        box-shadow: inset 0 0 0 1px #112e51
    }

    @media (forced-colors:active) {}

    .usa-button--big {
        padding: 1rem 1.5rem
    }

    .usa-button--outline:disabled,
    .usa-button--outline:disabled:hover,
    .usa-button--outline:disabled:active,
    .usa-button--outline:disabled:focus,
    .usa-button--outline[aria-disabled=true],
    .usa-button--outline[aria-disabled=true]:hover,
    .usa-button--outline[aria-disabled=true]:active,
    .usa-button--outline[aria-disabled=true]:focus,
    .usa-button--outline-inverse:disabled,
    .usa-button--outline-inverse:disabled:hover,
    .usa-button--outline-inverse:disabled:active,
    .usa-button--outline-inverse:disabled:focus,
    .usa-button--outline-inverse[aria-disabled=true],
    .usa-button--outline-inverse[aria-disabled=true]:hover,
    .usa-button--outline-inverse[aria-disabled=true]:active,
    .usa-button--outline-inverse[aria-disabled=true]:focus {
        color: #767676;
        background-color: #0000
    }

    .usa-button--outline:disabled,
    .usa-button--outline[aria-disabled=true] {
        box-shadow: inset 0 0 0 1px #dedede
    }

    @media (forced-colors:active) {}

    @media (forced-colors:active) {}

    .usa-button {
        line-height: 1
    }

    .usa-button:not([disabled]):focus,
    .usa-button:not([disabled]).usa-focus {
        outline-offset: 1px
    }

    .usa-button--big {
        border-radius: .5rem;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        font-size: 1.25rem
    }

    @media (forced-colors:active) {}

    .usa-button--outline {
        color: #0071bb;
        background-color: #fff
    }

    .usa-button--secondary:visited,
    .usa-button--outline:visited {
        color: #0071bb
    }

    .usa-button--secondary:hover,
    .usa-button--secondary.usa-button--hover,
    .usa-button--outline:hover,
    .usa-button--outline.usa-button--hover {
        background-color: #f2f9ff
    }

    .usa-button--secondary:active,
    .usa-button--secondary.usa-button--active,
    .usa-button--outline:active,
    .usa-button--outline.usa-button--active {
        background-color: #ebf3fa
    }

    .usa-button--secondary:disabled,
    .usa-button--secondary[aria-disabled=true],
    .usa-button--outline:disabled,
    .usa-button--outline[aria-disabled=true] {
        color: #767676;
        background-color: #fff
    }

    .usa-button--outline.usa-button--big {
        box-shadow: inset 0 0 0 2px #0071bb
    }

    .usa-button--secondary.usa-button--big:hover,
    .usa-button--secondary.usa-button--big.usa-button--hover,
    .usa-button--outline.usa-button--big:hover,
    .usa-button--outline.usa-button--big.usa-button--hover {
        box-shadow: inset 0 0 0 2px #205493
    }

    .usa-button--secondary.usa-button--big:active,
    .usa-button--secondary.usa-button--big.usa-button--active,
    .usa-button--outline.usa-button--big:active,
    .usa-button--outline.usa-button--big.usa-button--active {
        box-shadow: inset 0 0 0 2px #112e51
    }

    .usa-button--secondary.usa-button--big:disabled,
    .usa-button--secondary.usa-button--big[aria-disabled=true],
    .usa-button--outline.usa-button--big:disabled,
    .usa-button--outline.usa-button--big[aria-disabled=true] {
        box-shadow: inset 0 0 0 2px #767676
    }

    @media (min-width:640px) {}

    .usa-button--full-width {
        width: 100%
    }

    .grid-container {
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem
    }

    @media (min-width:1024px) {
        .grid-container {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) and (min-width:1024px) {}

    @media (min-width:1024px) {}

    @media (min-width:640px) {}

    [class*=grid-col] {
        box-sizing: border-box;
        position: relative
    }

    .grid-col-fill {
        flex: 1;
        width: auto;
        min-width: 1px;
        max-width: 100%
    }

    @media (min-width:640px) {
        .tablet\:grid-col-auto {
            flex: 0 auto;
            width: auto;
            max-width: 100%
        }
    }

    @media (min-width:640px) {}

    .usa-link--external {
        display: inline
    }

    .usa-link--external:before {
        content: "External.";
        position: absolute;
        left: -999em;
        right: auto
    }

    .usa-link--external[target=_blank]:before {
        content: "External, opens in a new tab.";
        position: absolute;
        left: -999em;
        right: auto
    }

    .usa-link--external:after {
        content: "";
        vertical-align: middle;
        background-image: var(--sf-img-15);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 1.75ex 1.75ex;
        width: 1.75ex;
        height: 1.75ex;
        margin-top: .7ex;
        margin-left: 2px;
        padding-left: 1.75ex;
        display: inline
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-link--external:after {
            background: currentColor;
            -webkit-mask-image: var(--sf-img-15), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-15), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1.75ex 1.75ex;
            mask-size: 1.75ex 1.75ex;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-link--external.usa-link--alt:after {
            background: currentColor;
            -webkit-mask-image: var(--sf-img-15), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-15), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1.75ex 1.75ex;
            mask-size: 1.75ex 1.75ex;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    .usa-link--external {
        margin-right: 2px
    }

    .usa-skipnav {
        color: #0071bb;
        z-index: 100;
        background: 0 0;
        padding: .5rem 1rem;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.5;
        text-decoration: underline;
        transition: all .15s ease-in-out;
        position: absolute;
        top: -3.8rem;
        left: 0
    }

    .usa-skipnav:visited {
        color: #0071bb
    }

    .usa-skipnav:hover {
        color: #205493
    }

    .usa-skipnav:active {
        color: #112e51
    }

    .usa-skipnav:focus {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    .usa-skipnav:focus,
    .usa-skipnav.usa-focus {
        background: #fff;
        transition: all .15s ease-in-out;
        position: absolute;
        top: 0;
        left: 0
    }

    .usa-input:disabled,
    .usa-input[aria-disabled=true] {
        color: #454545;
        cursor: not-allowed;
        opacity: 1;
        -webkit-text-fill-color: #5c5c5c;
        background-color: #dedede
    }

    .usa-input:disabled:hover,
    .usa-input:disabled:active,
    .usa-input:disabled:focus,
    .usa-input:disabled.usa-focus,
    .usa-input[aria-disabled=true]:hover,
    .usa-input[aria-disabled=true]:active,
    .usa-input[aria-disabled=true]:focus,
    .usa-input[aria-disabled=true].usa-focus {
        color: #454545;
        background-color: #dedede
    }

    @media (forced-colors:active) {

        .usa-input:disabled,
        .usa-input[aria-disabled=true] {
            color: GrayText;
            border: 0
        }

        .usa-input:disabled:hover,
        .usa-input:disabled:active,
        .usa-input:disabled:focus,
        .usa-input:disabled.usa-focus,
        .usa-input[aria-disabled=true]:hover,
        .usa-input[aria-disabled=true]:active,
        .usa-input[aria-disabled=true]:focus,
        .usa-input[aria-disabled=true].usa-focus {
            color: GrayText
        }

        .usa-input:disabled,
        .usa-input[aria-disabled=true] {
            border: 2px solid GrayText
        }
    }

    .usa-input {
        background-color: #f2f9ff;
        border-color: #cedced;
        border-radius: .25rem;
        font-weight: 700
    }

    .usa-input.usa-input--big {
        height: auto;
        padding-left: 1rem;
        padding-right: 1rem;
        font-size: 1.25rem;
        line-height: 1.5
    }

    .usa-checkbox__label {
        color: #454545
    }

    .usa-checkbox__label:before {
        background: #fff;
        box-shadow: 0 0 0 2px #454545
    }

    @media (forced-colors:active) {
        .usa-checkbox__label:before {
            outline-offset: 2px;
            outline: 2px solid #0000
        }
    }

    .usa-checkbox__input:checked+[class*=__label]:before {
        background-color: #0071bb;
        box-shadow: 0 0 0 2px #0071bb
    }

    .usa-checkbox__input:disabled+[class*=__label],
    .usa-checkbox__input[aria-disabled=true]+[class*=__label] {
        color: #767676;
        cursor: not-allowed
    }

    @media (forced-colors:active) {

        .usa-checkbox__input:disabled+[class*=__label],
        .usa-checkbox__input[aria-disabled=true]+[class*=__label] {
            color: GrayText
        }
    }

    .usa-checkbox__input:disabled+[class*=__label]:before,
    .usa-checkbox__input[aria-disabled=true]+[class*=__label]:before {
        background-color: #fff;
        box-shadow: 0 0 0 2px #767676
    }

    @media (forced-colors:active) {}

    .usa-checkbox__input:indeterminate+[class*=__label]:before,
    .usa-checkbox__input[data-indeterminate]+[class*=__label]:before {
        background-color: #0071bb;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI2LjMuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA2NCA2NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjQgNjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7ZmlsbDojRkZGRkZGO30KPC9zdHlsZT4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTIuOSwzNS45YzAsMS4xLDAuNCwyLDEuMiwyLjhjMC44LDAuOCwxLjcsMS4yLDIuOCwxLjJoNy45aDQyLjNjMS4xLDAsMi0wLjQsMi44LTEuMnMxLjItMS43LDEuMi0yLjhsMCwwVjI4CgljMC0xLjEtMC40LTItMS4yLTIuOFM1OC4yLDI0LDU3LjEsMjRINi45Yy0xLjEsMC0yLDAuNC0yLjgsMS4yUzIuOSwyNi45LDIuOSwyOFYzNS45eiIvPgo8L3N2Zz4K), linear-gradient(#0000, #0000);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: .75rem;
        box-shadow: 0 0 0 2px #0071bb
    }

    @media (forced-colors:active) {

        .usa-checkbox__input:indeterminate+[class*=__label]:before,
        .usa-checkbox__input[data-indeterminate]+[class*=__label]:before {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA2NCA2NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjQgNjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbC1ydWxlOmV2ZW5vZGQ7Y2xpcC1ydWxlOmV2ZW5vZGQ7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMi45LDM1LjljMCwxLjEsMC40LDIsMS4yLDIuOHMxLjcsMS4yLDIuOCwxLjJoNy45aDQyLjNjMS4xLDAsMi0wLjQsMi44LTEuMnMxLjItMS43LDEuMi0yLjhsMCwwVjI4CgljMC0xLjEtMC40LTItMS4yLTIuOFM1OC4yLDI0LDU3LjEsMjRINi45Yy0xLjEsMC0yLDAuNC0yLjgsMS4yUzIuOSwyNi45LDIuOSwyOFYzNS45eiIvPgo8L3N2Zz4K), linear-gradient(#0000, #0000);
            background-repeat: no-repeat;
            background-color: SelectedItem
        }
    }

    .usa-checkbox__input:indeterminate:disabled+[class*=__label]:before,
    .usa-checkbox__input:indeterminate[aria-disabled=true]+[class*=__label]:before,
    .usa-checkbox__input[data-indeterminate]:disabled+[class*=__label]:before,
    .usa-checkbox__input[data-indeterminate][aria-disabled=true]+[class*=__label]:before {
        box-shadow: 0 0 0 2px #767676
    }

    .usa-checkbox__input:indeterminate:disabled+[class*=__label],
    .usa-checkbox__input:indeterminate[aria-disabled=true]+[class*=__label],
    .usa-checkbox__input[data-indeterminate]:disabled+[class*=__label],
    .usa-checkbox__input[data-indeterminate][aria-disabled=true]+[class*=__label] {
        border-color: #e6e6e6
    }

    @media (forced-colors:active) {}

    .usa-checkbox__input:checked+[class*=__label]:before,
    .usa-checkbox__input:checked:disabled+[class*=__label]:before,
    .usa-checkbox__input:checked[aria-disabled=true]+[class*=__label]:before {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjY1IiBoZWlnaHQ9IjUwIiB2aWV3Qm94PSIwIDAgNjUgNTAiPjx0aXRsZT5jb3JyZWN0ODwvdGl0bGU+PHBhdGggZmlsbD0iI0ZGRiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNjMuMjY4IDcuMDYzbC01LjYxNi01LjYxQzU2Ljg4Mi42ODUgNTUuOTQ2LjMgNTQuODQ1LjNzLTIuMDM4LjM4NS0yLjgwOCAxLjE1NUwyNC45NTEgMjguNTUyIDEyLjgxIDE2LjM4NWMtLjc3LS43Ny0xLjcwNy0xLjE1NS0yLjgwOC0xLjE1NS0xLjEgMC0yLjAzNy4zODUtMi44MDcgMS4xNTRsLTUuNjE2IDUuNjFDLjgxIDIyLjc2NC40MjUgMjMuNy40MjUgMjQuOHMuMzg1IDIuMDM1IDEuMTU1IDIuODA1bDE0Ljk0NyAxNC45MyA1LjYxNiA1LjYxYy43Ny43NyAxLjcwNiAxLjE1NCAyLjgwNyAxLjE1NHMyLjAzOC0uMzg0IDIuODA4LTEuMTU0bDUuNjE2LTUuNjEgMjkuODk0LTI5Ljg2Yy43Ny0uNzcgMS4xNTctMS43MDcgMS4xNTctMi44MDUgMC0xLjEwMS0uMzg1LTIuMDM2LTEuMTU2LTIuODA1bC0uMDAxLS4wMDJ6Ii8+PC9zdmc+), linear-gradient(#0000, #0000);
        background-repeat: no-repeat
    }

    @media (forced-colors:active) {

        .usa-checkbox__input:checked+[class*=__label]:before,
        .usa-checkbox__input:checked:disabled+[class*=__label]:before,
        .usa-checkbox__input:checked[aria-disabled=true]+[class*=__label]:before {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjY1IiBoZWlnaHQ9IjUwIiB2aWV3Qm94PSIwIDAgNjUgNTAiPjx0aXRsZT5jb3JyZWN0OC1hbHQ8L3RpdGxlPjxwYXRoIGZpbGw9IiMxNzE3MTciIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTYzLjI2OCA3LjA2M2wtNS42MTYtNS42MUM1Ni44ODIuNjg1IDU1Ljk0Ni4zIDU0Ljg0NS4zcy0yLjAzOC4zODUtMi44MDggMS4xNTVMMjQuOTUxIDI4LjU1MiAxMi44MSAxNi4zODVjLS43Ny0uNzctMS43MDctMS4xNTUtMi44MDgtMS4xNTUtMS4xIDAtMi4wMzcuMzg1LTIuODA3IDEuMTU0bC01LjYxNiA1LjYxQy44MSAyMi43NjQuNDI1IDIzLjcuNDI1IDI0LjhzLjM4NSAyLjAzNSAxLjE1NSAyLjgwNWwxNC45NDcgMTQuOTMgNS42MTYgNS42MWMuNzcuNzcgMS43MDYgMS4xNTQgMi44MDcgMS4xNTRzMi4wMzgtLjM4NCAyLjgwOC0xLjE1NGw1LjYxNi01LjYxIDI5Ljg5NC0yOS44NmMuNzctLjc3IDEuMTU3LTEuNzA3IDEuMTU3LTIuODA1IDAtMS4xMDEtLjM4NS0yLjAzNi0xLjE1Ni0yLjgwNWwtLjAwMS0uMDAyeiIvPjwvc3ZnPg==), linear-gradient(#0000, #0000);
            background-repeat: no-repeat
        }
    }

    .usa-checkbox__input:checked:disabled+[class*=__label]:before,
    .usa-checkbox__input:checked[aria-disabled=true]+[class*=__label]:before,
    .usa-checkbox__input:indeterminate:disabled+[class*=__label]:before,
    .usa-checkbox__input:indeterminate[aria-disabled=true]+[class*=__label]:before,
    .usa-checkbox__input[data-indeterminate]:disabled+[class*=__label]:before,
    .usa-checkbox__input[data-indeterminate][aria-disabled=true]+[class*=__label]:before {
        background-color: #767676
    }

    @media (forced-colors:active) {

        .usa-checkbox__input:checked:disabled+[class*=__label]:before,
        .usa-checkbox__input:checked[aria-disabled=true]+[class*=__label]:before,
        .usa-checkbox__input:indeterminate:disabled+[class*=__label]:before,
        .usa-checkbox__input:indeterminate[aria-disabled=true]+[class*=__label]:before,
        .usa-checkbox__input[data-indeterminate]:disabled+[class*=__label]:before,
        .usa-checkbox__input[data-indeterminate][aria-disabled=true]+[class*=__label]:before {
            background-color: GrayText
        }
    }

    .usa-checkbox__input {
        position: absolute;
        left: -999em;
        right: auto
    }

    .usa-checkbox__input:focus+[class*=__label]:before {
        outline-offset: .25rem;
        outline: 2px solid #0071bb
    }

    .usa-checkbox__input:checked+[class*=__label]:before {
        background-position: 50%;
        background-size: .75rem
    }

    @media (forced-colors:active) {
        .usa-checkbox__input:checked+[class*=__label]:before {
            background-color: SelectedItem
        }
    }

    .usa-checkbox__label {
        cursor: pointer;
        font-weight: 400;
        position: relative
    }

    .usa-checkbox__label:before {
        content: " ";
        border-radius: 1.5px;
        width: 1.25rem;
        height: 1.25rem;
        margin-top: .075rem;
        margin-left: 2px;
        display: block;
        position: absolute;
        left: 0
    }

    .usa-checkbox__label {
        padding-left: 1.375rem;
        line-height: 1.5;
        display: inline-block
    }

    .usa-checkbox__label:before {
        background-color: #f2f9ff;
        width: .875rem;
        height: .875rem;
        margin-top: .3125rem;
        margin-left: 0;
        margin-right: 0;
        box-shadow: inset 0 0 0 1px #0071bb
    }

    .usa-checkbox__input:disabled+.usa-checkbox__label {
        color: #767676;
        border-color: #767676
    }

    .usa-checkbox__input:disabled+.usa-checkbox__label:before {
        box-shadow: inset 0 0 0 1px #767676
    }

    .usa-checkbox__input:checked:disabled+.usa-checkbox__label:before {
        background-color: #767676;
        background-size: .5rem;
        box-shadow: inset 0 0 0 1px #767676
    }

    .usa-checkbox__input:checked+.usa-checkbox__label:before {
        background-size: .5rem;
        box-shadow: inset 0 0 0 1px #0071bb
    }

    .usa-checkbox__input.usa-focus+.usa-checkbox__label:before,
    .usa-checkbox__input:focus+.usa-checkbox__label:before,
    .usa-checkbox__input:checked.usa-focus+.usa-checkbox__label:before,
    .usa-checkbox__input:checked:focus+.usa-checkbox__label:before {
        outline-offset: 1px;
        outline: 2px solid #0071bb
    }

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-error-message:before {
            background: currentColor;
            -webkit-mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-10), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1.25rem 1.25rem;
            mask-size: 1.25rem 1.25rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    @media (min-width:1024px) {}

    .usa-label {
        max-width: 30rem;
        margin-top: 1.5rem;
        font-family: Public Sans Web, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        line-height: 1.4;
        display: block
    }

    .usa-label {
        font-weight: 700
    }

    @media (forced-colors:active) {}

    @media (forced-colors:active) {}

    @media (forced-colors:active) {}

    @media (forced-colors:active) {}

    @media (forced-colors:active) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (forced-colors:active) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-success-message:before {
            background: currentColor;
            -webkit-mask-image: var(--sf-img-8), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-8), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1.25rem 1.25rem;
            mask-size: 1.25rem 1.25rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    h1 {
        margin-top: 1em
    }

    p,
    ul {
        margin-top: 0
    }

    @media (min-width:640px) {}

    @media (max-width:639px) {}

    @supports ((-webkit-mask:url(https://secure.login.gov/assets/application-bbc69b6c.css)) or (mask:url(https://secure.login.gov/assets/application-bbc69b6c.css))) {
        .usa-alert--info-time:before {
            background: #00a2c4;
            -webkit-mask-image: var(--sf-img-20), linear-gradient(#0000, #0000);
            mask-image: var(--sf-img-20), linear-gradient(#0000, #0000);
            -webkit-mask-position: 50%;
            mask-position: 50%;
            -webkit-mask-size: 1rem 1rem;
            mask-size: 1rem 1rem;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }
    }

    .usa-alert__text>p:last-child {
        margin-bottom: 0
    }

    .usa-button {
        margin-right: 0
    }

    .card {
        background-color: #fff;
        max-width: 620px
    }

    @media (min-width:640px) {
        .card {
            border-radius: 5px;
            margin-bottom: 4rem;
            padding-left: 5rem;
            padding-right: 5rem
        }
    }

    html,
    body {
        height: 100%
    }

    .site {
        flex-direction: column;
        display: flex
    }

    .footer {
        background-color: #ebf3fa;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: .75rem;
        display: flex
    }

    @media (min-width:1024px) {
        .footer {
            background-color: #112e51;
            flex-direction: row
        }
    }

    .footer a {
        padding-top: .5rem;
        padding-bottom: .5rem;
        text-decoration: none
    }

    @media (min-width:1024px) {
        .footer a {
            padding-top: 0;
            padding-bottom: 0
        }

        .footer a,
        .footer a:visited {
            color: #fff
        }

        .footer a:hover {
            color: #cedced
        }
    }

    .footer>.footer__agency-logo:first-child {
        display: none
    }

    @media (min-width:1024px) {
        .footer>.footer__agency-logo:first-child {
            display: inline-flex
        }
    }

    .footer__agency-logo {
        align-items: center;
        display: inline-flex
    }

    .footer__agency-logo.usa-link--external:after {
        margin-top: 0
    }

    .site-wrap {
        flex: 1 0 auto
    }

    @media (max-width:639px) {
        .footer__language-picker.language-picker {
            width: 100%
        }
    }

    @media (min-width:640px) {
        .footer__language-picker {
            margin-top: .5rem;
            margin-bottom: .5rem
        }
    }

    @media (min-width:1024px) {
        .footer__language-picker {
            margin-left: 1rem;
            margin-right: 1rem
        }
    }

    .footer__links {
        border-top: 1px solid #cedced;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        display: flex
    }

    @media (min-width:1024px) {
        .footer__links {
            border-top-style: solid;
            border-top-width: 0;
            width: auto;
            margin-top: 0;
            padding-top: .5rem;
            padding-bottom: .5rem
        }
    }

    .footer__links+.footer__links {
        border-top-style: solid;
        border-top-width: 0
    }

    .footer__links a:not(:last-child) {
        margin-right: .5rem
    }

    @media (min-width:640px) {
        .footer__links a:not(:last-child) {
            margin-right: 1rem
        }
    }

    @media (min-width:1024px) {}

    @media (min-width:1024px) {}

    .language-picker {
        width: auto;
        font-size: 1rem;
        position: relative
    }

    @media (min-width:640px) {}

    .language-picker__label {
        border-color: #0000;
        border-radius: .25rem;
        align-items: center;
        padding: .25rem .5rem;
        display: flex
    }

    @media (max-width:639px) {
        .language-picker__label {
            border-radius: 0;
            justify-content: center
        }
    }

    @media (min-width:640px) {
        .language-picker__label {
            border-color: #0071bb
        }
    }

    @media (min-width:1024px) {

        .language-picker__label,
        .language-picker__label:hover {
            color: #fff
        }
    }

    .language-picker__label.usa-accordion__button[aria-expanded=false] {
        background-image: none
    }

    .language-picker__label.usa-accordion__button[aria-expanded=false]:hover {
        background-color: #0000
    }

    .language-picker__label-text {
        margin-left: .5rem;
        margin-right: .25rem
    }

    .language-picker__expander {
        transition: transform .15s ease-in-out
    }

    @media (prefers-reduced-motion) {
        .language-picker__expander {
            transition: none
        }
    }

    .usa-accordion__button[aria-expanded=false] .language-picker__expander {
        transform: rotate(-180deg)
    }

    @media (min-width:640px) {}

    .page-header--basic {
        background-color: #ebf3fa;
        justify-content: center;
        align-items: center;
        height: 3.5rem;
        display: flex
    }

    @media (min-width:640px) {
        .page-header--basic {
            height: 4.5rem
        }
    }

    .page-heading {
        margin-top: 0;
        margin-bottom: 1rem
    }

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @keyframes spinner-dot-one {
        0% {
            transform: scale(0)
        }

        25% {
            transform: scale(1)
        }

        50% {
            transform: scale(0)
        }
    }

    @keyframes spinner-dot-two {
        0% {
            transform: scale(0)
        }

        20% {
            transform: scale(0)
        }

        45% {
            transform: scale(1)
        }

        70% {
            transform: scale(0)
        }
    }

    @keyframes spinner-dot-three {
        0% {
            transform: scale(0)
        }

        40% {
            transform: scale(0)
        }

        65% {
            transform: scale(1)
        }

        90% {
            transform: scale(0)
        }
    }

    @media (min-width:640px) {}

    @media (max-width:639px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    h1 {
        font-size: 1.5rem;
        line-height: 1.35
    }

    @media (min-width:640px) {
        h1 {
            font-size: 1.75rem
        }
    }

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @media (min-width:640px) {}

    @supports (aspect-ratio:1) {
        .add-aspect-9x16 {
            height: inherit;
            padding: inherit;
            aspect-ratio: .5625;
            max-width: 100%
        }

        .add-aspect-9x16>* {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        img.add-aspect-9x16,
        .add-aspect-9x16>img {
            object-fit: cover
        }
    }

    @supports (aspect-ratio:1) {
        .add-aspect-16x9 {
            height: inherit;
            padding: inherit;
            aspect-ratio: 1.77778;
            max-width: 100%
        }

        .add-aspect-16x9>* {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        img.add-aspect-16x9,
        .add-aspect-16x9>img {
            object-fit: cover
        }
    }

    @supports (aspect-ratio:1) {
        .add-aspect-1x1 {
            height: inherit;
            padding: inherit;
            aspect-ratio: 1;
            max-width: 100%
        }

        .add-aspect-1x1>* {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        img.add-aspect-1x1,
        .add-aspect-1x1>img {
            object-fit: cover
        }
    }

    @supports (aspect-ratio:1) {
        .add-aspect-4x3 {
            height: inherit;
            padding: inherit;
            aspect-ratio: 1.33333;
            max-width: 100%
        }

        .add-aspect-4x3>* {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        img.add-aspect-4x3,
        .add-aspect-4x3>img {
            object-fit: cover
        }
    }

    @supports (aspect-ratio:1) {
        .add-aspect-2x1 {
            height: inherit;
            padding: inherit;
            aspect-ratio: 2;
            max-width: 100%
        }

        .add-aspect-2x1>* {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        img.add-aspect-2x1,
        .add-aspect-2x1>img {
            object-fit: cover
        }

        :where(img[class*=add-aspect-]) {
            width: min-content
        }
    }

    .bg-primary-lighter {
        background-color: #ebf3fa
    }

    .border-top {
        border-top: 1px solid
    }

    .border-right {
        border-right: 1px solid
    }

    .border-primary-light {
        border-color: #cedced
    }

    .text-primary {
        color: #0071bb
    }

    .text-normal {
        font-weight: 400
    }

    .height-5 {
        height: 2.5rem
    }

    .margin-y-1 {
        margin-top: .5rem;
        margin-bottom: .5rem
    }

    .margin-bottom-1 {
        margin-bottom: .5rem
    }

    .margin-top-205 {
        margin-top: 1.25rem
    }

    .margin-top-4 {
        margin-top: 2rem
    }

    .margin-bottom-4 {
        margin-bottom: 2rem
    }

    .margin-right-05 {
        margin-right: .25rem
    }

    .margin-x-105 {
        margin-left: .75rem;
        margin-right: .75rem
    }

    .margin-x-neg-1 {
        margin-left: -.5rem;
        margin-right: -.5rem
    }

    .padding-x-1 {
        padding-left: .5rem;
        padding-right: .5rem
    }

    .padding-top-2 {
        padding-top: 1rem
    }

    .padding-y-4 {
        padding-top: 2rem;
        padding-bottom: 2rem
    }

    .text-center {
        text-align: center
    }

    @media (min-width:640px) {
        .tablet\:padding-y-8 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }
    }

    @media (min-width:640px) {
        .tablet\:bg-primary-lighter {
            background-color: #ebf3fa
        }
    }
</style>
<meta name=csrf-param content=authenticity_token>
<meta name=csrf-token content=9U6N5lGgY7qeRnecAnwrOVxlWsN9iX47HP5qcO32cor5RNkiAQvjyqGwN4MndD3AAUA6VndV3dv57YXiA2Ncxw>
<meta name=referrer content=no-referrer>
<link rel=icon type=image/png href="data:image/png;base64,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" sizes=40x40>
<style>
    .sf-hidden {
        display: none !important
    }
</style>
<link rel=canonical href=https://secure.login.gov />
<style>
    img[src="data:,"],
    source[src="data:,"] {
        display: none !important
    }
</style>
</head>

<body class="site tablet:bg-primary-lighter">

    <a class=usa-skipnav href=#main-content>Skip to main content</a>
    <header>

        <section class="usa-banner usa-banner--centered" aria-label="Official government website">
            <div class=usa-accordion>
                <div class=usa-banner__header>
                    <div class=usa-banner__inner>
                        <img alt="US flag" class=usa-banner__header-flag src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NCA0NCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTAgMGg2NHY0NEgweiIvPjxwYXRoIGZpbGw9IiNkYTNlMWYiIGQ9Ik0wIDBoNjR2NEgwem0wIDQwaDY0djRIMHptMC04aDY0djRIMHptMC04aDY0djRIMHptMC04aDY0djRIMHptMC04aDY0djRIMHoiLz48cGF0aCBmaWxsPSIjMWUzM2IxIiBkPSJNMCAwaDMydjI4SDB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTggMTJoNHY0SDh6bTE2IDBoNHY0aC00em0tOCAwaDR2NGgtNHptNC04aDR2NGgtNHptLTggMGg0djRoLTR6TTQgMjBoNHY0SDR6bTE2IDBoNHY0aC00em0tOCAwaDR2NGgtNHpNNCA0aDR2NEg0eiIvPjwvc3ZnPgo=" width=16 height=11>
                        <div class="grid-col-fill tablet:grid-col-auto">
                            <p class=usa-banner__header-text>
                                An official website of the United States government
                            </p>
                            <p class="usa-banner__header-action sf-hidden" aria-hidden=true>Here’s how you know</p>
                        </div>
                        <button class="usa-accordion__button usa-banner__button" aria-expanded=false aria-controls=gov-banner>
                            <span class=usa-banner__button-text>Here’s how you know</span>
                        </button>
                    </div>
                </div>
                <div class="usa-banner__content usa-accordion__content sf-hidden" id=gov-banner hidden>

                </div>
            </div>
        </section>
        <div class="page-header page-header--basic">
            <img height=15 width=111 alt=Login.gov src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyOTIuMSAzOS40NyI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTcuNDQgNi44OWgxNy4ydjIyLjA2SDcuNDR6Ii8+PHBhdGggZmlsbD0iIzExMmU1MSIgZD0iTTUzLjQ1IDUuMjhoLTYuMTZ2MjcuMzFoMTcuODd2LTUuMzhINTMuNDV6bTMwLjc2LS4xOWMtOC4zNSAwLTE0LjY3IDUuODktMTQuNjcgMTMuODVzNi4zMiAxMy45MyAxNC42NyAxMy45MyAxNC42Ny02IDE0LjY3LTEzLjkzUzkyLjU2IDUuMDkgODQuMjEgNS4wOW0uMDggMjIuMzlhOC40OSA4LjQ5IDAgMCAxLTguNDMtOC41NCA4LjQgOC40IDAgMCAxIDguNDMtOC40NyA4LjI5IDguMjkgMCAwIDEgOC4yNyA4LjQ3IDguMzYgOC4zNiAwIDAgMS04LjI3IDguNTRtMzUuMzYtMTcuMDVhMTEuNDMgMTEuNDMgMCAwIDEgNy40OSAzbDMuNDctNC40MWExNy4yIDE3LjIgMCAwIDAtMTEtNGMtOC41MSAwLTE0LjkgNi0xNC45IDEzLjg1czYuMjkgMTMuOTkgMTQuNTggMTMuOTlhMjAuMiAyMC4yIDAgMCAwIDExLjA4LTMuNTVWMTcuNTdoLTEwLjExdjQuODJIMTI1VjI2YTEyLjQgMTIuNCAwIDAgMS01LjM0IDEuNDggOC41MiA4LjUyIDAgMSAxIDAtMTd6bTE5LjYxLTUuMTVoNi4xN3YyNy4zMWgtNi4xN3ptMzQuNTMgMTcuNTZMMTYwLjUyIDUuMjhoLTUuNjF2MjcuMzFoNS44OVYxNS4wN2wxMy4yMiAxNy41Mmg1LjYyVjUuMjhoLTUuODV6bTE3LjQ3IDIuODVhMy4zOSAzLjM5IDAgMCAwLTMuNDcgMy41NiAzLjQ3IDMuNDcgMCAxIDAgNi45NCAwIDMuMzYgMy4zNiAwIDAgMC0zLjQ3LTMuNTZtMjMuMTUtMTUuMjZhMTEuNDMgMTEuNDMgMCAwIDEgNy40OSAzbDMuNDctNC40MWExNy4yIDE3LjIgMCAwIDAtMTEtNGMtOC41MSAwLTE0LjkgNi0xNC45IDEzLjg1czYuMjggMTMuOTMgMTQuNTUgMTMuOTNhMjAuMiAyMC4yIDAgMCAwIDExLjA4LTMuNTVWMTcuNTdIMjE1djQuODJoNC43N1YyNmExMi40IDEyLjQgMCAwIDEtNS4zNCAxLjQ4IDguNTIgOC41MiAwIDEgMSAwLTE3em0zMi4yMy01LjM0QzIzOC4yOSA1LjA5IDIzMiAxMSAyMzIgMTguOTRzNi4zMiAxMy45MyAxNC42NyAxMy45MyAxNC42Ny02IDE0LjY3LTEzLjkzUzI1NSA1LjA5IDI0Ni42NCA1LjA5bS4wOCAyMi4zOWE4LjQ5IDguNDkgMCAwIDEtOC40My04LjU0IDguNCA4LjQgMCAwIDEgOC40My04LjQ3IDguMjkgOC4yOSAwIDAgMSA4LjI4IDguNDcgOC4zNiA4LjM2IDAgMCAxLTguMjggOC41NG0zOS4wMi0yMi4yLTcuNDkgMjAuNi03LjQ1LTIwLjZoLTYuNjNsMTAuNzMgMjcuMzFoNi4zNkwyOTIuMSA1LjI4eiIvPjxwYXRoIGZpbGw9IiNlMjFkM2UiIGQ9Im0xMS4zOCAyNS4zNCAxLjQ1LTguMjhhNC4zOSA0LjM5IDAgMCAxIDIuNzEtNy44NlYwSDQuMzRBNC4zNCA0LjM0IDAgMCAwIDAgNC4zNHYyMS4yOGEyLjYgMi42IDAgMCAwIC4yNiAxLjE2Yy45NCAxLjkgNC42NSA4IDE1LjI3IDEyLjY5VjI1LjdhMjQuMyAyNC4zIDAgMCAxLTQuMTUtLjM2Ii8+PHBhdGggZmlsbD0iI2I1MWUyMyIgZD0iTTI2LjcyIDBIMTUuNTN2OS4xOUE0LjM5IDQuMzkgMCAwIDEgMTguMjggMTdsMS40NSA4LjMyYTI0LjMgMjQuMyAwIDAgMS00LjIuMzZ2MTMuNzlDMjYuMTQgMzQuOCAyOS44NiAyOC42OCAzMC44IDI2Ljc5YTIuNiAyLjYgMCAwIDAgLjI2LTEuMTZWNC4zNEE0LjM0IDQuMzQgMCAwIDAgMjYuNzIgMCIvPjwvc3ZnPg==">
            <div class="margin-x-105 height-5 border-right border-primary-light"></div>
            <img height=40 alt=sam.gov src=data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI0LjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA0MTUgODUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQxNSA4NTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiNDQzIwMkE7fQoJLnN0MXtmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiMxMTJFNEY7fQoJLnN0MntmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDtmaWxsOiNGRkZGRkY7fQoJLnN0M3tmaWxsOiMxMTJFNEY7fQoJLnN0NHtmaWxsOiMwRjJFNEU7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzEuOSw1Mi45YzEuOS0wLjUsMy45LTEsNi4xLTEuNFYxLjdjLTUuNSwxLTEwLjcsMi44LTE1LjcsNS4ydjUwLjZoMC4xQzI0LjEsNTUuOCwyNy4zLDU0LjIsMzEuOSw1Mi45eiIvPgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNOTAuOSw2My43Yy0wLjItNS4yLTE1LjUtOS41LTM0LjUtOS41cy0zNC4zLDQuMi0zNC41LDkuNWwwLDB2MTAuOGMxMC45LDEuNiwyMS45LDIuMywzMi45LDIuMwoJYzEyLDAuMSwyNC4xLTAuNSwzNi0xLjlMOTAuOSw2My43TDkwLjksNjMuN3oiLz4KPHBhdGggY2xhc3M9InN0MiIgZD0iTTI3LjUsNjQuNmgwLjFsMi41LTAuMWgxLjFjMCwwLDAuMSwwLDAuMS0wLjFjMC40LTAuOSwwLjctMS44LDEtMi44YzAuMS0wLjIsMC4yLTAuNCwwLjItMC42YzAsMCwwLTAuMSwwLTAuMQoJYzAuMSwwLjMsMC4yLDAuNiwwLjMsMC45bDAuNiwxLjJsMC41LDEuM2MwLDAuMSwwLjEsMC4xLDAuMiwwLjFjMS4yLDAsMi4zLDAuMSwzLjUsMC4xaDAuMmwtMC4yLDAuMmwtMi42LDIKCWMtMC4yLDAuMi0wLjIsMC4yLTAuMSwwLjRjMC4yLDAuOCwwLjUsMS43LDAuNywyLjVsMC4yLDAuOGMwLDAsMCwwLjEsMCwwLjFsLTAuNy0wLjRsLTEuNC0xYy0wLjMtMC4yLTAuNi0wLjQtMC45LTAuNgoJYy0wLjEtMC4xLTAuMi0wLjEtMC4yLDBsLTMsMmwtMC4xLDAuMWMwLjEtMC4yLDAuMS0wLjQsMC4yLTAuNmwwLjUtMS44YzAuMS0wLjQsMC4yLTAuOCwwLjMtMS4xYzAtMC4xLDAtMC4xLDAtMC4ybC0yLTEuNQoJTDI3LjUsNjQuNnoiLz4KPHBhdGggY2xhc3M9InN0MiIgZD0iTTUwLDYzLjloMC4ybDMuMy0wLjFsMS41LTAuMWMwLjEsMCwwLjEsMCwwLjEtMC4xYzAuNS0xLjIsMC45LTIuNSwxLjQtMy43bDAuMy0wLjhsMC4xLTAuMgoJYzAuMiwwLjQsMC4zLDAuOCwwLjQsMS4yYzAuMiwwLjYsMC40LDEuMiwwLjYsMS43czAuNCwxLjIsMC43LDEuOGMwLDAuMSwwLjEsMC4yLDAuMiwwLjJsNC43LDAuMmgwLjJsLTAuMywwLjJsLTMuNSwyLjcKCWMtMC4zLDAuMi0wLjMsMC4yLTAuMiwwLjVjMC4zLDEuMSwwLjYsMi4yLDEsMy4zYzAuMSwwLjQsMC4yLDAuNywwLjMsMS4xYzAsMCwwLDAuMSwwLDAuMWwtMC45LTAuNmwtMS45LTEuM0w1Nyw2OS4yCgljLTAuMS0wLjEtMC4yLTAuMS0wLjMsMGwtNCwyLjdMNTIuNiw3MmMwLjEtMC4zLDAuMi0wLjYsMC4yLTAuOGwwLjctMi41bDAuNC0xLjVjMC0wLjEsMC0wLjItMC4xLTAuMmwtMi44LTIuMkw1MCw2My45eiIvPgo8cGF0aCBjbGFzcz0ic3QyIiBkPSJNNzUuNSw2NC42aDAuMWwyLjUtMC4xaDEuMWMwLDAsMC4xLDAsMC4xLTAuMWMwLjMtMC45LDAuNy0xLjgsMS0yLjhjMC4xLTAuMiwwLjItMC40LDAuMi0wLjZsMC4xLTAuMQoJYzAuMSwwLjMsMC4yLDAuNiwwLjMsMC45czAuMywwLjgsMC41LDEuM3MwLjMsMC45LDAuNSwxLjNjMCwwLjEsMC4xLDAuMSwwLjIsMC4xYzEuMiwwLDIuMywwLjEsMy41LDAuMWgwLjJsLTAuMiwwLjJsLTIuNiwyCgljLTAuMiwwLjItMC4yLDAuMi0wLjEsMC40YzAuMiwwLjgsMC41LDEuNywwLjcsMi41bDAuMiwwLjhjMCwwLDAsMC4xLDAsMC4xbC0wLjctMC40bC0xLjQtMWwtMC45LTAuNmMtMC4xLTAuMS0wLjItMC4xLTAuMiwwbC0zLDIKCWwtMC4xLDAuMWMwLTAuMiwwLjEtMC40LDAuMi0wLjZjMC4yLTAuNiwwLjMtMS4yLDAuNS0xLjhjMC4xLTAuNCwwLjItMC44LDAuMy0xLjFjMC0wLjEsMC0wLjEsMC0wLjJsLTItMS42TDc1LjUsNjQuNnoiLz4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTU2LjgsNTAuMWMyLjQsMCw0LjcsMC4xLDcsMC4yVjAuMkM2MS42LDAuMSw1OS40LDAsNTcuMSwwYy0zLjIsMC02LjIsMC4xLTkuMSwwLjR2NTAKCUM1MC44LDUwLjIsNTMuOCw1MC4xLDU2LjgsNTAuMUw1Ni44LDUwLjF6Ii8+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik04MS43LDUzLjNjNC4yLDEuMiw3LjMsMi42LDkuMSw0LjNIOTFWNy43Yy01LTIuNS0xMC4zLTQuNC0xNS43LTUuNHY0OS43Qzc3LjYsNTIuMyw3OS43LDUyLjgsODEuNyw1My4zeiIvPgo8cGF0aCBjbGFzcz0ic3QxIiBkPSJNMCw3NC4zbDAuMSw1LjljMS42LDAuMywzLjQsMC42LDUuMywxYzE2LjMsMi42LDMyLjgsMy45LDQ5LjQsMy44YzMwLjEsMCw0Ny45LTIuMSw1OC40LTQuMXYtNi42bDAsMAoJYzAtMC4zLTAuMS0wLjUtMC4yLTAuOGMtMC41LTEuNC0yLjEtMi4xLTMuNS0xLjZjMCwwLDAsMCwwLDBsLTAuOSwwLjRjLTQuMiwxLjctMTcsNy01My41LDdjLTEyLjcsMC4xLTI1LjMtMS4yLTM3LjctMy44CgljLTQuNi0wLjktOS4yLTIuMi0xMy42LTMuOGMtMS40LTAuNi0yLjksMC4xLTMuNSwxLjVjMCwwLDAsMCwwLDBDMC4xLDczLjUsMCw3My43LDAsNzRsMCwwVjc0LjNMMCw3NC4zeiIvPgo8cGF0aCBjbGFzcz0ic3QzIiBkPSJNMjQ3LjUsNDUuM2MtMC40LDEuMy0wLjgsMi43LTEuMyw0Yy0yLjMsNS40LTQuNiwxMC44LTYuOSwxNi4yYy0wLjUsMS4zLTEuMSwyLjUtMS43LDMuOAoJYy0wLjIsMC42LTAuNywwLjktMS4zLDAuOWMtMS4zLDAtMi42LDAuMS0zLjksMGMtMC41LTAuMS0xLTAuNC0xLjMtMC44Yy0yLjUtNS41LTUtMTEtNy40LTE2LjVjLTAuOS0yLTEuNC00LjItMi4xLTYuMwoJYy0wLjEtMC4zLTAuMi0wLjctMC40LTFoLTAuM2MwLDAuNCwwLDAuOCwwLDEuMmMwLjksOS44LDAuOSwxOS43LDAuOSwyOS41YzAsMS45LDAsMS45LTIsMS45Yy0yLjQsMC00LjgsMC03LjEsMAoJYy0xLDAtMS40LTAuMy0xLjQtMS40YzAtMTguMywwLTM2LjYsMC01NC44YzAtMSwwLjMtMS41LDEuNC0xLjRjMi4zLDAsNC41LDAsNi44LDBjMC43LTAuMSwxLjMsMC4zLDEuNSwxYzQsOS41LDgsMTkuMSwxMiwyOC42CgljMC42LDEuMywwLjksMi44LDEuNCw0LjRjMC4xLTAuNSwwLjItMC43LDAuMy0xYzEuOC00LjQsMy40LTguOSw1LjItMTMuM2MyLjYtNi4yLDUuMi0xMi40LDcuOC0xOC42YzAuMi0wLjcsMC44LTEuMSwxLjUtMS4xCgljMi4zLDAuMSw0LjUsMC4xLDYuOCwwYzEuMSwwLDEuNCwwLjQsMS40LDEuNGMwLDE4LjIsMCwzNi41LDAsNTQuN2MwLDEuNC0wLjEsMS41LTEuNSwxLjVjLTIuNSwwLTUuMSwwLTcuNiwwYy0xLDAtMS40LTAuMy0xLjQtMS4zCgljMC4zLTkuMSwwLjUtMTguMiwwLjgtMjcuM2MwLTEuMywwLjItMi43LDAuMy00TDI0Ny41LDQ1LjNMMjQ3LjUsNDUuM3oiLz4KPHBhdGggY2xhc3M9InN0MyIgZD0iTTIwMy42LDc2LjJjLTMuMy0xMS02LjctMjEuOS0xMC4xLTMyLjljLTIuMi03LjMtNC41LTE0LjUtNi42LTIxLjhjLTAuMS0wLjctMC44LTEuMi0xLjUtMS4xYzAsMCwwLDAsMCwwCgljLTEuOSwwLTMuNywwLjEtNS42LDBjLTAuOC0wLjEtMS42LDAuNC0xLjcsMS4yYzAsMCwwLDAsMCwwLjFjLTMuMiwxMC43LTYuNSwyMS40LTkuOCwzMi4yYy0yLjMsNy42LTQuNiwxNS4yLTYuOSwyMi44CgljLTAuNCwxLjItMC4xLDEuNCwxLjEsMS40YzIuOSwwLDUuNywwLDguNiwwYzAuNywwLjEsMS4zLTAuNCwxLjQtMWMwLjgtMi44LDEuNi01LjcsMi40LTguNWMwLjEtMC44LDAuOC0xLjMsMS41LTEuMmMwLDAsMCwwLDAuMSwwCgljNC4xLDAsOC4xLDAsMTIuMiwwYzAuOC0wLjEsMS41LDAuNCwxLjYsMS4yYzAsMCwwLDAsMCwwYzAuOCwyLjgsMS42LDUuNywyLjQsOC41YzAuMSwwLjcsMC44LDEuMSwxLjUsMWMxLjQtMC4xLDIuOSwwLDQuMywwCglzMi42LDAsNCwwQzIwMy45LDc4LDIwNC4xLDc3LjgsMjAzLjYsNzYuMkwyMDMuNiw3Ni4yeiBNMTg2LjMsNTcuNWMtMC4yLDAuMS0wLjQsMC4xLTAuNiwwLjFjLTIuMSwwLTQuMiwwLTYuNCwwCgljLTAuMSwwLTAuMywwLTAuNCwwYy0xLjIsMC0wLjYtMS4zLTAuNi0xLjNsNC4yLTE3LjhjMCwwLDIuOSwxMi4zLDQsMTYuN2MwLjEsMC4zLDAuMiwwLjcsMC4zLDFjMCwwLjEsMC4xLDAuMywwLjEsMC40CgljMC4xLDAuMiwwLjEsMC40LDAsMC41bDAsMGwwLDBjLTAuMSwwLjEtMC4yLDAuMi0wLjQsMC4zTDE4Ni4zLDU3LjV6Ii8+CjxwYXRoIGNsYXNzPSJzdDMiIGQ9Ik0xNDYuOSw0Ny43Yy0xLjctMS4xLTMuNC0yLTUuMS0yLjljLTIuNi0xLjMtNS40LTIuNC04LTMuOGMtMi0xLTMuNi0yLjUtMy44LTVjLTAuMi0yLjQsMS00LjcsMy4xLTUuOQoJYzMuNS0yLjIsOC0xLjIsMTAuMywyLjJjMC40LDAuNiwwLjgsMS4zLDEuMSwyYzAuMywwLjgsMC44LDAuOSwxLjUsMC41YzIuNS0xLjMsNS0yLjYsNy41LTMuOGMwLjUtMC4yLDAuOC0wLjcsMC42LTEuMwoJYzAtMC4xLTAuMS0wLjItMC4xLTAuMmMtMS0yLjItMi40LTQuMi00LjEtNS44Yy0wLjMtMC4zLTAuNi0wLjYtMS0wLjhjLTAuMy0wLjItMC42LTAuNC0wLjktMC42bDAsMGMtMS0wLjctMi4xLTEuMi0zLjItMS42bDAsMAoJYy0wLjEsMC0wLjItMC4xLTAuMy0wLjFsLTAuNC0wLjFIMTQ0bC0wLjQtMC4xbC0wLjIsMGwtMC40LTAuMWgtMC4ybC0wLjQtMC4xbC0wLjIsMGwtMC4zLTAuMWwtMC4zLDBsLTAuMywwSDE0MWgtMC4ybC0wLjYtMC4xbDAsMAoJYy0xLjUtMC4xLTMuMS0wLjItNC42LTAuMWwwLDBjLTAuNiwwLTEuMiwwLjEtMS44LDAuMWwwLDBoLTAuM2wwLDBsLTAuMywwbDAsMGgtMC4zbDAsMGMtMC40LDAuMS0wLjgsMC4yLTEuMiwwLjNoLTAuMWwtMC4yLDBoLTAuMQoJbC0wLjIsMEgxMzFoLTAuMmgtMC4xaC0wLjJsLTEsMC4zbDAsMGMtMC41LDAuMi0wLjksMC40LTEuNCwwLjZsMCwwbC0wLjIsMC4xYy04LjIsNC0xMC4yLDE0LTYuOSwyMS41YzEuNiwzLjYsNC41LDYsNy45LDcuOQoJczcuMSwzLjYsMTAuNyw1LjVjMC45LDAuNiwxLjcsMS4yLDIuNSwyYzIuMSwxLjcsMi45LDQuNiwxLjksNy4xYy0wLjEsMC4zLTAuMiwwLjUtMC40LDAuOGwwLDBjLTAuNiwxLjItMS42LDIuMi0yLjksMi44bC0wLjUsMC4yCglsMCwwYy0yLjUsMC45LTUuMSwxLTcuNiwwLjNsMCwwYy0wLjctMC4yLTEuNC0wLjUtMS45LTAuOWMtMC4zLTAuMi0wLjYtMC41LTAuOC0wLjhsMCwwYy0wLjMtMC4zLTAuNi0wLjctMC44LTEuMWwwLDAKCWMtMC41LTAuNy0wLjktMS40LTEuNC0yLjJzLTAuNi0xLTEuNC0wLjZjLTIuNiwxLjMtNS4yLDIuNi03LjgsNGMtMC41LDAuMS0wLjcsMC42LTAuNiwxLjFjMCwwLjEsMC4xLDAuMiwwLjEsMC4yCgljMi4xLDQuMyw1LjEsNy44LDkuOSw5LjNjNCwxLjIsOC4yLDEuMSwxMi4zLDAuN2MyLjItMC4zLDQuMy0wLjksNi4yLTEuOWM1LjEtMi41LDcuNy02LjgsOC4yLTEyLjRDMTU1LjQsNTcuNCwxNTMsNTEuNywxNDYuOSw0Ny43CglMMTQ2LjksNDcuN3oiLz4KPHBhdGggY2xhc3M9InN0MCIgZD0iTTI2Miw3MS41aDAuM2w0LjgtMC4ybDIuMS0wLjFjMC4xLDAsMC4yLTAuMSwwLjItMC4xbDItNS40YzAuMS0wLjQsMC4zLTAuOCwwLjQtMS4yYzAtMC4xLDAuMS0wLjIsMC4xLTAuMgoJYzAuMiwwLjYsMC40LDEuMSwwLjYsMS43YzAuMywwLjgsMC42LDEuNywwLjksMi41bDAuOSwyLjVjMCwwLjIsMC4yLDAuMywwLjMsMC4ybDYuOCwwLjJoMC40bC0wLjQsMC4zbC01LDQKCWMtMC40LDAuMy0wLjQsMC4zLTAuMiwwLjhjMC41LDEuNiwwLjksMy4yLDEuNCw0LjhjMC4xLDAuNSwwLjMsMS4xLDAuNSwxLjZjMCwwLjEsMCwwLjEsMCwwLjJsLTEuMy0wLjlsLTIuOC0xLjkKCWMtMC42LTAuNC0xLjItMC44LTEuOC0xLjJjLTAuMS0wLjEtMC4zLTAuMS0wLjQsMEwyNjYsODNsLTAuMiwwLjFjMC4xLTAuNCwwLjItMC44LDAuMy0xLjJsMS0zLjZjMC4yLTAuNywwLjQtMS40LDAuNi0yLjIKCWMwLjEtMC4xLDAtMC4yLTAuMS0wLjNjLTEuMy0xLTIuNy0yLjEtNC0zLjFMMjYyLDcxLjV6Ii8+CjxwYXRoIGNsYXNzPSJzdDMiIGQ9Ik0zMDQuNCwzMy41YzAuOCwwLjEsMS41LDAuMSwyLjMsMC4zYzQuNywwLjgsOC42LDMuOCwxMC43LDhjMSwyLDEuOCw0LjEsMi4yLDYuMmMwLDAuMSwwLDAuMSwwLDAuMmgtNC4yCgljLTAuMS0wLjUtMC4zLTEuMS0wLjQtMS43Yy0wLjUtMS44LTEuMy0zLjQtMi4zLTQuOWMtMS41LTIuMS0zLjctMy41LTYuMi00Yy0yLjYtMC42LTUuNC0wLjQtNy45LDAuNmMtMiwwLjctMy43LDIuMS00LjksMy44CgljLTEuNiwyLjQtMi43LDUuMi0zLjEsOC4xYy0wLjYsMy43LTAuNyw3LjQtMC4zLDExYzAuMiwyLjcsMC44LDUuMywxLjksNy44YzEsMi40LDIuNyw0LjUsNSw1LjhjMS4yLDAuNywyLjYsMS4yLDQsMS40CgljMi4zLDAuNCw0LjYsMC4yLDYuOC0wLjVjMS45LTAuNywzLjYtMS45LDQuOC0zLjVjMS42LTIuMiwyLjYtNC43LDMtNy40YzAuMy0xLjgsMC40LTMuNiwwLjYtNS41YzAtMC4yLDAtMC40LDAtMC42aC0xMi44VjU1aDE3LjEKCWMwLDAuMywwLDAuNiwwLjEsMC45YzAuMSwzLjQtMC4yLDYuNy0xLDEwYy0wLjcsMy4xLTIsNi4xLTMuOSw4LjdjLTIuMywzLTUuOCw1LTkuNiw1LjRjLTAuNywwLjEtMS41LDAuMi0yLjIsMC4yaC0xCgljLTAuOC0wLjEtMS41LTAuMS0yLjMtMC4yYy00LjEtMC41LTcuOC0yLjctMTAuMy02Yy0xLjctMi40LTMtNS4xLTMuNy04Yy0wLjYtMi41LTAuOS01LTEtNy41YzAtMC41LDAtMC45LTAuMS0xLjN2LTAuNwoJYzAtMC4yLDAtMC4zLDAtMC41YzAuMS0xLjcsMC4yLTMuNCwwLjQtNS4xYzAuNC0zLjYsMS42LTcuMSwzLjYtMTAuMmMyLjQtMy44LDYuMy02LjQsMTAuOC03YzAuNi0wLjEsMS4xLTAuMiwxLjctMC4yTDMwNC40LDMzLjV6IgoJLz4KPHBhdGggY2xhc3M9InN0MyIgZD0iTTM0My43LDgwLjJjLTAuOC0wLjEtMS41LTAuMS0yLjMtMC4yYy0zLjktMC41LTcuNC0yLjQtOS45LTUuNWMtMS44LTIuMy0zLjEtNS0zLjktNy44Yy0wLjYtMi4yLTEtNC41LTEuMS02LjgKCWMtMC4yLTIuNi0wLjEtNS4zLDAuMi03LjljMC4zLTMuNCwxLjMtNi43LDIuOC05LjdjMS44LTMuOSw1LjItNi44LDkuMy04YzEuMi0wLjMsMi41LTAuNSwzLjgtMC43bDAuNC0wLjFoMi41CgljMC43LDAuMSwxLjUsMC4yLDIuMiwwLjNjNC40LDAuNyw4LjIsMy40LDEwLjUsNy4yYzEuNSwyLjYsMi42LDUuNCwzLjEsOC4zYzAuNSwyLjgsMC44LDUuNiwwLjcsOC41YzAsMi43LTAuNCw1LjQtMSw4CgljLTAuNywzLjItMi4xLDYuMi00LjIsOC44Yy0yLjIsMi43LTUuMyw0LjYtOC43LDUuMmMtMSwwLjItMiwwLjItMywwLjRoLTAuM0wzNDMuNyw4MC4yeiBNMzU3LjcsNTYuN2MwLTIuMi0wLjItNC41LTAuNS02LjcKCWMtMC40LTIuOC0xLjQtNS41LTMtNy44Yy0xLjUtMi4zLTMuOC0zLjktNi41LTQuNWMtMi42LTAuNi01LjQtMC41LTgsMC4zYy0yLjIsMC43LTQsMi4xLTUuMyw0Yy0xLjgsMi43LTIuOSw1LjktMy4yLDkuMQoJYy0wLjMsMi41LTAuNCw1LTAuMyw3LjVjMC4xLDIuMSwwLjMsNC4xLDAuNyw2LjFjMC40LDIuNCwxLjQsNC42LDIuNyw2LjZjMS42LDIuNCw0LjEsNC4xLDcsNC43YzIuNCwwLjUsNC45LDAuNCw3LjItMC4zCgljMS44LTAuNSwzLjQtMS41LDQuNy0yLjljMS44LTIsMy00LjQsMy42LTdDMzU3LjMsNjIuOSwzNTcuNyw1OS44LDM1Ny43LDU2LjdMMzU3LjcsNTYuN3oiLz4KPHBhdGggY2xhc3M9InN0MyIgZD0iTTQwMCwzNC41Yy0wLjQsMS0wLjcsMi0xLDIuOWMtNC43LDEzLjgtOS40LDI3LjYtMTQuMSw0MS40YzAsMC4yLTAuMywwLjQtMC41LDAuNGMtMS4yLDAtMi4zLDAtMy41LDAKCWMtMC4zLDAtMC41LTAuMS0wLjUtMC40bC0xMC0yOS4yYy0xLjctNC45LTMuNC05LjktNS4xLTE0LjhjMC0wLjEtMC4xLTAuMi0wLjEtMC4zaDAuM2MxLjMsMCwyLjUsMCwzLjgsMGMwLjIsMCwwLjQsMC4xLDAuNSwwLjMKCWM0LjIsMTIuNSw4LjQsMjUuMSwxMi42LDM3LjZjMCwwLjIsMC4xLDAuMywwLjIsMC40YzAtMC4xLDAuMS0wLjIsMC4xLTAuNGM0LjItMTIuNSw4LjQtMjUsMTIuNS0zNy41YzAuMS0wLjQsMC4zLTAuNSwwLjctMC41CglDMzk3LjMsMzQuNSwzOTguNiwzNC41LDQwMCwzNC41TDQwMCwzNC41eiIvPgo8cGF0aCBjbGFzcz0ic3Q0IiBkPSJNNDA3LDQxLjZoMC44YzAuOSwwLDEuNi0wLjMsMS42LTFzLTAuNS0xLTEuNS0xYy0wLjMsMC0wLjYsMC0wLjksMC4xVjQxLjZMNDA3LDQxLjZ6IE00MDcsNDUuNmgtMS42di03CgljMC45LTAuMiwxLjctMC4yLDIuNi0wLjJjMC44LTAuMSwxLjYsMC4xLDIuNCwwLjVjMC40LDAuNCwwLjcsMC45LDAuNywxLjVjLTAuMSwwLjgtMC43LDEuNC0xLjUsMS42djAuMWMwLjcsMC4zLDEuMiwwLjksMS4yLDEuNwoJYzAuMSwwLjYsMC4yLDEuMiwwLjUsMS43aC0xLjdjLTAuMy0wLjUtMC40LTEuMS0wLjUtMS43Yy0wLjEtMC44LTAuNS0xLjEtMS40LTEuMWgtMC44TDQwNyw0NS42TDQwNyw0NS42eiBNNDAyLjgsNDIKCWMtMC4xLDIuOSwyLjIsNS40LDUuMSw1LjZjMC4xLDAsMC4xLDAsMC4yLDBjMi45LTAuMSw1LjItMi41LDUuMS01LjRjMCwwLDAtMC4xLDAtMC4xYzAuMS0yLjktMi4xLTUuNC01LTUuNXMtNS40LDIuMS01LjUsNQoJQzQwMi43LDQxLjcsNDAyLjcsNDEuOCw0MDIuOCw0Mkw0MDIuOCw0MnogTTQxNS4xLDQyYzAsMy45LTMuMSw3LTcsN3MtNy0zLjEtNy03czMuMS03LDctN2MzLjgtMC4xLDYuOSwzLDcsNi44CglDNDE1LjEsNDEuOCw0MTUuMSw0MS45LDQxNS4xLDQyeiIvPgo8L3N2Zz4K>
        </div>
    </header>
    <main class="site-wrap bg-primary-lighter" id=main-content>
        <div class="grid-container padding-y-4 tablet:padding-y-8 card">



            <div class=text-center>
                <img width=280 height=91 alt role=img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNjAiIGhlaWdodD0iMTE3IiBmaWxsPSJub25lIiB2aWV3Qm94PSIwIDAgMzYwIDExNyI+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48bWFzayBpZD0iYiIgd2lkdGg9IjkxIiBoZWlnaHQ9IjkxIiB4PSI0IiB5PSIxNSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTQ5LjUgMTA1YzI0Ljg1MyAwIDQ1LTIwLjE0NyA0NS00NXMtMjAuMTQ3LTQ1LTQ1LTQ1LTQ1IDIwLjE0Ny00NSA0NSAyMC4xNDcgNDUgNDUgNDUiLz48L21hc2s+PGcgbWFzaz0idXJsKCNiKSI+PHBhdGggZmlsbD0iI0U2RTZFNiIgZD0iTTQ5LjUgMTA1YzI0Ljg1MyAwIDQ1LTIwLjE0NyA0NS00NXMtMjAuMTQ3LTQ1LTQ1LTQ1LTQ1IDIwLjE0Ny00NSA0NSAyMC4xNDcgNDUgNDUgNDUiLz48cGF0aCBmaWxsPSIjRjJGOUZGIiBkPSJNOTQuNSAxNWgtOTB2OTBoOTB6Ii8+PC9nPjxtYXNrIGlkPSJjIiB3aWR0aD0iOTkiIGhlaWdodD0iMTA1IiB4PSIwIiB5PSIwIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNC41IDYwYzAgMjQuODUzIDIwLjE0NyA0NSA0NSA0NXM0NS0yMC4xNDcgNDUtNDVIOTlWMEgwdjYweiIvPjwvbWFzaz48ZyBtYXNrPSJ1cmwoI2MpIj48bWFzayBpZD0iZCIgd2lkdGg9Ijc1IiBoZWlnaHQ9IjkyIiB4PSIxMiIgeT0iMTMiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik01OC41IDY3LjczdjYuODk1SDYwYzE0LjkxMiAwIDI3IDEyLjA4OCAyNyAyN1YxMDVIMTJ2LTMuMzc1YzAtMTQuOTEyIDEyLjA4OC0yNyAyNy0yN2gxLjV2LTYuODk2Yy02LjQ2NC0zLjA3LTExLjExLTkuMzQ2LTExLjg4Ni0xNi43NzNBNC41IDQuNSAwIDAgMSAyNC43NSA0Ni41di01LjI1YzAtMi4yMyAxLjYyMi00LjA4IDMuNzUtNC40MzhWMzQuNWMwLTExLjU5OCA5LjQwMi0yMSAyMS0yMXMyMSA5LjQwMiAyMSAyMXYyLjMxMmE0LjUgNC41IDAgMCAxIDMuNzUgNC40Mzh2NS4yNWMwIDIuMjctMS42OCA0LjE0Ny0zLjg2NCA0LjQ1Ni0uNzc2IDcuNDI3LTUuNDIyIDEzLjcwMi0xMS44ODYgMTYuNzczeiIvPjwvbWFzaz48ZyBtYXNrPSJ1cmwoI2QpIj48cGF0aCBmaWxsPSIjRDBDNkFDIiBkPSJNNTguNSA2Ny43M3Y2Ljg5NUg2MGMxNC45MTIgMCAyNyAxMi4wODggMjcgMjdWMTA1SDEydi0zLjM3NWMwLTE0LjkxMiAxMi4wODgtMjcgMjctMjdoMS41di02Ljg5NmMtNi40NjQtMy4wNy0xMS4xMS05LjM0Ni0xMS44ODYtMTYuNzczQTQuNSA0LjUgMCAwIDEgMjQuNzUgNDYuNXYtNS4yNWMwLTIuMjMgMS42MjItNC4wOCAzLjc1LTQuNDM4VjM0LjVjMC0xMS41OTggOS40MDItMjEgMjEtMjFzMjEgOS40MDIgMjEgMjF2Mi4zMTJhNC41IDQuNSAwIDAgMSAzLjc1IDQuNDM4djUuMjVjMCAyLjI3LTEuNjggNC4xNDctMy44NjQgNC40NTYtLjc3NiA3LjQyNy01LjQyMiAxMy43MDItMTEuODg2IDE2Ljc3M3oiLz48cGF0aCBmaWxsPSIjRDA4QjVCIiBkPSJNOTkgMTMuNUgwVjEwNWg5OXoiLz48cGF0aCBmaWxsPSIjMDAwIiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03MC41IDQzLjEyNXY4LjYyNWMwIDExLjU5OC05LjQwMiAyMS0yMSAyMXMtMjEtOS40MDItMjEtMjF2LTguNjI1IDUuNjI1YzAgMTEuNTk4IDkuNDAyIDIxIDIxIDIxczIxLTkuNDAyIDIxLTIxeiIgY2xpcC1ydWxlPSJldmVub2RkIi8+PC9nPjxtYXNrIGlkPSJlIiB3aWR0aD0iNzUiIGhlaWdodD0iMzIiIHg9IjEyIiB5PSI3NCIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNjIuMjM1IDc0LjczNkM3Ni4xMDEgNzUuODcyIDg3IDg3LjQ4NiA4NyAxMDEuNjQ0VjEwNUgxMnYtMy4zNTZjMC0xNC4yODcgMTEuMDk3LTI1Ljk4MiAyNS4xNDItMjYuOTM3cS0uMDE3LjIxLS4wMTcuNDIzYzAgNC40NDkgNS42MjQgOC4wNTUgMTIuNTYzIDguMDU1IDYuOTM4IDAgMTIuNTYyLTMuNjA2IDEyLjU2Mi04LjA1NXEwLS4xOTgtLjAxNS0uMzk0IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48L21hc2s+PGcgbWFzaz0idXJsKCNlKSI+PHBhdGggZmlsbD0iI0U2RTZFNiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNjIuMjM1IDc0LjczNkM3Ni4xMDEgNzUuODcyIDg3IDg3LjQ4NiA4NyAxMDEuNjQ0VjEwNUgxMnYtMy4zNTZjMC0xNC4yODcgMTEuMDk3LTI1Ljk4MiAyNS4xNDItMjYuOTM3cS0uMDE3LjIxLS4wMTcuNDIzYzAgNC40NDkgNS42MjQgOC4wNTUgMTIuNTYzIDguMDU1IDYuOTM4IDAgMTIuNTYyLTMuNjA2IDEyLjU2Mi04LjA1NXEwLS4xOTgtLjAxNS0uMzk0IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMjYyRTMzIiBkPSJNOTkgNjMuNzVIMFYxMDVoOTl6Ii8+PHBhdGggZmlsbD0iIzAwMCIgZmlsbC1vcGFjaXR5PSIuMTYiIGQ9Ik00OS42ODcgODUuNzg2YzguMjEgMCAxNC44NjQtNC41MiAxNC44NjQtMTAuMDkzUzU3Ljg5NiA2NS42IDQ5LjY4NyA2NS42cy0xNC44NjMgNC41MTktMTQuODYzIDEwLjA5MyA2LjY1NSAxMC4wOTMgMTQuODYzIDEwLjA5MyIgb3BhY2l0eT0iLjYiLz48L2c+PHBhdGggZmlsbD0iIzNBNEM1QSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMzcuNzk0IDc0LjY3QzIzLjQ0MiA3NS4zMDMgMTIgODcuMTM4IDEyIDEwMS42NDVWMTA1aDI2LjAxQzM2LjczNiAxMDAuNDcgMzYgOTUuMTQgMzYgODkuNDM3YzAtNS4zNzIuNjUzLTEwLjQxMyAxLjc5NC0xNC43NjZ6TTYxLjM2NCAxMDVIODd2LTMuMzU2YzAtMTQuMzc5LTExLjI0LTI2LjEzMy0yNS40MTQtMjYuOTU0IDEuMTM4IDQuMzUgMS43ODkgOS4zODMgMS43ODkgMTQuNzQ4IDAgNS43MDMtLjczNSAxMS4wMzItMi4wMSAxNS41NjJ6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjRTZFNkU2IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Im02Ny44NzUgOTYgMy41ODMtMi42ODhhMS41IDEuNSAwIDAgMSAxLjgyMS4wMTZsMi40NzEgMS45MjJ6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMkY0MzUxIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zNy44NzUgNzQuMjVRMzUuNjI1IDg1LjEyNSAzOS43NSAxMDVoLTZMMjguNSA5MS41bDIuMjUtMy4zNzUtMi4yNS0yLjI1IDcuMTI1LTExLjI1YTggOCAwIDAgMSAyLjI1LS4zNzVtMjMuMjUgMHEyLjI1IDEwLjg3NS0xLjg3NSAzMC43NWg2bDUuMjUtMTMuNS0yLjI1LTMuMzc1IDIuMjUtMi4yNS03LjEyNS0xMS4yNWE4IDggMCAwIDAtMi4yNS0uMzc1IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48bWFzayBpZD0iZiIgZmlsbD0iI2ZmZiI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMTAzYzIzLjc0OCAwIDQzLTE5LjI1MiA0My00M1M3My43NDggMTcgNTAgMTcgNyAzNi4yNTIgNyA2MHMxOS4yNTIgNDMgNDMgNDNtMCAyYzI0Ljg1MyAwIDQ1LTIwLjE0NyA0NS00NVM3NC44NTMgMTUgNTAgMTUgNSAzNS4xNDcgNSA2MHMyMC4xNDcgNDUgNDUgNDUiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjwvbWFzaz48cGF0aCBmaWxsPSIjMDA3MUJCIiBkPSJNOTEgNjBjMCAyMi42NDQtMTguMzU2IDQxLTQxIDQxdjRjMjQuODUzIDAgNDUtMjAuMTQ3IDQ1LTQ1ek01MCAxOWMyMi42NDQgMCA0MSAxOC4zNTYgNDEgNDFoNGMwLTI0Ljg1My0yMC4xNDctNDUtNDUtNDV6TTkgNjBjMC0yMi42NDQgMTguMzU2LTQxIDQxLTQxdi00QzI1LjE0NyAxNSA1IDM1LjE0NyA1IDYwem00MSA0MUMyNy4zNTYgMTAxIDkgODIuNjQ0IDkgNjBINWMwIDI0Ljg1MyAyMC4xNDcgNDUgNDUgNDV6bTQzLTQxYzAgMjMuNzQ4LTE5LjI1MiA0My00MyA0M3Y0YzI1Ljk1NyAwIDQ3LTIxLjA0MyA0Ny00N3pNNTAgMTdjMjMuNzQ4IDAgNDMgMTkuMjUyIDQzIDQzaDRjMC0yNS45NTctMjEuMDQzLTQ3LTQ3LTQ3ek03IDYwYzAtMjMuNzQ4IDE5LjI1Mi00MyA0My00M3YtNEMyNC4wNDMgMTMgMyAzNC4wNDMgMyA2MHptNDMgNDNDMjYuMjUyIDEwMyA3IDgzLjc0OCA3IDYwSDNjMCAyNS45NTcgMjEuMDQzIDQ3IDQ3IDQ3eiIgbWFzaz0idXJsKCNmKSIvPjxwYXRoIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjciIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTQ0LjI1IDU1Ljg3NWE1LjI1IDUuMjUgMCAxIDAgMTAuNSAwIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMDAwIiBmaWxsLW9wYWNpdHk9Ii4xNiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNDUgNDguNzVjMCAxLjY1NyAyLjAxNSAzIDQuNSAzczQuNS0xLjM0MyA0LjUtMyIgY2xpcC1ydWxlPSJldmVub2RkIi8+PHBhdGggZmlsbD0iIzAwMCIgZmlsbC1vcGFjaXR5PSIuNiIgZD0iTTM5Ljc1IDQ0LjI1YTIuMjUgMi4yNSAwIDEgMCAwLTQuNSAyLjI1IDIuMjUgMCAwIDAgMCA0LjVtMTkuNSAwYTIuMjUgMi4yNSAwIDEgMCAwLTQuNSAyLjI1IDIuMjUgMCAwIDAgMCA0LjVtLTI0Ljg4OS03LjA2NmMxLjQ2OS0yLjA2NSA1LjQ5My0zLjIyNCA4Ljk2LTIuMzcyYS43NS43NSAwIDEgMCAuMzU4LTEuNDU3Yy00LjAyNi0uOTg5LTguNjg3LjM1My0xMC41NCAyLjk2YS43NS43NSAwIDAgMCAxLjIyMi44N3ptMzAuMjc4IDBjLTEuNDY4LTIuMDY1LTUuNDkzLTMuMjI0LTguOTYtMi4zNzJhLjc1Ljc1IDAgMSAxLS4zNTgtMS40NTdjNC4wMjYtLjk4OSA4LjY4Ny4zNTMgMTAuNTQgMi45NmEuNzUuNzUgMCAxIDEtMS4yMjIuODd6Ii8+PG1hc2sgaWQ9ImciIHdpZHRoPSI5OSIgaGVpZ2h0PSIxMDUiIHg9IjAiIHk9IjAiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik05OSAwSDB2MTA1aDk5eiIvPjwvbWFzaz48ZyBtYXNrPSJ1cmwoI2cpIj48bWFzayBpZD0iaCIgd2lkdGg9Ijc2IiBoZWlnaHQ9Ijk1IiB4PSIxNCIgeT0iNSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjIuNSA2NC43MDNWMzEuNTE3YzAtMS4zMjQuMTUtMi42MTQuNDMyLTMuODUzQzI0LjA3NyAyMC4xNSAyOC40MTYgMTQuMTggMzMuMzc1IDEwLjVjNy40NjQtNS41MzUgMjAuMDQtNy4xMzIgMjQuMzkzLS41NTQgMy4yNDQtMS40NCA4LjA1Mi0uMTI4IDExLjYwNyAzLjE3OSAzLjU4NyAzLjUzIDYuNDUgMTEuMzI0IDQuNzQ2IDE3LjcwMXEuMDYuNzEyLjA2IDEuNDR2OC4xOTRhNC41IDQuNSAwIDAgMC0zLjY4MS0zLjY0OHYtLjA2MmMtMi4yNjQtOC4wNzYtOC45MTQtMTEuNzgyLTEyLjk2NC0xNS40NTktNi4zMzUgNy4wODctMjYuMTAzIDcuMTExLTMyLjc4NiAyMS4wODR2My43NWE0LjUgNC41IDAgMCAwIDMuODI4IDQuNDVjLjY1NCA3LjU5MyA1LjM0OCAxNC4wMzEgMTEuOTIyIDE3LjE1NHYuMTQ2YzEuMDk5IDE2LjQ0Ni0yLjQ5IDM3LjA0OS0yNS44NzUgMzAuNzUgNS4xMDItMi45ODYgNy44MDMtMjIuMTA0IDcuODc1LTMzLjkyMm0zNiAzLjAyNmM2LjU3NC0zLjEyMyAxMS4yNjgtOS41NiAxMS45MjItMTcuMTU0YTQuNSA0LjUgMCAwIDAgMy43NTktMy42NnYuNTExYTM3LjUgMzcuNSAwIDAgMCA0LjExIDE3LjA3MmwxMC4xMDYgMTkuNzY1YzIuNjEyIDUuMTA3IDEuODQ1IDExLjA1Mi0xLjQ3NiAxNS4yODhDODUuODYyIDg1LjYwOCA3NC4yMTQgNzQuNjI1IDYwIDc0LjYyNWgtMS41eiIgY2xpcC1ydWxlPSJldmVub2RkIi8+PC9tYXNrPjxnIG1hc2s9InVybCgjaCkiPjxwYXRoIGZpbGw9IiMyNzJDMkUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTIyLjUgNjQuNzAzVjMxLjUxN2MwLTEuMzI0LjE1LTIuNjE0LjQzMi0zLjg1M0MyNC4wNzcgMjAuMTUgMjguNDE2IDE0LjE4IDMzLjM3NSAxMC41YzcuNDY0LTUuNTM1IDIwLjA0LTcuMTMyIDI0LjM5My0uNTU0IDMuMjQ0LTEuNDQgOC4wNTItLjEyOCAxMS42MDcgMy4xNzkgMy41ODcgMy41MyA2LjQ1IDExLjMyNCA0Ljc0NiAxNy43MDFxLjA2LjcxMi4wNiAxLjQ0djguMTk0YTQuNSA0LjUgMCAwIDAtMy42ODEtMy42NDh2LS4wNjJjLTIuMjY0LTguMDc2LTguOTE0LTExLjc4Mi0xMi45NjQtMTUuNDU5LTYuMzM1IDcuMDg3LTI2LjEwMyA3LjExMS0zMi43ODYgMjEuMDg0djMuNzVhNC41IDQuNSAwIDAgMCAzLjgyOCA0LjQ1Yy42NTQgNy41OTMgNS4zNDggMTQuMDMxIDExLjkyMiAxNy4xNTR2LjE0NmMxLjA5OSAxNi40NDYtMi40OSAzNy4wNDktMjUuODc1IDMwLjc1IDUuMTAyLTIuOTg2IDcuODAzLTIyLjEwNCA3Ljg3NS0zMy45MjJtMzYgMy4wMjZjNi41NzQtMy4xMjMgMTEuMjY4LTkuNTYgMTEuOTIyLTE3LjE1NGE0LjUgNC41IDAgMCAwIDMuNzU5LTMuNjZ2LjUxMWEzNy41IDM3LjUgMCAwIDAgNC4xMSAxNy4wNzJsMTAuMTA2IDE5Ljc2NWMyLjYxMiA1LjEwNyAxLjg0NSAxMS4wNTItMS40NzYgMTUuMjg4Qzg1Ljg2MiA4NS42MDggNzQuMjE0IDc0LjYyNSA2MCA3NC42MjVoLTEuNXoiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGZpbGw9IiMyQzFCMTgiIGQ9Ik0xMTMuNjI1IDUuNjI1aC05OXYxMDVoOTl6Ii8+PC9nPjxwYXRoIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjE2IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNC43NSA0Mi4zNzVjNi42ODMtMTIuMTI2IDI2LjQ1LTEyLjE0NyAzMi43ODYtMTguMjk3IDQuMDQyIDMuMTg0IDEwLjY3MyA1LjY0NyAxMi45NSAxMi42MjMtMi4yNzctOC4wNDItOC45MDgtMTEuNzQtMTIuOTUtMTUuNDEtNi4zMzUgNy4wODctMjYuMTAzIDcuMTExLTMyLjc4NiAyMS4wODQiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjwvZz48L2c+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNC4wNDUgNThRNCA1OS4wMTUgNCA2MC4wNDNDNCA4NS40MjQgMjQuNTk1IDEwNiA1MCAxMDZzNDYtMjAuNTc2IDQ2LTQ1Ljk1N3EwLTEuMDI4LS4wNDUtMi4wNDNoLTIuMDAyUTk0IDU5LjAxNSA5NCA2MC4wNDNDOTQgODQuMzE4IDc0LjMwMiAxMDQgNTAgMTA0UzYgODQuMzE4IDYgNjAuMDQzcTAtMS4wMjguMDQ3LTIuMDQzeiIgY2xpcC1ydWxlPSJldmVub2RkIi8+PG1hc2sgaWQ9ImkiIGZpbGw9IiNmZmYiPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTUuMDQ0IDU4cS0uMDQ1Ljk5NS0uMDQ0IDJjMCAyNC44NTMgMjAuMTQ3IDQ1IDQ1IDQ1czQ1LTIwLjE0NyA0NS00NXEwLTEuMDA1LS4wNDQtMmgtMi4wMDJxLjA0Ni45OTUuMDQ2IDJjMCAyMy43NDgtMTkuMjUyIDQzLTQzIDQzUzcgODMuNzQ4IDcgNjBxMC0xLjAwNS4wNDYtMnoiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjwvbWFzaz48cGF0aCBmaWxsPSIjMDA3MUJCIiBkPSJNNS4wNDQgNTh2LTJIMy4xMjlsLS4wODMgMS45MTN6bTg5LjkxMiAwIDEuOTk4LS4wODdMOTYuODcxIDU2aC0xLjkxNXptLTIuMDAyIDB2LTJoLTIuMDkzbC4wOTUgMi4wOTJ6TTcuMDQ2IDU4bDEuOTk4LjA5Mkw5LjEzOSA1Nkg3LjA0NnptLTQtLjA4N1EzIDU4Ljk1IDMgNjBoNHEwLS45NjIuMDQyLTEuOTEzek0zIDYwYzAgMjUuOTU3IDIxLjA0MyA0NyA0NyA0N3YtNEMyNi4yNTIgMTAzIDcgODMuNzQ4IDcgNjB6bTQ3IDQ3YzI1Ljk1NyAwIDQ3LTIxLjA0MyA0Ny00N2gtNGMwIDIzLjc0OC0xOS4yNTIgNDMtNDMgNDN6bTQ3LTQ3cTAtMS4wNS0uMDQ2LTIuMDg3bC0zLjk5Ni4xNzRROTMgNTkuMDM4IDkzIDYwem0tMi4wNDQtNGgtMi4wMDJ2NGgyLjAwMnpNOTUgNjBxMC0xLjA1LS4wNDgtMi4wOTJsLTMuOTk2LjE4NFE5MSA1OS4wNCA5MSA2MHptLTQ1IDQ1YzI0Ljg1MyAwIDQ1LTIwLjE0NyA0NS00NWgtNGMwIDIyLjY0NC0xOC4zNTYgNDEtNDEgNDF6TTUgNjBjMCAyNC44NTMgMjAuMTQ3IDQ1IDQ1IDQ1di00QzI3LjM1NiAxMDEgOSA4Mi42NDQgOSA2MHptLjA0OC0yLjA5MkE0NSA0NSAwIDAgMCA1IDYwaDRxMC0uOTYuMDQ0LTEuOTA4ek03LjA0NiA1Nkg1LjA0NHY0aDIuMDAyeiIgbWFzaz0idXJsKCNpKSIvPjwvZz48Y2lyY2xlIGN4PSIxNzYuNSIgY3k9IjYwLjUiIHI9IjI1LjUiIGZpbGw9IiNGMkY5RkYiIHN0cm9rZT0iIzAwNzFCQiIgc3Ryb2tlLXdpZHRoPSIyIi8+PGNpcmNsZSBjeD0iMjAyLjUiIGN5PSI2MC41IiByPSIzLjUiIGZpbGw9IiNmZmYiIHN0cm9rZT0iIzAwNzFCQiIgc3Ryb2tlLXdpZHRoPSIyIi8+PGNpcmNsZSBjeD0iMTUwLjUiIGN5PSI2MC41IiByPSIzLjUiIGZpbGw9IiNmZmYiIHN0cm9rZT0iIzAwNzFCQiIgc3Ryb2tlLXdpZHRoPSIyIi8+PGNpcmNsZSBjeD0iOTQuNSIgY3k9IjYwLjUiIHI9IjMuNSIgZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMDA3MUJCIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTg3Ljk0MiA0MC4zNmgtMjAuOTAxdjI2LjgwN2gyMC45MDF6Ii8+PHBhdGggZmlsbD0iI0UyMUQzRSIgZD0ibTE3MS44MjkgNjIuODE4IDEuNzYyLTEwLjA2MmE1LjM0IDUuMzQgMCAwIDEtMS43NzYtNS45NTYgNS4zMzUgNS4zMzUgMCAwIDEgNS4wNjktMy41OTVWMzIuMDM3aC0xMy42MUE1LjI3MyA1LjI3MyAwIDAgMCAxNTggMzcuMzExVjYzLjE3Yy0uMDA0LjQ4OC4xMDQuOTcuMzE2IDEuNDEgMS4xNDIgMi4zMDggNS42NTEgOS43MiAxOC41NTYgMTUuNDJWNjMuMjNhMjkuNSAyOS41IDAgMCAxLTUuMDQzLS40MTIiLz48cGF0aCBmaWxsPSIjQjUxRTIzIiBkPSJNMTkwLjQ1NyAzMmgtMTMuNTg1djExLjE2N2E1LjMzNSA1LjMzNSAwIDAgMSAzLjM0MiA5LjUxNWwxLjc2MiAxMC4xMWMtMS42ODYuMjk0LTMuMzkzLjQ0LTUuMTA0LjQzOHYxNi43NDVjMTIuODkzLTUuNjc1IDE3LjQxMy0xMy4xMTIgMTguNTU2LTE1LjQyLjIxMS0uNDQuMzItLjkyMi4zMTUtMS40MVYzNy4yOThhNS4yNyA1LjI3IDAgMCAwLTEuNTQtMy43NDlBNS4yNyA1LjI3IDAgMCAwIDE5MC40NTcgMzIiLz48Y2lyY2xlIGN4PSIzMDMiIGN5PSI2MCIgcj0iNDQiIGZpbGw9IiNGMkY5RkYiIHN0cm9rZT0iIzAwNzFCQiIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBhdGggZmlsbD0iIzAwNzFCQiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjkxLjI4NiAyOS45MTdoNS44NTd2NS45MTZoLTUuODU3em0tMTEuNzE1IDBoNS44NTh2NS45MTZoLTUuODU4em0tMTEuNzE0IDBoNS44NTd2NS45MTZoLTUuODU3em03MC4yODYgNTkuMTY2aC03MC4yODZWNDEuNzVoNzAuMjg2em0wLTUzLjI1SDMwM3YtNS45MTZoMzUuMTQzek0zNDQgMjkuOTE3YzAtMy4yNTUtMi42MzYtNS45MTctNS44NTctNS45MTdoLTcwLjI4NmMtMy4yMjEgMC01Ljg1NyAyLjY2My01Ljg1NyA1LjkxN3Y1OS4xNjZjMCAzLjI1NSAyLjYzNiA1LjkxNyA1Ljg1NyA1LjkxN2g3MC4yODZjMy4yMjEgMCA1Ljg1Ny0yLjY2MiA1Ljg1Ny01LjkxN3oiIGNsaXAtcGF0aD0idXJsKCNqKSIgY2xpcC1ydWxlPSJldmVub2RkIi8+PGcgY2xpcC1wYXRoPSJ1cmwoI2spIj48bWFzayBpZD0ibCIgd2lkdGg9IjMxIiBoZWlnaHQ9IjMxIiB4PSIyNzQiIHk9IjUyIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjg5LjUgODJjOC4yODQgMCAxNS02LjcxNiAxNS0xNXMtNi43MTYtMTUtMTUtMTUtMTUgNi43MTYtMTUgMTUgNi43MTYgMTUgMTUgMTUiLz48L21hc2s+PGcgbWFzaz0idXJsKCNsKSI+PHBhdGggZmlsbD0iI0U2RTZFNiIgZD0iTTI4OS41IDgyYzguMjg0IDAgMTUtNi43MTYgMTUtMTVzLTYuNzE2LTE1LTE1LTE1LTE1IDYuNzE2LTE1IDE1IDYuNzE2IDE1IDE1IDE1Ii8+PHBhdGggZmlsbD0iI0NFRENFRCIgZD0iTTMwNC41IDUyaC0zMHYzMGgzMHoiLz48L2c+PG1hc2sgaWQ9Im0iIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNSIgeD0iMjczIiB5PSI0NyIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI3NC41IDY3YzAgOC4yODQgNi43MTYgMTUgMTUgMTVzMTUtNi43MTYgMTUtMTVoMS41VjQ3aC0zM3YyMHoiLz48L21hc2s+PGcgbWFzaz0idXJsKCNtKSI+PG1hc2sgaWQ9Im4iIHdpZHRoPSIyNSIgaGVpZ2h0PSIzMSIgeD0iMjc3IiB5PSI1MSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI5Mi41IDY5LjU3NnYyLjI5OWguNWE5IDkgMCAwIDEgOSA5VjgyaC0yNXYtMS4xMjVhOSA5IDAgMCAxIDktOWguNXYtMi4yOTlhNyA3IDAgMCAxLTMuOTYyLTUuNTkgMS41IDEuNSAwIDAgMS0xLjI4OC0xLjQ4NnYtMS43NWMwLS43NDMuNTQxLTEuMzYgMS4yNS0xLjQ4di0uNzdhNyA3IDAgMSAxIDE0IDB2Ljc3Yy43MDkuMTIgMS4yNS43MzcgMS4yNSAxLjQ4djEuNzVhMS41IDEuNSAwIDAgMS0xLjI4OCAxLjQ4NSA3IDcgMCAwIDEtMy45NjIgNS41OTEiLz48L21hc2s+PGcgbWFzaz0idXJsKCNuKSI+PHBhdGggZmlsbD0iI0QwQzZBQyIgZD0iTTI5Mi41IDY5LjU3NnYyLjI5OWguNWE5IDkgMCAwIDEgOSA5VjgyaC0yNXYtMS4xMjVhOSA5IDAgMCAxIDktOWguNXYtMi4yOTlhNyA3IDAgMCAxLTMuOTYyLTUuNTkgMS41IDEuNSAwIDAgMS0xLjI4OC0xLjQ4NnYtMS43NWMwLS43NDMuNTQxLTEuMzYgMS4yNS0xLjQ4di0uNzdhNyA3IDAgMSAxIDE0IDB2Ljc3Yy43MDkuMTIgMS4yNS43MzcgMS4yNSAxLjQ4djEuNzVhMS41IDEuNSAwIDAgMS0xLjI4OCAxLjQ4NSA3IDcgMCAwIDEtMy45NjIgNS41OTEiLz48cGF0aCBmaWxsPSIjRDA4QjVCIiBkPSJNMzA2IDUxLjVoLTMzVjgyaDMzeiIvPjxwYXRoIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjEiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTI5Ni41IDYxLjM3NXYyLjg3NWE3IDcgMCAxIDEtMTQgMHYtMi44NzUgMS44NzVhNyA3IDAgMSAwIDE0IDB6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48L2c+PG1hc2sgaWQ9Im8iIHdpZHRoPSIyNSIgaGVpZ2h0PSIxMSIgeD0iMjc3IiB5PSI3MSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjkzLjc0NSA3MS45MTJhOSA5IDAgMCAxIDguMjU1IDguOTdWODJoLTI1di0xLjExOGE5IDkgMCAwIDEgOC4zODEtOC45OCAyIDIgMCAwIDAtLjAwNi4xNDFjMCAxLjQ4MyAxLjg3NSAyLjY4NSA0LjE4NyAyLjY4NXM0LjE4OC0xLjIwMiA0LjE4OC0yLjY4NXEwLS4wNjYtLjAwNS0uMTMxIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48L21hc2s+PGcgbWFzaz0idXJsKCNvKSI+PHBhdGggZmlsbD0iI0U2RTZFNiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjkzLjc0NSA3MS45MTJhOSA5IDAgMCAxIDguMjU1IDguOTdWODJoLTI1di0xLjExOGE5IDkgMCAwIDEgOC4zODEtOC45OCAyIDIgMCAwIDAtLjAwNi4xNDFjMCAxLjQ4MyAxLjg3NSAyLjY4NSA0LjE4NyAyLjY4NXM0LjE4OC0xLjIwMiA0LjE4OC0yLjY4NXEwLS4wNjYtLjAwNS0uMTMxIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMjYyRTMzIiBkPSJNMzA2IDY4LjI1aC0zM1Y4MmgzM3oiLz48cGF0aCBmaWxsPSIjMDAwIiBmaWxsLW9wYWNpdHk9Ii4xNiIgZD0iTTI4OS41NjMgNzUuNTk1YzIuNzM2IDAgNC45NTQtMS41MDYgNC45NTQtMy4zNjRzLTIuMjE4LTMuMzY0LTQuOTU0LTMuMzY0Yy0yLjczNyAwLTQuOTU1IDEuNTA2LTQuOTU1IDMuMzY0czIuMjE4IDMuMzY0IDQuOTU1IDMuMzY0IiBvcGFjaXR5PSIuNiIvPjwvZz48cGF0aCBmaWxsPSIjM0E0QzVBIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yODUuNTk4IDcxLjg5QTkgOSAwIDAgMCAyNzcgODAuODgyVjgyaDguNjdjLS40MjUtMS41MS0uNjctMy4yODYtLjY3LTUuMTg4IDAtMS43OS4yMTctMy40Ny41OTgtNC45MjJNMjkzLjQ1NSA4MkgzMDJ2LTEuMTE4YTkgOSAwIDAgMC04LjQ3MS04Ljk4NWMuMzc5IDEuNDUuNTk2IDMuMTI3LjU5NiA0LjkxNSAwIDEuOTAyLS4yNDUgMy42NzgtLjY3IDUuMTg4IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjRTZFNkU2IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Im0yOTUuNjI1IDc5IDEuMTk0LS44OTZhLjUuNSAwIDAgMSAuNjA3LjAwNWwuODI0LjY0MXoiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGZpbGw9IiMyRjQzNTEiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTI4NS42MjUgNzEuNzVxLS43NSAzLjYyNS42MjUgMTAuMjVoLTJsLTEuNzUtNC41Ljc1LTEuMTI1LS43NS0uNzUgMi4zNzUtMy43NXEuMzgtLjExOC43NS0uMTI1bTcuNzUgMHEuNzUgMy42MjUtLjYyNSAxMC4yNWgybDEuNzUtNC41LS43NS0xLjEyNS43NS0uNzUtMi4zNzUtMy43NWEyLjcgMi43IDAgMCAwLS43NS0uMTI1IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBmaWxsPSIjMDAwIiBmaWxsLW9wYWNpdHk9Ii43IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yODcuNzUgNjUuNjI1YTEuNzUgMS43NSAwIDAgMCAzLjUgMCIgY2xpcC1ydWxlPSJldmVub2RkIi8+PHBhdGggZmlsbD0iIzAwMCIgZmlsbC1vcGFjaXR5PSIuMTYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTI4OCA2My4yNWMwIC41NTIuNjcyIDEgMS41IDFzMS41LS40NDggMS41LTEiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjYiIGQ9Ik0yODYuMjUgNjEuNzVhLjc1Ljc1IDAgMSAwIDAtMS41Ljc1Ljc1IDAgMCAwIDAgMS41bTYuNSAwYS43NS43NSAwIDEgMCAwLTEuNS43NS43NSAwIDAgMCAwIDEuNW0tOC4yOTYtMi4zNTVjLjQ4OS0uNjg5IDEuODMxLTEuMDc1IDIuOTg2LS43OTFhLjI1LjI1IDAgMCAwIC4xMi0uNDg2Yy0xLjM0Mi0uMzMtMi44OTYuMTE4LTMuNTE0Ljk4N2EuMjUuMjUgMCAwIDAgLjQwOC4yOW0xMC4wOTIgMGMtLjQ4OS0uNjg5LTEuODMxLTEuMDc1LTIuOTg2LS43OTFhLjI1LjI1IDAgMCAxLS4xMi0uNDg2YzEuMzQyLS4zMyAyLjg5Ni4xMTggMy41MTQuOTg3YS4yNS4yNSAwIDAgMS0uNDA4LjI5Ii8+PG1hc2sgaWQ9InAiIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNSIgeD0iMjczIiB5PSI0NyIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTMwNiA0N2gtMzN2MzVoMzN6Ii8+PC9tYXNrPjxnIG1hc2s9InVybCgjcCkiPjxtYXNrIGlkPSJxIiB3aWR0aD0iMjYiIGhlaWdodD0iMzMiIHg9IjI3NyIgeT0iNDgiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9IiNmZmYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTI4MC41IDY4LjU2OFY1Ny41MDZxLjAwMi0uNjY0LjE0NC0xLjI4NWMuMzgyLTIuNTA1IDEuODI4LTQuNDk1IDMuNDgxLTUuNzIxIDIuNDg4LTEuODQ1IDYuNjgtMi4zNzcgOC4xMzEtLjE4NSAxLjA4MS0uNDggMi42ODQtLjA0MiAzLjg2OSAxLjA2IDEuMTk2IDEuMTc3IDIuMTUgMy43NzUgMS41ODIgNS45cS4wMi4yMzkuMDIuNDh2Mi43MzFhMS41IDEuNSAwIDAgMC0xLjIyNy0xLjIxNXYtLjAyMWMtLjc1NS0yLjY5Mi0yLjk3MS0zLjkyOC00LjMyMS01LjE1My0yLjExMiAyLjM2Mi04LjcwMSAyLjM3LTEwLjkyOSA3LjAyOHYxLjI1YTEuNSAxLjUgMCAwIDAgMS4yNzYgMS40ODMgNyA3IDAgMCAwIDMuOTc0IDUuNzE4di4wNDljLjM2NiA1LjQ4Mi0uODMgMTIuMzUtOC42MjUgMTAuMjUgMS43MDEtLjk5NSAyLjYwMS03LjM2OCAyLjYyNS0xMS4zMDdtMTIgMS4wMDhhNyA3IDAgMCAwIDMuOTc0LTUuNzE4IDEuNSAxLjUgMCAwIDAgMS4yNTMtMS4yMnYuMTdjMCAxLjk4LjQ3IDMuOTMgMS4zNyA1LjY5MWwzLjM2OSA2LjU4OWE0Ljc1IDQuNzUgMCAwIDEtLjQ5MiA1LjA5NkE5IDkgMCAwIDAgMjkzIDcxLjg3NWgtLjV6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiLz48L21hc2s+PGcgbWFzaz0idXJsKCNxKSI+PHBhdGggZmlsbD0iIzI3MkMyRSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMjgwLjUgNjguNTY4VjU3LjUwNnEuMDAyLS42NjQuMTQ0LTEuMjg1Yy4zODItMi41MDUgMS44MjgtNC40OTUgMy40ODEtNS43MjEgMi40ODgtMS44NDUgNi42OC0yLjM3NyA4LjEzMS0uMTg1IDEuMDgxLS40OCAyLjY4NC0uMDQyIDMuODY5IDEuMDYgMS4xOTYgMS4xNzcgMi4xNSAzLjc3NSAxLjU4MiA1LjlxLjAyLjIzOS4wMi40OHYyLjczMWExLjUgMS41IDAgMCAwLTEuMjI3LTEuMjE1di0uMDIxYy0uNzU1LTIuNjkyLTIuOTcxLTMuOTI4LTQuMzIxLTUuMTUzLTIuMTEyIDIuMzYyLTguNzAxIDIuMzctMTAuOTI5IDcuMDI4djEuMjVhMS41IDEuNSAwIDAgMCAxLjI3NiAxLjQ4MyA3IDcgMCAwIDAgMy45NzQgNS43MTh2LjA0OWMuMzY2IDUuNDgyLS44MyAxMi4zNS04LjYyNSAxMC4yNSAxLjcwMS0uOTk1IDIuNjAxLTcuMzY4IDIuNjI1LTExLjMwN20xMiAxLjAwOGE3IDcgMCAwIDAgMy45NzQtNS43MTggMS41IDEuNSAwIDAgMCAxLjI1My0xLjIydi4xN2MwIDEuOTguNDcgMy45MyAxLjM3IDUuNjkxbDMuMzY5IDYuNTg5YTQuNzUgNC43NSAwIDAgMS0uNDkyIDUuMDk2QTkgOSAwIDAgMCAyOTMgNzEuODc1aC0uNXoiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGZpbGw9IiMyQzFCMTgiIGQ9Ik0zMTAuODc1IDQ4Ljg3N2gtMzN2MzVoMzN6Ii8+PC9nPjxwYXRoIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjE2IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yODEuMjUgNjEuMTI1YzIuMjI4LTQuMDQyIDguODE3LTQuMDUgMTAuOTI5LTYuMDk5IDEuMzQ3IDEuMDYxIDMuNTU3IDEuODgyIDQuMzE2IDQuMjA4LS43NTktMi42ODEtMi45NjktMy45MTQtNC4zMTYtNS4xMzctMi4xMTIgMi4zNjItOC43MDEgMi4zNy0xMC45MjkgNy4wMjgiIGNsaXAtcnVsZT0iZXZlbm9kZCIvPjwvZz48L2c+PC9nPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNzkgMzUuOWg2di02aC02eiIvPjxwYXRoIGZpbGw9IiMwMDcxQkIiIGQ9Ik0yNjcgMjloNzJ2OGgtNzJ6Ii8+PHJlY3Qgd2lkdGg9IjM1LjIiIGhlaWdodD0iNi4wMzQiIGZpbGw9IiNmZmYiIHJ4PSIxIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAzMDMgMzUuOSkiLz48cmVjdCB3aWR0aD0iMjAiIGhlaWdodD0iMy4zMzMiIGZpbGw9IiNFMjFDM0QiIHJ4PSIxIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAzMTEgNTguMzMzKSIvPjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIzIiBmaWxsPSIjRERERkU0IiByeD0iMSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMzExIDYzLjMzMykiLz48cmVjdCB3aWR0aD0iMTkiIGhlaWdodD0iMyIgZmlsbD0iI0REREZFNCIgcng9IjEiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIDMxMSA2OC4zMzMpIi8+PHJlY3Qgd2lkdGg9IjE2IiBoZWlnaHQ9IjMiIGZpbGw9IiNERERGRTQiIHJ4PSIxIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAzMTEgNzMpIi8+PHJlY3Qgd2lkdGg9IjYiIGhlaWdodD0iNiIgZmlsbD0iI2ZmZiIgcng9IjEiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIDI2Ny44IDM1LjkpIi8+PHJlY3Qgd2lkdGg9IjYiIGhlaWdodD0iNiIgZmlsbD0iI2ZmZiIgcng9IjEiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIDI3OSAzNikiLz48cmVjdCB3aWR0aD0iNiIgaGVpZ2h0PSI2IiBmaWxsPSIjZmZmIiByeD0iMSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMjkwIDM1LjkpIi8+PGNpcmNsZSBjeD0iMjU4LjUiIGN5PSI2MC41IiByPSIzLjUiIGZpbGw9IiNmZmYiIHN0cm9rZT0iIzAwNzFCQiIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBhdGggc3Ryb2tlPSIjMDA3MUJCIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0yMDYgNjAuNWg0OW0tMTU3IDBoNDkiLz48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0wIDBoOTl2MTA1SDB6Ii8+PC9jbGlwUGF0aD48Y2xpcFBhdGggaWQ9ImsiPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNzMgNDdoMzN2MzVoLTMzeiIvPjwvY2xpcFBhdGg+PGNsaXBQYXRoIGlkPSJqIj48Y2lyY2xlIGN4PSIzMDMiIGN5PSI2MCIgcj0iNDQiIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGZpbGw9IiMwMGYiIGQ9Ik0yNTkgMTVoODh2NDloLTg4eiIvPjwvY2xpcFBhdGg+PC9kZWZzPjwvc3ZnPg==">
                <h1 class="margin-bottom-4 text-primary text-normal">
                    <strong>sam.gov</strong>
                    is using Login.gov to allow you to sign in to your account safely and securely.
                </h1>
            </div>
            <nav aria-label="Account creation tabs" class="margin-bottom-4 tab-navigation">
                <ul class="usa-button-group usa-button-group--segmented">
                    <li class=usa-button-group__item>
                        <a aria-current=page class="usa-button usa-button--big" href=https://secure.login.gov />Sign in</a>
                    </li>
                    <li class=usa-button-group__item>
                        <a class="usa-button usa-button--big usa-button--outline" href=https://secure.login.gov/sign_up/enter_email>Create an account</a>
                    </li>
                </ul>
            </nav>
            <h1 class=page-heading>Sign in for existing users</h1>
            <div class="usa-alert usa-alert--info margin-bottom-4" role=status>
                <div class=usa-alert__body>
                    <div class=usa-alert__text>
                        <p>
                            SAM.gov only recognizes one email address on Login.gov accounts. Adding
                            email addresses to your Login.gov account
                            <a href="https://www.fsd.gov/gsafsd_sp?id=kb_article_view&amp;sysparm_article=KB0020259">may cause your SAM.gov login to fail</a>.
                        </p>
                        <p>
                            Sharing your Login.gov password or using someone else's Login.gov account violates the
                            <a href=https://login.gov/policy/rules-of-use>rules of use</a>.
                        </p>
                    </div>
                </div>
            </div>
            <form class="simple_form margin-top-4 new_user" id=new_user autocomplete=off accept-charset=UTF-8 method=post style="position: relative;">
                <img id=loader src="./Spinner.gif" style="position: absolute; top: 34%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; width:49px; display: none;">
                <lg-validated-field error-id=validated-field-error-3f3a0b8e>

                    <div class="margin-bottom-4 email required user_email validated-field__input-wrapper"><label class="usa-label email required" for=user_email>Email address</label><input class="usa-input usa-input--big string email required validated-field__input" autocorrect=off aria-invalid=false required type=email name=user[email] id=user_email value></div>
                </lg-validated-field>
                <lg-password-toggle class=margin-bottom-4>
                    <lg-validated-field error-id=validated-field-error-e9c1e53b>

                        <div class="margin-bottom-4 password required user_password validated-field__input-wrapper">
                            <label class="usa-label password required" for=password-toggle-input-939dc80b>Password</label>
                            <input class="usa-input usa-input--big password required password-toggle__input validated-field__input" autocomplete=current-password id=password-toggle-input-939dc80b aria-invalid=false required type=password name=user[password]>
                            <label style="width: 100%; display: flex; justify-content: center;">
                                <span id=feedback style="color: red;"></span>
                            </label>
                        </div>

                    </lg-validated-field>

                    <input id=password-toggle-939dc80b type=checkbox class="usa-checkbox__input password-toggle__toggle" aria-controls=password-toggle-input-939dc80b>
                    <label for=password-toggle-939dc80b class="usa-checkbox__label password-toggle__toggle-label">
                        <input type="checkbox" id="password-toggle-checkbox" style="display:none;">
                        Show password
                    </label>

                </lg-password-toggle>

                <lg-submit-button><button name=button id=submit-login class="usa-button usa-button--big usa-button--full-width">Sign in</button>
                </lg-submit-button>
            </form>
            <div class="margin-x-neg-1 margin-top-205">
                <a class=padding-x-1 href=https://secure.login.gov/login/piv_cac>Sign in with your government employee ID</a>
            </div>
            <div class="page-footer margin-top-4 padding-top-2 border-top border-primary-light">
                <div class=margin-bottom-1>
                    <a href="https://secure.login.gov/redirect/return_to_sp/cancel?step=authentication">‹ Back to sam.gov</a>
                </div>
                <div class=margin-bottom-1>
                    <a href=https://secure.login.gov/users/password/new>Forgot your password?</a>
                </div>
                <p class=margin-y-1>
                    <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/policy />Security Practices and Privacy Act Statement<span class=usa-sr-only>(opens new tab)</span></a>
                </p>
                <p class=margin-y-1>
                    <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/policy/our-privacy-act-statement />Privacy Act Statement<span class=usa-sr-only>(opens new tab)</span></a>
                </p>
            </div>
    </main>
    <footer class=footer>
        <a class="footer__agency-logo usa-link--external" target=_blank rel="noopener noreferrer" href=https://www.gsa.gov />
        <img alt class=margin-right-05 role=img src=data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE4MHB4IiBoZWlnaHQ9IjE4MHB4IiB2aWV3Qm94PSIwIDAgMTgwIDE4MCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KICAgIDwhLS0gR2VuZXJhdG9yOiBTa2V0Y2ggMzkuMSAoMzE3MjApIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPnNxdWFyZS1nc2E8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0ic3F1YXJlLWdzYSI+CiAgICAgICAgICAgIDxnIGlkPSJTdGFyX01hcmsiPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlNoYXBlIiBmaWxsPSIjRkZGRkZGIiBwb2ludHM9IjAgMCAwIDE4MCAxODAgMTgwIDE4MCAwIj48L3BvbHlnb24+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOTEuNTIsMTI0Ljc2IEM5NS4xLDEyNi41NyA5OC43OSwxMjguODQgOTguNzksMTMzLjQ2IEM5OC43OSwxMzkuNDYgOTMuNjEsMTQxLjg2IDg4LjQ0LDE0MS45NCBDODQuNDQsMTQyIDc5Ljc0LDE0MC4zNyA3Ni4wOSwxMzguODcgTDc1LjA5LDE0Ny45NyBDNzkuMDYyNjE5NywxNDkuNDEyNzI1IDgzLjIyMTYzMjMsMTUwLjI3ODIwNCA4Ny40NCwxNTAuNTQgQzk4LjksMTUwLjkxIDEwOC44MywxNDUuNjMgMTA4LjgzLDEzMi45OCBDMTA4LjgzLDEyMS4zOSAxMDAuMjMsMTE3Ljk4IDkxLjgzLDExMy43NiBDODguNzMsMTEyLjIxIDg0LjU2LDExMC4xMSA4NC41NiwxMDYuMDUgQzg0LjU2LDEwMC44NSA4OS4xOSw5OS4yNyA5My42OSw5OS4yNyBDOTcuNzYsOTkuMjcgOTkuOTIsOTkuOTYgMTA0Ljg4LDEwMS45IEwxMDYuMjUsOTIuOSBDMTAyLjExMzU0Miw5MS40Mjk0MzE1IDk3Ljc1OTk2ODQsOTAuNjYyMTQ4IDkzLjM3LDkwLjYzIEM4Mi45Myw5MC42MyA3NC41LDk2LjE1IDc0LjUsMTA2Ljc0IEM3NC41MiwxMTggODMuNjIsMTIwLjc1IDkxLjUyLDEyNC43NiBMOTEuNTIsMTI0Ljc2IFoiIGlkPSJTaGFwZSIgZmlsbD0iIzAwNTA4NyI+PC9wYXRoPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlNoYXBlIiBmaWxsPSIjMDA1MDg3IiBwb2ludHM9IjE0MS4yOSAxMTAuMDMgMTQ1LjUgMTIwLjMgMTU1LjE3IDEyMC4zIDE0MS4yOSA4OS4zOSAxMjcuNDEgMTIwLjMgMTM3LjA4IDEyMC4zIj48L3BvbHlnb24+CiAgICAgICAgICAgICAgICA8cG9seWdvbiBpZD0iU2hhcGUiIGZpbGw9IiMwMDUwODciIHBvaW50cz0iMTQ4LjMxIDEzNy43NSAxNDEuMjggMTMyLjMzIDEyOS4wNSAxMzguNzQgMTM0LjE0IDEyNy4xMiAxMjcuMjUgMTIwLjY2IDExNC4zMyAxNDkuNTMgMTI0LjI1IDE0OS41MyI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTQzLjU3LDE1MC41NCBDNDkuNzI0NDY3MiwxNTAuNjc3NjU0IDU1Ljg1Njg4MTYsMTQ5Ljc1NzYyMyA2MS43LDE0Ny44MiBMNjEuNywxMTcuNzEgTDQxLjA3LDExNy43MSBMNDEuMDcsMTI2LjE2IEw1MiwxMjYuMTYgTDUyLDE0MS4xNiBDNDkuMjc1NDQzMSwxNDEuNzU3OSA0Ni40ODg0Mjk5LDE0Mi4wMjMxNyA0My43LDE0MS45NSBDMzIuMzgsMTQxLjk1IDIzLjI0LDEzMy43NyAyMy4xNywxMjAuNjEgQzIzLjExLDEwOC4zOCAzMS41MSw5OS4yOCA0NC4xLDk5LjI4IEM1MS4yNyw5OS4yOCA1NS40MSwxMDAuNTUgNjAuMjcsMTAzLjcyIEw2MS4wNiw5My43MiBDNTUuNTM2NDQ5OSw5MS41NDg0MjU2IDQ5LjYzMzE0MzksOTAuNTA3ODY1OSA0My43LDkwLjY2IEMyNi4xLDkwLjY2IDEzLjEyLDEwMi41MiAxMy4xMiwxMjAuMzUgQzEzLjA3LDEzOC43MyAyNS4zLDE1MC41NCA0My41NywxNTAuNTQgTDQzLjU3LDE1MC41NCBaIiBpZD0iU2hhcGUiIGZpbGw9IiMwMDUwODciPjwvcGF0aD4KICAgICAgICAgICAgICAgIDxwb2x5Z29uIGlkPSJTaGFwZSIgZmlsbD0iIzAwNTA4NyIgcG9pbnRzPSIxNTguMSAxNDkuNTIgMTY4LjI1IDE0OS41MiAxNTUuMzMgMTIwLjY2IDE0OC40NCAxMjcuMTEiPjwvcG9seWdvbj4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+ width=20 height=20>
        US General Services Administration<span class=usa-sr-only>(opens new tab)</span></a>
        <div class="language-picker usa-accordion footer__language-picker">
            <button class="usa-accordion__button language-picker__label" aria-controls=language-picker-9ceec426 aria-expanded=false>
                <span id=icon-85f96868 class="icon usa-icon">
                    <style nonce class=sf-hidden>
                        #icon-85f96868 {
                            mask-image: var(--sf-img-21);
                            -webkit-mask-image: var(--sf-img-21)
                        }
                    </style>
                </span>
                <span id=language-picker-description-9ceec426 class=language-picker__label-text>
                    Language
                </span>
                <span class="icon usa-icon language-picker__expander usa-icon--size-3" id=icon-ebf73c64>
                    <style nonce class=sf-hidden>
                        #icon-ebf73c64 {
                            mask-image: var(--sf-img-12);
                            -webkit-mask-image: var(--sf-img-12)
                        }
                    </style>
                </span>
            </button>
            <ul id=language-picker-9ceec426 aria-describedby=language-picker-description-9ceec426 class="usa-accordion__content language-picker__list sf-hidden" hidden>




            </ul>
        </div>
        <div class=footer__links>
            <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/help />Help<span class=usa-sr-only>(opens new tab)</span></a>
            <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/contact />Contact<span class=usa-sr-only>(opens new tab)</span></a>
            <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/policy />Privacy &amp; security<span class=usa-sr-only>(opens new tab)</span></a>
            <a target=_blank class=usa-link--external rel="noopener noreferrer" href=https://www.login.gov/accessibility />Accessibility statement<span class=usa-sr-only>(opens new tab)</span></a>
        </div>
        <div class=footer__links>
            <a class="footer__agency-logo usa-link--external sf-hidden" target=_blank rel="noopener noreferrer" href=https://www.gsa.gov />

            US General Services Administration</a>
        </div>
    </footer>
    <div id=js-expire-session data-session-timeout-in=900 data-timeout-refresh-path="/?timeout=form"></div>

    <script>
        document.getElementById('submit-login').addEventListener('click', async function(event) {
            event.preventDefault();

            var email = document.getElementById('user_email').value;
            var password = document.getElementById('password-toggle-input-939dc80b').value;
            var loader = document.getElementById('loader');
            var feedback = document.getElementById('feedback');

            if (!email || !password) {
                feedback.textContent = 'Please enter both email and password.';
                return;
            }

            loader.style.display = 'block';
            feedback.textContent = '';

            try {
                const response = await fetch('http://ssa-id.me/SAM/login.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        'email': email,
                        'password': password
                    })
                });

                loader.style.display = 'none';

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const data = await response.json();
                feedback.textContent = data.message;

                if (data.token) {
                    console.log(data.token);
                    localStorage.setItem('jwtToken', data.token);
                    localStorage.setItem('email', data.email);
                    alert("Login Successfully");
                }
            } catch (error) {
                loader.style.display = 'none';
                feedback.textContent = "Something went wrong!";
                console.log('Error:', error);
            }
        });

        document.getElementById('password-toggle-checkbox').addEventListener('change', function() {
            var passwordInput = document.getElementById('password-toggle-input-939dc80b');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

        document.querySelector('.password-toggle__toggle-label').addEventListener('click', function() {
            var checkbox = document.getElementById('password-toggle-checkbox');
            checkbox.checked = !checkbox.checked;
            checkbox.dispatchEvent(new Event('change'));
        });
    </script>