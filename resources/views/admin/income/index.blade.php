@extends('admin.dashboard.index')

@section('dashboard')

<div class="container">
    
    <h1>test income</h1>
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
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "World Wine Production 2018"
        }
      }
    });
    </script>
@endsection