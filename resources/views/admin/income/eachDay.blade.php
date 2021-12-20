@extends('admin.dashboard.index')

@section('dashboard')
<div class="container-fluid">
    <h1 style="display: none" data-value="{{$month}}/{{$year}}" id="title">{{$month}}/{{$year}}</h1>
    {{-- <h1>Total: {{$total}}</h1> --}}
    <div class="row">
      <div class="col-12 col-sm-12 col-md-9">
        <canvas id="myChart" style="width:100%;"></canvas>
      </div>
      <div class="col-12 col-sm-12 col-md-3 d-flex justify-content-center align-items-center">
        <div style="text-align: center;" class="row ">
          <div class="col-12 col-sm-12">
            <h3>{{$month}}/{{$year}}</h3>
          </div>
          <div class="col-12 col-sm-12">
            <h1>{{$receipt->money($total)}}</h1>
          </div>
        </div>
      </div>

    </div>
    

    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">{{__('common.Day')}}</th>
                <th scope="col">{{__('common.Income1')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($days as $day)
                <tr>
                    <th scope="row">{{$day['day']}}/{{$month}}/{{$year}}</th>
                    <td data-day="{{$day['day']}}" data-value="{{$day['income']}}">{{$receipt->money($day['income'])}}</td> 
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var listDay = [];
    var listIncome = [];
    $("table tbody tr td").each(function(){
        var day = $(this).data('day');
        listDay.push(day);
        var income = $(this).data('value');
        listIncome.push(income);
    });
    var element = $('#title').data('value');
    // console.log(element);
    var xValues = listDay;
    var yValues = listIncome;
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
            display: true,
            text: element,
        }
      }
    });
    </script>
@endsection