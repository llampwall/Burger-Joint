@extends('layouts.app')

@section('content')
    <div id="offers-page">
      <div class="content-box">
        <div class="row">
          <div class="col-md-12">

            <h1>Get the Deals</h1>

            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname">
                </div>
                <div class="form-group col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" placeholder="###-###-####">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-9">
                  <p>I acknowledge that I am over 18 years of age, want to receive emails from FoodCircles Inc., and if I select to join the Dine In Rewards Program, agree to the terms and conditions of the program.
                  </p>
                </div>
                <div class="form-group col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agree">
                    <label class="form-check-label" for="agree">
                      I Agree
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
@endsection
