@extends('template.master')
@section("css")
    resources/assets/css/contactPage.css
@endsection

@section('contactNavSelected')
    pure-menu-selected
@endsection
@section('splashHeader')

    <h1 class="splash-head">Contact</h1>


@endsection

@section('content')
<div class="content is-center ribbon">
    <img style="width: 25%;"src="resources/assets/img/contactPage/profilePicture.png" alt="Mountain View">
    <h2 class="content-head is-center contactMe" style="color:white;">Lami Kabir</h2>

            <p class="contactInfo">
               I was born in Montreal Quebec and raised in Windsor Ontario. I am a college student
                at St. Clair college and enrolled in Internet Application + Web Development. I am the founder
                and owner of this company (Nova).
            </p>
            <a href="#"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-envelope fa-5x" aria-hidden="true"></i></a>
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