
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="<?php echo e(route('violation_entry.update', ['id' => $v->id])); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
                        <label>violation No</label><br>
                        <input type="text" name="vno" id="vno" value="<?php echo e($v->vno); ?>" class="form-control"></br>
                        <label>Violation Date</label><br>
                        <input type="text" name="vdate" id="vdate" value="<?php echo e($v->vdate); ?>" class="form-control"></br>
                        <label>Violation Time</label><br>
                        <input type="text" name="vtime" id="vtime" value="<?php echo e($v->vtime); ?>" class="form-control"></br>
                        <label>Plate</label><br>
                        <input type="text" name="plate" id="plate" value="<?php echo e($v->plate); ?>" class="form-control"></br>
                      
                        <label>Fleet</label><br>
                        <input type="text" name="fleet" id="fleet" value="<?php echo e($v->fleet); ?>" class="form-control"></br>
                        <label>User</label><br>
                        <input type="text" name="user" id="user" value="<?php echo e($v->user); ?>" class="form-control"></br>
                        <label>Violation Type</label><br>
                        <input type="text" name="v_des_en" id="v_des_en" value="<?php echo e($v->v_des_en); ?>" class="form-control"></br>
                        <input type="submit" value="update" class="btn btn-success">      
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\Projects\web_projects\Violation_website\violationApp3\resources\views/violation_entry/edit.blade.php ENDPATH**/ ?>