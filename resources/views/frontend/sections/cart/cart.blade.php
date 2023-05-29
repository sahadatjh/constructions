<!-- Cart Section Start -->
<div class="rs-cart pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="cart-wrap">
            <form>
                <table class="cart-table">
                     <thead>
                         <tr>
                             <th class="product-remove"></th>
                             <th class="product-thumbnail"></th>
                             <th class="product-name">Product</th>
                             <th class="product-price">Price</th>
                             <th class="product-quantity">Quantity</th>
                             <th class="product-subtotal">Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                             <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/frontend/images/shop/2.jpg') }}" alt=""></a></td>
                             <td class="product-name"><a href="#">Medicine Bottle</a></td>
                             <td class="product-price"><span>$</span>30.00</td>
                             <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                             <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                         </tr>
                         <tr>
                             <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                             <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/frontend/images/shop/1.jpg') }}" alt=""></a></td>
                             <td class="product-name"><a href="#">Medicine Bottle</a></td>
                             <td class="product-price"><span>$</span>30.00</td>
                             <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                             <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                         </tr>
                         <tr>
                             <td colspan="6" class="action text-right">
                                 <div class="coupon">
                                     <input type="text" name="text" placeholder="Coupon code" required="">
                                     <button class="add-btn cart" type="submit">Apply Coupon</button>
                                 </div>
                                 <div class="update-cart">
                                     <button class="add-btn cart" type="submit">Update cart</button>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                </table>
            </form>
            <div class="cart-collaterals pt-70 md-pt-50">
                <div class="cart-totals">
                    <h5 class="title mb-25">Cart totals</h5>
                    <table class="cart-total-table">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="amount"><span>$</span>60.00</span></td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="amount"><span>$</span>60.00</span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                         <button class="add-btn cart" type="submit"> Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Cart Section End -->