<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>test midtrans</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">marketplace</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/laptop.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">LENOVO Yoga Slim 7 14ITL05</h5>
              <p class="card-text">Lenovo Yoga Slim 7 merupakan laptop yang tepat untuk aktivitas mobile Anda. Bekerja lebih cepat dari mana saja. Daya tahan baterainya lebih lama sehingga bisa selesaikan tugas lebih banyak. Rapid Charge Pro bisa mengisi baterai lebih cepat.</p>
              <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Mau Pesan Berapa?</label>
                    <input type="number" name="qty" class="form-control" id="qty"
                        placeholder="jumlah yang dipesan">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="masukan nama anda!">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" name="phone" class="form-control" id="phone"
                        placeholder="masukan no hp!">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
            </div>
          </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>