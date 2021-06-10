<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'LSAPP') }}</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/2c501b6c21.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-container">
        @include('inc/header')
        <div class="main d-flex">
            @include('inc/sidebar')
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        const sidebar = document.querySelector('#sidebar');
        const sideNav = document.querySelector('.side-nav');
        const sideBarText = document.querySelectorAll('.nav-span');
        const downArrows = document.querySelectorAll('.fa-chevron-down');
        const headerLogo = document.querySelector('.header__logo');
        const headerLogoText = document.querySelector('.header__logo--text');
        const dropdownItems = document.querySelectorAll('.side-nav__item--dropdown');
        

        function toggleSideMenu() {
            if(sidebar.style.flex == '0 0 18%') {
                sidebar.style.flex = '0 0 6%';
                headerLogo.style.flex = '0 0 6%';
                for(let i = 0; i < sideBarText.length; i++) {
                    sideBarText[i].style.display = 'none';
                }
                for(let i = 0; i < downArrows.length; i++) {
                    downArrows[i].style.display = 'none';
                }
                headerLogoText.style.display = 'none';
                sideNav.classList.add('responsiveSidebar');
                for(let i = 0; i < dropdownItems.length; i++) {
                    dropdownItems[i].style.display = 'none';
                }
            } else {
                sidebar.style.flex = '0 0 18%';
                headerLogo.style.flex = '0 0 18%';
                for(let i = 0; i < sideBarText.length; i++) {
                    sideBarText[i].style.display = 'block';
                }
                for(let i = 0; i < downArrows.length; i++) {
                    downArrows[i].style.display = 'block';
                    downArrows[i].style.transform = 'rotate(0deg)';
                }
                headerLogoText.style.display = 'block';
                sideNav.classList.remove('responsiveSidebar');
            }
        }
    </script>
</body>

</html>
