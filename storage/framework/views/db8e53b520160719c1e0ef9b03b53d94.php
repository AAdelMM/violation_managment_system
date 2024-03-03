

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Driver Information</h1>
    <a href="<?php echo e(route('driver_info.create')); ?>" class="btn btn-success">Add Driver</a>
    <table class="table">
        <thead>
            <tr>
                
                <th>PTC ID</th>
                <th>Name</th>
                <th>ID Number</th>
                <th>Created At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $driverInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driverInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td style="background-color: #e6ffff;"><?php echo e($driverInfo->ptc_id); ?></td>
                <td style="background-color: #f2f2f2;"><?php echo e($driverInfo->name); ?></td>
                <td style="background-color: #e6ffff;"><?php echo e($driverInfo->id_no); ?></td>
                <td><?php echo e($driverInfo->created_at); ?></td>
                <td></td>
                <td>
                    <form action="<?php echo e(route('driver_info.destroy', $driverInfo->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\Projects\web_projects\Violation_website\violationApp3\resources\views/driver_info/index.blade.php ENDPATH**/ ?>