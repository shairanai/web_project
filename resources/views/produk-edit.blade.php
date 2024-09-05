@extends('template')
@section('content')
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form method="post" action="/produk/update/{{$produk->id}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Produk</label>
                                <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk"
                                name="nama_produk" value="{{$produk->nama_produk}}">
                            </div>
                            <div class="form-group pt-2">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" id="kategori">
                                    <option value="tas wanita">tas wanita</option>
                                    <option value="tas pria">tas pria</option>
                                </select>
                               
                            </div>

                            <div class="form-group pt-2">
                                <label for="productName">Deskripsi</label>
                                <input type="text" class="form-control" id="productName" placeholder="Masukkan deskripsi" name="deskripsi" value="{{$produk->deskripsi}}">
                            </div>

                            <div class="form-group pt-2">
                                <label for="quantity">Jumlah</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah produk" name="jumlah" value="{{$produk->jumlah}}">
                            </div>

                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" id="price" placeholder="Masukkan harga produk"
                                name="harga" value="{{$produk->harga}}">                              
                            </div>

                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image">
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection
