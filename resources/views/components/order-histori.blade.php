<tr>
    <td>{{ $no }}</td>
    <td>{{ $pesanan->tanggal }}</td>
    <td>
        @if ($pesanan->status == 1)
            Belum Lunas
        @else
            Lunas
        @endif
    </td>
    <td>Rp. {{ number_format($pesanan->jumlah_harga + $pesanan->kode) }}</td>
    <td>
        <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
    </td>
</tr>