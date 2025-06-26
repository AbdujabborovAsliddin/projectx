<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - GoSNippets</title>
    <link href='' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Poppins&display=swap');

*.snippet-body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
        .snippet-body .bg-img {
            background: url(https://images.pexels.com/photos/461940/pexels-photo-461940.jpeg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .snippet-body .bg-img::after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .snippet-body .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 999;
            width: 370px;
            text-align: center;
            padding: 60px 32px;
            background: rgba(255, 255, 255, 0.04);
            box-shadow: -1px 5px 30px 0px rgba(0, 0, 0, 0.85);
            border-radius: 10px;
        }

        .snippet-body .content header {
            color: #fff;
            font-size: 33px;
            font-weight: 600;
            margin: 0 0 35px 0;
            font-family: 'Poppins', sans-serif;
        }

        .snippet-body .field {
            position: relative;
            height: 45px;
            width: 100%;
            display: flex;
            background: rgba(255, 255, 255, 0.94);
            border-radius: 10px!important;

        }

        .snippet-body .field span {
            color: #222;
            width: 40px;
            line-height: 45px;
            padding: 0 10px;
        }

        .snippet-body .field input {
            height: 100%;
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: #222;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
        }



        .snippet-body .space {
            margin-top: 16px;
        }

        .snippet-body .pass {
            text-align: left;
            margin: 10px 0;
        }

        .snippet-body .pass a {
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
        }

        .snippet-body .pass:hover a {
            text-decoration: underline;
        }

        .snippet-body input[type="submit"] {
            background: linear-gradient(to right, #0000ff 0%, #6666ff 100%);
            border: 1px solid linear-gradient(to right, #0000ff 0%, #6666ff 100%);
            ;
            color: #fff;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            border-radius: 10px;
        }

        .snippet-body input[type="submit"]:hover {
            
        }

        .snippet-body .login {
            color: #fff;
            margin: 20px 0;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src=''></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>

@yield('content')

    <script type='text/javascript'></script>
</body>

</html>