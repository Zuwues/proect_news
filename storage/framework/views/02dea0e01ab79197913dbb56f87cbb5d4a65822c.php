<?php $__env->startSection('content'); ?>
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">


                <div class="container3">
                <h1 class="named">Создать пост</h1>
                <form action="<?php echo e(route('posts.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <label for="fname">Название</label>
                    <input class="text34" id="title" type="text" name="title" placeholder="Ваше название..">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    

                    <label for="subject">Описание</label>
                    <textarea class="textar" id="description" name="description" placeholder="Описание.." style="height:200px"></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <input class="subm" type="submit" value="Создать">
                </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\example-app\resources\views/posts/create.blade.php ENDPATH**/ ?>