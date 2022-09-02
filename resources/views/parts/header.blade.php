@php
$locale = LaravelLocalization::getCurrentLocale();
@endphp

<!--Header-->
<div id="headblock" class="container-fluid">

<!-- Меню  десктоп-->
    <nav id="header-block" class="d-none">
        <div class="header-block__logo">

            <img src = "{{  asset(trans('main.logo')) }}" alt="logo" />
        </div>
        <!-- навигационное меню -->
        <div  class="header-block__menu" style="flex-grow: 1;">
            <!--Блок меню -->
            <ul class="menu-block header-block-menu__content">
                <li class="dropdown menu-block__inner-menu ">
                    <a class="text-nav dropdown-toggle color-white" data-bs-toggle="dropdown" aria-expanded="false" >Регион<span class="carret animate__rotate"></span></a>
                    <ul class="submenu dropdown-menu border-gray">
                        <li class="menu-block__country__elem"><a class="text-nav" href="/">Грузия</a></li>
                        <li class="push-left"><a class="text-nav" href="/batumi.html">Батуми</a></li>
                        <li class="push-left"><a class="text-nav" href="/">Тбилиси</a></li>



                        <li class="menu-block__country__elem"><a class="text-nav" href="/">Украина</a></li>
                        <li class="push-left"><a class="text-nav" href="/">Киев</a></li>
                        <li class="push-left"><a class="text-nav" href="/">Днепр</a></li>



                    </ul>
                </li>
                <li><a class="text-nav" href="/">Как это работает?</a></li>
                <li class="dropdown menu-block__inner-menu">
                    <a class="text-nav dropdown-toggle color-white" data-bs-toggle="dropdown" aria-expanded="false" >Инвесторам<span class="carret animate__rotate"></span></a>
                    <ul class="submenu dropdown-menu border-gray">
                        <li><a class="text-nav " href="/">Подключить авто</a></li>
                        <li><a class="text-nav " href="/">Франшиза</a></li>
                        <li><a class="text-nav " href="/">Купить программу</a></li>
                    </ul>
                </li>
                <li><a class="text-nav" href="/">Контакты</a></li>
            </ul>
            <!--Блок меню -->
        </div>
        <!-- социальное  меню -->
        <div class="header-block__social" style="margin-left:20px;">
            <ul class="menu-block social-menu-block__desktop">
                <li class = "dropdown menu-block__inner-menu">
                    <button type="button" class="btn-nav text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Связаться</button>
                    <ul  class="submenu dropdown-menu">
                        <li><a class="text-nav" href="/">🇺🇦 +38(097) 444-5-222</a></li>
                        <li><a class="text-nav" href="/">🇬🇪 +(995) 514-646-444</a></li>
                        <li>
                            <a><img src="{{  asset('/images/content/icons/telegram.png') }}" alt="Телеграм"></a>
                            <a><img src="{{  asset('/images/content/icons/viber.png') }}" alt="Вайбер"></a>
                            <a><img src="{{  asset('/images/content/icons/messenger.png') }}" alt="мечченджер"></a>
                        </li>
                    </ul>
                </li>
                <li><a class="text-nav link-login" href="/">Логин</a></li>
                <li class="dropdown menu-block__inner-menu">
                    <a class="text-nav dropdown-toggle text-uppercase text-white" data-bs-toggle="dropdown" aria-expanded="false" >
                        {{LaravelLocalization::getCurrentLocale()}}<span class="carret animate__rotate "></span>
                    </a>
                    <ul class="submenu dropdown-menu ">
                        <li><a class="text-nav text-uppercase {{ ($locale == 'ru') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('ru')}}">RU</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'en') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('en')}}">EN</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'uk') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('uk')}}">UK</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'ka') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('ka')}}">KA</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

<!-- Мобилбьное меню -->
    <nav id="header-block-mobile" class="">
<!-- Бургер -->
        <div class="header-block-mobile__burger-block">
            <!--Кнопка бургера -->
            <div  class="burger-block__burger-button">
                <span class="burger-button__dash burger-button__dash__top animate__all"></span>
                <span class="burger-button__dash burger-button__dash__middle animate__all"></span>
                <span class="burger-button__dash burger-button__dash__bottom animate__all"></span>
            </div>
            <!-- само меню -->
            <div class="burger-block__burger-menu">

                <ul class="menu-block animate__all animate__disappear">

                    <li class="dropdown menu-block__inner-menu">
                        <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Регион<span class="carret animate__rotate"></span></a>
                        <ul class="submenu dropdown-menu animate__all animate__fold">

                            <li class="menu-block__country__elem"><a class="text-nav" href="/" >Грузия</a> </li>
                            <li class="push-left"><a class="text-nav" href="/batumi.html">Батуми</a></li>
                            <li class="push-left"><a class="text-nav" href="/">Тбилиси</a></li>



                            <li class="menu-block__country__elem"><a class="text-nav" href="/">Украина</a></li>
                            <li class="push-left"><a class="text-nav" href="/">Киев</a></li>
                            <li class="push-left"><a class="text-nav" href="/">Днепр</a></li>





                        </ul>
                    </li>

                    <li><a class="text-nav" href="/">Как это работает?</a></li>

                    <li class="dropdown menu-block__inner-menu">
                        <a class="text-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >Инвесторам<span class="carret animate__rotate"></span></a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="text-nav " href="/">Подключить авто</a></li>
                            <li><a class="text-nav " href="/">Франшиза</a></li>
                            <li><a class="text-nav " href="/">Купить программу</a></li>
                        </ul>
                    </li>

                    <li><a class="text-nav" href="/">Контакты</a></li>

                    <li><a class="text-nav link-login" href="/">Логин</a></li>

                    <ul class="menu-block__language-menu__mobile">
                        <li><a class="text-nav text-uppercase {{ ($locale == 'ru') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('ru')}}">RU</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'en') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('en')}}">EN</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'uk') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('uk')}}">UK</a></li>
                        <li><a class="text-nav text-uppercase {{ ($locale == 'ka') ? 'active' : ''}}" href="{{LaravelLocalization::getLocalizedURL('ka')}}">KA</a></li>
                    </ul>

                </ul>

            </div>



        </div>
        <!-- логотип по центу -->
        <div class="header-block-mobile__icon">
            <a href = "/">
                <img class="header-block-mobile-icon__image" src="{{  __('main.logo_mob') }}" alt="домашняя"/>
            </a>
        </div>
        <!-- Меню телефонов -->
        <div class="header-block-mobile__phone">

            <button class="btn btn-info text-nav"><img  src="{{  asset('/images/content/icons/phone.png') }}"/></button>
        </div>
    </nav>

</div>
