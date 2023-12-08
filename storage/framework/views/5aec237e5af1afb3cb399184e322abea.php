

<?php $__env->startSection('container'); ?>

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Formulir Pengeluaran Barang</h5>
        <div class="card">
          <div class="card-body">
            <form method="post" action="/in">
              <?php echo csrf_field(); ?>
              <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" class="form-control  <?php $__errorArgs = ['KodeBrg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="KodeBrg" value="<?php echo e(old('KodeBrg')); ?>">
                <?php $__errorArgs = ['KodeBrg'];
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
              <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control  <?php $__errorArgs = ['NamaBrg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleInputPassword1" name="NamaBrg" value="<?php echo e(old('NamaBrg')); ?>">
                <?php $__errorArgs = ['NamaBrg'];
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
              <div class="mb-3 ">

                <label class="form-label" for="exampleCheck1">Jumlah</label>
                <input type="number" class="form-control  <?php $__errorArgs = ['JumlahBrg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleCheck1" name="JumlahBrg" value="<?php echo e(old('JumlahBrg')); ?>">
                <?php $__errorArgs = ['JumlahBrg'];
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
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/penerimaan/create.blade.php ENDPATH**/ ?>