<?php $__env->startSection('title', trans('messages.install.welcome.title')); ?>
<?php $__env->startSection('container'); ?>
    <p class="paragraph"><?php echo e(trans('messages.install.welcome.message')); ?></p>
    <div class="buttons">
        <a href="<?php echo e(route('LaravelInstaller::environment')); ?>" class="button"><?php echo e(trans('messages.install.next')); ?></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>