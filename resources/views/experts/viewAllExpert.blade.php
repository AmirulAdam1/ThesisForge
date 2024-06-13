<x-app-layout>
    <div>
        <div class="flex justify-between items-center my-8">
            <!-- Search -->
            <form action="">
                <div id="search-box">
                    <div>
                        <div class="flex justify-between items-center px-3 py-2 bg-gray-100 border-gray-300 text-gray-900 w-fit rounded-lg dark:bg-slate-600 dark:border-gray-600
                        dark:placeholder-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <span>
                                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                            </span>

                            <input
                                class="ml-1 w-24 lg:w-52 py-0 text-sm bg-transparent border-none outline-none focus:outline-none focus:border-none focus:ring-0 placeholder:text-gray-400"
                                type="text" name="search" placeholder="Search Expert...">

                            <span>
                                <button
                            type="submit"
                            class="px-4 py-2 z-10 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-gray-950 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Search
                            </button>
                            </span>
                        </div>
                        

                    </div>
                </div>

            </form>
        </div>
    </div>

    <div>
        <div class="flex justify-between items-center my-4 mx-8">
            <div class="w-4/6 dark:text-white">
                <h1 class="text-lg lg:text-xl font-bold">Expert List</h1>
                <p class="text-sm lg:text-base">A list of the experts in ThesisForge system including their name, email and domain.</p>
            </div>
        </div>
    </div>

    <div class="mx-4">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-600 py-6 rounded overflow-x-auto">
            <table class="w-full table-auto rounded-sm dark:text-white">
                <thead>
                    <tr class="text-left lg:text-lg">
                      <th class="pl-4">Name</th>
                      <th class="hidden lg:table-cell pl-4">Email</th>
                      <th class="hidden sm:table-cell pl-4">Domain</th>
                      <th class="pl-4">Action</th>
                    </tr>
                  </thead>
                <tbody>
                    
                    @foreach ($experts as $expert)
                    <tr class="border-gray-30 h-auto cursor-pointer" data-href="http://www.google.com/">
                        <td class="w-full h-full sm:w-auto max-w-0 sm:max-w-none px-2 py-4 border-t border-b border-gray-300 sm:text-sm md:text-lg font-medium whitespace-nowrap truncate">
                                {{ $expert->expert_name }}
                                <dl class="lg:hidden sm:text-xs md:text-base font-normal">
                                    <dt class="sr-only">Email</dt>
                                    <dd class="text-gray-600 mt-1 truncate">{{ $expert->expert_email }}</dd>
                                    <dt class="sr-only sm:hidden">Role</dt>
                                    <dd class="sm:hidden text-gray-500 mt-1">{{ $expert->domain_name }}</dd>
                                </dl>

                        </td>
                        <td class="h-full hidden lg:table-cell px-2 py-4 border-t border-b border-gray-300 text-gray-500 font-medium whitespace-nowrap truncate">{{ $expert->expert_email }}</td>
                        <td class="h-full hidden sm:table-cell px-2 py-4 border-t border-b border-gray-300 text-gray-500 font-medium whitespace-nowrap">{{ $expert->domain_name }}</td>
                        <td class="h-full px-2 py-4 border-t border-b border-gray-300 sm:text-xs md:text-lg font-medium whitespace-nowrap w-72">
                            <div class="flex items-start flex-col lg:flex-row gap-2">
                                <a href="{{ route('experts.view-expert', $expert) }}" class="lg:mx-2">
                                    <i class="fa-solid fa-eye"></i>
                                    View                     
                                </a>
                                {{-- <a href="edit.html" class="text-blue-400 rounded-xl lg:mx-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a> --}}
                                <form action="" class="p-0 lg:mx-2">
                                </form>
                            </div>
                        </td>
                    </tr> 
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-6 p-4">
        
    </div>
</x-app-layout>