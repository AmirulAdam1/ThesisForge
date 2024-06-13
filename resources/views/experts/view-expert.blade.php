<x-app-layout>
<div class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 p-10 rounded max-w-lg lg:max-w-6xl mx-auto mt-24">
    <form action="" class="flex flex-col gap-4">
        <div class="bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">
            <h2 class="text-2xl font-bold capitalize mb-4 text-center">
                Expert Information
            </h2>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="expert_name" class="mb-2">Expert Name: </label>
                <div name="expert_name">{{ $expert->expert_name }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="domain_name" class="mb-2">Domain Name: </label>
                <div name="domain_name">{{ $expert->domain_name }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="expert_university" class="mb-2">Expert University: </label>
                <div name="expert_university">{{ $expert->expert_university }}</div>
            </div>
        </div>

        <div class="bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-center">
                Communication Information
            </h2>        
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="expert_phone_number" class="mb-2">Phone No: </label>
                <div name="expert_phone_number">{{ $expert->expert_phone_number }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg">
                <label for="expert_email" class="mb-2">Email: </label>
                <div name="expert_email">{{ $expert->expert_email }}</div>
            </div>
        </div>

        <div class="bg-gray-200 dark:bg-slate-800 p-2 rounded-lg">
            <h2 class="text-2xl font-bold mb-4 text-center">
                Research Information
            </h2>        
            <div class="flex align-items-center gap-4 text-lg capitalize">
                <label for="research" class="mb-2">Research Title: </label>
                <div name="research">{{ $expert->expert_name }}</div>
            </div>
            <div class="flex align-items-center gap-4 text-lg">
                <label for="publication" class="mb-2">Publication: </label>
                <div name="publication">{{ $expert->expert_name }}</div>
            </div>
        </div>

        <div class="self-center mt-auto">
            <div class="mb-4">
                <button class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-800">
                    Edit
                </button>
                <a href="{{ route('experts.viewOwnExpert') }}" class="dark:text-white ml-4"> Back </a>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
