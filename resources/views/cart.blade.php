@extends('layouts.app')
@section('title', 'Cart')
@section('user_content')\

<!-- Shopping Cart -->
<div class="shopping-cart section">
  <div class="container">
      @if (Cart::count() > 0)
        <div class="cart-list-head shadow">
          <!-- Cart List Title -->
          <div class="cart-list-title">
              <div class="row">
                  <div class="col-lg-1 col-md-1 col-12">

                  </div>
                  <div class="col-lg-4 col-md-3 col-12">
                      <p>Product Name</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">
                      <p>Quantity</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">
                      <p>Unit Price</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">
                      <p>Sub Total</p>
                  </div>
                  <div class="col-lg-1 col-md-2 col-12">
                      <p>Remove</p>
                  </div>
              </div>
          </div>
          <!-- End Cart List Title -->
          <!-- Cart Single List list -->
          @foreach (Cart::content() as $item)
            <div class="cart-single-list">
              <div class="row align-items-center">
                <div class="col-lg-1 col-md-1 col-12">
                  <a href="product-details.html"><img src="{{ asset('aquarium.png') }}" alt="image here"></a>
                </div>
                  <div class="col-lg-4 col-md-3 col-12">
                    <h5 class="product-name"><a href="product-details.html">{{ $item->name }}</a></h5>
                    {{-- <p class="product-des">
                      <span><em>Type:</em> Mirrorless</span>
                      <span><em>Color:</em> Black</span>
                    </p> --}}
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">
                    <div class="count-input">
                      <input type="number" name="qty" id="" class="form-control py-3" value="{{ $item->qty }}">
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">
                      <p>₱{{ $item->price }}</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-12">  
                      <p>₱{{ $item->subtotal }}</p>
                  </div>
                  <div class="col-lg-1 col-md-2 col-12">
                      <a class="remove-item" href="#"><i class="lni lni-close"></i></a>
                  </div>
              </div>
            </div>
          @endforeach
          <!-- End Single List list -->
        </div>
      @else
        <div class="text-center">
          <p class="py-5">
            <img src="{{ asset('assets/images/shop-cart-icon.png') }}" alt="">
          </p>
          <p>Cart is empty</p>
          <a href="{{ url('/') }}" class="btn btn-primary">Shop Now</a>
        </div>
      @endif
      <div class="row">
          <div class="col-12">
              <!-- Total Amount -->
              <div class="total-amount">
                  <div class="row">
                      <div class="col-lg-8 col-md-6 col-12">
                          {{-- <div class="left">
                              <div class="coupon">
                                  <form action="#" target="_blank">
                                      <input name="Coupon" placeholder="Enter Your Coupon">
                                      <div class="button">
                                          <button class="btn">Apply Coupon</button>
                                      </div>
                                  </form>
                              </div>
                          </div> --}}
                      </div>
                      <div class="col-lg-4 col-md-6 col-12">
              <div class="total-amount shadow">
                          <div class="right ">
                              <ul>
                                  <li>Cart Subtotal<span>$2560.00</span></li>
                                  <li>Shipping<span>Free</span></li>
                                  <li>You Save<span>$29.00</span></li>
                                  <li class="last">You Pay<span>$2531.00</span></li>
                              </ul>
                              <div class="button">
                                  <a href="checkout.html" class="btn">Checkout</a>
                                  <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ End Total Amount -->
          </div>
      </div>
  </div>
</div>
<!--/ End Shopping Cart -->


@endsection