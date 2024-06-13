<x-app-layout>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            @if(session()->has("success"))
                <div class="alert alert-success">
                    {{ session()->get("success") }}
                </div>
            @endif
            @if(session()->has("error"))
                <div class="alert alert-danger">
                    {{ session()->get("error") }}
                </div>
            @endif
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong" style="border-radius: 15px; background-color: #001f3f; color: white;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="pb-2 pb-md-0 text-center"><b>Edit Publication</b></h3>
                            <form id="upload" action="{{ route('managePublication.editPublicationPost', ['publication_id' => $publication->publication_id]) }}" method="post" enctype="multipart/form-data" class="expert-form">
                                @csrf
                                <div class="form-section">
                                    <table class="table table-bordered" style="color: white;">
                                        <tr>
                                            <td><label for="publication_title" class="form-label" style="color: white;">Publication Title</label></td>
                                            <td><input type="text" class="form-control" id="publication_title" name="publication_title" value="{{ $publication->publication_title }}" style="background-color: black; color: white;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_author" class="form-label" style="color: white;">Author</label></td>
                                            <td><input type="text" class="form-control" id="publication_author" name="publication_author" value="{{ $publication->publication_author }}" style="background-color: black; color: white;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_date" class="form-label" style="color: white;">Date</label></td>
                                            <td><input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ $publication->publication_date }}" style="background-color: black; color: white;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_type" class="form-label" style="color: white;">Type</label></td>
                                            <td>
                                                <select class="form-select" id="publication_type" name="publication_type" style="background-color: black; color: white;" required>
                                                    <option value="" disabled selected>Open this select menu</option>
                                                    <option value="Article" {{ $publication->publication_type == 'Article' ? 'selected' : '' }}>Article</option>
                                                    <option value="Report" {{ $publication->publication_type == 'Report' ? 'selected' : '' }}>Report</option>
                                                    <option value="Thesis" {{ $publication->publication_type == 'Thesis' ? 'selected' : '' }}>Thesis</option>
                                                    <option value="Journal" {{ $publication->publication_type == 'Journal' ? 'selected' : '' }}>Journal</option>
                                                    <option value="Blog" {{ $publication->publication_type == 'Blog' ? 'selected' : '' }}>Blog</option>
                                                    <option value="Books" {{ $publication->publication_type == 'Books' ? 'selected' : '' }}>Books</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_domain" class="form-label" style="color: white;">Research Domain</label></td>
                                            <td>
                                                <select class="form-select" id="publication_domain" name="publication_domain" style="background-color: black; color: white;" required>
                                                    <option value="" disabled selected>Open this select menu</option>
                                                    <option value="Computer System Research Group" {{ $publication->publication_domain == 'Computer System Research Group' ? 'selected' : '' }}>Computer System Research Group</option>
                                                    <option value="Virtual Simulation & Computing" {{ $publication->publication_domain == 'Virtual Simulation & Computing' ? 'selected' : '' }}>Virtual Simulation & Computing</option>
                                                    <option value="Machine Intelligence Research Group" {{ $publication->publication_domain == 'Machine Intelligence Research Group' ? 'selected' : '' }}>Machine Intelligence Research Group</option>
                                                    <option value="Cyber Security Interest Group" {{ $publication->publication_domain == 'Cyber Security Interest Group' ? 'selected' : '' }}>Cyber Security Interest Group</option>
                                                    <option value="Software Engineering" {{ $publication->publication_domain == 'Software Engineering' ? 'selected' : '' }}>Software Engineering</option>
                                                    <option value="Knowledge Engineering & Computational Linguistic" {{ $publication->publication_domain == 'Knowledge Engineering & Computational Linguistic' ? 'selected' : '' }}>Knowledge Engineering & Computational Linguistic</option>
                                                    <option value="Data Science & Simulation Modeling" {{ $publication->publication_domain == 'Data Science & Simulation Modeling' ? 'selected' : '' }}>Data Science & Simulation Modeling</option>
                                                    <option value="Database Technology & Information System" {{ $publication->publication_domain == 'Database Technology & Information System' ? 'selected' : '' }}>Database Technology & Information System</option>
                                                    <option value="Educational Technology (EduTech)" {{ $publication->publication_domain == 'Educational Technology (EduTech)' ? 'selected' : '' }}>Educational Technology (EduTech)</option>
                                                    <option value="Image Signal Processing" {{ $publication->publication_domain == 'Image Signal Processing' ? 'selected' : '' }}>Image Signal Processing</option>
                                                    <option value="Computer Network & Research Group" {{ $publication->publication_domain == 'Computer Network & Research Group' ? 'selected' : '' }}>Computer Network & Research Group</option>
                                                    <option value="Soft Computing & Optimization" {{ $publication->publication_domain == 'Soft Computing & Optimization' ? 'selected' : '' }}>Soft Computing & Optimization</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_file" class="form-label" style="color: white;">Upload File</label></td>
                                            <td>
                                                <input class="form-control" type="file" id="publication_file" name="publication_file" accept="application/pdf" style="background-color: black; color: white;">
                                                @error('publication_file')
                                                <div class="alert alert-danger mt-1 mb-3">{{ $message }}</div>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_file" class="form-label" style="color: white;">Current File:</label></td>
                                            <td>
                                                <a href="{{ Storage::url($publication->publication_filePath) }}" target="_blank">{{ $publication->publication_fileName }}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-navigation mt-3 text-right">
                                    <button type="submit" class="btn btn-success" style="background-color: #0074D9; color: white; border-radius:10px; width: 100px;">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
            </div> 
        </div>
    </section>
</x-app-layout>
