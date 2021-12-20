<div class="row">
    @foreach ($trips as $trip)
    <div class="card col-6 col-sm-4 col-md-3">
        <div style="padding: 10px" class="card-img-top">
            <a href="{{route('tour.show',$trip)}}">
                <img loading="lazy" alt="tour Image" class="img-fluid rounded pictrure" src="{{$trip->avatar}}">
            </a>

        </div>
        <div class="card-body tour-info">
            <div class="row">
                <a href="{{route('tour.show',$trip)}}">
                    <div class="col-md-12 tour-name"">{{$trip->name}}</div>
                </a>
            </div>

            <div class="row">
                <div class="col">
                    <i class="bi bi-geo-alt-fill"></i>{{$trip->CityProvince->name}}
                </div>
                
            </div>
        </div>
        <div class="card-footer">
            <div id="money" class="float-right" style="width: 130px">{{$trip->money($trip->price)}}</div>
        </div>
    </div>
    @endforeach
</div>