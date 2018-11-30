<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ian Torres - Projects</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            padding-left: 30px;
            padding-right: 30px;
        }

        .title {
            font-size: 32px;
            font-weight: 100;
        }

        .subtitle {
            font-size: 24px;
        }

        .links > a, a {
            color: #636b6f;
            padding: 0 25px;
            font-weight: 300;
            letter-spacing: .1rem;
            text-decoration: none;;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .m-t-xlg {
            margin-top: 90px;
        }

        .m-b-xlg {
            margin-bottom: 90px;
        }

        .m-t-lg {
            margin-top: 60px;
        }

        .m-t-md {
            margin-top: 30px;
        }

        .m-b-sm {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="position-ref full-height">
    <div class="content">
        <div class="title m-b-md m-t-md">
            <a href="/">Ian Torres</a>
        </div>

        <div class="links m-t-lg">
            <a href="{{ route('about-me') }}">About me</a>
            <a href="{{ route('projects') }}"><strong>Projects</strong></a>
        </div>

        <div class="m-t-xlg">
            I'm follow my dreams
        </div>

        <div class="m-t-xlg subtitle">
            <strong>Solutions</strong>
        </div>

        <div class="m-t-xlg m-b-sm">
            <strong>Resource Management</strong>
        </div>

        <div class="m-b-sm m-t-md">
            <i class="fas fa-cube"></i> Resources, <i class="fal fa-map-marker-alt"></i> Sites, <i class="far fa-truck"></i> Vehicles and <i class="fal fa-person-dolly"></i> People
        </div>
        <div class="m-b-sm">
            It includes a mobile application for the driver and a web platform for the dispatcher.
        </div>
        <div class="m-b-sm">
            Allows to coordinate an activity and notify the interested parties of the progress using a management system based on kanban.
        </div>
        <div class="m-b-xlg">
            <strong>August 2018 &mdash; Still in progress</strong>
        </div>


        <div class="m-t-xlg m-b-sm">
            <strong>Vehicle Tracking</strong>
        </div>

        <div class="m-b-sm m-t-md">
            <i class="fal fa-map-marker-alt"></i> Locations, <i class="fal fa-map"></i> Maps and <i class="fal fa-info"></i> Details
        </div>
        <div class="m-b-sm">
            It consists of a web platform that allows to visualize on a map, in tables or in reports of the stored data of GPS devices and a mobile application to see the location and the route.
        </div>
        <div class="m-b-xlg">
            <strong>March 2018 &mdash; July 2018</strong>
        </div>
    </div>
</div>
</body>
</html>
