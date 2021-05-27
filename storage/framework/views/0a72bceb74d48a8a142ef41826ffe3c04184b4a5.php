<?php $__env->startSection('page'); ?>
    Main
<?php $__env->stopSection(); ?>


<?php $__env->startSection('table'); ?>

    <?php if($Users && $Games): ?>
    <table>
        <tr>
            <th>Username</th>
            <th>Game</th>
        </tr>
        <?php for($i = 0; $i < count($Users); $i++): ?>
        <tr>
            <td><a href="/<?php echo e($Users[$i]->id); ?>/UserPage"><?php echo e($Users[$i]->name); ?></a></td>
            <td><a href="/<?php echo e($Games[$i]->id); ?>/GamePage"><?php echo e($Games[$i]->name); ?></a></td>
        </tr>
        <?php endfor; ?>
    </table>
    <?php endif; ?>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/main.blade.php ENDPATH**/ ?>