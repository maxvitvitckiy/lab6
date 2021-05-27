<?php $__env->startSection('page'); ?>
    Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('add'); ?>
    <form method="POST" style="margin: auto">
        <?php echo csrf_field(); ?>
        <input type="text" name="id" placeholder="Username" autocomplete="off">
        <button type="submit">Search</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/SearchUser.blade.php ENDPATH**/ ?>