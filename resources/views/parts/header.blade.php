<!--Header-->
<div id="headblock" class="container-fluid">


    <nav id="header-block" class="d-none d-md-flex">
        <div class="header-block__logo">

            <img src = "{{  asset('/images/content/logo_en_top.png') }}" alt="logo" />
        </div>
        <div class="header-block__menu">
            <!--Блок меню -->
            <ul class="menu-block">
                <li class="dropdown menu-block__inner-menu">
                    <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Регион<span class="carret animate__rotate"></span></a>
                    <ul class="submenu dropdown-menu">
                        <li class="disabled">Грузия</li>
                        <li><a class="text-nav" href="#">Батуми</a></li>
                        <li><a class="text-nav" href="#">Тбилиси</a></li>
                        <li class="disabled">Украина</li>
                        <li><a class="text-nav" href="#">Киев</a></li>
                        <li><a class="text-nav" href="#">Днепр</a></li>
                    </ul>
                </li>
                <li><a class="text-nav" href="#">Как это работает</a></li>
                <li class="dropdown menu-block__inner-menu">
                    <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Инвесторам<span class="carret animate__rotate"></span></a>
                    <ul class="submenu dropdown-menu">
                        <li><a class="text-nav" href="#">подключить авто</a></li>
                        <li><a class="text-nav" href="#">франшиза</a></li>
                        <li><a class="text-nav" href="#">купить программу</a></li>
                    </ul>
                </li>
                <li><a class="text-nav" href="#">Контакты</a></li>
            </ul>
            <!--Блок меню -->
        </div>
        <div class="header-block__social">
            <ul class="menu-block">
                <li class = "dropdown menu-block__inner-menu">
                    <button type="button" class="btn-info text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><img src="{{  asset('/images/content/icons/phone.svg') }}"/>Свяжитесь с нами</button>
                    <ul  class="submenu dropdown-menu">
                        <li><a class="text-nav" href="#">🇺🇦 +38(097) 444-5-222</a></li>
                        <li><a class="text-nav" href="#">🇬🇪 +(995) 514-646-444</a></li>
                        <li>
                            <a><img src="{{  asset('/images/content/icons/telegram.png') }}" alt="Телеграм"></a>
                            <a><img src="{{  asset('/images/content/icons/viber.png') }}" alt="Вайбер"></a>
                            <a><img src="{{  asset('/images/content/icons/messenger.png') }}" alt="мечченджер"></a>
                        </li>
                    </ul>
                </li>
                <li><a class="text-nav link__block__image" href="#"><img style="padding-right:5px;" src="{{  asset('/images/content/icons/login.png') }}" alt="">Логин</a></li>
                <li class="dropdown menu-block__inner-menu">
                    <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                        РУС<span class="carret animate__rotate"></span>
                    </a>
                    <ul class="submenu dropdown-menu">
                        <li><a class="text-nav" href="#">РУС</a></li>
                        <li><a class="text-nav" href="#">EN</a></li>
                        <li><a class="text-nav" href="#">UK</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <nav id="header-block-mobile" class="">

        <div class="header-block-mobile__burger-block">
            <div  class="burger-block__burger-button">
                <span class="burger-button__dash burger-button__dash__top animate__all"></span>
                <span class="burger-button__dash burger-button__dash__middle animate__all"></span>
                <span class="burger-button__dash burger-button__dash__bottom animate__all"></span>
            </div>
            <div class="burger-block__burger-menu">
                <ul class="menu-block animate__all animate__disappear">
                    <li class="dropdown menu-block__inner-menu">
                        <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Регион<span class="carret animate__rotate"></span></a>
                        <ul class="submenu dropdown-menu animate__all">
                            <li class="disabled">Грузия</li>
                            <li><a class="text-nav" href="#">Батуми</a></li>
                            <li><a class="text-nav" href="#">Тбилиси</a></li>
                            <li class="disabled">Украина</li>
                            <li><a class="text-nav" href="#">Киев</a></li>
                            <li><a class="text-nav" href="#">Днепр</a></li>
                        </ul>
                    </li>
                    <li><a class="text-nav" href="#">Как это работает</a></li>
                    <li class="dropdown menu-block__inner-menu">
                        <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Инвесторам<span class="carret animate__rotate"></span></a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="text-nav" href="#">подключить авто</a></li>
                            <li><a class="text-nav" href="#">франшиза</a></li>
                            <li><a class="text-nav" href="#">купить программу</a></li>
                        </ul>
                    </li>
                    <li><a class="text-nav" href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="header-block-mobile__icon">
            <a href = "/">
                <img src="{{  asset('/images/content/logo_ru_mob.png') }}" alt="домашняя"/>
            </a>
        </div>
        <div class="header-block-mobile__phone">

            <button class="btn btn-info text-nav"><img  src="{{  asset('/images/content/icons/phone.png') }}"/></button>
        </div>
    </nav>
</div>
