<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo e(elixir('css/app.css')); ?>">

	<?php echo $__env->yieldContent('header'); ?>
</head>

<body>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->yieldContent('footer'); ?>

</body>
</html>