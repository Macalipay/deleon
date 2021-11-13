@extends('frontend.pages.shop.master.template')

@section('content')
<div class="row">
  <div class="col-lg-9 col-md-9 p-4">
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
      <div class="col-lg-10 col-md-10">
        <div class="row">
          <div class="col-12">
            <div class="right-heading">
              <div class="row">
                <div class="col-md-4 col-4">
                  <h3>Shop</h3>
                </div>
                <div class="col-md-8 col-8">
                  <div class="product-filter">
                    <!-- <div class="view-method"> <a href="" id="grid"><i class="fa fa-th-large"></i></a> <a href="" id="list"><i class="fa fa-list"></i></a> </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div id="products" class="row view-group">
              @foreach ($products as $product)
              <div class="item col-lg-4 col-md-4 mb-4 mb-4" id="{{$product->id}}">
                <div class="thumbnail card product">
                  <div class="img-event"> <a class="group list-group-image img-fluid" href="#"><img src="{{('images/product/' . $product->photo)}}" alt="" class="img-fluid" style="width: 300px; height: 300px" ></a> </div>
                  <div class="caption card-body">
                    <h3 class="product-type">{{ $product->type }}</h3>
                    <h4 class="product-name">{{ $product->name }}</h4>
                    <h4 class="product-name">{{ $product->description }}</h4>
                    <div class="row m-0 list-n">
                      <div class="col-12 p-0">
                        <h5 class="product-price">₱ {{ $product->price }}</h5>
                      </div>
                      <div class="col-12 p-0">
                        <div class="product-price">
                          <form class="form-inline">
                            <div class="stepper-widget">
                              <button type="button" class="js-qty-down">-</button>
                              <input type="text" class="js-qty-input quantity" value="1"/>
                              <button type="button" class="js-qty-up">+</button>
                              <button type="button" onclick="addToCart({{$product->id}})" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="product-select">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="clearfix"></div>
              <!-- Pagination -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  
  <div class="col-lg-3 col-md-2 p-4">
    <h3 class="text-center mb-3">My Cart</h3>
    <table id="table-cart" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th>#</th>
              <th>Item</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Total</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @forelse ($orders as $key => $order)
                <tr>
                    <td>{{ ++$key}}</td>
                    <td>{{ $order->inventory->name}}</td>
                    <td>{{ $order->quantity}}</td>
                    <td>{{ $order->amount}}</td>
                    <td>{{ $order->total}}</td>
                    <td>
                      <a href="{{url('order/destroy/' . $order->id)}}" onclick="alert('Are you sure you want to Delete?')">
                      <i class="align-middle fa fa-fw fa-trash" style="color: red"></i>
                      </a>
                    </td>
                </tr>
          @empty
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          @endforelse
      </tbody>
  </table>
  </div>
</div>

@endsection

@section('scripts')
    <script>
         function addToCart(id) {
          if (confirm('Are you sure you want to add this item?')) {
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: '/shop/add_to_cart',
                  method: 'get',
                  data: {
                    quantity: $('#'+id+' .quantity').val(),
                    inventory_id: id,
                  },
                  success: function(data) {
                    location.reload();
                  }
              });
          }
         }

         $(function() {
            $('#table-cart').DataTable({
                "scrollX": true,
                "searching": false,
                "paging": false,
                "info": false,
                "pageLength": 100
            });
        });
    </script>
@endsection