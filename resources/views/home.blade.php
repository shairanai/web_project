<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="{{asset ("assets/bootstrap/css/bootstrap.min.css")}}">
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
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a href="/home" class="logo" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left: 10%;">SHASFYA'SlingBag</a>
            <ul class="nav-links">
                <li><a href="/home">home</a></li>
                <li><a href="/home">
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

    

    <div class="gambar">
        <img src="gambar/slingg.jpg" width="100%" height="500px" alt="">
    </div>

    <header style="background-color: #90c2d1; width: 100%; height: 900px; margin-top: -3%;"></header>
    <h2 class="text-black fw-bold" style="margin-top: -800px; font-size: 40px; margin-left: 45%; font-family: 'Courier New', Courier, monospace;">Sling Bag</h2>
    <div class="container mt-3 mb-5">
    @foreach ($produk as $key => $item)
        
        <div class="card" style="width: 100%; height: 100%; margin-left: 3%; margin-top: 5%;">
            <a href="/detailproduk/{{$item->id}}">
                <img src="{{asset('/storage/foto/'.$item->foto)}}" class="card-img-top" alt="Card Image">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{$item->nama_produk}}</h5>
                <p class="card-text">Rp.{{$item->harga}}</p>
                <p class="mb-4">
                    {{$item->deskripsi}}
                </p>
                <a href="" class="btn" style="background-color: black">Beli Sekarang</a>
            </div>
        </div>
    @endforeach
    </div>
    {{-- <div class="container mt-5">
        <div class="card" style="width: 18rem; margin-left: 37%; margin-top: -53%;">
            <img src="gambar/slingb.webp" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">leida</h5>
                <p class="card-text">Rp.875.000</p>
                <a href="#" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card" style="width: 18rem; margin-left: 71%; margin-top: -62%;">
            <img src="gambar/sling4.jpg" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">premia</h5>
                <p class="card-text">Rp. 4.500.000</p>
                <a href="#" class="btn btn-dark">Beli Sekarang</a>
            </div>
        </div>
    </div> --}}

    <footer>
        <div class="footer-content">
            <p class="fw-bold">Dowa adalah sebentuk cinta terhadap Karya Anak Bangsa Indonesia <br>
                yang diwujudkan dalam karya fashion kelas dunia. <br>
                Bergerak dan berdaya bersama ribuan perempuan bertalenta Pengerajin maupun Pecinta Dowa yang berkarya dengan cinta.</p>
        </div> <br>
        
        <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li class="mx-3"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
            <li class="mx-3"><a href="#" class="text-white text-decoration-none">Terms of Service</a></li>
            <li class="mx-3"><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
          <i class="bi bi-facebook"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
        <i class="bi bi-instagram"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.87-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg>
        <i class="bi bi-twitter-x"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
        </svg>
        <i class="bi bi-youtube"></i>
       
    </footer>

</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>
