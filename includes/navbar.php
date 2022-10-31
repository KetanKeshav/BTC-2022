    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area ">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-1 col-lg-1">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/navbar/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-11 col-lg-11">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a <?php if($page=='index') echo 'class="active"' ?> href="index.php">Home</a></li>
                                        <li><a <?php if($page=='oc') echo 'class="active"' ?> href="oc.php">Organizing Committee</a></li>
                                        <li><a <?php if($page=='speakers') echo 'class="active"' ?> href="speakers.php">Speakers</a></li>
                                        <li><a <?php if($page=='training') echo 'class="active"' ?> href="training.php">Metaverse Training</a></li>
                                        <li><a <?php if($page=='schedule') echo 'class="active"' ?> href="schedule.php">Schedule</a></li>
                                        <li><a <?php if($page=='venue') echo 'class="active"' ?> href="venue.php">Venue</a></li>
                                        <li><a <?php if($page=='registration') echo 'class="active"' ?> href="registration.php">Registration</a></li>
                                        <!-- <li><a href="Venue.html">WIE Global Summit</a></li> -->
                                        <!-- <li><a href="Venue.html">YP Global Summit</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->