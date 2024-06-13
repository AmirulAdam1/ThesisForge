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
                            <h3 class="pb-2 pb-md-0 text-center"><b>Add New Publication</b></h3>
                            <form id="upload" action="{{ route('managePublication.addPublicationPost') }}" method="post" enctype="multipart/form-data" class="row">
                                @csrf
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><label for="publication_title" class="form-label" style="color: white;">Publication Title</label></td>
                                            <td><input type="text" class="form-control" id="publication_title" name="publication_title" style="color: black;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_author" class="form-label" style="color: white;">Author</label></td>
                                            <td><input type="text" class="form-control" id="publication_author" name="publication_author" style="color: black;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_date" class="form-label" style="color: white;">Date</label></td>
                                            <td><input type="date" class="form-control" id="publication_date" name="publication_date" style="color: black;" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_type" class="form-label" style="color: white;">Type</label></td>
                                            <td>
                                                <select class="form-select" id="publication_type" name="publication_type" style="color: black;" required>
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="Article">Article</option>
                                                    <option value="Report">Report</option>
                                                    <option value="Thesis">Thesis</option>
                                                    <option value="Journal">Journal</option>
                                                    <option value="Blog">Blog</option>
                                                    <option value="Books">Books</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_domain" class="form-label" style="color: white;">Research Domain</label></td>
                                            <td>
                                                <select class="form-select" id="publication_domain" name="publication_domain" style="color: black;" required>
                                                    <option selected disabled>Open this select menu</option>
                                                    <option value="Computer System Research Group">Computer System Research Group</option>
                                                    <option value="Virtual Simulation & Computing">Virtual Simulation & Computing</option>
                                                    <option value="Machine Intelligence Research Group">Machine Intelligence Research Group</option>
                                                    <option value="Cyber Security Interest Group">Cyber Security Interest Group</option>
                                                    <option value="Software Engineering">Software Engineering</option>
                                                    <option value="Knowledge Engineering & Computational Linguistic">Knowledge Engineering & Computational Linguistic</option>
                                                    <option value="Data Science & Simulation Modeling">Data Science & Simulation Modeling</option>
                                                    <option value="Database Technology & Information System">Database Technology & Information System</option>
                                                    <option value="Educational Technology (EduTech)">Educational Technology (EduTech)</option>
                                                    <option value="Image Signal Processing">Image Signal Processing</option>
                                                    <option value="Computer Network & Research Group">Computer Network & Research Group</option>
                                                    <option value="Soft Computing & Optimization">Soft Computing & Optimization</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="publication_file" class="form-label" style="color: white;">Upload File</label></td>
                                            <td>
                                                <input class="form-control" type="file" id="publication_file" name="publication_file" accept="application/pdf" required>
                                                @error('file')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button style="background-color:green ; border-radius:10px; width: 100px; " type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
