<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>test midtrans</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">marketplace</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/laptop.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Detail Pesanan</h5>
                <table>
                <tr>
                    <td>Nama</td>
                     <td> : {{$order->name}}</td>
                </tr>  
                <tr>
                    <td>No HP</td>
                     <td> : {{$order->phone}}</td>
                </tr>  
                <tr>
                    <td>Alamat</td>
                     <td> : {{$order->address}}</td>
                </tr>  
                <tr>
                    <td>QTY</td>
                     <td> : {{$order->qty}}</td>
                </tr>  
                <tr>
                    <td>Total Harga</td>
                     <td> : {{$order->total_price}}</td>
                </tr>  
                </table>
                <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
                <div id="snap-container"></div>
            </div>
        </div>
    




<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          //alert("payment success!"); 
          window.location.href = '/invoice/{{$order->id}}'
          console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   

</body>
</html>