<div class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 p-10 rounded max-w-lg 
lg:max-w-6xl mx-auto mt-24">
    <form action="" class="flex flex-col flex-wrap h-full gap-4">
        <div class="flex-initial bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">
            <h2 class="text-2xl font-bold capitalize mb-4 text-center">
                {{ $user->role }} Information
            </h2>
            <div class="flex align-items-center">
                <div class="w-[120px] mr-2">
                    <img class="hidden w-full md:block rounded-lg" 
                    src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('/images/no-image-available.jpg') }}" alt="">
                </div>
                <div>
                    <div class="flex align-items-center gap-4 text-lg capitalize">
                        <label for="name" class="mb-2">Platinum Name: </label>
                        <div name="name">{{ $user->name }}</div>
                    </div>
                </div>
            </div>  
        </div>
        
        <div class="flex-inital bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">

            <h2 class="text-2xl font-bold mb-4 text-center">
                Communication Information
            </h2>   
            <div class="flex align-items-center gap-4 text-lg">
                <label for="address" class="mb-2">Address: </label>
                @if ($user->role == 'staff')
                    <div name="address">{{ $user->staff->address }}</div>
                @else
                    <div name="address">{{ $user->mentor->address }}</div>
                @endif 
            </div>     
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="phone" class="mb-2">Phone No: </label>
                <div name="phone">{{ $user->phone }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg">
                <label for="email" class="mb-2">Email: </label>
                <div name="email">{{ $user->email }}</div>
            </div>
        </div>
        

        <div class="flex-initial self-center mt-auto">
            <div class="mb-4">
                {{-- <button class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-800">
                    Edit
                </button> --}}
                <a href="{{ route('users.index') }}" class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-800"> Back </a>
            </div>
        </div>
        
    </form>
</div>





