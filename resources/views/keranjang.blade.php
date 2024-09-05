 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x: hidden">
<style>
    body {
margin: 0;
font-family: Arial, sans-serif;
}

.navbar {
background-color: #5e838f;
padding: 40px 0;
}

.container {
width: 80%;
margin: 0 auto;
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
color: #fff;
text-decoration: none;
font-size: 24px;    
}

.nav-links {
list-style: none;
margin: 0;
padding: 0;
display: flex;
}

.nav-links li {
margin: 0 15px;

}

.nav-links a {
color: #fff;
text-decoration: none;
font-size: 18px;

}

.nav-links a:hover {
text-decoration: underline;

}

footer {
background-color: #5e838f;
color: white;
text-align: center;
padding: 40px;
position: relative;
bottom: 0;
width: 100%;
margin-top: 100px;
}

.footer-content p {
margin: 5px 0;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
</style>

    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left: 10%;">SHASFYA'SlingBag</a>
            <ul class="nav-links">
                <li><a href="/home">home</a></li>
                <li><a href="#">
                    Produk 
                <a href="kategori" class="ms-4">Kategori</a>
                <head>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
                </head>
                <i class="fas fa-shopping-cart"></i>
            </a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>

    <h4 class="mb-4 mt-5" style="margin-left: 20%">Keranjang Belanja</h4>

    <div class="container mt-5" style="margin-left: 19%">     
        @foreach ($keranjang as $item)
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="gambar/sling1.jpg" class="img-fluid rounded-start" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->produk->nama_produk}}</h5>
                                {{-- <p class="card-text">Deskripsi singkat produk.</p> --}}
                                <p class="card-text"><small class="text-muted">Harga: Rp. {{$item->produk->harga}}</small></p>
                                <div class="mb-4">
                                    <label for="quantity" class="form-label">Kuantitas</label>
                                    <input type="number" id="quantity" class="form-control w-25" value="1" min="1">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ringkasan Pesanan</h5>
                        <p class="card-text">Total Harga: Rp.750.000</p>
                        <button class="btn btn-primary w-100">Checkout</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
