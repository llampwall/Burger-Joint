@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">

            <h1>Get on the List</h1>

            <form method="POST" action="/reservations">
              @csrf
              <div class="form-group">
                <label for="inputName">Name</label>
                <input id="inputName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                  <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              <div class="form-group">
                <label for="inputPhone">Phone Number</label>
                  <input id="inputPhone" type="tel" class="form-control placeholder="###-###-####" @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                  @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="guests"># of Guests</label>
                <select class="form-control" id="guests" name="guests" required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="form-group">
                <label for="time">Time of Reservation</label>
                <select class="form-control" id="time" name="time" required>
                  <option>6:00</option>
                  <option>6:30</option>
                  <option>7:00</option>
                  <option>7:30</option>
                  <option>8:00</option>
                  <option>8:30</option>
                  <option>9:00</option>
                  <option>9:30</option>
                  <option>10:00</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <p>
              Please note that your reservation is subject to change at any time, at which point you will be contacted. Please try to arrive 15 minutes ahead of scheduled reservation. Tables of 6 or more will have an automatic 18% gratuity added to their bill. There may be a short wait upon arrival.
            </p>
          </div>
        </div>
      </div>

    </div>
@endsection
