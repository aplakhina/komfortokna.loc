<nav class="navbar navbar-default center" id="home">
    <!--<div class="container">  <!-- Uncomment for proportional paddings left and right -->
    <div class="navbar-header">
        <div class="container-fluid hidden-lg hidden-md hidden-sm">
            <div class="row">
                <div class="col-xs-4">
                    <a href="/" class="">
                        <img alt="" src="<?php echo URL;?>content/images/logo.png" class="navbar-content-img"/>
                    </a>
                </div>
                <div class="col-xs-4 text-center">
                    <button id="mobile-button" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar center-block"></span>
                        <span class="icon-bar center-block"></span>
                        <span class="icon-bar center-block"></span>
                    </button>
                </div>
                <div class="col-xs-4 text-right">
                    <img src="<?php echo URL;?>content/images/contact-logo.png" class="navbar-content-img"/>
                </div>
            </div>

        </div>

        <a href="/" class="hidden-xs">
            <img alt="" src="<?php echo URL;?>content/images/logo.png" class="navbar-content-img" />
        </a>
    </div>
    <div class="pull-right hidden-xs" style="padding-right: 10px;">
        <img alt="" src="<?php echo URL;?>content/images/contact-logo.png" class="navbar-content-img" />
    </div>
    <div id="navbar" class="collapse navbar-collapse text-center" >
        <ul class="nav navbar-nav"> <!-- All cool stuff here. Secret is not put navbar-nav and add nav-justified -->
            <li><a href="<?php echo URL;?>">Главная</a></li>
            <li><a href="<?php echo URL;?>#sales">Акции</a></li>
            <li><a href="<?php echo URL;?>#prices">Цены</a></li>
            <li><a href="<?php echo URL;?>#contacts">Контакты</a></li>
            <li><a href="<?php echo URL;?>#examples">Работы</a></li>
        </ul>
    </div>
    <!-- </div> -->
</nav>