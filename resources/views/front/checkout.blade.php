@extends('front.inc.master')
@section('content')

<div class="container">
  <div class="row">
      
      <div class="col-lg-8" style="background-color: #F5F5F5;margin-top: 3%;">
            <div class="row">              
                  <div class="form-group col-md-6" style="padding: 5%">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="John" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  <div class="form-group col-md-6" style="padding: 5%">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Doe" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>               
          </div>
          <div class="form-group" style="padding: 3%;margin-top: -7%;">
                <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
         </div>
          <div class="form-group" style="padding: 3%;margin-top: -7%;">
                <label for="phone">Phone </label>
              <input type="text" class="form-control" id="phone" placeholder="+1 2345-678">              
         </div>
          <div class="form-group" style="padding: 3%;margin-top: -7%;">
               <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>           
         </div>
          <div class="row">
           <div class="form-group col-md-4" style="">
               <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>           
         </div>
           <div class="form-group col-md-4" style="">
               <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>           
         </div>
           <div class="form-group col-md-4" style="">
               <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>           
         </div>
    
    </div>
    </div>
      
      
      
    <div class="col-lg-4" style="margin-top: 1%;margin-bottom: 1%;">     
        <h4 class="d-flex justify-content-between align-items-center mb-3" style="margin: 5%">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">5</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
</div>
</div>

@endsection




