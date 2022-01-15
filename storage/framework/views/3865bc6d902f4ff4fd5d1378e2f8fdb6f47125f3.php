<?php $__env->startSection('title', trans('messages.install.final.title')); ?>
<?php $__env->startSection('container'); ?>
    <p class="paragraph"><?php echo e(session('message')['message']); ?></p>
    <div class="buttons">
        <a href="<?php echo e(url('/')); ?>" class="button"><?php echo e(trans('messages.install.final.exit')); ?></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>