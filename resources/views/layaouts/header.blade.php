<!-- header -->
<div class="header-w3layoutstop">
    <div class="container">
        <div class="hdr-w3left navbar-left">
            <p><span class="glyphicon glyphicon-earphone"></span> +996 779 387 990 </p>
        </div>
        <div class="w3ls-bnr-icons social-icon navbar-right">
            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="agileits-banner about-w3lsbnr">
    <div class="bnr-agileinfo">
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="{{ route('index') }}">Байчечекей</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-right">
                        <ul class="nav navbar">
                            <li><a href="{{ route('index') }}" class="{{ (request()->is('home')) ? 'active' : '' }}">Главная</a></li>
                            <li><a href="{{ route('about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">О нас</a></li>
                            <li><a href="{{ route('gallery') }}" class="{{ (request()->is('gallery')) ? 'active' : '' }}">Галерея</a></li>
                            <li><a href="{{ route('listOfChild') }}" class="{{ (request()->is('list')) ? 'active' : '' }}">Список детей</a></li>
                            <li><a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Контакты</a></li>
                            <li><a href="{{ route('register') }}" class="{{ (request()->is('register')) ? 'active' : '' }}">Регистрация</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //navigation -->
        <div class="banner-w3text w3layouts">
            <div class="container">
                <h2>"Байчечекей" балдар бакчасы</h2>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
