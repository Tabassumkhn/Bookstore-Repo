
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body { 
            font-family: Arial, sans-serif;
            background: url('slideimg2jpg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 50px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
            width: 355px;
        }

        h2 {
            text-align: center;
            color: maroon;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: maroon;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        span {
            margin-left: 20px;
        }

        span a {

            text-decoration: none;
            color: maroon;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>User Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="btn-container mt-3 mb-3">
                <button type="submit" class="btn">Login</button>
            </div>
            <span class="mt-5 text-center">You have not Register ? <a href="/project/userragister.html">Register</a></span>
        </form>
    </div>
</body>

</html>