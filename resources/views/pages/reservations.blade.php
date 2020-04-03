@extends('layouts.main-app')

@section('content')
    <div id="waitlist-page">
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">

            <h1>Get on the List</h1>

            <form>
              <div class="form-group">
                <label for="phone">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="###-###-####">
              </div>
              <div class="form-group">
                <label for="guests"># of Guests</label>
                <select class="form-control" id="guests">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="form-group">
                <label for="time">Time of Reservation</label>
                <select class="form-control" id="time">
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
