<?php echo $__env->make('common.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if(!isset($exception)): ?>
	<?php if(Route::current()->uri() != 'api_payments/book/{id?}'): ?> 
	 	<?php if(Session::get('get_token')=='' && !isset($is_mobile)): ?>
	   		<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 	<?php endif; ?>
	<?php endif; ?>
<?php else: ?>   
        <?php if(Session::get('get_token')==''): ?>
   			<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   		<?php endif; ?>
<?php endif; ?>

<?php echo $__env->yieldContent('main'); ?>

<?php if(!isset($exception)): ?>
	<?php if(Route::current()->uri() != 'payments/book/{id?}' && Route::current()->uri() != 'reservation/receipt'  && Route::current()->uri() != 'reservation/itinerary' && Route::current()->uri() != 'api_payments/book/{id?}'): ?>
	    <?php if(Session::get('get_token')=='' && !isset($is_mobile)): ?>
		   	<?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
    <?php if(Session::get('get_token')==''): ?>
		<?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
<?php endif; ?>

<?php echo $__env->make('common.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>