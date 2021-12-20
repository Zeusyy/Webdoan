@extends('layouts.admin')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="{{ asset('css/home.css') }}"  rel="stylesheet">
<link href="{{ asset('css/tour.css') }}"  rel="stylesheet">
<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">
    
</head>
<body>
    <div class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="max-height: 500px" class="d-block w-100" src="https://res.cloudinary.com/dloeyqk30/image/upload/v1634910928/FnGO/home-banner/tokyo-banner_s4ydsk.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img style="max-height: 500px" class="d-block w-100" src="https://res.cloudinary.com/dloeyqk30/image/upload/v1634911384/FnGO/home-banner/tokyo-banner1_ofhswb.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img style="max-height: 500px" class="d-block w-100" src="https://res.cloudinary.com/dloeyqk30/image/upload/v1634910928/FnGO/home-banner/tokyo-banner_s4ydsk.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <div>
      @include('layouts.onlySearchBar')
    </div>
    <div style="max-width: 1300px" class="container">
        <div class="title-top rounded">
          <i class="bi bi-camera-fill"></i>
          {{__('home.top tour')}}
        </div>
        <div class="">
          <div class="row ">
            @foreach ($topTour as $trip)
              <div class="card col-6 col-sm-4 col-md-3">
                  <div style="padding: 10px" class="card-img-top">
                      <a href="{{route('tour.show',$trip)}}">
                          <img loading="lazy" alt="tour Image" class="img-fluid rounded pictrure" src="{{$trip->avatar}}">
                      </a>
                  </div>
                  <div class="card-body tour-info">
                      <div class="row row-name">
                          <a class="link" href="{{route('tour.show',$trip)}}">
                              <div  class="col-md-12 tour-name">{{$trip->name}}</div>
                          </a>
                      </div>
      
                      {{-- <div class="row">
                          <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                              
                          </div>
                          <div id="money" class="float-right col-6 col-sm-6 col-md-12 col-lg-6">
                              
                          </div>
                      </div> --}}
                  </div>

                  <div class="card-footer">
                    <div id="money" class="money-small-screen d-flex justify-content-end" style="width: 100%">
                      <span>{{$trip->money($trip->price)}}</span>
                    </div>
                  </div>
                  
              </div>
            @endforeach
        </div>
      </div>
      <div class="more-btn-wrapper d-flex justify-content-center">
        <a class="btn" href="{{route('tour.index')}}">
          {{__('home.More')}}
          <i style="margin-left: 5px" class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
    <div style="max-width: 1300px"  class="container">

      <div class="title-top rounded">
        <i class="bi bi-house-door-fill"></i> 
        {{__('home.top hotel')}}
      </div>

      <div class="">
        <div class="row">
          @foreach ($topHotel  as $hotel)
          <div class="card col-6 col-sm-4 col-md-3">
              <div style="padding: 10px" class="card-img-top">
                  <a  href="{{route('hotel.show',$hotel)}}">
                      <img loading="lazy" alt="hotel Image" class="img_fluid rounded pictrure"
                          src="{{$hotel->avatar}}">
                  </a>
              </div>
              <div class="card-body hotel-info">
                  <div class="row row-name">
                      <a class="link" href="{{route('hotel.show',$hotel)}}">
                          <div class="col-md-12 tour-name hotel-name-index">{{$hotel->name}}</div>
                      </a>
                  </div>
              </div>

              <div class="card-footer">
                <div id="money" class="money-small-screen d-flex justify-content-end" style="width: 100%">
                  <span>{{$hotel->money($hotel->price)}}</span>
                </div>
              </div>

          </div>
          @endforeach
        </div>
      </div>

      <div class="more-btn-wrapper d-flex justify-content-center">
        <a class="btn" href="{{route('hotel.index')}}">
          {{__('home.More')}}
          <i style="margin-left: 5px" class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>

    <div style="max-width: 1300px"  class="container">
      <div class="title-top rounded">
        <i class="bi bi-newspaper"></i>
        {{__('home.top article')}}
      </div>
      <div class="">
        <div class="row">
          @foreach ($topArticle as $article)
            <div class="card col-6 col-sm-4 col-md-3">
              <div style="padding: 10px" class="card-img-top">
                <a href="{{route('article.show',$article)}}">
                    <img loading="lazy" alt="article Image" class="img_fluid rounded pictrure"
                        src="{{$article->thumbnail}}">
                </a>
              </div>
              <div class="card-body">
                <a  class="link" href="{{route('article.show',$article)}}">
                  <div class="card-title article-title">{{$article->title}}</div>
                </a>
                <p class="card-text">{{$article->abstract}}</p>
                
              </div>

            </div>
          @endforeach
        </div>
      </div>
      <div class="more-btn-wrapper d-flex justify-content-center">
        <a class="btn" href="{{route('article.index')}}">
          {{__('home.More')}}
          <i style="margin-left: 5px" class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
</body>
@endsection
