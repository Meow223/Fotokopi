<div class="col-md-12 mt-1">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('image/' . $barang->gambar_barang) }}" class="rounded mx-auto d-block" width="100%" alt="">
                </div>
                <div class="col-md-6 mt-5">
                    <h2>{{ $barang->nama_barang }}</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>Rp. {{ number_format($barang->harga_satuan) }}</td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td>{{ number_format($barang->stok) }}</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>
                                <td>{{ $barang->ket_barang }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Pesan</td>
                                <td>:</td>
                                <td>
                                    <form method="post" action="{{ url('pesanan') }}/{{ $barang->id }}">
                                        @csrf
                                        <input type="text" name="jumlah_pesan" class="form-control" required="">
                                        <button class="btn btn-primary mt-2"><i> Masukkan Keranjang</i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>