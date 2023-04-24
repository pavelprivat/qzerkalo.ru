<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased" style="overflow: auto">
    <div class="wrapper global">
        <header>
            <nav>
                <div class="nav container-fluide d-flex flex-column no-wrap">
                    <div class="top-navbar padding-10">
                        <div class="navbar-wrapper wrapper-1 container">
                            <ul class="contact-list">
                                <li>
                                    <a href="">
                                        <svg viewBox="0 0 512 512" height="13" width="13" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="StyleIconBase contact-icon"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                                        someadress
                                    </a>
                                </li>
                                <li class="delimiter"></li>
                                <li>
                                    <a href="">
                                        <svg viewBox="0 0 448 512" height="13" width="13" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="StyledIconBase contact-icon"><path fill="currentColor" d="m446.7 98.6-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path></svg>
                                        qzerkalo
                                    </a>

                                </li>
                                <li class="delimiter"></li>
                                <li>
                                    <a href="">Some text here</a>
                                </li>
                            </ul>
                            <div class="download">
                                <a href="" class="AppLink">
                                    <svg viewBox="0 0 24 24" width="30px" height="30px" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#3ddc84"><path transform="translate(0, 3.5)" d="M 17.527344 10.457031 C 16.976562 10.457031 16.53125 9.996094 16.53125 9.425781 C 16.527344 8.851562 16.976562 8.390625 17.527344 8.390625 C 18.082031 8.390625 18.527344 8.851562 18.527344 9.421875 C 18.527344 9.996094 18.082031 10.457031 17.527344 10.457031 M 6.484375 10.457031 C 5.929688 10.457031 5.484375 9.996094 5.484375 9.425781 C 5.484375 8.851562 5.929688 8.390625 6.484375 8.390625 C 7.035156 8.390625 7.480469 8.851562 7.480469 9.421875 C 7.480469 9.996094 7.035156 10.457031 6.484375 10.457031 M 17.886719 4.226562 L 19.882812 0.648438 C 20 0.441406 19.929688 0.179688 19.734375 0.0585938 C 19.535156 -0.0585938 19.28125 0.0117188 19.164062 0.214844 L 17.144531 3.84375 C 15.597656 3.113281 13.859375 2.703125 12.003906 2.703125 C 10.152344 2.703125 8.414062 3.113281 6.867188 3.84375 L 4.847656 0.214844 C 4.730469 0.0117188 4.476562 -0.0585938 4.277344 0.0585938 C 4.082031 0.175781 4.011719 0.441406 4.128906 0.644531 L 6.125 4.226562 C 2.695312 6.160156 0.347656 9.753906 0.00390625 13.996094 L 24.007812 13.996094 C 23.664062 9.753906 21.316406 6.160156 17.886719 4.226562"></path></svg>
                                    <p class="AppTitle">App for Android™</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main-navbar padding-10">
                        <div class="navbar-wrapper mini-wrapper">
                            <div class="logo">
                                <a class="logo-image">
                                    <img src="{{asset('assets/img/1xbet.svg')}}" alt="" width="120px">
                                </a>
                                <p class="date">{{date('d.m.Y')}}</p>
                            </div>
                            <div class="navigation sidebar">
                                <ul>
                                    <li><a href="" class="nav-link active">home</a></li>
                                    <li><a href="" class="nav-link ">catalog</a></li>
                                    <li><a href="" class="nav-link ">pidaras</a></li>
                                    <li><a href="" class="nav-link ">radar</a></li>
                                    <li>
                                        <div class="onlyMobile">
                                            <a href="" class="nav-link">Some Rules</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="onlyMobile">
                                            <a href="" class="AppLink">
                                                <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg" color="#3ddc84"><path transform="translate(0, 3.5)" d="M 17.527344 10.457031 C 16.976562 10.457031 16.53125 9.996094 16.53125 9.425781 C 16.527344 8.851562 16.976562 8.390625 17.527344 8.390625 C 18.082031 8.390625 18.527344 8.851562 18.527344 9.421875 C 18.527344 9.996094 18.082031 10.457031 17.527344 10.457031 M 6.484375 10.457031 C 5.929688 10.457031 5.484375 9.996094 5.484375 9.425781 C 5.484375 8.851562 5.929688 8.390625 6.484375 8.390625 C 7.035156 8.390625 7.480469 8.851562 7.480469 9.421875 C 7.480469 9.996094 7.035156 10.457031 6.484375 10.457031 M 17.886719 4.226562 L 19.882812 0.648438 C 20 0.441406 19.929688 0.179688 19.734375 0.0585938 C 19.535156 -0.0585938 19.28125 0.0117188 19.164062 0.214844 L 17.144531 3.84375 C 15.597656 3.113281 13.859375 2.703125 12.003906 2.703125 C 10.152344 2.703125 8.414062 3.113281 6.867188 3.84375 L 4.847656 0.214844 C 4.730469 0.0117188 4.476562 -0.0585938 4.277344 0.0585938 C 4.082031 0.175781 4.011719 0.441406 4.128906 0.644531 L 6.125 4.226562 C 2.695312 6.160156 0.347656 9.753906 0.00390625 13.996094 L 24.007812 13.996094 C 23.664062 9.753906 21.316406 6.160156 17.886719 4.226562"></path></svg>
                                                <p class="AppTitle">App for Android™</p>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-btn">
                                <button class="btn btn-reg">1xBet</button>
                            </div>
                            <input type="checkbox" id="checkbox">
                            <label for="checkbox" class="toggle" id="toggler">
                                <div class="bars" id="bar1"></div>
                                <div class="bars" id="bar2"></div>
                                <div class="bars" id="bar3"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="content">

        </main>

        <footer>

        </footer>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" ></script>

</body>
</html>
