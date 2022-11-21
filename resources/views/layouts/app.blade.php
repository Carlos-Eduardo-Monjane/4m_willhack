<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        4M
    </title>

    <link rel="icon" href="{{ asset('assets/img/logo-ct-dark.png') }}" type="image/png" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo-ct-dark.png') }}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />

    <!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">


    <style>
        .box-cookies.hide {
            display: none !important;
        }

        .box-cookies {
            position: fixed;
            background: rgba(0, 0, 0, .9);
            width: 100%;
            z-index: 998;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .box-cookies .msg-cookies,
        .box-cookies .btn-cookies {
            text-align: center;
            padding: 25px;
            color: #fff;
            font-size: 18px;
        }

        .box-cookies .btn-cookies {
            background: #1e88e5;
            cursor: pointer;
            align-self: normal;
        }

        @media screen and (max-width: 600px) {
            .box-cookies {
                flex-direction: column;
            }
        }
    </style>



</head>

<body class="bg-gray-200">
    <div class="loader"></div>



    <div id="app">



        <main class="main-content  mt-0">
            {{-- <span class="mask bg-gradient-dark opacity-3"></span> --}}
            @yield('content')
        </main>
    </div>

    <!-- Cookie -->

    <!--Ambiental MODAL-->
    <!--<div class="box-cookies hide">-->
    <!--   <p class="msg-cookies">Este site usa cookies para garantir que você obtenha a melhor experiência.</p>-->
    <!--   <button class="btn-cookies">Aceitar!</button>-->
    <!--</div>-->

    <!--  <script>
        (() => {
            if (!localStorage.pureJavaScriptCookies) {
                document.querySelector(".box-cookies").classList.remove('hide');
            }

            const acceptCookies = () => {
                document.querySelector(".box-cookies").classList.add('hide');
                localStorage.setItem("pureJavaScriptCookies", "accept");
            };

            const btnCookies = document.querySelector(".btn-cookies");

            btnCookies.addEventListener('click', acceptCookies);
        })();
    </script> -->

    <!--<div class="container">-->

    <!--<div class="card" style="margin-top: 70px">-->
    <!--    <div class="card-body">-->
    <!--        <div id="fillme"></div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--</div>-->

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <p style="font-size:15px;margin:15px;"><b>Uso de Cookies.</b> <br>
        <p style="font-size:12px;text-align:justify;margin:15px;">Nós utilizamos cookies, incluindo cookies de
            terceiros, para coletar informações sobre como os nossos visitantes usam os nossos sites. Eles nos ajudam a
            proporcionar a você a melhor experiência possível, melhorar continuamente os nossos sites e apresentar
            ofertas adequadas aos seus interesses. Ao clicar no botão "Aceitar", você concorda com a utilização desses
            cookies. Você pode cancelar seu consentimento a qualquer momento, alterar suas preferências.</p>
        <p style="font-size:15px;margin:15px;"><a href="{{ asset('assets/politicas.pdf') }}" target="_blank">Política de
                Privacidade</a>

            <button type="button" class="btn btn-primary btn-sm acceptcookies">
                ACEITAR
            </button>
        </p>
    </div>








    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
    <!-- Include cookiealert script -->
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>





</body>

</html>
