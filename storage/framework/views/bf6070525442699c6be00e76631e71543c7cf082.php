<?php $__env->startSection('page'); ?>
    Продукт
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
    <?php if($product): ?>
        <table>
            <tr>
                <th>Назва</th>
                <th>Опис</th>
                <th>Ціна</th>
            </tr>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
            </tr>
            <?php endif; ?>
        </table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programs\wamp\apache2\htdocs\Laravel\Laravel\resources\views/ProductPage.blade.php ENDPATH**/ ?>