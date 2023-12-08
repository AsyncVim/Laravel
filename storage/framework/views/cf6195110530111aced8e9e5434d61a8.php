

<?php $__env->startSection('container'); ?>

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Formulir Pengeluaran Barang</h5>
        <div class="card">
          <div class="card-body">
            <form method="post" action="/out">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="kode" value="<?php echo e($barang->KodeBrg); ?>">
              <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($barang->KodeBrg); ?>" disabled>
               
              </div>
              <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo e($barang->NamaBrg); ?>" disabled>

              </div>
              <div class="mb-3 ">

                <label class="form-label" for="exampleCheck1">Jumlah</label>
                <input type="number" class="form-control  <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleCheck1" name="jumlah" value="<?php echo e(old('jumlah')); ?>">
                <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid_feedback text-danger">
                      <?php echo e($message); ?>

                  </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/barangs/create.blade.php ENDPATH**/ ?>