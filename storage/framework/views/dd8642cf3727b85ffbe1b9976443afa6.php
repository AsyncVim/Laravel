

<?php $__env->startSection('container'); ?>
<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Penerimaan</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Terima : <?php echo e($data->KodeTrm); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Tanggal : <?php echo e($data->TanggalTrm); ?></h6>
        <p class="card-text">Supplier : <?php echo e($data->KodeSupl); ?></p>
        <p class="card-text">Nomor Bon : <?php echo e($data->NomorBon); ?></p>
        <p class="card-text">Total Terima : <?php echo e($data->TotalTrm); ?></p>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/penerimaan/show.blade.php ENDPATH**/ ?>