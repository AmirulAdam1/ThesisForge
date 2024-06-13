<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="mx-4">
        <div
            class="bg-gray-50 dark:bg-gray-800 p-10 rounded-md shadow-md max-w-lg lg:max-w-4xl mx-auto mt-12"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Add An Expert
                </h2>
                <p class="mb-4">Fill in an expert details</p>
            </header>

            <form method="POST" action="<?php echo e(route('experts.saveExpert')); ?>" class="grid grid-cols-2 gap-2"
            enctype="multipart/form-data" x-data="{ show: true }">
                <?php echo csrf_field(); ?>

                <div class="mb-6">
                    <label for="platinum_id" class="block text-lg mb-2">Your ID</label>
                    <input value="<?php echo e(old('platinum_id')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="platinum_id" placeholder="Example: 1"/>
                    <?php $__errorArgs = ['platinum_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Expert Information
                    </h2>
                </div>                          
                <div class="mb-6">
                    <label for="expert_name" class="block text-lg mb-2">Full Name</label>
                    <input value="<?php echo e(old('expert_name')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_name" placeholder="Example: Abu Bakar Omar"/>
                    <?php $__errorArgs = ['expert_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-6">
                    <label for="domain_name" class="block text-lg mb-2">Domain Name</label>
                    <input value="<?php echo e(old('domain_name')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="domain_name" placeholder="Example: Computer Science"/>
                    <?php $__errorArgs = ['domain_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-6">
                    <label for="expert_university" class="block text-lg mb-2">Expert University</label>
                    <input value="<?php echo e(old('expert_university')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_university" placeholder="Example: UMPSA"/>
                    <?php $__errorArgs = ['expert_university'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Communication Information
                    </h2>
                </div>
                <div class="mb-6">
                    <label for="expert_phone_number" class="block text-lg mb-2">Phone No.</label>
                    <input value="<?php echo e(old('expert_phone_number')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_phone_number" placeholder="Example: 019-7963122"/>
                    <?php $__errorArgs = ['expert_phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-6">
                    <label for="expert_email" class="block text-lg mb-2">Email</label>
                    <input value="<?php echo e(old('expert_email')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_email" placeholder="Example: abubakar@email.com"/>
                    <?php $__errorArgs = ['expert_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>      

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Confirmation
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <legend class="text-lg mb-2">Consent</legend>                          
                    <input type="checkbox" name="consent" value="1" <?php echo e(old('consent') == '1' ? 'checked' : ''); ?>>
                    <label for="consent" class="font-bold">I hereby confirm that the details I have filled on this application are true and valid.</label>
                    <?php $__errorArgs = ['consent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-6">
                    <label for="application_date" class="block text-lg mb-2">Date Of Addition</label>
                    <input value="<?php echo e(old('application_date')); ?>" type="date" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="application_date"/>
                    <?php $__errorArgs = ['application_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-orange-400 text-xs mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="mb-6 col-span-2 ml-auto">
                    <button
                        class="bg-cyan-600 text-white rounded-lg shadow-sm py-2 px-4 hover:bg-cyan-400"
                    >
                        Add
                    </button>

                    <a href="/" class="ml-4"> Back </a>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\Adam\Downloads\WisdomWare-main\resources\views/experts/addOwnExpert.blade.php ENDPATH**/ ?>