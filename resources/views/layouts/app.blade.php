<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'> -->

    <!-- style sheet -->
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{asset('css/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet' media='print'>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery-2.1.1.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/plugins/fullcalendar/moment.min.js')}}"></script>
    <script src="{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>    
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datetimepicker.js')}}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Booking appointment
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li>
                        <a href="#" role="button" >
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li >
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest

            </ul>

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
