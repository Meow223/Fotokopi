<x-app-layout>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>FOTHAM - Fotokopi Ilham</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Edit data Barang</h2>
                </div>
                <div class="card-body">
                    <form action="/updatebarang/{{$barang->id}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_barang">ID</label>
                            <input  class="form-control" name="id_barang" id="id_barang" value="{{$barang->id}}"  placeholder="Masukkan ID">
                          </div>
                          <div class="form-group">
                            <label for="nama_pem">Nama Barang</label>
                            <input class="form-control" name="nama_barang" id="nama_pembeli" value="{{$barang->nama_barang}}" placeholder="Masukkan Nama">
                          </div>
                          <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar_barang" id="gambar" placeholder="Masukkan Gambar">
                          </div>
                          <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input class="form-control" name="ket_barang" id="ket barang" value="{{$barang->ket_barang}}" placeholder="Masukkan Keterangan">
                          </div>
                          <div class="form-group">
                            <label for="harga">Harga Satuan</label>
                            <input class="form-control" name="harga_satuan" id="harga" value="{{$barang->harga_satuan}}" placeholder="Masukkan Harga">
                          </div>
                          <div class="form-group">
                            <label for="stok">Stok</label>
                            <input class="form-control" name="stok" id="harga" value="{{$barang->stok}}" placeholder="Masukkan Stok">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form> 
                </div>
            </div>
        </div>
    </body>
  </x-app-layout>