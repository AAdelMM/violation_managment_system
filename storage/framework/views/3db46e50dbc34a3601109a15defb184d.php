<!-- resources/views/drivers/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="text-success">Add New Driver</h2>
        <h3 class="text-success">The page still <span  class="text-danger">"Under construction”</span> </h3>
       
        <button type="button" id="back-button" class="btn btn-warning">Back</button>
       
    </div>


    <script>
    $(function() {

        $("#back-button").click(function() {
        window.location.href = "<?php echo e(url('driver_info')); ?>";
        });
    });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\Projects\web_projects\Violation_website\violationApp3\resources\views/driver_info/create.blade.php ENDPATH**/ ?>