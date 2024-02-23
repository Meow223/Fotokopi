<x-app-layout>

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
                    <h2>Manajemen data Barang</h2>
                </div>
                <div class="card-body">
                    <a href="/tambahbarang" class="btn btn-primary">Tambah</a>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <x-search-bar :action="route('barang')" :placeholder="'Search'" :width="'350px'" />
                        </div>
                    </div>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Keterangan Barang</th>
                                <th>Harga Satuan</th>
                                <th>Stok</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $brg)
                                <tr>
                                    <td>{{ $brg->id }}</td>
                                    <td>{{ $brg->nama_barang }}</td>
                                    <td>
                                        <img src="{{ asset('image/' . $brg->gambar_barang) }}" style="width: 40px;"
                                            alt="">
                                    </td>
                                    <td>{{ $brg->ket_barang }}</td>
                                    <td>{{ $brg->harga_satuan }}</td>
                                    <td>{{ $brg->stok }}</td>
                                    <td>
                                        <a href="/tampilbarang/{{ $brg->id }}" class="btn btn-secondary">Edit</a>
                                        <a href="/deletebarang/{{ $brg->id }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $barang->links() }}
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
