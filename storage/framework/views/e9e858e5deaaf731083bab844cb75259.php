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
        <?php $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td>
                    <img src="<?php echo e(url('image')); ?>/<?php echo e($pesanan_detail->barang->gambar_barang); ?>" width="100" alt="...">
                </td>
                <td><?php echo e($pesanan_detail->barang->nama_barang); ?></td>
                <td><?php echo e($pesanan_detail->jumlah); ?> buah</td>
                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->barang->harga_satuan)); ?></td>
                <td align="right">Rp. <?php echo e(number_format($pesanan_detail->jumlah_harga)); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td colspan="5" align="right"><strong>Total Harga :</strong></td>
            <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>
        </tr>
        <tr>
            <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
            <td align="right"><strong><?php echo e(number_format($pesanan->kode)); ?></strong></td>
        </tr>
        <tr>
            <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
            <td align="right"><strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>
        </tr>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\foto\resources\views/components/order-detail.blade.php ENDPATH**/ ?>