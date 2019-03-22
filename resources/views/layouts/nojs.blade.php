<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BlogTheory</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('page.css')
</head>

<body class="bg-brand-lightest h-screen">
    <div id="app">
        <nav class="bg-white h-12 mb-2 px-6 md:px-0">
            <div class="container mx-auto h-full">
                <div class="flex items-center justify-center py-4">
                    <div class="flex justify-start items-center px-4 lg:mx-0">
                        <a href="/" class="no-underline text-white font-black text-2xl flex items-center">
                            <span class="text-base rounded-full py-4 px-4 bg-purple mr-4">BT</span>
                            <span class="text-indigo">BlogTheory </span>
                            <sup class="text-grey text-xs ml-2 font-hairline">Beta </sup>
                        </a>
                        <!-- <div class="hidden md:block ml-4 text-grey font-serif"> Create your own sunshine.</div> -->
                    </div>
                    <div class="flex-1 text-right">

                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>



    @yield('page.script')
</body>

</html> 