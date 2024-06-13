<!DOCTYPE html>
<html>
<head>
    <title>Publication Report</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Publication Report for {{ $user->name }}</h1>
    <p>Total Publications: {{ $publicationCount }}</p>

    @if($publicationCount > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Domain</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publications as $publication)
                    <tr>
                        <td>{{ $publication->publication_title }}</td>
                        <td>{{ $publication->publication_author }}</td>
                        <td>{{ $publication->publication_date }}</td>
                        <td>{{ $publication->publication_type }}</td>
                        <td>{{ $publication->publication_domain }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No publications found for this Platinum member.</p>
    @endif
</body>
</html>
