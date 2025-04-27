<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="vZIbx4g0Mwt2vaKv0UFy75CBd3uaacy5nyzo5Hvs">

    <title>alfha</title>

    <!-- Scripts -->
    <script src="https://alfha.mountain-gorilla.co.jp/js/app.js?id=71e3bb3ce9eab94fa738" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="//use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://alfha.mountain-gorilla.co.jp/css/app.css?id=0f6b75e4d242fb3992cf" rel="stylesheet">
    <style>
        html {
            min-height: 100%;
            position: relative;
        }

        body {
            margin-bottom: 3rem;
        }

        .footer {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.6;
            height: 3rem;
            position: absolute;
            bottom: 0;
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes spinAround {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(359deg)
            }
        }

        @keyframes spinAround {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(359deg)
            }
        }

        .loading-overlay {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            align-items: center;
            display: none;
            justify-content: center;
            overflow: hidden;
            z-index: 1
        }

        .loading-overlay.is-active {
            display: flex
        }

        .loading-overlay.is-full-page {
            z-index: 999;
            position: fixed
        }

        .loading-overlay.is-full-page .loading-icon:after {
            top: calc(50% - 2.5em);
            left: calc(50% - 2.5em);
            width: 5em;
            height: 5em
        }

        .loading-overlay .loading-background {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            background: #fff;
            opacity: 0.5
        }

        .loading-overlay .loading-icon {
            position: relative
        }

        .loading-overlay .loading-icon:after {
            -webkit-animation: spinAround 500ms infinite linear;
            animation: spinAround 500ms infinite linear;
            border: 2px solid #777;
            border-radius: 290486px;
            border-right-color: transparent;
            border-top-color: transparent;
            content: "";
            display: block;
            height: 5em;
            position: relative;
            width: 5em;
            position: absolute;
            top: calc(50% - 1.5em);
            left: calc(50% - 1.5em);
            width: 3em;
            height: 3em;
            border-width: 0.25em
        }
    </style>
    <style type="text/css">
        a[data-v-82963a40] {
            cursor: pointer
        }
    </style>
    <style type="text/css">
        .nav-link {
            transition: all .2s;
        }

        .nav-scroller a.nav-link.router-link-active {
            background: #008c79;
            color: white;
        }

        .view-enter-active,
        .view-leave-active {
            transition: opacity .35s;
        }

        .view-enter,
        .view-leave-to {
            opacity: 0;
        }
    </style>
    <style type="text/css">
        .test[data-v-2e051a20] {
            color: red;
        }
    </style>
    <style type="text/css">
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
    <style type="text/css">
        /*# sourceURL=undefined */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJsaWIuc2NzcyIsInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style type="text/css">
        .month-year-desplay .input {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: inherit;
            line-height: 1.6;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .vue-monthly-picker .item.active.selected {
            background: #38c172;
        }
    </style>
    <style type="text/css">
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <style type="text/css">
        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
        html[data-v-2a4cb8c4] {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        figcaption[data-v-2a4cb8c4],
        main[data-v-2a4cb8c4],
        nav[data-v-2a4cb8c4],
        section[data-v-2a4cb8c4] {
            display: block;
        }

        strong[data-v-2a4cb8c4] {
            font-weight: inherit;
            font-weight: bolder;
        }

        dfn[data-v-2a4cb8c4] {
            font-style: italic;
        }

        button[data-v-2a4cb8c4],
        input[data-v-2a4cb8c4] {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
            overflow: visible;
        }

        button[data-v-2a4cb8c4] {
            text-transform: none;
        }

        [type=reset][data-v-2a4cb8c4],
        [type=submit][data-v-2a4cb8c4],
        button[data-v-2a4cb8c4],
        html [type=button][data-v-2a4cb8c4] {
            -webkit-appearance: button;
        }

        [type=button][data-v-2a4cb8c4]::-moz-focus-inner,
        [type=reset][data-v-2a4cb8c4]::-moz-focus-inner,
        [type=submit][data-v-2a4cb8c4]::-moz-focus-inner,
        button[data-v-2a4cb8c4]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        [type=button][data-v-2a4cb8c4]:-moz-focusring,
        [type=reset][data-v-2a4cb8c4]:-moz-focusring,
        [type=submit][data-v-2a4cb8c4]:-moz-focusring,
        button[data-v-2a4cb8c4]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        legend[data-v-2a4cb8c4] {
            color: inherit;
            display: table;
            max-width: 100%;
            white-space: normal;
        }

        [type=checkbox][data-v-2a4cb8c4],
        [type=radio][data-v-2a4cb8c4],
        legend[data-v-2a4cb8c4] {
            box-sizing: border-box;
            padding: 0;
        }

        [type=number][data-v-2a4cb8c4]::-webkit-inner-spin-button,
        [type=number][data-v-2a4cb8c4]::-webkit-outer-spin-button {
            height: auto;
        }

        [type=search][data-v-2a4cb8c4] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type=search][data-v-2a4cb8c4]::-webkit-search-cancel-button,
        [type=search][data-v-2a4cb8c4]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        [data-v-2a4cb8c4]::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        menu[data-v-2a4cb8c4] {
            display: block;
        }

        canvas[data-v-2a4cb8c4] {
            display: inline-block;
        }

        [hidden][data-v-2a4cb8c4],
        template[data-v-2a4cb8c4] {
            display: none;
        }

        html[data-v-2a4cb8c4] {
            box-sizing: border-box;
            font-family: sans-serif;
        }

        *[data-v-2a4cb8c4],
        [data-v-2a4cb8c4]:after,
        [data-v-2a4cb8c4]:before {
            box-sizing: inherit;
        }

        button[data-v-2a4cb8c4] {
            background: transparent;
            padding: 0;
        }

        button[data-v-2a4cb8c4]:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        *[data-v-2a4cb8c4],
        [data-v-2a4cb8c4]:after,
        [data-v-2a4cb8c4]:before {
            border-width: 0;
            border-style: solid;
            border-color: #dae1e7;
        }

        [type=button][data-v-2a4cb8c4],
        [type=reset][data-v-2a4cb8c4],
        [type=submit][data-v-2a4cb8c4],
        button[data-v-2a4cb8c4] {
            border-radius: 0;
        }

        button[data-v-2a4cb8c4],
        input[data-v-2a4cb8c4] {
            font-family: inherit;
        }

        input[data-v-2a4cb8c4]::-moz-placeholder {
            color: inherit;
            opacity: 0.5;
        }

        input[data-v-2a4cb8c4]:-ms-input-placeholder {
            color: inherit;
            opacity: 0.5;
        }

        input[data-v-2a4cb8c4]::placeholder {
            color: inherit;
            opacity: 0.5;
        }

        [role=button][data-v-2a4cb8c4],
        button[data-v-2a4cb8c4] {
            cursor: pointer;
        }

        .vue-ads-bg-grey-light[data-v-2a4cb8c4] {
            background-color: #dae1e7;
        }

        .vue-ads-bg-grey-lighter[data-v-2a4cb8c4] {
            background-color: #f1f5f8;
        }

        .vue-ads-bg-teal-dark[data-v-2a4cb8c4] {
            background-color: #38a89d;
        }

        .hover\:vue-ads-bg-grey-lighter[data-v-2a4cb8c4]:hover {
            background-color: #f1f5f8;
        }

        .vue-ads-cursor-default[data-v-2a4cb8c4] {
            cursor: default;
        }

        .vue-ads-flex[data-v-2a4cb8c4] {
            display: flex;
        }

        .vue-ads-justify-end[data-v-2a4cb8c4] {
            justify-content: flex-end;
        }

        .vue-ads-flex-grow[data-v-2a4cb8c4] {
            flex-grow: 1;
        }

        .vue-ads-leading-normal[data-v-2a4cb8c4] {
            line-height: 1.5;
        }

        .vue-ads-leading-loose[data-v-2a4cb8c4] {
            line-height: 2;
        }

        .vue-ads-m-2[data-v-2a4cb8c4] {
            margin: 0.5rem;
        }

        .vue-ads-ml-1[data-v-2a4cb8c4] {
            margin-left: 0.25rem;
        }

        .focus\:vue-ads-outline-none[data-v-2a4cb8c4]:focus,
        .vue-ads-outline-none[data-v-2a4cb8c4] {
            outline: 0;
        }

        .vue-ads-px-0[data-v-2a4cb8c4] {
            padding-left: 0;
            padding-right: 0;
        }

        .vue-ads-pr-2[data-v-2a4cb8c4] {
            padding-right: 0.5rem;
        }

        .vue-ads-text-grey[data-v-2a4cb8c4] {
            color: #b8c2cc;
        }

        .vue-ads-text-white[data-v-2a4cb8c4] {
            color: #fff;
        }

        .vue-ads-text-xs[data-v-2a4cb8c4] {
            font-size: 0.75rem;
        }

        .vue-ads-w-6[data-v-2a4cb8c4] {
            width: 1.5rem;
        }
    </style>
    <style type="text/css">
        .vue-ads-flex {
            display: flex
        }

        .vue-ads-justify-end {
            justify-content: flex-end
        }

        .vue-ads-flex-grow {
            flex-grow: 1
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-78f0bc55] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-62aa3e1f] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-7817d459] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-del[data-v-7817d459] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        .delete-row[data-v-7817d459] {
            display: none !important;
        }

        .quantity-input[data-v-7817d459] {
            width: 7rem;
        }

        .form-control.is-invalid[data-v-7817d459] {
            background-image: none;
            padding-right: 5px;
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        table .nav-link[data-v-ec14ae2c] {
            padding-top: 0;
            padding-bottom: 0;
        }

        td[data-v-ec14ae2c] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        td input[data-v-ec14ae2c] {
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-ec14ae2c] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-ec14ae2c] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-ec14ae2c] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-ec14ae2c] {
            overflow: auto;
        }

        .x-scroll table[data-v-ec14ae2c] {
            min-width: 1400px;
        }

        .x-scroll[data-v-ec14ae2c]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-ec14ae2c]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-ec14ae2c]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-ec14ae2c],
        .x-scroll th[data-v-ec14ae2c] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        table .nav-link[data-v-715c9510] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-715c9510] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        td[data-v-715c9510] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-715c9510] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-715c9510] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-715c9510] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-715c9510] {
            overflow: auto;
        }

        .x-scroll table[data-v-715c9510] {
            min-width: 1400px;
        }

        .x-scroll[data-v-715c9510]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-715c9510]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-715c9510]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-715c9510],
        .x-scroll th[data-v-715c9510] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }

        .delete-row[data-v-715c9510] {
            display: none;
        }

        .form-control.is-invalid[data-v-715c9510] {
            background-image: none;
            padding-right: 5px;
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        table .nav-link[data-v-21758784] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-21758784] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        td[data-v-21758784] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-21758784] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-21758784] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-21758784] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-21758784] {
            overflow: auto;
        }

        .x-scroll table[data-v-21758784] {
            min-width: 1400px;
        }

        .x-scroll[data-v-21758784]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-21758784]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-21758784]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-21758784],
        .x-scroll th[data-v-21758784] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }

        .delete-row[data-v-21758784] {
            display: none;
        }

        .form-control.is-invalid[data-v-21758784] {
            background-image: none;
            padding-right: 5px;
        }

        .bg-lead[data-v-21758784] {
            background-color: #FFFFCC;
        }

        .bg-receiving[data-v-21758784] {
            background-color: #CCFFFF;
        }

        .missing[data-v-21758784] {
            color: red;
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-5c39757e] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-7efbbd58] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-7efbbd58] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        .btn-copy[data-v-7efbbd58] {
            font-size: 0.9rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border: 0;
            line-height: 1.5rem;
            text-align: center;
        }

        .delete-row[data-v-7efbbd58] {
            display: none;
        }
    </style>
    <style type="text/css">
        .clickable[data-v-742d7c5d]:hover {
            background-color: #fff8e1 !important;
        }

        .clickable[data-v-742d7c5d] {
            cursor: pointer;
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-97fd6270] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-8e84c29e] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-793490ba] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-68add828] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-085ce442] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-a07f8ffc] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-2e7adba9] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-1cc8d0cc] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-42855449] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-04b774cb] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-474fe449] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-acec0e36] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-73350336] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-febd0b28] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-71a1f3ca] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-1644ca82] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-226c20d6] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-39949d3f] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-2e74cd96] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-acefed4a] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-c6d59778] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-c160bd6a] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-2ce9e334] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-25bfae34] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-cd8f25fe] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-7727702b] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-4be72730] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        .btn-del[data-v-8057da1e] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            border: none;
            line-height: 1.5rem;
            text-align: center;
        }
    </style>
    <style type="text/css">
        .clickable[data-v-7b01ffdf]:hover {
            background-color: #fff8e1 !important;
        }

        .clickable[data-v-7b01ffdf] {
            cursor: pointer;
        }
    </style>
    <style type="text/css"></style>
    <style type="text/css">
        .clickable[data-v-6f1dfd51]:hover {
            background-color: #fff8e1 !important;
        }

        .clickable[data-v-6f1dfd51] {
            cursor: pointer;
        }
    </style>
    <style type="text/css"></style>
    <style type="text/css">
        .clickable[data-v-77ed2dd3]:hover {
            background-color: #fff8e1 !important;
        }

        .clickable[data-v-77ed2dd3] {
            cursor: pointer;
        }
    </style>
    <style type="text/css"></style>
    <style type="text/css">
        .btn-menu[data-v-ba873a9a] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        .vdp-datepicker .form-control:disabled,
        .vdp-datepicker .form-control[readonly] {
            background-color: #fff !important
        }
    </style>
    <style type="text/css">
        .rtl {
            direction: rtl;
        }

        .vdp-datepicker {
            position: relative;
            text-align: left;
        }

        .vdp-datepicker * {
            box-sizing: border-box;
        }

        .vdp-datepicker__calendar {
            position: absolute;
            z-index: 100;
            background: #fff;
            width: 300px;
            border: 1px solid #ccc;
        }

        .vdp-datepicker__calendar header {
            display: block;
            line-height: 40px;
        }

        .vdp-datepicker__calendar header span {
            display: inline-block;
            text-align: center;
            width: 71.42857142857143%;
            float: left;
        }

        .vdp-datepicker__calendar header .prev,
        .vdp-datepicker__calendar header .next {
            width: 14.285714285714286%;
            float: left;
            text-indent: -10000px;
            position: relative;
        }

        .vdp-datepicker__calendar header .prev:after,
        .vdp-datepicker__calendar header .next:after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            border: 6px solid transparent;
        }

        .vdp-datepicker__calendar header .prev:after {
            border-right: 10px solid #000;
            margin-left: -5px;
        }

        .vdp-datepicker__calendar header .prev.disabled:after {
            border-right: 10px solid #ddd;
        }

        .vdp-datepicker__calendar header .next:after {
            border-left: 10px solid #000;
            margin-left: 5px;
        }

        .vdp-datepicker__calendar header .next.disabled:after {
            border-left: 10px solid #ddd;
        }

        .vdp-datepicker__calendar header .prev:not(.disabled),
        .vdp-datepicker__calendar header .next:not(.disabled),
        .vdp-datepicker__calendar header .up:not(.disabled) {
            cursor: pointer;
        }

        .vdp-datepicker__calendar header .prev:not(.disabled):hover,
        .vdp-datepicker__calendar header .next:not(.disabled):hover,
        .vdp-datepicker__calendar header .up:not(.disabled):hover {
            background: #eee;
        }

        .vdp-datepicker__calendar .disabled {
            color: #ddd;
            cursor: default;
        }

        .vdp-datepicker__calendar .flex-rtl {
            display: flex;
            width: inherit;
            flex-wrap: wrap;
        }

        .vdp-datepicker__calendar .cell {
            display: inline-block;
            padding: 0 5px;
            width: 14.285714285714286%;
            height: 40px;
            line-height: 40px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid transparent;
        }

        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year {
            cursor: pointer;
        }

        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day:hover,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month:hover,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year:hover {
            border: 1px solid #4bd;
        }

        .vdp-datepicker__calendar .cell.selected {
            background: #4bd;
        }

        .vdp-datepicker__calendar .cell.selected:hover {
            background: #4bd;
        }

        .vdp-datepicker__calendar .cell.selected.highlighted {
            background: #4bd;
        }

        .vdp-datepicker__calendar .cell.highlighted {
            background: #cae5ed;
        }

        .vdp-datepicker__calendar .cell.highlighted.disabled {
            color: #a3a3a3;
        }

        .vdp-datepicker__calendar .cell.grey {
            color: #888;
        }

        .vdp-datepicker__calendar .cell.grey:hover {
            background: inherit;
        }

        .vdp-datepicker__calendar .cell.day-header {
            font-size: 75%;
            white-space: nowrap;
            cursor: inherit;
        }

        .vdp-datepicker__calendar .cell.day-header:hover {
            background: inherit;
        }

        .vdp-datepicker__calendar .month,
        .vdp-datepicker__calendar .year {
            width: 33.333%;
        }

        .vdp-datepicker__clear-button,
        .vdp-datepicker__calendar-button {
            cursor: pointer;
            font-style: normal;
        }

        .vdp-datepicker__clear-button.disabled,
        .vdp-datepicker__calendar-button.disabled {
            color: #999;
            cursor: default;
        }

        /*# sourceURL=Datepicker.vue */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkRhdGVwaWNrZXIudnVlIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsY0FBYztBQUNoQjtBQUNBO0VBQ0Usa0JBQWtCO0VBQ2xCLGdCQUFnQjtBQUNsQjtBQUNBO0VBQ0Usc0JBQXNCO0FBQ3hCO0FBQ0E7RUFDRSxrQkFBa0I7RUFDbEIsWUFBWTtFQUNaLGdCQUFnQjtFQUNoQixZQUFZO0VBQ1osc0JBQXNCO0FBQ3hCO0FBQ0E7RUFDRSxjQUFjO0VBQ2QsaUJBQWlCO0FBQ25CO0FBQ0E7RUFDRSxxQkFBcUI7RUFDckIsa0JBQWtCO0VBQ2xCLHlCQUF5QjtFQUN6QixXQUFXO0FBQ2I7QUFDQTs7RUFFRSwwQkFBMEI7RUFDMUIsV0FBVztFQUNYLHFCQUFxQjtFQUNyQixrQkFBa0I7QUFDcEI7QUFDQTs7RUFFRSxXQUFXO0VBQ1gsa0JBQWtCO0VBQ2xCLFNBQVM7RUFDVCxRQUFRO0VBQ1IsNENBQTRDO0VBQzVDLDZCQUE2QjtBQUMvQjtBQUNBO0VBQ0UsNkJBQTZCO0VBQzdCLGlCQUFpQjtBQUNuQjtBQUNBO0VBQ0UsNkJBQTZCO0FBQy9CO0FBQ0E7RUFDRSw0QkFBNEI7RUFDNUIsZ0JBQWdCO0FBQ2xCO0FBQ0E7RUFDRSw0QkFBNEI7QUFDOUI7QUFDQTs7O0VBR0UsZUFBZTtBQUNqQjtBQUNBOzs7RUFHRSxnQkFBZ0I7QUFDbEI7QUFDQTtFQUNFLFdBQVc7RUFDWCxlQUFlO0FBQ2pCO0FBQ0E7RUFDRSxhQUFhO0VBQ2IsY0FBYztFQUNkLGVBQWU7QUFDakI7QUFDQTtFQUNFLHFCQUFxQjtFQUNyQixjQUFjO0VBQ2QsMEJBQTBCO0VBQzFCLFlBQVk7RUFDWixpQkFBaUI7RUFDakIsa0JBQWtCO0VBQ2xCLHNCQUFzQjtFQUN0Qiw2QkFBNkI7QUFDL0I7QUFDQTs7O0VBR0UsZUFBZTtBQUNqQjtBQUNBOzs7RUFHRSxzQkFBc0I7QUFDeEI7QUFDQTtFQUNFLGdCQUFnQjtBQUNsQjtBQUNBO0VBQ0UsZ0JBQWdCO0FBQ2xCO0FBQ0E7RUFDRSxnQkFBZ0I7QUFDbEI7QUFDQTtFQUNFLG1CQUFtQjtBQUNyQjtBQUNBO0VBQ0UsY0FBYztBQUNoQjtBQUNBO0VBQ0UsV0FBVztBQUNiO0FBQ0E7RUFDRSxtQkFBbUI7QUFDckI7QUFDQTtFQUNFLGNBQWM7RUFDZCxtQkFBbUI7RUFDbkIsZUFBZTtBQUNqQjtBQUNBO0VBQ0UsbUJBQW1CO0FBQ3JCO0FBQ0E7O0VBRUUsY0FBYztBQUNoQjtBQUNBOztFQUVFLGVBQWU7RUFDZixrQkFBa0I7QUFDcEI7QUFDQTs7RUFFRSxXQUFXO0VBQ1gsZUFBZTtBQUNqQiIsImZpbGUiOiJEYXRlcGlja2VyLnZ1ZSIsInNvdXJjZXNDb250ZW50IjpbIi5ydGwge1xuICBkaXJlY3Rpb246IHJ0bDtcbn1cbi52ZHAtZGF0ZXBpY2tlciB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbn1cbi52ZHAtZGF0ZXBpY2tlciAqIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHotaW5kZXg6IDEwMDtcbiAgYmFja2dyb3VuZDogI2ZmZjtcbiAgd2lkdGg6IDMwMHB4O1xuICBib3JkZXI6IDFweCBzb2xpZCAjY2NjO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIge1xuICBkaXNwbGF5OiBibG9jaztcbiAgbGluZS1oZWlnaHQ6IDQwcHg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciBzcGFuIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHdpZHRoOiA3MS40Mjg1NzE0Mjg1NzE0MyU7XG4gIGZsb2F0OiBsZWZ0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXYsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dCB7XG4gIHdpZHRoOiAxNC4yODU3MTQyODU3MTQyODYlO1xuICBmbG9hdDogbGVmdDtcbiAgdGV4dC1pbmRlbnQ6IC0xMDAwMHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldjphZnRlcixcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5uZXh0OmFmdGVyIHtcbiAgY29udGVudDogJyc7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbGVmdDogNTAlO1xuICB0b3A6IDUwJTtcbiAgdHJhbnNmb3JtOiB0cmFuc2xhdGVYKC01MCUpIHRyYW5zbGF0ZVkoLTUwJSk7XG4gIGJvcmRlcjogNnB4IHNvbGlkIHRyYW5zcGFyZW50O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXY6YWZ0ZXIge1xuICBib3JkZXItcmlnaHQ6IDEwcHggc29saWQgIzAwMDtcbiAgbWFyZ2luLWxlZnQ6IC01cHg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldi5kaXNhYmxlZDphZnRlciB7XG4gIGJvcmRlci1yaWdodDogMTBweCBzb2xpZCAjZGRkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQ6YWZ0ZXIge1xuICBib3JkZXItbGVmdDogMTBweCBzb2xpZCAjMDAwO1xuICBtYXJnaW4tbGVmdDogNXB4O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQuZGlzYWJsZWQ6YWZ0ZXIge1xuICBib3JkZXItbGVmdDogMTBweCBzb2xpZCAjZGRkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXY6bm90KC5kaXNhYmxlZCksXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dDpub3QoLmRpc2FibGVkKSxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC51cDpub3QoLmRpc2FibGVkKSB7XG4gIGN1cnNvcjogcG9pbnRlcjtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5wcmV2Om5vdCguZGlzYWJsZWQpOmhvdmVyLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQ6bm90KC5kaXNhYmxlZCk6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAudXA6bm90KC5kaXNhYmxlZCk6aG92ZXIge1xuICBiYWNrZ3JvdW5kOiAjZWVlO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuZGlzYWJsZWQge1xuICBjb2xvcjogI2RkZDtcbiAgY3Vyc29yOiBkZWZhdWx0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuZmxleC1ydGwge1xuICBkaXNwbGF5OiBmbGV4O1xuICB3aWR0aDogaW5oZXJpdDtcbiAgZmxleC13cmFwOiB3cmFwO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZzogMCA1cHg7XG4gIHdpZHRoOiAxNC4yODU3MTQyODU3MTQyODYlO1xuICBoZWlnaHQ6IDQwcHg7XG4gIGxpbmUtaGVpZ2h0OiA0MHB4O1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHRyYW5zcGFyZW50O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS5kYXksXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLm1vbnRoLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS55ZWFyIHtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS5kYXk6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLm1vbnRoOmhvdmVyLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS55ZWFyOmhvdmVyIHtcbiAgYm9yZGVyOiAxcHggc29saWQgIzRiZDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuc2VsZWN0ZWQge1xuICBiYWNrZ3JvdW5kOiAjNGJkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5zZWxlY3RlZDpob3ZlciB7XG4gIGJhY2tncm91bmQ6ICM0YmQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLnNlbGVjdGVkLmhpZ2hsaWdodGVkIHtcbiAgYmFja2dyb3VuZDogIzRiZDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuaGlnaGxpZ2h0ZWQge1xuICBiYWNrZ3JvdW5kOiAjY2FlNWVkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5oaWdobGlnaHRlZC5kaXNhYmxlZCB7XG4gIGNvbG9yOiAjYTNhM2EzO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5ncmV5IHtcbiAgY29sb3I6ICM4ODg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLmdyZXk6aG92ZXIge1xuICBiYWNrZ3JvdW5kOiBpbmhlcml0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5kYXktaGVhZGVyIHtcbiAgZm9udC1zaXplOiA3NSU7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIGN1cnNvcjogaW5oZXJpdDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuZGF5LWhlYWRlcjpob3ZlciB7XG4gIGJhY2tncm91bmQ6IGluaGVyaXQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5tb250aCxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLnllYXIge1xuICB3aWR0aDogMzMuMzMzJTtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2xlYXItYnV0dG9uLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhci1idXR0b24ge1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2xlYXItYnV0dG9uLmRpc2FibGVkLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhci1idXR0b24uZGlzYWJsZWQge1xuICBjb2xvcjogIzk5OTtcbiAgY3Vyc29yOiBkZWZhdWx0O1xufVxuIl19 */
    </style>
