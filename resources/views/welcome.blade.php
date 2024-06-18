<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <style>
    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, sans-serif;
      font-feature-settings: normal
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::-webkit-backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .relative {
      position: relative
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-16 {
      margin-top: 4rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .mr-1 {
      margin-right: 0.25rem
    }

    .flex {
      display: flex
    }

    .inline-flex {
      display: inline-flex
    }

    .grid {
      display: grid
    }

    .h-16 {
      height: 4rem
    }

    .h-7 {
      height: 1.75rem
    }

    .h-6 {
      height: 1.5rem
    }

    .h-5 {
      height: 1.25rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-auto {
      width: auto
    }

    .w-16 {
      width: 4rem
    }

    .w-7 {
      width: 1.75rem
    }

    .w-6 {
      width: 1.5rem
    }

    .w-5 {
      width: 1.25rem
    }

    .max-w-7xl {
      max-width: 80rem
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .scale-100 {
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .gap-6 {
      gap: 1.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .self-center {
      align-self: center
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-full {
      border-radius: 9999px
    }

    .bg-gray-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-red-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(254 242 242 / var(--tw-bg-opacity))
    }

    .bg-dots-darker {
      background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
    }

    .from-gray-700\/50 {
      --tw-gradient-from: rgb(55 65 81 / 0.5);
      --tw-gradient-to: rgb(55 65 81 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-transparent {
      --tw-gradient-to: rgb(0 0 0 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
    }

    .bg-center {
      background-position: center
    }

    .stroke-red-500 {
      stroke: #4D3589
    }

    .stroke-gray-400 {
      stroke: #9ca3af
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .text-center {
      text-align: center
    }

    .text-right {
      text-align: right
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .font-semibold {
      font-weight: 600
    }

    .leading-relaxed {
      line-height: 1.625
    }

    .text-gray-600 {
      --tw-text-opacity: 1;
      color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-900 {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .text-gray-500 {
      --tw-text-opacity: 1;
      color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-2xl {
      --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
      --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-gray-500\/20 {
      --tw-shadow-color: rgb(107 114 128 / 0.2);
      --tw-shadow: var(--tw-shadow-colored)
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .selection\:bg-red-500 *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-red-500::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-gray-900:hover {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .hover\:text-gray-700:hover {
      --tw-text-opacity: 1;
      color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .focus\:rounded-sm:focus {
      border-radius: 0.125rem
    }

    .focus\:outline:focus {
      outline-style: solid
    }

    .focus\:outline-2:focus {
      outline-width: 2px
    }

    .focus\:outline-red-500:focus {
      outline-color: #4D3589
    }

    .group:hover .group-hover\:stroke-gray-600 {
      stroke: #4b5563
    }

    .z-10 {
      z-index: 10
    }

    @media (prefers-reduced-motion: no-preference) {
      .motion-safe\:hover\:scale-\[1\.01\]:hover {
        --tw-scale-x: 1.01;
        --tw-scale-y: 1.01;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
      }
    }

    @media (prefers-color-scheme: light) {
      .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
      }

      .dark\:bg-gray-800\/50 {
        background-color: rgb(31 41 55 / 0.5)
      }

      .dark\:bg-red-800\/20 {
        background-color: rgb(153 27 27 / 0.2)
      }

      .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
      }

      .dark\:bg-gradient-to-bl {
        background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
      }

      .dark\:stroke-gray-600 {
        stroke: #4b5563
      }

      .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .dark\:ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
      }

      .dark\:ring-inset {
        --tw-ring-inset: inset
      }

      .dark\:ring-white\/5 {
        --tw-ring-color: rgb(255 255 255 / 0.05)
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .group:hover .dark\:group-hover\:stroke-gray-400 {
        stroke: #9ca3af
      }
    }

    @media (min-width: 640px) {
      .sm\:fixed {
        position: fixed
      }

      .sm\:top-0 {
        top: 0px
      }

      .sm\:right-0 {
        right: 0px
      }

      .sm\:ml-0 {
        margin-left: 0px
      }

      .sm\:flex {
        display: flex
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-center {
        justify-content: center
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width: 768px) {
      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width: 1024px) {
      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-8 {
        padding: 2rem
      }
    }
  </style>
</head>

<body class="antialiased">
  <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
          <a href="{{ url('/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
          <a href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
            in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
        <svg width="270" height="90" viewBox="0 0 1607 553" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M129.521 276.155H270.469V140.948H114.283L0.000244141 276.155V415.225H129.521V276.155Z"
            fill="#4D3589" />
          <path d="M278.085 133.329V0.000183105H548.554V415.225H411.415V133.329H278.085Z" fill="#4D3589" />
          <path d="M403.796 422.844H137.137V552.363H403.796V422.844Z" fill="#4D3589" />
          <path
            d="M852.2 419.8C830.6 419.8 810.467 416.333 791.8 409.4C773.4 402.2 757.4 392.067 743.8 379C730.2 365.933 719.533 350.6 711.8 333C704.333 315.4 700.6 296.067 700.6 275C700.6 253.933 704.333 234.6 711.8 217C719.533 199.4 730.2 184.067 743.8 171C757.667 157.933 773.8 147.933 792.2 141C810.6 133.8 830.733 130.2 852.6 130.2C876.867 130.2 898.733 134.467 918.2 143C937.933 151.267 954.467 163.533 967.8 179.8L926.2 218.2C916.6 207.267 905.933 199.133 894.2 193.8C882.467 188.2 869.667 185.4 855.8 185.4C842.733 185.4 830.733 187.533 819.8 191.8C808.867 196.067 799.4 202.2 791.4 210.2C783.4 218.2 777.133 227.667 772.6 238.6C768.333 249.533 766.2 261.667 766.2 275C766.2 288.333 768.333 300.467 772.6 311.4C777.133 322.333 783.4 331.8 791.4 339.8C799.4 347.8 808.867 353.933 819.8 358.2C830.733 362.467 842.733 364.6 855.8 364.6C869.667 364.6 882.467 361.933 894.2 356.6C905.933 351 916.6 342.6 926.2 331.4L967.8 369.8C954.467 386.067 937.933 398.467 918.2 407C898.733 415.533 876.733 419.8 852.2 419.8ZM1137.99 415V373L1133.99 363.8V288.6C1133.99 275.267 1129.85 264.867 1121.59 257.4C1113.59 249.933 1101.19 246.2 1084.39 246.2C1072.92 246.2 1061.59 248.067 1050.39 251.8C1039.45 255.267 1030.12 260.067 1022.39 266.2L999.988 222.6C1011.72 214.333 1025.85 207.933 1042.39 203.4C1058.92 198.867 1075.72 196.6 1092.79 196.6C1125.59 196.6 1151.05 204.333 1169.19 219.8C1187.32 235.267 1196.39 259.4 1196.39 292.2V415H1137.99ZM1072.39 418.2C1055.59 418.2 1041.19 415.4 1029.19 409.8C1017.19 403.933 1007.99 396.067 1001.59 386.2C995.188 376.333 991.988 365.267 991.988 353C991.988 340.2 995.054 329 1001.19 319.4C1007.59 309.8 1017.59 302.333 1031.19 297C1044.79 291.4 1062.52 288.6 1084.39 288.6H1141.59V325H1091.19C1076.52 325 1066.39 327.4 1060.79 332.2C1055.45 337 1052.79 343 1052.79 350.2C1052.79 358.2 1055.85 364.6 1061.99 369.4C1068.39 373.933 1077.05 376.2 1087.99 376.2C1098.39 376.2 1107.72 373.8 1115.99 369C1124.25 363.933 1130.25 356.6 1133.99 347L1143.59 375.8C1139.05 389.667 1130.79 400.2 1118.79 407.4C1106.79 414.6 1091.32 418.2 1072.39 418.2ZM1252.86 415V118.2H1315.26V415H1252.86ZM1475.58 418.2C1452.64 418.2 1432.24 413.4 1414.38 403.8C1396.78 394.2 1382.78 381.133 1372.38 364.6C1362.24 347.8 1357.18 328.733 1357.18 307.4C1357.18 285.8 1362.24 266.733 1372.38 250.2C1382.78 233.4 1396.78 220.333 1414.38 211C1432.24 201.4 1452.64 196.6 1475.58 196.6C1498.24 196.6 1518.51 201.4 1536.38 211C1554.24 220.333 1568.24 233.267 1578.38 249.8C1588.51 266.333 1593.58 285.533 1593.58 307.4C1593.58 328.733 1588.51 347.8 1578.38 364.6C1568.24 381.133 1554.24 394.2 1536.38 403.8C1518.51 413.4 1498.24 418.2 1475.58 418.2ZM1475.58 367C1485.98 367 1495.31 364.6 1503.58 359.8C1511.84 355 1518.38 348.2 1523.18 339.4C1527.98 330.333 1530.38 319.667 1530.38 307.4C1530.38 294.867 1527.98 284.2 1523.18 275.4C1518.38 266.6 1511.84 259.8 1503.58 255C1495.31 250.2 1485.98 247.8 1475.58 247.8C1465.18 247.8 1455.84 250.2 1447.58 255C1439.31 259.8 1432.64 266.6 1427.58 275.4C1422.78 284.2 1420.38 294.867 1420.38 307.4C1420.38 319.667 1422.78 330.333 1427.58 339.4C1432.64 348.2 1439.31 355 1447.58 359.8C1455.84 364.6 1465.18 367 1475.58 367Z"
            fill="#1E1E1E" />
        </svg>
      </div>

      <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
          <a href="https://laravel.com/docs"
            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-7 h-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

              <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer
                or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <a href="https://laracasts.com"
            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-7 h-7 stroke-red-500">
                  <path stroke-linecap="round"
                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

              <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them
                out, see for yourself, and massively level up your development skills in the process.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <a href="https://laravel-news.com"
            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-7 h-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

              <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laravel News is a community driven portal and newsletter aggregating all of the latest and most
                important news in the Laravel ecosystem, including new package releases and tutorials.
              </p>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
          </a>

          <div
            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
              <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  class="w-7 h-7 stroke-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                </svg>
              </div>

              <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

              <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laravel's robust library of first-party tools and libraries, such as <a
                  href="https://forge.laravel.com"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                <a href="https://vapor.laravel.com"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                <a href="https://nova.laravel.com"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                and <a href="https://envoyer.io"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                help you take your projects to the next level. Pair them with powerful open source libraries like <a
                  href="https://laravel.com/docs/billing"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                <a href="https://laravel.com/docs/dusk"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                <a href="https://laravel.com/docs/broadcasting"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                <a href="https://laravel.com/docs/horizon"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                <a href="https://laravel.com/docs/sanctum"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                <a href="https://laravel.com/docs/telescope"
                  class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                and more.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm sm:text-left">
          &nbsp;
        </div>

        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
          Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
      </div>
    </div>
  </div>
</body>

</html>
