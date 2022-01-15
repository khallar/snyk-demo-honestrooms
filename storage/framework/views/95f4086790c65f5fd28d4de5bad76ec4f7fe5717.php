<?php $__env->startSection('title', trans('messages.install.settings.title')); ?>
<?php $__env->startSection('container'); ?>
<?php echo Form::open(['url'=>route('LaravelInstaller::database'),'method'=>'post']); ?>

<ul class="list">
    <li class="list__item list__item--settings">
        Site Name<em class="error">*</em>
        <?php echo Form::text('site_name'); ?>

    <?php if($errors->has('site_name')): ?> <span class="error"><?php echo e($errors->first('site_name')); ?></span> <?php endif; ?>
    </li>
    <li class="list__item list__item--settings">
        Admin Username<em class="error">*</em>
        <?php echo Form::text('username'); ?>

    <?php if($errors->has('username')): ?> <span class="error"><?php echo e($errors->first('username')); ?></span> <?php endif; ?>
    </li>
    <li class="list__item list__item--settings">
        Admin Email<em class="error">*</em>
        <?php echo Form::email('email'); ?>

    <?php if($errors->has('email')): ?> <span class="error"><?php echo e($errors->first('email')); ?></span> <?php endif; ?>
    </li>
    <li class="list__item list__item--settings">
        Admin Password<em class="error">*</em>
        <?php echo Form::text('password'); ?>

    <?php if($errors->has('password')): ?> <span class="error"><?php echo e($errors->first('password')); ?></span> <?php endif; ?>
    </li>
</ul>
<div class="buttons">
    <button class="button" type="submit">
        <?php echo e(trans('messages.install.next')); ?>

    </button>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.installer.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>