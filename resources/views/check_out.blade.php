<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/katalog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/katalog') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                        @if(!empty($pesanan))
                        <p align="right">Tanggal Pesan : {{ $pesanan->tanggal_pesanan }}</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pesanan_details as $item)
                                    <x-check-out-barang :no="$no++" :item="$item" />
                                @endforeach
                                <tr>
                                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                    <td>
                                        <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                            <i class="fa fa-shopping-cart"></i> Check Out
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div> 
        </div>
    </div>
</x-app-layout>