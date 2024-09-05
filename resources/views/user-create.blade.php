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
                        <form action="/user/create/" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="username">username</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan nama user" name="username" value="{{old('username')}}">
                            </div>
                        
                            <div class="form-group pt-2">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{old('email')}}">
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
