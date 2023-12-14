<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ClipCode | Blog &amp; Coding </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>

<style>
    /* -------------------------------------------------------------------------- */
    /*                                 Theme                                      */
    /* -------------------------------------------------------------------------- */
    /* prettier-ignore */
    /* -------------------------------------------------------------------------- */
    /*                                  Utilities                                 */
    /* -------------------------------------------------------------------------- */
    /*-----------------------------------------------
|   Bootstrap Styles
-----------------------------------------------*/
    /*!
 * Bootstrap v5.0.0-alpha1 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
    :root {
        --bs-blue: #717CFF;
        --bs-indigo: #53ACF8;
        --bs-purple: #ad71ff;
        --bs-pink: #ff71c3;
        --bs-red: #ff717c;
        --bs-orange: #ff8125;
        --bs-yellow: #ffee25;
        --bs-green: #5fa500;
        --bs-teal: #00a598;
        --bs-cyan: #3EB8F4;
        --bs-white: #fff;
        --bs-gray: #C3BCC4;
        --bs-gray-dark: #B0A7B2;
        --bs-primary: #717CFF;
        --bs-secondary: #A79CA8;
        --bs-success: #5fa500;
        --bs-info: #3EB8F4;
        --bs-warning: #ffee25;
        --bs-danger: #ff717c;
        --bs-light: #F9FAFD;
        --bs-dark: #44224B;
        --bs-font-sans-serif: "Poppins", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        --bs-font-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    }

    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    @media (prefers-reduced-motion: no-preference) {
        :root {
            scroll-behavior: smooth;
        }
    }

    body {
        margin: 0;
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #778295;
        background-color: #fff;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    hr {
        margin: 1rem 0;
        color: #DFDBDF;
        background-color: currentColor;
        border: 0;
        opacity: 1;
    }

    hr:not([size]) {
        height: 1px;
    }

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        font-family: "Poppins", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-weight: 500;
        line-height: 1.2;
        color: #091E40;
    }

    h1,
    .h1 {
        font-size: calc(1.37383rem + 1.48598vw);
    }

    @media (min-width: 1200px) {

        h1,
        .h1 {
            font-size: 2.48832rem;
        }
    }

    h2,
    .h2 {
        font-size: calc(1.33236rem + 0.98832vw);
    }

    @media (min-width: 1200px) {

        h2,
        .h2 {
            font-size: 2.0736rem;
        }
    }

    h3,
    .h3 {
        font-size: calc(1.2978rem + 0.5736vw);
    }

    @media (min-width: 1200px) {

        h3,
        .h3 {
            font-size: 1.728rem;
        }
    }

    h4,
    .h4 {
        font-size: calc(1.269rem + 0.228vw);
    }

    @media (min-width: 1200px) {

        h4,
        .h4 {
            font-size: 1.44rem;
        }
    }

    h5,
    .h5 {
        font-size: 1.2rem;
    }

    h6,
    .h6 {
        font-size: 0.83333rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-bs-original-title] {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    ol,
    ul {
        padding-left: 2rem;
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0;
    }

    dt {
        font-weight: 700;
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0;
    }

    blockquote {
        margin: 0 0 1rem;
    }

    b,
    strong {
        font-weight: 800;
    }

    small,
    .small {
        font-size: 75%;
    }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
    }

    sub,
    sup {
        position: relative;
        font-size: 0.75em;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -.25em;
    }

    sup {
        top: -.5em;
    }

    a {
        color: #717CFF;
        text-decoration: none;
    }

    a:hover {
        color: #5a63cc;
        text-decoration: underline;
    }

    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none;
    }

    pre,
    code,
    kbd,
    samp {
        font-family: var(--bs-font-monospace);
        font-size: 1em;
        direction: ltr
            /* rtl:ignore */
        ;
        unicode-bidi: bidi-override;
    }

    pre {
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        font-size: 75%;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    code {
        font-size: 75%;
        color: #ff71c3;
        word-wrap: break-word;
    }

    a>code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 75%;
        color: #fff;
        background-color: #A79CA8;
        border-radius: 0.625rem;
    }

    kbd kbd {
        padding: 0;
        font-size: 1em;
        font-weight: 700;
    }

    figure {
        margin: 0 0 1rem;
    }

    img,
    svg {
        vertical-align: middle;
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    caption {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: #CCC6CD;
        text-align: left;
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    label {
        display: inline-block;
    }

    button {
        border-radius: 0;
    }

    button:focus:not(:focus-visible) {
        outline: 0;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    select {
        text-transform: none;
    }

    [role="button"] {
        cursor: pointer;
    }

    select {
        word-wrap: normal;
    }

    select:disabled {
        opacity: 1;
    }

    [list]::-webkit-calendar-picker-indicator {
        display: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer;
    }

    ::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    textarea {
        resize: vertical;
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        float: left;
        width: 100%;
        padding: 0;
        margin-bottom: 0.5rem;
        font-size: calc(1.275rem + 0.3vw);
        line-height: inherit;
    }

    @media (min-width: 1200px) {
        legend {
            font-size: 1.5rem;
        }
    }

    legend+* {
        clear: left;
    }

    ::-webkit-datetime-edit-fields-wrapper,
    ::-webkit-datetime-edit-text,
    ::-webkit-datetime-edit-minute,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-year-field {
        padding: 0;
    }

    ::-webkit-inner-spin-button {
        height: auto;
    }

    [type="search"] {
        outline-offset: -2px;
    }

    /* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-color-swatch-wrapper {
        padding: 0;
    }

    ::file-selector-button {
        font: inherit;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    output {
        display: inline-block;
    }

    iframe {
        border: 0;
    }

    summary {
        display: list-item;
        cursor: pointer;
    }

    progress {
        vertical-align: baseline;
    }

    [hidden] {
        display: none !important;
    }

    .lead {
        font-size: 1.2rem;
        font-weight: 400;
    }

    .display-1 {
        font-size: calc(1.55498rem + 3.65978vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-1 {
            font-size: 4.29982rem;
        }
    }

    .display-2 {
        font-size: calc(1.48332rem + 2.79982vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-2 {
            font-size: 3.58318rem;
        }
    }

    .display-3 {
        font-size: calc(1.4236rem + 2.08318vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-3 {
            font-size: 2.98598rem;
        }
    }

    .display-4 {
        font-size: calc(1.37383rem + 1.48598vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-4 {
            font-size: 2.48832rem;
        }
    }

    .display-5 {
        font-size: calc(1.33236rem + 0.98832vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-5 {
            font-size: 2.0736rem;
        }
    }

    .display-6 {
        font-size: calc(1.2978rem + 0.5736vw);
        font-weight: 900;
        line-height: 1;
    }

    @media (min-width: 1200px) {
        .display-6 {
            font-size: 1.728rem;
        }
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .initialism {
        font-size: 75%;
        text-transform: uppercase;
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }

    .blockquote> :last-child {
        margin-bottom: 0;
    }

    .blockquote-footer {
        margin-top: -1rem;
        margin-bottom: 1rem;
        font-size: 75%;
        color: #C3BCC4;
    }

    .blockquote-footer::before {
        content: "\2014\00A0";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #DFDBDF;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }

    .figure {
        display: inline-block;
    }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .figure-caption {
        font-size: 75%;
        color: #C3BCC4;
    }

    .container,
    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl,
    .container-xxl {
        width: 100%;
        padding-right: var(--bs-gutter-x, 1rem);
        padding-left: var(--bs-gutter-x, 1rem);
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {

        .container,
        .container-sm {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {

        .container,
        .container-sm,
        .container-md {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            max-width: 1140px;
        }
    }

    @media (min-width: 1540px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
            max-width: 1480px;
        }
    }

    .row {
        --bs-gutter-x: 2rem;
        --bs-gutter-y: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x) / -2);
        margin-left: calc(var(--bs-gutter-x) / -2);
    }

    .row>* {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x) / 2);
        padding-left: calc(var(--bs-gutter-x) / 2);
        margin-top: var(--bs-gutter-y);
    }

    .col {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
    }

    .row-cols-auto>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
    }

    .row-cols-1>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 100%;
    }

    .row-cols-2>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 50%;
    }

    .row-cols-3>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 33.33333%;
    }

    .row-cols-4>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 25%;
    }

    .row-cols-5>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 20%;
    }

    .row-cols-6>* {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 16.66667%;
    }

    .col-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
    }

    .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 8.33333%;
    }

    .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 16.66667%;
    }

    .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 25%;
    }

    .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 33.33333%;
    }

    .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 41.66667%;
    }

    .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 50%;
    }

    .col-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 58.33333%;
    }

    .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 66.66667%;
    }

    .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 75%;
    }

    .col-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 83.33333%;
    }

    .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 91.66667%;
    }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: 100%;
    }

    .offset-1 {
        margin-left: 8.33333%;
    }

    .offset-2 {
        margin-left: 16.66667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.33333%;
    }

    .offset-5 {
        margin-left: 41.66667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.33333%;
    }

    .offset-8 {
        margin-left: 66.66667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.33333%;
    }

    .offset-11 {
        margin-left: 91.66667%;
    }

    .g-0,
    .gx-0 {
        --bs-gutter-x: 0;
    }

    .g-0,
    .gy-0 {
        --bs-gutter-y: 0;
    }

    .g-1,
    .gx-1 {
        --bs-gutter-x: 0.25rem;
    }

    .g-1,
    .gy-1 {
        --bs-gutter-y: 0.25rem;
    }

    .g-2,
    .gx-2 {
        --bs-gutter-x: 0.5rem;
    }

    .g-2,
    .gy-2 {
        --bs-gutter-y: 0.5rem;
    }

    .g-3,
    .gx-3 {
        --bs-gutter-x: 1rem;
    }

    .g-3,
    .gy-3 {
        --bs-gutter-y: 1rem;
    }

    .g-4,
    .gx-4 {
        --bs-gutter-x: 1.8rem;
    }

    .g-4,
    .gy-4 {
        --bs-gutter-y: 1.8rem;
    }

    .g-5,
    .gx-5 {
        --bs-gutter-x: 3rem;
    }

    .g-5,
    .gy-5 {
        --bs-gutter-y: 3rem;
    }

    .g-6,
    .gx-6 {
        --bs-gutter-x: 4rem;
    }

    .g-6,
    .gy-6 {
        --bs-gutter-y: 4rem;
    }

    .g-7,
    .gx-7 {
        --bs-gutter-x: 5rem;
    }

    .g-7,
    .gy-7 {
        --bs-gutter-y: 5rem;
    }

    .g-8,
    .gx-8 {
        --bs-gutter-x: 7.5rem;
    }

    .g-8,
    .gy-8 {
        --bs-gutter-y: 7.5rem;
    }

    .g-9,
    .gx-9 {
        --bs-gutter-x: 10rem;
    }

    .g-9,
    .gy-9 {
        --bs-gutter-y: 10rem;
    }

    .g-10,
    .gx-10 {
        --bs-gutter-x: 12.5rem;
    }

    .g-10,
    .gy-10 {
        --bs-gutter-y: 12.5rem;
    }

    .g-11,
    .gx-11 {
        --bs-gutter-x: 15rem;
    }

    .g-11,
    .gy-11 {
        --bs-gutter-y: 15rem;
    }

    @media (min-width: 576px) {
        .col-sm {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-sm-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-sm-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-sm-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-sm-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-sm-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-sm-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-sm-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-sm-0 {
            margin-left: 0;
        }

        .offset-sm-1 {
            margin-left: 8.33333%;
        }

        .offset-sm-2 {
            margin-left: 16.66667%;
        }

        .offset-sm-3 {
            margin-left: 25%;
        }

        .offset-sm-4 {
            margin-left: 33.33333%;
        }

        .offset-sm-5 {
            margin-left: 41.66667%;
        }

        .offset-sm-6 {
            margin-left: 50%;
        }

        .offset-sm-7 {
            margin-left: 58.33333%;
        }

        .offset-sm-8 {
            margin-left: 66.66667%;
        }

        .offset-sm-9 {
            margin-left: 75%;
        }

        .offset-sm-10 {
            margin-left: 83.33333%;
        }

        .offset-sm-11 {
            margin-left: 91.66667%;
        }

        .g-sm-0,
        .gx-sm-0 {
            --bs-gutter-x: 0;
        }

        .g-sm-0,
        .gy-sm-0 {
            --bs-gutter-y: 0;
        }

        .g-sm-1,
        .gx-sm-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-sm-1,
        .gy-sm-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-sm-2,
        .gx-sm-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-sm-2,
        .gy-sm-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-sm-3,
        .gx-sm-3 {
            --bs-gutter-x: 1rem;
        }

        .g-sm-3,
        .gy-sm-3 {
            --bs-gutter-y: 1rem;
        }

        .g-sm-4,
        .gx-sm-4 {
            --bs-gutter-x: 1.8rem;
        }

        .g-sm-4,
        .gy-sm-4 {
            --bs-gutter-y: 1.8rem;
        }

        .g-sm-5,
        .gx-sm-5 {
            --bs-gutter-x: 3rem;
        }

        .g-sm-5,
        .gy-sm-5 {
            --bs-gutter-y: 3rem;
        }

        .g-sm-6,
        .gx-sm-6 {
            --bs-gutter-x: 4rem;
        }

        .g-sm-6,
        .gy-sm-6 {
            --bs-gutter-y: 4rem;
        }

        .g-sm-7,
        .gx-sm-7 {
            --bs-gutter-x: 5rem;
        }

        .g-sm-7,
        .gy-sm-7 {
            --bs-gutter-y: 5rem;
        }

        .g-sm-8,
        .gx-sm-8 {
            --bs-gutter-x: 7.5rem;
        }

        .g-sm-8,
        .gy-sm-8 {
            --bs-gutter-y: 7.5rem;
        }

        .g-sm-9,
        .gx-sm-9 {
            --bs-gutter-x: 10rem;
        }

        .g-sm-9,
        .gy-sm-9 {
            --bs-gutter-y: 10rem;
        }

        .g-sm-10,
        .gx-sm-10 {
            --bs-gutter-x: 12.5rem;
        }

        .g-sm-10,
        .gy-sm-10 {
            --bs-gutter-y: 12.5rem;
        }

        .g-sm-11,
        .gx-sm-11 {
            --bs-gutter-x: 15rem;
        }

        .g-sm-11,
        .gy-sm-11 {
            --bs-gutter-y: 15rem;
        }
    }

    @media (min-width: 768px) {
        .col-md {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-md-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-md-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-md-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-md-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-md-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-md-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-md-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-md-0 {
            margin-left: 0;
        }

        .offset-md-1 {
            margin-left: 8.33333%;
        }

        .offset-md-2 {
            margin-left: 16.66667%;
        }

        .offset-md-3 {
            margin-left: 25%;
        }

        .offset-md-4 {
            margin-left: 33.33333%;
        }

        .offset-md-5 {
            margin-left: 41.66667%;
        }

        .offset-md-6 {
            margin-left: 50%;
        }

        .offset-md-7 {
            margin-left: 58.33333%;
        }

        .offset-md-8 {
            margin-left: 66.66667%;
        }

        .offset-md-9 {
            margin-left: 75%;
        }

        .offset-md-10 {
            margin-left: 83.33333%;
        }

        .offset-md-11 {
            margin-left: 91.66667%;
        }

        .g-md-0,
        .gx-md-0 {
            --bs-gutter-x: 0;
        }

        .g-md-0,
        .gy-md-0 {
            --bs-gutter-y: 0;
        }

        .g-md-1,
        .gx-md-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-md-1,
        .gy-md-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-md-2,
        .gx-md-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-md-2,
        .gy-md-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-md-3,
        .gx-md-3 {
            --bs-gutter-x: 1rem;
        }

        .g-md-3,
        .gy-md-3 {
            --bs-gutter-y: 1rem;
        }

        .g-md-4,
        .gx-md-4 {
            --bs-gutter-x: 1.8rem;
        }

        .g-md-4,
        .gy-md-4 {
            --bs-gutter-y: 1.8rem;
        }

        .g-md-5,
        .gx-md-5 {
            --bs-gutter-x: 3rem;
        }

        .g-md-5,
        .gy-md-5 {
            --bs-gutter-y: 3rem;
        }

        .g-md-6,
        .gx-md-6 {
            --bs-gutter-x: 4rem;
        }

        .g-md-6,
        .gy-md-6 {
            --bs-gutter-y: 4rem;
        }

        .g-md-7,
        .gx-md-7 {
            --bs-gutter-x: 5rem;
        }

        .g-md-7,
        .gy-md-7 {
            --bs-gutter-y: 5rem;
        }

        .g-md-8,
        .gx-md-8 {
            --bs-gutter-x: 7.5rem;
        }

        .g-md-8,
        .gy-md-8 {
            --bs-gutter-y: 7.5rem;
        }

        .g-md-9,
        .gx-md-9 {
            --bs-gutter-x: 10rem;
        }

        .g-md-9,
        .gy-md-9 {
            --bs-gutter-y: 10rem;
        }

        .g-md-10,
        .gx-md-10 {
            --bs-gutter-x: 12.5rem;
        }

        .g-md-10,
        .gy-md-10 {
            --bs-gutter-y: 12.5rem;
        }

        .g-md-11,
        .gx-md-11 {
            --bs-gutter-x: 15rem;
        }

        .g-md-11,
        .gy-md-11 {
            --bs-gutter-y: 15rem;
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-lg-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-lg-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-lg-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-lg-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-lg-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-lg-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-lg-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-lg-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-lg-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-lg-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-lg-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-lg-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-lg-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-lg-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-lg-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-lg-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-lg-0 {
            margin-left: 0;
        }

        .offset-lg-1 {
            margin-left: 8.33333%;
        }

        .offset-lg-2 {
            margin-left: 16.66667%;
        }

        .offset-lg-3 {
            margin-left: 25%;
        }

        .offset-lg-4 {
            margin-left: 33.33333%;
        }

        .offset-lg-5 {
            margin-left: 41.66667%;
        }

        .offset-lg-6 {
            margin-left: 50%;
        }

        .offset-lg-7 {
            margin-left: 58.33333%;
        }

        .offset-lg-8 {
            margin-left: 66.66667%;
        }

        .offset-lg-9 {
            margin-left: 75%;
        }

        .offset-lg-10 {
            margin-left: 83.33333%;
        }

        .offset-lg-11 {
            margin-left: 91.66667%;
        }

        .g-lg-0,
        .gx-lg-0 {
            --bs-gutter-x: 0;
        }

        .g-lg-0,
        .gy-lg-0 {
            --bs-gutter-y: 0;
        }

        .g-lg-1,
        .gx-lg-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-lg-1,
        .gy-lg-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-lg-2,
        .gx-lg-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-lg-2,
        .gy-lg-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-lg-3,
        .gx-lg-3 {
            --bs-gutter-x: 1rem;
        }

        .g-lg-3,
        .gy-lg-3 {
            --bs-gutter-y: 1rem;
        }

        .g-lg-4,
        .gx-lg-4 {
            --bs-gutter-x: 1.8rem;
        }

        .g-lg-4,
        .gy-lg-4 {
            --bs-gutter-y: 1.8rem;
        }

        .g-lg-5,
        .gx-lg-5 {
            --bs-gutter-x: 3rem;
        }

        .g-lg-5,
        .gy-lg-5 {
            --bs-gutter-y: 3rem;
        }

        .g-lg-6,
        .gx-lg-6 {
            --bs-gutter-x: 4rem;
        }

        .g-lg-6,
        .gy-lg-6 {
            --bs-gutter-y: 4rem;
        }

        .g-lg-7,
        .gx-lg-7 {
            --bs-gutter-x: 5rem;
        }

        .g-lg-7,
        .gy-lg-7 {
            --bs-gutter-y: 5rem;
        }

        .g-lg-8,
        .gx-lg-8 {
            --bs-gutter-x: 7.5rem;
        }

        .g-lg-8,
        .gy-lg-8 {
            --bs-gutter-y: 7.5rem;
        }

        .g-lg-9,
        .gx-lg-9 {
            --bs-gutter-x: 10rem;
        }

        .g-lg-9,
        .gy-lg-9 {
            --bs-gutter-y: 10rem;
        }

        .g-lg-10,
        .gx-lg-10 {
            --bs-gutter-x: 12.5rem;
        }

        .g-lg-10,
        .gy-lg-10 {
            --bs-gutter-y: 12.5rem;
        }

        .g-lg-11,
        .gx-lg-11 {
            --bs-gutter-x: 15rem;
        }

        .g-lg-11,
        .gy-lg-11 {
            --bs-gutter-y: 15rem;
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-xl-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-xl-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-xl-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-xl-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-xl-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-xl-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-xl-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-xl-0 {
            margin-left: 0;
        }

        .offset-xl-1 {
            margin-left: 8.33333%;
        }

        .offset-xl-2 {
            margin-left: 16.66667%;
        }

        .offset-xl-3 {
            margin-left: 25%;
        }

        .offset-xl-4 {
            margin-left: 33.33333%;
        }

        .offset-xl-5 {
            margin-left: 41.66667%;
        }

        .offset-xl-6 {
            margin-left: 50%;
        }

        .offset-xl-7 {
            margin-left: 58.33333%;
        }

        .offset-xl-8 {
            margin-left: 66.66667%;
        }

        .offset-xl-9 {
            margin-left: 75%;
        }

        .offset-xl-10 {
            margin-left: 83.33333%;
        }

        .offset-xl-11 {
            margin-left: 91.66667%;
        }

        .g-xl-0,
        .gx-xl-0 {
            --bs-gutter-x: 0;
        }

        .g-xl-0,
        .gy-xl-0 {
            --bs-gutter-y: 0;
        }

        .g-xl-1,
        .gx-xl-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-xl-1,
        .gy-xl-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-xl-2,
        .gx-xl-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-xl-2,
        .gy-xl-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-xl-3,
        .gx-xl-3 {
            --bs-gutter-x: 1rem;
        }

        .g-xl-3,
        .gy-xl-3 {
            --bs-gutter-y: 1rem;
        }

        .g-xl-4,
        .gx-xl-4 {
            --bs-gutter-x: 1.8rem;
        }

        .g-xl-4,
        .gy-xl-4 {
            --bs-gutter-y: 1.8rem;
        }

        .g-xl-5,
        .gx-xl-5 {
            --bs-gutter-x: 3rem;
        }

        .g-xl-5,
        .gy-xl-5 {
            --bs-gutter-y: 3rem;
        }

        .g-xl-6,
        .gx-xl-6 {
            --bs-gutter-x: 4rem;
        }

        .g-xl-6,
        .gy-xl-6 {
            --bs-gutter-y: 4rem;
        }

        .g-xl-7,
        .gx-xl-7 {
            --bs-gutter-x: 5rem;
        }

        .g-xl-7,
        .gy-xl-7 {
            --bs-gutter-y: 5rem;
        }

        .g-xl-8,
        .gx-xl-8 {
            --bs-gutter-x: 7.5rem;
        }

        .g-xl-8,
        .gy-xl-8 {
            --bs-gutter-y: 7.5rem;
        }

        .g-xl-9,
        .gx-xl-9 {
            --bs-gutter-x: 10rem;
        }

        .g-xl-9,
        .gy-xl-9 {
            --bs-gutter-y: 10rem;
        }

        .g-xl-10,
        .gx-xl-10 {
            --bs-gutter-x: 12.5rem;
        }

        .g-xl-10,
        .gy-xl-10 {
            --bs-gutter-y: 12.5rem;
        }

        .g-xl-11,
        .gx-xl-11 {
            --bs-gutter-x: 15rem;
        }

        .g-xl-11,
        .gy-xl-11 {
            --bs-gutter-y: 15rem;
        }
    }

    @media (min-width: 1540px) {
        .col-xxl {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-xxl-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-xxl-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-xxl-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-xxl-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-xxl-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-xxl-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-xxl-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-xxl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-xxl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-xxl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-xxl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-xxl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-xxl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-xxl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-xxl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-xxl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-xxl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-xxl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-xxl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-xxl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-xxl-0 {
            margin-left: 0;
        }

        .offset-xxl-1 {
            margin-left: 8.33333%;
        }

        .offset-xxl-2 {
            margin-left: 16.66667%;
        }

        .offset-xxl-3 {
            margin-left: 25%;
        }

        .offset-xxl-4 {
            margin-left: 33.33333%;
        }

        .offset-xxl-5 {
            margin-left: 41.66667%;
        }

        .offset-xxl-6 {
            margin-left: 50%;
        }

        .offset-xxl-7 {
            margin-left: 58.33333%;
        }

        .offset-xxl-8 {
            margin-left: 66.66667%;
        }

        .offset-xxl-9 {
            margin-left: 75%;
        }

        .offset-xxl-10 {
            margin-left: 83.33333%;
        }

        .offset-xxl-11 {
            margin-left: 91.66667%;
        }

        .g-xxl-0,
        .gx-xxl-0 {
            --bs-gutter-x: 0;
        }

        .g-xxl-0,
        .gy-xxl-0 {
            --bs-gutter-y: 0;
        }

        .g-xxl-1,
        .gx-xxl-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-xxl-1,
        .gy-xxl-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-xxl-2,
        .gx-xxl-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-xxl-2,
        .gy-xxl-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-xxl-3,
        .gx-xxl-3 {
            --bs-gutter-x: 1rem;
        }

        .g-xxl-3,
        .gy-xxl-3 {
            --bs-gutter-y: 1rem;
        }

        .g-xxl-4,
        .gx-xxl-4 {
            --bs-gutter-x: 1.8rem;
        }

        .g-xxl-4,
        .gy-xxl-4 {
            --bs-gutter-y: 1.8rem;
        }

        .g-xxl-5,
        .gx-xxl-5 {
            --bs-gutter-x: 3rem;
        }

        .g-xxl-5,
        .gy-xxl-5 {
            --bs-gutter-y: 3rem;
        }

        .g-xxl-6,
        .gx-xxl-6 {
            --bs-gutter-x: 4rem;
        }

        .g-xxl-6,
        .gy-xxl-6 {
            --bs-gutter-y: 4rem;
        }

        .g-xxl-7,
        .gx-xxl-7 {
            --bs-gutter-x: 5rem;
        }

        .g-xxl-7,
        .gy-xxl-7 {
            --bs-gutter-y: 5rem;
        }

        .g-xxl-8,
        .gx-xxl-8 {
            --bs-gutter-x: 7.5rem;
        }

        .g-xxl-8,
        .gy-xxl-8 {
            --bs-gutter-y: 7.5rem;
        }

        .g-xxl-9,
        .gx-xxl-9 {
            --bs-gutter-x: 10rem;
        }

        .g-xxl-9,
        .gy-xxl-9 {
            --bs-gutter-y: 10rem;
        }

        .g-xxl-10,
        .gx-xxl-10 {
            --bs-gutter-x: 12.5rem;
        }

        .g-xxl-10,
        .gy-xxl-10 {
            --bs-gutter-y: 12.5rem;
        }

        .g-xxl-11,
        .gx-xxl-11 {
            --bs-gutter-x: 15rem;
        }

        .g-xxl-11,
        .gy-xxl-11 {
            --bs-gutter-y: 15rem;
        }
    }

    .table {
        --bs-table-bg: transparent;
        --bs-table-striped-color: #778295;
        --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
        --bs-table-active-color: #778295;
        --bs-table-active-bg: rgba(0, 0, 0, 0.1);
        --bs-table-hover-color: #778295;
        --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
        width: 100%;
        margin-bottom: 1rem;
        color: #778295;
        vertical-align: top;
        border-color: #DFDBDF;
    }

    .table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .table>tbody {
        vertical-align: inherit;
    }

    .table>thead {
        vertical-align: bottom;
    }

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: currentColor;
    }

    .caption-top {
        caption-side: top;
    }

    .table-sm> :not(caption)>*>* {
        padding: 0.25rem 0.25rem;
    }

    .table-bordered> :not(caption)>* {
        border-width: 1px 0;
    }

    .table-bordered> :not(caption)>*>* {
        border-width: 0 1px;
    }

    .table-borderless> :not(caption)>*>* {
        border-bottom-width: 0;
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
        --bs-table-accent-bg: var(--bs-table-striped-bg);
        color: var(--bs-table-striped-color);
    }

    .table-active {
        --bs-table-accent-bg: var(--bs-table-active-bg);
        color: var(--bs-table-active-color);
    }

    .table-hover>tbody>tr:hover {
        --bs-table-accent-bg: var(--bs-table-hover-bg);
        color: var(--bs-table-hover-color);
    }

    .table-primary {
        --bs-table-bg: #e3e5ff;
        --bs-table-striped-bg: #d8daf2;
        --bs-table-striped-color: #000;
        --bs-table-active-bg: #cccee6;
        --bs-table-active-color: #000;
        --bs-table-hover-bg: #d2d4ec;
        --bs-table-hover-color: #000;
        color: #000;
        border-color: #cccee6;
    }

    .table-secondary {
        --bs-table-bg: #edebee;
        --bs-table-striped-bg: #e1dfe2;
        --bs-table-striped-color: #000;
        --bs-table-active-bg: #d5d4d6;
        --bs-table-active-color: #000;
        --bs-table-hover-bg: #dbd9dc;
        --bs-table-hover-color: #000;
        color: #000;
        border-color: #d5d4d6;
    }

    .table-success {
        --bs-table-bg: #dfedcc;
        --bs-table-striped-bg: #d4e1c2;
        --bs-table-striped-color: #000;
        --bs-table-active-bg: #c9d5b8;
        --bs-table-active-color: #000;
        --bs-table-hover-bg: #cedbbd;
        --bs-table-hover-color: #000;
        color: #000;
        border-color: #c9d5b8;
    }

    .table-info {
        --bs-table-bg: #d8f1fd;
        --bs-table-striped-bg: #cde5f0;
        --bs-table-striped-color: #000;
        --bs-table-active-bg: #c2d9e4;
        --bs-table-active-color: #000;
        --bs-table-hover-bg: #c8dfea;
        --bs-table-hover-color: #000;
        color: #000;
        border-color: #c2d9e4;
    }

    .table-warning {
        --bs-table-bg: #fffcd3;
        --bs-table-striped-bg: #fbf8d1;
        --bs-table-striped-color: #B0A7B2;
        --bs-table-active-bg: #f7f4d0;
        --bs-table-active-color: #B0A7B2;
        --bs-table-hover-bg: #f9f6d1;
        --bs-table-hover-color: #B0A7B2;
        color: #B0A7B2;
        border-color: #f7f4d0;
    }

    .table-danger {
        --bs-table-bg: #ffe3e5;
        --bs-table-striped-bg: #f2d8da;
        --bs-table-striped-color: #000;
        --bs-table-active-bg: #e6ccce;
        --bs-table-active-color: #000;
        --bs-table-hover-bg: #ecd2d4;
        --bs-table-hover-color: #000;
        color: #000;
        border-color: #e6ccce;
    }

    .table-light {
        --bs-table-bg: #F9FAFD;
        --bs-table-striped-bg: #f5f6f9;
        --bs-table-striped-color: #B0A7B2;
        --bs-table-active-bg: #f2f2f6;
        --bs-table-active-color: #B0A7B2;
        --bs-table-hover-bg: #f4f4f7;
        --bs-table-hover-color: #B0A7B2;
        color: #B0A7B2;
        border-color: #f2f2f6;
    }

    .table-dark {
        --bs-table-bg: #44224B;
        --bs-table-striped-bg: #4d2d54;
        --bs-table-striped-color: #fff;
        --bs-table-active-bg: #57385d;
        --bs-table-active-color: #fff;
        --bs-table-hover-bg: #523359;
        --bs-table-hover-color: #fff;
        color: #fff;
        border-color: #57385d;
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    @media (max-width: 1539.98px) {
        .table-responsive-xxl {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }

    .form-label {
        margin-bottom: 0.5rem;
    }

    .col-form-label {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5;
    }

    .col-form-label-lg {
        padding-top: calc(0.7rem + 1px);
        padding-bottom: calc(0.7rem + 1px);
        font-size: 1rem;
    }

    .col-form-label-sm {
        padding-top: calc(0.1rem + 1px);
        padding-bottom: calc(0.1rem + 1px);
        font-size: 0.875rem;
    }

    .form-text {
        margin-top: 0.25rem;
        font-size: 75%;
        color: #CCC6CD;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem 1.8rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #778295;
        background-color: #f1f2ff;
        background-clip: padding-box;
        border: 1px solid #D5D1D6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .form-control[type="file"] {
        overflow: hidden;
    }

    .form-control[type="file"]:not(:disabled):not([readonly]) {
        cursor: pointer;
    }

    .form-control:focus {
        color: #778295;
        background-color: #f1f2ff;
        border-color: #b8beff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .form-control::-webkit-date-and-time-value {
        height: 1.5em;
    }

    .form-control::-webkit-input-placeholder {
        color: #aab0ff !important;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #aab0ff !important;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #aab0ff !important;
        opacity: 1;
    }

    .form-control::-ms-input-placeholder {
        color: #aab0ff !important;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #aab0ff !important;
        opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #E8E5E9;
        opacity: 1;
    }

    .form-control::file-selector-button {
        padding: 0.5rem 1.8rem;
        margin: -0.5rem -1.8rem;
        -webkit-margin-end: 1.8rem;
        margin-inline-end: 1.8rem;
        color: #778295;
        background-color: #E8E5E9;
        pointer-events: none;
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        border-inline-end-width: 1px;
        border-radius: 0;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control::file-selector-button {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
        background-color: #dcdadd;
    }

    .form-control::-webkit-file-upload-button {
        padding: 0.5rem 1.8rem;
        margin: -0.5rem -1.8rem;
        -webkit-margin-end: 1.8rem;
        margin-inline-end: 1.8rem;
        color: #778295;
        background-color: #E8E5E9;
        pointer-events: none;
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        border-inline-end-width: 1px;
        border-radius: 0;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-control::-webkit-file-upload-button {
            -webkit-transition: none;
            transition: none;
        }
    }

    .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
        background-color: #dcdadd;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding: 0.5rem 0;
        margin-bottom: 0;
        line-height: 1.5;
        color: #778295;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        min-height: calc(1.5em + 0.2rem + 2px);
        padding: 0.1rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.625rem;
    }

    .form-control-sm::file-selector-button {
        padding: 0.1rem 0.5rem;
        margin: -0.1rem -0.5rem;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
    }

    .form-control-sm::-webkit-file-upload-button {
        padding: 0.1rem 0.5rem;
        margin: -0.1rem -0.5rem;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
    }

    .form-control-lg {
        min-height: calc(1.5em + 1.4rem + 2px);
        padding: 0.7rem 1.8rem;
        font-size: 1rem;
        border-radius: 1.25rem;
    }

    .form-control-lg::file-selector-button {
        padding: 0.7rem 1.8rem;
        margin: -0.7rem -1.8rem;
        -webkit-margin-end: 1.8rem;
        margin-inline-end: 1.8rem;
    }

    .form-control-lg::-webkit-file-upload-button {
        padding: 0.7rem 1.8rem;
        margin: -0.7rem -1.8rem;
        -webkit-margin-end: 1.8rem;
        margin-inline-end: 1.8rem;
    }

    textarea.form-control {
        min-height: calc(1.5em + 1rem + 2px);
    }

    textarea.form-control-sm {
        min-height: calc(1.5em + 0.2rem + 2px);
    }

    textarea.form-control-lg {
        min-height: calc(1.5em + 1.4rem + 2px);
    }

    .form-control-color {
        max-width: 3rem;
        height: auto;
        padding: 0.5rem;
    }

    .form-control-color:not(:disabled):not([readonly]) {
        cursor: pointer;
    }

    .form-control-color::-moz-color-swatch {
        height: 1.5em;
        border-radius: 0.25rem;
    }

    .form-control-color::-webkit-color-swatch {
        height: 1.5em;
        border-radius: 0.25rem;
    }

    .form-select {
        display: block;
        width: 100%;
        padding: 0.5rem 5.4rem 0.5rem 1.8rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #778295;
        background-color: #f1f2ff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23B0A7B2' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1.8rem center;
        background-size: 16px 12px;
        border: 1px solid #D5D1D6;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-select:focus {
        border-color: #b8beff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .form-select[multiple],
    .form-select[size]:not([size="1"]) {
        padding-right: 1.8rem;
        background-image: none;
    }

    .form-select:disabled {
        background-color: #E8E5E9;
    }

    .form-select:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #778295;
    }

    .form-select-sm {
        padding-top: 0.1rem;
        padding-bottom: 0.1rem;
        padding-left: 0.5rem;
        font-size: 0.875rem;
    }

    .form-select-lg {
        padding-top: 0.7rem;
        padding-bottom: 0.7rem;
        padding-left: 1.8rem;
        font-size: 1rem;
    }

    .form-check {
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5em;
        margin-bottom: 0.125rem;
    }

    .form-check .form-check-input {
        float: left;
        margin-left: -1.5em;
    }

    .form-check-input {
        width: 1em;
        height: 1em;
        margin-top: 0.25em;
        vertical-align: top;
        background-color: #f1f2ff;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid rgba(0, 0, 0, 0.25);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-check-input[type="checkbox"] {
        border-radius: 0.25em;
    }

    .form-check-input[type="radio"] {
        border-radius: 50%;
    }

    .form-check-input:active {
        -webkit-filter: brightness(90%);
        filter: brightness(90%);
    }

    .form-check-input:focus {
        border-color: #b8beff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .form-check-input:checked {
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .form-check-input:checked[type="checkbox"] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
    }

    .form-check-input:checked[type="radio"] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
    }

    .form-check-input[type="checkbox"]:indeterminate {
        background-color: #717CFF;
        border-color: #717CFF;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
    }

    .form-check-input:disabled {
        pointer-events: none;
        -webkit-filter: none;
        filter: none;
        opacity: 0.5;
    }

    .form-check-input[disabled]~.form-check-label,
    .form-check-input:disabled~.form-check-label {
        opacity: 0.5;
    }

    .form-switch {
        padding-left: 2.5em;
    }

    .form-switch .form-check-input {
        width: 2em;
        margin-left: -2.5em;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
        background-position: left center;
        border-radius: 2em;
        -webkit-transition: background-position 0.15s ease-in-out;
        -o-transition: background-position 0.15s ease-in-out;
        transition: background-position 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-switch .form-check-input {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .form-switch .form-check-input:focus {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23b8beff'/%3e%3c/svg%3e");
    }

    .form-switch .form-check-input:checked {
        background-position: right center;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
    }

    .form-check-inline {
        display: inline-block;
        margin-right: 1rem;
    }

    .btn-check {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .btn-check[disabled]+.btn,
    .btn-check:disabled+.btn {
        pointer-events: none;
        -webkit-filter: none;
        filter: none;
        opacity: 0.65;
    }

    .form-range {
        width: 100%;
        height: 1.5rem;
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-range:focus {
        outline: 0;
    }

    .form-range:focus::-webkit-slider-thumb {
        -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .form-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .form-range::-moz-focus-outer {
        border: 0;
    }

    .form-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #717CFF;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-range::-webkit-slider-thumb {
            -webkit-transition: none;
            transition: none;
        }
    }

    .form-range::-webkit-slider-thumb:active {
        background-color: #d4d8ff;
    }

    .form-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #DFDBDF;
        border-color: transparent;
        border-radius: 1rem;
    }

    .form-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #717CFF;
        border: 0;
        border-radius: 1rem;
        -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -moz-appearance: none;
        appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-range::-moz-range-thumb {
            -moz-transition: none;
            transition: none;
        }
    }

    .form-range::-moz-range-thumb:active {
        background-color: #d4d8ff;
    }

    .form-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #DFDBDF;
        border-color: transparent;
        border-radius: 1rem;
    }

    .form-range:disabled {
        pointer-events: none;
    }

    .form-range:disabled::-webkit-slider-thumb {
        background-color: #CCC6CD;
    }

    .form-range:disabled::-moz-range-thumb {
        background-color: #CCC6CD;
    }

    .form-floating {
        position: relative;
    }

    .form-floating>.form-control,
    .form-floating>.form-select {
        height: calc(3.5rem + 2px);
        padding: 1rem 1.8rem;
    }

    .form-floating>label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem 1.8rem;
        pointer-events: none;
        border: 1px solid transparent;
        -webkit-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
        transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
        -o-transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .form-floating>label {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .form-floating>.form-control::-webkit-input-placeholder {
        color: transparent;
    }

    .form-floating>.form-control::-moz-placeholder {
        color: transparent;
    }

    .form-floating>.form-control:-ms-input-placeholder {
        color: transparent;
    }

    .form-floating>.form-control::-ms-input-placeholder {
        color: transparent;
    }

    .form-floating>.form-control::placeholder {
        color: transparent;
    }

    .form-floating>.form-control:not(:-moz-placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-floating>.form-control:not(:-ms-input-placeholder) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-floating>.form-control:focus,
    .form-floating>.form-control:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-floating>.form-control:-webkit-autofill {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-floating>.form-select {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }

    .form-floating>.form-control:not(:-ms-input-placeholder)~label {
        opacity: 0.65;
        -ms-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }

    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .form-floating>.form-select~label {
        opacity: 0.65;
        -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        -ms-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }

    .form-floating>.form-control:-webkit-autofill~label {
        opacity: 0.65;
        -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    .input-group>.form-control,
    .input-group>.form-select {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        min-width: 0;
    }

    .input-group>.form-control:focus,
    .input-group>.form-select:focus {
        z-index: 3;
    }

    .input-group .btn {
        position: relative;
        z-index: 2;
    }

    .input-group .btn:focus {
        z-index: 3;
    }

    .input-group-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.5rem 1.8rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #778295;
        text-align: center;
        white-space: nowrap;
        background-color: #E8E5E9;
        border: 1px solid #D5D1D6;
        border-radius: 0.25rem;
    }

    .input-group-lg>.form-control,
    .input-group-lg>.form-select,
    .input-group-lg>.input-group-text,
    .input-group-lg>.btn {
        padding: 0.7rem 1.8rem;
        font-size: 1rem;
        border-radius: 1.25rem;
    }

    .input-group-sm>.form-control,
    .input-group-sm>.form-select,
    .input-group-sm>.input-group-text,
    .input-group-sm>.btn {
        padding: 0.1rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.625rem;
    }

    .input-group-lg>.form-select,
    .input-group-sm>.form-select {
        padding-right: 7.2rem;
    }

    .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
    .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group.has-validation> :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
    .input-group.has-validation>.dropdown-toggle:nth-last-child(n + 4) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        margin-left: -1px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 75%;
        color: #5fa500;
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        color: #fff;
        background-color: rgba(95, 165, 0, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip,
    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip {
        display: block;
    }

    .was-validated .form-control:valid,
    .form-control.is-valid {
        border-color: #5fa500;
        padding-right: calc(1.5em + 1rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%235fa500' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.25rem) center;
        background-size: calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
    }

    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus {
        border-color: #5fa500;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
        padding-right: calc(1.5em + 1rem);
        background-position: top calc(0.375em + 0.25rem) right calc(0.375em + 0.25rem);
    }

    .was-validated .form-select:valid,
    .form-select.is-valid {
        border-color: #5fa500;
        padding-right: 9.9rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23B0A7B2' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%235fa500' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-position: right 1.8rem center, center right 5.4rem;
        background-size: 16px 12px, calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
    }

    .was-validated .form-select:valid:focus,
    .form-select.is-valid:focus {
        border-color: #5fa500;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
    }

    .was-validated .form-check-input:valid,
    .form-check-input.is-valid {
        border-color: #5fa500;
    }

    .was-validated .form-check-input:valid:checked,
    .form-check-input.is-valid:checked {
        background-color: #5fa500;
    }

    .was-validated .form-check-input:valid:focus,
    .form-check-input.is-valid:focus {
        -webkit-box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(95, 165, 0, 0.25);
    }

    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
        color: #5fa500;
    }

    .form-check-inline .form-check-input~.valid-feedback {
        margin-left: .5em;
    }

    .was-validated .input-group .form-control:valid,
    .input-group .form-control.is-valid,
    .was-validated .input-group .form-select:valid,
    .input-group .form-select.is-valid {
        z-index: 3;
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 75%;
        color: #ff717c;
    }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        color: #fff;
        background-color: rgba(255, 113, 124, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated :invalid~.invalid-feedback,
    .was-validated :invalid~.invalid-tooltip,
    .is-invalid~.invalid-feedback,
    .is-invalid~.invalid-tooltip {
        display: block;
    }

    .was-validated .form-control:invalid,
    .form-control.is-invalid {
        border-color: #ff717c;
        padding-right: calc(1.5em + 1rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff717c'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff717c' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.25rem) center;
        background-size: calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {
        border-color: #ff717c;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 1rem);
        background-position: top calc(0.375em + 0.25rem) right calc(0.375em + 0.25rem);
    }

    .was-validated .form-select:invalid,
    .form-select.is-invalid {
        border-color: #ff717c;
        padding-right: 9.9rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23B0A7B2' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23ff717c'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff717c' stroke='none'/%3e%3c/svg%3e");
        background-position: right 1.8rem center, center right 5.4rem;
        background-size: 16px 12px, calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
    }

    .was-validated .form-select:invalid:focus,
    .form-select.is-invalid:focus {
        border-color: #ff717c;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
    }

    .was-validated .form-check-input:invalid,
    .form-check-input.is-invalid {
        border-color: #ff717c;
    }

    .was-validated .form-check-input:invalid:checked,
    .form-check-input.is-invalid:checked {
        background-color: #ff717c;
    }

    .was-validated .form-check-input:invalid:focus,
    .form-check-input.is-invalid:focus {
        -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(255, 113, 124, 0.25);
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
        color: #ff717c;
    }

    .form-check-inline .form-check-input~.invalid-feedback {
        margin-left: .5em;
    }

    .was-validated .input-group .form-control:invalid,
    .input-group .form-control.is-invalid,
    .was-validated .input-group .form-select:invalid,
    .input-group .form-select.is-invalid {
        z-index: 3;
    }

    .btn {
        display: inline-block;
        font-weight: 500;
        line-height: 1.5;
        color: #778295;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.5rem 1.8rem;
        font-size: 1rem;
        border-radius: 0.313rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .btn:hover {
        color: #778295;
        text-decoration: none;
    }

    .btn-check:focus+.btn,
    .btn:focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .btn:disabled,
    .btn.disabled,
    fieldset:disabled .btn {
        pointer-events: none;
        opacity: 0.65;
    }

    .btn-primary {
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #6069d9;
        border-color: #5a63cc;
    }

    .btn-check:focus+.btn-primary,
    .btn-primary:focus {
        color: #fff;
        background-color: #6069d9;
        border-color: #5a63cc;
        -webkit-box-shadow: 0 0 0 0 rgba(134, 144, 255, 0.5);
        box-shadow: 0 0 0 0 rgba(134, 144, 255, 0.5);
    }

    .btn-check:checked+.btn-primary,
    .btn-check:active+.btn-primary,
    .btn-primary:active,
    .btn-primary.active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #5a63cc;
        border-color: #555dbf;
    }

    .btn-check:checked+.btn-primary:focus,
    .btn-check:active+.btn-primary:focus,
    .btn-primary:active:focus,
    .btn-primary.active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(134, 144, 255, 0.5);
        box-shadow: 0 0 0 0 rgba(134, 144, 255, 0.5);
    }

    .btn-primary:disabled,
    .btn-primary.disabled {
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .btn-secondary {
        color: #fff;
        background-color: #A79CA8;
        border-color: #A79CA8;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #8e858f;
        border-color: #867d86;
    }

    .btn-check:focus+.btn-secondary,
    .btn-secondary:focus {
        color: #fff;
        background-color: #8e858f;
        border-color: #867d86;
        -webkit-box-shadow: 0 0 0 0 rgba(180, 171, 181, 0.5);
        box-shadow: 0 0 0 0 rgba(180, 171, 181, 0.5);
    }

    .btn-check:checked+.btn-secondary,
    .btn-check:active+.btn-secondary,
    .btn-secondary:active,
    .btn-secondary.active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #867d86;
        border-color: #7d757e;
    }

    .btn-check:checked+.btn-secondary:focus,
    .btn-check:active+.btn-secondary:focus,
    .btn-secondary:active:focus,
    .btn-secondary.active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(180, 171, 181, 0.5);
        box-shadow: 0 0 0 0 rgba(180, 171, 181, 0.5);
    }

    .btn-secondary:disabled,
    .btn-secondary.disabled {
        color: #fff;
        background-color: #A79CA8;
        border-color: #A79CA8;
    }

    .btn-success {
        color: #fff;
        background-color: #5fa500;
        border-color: #5fa500;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #518c00;
        border-color: #4c8400;
    }

    .btn-check:focus+.btn-success,
    .btn-success:focus {
        color: #fff;
        background-color: #518c00;
        border-color: #4c8400;
        -webkit-box-shadow: 0 0 0 0 rgba(119, 179, 38, 0.5);
        box-shadow: 0 0 0 0 rgba(119, 179, 38, 0.5);
    }

    .btn-check:checked+.btn-success,
    .btn-check:active+.btn-success,
    .btn-success:active,
    .btn-success.active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #4c8400;
        border-color: #477c00;
    }

    .btn-check:checked+.btn-success:focus,
    .btn-check:active+.btn-success:focus,
    .btn-success:active:focus,
    .btn-success.active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(119, 179, 38, 0.5);
        box-shadow: 0 0 0 0 rgba(119, 179, 38, 0.5);
    }

    .btn-success:disabled,
    .btn-success.disabled {
        color: #fff;
        background-color: #5fa500;
        border-color: #5fa500;
    }

    .btn-info {
        color: #fff;
        background-color: #3EB8F4;
        border-color: #3EB8F4;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #359ccf;
        border-color: #3293c3;
    }

    .btn-check:focus+.btn-info,
    .btn-info:focus {
        color: #fff;
        background-color: #359ccf;
        border-color: #3293c3;
        -webkit-box-shadow: 0 0 0 0 rgba(91, 195, 246, 0.5);
        box-shadow: 0 0 0 0 rgba(91, 195, 246, 0.5);
    }

    .btn-check:checked+.btn-info,
    .btn-check:active+.btn-info,
    .btn-info:active,
    .btn-info.active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #3293c3;
        border-color: #2f8ab7;
    }

    .btn-check:checked+.btn-info:focus,
    .btn-check:active+.btn-info:focus,
    .btn-info:active:focus,
    .btn-info.active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(91, 195, 246, 0.5);
        box-shadow: 0 0 0 0 rgba(91, 195, 246, 0.5);
    }

    .btn-info:disabled,
    .btn-info.disabled {
        color: #fff;
        background-color: #3EB8F4;
        border-color: #3EB8F4;
    }

    .btn-warning {
        color: #000;
        background-color: #ffee25;
        border-color: #ffee25;
    }

    .btn-warning:hover {
        color: #000;
        background-color: #fff146;
        border-color: #fff03b;
    }

    .btn-check:focus+.btn-warning,
    .btn-warning:focus {
        color: #000;
        background-color: #fff146;
        border-color: #fff03b;
        -webkit-box-shadow: 0 0 0 0 rgba(217, 202, 31, 0.5);
        box-shadow: 0 0 0 0 rgba(217, 202, 31, 0.5);
    }

    .btn-check:checked+.btn-warning,
    .btn-check:active+.btn-warning,
    .btn-warning:active,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #000;
        background-color: #fff151;
        border-color: #fff03b;
    }

    .btn-check:checked+.btn-warning:focus,
    .btn-check:active+.btn-warning:focus,
    .btn-warning:active:focus,
    .btn-warning.active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(217, 202, 31, 0.5);
        box-shadow: 0 0 0 0 rgba(217, 202, 31, 0.5);
    }

    .btn-warning:disabled,
    .btn-warning.disabled {
        color: #000;
        background-color: #ffee25;
        border-color: #ffee25;
    }

    .btn-danger {
        color: #fff;
        background-color: #ff717c;
        border-color: #ff717c;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #d96069;
        border-color: #cc5a63;
    }

    .btn-check:focus+.btn-danger,
    .btn-danger:focus {
        color: #fff;
        background-color: #d96069;
        border-color: #cc5a63;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 134, 144, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 134, 144, 0.5);
    }

    .btn-check:checked+.btn-danger,
    .btn-check:active+.btn-danger,
    .btn-danger:active,
    .btn-danger.active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #cc5a63;
        border-color: #bf555d;
    }

    .btn-check:checked+.btn-danger:focus,
    .btn-check:active+.btn-danger:focus,
    .btn-danger:active:focus,
    .btn-danger.active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 134, 144, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 134, 144, 0.5);
    }

    .btn-danger:disabled,
    .btn-danger.disabled {
        color: #fff;
        background-color: #ff717c;
        border-color: #ff717c;
    }

    .btn-light {
        color: #B0A7B2;
        background-color: #F9FAFD;
        border-color: #F9FAFD;
    }

    .btn-light:hover {
        color: #B0A7B2;
        background-color: #fafbfd;
        border-color: #fafbfd;
    }

    .btn-check:focus+.btn-light,
    .btn-light:focus {
        color: #B0A7B2;
        background-color: #fafbfd;
        border-color: #fafbfd;
        -webkit-box-shadow: 0 0 0 0 rgba(238, 238, 242, 0.5);
        box-shadow: 0 0 0 0 rgba(238, 238, 242, 0.5);
    }

    .btn-check:checked+.btn-light,
    .btn-check:active+.btn-light,
    .btn-light:active,
    .btn-light.active,
    .show>.btn-light.dropdown-toggle {
        color: #B0A7B2;
        background-color: #fafbfd;
        border-color: #fafbfd;
    }

    .btn-check:checked+.btn-light:focus,
    .btn-check:active+.btn-light:focus,
    .btn-light:active:focus,
    .btn-light.active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(238, 238, 242, 0.5);
        box-shadow: 0 0 0 0 rgba(238, 238, 242, 0.5);
    }

    .btn-light:disabled,
    .btn-light.disabled {
        color: #B0A7B2;
        background-color: #F9FAFD;
        border-color: #F9FAFD;
    }

    .btn-dark {
        color: #fff;
        background-color: #44224B;
        border-color: #44224B;
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #3a1d40;
        border-color: #361b3c;
    }

    .btn-check:focus+.btn-dark,
    .btn-dark:focus {
        color: #fff;
        background-color: #3a1d40;
        border-color: #361b3c;
        -webkit-box-shadow: 0 0 0 0 rgba(96, 67, 102, 0.5);
        box-shadow: 0 0 0 0 rgba(96, 67, 102, 0.5);
    }

    .btn-check:checked+.btn-dark,
    .btn-check:active+.btn-dark,
    .btn-dark:active,
    .btn-dark.active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #361b3c;
        border-color: #331a38;
    }

    .btn-check:checked+.btn-dark:focus,
    .btn-check:active+.btn-dark:focus,
    .btn-dark:active:focus,
    .btn-dark.active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(96, 67, 102, 0.5);
        box-shadow: 0 0 0 0 rgba(96, 67, 102, 0.5);
    }

    .btn-dark:disabled,
    .btn-dark.disabled {
        color: #fff;
        background-color: #44224B;
        border-color: #44224B;
    }

    .btn-outline-primary {
        color: #717CFF;
        border-color: #717CFF;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .btn-check:focus+.btn-outline-primary,
    .btn-outline-primary:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(113, 124, 255, 0.5);
        box-shadow: 0 0 0 0 rgba(113, 124, 255, 0.5);
    }

    .btn-check:checked+.btn-outline-primary,
    .btn-check:active+.btn-outline-primary,
    .btn-outline-primary:active,
    .btn-outline-primary.active,
    .btn-outline-primary.dropdown-toggle.show {
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .btn-check:checked+.btn-outline-primary:focus,
    .btn-check:active+.btn-outline-primary:focus,
    .btn-outline-primary:active:focus,
    .btn-outline-primary.active:focus,
    .btn-outline-primary.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(113, 124, 255, 0.5);
        box-shadow: 0 0 0 0 rgba(113, 124, 255, 0.5);
    }

    .btn-outline-primary:disabled,
    .btn-outline-primary.disabled {
        color: #717CFF;
        background-color: transparent;
    }

    .btn-outline-secondary {
        color: #A79CA8;
        border-color: #A79CA8;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #A79CA8;
        border-color: #A79CA8;
    }

    .btn-check:focus+.btn-outline-secondary,
    .btn-outline-secondary:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(167, 156, 168, 0.5);
        box-shadow: 0 0 0 0 rgba(167, 156, 168, 0.5);
    }

    .btn-check:checked+.btn-outline-secondary,
    .btn-check:active+.btn-outline-secondary,
    .btn-outline-secondary:active,
    .btn-outline-secondary.active,
    .btn-outline-secondary.dropdown-toggle.show {
        color: #fff;
        background-color: #A79CA8;
        border-color: #A79CA8;
    }

    .btn-check:checked+.btn-outline-secondary:focus,
    .btn-check:active+.btn-outline-secondary:focus,
    .btn-outline-secondary:active:focus,
    .btn-outline-secondary.active:focus,
    .btn-outline-secondary.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(167, 156, 168, 0.5);
        box-shadow: 0 0 0 0 rgba(167, 156, 168, 0.5);
    }

    .btn-outline-secondary:disabled,
    .btn-outline-secondary.disabled {
        color: #A79CA8;
        background-color: transparent;
    }

    .btn-outline-success {
        color: #5fa500;
        border-color: #5fa500;
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #5fa500;
        border-color: #5fa500;
    }

    .btn-check:focus+.btn-outline-success,
    .btn-outline-success:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(95, 165, 0, 0.5);
        box-shadow: 0 0 0 0 rgba(95, 165, 0, 0.5);
    }

    .btn-check:checked+.btn-outline-success,
    .btn-check:active+.btn-outline-success,
    .btn-outline-success:active,
    .btn-outline-success.active,
    .btn-outline-success.dropdown-toggle.show {
        color: #fff;
        background-color: #5fa500;
        border-color: #5fa500;
    }

    .btn-check:checked+.btn-outline-success:focus,
    .btn-check:active+.btn-outline-success:focus,
    .btn-outline-success:active:focus,
    .btn-outline-success.active:focus,
    .btn-outline-success.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(95, 165, 0, 0.5);
        box-shadow: 0 0 0 0 rgba(95, 165, 0, 0.5);
    }

    .btn-outline-success:disabled,
    .btn-outline-success.disabled {
        color: #5fa500;
        background-color: transparent;
    }

    .btn-outline-info {
        color: #3EB8F4;
        border-color: #3EB8F4;
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #3EB8F4;
        border-color: #3EB8F4;
    }

    .btn-check:focus+.btn-outline-info,
    .btn-outline-info:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(62, 184, 244, 0.5);
        box-shadow: 0 0 0 0 rgba(62, 184, 244, 0.5);
    }

    .btn-check:checked+.btn-outline-info,
    .btn-check:active+.btn-outline-info,
    .btn-outline-info:active,
    .btn-outline-info.active,
    .btn-outline-info.dropdown-toggle.show {
        color: #fff;
        background-color: #3EB8F4;
        border-color: #3EB8F4;
    }

    .btn-check:checked+.btn-outline-info:focus,
    .btn-check:active+.btn-outline-info:focus,
    .btn-outline-info:active:focus,
    .btn-outline-info.active:focus,
    .btn-outline-info.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(62, 184, 244, 0.5);
        box-shadow: 0 0 0 0 rgba(62, 184, 244, 0.5);
    }

    .btn-outline-info:disabled,
    .btn-outline-info.disabled {
        color: #3EB8F4;
        background-color: transparent;
    }

    .btn-outline-warning {
        color: #ffee25;
        border-color: #ffee25;
    }

    .btn-outline-warning:hover {
        color: #000;
        background-color: #ffee25;
        border-color: #ffee25;
    }

    .btn-check:focus+.btn-outline-warning,
    .btn-outline-warning:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 238, 37, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 238, 37, 0.5);
    }

    .btn-check:checked+.btn-outline-warning,
    .btn-check:active+.btn-outline-warning,
    .btn-outline-warning:active,
    .btn-outline-warning.active,
    .btn-outline-warning.dropdown-toggle.show {
        color: #000;
        background-color: #ffee25;
        border-color: #ffee25;
    }

    .btn-check:checked+.btn-outline-warning:focus,
    .btn-check:active+.btn-outline-warning:focus,
    .btn-outline-warning:active:focus,
    .btn-outline-warning.active:focus,
    .btn-outline-warning.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 238, 37, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 238, 37, 0.5);
    }

    .btn-outline-warning:disabled,
    .btn-outline-warning.disabled {
        color: #ffee25;
        background-color: transparent;
    }

    .btn-outline-danger {
        color: #ff717c;
        border-color: #ff717c;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #ff717c;
        border-color: #ff717c;
    }

    .btn-check:focus+.btn-outline-danger,
    .btn-outline-danger:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 113, 124, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 113, 124, 0.5);
    }

    .btn-check:checked+.btn-outline-danger,
    .btn-check:active+.btn-outline-danger,
    .btn-outline-danger:active,
    .btn-outline-danger.active,
    .btn-outline-danger.dropdown-toggle.show {
        color: #fff;
        background-color: #ff717c;
        border-color: #ff717c;
    }

    .btn-check:checked+.btn-outline-danger:focus,
    .btn-check:active+.btn-outline-danger:focus,
    .btn-outline-danger:active:focus,
    .btn-outline-danger.active:focus,
    .btn-outline-danger.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 113, 124, 0.5);
        box-shadow: 0 0 0 0 rgba(255, 113, 124, 0.5);
    }

    .btn-outline-danger:disabled,
    .btn-outline-danger.disabled {
        color: #ff717c;
        background-color: transparent;
    }

    .btn-outline-light {
        color: #F9FAFD;
        border-color: #F9FAFD;
    }

    .btn-outline-light:hover {
        color: #B0A7B2;
        background-color: #F9FAFD;
        border-color: #F9FAFD;
    }

    .btn-check:focus+.btn-outline-light,
    .btn-outline-light:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(249, 250, 253, 0.5);
        box-shadow: 0 0 0 0 rgba(249, 250, 253, 0.5);
    }

    .btn-check:checked+.btn-outline-light,
    .btn-check:active+.btn-outline-light,
    .btn-outline-light:active,
    .btn-outline-light.active,
    .btn-outline-light.dropdown-toggle.show {
        color: #B0A7B2;
        background-color: #F9FAFD;
        border-color: #F9FAFD;
    }

    .btn-check:checked+.btn-outline-light:focus,
    .btn-check:active+.btn-outline-light:focus,
    .btn-outline-light:active:focus,
    .btn-outline-light.active:focus,
    .btn-outline-light.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(249, 250, 253, 0.5);
        box-shadow: 0 0 0 0 rgba(249, 250, 253, 0.5);
    }

    .btn-outline-light:disabled,
    .btn-outline-light.disabled {
        color: #F9FAFD;
        background-color: transparent;
    }

    .btn-outline-dark {
        color: #44224B;
        border-color: #44224B;
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #44224B;
        border-color: #44224B;
    }

    .btn-check:focus+.btn-outline-dark,
    .btn-outline-dark:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(68, 34, 75, 0.5);
        box-shadow: 0 0 0 0 rgba(68, 34, 75, 0.5);
    }

    .btn-check:checked+.btn-outline-dark,
    .btn-check:active+.btn-outline-dark,
    .btn-outline-dark:active,
    .btn-outline-dark.active,
    .btn-outline-dark.dropdown-toggle.show {
        color: #fff;
        background-color: #44224B;
        border-color: #44224B;
    }

    .btn-check:checked+.btn-outline-dark:focus,
    .btn-check:active+.btn-outline-dark:focus,
    .btn-outline-dark:active:focus,
    .btn-outline-dark.active:focus,
    .btn-outline-dark.dropdown-toggle.show:focus {
        -webkit-box-shadow: 0 0 0 0 rgba(68, 34, 75, 0.5);
        box-shadow: 0 0 0 0 rgba(68, 34, 75, 0.5);
    }

    .btn-outline-dark:disabled,
    .btn-outline-dark.disabled {
        color: #44224B;
        background-color: transparent;
    }

    .btn-link {
        font-weight: 400;
        color: #717CFF;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #5a63cc;
        text-decoration: underline;
    }

    .btn-link:focus {
        text-decoration: underline;
    }

    .btn-link:disabled,
    .btn-link.disabled {
        color: #C3BCC4;
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 0.7rem 1.8rem;
        font-size: 1rem;
        border-radius: 0.625rem;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 0.1rem 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.625rem;
    }

    .fade {
        -webkit-transition: opacity 0.15s linear;
        -o-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapsing {
        height: 0;
        overflow: hidden;
        -webkit-transition: height 0.35s ease;
        -o-transition: height 0.35s ease;
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .dropup,
    .dropend,
    .dropdown,
    .dropstart {
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        z-index: 1000;
        display: none;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0;
        font-size: 1rem;
        color: #778295;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
    }

    .dropdown-menu[data-bs-popper] {
        left: 0;
        margin-top: 0.125rem;
    }

    .dropdown-menu-start {
        --bs-position: start;
    }

    .dropdown-menu-start[data-bs-popper] {
        right: auto
            /* rtl:ignore */
        ;
        left: 0
            /* rtl:ignore */
        ;
    }

    .dropdown-menu-end {
        --bs-position: end;
    }

    .dropdown-menu-end[data-bs-popper] {
        right: 0
            /* rtl:ignore */
        ;
        left: auto
            /* rtl:ignore */
        ;
    }

    @media (min-width: 576px) {
        .dropdown-menu-sm-start {
            --bs-position: start;
        }

        .dropdown-menu-sm-start[data-bs-popper] {
            right: auto
                /* rtl:ignore */
            ;
            left: 0
                /* rtl:ignore */
            ;
        }

        .dropdown-menu-sm-end {
            --bs-position: end;
        }

        .dropdown-menu-sm-end[data-bs-popper] {
            right: 0
                /* rtl:ignore */
            ;
            left: auto
                /* rtl:ignore */
            ;
        }
    }

    @media (min-width: 768px) {
        .dropdown-menu-md-start {
            --bs-position: start;
        }

        .dropdown-menu-md-start[data-bs-popper] {
            right: auto
                /* rtl:ignore */
            ;
            left: 0
                /* rtl:ignore */
            ;
        }

        .dropdown-menu-md-end {
            --bs-position: end;
        }

        .dropdown-menu-md-end[data-bs-popper] {
            right: 0
                /* rtl:ignore */
            ;
            left: auto
                /* rtl:ignore */
            ;
        }
    }

    @media (min-width: 992px) {
        .dropdown-menu-lg-start {
            --bs-position: start;
        }

        .dropdown-menu-lg-start[data-bs-popper] {
            right: auto
                /* rtl:ignore */
            ;
            left: 0
                /* rtl:ignore */
            ;
        }

        .dropdown-menu-lg-end {
            --bs-position: end;
        }

        .dropdown-menu-lg-end[data-bs-popper] {
            right: 0
                /* rtl:ignore */
            ;
            left: auto
                /* rtl:ignore */
            ;
        }
    }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-start {
            --bs-position: start;
        }

        .dropdown-menu-xl-start[data-bs-popper] {
            right: auto
                /* rtl:ignore */
            ;
            left: 0
                /* rtl:ignore */
            ;
        }

        .dropdown-menu-xl-end {
            --bs-position: end;
        }

        .dropdown-menu-xl-end[data-bs-popper] {
            right: 0
                /* rtl:ignore */
            ;
            left: auto
                /* rtl:ignore */
            ;
        }
    }

    @media (min-width: 1540px) {
        .dropdown-menu-xxl-start {
            --bs-position: start;
        }

        .dropdown-menu-xxl-start[data-bs-popper] {
            right: auto
                /* rtl:ignore */
            ;
            left: 0
                /* rtl:ignore */
            ;
        }

        .dropdown-menu-xxl-end {
            --bs-position: end;
        }

        .dropdown-menu-xxl-end[data-bs-popper] {
            right: 0
                /* rtl:ignore */
            ;
            left: auto
                /* rtl:ignore */
            ;
        }
    }

    .dropup .dropdown-menu[data-bs-popper] {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropend .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
    }

    .dropend .dropdown-menu[data-bs-popper] {
        margin-top: 0;
        margin-left: 0.125rem;
    }

    .dropend .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    .dropend .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropend .dropdown-toggle::after {
        vertical-align: 0;
    }

    .dropstart .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
    }

    .dropstart .dropdown-menu[data-bs-popper] {
        margin-top: 0;
        margin-right: 0.125rem;
    }

    .dropstart .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropstart .dropdown-toggle::after {
        display: none;
    }

    .dropstart .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent;
    }

    .dropstart .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropstart .dropdown-toggle::before {
        vertical-align: 0;
    }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid rgba(0, 0, 0, 0.15);
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1rem;
        clear: both;
        font-weight: 400;
        color: #A79CA8;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        color: #968c97;
        text-decoration: none;
        background-color: #E8E5E9;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #717CFF;
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #CCC6CD;
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #C3BCC4;
        white-space: nowrap;
    }

    .dropdown-item-text {
        display: block;
        padding: 0.25rem 1rem;
        color: #A79CA8;
    }

    .dropdown-menu-dark {
        color: #DFDBDF;
        background-color: #B0A7B2;
        border-color: rgba(0, 0, 0, 0.15);
    }

    .dropdown-menu-dark .dropdown-item {
        color: #DFDBDF;
    }

    .dropdown-menu-dark .dropdown-item:hover,
    .dropdown-menu-dark .dropdown-item:focus {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.15);
    }

    .dropdown-menu-dark .dropdown-item.active,
    .dropdown-menu-dark .dropdown-item:active {
        color: #fff;
        background-color: #717CFF;
    }

    .dropdown-menu-dark .dropdown-item.disabled,
    .dropdown-menu-dark .dropdown-item:disabled {
        color: #CCC6CD;
    }

    .dropdown-menu-dark .dropdown-divider {
        border-color: rgba(0, 0, 0, 0.15);
    }

    .dropdown-menu-dark .dropdown-item-text {
        color: #DFDBDF;
    }

    .dropdown-menu-dark .dropdown-header {
        color: #CCC6CD;
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    .btn-group>.btn-check:checked+.btn,
    .btn-group>.btn-check:focus+.btn,
    .btn-group>.btn:hover,
    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn-check:checked+.btn,
    .btn-group-vertical>.btn-check:focus+.btn,
    .btn-group-vertical>.btn:hover,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
        z-index: 1;
    }

    .btn-toolbar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .btn-toolbar .input-group {
        width: auto;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child) {
        margin-left: -1px;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn-group:not(:last-child)>.btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group>.btn:nth-child(n + 3),
    .btn-group> :not(.btn-check)+.btn,
    .btn-group>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
        padding-right: 1.35rem;
        padding-left: 1.35rem;
    }

    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropend .dropdown-toggle-split::after {
        margin-left: 0;
    }

    .dropstart .dropdown-toggle-split::before {
        margin-right: 0;
    }

    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
    }

    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
        padding-right: 1.35rem;
        padding-left: 1.35rem;
    }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
        width: 100%;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child) {
        margin-top: -1px;
    }

    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical>.btn-group:not(:last-child)>.btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn~.btn,
    .btn-group-vertical>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .nav-link {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .nav-link:hover,
    .nav-link:focus {
        text-decoration: none;
    }

    .nav-link.disabled {
        color: #C3BCC4;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #DFDBDF;
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        background: none;
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
        border-color: #E8E5E9 #E8E5E9 #DFDBDF;
        isolation: isolate;
    }

    .nav-tabs .nav-link.disabled {
        color: #C3BCC4;
        background-color: transparent;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #B9B1BB;
        background-color: #fff;
        border-color: #DFDBDF #DFDBDF #fff;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
        background: none;
        border: 0;
        border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #717CFF;
    }

    .nav-fill>.nav-link,
    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified>.nav-link,
    .nav-justified .nav-item {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        text-align: center;
    }

    .nav-fill .nav-item .nav-link,
    .nav-justified .nav-item .nav-link {
        width: 100%;
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .tab-content>.active {
        display: block;
    }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding-top: 0.5rem;
        padding-right: 1rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
    }

    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-sm,
    .navbar>.container-md,
    .navbar>.container-lg,
    .navbar>.container-xl,
    .navbar>.container-xxl {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: inherit;
        flex-wrap: inherit;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .navbar-brand {
        padding-top: -0.046rem;
        padding-bottom: -0.046rem;
        margin-right: 1rem;
        font-size: calc(1.2978rem + 0.5736vw);
        white-space: nowrap;
    }

    @media (min-width: 1200px) {
        .navbar-brand {
            font-size: 1.728rem;
        }
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
        position: static;
    }

    .navbar-text {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.2rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.313rem;
        -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
        transition: -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: box-shadow 0.15s ease-in-out;
        transition: box-shadow 0.15s ease-in-out;
        transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .navbar-toggler {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .navbar-toggler:hover {
        text-decoration: none;
    }

    .navbar-toggler:focus {
        text-decoration: none;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0;
        box-shadow: 0 0 0 0;
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
    }

    .navbar-nav-scroll {
        max-height: var(--bs-scroll-height, 75vh);
        overflow-y: auto;
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-sm .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-sm .navbar-toggler {
            display: none;
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-md .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-md .navbar-toggler {
            display: none;
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-lg .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-lg .navbar-toggler {
            display: none;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-xl .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-xl .navbar-toggler {
            display: none;
        }
    }

    @media (min-width: 1540px) {
        .navbar-expand-xxl {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-xxl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-xxl .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand-xxl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand-xxl .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand-xxl .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand-xxl .navbar-toggler {
            display: none;
        }
    }

    .navbar-expand {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand .navbar-nav-scroll {
        overflow: visible;
    }

    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
        display: none;
    }

    .navbar-light .navbar-brand {
        color: #717CFF;
    }

    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus {
        color: #717CFF;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.95);
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.95);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.25);
    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .nav-link.active {
        color: #717CFF;
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.95);
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.95%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M0 6h30M0 14h30M0 22h30'/%3E%3C/svg%3E");
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.95);
    }

    .navbar-light .navbar-text a,
    .navbar-light .navbar-text a:hover,
    .navbar-light .navbar-text a:focus {
        color: #717CFF;
    }

    .navbar-dark .navbar-brand {
        color: #fff;
    }

    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-brand:focus {
        color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.7);
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.9);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #fff;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.7);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.7);
    }

    .navbar-dark .navbar-text a,
    .navbar-dark .navbar-text a:hover,
    .navbar-dark .navbar-text a:focus {
        color: #fff;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 2px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card>.list-group {
        border-top: inherit;
        border-bottom: inherit;
    }

    .card>.list-group:first-child {
        border-top-width: 0;
        border-top-left-radius: calc(0.25rem - 2px);
        border-top-right-radius: calc(0.25rem - 2px);
    }

    .card>.list-group:last-child {
        border-bottom-width: 0;
        border-bottom-right-radius: calc(0.25rem - 2px);
        border-bottom-left-radius: calc(0.25rem - 2px);
    }

    .card>.card-header+.list-group,
    .card>.list-group+.card-footer {
        border-top: 0;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem 1rem;
    }

    .card-title {
        margin-bottom: 0.5rem;
    }

    .card-subtitle {
        margin-top: -0.25rem;
        margin-bottom: 0;
    }

    .card-text:last-child {
        margin-bottom: 0;
    }

    .card-link:hover {
        text-decoration: none;
    }

    .card-link+.card-link {
        margin-left: 1rem;
    }

    .card-header {
        padding: 0.5rem 1rem;
        margin-bottom: 0;
        background-color: #faf9fa;
        border-bottom: 2px solid rgba(0, 0, 0, 0.125);
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 2px) calc(0.25rem - 2px) 0 0;
    }

    .card-footer {
        padding: 0.5rem 1rem;
        background-color: #faf9fa;
        border-top: 2px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 2px) calc(0.25rem - 2px);
    }

    .card-header-tabs {
        margin-right: -0.5rem;
        margin-bottom: -0.5rem;
        margin-left: -0.5rem;
        border-bottom: 0;
    }

    .card-header-pills {
        margin-right: -0.5rem;
        margin-left: -0.5rem;
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        border-radius: calc(0.25rem - 2px);
    }

    .card-img,
    .card-img-top,
    .card-img-bottom {
        width: 100%;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(0.25rem - 2px);
        border-top-right-radius: calc(0.25rem - 2px);
    }

    .card-img,
    .card-img-bottom {
        border-bottom-right-radius: calc(0.25rem - 2px);
        border-bottom-left-radius: calc(0.25rem - 2px);
    }

    .card-group>.card {
        margin-bottom: 1rem;
    }

    @media (min-width: 576px) {
        .card-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .card-group>.card {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            margin-bottom: 0;
        }

        .card-group>.card+.card {
            margin-left: 0;
            border-left: 0;
        }

        .card-group>.card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-top,
        .card-group>.card:not(:last-child) .card-header {
            border-top-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-bottom,
        .card-group>.card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-top,
        .card-group>.card:not(:first-child) .card-header {
            border-top-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-bottom,
        .card-group>.card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0;
        }
    }

    .breadcrumb {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 0 0;
        margin-bottom: 1rem;
        list-style: none;
    }

    .breadcrumb-item+.breadcrumb-item {
        padding-left: 0.5rem;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        float: left;
        padding-right: 0.5rem;
        color: #C3BCC4;
        content: var(--bs-breadcrumb-divider, "/")
            /* rtl: var(--bs-breadcrumb-divider, "/") */
        ;
    }

    .breadcrumb-item.active {
        color: #C3BCC4;
    }

    .pagination {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
    }

    .page-link {
        position: relative;
        display: block;
        color: #717CFF;
        background-color: #fff;
        border: 1px solid #DFDBDF;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .page-link {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .page-link:hover {
        z-index: 2;
        color: #5a63cc;
        text-decoration: none;
        background-color: #E8E5E9;
        border-color: #DFDBDF;
    }

    .page-link:focus {
        z-index: 3;
        color: #5a63cc;
        background-color: #E8E5E9;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
    }

    .page-item:not(:first-child) .page-link {
        margin-left: -1px;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .page-item.disabled .page-link {
        color: #C3BCC4;
        pointer-events: none;
        background-color: #fff;
        border-color: #DFDBDF;
    }

    .page-link {
        padding: 0.375rem 0.75rem;
    }

    .page-item:first-child .page-link {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }

    .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.2rem;
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 1.25rem;
        border-bottom-left-radius: 1.25rem;
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 1.25rem;
        border-bottom-right-radius: 1.25rem;
    }

    .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.625rem;
        border-bottom-left-radius: 0.625rem;
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.625rem;
        border-bottom-right-radius: 0.625rem;
    }

    .badge {
        display: inline-block;
        padding: 0.35em 0.65em;
        font-size: 0.75em;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
    }

    .badge:empty {
        display: none;
    }

    .btn .badge {
        position: relative;
        top: -1px;
    }

    .alert {
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-heading {
        color: inherit;
    }

    .alert-link {
        font-weight: 700;
    }

    .alert-dismissible {
        padding-right: 3rem;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        padding: 1.25rem 1rem;
    }

    .alert-primary {
        color: #444a99;
        background-color: #e3e5ff;
        border-color: #d4d8ff;
    }

    .alert-primary .alert-link {
        color: #363b7a;
    }

    .alert-secondary {
        color: #645e65;
        background-color: #edebee;
        border-color: #e5e1e5;
    }

    .alert-secondary .alert-link {
        color: #504b51;
    }

    .alert-success {
        color: #396300;
        background-color: #dfedcc;
        border-color: #cfe4b3;
    }

    .alert-success .alert-link {
        color: #2e4f00;
    }

    .alert-info {
        color: #256e92;
        background-color: #d8f1fd;
        border-color: #c5eafc;
    }

    .alert-info .alert-link {
        color: #1e5875;
    }

    .alert-warning {
        color: #998f16;
        background-color: #fffcd3;
        border-color: #fffabe;
    }

    .alert-warning .alert-link {
        color: #7a7212;
    }

    .alert-danger {
        color: #99444a;
        background-color: #ffe3e5;
        border-color: #ffd4d8;
    }

    .alert-danger .alert-link {
        color: #7a363b;
    }

    .alert-light {
        color: #959698;
        background-color: #fefeff;
        border-color: #fdfefe;
    }

    .alert-light .alert-link {
        color: #77787a;
    }

    .alert-dark {
        color: #29142d;
        background-color: #dad3db;
        border-color: #c7bdc9;
    }

    .alert-dark .alert-link {
        color: #211024;
    }

    @-webkit-keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem;
        }
    }

    @keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem;
        }
    }

    .progress {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: 0.75rem;
        background-color: #E8E5E9;
        border-radius: 0.25rem;
    }

    .progress-bar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #717CFF;
        -webkit-transition: width 0.6s ease;
        -o-transition: width 0.6s ease;
        transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .progress-bar-striped {
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem;
    }

    .progress-bar-animated {
        -webkit-animation: 1s linear infinite progress-bar-stripes;
        animation: 1s linear infinite progress-bar-stripes;
    }

    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            -webkit-animation: none;
            animation: none;
        }
    }

    .list-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: 0.25rem;
    }

    .list-group-numbered {
        list-style-type: none;
        counter-reset: section;
    }

    .list-group-numbered>li::before {
        content: counters(section, ".") ". ";
        counter-increment: section;
    }

    .list-group-item-action {
        width: 100%;
        color: #B9B1BB;
        text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
        z-index: 1;
        color: #B9B1BB;
        text-decoration: none;
        background-color: #FAFAFA;
    }

    .list-group-item-action:active {
        color: #778295;
        background-color: #E8E5E9;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.5rem 1rem;
        color: #A79CA8;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item:first-child {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    .list-group-item:last-child {
        border-bottom-right-radius: inherit;
        border-bottom-left-radius: inherit;
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #C3BCC4;
        pointer-events: none;
        background-color: #fff;
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #717CFF;
        border-color: #717CFF;
    }

    .list-group-item+.list-group-item {
        border-top-width: 0;
    }

    .list-group-item+.list-group-item.active {
        margin-top: -1px;
        border-top-width: 1px;
    }

    .list-group-horizontal {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .list-group-horizontal>.list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
    }

    .list-group-horizontal>.list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
    }

    .list-group-horizontal>.list-group-item.active {
        margin-top: 0;
    }

    .list-group-horizontal>.list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
    }

    .list-group-horizontal>.list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
    }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal-sm>.list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-sm>.list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal-sm>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal-md>.list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-md>.list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal-md>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal-lg>.list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-lg>.list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal-lg>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal-xl>.list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-xl>.list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal-xl>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    @media (min-width: 1540px) {
        .list-group-horizontal-xxl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal-xxl>.list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal-xxl>.list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal-xxl>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }
    }

    .list-group-flush {
        border-radius: 0;
    }

    .list-group-flush>.list-group-item {
        border-width: 0 0 1px;
    }

    .list-group-flush>.list-group-item:last-child {
        border-bottom-width: 0;
    }

    .list-group-item-primary {
        color: #444a99;
        background-color: #e3e5ff;
    }

    .list-group-item-primary.list-group-item-action:hover,
    .list-group-item-primary.list-group-item-action:focus {
        color: #444a99;
        background-color: #cccee6;
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #444a99;
        border-color: #444a99;
    }

    .list-group-item-secondary {
        color: #645e65;
        background-color: #edebee;
    }

    .list-group-item-secondary.list-group-item-action:hover,
    .list-group-item-secondary.list-group-item-action:focus {
        color: #645e65;
        background-color: #d5d4d6;
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #645e65;
        border-color: #645e65;
    }

    .list-group-item-success {
        color: #396300;
        background-color: #dfedcc;
    }

    .list-group-item-success.list-group-item-action:hover,
    .list-group-item-success.list-group-item-action:focus {
        color: #396300;
        background-color: #c9d5b8;
    }

    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #396300;
        border-color: #396300;
    }

    .list-group-item-info {
        color: #256e92;
        background-color: #d8f1fd;
    }

    .list-group-item-info.list-group-item-action:hover,
    .list-group-item-info.list-group-item-action:focus {
        color: #256e92;
        background-color: #c2d9e4;
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #256e92;
        border-color: #256e92;
    }

    .list-group-item-warning {
        color: #998f16;
        background-color: #fffcd3;
    }

    .list-group-item-warning.list-group-item-action:hover,
    .list-group-item-warning.list-group-item-action:focus {
        color: #998f16;
        background-color: #e6e3be;
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #998f16;
        border-color: #998f16;
    }

    .list-group-item-danger {
        color: #99444a;
        background-color: #ffe3e5;
    }

    .list-group-item-danger.list-group-item-action:hover,
    .list-group-item-danger.list-group-item-action:focus {
        color: #99444a;
        background-color: #e6ccce;
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #99444a;
        border-color: #99444a;
    }

    .list-group-item-light {
        color: #959698;
        background-color: #fefeff;
    }

    .list-group-item-light.list-group-item-action:hover,
    .list-group-item-light.list-group-item-action:focus {
        color: #959698;
        background-color: #e5e5e6;
    }

    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #959698;
        border-color: #959698;
    }

    .list-group-item-dark {
        color: #29142d;
        background-color: #dad3db;
    }

    .list-group-item-dark.list-group-item-action:hover,
    .list-group-item-dark.list-group-item-action:focus {
        color: #29142d;
        background-color: #c4bec5;
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #29142d;
        border-color: #29142d;
    }

    .btn-close {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        width: 1em;
        height: 1em;
        padding: 0.25em 0.25em;
        color: #000;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
        border: 0;
        border-radius: 0.25rem;
        opacity: 0.5;
    }

    .btn-close:hover {
        color: #000;
        text-decoration: none;
        opacity: 0.75;
    }

    .btn-close:focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        box-shadow: 0 0 0 0.25rem rgba(113, 124, 255, 0.25);
        opacity: 1;
    }

    .btn-close:disabled,
    .btn-close.disabled {
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        opacity: 0.25;
    }

    .btn-close-white {
        -webkit-filter: invert(1) grayscale(100%) brightness(200%);
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    .toast {
        width: 350px;
        max-width: 100%;
        font-size: 0.875rem;
        pointer-events: auto;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0.6375rem 0.975rem 0 #F4F8FE, 0 3px 6px 0 #F4F8FE;
        box-shadow: 0 0.6375rem 0.975rem 0 #F4F8FE, 0 3px 6px 0 #F4F8FE;
        border-radius: 0.25rem;
    }

    .toast:not(.showing):not(.show) {
        opacity: 0;
    }

    .toast.hide {
        display: none;
    }

    .toast-container {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 100%;
        pointer-events: none;
    }

    .toast-container> :not(:last-child) {
        margin-bottom: 1rem;
    }

    .toast-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.5rem 0.75rem;
        color: #C3BCC4;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .toast-header .btn-close {
        margin-right: -0.375rem;
        margin-left: 0.75rem;
    }

    .toast-body {
        padding: 0.75rem;
        word-wrap: break-word;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1060;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -50px);
        -ms-transform: translate(0, -50px);
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .modal.modal-static .modal-dialog {
        -webkit-transform: scale(1.02);
        -ms-transform: scale(1.02);
        transform: scale(1.02);
    }

    .modal-dialog-scrollable {
        height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: 100%;
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 1.25rem;
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #DFDBDF;
        border-top-left-radius: calc(1.25rem - 1px);
        border-top-right-radius: calc(1.25rem - 1px);
    }

    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -0.5rem -0.5rem -0.5rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .modal-footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 0.75rem;
        border-top: 1px solid #DFDBDF;
        border-bottom-right-radius: calc(1.25rem - 1px);
        border-bottom-left-radius: calc(1.25rem - 1px);
    }

    .modal-footer>* {
        margin: 0.25rem;
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-dialog-scrollable {
            height: calc(100% - 3.5rem);
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }

        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .modal-fullscreen {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }

    .modal-fullscreen .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }

    .modal-fullscreen .modal-header {
        border-radius: 0;
    }

    .modal-fullscreen .modal-body {
        overflow-y: auto;
    }

    .modal-fullscreen .modal-footer {
        border-radius: 0;
    }

    @media (max-width: 575.98px) {
        .modal-fullscreen-sm-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-sm-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-sm-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 767.98px) {
        .modal-fullscreen-md-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-md-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-md-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 991.98px) {
        .modal-fullscreen-lg-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-lg-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-lg-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .modal-fullscreen-xl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-xl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-xl-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 1539.98px) {
        .modal-fullscreen-xxl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-xxl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-xxl-down .modal-footer {
            border-radius: 0;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1080;
        display: block;
        margin: 0;
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        opacity: 0;
    }

    .tooltip.show {
        opacity: 0.9;
    }

    .tooltip .tooltip-arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem;
    }

    .tooltip .tooltip-arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-tooltip-top,
    .bs-tooltip-auto[data-popper-placement^="top"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-top .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
        bottom: 0;
    }

    .bs-tooltip-top .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
        top: -1px;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000;
    }

    .bs-tooltip-end,
    .bs-tooltip-auto[data-popper-placement^="right"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-end .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-end .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
        right: -1px;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000;
    }

    .bs-tooltip-bottom,
    .bs-tooltip-auto[data-popper-placement^="bottom"] {
        padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
        top: 0;
    }

    .bs-tooltip-bottom .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
        bottom: -1px;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000;
    }

    .bs-tooltip-start,
    .bs-tooltip-auto[data-popper-placement^="left"] {
        padding: 0 0.4rem;
    }

    .bs-tooltip-start .tooltip-arrow,
    .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem;
    }

    .bs-tooltip-start .tooltip-arrow::before,
    .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
        left: -1px;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 0.25rem;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0
            /* rtl:ignore */
        ;
        z-index: 1070;
        display: block;
        max-width: 276px;
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 1.25rem;
    }

    .popover .popover-arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
    }

    .popover .popover-arrow::before,
    .popover .popover-arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
    }

    .bs-popover-top>.popover-arrow,
    .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow {
        bottom: calc(-0.5rem - 1px);
    }

    .bs-popover-top>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #fff;
    }

    .bs-popover-end>.popover-arrow,
    .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow {
        left: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
    }

    .bs-popover-end>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-end>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #fff;
    }

    .bs-popover-bottom>.popover-arrow,
    .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow {
        top: calc(-0.5rem - 1px);
    }

    .bs-popover-bottom>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f0f0f0;
    }

    .bs-popover-start>.popover-arrow,
    .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow {
        right: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
    }

    .bs-popover-start>.popover-arrow::before,
    .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-start>.popover-arrow::after,
    .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #fff;
    }

    .popover-header {
        padding: 0.5rem 1rem;
        margin-bottom: 0;
        font-size: 1rem;
        color: #091E40;
        background-color: #f0f0f0;
        border-bottom: 1px solid #d8d8d8;
        border-top-left-radius: calc(1.25rem - 1px);
        border-top-right-radius: calc(1.25rem - 1px);
    }

    .popover-header:empty {
        display: none;
    }

    .popover-body {
        padding: 1rem 1rem;
        color: #778295;
    }

    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: -webkit-transform 0.6s ease-in-out;
        transition: -webkit-transform 0.6s ease-in-out;
        -o-transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }

    /* rtl:begin:ignore */
    .carousel-item-next:not(.carousel-item-start),
    .active.carousel-item-end {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-end),
    .active.carousel-item-start {
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    /* rtl:end:ignore */
    .carousel-fade .carousel-item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-start,
    .carousel-fade .carousel-item-prev.carousel-item-end {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
        z-index: 0;
        opacity: 0;
        -webkit-transition: opacity 0s 0.6s;
        -o-transition: opacity 0s 0.6s;
        transition: opacity 0s 0.6s;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        padding: 0;
        color: #778295;
        text-align: center;
        background: none;
        border: 0;
        opacity: 0.9;
        -webkit-transition: opacity 0.15s ease;
        -o-transition: opacity 0.15s ease;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-control-prev,
        .carousel-control-next {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #778295;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100% 100%;
    }

    /* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23778295' class='bi bi-arrow-left' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23778295' class='bi bi-arrow-right' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/%3E%3C/svg%3E");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 0;
        margin-right: 15%;
        margin-bottom: 1rem;
        margin-left: 15%;
        list-style: none;
    }

    .carousel-indicators [data-bs-target] {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #717CFF;
        background-clip: padding-box;
        border: 0;
        border-top: 0 solid transparent;
        border-bottom: 0 solid transparent;
        opacity: 0.5;
        -webkit-transition: opacity 0.6s ease;
        -o-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators [data-bs-target] {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 1.25rem;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #fff;
        text-align: center;
    }

    .carousel-dark .carousel-control-prev-icon,
    .carousel-dark .carousel-control-next-icon {
        -webkit-filter: invert(1) grayscale(100);
        filter: invert(1) grayscale(100);
    }

    .carousel-dark .carousel-indicators [data-bs-target] {
        background-color: #000;
    }

    .carousel-dark .carousel-caption {
        color: #000;
    }

    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg)
                /* rtl:ignore */
            ;
            transform: rotate(360deg)
                /* rtl:ignore */
            ;
        }
    }

    @keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg)
                /* rtl:ignore */
            ;
            transform: rotate(360deg)
                /* rtl:ignore */
            ;
        }
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: 0.75s linear infinite spinner-border;
        animation: 0.75s linear infinite spinner-border;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    @-webkit-keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: 0.75s linear infinite spinner-grow;
        animation: 0.75s linear infinite spinner-grow;
    }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
    }

    @media (prefers-reduced-motion: reduce) {

        .spinner-border,
        .spinner-grow {
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
        }
    }

    .accordion-button {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        padding: 1.5rem 2.6rem;
        font-size: 1rem;
        color: #778295;
        text-align: left;
        background-color: #fff;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .accordion-button {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .accordion-button:not(.collapsed) {
        color: #44224B;
        background-color: #fff;
        -webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.125);
        box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.125);
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("");
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .accordion-button::after {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 1.8rem;
        height: 1.8rem;
        margin-left: auto;
        content: "";
        background-image: url("");
        background-repeat: no-repeat;
        background-size: 1.8rem;
        -webkit-transition: -webkit-transform 0.2s ease-in-out;
        transition: -webkit-transform 0.2s ease-in-out;
        -o-transition: transform 0.2s ease-in-out;
        transition: transform 0.2s ease-in-out;
        transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .accordion-button::after {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .accordion-button:hover {
        z-index: 2;
    }

    .accordion-button:focus {
        z-index: 3;
        border-color: #fff;
        outline: 0;
        -webkit-box-shadow: #F9FAFD;
        box-shadow: #F9FAFD;
    }

    .accordion-header {
        margin-bottom: 0;
    }

    .accordion-item {
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.125);
    }

    .accordion-item:first-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .accordion-item:first-of-type .accordion-button {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .accordion-item:last-of-type {
        margin-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion-item:last-of-type .accordion-button.collapsed {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion-item:last-of-type .accordion-collapse {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion-body {
        padding: 1.5rem 2.6rem;
    }

    .accordion-flush .accordion-collapse {
        border-width: 0;
    }

    .accordion-flush .accordion-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
    }

    .accordion-flush .accordion-item:first-child {
        border-top: 0;
    }

    .accordion-flush .accordion-item:last-child {
        border-bottom: 0;
    }

    .accordion-flush .accordion-item .accordion-button {
        border-radius: 0;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    .link-primary {
        color: #717CFF;
    }

    .link-primary:hover,
    .link-primary:focus {
        color: #5a63cc;
    }

    .link-secondary {
        color: #A79CA8;
    }

    .link-secondary:hover,
    .link-secondary:focus {
        color: #867d86;
    }

    .link-success {
        color: #5fa500;
    }

    .link-success:hover,
    .link-success:focus {
        color: #4c8400;
    }

    .link-info {
        color: #3EB8F4;
    }

    .link-info:hover,
    .link-info:focus {
        color: #3293c3;
    }

    .link-warning {
        color: #ffee25;
    }

    .link-warning:hover,
    .link-warning:focus {
        color: #fff151;
    }

    .link-danger {
        color: #ff717c;
    }

    .link-danger:hover,
    .link-danger:focus {
        color: #cc5a63;
    }

    .link-light {
        color: #F9FAFD;
    }

    .link-light:hover,
    .link-light:focus {
        color: #fafbfd;
    }

    .link-dark {
        color: #44224B;
    }

    .link-dark:hover,
    .link-dark:focus {
        color: #361b3c;
    }

    .ratio {
        position: relative;
        width: 100%;
    }

    .ratio::before {
        display: block;
        padding-top: var(--bs-aspect-ratio);
        content: "";
    }

    .ratio>* {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .ratio-1x1 {
        --bs-aspect-ratio: 100%;
    }

    .ratio-4x3 {
        --bs-aspect-ratio: calc(3 / 4 * 100%);
    }

    .ratio-16x9 {
        --bs-aspect-ratio: calc(9 / 16 * 100%);
    }

    .ratio-21x9 {
        --bs-aspect-ratio: calc(9 / 21 * 100%);
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030;
    }

    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }

    @media (min-width: 576px) {
        .sticky-sm-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    @media (min-width: 768px) {
        .sticky-md-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    @media (min-width: 992px) {
        .sticky-lg-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    @media (min-width: 1200px) {
        .sticky-xl-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    @media (min-width: 1540px) {
        .sticky-xxl-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    }

    .visually-hidden,
    .visually-hidden-focusable:not(:focus):not(:focus-within) {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        white-space: nowrap !important;
        border: 0 !important;
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }

    .text-truncate {
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .align-baseline {
        vertical-align: baseline !important;
    }

    .align-top {
        vertical-align: top !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }

    .align-text-bottom {
        vertical-align: text-bottom !important;
    }

    .align-text-top {
        vertical-align: text-top !important;
    }

    .float-start {
        float: left !important;
    }

    .float-end {
        float: right !important;
    }

    .float-none {
        float: none !important;
    }

    .overflow-auto {
        overflow: auto !important;
    }

    .overflow-hidden {
        overflow: hidden !important;
    }

    .overflow-visible {
        overflow: visible !important;
    }

    .overflow-scroll {
        overflow: scroll !important;
    }

    .d-inline {
        display: inline !important;
    }

    .d-inline-block {
        display: inline-block !important;
    }

    .d-block {
        display: block !important;
    }

    .d-grid {
        display: grid !important;
    }

    .d-table {
        display: table !important;
    }

    .d-table-row {
        display: table-row !important;
    }

    .d-table-cell {
        display: table-cell !important;
    }

    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }

    .d-none {
        display: none !important;
    }

    .shadow {
        -webkit-box-shadow: 0 0.6375rem 0.975rem 0 #F4F8FE, 0 3px 6px 0 #F4F8FE !important;
        box-shadow: 0 0.6375rem 0.975rem 0 #F4F8FE, 0 3px 6px 0 #F4F8FE !important;
    }

    .shadow-sm {
        -webkit-box-shadow: 0 1.5625rem 2.8125rem rgba(0, 87, 255, 0.15) !important;
        box-shadow: 0 1.5625rem 2.8125rem rgba(0, 87, 255, 0.15) !important;
    }

    .shadow-lg {
        -webkit-box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.175) !important;
        box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .position-static {
        position: static !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .position-relative {
        position: relative !important;
    }

    .position-fixed {
        position: fixed !important;
    }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important;
    }

    .top-0 {
        top: 0 !important;
    }

    .top-50 {
        top: 50% !important;
    }

    .top-100 {
        top: 100% !important;
    }

    .bottom-0 {
        bottom: 0 !important;
    }

    .bottom-50 {
        bottom: 50% !important;
    }

    .bottom-100 {
        bottom: 100% !important;
    }

    .start-0 {
        left: 0 !important;
    }

    .start-50 {
        left: 50% !important;
    }

    .start-100 {
        left: 100% !important;
    }

    .end-0 {
        right: 0 !important;
    }

    .end-50 {
        right: 50% !important;
    }

    .end-100 {
        right: 100% !important;
    }

    .translate-middle {
        -webkit-transform: translateX(-50%) translateY(-50%) !important;
        -ms-transform: translateX(-50%) translateY(-50%) !important;
        transform: translateX(-50%) translateY(-50%) !important;
    }

    .translate-middle-x {
        -webkit-transform: translateX(-50%) !important;
        -ms-transform: translateX(-50%) !important;
        transform: translateX(-50%) !important;
    }

    .translate-middle-y {
        -webkit-transform: translateY(-50%) !important;
        -ms-transform: translateY(-50%) !important;
        transform: translateY(-50%) !important;
    }

    .border {
        border: 1px solid #DFDBDF !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .border-top {
        border-top: 1px solid #DFDBDF !important;
    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-end {
        border-right: 1px solid #DFDBDF !important;
    }

    .border-end-0 {
        border-right: 0 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #DFDBDF !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-start {
        border-left: 1px solid #DFDBDF !important;
    }

    .border-start-0 {
        border-left: 0 !important;
    }

    .border-facebook {
        border-color: #3c5a99 !important;
    }

    .border-google-plus {
        border-color: #dd4b39 !important;
    }

    .border-twitter {
        border-color: #1da1f2 !important;
    }

    .border-linkedin {
        border-color: #0077b5 !important;
    }

    .border-youtube {
        border-color: #ff0000 !important;
    }

    .border-github {
        border-color: #333 !important;
    }

    .border-black {
        border-color: #000 !important;
    }

    .border-100 {
        border-color: #FAFAFA !important;
    }

    .border-200 {
        border-color: #E8E5E9 !important;
    }

    .border-300 {
        border-color: #DFDBDF !important;
    }

    .border-400 {
        border-color: #D5D1D6 !important;
    }

    .border-500 {
        border-color: #CCC6CD !important;
    }

    .border-600 {
        border-color: #C3BCC4 !important;
    }

    .border-700 {
        border-color: #B9B1BB !important;
    }

    .border-800 {
        border-color: #B0A7B2 !important;
    }

    .border-900 {
        border-color: #A79CA8 !important;
    }

    .border-1000 {
        border-color: #778295 !important;
    }

    .border-1100 {
        border-color: #44224B !important;
    }

    .border-1200 {
        border-color: #091E40 !important;
    }

    .border-white {
        border-color: #fff !important;
    }

    .border-primary {
        border-color: #717CFF !important;
    }

    .border-secondary {
        border-color: #A79CA8 !important;
    }

    .border-success {
        border-color: #5fa500 !important;
    }

    .border-info {
        border-color: #3EB8F4 !important;
    }

    .border-warning {
        border-color: #ffee25 !important;
    }

    .border-danger {
        border-color: #ff717c !important;
    }

    .border-light {
        border-color: #F9FAFD !important;
    }

    .border-dark {
        border-color: #44224B !important;
    }

    .border-1 {
        border-width: 1px !important;
    }

    .border-2 {
        border-width: 2px !important;
    }

    .border-3 {
        border-width: 3px !important;
    }

    .border-4 {
        border-width: 4px !important;
    }

    .border-5 {
        border-width: 5px !important;
    }

    .w-25 {
        width: 25% !important;
    }

    .w-50 {
        width: 50% !important;
    }

    .w-75 {
        width: 75% !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .w-auto {
        width: auto !important;
    }

    .mw-100 {
        max-width: 100% !important;
    }

    .vw-25 {
        width: 25vw !important;
    }

    .vw-50 {
        width: 50vw !important;
    }

    .vw-75 {
        width: 75vw !important;
    }

    .vw-100 {
        width: 100vw !important;
    }

    .min-vw-100 {
        min-width: 100vw !important;
    }

    .h-25 {
        height: 25% !important;
    }

    .h-50 {
        height: 50% !important;
    }

    .h-75 {
        height: 75% !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .h-auto {
        height: auto !important;
    }

    .mh-100 {
        max-height: 100% !important;
    }

    .vh-25 {
        height: 25vh !important;
    }

    .vh-50 {
        height: 50vh !important;
    }

    .vh-75 {
        height: 75vh !important;
    }

    .vh-100 {
        height: 100vh !important;
    }

    .min-vh-25 {
        min-height: 25vh !important;
    }

    .min-vh-50 {
        min-height: 50vh !important;
    }

    .min-vh-75 {
        min-height: 75vh !important;
    }

    .min-vh-100 {
        min-height: 100vh !important;
    }

    .flex-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .gap-0 {
        gap: 0 !important;
    }

    .gap-1 {
        gap: 0.25rem !important;
    }

    .gap-2 {
        gap: 0.5rem !important;
    }

    .gap-3 {
        gap: 1rem !important;
    }

    .gap-4 {
        gap: 1.8rem !important;
    }

    .gap-5 {
        gap: 3rem !important;
    }

    .gap-6 {
        gap: 4rem !important;
    }

    .gap-7 {
        gap: 5rem !important;
    }

    .gap-8 {
        gap: 7.5rem !important;
    }

    .gap-9 {
        gap: 10rem !important;
    }

    .gap-10 {
        gap: 12.5rem !important;
    }

    .gap-11 {
        gap: 15rem !important;
    }

    .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .justify-content-evenly {
        -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
    }

    .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }

    .order-first {
        -webkit-box-ordinal-group: 0 !important;
        -ms-flex-order: -1 !important;
        order: -1 !important;
    }

    .order-0 {
        -webkit-box-ordinal-group: 1 !important;
        -ms-flex-order: 0 !important;
        order: 0 !important;
    }

    .order-1 {
        -webkit-box-ordinal-group: 2 !important;
        -ms-flex-order: 1 !important;
        order: 1 !important;
    }

    .order-2 {
        -webkit-box-ordinal-group: 3 !important;
        -ms-flex-order: 2 !important;
        order: 2 !important;
    }

    .order-3 {
        -webkit-box-ordinal-group: 4 !important;
        -ms-flex-order: 3 !important;
        order: 3 !important;
    }

    .order-4 {
        -webkit-box-ordinal-group: 5 !important;
        -ms-flex-order: 4 !important;
        order: 4 !important;
    }

    .order-5 {
        -webkit-box-ordinal-group: 6 !important;
        -ms-flex-order: 5 !important;
        order: 5 !important;
    }

    .order-last {
        -webkit-box-ordinal-group: 7 !important;
        -ms-flex-order: 6 !important;
        order: 6 !important;
    }

    .m-0 {
        margin: 0 !important;
    }

    .m-1 {
        margin: 0.25rem !important;
    }

    .m-2 {
        margin: 0.5rem !important;
    }

    .m-3 {
        margin: 1rem !important;
    }

    .m-4 {
        margin: 1.8rem !important;
    }

    .m-5 {
        margin: 3rem !important;
    }

    .m-6 {
        margin: 4rem !important;
    }

    .m-7 {
        margin: 5rem !important;
    }

    .m-8 {
        margin: 7.5rem !important;
    }

    .m-9 {
        margin: 10rem !important;
    }

    .m-10 {
        margin: 12.5rem !important;
    }

    .m-11 {
        margin: 15rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    .mx-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }

    .mx-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
    }

    .mx-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
    }

    .mx-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
    }

    .mx-4 {
        margin-right: 1.8rem !important;
        margin-left: 1.8rem !important;
    }

    .mx-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important;
    }

    .mx-6 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
    }

    .mx-7 {
        margin-right: 5rem !important;
        margin-left: 5rem !important;
    }

    .mx-8 {
        margin-right: 7.5rem !important;
        margin-left: 7.5rem !important;
    }

    .mx-9 {
        margin-right: 10rem !important;
        margin-left: 10rem !important;
    }

    .mx-10 {
        margin-right: 12.5rem !important;
        margin-left: 12.5rem !important;
    }

    .mx-11 {
        margin-right: 15rem !important;
        margin-left: 15rem !important;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .my-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .my-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
    }

    .my-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
    }

    .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .my-4 {
        margin-top: 1.8rem !important;
        margin-bottom: 1.8rem !important;
    }

    .my-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important;
    }

    .my-6 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
    }

    .my-7 {
        margin-top: 5rem !important;
        margin-bottom: 5rem !important;
    }

    .my-8 {
        margin-top: 7.5rem !important;
        margin-bottom: 7.5rem !important;
    }

    .my-9 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important;
    }

    .my-10 {
        margin-top: 12.5rem !important;
        margin-bottom: 12.5rem !important;
    }

    .my-11 {
        margin-top: 15rem !important;
        margin-bottom: 15rem !important;
    }

    .my-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
    }

    .mt-0 {
        margin-top: 0 !important;
    }

    .mt-1 {
        margin-top: 0.25rem !important;
    }

    .mt-2 {
        margin-top: 0.5rem !important;
    }

    .mt-3 {
        margin-top: 1rem !important;
    }

    .mt-4 {
        margin-top: 1.8rem !important;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .mt-6 {
        margin-top: 4rem !important;
    }

    .mt-7 {
        margin-top: 5rem !important;
    }

    .mt-8 {
        margin-top: 7.5rem !important;
    }

    .mt-9 {
        margin-top: 10rem !important;
    }

    .mt-10 {
        margin-top: 12.5rem !important;
    }

    .mt-11 {
        margin-top: 15rem !important;
    }

    .mt-auto {
        margin-top: auto !important;
    }

    .me-0 {
        margin-right: 0 !important;
    }

    .me-1 {
        margin-right: 0.25rem !important;
    }

    .me-2 {
        margin-right: 0.5rem !important;
    }

    .me-3 {
        margin-right: 1rem !important;
    }

    .me-4 {
        margin-right: 1.8rem !important;
    }

    .me-5 {
        margin-right: 3rem !important;
    }

    .me-6 {
        margin-right: 4rem !important;
    }

    .me-7 {
        margin-right: 5rem !important;
    }

    .me-8 {
        margin-right: 7.5rem !important;
    }

    .me-9 {
        margin-right: 10rem !important;
    }

    .me-10 {
        margin-right: 12.5rem !important;
    }

    .me-11 {
        margin-right: 15rem !important;
    }

    .me-auto {
        margin-right: auto !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mb-1 {
        margin-bottom: 0.25rem !important;
    }

    .mb-2 {
        margin-bottom: 0.5rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .mb-4 {
        margin-bottom: 1.8rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    .mb-6 {
        margin-bottom: 4rem !important;
    }

    .mb-7 {
        margin-bottom: 5rem !important;
    }

    .mb-8 {
        margin-bottom: 7.5rem !important;
    }

    .mb-9 {
        margin-bottom: 10rem !important;
    }

    .mb-10 {
        margin-bottom: 12.5rem !important;
    }

    .mb-11 {
        margin-bottom: 15rem !important;
    }

    .mb-auto {
        margin-bottom: auto !important;
    }

    .ms-0 {
        margin-left: 0 !important;
    }

    .ms-1 {
        margin-left: 0.25rem !important;
    }

    .ms-2 {
        margin-left: 0.5rem !important;
    }

    .ms-3 {
        margin-left: 1rem !important;
    }

    .ms-4 {
        margin-left: 1.8rem !important;
    }

    .ms-5 {
        margin-left: 3rem !important;
    }

    .ms-6 {
        margin-left: 4rem !important;
    }

    .ms-7 {
        margin-left: 5rem !important;
    }

    .ms-8 {
        margin-left: 7.5rem !important;
    }

    .ms-9 {
        margin-left: 10rem !important;
    }

    .ms-10 {
        margin-left: 12.5rem !important;
    }

    .ms-11 {
        margin-left: 15rem !important;
    }

    .ms-auto {
        margin-left: auto !important;
    }

    .m-n1 {
        margin: -0.25rem !important;
    }

    .m-n2 {
        margin: -0.5rem !important;
    }

    .m-n3 {
        margin: -1rem !important;
    }

    .m-n4 {
        margin: -1.8rem !important;
    }

    .m-n5 {
        margin: -3rem !important;
    }

    .m-n6 {
        margin: -4rem !important;
    }

    .m-n7 {
        margin: -5rem !important;
    }

    .m-n8 {
        margin: -7.5rem !important;
    }

    .m-n9 {
        margin: -10rem !important;
    }

    .m-n10 {
        margin: -12.5rem !important;
    }

    .m-n11 {
        margin: -15rem !important;
    }

    .mx-n1 {
        margin-right: -0.25rem !important;
        margin-left: -0.25rem !important;
    }

    .mx-n2 {
        margin-right: -0.5rem !important;
        margin-left: -0.5rem !important;
    }

    .mx-n3 {
        margin-right: -1rem !important;
        margin-left: -1rem !important;
    }

    .mx-n4 {
        margin-right: -1.8rem !important;
        margin-left: -1.8rem !important;
    }

    .mx-n5 {
        margin-right: -3rem !important;
        margin-left: -3rem !important;
    }

    .mx-n6 {
        margin-right: -4rem !important;
        margin-left: -4rem !important;
    }

    .mx-n7 {
        margin-right: -5rem !important;
        margin-left: -5rem !important;
    }

    .mx-n8 {
        margin-right: -7.5rem !important;
        margin-left: -7.5rem !important;
    }

    .mx-n9 {
        margin-right: -10rem !important;
        margin-left: -10rem !important;
    }

    .mx-n10 {
        margin-right: -12.5rem !important;
        margin-left: -12.5rem !important;
    }

    .mx-n11 {
        margin-right: -15rem !important;
        margin-left: -15rem !important;
    }

    .my-n1 {
        margin-top: -0.25rem !important;
        margin-bottom: -0.25rem !important;
    }

    .my-n2 {
        margin-top: -0.5rem !important;
        margin-bottom: -0.5rem !important;
    }

    .my-n3 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important;
    }

    .my-n4 {
        margin-top: -1.8rem !important;
        margin-bottom: -1.8rem !important;
    }

    .my-n5 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important;
    }

    .my-n6 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important;
    }

    .my-n7 {
        margin-top: -5rem !important;
        margin-bottom: -5rem !important;
    }

    .my-n8 {
        margin-top: -7.5rem !important;
        margin-bottom: -7.5rem !important;
    }

    .my-n9 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important;
    }

    .my-n10 {
        margin-top: -12.5rem !important;
        margin-bottom: -12.5rem !important;
    }

    .my-n11 {
        margin-top: -15rem !important;
        margin-bottom: -15rem !important;
    }

    .mt-n1 {
        margin-top: -0.25rem !important;
    }

    .mt-n2 {
        margin-top: -0.5rem !important;
    }

    .mt-n3 {
        margin-top: -1rem !important;
    }

    .mt-n4 {
        margin-top: -1.8rem !important;
    }

    .mt-n5 {
        margin-top: -3rem !important;
    }

    .mt-n6 {
        margin-top: -4rem !important;
    }

    .mt-n7 {
        margin-top: -5rem !important;
    }

    .mt-n8 {
        margin-top: -7.5rem !important;
    }

    .mt-n9 {
        margin-top: -10rem !important;
    }

    .mt-n10 {
        margin-top: -12.5rem !important;
    }

    .mt-n11 {
        margin-top: -15rem !important;
    }

    .me-n1 {
        margin-right: -0.25rem !important;
    }

    .me-n2 {
        margin-right: -0.5rem !important;
    }

    .me-n3 {
        margin-right: -1rem !important;
    }

    .me-n4 {
        margin-right: -1.8rem !important;
    }

    .me-n5 {
        margin-right: -3rem !important;
    }

    .me-n6 {
        margin-right: -4rem !important;
    }

    .me-n7 {
        margin-right: -5rem !important;
    }

    .me-n8 {
        margin-right: -7.5rem !important;
    }

    .me-n9 {
        margin-right: -10rem !important;
    }

    .me-n10 {
        margin-right: -12.5rem !important;
    }

    .me-n11 {
        margin-right: -15rem !important;
    }

    .mb-n1 {
        margin-bottom: -0.25rem !important;
    }

    .mb-n2 {
        margin-bottom: -0.5rem !important;
    }

    .mb-n3 {
        margin-bottom: -1rem !important;
    }

    .mb-n4 {
        margin-bottom: -1.8rem !important;
    }

    .mb-n5 {
        margin-bottom: -3rem !important;
    }

    .mb-n6 {
        margin-bottom: -4rem !important;
    }

    .mb-n7 {
        margin-bottom: -5rem !important;
    }

    .mb-n8 {
        margin-bottom: -7.5rem !important;
    }

    .mb-n9 {
        margin-bottom: -10rem !important;
    }

    .mb-n10 {
        margin-bottom: -12.5rem !important;
    }

    .mb-n11 {
        margin-bottom: -15rem !important;
    }

    .ms-n1 {
        margin-left: -0.25rem !important;
    }

    .ms-n2 {
        margin-left: -0.5rem !important;
    }

    .ms-n3 {
        margin-left: -1rem !important;
    }

    .ms-n4 {
        margin-left: -1.8rem !important;
    }

    .ms-n5 {
        margin-left: -3rem !important;
    }

    .ms-n6 {
        margin-left: -4rem !important;
    }

    .ms-n7 {
        margin-left: -5rem !important;
    }

    .ms-n8 {
        margin-left: -7.5rem !important;
    }

    .ms-n9 {
        margin-left: -10rem !important;
    }

    .ms-n10 {
        margin-left: -12.5rem !important;
    }

    .ms-n11 {
        margin-left: -15rem !important;
    }

    .p-0 {
        padding: 0 !important;
    }

    .p-1 {
        padding: 0.25rem !important;
    }

    .p-2 {
        padding: 0.5rem !important;
    }

    .p-3 {
        padding: 1rem !important;
    }

    .p-4 {
        padding: 1.8rem !important;
    }

    .p-5 {
        padding: 3rem !important;
    }

    .p-6 {
        padding: 4rem !important;
    }

    .p-7 {
        padding: 5rem !important;
    }

    .p-8 {
        padding: 7.5rem !important;
    }

    .p-9 {
        padding: 10rem !important;
    }

    .p-10 {
        padding: 12.5rem !important;
    }

    .p-11 {
        padding: 15rem !important;
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .px-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    .px-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }

    .px-4 {
        padding-right: 1.8rem !important;
        padding-left: 1.8rem !important;
    }

    .px-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important;
    }

    .px-6 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
    }

    .px-7 {
        padding-right: 5rem !important;
        padding-left: 5rem !important;
    }

    .px-8 {
        padding-right: 7.5rem !important;
        padding-left: 7.5rem !important;
    }

    .px-9 {
        padding-right: 10rem !important;
        padding-left: 10rem !important;
    }

    .px-10 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important;
    }

    .px-11 {
        padding-right: 15rem !important;
        padding-left: 15rem !important;
    }

    .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .py-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-4 {
        padding-top: 1.8rem !important;
        padding-bottom: 1.8rem !important;
    }

    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .py-6 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
    }

    .py-7 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    .py-8 {
        padding-top: 7.5rem !important;
        padding-bottom: 7.5rem !important;
    }

    .py-9 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important;
    }

    .py-10 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important;
    }

    .py-11 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important;
    }

    .pt-0 {
        padding-top: 0 !important;
    }

    .pt-1 {
        padding-top: 0.25rem !important;
    }

    .pt-2 {
        padding-top: 0.5rem !important;
    }

    .pt-3 {
        padding-top: 1rem !important;
    }

    .pt-4 {
        padding-top: 1.8rem !important;
    }

    .pt-5 {
        padding-top: 3rem !important;
    }

    .pt-6 {
        padding-top: 4rem !important;
    }

    .pt-7 {
        padding-top: 5rem !important;
    }

    .pt-8 {
        padding-top: 7.5rem !important;
    }

    .pt-9 {
        padding-top: 10rem !important;
    }

    .pt-10 {
        padding-top: 12.5rem !important;
    }

    .pt-11 {
        padding-top: 15rem !important;
    }

    .pe-0 {
        padding-right: 0 !important;
    }

    .pe-1 {
        padding-right: 0.25rem !important;
    }

    .pe-2 {
        padding-right: 0.5rem !important;
    }

    .pe-3 {
        padding-right: 1rem !important;
    }

    .pe-4 {
        padding-right: 1.8rem !important;
    }

    .pe-5 {
        padding-right: 3rem !important;
    }

    .pe-6 {
        padding-right: 4rem !important;
    }

    .pe-7 {
        padding-right: 5rem !important;
    }

    .pe-8 {
        padding-right: 7.5rem !important;
    }

    .pe-9 {
        padding-right: 10rem !important;
    }

    .pe-10 {
        padding-right: 12.5rem !important;
    }

    .pe-11 {
        padding-right: 15rem !important;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .pb-1 {
        padding-bottom: 0.25rem !important;
    }

    .pb-2 {
        padding-bottom: 0.5rem !important;
    }

    .pb-3 {
        padding-bottom: 1rem !important;
    }

    .pb-4 {
        padding-bottom: 1.8rem !important;
    }

    .pb-5 {
        padding-bottom: 3rem !important;
    }

    .pb-6 {
        padding-bottom: 4rem !important;
    }

    .pb-7 {
        padding-bottom: 5rem !important;
    }

    .pb-8 {
        padding-bottom: 7.5rem !important;
    }

    .pb-9 {
        padding-bottom: 10rem !important;
    }

    .pb-10 {
        padding-bottom: 12.5rem !important;
    }

    .pb-11 {
        padding-bottom: 15rem !important;
    }

    .ps-0 {
        padding-left: 0 !important;
    }

    .ps-1 {
        padding-left: 0.25rem !important;
    }

    .ps-2 {
        padding-left: 0.5rem !important;
    }

    .ps-3 {
        padding-left: 1rem !important;
    }

    .ps-4 {
        padding-left: 1.8rem !important;
    }

    .ps-5 {
        padding-left: 3rem !important;
    }

    .ps-6 {
        padding-left: 4rem !important;
    }

    .ps-7 {
        padding-left: 5rem !important;
    }

    .ps-8 {
        padding-left: 7.5rem !important;
    }

    .ps-9 {
        padding-left: 10rem !important;
    }

    .ps-10 {
        padding-left: 12.5rem !important;
    }

    .ps-11 {
        padding-left: 15rem !important;
    }

    .font-monospace {
        font-family: var(--bs-font-monospace) !important;
    }

    .fs--2 {
        font-size: 0.69444rem !important;
    }

    .fs--1 {
        font-size: 0.83333rem !important;
    }

    .fs-0 {
        font-size: 1rem !important;
    }

    .fs-1 {
        font-size: 1.2rem !important;
    }

    .fs-2 {
        font-size: 1.44rem !important;
    }

    .fs-3 {
        font-size: 1.728rem !important;
    }

    .fs-4 {
        font-size: 2.0736rem !important;
    }

    .fs-5 {
        font-size: 2.48832rem !important;
    }

    .fs-6 {
        font-size: 2.98598rem !important;
    }

    .fs-7 {
        font-size: 3.58318rem !important;
    }

    .fs-8 {
        font-size: 4.29982rem !important;
    }

    .fst-italic {
        font-style: italic !important;
    }

    .fst-normal {
        font-style: normal !important;
    }

    .fw-thin {
        font-weight: 100 !important;
    }

    .fw-lighter {
        font-weight: 200 !important;
    }

    .fw-light {
        font-weight: 300 !important;
    }

    .fw-normal {
        font-weight: 400 !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-semi-bold {
        font-weight: 600 !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .fw-bolder {
        font-weight: 800 !important;
    }

    .fw-black {
        font-weight: 900 !important;
    }

    .lh-1 {
        line-height: 1 !important;
    }

    .lh-sm {
        line-height: 1.25 !important;
    }

    .lh-base {
        line-height: 1.5 !important;
    }

    .lh-lg {
        line-height: 2 !important;
    }

    .text-start {
        text-align: left !important;
    }

    .text-end {
        text-align: right !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-decoration-underline {
        text-decoration: underline !important;
    }

    .text-decoration-line-through {
        text-decoration: line-through !important;
    }

    .text-lowercase {
        text-transform: lowercase !important;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    .text-capitalize {
        text-transform: capitalize !important;
    }

    .text-wrap {
        white-space: normal !important;
    }

    .text-nowrap {
        white-space: nowrap !important;
    }

    /* rtl:begin:remove */
    .text-break {
        word-wrap: break-word !important;
        word-break: break-word !important;
    }

    /* rtl:end:remove */
    .text-primary {
        color: #717CFF !important;
    }

    .text-secondary {
        color: #A79CA8 !important;
    }

    .text-success {
        color: #5fa500 !important;
    }

    .text-info {
        color: #3EB8F4 !important;
    }

    .text-warning {
        color: #ffee25 !important;
    }

    .text-danger {
        color: #ff717c !important;
    }

    .text-light {
        color: #F9FAFD !important;
    }

    .text-dark {
        color: #44224B !important;
    }

    .text-white {
        color: #fff !important;
    }

    .text-body {
        color: #778295 !important;
    }

    .text-muted {
        color: #CCC6CD !important;
    }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-reset {
        color: inherit !important;
    }

    .bg-facebook {
        background-color: #3c5a99 !important;
    }

    .bg-google-plus {
        background-color: #dd4b39 !important;
    }

    .bg-twitter {
        background-color: #1da1f2 !important;
    }

    .bg-linkedin {
        background-color: #0077b5 !important;
    }

    .bg-youtube {
        background-color: #ff0000 !important;
    }

    .bg-github {
        background-color: #333 !important;
    }

    .bg-black {
        background-color: #000 !important;
    }

    .bg-100 {
        background-color: #FAFAFA !important;
    }

    .bg-200 {
        background-color: #E8E5E9 !important;
    }

    .bg-300 {
        background-color: #DFDBDF !important;
    }

    .bg-400 {
        background-color: #D5D1D6 !important;
    }

    .bg-500 {
        background-color: #CCC6CD !important;
    }

    .bg-600 {
        background-color: #C3BCC4 !important;
    }

    .bg-700 {
        background-color: #B9B1BB !important;
    }

    .bg-800 {
        background-color: #B0A7B2 !important;
    }

    .bg-900 {
        background-color: #A79CA8 !important;
    }

    .bg-1000 {
        background-color: #778295 !important;
    }

    .bg-1100 {
        background-color: #44224B !important;
    }

    .bg-1200 {
        background-color: #091E40 !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .bg-primary {
        background-color: #717CFF !important;
    }

    .bg-secondary {
        background-color: #A79CA8 !important;
    }

    .bg-success {
        background-color: #5fa500 !important;
    }

    .bg-info {
        background-color: #3EB8F4 !important;
    }

    .bg-warning {
        background-color: #ffee25 !important;
    }

    .bg-danger {
        background-color: #ff717c !important;
    }

    .bg-light {
        background-color: #F9FAFD !important;
    }

    .bg-dark {
        background-color: #44224B !important;
    }

    .bg-body {
        background-color: #fff !important;
    }

    .bg-transparent {
        background-color: transparent !important;
    }

    .bg-gradient {
        background-image: var(--bs-gradient) !important;
    }

    .user-select-all {
        -webkit-user-select: all !important;
        -moz-user-select: all !important;
        -ms-user-select: all !important;
        user-select: all !important;
    }

    .user-select-auto {
        -webkit-user-select: auto !important;
        -moz-user-select: auto !important;
        -ms-user-select: auto !important;
        user-select: auto !important;
    }

    .user-select-none {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
    }

    .pe-none {
        pointer-events: none !important;
    }

    .pe-auto {
        pointer-events: auto !important;
    }

    .rounded {
        border-radius: 0.25rem !important;
    }

    .rounded-0 {
        border-radius: 0 !important;
    }

    .rounded-1 {
        border-radius: 0.625rem !important;
    }

    .rounded-2 {
        border-radius: 0.25rem !important;
    }

    .rounded-3 {
        border-radius: 1.25rem !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    .visible {
        visibility: visible !important;
    }

    .invisible {
        visibility: hidden !important;
    }

    .opacity-0 {
        opacity: 0 !important;
    }

    .opacity-25 {
        opacity: 0.25 !important;
    }

    .opacity-50 {
        opacity: 0.5 !important;
    }

    .opacity-75 {
        opacity: 0.75 !important;
    }

    .opacity-85 {
        opacity: 0.85 !important;
    }

    .opacity-100 {
        opacity: 1 !important;
    }

    .text-facebook {
        color: #3c5a99 !important;
    }

    .text-google-plus {
        color: #dd4b39 !important;
    }

    .text-twitter {
        color: #1da1f2 !important;
    }

    .text-linkedin {
        color: #0077b5 !important;
    }

    .text-youtube {
        color: #ff0000 !important;
    }

    .text-github {
        color: #333 !important;
    }

    .text-black {
        color: #000 !important;
    }

    .text-100 {
        color: #FAFAFA !important;
    }

    .text-200 {
        color: #E8E5E9 !important;
    }

    .text-300 {
        color: #DFDBDF !important;
    }

    .text-400 {
        color: #D5D1D6 !important;
    }

    .text-500 {
        color: #CCC6CD !important;
    }

    .text-600 {
        color: #C3BCC4 !important;
    }

    .text-700 {
        color: #B9B1BB !important;
    }

    .text-800 {
        color: #B0A7B2 !important;
    }

    .text-900 {
        color: #A79CA8 !important;
    }

    .text-1000 {
        color: #778295 !important;
    }

    .text-1100 {
        color: #44224B !important;
    }

    .text-1200 {
        color: #091E40 !important;
    }

    .text-white {
        color: #fff !important;
    }

    .max-vh-25 {
        max-height: 25vh !important;
    }

    .max-vh-50 {
        max-height: 50vh !important;
    }

    .max-vh-75 {
        max-height: 75vh !important;
    }

    .max-vh-100 {
        max-height: 100vh !important;
    }

    .border-x {
        border-left: 1px solid #DFDBDF !important;
        border-right: 1px solid #DFDBDF !important;
    }

    .border-x-0 {
        border-left: 0 !important;
        border-right: 0 !important;
    }

    .border-y {
        border-top: 1px solid #DFDBDF !important;
        border-bottom: 1px solid #DFDBDF !important;
    }

    .border-y-0 {
        border-top: 0 !important;
        border-bottom: 0 !important;
    }

    .border-dashed {
        border: 1px dashed #DFDBDF !important;
    }

    .border-dashed-top {
        border-top: 1px dashed #DFDBDF !important;
    }

    .border-dashed-end {
        border-right: 1px dashed #DFDBDF !important;
    }

    .border-dashed-start {
        border-left: 1px dashed #DFDBDF !important;
    }

    .border-dashed-bottom {
        border-bottom: 1px dashed #DFDBDF !important;
    }

    .border-dashed-x {
        border-left: 1px dashed #DFDBDF !important;
        border-right: 1px dashed #DFDBDF !important;
    }

    .border-dashed-y {
        border-top: 1px dashed #DFDBDF !important;
        border-bottom: 1px dashed #DFDBDF !important;
    }

    .rounded-0 {
        border-radius: 0 !important;
    }

    .bg-soft-primary {
        background-color: #f1f2ff !important;
    }

    .bg-soft-secondary {
        background-color: #f6f5f6 !important;
    }

    .bg-soft-success {
        background-color: #eff6e6 !important;
    }

    .bg-soft-info {
        background-color: #ecf8fe !important;
    }

    .bg-soft-warning {
        background-color: #fffde9 !important;
    }

    .bg-soft-danger {
        background-color: #fff1f2 !important;
    }

    .bg-soft-light {
        background-color: #feffff !important;
    }

    .bg-soft-dark {
        background-color: #ece9ed !important;
    }

    @media (min-width: 576px) {
        .float-sm-start {
            float: left !important;
        }

        .float-sm-end {
            float: right !important;
        }

        .float-sm-none {
            float: none !important;
        }

        .d-sm-inline {
            display: inline !important;
        }

        .d-sm-inline-block {
            display: inline-block !important;
        }

        .d-sm-block {
            display: block !important;
        }

        .d-sm-grid {
            display: grid !important;
        }

        .d-sm-table {
            display: table !important;
        }

        .d-sm-table-row {
            display: table-row !important;
        }

        .d-sm-table-cell {
            display: table-cell !important;
        }

        .d-sm-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-sm-none {
            display: none !important;
        }

        .position-sm-static {
            position: static !important;
        }

        .position-sm-absolute {
            position: absolute !important;
        }

        .position-sm-relative {
            position: relative !important;
        }

        .position-sm-fixed {
            position: fixed !important;
        }

        .position-sm-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .translate-sm-middle {
            -webkit-transform: translateX(-50%) translateY(-50%) !important;
            -ms-transform: translateX(-50%) translateY(-50%) !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .translate-sm-middle-x {
            -webkit-transform: translateX(-50%) !important;
            -ms-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-sm-middle-y {
            -webkit-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border-sm {
            border: 1px solid #DFDBDF !important;
        }

        .border-sm-0 {
            border: 0 !important;
        }

        .border-sm-top {
            border-top: 1px solid #DFDBDF !important;
        }

        .border-sm-top-0 {
            border-top: 0 !important;
        }

        .border-sm-end {
            border-right: 1px solid #DFDBDF !important;
        }

        .border-sm-end-0 {
            border-right: 0 !important;
        }

        .border-sm-bottom {
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-sm-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-sm-start {
            border-left: 1px solid #DFDBDF !important;
        }

        .border-sm-start-0 {
            border-left: 0 !important;
        }

        .w-sm-25 {
            width: 25% !important;
        }

        .w-sm-50 {
            width: 50% !important;
        }

        .w-sm-75 {
            width: 75% !important;
        }

        .w-sm-100 {
            width: 100% !important;
        }

        .w-sm-auto {
            width: auto !important;
        }

        .vw-sm-25 {
            width: 25vw !important;
        }

        .vw-sm-50 {
            width: 50vw !important;
        }

        .vw-sm-75 {
            width: 75vw !important;
        }

        .vw-sm-100 {
            width: 100vw !important;
        }

        .h-sm-25 {
            height: 25% !important;
        }

        .h-sm-50 {
            height: 50% !important;
        }

        .h-sm-75 {
            height: 75% !important;
        }

        .h-sm-100 {
            height: 100% !important;
        }

        .h-sm-auto {
            height: auto !important;
        }

        .vh-sm-25 {
            height: 25vh !important;
        }

        .vh-sm-50 {
            height: 50vh !important;
        }

        .vh-sm-75 {
            height: 75vh !important;
        }

        .vh-sm-100 {
            height: 100vh !important;
        }

        .min-vh-sm-25 {
            min-height: 25vh !important;
        }

        .min-vh-sm-50 {
            min-height: 50vh !important;
        }

        .min-vh-sm-75 {
            min-height: 75vh !important;
        }

        .min-vh-sm-100 {
            min-height: 100vh !important;
        }

        .flex-sm-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-sm-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-sm-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-sm-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-sm-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-sm-0 {
            gap: 0 !important;
        }

        .gap-sm-1 {
            gap: 0.25rem !important;
        }

        .gap-sm-2 {
            gap: 0.5rem !important;
        }

        .gap-sm-3 {
            gap: 1rem !important;
        }

        .gap-sm-4 {
            gap: 1.8rem !important;
        }

        .gap-sm-5 {
            gap: 3rem !important;
        }

        .gap-sm-6 {
            gap: 4rem !important;
        }

        .gap-sm-7 {
            gap: 5rem !important;
        }

        .gap-sm-8 {
            gap: 7.5rem !important;
        }

        .gap-sm-9 {
            gap: 10rem !important;
        }

        .gap-sm-10 {
            gap: 12.5rem !important;
        }

        .gap-sm-11 {
            gap: 15rem !important;
        }

        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-sm-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-sm-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-sm-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-sm-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-sm-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-sm-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-sm-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-sm-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-sm-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-sm-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-sm-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-sm-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-sm-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-sm-0 {
            margin: 0 !important;
        }

        .m-sm-1 {
            margin: 0.25rem !important;
        }

        .m-sm-2 {
            margin: 0.5rem !important;
        }

        .m-sm-3 {
            margin: 1rem !important;
        }

        .m-sm-4 {
            margin: 1.8rem !important;
        }

        .m-sm-5 {
            margin: 3rem !important;
        }

        .m-sm-6 {
            margin: 4rem !important;
        }

        .m-sm-7 {
            margin: 5rem !important;
        }

        .m-sm-8 {
            margin: 7.5rem !important;
        }

        .m-sm-9 {
            margin: 10rem !important;
        }

        .m-sm-10 {
            margin: 12.5rem !important;
        }

        .m-sm-11 {
            margin: 15rem !important;
        }

        .m-sm-auto {
            margin: auto !important;
        }

        .mx-sm-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-sm-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-sm-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-sm-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-sm-4 {
            margin-right: 1.8rem !important;
            margin-left: 1.8rem !important;
        }

        .mx-sm-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-sm-6 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-sm-7 {
            margin-right: 5rem !important;
            margin-left: 5rem !important;
        }

        .mx-sm-8 {
            margin-right: 7.5rem !important;
            margin-left: 7.5rem !important;
        }

        .mx-sm-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-sm-10 {
            margin-right: 12.5rem !important;
            margin-left: 12.5rem !important;
        }

        .mx-sm-11 {
            margin-right: 15rem !important;
            margin-left: 15rem !important;
        }

        .mx-sm-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-sm-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-sm-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-sm-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-sm-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-sm-4 {
            margin-top: 1.8rem !important;
            margin-bottom: 1.8rem !important;
        }

        .my-sm-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-sm-6 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-sm-7 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .my-sm-8 {
            margin-top: 7.5rem !important;
            margin-bottom: 7.5rem !important;
        }

        .my-sm-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-sm-10 {
            margin-top: 12.5rem !important;
            margin-bottom: 12.5rem !important;
        }

        .my-sm-11 {
            margin-top: 15rem !important;
            margin-bottom: 15rem !important;
        }

        .my-sm-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-sm-0 {
            margin-top: 0 !important;
        }

        .mt-sm-1 {
            margin-top: 0.25rem !important;
        }

        .mt-sm-2 {
            margin-top: 0.5rem !important;
        }

        .mt-sm-3 {
            margin-top: 1rem !important;
        }

        .mt-sm-4 {
            margin-top: 1.8rem !important;
        }

        .mt-sm-5 {
            margin-top: 3rem !important;
        }

        .mt-sm-6 {
            margin-top: 4rem !important;
        }

        .mt-sm-7 {
            margin-top: 5rem !important;
        }

        .mt-sm-8 {
            margin-top: 7.5rem !important;
        }

        .mt-sm-9 {
            margin-top: 10rem !important;
        }

        .mt-sm-10 {
            margin-top: 12.5rem !important;
        }

        .mt-sm-11 {
            margin-top: 15rem !important;
        }

        .mt-sm-auto {
            margin-top: auto !important;
        }

        .me-sm-0 {
            margin-right: 0 !important;
        }

        .me-sm-1 {
            margin-right: 0.25rem !important;
        }

        .me-sm-2 {
            margin-right: 0.5rem !important;
        }

        .me-sm-3 {
            margin-right: 1rem !important;
        }

        .me-sm-4 {
            margin-right: 1.8rem !important;
        }

        .me-sm-5 {
            margin-right: 3rem !important;
        }

        .me-sm-6 {
            margin-right: 4rem !important;
        }

        .me-sm-7 {
            margin-right: 5rem !important;
        }

        .me-sm-8 {
            margin-right: 7.5rem !important;
        }

        .me-sm-9 {
            margin-right: 10rem !important;
        }

        .me-sm-10 {
            margin-right: 12.5rem !important;
        }

        .me-sm-11 {
            margin-right: 15rem !important;
        }

        .me-sm-auto {
            margin-right: auto !important;
        }

        .mb-sm-0 {
            margin-bottom: 0 !important;
        }

        .mb-sm-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-sm-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-sm-3 {
            margin-bottom: 1rem !important;
        }

        .mb-sm-4 {
            margin-bottom: 1.8rem !important;
        }

        .mb-sm-5 {
            margin-bottom: 3rem !important;
        }

        .mb-sm-6 {
            margin-bottom: 4rem !important;
        }

        .mb-sm-7 {
            margin-bottom: 5rem !important;
        }

        .mb-sm-8 {
            margin-bottom: 7.5rem !important;
        }

        .mb-sm-9 {
            margin-bottom: 10rem !important;
        }

        .mb-sm-10 {
            margin-bottom: 12.5rem !important;
        }

        .mb-sm-11 {
            margin-bottom: 15rem !important;
        }

        .mb-sm-auto {
            margin-bottom: auto !important;
        }

        .ms-sm-0 {
            margin-left: 0 !important;
        }

        .ms-sm-1 {
            margin-left: 0.25rem !important;
        }

        .ms-sm-2 {
            margin-left: 0.5rem !important;
        }

        .ms-sm-3 {
            margin-left: 1rem !important;
        }

        .ms-sm-4 {
            margin-left: 1.8rem !important;
        }

        .ms-sm-5 {
            margin-left: 3rem !important;
        }

        .ms-sm-6 {
            margin-left: 4rem !important;
        }

        .ms-sm-7 {
            margin-left: 5rem !important;
        }

        .ms-sm-8 {
            margin-left: 7.5rem !important;
        }

        .ms-sm-9 {
            margin-left: 10rem !important;
        }

        .ms-sm-10 {
            margin-left: 12.5rem !important;
        }

        .ms-sm-11 {
            margin-left: 15rem !important;
        }

        .ms-sm-auto {
            margin-left: auto !important;
        }

        .m-sm-n1 {
            margin: -0.25rem !important;
        }

        .m-sm-n2 {
            margin: -0.5rem !important;
        }

        .m-sm-n3 {
            margin: -1rem !important;
        }

        .m-sm-n4 {
            margin: -1.8rem !important;
        }

        .m-sm-n5 {
            margin: -3rem !important;
        }

        .m-sm-n6 {
            margin: -4rem !important;
        }

        .m-sm-n7 {
            margin: -5rem !important;
        }

        .m-sm-n8 {
            margin: -7.5rem !important;
        }

        .m-sm-n9 {
            margin: -10rem !important;
        }

        .m-sm-n10 {
            margin: -12.5rem !important;
        }

        .m-sm-n11 {
            margin: -15rem !important;
        }

        .mx-sm-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-sm-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-sm-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-sm-n4 {
            margin-right: -1.8rem !important;
            margin-left: -1.8rem !important;
        }

        .mx-sm-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-sm-n6 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-sm-n7 {
            margin-right: -5rem !important;
            margin-left: -5rem !important;
        }

        .mx-sm-n8 {
            margin-right: -7.5rem !important;
            margin-left: -7.5rem !important;
        }

        .mx-sm-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .mx-sm-n10 {
            margin-right: -12.5rem !important;
            margin-left: -12.5rem !important;
        }

        .mx-sm-n11 {
            margin-right: -15rem !important;
            margin-left: -15rem !important;
        }

        .my-sm-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-sm-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-sm-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-sm-n4 {
            margin-top: -1.8rem !important;
            margin-bottom: -1.8rem !important;
        }

        .my-sm-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-sm-n6 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-sm-n7 {
            margin-top: -5rem !important;
            margin-bottom: -5rem !important;
        }

        .my-sm-n8 {
            margin-top: -7.5rem !important;
            margin-bottom: -7.5rem !important;
        }

        .my-sm-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .my-sm-n10 {
            margin-top: -12.5rem !important;
            margin-bottom: -12.5rem !important;
        }

        .my-sm-n11 {
            margin-top: -15rem !important;
            margin-bottom: -15rem !important;
        }

        .mt-sm-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-sm-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-sm-n3 {
            margin-top: -1rem !important;
        }

        .mt-sm-n4 {
            margin-top: -1.8rem !important;
        }

        .mt-sm-n5 {
            margin-top: -3rem !important;
        }

        .mt-sm-n6 {
            margin-top: -4rem !important;
        }

        .mt-sm-n7 {
            margin-top: -5rem !important;
        }

        .mt-sm-n8 {
            margin-top: -7.5rem !important;
        }

        .mt-sm-n9 {
            margin-top: -10rem !important;
        }

        .mt-sm-n10 {
            margin-top: -12.5rem !important;
        }

        .mt-sm-n11 {
            margin-top: -15rem !important;
        }

        .me-sm-n1 {
            margin-right: -0.25rem !important;
        }

        .me-sm-n2 {
            margin-right: -0.5rem !important;
        }

        .me-sm-n3 {
            margin-right: -1rem !important;
        }

        .me-sm-n4 {
            margin-right: -1.8rem !important;
        }

        .me-sm-n5 {
            margin-right: -3rem !important;
        }

        .me-sm-n6 {
            margin-right: -4rem !important;
        }

        .me-sm-n7 {
            margin-right: -5rem !important;
        }

        .me-sm-n8 {
            margin-right: -7.5rem !important;
        }

        .me-sm-n9 {
            margin-right: -10rem !important;
        }

        .me-sm-n10 {
            margin-right: -12.5rem !important;
        }

        .me-sm-n11 {
            margin-right: -15rem !important;
        }

        .mb-sm-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-sm-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-sm-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-sm-n4 {
            margin-bottom: -1.8rem !important;
        }

        .mb-sm-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-sm-n6 {
            margin-bottom: -4rem !important;
        }

        .mb-sm-n7 {
            margin-bottom: -5rem !important;
        }

        .mb-sm-n8 {
            margin-bottom: -7.5rem !important;
        }

        .mb-sm-n9 {
            margin-bottom: -10rem !important;
        }

        .mb-sm-n10 {
            margin-bottom: -12.5rem !important;
        }

        .mb-sm-n11 {
            margin-bottom: -15rem !important;
        }

        .ms-sm-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-sm-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-sm-n3 {
            margin-left: -1rem !important;
        }

        .ms-sm-n4 {
            margin-left: -1.8rem !important;
        }

        .ms-sm-n5 {
            margin-left: -3rem !important;
        }

        .ms-sm-n6 {
            margin-left: -4rem !important;
        }

        .ms-sm-n7 {
            margin-left: -5rem !important;
        }

        .ms-sm-n8 {
            margin-left: -7.5rem !important;
        }

        .ms-sm-n9 {
            margin-left: -10rem !important;
        }

        .ms-sm-n10 {
            margin-left: -12.5rem !important;
        }

        .ms-sm-n11 {
            margin-left: -15rem !important;
        }

        .p-sm-0 {
            padding: 0 !important;
        }

        .p-sm-1 {
            padding: 0.25rem !important;
        }

        .p-sm-2 {
            padding: 0.5rem !important;
        }

        .p-sm-3 {
            padding: 1rem !important;
        }

        .p-sm-4 {
            padding: 1.8rem !important;
        }

        .p-sm-5 {
            padding: 3rem !important;
        }

        .p-sm-6 {
            padding: 4rem !important;
        }

        .p-sm-7 {
            padding: 5rem !important;
        }

        .p-sm-8 {
            padding: 7.5rem !important;
        }

        .p-sm-9 {
            padding: 10rem !important;
        }

        .p-sm-10 {
            padding: 12.5rem !important;
        }

        .p-sm-11 {
            padding: 15rem !important;
        }

        .px-sm-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-sm-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-sm-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-sm-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-sm-4 {
            padding-right: 1.8rem !important;
            padding-left: 1.8rem !important;
        }

        .px-sm-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-sm-6 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-sm-7 {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .px-sm-8 {
            padding-right: 7.5rem !important;
            padding-left: 7.5rem !important;
        }

        .px-sm-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .px-sm-10 {
            padding-right: 12.5rem !important;
            padding-left: 12.5rem !important;
        }

        .px-sm-11 {
            padding-right: 15rem !important;
            padding-left: 15rem !important;
        }

        .py-sm-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-sm-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-sm-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-sm-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-sm-4 {
            padding-top: 1.8rem !important;
            padding-bottom: 1.8rem !important;
        }

        .py-sm-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-sm-6 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-sm-7 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .py-sm-8 {
            padding-top: 7.5rem !important;
            padding-bottom: 7.5rem !important;
        }

        .py-sm-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .py-sm-10 {
            padding-top: 12.5rem !important;
            padding-bottom: 12.5rem !important;
        }

        .py-sm-11 {
            padding-top: 15rem !important;
            padding-bottom: 15rem !important;
        }

        .pt-sm-0 {
            padding-top: 0 !important;
        }

        .pt-sm-1 {
            padding-top: 0.25rem !important;
        }

        .pt-sm-2 {
            padding-top: 0.5rem !important;
        }

        .pt-sm-3 {
            padding-top: 1rem !important;
        }

        .pt-sm-4 {
            padding-top: 1.8rem !important;
        }

        .pt-sm-5 {
            padding-top: 3rem !important;
        }

        .pt-sm-6 {
            padding-top: 4rem !important;
        }

        .pt-sm-7 {
            padding-top: 5rem !important;
        }

        .pt-sm-8 {
            padding-top: 7.5rem !important;
        }

        .pt-sm-9 {
            padding-top: 10rem !important;
        }

        .pt-sm-10 {
            padding-top: 12.5rem !important;
        }

        .pt-sm-11 {
            padding-top: 15rem !important;
        }

        .pe-sm-0 {
            padding-right: 0 !important;
        }

        .pe-sm-1 {
            padding-right: 0.25rem !important;
        }

        .pe-sm-2 {
            padding-right: 0.5rem !important;
        }

        .pe-sm-3 {
            padding-right: 1rem !important;
        }

        .pe-sm-4 {
            padding-right: 1.8rem !important;
        }

        .pe-sm-5 {
            padding-right: 3rem !important;
        }

        .pe-sm-6 {
            padding-right: 4rem !important;
        }

        .pe-sm-7 {
            padding-right: 5rem !important;
        }

        .pe-sm-8 {
            padding-right: 7.5rem !important;
        }

        .pe-sm-9 {
            padding-right: 10rem !important;
        }

        .pe-sm-10 {
            padding-right: 12.5rem !important;
        }

        .pe-sm-11 {
            padding-right: 15rem !important;
        }

        .pb-sm-0 {
            padding-bottom: 0 !important;
        }

        .pb-sm-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-sm-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-sm-3 {
            padding-bottom: 1rem !important;
        }

        .pb-sm-4 {
            padding-bottom: 1.8rem !important;
        }

        .pb-sm-5 {
            padding-bottom: 3rem !important;
        }

        .pb-sm-6 {
            padding-bottom: 4rem !important;
        }

        .pb-sm-7 {
            padding-bottom: 5rem !important;
        }

        .pb-sm-8 {
            padding-bottom: 7.5rem !important;
        }

        .pb-sm-9 {
            padding-bottom: 10rem !important;
        }

        .pb-sm-10 {
            padding-bottom: 12.5rem !important;
        }

        .pb-sm-11 {
            padding-bottom: 15rem !important;
        }

        .ps-sm-0 {
            padding-left: 0 !important;
        }

        .ps-sm-1 {
            padding-left: 0.25rem !important;
        }

        .ps-sm-2 {
            padding-left: 0.5rem !important;
        }

        .ps-sm-3 {
            padding-left: 1rem !important;
        }

        .ps-sm-4 {
            padding-left: 1.8rem !important;
        }

        .ps-sm-5 {
            padding-left: 3rem !important;
        }

        .ps-sm-6 {
            padding-left: 4rem !important;
        }

        .ps-sm-7 {
            padding-left: 5rem !important;
        }

        .ps-sm-8 {
            padding-left: 7.5rem !important;
        }

        .ps-sm-9 {
            padding-left: 10rem !important;
        }

        .ps-sm-10 {
            padding-left: 12.5rem !important;
        }

        .ps-sm-11 {
            padding-left: 15rem !important;
        }

        .fs-sm--2 {
            font-size: 0.69444rem !important;
        }

        .fs-sm--1 {
            font-size: 0.83333rem !important;
        }

        .fs-sm-0 {
            font-size: 1rem !important;
        }

        .fs-sm-1 {
            font-size: 1.2rem !important;
        }

        .fs-sm-2 {
            font-size: 1.44rem !important;
        }

        .fs-sm-3 {
            font-size: 1.728rem !important;
        }

        .fs-sm-4 {
            font-size: 2.0736rem !important;
        }

        .fs-sm-5 {
            font-size: 2.48832rem !important;
        }

        .fs-sm-6 {
            font-size: 2.98598rem !important;
        }

        .fs-sm-7 {
            font-size: 3.58318rem !important;
        }

        .fs-sm-8 {
            font-size: 4.29982rem !important;
        }

        .text-sm-start {
            text-align: left !important;
        }

        .text-sm-end {
            text-align: right !important;
        }

        .text-sm-center {
            text-align: center !important;
        }

        .opacity-sm-0 {
            opacity: 0 !important;
        }

        .opacity-sm-25 {
            opacity: 0.25 !important;
        }

        .opacity-sm-50 {
            opacity: 0.5 !important;
        }

        .opacity-sm-75 {
            opacity: 0.75 !important;
        }

        .opacity-sm-85 {
            opacity: 0.85 !important;
        }

        .opacity-sm-100 {
            opacity: 1 !important;
        }

        .text-sm-facebook {
            color: #3c5a99 !important;
        }

        .text-sm-google-plus {
            color: #dd4b39 !important;
        }

        .text-sm-twitter {
            color: #1da1f2 !important;
        }

        .text-sm-linkedin {
            color: #0077b5 !important;
        }

        .text-sm-youtube {
            color: #ff0000 !important;
        }

        .text-sm-github {
            color: #333 !important;
        }

        .text-sm-black {
            color: #000 !important;
        }

        .text-sm-100 {
            color: #FAFAFA !important;
        }

        .text-sm-200 {
            color: #E8E5E9 !important;
        }

        .text-sm-300 {
            color: #DFDBDF !important;
        }

        .text-sm-400 {
            color: #D5D1D6 !important;
        }

        .text-sm-500 {
            color: #CCC6CD !important;
        }

        .text-sm-600 {
            color: #C3BCC4 !important;
        }

        .text-sm-700 {
            color: #B9B1BB !important;
        }

        .text-sm-800 {
            color: #B0A7B2 !important;
        }

        .text-sm-900 {
            color: #A79CA8 !important;
        }

        .text-sm-1000 {
            color: #778295 !important;
        }

        .text-sm-1100 {
            color: #44224B !important;
        }

        .text-sm-1200 {
            color: #091E40 !important;
        }

        .text-sm-white {
            color: #fff !important;
        }

        .max-vh-sm-25 {
            max-height: 25vh !important;
        }

        .max-vh-sm-50 {
            max-height: 50vh !important;
        }

        .max-vh-sm-75 {
            max-height: 75vh !important;
        }

        .max-vh-sm-100 {
            max-height: 100vh !important;
        }

        .border-sm-x {
            border-left: 1px solid #DFDBDF !important;
            border-right: 1px solid #DFDBDF !important;
        }

        .border-sm-x-0 {
            border-left: 0 !important;
            border-right: 0 !important;
        }

        .border-sm-y {
            border-top: 1px solid #DFDBDF !important;
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-sm-y-0 {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }

        .border-sm-dashed {
            border: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-top {
            border-top: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-end {
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-start {
            border-left: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-bottom {
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-x {
            border-left: 1px dashed #DFDBDF !important;
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-sm-dashed-y {
            border-top: 1px dashed #DFDBDF !important;
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .rounded-sm-0 {
            border-radius: 0 !important;
        }
    }

    @media (min-width: 768px) {
        .float-md-start {
            float: left !important;
        }

        .float-md-end {
            float: right !important;
        }

        .float-md-none {
            float: none !important;
        }

        .d-md-inline {
            display: inline !important;
        }

        .d-md-inline-block {
            display: inline-block !important;
        }

        .d-md-block {
            display: block !important;
        }

        .d-md-grid {
            display: grid !important;
        }

        .d-md-table {
            display: table !important;
        }

        .d-md-table-row {
            display: table-row !important;
        }

        .d-md-table-cell {
            display: table-cell !important;
        }

        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-md-none {
            display: none !important;
        }

        .position-md-static {
            position: static !important;
        }

        .position-md-absolute {
            position: absolute !important;
        }

        .position-md-relative {
            position: relative !important;
        }

        .position-md-fixed {
            position: fixed !important;
        }

        .position-md-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .translate-md-middle {
            -webkit-transform: translateX(-50%) translateY(-50%) !important;
            -ms-transform: translateX(-50%) translateY(-50%) !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .translate-md-middle-x {
            -webkit-transform: translateX(-50%) !important;
            -ms-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-md-middle-y {
            -webkit-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border-md {
            border: 1px solid #DFDBDF !important;
        }

        .border-md-0 {
            border: 0 !important;
        }

        .border-md-top {
            border-top: 1px solid #DFDBDF !important;
        }

        .border-md-top-0 {
            border-top: 0 !important;
        }

        .border-md-end {
            border-right: 1px solid #DFDBDF !important;
        }

        .border-md-end-0 {
            border-right: 0 !important;
        }

        .border-md-bottom {
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-md-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-md-start {
            border-left: 1px solid #DFDBDF !important;
        }

        .border-md-start-0 {
            border-left: 0 !important;
        }

        .w-md-25 {
            width: 25% !important;
        }

        .w-md-50 {
            width: 50% !important;
        }

        .w-md-75 {
            width: 75% !important;
        }

        .w-md-100 {
            width: 100% !important;
        }

        .w-md-auto {
            width: auto !important;
        }

        .vw-md-25 {
            width: 25vw !important;
        }

        .vw-md-50 {
            width: 50vw !important;
        }

        .vw-md-75 {
            width: 75vw !important;
        }

        .vw-md-100 {
            width: 100vw !important;
        }

        .h-md-25 {
            height: 25% !important;
        }

        .h-md-50 {
            height: 50% !important;
        }

        .h-md-75 {
            height: 75% !important;
        }

        .h-md-100 {
            height: 100% !important;
        }

        .h-md-auto {
            height: auto !important;
        }

        .vh-md-25 {
            height: 25vh !important;
        }

        .vh-md-50 {
            height: 50vh !important;
        }

        .vh-md-75 {
            height: 75vh !important;
        }

        .vh-md-100 {
            height: 100vh !important;
        }

        .min-vh-md-25 {
            min-height: 25vh !important;
        }

        .min-vh-md-50 {
            min-height: 50vh !important;
        }

        .min-vh-md-75 {
            min-height: 75vh !important;
        }

        .min-vh-md-100 {
            min-height: 100vh !important;
        }

        .flex-md-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-md-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-md-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-md-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-md-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-md-0 {
            gap: 0 !important;
        }

        .gap-md-1 {
            gap: 0.25rem !important;
        }

        .gap-md-2 {
            gap: 0.5rem !important;
        }

        .gap-md-3 {
            gap: 1rem !important;
        }

        .gap-md-4 {
            gap: 1.8rem !important;
        }

        .gap-md-5 {
            gap: 3rem !important;
        }

        .gap-md-6 {
            gap: 4rem !important;
        }

        .gap-md-7 {
            gap: 5rem !important;
        }

        .gap-md-8 {
            gap: 7.5rem !important;
        }

        .gap-md-9 {
            gap: 10rem !important;
        }

        .gap-md-10 {
            gap: 12.5rem !important;
        }

        .gap-md-11 {
            gap: 15rem !important;
        }

        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-md-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-md-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-md-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-md-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-md-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-md-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-md-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-md-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-md-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-md-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-md-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-md-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-md-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-md-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-md-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-md-0 {
            margin: 0 !important;
        }

        .m-md-1 {
            margin: 0.25rem !important;
        }

        .m-md-2 {
            margin: 0.5rem !important;
        }

        .m-md-3 {
            margin: 1rem !important;
        }

        .m-md-4 {
            margin: 1.8rem !important;
        }

        .m-md-5 {
            margin: 3rem !important;
        }

        .m-md-6 {
            margin: 4rem !important;
        }

        .m-md-7 {
            margin: 5rem !important;
        }

        .m-md-8 {
            margin: 7.5rem !important;
        }

        .m-md-9 {
            margin: 10rem !important;
        }

        .m-md-10 {
            margin: 12.5rem !important;
        }

        .m-md-11 {
            margin: 15rem !important;
        }

        .m-md-auto {
            margin: auto !important;
        }

        .mx-md-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-md-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-md-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-md-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-md-4 {
            margin-right: 1.8rem !important;
            margin-left: 1.8rem !important;
        }

        .mx-md-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-md-6 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-md-7 {
            margin-right: 5rem !important;
            margin-left: 5rem !important;
        }

        .mx-md-8 {
            margin-right: 7.5rem !important;
            margin-left: 7.5rem !important;
        }

        .mx-md-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-md-10 {
            margin-right: 12.5rem !important;
            margin-left: 12.5rem !important;
        }

        .mx-md-11 {
            margin-right: 15rem !important;
            margin-left: 15rem !important;
        }

        .mx-md-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-md-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-md-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-md-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-md-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-md-4 {
            margin-top: 1.8rem !important;
            margin-bottom: 1.8rem !important;
        }

        .my-md-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-md-6 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-md-7 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .my-md-8 {
            margin-top: 7.5rem !important;
            margin-bottom: 7.5rem !important;
        }

        .my-md-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-md-10 {
            margin-top: 12.5rem !important;
            margin-bottom: 12.5rem !important;
        }

        .my-md-11 {
            margin-top: 15rem !important;
            margin-bottom: 15rem !important;
        }

        .my-md-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-md-0 {
            margin-top: 0 !important;
        }

        .mt-md-1 {
            margin-top: 0.25rem !important;
        }

        .mt-md-2 {
            margin-top: 0.5rem !important;
        }

        .mt-md-3 {
            margin-top: 1rem !important;
        }

        .mt-md-4 {
            margin-top: 1.8rem !important;
        }

        .mt-md-5 {
            margin-top: 3rem !important;
        }

        .mt-md-6 {
            margin-top: 4rem !important;
        }

        .mt-md-7 {
            margin-top: 5rem !important;
        }

        .mt-md-8 {
            margin-top: 7.5rem !important;
        }

        .mt-md-9 {
            margin-top: 10rem !important;
        }

        .mt-md-10 {
            margin-top: 12.5rem !important;
        }

        .mt-md-11 {
            margin-top: 15rem !important;
        }

        .mt-md-auto {
            margin-top: auto !important;
        }

        .me-md-0 {
            margin-right: 0 !important;
        }

        .me-md-1 {
            margin-right: 0.25rem !important;
        }

        .me-md-2 {
            margin-right: 0.5rem !important;
        }

        .me-md-3 {
            margin-right: 1rem !important;
        }

        .me-md-4 {
            margin-right: 1.8rem !important;
        }

        .me-md-5 {
            margin-right: 3rem !important;
        }

        .me-md-6 {
            margin-right: 4rem !important;
        }

        .me-md-7 {
            margin-right: 5rem !important;
        }

        .me-md-8 {
            margin-right: 7.5rem !important;
        }

        .me-md-9 {
            margin-right: 10rem !important;
        }

        .me-md-10 {
            margin-right: 12.5rem !important;
        }

        .me-md-11 {
            margin-right: 15rem !important;
        }

        .me-md-auto {
            margin-right: auto !important;
        }

        .mb-md-0 {
            margin-bottom: 0 !important;
        }

        .mb-md-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-md-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-md-3 {
            margin-bottom: 1rem !important;
        }

        .mb-md-4 {
            margin-bottom: 1.8rem !important;
        }

        .mb-md-5 {
            margin-bottom: 3rem !important;
        }

        .mb-md-6 {
            margin-bottom: 4rem !important;
        }

        .mb-md-7 {
            margin-bottom: 5rem !important;
        }

        .mb-md-8 {
            margin-bottom: 7.5rem !important;
        }

        .mb-md-9 {
            margin-bottom: 10rem !important;
        }

        .mb-md-10 {
            margin-bottom: 12.5rem !important;
        }

        .mb-md-11 {
            margin-bottom: 15rem !important;
        }

        .mb-md-auto {
            margin-bottom: auto !important;
        }

        .ms-md-0 {
            margin-left: 0 !important;
        }

        .ms-md-1 {
            margin-left: 0.25rem !important;
        }

        .ms-md-2 {
            margin-left: 0.5rem !important;
        }

        .ms-md-3 {
            margin-left: 1rem !important;
        }

        .ms-md-4 {
            margin-left: 1.8rem !important;
        }

        .ms-md-5 {
            margin-left: 3rem !important;
        }

        .ms-md-6 {
            margin-left: 4rem !important;
        }

        .ms-md-7 {
            margin-left: 5rem !important;
        }

        .ms-md-8 {
            margin-left: 7.5rem !important;
        }

        .ms-md-9 {
            margin-left: 10rem !important;
        }

        .ms-md-10 {
            margin-left: 12.5rem !important;
        }

        .ms-md-11 {
            margin-left: 15rem !important;
        }

        .ms-md-auto {
            margin-left: auto !important;
        }

        .m-md-n1 {
            margin: -0.25rem !important;
        }

        .m-md-n2 {
            margin: -0.5rem !important;
        }

        .m-md-n3 {
            margin: -1rem !important;
        }

        .m-md-n4 {
            margin: -1.8rem !important;
        }

        .m-md-n5 {
            margin: -3rem !important;
        }

        .m-md-n6 {
            margin: -4rem !important;
        }

        .m-md-n7 {
            margin: -5rem !important;
        }

        .m-md-n8 {
            margin: -7.5rem !important;
        }

        .m-md-n9 {
            margin: -10rem !important;
        }

        .m-md-n10 {
            margin: -12.5rem !important;
        }

        .m-md-n11 {
            margin: -15rem !important;
        }

        .mx-md-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-md-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-md-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-md-n4 {
            margin-right: -1.8rem !important;
            margin-left: -1.8rem !important;
        }

        .mx-md-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-md-n6 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-md-n7 {
            margin-right: -5rem !important;
            margin-left: -5rem !important;
        }

        .mx-md-n8 {
            margin-right: -7.5rem !important;
            margin-left: -7.5rem !important;
        }

        .mx-md-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .mx-md-n10 {
            margin-right: -12.5rem !important;
            margin-left: -12.5rem !important;
        }

        .mx-md-n11 {
            margin-right: -15rem !important;
            margin-left: -15rem !important;
        }

        .my-md-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-md-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-md-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-md-n4 {
            margin-top: -1.8rem !important;
            margin-bottom: -1.8rem !important;
        }

        .my-md-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-md-n6 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-md-n7 {
            margin-top: -5rem !important;
            margin-bottom: -5rem !important;
        }

        .my-md-n8 {
            margin-top: -7.5rem !important;
            margin-bottom: -7.5rem !important;
        }

        .my-md-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .my-md-n10 {
            margin-top: -12.5rem !important;
            margin-bottom: -12.5rem !important;
        }

        .my-md-n11 {
            margin-top: -15rem !important;
            margin-bottom: -15rem !important;
        }

        .mt-md-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-md-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-md-n3 {
            margin-top: -1rem !important;
        }

        .mt-md-n4 {
            margin-top: -1.8rem !important;
        }

        .mt-md-n5 {
            margin-top: -3rem !important;
        }

        .mt-md-n6 {
            margin-top: -4rem !important;
        }

        .mt-md-n7 {
            margin-top: -5rem !important;
        }

        .mt-md-n8 {
            margin-top: -7.5rem !important;
        }

        .mt-md-n9 {
            margin-top: -10rem !important;
        }

        .mt-md-n10 {
            margin-top: -12.5rem !important;
        }

        .mt-md-n11 {
            margin-top: -15rem !important;
        }

        .me-md-n1 {
            margin-right: -0.25rem !important;
        }

        .me-md-n2 {
            margin-right: -0.5rem !important;
        }

        .me-md-n3 {
            margin-right: -1rem !important;
        }

        .me-md-n4 {
            margin-right: -1.8rem !important;
        }

        .me-md-n5 {
            margin-right: -3rem !important;
        }

        .me-md-n6 {
            margin-right: -4rem !important;
        }

        .me-md-n7 {
            margin-right: -5rem !important;
        }

        .me-md-n8 {
            margin-right: -7.5rem !important;
        }

        .me-md-n9 {
            margin-right: -10rem !important;
        }

        .me-md-n10 {
            margin-right: -12.5rem !important;
        }

        .me-md-n11 {
            margin-right: -15rem !important;
        }

        .mb-md-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-md-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-md-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-md-n4 {
            margin-bottom: -1.8rem !important;
        }

        .mb-md-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-md-n6 {
            margin-bottom: -4rem !important;
        }

        .mb-md-n7 {
            margin-bottom: -5rem !important;
        }

        .mb-md-n8 {
            margin-bottom: -7.5rem !important;
        }

        .mb-md-n9 {
            margin-bottom: -10rem !important;
        }

        .mb-md-n10 {
            margin-bottom: -12.5rem !important;
        }

        .mb-md-n11 {
            margin-bottom: -15rem !important;
        }

        .ms-md-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-md-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-md-n3 {
            margin-left: -1rem !important;
        }

        .ms-md-n4 {
            margin-left: -1.8rem !important;
        }

        .ms-md-n5 {
            margin-left: -3rem !important;
        }

        .ms-md-n6 {
            margin-left: -4rem !important;
        }

        .ms-md-n7 {
            margin-left: -5rem !important;
        }

        .ms-md-n8 {
            margin-left: -7.5rem !important;
        }

        .ms-md-n9 {
            margin-left: -10rem !important;
        }

        .ms-md-n10 {
            margin-left: -12.5rem !important;
        }

        .ms-md-n11 {
            margin-left: -15rem !important;
        }

        .p-md-0 {
            padding: 0 !important;
        }

        .p-md-1 {
            padding: 0.25rem !important;
        }

        .p-md-2 {
            padding: 0.5rem !important;
        }

        .p-md-3 {
            padding: 1rem !important;
        }

        .p-md-4 {
            padding: 1.8rem !important;
        }

        .p-md-5 {
            padding: 3rem !important;
        }

        .p-md-6 {
            padding: 4rem !important;
        }

        .p-md-7 {
            padding: 5rem !important;
        }

        .p-md-8 {
            padding: 7.5rem !important;
        }

        .p-md-9 {
            padding: 10rem !important;
        }

        .p-md-10 {
            padding: 12.5rem !important;
        }

        .p-md-11 {
            padding: 15rem !important;
        }

        .px-md-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-md-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-md-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-md-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-md-4 {
            padding-right: 1.8rem !important;
            padding-left: 1.8rem !important;
        }

        .px-md-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-md-6 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-md-7 {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .px-md-8 {
            padding-right: 7.5rem !important;
            padding-left: 7.5rem !important;
        }

        .px-md-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .px-md-10 {
            padding-right: 12.5rem !important;
            padding-left: 12.5rem !important;
        }

        .px-md-11 {
            padding-right: 15rem !important;
            padding-left: 15rem !important;
        }

        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-md-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-md-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-md-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-md-4 {
            padding-top: 1.8rem !important;
            padding-bottom: 1.8rem !important;
        }

        .py-md-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-md-6 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-md-7 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .py-md-8 {
            padding-top: 7.5rem !important;
            padding-bottom: 7.5rem !important;
        }

        .py-md-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .py-md-10 {
            padding-top: 12.5rem !important;
            padding-bottom: 12.5rem !important;
        }

        .py-md-11 {
            padding-top: 15rem !important;
            padding-bottom: 15rem !important;
        }

        .pt-md-0 {
            padding-top: 0 !important;
        }

        .pt-md-1 {
            padding-top: 0.25rem !important;
        }

        .pt-md-2 {
            padding-top: 0.5rem !important;
        }

        .pt-md-3 {
            padding-top: 1rem !important;
        }

        .pt-md-4 {
            padding-top: 1.8rem !important;
        }

        .pt-md-5 {
            padding-top: 3rem !important;
        }

        .pt-md-6 {
            padding-top: 4rem !important;
        }

        .pt-md-7 {
            padding-top: 5rem !important;
        }

        .pt-md-8 {
            padding-top: 7.5rem !important;
        }

        .pt-md-9 {
            padding-top: 10rem !important;
        }

        .pt-md-10 {
            padding-top: 12.5rem !important;
        }

        .pt-md-11 {
            padding-top: 15rem !important;
        }

        .pe-md-0 {
            padding-right: 0 !important;
        }

        .pe-md-1 {
            padding-right: 0.25rem !important;
        }

        .pe-md-2 {
            padding-right: 0.5rem !important;
        }

        .pe-md-3 {
            padding-right: 1rem !important;
        }

        .pe-md-4 {
            padding-right: 1.8rem !important;
        }

        .pe-md-5 {
            padding-right: 3rem !important;
        }

        .pe-md-6 {
            padding-right: 4rem !important;
        }

        .pe-md-7 {
            padding-right: 5rem !important;
        }

        .pe-md-8 {
            padding-right: 7.5rem !important;
        }

        .pe-md-9 {
            padding-right: 10rem !important;
        }

        .pe-md-10 {
            padding-right: 12.5rem !important;
        }

        .pe-md-11 {
            padding-right: 15rem !important;
        }

        .pb-md-0 {
            padding-bottom: 0 !important;
        }

        .pb-md-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-md-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-md-3 {
            padding-bottom: 1rem !important;
        }

        .pb-md-4 {
            padding-bottom: 1.8rem !important;
        }

        .pb-md-5 {
            padding-bottom: 3rem !important;
        }

        .pb-md-6 {
            padding-bottom: 4rem !important;
        }

        .pb-md-7 {
            padding-bottom: 5rem !important;
        }

        .pb-md-8 {
            padding-bottom: 7.5rem !important;
        }

        .pb-md-9 {
            padding-bottom: 10rem !important;
        }

        .pb-md-10 {
            padding-bottom: 12.5rem !important;
        }

        .pb-md-11 {
            padding-bottom: 15rem !important;
        }

        .ps-md-0 {
            padding-left: 0 !important;
        }

        .ps-md-1 {
            padding-left: 0.25rem !important;
        }

        .ps-md-2 {
            padding-left: 0.5rem !important;
        }

        .ps-md-3 {
            padding-left: 1rem !important;
        }

        .ps-md-4 {
            padding-left: 1.8rem !important;
        }

        .ps-md-5 {
            padding-left: 3rem !important;
        }

        .ps-md-6 {
            padding-left: 4rem !important;
        }

        .ps-md-7 {
            padding-left: 5rem !important;
        }

        .ps-md-8 {
            padding-left: 7.5rem !important;
        }

        .ps-md-9 {
            padding-left: 10rem !important;
        }

        .ps-md-10 {
            padding-left: 12.5rem !important;
        }

        .ps-md-11 {
            padding-left: 15rem !important;
        }

        .fs-md--2 {
            font-size: 0.69444rem !important;
        }

        .fs-md--1 {
            font-size: 0.83333rem !important;
        }

        .fs-md-0 {
            font-size: 1rem !important;
        }

        .fs-md-1 {
            font-size: 1.2rem !important;
        }

        .fs-md-2 {
            font-size: 1.44rem !important;
        }

        .fs-md-3 {
            font-size: 1.728rem !important;
        }

        .fs-md-4 {
            font-size: 2.0736rem !important;
        }

        .fs-md-5 {
            font-size: 2.48832rem !important;
        }

        .fs-md-6 {
            font-size: 2.98598rem !important;
        }

        .fs-md-7 {
            font-size: 3.58318rem !important;
        }

        .fs-md-8 {
            font-size: 4.29982rem !important;
        }

        .text-md-start {
            text-align: left !important;
        }

        .text-md-end {
            text-align: right !important;
        }

        .text-md-center {
            text-align: center !important;
        }

        .opacity-md-0 {
            opacity: 0 !important;
        }

        .opacity-md-25 {
            opacity: 0.25 !important;
        }

        .opacity-md-50 {
            opacity: 0.5 !important;
        }

        .opacity-md-75 {
            opacity: 0.75 !important;
        }

        .opacity-md-85 {
            opacity: 0.85 !important;
        }

        .opacity-md-100 {
            opacity: 1 !important;
        }

        .text-md-facebook {
            color: #3c5a99 !important;
        }

        .text-md-google-plus {
            color: #dd4b39 !important;
        }

        .text-md-twitter {
            color: #1da1f2 !important;
        }

        .text-md-linkedin {
            color: #0077b5 !important;
        }

        .text-md-youtube {
            color: #ff0000 !important;
        }

        .text-md-github {
            color: #333 !important;
        }

        .text-md-black {
            color: #000 !important;
        }

        .text-md-100 {
            color: #FAFAFA !important;
        }

        .text-md-200 {
            color: #E8E5E9 !important;
        }

        .text-md-300 {
            color: #DFDBDF !important;
        }

        .text-md-400 {
            color: #D5D1D6 !important;
        }

        .text-md-500 {
            color: #CCC6CD !important;
        }

        .text-md-600 {
            color: #C3BCC4 !important;
        }

        .text-md-700 {
            color: #B9B1BB !important;
        }

        .text-md-800 {
            color: #B0A7B2 !important;
        }

        .text-md-900 {
            color: #A79CA8 !important;
        }

        .text-md-1000 {
            color: #778295 !important;
        }

        .text-md-1100 {
            color: #44224B !important;
        }

        .text-md-1200 {
            color: #091E40 !important;
        }

        .text-md-white {
            color: #fff !important;
        }

        .max-vh-md-25 {
            max-height: 25vh !important;
        }

        .max-vh-md-50 {
            max-height: 50vh !important;
        }

        .max-vh-md-75 {
            max-height: 75vh !important;
        }

        .max-vh-md-100 {
            max-height: 100vh !important;
        }

        .border-md-x {
            border-left: 1px solid #DFDBDF !important;
            border-right: 1px solid #DFDBDF !important;
        }

        .border-md-x-0 {
            border-left: 0 !important;
            border-right: 0 !important;
        }

        .border-md-y {
            border-top: 1px solid #DFDBDF !important;
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-md-y-0 {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }

        .border-md-dashed {
            border: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-top {
            border-top: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-end {
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-start {
            border-left: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-bottom {
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-x {
            border-left: 1px dashed #DFDBDF !important;
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-md-dashed-y {
            border-top: 1px dashed #DFDBDF !important;
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .rounded-md-0 {
            border-radius: 0 !important;
        }
    }

    @media (min-width: 992px) {
        .float-lg-start {
            float: left !important;
        }

        .float-lg-end {
            float: right !important;
        }

        .float-lg-none {
            float: none !important;
        }

        .d-lg-inline {
            display: inline !important;
        }

        .d-lg-inline-block {
            display: inline-block !important;
        }

        .d-lg-block {
            display: block !important;
        }

        .d-lg-grid {
            display: grid !important;
        }

        .d-lg-table {
            display: table !important;
        }

        .d-lg-table-row {
            display: table-row !important;
        }

        .d-lg-table-cell {
            display: table-cell !important;
        }

        .d-lg-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-lg-none {
            display: none !important;
        }

        .position-lg-static {
            position: static !important;
        }

        .position-lg-absolute {
            position: absolute !important;
        }

        .position-lg-relative {
            position: relative !important;
        }

        .position-lg-fixed {
            position: fixed !important;
        }

        .position-lg-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .translate-lg-middle {
            -webkit-transform: translateX(-50%) translateY(-50%) !important;
            -ms-transform: translateX(-50%) translateY(-50%) !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .translate-lg-middle-x {
            -webkit-transform: translateX(-50%) !important;
            -ms-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-lg-middle-y {
            -webkit-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border-lg {
            border: 1px solid #DFDBDF !important;
        }

        .border-lg-0 {
            border: 0 !important;
        }

        .border-lg-top {
            border-top: 1px solid #DFDBDF !important;
        }

        .border-lg-top-0 {
            border-top: 0 !important;
        }

        .border-lg-end {
            border-right: 1px solid #DFDBDF !important;
        }

        .border-lg-end-0 {
            border-right: 0 !important;
        }

        .border-lg-bottom {
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-lg-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-lg-start {
            border-left: 1px solid #DFDBDF !important;
        }

        .border-lg-start-0 {
            border-left: 0 !important;
        }

        .w-lg-25 {
            width: 25% !important;
        }

        .w-lg-50 {
            width: 50% !important;
        }

        .w-lg-75 {
            width: 75% !important;
        }

        .w-lg-100 {
            width: 100% !important;
        }

        .w-lg-auto {
            width: auto !important;
        }

        .vw-lg-25 {
            width: 25vw !important;
        }

        .vw-lg-50 {
            width: 50vw !important;
        }

        .vw-lg-75 {
            width: 75vw !important;
        }

        .vw-lg-100 {
            width: 100vw !important;
        }

        .h-lg-25 {
            height: 25% !important;
        }

        .h-lg-50 {
            height: 50% !important;
        }

        .h-lg-75 {
            height: 75% !important;
        }

        .h-lg-100 {
            height: 100% !important;
        }

        .h-lg-auto {
            height: auto !important;
        }

        .vh-lg-25 {
            height: 25vh !important;
        }

        .vh-lg-50 {
            height: 50vh !important;
        }

        .vh-lg-75 {
            height: 75vh !important;
        }

        .vh-lg-100 {
            height: 100vh !important;
        }

        .min-vh-lg-25 {
            min-height: 25vh !important;
        }

        .min-vh-lg-50 {
            min-height: 50vh !important;
        }

        .min-vh-lg-75 {
            min-height: 75vh !important;
        }

        .min-vh-lg-100 {
            min-height: 100vh !important;
        }

        .flex-lg-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-lg-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-lg-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-lg-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-lg-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-lg-0 {
            gap: 0 !important;
        }

        .gap-lg-1 {
            gap: 0.25rem !important;
        }

        .gap-lg-2 {
            gap: 0.5rem !important;
        }

        .gap-lg-3 {
            gap: 1rem !important;
        }

        .gap-lg-4 {
            gap: 1.8rem !important;
        }

        .gap-lg-5 {
            gap: 3rem !important;
        }

        .gap-lg-6 {
            gap: 4rem !important;
        }

        .gap-lg-7 {
            gap: 5rem !important;
        }

        .gap-lg-8 {
            gap: 7.5rem !important;
        }

        .gap-lg-9 {
            gap: 10rem !important;
        }

        .gap-lg-10 {
            gap: 12.5rem !important;
        }

        .gap-lg-11 {
            gap: 15rem !important;
        }

        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-lg-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-lg-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-lg-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-lg-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-lg-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-lg-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-lg-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-lg-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-lg-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-lg-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-lg-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-lg-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-lg-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-lg-0 {
            margin: 0 !important;
        }

        .m-lg-1 {
            margin: 0.25rem !important;
        }

        .m-lg-2 {
            margin: 0.5rem !important;
        }

        .m-lg-3 {
            margin: 1rem !important;
        }

        .m-lg-4 {
            margin: 1.8rem !important;
        }

        .m-lg-5 {
            margin: 3rem !important;
        }

        .m-lg-6 {
            margin: 4rem !important;
        }

        .m-lg-7 {
            margin: 5rem !important;
        }

        .m-lg-8 {
            margin: 7.5rem !important;
        }

        .m-lg-9 {
            margin: 10rem !important;
        }

        .m-lg-10 {
            margin: 12.5rem !important;
        }

        .m-lg-11 {
            margin: 15rem !important;
        }

        .m-lg-auto {
            margin: auto !important;
        }

        .mx-lg-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-lg-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-lg-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-lg-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-lg-4 {
            margin-right: 1.8rem !important;
            margin-left: 1.8rem !important;
        }

        .mx-lg-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-lg-6 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-lg-7 {
            margin-right: 5rem !important;
            margin-left: 5rem !important;
        }

        .mx-lg-8 {
            margin-right: 7.5rem !important;
            margin-left: 7.5rem !important;
        }

        .mx-lg-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-lg-10 {
            margin-right: 12.5rem !important;
            margin-left: 12.5rem !important;
        }

        .mx-lg-11 {
            margin-right: 15rem !important;
            margin-left: 15rem !important;
        }

        .mx-lg-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-lg-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-lg-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-lg-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-lg-4 {
            margin-top: 1.8rem !important;
            margin-bottom: 1.8rem !important;
        }

        .my-lg-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-lg-6 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-lg-7 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .my-lg-8 {
            margin-top: 7.5rem !important;
            margin-bottom: 7.5rem !important;
        }

        .my-lg-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-lg-10 {
            margin-top: 12.5rem !important;
            margin-bottom: 12.5rem !important;
        }

        .my-lg-11 {
            margin-top: 15rem !important;
            margin-bottom: 15rem !important;
        }

        .my-lg-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-lg-0 {
            margin-top: 0 !important;
        }

        .mt-lg-1 {
            margin-top: 0.25rem !important;
        }

        .mt-lg-2 {
            margin-top: 0.5rem !important;
        }

        .mt-lg-3 {
            margin-top: 1rem !important;
        }

        .mt-lg-4 {
            margin-top: 1.8rem !important;
        }

        .mt-lg-5 {
            margin-top: 3rem !important;
        }

        .mt-lg-6 {
            margin-top: 4rem !important;
        }

        .mt-lg-7 {
            margin-top: 5rem !important;
        }

        .mt-lg-8 {
            margin-top: 7.5rem !important;
        }

        .mt-lg-9 {
            margin-top: 10rem !important;
        }

        .mt-lg-10 {
            margin-top: 12.5rem !important;
        }

        .mt-lg-11 {
            margin-top: 15rem !important;
        }

        .mt-lg-auto {
            margin-top: auto !important;
        }

        .me-lg-0 {
            margin-right: 0 !important;
        }

        .me-lg-1 {
            margin-right: 0.25rem !important;
        }

        .me-lg-2 {
            margin-right: 0.5rem !important;
        }

        .me-lg-3 {
            margin-right: 1rem !important;
        }

        .me-lg-4 {
            margin-right: 1.8rem !important;
        }

        .me-lg-5 {
            margin-right: 3rem !important;
        }

        .me-lg-6 {
            margin-right: 4rem !important;
        }

        .me-lg-7 {
            margin-right: 5rem !important;
        }

        .me-lg-8 {
            margin-right: 7.5rem !important;
        }

        .me-lg-9 {
            margin-right: 10rem !important;
        }

        .me-lg-10 {
            margin-right: 12.5rem !important;
        }

        .me-lg-11 {
            margin-right: 15rem !important;
        }

        .me-lg-auto {
            margin-right: auto !important;
        }

        .mb-lg-0 {
            margin-bottom: 0 !important;
        }

        .mb-lg-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-lg-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-lg-3 {
            margin-bottom: 1rem !important;
        }

        .mb-lg-4 {
            margin-bottom: 1.8rem !important;
        }

        .mb-lg-5 {
            margin-bottom: 3rem !important;
        }

        .mb-lg-6 {
            margin-bottom: 4rem !important;
        }

        .mb-lg-7 {
            margin-bottom: 5rem !important;
        }

        .mb-lg-8 {
            margin-bottom: 7.5rem !important;
        }

        .mb-lg-9 {
            margin-bottom: 10rem !important;
        }

        .mb-lg-10 {
            margin-bottom: 12.5rem !important;
        }

        .mb-lg-11 {
            margin-bottom: 15rem !important;
        }

        .mb-lg-auto {
            margin-bottom: auto !important;
        }

        .ms-lg-0 {
            margin-left: 0 !important;
        }

        .ms-lg-1 {
            margin-left: 0.25rem !important;
        }

        .ms-lg-2 {
            margin-left: 0.5rem !important;
        }

        .ms-lg-3 {
            margin-left: 1rem !important;
        }

        .ms-lg-4 {
            margin-left: 1.8rem !important;
        }

        .ms-lg-5 {
            margin-left: 3rem !important;
        }

        .ms-lg-6 {
            margin-left: 4rem !important;
        }

        .ms-lg-7 {
            margin-left: 5rem !important;
        }

        .ms-lg-8 {
            margin-left: 7.5rem !important;
        }

        .ms-lg-9 {
            margin-left: 10rem !important;
        }

        .ms-lg-10 {
            margin-left: 12.5rem !important;
        }

        .ms-lg-11 {
            margin-left: 15rem !important;
        }

        .ms-lg-auto {
            margin-left: auto !important;
        }

        .m-lg-n1 {
            margin: -0.25rem !important;
        }

        .m-lg-n2 {
            margin: -0.5rem !important;
        }

        .m-lg-n3 {
            margin: -1rem !important;
        }

        .m-lg-n4 {
            margin: -1.8rem !important;
        }

        .m-lg-n5 {
            margin: -3rem !important;
        }

        .m-lg-n6 {
            margin: -4rem !important;
        }

        .m-lg-n7 {
            margin: -5rem !important;
        }

        .m-lg-n8 {
            margin: -7.5rem !important;
        }

        .m-lg-n9 {
            margin: -10rem !important;
        }

        .m-lg-n10 {
            margin: -12.5rem !important;
        }

        .m-lg-n11 {
            margin: -15rem !important;
        }

        .mx-lg-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-lg-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-lg-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-lg-n4 {
            margin-right: -1.8rem !important;
            margin-left: -1.8rem !important;
        }

        .mx-lg-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-lg-n6 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-lg-n7 {
            margin-right: -5rem !important;
            margin-left: -5rem !important;
        }

        .mx-lg-n8 {
            margin-right: -7.5rem !important;
            margin-left: -7.5rem !important;
        }

        .mx-lg-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .mx-lg-n10 {
            margin-right: -12.5rem !important;
            margin-left: -12.5rem !important;
        }

        .mx-lg-n11 {
            margin-right: -15rem !important;
            margin-left: -15rem !important;
        }

        .my-lg-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-lg-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-lg-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-lg-n4 {
            margin-top: -1.8rem !important;
            margin-bottom: -1.8rem !important;
        }

        .my-lg-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-lg-n6 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-lg-n7 {
            margin-top: -5rem !important;
            margin-bottom: -5rem !important;
        }

        .my-lg-n8 {
            margin-top: -7.5rem !important;
            margin-bottom: -7.5rem !important;
        }

        .my-lg-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .my-lg-n10 {
            margin-top: -12.5rem !important;
            margin-bottom: -12.5rem !important;
        }

        .my-lg-n11 {
            margin-top: -15rem !important;
            margin-bottom: -15rem !important;
        }

        .mt-lg-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-lg-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-lg-n3 {
            margin-top: -1rem !important;
        }

        .mt-lg-n4 {
            margin-top: -1.8rem !important;
        }

        .mt-lg-n5 {
            margin-top: -3rem !important;
        }

        .mt-lg-n6 {
            margin-top: -4rem !important;
        }

        .mt-lg-n7 {
            margin-top: -5rem !important;
        }

        .mt-lg-n8 {
            margin-top: -7.5rem !important;
        }

        .mt-lg-n9 {
            margin-top: -10rem !important;
        }

        .mt-lg-n10 {
            margin-top: -12.5rem !important;
        }

        .mt-lg-n11 {
            margin-top: -15rem !important;
        }

        .me-lg-n1 {
            margin-right: -0.25rem !important;
        }

        .me-lg-n2 {
            margin-right: -0.5rem !important;
        }

        .me-lg-n3 {
            margin-right: -1rem !important;
        }

        .me-lg-n4 {
            margin-right: -1.8rem !important;
        }

        .me-lg-n5 {
            margin-right: -3rem !important;
        }

        .me-lg-n6 {
            margin-right: -4rem !important;
        }

        .me-lg-n7 {
            margin-right: -5rem !important;
        }

        .me-lg-n8 {
            margin-right: -7.5rem !important;
        }

        .me-lg-n9 {
            margin-right: -10rem !important;
        }

        .me-lg-n10 {
            margin-right: -12.5rem !important;
        }

        .me-lg-n11 {
            margin-right: -15rem !important;
        }

        .mb-lg-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-lg-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-lg-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-lg-n4 {
            margin-bottom: -1.8rem !important;
        }

        .mb-lg-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-lg-n6 {
            margin-bottom: -4rem !important;
        }

        .mb-lg-n7 {
            margin-bottom: -5rem !important;
        }

        .mb-lg-n8 {
            margin-bottom: -7.5rem !important;
        }

        .mb-lg-n9 {
            margin-bottom: -10rem !important;
        }

        .mb-lg-n10 {
            margin-bottom: -12.5rem !important;
        }

        .mb-lg-n11 {
            margin-bottom: -15rem !important;
        }

        .ms-lg-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-lg-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-lg-n3 {
            margin-left: -1rem !important;
        }

        .ms-lg-n4 {
            margin-left: -1.8rem !important;
        }

        .ms-lg-n5 {
            margin-left: -3rem !important;
        }

        .ms-lg-n6 {
            margin-left: -4rem !important;
        }

        .ms-lg-n7 {
            margin-left: -5rem !important;
        }

        .ms-lg-n8 {
            margin-left: -7.5rem !important;
        }

        .ms-lg-n9 {
            margin-left: -10rem !important;
        }

        .ms-lg-n10 {
            margin-left: -12.5rem !important;
        }

        .ms-lg-n11 {
            margin-left: -15rem !important;
        }

        .p-lg-0 {
            padding: 0 !important;
        }

        .p-lg-1 {
            padding: 0.25rem !important;
        }

        .p-lg-2 {
            padding: 0.5rem !important;
        }

        .p-lg-3 {
            padding: 1rem !important;
        }

        .p-lg-4 {
            padding: 1.8rem !important;
        }

        .p-lg-5 {
            padding: 3rem !important;
        }

        .p-lg-6 {
            padding: 4rem !important;
        }

        .p-lg-7 {
            padding: 5rem !important;
        }

        .p-lg-8 {
            padding: 7.5rem !important;
        }

        .p-lg-9 {
            padding: 10rem !important;
        }

        .p-lg-10 {
            padding: 12.5rem !important;
        }

        .p-lg-11 {
            padding: 15rem !important;
        }

        .px-lg-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-lg-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-lg-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-lg-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-lg-4 {
            padding-right: 1.8rem !important;
            padding-left: 1.8rem !important;
        }

        .px-lg-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-lg-6 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-lg-7 {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .px-lg-8 {
            padding-right: 7.5rem !important;
            padding-left: 7.5rem !important;
        }

        .px-lg-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .px-lg-10 {
            padding-right: 12.5rem !important;
            padding-left: 12.5rem !important;
        }

        .px-lg-11 {
            padding-right: 15rem !important;
            padding-left: 15rem !important;
        }

        .py-lg-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-lg-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-lg-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-lg-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-lg-4 {
            padding-top: 1.8rem !important;
            padding-bottom: 1.8rem !important;
        }

        .py-lg-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-lg-6 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-lg-7 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .py-lg-8 {
            padding-top: 7.5rem !important;
            padding-bottom: 7.5rem !important;
        }

        .py-lg-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .py-lg-10 {
            padding-top: 12.5rem !important;
            padding-bottom: 12.5rem !important;
        }

        .py-lg-11 {
            padding-top: 15rem !important;
            padding-bottom: 15rem !important;
        }

        .pt-lg-0 {
            padding-top: 0 !important;
        }

        .pt-lg-1 {
            padding-top: 0.25rem !important;
        }

        .pt-lg-2 {
            padding-top: 0.5rem !important;
        }

        .pt-lg-3 {
            padding-top: 1rem !important;
        }

        .pt-lg-4 {
            padding-top: 1.8rem !important;
        }

        .pt-lg-5 {
            padding-top: 3rem !important;
        }

        .pt-lg-6 {
            padding-top: 4rem !important;
        }

        .pt-lg-7 {
            padding-top: 5rem !important;
        }

        .pt-lg-8 {
            padding-top: 7.5rem !important;
        }

        .pt-lg-9 {
            padding-top: 10rem !important;
        }

        .pt-lg-10 {
            padding-top: 12.5rem !important;
        }

        .pt-lg-11 {
            padding-top: 15rem !important;
        }

        .pe-lg-0 {
            padding-right: 0 !important;
        }

        .pe-lg-1 {
            padding-right: 0.25rem !important;
        }

        .pe-lg-2 {
            padding-right: 0.5rem !important;
        }

        .pe-lg-3 {
            padding-right: 1rem !important;
        }

        .pe-lg-4 {
            padding-right: 1.8rem !important;
        }

        .pe-lg-5 {
            padding-right: 3rem !important;
        }

        .pe-lg-6 {
            padding-right: 4rem !important;
        }

        .pe-lg-7 {
            padding-right: 5rem !important;
        }

        .pe-lg-8 {
            padding-right: 7.5rem !important;
        }

        .pe-lg-9 {
            padding-right: 10rem !important;
        }

        .pe-lg-10 {
            padding-right: 12.5rem !important;
        }

        .pe-lg-11 {
            padding-right: 15rem !important;
        }

        .pb-lg-0 {
            padding-bottom: 0 !important;
        }

        .pb-lg-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-lg-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-lg-3 {
            padding-bottom: 1rem !important;
        }

        .pb-lg-4 {
            padding-bottom: 1.8rem !important;
        }

        .pb-lg-5 {
            padding-bottom: 3rem !important;
        }

        .pb-lg-6 {
            padding-bottom: 4rem !important;
        }

        .pb-lg-7 {
            padding-bottom: 5rem !important;
        }

        .pb-lg-8 {
            padding-bottom: 7.5rem !important;
        }

        .pb-lg-9 {
            padding-bottom: 10rem !important;
        }

        .pb-lg-10 {
            padding-bottom: 12.5rem !important;
        }

        .pb-lg-11 {
            padding-bottom: 15rem !important;
        }

        .ps-lg-0 {
            padding-left: 0 !important;
        }

        .ps-lg-1 {
            padding-left: 0.25rem !important;
        }

        .ps-lg-2 {
            padding-left: 0.5rem !important;
        }

        .ps-lg-3 {
            padding-left: 1rem !important;
        }

        .ps-lg-4 {
            padding-left: 1.8rem !important;
        }

        .ps-lg-5 {
            padding-left: 3rem !important;
        }

        .ps-lg-6 {
            padding-left: 4rem !important;
        }

        .ps-lg-7 {
            padding-left: 5rem !important;
        }

        .ps-lg-8 {
            padding-left: 7.5rem !important;
        }

        .ps-lg-9 {
            padding-left: 10rem !important;
        }

        .ps-lg-10 {
            padding-left: 12.5rem !important;
        }

        .ps-lg-11 {
            padding-left: 15rem !important;
        }

        .fs-lg--2 {
            font-size: 0.69444rem !important;
        }

        .fs-lg--1 {
            font-size: 0.83333rem !important;
        }

        .fs-lg-0 {
            font-size: 1rem !important;
        }

        .fs-lg-1 {
            font-size: 1.2rem !important;
        }

        .fs-lg-2 {
            font-size: 1.44rem !important;
        }

        .fs-lg-3 {
            font-size: 1.728rem !important;
        }

        .fs-lg-4 {
            font-size: 2.0736rem !important;
        }

        .fs-lg-5 {
            font-size: 2.48832rem !important;
        }

        .fs-lg-6 {
            font-size: 2.98598rem !important;
        }

        .fs-lg-7 {
            font-size: 3.58318rem !important;
        }

        .fs-lg-8 {
            font-size: 4.29982rem !important;
        }

        .text-lg-start {
            text-align: left !important;
        }

        .text-lg-end {
            text-align: right !important;
        }

        .text-lg-center {
            text-align: center !important;
        }

        .opacity-lg-0 {
            opacity: 0 !important;
        }

        .opacity-lg-25 {
            opacity: 0.25 !important;
        }

        .opacity-lg-50 {
            opacity: 0.5 !important;
        }

        .opacity-lg-75 {
            opacity: 0.75 !important;
        }

        .opacity-lg-85 {
            opacity: 0.85 !important;
        }

        .opacity-lg-100 {
            opacity: 1 !important;
        }

        .text-lg-facebook {
            color: #3c5a99 !important;
        }

        .text-lg-google-plus {
            color: #dd4b39 !important;
        }

        .text-lg-twitter {
            color: #1da1f2 !important;
        }

        .text-lg-linkedin {
            color: #0077b5 !important;
        }

        .text-lg-youtube {
            color: #ff0000 !important;
        }

        .text-lg-github {
            color: #333 !important;
        }

        .text-lg-black {
            color: #000 !important;
        }

        .text-lg-100 {
            color: #FAFAFA !important;
        }

        .text-lg-200 {
            color: #E8E5E9 !important;
        }

        .text-lg-300 {
            color: #DFDBDF !important;
        }

        .text-lg-400 {
            color: #D5D1D6 !important;
        }

        .text-lg-500 {
            color: #CCC6CD !important;
        }

        .text-lg-600 {
            color: #C3BCC4 !important;
        }

        .text-lg-700 {
            color: #B9B1BB !important;
        }

        .text-lg-800 {
            color: #B0A7B2 !important;
        }

        .text-lg-900 {
            color: #A79CA8 !important;
        }

        .text-lg-1000 {
            color: #778295 !important;
        }

        .text-lg-1100 {
            color: #44224B !important;
        }

        .text-lg-1200 {
            color: #091E40 !important;
        }

        .text-lg-white {
            color: #fff !important;
        }

        .max-vh-lg-25 {
            max-height: 25vh !important;
        }

        .max-vh-lg-50 {
            max-height: 50vh !important;
        }

        .max-vh-lg-75 {
            max-height: 75vh !important;
        }

        .max-vh-lg-100 {
            max-height: 100vh !important;
        }

        .border-lg-x {
            border-left: 1px solid #DFDBDF !important;
            border-right: 1px solid #DFDBDF !important;
        }

        .border-lg-x-0 {
            border-left: 0 !important;
            border-right: 0 !important;
        }

        .border-lg-y {
            border-top: 1px solid #DFDBDF !important;
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-lg-y-0 {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }

        .border-lg-dashed {
            border: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-top {
            border-top: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-end {
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-start {
            border-left: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-bottom {
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-x {
            border-left: 1px dashed #DFDBDF !important;
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-lg-dashed-y {
            border-top: 1px dashed #DFDBDF !important;
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .rounded-lg-0 {
            border-radius: 0 !important;
        }
    }

    @media (min-width: 1200px) {
        .float-xl-start {
            float: left !important;
        }

        .float-xl-end {
            float: right !important;
        }

        .float-xl-none {
            float: none !important;
        }

        .d-xl-inline {
            display: inline !important;
        }

        .d-xl-inline-block {
            display: inline-block !important;
        }

        .d-xl-block {
            display: block !important;
        }

        .d-xl-grid {
            display: grid !important;
        }

        .d-xl-table {
            display: table !important;
        }

        .d-xl-table-row {
            display: table-row !important;
        }

        .d-xl-table-cell {
            display: table-cell !important;
        }

        .d-xl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-xl-none {
            display: none !important;
        }

        .position-xl-static {
            position: static !important;
        }

        .position-xl-absolute {
            position: absolute !important;
        }

        .position-xl-relative {
            position: relative !important;
        }

        .position-xl-fixed {
            position: fixed !important;
        }

        .position-xl-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .translate-xl-middle {
            -webkit-transform: translateX(-50%) translateY(-50%) !important;
            -ms-transform: translateX(-50%) translateY(-50%) !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .translate-xl-middle-x {
            -webkit-transform: translateX(-50%) !important;
            -ms-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-xl-middle-y {
            -webkit-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border-xl {
            border: 1px solid #DFDBDF !important;
        }

        .border-xl-0 {
            border: 0 !important;
        }

        .border-xl-top {
            border-top: 1px solid #DFDBDF !important;
        }

        .border-xl-top-0 {
            border-top: 0 !important;
        }

        .border-xl-end {
            border-right: 1px solid #DFDBDF !important;
        }

        .border-xl-end-0 {
            border-right: 0 !important;
        }

        .border-xl-bottom {
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-xl-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-xl-start {
            border-left: 1px solid #DFDBDF !important;
        }

        .border-xl-start-0 {
            border-left: 0 !important;
        }

        .w-xl-25 {
            width: 25% !important;
        }

        .w-xl-50 {
            width: 50% !important;
        }

        .w-xl-75 {
            width: 75% !important;
        }

        .w-xl-100 {
            width: 100% !important;
        }

        .w-xl-auto {
            width: auto !important;
        }

        .vw-xl-25 {
            width: 25vw !important;
        }

        .vw-xl-50 {
            width: 50vw !important;
        }

        .vw-xl-75 {
            width: 75vw !important;
        }

        .vw-xl-100 {
            width: 100vw !important;
        }

        .h-xl-25 {
            height: 25% !important;
        }

        .h-xl-50 {
            height: 50% !important;
        }

        .h-xl-75 {
            height: 75% !important;
        }

        .h-xl-100 {
            height: 100% !important;
        }

        .h-xl-auto {
            height: auto !important;
        }

        .vh-xl-25 {
            height: 25vh !important;
        }

        .vh-xl-50 {
            height: 50vh !important;
        }

        .vh-xl-75 {
            height: 75vh !important;
        }

        .vh-xl-100 {
            height: 100vh !important;
        }

        .min-vh-xl-25 {
            min-height: 25vh !important;
        }

        .min-vh-xl-50 {
            min-height: 50vh !important;
        }

        .min-vh-xl-75 {
            min-height: 75vh !important;
        }

        .min-vh-xl-100 {
            min-height: 100vh !important;
        }

        .flex-xl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-xl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-xl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-xl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-xl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-xl-0 {
            gap: 0 !important;
        }

        .gap-xl-1 {
            gap: 0.25rem !important;
        }

        .gap-xl-2 {
            gap: 0.5rem !important;
        }

        .gap-xl-3 {
            gap: 1rem !important;
        }

        .gap-xl-4 {
            gap: 1.8rem !important;
        }

        .gap-xl-5 {
            gap: 3rem !important;
        }

        .gap-xl-6 {
            gap: 4rem !important;
        }

        .gap-xl-7 {
            gap: 5rem !important;
        }

        .gap-xl-8 {
            gap: 7.5rem !important;
        }

        .gap-xl-9 {
            gap: 10rem !important;
        }

        .gap-xl-10 {
            gap: 12.5rem !important;
        }

        .gap-xl-11 {
            gap: 15rem !important;
        }

        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-xl-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-xl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-xl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-xl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-xl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-xl-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-xl-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-xl-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-xl-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-xl-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-xl-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-xl-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-xl-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-xl-0 {
            margin: 0 !important;
        }

        .m-xl-1 {
            margin: 0.25rem !important;
        }

        .m-xl-2 {
            margin: 0.5rem !important;
        }

        .m-xl-3 {
            margin: 1rem !important;
        }

        .m-xl-4 {
            margin: 1.8rem !important;
        }

        .m-xl-5 {
            margin: 3rem !important;
        }

        .m-xl-6 {
            margin: 4rem !important;
        }

        .m-xl-7 {
            margin: 5rem !important;
        }

        .m-xl-8 {
            margin: 7.5rem !important;
        }

        .m-xl-9 {
            margin: 10rem !important;
        }

        .m-xl-10 {
            margin: 12.5rem !important;
        }

        .m-xl-11 {
            margin: 15rem !important;
        }

        .m-xl-auto {
            margin: auto !important;
        }

        .mx-xl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-xl-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-xl-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-xl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-xl-4 {
            margin-right: 1.8rem !important;
            margin-left: 1.8rem !important;
        }

        .mx-xl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-xl-6 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-xl-7 {
            margin-right: 5rem !important;
            margin-left: 5rem !important;
        }

        .mx-xl-8 {
            margin-right: 7.5rem !important;
            margin-left: 7.5rem !important;
        }

        .mx-xl-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-xl-10 {
            margin-right: 12.5rem !important;
            margin-left: 12.5rem !important;
        }

        .mx-xl-11 {
            margin-right: 15rem !important;
            margin-left: 15rem !important;
        }

        .mx-xl-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-xl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-xl-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-xl-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-xl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-xl-4 {
            margin-top: 1.8rem !important;
            margin-bottom: 1.8rem !important;
        }

        .my-xl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-xl-6 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-xl-7 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .my-xl-8 {
            margin-top: 7.5rem !important;
            margin-bottom: 7.5rem !important;
        }

        .my-xl-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-xl-10 {
            margin-top: 12.5rem !important;
            margin-bottom: 12.5rem !important;
        }

        .my-xl-11 {
            margin-top: 15rem !important;
            margin-bottom: 15rem !important;
        }

        .my-xl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-xl-0 {
            margin-top: 0 !important;
        }

        .mt-xl-1 {
            margin-top: 0.25rem !important;
        }

        .mt-xl-2 {
            margin-top: 0.5rem !important;
        }

        .mt-xl-3 {
            margin-top: 1rem !important;
        }

        .mt-xl-4 {
            margin-top: 1.8rem !important;
        }

        .mt-xl-5 {
            margin-top: 3rem !important;
        }

        .mt-xl-6 {
            margin-top: 4rem !important;
        }

        .mt-xl-7 {
            margin-top: 5rem !important;
        }

        .mt-xl-8 {
            margin-top: 7.5rem !important;
        }

        .mt-xl-9 {
            margin-top: 10rem !important;
        }

        .mt-xl-10 {
            margin-top: 12.5rem !important;
        }

        .mt-xl-11 {
            margin-top: 15rem !important;
        }

        .mt-xl-auto {
            margin-top: auto !important;
        }

        .me-xl-0 {
            margin-right: 0 !important;
        }

        .me-xl-1 {
            margin-right: 0.25rem !important;
        }

        .me-xl-2 {
            margin-right: 0.5rem !important;
        }

        .me-xl-3 {
            margin-right: 1rem !important;
        }

        .me-xl-4 {
            margin-right: 1.8rem !important;
        }

        .me-xl-5 {
            margin-right: 3rem !important;
        }

        .me-xl-6 {
            margin-right: 4rem !important;
        }

        .me-xl-7 {
            margin-right: 5rem !important;
        }

        .me-xl-8 {
            margin-right: 7.5rem !important;
        }

        .me-xl-9 {
            margin-right: 10rem !important;
        }

        .me-xl-10 {
            margin-right: 12.5rem !important;
        }

        .me-xl-11 {
            margin-right: 15rem !important;
        }

        .me-xl-auto {
            margin-right: auto !important;
        }

        .mb-xl-0 {
            margin-bottom: 0 !important;
        }

        .mb-xl-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-xl-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-xl-3 {
            margin-bottom: 1rem !important;
        }

        .mb-xl-4 {
            margin-bottom: 1.8rem !important;
        }

        .mb-xl-5 {
            margin-bottom: 3rem !important;
        }

        .mb-xl-6 {
            margin-bottom: 4rem !important;
        }

        .mb-xl-7 {
            margin-bottom: 5rem !important;
        }

        .mb-xl-8 {
            margin-bottom: 7.5rem !important;
        }

        .mb-xl-9 {
            margin-bottom: 10rem !important;
        }

        .mb-xl-10 {
            margin-bottom: 12.5rem !important;
        }

        .mb-xl-11 {
            margin-bottom: 15rem !important;
        }

        .mb-xl-auto {
            margin-bottom: auto !important;
        }

        .ms-xl-0 {
            margin-left: 0 !important;
        }

        .ms-xl-1 {
            margin-left: 0.25rem !important;
        }

        .ms-xl-2 {
            margin-left: 0.5rem !important;
        }

        .ms-xl-3 {
            margin-left: 1rem !important;
        }

        .ms-xl-4 {
            margin-left: 1.8rem !important;
        }

        .ms-xl-5 {
            margin-left: 3rem !important;
        }

        .ms-xl-6 {
            margin-left: 4rem !important;
        }

        .ms-xl-7 {
            margin-left: 5rem !important;
        }

        .ms-xl-8 {
            margin-left: 7.5rem !important;
        }

        .ms-xl-9 {
            margin-left: 10rem !important;
        }

        .ms-xl-10 {
            margin-left: 12.5rem !important;
        }

        .ms-xl-11 {
            margin-left: 15rem !important;
        }

        .ms-xl-auto {
            margin-left: auto !important;
        }

        .m-xl-n1 {
            margin: -0.25rem !important;
        }

        .m-xl-n2 {
            margin: -0.5rem !important;
        }

        .m-xl-n3 {
            margin: -1rem !important;
        }

        .m-xl-n4 {
            margin: -1.8rem !important;
        }

        .m-xl-n5 {
            margin: -3rem !important;
        }

        .m-xl-n6 {
            margin: -4rem !important;
        }

        .m-xl-n7 {
            margin: -5rem !important;
        }

        .m-xl-n8 {
            margin: -7.5rem !important;
        }

        .m-xl-n9 {
            margin: -10rem !important;
        }

        .m-xl-n10 {
            margin: -12.5rem !important;
        }

        .m-xl-n11 {
            margin: -15rem !important;
        }

        .mx-xl-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-xl-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-xl-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-xl-n4 {
            margin-right: -1.8rem !important;
            margin-left: -1.8rem !important;
        }

        .mx-xl-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-xl-n6 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-xl-n7 {
            margin-right: -5rem !important;
            margin-left: -5rem !important;
        }

        .mx-xl-n8 {
            margin-right: -7.5rem !important;
            margin-left: -7.5rem !important;
        }

        .mx-xl-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .mx-xl-n10 {
            margin-right: -12.5rem !important;
            margin-left: -12.5rem !important;
        }

        .mx-xl-n11 {
            margin-right: -15rem !important;
            margin-left: -15rem !important;
        }

        .my-xl-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-xl-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-xl-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-xl-n4 {
            margin-top: -1.8rem !important;
            margin-bottom: -1.8rem !important;
        }

        .my-xl-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-xl-n6 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-xl-n7 {
            margin-top: -5rem !important;
            margin-bottom: -5rem !important;
        }

        .my-xl-n8 {
            margin-top: -7.5rem !important;
            margin-bottom: -7.5rem !important;
        }

        .my-xl-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .my-xl-n10 {
            margin-top: -12.5rem !important;
            margin-bottom: -12.5rem !important;
        }

        .my-xl-n11 {
            margin-top: -15rem !important;
            margin-bottom: -15rem !important;
        }

        .mt-xl-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-xl-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-xl-n3 {
            margin-top: -1rem !important;
        }

        .mt-xl-n4 {
            margin-top: -1.8rem !important;
        }

        .mt-xl-n5 {
            margin-top: -3rem !important;
        }

        .mt-xl-n6 {
            margin-top: -4rem !important;
        }

        .mt-xl-n7 {
            margin-top: -5rem !important;
        }

        .mt-xl-n8 {
            margin-top: -7.5rem !important;
        }

        .mt-xl-n9 {
            margin-top: -10rem !important;
        }

        .mt-xl-n10 {
            margin-top: -12.5rem !important;
        }

        .mt-xl-n11 {
            margin-top: -15rem !important;
        }

        .me-xl-n1 {
            margin-right: -0.25rem !important;
        }

        .me-xl-n2 {
            margin-right: -0.5rem !important;
        }

        .me-xl-n3 {
            margin-right: -1rem !important;
        }

        .me-xl-n4 {
            margin-right: -1.8rem !important;
        }

        .me-xl-n5 {
            margin-right: -3rem !important;
        }

        .me-xl-n6 {
            margin-right: -4rem !important;
        }

        .me-xl-n7 {
            margin-right: -5rem !important;
        }

        .me-xl-n8 {
            margin-right: -7.5rem !important;
        }

        .me-xl-n9 {
            margin-right: -10rem !important;
        }

        .me-xl-n10 {
            margin-right: -12.5rem !important;
        }

        .me-xl-n11 {
            margin-right: -15rem !important;
        }

        .mb-xl-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-xl-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-xl-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-xl-n4 {
            margin-bottom: -1.8rem !important;
        }

        .mb-xl-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-xl-n6 {
            margin-bottom: -4rem !important;
        }

        .mb-xl-n7 {
            margin-bottom: -5rem !important;
        }

        .mb-xl-n8 {
            margin-bottom: -7.5rem !important;
        }

        .mb-xl-n9 {
            margin-bottom: -10rem !important;
        }

        .mb-xl-n10 {
            margin-bottom: -12.5rem !important;
        }

        .mb-xl-n11 {
            margin-bottom: -15rem !important;
        }

        .ms-xl-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-xl-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-xl-n3 {
            margin-left: -1rem !important;
        }

        .ms-xl-n4 {
            margin-left: -1.8rem !important;
        }

        .ms-xl-n5 {
            margin-left: -3rem !important;
        }

        .ms-xl-n6 {
            margin-left: -4rem !important;
        }

        .ms-xl-n7 {
            margin-left: -5rem !important;
        }

        .ms-xl-n8 {
            margin-left: -7.5rem !important;
        }

        .ms-xl-n9 {
            margin-left: -10rem !important;
        }

        .ms-xl-n10 {
            margin-left: -12.5rem !important;
        }

        .ms-xl-n11 {
            margin-left: -15rem !important;
        }

        .p-xl-0 {
            padding: 0 !important;
        }

        .p-xl-1 {
            padding: 0.25rem !important;
        }

        .p-xl-2 {
            padding: 0.5rem !important;
        }

        .p-xl-3 {
            padding: 1rem !important;
        }

        .p-xl-4 {
            padding: 1.8rem !important;
        }

        .p-xl-5 {
            padding: 3rem !important;
        }

        .p-xl-6 {
            padding: 4rem !important;
        }

        .p-xl-7 {
            padding: 5rem !important;
        }

        .p-xl-8 {
            padding: 7.5rem !important;
        }

        .p-xl-9 {
            padding: 10rem !important;
        }

        .p-xl-10 {
            padding: 12.5rem !important;
        }

        .p-xl-11 {
            padding: 15rem !important;
        }

        .px-xl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-xl-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-xl-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-xl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-xl-4 {
            padding-right: 1.8rem !important;
            padding-left: 1.8rem !important;
        }

        .px-xl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-xl-6 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-xl-7 {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .px-xl-8 {
            padding-right: 7.5rem !important;
            padding-left: 7.5rem !important;
        }

        .px-xl-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .px-xl-10 {
            padding-right: 12.5rem !important;
            padding-left: 12.5rem !important;
        }

        .px-xl-11 {
            padding-right: 15rem !important;
            padding-left: 15rem !important;
        }

        .py-xl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-xl-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-xl-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-xl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-xl-4 {
            padding-top: 1.8rem !important;
            padding-bottom: 1.8rem !important;
        }

        .py-xl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-xl-6 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-xl-7 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .py-xl-8 {
            padding-top: 7.5rem !important;
            padding-bottom: 7.5rem !important;
        }

        .py-xl-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .py-xl-10 {
            padding-top: 12.5rem !important;
            padding-bottom: 12.5rem !important;
        }

        .py-xl-11 {
            padding-top: 15rem !important;
            padding-bottom: 15rem !important;
        }

        .pt-xl-0 {
            padding-top: 0 !important;
        }

        .pt-xl-1 {
            padding-top: 0.25rem !important;
        }

        .pt-xl-2 {
            padding-top: 0.5rem !important;
        }

        .pt-xl-3 {
            padding-top: 1rem !important;
        }

        .pt-xl-4 {
            padding-top: 1.8rem !important;
        }

        .pt-xl-5 {
            padding-top: 3rem !important;
        }

        .pt-xl-6 {
            padding-top: 4rem !important;
        }

        .pt-xl-7 {
            padding-top: 5rem !important;
        }

        .pt-xl-8 {
            padding-top: 7.5rem !important;
        }

        .pt-xl-9 {
            padding-top: 10rem !important;
        }

        .pt-xl-10 {
            padding-top: 12.5rem !important;
        }

        .pt-xl-11 {
            padding-top: 15rem !important;
        }

        .pe-xl-0 {
            padding-right: 0 !important;
        }

        .pe-xl-1 {
            padding-right: 0.25rem !important;
        }

        .pe-xl-2 {
            padding-right: 0.5rem !important;
        }

        .pe-xl-3 {
            padding-right: 1rem !important;
        }

        .pe-xl-4 {
            padding-right: 1.8rem !important;
        }

        .pe-xl-5 {
            padding-right: 3rem !important;
        }

        .pe-xl-6 {
            padding-right: 4rem !important;
        }

        .pe-xl-7 {
            padding-right: 5rem !important;
        }

        .pe-xl-8 {
            padding-right: 7.5rem !important;
        }

        .pe-xl-9 {
            padding-right: 10rem !important;
        }

        .pe-xl-10 {
            padding-right: 12.5rem !important;
        }

        .pe-xl-11 {
            padding-right: 15rem !important;
        }

        .pb-xl-0 {
            padding-bottom: 0 !important;
        }

        .pb-xl-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-xl-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-xl-3 {
            padding-bottom: 1rem !important;
        }

        .pb-xl-4 {
            padding-bottom: 1.8rem !important;
        }

        .pb-xl-5 {
            padding-bottom: 3rem !important;
        }

        .pb-xl-6 {
            padding-bottom: 4rem !important;
        }

        .pb-xl-7 {
            padding-bottom: 5rem !important;
        }

        .pb-xl-8 {
            padding-bottom: 7.5rem !important;
        }

        .pb-xl-9 {
            padding-bottom: 10rem !important;
        }

        .pb-xl-10 {
            padding-bottom: 12.5rem !important;
        }

        .pb-xl-11 {
            padding-bottom: 15rem !important;
        }

        .ps-xl-0 {
            padding-left: 0 !important;
        }

        .ps-xl-1 {
            padding-left: 0.25rem !important;
        }

        .ps-xl-2 {
            padding-left: 0.5rem !important;
        }

        .ps-xl-3 {
            padding-left: 1rem !important;
        }

        .ps-xl-4 {
            padding-left: 1.8rem !important;
        }

        .ps-xl-5 {
            padding-left: 3rem !important;
        }

        .ps-xl-6 {
            padding-left: 4rem !important;
        }

        .ps-xl-7 {
            padding-left: 5rem !important;
        }

        .ps-xl-8 {
            padding-left: 7.5rem !important;
        }

        .ps-xl-9 {
            padding-left: 10rem !important;
        }

        .ps-xl-10 {
            padding-left: 12.5rem !important;
        }

        .ps-xl-11 {
            padding-left: 15rem !important;
        }

        .fs-xl--2 {
            font-size: 0.69444rem !important;
        }

        .fs-xl--1 {
            font-size: 0.83333rem !important;
        }

        .fs-xl-0 {
            font-size: 1rem !important;
        }

        .fs-xl-1 {
            font-size: 1.2rem !important;
        }

        .fs-xl-2 {
            font-size: 1.44rem !important;
        }

        .fs-xl-3 {
            font-size: 1.728rem !important;
        }

        .fs-xl-4 {
            font-size: 2.0736rem !important;
        }

        .fs-xl-5 {
            font-size: 2.48832rem !important;
        }

        .fs-xl-6 {
            font-size: 2.98598rem !important;
        }

        .fs-xl-7 {
            font-size: 3.58318rem !important;
        }

        .fs-xl-8 {
            font-size: 4.29982rem !important;
        }

        .text-xl-start {
            text-align: left !important;
        }

        .text-xl-end {
            text-align: right !important;
        }

        .text-xl-center {
            text-align: center !important;
        }

        .opacity-xl-0 {
            opacity: 0 !important;
        }

        .opacity-xl-25 {
            opacity: 0.25 !important;
        }

        .opacity-xl-50 {
            opacity: 0.5 !important;
        }

        .opacity-xl-75 {
            opacity: 0.75 !important;
        }

        .opacity-xl-85 {
            opacity: 0.85 !important;
        }

        .opacity-xl-100 {
            opacity: 1 !important;
        }

        .text-xl-facebook {
            color: #3c5a99 !important;
        }

        .text-xl-google-plus {
            color: #dd4b39 !important;
        }

        .text-xl-twitter {
            color: #1da1f2 !important;
        }

        .text-xl-linkedin {
            color: #0077b5 !important;
        }

        .text-xl-youtube {
            color: #ff0000 !important;
        }

        .text-xl-github {
            color: #333 !important;
        }

        .text-xl-black {
            color: #000 !important;
        }

        .text-xl-100 {
            color: #FAFAFA !important;
        }

        .text-xl-200 {
            color: #E8E5E9 !important;
        }

        .text-xl-300 {
            color: #DFDBDF !important;
        }

        .text-xl-400 {
            color: #D5D1D6 !important;
        }

        .text-xl-500 {
            color: #CCC6CD !important;
        }

        .text-xl-600 {
            color: #C3BCC4 !important;
        }

        .text-xl-700 {
            color: #B9B1BB !important;
        }

        .text-xl-800 {
            color: #B0A7B2 !important;
        }

        .text-xl-900 {
            color: #A79CA8 !important;
        }

        .text-xl-1000 {
            color: #778295 !important;
        }

        .text-xl-1100 {
            color: #44224B !important;
        }

        .text-xl-1200 {
            color: #091E40 !important;
        }

        .text-xl-white {
            color: #fff !important;
        }

        .max-vh-xl-25 {
            max-height: 25vh !important;
        }

        .max-vh-xl-50 {
            max-height: 50vh !important;
        }

        .max-vh-xl-75 {
            max-height: 75vh !important;
        }

        .max-vh-xl-100 {
            max-height: 100vh !important;
        }

        .border-xl-x {
            border-left: 1px solid #DFDBDF !important;
            border-right: 1px solid #DFDBDF !important;
        }

        .border-xl-x-0 {
            border-left: 0 !important;
            border-right: 0 !important;
        }

        .border-xl-y {
            border-top: 1px solid #DFDBDF !important;
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-xl-y-0 {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }

        .border-xl-dashed {
            border: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-top {
            border-top: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-end {
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-start {
            border-left: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-bottom {
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-x {
            border-left: 1px dashed #DFDBDF !important;
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-xl-dashed-y {
            border-top: 1px dashed #DFDBDF !important;
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .rounded-xl-0 {
            border-radius: 0 !important;
        }
    }

    @media (min-width: 1540px) {
        .float-xxl-start {
            float: left !important;
        }

        .float-xxl-end {
            float: right !important;
        }

        .float-xxl-none {
            float: none !important;
        }

        .d-xxl-inline {
            display: inline !important;
        }

        .d-xxl-inline-block {
            display: inline-block !important;
        }

        .d-xxl-block {
            display: block !important;
        }

        .d-xxl-grid {
            display: grid !important;
        }

        .d-xxl-table {
            display: table !important;
        }

        .d-xxl-table-row {
            display: table-row !important;
        }

        .d-xxl-table-cell {
            display: table-cell !important;
        }

        .d-xxl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-xxl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-xxl-none {
            display: none !important;
        }

        .position-xxl-static {
            position: static !important;
        }

        .position-xxl-absolute {
            position: absolute !important;
        }

        .position-xxl-relative {
            position: relative !important;
        }

        .position-xxl-fixed {
            position: fixed !important;
        }

        .position-xxl-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .translate-xxl-middle {
            -webkit-transform: translateX(-50%) translateY(-50%) !important;
            -ms-transform: translateX(-50%) translateY(-50%) !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .translate-xxl-middle-x {
            -webkit-transform: translateX(-50%) !important;
            -ms-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-xxl-middle-y {
            -webkit-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border-xxl {
            border: 1px solid #DFDBDF !important;
        }

        .border-xxl-0 {
            border: 0 !important;
        }

        .border-xxl-top {
            border-top: 1px solid #DFDBDF !important;
        }

        .border-xxl-top-0 {
            border-top: 0 !important;
        }

        .border-xxl-end {
            border-right: 1px solid #DFDBDF !important;
        }

        .border-xxl-end-0 {
            border-right: 0 !important;
        }

        .border-xxl-bottom {
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-xxl-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-xxl-start {
            border-left: 1px solid #DFDBDF !important;
        }

        .border-xxl-start-0 {
            border-left: 0 !important;
        }

        .w-xxl-25 {
            width: 25% !important;
        }

        .w-xxl-50 {
            width: 50% !important;
        }

        .w-xxl-75 {
            width: 75% !important;
        }

        .w-xxl-100 {
            width: 100% !important;
        }

        .w-xxl-auto {
            width: auto !important;
        }

        .vw-xxl-25 {
            width: 25vw !important;
        }

        .vw-xxl-50 {
            width: 50vw !important;
        }

        .vw-xxl-75 {
            width: 75vw !important;
        }

        .vw-xxl-100 {
            width: 100vw !important;
        }

        .h-xxl-25 {
            height: 25% !important;
        }

        .h-xxl-50 {
            height: 50% !important;
        }

        .h-xxl-75 {
            height: 75% !important;
        }

        .h-xxl-100 {
            height: 100% !important;
        }

        .h-xxl-auto {
            height: auto !important;
        }

        .vh-xxl-25 {
            height: 25vh !important;
        }

        .vh-xxl-50 {
            height: 50vh !important;
        }

        .vh-xxl-75 {
            height: 75vh !important;
        }

        .vh-xxl-100 {
            height: 100vh !important;
        }

        .min-vh-xxl-25 {
            min-height: 25vh !important;
        }

        .min-vh-xxl-50 {
            min-height: 50vh !important;
        }

        .min-vh-xxl-75 {
            min-height: 75vh !important;
        }

        .min-vh-xxl-100 {
            min-height: 100vh !important;
        }

        .flex-xxl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-xxl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-xxl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-xxl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-xxl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-xxl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-xxl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-xxl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-xxl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-xxl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-xxl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-xxl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-xxl-0 {
            gap: 0 !important;
        }

        .gap-xxl-1 {
            gap: 0.25rem !important;
        }

        .gap-xxl-2 {
            gap: 0.5rem !important;
        }

        .gap-xxl-3 {
            gap: 1rem !important;
        }

        .gap-xxl-4 {
            gap: 1.8rem !important;
        }

        .gap-xxl-5 {
            gap: 3rem !important;
        }

        .gap-xxl-6 {
            gap: 4rem !important;
        }

        .gap-xxl-7 {
            gap: 5rem !important;
        }

        .gap-xxl-8 {
            gap: 7.5rem !important;
        }

        .gap-xxl-9 {
            gap: 10rem !important;
        }

        .gap-xxl-10 {
            gap: 12.5rem !important;
        }

        .gap-xxl-11 {
            gap: 15rem !important;
        }

        .justify-content-xxl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-xxl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-xxl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-xxl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-xxl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-xxl-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-xxl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-xxl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-xxl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-xxl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-xxl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-xxl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-xxl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-xxl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-xxl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-xxl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-xxl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-xxl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-xxl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-xxl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-xxl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-xxl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-xxl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-xxl-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-xxl-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-xxl-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-xxl-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-xxl-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-xxl-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-xxl-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-xxl-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-xxl-0 {
            margin: 0 !important;
        }

        .m-xxl-1 {
            margin: 0.25rem !important;
        }

        .m-xxl-2 {
            margin: 0.5rem !important;
        }

        .m-xxl-3 {
            margin: 1rem !important;
        }

        .m-xxl-4 {
            margin: 1.8rem !important;
        }

        .m-xxl-5 {
            margin: 3rem !important;
        }

        .m-xxl-6 {
            margin: 4rem !important;
        }

        .m-xxl-7 {
            margin: 5rem !important;
        }

        .m-xxl-8 {
            margin: 7.5rem !important;
        }

        .m-xxl-9 {
            margin: 10rem !important;
        }

        .m-xxl-10 {
            margin: 12.5rem !important;
        }

        .m-xxl-11 {
            margin: 15rem !important;
        }

        .m-xxl-auto {
            margin: auto !important;
        }

        .mx-xxl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-xxl-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-xxl-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-xxl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-xxl-4 {
            margin-right: 1.8rem !important;
            margin-left: 1.8rem !important;
        }

        .mx-xxl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-xxl-6 {
            margin-right: 4rem !important;
            margin-left: 4rem !important;
        }

        .mx-xxl-7 {
            margin-right: 5rem !important;
            margin-left: 5rem !important;
        }

        .mx-xxl-8 {
            margin-right: 7.5rem !important;
            margin-left: 7.5rem !important;
        }

        .mx-xxl-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-xxl-10 {
            margin-right: 12.5rem !important;
            margin-left: 12.5rem !important;
        }

        .mx-xxl-11 {
            margin-right: 15rem !important;
            margin-left: 15rem !important;
        }

        .mx-xxl-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-xxl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-xxl-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-xxl-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-xxl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-xxl-4 {
            margin-top: 1.8rem !important;
            margin-bottom: 1.8rem !important;
        }

        .my-xxl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-xxl-6 {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .my-xxl-7 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .my-xxl-8 {
            margin-top: 7.5rem !important;
            margin-bottom: 7.5rem !important;
        }

        .my-xxl-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-xxl-10 {
            margin-top: 12.5rem !important;
            margin-bottom: 12.5rem !important;
        }

        .my-xxl-11 {
            margin-top: 15rem !important;
            margin-bottom: 15rem !important;
        }

        .my-xxl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-xxl-0 {
            margin-top: 0 !important;
        }

        .mt-xxl-1 {
            margin-top: 0.25rem !important;
        }

        .mt-xxl-2 {
            margin-top: 0.5rem !important;
        }

        .mt-xxl-3 {
            margin-top: 1rem !important;
        }

        .mt-xxl-4 {
            margin-top: 1.8rem !important;
        }

        .mt-xxl-5 {
            margin-top: 3rem !important;
        }

        .mt-xxl-6 {
            margin-top: 4rem !important;
        }

        .mt-xxl-7 {
            margin-top: 5rem !important;
        }

        .mt-xxl-8 {
            margin-top: 7.5rem !important;
        }

        .mt-xxl-9 {
            margin-top: 10rem !important;
        }

        .mt-xxl-10 {
            margin-top: 12.5rem !important;
        }

        .mt-xxl-11 {
            margin-top: 15rem !important;
        }

        .mt-xxl-auto {
            margin-top: auto !important;
        }

        .me-xxl-0 {
            margin-right: 0 !important;
        }

        .me-xxl-1 {
            margin-right: 0.25rem !important;
        }

        .me-xxl-2 {
            margin-right: 0.5rem !important;
        }

        .me-xxl-3 {
            margin-right: 1rem !important;
        }

        .me-xxl-4 {
            margin-right: 1.8rem !important;
        }

        .me-xxl-5 {
            margin-right: 3rem !important;
        }

        .me-xxl-6 {
            margin-right: 4rem !important;
        }

        .me-xxl-7 {
            margin-right: 5rem !important;
        }

        .me-xxl-8 {
            margin-right: 7.5rem !important;
        }

        .me-xxl-9 {
            margin-right: 10rem !important;
        }

        .me-xxl-10 {
            margin-right: 12.5rem !important;
        }

        .me-xxl-11 {
            margin-right: 15rem !important;
        }

        .me-xxl-auto {
            margin-right: auto !important;
        }

        .mb-xxl-0 {
            margin-bottom: 0 !important;
        }

        .mb-xxl-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-xxl-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-xxl-3 {
            margin-bottom: 1rem !important;
        }

        .mb-xxl-4 {
            margin-bottom: 1.8rem !important;
        }

        .mb-xxl-5 {
            margin-bottom: 3rem !important;
        }

        .mb-xxl-6 {
            margin-bottom: 4rem !important;
        }

        .mb-xxl-7 {
            margin-bottom: 5rem !important;
        }

        .mb-xxl-8 {
            margin-bottom: 7.5rem !important;
        }

        .mb-xxl-9 {
            margin-bottom: 10rem !important;
        }

        .mb-xxl-10 {
            margin-bottom: 12.5rem !important;
        }

        .mb-xxl-11 {
            margin-bottom: 15rem !important;
        }

        .mb-xxl-auto {
            margin-bottom: auto !important;
        }

        .ms-xxl-0 {
            margin-left: 0 !important;
        }

        .ms-xxl-1 {
            margin-left: 0.25rem !important;
        }

        .ms-xxl-2 {
            margin-left: 0.5rem !important;
        }

        .ms-xxl-3 {
            margin-left: 1rem !important;
        }

        .ms-xxl-4 {
            margin-left: 1.8rem !important;
        }

        .ms-xxl-5 {
            margin-left: 3rem !important;
        }

        .ms-xxl-6 {
            margin-left: 4rem !important;
        }

        .ms-xxl-7 {
            margin-left: 5rem !important;
        }

        .ms-xxl-8 {
            margin-left: 7.5rem !important;
        }

        .ms-xxl-9 {
            margin-left: 10rem !important;
        }

        .ms-xxl-10 {
            margin-left: 12.5rem !important;
        }

        .ms-xxl-11 {
            margin-left: 15rem !important;
        }

        .ms-xxl-auto {
            margin-left: auto !important;
        }

        .m-xxl-n1 {
            margin: -0.25rem !important;
        }

        .m-xxl-n2 {
            margin: -0.5rem !important;
        }

        .m-xxl-n3 {
            margin: -1rem !important;
        }

        .m-xxl-n4 {
            margin: -1.8rem !important;
        }

        .m-xxl-n5 {
            margin: -3rem !important;
        }

        .m-xxl-n6 {
            margin: -4rem !important;
        }

        .m-xxl-n7 {
            margin: -5rem !important;
        }

        .m-xxl-n8 {
            margin: -7.5rem !important;
        }

        .m-xxl-n9 {
            margin: -10rem !important;
        }

        .m-xxl-n10 {
            margin: -12.5rem !important;
        }

        .m-xxl-n11 {
            margin: -15rem !important;
        }

        .mx-xxl-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-xxl-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-xxl-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-xxl-n4 {
            margin-right: -1.8rem !important;
            margin-left: -1.8rem !important;
        }

        .mx-xxl-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-xxl-n6 {
            margin-right: -4rem !important;
            margin-left: -4rem !important;
        }

        .mx-xxl-n7 {
            margin-right: -5rem !important;
            margin-left: -5rem !important;
        }

        .mx-xxl-n8 {
            margin-right: -7.5rem !important;
            margin-left: -7.5rem !important;
        }

        .mx-xxl-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .mx-xxl-n10 {
            margin-right: -12.5rem !important;
            margin-left: -12.5rem !important;
        }

        .mx-xxl-n11 {
            margin-right: -15rem !important;
            margin-left: -15rem !important;
        }

        .my-xxl-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-xxl-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-xxl-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-xxl-n4 {
            margin-top: -1.8rem !important;
            margin-bottom: -1.8rem !important;
        }

        .my-xxl-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-xxl-n6 {
            margin-top: -4rem !important;
            margin-bottom: -4rem !important;
        }

        .my-xxl-n7 {
            margin-top: -5rem !important;
            margin-bottom: -5rem !important;
        }

        .my-xxl-n8 {
            margin-top: -7.5rem !important;
            margin-bottom: -7.5rem !important;
        }

        .my-xxl-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .my-xxl-n10 {
            margin-top: -12.5rem !important;
            margin-bottom: -12.5rem !important;
        }

        .my-xxl-n11 {
            margin-top: -15rem !important;
            margin-bottom: -15rem !important;
        }

        .mt-xxl-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-xxl-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-xxl-n3 {
            margin-top: -1rem !important;
        }

        .mt-xxl-n4 {
            margin-top: -1.8rem !important;
        }

        .mt-xxl-n5 {
            margin-top: -3rem !important;
        }

        .mt-xxl-n6 {
            margin-top: -4rem !important;
        }

        .mt-xxl-n7 {
            margin-top: -5rem !important;
        }

        .mt-xxl-n8 {
            margin-top: -7.5rem !important;
        }

        .mt-xxl-n9 {
            margin-top: -10rem !important;
        }

        .mt-xxl-n10 {
            margin-top: -12.5rem !important;
        }

        .mt-xxl-n11 {
            margin-top: -15rem !important;
        }

        .me-xxl-n1 {
            margin-right: -0.25rem !important;
        }

        .me-xxl-n2 {
            margin-right: -0.5rem !important;
        }

        .me-xxl-n3 {
            margin-right: -1rem !important;
        }

        .me-xxl-n4 {
            margin-right: -1.8rem !important;
        }

        .me-xxl-n5 {
            margin-right: -3rem !important;
        }

        .me-xxl-n6 {
            margin-right: -4rem !important;
        }

        .me-xxl-n7 {
            margin-right: -5rem !important;
        }

        .me-xxl-n8 {
            margin-right: -7.5rem !important;
        }

        .me-xxl-n9 {
            margin-right: -10rem !important;
        }

        .me-xxl-n10 {
            margin-right: -12.5rem !important;
        }

        .me-xxl-n11 {
            margin-right: -15rem !important;
        }

        .mb-xxl-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-xxl-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-xxl-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-xxl-n4 {
            margin-bottom: -1.8rem !important;
        }

        .mb-xxl-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-xxl-n6 {
            margin-bottom: -4rem !important;
        }

        .mb-xxl-n7 {
            margin-bottom: -5rem !important;
        }

        .mb-xxl-n8 {
            margin-bottom: -7.5rem !important;
        }

        .mb-xxl-n9 {
            margin-bottom: -10rem !important;
        }

        .mb-xxl-n10 {
            margin-bottom: -12.5rem !important;
        }

        .mb-xxl-n11 {
            margin-bottom: -15rem !important;
        }

        .ms-xxl-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-xxl-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-xxl-n3 {
            margin-left: -1rem !important;
        }

        .ms-xxl-n4 {
            margin-left: -1.8rem !important;
        }

        .ms-xxl-n5 {
            margin-left: -3rem !important;
        }

        .ms-xxl-n6 {
            margin-left: -4rem !important;
        }

        .ms-xxl-n7 {
            margin-left: -5rem !important;
        }

        .ms-xxl-n8 {
            margin-left: -7.5rem !important;
        }

        .ms-xxl-n9 {
            margin-left: -10rem !important;
        }

        .ms-xxl-n10 {
            margin-left: -12.5rem !important;
        }

        .ms-xxl-n11 {
            margin-left: -15rem !important;
        }

        .p-xxl-0 {
            padding: 0 !important;
        }

        .p-xxl-1 {
            padding: 0.25rem !important;
        }

        .p-xxl-2 {
            padding: 0.5rem !important;
        }

        .p-xxl-3 {
            padding: 1rem !important;
        }

        .p-xxl-4 {
            padding: 1.8rem !important;
        }

        .p-xxl-5 {
            padding: 3rem !important;
        }

        .p-xxl-6 {
            padding: 4rem !important;
        }

        .p-xxl-7 {
            padding: 5rem !important;
        }

        .p-xxl-8 {
            padding: 7.5rem !important;
        }

        .p-xxl-9 {
            padding: 10rem !important;
        }

        .p-xxl-10 {
            padding: 12.5rem !important;
        }

        .p-xxl-11 {
            padding: 15rem !important;
        }

        .px-xxl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-xxl-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-xxl-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-xxl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-xxl-4 {
            padding-right: 1.8rem !important;
            padding-left: 1.8rem !important;
        }

        .px-xxl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-xxl-6 {
            padding-right: 4rem !important;
            padding-left: 4rem !important;
        }

        .px-xxl-7 {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .px-xxl-8 {
            padding-right: 7.5rem !important;
            padding-left: 7.5rem !important;
        }

        .px-xxl-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .px-xxl-10 {
            padding-right: 12.5rem !important;
            padding-left: 12.5rem !important;
        }

        .px-xxl-11 {
            padding-right: 15rem !important;
            padding-left: 15rem !important;
        }

        .py-xxl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-xxl-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-xxl-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-xxl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-xxl-4 {
            padding-top: 1.8rem !important;
            padding-bottom: 1.8rem !important;
        }

        .py-xxl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-xxl-6 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .py-xxl-7 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .py-xxl-8 {
            padding-top: 7.5rem !important;
            padding-bottom: 7.5rem !important;
        }

        .py-xxl-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .py-xxl-10 {
            padding-top: 12.5rem !important;
            padding-bottom: 12.5rem !important;
        }

        .py-xxl-11 {
            padding-top: 15rem !important;
            padding-bottom: 15rem !important;
        }

        .pt-xxl-0 {
            padding-top: 0 !important;
        }

        .pt-xxl-1 {
            padding-top: 0.25rem !important;
        }

        .pt-xxl-2 {
            padding-top: 0.5rem !important;
        }

        .pt-xxl-3 {
            padding-top: 1rem !important;
        }

        .pt-xxl-4 {
            padding-top: 1.8rem !important;
        }

        .pt-xxl-5 {
            padding-top: 3rem !important;
        }

        .pt-xxl-6 {
            padding-top: 4rem !important;
        }

        .pt-xxl-7 {
            padding-top: 5rem !important;
        }

        .pt-xxl-8 {
            padding-top: 7.5rem !important;
        }

        .pt-xxl-9 {
            padding-top: 10rem !important;
        }

        .pt-xxl-10 {
            padding-top: 12.5rem !important;
        }

        .pt-xxl-11 {
            padding-top: 15rem !important;
        }

        .pe-xxl-0 {
            padding-right: 0 !important;
        }

        .pe-xxl-1 {
            padding-right: 0.25rem !important;
        }

        .pe-xxl-2 {
            padding-right: 0.5rem !important;
        }

        .pe-xxl-3 {
            padding-right: 1rem !important;
        }

        .pe-xxl-4 {
            padding-right: 1.8rem !important;
        }

        .pe-xxl-5 {
            padding-right: 3rem !important;
        }

        .pe-xxl-6 {
            padding-right: 4rem !important;
        }

        .pe-xxl-7 {
            padding-right: 5rem !important;
        }

        .pe-xxl-8 {
            padding-right: 7.5rem !important;
        }

        .pe-xxl-9 {
            padding-right: 10rem !important;
        }

        .pe-xxl-10 {
            padding-right: 12.5rem !important;
        }

        .pe-xxl-11 {
            padding-right: 15rem !important;
        }

        .pb-xxl-0 {
            padding-bottom: 0 !important;
        }

        .pb-xxl-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-xxl-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-xxl-3 {
            padding-bottom: 1rem !important;
        }

        .pb-xxl-4 {
            padding-bottom: 1.8rem !important;
        }

        .pb-xxl-5 {
            padding-bottom: 3rem !important;
        }

        .pb-xxl-6 {
            padding-bottom: 4rem !important;
        }

        .pb-xxl-7 {
            padding-bottom: 5rem !important;
        }

        .pb-xxl-8 {
            padding-bottom: 7.5rem !important;
        }

        .pb-xxl-9 {
            padding-bottom: 10rem !important;
        }

        .pb-xxl-10 {
            padding-bottom: 12.5rem !important;
        }

        .pb-xxl-11 {
            padding-bottom: 15rem !important;
        }

        .ps-xxl-0 {
            padding-left: 0 !important;
        }

        .ps-xxl-1 {
            padding-left: 0.25rem !important;
        }

        .ps-xxl-2 {
            padding-left: 0.5rem !important;
        }

        .ps-xxl-3 {
            padding-left: 1rem !important;
        }

        .ps-xxl-4 {
            padding-left: 1.8rem !important;
        }

        .ps-xxl-5 {
            padding-left: 3rem !important;
        }

        .ps-xxl-6 {
            padding-left: 4rem !important;
        }

        .ps-xxl-7 {
            padding-left: 5rem !important;
        }

        .ps-xxl-8 {
            padding-left: 7.5rem !important;
        }

        .ps-xxl-9 {
            padding-left: 10rem !important;
        }

        .ps-xxl-10 {
            padding-left: 12.5rem !important;
        }

        .ps-xxl-11 {
            padding-left: 15rem !important;
        }

        .fs-xxl--2 {
            font-size: 0.69444rem !important;
        }

        .fs-xxl--1 {
            font-size: 0.83333rem !important;
        }

        .fs-xxl-0 {
            font-size: 1rem !important;
        }

        .fs-xxl-1 {
            font-size: 1.2rem !important;
        }

        .fs-xxl-2 {
            font-size: 1.44rem !important;
        }

        .fs-xxl-3 {
            font-size: 1.728rem !important;
        }

        .fs-xxl-4 {
            font-size: 2.0736rem !important;
        }

        .fs-xxl-5 {
            font-size: 2.48832rem !important;
        }

        .fs-xxl-6 {
            font-size: 2.98598rem !important;
        }

        .fs-xxl-7 {
            font-size: 3.58318rem !important;
        }

        .fs-xxl-8 {
            font-size: 4.29982rem !important;
        }

        .text-xxl-start {
            text-align: left !important;
        }

        .text-xxl-end {
            text-align: right !important;
        }

        .text-xxl-center {
            text-align: center !important;
        }

        .opacity-xxl-0 {
            opacity: 0 !important;
        }

        .opacity-xxl-25 {
            opacity: 0.25 !important;
        }

        .opacity-xxl-50 {
            opacity: 0.5 !important;
        }

        .opacity-xxl-75 {
            opacity: 0.75 !important;
        }

        .opacity-xxl-85 {
            opacity: 0.85 !important;
        }

        .opacity-xxl-100 {
            opacity: 1 !important;
        }

        .text-xxl-facebook {
            color: #3c5a99 !important;
        }

        .text-xxl-google-plus {
            color: #dd4b39 !important;
        }

        .text-xxl-twitter {
            color: #1da1f2 !important;
        }

        .text-xxl-linkedin {
            color: #0077b5 !important;
        }

        .text-xxl-youtube {
            color: #ff0000 !important;
        }

        .text-xxl-github {
            color: #333 !important;
        }

        .text-xxl-black {
            color: #000 !important;
        }

        .text-xxl-100 {
            color: #FAFAFA !important;
        }

        .text-xxl-200 {
            color: #E8E5E9 !important;
        }

        .text-xxl-300 {
            color: #DFDBDF !important;
        }

        .text-xxl-400 {
            color: #D5D1D6 !important;
        }

        .text-xxl-500 {
            color: #CCC6CD !important;
        }

        .text-xxl-600 {
            color: #C3BCC4 !important;
        }

        .text-xxl-700 {
            color: #B9B1BB !important;
        }

        .text-xxl-800 {
            color: #B0A7B2 !important;
        }

        .text-xxl-900 {
            color: #A79CA8 !important;
        }

        .text-xxl-1000 {
            color: #778295 !important;
        }

        .text-xxl-1100 {
            color: #44224B !important;
        }

        .text-xxl-1200 {
            color: #091E40 !important;
        }

        .text-xxl-white {
            color: #fff !important;
        }

        .max-vh-xxl-25 {
            max-height: 25vh !important;
        }

        .max-vh-xxl-50 {
            max-height: 50vh !important;
        }

        .max-vh-xxl-75 {
            max-height: 75vh !important;
        }

        .max-vh-xxl-100 {
            max-height: 100vh !important;
        }

        .border-xxl-x {
            border-left: 1px solid #DFDBDF !important;
            border-right: 1px solid #DFDBDF !important;
        }

        .border-xxl-x-0 {
            border-left: 0 !important;
            border-right: 0 !important;
        }

        .border-xxl-y {
            border-top: 1px solid #DFDBDF !important;
            border-bottom: 1px solid #DFDBDF !important;
        }

        .border-xxl-y-0 {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }

        .border-xxl-dashed {
            border: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-top {
            border-top: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-end {
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-start {
            border-left: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-bottom {
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-x {
            border-left: 1px dashed #DFDBDF !important;
            border-right: 1px dashed #DFDBDF !important;
        }

        .border-xxl-dashed-y {
            border-top: 1px dashed #DFDBDF !important;
            border-bottom: 1px dashed #DFDBDF !important;
        }

        .rounded-xxl-0 {
            border-radius: 0 !important;
        }
    }

    @media print {
        .d-print-inline {
            display: inline !important;
        }

        .d-print-inline-block {
            display: inline-block !important;
        }

        .d-print-block {
            display: block !important;
        }

        .d-print-grid {
            display: grid !important;
        }

        .d-print-table {
            display: table !important;
        }

        .d-print-table-row {
            display: table-row !important;
        }

        .d-print-table-cell {
            display: table-cell !important;
        }

        .d-print-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-print-none {
            display: none !important;
        }
    }

    /*-----------------------------------------------
|   Theme Styles
-----------------------------------------------*/
    /*-----------------------------------------------
|   Reboot
-----------------------------------------------*/
    ::-webkit-input-placeholder {
        opacity: 1;
        color: #D5D1D6 !important;
    }

    ::-moz-placeholder {
        opacity: 1;
        color: #D5D1D6 !important;
    }

    :-ms-input-placeholder {
        opacity: 1;
        color: #D5D1D6 !important;
    }

    ::-ms-input-placeholder {
        opacity: 1;
        color: #D5D1D6 !important;
    }

    ::placeholder {
        opacity: 1;
        color: #D5D1D6 !important;
    }

    html {
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: smooth;
        scroll-padding-top: 6.3125rem;
    }

    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        position: relative;
    }

    pre,
    code {
        -webkit-font-smoothing: auto;
        -moz-osx-font-smoothing: auto;
    }

    section {
        position: relative;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    @media (min-width: 992px) {
        section {
            padding-top: 7.5rem;
            padding-bottom: 7.5rem;
        }
    }

    input,
    button,
    select,
    optgroup,
    textarea,
    label,
    .alert,
    .badge,
    .blockquote-footer,
    .btn,
    .navbar,
    .pagination,
    .valid-feedback,
    .invalid-feedback {
        font-family: "Poppins", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

    pre {
        margin: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    strong {
        font-weight: 600;
    }

    label {
        font-weight: 500 !important;
        margin-bottom: 0.5rem;
    }

    ol,
    ul {
        padding-left: 1.1rem;
    }

    /* -------------------------------------------------------------------------- */
    /*                               Browser Fixing                               */
    /* -------------------------------------------------------------------------- */
    .firefox .dropcap:first-letter {
        margin-top: 0.175em;
    }

    .chrome .btn-close {
        background-clip: unset;
    }

    /* -------------------------------------------------------------------------- */
    /*                                    Text                                    */
    /* -------------------------------------------------------------------------- */
    .text-smallcaps {
        font-variant: small-caps;
    }

    .text-superscript {
        vertical-align: super;
    }

    .text-word-break {
        word-break: break-word;
    }

    /*-----------------------------------------------
|   Font family
-----------------------------------------------*/
    .font-sans-serif {
        font-family: "Poppins", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

    .font-base {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

    /*-----------------------------------------------
|   Error Page
-----------------------------------------------*/
    .fs-error {
        font-size: 7rem;
    }

    @media (min-width: 576px) {
        .fs-error {
            font-size: 10rem;
        }
    }

    /*-----------------------------------------------
|   Text alignment
-----------------------------------------------*/
    .text-justify {
        text-align: justify !important;
    }

    .shape-up {
        margin-top: -21rem;
    }

    /*-----------------------------------------------
|   Backgrounds
-----------------------------------------------*/
    .bg-holder {
        position: absolute;
        width: 100%;
        min-height: 100%;
        top: 0;
        left: 0;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        will-change: transform, opacity, filter;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-repeat: no-repeat;
        z-index: 0;
    }

    .bg-holder.bg-right {
        left: auto;
        right: 0;
    }

    .bg-holder.overlay:before {
        position: absolute;
        content: "";
        background: rgba(0, 0, 0, 0.25);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .bg-holder.overlay-0:before {
        background: rgba(0, 0, 0, 0.7);
    }

    .bg-holder.overlay-1:before {
        background: rgba(0, 0, 0, 0.55);
    }

    .bg-holder.overlay-2:before {
        background: rgba(0, 0, 0, 0.4);
    }

    .bg-holder .bg-video {
        position: absolute;
        display: block;
        z-index: -1;
        top: 0;
        left: 0;
        -o-object-fit: cover;
        object-fit: cover;
        height: 100%;
        min-width: 100%;
    }

    .bg-holder .bg-youtube {
        position: absolute !important;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }

    .bg-light-gradient {
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(236, 240, 253, 0)), color-stop(14.32%, rgba(236, 240, 253, 0.53)), color-stop(45.83%, #ECF0FD), color-stop(84.33%, rgba(236, 240, 253, 0.43)), to(rgba(236, 240, 253, 0)));
        background: -o-linear-gradient(top, rgba(236, 240, 253, 0) 0%, rgba(236, 240, 253, 0.53) 14.32%, #ECF0FD 45.83%, rgba(236, 240, 253, 0.43) 84.33%, rgba(236, 240, 253, 0) 100%);
        background: linear-gradient(180deg, rgba(236, 240, 253, 0) 0%, rgba(236, 240, 253, 0.53) 14.32%, #ECF0FD 45.83%, rgba(236, 240, 253, 0.43) 84.33%, rgba(236, 240, 253, 0) 100%);
    }

    .bg-primary-gradient {
        background: -o-linear-gradient(241.82deg, #51B4F7 9.05%, #5A98F2 76.74%);
        background: linear-gradient(208.18deg, #51B4F7 9.05%, #5A98F2 76.74%);
    }

    /* -------------------------------------------------------------------------- */
    /*                                   Borders                                  */
    /* -------------------------------------------------------------------------- */
    .overflow-hidden[class*='rounded'] {
        -webkit-mask-image: radial-gradient(#fff, #000);
        mask-image: radial-gradient(#fff, #000);
    }

    .border-top-2 {
        border-top-width: 0.125rem !important;
    }

    .border-end-2 {
        border-right-width: 0.125rem !important;
    }

    .border-bottom-2 {
        border-bottom-width: 0.125rem !important;
    }

    .border-start-2 {
        border-left-width: 0.125rem !important;
    }

    /* -------------------------------------------------------------------------- */
    /*                                  Position                                  */
    /* -------------------------------------------------------------------------- */
    .container,
    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl,
    .container-xxl {
        position: relative;
    }

    .all-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    /* -------------------------------------------------------------------------- */
    /*                                    Flex                                    */
    /* -------------------------------------------------------------------------- */
    .flex-center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .flex-between-center {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .flex-end-center {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .flex-1 {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .link-black {
        color: #000 !important;
    }

    .link-black:hover,
    .link-black:focus {
        color: black !important;
    }

    .link-100 {
        color: #FAFAFA !important;
    }

    .link-100:hover,
    .link-100:focus {
        color: #d4d4d4 !important;
    }

    .link-200 {
        color: #E8E5E9 !important;
    }

    .link-200:hover,
    .link-200:focus {
        color: #c3bcc6 !important;
    }

    .link-300 {
        color: #DFDBDF !important;
    }

    .link-300:hover,
    .link-300:focus {
        color: #bbb3bb !important;
    }

    .link-400 {
        color: #D5D1D6 !important;
    }

    .link-400:hover,
    .link-400:focus {
        color: #b0a9b2 !important;
    }

    .link-500 {
        color: #CCC6CD !important;
    }

    .link-500:hover,
    .link-500:focus {
        color: #a89da9 !important;
    }

    .link-600 {
        color: #C3BCC4 !important;
    }

    .link-600:hover,
    .link-600:focus {
        color: #9f93a0 !important;
    }

    .link-700 {
        color: #B9B1BB !important;
    }

    .link-700:hover,
    .link-700:focus {
        color: #948897 !important;
    }

    .link-800 {
        color: #B0A7B2 !important;
    }

    .link-800:hover,
    .link-800:focus {
        color: #8b7e8e !important;
    }

    .link-900 {
        color: #A79CA8 !important;
    }

    .link-900:hover,
    .link-900:focus {
        color: #827484 !important;
    }

    .link-1000 {
        color: #778295 !important;
    }

    .link-1000:hover,
    .link-1000:focus {
        color: #545d6c !important;
    }

    .link-1100 {
        color: #44224B !important;
    }

    .link-1100:hover,
    .link-1100:focus {
        color: #140a16 !important;
    }

    .link-1200 {
        color: #091E40 !important;
    }

    .link-1200:hover,
    .link-1200:focus {
        color: black !important;
    }

    .link-white {
        color: #fff !important;
    }

    .link-white:hover,
    .link-white:focus {
        color: #d9d9d9 !important;
    }

    .shadow-transition {
        -webkit-box-shadow: 0 25px 45px rgba(167, 156, 168, 0.075);
        box-shadow: 0 25px 45px rgba(167, 156, 168, 0.075);
        -webkit-transition: -webkit-box-shadow 0.4s ease;
        transition: -webkit-box-shadow 0.4s ease;
        -o-transition: box-shadow 0.4s ease;
        transition: box-shadow 0.4s ease;
        transition: box-shadow 0.4s ease, -webkit-box-shadow 0.4s ease;
    }

    /*-----------------------------------------------
|   Icons group
-----------------------------------------------*/
    .icon-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .icon-group .icon-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .icon-item {
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #B9B1BB;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        height: 2.5rem;
        width: 2.5rem;
        border: 0;
        font-size: 0.875rem;
        -webkit-box-shadow: 0 1.5625rem 2.8125rem rgba(0, 87, 255, 0.15);
        box-shadow: 0 1.5625rem 2.8125rem rgba(0, 87, 255, 0.15);
    }

    .icon-item:hover,
    .icon-item:focus {
        background-color: #E8E5E9;
    }

    .icon-item.icon-item-sm {
        height: 1.875rem;
        width: 1.875rem;
    }

    .icon-item.icon-item-lg {
        height: 2.75rem;
        width: 2.75rem;
    }

    .fontawesome-i2svg-active .icon-indicator {
        opacity: 1;
    }

    /*-----------------------------------------------
|   Object fit and Z-index
-----------------------------------------------*/
    .fit-cover {
        -o-object-fit: cover;
        object-fit: cover;
    }

    .z-index-1 {
        z-index: 1;
    }

    .z-index-2 {
        z-index: 2 !important;
    }

    .z-index--1 {
        z-index: -1;
    }

    /*-----------------------------------------------
|   Sidebar
-----------------------------------------------*/
    .sticky-sidebar {
        position: -webkit-sticky;
        position: sticky;
        z-index: 1020;
        top: 5.3125rem;
    }

    /*-----------------------------------------------
|   Custom circle
-----------------------------------------------*/
    .circle-dashed {
        border: 1px dashed #717CFF;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-radius: 50%;
        width: 3.5rem;
        height: 3.5rem;
    }

    /*-----------------------------------------------
|   Miscellaneous
-----------------------------------------------*/
    .hover-text-decoration-none:hover,
    .hover-text-decoration-none:focus {
        text-decoration: none;
    }

    .resize-none {
        resize: none;
    }

    .collapsed .collapse-icon {
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    .collapse-icon {
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    [data-dismiss="dropdown"] *,
    [data-offset-top] *,
    [data-toggle="collapse"] *,
    [data-toggle="tooltip"] *,
    [data-toggle="popover"] * {
        pointer-events: none;
    }

    /*-----------------------------------------------
|   Outline
-----------------------------------------------*/
    .outline-none {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .outline-none:hover,
    .outline-none:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /*-----------------------------------------------
|   Vertical Line (used in kanban header)
-----------------------------------------------*/
    .vertical-line:after {
        position: absolute;
        content: "";
        height: 75%;
        width: 1px;
        background: #DFDBDF;
        right: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .vertical-line.vertical-line-400:after {
        background-color: #D5D1D6;
    }

    /* -------------------------------------------------------------------------- */
    /*                                 Transition                                 */
    /* -------------------------------------------------------------------------- */
    .transition-base {
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .transition-none {
        -webkit-transition: none;
        -o-transition: none;
        transition: none;
    }

    .fsp-75 {
        font-size: 75%;
    }

    /* -------------------------------------------------------------------------- */
    /*                                    Width                                   */
    /* -------------------------------------------------------------------------- */
    .min-w-0 {
        min-width: 0;
    }

    /* -------------------------------------------------------------------------- */
    /*                                Terms sidebar                               */
    /* -------------------------------------------------------------------------- */
    .terms-sidebar .nav-link {
        color: #CCC6CD;
        font-weight: 500;
        font-family: "Poppins", "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

    .terms-sidebar .nav-link.active {
        color: #717CFF;
    }

    .card-price {
        padding-left: .75rem;
        padding-right: .75rem;
        text-align: center;
    }

    .backdrop {
        -webkit-backdrop-filter: blur(3px);
        backdrop-filter: blur(3px);
    }

    /*-----------------------------------------------
|   LaslesVPN glow buttons
-----------------------------------------------*/
    .btn-glow {
        position: relative;
    }

    .btn-glow::before {
        content: '';
        height: 80%;
        width: 80%;
        position: absolute;
        top: 10%;
        left: 10%;
        display: inline-block;
        background-color: inherit;
        opacity: 0.55;
        -webkit-filter: blur(26px);
        filter: blur(26px);
        -webkit-transform: translateY(45%);
        -ms-transform: translateY(45%);
        transform: translateY(45%);
        z-index: -1;
        border-radius: 10px;
    }

    /* Hover */
    .hover-top {
        -webkit-transform: translateY(0) translateZ(0);
        transform: translateY(0) translateZ(0);
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .hover-top.hover-top-shadow-lg:hover,
    .hover-top.hover-top-shadow-lg:focus {
        -webkit-transform: translateY(-0.3125rem) translateZ(0);
        transform: translateY(-0.3125rem) translateZ(0);
    }

    .hover-top:hover,
    .hover-top:focus {
        -webkit-transform: translateY(-0.125rem) translateZ(0);
        transform: translateY(-0.125rem) translateZ(0);
        -webkit-box-shadow: 0.5rem 0.5rem 1.5rem rgba(22, 28, 45, 0.1) !important;
        box-shadow: 0.5rem 0.5rem 1.5rem rgba(22, 28, 45, 0.1) !important;
        background-color: #53ACF8;
        color: #fff;
    }

    .hover-top:hover .heading-color,
    .hover-top:focus .heading-color {
        color: #fff;
    }

    /* -------------------------------------------------------------------------- */
    /*                                    Badge                                   */
    /* -------------------------------------------------------------------------- */
    .badge {
        line-height: 0.8125rem;
    }

    .badge-circle {
        height: 2rem;
        width: 2rem;
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0 0.5rem;
    }

    @media (min-width: 768px) {
        .badge-circle {
            height: 3.4rem;
            width: 3.4rem;
            border-radius: 50%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 1rem;
        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #778295;
        text-align: center;
        opacity: 0.9;
        -webkit-transition: opacity 0.15s ease;
        -o-transition: opacity 0.15s ease;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-control-prev,
        .carousel-control-next {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #778295;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-indicators {
        position: static;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: start;
        margin: 0;
    }

    .carousel-indicators li {
        border-radius: 50%;
    }

    .carousel-indicators .active {
        opacity: 1;
        background-color: #717CFF;
        width: 8px;
        height: 8px;
    }

    .carousel-control-prev {
        left: auto;
        right: 45px;
    }

    /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
    .contact .info {
        width: 100%;
        background: #fff;
    }

    .contact .info i {
        font-size: 20px;
        color: #2487ce;
        float: left;
        width: 44px;
        height: 44px;
        background: #e3f0fa;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .contact .info h4 {
        padding: 0 0 0 60px;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #124265;
    }

    .contact .info p {
        padding: 0 0 0 60px;
        margin-bottom: 0;
        font-size: 14px;
        color: #217bbc;
    }

    .contact .info .email,
    .contact .info .phone {
        margin-top: 40px;
    }

    .contact .info .email:hover i,
    .contact .info .address:hover i,
    .contact .info .phone:hover i {
        background: #2487ce;
        color: #fff;
    }

    .contact .php-email-form {
        width: 100%;
        background: #fff;
    }

    .contact .php-email-form .form-group {
        padding-bottom: 8px;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .error-message br+br {
        margin-top: 25px;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        border-radius: 4px;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus {
        border-color: #2487ce;
    }

    .contact .php-email-form input {
        height: 44px;
    }

    .contact .php-email-form textarea {
        padding: 10px 12px;
    }

    .contact .php-email-form button[type=submit] {
        background: #2487ce;
        border: 0;
        padding: 10px 30px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: #3194db;
    }

    @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }


    .card-span {
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
        border: 0;
    }

    .card-span .card-span-img {
        position: absolute;
        left: 50%;
        -webkit-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
    }

    .input-group {
        position: relative;
    }

    .input-group .input-box {
        padding-left: 2.2rem;
        vertical-align: middle;
    }

    .input-group .input-box-icon {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3"
                    href="index.html"> <img class="mb-1 mx-1"
                        src="https://cdn.iconscout.com/icon/free/png-256/free-code-276-458249.png?f=webp"
                        style="width: 60px;">ClipCode</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active"
                                aria-current="page" href="#top">Home</a></li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#blog">Blog
                            </a></li <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link"
                            href="#contact">Contact
                        </a></li>
                    </ul>
                    <form class="ps-lg-5">
                        <button class="btn btn-outline-primary order-0" type="submit">Apply</button>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(https://w.forfun.com/fetch/5e/5e426c25728fdb682c9e1148800ec6d5.jpeg);margin-top:-75px;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-block d-md-none"
                style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:cover;margin-bottom: 100px;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-md-75 mt-7">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <h1 class="text-white mt-2 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">We Help to
                            <span class="text-primary">Build</span><br class="d-block d-lg-none d-xl-block" />Your Dream
                        </h1>
                        <p class="mb-5 fs-1 lh-lg text-light">Discusses complete programming languages ​​and <br> the
                            world
                            of existing technology.</p><a class="btn btn-lg btn-primary hover-top btn-glow"
                            href="#blog">Start Reading
                            <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                </path>
                            </svg></a>
                        <div class="mt-5 mt-xl-6">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item me-3"><a class="text-decoration-none"
                                        href="https://www.facebook.com/profile.php?id=100082386252191&mibextid=ZbWKwL">
                                        <svg class="bi bi-facebook text-facebook" xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                            </path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3 mb-5"><a href="#!">
                                        <svg class="bi bi-twitter text-twitter" xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                            </path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a
                                        href="https://instagram.com/aditzdwp_?igshid=YTQwZjQ0NmI0OA==">
                                        <svg class="bi bi-instagram text-instagram text-youtube"
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                            </path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="blog">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mb-4">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Bahasa Pemrograman</h5>
                        <p class="mb-5">Bahasa pemrograman atau bahasa penataolahan adalah sistem notasi untuk menulis
                            program komputer. Sebagian besar bahasa pemrograman adalah bahasa formal berdasarkan teks,
                            tetapi mungkin juga berupa grafis.</p>
                    </div>
                </div>
                <div class="row icon-boxes" style="margin-left: 67px;">
                    @forelse ($posts as $post)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin-top: 60px;"
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{asset('/storage/posts/'.$post->image) }}" class="rounded"
                                    style="width: 16rem">
                            </div>
                            <h4 class="title"><a href="">{{ $post->title }}</a></h4>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-danger">SHOW</a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <!-- end of .container-->
        </section>

        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mb-4" style="margin-top: -70px;">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">About Us</h5>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illum, fuga
                            maxime id veniam facilis ad iusto ipsam sequi labore dolore accusamus est. Voluptatem
                            quibusdam earum consequatur architecto minus vitae sequi alias fuga unde deserunt!</p>
                    </div>
                </div>

                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-3">
                        <p style="margin-top: 50px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Expedita, temporibus?
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Corrupti rem officia aliquam beatae assumenda accusamus voluptatum
                                error eveniet nesciunt! Quia!</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Fugiat nam pariatur quidem ad, voluptate veritatis!</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata. Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Ipsum, ut!</p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                        <img src="https://bootstrapmade.com/demo/templates/NewBiz/assets/img/about-img.svg"
                            class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="https://bootstrapmade.com/demo/templates/NewBiz/assets/img/about-extra-1.svg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
                        <h4 style="padding-top: 40px;">Voluptatem dignissimos provident quasi corporis voluptates sit
                            assumenda.</h4>
                        <p style="padding-top:20px">
                            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae
                            perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia
                            recusandae non ad at et a.
                        </p>
                        <p>
                            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea
                            corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus
                            quia sit. Porro rerum eum eum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima obcaecati maxime
                            laboriosam
                            est voluptate quidem eos accusamus provident quae ea quam corporis reprehenderit in
                            tempora
                            quo sunt sapiente, velit ullam.
                        </p>
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 mt-5 order-1 order-lg-2" data-aos="fade-left">
                        <img src="https://bootstrapmade.com/demo/templates/NewBiz/assets/img/about-extra-2.svg"
                            class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                        <h4 style="padding-top: 100px;">Neque saepe temporibus repellat ea ipsum et. Id vel et quia
                            tempora facere reprehenderit.
                        </h4>
                        <p style="padding-top: 20px;">
                            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis.
                            Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus
                            corporis autem at blanditiis beatae incidunt sunt. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Est similique error, ex necessitatibus numquam non asperiores tempore rem
                            amet consequatur.
                        </p>
                        <p>
                            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse
                            molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, officia!
                        </p>
                        <p>
                            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est
                            aut fuga mollitia exercitationem nam accusantium provident quia. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Est inventore tempora asperiores excepturi minus illo tempore
                            commodi velit distinctio, at dolor et earum beatae officia possimus amet provident
                            accusantium iste.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="margin-top: -120px;">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mb-4">
                        <h5 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Contact</h5>
                        <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi nostrum totam
                            itaque eius corporis, odit saepe incidunt, blanditiis placeat et dolorem hic? Omnis ducimus,
                            facere molestiae est, aut error vitae reiciendis non blanditiis fugit qui!</p>
                    </div>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>Location:</h4>
                                <p>Pule Trenggalek, Jawa Timur</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>adityagmg3@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 822 4486 3629 </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-2 gx-md-3">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3 col-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center col-12"><button type="submit">Send Message</button></div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6 bg-100">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-7 col-lg-6 offset-xl-1">
                        <h1 class="fw-light text-center text-md-start fs-lg-3 fs-xl-4">Ready to chase your dreams?</h1>
                    </div>
                    <div class="col-md-4 text-center text-lg-end"> <a class="btn btn-lg btn-primary hover-top"
                            href="#">Apply Online
                            <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                </path>
                            </svg></a></div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

            <div class="container">
                <div class="row justify-content-between pb-2 pt-8">
                    <div class="col-12 col-lg-auto mb-5 mb-lg-0"><a
                            class="d-flex align-items-center fw-semi-bold fs-3 text-light" href="#"> <img class=""
                                src="https://cdn.iconscout.com/icon/free/png-256/free-code-276-458249.png?f=webp"
                                style="width: 60px;">ClipCode</a>
                        <p class="my-3 text-100 fw-light">Aditya Dwi Purnomo<br />Pule, Trenggalek 2006,
                            Jawa Timur.</p>
                    </div>
                    <div class="col-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#top">Home</a>
                            </li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#about">About
                                    Us</a>
                            </li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none"
                                    href="#contact">Contact</a>
                            </li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#!">Disclaimer</a>
                            </li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#!">Disclaimer</a>
                            </li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#!">Privacy
                                    Policy</a></li>
                            <li class="mb-3"><a class="text-100 fw-light text-decoration-none" href="#!">Terms of
                                    Service</a></li>
                        </ul>
                    </div>
                    <div class="col-auto mb-4 d-flex align-items-end">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me-3"><a class="text-decoration-none"
                                    href="https://www.facebook.com/profile.php?id=100082386252191&mibextid=ZbWKwL">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="#ffffff" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="#ffffff" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685
                                        0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533
                                        6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429
                                        3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0
                                        2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0
                                        0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0
                                        0 0 5.026 15z">
                                        </path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a
                                    href="https://instagram.com/aditzdwp_?igshid=YTQwZjQ0NmI0OA==">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="#ffffff" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto mb-2">
                        <p class="mb-0 fs--1 my-2 text-100">&copy; This template is made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="#2b2b2b" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="text-100" href="#" target="_blank">ClipCode - Team </a>
                        </p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>

</html>