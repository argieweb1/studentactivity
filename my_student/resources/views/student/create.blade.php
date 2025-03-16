<!DOCTYPE html>
<html>
<head>
    <title>STUDENT INFORMATION</title>
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
            background-color: #ff0000;
            border: none;
            border-radius: 6px;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #f70b0b;
        }
        .delete {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .delete:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Info</h1>
        <form action="/students" method="POST">
            @csrf
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br>        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>
            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>