@extends('admin.dashboard.index')

@section('dashboard')
<div class="container-fluid">
    <h1 style="display: none" data-value="{{$year}}" id="title">{{$year}}</h1>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-9">
          <canvas id="myChart" style="width:100%;"></canvas>
        </div>
        <div class="col-12 col-sm-12 col-md-3 d-flex justify-content-center align-items-center">
          <div style="text-align: center;" class="row ">
            <div class="col-12 col-sm-12">
              <h3>{{$year}}</h3>
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
                <th scope="col">{{__('common.Month')}}</th>
                <th scope="col">{{__('common.Income1')}}</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($months as $month)
                <tr>
                    <th scope="row">{{$month['month']}}/{{$year}}</th>
                    <td data-month="{{$month['month']}}" data-value="{{$month['income']}}">{{$receipt->money($month['income'])}}</td> 
                </tr>
                  
              @endforeach
              
            </tbody>
          </table>
      </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var listMonth = [];
    var listIncome = [];
    $("table tbody tr td").each(function(){
        var month = $(this).data('month');
        listMonth.push(month);
        var income = $(this).data('value');
        listIncome.push(income);
    });
    var element = $('#title').data('value');
    console.log(listMonth);
    var xValues = listMonth;
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