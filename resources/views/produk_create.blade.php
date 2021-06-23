@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content col-md-6">
            <!-- Remove This Before You Start -->
            <h1>Arkademy -  Tambah Produk</h1>
            <hr>
            <form action="{{ route('produk.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_produk">Nama produk:</label>
                    <input type="text" class="form-control" id="" name="nama_produk">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="" name="harga">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" class="form-control" id="" name="jumlah">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection