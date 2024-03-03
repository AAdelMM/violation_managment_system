
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Add violation</div>
                <div class="card-body">
                    <form action="<?php echo e(url('violation_entry')); ?>" method="post" id="violation-form">
                        <?php echo csrf_field(); ?>

                        <label>violation No</label><br>
                        <input type="text" name="vno" id="vno" class="form-control" required></br>
                        <label>Violation Date</label><br>
                        <input type="text" name="vdate" id="vdate" class="form-control" required></br>
                        <label>Violation Time</label><br>
                        <input type="text" name="vtime" id="vtime" class="form-control" required></br>
                        <label>Plate</label><br>
                        <select name="plate" id="plate" class="form-control" required>
                            <option value="">Select a plate</option>
                            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($option->id); ?>"><?php echo e($option->Plate); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="hidden" name="plate" id="plate_text" value="">
                        <br>                    
                     
                        <label>Violation Type</label><br>
                        
                        <select name="v_des_en" id="violation_type" class="form-control" required>
                            <option value="">Select Type</option>
                            <?php $__currentLoopData = $vts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($vt->id); ?>"><?php echo e($vt->VDesEn); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="hidden" name="v_des_en" id="violation_type_text" value="">
                        <br> 
                        <!--<input type="submit" value="save" class="btn btn-success">-->
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" id="back-button" class="btn btn-warning">Back</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3" >
            <div class="container">
             <!--message-->
             <div id="message" class="alert alert-success" style="display:none;">
                     <h1>Record added successfully!</h1>
            </div>
             <!--message-->
             </div>
        </div>
    </div>
   
    <script>
    $(function() {
       
        // Initialize calendar for date field
        $("#vdate").datepicker();

        // Initialize clock for time field
        $("#vtime").timepicker();

         // Update hidden field for plate when value is selected
        $("#plate").change(function() {
            $("#plate_text").val($("#plate option:selected").text());
        });

        // Update hidden field for violation type when value is selected
        $("#violation_type").change(function() {
            $("#violation_type_text").val($("#violation_type option:selected").text());
        });  

        $("#back-button").click(function() {
        window.location.href = "<?php echo e(url('violation_entry')); ?>";
        });

        

        //handle message
        // AJAX form submission
        $("#violation-form").submit(function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize the form data

                $.ajax({
                    url: "<?php echo e(url('violation_entry')); ?>",
                    type: "POST",
                    data: formData,
                    success: function(response) {

                       
                        // Optionally, clear the form fields first
                        $('#violation-form').trigger("reset");
                        
                        // Display success message
                        $("#message").fadeIn().delay(5000).fadeOut(); // Show the message, then hide after 5 seconds

                        // If you have additional logic for a successful submission, add it here
                    },
                    
                    error: function(xhr, status, error) {
                        // Log or display the error
                        console.error("An error occurred: " + error);

                        // Optionally, you can display an error message to the user
                        alert("An error occurred. Please try again.");
                    }
                    
                });
            });

          });
   
    
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\Projects\web_projects\Violation_website\violationApp3\resources\views/violation_entry/create.blade.php ENDPATH**/ ?>