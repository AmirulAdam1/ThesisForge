<x-app-layout>
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

            <form method="POST" action="{{ route('experts.saveExpert') }}" class="grid grid-cols-2 gap-2"
            enctype="multipart/form-data" x-data="{ show: true }">
                @csrf

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

                <hr class="mx-auto w-full mb-4 col-span-2">

                <div class="mb-4 col-span-2">
                    <h2 class="text-2xl font-bold mb-1">
                        Confirmation
                    </h2>
                </div>
                <div class="mb-6 col-span-2">
                    <legend class="text-lg mb-2">Consent</legend>                          
                    <input type="checkbox" name="consent" value="1" {{ old('consent') == '1' ? 'checked' : '' }}>
                    <label for="consent" class="font-bold">I hereby confirm that the details I have filled on this application are true and valid.</label>
                    @error('consent')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="application_date" class="block text-lg mb-2">Date Of Addition</label>
                    <input value="{{ old('application_date') }}" type="date" class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm p-2 w-full" name="application_date"/>
                    @error('application_date')
                        <p class="text-orange-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
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
</x-app-layout>