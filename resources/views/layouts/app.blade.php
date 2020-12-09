<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kerjasmart</title>
        <!-- -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{asset('https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css')}}" rel="stylesheet" />

       
    </head>
    <body id="page-top">
    <div id="app">
        <div id="wrapper">
            {{-- SideBar --}}
            @include('portal.particals.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    {{--Header  --}}
                    @include('portal.particals.baseheader')
                    <div class="container-fluid">
                        {{-- content --}}
                        @yield('content')
                        
                    </div>
                </div>
               {{-- Footer --}}
               <base-footer></base-footer>
            </div>
        </div>
        
    </div>
    </body>
<script src="{{mix('/js/app.js')}}"></script>
  <!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</html>
