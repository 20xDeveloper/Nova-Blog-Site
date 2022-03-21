@extends('template.master')
@section('css')
    resources/assets/css/homePage.css

@endsection
@section('homeNavSelected')
    pure-menu-selected
    @endsection
@section('splashHeader')

            <h1 class="splash-head">Nova</h1>
            <p class="splash-subhead">
                Become your brightest version
            </p>
            <p>
                <a href="article" class="pure-button pure-button-primary">Get Started</a>
            </p>

@endsection

@section('content')
    <div class="content">
        <h2 class="content-head is-center">What we offer</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    Health
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis malesuada dapibus. Sed turpis justo, mollis in nisi quis, pulvinar dictum odio. Morbi at arcu vehicula, viverra massa vitae, fermentum mauris. Cras tincidunt turpis mauris, in imperdiet lectus viverra ut. Vivamus eu nisl porttitor orci volutpat consequat eu et lacus. Integer quis lorem vitae eros interdum tempor eu quis nisl. Etiam at ultrices mauris
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Psychology
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis malesuada dapibus. Sed turpis justo, mollis in nisi quis, pulvinar dictum odio. Morbi at arcu vehicula, viverra massa vitae, fermentum mauris. Cras tincidunt turpis mauris, in imperdiet lectus viverra ut. Vivamus eu nisl porttitor orci volutpat consequat eu et lacus. Integer quis lorem vitae eros interdum tempor eu quis nisl. Etiam at ultrices mauris
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Life Hacks
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis malesuada dapibus. Sed turpis justo, mollis in nisi quis, pulvinar dictum odio. Morbi at arcu vehicula, viverra massa vitae, fermentum mauris. Cras tincidunt turpis mauris, in imperdiet lectus viverra ut. Vivamus eu nisl porttitor orci volutpat consequat eu et lacus. Integer quis lorem vitae eros interdum tempor eu quis nisl. Etiam at ultrices mauris
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Resources
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis malesuada dapibus. Sed turpis justo, mollis in nisi quis, pulvinar dictum odio. Morbi at arcu vehicula, viverra massa vitae, fermentum mauris. Cras tincidunt turpis mauris, in imperdiet lectus viverra ut. Vivamus eu nisl porttitor orci volutpat consequat eu et lacus. Integer quis lorem vitae eros interdum tempor eu quis nisl. Etiam at ultrices mauris
                    <map name=""></map>
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="resources/assets/img/aboutSidePic.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <i class="fa fa-superpowers" aria-hidden="true"></i>
            <h2 class="content-head content-head-ribbon">About Us</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ultricies lorem. Donec venenatis vel massa sed posuere. Cras lectus nisl, ornare sed mollis in, rutrum ut lacus. Curabitur tincidunt odio sit amet lectus semper commodo fringilla sit amet eros. Proin ante leo, iaculis a viverra ut, pharetra ac nibh. Etiam mattis sodales mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus vel hendrerit turpis, at lobortis magna. Nulla facilisi. Suspendisse facilisis lorem vel enim venenatis, ultricies tristique massa tristique. Nulla scelerisque ultrices sagittis. Nullam pretium libero et arcu tincidunt auctor. Pellentesque vitae ultrices mauris. In sed condimentum diam, eleifend fringilla justo.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Want more from us?</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">

                    <fieldset class="pure-group">
                        <input type="email" class="pure-input-1-2" placeholder="Email">
                    </fieldset>

                    <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Send</button>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Subscribe to our Email List</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ultricies lorem. Donec venenatis vel massa sed posuere. Cras lectus nisl, ornare sed mollis in, rutrum ut lacus. Curabitur tincidunt odio sit amet lectus semper commodo fringilla sit amet eros. Proin ante leo, iaculis a viverra ut, pharetra ac nibh. Etiam mattis sodales mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus vel hendrerit turpis, at lobortis magna. Nulla facilisi. Suspendisse facilisis lorem vel enim venenatis, ultricies tristique massa tristique. Nulla scelerisque ultrices sagittis. Nullam pretium libero et arcu tincidunt auctor. Pellentesque vitae ultrices mauris. In sed condimentum diam, eleifend fringilla justo.
                </p>



            </div>
        </div>

    </div>


@endsection