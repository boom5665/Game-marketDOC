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
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span set-lan="text:1. Introduction">1. Introduction</span>
                        </a>
                    </li>
                    <li id="manu2">
                        <a href="version.php" class="collapsible-header waves-effect">
                            <i class="sv-slim-icon far fa-report fa-angle-double-left"></i><span set-lan="text:2. Version">2. Version</span>
                        </a>
                    </li>

                    <li id="manu3">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span set-lan="text:3. Seamless API">3. Add ITEM</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu31"><a class="waves-effect submenu" href="additem.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.1
                                            Add Level Item
                                        </span></a>
                                </li>
                                <li id="manu31"><a class="waves-effect submenu" href="additem.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">3.2
                                            Add Item
                                        </span></a>
                                </li>
                            </ul>

                        </div>
                    </li>

                    <li id="manu4">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span set-lan="text:4.optionchannelApi">4. API</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu41"><a class="waves-effect submenu" href="seamlessapi.php#tabOne">
                                        <span class="sv-normal" set-lan="text:3.1 Introduction Seamless API">4.1
                                            Introduction
                                            Seamless API</span></a>
                                </li>
                                <li id="manu42"><a class="waves-effect submenu" href="seamlessapi.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:3.2 Workflow">4.2
                                            Workflow</span></a>
                                </li>
                                <li id="manu43"><a class="waves-effect submenu" href="seamlessapi.php#tabThree">
                                        <span class="sv-normal" set-lan="text:3.3 Setting">4.3
                                            Setting</span></a>
                                </li>
                                <li id="manu35"><a class="waves-effect submenu" href="seamlessapi.php#tab35">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">4.4 Get Access Key and Secret Key</span></a>
                                </li>
                                <li id="manu36"><a class="waves-effect submenu" href="seamlessapi.php#tab45">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">4.5 Get GAME Key</span></a>
                                </li>
                                <li id="manu36"><a class="waves-effect submenu" href="seamlessapi.php#tab36">
                                        <span class="sv-normal" set-lan="text:3.4 Check Member Verify">4.6 Get ITEM Key</span></a>
                                </li>
                               

                                <!-- <li id="manu45"><a class="waves-effect submenu" href="seamlessapi.php#tabFive">
                                        <span class="sv-normal" set-lan="text:3.5 Send Otp Virify">4.7
                                            Send Otp</span></a>
                                </li> -->
                                <li id="manu451"><a class="waves-effect submenu" href="seamlessapi.php#tabSix">
                                        <span class="sv-normal" set-lan="text:3.6 GetUserBalance">4.7
                                            Dropitem</span></a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li id="manu5">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span>5. API Report </span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu51"><a class="waves-effect submenu" href="apireport.php#tabOne">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.1
                                        Get Login Token </span></a>
                                </li>
                                <li id="manu52"><a class="waves-effect submenu" href="apireport.php#tabTwo">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.2
                                        Get Winlose Report </span></a>
                                </li>
                                <li id="manu53"><a class="waves-effect submenu" href="apireport.php#tabThree">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.3
                                        Get Game Report </span></a>
                                </li>
                                <li id="manu54"><a class="waves-effect submenu" href="apireport.php#tabFour">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.4
                                         Get Item Report</span></a>
                                </li>
                                <li id="manu55"><a class="waves-effect submenu" href="apireport.php#tabFive">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.5
                                        Transaction</span></a>
                                </li>
                                <li id="manu56"><a class="waves-effect submenu" href="apireport.php#tabSix">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">5.6
                                        User Item List</span></a>
                                </li>
                            </ul>


                        </div>
                    </li>
                    <li id="manu6">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span>6. Call Back </span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu61"><a class="waves-effect submenu" href="callback.php">
                                        <span class="sv-normal" set-lan="text:5.1 Introduction callback  API">6.1
                                        Call back Withdraw </span></a>
                                </li>
                            </ul>


                        </div>
                    </li>

                    <li id="manu7">
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="sv-slim-icon fas fa-report fa-angle-double-left"></i><span>7. Optional</span><i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li id="manu71"><a class="waves-effect submenu" href="optional.php">
                                        <span class="sv-normal" set-lan="text:4.1 Introduction optional  API">7.1
                                            URL Auto Login </span></a>
                                </li>
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