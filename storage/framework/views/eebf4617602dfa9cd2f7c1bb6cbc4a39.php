
<?php $__env->startSection('content'); ?>

<div class="col-12">
      <div class="container-fluid"> 
                    <div class="content">
                      <div class="row ">
                          <div class="container-fluid" id="addBn">
                                  
                        <h1>Violations details</h1>
                                 
                                  <button class="btn btn-success">
                                      Export to Excell <i class="fa-solid fa-download"></i> 
                                  </button>
                          </div>
                      </div>
                     
                      <div class="row">
                              <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col-1">V No</th>
                                        <th scope="col-1">Date</th>
                                        <th scope="col-1">Time</th>
                                        <th scope="col-1">Plate</th>
                                        <th scope="col-1">Fleet</th>
                                        <th scope="col-1">V user</th>
                                        <th scope="col-4">Violation type</th>
                                        <th scope="col-1">Amount</th>
                                        <th scope="col-2">Action</th>
                                      </tr>
                                    </thead>
                                          <tbody>
                                            <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <tr>
                                                    <td style="background-color: #e6ffff;"><?php echo e($entry->vno); ?></td>
                                                    <td style="background-color: #f2f2f2;"><?php echo e($entry->vdate); ?></td>
                                                    <td style="background-color: #e6ffff;"><?php echo e($entry->vtime); ?></td>
                                                    <td style="background-color: #f2f2f2;"><?php echo e($entry->plate); ?></td>
                                                    <td style="background-color: #e6ffff;"><?php echo e($entry->fleet); ?></td>
                                                    <td style="background-color: #f2f2f2;"><?php echo e($entry->user); ?></td> 
                                                    <td style="background-color: #e6ffff;"><?php echo e($entry->v_des_en); ?></td>
                                                    <td style="background-color: #f2f2f2;"><?php echo e($entry->amount); ?></td>
                                                    <td style="display: flex;justify-content: center;align-items: center;">
                                                        <form method="POST" action="<?php echo e(route('violation_entry.destroy', $entry->id)); ?>" style="display: inline-block;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger mr-2"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        <a href="<?php echo e(route('violation_entry.edit', $entry->id)); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    </td>
                                                 </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                </table>
                      </div>
                              

                
                    </div>
     </div> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\Projects\web_projects\Violation_website\violationApp3\resources\views/violation_info/index.blade.php ENDPATH**/ ?>