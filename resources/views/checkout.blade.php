<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Checkout</h1>
        <div class="row">
            <div class="col-md-8">
                <form>
                    <h4 class="mb-3">Informasi Pengiriman</h4>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="kode-pos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kode-pos" required>
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Negara</label>
                        <select class="form-select" id="negara" required>
                            <option selected>Pilih Negara...</option>
                            <option>Indonesia</option>
                            <option>Malaysia</option>
                            <option>Singapura</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="mb-3">
                <label for="zip">Metode Pembayaran</label>
                <select name="zip" id="zip">
                    <option value="1">COD</option>
                    <option value="2">DANA</option>
                    <option value="3">GOPAY</option>
                </select>
            </div>
            <button class="btn btn-primary w-100">Pesan Sekarang</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
