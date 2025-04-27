<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="V701dcfNuNLnWyja6oQOkI0PqQFZoj54grqyhUL8">

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
            width: 100 %;
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
@if (!empty($msg))
    <script>
        alert('保存完了しました');
    </script>
    @endif
</head>

<body cz-shortcut-listen="true">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a href="https://alfha.mountain-gorilla.co.jp" class="navbar-brand">
                    alfha
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a id="navbarDropdown" class="nav-link" aria-haspopup="true" aria-expanded="false">
                                株式会社上方ビール
                                <span class="caret">

                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                admin
                                <span class="caret">
                                </span>
                            </a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                                <a data-v-2e051a20="" class="dropdown-item" style="cursor: pointer;">
                                    logout
                                </a>
                                <form id="logout-form" action="https://alfha.mountain-gorilla.co.jp/logout"
                                    method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="V701dcfNuNLnWyja6oQOkI0PqQFZoj54grqyhUL8">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="container-fluid">
                <!---->
                <div data-v-793490ba="" class="container">
                    <div data-v-793490ba="" class="row justify-content-center">
                        <div data-v-793490ba="" class="col-md-8">
                            <div data-v-793490ba="" class="d-flex justify-content-start mb-3">
                                <div data-v-793490ba="" class="mr-auto">
                                    <span data-v-793490ba="" class="span-header">
                                        記号の登録
                                    </span>
                                </div>
                                <div data-v-793490ba="" class="align-self-center mr-2">
                                    <form>
                                        <button data-v-793490ba="" type="button" class="btn btn-primary"
                                            style="width: 10rem;">
                                            <td><a href="javascript:form1.submit()">保存</a></td>
                                        </button>
                                    </form>
                                </div>
                                <div data-v-793490ba="" class="align-self-center">
                                    <button data-v-793490ba="" type="button" class="btn btn-dark">
                                        戻る
                                    </button>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                            <form data-v-793490ba="" method="post" name="form1" action="/masters/symbols/add">
                                @csrf
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="name" class="col-sm-4 col-form-label text-md-right">
                                        名称
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="text" name="name" id="name" class="form-control"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="brand" class="col-sm-4 col-form-label text-md-right">
                                        銘柄
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="text" name="brand" id="brand"
                                            class="form-control" value="{{ old('brand') }}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="item_id" class="col-sm-4 col-form-label text-md-right">
                                        品目テーブルのID
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="" name="item_id" id="item_id"
                                            class="form-control" value="{{ old('item_id') }}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="d-flex justify-content-center mt-3">
                                    <div data-v-793490ba="" class="text-center custom-control custom-checkbox">
                                        <input data-v-793490ba="" type="checkbox" name="form1" id="is_visibled"
                                            class="custom-control-input" value="{{ old('form1') }}">
                                        <label data-v-793490ba="" for="is_visibled"
                                            class="custom-control-label align-left">
                                            表示する
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <!---->
                        </div>
                    </div>
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