@extends('layouts.admin')
@section('content')


@if(Session::has('Cart') != null)

<link href="{{ asset('css/cart.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style>
    .ajs-message.ajs-custom {
        color: #ffffff;
        /* background-color: #d9edf7;   */
        background: rgba(91, 189, 114, 0.95);
        border-color: #31708f;
    }
</style>

<div class="mt-4 container bg-white rounded padding-bottom-3x mb-1">
    <!-- Alert-->
    @if(session()->has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{__('payment.Fail')}}</strong>{{__('payment.CheckMomo')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    <!-- Shopping Cart-->
    <div id="change">
        <div class="table-responsive shopping-cart">
            <table class="table">
                <thead>
                    <tr>
                        {{-- {{__('cart.Product')}} --}}
                        <th></th>
                        <th class="text-center">{{__('cart.Quantity')}}</th>
                        <th class="text-center">{{__('cart.Price')}}</th>

                        <th class="text-center">
                            <a class="btn btn-sm btn-outline-danger" href="{{route('clearCart')}}">{{__('cart.Clear Cart')}}</a>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach (Session::get('Cart')->products as $product)
                    <tr>
                        <td>
                            <div class="product-item">
                                @if($product['productInfo']->product_code[0] == 't')
                                <a class="product-thumb" href="{{route('tour.show',$product['productInfo']->id)}}"><img style="width: 200px; height: 160px"
                                        src="{{$product['productInfo']->avatar}}" alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="{{route('tour.show',$product['productInfo']->id)}}">{{$product['productInfo']->name}}</a></h4>
                                @else
                                <a class="product-thumb" href="{{route('hotel.show',$product['productInfo']->id)}}"><img style="width: 200px; height: 160px"
                                    src="{{$product['productInfo']->avatar}}" alt="Product"></a>
                            <div class="product-info">
                                <h4 class="product-title"><a href="{{route('hotel.show',$product['productInfo']->id)}}">{{$product['productInfo']->name}}</a></h4>
                                @endif

                                    <div>
                                        @if ($product['productInfo']->product_code[0] == 'h')
                                        <div>
                                            {{$product['productInfo']->day}} night(s)
                                            {{$product['productInfo']->date}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        <td class="text-center">
                            {{-- <div class="count-input">
                                <input class="form-control" type="text" value="{{$product['quantity']}}">
                            </div> --}}
                            <div class="quantity">
                                <span class="pro-qty">
                                    @if ($product['productInfo']->product_code[0] == 't')
                                    <input disabled data-price="{{$product['price']}}" data-day="1" data-date="" data-id="{{$product['productInfo']->product_code}}" id="product-{{$product['productInfo']->product_code}}" type="text" value="{{$product['quantity']}}">
                                    @else
                                    <input disabled data-price="{{$product['price']}}" data-day="{{$product['productInfo']->day}}" data-date="{{$product['productInfo']->checkin_date}}" data-id="{{$product['productInfo']->product_code}}" id="product-{{$product['productInfo']->product_code}}" type="text" value="{{$product['quantity']}}">
                                    @endif
                                </span>
                            </div>
                        </td>

                        <td class="text-center text-lg text-medium">{{Session::get('Cart')->money($product['price'])}}</td>
                        <!-- {{Session::get('Cart')->money($product['price'])}} -->
                        <td class="text-center">
                            <a class="remove-from-cart" href="#!" data-toggle="tooltip" title=""
                                data-original-title="Remove item">
                                <div class="remove">
                                    <i class=" fa fa-trash" data-id="{{$product['productInfo']->product_code}}"></i>
                                </div>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="shopping-cart-footer">
            <div class="column">
                {{-- <form class="coupon-form" method="post">
                    <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required="">
                    <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
                </form> --}}
            </div>
            <div class="column text-lg">{{__('cart.Total')}}: 
                <span class="text-medium">{{Session::get('Cart')->money(Session::get('Cart')->totalPrice)}}</span>
                {{-- <span>{{Session::get('Cart')->usd(Session::get('Cart')->totalPrice)}}</span>  --}}
                <input id="totalUSD" type="hidden" value="{{Session::get('Cart')->VNDtoUSD(Session::get('Cart')->totalPrice)}}">
            </div>
        </div>

        

        <div class="shopping-cart-footer">
            <div class="column">
                {{-- <a class="btn btn-outline-secondary" href=""><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a> --}}
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="payment" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      {{__('cart.Cash')}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="2" type="radio" name="payment" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        {{__('cart.Banking')}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="4" type="radio" name="payment" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        {{__('cart.Momo')}}
                    </label>
                </div>
                
                
            </div>
            <div class="column">
                <a class="update btn btn-primary" href="#!" data-toast="" data-toast-type="success" data-toast-position="topRight"
                    data-toast-icon="icon-circle-check" data-toast-title="Your cart"
                    data-toast-message="is updated successfully!">
                    {{__('cart.Update Cart')}}
                </a>
                
                <a class="checkout btn btn-success" href="#!">{{__('cart.Checkout')}}</a>
                
            </div>
        </div>
        <div class="shopping-cart-footer">
            <div class="column">
                {{__('cart.paypal')}}
            </div>
            <div class="column">
                <div id="paypal-button"></div>

            </div>
        </div>
    </div>
    
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/cart.js') }}" defer></script>
<script>
    function updateCart(){
        var list= [];
        $("table tbody tr td").each(function(){
            $(this).find("input").each(function(){
                var element = {key: $(this).data("id"),value: $(this).val()};
                list.push(element);
            });
        });

        console.log(list);
        var list1 = [1,2,3]
        $.ajax({
            url: "updateCart",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "data": list,
            }
        }).done(function(respone){
            var icon = '<span class="bi bi-bag-dash"></span>';
            $("#change").empty();
            $("#change").html(respone);
            var noti = $( "#noti" ).val();
            // alertify.notify(icon+ " " + noti, 'custom');
        });
        $.ajax({
            url: "cartQuantity" ,
            type:'GET',   
        }).done(function(respone){
            $('#CartCount').text(respone);
            
        });
    }

    $("#change").on("click", ".remove i", function () {
        
        $.ajax({
            url: '/deleteCart/' + $(this).data('id'),
            type: 'GET',
        }).done(function (respone) {
            var icon = '<span class="bi bi-bag-dash"></span>';
            $("#change").empty();
            $("#change").html(respone);
            var noti = $( "#noti" ).val();
            alertify.notify(icon+ " " + noti, 'custom');
        });

        $.ajax({
            url: "cartQuantity" ,
            type:'GET',   
        }).done(function(respone){
            $('#CartCount').text(respone);
            
        });
    });

    
    // so luong tung mon trong gio hang
    

    $(".update").on("click",function(){
        updateCart();
        
    });

    function checkout(payment){
        // updateCart();
        var list= [];
        
        $("table tbody tr td").each(function(){
            $(this).find("input").each(function(){
                var element = {key: $(this).data("id"),value: $(this).val(),day: $(this).data("day"),price: $(this).data("price"),date: $(this).data("date")};
                list.push(element);
            });
        });
        // var list1 = [1,2,3];
        console.log(list);
        $.ajax({
            url: "booking",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "data": list,
                "payment": payment,
            }
        }).done(function(respone){
            // console.log(respone);
            if(payment == 4)
            {
                if(respone == 'error')
                    {
                        
                        alertify.error('Error');
                    }
                else
                    
                    location.href = respone;
                    // console.log(respone);
            }
            else
                {
                    location.href = '/receipt';
                }
        });
    }


    $(".checkout").on("click",function(){
        var payment =$('input[name="payment"]:checked').val();

        checkout(payment);
    });

    

</script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

    var usd = $( "#totalUSD" ).val();
  paypal.Button.render({
    
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'ARXQy4nMUiXnq6zEB8oVvv5a2THNl-4W9lJp4HNgIqmOcv1HxC9XUpdlnqstsUuPiSgES9hbJcGnLONt',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'medium',
      color: 'gold',
      shape: 'pill',
    },
    
    // Enable Pay Now checkout flow (optional)
    commit: true,
    
    // Set up a payment
    
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: usd,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        // 3 is paypal
        console.log(data);
        var payment = 3;
        checkout(payment);
      });
    }
  }, '#paypal-button');

</script>

{{-- <script
    src="https://www.paypal.com/sdk/js?client-id=ARXQy4nMUiXnq6zEB8oVvv5a2THNl-4W9lJp4HNgIqmOcv1HxC9XUpdlnqstsUuPiSgES9hbJcGnLONt"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
</script>
<script>
    paypal.Buttons({
    style: {
        layout: 'horizontal',
        tagline: 'false'
        },
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
        //   alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script> --}}



@else
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>{{__('cart.Empty')}}</strong></h3>
                        <h4>{{__('cart.Add something')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection