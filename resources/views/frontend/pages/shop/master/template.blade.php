<!DOCTYPE html>
<html lang="zxx">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
<meta name="description" content="">
<meta name="author" content="">
<title>Deleon's Best</title>
<link rel="stylesheet" href="{{ asset('opimac/html/assets/css/main.css')}}">
</head>
<body>
@include('frontend.pages.shop.partials.sidebar')
@include('frontend.pages.shop.partials.header')
@yield('content')

<div id="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h4>Join Our Newsletter Now</h4>
        <p class="m-0">Get E-mail updates about our latest shop and special offers.</p>
      </div>
      <div class="col-md-5">
        <form action="/" method="post" id="subsForm" onSubmit="return ajaxmailsubscribe();">
          <div class="input-group">
            <input type="email" name="subsemail" id="subsemail" class="form-control newsletter" placeholder="Enter your mail">
            <span class="input-group-btn">
            <button class="btn btn-theme" type="button" onClick="return ajaxmailsubscribe();">Subscribe</button>
            </span> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
@include('frontend.pages.shop.partials.footer')

  
<!-- Footer -->
<div id="popup-1" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"> <img src="assets/images/product-img/product-big-1.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div>
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 p-0">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4 p-0">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-2" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"> <img src="assets/images/product-img/engine.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div>
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4 p-0">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4 p-0">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-3" class="popup-fcy">
  <div class="row">
    <div class="col-md-6"> <img src="assets/images/product-img/silencer.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-4" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"><img src="assets/images/product-img/headlight.jpg" alt="" title="" class="img-fluid"></div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-5" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"> <img src="assets/images/product-img/engineering.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-6" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"><img src="assets/images/product-img/tools.jpg" alt="" title="" class="img-fluid"></div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-7" class="popup-fcy">
  <div class="row">
    <div class="col-md-6 text-center"> <img src="assets/images/product-img/filtre.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-8" class="popup-fcy">
  <div class="row">
    <div class="col-md-6"> <img src="assets/images/product-img/set-cover2.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup-9" class="popup-fcy">
  <div class="row">
    <div class="col-md-6"> <img src="assets/images/product-img/set-cover.jpg" alt="" title="" class="img-fluid"> </div>
    <div class="col-md-6">
      <div class="product_meta">
        <p><span>Availability </span> : not in Stock</p>
        <p><span>Categories </span> : Foods</p>
        <p><span>Tags </span> : Drink and Beverage</p>
      </div>
      <div class="product-dis">
        <h3>Products Name</h3>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book when an unknown printer took a galley of type and scrambled it to make a type specimen bookwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.  remaining essentially unchanged.</p>
        <div class="row">
          <div class="col-2 pr-0">
            <input type="number"  class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty">
          </div>
          <div class="col-10">
            <div class="wrap_compare">
              <div class="row">
                <div class="col-6">
                  <div class="add_to_cart"><a href="cart.html" class="">ADD TO CART</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <hr class="m-0 p-0">
          </div>
          <div class="pb-3 pt-3">
            <div class="left-icon"> <a href="" class="mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="" class="mr-3"><i class="fa fa-balance-scale" aria-hidden="true"></i></a> </div>
          </div>
          <div class="col-md-12 mb-4">
            <hr class="m-0 p-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('opimac/html/assets/js/ajax.js')}}"></script>
<script src="{{ asset('opimac/html/assets/js/formValidation.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/wow/wow.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/wow/page.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/mega-menu.js')}}"></script>
<link rel="stylesheet" href="{{ asset('opimac/html/assets/vendor/price_range/jquery-ui.css')}}" type="text/css" media="all" />
<script src="{{ asset('opimac/html/assets/vendor/price_range/jquery-ui.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/price_range/price_range_script.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/price_range/price_range_style.css')}}"/>
<script src="{{ asset('opimac/html/assets/vendor/stepper/jquery.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/stepper/jquery-ui.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/stepper.widget.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/custom-select.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/grid-list.js')}}"></script>
<link rel="stylesheet" href="{{ asset('opimac/html/assets/css/product-hover.css')}}">
<link rel="stylesheet" href="{{ asset('opimac/html/assets/vendor/fancy-box/fancybox.min.css')}}" />
<script src="{{ asset('opimac/html/assets/vendor/fancy-box/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/jquery/scrolltopcontrol.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/side-menu/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('opimac/html/assets/vendor/side-menu/side-menu.js')}}"></script>

<p data-toggle="modal" class="no-margin" data-target="#myModal" id="model2"></p>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog2">
    <div class="modal-content text-center">
      <div class="modal-body modal-body2">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p><img src="assets/images/success.svg" alt="" title="" width="50"></p>
        <h3 class="modal-title">Thank you</h3>
        <h4 class="thanks mt-2">Your submission is recevied and we will contact you soon.</h4>
        <a href="#" target="_blank" class="btn add-to-cart2 d-inline-block font-15 rounded">BUY THIS TEMPLATE NOW</a> <a href="index.html" class="back-to-home d-block small mt-2"><i class="fa fa-long-arrow-left"></i> BACK TO HOME</a> </div>
    </div>
  </div>
</div>
</body>
</html>
