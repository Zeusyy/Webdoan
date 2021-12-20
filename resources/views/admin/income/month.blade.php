@extends('admin.dashboard.index')

@section('dashboard')
<div class="container">
    <h1 >test income</h1>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Month</th>
                <th scope="col">Income</th>
                
              </tr>
            </thead>
            <tbody>
              @for ($i = 1; $i < 13; $i++)
              <tr>
                <th scope="row">{{$i}}</th>
                
                <td>
                    @if (!empty($receipts[$i-1]->price_sum))
                        {{$receipts[0]->money($receipts[$i-1]->price_sum)}}
                    @endif
                </td>
                
              </tr>
              @endfor
            </tbody>
          </table>
      </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
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
        scales: {
          yAxes: [{ticks: {min: 0, max:16}}],
        }
      }
    });
    </script>
@endsection