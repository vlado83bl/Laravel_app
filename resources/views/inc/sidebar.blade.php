<div class="sidebar" id="sidebar">
    <div class="weather">
        <div class="weather__icon-box">
            <i class="far fa-sun weather__icon"></i>
        </div>
        <p class="weather__text">Sunny 27 <span class="weather__text--symbol">&#8728;</span></p>
        <p class="weather__date"></p>
    </div>
    <ul class="side-nav">
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box side-nav__box-active">
                    <i class="side-nav__icon fas fa-home"></i>
                </div>
                <span class="nav-span">Dashboard</span>
            </a>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="side-nav__icon fas fa-cog"></i>
                </div>
                <span class="nav-span">Assets</span>
                <i class="fas fa-chevron-down arrow ml-3" style="transform: rotate(0deg);"></i>
            </a>
            <ul class="side-nav__item--dropdown">
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Map Wind Turbine</a>
                </li>
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Cables</a>
                </li>
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Vessels</a>
                </li>
            </ul>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="side-nav__icon far fa-comment-dots"></i>
                </div>
                <span class="nav-span">Communications</span>
                <i class="fas fa-chevron-down arrow ml-3" style="transform: rotate(0deg);"></i>
            </a>
            <ul class="side-nav__item--dropdown">
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Messages</a>
                </li>
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Social Media</a>
                </li>
            </ul>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="fas fa-cogs"></i>
                </div>
                <span class="nav-span">Activities</span>
                <i class="fas fa-chevron-down arrow ml-3" style="transform: rotate(0deg);"></i>
            </a>
            <ul class="side-nav__item--dropdown">
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">List of activities</a>
                </li>
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">News</a>
                </li>
            </ul>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="side-nav__icon fas fa-users"></i>
                </div>
                <span class="nav-span">Users</span>
                <i class="fas fa-chevron-down arrow ml-3" style="transform: rotate(0deg);"></i>
            </a>
            <ul class="side-nav__item--dropdown">
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">List of users</a>
                </li>
                <li class="side-nav__item--dropdown-item">
                    <a href="#" class="side-nav__item--dropdown-link">Jobs</a>
                </li>
            </ul>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="side-nav__icon fas fa-file-contract"></i>
                </div>
                <span class="nav-span">Reports</span>
            </a>
        </li>
        <li class="side-nav__item">
            <a href="#" class="side-nav__link">
                <div class="side-nav__box">
                    <i class="side-nav__icon fas fa-info"></i>
                </div>
                <span class="nav-span">Support</span>
            </a>
        </li>
    </ul>
</div>

<script>
    const links = document.querySelectorAll('a');
    const spanTags = document.querySelectorAll('span')
    const dropdownLinks = document.querySelectorAll('.side-nav__link');
    const sideNavBoxes = document.querySelectorAll('.side-nav__box');
    const weatherDate = document.querySelector('.weather__date');
    const weatherTime = document.querySelector('.weather__time');
    let date = new Date();

    const tick = () => {
       weatherDate.innerHTML = `${date.toString().slice(0,16)} ${date.getHours()}:${date.getMinutes()}`;
    }
    setInterval(tick, 1000);

    function removeLinkColor() {
        for(let i = 0; i < links.length; i++) {
            links[i].classList.remove('active');
        }
        for(let i = 0; i < spanTags.length; i++) {
            spanTags[i].classList.remove('active');
        } 
        for(let i = 0; i < sideNavBoxes.length; i++) {
            sideNavBoxes[i].classList.remove('side-nav__box-active');
        } 
    }

    for(let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', () => {
            removeLinkColor();
            links[i].classList.add('active');
        })
    }

    for (let i = 0; i < dropdownLinks.length; i++) {
        dropdownLinks[i].addEventListener('click', function() {
            this.classList.toggle('active');
            const dropdownContent = this.nextElementSibling;
            const dropdownLinkChildElement = this.children;
            // Rotate arrows on click
            if(dropdownLinkChildElement[2]) {
                dropdownLinkChildElement[2].style.transform == 'rotate(0deg)'? dropdownLinkChildElement[2].style.transform = 'rotate(180deg)': dropdownLinkChildElement[2].style.transform = 'rotate(0deg)';
            }
            // Displaying and hiding submenu items
            if(dropdownContent) {
                dropdownContent.style.display === "block"? dropdownContent.style.display = "none": dropdownContent.style.display = "block";
            }
            // Managing background colors of items in sidebar
            const boxElement = this.children[0];
            removeLinkColor()
            boxElement.classList.add('side-nav__box-active');
        });
    }
    
</script>
