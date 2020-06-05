<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials/head')
</head>

<body class="position-relative spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">
    <div class="main-page active-dark">
        
        @include('partials/header')

        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">
            
            @include('pages/home/hero')

            @include('pages/home/about')
            @include('pages/home/services')
            @include('pages/home/projects')
            @include('pages/home/blog')
            @include('pages/home/cta')

            <!-- Start Contact Area  -->
            <div class="rn-contact-area rn-section-gap bg_color--1" id="contact">
                <div class="contact-form--1">
                    <div class="container">
                        <div class="row row--35 align-items-start">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                                    <h2 class="title">Hire Me.</h2>
                                    <p class="description">I am available for freelance work. Connect with me via
                                        phone:
                                        <a href="tel:+8801923088574">01923 088574</a> or email:
                                        <a href="mailto:admin@example.com"> admin@example.com</a> </p>
                                </div>
                                <div class="form-wrapper">
                                    <form>
                                        <label htmlFor="item01">
                                            <input type="text" name="name" id="item01" placeholder="Your Name *" />
                                        </label>

                                        <label htmlFor="item02">
                                            <input type="text" name="email" id="item02" placeholder="Your email *">
                                        </label>

                                        <label htmlFor="item03">
                                            <input type="text" name="subject" id="item03" placeholder="Write a Subject">
                                        </label>
                                        <label htmlFor="item04">
                                            <textarea type="text" id="item04" name="message" placeholder="Your Message"></textarea>
                                        </label>
                                        <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit" id="mc-embedded-subscribe">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="thumbnail mb_md--30 mb_sm--30">
                                    <img src="assets/images/about/about-9.jpg" alt="trydo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Area  -->
        </main>
        <!-- End Page Wrapper  -->
        
        @include('partials/footer')

    </div>
    
    @include('partials/assets')

</body>

</html>
