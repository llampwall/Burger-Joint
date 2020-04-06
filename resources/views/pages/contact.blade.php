@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - Contact Us
@endsection

@section('content')
    <div id="contact-page">
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <div class="address">
              {{ $settings['general']->address1 }} {{ $settings['general']->address2 }}<br>
              {{ $settings['general']->city }}, {{ $settings['general']->state }}
              {{ $settings['general']->zip }}
            </div>
            <h3>Phone Number</h3>
            <div class="phone">
              <a href="tel:+1{{ $settings['general']->phone_number }}">{{ $settings['general']->phone_number }}</a>
            </div>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9344.868079783473!2d-118.34277290170085!3d34.09745125038475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1586148530887!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>

    </div>
@endsection


