<x-app-layout>
<style>
    .btn-custom-search {
        background-color: #28a745; /* Green background color */
        color: white;
        border: 1px solid #28a745;
    }
    .btn-custom-search:hover {
        background-color: #218838; /* Darker green on hover */
        color: white;
        border: 1px solid #218838;
    }
</style>
    <div class="py-12"></div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif
        <h1 class="pb-2 pb-md-0 text-white" style="text-align: center;"><b>List of Publications</b></h1>
        <form action="{{ route('SearchPublication.search') }}" method="GET" class="mb-3">
            <div class="flex">
                <input type="text" name="search" class="form-input rounded-l-md border-gray-300 block w-full text-black" placeholder="Search by title, author...">
                <button type="submit" class="btn btn-custom-search rounded-r-md px-8 ">Search</button>
            </div>
        </form>
            <div class="card p-4 mt-4">
                <table id="myTable" class="table min-w-full divide-y divide-gray-200 text-black">
                    <thead class="bg-gray-50" >
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th> 
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($publication as $publication)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-black">{{ $loop->iteration}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_author }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black">{{ \Carbon\Carbon::parse($publication->publication_date)->format('Y-m-d')}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_type }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('managePublication.viewPublicationFile', ['publication_id' => $publication->publication_id]) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>   
</x-app-layout>
