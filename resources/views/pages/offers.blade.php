@extends('layouts.app')

@section('content')
    <div id="offers-page">
      <div class="content-box">
        <div class="row">
          <div class="col-md-12">

            <h1>Get the Deals</h1>

            <form method="POST" action="/offers">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFirstName">First Name</label>
                  <input id="inputFirstName" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
            
                  @error('fname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLastName">Last Name</label>
                  <input id="inputLastName" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
            
                  @error('lname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail">Email</label>
                  <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPhone">Phone Number</label>
                  <input id="inputPhone" type="tel" class="form-control placeholder="###-###-####" @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                  @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-9">
                  <p>I acknowledge that I am over 18 years of age, want to receive emails from JordanBurger Inc., and if I select to join the Dine In Rewards Program, agree to the terms and conditions of the program.
                  </p>
                </div>
                <div class="form-group col-md-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agree" required>
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