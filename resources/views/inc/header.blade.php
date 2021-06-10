<header class="header">
    <div class="header__logo">
        <img src="{{ URL::to('/assets/img/ithaca_logo.jpg') }}" style="width: 50px; height: 40px;">
        <h2 class="header__logo--text text-white">WATERFRONT</h2>
    </div>
    <div class="header__main">
        <a href="#" onclick="toggleSideMenu()" class="navigation__button pl-4">
            <span class="navigation__icon">&nbsp;</span>
        </a>
        <div class="header__main--user d-flex align-items-center">
            <div class="header__main--user-dropdown">
                {{-- BELL ICON NOTIFICATION --}}
                <div class="header__main--user-box">
                    <i class="far fa-bell header__main--user-icon"></i>
                    <span class="header__main--user-icon-notification">3</span>
                </div>
                {{-- DROPDOWN LIST --}}
                <ul class="header__main--user-dropdown-list">
                    <li class="header__main--user-dropdown-item mb-4">
                        <a href="#" class="header__main--user-dropdown-link d-flex align-items-center">
                            <span class="header__main--user-icon-notification mr-4" style="position: inherit"></span>
                            <div class="d-flex flex-column">
                                <p class="header__main--user-dropdown-message d-flex">User <span class="font-weight-bold mx-2">Jim T. Walker</span> sent you a message</p>
                                <p class="header__main--user-dropdown-date">10/14/2020 13:00</p>
                            </div>
                        </a>
                    </li>
                    <li class="header__main--user-dropdown-item mb-4">
                        <a href="#" class="header__main--user-dropdown-link d-flex align-items-center">
                            <span class="header__main--user-icon-notification mr-4" style="position: inherit"></span>
                            <div class="d-flex flex-column">
                                <p class="header__main--user-dropdown-message d-flex">New <span class="font-weight-bold mx-2">user</span> registered</p>
                                <p class="header__main--user-dropdown-date">10/14/2020 13:00</p>
                            </div>
                        </a>
                    </li>
                    <li class="header__main--user-dropdown-item mb-4">
                        <a href="#" class="header__main--user-dropdown-link d-flex align-items-center   ">
                            <span class="header__main--user-icon-notification mr-4" style="position: inherit"></span>
                            <div class="d-flex flex-column">
                                <p class="header__main--user-dropdown-message d-flex">New <span class="font-weight-bold mx-2">vessel</span> registered</p>
                                <p class="header__main--user-dropdown-date">10/14/2020 13:00</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
                        
            <div class="header__main--user-nav d-flex flex-column align-items-center pr-4">
                <p class="header__main--user-nav-name text-white">John Seakeeper</p>
                <p class="header__main--user-nav-job">App Admin</p>
            </div>
            <img class="header__main--user-photo" src="{{ URL::to('/assets/img/user_photo.jpg') }}">
        </div>
    </div>
</header>

<script>
    const dropdown = document.querySelector('.header__main--user-dropdown');
    const dropdownList = document.querySelector('.header__main--user-dropdown-list');
  
    dropdown.addEventListener('click', (event) => {
        event.stopPropagation();
        dropdownList.style.display == 'none'? dropdownList.style.display = 'block': dropdownList.style.display = 'none';
    })
    window.onclick = function(event) {
        dropdownList.style.display = 'none';
    }
</script>
