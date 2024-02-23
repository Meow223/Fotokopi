<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="col-md-12">
                    <a href="{{ url('katalog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('katalog') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                    </ol>
                </nav>
            </div>
            <x-pesanan-detail :barang="$barang" />
        </div>
    </div>
</x-app-layout>