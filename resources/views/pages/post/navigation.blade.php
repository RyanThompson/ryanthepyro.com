<div class="header-left d-flex align-items-center">
            
    {{-- <div class="logo">
        <a href="index.html">
            <img src="assets/images/logo/logo-symbol-dark.png" alt="Creative Agency">
        </a>
    </div> --}}

    <nav class="mainmenunav d-lg-block ml--50">
        <div class="navbar-example2">
            
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="/#about">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#service">Abilities</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Projects</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/#blog">Writing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
            <!-- End Mainmanu Nav -->

        </div>
    </nav>
</div>

<div class="header-right">

    <div class="social-share-inner">
        <ul class="social-share social-style--2 color-white d-flex justify-content-start liststyle">
            {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
            {{-- <li><a href="{{ config('site.discord') }}" target="_blank"><i class="fab fa-discord"></i></a></li> --}}
            <li><a href="{{ config('site.discord') }}" target="_blank"><i class="fab fa-discord"></i></a></li>
            <li><a href="{{ config('site.linkedin') }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
            <li><a href="{{ config('site.instagram') }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>

    {{-- <div class="header-btn ml_md--20 ml_sm--0"><a class="rn-btn" href="#"><span>buy now</span></a>
    </div> --}}

    <!-- Start Humberger Menu  -->
    <div class="humberger-menu d-block d-lg-none pl--20 pl_sm--10">
        <span class="menutrigger text-white">
            <i data-feather="menu"></i>
        </span>
    </div>
    <!-- End Humberger Menu  -->

    <!-- Start Close Menu  -->
    <div class="close-menu d-block d-lg-none">
        <span class="closeTrigger">
            <i data-feather="x"></i>
        </span>
    </div>
    <!-- End Close Menu  -->

</div>
