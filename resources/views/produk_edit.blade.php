@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content col-md-6">
            <!-- Remove This Before You Start -->
            <h1>Arkademy -  Edit Produk</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('produk.update', $datas->id_produk) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama produk:</label>
                    <input type="text" class="form-control" id="" name="nama_produk" value="{{ $datas->nama_produk }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea class="form-control" id="" name="keterangan">{{ $datas->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="" name="harga" value="{{ $datas->harga }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" class="form-control" id="" name="jumlah" value="{{ $datas->jumlah }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="button" class="btn btn-md btn-danger" onclick="javascript:history.back()">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection