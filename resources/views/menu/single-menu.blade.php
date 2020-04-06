@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} - {{$category}}
@endsection

@section('content')
    <div id="single-menu">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Burgers</h1>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <h4>Texas Burger</h4>
                                    <span class="price">$9.99</span>
                                </div>
                                <div class="description">
                                    <p>Fresh ground chuck burger with lettuce, tomato, cheese, onions, and our special BBQ sauce!</p>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="title">
                                    <h4>Bacon Cheeseburger</h4>
                                    <span class="price">$8.99</span>
                                </div>
                                <div class="description">
                                    <p>Hardwood-smoked bacon, lettuce, tomatoes, mayo and choice of cheese.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="title">
                                    <h4>Whiskey River BBQ</h4>
                                    <span class="price">$9.99</span>
                                </div>
                                <div class="description">
                                    <p>Whiskey River BBQ Sauce, crispy onion straws, Cheddar, lettuce, tomatoes and mayo.</p>
                                </div>
                            </div>    
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <h4>Royal Burger</h4>
                                    <span class="price">$11.99</span>
                                </div>
                                <div class="description">
                                    <p>Hardwood-smoked bacon, egg*, American cheese, lettuce, tomatoes and mayo.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <h4>Banzai Burger</h4>
                                    <span class="price">$13.99</span>
                                </div>
                                <div class="description">
                                    <p>Teriyaki-glazed patty, grilled pineapple, Cheddar, lettuce, tomatoes and mayo.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <h4>Burnin' Burger</h4>
                                    <span class="price">$12.99</span>
                                </div>
                                <div class="description">
                                    <p>Fried jalapeño coins, house-made salsa, Pepper-Jack, lettuce, tomatoes and chipotle aioli on a sesame bun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
@endsection
