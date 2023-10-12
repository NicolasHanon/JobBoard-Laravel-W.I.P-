<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{ URL::asset('stylesheet/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kanit:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nav">
        <p>JobBoard</p>
        <img class="menu" onClick="showNav()" src="{{ URL::asset('svg/menu.svg') }}">
        <nav class="burger-drill">
            <div>
                <img class="option" src="{{ URL::asset('svg/home.svg') }}">
                <p class="optiontext">Home</p>
            </div>
            <div>
                <img class="option" src="{{ URL::asset('svg/add.svg') }}">
                <p class="optiontext">Post an ad</p>
            </div>
            <div>
                <img class="option" src="{{ URL::asset('svg/admin.svg') }}">
                <p class="optiontext">Admin panel</p>
            </div>
            <div>
                <img class="option" src="{{ URL::asset('svg/profile.svg') }}">
                <p class="optiontext">Profile</p>
            </div>
            <div>
                <img class="option" src="{{ URL::asset('svg/logout.svg') }}">
                <p class="optiontext">Log Out</p>
            </div>
        </nav>
    </div>
    <div class="job_container">
        <main>
            <p class="job">Job1</p>
            <div class="separator"></div>
            <p class="job">Job2</p>
            <div class="separator"></div>
            <p class="job">Job3</p>
            <div class="separator"></div>
            <p class="job">Job4</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job</p>
            <div class="separator"></div>
            <p class="job">Job-2</p>
            <div class="separator"></div>
            <p class="job">Job-1</p>
        </main>
        <aside class="content-drill">
            <img class="rightarrow" src="{{ URL::asset('svg/rightarrow.svg') }}">
            <div class="content">
                <p>Content</p>
                <form>
                    <textarea placeholder="Why we should hire you ?"></textarea>
                    <input type="submit" value="Apply">
                </form>
            </div>
        </aside>
    </div>
</body>
</html>

<script src="{{ asset('js/index.js')}}"></script>