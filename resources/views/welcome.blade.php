<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           :root{
            --main-color:#F05123;
           }
           *{
            margin: 0;
            padding 0;
            box-sizing: border-box;
           }
           a {
                text-decoration: none;
           }

           li{
            list-style: none;
           }
           .container{
            max-width: 1024px;
            margin: auto;

           }
           .row{
            display: flex;
            flex-wrap: wrap;
           }

           header{
            background-image: url("https://res.cloudinary.com/dloeyqk30/image/upload/v1634738398/FnGO/test/anh1_i5jxq5.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100vw;
            height: 100vh;
            position: relative;
           }

           .bg-image{
                position: absolute;
                content: "";
                width: 100%;
                height: 100%;
                background-color: black;
                opacity:  0.6;
           } 
           .top{
            position: absolute;
            width: 100%;
            z-index: 1;
           }

           .header-top{
            justify-content: space-between;
            padding: 20px 0;
            align-items: center;
            }

            .header-top p{
            font-size: 25px;
            letter-spacing: 2px;
            color: var(--main-color);
            font-weight: bold;
           }

           .header-top ul{
            display: flex;
           }
           .header-top ul li{
            margin-left: 40px;
            position: relative;

           }

           .header-top ul li::after{
            position: absolute;
            content: "";
            display: block;
            bottom: -2px;
            height: 4px;
            width: 0%;
            background-color: var(--main-color);
            border-radius: 5px;
            transition: all 0.5s ease;
           }

            .header-top ul li:hover::after{
                width: 100%;
            }
           .header-top ul li a{
            color: white;
             font-weight: bold;
           }

           .header-text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            max-width: 700px;
            min-width: 500px;
            text-align:center;
           }
           .header-text h1{
               font-family: sans-serif;
               color: white;
               font-weight: bold;
               margin-bottom: 20px;
               font-size: 32px; 
           }
           .header-text p{
            font-family: sans-serif;
            color: white;
           }
           .header-text button{
            width: 150px;height: 40px;
            margin-top: 20px;
            background-color: white;
            border: 2px solid var(--main-color);
            cursor: pointer;
            transition: all 0.5s ease;
            font-size: 20px;
           }

           .header-text button:hover{
            background-color: var(--main-color);
           }

           
        </style>
    </head>
    <body>
       <header>
         @if (Route::has('login'))
          {{-- @foreach (config('app.available_locales') as $locale)
           <a 
                       href="{{route(Route::currentRouteName(), $locale)}}"
                        @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                         @endforeach --}}
           <div class="top">
               <div class="container">
                   <div class="header-top row">
                       <p>FnGO Website Du Lịch</p>
                       <ul>
                           <li><a  href="{{ route('language', 'vn')}}">VN</a></li>
                           <li><a  href="{{ route('language', 'en')}}">EN</a></li>
                    @auth
                        <li><a href="{{ route('home') }}">{{__('common.Home')}}</a></li>
                    @else
                        <li><a href="{{ route('login' ) }}">{{__('welcome.Login')}}</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{__('welcome.Register')}}
                            </a></li>
                        @endif
                    @endauth
                       </ul>
                   </div>
               </div>
           </div>
           <div class="bg-image">
               
           </div>
           <div class="header-text">
               <h1>Web Dịch Vụ Du Lịch Uy Tín - Chất Lượng</h1>
               <p>Tham gia ngay</p>
               <button>
                   <a href='{{route('home')}}'>{{__('welcome.Home')}}</a>
               </button>
               <button><a href='{{route('hotel.index')}}'>{{__('welcome.Hotels')}}</a>
               </button>
               <button><a href='{{route('tour.index')}}'>{{__('welcome.Tours')}}</a></button>
               <button><a href='{{route('article.index')}}'>{{__('welcome.Articles')}}</a>
               </button>
           </div>
           @endif
       </header>
    </body>
</html>
