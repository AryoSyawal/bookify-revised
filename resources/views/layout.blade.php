<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .floating-button {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background-color: rgb(1, 1, 190);
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            font-size: 24px;
            z-index: 1000; /* Ensure it stays above other content */
        }
    </style>
</head>
<body>
    @yield('content')

    <button class="floating-button">
        +
    </button>

</body>
</html>