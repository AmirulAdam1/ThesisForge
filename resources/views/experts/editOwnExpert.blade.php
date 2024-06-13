<x-app-layout>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Expert Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your expert's information.") }}
        </p>
    </header>
    
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('users.update', $user) }}" class="mt-6 space-y-6"
    enctype="multipart/form-data" x-data="{ show: true }">
        @csrf
        @method('PUT')

        <div class="mb-6">
                    <label for="platinum_id" class="block text-lg mb-2">Your ID</label>
                    <input value="{{ old('platinum_id') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="platinum_id" placeholder="Example: 1"/>
                    @error('platinum_id')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Expert Information
                    </h2>
                </div>                          
                <div class="mb-6">
                    <label for="expert_name" class="block text-lg mb-2">Full Name</label>
                    <input value="{{ old('expert_name') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_name" placeholder="Example: Abu Bakar Omar"/>
                    @error('expert_name')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="domain_name" class="block text-lg mb-2">Domain Name</label>
                    <input value="{{ old('domain_name') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="domain_name" placeholder="Example: Computer Science"/>
                    @error('domain_name')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="expert_university" class="block text-lg mb-2">Expert University</label>
                    <input value="{{ old('expert_university') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_university" placeholder="Example: UMPSA"/>
                    @error('expert_university')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Communication Information
                    </h2>
                </div>
                <div class="mb-6">
                    <label for="expert_phone_number" class="block text-lg mb-2">Phone No.</label>
                    <input value="{{ old('expert_phone_number') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_phone_number" placeholder="Example: 019-7963122"/>
                    @error('expert_phone_number')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="expert_email" class="block text-lg mb-2">Email</label>
                    <input value="{{ old('expert_email') }}" type="text" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:placeholder-slate-400 rounded-md shadow-sm p-2 w-full" name="expert_email" placeholder="Example: abubakar@email.com"/>
                    @error('expert_email')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent 
            rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 
            dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 
            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                Save
            </button>
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>



    </form>
</section>
</x-app-layout>