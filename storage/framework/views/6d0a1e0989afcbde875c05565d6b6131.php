<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/scss/app.scss','resources/js/app.js']); ?>
    </head>
    <body x-data class="min-h-screen bg-slate-50 dark:bg-black dark:text-white">
        <div class="flex w-screen h-full">
            <aside id="sidebar" class="duration-200 py-7 bg-slate-800 h-screen sticky top-0"
            x-bind:class="{'w-64':$store.sidebar.full, 'w-0':!$store.sidebar.full,'top-0 left-0':$store.sidebar.navOpen,'top-0 -left-64 sm:left-0':!$store.sidebar.navOpen}">
                
                    <!-- Home -->
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'home' "
                         class="relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md py-2 px-6 cursor-pointer"
                         x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'home','text-gray-400 ':$store.sidebar.active != 'home', 'hidden': !$store.sidebar.full}">
                        <i class="fa-solid fa-house"
                            x-cloak
                            x-bind:class="!$store.sidebar.full ? 'hidden-fa':''"></i>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full ? 'hidden':''">
                            Home</h1>
                    </div>
    
                    <!-- Profile -->
                    <div x-data="dropdown"
                    x-bind:class="!$store.sidebar.full ? 'hidden':''"
                    class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('profile')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md py-2 px-6 cursor-pointer"
                             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'profile','text-gray-400':$store.sidebar.active != 'profile'}">
                            <div class="relative flex space-x-2 items-center">
                                <i class="fa-regular fa-user"
                                    x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden-fa':''"></i>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden':''">
                                    PROFILE</h1>
                            </div>
                            <i x-cloak x-bind:class="!$store.sidebar.full ? 'hidden-fa':''" class="fa-solid fa-angle-down"></i>
                        </div>
                        <!-- Dropdown content -->
                        <div x-cloak x-show="open"
                             @click.outside="open =false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3 ">
                            <a href="<?php echo e(route('users.edit', Auth::user())); ?>" class="hover:text-gray-200 cursor-pointer block">Personal</a>
                            <a href="<?php echo e(route('users.index')); ?>" class="hover:text-gray-200 cursor-pointer block">List User</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Report</a>
                        </div>
                    </div>
    
                    <!-- Expert Domain -->
                    <div x-data="dropdown"
                    x-bind:class="!$store.sidebar.full ? 'hidden':''"
                    class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('expert')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md py-2 px-6 cursor-pointer"
                             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'expert','text-gray-400 ':$store.sidebar.active != 'expert'}">
                            <div class="relative flex space-x-2 items-center">
                                <i class="fa-regular fa-address-book"
                                    x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden-fa':''"></i>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden':''">
                                    EXPERT DOMAIN</h1>
                            </div>
                            <i x-cloak x-bind:class="!$store.sidebar.full ? 'hidden-fa':''" class="fa-solid fa-angle-down"></i>
                        </div>
                        <!-- Dropdown content -->
                        <div x-cloak x-show="open"
                             @click.outside="open =false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3 ">
                            <a href="<?php echo e(route('experts.viewOwnExpert')); ?>" class="hover:text-gray-200 cursor-pointer block">View Own Domain</a>
                            <a href="<?php echo e(route('experts.viewAllExpert')); ?>" class="hover:text-gray-200 cursor-pointer block">View All Domain</a>
                        </div>
                    </div>
    
                    <!-- Publication Data -->
                    <div x-data="dropdown"
                    x-bind:class="!$store.sidebar.full ? 'hidden':''"
                    class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('publication')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md py-2 px-6 cursor-pointer"
                             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'publication','text-gray-400 ':$store.sidebar.active != 'publication'}">
                            <div class="relative flex space-x-2 items-center">
                                <i class="fa-solid fa-book"
                                    x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden-fa':''"></i>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden':''">
                                    PUBLICATION DATA</h1>
                            </div>
                            <i x-cloak x-bind:class="!$store.sidebar.full ? 'hidden-fa':''" class="fa-solid fa-angle-down"></i>
                        </div>
                        <!-- Dropdown content -->
                        <div x-cloak x-show="open"
                             @click.outside="open =false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3 ">
                            <a class="hover:text-gray-200 cursor-pointer block">Item 1</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 2</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 3</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 4</a>
                        </div>
                    </div>
    
                    <!-- Progress Monitoring -->
                    <div x-data="dropdown"
                    x-bind:class="!$store.sidebar.full ? 'hidden':''"
                    class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('progress')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-gray-200 hover:bg-gray-800 items-center space-x-2 rounded-md py-2 px-6 cursor-pointer"
                             x-bind:class="{'justify-start': $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full,'text-gray-200 bg-gray-800':$store.sidebar.active == 'progress','text-gray-400 ':$store.sidebar.active != 'progress'}">
                            <div class="relative flex space-x-2 items-center">
                                <i class="fa-solid fa-list-check"
                                    x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden-fa':''"></i>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full ? 'hidden':''">
                                    PROGRESS MONITORING</h1>
                            </div>
                            <i x-cloak x-bind:class="!$store.sidebar.full ? 'hidden-fa':''" class="fa-solid fa-angle-down"></i>
                        </div>
                        <!-- Dropdown content -->
                        <div x-cloak x-show="open"
                             @click.outside="open =false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3 ">
                            <a class="hover:text-gray-200 cursor-pointer block">Item 1</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 2</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 3</a>
                            <a class="hover:text-gray-200 cursor-pointer block">Item 4</a>
                        </div>
                    </div>
                
            </aside>
            <div id="content" class="flex-1">
                <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <main class="max-w-6xl mx-auto">
                    <?php echo e($slot); ?>

                </main>
            </div>
        </div>
        
        
    
    
    </body>
</html>
<?php /**PATH C:\Users\Adam\Downloads\WisdomWare-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>