</head>

<body cz-shortcut-listen="true">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid"><a href="https://alfha.mountain-gorilla.co.jp" class="navbar-brand">
                    alfha
                </a> <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">
                        <li><a id="navbarDropdown" class="nav-link" aria-haspopup="true" aria-expanded="false">
                                株式会社上方ビール <span class="caret"></span></a></li>
                        <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                admin <span class="caret"></span></a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right"><a
                                    data-v-2e051a20="" class="dropdown-item" style="cursor: pointer;">logout</a>
                                <form id="logout-form" action="https://alfha.mountain-gorilla.co.jp/logout"
                                    method="POST" style="display: none;"><input type="hidden" name="_token"
                                        value="vZIbx4g0Mwt2vaKv0UFy75CBd3uaacy5nyzo5Hvs"></form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container-fluid">
                <!---->
                <div data-v-8e84c29e="" class="container">
                    <div data-v-8e84c29e="" class="d-flex justify-content-start mb-3">
                        <div data-v-8e84c29e="" class="mr-auto"><span data-v-8e84c29e="" class="span-header">麦芽一覧</span>
                        </div>
                        <div data-v-8e84c29e="" class="align-self-center mr-3"><button data-v-8e84c29e="" type="button"
                                class="btn btn-primary"><i data-v-8e84c29e="" class="fas fa-plus"></i> 新規追加</button>
                        </div>
                        <div data-v-8e84c29e="" class="align-self-center"><button data-v-8e84c29e="" type="button"
                                class="btn btn-dark">戻る</button></div>
                    </div>
                    <table data-v-8e84c29e="" class="table table-sm table-striped">
                        <thead data-v-8e84c29e="">
                            <tr data-v-8e84c29e="">
                                <th data-v-8e84c29e="" scope="col" class="text-center">名前</th>
                                <th data-v-8e84c29e="" scope="col" class="text-center">メーカー</th>
                                <th data-v-8e84c29e="" scope="col" class="text-center">PPG</th>
                                <th data-v-8e84c29e="" scope="col" class="text-center">色度</th>
                                <th data-v-8e84c29e="" scope="col" class="text-center">表示</th>
                            </tr>
                        </thead>
                        <tbody data-v-8e84c29e="" class="bg-white">
                            @foreach ($malts as $malts)
                            <tr data-v-8e84c29e="" class="clickable">
                                <td data-v-8e84c29e="" class="text-center align-middle">{{ $malts->name }}</td>
                                <td data-v-8e84c29e="" class="text-center align-middle">{{ $malts->maker }}</td>
                                <td data-v-8e84c29e="" class="text-center align-middle">{{ $malts->ppg }}</td>
                                <td data-v-8e84c29e="" class="text-center align-middle">{{ $malts->color }}</td>
                                <td data-v-8e84c29e="" class="text-center align-middle">{{ $malts->malts_display_flg }}
                                    <i data-v-8e84c29e="" class="fa-square-o"></i></td>
                            </tr>
                            @endforeach
                            </td>
                            <td data-v-8e84c29e="" class="text-center align-middle"><i data-v-8e84c29e=""
                                    class="fas fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                    <!---->
                </div>
            </div>
        </main>
    </div>

    <div class="footer">
        <small>© 2022 Mountain Gorilla.</small>
    </div>


</body>

</html>