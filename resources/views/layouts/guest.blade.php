<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap " rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased relative">
    <div class="absolute top-0 right-0">
        <svg viewBox="0 0 339 347" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="md:w-[339px] md:h-[347px] w-[139px] h-[147px]">
            <g clip-path="url(#clip0_247_584)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M100 47.0109C99.9942 102.234 55.8833 147 1.47059 147C0.979546 147 0.489342 146.996 9.53946e-10 146.989C0.00581843 91.7656 44.1167 47 98.5294 47C99.0205 47 99.5107 47.0036 100 47.0109Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M99.9891 47C44.7656 46.9942 5.78521e-06 2.8833 1.29206e-05 -51.5294C1.2985e-05 -52.0205 0.00365877 -52.5107 0.0109251 -53C55.2344 -52.9942 100 -8.88328 100 45.5294C100 46.0205 99.9964 46.5107 99.9891 47Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M199.989 147C144.766 146.994 100 102.883 100 48.4706C100 47.9795 100.004 47.4893 100.011 47C155.234 47.0058 200 91.1167 200 145.529C200 146.02 199.996 146.511 199.989 147Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M200 -52.9891C199.994 2.23437 155.883 47 101.471 47C100.98 47 100.489 46.9963 100 46.9891C100.006 -8.23438 144.117 -53 198.529 -53C199.02 -53 199.511 -52.9964 200 -52.9891Z"
                    fill="#3D889B" />
            </g>
            <g clip-path="url(#clip1_247_584)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M300 47.0109C299.994 102.234 255.883 147 201.471 147C200.98 147 200.489 146.996 200 146.989C200.006 91.7656 244.117 47 298.529 47C299.02 47 299.511 47.0036 300 47.0109Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M299.989 47C244.766 46.9942 200 2.8833 200 -51.5294C200 -52.0205 200.004 -52.5107 200.011 -53C255.234 -52.9942 300 -8.88328 300 45.5294C300 46.0205 299.996 46.5107 299.989 47Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M399.989 147C344.766 146.994 300 102.883 300 48.4706C300 47.9795 300.004 47.4893 300.011 47C355.234 47.0058 400 91.1167 400 145.529C400 146.02 399.996 146.511 399.989 147Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M400 -52.9891C399.994 2.23437 355.883 47 301.471 47C300.98 47 300.489 46.9963 300 46.9891C300.006 -8.23438 344.117 -53 398.529 -53C399.02 -53 399.511 -52.9964 400 -52.9891Z"
                    fill="#3D889B" />
            </g>
            <g clip-path="url(#clip2_247_584)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M300 247.011C299.994 302.234 255.883 347 201.471 347C200.98 347 200.489 346.996 200 346.989C200.006 291.766 244.117 247 298.529 247C299.02 247 299.511 247.004 300 247.011Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M299.989 247C244.766 246.994 200 202.883 200 148.471C200 147.98 200.004 147.489 200.011 147C255.234 147.006 300 191.117 300 245.529C300 246.02 299.996 246.511 299.989 247Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M399.989 347C344.766 346.994 300 302.883 300 248.471C300 247.98 300.004 247.489 300.011 247C355.234 247.006 400 291.117 400 345.529C400 346.02 399.996 346.511 399.989 347Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M400 147.011C399.994 202.234 355.883 247 301.471 247C300.98 247 300.489 246.996 300 246.989C300.006 191.766 344.117 147 398.529 147C399.02 147 399.511 147.004 400 147.011Z"
                    fill="#3D889B" />
            </g>
            <defs>
                <clipPath id="clip0_247_584">
                    <rect width="200" height="200" fill="white" transform="translate(200 147) rotate(-180)" />
                </clipPath>
                <clipPath id="clip1_247_584">
                    <rect width="200" height="200" fill="white" transform="translate(400 147) rotate(-180)" />
                </clipPath>
                <clipPath id="clip2_247_584">
                    <rect width="200" height="200" fill="white" transform="translate(400 347) rotate(-180)" />
                </clipPath>
            </defs>
        </svg>

    </div>
    <div class="absolute bottom-0 left-0">
        <svg viewBox="0 0 347 354" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="md:w-[347px] md:h-[354px] w-[147px] h-[154px]">
            <g clip-path="url(#clip0_247_583)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M247 299.989C247.006 244.766 291.117 200 345.529 200C346.02 200 346.511 200.004 347 200.011C346.994 255.234 302.883 300 248.471 300C247.98 300 247.489 299.996 247 299.989Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M247.011 300C302.234 300.006 347 344.117 347 398.529C347 399.02 346.996 399.511 346.989 400C291.766 399.994 247 355.883 247 301.471C247 300.98 247.004 300.489 247.011 300Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M147.011 200C202.234 200.006 247 244.117 247 298.529C247 299.02 246.996 299.511 246.989 300C191.766 299.994 147 255.883 147 201.471C147 200.98 147.004 200.489 147.011 200Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M147 399.989C147.006 344.766 191.117 300 245.529 300C246.02 300 246.511 300.004 247 300.011C246.994 355.234 202.883 400 148.471 400C147.98 400 147.489 399.996 147 399.989Z"
                    fill="#3D889B" />
            </g>
            <g clip-path="url(#clip1_247_583)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M47 299.989C47.0058 244.766 91.1167 200 145.529 200C146.02 200 146.511 200.004 147 200.011C146.994 255.234 102.883 300 48.4706 300C47.9795 300 47.4893 299.996 47 299.989Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M47.0109 300C102.234 300.006 147 344.117 147 398.529C147 399.02 146.996 399.511 146.989 400C91.7656 399.994 47 355.883 47 301.471C47 300.98 47.0036 300.489 47.0109 300Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M-52.9891 200C2.23437 200.006 47 244.117 47 298.529C47 299.02 46.9963 299.511 46.9891 300C-8.23438 299.994 -53 255.883 -53 201.471C-53 200.98 -52.9964 200.489 -52.9891 200Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M-53 399.989C-52.9942 344.766 -8.8833 300 45.5294 300C46.0205 300 46.5107 300.004 47 300.011C46.9942 355.234 2.88329 400 -51.5294 400C-52.0205 400 -52.5107 399.996 -53 399.989Z"
                    fill="#3D889B" />
            </g>
            <g clip-path="url(#clip2_247_583)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M47 99.9891C47.0058 44.7656 91.1167 0 145.529 0C146.02 0 146.511 0.00364572 147 0.0109119C146.994 55.2344 102.883 100 48.4706 100C47.9795 100 47.4893 99.9964 47 99.9891Z"
                    fill="#0F4E57" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M47.0109 100C102.234 100.006 147 144.117 147 198.529C147 199.02 146.996 199.511 146.989 200C91.7656 199.994 47 155.883 47 101.471C47 100.98 47.0036 100.489 47.0109 100Z"
                    fill="#78ABA2" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M-52.9891 -4.37066e-06C2.23437 0.00580828 47 44.1167 47 98.5294C47 99.0205 46.9963 99.5107 46.9891 100C-8.23438 99.9942 -53 55.8833 -53 1.47058C-53 0.979539 -52.9964 0.489336 -52.9891 -4.37066e-06Z"
                    fill="#28808C" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M-53 199.989C-52.9942 144.766 -8.8833 100 45.5294 100C46.0205 100 46.5107 100.004 47 100.011C46.9942 155.234 2.88329 200 -51.5294 200C-52.0205 200 -52.5107 199.996 -53 199.989Z"
                    fill="#3D889B" />
            </g>
            <defs>
                <clipPath id="clip0_247_583">
                    <rect width="200" height="200" fill="white" transform="translate(147 200)" />
                </clipPath>
                <clipPath id="clip1_247_583">
                    <rect width="200" height="200" fill="white" transform="translate(-53 200)" />
                </clipPath>
                <clipPath id="clip2_247_583">
                    <rect width="200" height="200" fill="white" transform="translate(-53)" />
                </clipPath>
            </defs>
        </svg>

    </div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#EBFFF3]">
        {{-- <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div> --}}


        <div class="w-full max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg z-50">
            <div class="flex justify-center">
                <a href="/">
                    <x-application-logo class="w-36 h-36 fill-current text-gray-500" />


                </a>
            </div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
