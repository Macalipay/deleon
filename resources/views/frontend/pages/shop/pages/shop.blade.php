@extends('frontend.pages.shop.master.template')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="bread-boder">
      <div class="row">
        <div class="col-lg-8 col-md-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb-item">Shop</li>
          </ol>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </nav>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="col-12">
            <div class="right-heading">
              <div class="row">
                <div class="col-md-4 col-4">
                  <h3>Shop Grid</h3>
                </div>
                <div class="col-md-8 col-8">
                  <div class="product-filter">
                    <div class="view-method"> <a href="" id="grid"><i class="fa fa-th-large"></i></a> <a href="" id="list"><i class="fa fa-list"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div id="products" class="row view-group">
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image" href="single_product.html"> <img class="img-fluid" src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Hawaiian Cheese</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down"><i class="fa fa-minus" aria-hidden="true"></i> </button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-1" data-original-title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-2.jpg" alt="" class="img-fluid"></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Burger</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-2" > <i class="fa fa-eye" aria-hidden="true"></i> </button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Burger</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn"  data-fancybox="gallery"  data-src="#popup-3" > <i class="fa fa-eye" aria-hidden="true"></i> </button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-4" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-5.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-5" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-6.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-6" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-7.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-7" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-8.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-8" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-4 mb-4 mb-4">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="single_product.html"><img src="assets/images/product-img/product-img-10.jpg" alt="" class="img-fluid" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">Foods</h3>
                    <h4 class="product-name">Ice Tea</h4>
                    <div class="product-table">
                      <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                      <div class="row m-0">
                        <div class="col p-0">
                          <h3 class="product-price pull-left"><span>₱14.00</span></h3>
                          <div class="product-price pull-left">
                            <form class="form-inline">
                              <div class="stepper-widget">
                                <button type="button" class="js-qty-down">-</button>
                                <input type="text" class="js-qty-input" value="1" />
                                <button type="button" class="js-qty-up">+</button>
                                <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div> </div>
                    </div>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱14.00</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input" value="1" />
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                      <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-9" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                      <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!-- Pagination -->
              <div class="text-center col">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-template d-flex justify-content-center float-none">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link active">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
@endsection