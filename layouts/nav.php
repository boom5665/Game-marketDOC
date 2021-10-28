<header>
    <!-- Header navigation -->

    <nav class="navbar navbar-light p-0 fixed-top" style="box-shadow: none !important; width: 280px;">
        <a href="index.php" class="navbar-brand logo">
            <img src="./API_files/logo.png" alt="logo">
        </a>
        <div class="navbar-panel-box" style="display: none;">
            <div class="navbar-panel d-flex justify-content-between" style="background-color: #043E35;">
            </div>
            <div class="promo-panel d-flex justify-content-between yellow" style="background-color: #043E35 !important;"></div>
        </div>
    </nav>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav white fixed wide side-nav-light z-depth-0">
        <ul class="custom-scrollbar_">
            <!-- Side navigation links -->
            <li>
                <ul class="accordion collapsible collapsible-accordion">
                    <li id="manu1">
                        <a href="index.php" class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span set-lan="text:1. Introduction">1. Introduction</span></a>
                    </li>
                    <li id="manu2">
                        <a href="version.php" class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span set-lan="text:2. Version">2. Version</span></a>
                    </li>
                    <!-- <li id="manu3">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span
                                set-lan="text:3. Seamless API">3. Lotto Type</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu31"><a class="waves-effect submenu" href="lottotype.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                        Key Type</span></a>
                                </li>
                                <li id="manu32"><a class="waves-effect submenu" href="lottotype.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">3.2
                                        Key Sub Type</span></a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- <li id="manu3">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span
                                set-lan="text:3. Seamless API">3. Lotto Key</span><i
                                class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu31"><a class="waves-effect submenu" href="seamlessapi.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                            Introduction
                                            Seamless API</span></a>
                                </li>
                                <li id="manu32"><a class="waves-effect submenu" href="seamlessapi.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">3.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu33"><a class="waves-effect submenu" href="seamlessapi.php#tabThree">
                                        <span class="sv-normal" set-lan="text:3.3 Setting">3.3
                                            Setting</span></a>
                                </li>
                                <li id="manu34"><a class="waves-effect submenu" href="seamlessapi.php#tabFour">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">3.4 login
                                            request</span></a>
                                </li>
                                <li id="manu35"><a class="waves-effect submenu" href="seamlessapi.php#tabFive">
                                        <span class="sv-normal" set-lan="text:3.5 Send Otp Virify">3.5
                                            Send Otp Virify</span></a>
                                </li>
                                <li id="manu351"><a class="waves-effect submenu" href="seamlessapi.php#tabSix">
                                        <span class="sv-normal" set-lan="text:3.6 GetUserBalance">3.6
                                            GetUserBalance</span></a>
                                </li>
                                <li id="manu352"><a class="waves-effect submenu" href="seamlessapi.php#tabSeven">
                                        <span class="sv-normal" set-lan="text:3.5.2 UserPlaceBet">3.5.2
                                            UserPlaceBet</span></a>
                                </li>
                                <li id="manu353"><a class="waves-effect submenu" href="seamlessapi.php#tabEight">
                                        <span class="sv-normal" set-lan="text:3.5.3">3.5.3
                                            UserPlaceBetCancel</span></a>
                                </li>
                                <li id="manu354"><a class="waves-effect submenu" href="seamlessapi.php#tabNine">
                                        <span class="sv-normal" set-lan="text:3.5.4">3.5.4
                                            UserPlacePayout</span></a>
                                </li>
                                <li id="manu356"><a class="waves-effect submenu" href="seamlessapi.php#tab15">
                                        <span class="sv-normal">3.5.5 UserPayTips</span></a>
                                </li>
                                <li id="manu357"><a class="waves-effect submenu" href="seamlessapi.php#tab16">
                                        <span class="sv-normal">3.5.6 UserPayTipsCancel</span></a>
                                </li>
                                <li id="manu355"><a class="waves-effect submenu" href="seamlessapi.php#tabTen">
                                        <span class="sv-normal">3.5.7 Response Code</span></a>
                                </li>
                                <li id="manu36"><a class="waves-effect submenu" href="seamlessapi.php#tabEleven">
                                        <span class="sv-normal" set-lan="text:3.6">3.6 Optional
                                            API</span></a>
                                </li>
                                <li id="manu361"><a class="waves-effect submenu" href="seamlessapi.php#tabFourteen">
                                        <span class="sv-normal" set-lan="text:3.6.1">3.6.1
                                            memberBetHistories</span></a>
                                </li>
                                <li id="manu362"><a class="waves-effect submenu" href="seamlessapi.php#tabTwelve">
                                        <span class="sv-normal" set-lan="text:3.6.2">3.6.2
                                            betHistories</span></a>
                                </li>
                                <li id="manu363"><a class="waves-effect submenu" href="seamlessapi.php#tabThirteen">
                                        <span class="sv-normal" set-lan="text:3.6.3">3.6.3
                                            getMemberWinLoseTurnOver</span></a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li id="manu4">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span set-lan="text:4.optionchannelApi">3. Seamless API</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu41"><a class="waves-effect submenu" href="seamlessapi.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                            Introduction
                                            Seamless API</span></a>
                                </li>
                                <li id="manu42"><a class="waves-effect submenu" href="seamlessapi.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">3.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu43"><a class="waves-effect submenu" href="seamlessapi.php#tabThree">
                                        <span class="sv-normal" set-lan="text:3.3 Setting">3.3
                                            Setting</span></a>
                                </li>
                                <li id="manu35"><a class="waves-effect submenu" href="seamlessapi.php#tab35">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">3.4 Get Access Key and Secret Key</span></a>
                                </li>
                                <li id="manu36"><a class="waves-effect submenu" href="seamlessapi.php#tab36">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">3.5 Get ITEM Key</span></a>
                                </li>
                                <li id="manu44"><a class="waves-effect submenu" href="seamlessapi.php#tabFour">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">3.6 Check Member Verify</span></a>
                                </li>

                                <li id="manu45"><a class="waves-effect submenu" href="seamlessapi.php#tabFive">
                                        <span class="sv-normal" set-lan="text:3.5 Send Otp Virify">3.7
                                            Send Otp</span></a>
                                </li>
                                <li id="manu451"><a class="waves-effect submenu" href="seamlessapi.php#tabSix">
                                        <span class="sv-normal" set-lan="text:3.6 GetUserBalance">3.8
                                        Dropitem</span></a>
                                </li>
                         
                            </ul>
                        </div>
                    </li>
                    <li id="manu5"> 
                         <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span>4. Optionchannel</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu51"><a class="waves-effect submenu" href="optionchannel.php">
                                        <span class="sv-normal" set-lan="text:4.1 Introduction optionchannel  API">4.1
                                            Auto Login </span></a>
                                </li>
                            </ul> 
                            </ul>
                         </div>
                    </li> 
                    <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-left"></i></a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg rgba-white-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
</header>