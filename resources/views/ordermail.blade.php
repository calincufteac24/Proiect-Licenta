

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
    <div class="text-center">
        <h2>Comanda Ps-Master</h2>
      
        <h4>Salut {{$order->fname}} {{$order->lname}}, </h4>
        <p>Comanda ta a fost plasata cu succes !</p>
        <br>
  </div>

    <table class="table table bordered" style="wdith: 600px; text-align:center">
        <thead>
            <tr>
                <th>Nume</th>
                <th>Cantitate</th>
                <th>Preț</th>
            </tr>
        </thead>
    <tbody>
    @php $total = 0; @endphp
        @foreach($order->orderItems as $item)
            <tr>
                <td> {{ $item->products->small_description }}  </td>
                <td> {{ $item->prod_quantity }} </td>
                <td> {{ $item->products->selling_price }} </td>
            </tr>
            @php $total +=  $item->products->selling_price * $item->prod_quantity; @endphp
      
        </tbody>  
       
       </table>
       
       @endforeach
<h2> Prețul total: {{$total}} Lei</h2>
<br><br>
<h3>Mulțumim, ca ați cumpărat de la noi !</h3>
</body>
</html>


