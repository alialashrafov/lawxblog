<html lang="az">
<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #95c2de;
        }

        .mainbox {
            background-color: #95c2de;
            margin: auto;
            height: 600px;
            width: 600px;
            position: relative;
        }
        .err {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 3rem;
            position:absolute;
            left: 20%;
            top: 8%;
        }
        .err1 {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 3rem;
            position:absolute;
            left: 33%;
            top: 18%;
        }
        .err2 {
            color: #ffffff;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 3rem;
            position:absolute;
            left: 61%;
            top: 18%;
        }

        .far {
            position: absolute;
            font-size: 8.5rem;
            left: 42%;
            top: 15%;
            color: #ffffff;
        }

        .msg {
            text-align: center;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 1.6rem;
            position:absolute;
            left: 16%;
            top: 45%;
            width: 75%;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="mainbox">
    {{ header( "refresh:5;url={{ route('/') }}" ); }}
    <div class="err">{{ $data['email'] }}</div>
    <br>
    <div class="err1">Abunə</div>
    <div class="err2">Oldunuz</div>
    <div class="msg">Məqalələrimizdən daha tez xəbərdar olmaq istəyirsinizsə, poçt ünvanınz - ı gündəlik yoxlamağınızı tövsiyə edirik.<p>Buyurun, <a href="/">Əsas Səhifə</a> - yə geri dönün.</p></div>
</div>
</html>
