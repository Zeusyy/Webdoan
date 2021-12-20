@extends('admin.dashboard.index')

@section('dashboard')

<div class="container">
    
    <h1 id="date" data-date="{{$day}}/{{$month}}/{{$year}}">{{$day}}/{{$month}}/{{$year}}</h1>
    <canvas id="bar-chart" style="width:100%;"></canvas>

    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Receipt's ID</th>
                <th scope="col">{{__('common.Income1')}}</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($receipts as $receipt)
                    <tr>
                        <th scope="row">#{{$receipt->id}}</th>
                        <td data-id="{{$receipt->id}}" data-value="{{$receipt->price_sum}}">{{$receipt->money($receipt->price_sum)}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var listId = [];
    var listIncome = [];
    $("table tbody tr td").each(function(){
        var id = $(this).data('id');
        listId.push('#'+id);
        var income = $(this).data('value');
        listIncome.push(income);
    });
    console.log(listId);
    

    function random_rgba() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',0.2)';
    }
    function random_rgb() {
    var o = Math.round, r = Math.random, s = 255;
    return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',1)';
    }
    var date = $('#date').data('date');
    console.log(date);
    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: listId,
      datasets: [
        {
          label: "Income (VND)",
          data: listIncome,
          backgroundColor: random_rgba(),
            borderColor: random_rgb(),
                borderWidth: 1
        }
      ]
    },
    options: {
      legend: { display: false },
      scales:{
        yAxes: [{
            ticks: {
                beginAtZero: true}
            }]
      },
      title: {
        display: true,
        text: date,
      }
    }
});
    </script>
@endsection