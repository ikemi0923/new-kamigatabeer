<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="jlD5Nel5TTiUeJxefoymI2oOPxPIhh2ju0vP7vuY">

    <title>alfha</title>

    <!-- Scripts -->
    <script src="https://alfha.mountain-gorilla.co.jp/js/app.js?id=913d91883a025af33a88" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="//use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://alfha.mountain-gorilla.co.jp/css/app.css?id=9ece3407759df7d428ea" rel="stylesheet">
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
        .vue-modal-top,
        .vue-modal-bottom,
        .vue-modal-left,
        .vue-modal-right,
        .vue-modal-topRight,
        .vue-modal-topLeft,
        .vue-modal-bottomLeft,
        .vue-modal-bottomRight {
            display: block;
            overflow: hidden;
            position: absolute;
            background: transparent;
            z-index: 9999999;
        }

        .vue-modal-topRight,
        .vue-modal-topLeft,
        .vue-modal-bottomLeft,
        .vue-modal-bottomRight {
            width: 12px;
            height: 12px;
        }

        .vue-modal-top {
            right: 12;
            top: 0;
            width: 100%;
            height: 12px;
            cursor: n-resize;
        }

        .vue-modal-bottom {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 12px;
            cursor: s-resize;
        }

        .vue-modal-left {
            left: 0;
            top: 0;
            width: 12px;
            height: 100%;
            cursor: w-resize;
        }

        .vue-modal-right {
            right: 0;
            top: 0;
            width: 12px;
            height: 100%;
            cursor: e-resize;
        }

        .vue-modal-topRight {
            right: 0;
            top: 0;
            background: transparent;
            cursor: ne-resize;
        }

        .vue-modal-topLeft {
            left: 0;
            top: 0;
            cursor: nw-resize;
        }

        .vue-modal-bottomLeft {
            left: 0;
            bottom: 0;
            cursor: sw-resize;
        }

        .vue-modal-bottomRight {
            right: 0;
            bottom: 0;
            cursor: se-resize;
        }

        #vue-modal-triangle::after {
            display: block;
            position: absolute;
            content: '';
            background: transparent;
            left: 0;
            top: 0;
            width: 0;
            height: 0;
            border-bottom: 10px solid #ddd;
            border-left: 10px solid transparent;
        }

        #vue-modal-triangle.clicked::after {
            border-bottom: 10px solid #369be9;
        }
    </style>
    <style type="text/css">
        .vm--block-scroll {
            overflow: hidden;
            width: 100vw;
        }

        .vm--container {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            z-index: 999;
        }

        .vm--overlay {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            /* z-index: 999; */
            opacity: 1;
        }

        .vm--container.scrollable {
            height: 100%;
            min-height: 100vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .vm--modal {
            position: relative;
            overflow: hidden;
            box-sizing: border-box;

            background-color: white;
            border-radius: 3px;
            box-shadow: 0 20px 60px -2px rgba(27, 33, 58, 0.4);
        }

        .vm--container.scrollable .vm--modal {
            margin-bottom: 2px;
        }

        .vm--top-right-slot {
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }

        .vm-transition--overlay-enter-active,
        .vm-transition--overlay-leave-active {
            transition: all 50ms;
        }

        .vm-transition--overlay-enter,
        .vm-transition--overlay-leave-active {
            opacity: 0;
        }

        .vm-transition--modal-enter-active,
        .vm-transition--modal-leave-active {
            transition: all 400ms;
        }

        .vm-transition--modal-enter,
        .vm-transition--modal-leave-active {
            opacity: 0;
            transform: translateY(-20px);
        }

        .vm-transition--default-enter-active,
        .vm-transition--default-leave-active {
            transition: all 2ms;
        }

        .vm-transition--default-enter,
        .vm-transition--default-leave-active {
            opacity: 0;
        }
    </style>
    <style type="text/css">
        .vue-dialog {
            font-size: 14px;
        }

        .vue-dialog div {
            box-sizing: border-box;
        }

        .vue-dialog-content {
            flex: 1 0 auto;
            width: 100%;
            padding: 14px;
        }

        .vue-dialog-content-title {
            font-weight: 600;
            padding-bottom: 14px;
        }

        .vue-dialog-buttons {
            display: flex;
            flex: 0 1 auto;
            width: 100%;
            border-top: 1px solid #eee;
        }

        .vue-dialog-buttons-none {
            width: 100%;
            padding-bottom: 14px;
        }

        .vue-dialog-button {
            font-size: inherit;
            background: transparent;
            padding: 0;
            margin: 0;
            border: 0;
            cursor: pointer;
            box-sizing: border-box;
            line-height: 40px;
            height: 40px;
            color: inherit;
            font: inherit;
            outline: none;
        }

        .vue-dialog-button:hover {
            background: #f9f9f9;
        }

        .vue-dialog-button:active {
            background: #f3f3f3;
        }

        .vue-dialog-button:not(:first-of-type) {
            border-left: 1px solid #eee;
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
        .qr-image[data-v-4525be64],
        .qr-text[data-v-4525be64] {
            text-align: center;
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-b8efab1e] {
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
        table .nav-link[data-v-5afbd054] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-del[data-v-5afbd054] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        .delete-row[data-v-5afbd054] {
            display: none !important;
        }

        .quantity-input[data-v-5afbd054] {
            width: 7rem;
        }

        .form-control.is-invalid[data-v-5afbd054] {
            background-image: none;
            padding-right: 5px;
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /*@media print {
        @page {
            size: A4 landscape;
        }
        .card-body {
            display: none;
        }
        th {
            vertical-align: top;
        }
    }*/
        table .nav-link[data-v-52a5ab12] {
            padding-top: 0;
            padding-bottom: 0;
        }

        td[data-v-52a5ab12] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        td input[data-v-52a5ab12] {
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-52a5ab12] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-52a5ab12] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-52a5ab12] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-52a5ab12] {
            overflow: auto;
        }

        .x-scroll table[data-v-52a5ab12] {
            min-width: 1400px;
        }

        .x-scroll[data-v-52a5ab12]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-52a5ab12]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-52a5ab12]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-52a5ab12],
        .x-scroll th[data-v-52a5ab12] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        table .nav-link[data-v-6d10f93f] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-6d10f93f] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        td[data-v-6d10f93f] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-6d10f93f] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-6d10f93f] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-6d10f93f] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-6d10f93f] {
            overflow: auto;
        }

        .x-scroll table[data-v-6d10f93f] {
            min-width: 1400px;
        }

        .x-scroll[data-v-6d10f93f]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-6d10f93f]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-6d10f93f]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-6d10f93f],
        .x-scroll th[data-v-6d10f93f] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }

        .delete-row[data-v-6d10f93f] {
            display: none;
        }

        .form-control.is-invalid[data-v-6d10f93f] {
            background-image: none;
            padding-right: 5px;
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        table .nav-link[data-v-1669b462] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-1669b462] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        td[data-v-1669b462] {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.25rem;
            padding-left: 0.25rem;
        }

        .receive-cell[data-v-1669b462] {
            background-color: #e3f2fd;
        }

        .receive-total-cell[data-v-1669b462] {
            background-color: #fffde7;
        }

        .payout-cell[data-v-1669b462] {
            background-color: #ffcdd2;
        }

        .x-scroll[data-v-1669b462] {
            overflow: auto;
        }

        .x-scroll table[data-v-1669b462] {
            min-width: 1400px;
        }

        .x-scroll[data-v-1669b462]::-webkit-scrollbar {
            height: 5px;
            /* スクロールバーの高さ */
        }

        .x-scroll[data-v-1669b462]::-webkit-scrollbar-track {
            background: #F1F1F1;
            /* スクロールバーの背景色 */
        }

        .x-scroll[data-v-1669b462]::-webkit-scrollbar-thumb {
            background: #d6d6d6;
            /* スクロールバーの色 */
        }

        .x-scroll td[data-v-1669b462],
        .x-scroll th[data-v-1669b462] {
            white-space: nowrap;
            /* 文字の折返しを禁止 */
        }

        .delete-row[data-v-1669b462] {
            display: none;
        }

        .form-control.is-invalid[data-v-1669b462] {
            background-image: none;
            padding-right: 5px;
        }

        .bg-lead[data-v-1669b462] {
            background-color: #FFFFCC;
        }

        .bg-receiving[data-v-1669b462] {
            background-color: #CCFFFF;
        }

        .missing[data-v-1669b462] {
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
        .btn-menu[data-v-79c34400] {
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
        table .nav-link[data-v-1eb918fa] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-7e41beca] {
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
        table .nav-link[data-v-7cb0a0f8] {
            padding-top: 0;
            padding-bottom: 0;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-f111f6e8] {
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
        table .nav-link[data-v-7a68a947] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .bg-table-alert[data-v-7a68a947] {
            background-color: #fab4b4 !important;
        }
    </style>
    <style type="text/css">
        table .nav-link[data-v-04ec4580] {
            padding-top: 0;
            padding-bottom: 0;
        }

        .btn-add[data-v-04ec4580] {
            font-size: 0.8rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border-radius: 50%;
            line-height: 1.5rem;
            text-align: center;
        }

        .btn-copy[data-v-04ec4580] {
            font-size: 0.9rem;
            width: 1.5rem;
            height: 1.5rem;
            padding: 0;
            margin: 0;
            border: 0;
            line-height: 1.5rem;
            text-align: center;
        }

        .delete-row[data-v-04ec4580] {
            display: none;
        }

        .form-control.is-invalid[data-v-04ec4580] {
            background-color: none;
            padding-right: 5px;
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-72e2bc82] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <style type="text/css">
        .qrcode-stream-wrapper[data-v-35411cc1] {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 0
        }

        .qrcode-stream-overlay[data-v-35411cc1] {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .qrcode-stream-camera[data-v-35411cc1] {
            width: 100%;
            height: 100%;
            display: block;
            -o-object-fit: cover;
            object-fit: cover
        }

        .qrcode-stream-camera--hidden[data-v-35411cc1] {
            visibility: hidden;
            position: absolute
        }
    </style>
    <style type="text/css">
        .btn-menu[data-v-c533fa06] {
            height: 6rem;
            width: 9rem;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qrcode-reader[data-v-c533fa06] {
            width: 80%;
            height: 50%;
            margin: 0 auto;
            padding-bottom: 50px;
        }
    </style>
    <style type="text/css">
        .text-wrap[data-v-2043eb74] {
            width: 80%;
            margin: auto;
        }

        .key-text[data-v-2043eb74] {
            font-size: 1.5em;
            text-align: center;
        }

        .btn-confirm[data-v-2043eb74] {
            padding: 1em;
        }
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
                                        value="jlD5Nel5TTiUeJxefoymI2oOPxPIhh2ju0vP7vuY"></form>
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

                {{-- @extends('layouts.app') --}}

                <div data-v-793490ba="" class="container">
                    <div data-v-793490ba="" class="row justify-content-center">
                        <div data-v-793490ba="" class="col-md-8">
                            <div data-v-793490ba="" class="d-flex justify-content-start mb-3">
                                <div data-v-793490ba="" class="mr-auto">
                                    <span data-v-793490ba="" class="span-header">麦芽の編集
                                    </span>
                                </div>

                                <div data-v-793490ba="" class="align-self-center mr-2">
                                    <button data-v-793490ba="" type="button" class="btn btn-primary"
                                        style="width: 10rem;"><a href="javascript:form1.submit()">保存</a></td>
                                    </button>
                                </div>
                                <div data-v-793490ba="" class="align-self-center">
                                    <button data-v-793490ba="" type="button" class="btn btn-dark">戻る
                                    </button>
                                </div>
                            </div>

                            <form data-v-793490ba="" method="post" name="form1" action="/masters/malts/finish">
                                @csrf
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="name"
                                        class="col-sm-4 col-form-label text-md-right">名前
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="text" name="name" id="name" class="form-control"
                                            value="{{$malt->name}}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="maker"
                                        class="col-sm-4 col-form-label text-md-right">メーカー
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="text" name="maker" id="maker"
                                            class="form-control" value="{{$malt->maker}}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="ppg"
                                        class="col-sm-4 col-form-label text-md-right">PPG
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="number" name="ppg" id="ppg" class="form-control"
                                            value="{{$malt->ppg}}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="form-group row">
                                    <label data-v-793490ba="" for="ebc" class="col-sm-4 col-form-label text-md-right">色度
                                    </label>
                                    <div data-v-793490ba="" class="col-md-6">
                                        <input data-v-793490ba="" type="number" name="color" id="ebc"
                                            class="form-control" value="{{$malt->color}}">
                                    </div>
                                </div>
                                <div data-v-793490ba="" class="d-flex justify-content-center mt-3">
                                    <div data-v-793490ba="" class="text-center custom-control custom-checkbox">
                                        <input data-v-793490ba="" type="checkbox" name="form1" id="is_visibled"
                                            class="custom-control-input" value="{{$malt->is_visibled}}">
                                        <label data-v-793490ba="" for="is_visibled"
                                            class="custom-control-label align-left">表示する
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <div data-v-793490ba="" class="d-flex justify-content-start mt-5">
                                <div data-v-793490ba="" class="align-self-center mr-auto">
                                    <a href="/masters/malts/delete/{{$malt->id}}/"><button data-v-793490ba=""
                                            type="button" class="btn btn-outline-danger">この麦芽を削除
                                        </button></a>
                                </div>
                            </div>
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