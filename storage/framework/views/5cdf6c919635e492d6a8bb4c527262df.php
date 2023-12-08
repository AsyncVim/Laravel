

<?php $__env->startSection('container'); ?>

<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Pengeluaran</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Keluar : <?php echo e($data->KodeKlr); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Kode Barang : <?php echo e($data->KodeBrg); ?></h6>
        <p class="card-text">Stock : <?php echo e($data->Stock); ?></p>
        <p class="card-text">Jumlah : <?php echo e($data->Jumlah); ?></p>
        <p class="card-text">Dikirim : <?php echo e($data->Dikirim); ?></p>
        <p class="card-text">Keterangan : <?php echo e($data->Ket); ?></p>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/pengeluaran/show.blade.php ENDPATH**/ ?>