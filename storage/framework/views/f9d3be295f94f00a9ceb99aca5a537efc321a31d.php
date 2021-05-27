

<?php $__env->startSection('page'); ?>
    Game
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
    <?php if($Users && $game): ?>
        <a style="color: green; font-size: 200%;">Game: <?php echo e($game->name); ?></a>
        <table>
            <tr>
                <th>User</th>
            </tr>
            <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/<?php echo e($user->id); ?>/UserPage"><?php echo e($user->name); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </table>
        <a href="/" class="button">Back to main</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/GamePage.blade.php ENDPATH**/ ?>