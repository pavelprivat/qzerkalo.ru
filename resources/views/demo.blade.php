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

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased" style="overflow: auto">
    <div class="wrapper global">
        <header class="desk">
            <div class="mask"></div>
            <div class="nav-wrapper eventWrap">
                <section class="top-navbar padding-10">
                    <div class="navbar-wrapper wrapper-1">
                        <ul class="contact-list">
                            <li>
                                <a href="">
                                    <svg viewBox="0 0 512 512" height="13" width="13" aria-hidden="true"
                                        focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        class="StyleIconBase contact-icon">
                                        <path fill="currentColor"
                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                        </path>
                                    </svg>
                                    support@qzerkalo.ru
                                </a>
                            </li>
                            <li class="delimiter"></li>
                            <li>
                                <a href="">
                                    <svg viewBox="0 0 448 512" height="13" width="13" aria-hidden="true"
                                        focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        class="StyledIconBase contact-icon">
                                        <path fill="currentColor"
                                            d="m446.7 98.6-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z">
                                        </path>
                                    </svg>
                                    qzerkalo
                                </a>

                            </li>
                            <li class="delimiter"></li>
                            <li>
                                <a href="">Партнерская программа</a>
                            </li>
                        </ul>
                        <div class="download">
                            <a href="" class="AppLink">
                                <svg viewBox="0 0 24 24" width="30px" height="30px" aria-hidden="true"
                                    focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    color="#3ddc84">
                                    <path transform="translate(0, 3.5)"
                                        d="M 17.527344 10.457031 C 16.976562 10.457031 16.53125 9.996094 16.53125 9.425781 C 16.527344 8.851562 16.976562 8.390625 17.527344 8.390625 C 18.082031 8.390625 18.527344 8.851562 18.527344 9.421875 C 18.527344 9.996094 18.082031 10.457031 17.527344 10.457031 M 6.484375 10.457031 C 5.929688 10.457031 5.484375 9.996094 5.484375 9.425781 C 5.484375 8.851562 5.929688 8.390625 6.484375 8.390625 C 7.035156 8.390625 7.480469 8.851562 7.480469 9.421875 C 7.480469 9.996094 7.035156 10.457031 6.484375 10.457031 M 17.886719 4.226562 L 19.882812 0.648438 C 20 0.441406 19.929688 0.179688 19.734375 0.0585938 C 19.535156 -0.0585938 19.28125 0.0117188 19.164062 0.214844 L 17.144531 3.84375 C 15.597656 3.113281 13.859375 2.703125 12.003906 2.703125 C 10.152344 2.703125 8.414062 3.113281 6.867188 3.84375 L 4.847656 0.214844 C 4.730469 0.0117188 4.476562 -0.0585938 4.277344 0.0585938 C 4.082031 0.175781 4.011719 0.441406 4.128906 0.644531 L 6.125 4.226562 C 2.695312 6.160156 0.347656 9.753906 0.00390625 13.996094 L 24.007812 13.996094 C 23.664062 9.753906 21.316406 6.160156 17.886719 4.226562">
                                    </path>
                                </svg>
                                <p class="AppTitle">App for Android™</p>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="main-navbar padding-10">
                    <div class="navbar-wrapper mini-wrapper">

                        <a class="logo-image logo-link">
                            <img src="{{ asset('assets/img/1xbet.svg') }}" alt="" width="120px">
                        </a>

                        <nav class="navigation sidebar">
                            <ul>
                                <li><a href="" class="nav-link active">Главная</a></li>
                                <li><a href="" class="nav-link ">Новости</a></li>
                                <li><a href="" class="nav-link ">О нас</a></li>
                                {{-- <li><a href="" class="nav-link ">radar</a></li> --}}
                                <li>
                                    <div class="onlyMobile">
                                        <a href="" class="nav-link">Перейти на сайт</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="onlyMobile">
                                        <a href="" class="AppLink">
                                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"
                                                focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                color="#3ddc84">
                                                <path transform="translate(0, 3.5)"
                                                    d="M 17.527344 10.457031 C 16.976562 10.457031 16.53125 9.996094 16.53125 9.425781 C 16.527344 8.851562 16.976562 8.390625 17.527344 8.390625 C 18.082031 8.390625 18.527344 8.851562 18.527344 9.421875 C 18.527344 9.996094 18.082031 10.457031 17.527344 10.457031 M 6.484375 10.457031 C 5.929688 10.457031 5.484375 9.996094 5.484375 9.425781 C 5.484375 8.851562 5.929688 8.390625 6.484375 8.390625 C 7.035156 8.390625 7.480469 8.851562 7.480469 9.421875 C 7.480469 9.996094 7.035156 10.457031 6.484375 10.457031 M 17.886719 4.226562 L 19.882812 0.648438 C 20 0.441406 19.929688 0.179688 19.734375 0.0585938 C 19.535156 -0.0585938 19.28125 0.0117188 19.164062 0.214844 L 17.144531 3.84375 C 15.597656 3.113281 13.859375 2.703125 12.003906 2.703125 C 10.152344 2.703125 8.414062 3.113281 6.867188 3.84375 L 4.847656 0.214844 C 4.730469 0.0117188 4.476562 -0.0585938 4.277344 0.0585938 C 4.082031 0.175781 4.011719 0.441406 4.128906 0.644531 L 6.125 4.226562 C 2.695312 6.160156 0.347656 9.753906 0.00390625 13.996094 L 24.007812 13.996094 C 23.664062 9.753906 21.316406 6.160156 17.886719 4.226562">
                                                </path>
                                            </svg>
                                            <p class="AppTitle">App for Android™</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
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
                </section>
            </div>
        </header>

        <main class="content">
            <section class="hero padding-10">
                <div class="hero-wrapper wrapper-1">
                    <div class="animated bounceInRight go delay-500">
                        <div class="welcome-panel card-welcome">
                            <h1 class="WelcomeTitle heading-style">
                                Зарабатывай
                                <br>
                                на 1xBet
                            </h1>
                            <ul class="WelcomeList card-list">
                                <li>Быстрые выплаты</li>
                                <li>Высокие коэффициенты</li>
                                <li>Получи бонус до 7000 рублей на первый депозит</li>
                            </ul>
                            <div class="WelcomeButtons card-buttons">
                                <div class="animated fadeInLeftShort go delay-1500">
                                    <a href="" class="card-button left-button"><svg viewBox="0 0 496 512"
                                            height="18" width="18" aria-hidden="true" focusable="false"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase-ea9ulj-0 VtuNT">
                                            <path fill="currentColor"
                                                d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z">
                                            </path>
                                        </svg>
                                        registration
                                    </a>
                                </div>
                                <div class="animated fadeInRightShort go delay-1500">
                                    <a href="" class="card-button right-button">
                                        <svg viewBox="0 0 512 512" height="18" width="18" aria-hidden="true"
                                            focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase-ea9ulj-0 VtuNT">
                                            <path fill="currentColor"
                                                d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z">
                                            </path>
                                        </svg>
                                        Presentation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cards padding-10">
                <div class="cards-wrapper wrapper-1">
                    <div class="FeaturedCards featured-styler">
                        <div class="animated fadeInUpShort go delay-0">
                            <div class="FeaturedItem item-styler">
                                <div>
                                    <div class="FeaturedIcon">
                                        <svg viewBox="0 0 288 512" height="36" width="36" aria-hidden="true"
                                            focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase contact-icon">
                                            <path fill="currentColor"
                                                d="m209.2 233.4-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="FeaturedTitle">Some text</h3>
                                </div>
                                <div class="FeaturedAnotation anotation">Get paid every week</div>
                            </div>
                        </div>
                        <div class="animated fadeInUpShort go delay-250">
                            <div class="FeaturedItem item-styler">
                                <div>
                                    <div class="FeaturedIcon">
                                        <svg viewBox="0 0 512 512" height="36" width="36" aria-hidden="true"
                                            focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase contact-icon">
                                            <path fill="currentColor"
                                                d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="FeaturedTitle">Some text</h3>
                                </div>
                                <div class="FeaturedAnotation anotation">Get paid every week</div>
                            </div>
                        </div>
                        <div class="animated fadeInUpShort go delay-500">
                            <div class="FeaturedItem item-styler">
                                <div>
                                    <div class="FeaturedIcon">
                                        <svg viewBox="0 0 512 512" height="36" width="36" aria-hidden="true"
                                            focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase contact-icon">
                                            <path fill="currentColor"
                                                d="M256 504c136.967 0 248-111.033 248-248S392.967 8 256 8 8 119.033 8 256s111.033 248 248 248zm-103.398-76.72l53.411-53.411c31.806 13.506 68.128 13.522 99.974 0l53.411 53.411c-63.217 38.319-143.579 38.319-206.796 0zM336 256c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80zm91.28 103.398l-53.411-53.411c13.505-31.806 13.522-68.128 0-99.974l53.411-53.411c38.319 63.217 38.319 143.579 0 206.796zM359.397 84.72l-53.411 53.411c-31.806-13.505-68.128-13.522-99.973 0L152.602 84.72c63.217-38.319 143.579-38.319 206.795 0zM84.72 152.602l53.411 53.411c-13.506 31.806-13.522 68.128 0 99.974L84.72 359.398c-38.319-63.217-38.319-143.579 0-206.796z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="FeaturedTitle">Some text</h3>
                                </div>
                                <div class="FeaturedAnotation anotation">Get paid every week</div>
                            </div>
                        </div>
                        <div class="animated fadeInUpShort go delay-750">
                            <div class="FeaturedItem item-styler">
                                <div>
                                    <div class="FeaturedIcon">
                                        <svg viewBox="0 0 24 24" height="36" width="36" aria-hidden="true"
                                            focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                            class="StyledIconBase contact-icon">
                                            <path
                                                d="M21 4H11l-1-3H3c-1.1 0-2 .9-2 2v15c0 1.1.9 2 2 2h8l1 3h9c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7 16c-2.76 0-5-2.24-5-5s2.24-5 5-5c1.35 0 2.48.5 3.35 1.3L9.03 8.57c-.38-.36-1.04-.78-2.03-.78-1.74 0-3.15 1.44-3.15 3.21S5.26 14.21 7 14.21c2.01 0 2.84-1.44 2.92-2.41H7v-1.71h4.68c.07.31.12.61.12 1.02C11.8 13.97 9.89 16 7 16zm6.17-5.42h3.7c-.43 1.25-1.11 2.43-2.05 3.47-.31-.35-.6-.72-.86-1.1l-.79-2.37zm8.33 9.92c0 .55-.45 1-1 1H14l2-2.5-1.04-3.1 3.1 3.1.92-.92-3.3-3.25.02-.02c1.13-1.25 1.93-2.69 2.4-4.22H20v-1.3h-4.53V8h-1.29v1.29h-1.44L11.46 5.5h9.04c.55 0 1 .45 1 1v14z">
                                            </path>
                                            <path fill="none" d="M0 0h24v24H0zm0 0h24v24H0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="FeaturedTitle">Some text</h3>
                                </div>
                                <div class="FeaturedAnotation anotation">Get paid every week</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="heading padding-10">
                <div class="heading-wrapper wrapper-1">
                    <h2 class="HeadingTitle ">
                        <span>Немного про </span>
                        <span>1xBet ЗЕРКАЛО</span>
                    </h2>
                    <p class="sub-heading">Ми співпрацюємо на найвигідніших умовах і здійснюємо максимально широке
                        охоплення аудиторії</p>
                </div>
            </section>

        </main>

        <footer class="footer main-footer">
            <div class="footer-wrapper wrapper-1">
                <p class="FooterText">
                    Partners-1xBet використовує cookie-файли, щоб гарантувати максимальну зручність. Якщо ви залишаєтеся
                    на сайті, ви погоджуєтеся на використання нами ваших cookie-файлів на Partners-1xBet.
                    <a class="nav-link" href="/ua/cookies">Докладніше</a>
                </p>
            </div>
            <div class="footer-wrapper wrapper-1">
                <div class="FooterContent footer-content-styler"></div>
            </div>
        </footer>
    </div>
    {{-- <div class="Tostify">
        <div class="toast-container toast-container-bottom-left">
            <div class="toast toast-info">
                <div class="toast-body">
                    <div class="CookieToast">
                        <div class="CookieToast-content">
                            Використовуючи цей сайт, ви погоджуєтеся з тим, що компанія Partners-1xBet може використовувати файли «cookie» для зберігання ваших облікових даних, а також з метою збору статистики для покращення роботи сайту та надання вам маркетингових матеріалів з вашого дозволу та з урахуванням ваших інтересів.
                            <button class="CookieOk btn-toast">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
