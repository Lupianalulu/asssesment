
<?php $__env->startSection('konten'); ?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">
        <form action="/prodi-update" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Prodi</label>
              <input type="text" class="form-control" name="txt_prodi" aria-describedby="emailHelp" value="<?php echo e($nama); ?>">
            </div>
           
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
      </div>
    </div>

  </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo2\crudsiakad\resources\views/prodi/index.blade.php ENDPATH**/ ?>