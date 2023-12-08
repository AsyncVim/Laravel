

<?php $__env->startSection('container'); ?>
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Cetak Data Detail Penerimaan</h5>
        <div class="table-responsive">
          <form action="/cetak" method="post">
            <?php echo csrf_field(); ?>
              <label for="exampleInputEmail1" class="form-label">Pilih Kode barang</label>
           <div class="row">
            <div class="col">

                <select class="form-select" aria-label="Default select example" name="KodeTrm">
                   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($d->KodeTrm); ?>"><?php echo e($d->KodeTrm); ?> - (<?php echo e($d->KodeBrg); ?>)</option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Cetak</button>
            </div>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/cetak/index.blade.php ENDPATH**/ ?>