<div class="rs-contact contact-style1 bg3">
    <div class="row">
        <div class="col-lg-4 offset-2 con-left-6">
            <div class="contact-section">
                <div class="contact-wrap">
                    <div class="sec-title mb-45">
                        <span class="sub-text">
                            <img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
                            Lets talk
                        </span>
                        <h2 class="title">
                            Have an upcoming project?
                        </h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="https://devsdesign.net/products/html/konstruk/mailer.php">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                </div>   
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">                                            
                                <div class="form-group mb-0">
                                    <input class="readon more submit" type="submit" value="Submit Now">
                                </div>
                            </div> 
                        </fieldset>
                    </form> 
                </div>
            </div>
        </div>
        <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
            <div class="contact-box-item">
             <div class="contact-box mb-20">
                 <div class="contact-icon">
                     <img src="{{ asset('assets/frontend/images/contact/style1/icons/1.png') }}" alt="images">
                 </div>
                 <div class="content-text">
                     <h4 class="title"><a href="#">USA office</a></h4>
                     <p class="services-txt">55 Gerad Lane,<br> NY 11201, USA</p>
                 </div>
             </div>
             <div class="contact-box mb-20">
                 <div class="contact-icon">
                     <img src="{{ asset('assets/frontend/images/contact/style1/icons/2.png') }}" alt="images">
                 </div>
                 <div class="content-text">
                     <h4 class="title"><a href="#">Email us</a></h4>
                     <p class="services-txt">
                         <a href="mailto:test@gamil.com">test@gamil.com</a><br>
                         <a href="mailto:test2@gamil.com">test2@gamil.com</a>
                     </p>
                 </div>
             </div>
             <div class="contact-box">
                 <div class="contact-icon">
                     <img src="{{ asset('assets/frontend/images/contact/style1/icons/3.png') }}" alt="images">
                 </div>
                 <div class="content-text">
                     <h4 class="title"><a href="#">Call us</a></h4>
                     <p class="services-txt">
                         <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                         <a href="tel:(+088)222-9999">(+088) 222-9999</a>
                     </p>
                 </div>
             </div>
            </div>
        </div>
        <div class="col-lg-4 contact-right-img"></div>
    </div>
</div>