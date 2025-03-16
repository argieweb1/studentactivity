<!DOCTYPE html>
<html>
<head>
    <title>EDIT STUDENT RECORDS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus {
            border-color: hsl(0, 100%, 50%);
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #ff3700;
            border: none;
            border-radius: 6px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #f80e05;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if ({{ session('status') ? 'true' : 'false' }}) {
                alert('{{ session('status') }}');
            }
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Edit Student</h1>
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}" required><br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $student->age }}" required><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>