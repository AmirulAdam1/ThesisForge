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
<div class="container">
        <div class="card-body p-4 p-md-5">
            <h3 class="pb-2 pb-md-0 text-white" style="text-align: center;"><b>Platinum List</b></h3>
            <form action="{{ route('SearchPublicationMentor.searchMentor') }}" method="GET" class="mb-3">
            <div class="flex">
                <input type="text" name="searchMentor" class="form-input rounded-l-md border-gray-300 block w-full text-black" placeholder="Search by name...">
                <button type="submit" class="btn btn-custom-search rounded-r-md px-8 ">Search</button>
            </div>
            </form>

    {{-- Platinum Members Table --}}
    <div class="card p-4 mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table min-w-full divide-y divide-gray-200 text-white bg-white" id="platinumTable">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Platinum Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Number</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr class="platinum-row">
                        <td class="px-6 py-4 whitespace-nowrap text-black">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-black">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-black">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-black">{{ $user->phone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-black">
                            <form action="{{ route('GenerateReportPublication.generate') }}" method="POST">
                                @csrf
                                <input type="hidden" name="name" value="{{ $user->name }}">
                                <button type="submit" class="btn btn-sm btn-primary">Generate PDF</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
</x-app-layout>


<script>
    // Function to filter table rows based on search input
    function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("name");
        filter = input.value.toUpperCase();
        table = document.getElementById("platinumTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    // Attach filterTable function to input event
    document.getElementById("name").addEventListener("input", filterTable);

    // Initially hide the search form if no text is typed
    document.addEventListener("DOMContentLoaded", function() {
        filterTable();
    });

