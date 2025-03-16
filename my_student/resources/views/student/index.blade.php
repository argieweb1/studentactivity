
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECORDS OF STUDENTS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* White background color */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #ff1e00;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        a:hover {
            background-color: #f20505;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        form {
            display: inline;
        }
        button.delete {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 11px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        button.delete:hover {
            background-color: #cc0000;
        }
        button.edit {
            background-color: #eb1804;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        button.edit:hover {
            background-color: rgb(240, 33, 6);
        }
    </style>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this student?');
        }

        function confirmEdit() {
            return confirm('Are you sure you want to edit this student?');
        }

        document.addEventListener('DOMContentLoaded', function() {
            if ({{ session('status') ? 'true' : 'false' }}) {
                alert('{{ session('status') }}');
            }
        });
    </script>
</head>
<body>
    <h1>STUDENT INFORMATION</h1>
    <center><a href="/students/create">CREATE STUDENT RECORD</a></center>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}/edit" class="edit" onclick="return confirmEdit()">Edit</a>
                        <form action="/students/{{ $student->id }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>