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
                    Register A Platinum
                </h2>
                <p class="mb-4">Fill in a platinum details</p>
            </header>

            <form method="POST" action="<?php echo e(route('users.store')); ?>" class="grid grid-cols-2 gap-2"
            enctype="multipart/form-data" x-data="{ show: true }">
                <?php echo csrf_field(); ?>
                <div class="mb-6 col-span-2">
                    <label for="registration_type" class="block text-lg mb-2">Type Of Registration</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="registration_type">
                        <option disabled <?php echo e(old('registration_type') == '' ? 'selected' : ''); ?>>select</option>
                        <option value="New" <?php echo e(old('registration_type') == 'New' ? 'selected' : ''); ?>>New</option>
                        <option value="Renewal" <?php echo e(old('registration_type') == 'Renewal' ? 'selected' : ''); ?>>Renewal</option>
                        <option value="Upgrade(Premier)" <?php echo e(old('registration_type') == 'Upgrade(Premier)' ? 'selected' : ''); ?>>Upgrade(Premier)</option>
                        <option value="Downgrade(Elite)" <?php echo e(old('registration_type') == 'Downgrade(Elite)' ? 'selected' : ''); ?>>Downgrade(Elite)</option>
                        <option value="Ala Carte" <?php echo e(old('registration_type') == 'Ala Carte' ? 'selected' : ''); ?>>Ala Carte</option>
                    </select>
                    <?php $__errorArgs = ['registration_type'];
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
                        Platinum Information
                    </h2>
                </div>                          
                <div class="mb-6">
                    <label for="title" class="block text-lg mb-2">Title</label>
                    <input value="<?php echo e(old('title')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="title" placeholder="Example: Master"/>
                    <?php $__errorArgs = ['title'];
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
                    <label for="name" class="block text-lg mb-2">Full Name</label>
                    <input value="<?php echo e(old('name')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="name" placeholder="Example: Abu Bakar Omar"/>
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
                <div class="mb-6">
                    <label for="identity_card" class="block text-lg mb-2">Identity Card No.</label>
                    <input value="<?php echo e(old('identity_card')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="identity_card" placeholder="Example: 101112068764"/>
                    <?php $__errorArgs = ['identity_card'];
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
                    <label for="gender" class="block text-lg mb-2">Gender</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="gender">
                        <option disabled <?php echo e(old('gender') == '' ? 'selected' : ''); ?>>select</option>
                        <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                        <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                    </select>
                    <?php $__errorArgs = ['gender'];
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
                    <label for="religion" class="block text-lg mb-2">Religion</label>
                    <input value="<?php echo e(old('religion')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="religion" placeholder="Example: Islam"/>
                    <?php $__errorArgs = ['religion'];
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
                    <label for="race" class="block text-lg mb-2">Race</label>
                    <input value="<?php echo e(old('race')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="race" placeholder="Example: Malay"/>
                    <?php $__errorArgs = ['race'];
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
                    <label for="citizenship" class="block text-lg mb-2">Citizenship</label>
                    <input value="<?php echo e(old('citizenship')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="citizenship" placeholder="Example: Malaysian"/>
                    <?php $__errorArgs = ['citizenship'];
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
                <div class="mb-6 col-span-2">
                    <label for="profile_photo" class="block text-lg mb-2">Profile Photo</label>
                    <input type="file" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="profile_photo"/>
                    <?php $__errorArgs = ['profile_photo'];
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
                <div class="mb-6 col-span-2">
                    <label for="address" class="block text-lg mb-2">Address</label>
                    <input value="<?php echo e(old('address')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="address" placeholder="Example: No 1, Jalan Stream 1, Taman Sea"/>
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
                <div class="mb-6">
                    <label for="city" class="block text-lg mb-2">City</label>
                    <input value="<?php echo e(old('city')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="city" placeholder="Example: Pekan"/>
                    <?php $__errorArgs = ['city'];
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
                    <label for="state" class="block text-lg mb-2">State / Province / Region</label>
                    <input value="<?php echo e(old('state')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="state" placeholder="Example: Pahang"/>
                    <?php $__errorArgs = ['state'];
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
                    <label for="postcode" class="block text-lg mb-2">ZIP / Postal Code</label>
                    <input value="<?php echo e(old('postcode')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="postcode" placeholder="Example: 26600"/>
                    <?php $__errorArgs = ['postcode'];
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
                    <label for="country" class="block text-lg mb-2">Country</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="country">
                        <option disabled <?php echo e(old('country') == "" ? "selected" : ""); ?>>select</option>
                        <option value="Afghanistan" <?php echo e(old('country') == "Afghanistan" ? "selected" : ""); ?>>Afghanistan</option>
                        <option value="Albania" <?php echo e(old('country') == "Albania" ? "selected" : ""); ?>>Albania</option>
                        <option value="Algeria" <?php echo e(old('country') == "Algeria" ? "selected" : ""); ?>>Algeria</option>
                        <option value="American Samoa" <?php echo e(old('country') == "American Samoa" ? "selected" : ""); ?>>American Samoa</option>
                        <option value="Andorra" <?php echo e(old('country') == "Andorra" ? "selected" : ""); ?>>Andorra</option>
                        <option value="Angola" <?php echo e(old('country') == "Angola" ? "selected" : ""); ?>>Angola</option>
                        <option value="Anguilla" <?php echo e(old('country') == "Anguilla" ? "selected" : ""); ?>>Anguilla</option>
                        <option value="Antarctica" <?php echo e(old('country') == "Antarctica" ? "selected" : ""); ?>>Antarctica</option>
                        <option value="Antigua and Barbuda" <?php echo e(old('country') == "Antigua and Barbuda" ? "selected" : ""); ?>>Antigua and Barbuda</option>
                        <option value="Argentina" <?php echo e(old('country') == "Argentina" ? "selected" : ""); ?>>Argentina</option>
                        <option value="Armenia" <?php echo e(old('country') == "Armenia" ? "selected" : ""); ?>>Armenia</option>
                        <option value="Aruba" <?php echo e(old('country') == "Aruba" ? "selected" : ""); ?>>Aruba</option>
                        <option value="Australia" <?php echo e(old('country') == "Australia" ? "selected" : ""); ?>>Australia</option>
                        <option value="Austria" <?php echo e(old('country') == "Austria" ? "selected" : ""); ?>>Austria</option>
                        <option value="Azerbaijan" <?php echo e(old('country') == "Azerbaijan" ? "selected" : ""); ?>>Azerbaijan</option>
                        <option value="Bahamas" <?php echo e(old('country') == "Bahamas" ? "selected" : ""); ?>>Bahamas</option>
                        <option value="Bahrain" <?php echo e(old('country') == "Bahrain" ? "selected" : ""); ?>>Bahrain</option>
                        <option value="Bangladesh" <?php echo e(old('country') == "Bangladesh" ? "selected" : ""); ?>>Bangladesh</option>
                        <option value="Barbados" <?php echo e(old('country') == "Barbados" ? "selected" : ""); ?>>Barbados</option>
                        <option value="Belarus" <?php echo e(old('country') == "Belarus" ? "selected" : ""); ?>>Belarus</option>
                        <option value="Belgium" <?php echo e(old('country') == "Belgium" ? "selected" : ""); ?>>Belgium</option>
                        <option value="Belize" <?php echo e(old('country') == "Belize" ? "selected" : ""); ?>>Belize</option>
                        <option value="Benin" <?php echo e(old('country') == "Benin" ? "selected" : ""); ?>>Benin</option>
                        <option value="Bermuda" <?php echo e(old('country') == "Bermuda" ? "selected" : ""); ?>>Bermuda</option>
                        <option value="Bhutan" <?php echo e(old('country') == "Bhutan" ? "selected" : ""); ?>>Bhutan</option>
                        <option value="Bolivia" <?php echo e(old('country') == "Bolivia" ? "selected" : ""); ?>>Bolivia</option>
                        <option value="Bonaire, Sint Eustatius and Saba" <?php echo e(old('country') == "Bonaire, Sint Eustatius and Saba" ? "selected" : ""); ?>>Bonaire, Sint Eustatius and Saba</option>
                        <option value="Bosnia and Herzegovina" <?php echo e(old('country') == "Bosnia and Herzegovina" ? "selected" : ""); ?>>Bosnia and Herzegovina</option>
                        <option value="Botswana" <?php echo e(old('country') == "Botswana" ? "selected" : ""); ?>>Botswana</option>
                        <option value="Bouvet Island" <?php echo e(old('country') == "Bouvet Island" ? "selected" : ""); ?>>Bouvet Island</option>
                        <option value="Brazil" <?php echo e(old('country') == "Brazil" ? "selected" : ""); ?>>Brazil</option>
                        <option value="British Indian Ocean Territory" <?php echo e(old('country') == "British Indian Ocean Territory" ? "selected" : ""); ?>>British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam" <?php echo e(old('country') == "Brunei Darussalam" ? "selected" : ""); ?>>Brunei Darussalam</option>
                        <option value="Bulgaria" <?php echo e(old('country') == "Bulgaria" ? "selected" : ""); ?>>Bulgaria</option>
                        <option value="Burkina Faso" <?php echo e(old('country') == "Burkina Faso" ? "selected" : ""); ?>>Burkina Faso</option>
                        <option value="Burundi" <?php echo e(old('country') == "Burundi" ? "selected" : ""); ?>>Burundi</option>
                        <option value="Cabo Verde" <?php echo e(old('country') == "Cabo Verde" ? "selected" : ""); ?>>Cabo Verde</option>
                        <option value="Cambodia" <?php echo e(old('country') == "Cambodia" ? "selected" : ""); ?>>Cambodia</option>
                        <option value="Cameroon" <?php echo e(old('country') == "Cameroon" ? "selected" : ""); ?>>Cameroon</option>
                        <option value="Canada" <?php echo e(old('country') == "Canada" ? "selected" : ""); ?>>Canada</option>
                        <option value="Cayman Islands" <?php echo e(old('country') == "Cayman Islands" ? "selected" : ""); ?>>Cayman Islands</option>
                        <option value="Central African Republic" <?php echo e(old('country') == "Central African Republic" ? "selected" : ""); ?>>Central African Republic</option>
                        <option value="Chad" <?php echo e(old('country') == "Chad" ? "selected" : ""); ?>>Chad</option>
                        <option value="Chile" <?php echo e(old('country') == "Chile" ? "selected" : ""); ?>>Chile</option>
                        <option value="China" <?php echo e(old('country') == "China" ? "selected" : ""); ?>>China</option>
                        <option value="Christmas Island" <?php echo e(old('country') == "Christmas Island" ? "selected" : ""); ?>>Christmas Island</option>
                        <option value="Cocos Islands" <?php echo e(old('country') == "Cocos Islands" ? "selected" : ""); ?>>Cocos Islands</option>
                        <option value="Colombia" <?php echo e(old('country') == "Colombia" ? "selected" : ""); ?>>Colombia</option>
                        <option value="Comoros" <?php echo e(old('country') == "Comoros" ? "selected" : ""); ?>>Comoros</option>
                        <option value="Congo" <?php echo e(old('country') == "Congo" ? "selected" : ""); ?>>Congo</option>
                        <option value="Congo, Democratic Republic of the" <?php echo e(old('country') == "Congo, Democratic Republic of the" ? "selected" : ""); ?>>Congo, Democratic Republic of the</option>
                        <option value="Cook Islands" <?php echo e(old('country') == "Cook Islands" ? "selected" : ""); ?>>Cook Islands</option>
                        <option value="Costa Rica" <?php echo e(old('country') == "Costa Rica" ? "selected" : ""); ?>>Costa Rica</option>
                        <option value="Croatia" <?php echo e(old('country') == "Croatia" ? "selected" : ""); ?>>Croatia</option>
                        <option value="Cuba" <?php echo e(old('country') == "Cuba" ? "selected" : ""); ?>>Cuba</option>
                        <option value="Curaçao" <?php echo e(old('country') == "Curaçao" ? "selected" : ""); ?>>Curaçao</option>
                        <option value="Cyprus" <?php echo e(old('country') == "Cyprus" ? "selected" : ""); ?>>Cyprus</option>
                        <option value="Czechia" <?php echo e(old('country') == "Czechia" ? "selected" : ""); ?>>Czechia</option>
                        <option value="Côte d'Ivoire" <?php echo e(old('country') == "Côte d'Ivoire" ? "selected" : ""); ?>>Côte d'Ivoire</option>
                        <option value="Denmark" <?php echo e(old('country') == "Denmark" ? "selected" : ""); ?>>Denmark</option>
                        <option value="Djibouti" <?php echo e(old('country') == "Djibouti" ? "selected" : ""); ?>>Djibouti</option>
                        <option value="Dominica" <?php echo e(old('country') == "Dominica" ? "selected" : ""); ?>>Dominica</option>
                        <option value="Dominican Republic" <?php echo e(old('country') == "Dominican Republic" ? "selected" : ""); ?>>Dominican Republic</option>
                        <option value="Ecuador" <?php echo e(old('country') == "Ecuador" ? "selected" : ""); ?>>Ecuador</option>
                        <option value="Egypt" <?php echo e(old('country') == "Egypt" ? "selected" : ""); ?>>Egypt</option>
                        <option value="El Salvador" <?php echo e(old('country') == "El Salvador" ? "selected" : ""); ?>>El Salvador</option>
                        <option value="Equatorial Guinea" <?php echo e(old('country') == "Equatorial Guinea" ? "selected" : ""); ?>>Equatorial Guinea</option>
                        <option value="Eritrea" <?php echo e(old('country') == "Eritrea" ? "selected" : ""); ?>>Eritrea</option>
                        <option value="Estonia" <?php echo e(old('country') == "Estonia" ? "selected" : ""); ?>>Estonia</option>
                        <option value="Eswatini" <?php echo e(old('country') == "Eswatini" ? "selected" : ""); ?>>Eswatini</option>
                        <option value="Ethiopia" <?php echo e(old('country') == "Ethiopia" ? "selected" : ""); ?>>Ethiopia</option>
                        <option value="Falkland Islands" <?php echo e(old('country') == "Falkland Islands" ? "selected" : ""); ?>>Falkland Islands</option>
                        <option value="Faroe Islands" <?php echo e(old('country') == "Faroe Islands" ? "selected" : ""); ?>>Faroe Islands</option>
                        <option value="Fiji" <?php echo e(old('country') == "Fiji" ? "selected" : ""); ?>>Fiji</option>
                        <option value="Finland" <?php echo e(old('country') == "Finland" ? "selected" : ""); ?>>Finland</option>
                        <option value="France" <?php echo e(old('country') == "France" ? "selected" : ""); ?>>France</option>
                        <option value="French Guiana" <?php echo e(old('country') == "French Guiana" ? "selected" : ""); ?>>French Guiana</option>
                        <option value="French Polynesia" <?php echo e(old('country') == "French Polynesia" ? "selected" : ""); ?>>French Polynesia</option>
                        <option value="French Southern Territories" <?php echo e(old('country') == "French Southern Territories" ? "selected" : ""); ?>>French Southern Territories</option>
                        <option value="Gabon" <?php echo e(old('country') == "Gabon" ? "selected" : ""); ?>>Gabon</option>
                        <option value="Gambia" <?php echo e(old('country') == "Gambia" ? "selected" : ""); ?>>Gambia</option>
                        <option value="Georgia" <?php echo e(old('country') == "Georgia" ? "selected" : ""); ?>>Georgia</option>
                        <option value="Germany" <?php echo e(old('country') == "Germany" ? "selected" : ""); ?>>Germany</option>
                        <option value="Ghana" <?php echo e(old('country') == "Ghana" ? "selected" : ""); ?>>Ghana</option>
                        <option value="Gibraltar" <?php echo e(old('country') == "Gibraltar" ? "selected" : ""); ?>>Gibraltar</option>
                        <option value="Greece" <?php echo e(old('country') == "Greece" ? "selected" : ""); ?>>Greece</option>
                        <option value="Greenland" <?php echo e(old('country') == "Greenland" ? "selected" : ""); ?>>Greenland</option>
                        <option value="Grenada" <?php echo e(old('country') == "Grenada" ? "selected" : ""); ?>>Grenada</option>
                        <option value="Guadeloupe" <?php echo e(old('country') == "Guadeloupe" ? "selected" : ""); ?>>Guadeloupe</option>
                        <option value="Guam" <?php echo e(old('country') == "Guam" ? "selected" : ""); ?>>Guam</option>
                        <option value="Guatemala" <?php echo e(old('country') == "Guatemala" ? "selected" : ""); ?>>Guatemala</option>
                        <option value="Guernsey" <?php echo e(old('country') == "Guernsey" ? "selected" : ""); ?>>Guernsey</option>
                        <option value="Guinea" <?php echo e(old('country') == "Guinea" ? "selected" : ""); ?>>Guinea</option>
                        <option value="Guinea-Bissau" <?php echo e(old('country') == "Guinea-Bissau" ? "selected" : ""); ?>>Guinea-Bissau</option>
                        <option value="Guyana" <?php echo e(old('country') == "Guyana" ? "selected" : ""); ?>>Guyana</option>
                        <option value="Haiti" <?php echo e(old('country') == "Haiti" ? "selected" : ""); ?>>Haiti</option>
                        <option value="Heard Island and McDonald Islands" <?php echo e(old('country') == "Heard Island and McDonald Islands" ? "selected" : ""); ?>>Heard Island and McDonald Islands</option>
                        <option value="Holy See" <?php echo e(old('country') == "Holy See" ? "selected" : ""); ?>>Holy See</option>
                        <option value="Honduras" <?php echo e(old('country') == "Honduras" ? "selected" : ""); ?>>Honduras</option>
                        <option value="Hong Kong" <?php echo e(old('country') == "Hong Kong" ? "selected" : ""); ?>>Hong Kong</option>
                        <option value="Hungary" <?php echo e(old('country') == "Hungary" ? "selected" : ""); ?>>Hungary</option>
                        <option value="Iceland" <?php echo e(old('country') == "Iceland" ? "selected" : ""); ?>>Iceland</option>
                        <option value="India" <?php echo e(old('country') == "India" ? "selected" : ""); ?>>India</option>
                        <option value="Indonesia" <?php echo e(old('country') == "Indonesia" ? "selected" : ""); ?>>Indonesia</option>
                        <option value="Iran" <?php echo e(old('country') == "Iran" ? "selected" : ""); ?>>Iran</option>
                        <option value="Iraq" <?php echo e(old('country') == "Iraq" ? "selected" : ""); ?>>Iraq</option>
                        <option value="Ireland" <?php echo e(old('country') == "Ireland" ? "selected" : ""); ?>>Ireland</option>
                        <option value="Isle of Man" <?php echo e(old('country') == "Isle of Man" ? "selected" : ""); ?>>Isle of Man</option>
                        <option value="Israel" <?php echo e(old('country') == "Israel" ? "selected" : ""); ?>>Israel</option>
                        <option value="Italy" <?php echo e(old('country') == "Italy" ? "selected" : ""); ?>>Italy</option>
                        <option value="Jamaica" <?php echo e(old('country') == "Jamaica" ? "selected" : ""); ?>>Jamaica</option>
                        <option value="Japan" <?php echo e(old('country') == "Japan" ? "selected" : ""); ?>>Japan</option>
                        <option value="Jersey" <?php echo e(old('country') == "Jersey" ? "selected" : ""); ?>>Jersey</option>
                        <option value="Jordan" <?php echo e(old('country') == "Jordan" ? "selected" : ""); ?>>Jordan</option>
                        <option value="Kazakhstan" <?php echo e(old('country') == "Kazakhstan" ? "selected" : ""); ?>>Kazakhstan</option>
                        <option value="Kenya" <?php echo e(old('country') == "Kenya" ? "selected" : ""); ?>>Kenya</option>
                        <option value="Kiribati" <?php echo e(old('country') == "Kiribati" ? "selected" : ""); ?>>Kiribati</option>
                        <option value="Korea, Democratic People's Republic of" <?php echo e(old('country') == "Korea, Democratic People's Republic of" ? "selected" : ""); ?>>Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of" <?php echo e(old('country') == "Korea, Republic of" ? "selected" : ""); ?>>Korea, Republic of</option>
                        <option value="Kuwait" <?php echo e(old('country') == "Kuwait" ? "selected" : ""); ?>>Kuwait</option>
                        <option value="Kyrgyzstan" <?php echo e(old('country') == "Kyrgyzstan" ? "selected" : ""); ?>>Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic" <?php echo e(old('country') == "Lao People's Democratic Republic" ? "selected" : ""); ?>>Lao People's Democratic Republic</option>
                        <option value="Latvia" <?php echo e(old('country') == "Latvia" ? "selected" : ""); ?>>Latvia</option>
                        <option value="Lebanon" <?php echo e(old('country') == "Lebanon" ? "selected" : ""); ?>>Lebanon</option>
                        <option value="Lesotho" <?php echo e(old('country') == "Lesotho" ? "selected" : ""); ?>>Lesotho</option>
                        <option value="Liberia" <?php echo e(old('country') == "Liberia" ? "selected" : ""); ?>>Liberia</option>
                        <option value="Libya" <?php echo e(old('country') == "Libya" ? "selected" : ""); ?>>Libya</option>
                        <option value="Liechtenstein" <?php echo e(old('country') == "Liechtenstein" ? "selected" : ""); ?>>Liechtenstein</option>
                        <option value="Lithuania" <?php echo e(old('country') == "Lithuania" ? "selected" : ""); ?>>Lithuania</option>
                        <option value="Luxembourg" <?php echo e(old('country') == "Luxembourg" ? "selected" : ""); ?>>Luxembourg</option>
                        <option value="Macao" <?php echo e(old('country') == "Macao" ? "selected" : ""); ?>>Macao</option>
                        <option value="Madagascar" <?php echo e(old('country') == "Madagascar" ? "selected" : ""); ?>>Madagascar</option>
                        <option value="Malawi" <?php echo e(old('country') == "Malawi" ? "selected" : ""); ?>>Malawi</option>
                        <option value="Malaysia" <?php echo e(old('country') == "Malaysia" ? "selected" : ""); ?>>Malaysia</option>
                        <option value="Maldives" <?php echo e(old('country') == "Maldives" ? "selected" : ""); ?>>Maldives</option>
                        <option value="Mali" <?php echo e(old('country') == "Mali" ? "selected" : ""); ?>>Mali</option>
                        <option value="Malta" <?php echo e(old('country') == "Malta" ? "selected" : ""); ?>>Malta</option>
                        <option value="Marshall Islands" <?php echo e(old('country') == "Marshall Islands" ? "selected" : ""); ?>>Marshall Islands</option>
                        <option value="Martinique" <?php echo e(old('country') == "Martinique" ? "selected" : ""); ?>>Martinique</option>
                        <option value="Mauritania" <?php echo e(old('country') == "Mauritania" ? "selected" : ""); ?>>Mauritania</option>
                        <option value="Mauritius" <?php echo e(old('country') == "Mauritius" ? "selected" : ""); ?>>Mauritius</option>
                        <option value="Mayotte" <?php echo e(old('country') == "Mayotte" ? "selected" : ""); ?>>Mayotte</option>
                        <option value="Mexico" <?php echo e(old('country') == "Mexico" ? "selected" : ""); ?>>Mexico</option>
                        <option value="Micronesia" <?php echo e(old('country') == "Micronesia" ? "selected" : ""); ?>>Micronesia</option>
                        <option value="Moldova" <?php echo e(old('country') == "Moldova" ? "selected" : ""); ?>>Moldova</option>
                        <option value="Monaco" <?php echo e(old('country') == "Monaco" ? "selected" : ""); ?>>Monaco</option>
                        <option value="Mongolia" <?php echo e(old('country') == "Mongolia" ? "selected" : ""); ?>>Mongolia</option>
                        <option value="Montenegro" <?php echo e(old('country') == "Montenegro" ? "selected" : ""); ?>>Montenegro</option>
                        <option value="Montserrat" <?php echo e(old('country') == "Montserrat" ? "selected" : ""); ?>>Montserrat</option>
                        <option value="Morocco" <?php echo e(old('country') == "Morocco" ? "selected" : ""); ?>>Morocco</option>
                        <option value="Mozambique" <?php echo e(old('country') == "Mozambique" ? "selected" : ""); ?>>Mozambique</option>
                        <option value="Myanmar" <?php echo e(old('country') == "Myanmar" ? "selected" : ""); ?>>Myanmar</option>
                        <option value="Namibia" <?php echo e(old('country') == "Namibia" ? "selected" : ""); ?>>Namibia</option>
                        <option value="Nauru" <?php echo e(old('country') == "Nauru" ? "selected" : ""); ?>>Nauru</option>
                        <option value="Nepal" <?php echo e(old('country') == "Nepal" ? "selected" : ""); ?>>Nepal</option>
                        <option value="Netherlands" <?php echo e(old('country') == "Netherlands" ? "selected" : ""); ?>>Netherlands</option>
                        <option value="New Caledonia" <?php echo e(old('country') == "New Caledonia" ? "selected" : ""); ?>>New Caledonia</option>
                        <option value="New Zealand" <?php echo e(old('country') == "New Zealand" ? "selected" : ""); ?>>New Zealand</option>
                        <option value="Nicaragua" <?php echo e(old('country') == "Nicaragua" ? "selected" : ""); ?>>Nicaragua</option>
                        <option value="Niger" <?php echo e(old('country') == "Niger" ? "selected" : ""); ?>>Niger</option>
                        <option value="Nigeria" <?php echo e(old('country') == "Nigeria" ? "selected" : ""); ?>>Nigeria</option>
                        <option value="Niue" <?php echo e(old('country') == "Niue" ? "selected" : ""); ?>>Niue</option>
                        <option value="Norfolk Island" <?php echo e(old('country') == "Norfolk Island" ? "selected" : ""); ?>>Norfolk Island</option>
                        <option value="North Macedonia" <?php echo e(old('country') == "North Macedonia" ? "selected" : ""); ?>>North Macedonia</option>
                        <option value="Northern Mariana Islands" <?php echo e(old('country') == "Northern Mariana Islands" ? "selected" : ""); ?>>Northern Mariana Islands</option>
                        <option value="Norway" <?php echo e(old('country') == "Norway" ? "selected" : ""); ?>>Norway</option>
                        <option value="Oman" <?php echo e(old('country') == "Oman" ? "selected" : ""); ?>>Oman</option>
                        <option value="Pakistan" <?php echo e(old('country') == "Pakistan" ? "selected" : ""); ?>>Pakistan</option>
                        <option value="Palau" <?php echo e(old('country') == "Palau" ? "selected" : ""); ?>>Palau</option>
                        <option value="Palestine, State of" <?php echo e(old('country') == "Palestine, State of" ? "selected" : ""); ?>>Palestine, State of</option>
                        <option value="Panama" <?php echo e(old('country') == "Panama" ? "selected" : ""); ?>>Panama</option>
                        <option value="Papua New Guinea" <?php echo e(old('country') == "Papua New Guinea" ? "selected" : ""); ?>>Papua New Guinea</option>
                        <option value="Paraguay" <?php echo e(old('country') == "Paraguay" ? "selected" : ""); ?>>Paraguay</option>
                        <option value="Peru" <?php echo e(old('country') == "Peru" ? "selected" : ""); ?>>Peru</option>
                        <option value="Philippines" <?php echo e(old('country') == "Philippines" ? "selected" : ""); ?>>Philippines</option>
                        <option value="Pitcairn" <?php echo e(old('country') == "Pitcairn" ? "selected" : ""); ?>>Pitcairn</option>
                        <option value="Poland" <?php echo e(old('country') == "Poland" ? "selected" : ""); ?>>Poland</option>
                        <option value="Portugal" <?php echo e(old('country') == "Portugal" ? "selected" : ""); ?>>Portugal</option>
                        <option value="Puerto Rico" <?php echo e(old('country') == "Puerto Rico" ? "selected" : ""); ?>>Puerto Rico</option>
                        <option value="Qatar" <?php echo e(old('country') == "Qatar" ? "selected" : ""); ?>>Qatar</option>
                        <option value="Romania" <?php echo e(old('country') == "Romania" ? "selected" : ""); ?>>Romania</option>
                        <option value="Russian Federation" <?php echo e(old('country') == "Russian Federation" ? "selected" : ""); ?>>Russian Federation</option>
                        <option value="Rwanda" <?php echo e(old('country') == "Rwanda" ? "selected" : ""); ?>>Rwanda</option>
                        <option value="Réunion" <?php echo e(old('country') == "Réunion" ? "selected" : ""); ?>>Réunion</option>
                        <option value="Saint Barthélemy" <?php echo e(old('country') == "Saint Barthélemy" ? "selected" : ""); ?>>Saint Barthélemy</option>
                        <option value="Saint Helena, Ascension and Tristan da Cunha" <?php echo e(old('country') == "Saint Helena, Ascension and Tristan da Cunha" ? "selected" : ""); ?>>Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="Saint Kitts and Nevis" <?php echo e(old('country') == "Saint Kitts and Nevis" ? "selected" : ""); ?>>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia" <?php echo e(old('country') == "Saint Lucia" ? "selected" : ""); ?>>Saint Lucia</option>
                        <option value="Saint Martin" <?php echo e(old('country') == "Saint Martin" ? "selected" : ""); ?>>Saint Martin</option>
                        <option value="Saint Pierre and Miquelon" <?php echo e(old('country') == "Saint Pierre and Miquelon" ? "selected" : ""); ?>>Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and the Grenadines" <?php echo e(old('country') == "Saint Vincent and the Grenadines" ? "selected" : ""); ?>>Saint Vincent and the Grenadines</option>
                        <option value="Samoa" <?php echo e(old('country') == "Samoa" ? "selected" : ""); ?>>Samoa</option>
                        <option value="San Marino" <?php echo e(old('country') == "San Marino" ? "selected" : ""); ?>>San Marino</option>
                        <option value="Sao Tome and Principe" <?php echo e(old('country') == "Sao Tome and Principe" ? "selected" : ""); ?>>Sao Tome and Principe</option>
                        <option value="Saudi Arabia" <?php echo e(old('country') == "Saudi Arabia" ? "selected" : ""); ?>>Saudi Arabia</option>
                        <option value="Senegal" <?php echo e(old('country') == "Senegal" ? "selected" : ""); ?>>Senegal</option>
                        <option value="Serbia" <?php echo e(old('country') == "Serbia" ? "selected" : ""); ?>>Serbia</option>
                        <option value="Seychelles" <?php echo e(old('country') == "Seychelles" ? "selected" : ""); ?>>Seychelles</option>
                        <option value="Sierra Leone" <?php echo e(old('country') == "Sierra Leone" ? "selected" : ""); ?>>Sierra Leone</option>
                        <option value="Singapore" <?php echo e(old('country') == "Singapore" ? "selected" : ""); ?>>Singapore</option>
                        <option value="Sint Maarten" <?php echo e(old('country') == "Sint Maarten" ? "selected" : ""); ?>>Sint Maarten</option>
                        <option value="Slovakia" <?php echo e(old('country') == "Slovakia" ? "selected" : ""); ?>>Slovakia</option>
                        <option value="Slovenia" <?php echo e(old('country') == "Slovenia" ? "selected" : ""); ?>>Slovenia</option>
                        <option value="Solomon Islands" <?php echo e(old('country') == "Solomon Islands" ? "selected" : ""); ?>>Solomon Islands</option>
                        <option value="Somalia" <?php echo e(old('country') == "Somalia" ? "selected" : ""); ?>>Somalia</option>
                        <option value="South Africa" <?php echo e(old('country') == "South Africa" ? "selected" : ""); ?>>South Africa</option>
                        <option value="South Georgia and the South Sandwich Islands" <?php echo e(old('country') == "South Georgia and the South Sandwich Islands" ? "selected" : ""); ?>>South Georgia and the South Sandwich Islands</option>
                        <option value="South Sudan" <?php echo e(old('country') == "South Sudan" ? "selected" : ""); ?>>South Sudan</option>
                        <option value="Spain" <?php echo e(old('country') == "Spain" ? "selected" : ""); ?>>Spain</option>
                        <option value="Sri Lanka" <?php echo e(old('country') == "Sri Lanka" ? "selected" : ""); ?>>Sri Lanka</option>
                        <option value="Sudan" <?php echo e(old('country') == "Sudan" ? "selected" : ""); ?>>Sudan</option>
                        <option value="Suriname" <?php echo e(old('country') == "Suriname" ? "selected" : ""); ?>>Suriname</option>
                        <option value="Svalbard and Jan Mayen" <?php echo e(old('country') == "Svalbard and Jan Mayen" ? "selected" : ""); ?>>Svalbard and Jan Mayen</option>
                        <option value="Sweden" <?php echo e(old('country') == "Sweden" ? "selected" : ""); ?>>Sweden</option>
                        <option value="Switzerland" <?php echo e(old('country') == "Switzerland" ? "selected" : ""); ?>>Switzerland</option>
                        <option value="Syria Arab Republic" <?php echo e(old('country') == "Syria Arab Republic" ? "selected" : ""); ?>>Syria Arab Republic</option>
                        <option value="Taiwan" <?php echo e(old('country') == "Taiwan" ? "selected" : ""); ?>>Taiwan</option>
                        <option value="Tajikistan" <?php echo e(old('country') == "Tajikistan" ? "selected" : ""); ?>>Tajikistan</option>
                        <option value="Tanzania, the United Republic of" <?php echo e(old('country') == "Tanzania, the United Republic of" ? "selected" : ""); ?>>Tanzania, the United Republic of</option>
                        <option value="Thailand" <?php echo e(old('country') == "Thailand" ? "selected" : ""); ?>>Thailand</option>
                        <option value="Timor-Leste" <?php echo e(old('country') == "Timor-Leste" ? "selected" : ""); ?>>Timor-Leste</option>
                        <option value="Togo" <?php echo e(old('country') == "Togo" ? "selected" : ""); ?>>Togo</option>
                        <option value="Tokelau" <?php echo e(old('country') == "Tokelau" ? "selected" : ""); ?>>Tokelau</option>
                        <option value="Tonga" <?php echo e(old('country') == "Tonga" ? "selected" : ""); ?>>Tonga</option>
                        <option value="Trinidad and Tobago" <?php echo e(old('country') == "Trinidad and Tobago" ? "selected" : ""); ?>>Trinidad and Tobago</option>
                        <option value="Tunisia" <?php echo e(old('country') == "Tunisia" ? "selected" : ""); ?>>Tunisia</option>
                        <option value="Turkmenistan" <?php echo e(old('country') == "Turkmenistan" ? "selected" : ""); ?>>Turkmenistan</option>
                        <option value="Turks and Caicos Islands" <?php echo e(old('country') == "Turks and Caicos Islands" ? "selected" : ""); ?>>Turks and Caicos Islands</option>
                        <option value="Tuvalu" <?php echo e(old('country') == "Tuvalu" ? "selected" : ""); ?>>Tuvalu</option>
                        <option value="Türkiye" <?php echo e(old('country') == "Türkiye" ? "selected" : ""); ?>>Türkiye</option>
                        <option value="US Minor Outlying Islands" <?php echo e(old('country') == "US Minor Outlying Islands" ? "selected" : ""); ?>>US Minor Outlying Islands</option>
                        <option value="Uganda" <?php echo e(old('country') == "Uganda" ? "selected" : ""); ?>>Uganda</option>
                        <option value="Ukraine" <?php echo e(old('country') == "Ukraine" ? "selected" : ""); ?>>Ukraine</option>
                        <option value="United Arab Emirates" <?php echo e(old('country') == "United Arab Emirates" ? "selected" : ""); ?>>United Arab Emirates</option>
                        <option value="United Kingdom" <?php echo e(old('country') == "United Kingdom" ? "selected" : ""); ?>>United Kingdom</option>
                        <option value="United States" <?php echo e(old('country') == "United States" ? "selected" : ""); ?>>United States</option>
                        <option value="Uruguay" <?php echo e(old('country') == "Uruguay" ? "selected" : ""); ?>>Uruguay</option>
                        <option value="Uzbekistan" <?php echo e(old('country') == "Uzbekistan" ? "selected" : ""); ?>>Uzbekistan</option>
                        <option value="Vanuatu" <?php echo e(old('country') == "Vanuatu" ? "selected" : ""); ?>>Vanuatu</option>
                        <option value="Venezuela" <?php echo e(old('country') == "Venezuela" ? "selected" : ""); ?>>Venezuela</option>
                        <option value="Viet Nam" <?php echo e(old('country') == "Viet Nam" ? "selected" : ""); ?>>Viet Nam</option>
                        <option value="Virgin Islands, British" <?php echo e(old('country') == "Virgin Islands, British" ? "selected" : ""); ?>>Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S." <?php echo e(old('country') == "Virgin Islands, U.S." ? "selected" : ""); ?>>Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna" <?php echo e(old('country') == "Wallis and Futuna" ? "selected" : ""); ?>>Wallis and Futuna</option>
                        <option value="Western Sahara" <?php echo e(old('country') == "Western Sahara" ? "selected" : ""); ?>>Western Sahara</option>
                        <option value="Yemen" <?php echo e(old('country') == "Yemen" ? "selected" : ""); ?>>Yemen</option>
                        <option value="Zambia" <?php echo e(old('country') == "Zambia" ? "selected" : ""); ?>>Zambia</option>
                        <option value="Zimbabwe" <?php echo e(old('country') == "Zimbabwe" ? "selected" : ""); ?>>Zimbabwe</option>
                        <option value="Åland Islands" <?php echo e(old('country') == "Åland Islands" ? "selected" : ""); ?>>Åland Islands</option>
                    </select>
                    <?php $__errorArgs = ['country'];
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
                    <label for="phone" class="block text-lg mb-2">Phone No.</label>
                    <input value="<?php echo e(old('phone')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="phone" placeholder="Example: 019-7963122"/>
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
                    <input value="<?php echo e(old('email')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="email" placeholder="Example: abubakar@email.com"/>
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
                    <label for="facebook_name" class="block text-lg mb-2">Facebook Name</label>
                    <input value="<?php echo e(old('facebook_name')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="facebook_name" placeholder="Example: Bakar Abu"/>
                    <?php $__errorArgs = ['facebook_name'];
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
                        Education Information
                    </h2>
                </div>
                <div class="mb-6">
                    <label for="current_level" class="block text-lg mb-2">Current Education Level</label>
                    <input value="<?php echo e(old('current_level')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="current_level" placeholder="Example: Diploma"/>
                    <?php $__errorArgs = ['current_level'];
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
                    <label for="field" class="block text-lg mb-2">Education Field</label>
                    <input value="<?php echo e(old('field')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="field" placeholder="Example: Electrical And Electronic Engineering"/>
                    <?php $__errorArgs = ['field'];
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
                    <label for="institute" class="block text-lg mb-2">Education Institute</label>
                    <input value="<?php echo e(old('institute')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="institute" placeholder="Universiti Malaysia Pahang Al-Sultan Abdullah"/>
                    <?php $__errorArgs = ['institute'];
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
                    <label for="occupation" class="block text-lg mb-2">Occupation</label>
                    <input value="<?php echo e(old('occupation')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="occupation" placeholder="Student"/>
                    <?php $__errorArgs = ['occupation'];
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
                    <label for="study_sponsorship" class="block text-lg mb-2">Study Sponsorship</label>
                    <input value="<?php echo e(old('study_sponsorship')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="study_sponsorship" placeholder="PTPTN"/>
                    <?php $__errorArgs = ['study_sponsorship'];
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
                        Program Information
                    </h2>
                </div>   
                <div class="mb-6">
                    <label for="program_interested" class="block text-lg mb-2">Program Interested</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="program_interested">
                        <option disabled <?php echo e(old('program_interested') == '' ? 'selected' : ''); ?>>select</option>
                        <option value="Platinum Professorship" <?php echo e(old('program_interested') == 'Platinum Professorship' ? 'selected' : ''); ?>>Platinum Professorship</option>
                        <option value="Platinum Premier" <?php echo e(old('program_interested') == 'Platinum Premier' ? 'selected' : ''); ?>>Platinum Premier</option>
                        <option value="Platinum Elite" <?php echo e(old('program_interested') == 'Platinum Elite' ? 'selected' : ''); ?>>Platinum Elite</option>
                        <option value="Platinum Dr.Jr." <?php echo e(old('program_interested') == 'Platinum Dr.Jr.' ? 'selected' : ''); ?>>Platinum Dr.Jr.</option>
                        <option value="Ala Carte" <?php echo e(old('program_interested') == 'Ala Carte' ? 'selected' : ''); ?>>Ala Carte</option>
                    </select>
                    <?php $__errorArgs = ['program_interested'];
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
                    <label for="program_batch" class="block text-lg mb-2">Batch</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="program_batch">
                        <option disabled>select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4.1">4.1</option>
                        <option value="4.2">4.2</option>
                        <option value="4.3">4.3</option>
                        <option value="5.1">5.1</option>
                        <option value="5.2">5.2</option>
                        <option value="5.3">5.3</option>
                        <option value="6.1">6.1</option>
                        <option value="6.2">6.2</option>
                        <option value="6.3">6.3</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="16.2">16.2</option>
                        <option value="16.3">16.3</option>
                        <option value="17">17</option>
                        <option value="18.1">18.1</option>
                        <option value="18.2">18.2</option>
                        <option value="18.3">18.3</option>
                        <option value="18.4">18.4</option>
                        <option value="Other">Other</option>

                    </select>
                    <?php $__errorArgs = ['program_batch'];
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
                        Platinum Members Only
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <label for="referral_exist" class="block text-lg mb-2">Do You Have A Referral?</label>
                    <select class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="referral_exist">
                        <option @click="show = true" value="yes">Yes</option>
                        <option @click="show = false" value="no">No</option>
                    </select>
                    <?php $__errorArgs = ['referral_exist'];
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
                <div class="mb-6" x-show="show">
                    <label for="referral_name" class="block text-lg mb-2">Referral Name</label>
                    <input value="<?php echo e(old('referral_name')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="referral_name" placeholder="Adam Saleh"/>
                    <?php $__errorArgs = ['referral_name'];
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
                <div class="mb-6" x-show="show">
                    <label for="referral_batch" class="block text-lg mb-2">Referral Batch</label>
                    <input value="<?php echo e(old('referral_batch')); ?>" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="referral_batch" placeholder="1"/>
                    <?php $__errorArgs = ['referral_batch'];
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
                        Membership Information
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
                    <label for="application_date" class="block text-lg mb-2">Date Of Application</label>
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
                <div class="mb-6 col-span-2">
                    <label for="transaction_proof" class="block text-lg mb-2">Proof Of Transaction</label>
                    <input type="file" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="transaction_proof"/>
                    <?php $__errorArgs = ['transaction_proof'];
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
                        Register
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
<?php endif; ?><?php /**PATH C:\Users\Adam\Downloads\WisdomWare-main\resources\views/users/create.blade.php ENDPATH**/ ?>