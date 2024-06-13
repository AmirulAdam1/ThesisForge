<section>
    <header>
        <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
            <?php echo e(__('Profile Information')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            <?php echo e(__("Update your account's profile information and email address.")); ?>

        </p>
    </header>
    
    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>
    
    <form method="POST" action="<?php echo e(route('users.update', $user)); ?>" class="mt-6 space-y-6"
    enctype="multipart/form-data" x-data="{ show: true }">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>         
    
        <div>
            <img src="<?php echo e($user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('/images/no-image-available.jpg')); ?>" 
            alt="" class="w-48 mr-6 mb-2">
            <label for="profile_photo" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Profile Photo</label>
            <input type="file" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="profile_photo">
            <?php $__errorArgs = ['profile_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="mt-2 text-sm text-red-600 dark:text-red-400 space-y-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-6">
            <label for="name" class="block text-lg mb-2">Full Name</label>
            <input value="<?php echo e(old('name', $user->name)); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="name" placeholder="Example: Abu Bakar Omar"/>
            <?php $__errorArgs = ['name'];
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
            <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                Communication Information
            </h2>
        </div>
        <div class="mb-6">
            <label for="phone" class="block text-lg mb-2">Phone No.</label>
            <input value="<?php echo e(old('phone', $user->phone)); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="phone" placeholder="Example: 019-7963122"/>
            <?php $__errorArgs = ['phone'];
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
            <label for="email" class="block text-lg mb-2">Email</label>
            <input value="<?php echo e(old('email', $user->email)); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="email" placeholder="Example: abubakar@email.com"/>
            <?php $__errorArgs = ['email'];
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
            <label for="address" class="block text-lg mb-2">Address</label>
            <?php if($user->role == 'staff'): ?>
                <input value="<?php echo e(old('address', $user->staff->address)); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="address" placeholder="Example: No 1, Jalan Stream 1, Taman Sea"/>
            <?php else: ?>
                <input value="<?php echo e(old('address', $user->mentor->address)); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="address" placeholder="Example: No 1, Jalan Stream 1, Taman Sea"/>
            <?php endif; ?>
            <?php $__errorArgs = ['address'];
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

        <div class="flex items-center gap-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent 
            rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 
            dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 
            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Save
            </button>
            <?php if(session('status') === 'profile-updated'): ?>
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                ><?php echo e(__('Saved.')); ?></p>
            <?php endif; ?>
        </div>
    </form>
</section><?php /**PATH C:\Users\Adam\Downloads\WisdomWare-main\resources\views/users/partials/others-profile.blade.php ENDPATH**/ ?>