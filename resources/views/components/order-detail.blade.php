<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($pesanan_details as $pesanan_detail)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <img src="{{ url('image') }}/{{ $pesanan_detail->barang->gambar_barang }}" width="100" alt="...">
                </td>
                <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                <td>{{ $pesanan_detail->jumlah }} buah</td>
                <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga_satuan) }}</td>
                <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="5" align="right"><strong>Total Harga :</strong></td>
            <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
        </tr>
        <tr>
            <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
            <td align="right"><strong>{{ number_format($pesanan->kode) }}</strong></td>
        </tr>
        <tr>
            <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
            <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
        </tr>
    </tbody>
</table>