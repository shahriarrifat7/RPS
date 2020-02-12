<?php $__env->startSection('form'); ?>
 <!-- message -->
<h3><?php echo e(Session::get('message')); ?> </h3>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Student Registration Form</div>
                        <div class="card-body">
                            <form  action="<?php echo e(url('/student_registration')); ?>" enctype = "multipart/form-data" method="POST">
                            <?php echo e(csrf_field()); ?>

                                <div class="form-group row">
                                    <label for="student_id" class="col-md-4 col-form-label text-md-right">student ID</label>
                                    <div class="col-md-6">
                                        <input type="text" id="student_id" class="form-control" name="student_id">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="student_name" class="form-control" name="student_name">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="hall" class="col-md-4 col-form-label text-md-right">Hall</label>
                                    <div class="col-md-6">
                                        <input type="text" id="hall" class="form-control" name="hall">
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="session" class="col-md-4 col-form-label text-md-right">Session</label>
                                    <div class="col-md-6">
                                    	<select id="session"  name="session" class="selectpicker show-tick" data-size="5">
    									<optgroup label="session">
                                        <?php
                                            $var=date("Y");

                                        ?>
                                        <?php for($i = $var ; $i > $var-6; $i--): ?>
                                            <option><?php echo e($i-1); ?>-<?php echo e($i); ?></option>
                                        <?php endfor; ?>
        								
                                      	</select>
                                   
                                    </div>
									
                                </div>
 
                               
 
 
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.form_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sr7/Desktop/my_blog2/resources/views/reg/student_reg.blade.php ENDPATH**/ ?>