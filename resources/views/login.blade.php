<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Sunshine - Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            overflow: hidden;
        }


        .header {
            width: 100%;
            background-color: #1b2e3d;
            color: #f2f2f2;
            padding: 20px;
            text-align: left;
            position: fixed;
            top: 0;
            left: 0;
            border-bottom: 5px solid #d95c5c;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
        }

        .header .title {
            font-size: 2.5em;
            font-weight: bold;
            margin: 0;
        }

        .header .title .highlight {
            color: #d95c5c;
        }

        .header .back-button {
            padding: 8px 25px;
            background-color: white;
            color: #d95c5c;
            border: none;
            border-radius: 15px;
            font-size: 1em;
            margin-right: 30px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .header .back-button:hover {
            background-color: #d1d1d1;
            color: #1b2e3d;
        }


        .container {
            width: 90%;
            max-width: 500px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            border-color: #1b2e3d;
            border-style: groove;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }


        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 210px;
            margin-top: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="username"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .submit-btn {
            padding: 10px;
            background-color: #1b2e3d;
            color: white;
            border: none;
            border-radius: 10px;
            width: 100px;
            align-self: center;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #d95c5c;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="header">
        <div class="title">
            <span class="highlight">Little</span> Sunshine
        </div>
        <a href="/"><button class="back-button">Back</button></a>
    </div>


    <div class="container">
        <h2>Login</h2>
        <form action="/" method="post">
            @csrf
            <input type="username" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button name="btnLogin" value="yes" type="submit" class="submit-btn">Login</button>
        </form>
    </div>

    @if (session()->pull('errorLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Wrong Username or Password',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorLogin') }}
    @endif
</body>

</html>
