<footer id="rs-footer" class="rs-footer footer-main-home">
    <div class="footer-top">
        <div class="container-custom">
            <div class="row">
                <div class="col-lg-3 pr-20 md-pr-15 md-mb-10">
                    <div class="footer-logo md-mb-30">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/logo/logo-long1.png') }}" alt=""></a>
                    </div>
                    <div class="textwidget">
                        <p class="pb-20">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
                        <p class="pb-25"><strong>Opening Hours</strong> : Monday – Sat: 9am to 6pm</p>
                    </div>
                    <ul class="footer-social md-mb-30">  
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>                     
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>                     
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>                     
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>                     
                      </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="fi fi-rr-map-marker-home"></i>
                            <div class="desc">
                                Level-03, Estern city tower, <br>
                                Beside RS Tower, Jatra-bari, Dhaka
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <div class="desc">
                               <a href="tel:(+880)1740390971">(+880)1740 390971</a><br>
                               <a href="tel:(+880)1740390971">(+880)1740 390971</a>
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <div class="desc">
                                <a href="mailto:support@propertydesign.com">support@propertydesign.com</a><br>
                                <a href="mailto:info@propertydesign.com">info@propertydesign.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="{{ route('services.singel') }}">General Construction</a></li>
                        <li><a href="{{ route('services.singel') }}">Property Maintenance</a></li>
                        <li><a href="{{ route('services.singel') }}">Project Managment</a></li>
                        <li><a href="{{ route('services.singel') }}">Virtual Design & Build</a></li>
                        <li><a href="{{ route('services.singel') }}">Preconstruction</a></li>
                        <li><a href="{{ route('services.singel') }}">Design Build</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="widget-desc">Tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
                    <p>
                        <input type="email" name="email" placeholder="Your Email Address" required="">
                        <input type="submit" value="Subscribe Now">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-custom">                    
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <ul class="copy-right-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('cost') }}">Cost</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{  route('contact.us') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center">
                        <p>© 2023 Property Design & Development.  Developed By <a href="https://sahadat.xyz/" target="_blank">Sahadat Hossain</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>