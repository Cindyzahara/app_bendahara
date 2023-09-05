<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>FINANCE KOMITE | Login</title>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
           *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
           }

           body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('gmbr.jpg') no-repeat;
            background-size: cover;
            background-position: center;
           }

           .wrapper {
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
           }

           .wrapper h1 {
            font-size: 36px;
            text-align: center;
           }

           .wrapper .input-box  {
            width: 100%;
            height: 50px;
            margin: 30px 0;
           }

           .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
           }

           .input-box input::placeholder {
            color: #fff;
           }

           .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50);
            font-size: 
           }
           .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
           }

    </style>
</head>

<body>
    
    <div class="wrapper">
        <form action="{{route('auth')}}" method="post">
            @csrf
            <img src="{{ asset('logo/logosmk.jpg') }}" width="70px" height="70px" style="margin-left:8em" alt="Logo Jurusan">
            <h1>Login Aplikasi</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="bottom">

        </form>
    </div>

</body>
</html>