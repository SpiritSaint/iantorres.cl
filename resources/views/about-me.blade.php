<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ian Torres - About me</title>

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


        .position-ref {
            position: relative;
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

        .m-b-xlg {
            margin-bottom: 90px;
        }

        .m-t-xlg {
            margin-top: 90px;
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
            <a href="/">
                Ian Torres
            </a>
        </div>

        <div class="links m-t-lg">
            <a href="{{ route('about-me') }}"><strong>About me</strong></a>
            <a href="{{ route('projects') }}">Projects</a>
        </div>

        <div class="m-t-xlg">
            Project Manager at GPS Global
        </div>

        <div class="m-t-xlg subtitle">
            <strong>Technologies</strong>
        </div>

        <div class="m-t-xlg m-b-sm">
            <div class="m-b-md subtitle">
                <i class="fab fa-google"></i>
            </div>
            <strong>Google Cloud Platform</strong>
        </div>

        <div class="m-b-sm m-t-md">
            Compute Engine, Kubernetes Engine, Cloud SQL, Cloud Functions, Cloud Storage,
        </div>
        <div class="m-b-md">
            App Engine, Logging, Error Reporting, Net Services.
        </div>


        <div class="m-t-lg">
            <div class="m-b-md subtitle">
                <i class="fal fa-map-marker-alt"></i>
            </div>
            <strong>Google Maps</strong>
        </div>

        <div class="m-b-sm m-t-md">
            Directions API, Maps JavaScript API, Maps SDK for Android,
        </div>
        <div class="m-b-md">
            Maps SDK for iOS, Maps Static API.
        </div>

        <div class="m-t-lg">
            <div class="m-b-md subtitle">
                <i class="fab fa-google-play"></i>
            </div>
            <strong>Google Play Console</strong>
        </div>

        <div class="m-b-md m-t-md">
            Build, Sign, Release.
        </div>

        <div class="m-t-xlg subtitle">
            <strong>Skills</strong>
        </div>

        <div class="m-t-xlg">
            <div class="m-b-md subtitle">
                <i class="fab fa-php"></i>
            </div>
        </div>

        <div class="m-t-md m-b-sm">
            <strong>Laravel</strong>
        </div>

        <div class="m-t-md m-b-sm">
            Authentication, Routing, Logging, Error Handling, Http Handling, Mailing, Broadcasting,
        </div>
        <div class="m-b-sm">
            Notifications, Object Mapping, Storage, Queues, Tasks Schedule, Datetime Handling,
        </div>
        <div class="m-b-md">
            Debugging, Authorization, Validation, Caching, Billing.
        </div>


        <div class="m-t-xlg m-b-md">
            <div class="m-b-md subtitle">
                <i class="fab fa-js"></i>
            </div>
        </div>

        <div class="m-t-md m-b-sm">
            <strong>JavaScript</strong>
        </div>

        <div class="m-t-md m-b-xlg">
            ES6, Node, Webpack, Vue, Ionic, Angular, NativeScript.
        </div>

        <div class="m-t-xlg">
            <div class="m-b-md subtitle">
                <i class="fal fa-server"></i>
            </div>
        </div>

        <div class="m-t-md m-b-sm">
            <strong>Server Management</strong>
        </div>

        <div class="m-t-md m-b-xlg">
            Installation, Configuration, Scaling, Pipelines, Continuous Deployment.
        </div>
    </div>
</div>
</body>
</html>
