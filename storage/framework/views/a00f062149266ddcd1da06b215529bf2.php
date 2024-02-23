<tr>
    <td><?php echo e($no); ?></td>
    <td><?php echo e($pesanan->tanggal); ?></td>
    <td>
        <?php if($pesanan->status == 1): ?>
            Belum Lunas
        <?php else: ?>
            Lunas
        <?php endif; ?>
    </td>
    <td>Rp. <?php echo e(number_format($pesanan->jumlah_harga + $pesanan->kode)); ?></td>
    <td>
        <a href="<?php echo e(url('history')); ?>/<?php echo e($pesanan->id); ?>" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
    </td>
</tr><?php /**PATH C:\xampp\htdocs\foto\resources\views/components/order-histori.blade.php ENDPATH**/ ?>