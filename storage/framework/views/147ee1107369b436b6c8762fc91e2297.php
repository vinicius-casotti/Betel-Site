<!DOCTYPE html>
    <html lang="en">

    <head>
        
        <?php echo $__env->make('layouts.partials/title-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('css'); ?>
        <?php echo $__env->make('layouts.partials/head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </head>

    <body>

        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make('layouts.partials/back-to-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.partials/script-file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html><?php /**PATH C:\Users\GustavoBueno\Betel-Web\resources\views/layouts/base.blade.php ENDPATH**/ ?>