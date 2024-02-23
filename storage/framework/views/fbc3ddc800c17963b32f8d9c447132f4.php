<tr>
    <td><?php echo e($no); ?></td>
    <td>
        <img src="<?php echo e(url('image')); ?>/<?php echo e($item->barang->gambar_barang); ?>" width="100" alt="..."> 
    </td>
    <td><?php echo e($item->barang->nama_barang); ?></td>
    <td><?php echo e($item->jumlah); ?> Buah</td>
    <td align="right">Rp. <?php echo e(number_format($item->barang->harga_satuan)); ?></td>
    <td align="right">Rp. <?php echo e(number_format($item->jumlah_harga)); ?></td>
    <td>
        <form action="<?php echo e(url('check-out')); ?>/<?php echo e($item->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');">
                Delete <i class="fa fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
<?php /**PATH C:\xampp\htdocs\foto\resources\views/components/check-out-barang.blade.php ENDPATH**/ ?>