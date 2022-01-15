<?php $__env->startSection('title', trans('messages.install.requirements.title')); ?>
<?php $__env->startSection('container'); ?>

<ul class="list">
    <?php $__currentLoopData = $requirements['requirements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extention => $enabled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list__item <?php if($enabled): ?> success <?php else: ?> error <?php endif; ?>"><?php echo e($extention); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php if(!isset($requirements['errors'])): ?>
    <div class="buttons">
        <a class="button" href="<?php echo e(route('LaravelInstaller::permissions')); ?>">
        <?php echo e(trans('messages.install.next')); ?>

        </a>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>