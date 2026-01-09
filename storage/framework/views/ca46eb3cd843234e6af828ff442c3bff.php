<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('app.name', 'Eyetec Computers')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-50 text-gray-900">

    
    <?php echo $__env->make('components.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main class="min-h-screen">
        <?php echo e($slot); ?>

    </main>

    
    <footer class="bg-white border-t mt-16">
        <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-gray-500 text-center">
            © <?php echo e(date('Y')); ?> Eyetec Computers. All rights reserved.
        </div>
    </footer>

</body>

</html><?php /**PATH C:\eyetec-new\eyetec\resources\views/layouts/guest.blade.php ENDPATH**/ ?>