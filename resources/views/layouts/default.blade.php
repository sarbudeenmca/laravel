<html>

<head>
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #eee;
            margin: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #header {
            text-align: center;
            color: #201E45;
            background-color: #D9D9D9;
            padding: 5px 20px;
            border-radius: 5pt;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }

        #header h1 {
            margin-left: 20px;
            font-size: 45px;
        }

        #navigation {
            width: 100%;
            height: auto;
            float: left;
            background-color: #F17B7B;
            border-bottom-width: 5px;
            border-bottom-color: #201E45;
        }

        #navigation li {
            list-style: none;
            text-decoration: none;
        }

        #navigation a {
            text-decoration: none;
            color: white;
            border-radius: 5pt;
            background-color: #2c3e50;
            padding: 5px 20px;
            display: inline-block;
        }

        #navigation a:hover {
            color: #F17B7B;
        }

        #navigation ul li {
            float: left;
            margin: 0px 10px 12px;
        }

        .float-left {
            float: left;
            display: inline-block;
        }


        .float-right {
            float: right;
            display: inline-block;
        }

        #container {
            margin-top: 40px;
        }

        .content1 {
            float: left;
            height: 100%;
            width: 33%;
            text-align: center;
            background-color: #95a5a6;
            background-color: #201E45;
            color: #fff;
        }

        .content2 {
            float: left;
            height: 100%;
            width: 34%;
            text-align: center;
            background-color: #404268;
            color: #fff;
        }

        .content3 {
            float: left;
            height: 100%;
            width: 33%;
            text-align: center;
            background-color: #201E45;
            color: #fff;
        }

        footer {
            width: 100vw;
            position: fixed;
            bottom: 0px;
            background: #f1f1f1;
        }
    </style>
</head>

<body>

    @include('layouts.includes.header')

    <nav id="navigation" class="top">
        <ul>
            <div class="float-right">
                <li><a href="#">HOME</a></li>
                <li><a href="#">PORTOFOLIO</a></li>
                <li><a href="#">ABOUT</a></li>
            </div>
        </ul>
    </nav>

    @section('main-content')
        <section id="container">
        </section>
    @endsection

    @include('layouts.includes.footer')


</body>

</html>
