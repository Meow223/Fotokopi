<tr>
    <td>{{ $no }}</td>
    <td>
        <img src="{{ url('image') }}/{{ $item->barang->gambar_barang }}" width="100" alt="..."> 
    </td>
    <td>{{ $item->barang->nama_barang }}</td>
    <td>{{ $item->jumlah }} Buah</td>
    <td align="right">Rp. {{ number_format($item->barang->harga_satuan) }}</td>
    <td align="right">Rp. {{ number_format($item->jumlah_harga) }}</td>
    <td>
        <form action="{{ url('check-out') }}/{{ $item->id }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');">
                Delete <i class="fa fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
