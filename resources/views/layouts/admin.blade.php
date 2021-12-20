<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FnGO</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div  class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div id="menu">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('hotel.index')}}">{{__('welcome.Hotels')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('tour.index')}}">{{__('welcome.Tours')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">{{__('welcome.Articles')}}</a>
                  </li>
                </ul>
            </div>
              
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                
                <ul class="navbar-nav ml-auto">
                    @foreach (config('app.available_locales') as $locale)
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('language',$locale)}}"
                                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('welcome.Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('welcome.Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i style="font-size: 25px" class="bi bi-person-circle"></i> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role->name == 'admin')
                                    <a class="dropdown-item" href="{{url('/dashboard')}}">
                                        {{ __('common.Admin dashboard') }}
                                    </a>
                                @endif

                                @if (Auth::user()->role->name == 'employee')
                                    <a class="dropdown-item" href="{{url('/receiptWaiting')}}">
                                        {{ __('common.Manage') }}
                                    </a>
                                @endif
                                

                                <a class="dropdown-item" href="{{route('users.edit', Auth::user())}} ">
                                    {{ __('common.Account settings') }}
                                </a>

                                @if (Auth::user()->role->name != 'admin')
                                    <a class="dropdown-item" href="{{url('/receipt')}}">
                                        {{ __('common.Receipt') }}
                                    </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('common.Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                            <li class="nav-item cartIcon">
                                <form action="{{route('cart.index')}}" method="GET">
                                    <button type="submit" class="btn">
                                        <i style="color:white;font-size: 25px" class="bi bi-cart"></i>
                                        @if (Session::get('Cart') != null)
                                            <span class='badge badge-warning' id='CartCount'> {{Session::get('Cart')->quantity}} </span>
                                        @else
                                            <span class='badge badge-warning' id='CartCount'> 0 </span>
                                        @endif
                                        
                                    </button>
                                </form>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    <main style="min-height: 800px">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
<script src="{{ asset('js/script.js') }}" defer></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

{{-- alertify --}}

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

{{-- ckeditor --}}
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    // CKEDITOR.replace('ckeditor');
</script>
</html>