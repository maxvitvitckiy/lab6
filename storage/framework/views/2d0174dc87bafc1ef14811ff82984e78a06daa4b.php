<?php $__env->startSection('page'); ?>
    User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
    <?php if($user && $game): ?>
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Description</th>
                <th>Game</th>
            </tr>
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td><?php echo e($user->description); ?></td>
                <td><a href="/<?php echo e($game->id); ?>/GamePage"><?php echo e($game->name); ?></a></td>
            </tr>
            <?php endif; ?>
        </table>
        <a href="/" class="button">Back to main</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/UserPage.blade.php ENDPATH**/ ?>