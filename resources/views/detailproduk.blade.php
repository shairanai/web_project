<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
</style>
<body>
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

    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-md-5">
                <img src="{{asset('/storage/foto/'.$produk->foto)}}" alt="Product Image" class="img-fluid rounded">
            </div>
            <!-- Detail Produk -->
                
            <div class="ms-4 mt-4 col-md-4">
                <h1 class="display-6">{{$produk->nama_produk}}</h1>
                <p class="lead text-muted">{{$produk->kategori}}</p>
                <p class="fs-4 fw-bold">Rp. {{$produk->harga}}</p>
                <p class="mb-4">
                    {{$produk->deskripsi}}
                </p>
                <div class="mb-4">
                    <label for="quantity" class="form-label">Kuantitas</label>
                    <input type="number" id="quantity" class="form-control w-25" value="1" min="1">
                </div>
                <div class="d-flex">
                    <form action="/keranjang/{{$produk->id}}" method="post">
                        @csrf
                        <input type="submit" value="Tambahkan ke keranjang" class="btn btn-dark" > 
                    </form>

                    <form action="/keranjang/{{$produk->id}}" method="post">
                        @csrf
                        <input type="submit" value="Beli Sekarang" class="btn btn-dark ms-2" > 
                    </form>  
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
