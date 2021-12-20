<div class="row">
    @foreach ($hotels  as $hotel)
    <div class="card col-md-4">
        <div style="padding: 10px" class="card-img-top">
            <a href="{{route('hotel.show',$hotel)}}">
                <img loading="lazy" alt="hotek Image" class="img_fluid rounded pictrure"
                    src="{{$hotel->avatar}}">
            </a>
        </div>
        <div class="card-body hotel-info">
            <div class="row">
                <a href="{{route('hotel.show',$hotel)}}">
                    <div class="col-md-12 hotel-name-index">{{$hotel->name}}</div>
                </a>
            </div>

            {{-- <div class="row" >
                <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                    <i class="bi bi-geo-alt-fill"></i>
                    {{$hotel->CityProvince->name}}
                </div>
                <div id="money" class="float-right col-6 col-sm-6 col-md-12 col-lg-6">
                    <div class="float-right" style="width: 130px">{{$hotel->money($hotel->price)}}</div>
                </div>
            </div> --}}
            
        </div>
        <div class="card-footer">
            <span class="">
                <i class="bi bi-geo-alt-fill"></i>
                {{$hotel->CityProvince->name}}
            </span>
            <div id="money" class="float-right" style="width: 130px">{{$hotel->money($hotel->price)}}</div>
        </div>
    </div>
    @endforeach
</div>