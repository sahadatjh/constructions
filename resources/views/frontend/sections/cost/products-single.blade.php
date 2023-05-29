<!-- Shop Single Start -->
<div id="rs-single-shop" class="rs-single-shop pt-120 pb-105 md-pt-80 md-pb-65">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 sm-mb-30">
                <div class="single-product-image">
                    <div class="images-single">
                        <img src="{{ asset('assets/frontend/images/shop/1.png') }}" alt="Single Product">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single-price-info pl-30 sm-pl-0">
                    <h4 class="product-title">Digital CC Camera</h4>
                    <span class="single-price">$150.00</span>
                    <p class="some-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <form>
                        <input type="number" class="input-text" step="1" min="1" value="1">
                        <button class="add-btn cart ml-10" type="submit">Add To cart</button>
                    </form>
                    <p class="category"><span>Category:</span><a href="#"> Finance</a></p>
                </div>
            </div> 
        </div>
        <div class="tab-area">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional" type="button" role="tab" aria-controls="reviews" aria-selected="false">Additional information</button>
                </li> 
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (0)</button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p class="dsc-p pb-25">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>

                    <p class="dsc-p">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                </div>
                <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                    <table>
                        <tbody class="table-box">
                            <tr>
                                <th>color</th>
                                <td>red, blue</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="reviews-grid">
                        <div class="top-area">
                            <p>There are no reviews yet.</p>
                            <h6 class="mb-0">Be the first to review “Digital CC Camera”</h6>
                        </div>

                        <form class="comment-form" id="commentform">
                            <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>

                            <div class="placeholder-cntrl">
                                <label>Name *</label>
                                <input type="text" name="name" size="30" required="">
                            </div>
                            <div class="placeholder-cntrl">
                                <label>Email *</label>
                                <input type="Email" name="email" size="30" required="">
                            </div>
                            <div class="ratings">Your rating
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <div class="placeholder-cntrl">
                                <label>Your review *</label>
                                <textarea required=""></textarea>
                            </div>
                            <div class="btn-part">
                                <button class="add-btn ml-10" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .tab-area -->
    </div>
</div>
<!-- Shop Single Start -->

<!--Shop part end-->
<div class="rs-shop-part pb-80 md-pb-40">
    <div class="container">
        <h4 class="title pb-35">Related products</h4>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-35">
                <div class="product-list">
                    <div class="image-product">
                        <img src="{{ asset('assets/frontend/images/shop/1.png') }}" alt="">
                        <div class="overley">
                            <div class="product-info">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-desc">
                        <h2 class="loop-product-title"><a href="shop-single.html">Drill Machine</a></h2>
                        <span class="price">$30.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-35">
                <div class="product-list">
                    <div class="image-product">
                        <img src="{{ asset('assets/frontend/images/shop/2.jpg') }}" alt="">
                        <div class="overley">
                            <div class="product-info">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-desc">
                        <h2 class="loop-product-title"><a href="shop-single.html">Flad Light</a></h2>
                        <span class="price">$25.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-35">
                <div class="product-list">
                    <div class="image-product">
                        <img src="{{ asset('assets/frontend/images/shop/3.jpg') }}" alt="">
                        <div class="overley">
                            <div class="product-info">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-desc">
                        <h2 class="loop-product-title"><a href="shop-single.html">Gas Booster</a></h2>
                        <span class="price">$44.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Shop part end-->