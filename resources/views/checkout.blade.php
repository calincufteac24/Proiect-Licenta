@extends('layout')

@section('content')
<div class="text-center  my-5">
    <h1>Finalizarea comenzii </h1>
</div>
<div class="container  text-white">
    <form action="{{ url('place-order') }}" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-8">
            <div class="card-checkout">
                <div class="card-body">
                    <h2 class="text-center">Detalii pentru plasarea comenzii</h2>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">Prenume</label>
                            <input type="text" required class="form-control firstname" value=" {{ Auth::user()->name }} " name="fname" id="nume1" placeholder="Introdu prenumele">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nume</label>
                            <input type="text" required class="form-control lastname" value=" {{ Auth::user()->lname }} " name="lname" placeholder="Introdu numele">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="text" required class="form-control email" value=" {{ Auth::user()->email }} " name="email" placeholder="Introdu email-ul tău">
                        </div>
                        <div class="col-md-6">
                            <label for="">Număr de telefon</label>
                            <input type="text" required class="form-control telefon" value=" {{ Auth::user()->telefon }} " name="telefon" placeholder="Introdu numărul de telefon">
                        </div>
                        <div class="col-md-6">
                            <label for="">Adresa</label>
                            <input type="text" required class="form-control adresa" value=" {{ Auth::user()->adresa }} "  name="adresa" placeholder="Introdu adresa ta">
                        </div>
                        <div class="col-md-6">
                            <label for="">Oraș</label>
                            <input type="text" required class="form-control oras" value=" {{ Auth::user()->oras }} "  name="oras" placeholder="Introdu orașul">
                        </div>
                        <div class="col-md-6">
                            <label for="">Județ</label>
                            <input type="text" required class="form-control judet" value=" {{ Auth::user()->judet }} "  name="judet" placeholder="Introdu județul">
                        </div>
                        <div class="col-md-6">
                            <label for="">Codul Poștal</label>
                            <input type="text" required class="form-control codpostal" value=" {{ Auth::user()->codpostal }} "  name="codpostal" placeholder="Introdu codul poștal">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-details">
                <div class="card-body ">
                    <h4 class="text-center">Detaliile comenzii</h4>
                    <hr>
                    <table class="table text-white table-bordered text-center">
                        <thead >
                            <tr>
                                <th>Denumire</th>
                                <th>Cantitate</th>
                                <th>Pret</th>
                            </tr>
                        </thead>
                        @php $total = 0; @endphp
                        <tbody>
                      
                        @foreach($cartitems as $item)
                       
                            <tr>
                                <td> {{$item->products->name}} </td>
                                <td>{{$item->prod_quantity}}</td>
                                <td> {{$item->products->selling_price}}</td>
                            </tr>
                            @php $total +=  $item->products->selling_price * $item->prod_quantity; @endphp
                            @endforeach
                        </tbody>
                       
                    </table> 
                    <h5> Prețul total: {{$total}} Lei</h5>
                
                 
                </div>
                
            </div>
            
           <div>
            <input type="hidden" name="payment_mode" value="Plata la ramburs">
            <button type="submit" class="btn btn-lg btn-secondary mt-2 w-100"><i class="bi bi-cash"></i> Plata prin ramburs</button>
            <button type="submit" class="btn btn-lg btn-primary mt-2 w-100"><i class="bi bi-cash"></i> Plata si ridicarea din magazinul fizic</button>
            
           
            <div id="paypal-button-container" class="mt-2"></div>
           
        </div>
    </div>
    </form>
</div>



@endsection
@section('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=AfjKOkIEe5s8_djbPVBdMGIqqbrwhn-sIJ70pOh-bj_j5-0AXFraRODstiPD-yoZqa4XrA_3EVUELlaS&currency=USD"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">




<script>

var a = {{ $total }};
var b = 4.70;
var quo = Math.floor(parseFloat(a)/parseFloat(b) + 1) ;
console.log(quo);

    
      paypal.Buttons({

        
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: quo 
              }
            }]
          });
        },

      
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
  
         
               
                var firstname = $('.firstname').val();
                var lastname = $('.lastname').val();
                var email = $('.email').val();
                var telefon = $('.telefon').val();
                var adresa = $('.adresa').val();
                var oras = $('.oras').val();
                var judet = $('.judet').val();
                var codpostal = $('.codpostal').val();

                $.ajaxSetup({
                 headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                $.ajax({
                    method: "POST",
                    url: "/place-order",
                    data: {
                        'fname':firstname,
                        'lname':lastname,
                        'email':email,
                        'telefon':telefon,
                        'adresa':adresa,
                        'oras':oras,
                        'judet':judet,
                        'codpostal':codpostal,
                        'payment_mode':"Plata cu PayPal",
                    },
                    success: function(response){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Comanda plasata cu succes! Veți primi un email de confirmare a comenzii");
                     window.setTimeout(function(){location.href = "http://127.0.0.1:8000/";reload()},1000)
                 }
                   
            

                });
        
                
                   
              
               
                
          
              
          
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
         
        }
      }).render('#paypal-button-container');
     
    </script>


@endsection