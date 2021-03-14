<?php
    if ( isset($recent_page) && $recent_page !== "" ) {
        $is_recent_page = true;
    }
?>

<header class="site-header header-s1">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="social">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                        <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 al-right">
                    <ul class="top-nav">
                        <li><a href="./faqs.php">Help</a></li>
                        <li><a href="./contact.php">Support</a></li>
                        <li><a href="./register.php">Register</a></li>
                        <li><a href="./login.php">Login</a></li>	
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary sticky">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" style="" href="https://cointradeinvest.com/">
                <h5 class="navbar-brand-img mx-auto" style="font-family: &#39;Kurale&#39;, serif;">
                    <img src="./frontend/logo_header_alt.png" style="width: 30px;" class="navbar-brand-img mx-auto d-inline" alt="...">
                    <span style="color: #1A3C8B" class=""> CoinTradeInvest </span>
                  </h5>
            </a>
            <!-- #end Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="quote-btn"><a class="btn" href="https://cointradeinvest.com/register"><span>get started</span></a></div>
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li <?= ($is_recent_page === true && $recent_page === "home" )  ?  "class='dropdown active'" : "class='dropdown'"; ?>><a href="./index.php" class="dropdown-toggle">Home <b class=""></b></a>
                    </li>
                    <li <?= ($is_recent_page === true && $recent_page === "about" )  ?  "class='dropdown active'" : "class='dropdown'"; ?>><a href="./about.php" class="dropdown-toggle">About <b class=""></b></a>
                    </li>
                    <li <?= ($is_recent_page === true && $recent_page === "faqs" )  ?  "class='active'" : "class=''"; ?> ><a href="./faqs.php">Faqs</a></li>
                    <li <?= ($is_recent_page === true && $recent_page === "trading" )  ?  "class='active'" : "class=''"; ?>><a href="./pricing.php">Trading</a></li>
                    <li <?= ($is_recent_page === true && $recent_page === "contact" )  ?  "class='active'" : "class=''"; ?>><a href="./contact.php">Contact</a></li>
                    <li <?= ($is_recent_page === true && $recent_page === "register" )  ?  "class='quote-btn hidden-xs hidden-sm active'" : "class='quote-btn hidden-xs hidden-sm'"; ?> ><a class="btn" href="./register.php">Register</a></li>
                    <li <?= ($is_recent_page === true && $recent_page === "login" )  ?  "class='quote-btn hidden-xs hidden-sm active'" : "class='quote-btn hidden-xs hidden-sm'"; ?> ><a class="btn" href="./login.php">Login</a></li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- End Navbar -->
</header>