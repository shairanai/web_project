@extends('template')
@section('content')
    
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <a href="/produk/create/" class="btn btn-primary">Tambah Data</a><br>
            </div>
            <div class="col-md-6">
                <form action="/search" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search">
                        <button class="btn" style="background-color: #5e838f" type="submit">Go</button>
                      </div>
                </form>
            </div>
        </div>
        Total Data Produk:{{$total}}
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th> 
                    <th>PRODUK</th>
                    <th>KATEGORI</th>
                    <th>DESKRIPSI</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $key => $item)
                <tr>
                    <td>{{$key+1 }}</td>
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->kategori}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->harga}}</td>
                    <td><img src="{{ asset('storage/foto/'.$item->foto)}}" alt="" style="width: 80px; height:80px"></td>
                    <td>
                        <a href="/produk/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/produk/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
    
            @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
