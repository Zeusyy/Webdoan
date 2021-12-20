@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/dashboard-content.css') }}" rel="stylesheet">
{{-- char --}}


<div class="container-fluid">
    <h1 class="m-0">Dashboard</h1>
</div>
<div style="margin-left: 0px" class="content">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-user">
                <div class="inner">
                    <h3>{{$countUser}}</h3>
                    <p>{{__('dashboard.Users')}}</p>
                </div>
                <div class="icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <a href="{{route('users.index')}}" class="small-box-footer">
                    More info
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-newUser">
                <div class="inner">
                    <h3>{{$countNewUser}}</h3>
                    <p>{{__('dashboard.User Registrations')}}</p>
                </div>
                <div class="icon">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-order">
                <div class="inner">
                    <h3>{{$countWaitingOrders}}</h3>
                    <p>{{__('dashboard.New Orders')}}</p>
                </div>
                <div class="icon">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$countPaidOrdersToday}}</h3>
                    <p>{{__('dashboard.Success orders')}}</p>
                </div>
                <div class="icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info
                    <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="bi bi-pie-chart-fill"></i>
                        {{__('dashboard.Accounts')}}: {{$countAllUser}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div >
                            <canvas id="userChart" style=""></canvas>
                            <input type="hidden" id="countUser" value="{{$countUser}}">
                            <input type="hidden" id="countEmployee" value="{{$countEmployee}}">
                            <input type="hidden" id="countAdmin" value="{{$countAdmin}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="bi bi-bar-chart-steps"></i>
                        {{__('dashboard.Top Hotels')}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="d-flex align-items-center barChart" style="min-height: 300px">
                            <canvas id="hotelChart" style=""></canvas>
                        </div>
                    </div>
                    @foreach ($topshotel as $hotel)
                        <input class="hotel" type="hidden" data-name="{{$hotel->name}}" value="{{$hotel->purchases_number}}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="bi bi-bar-chart-steps"></i>
                        {{__('dashboard.Top tours')}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="d-flex align-items-center barChart" style="min-height: 300px">
                            <canvas id="tourChart" style=""></canvas>
                        </div>
                    </div>
                    @foreach ($topstour as $tour)
                        <input class="tour" type="hidden" data-name="{{$tour->product_code}}" value="{{$tour->purchases_number}}">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="bi bi-bar-chart-steps"></i>
                        {{__('dashboard.Top Articles')}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="d-flex align-items-center barChart" style="min-height: 300px">
                            <canvas id="articleChart" style=""></canvas>
                        </div>
                    </div>
                    @foreach ($topArticle as $article)
                        <input class="article" type="hidden" data-name="{{$article->title}}" value="{{$article->comment_number}}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


{{-- char --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/dashboard-chart.js') }}" defer></script>


@endsection