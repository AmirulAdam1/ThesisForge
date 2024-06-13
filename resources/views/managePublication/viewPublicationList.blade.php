<x-app-layout>
    <div class="py-12">
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
            <h3 class="pb-2 pb-md-0" style="text-align: center;"><b>My Publications</b></h3>
            @if($publications->isEmpty())
                <p>No publications found.</p>
            @else
                <div class="card p-4 mt-2 bg-slate-800">
                    <table id="myTable" class="table min-w-full divide-y divide-gray-200 text-black">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($publications as $publication)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-black">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_author }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-black">{{ \Carbon\Carbon::parse($publication->publication_date)->format('Y-m-d') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-black">{{ $publication->publication_type }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('managePublication.viewPublicationFile', ['publication_id' => $publication->publication_id]) }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        <a href="{{ route('managePublication.editPublication', $publication->publication_id) }}" class="text-green-600 hover:text-green-900 ml-2">Edit</a>
                                        <a href="{{ route('managePublication.deletePublication', $publication->publication_id) }}" class="text-red-600 hover:text-red-900 ml-2">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
    </div>
</x-app-layout>
