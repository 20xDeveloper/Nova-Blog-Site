@extends('template.master')

@section("css")
    resources/assets/css/articlePage.css
    @endsection

@section('articleNavSelected')
    pure-menu-selected
@endsection

@section('splashHeader')

            <h1 class="splash-head">Articles</h1>
            <p class="splash-subhead">
                Discover all the secrets
            </p>
@endsection

@section('content')
    <div class="content">
        <h2 class="content-head is-center">Categories</h2>

        <div class="pure-g">
            <a href="blog/physical" class="pure-menu-link physicalArticles">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                Health<br><br><br><br><br>

            </div>
            </a>
            <a href="blog/mental" class="pure-menu-link mentalArticles">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                Psychology
            </div>
            </a>
            <a href="blog/spiritual" class="pure-menu-link spiritualArticles">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
               Life Hacks
            </div>
            </a>
            <a href="blog/lifetips" class="pure-menu-link lifetipsArticles">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                Resources
            </div>
            </a>
        </div>
    </div>
    <div class="ribbon content">
        <div class="content">
            <h2 class="content-head is-center resources-head">Other Sources</h2>

            <div class="pure-g">
                <a href="https://www.youtube.com/channel/UCBIt1VN5j37PVM8LLSuTTlw" class="pure-menu-link improvementPill">
                    <div class="l-box pure-u-1-3">
                       Improvement Pill

                    </div>
                </a>
                <a href="https://www.youtube.com/user/ConspiracyStuff" class="pure-menu-link secrets">
                    <div class="l-box pure-u-1-3">
                        Stuff they dont want you to know
                    </div>
                </a>
                <a href="https://www.youtube.com/user/ActualizedOrg" class="pure-menu-link actualize">
                    <div class="l-box pure-u-1-3">
                        Actualize.org
                    </div>
                </a>
                <a href="https://www.youtube.com/user/TheSpiritScience" class="pure-menu-link spiritScience">
                    <div class="l-box pure-u-1-3">
                       Spirit Science
                    </div>
                </a>
                <a href="https://www.anabolicmen.com/" class="pure-menu-link anabolicMan">
                    <div class="l-box pure-u-1-3">
                        Anabolic Man
                    </div>
                </a>
                <a href="https://draxe.com/" class="pure-menu-link josh-axe">
                <div class="l-box pure-u-1-3">
                    Dr. Axe
                </div>
                </a>
                <a href="https://www.youtube.com/user/DNewsChannel" class="pure-menu-link seeker">
                    <div class="l-box pure-u-1-3">
                        Seeker
                    </div>
                </a>
                <a href="https://www.youtube.com/user/AsapSCIENCE" class="pure-menu-link asapScience">
                    <div class="l-box pure-u-1-3">
                        Asap Science
                    </div>
                </a>
            </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis malesuada dapibus. Sed turpis justo, mollis in nisi quis, pulvinar dictum odio. Morbi at arcu vehicula, viverra massa vitae, fermentum mauris. Cras tincidunt turpis mauris, in imperdiet lectus viverra ut. Vivamus eu nisl porttitor orci volutpat consequat eu et lacus. Integer quis lorem vitae eros interdum tempor eu quis nisl. Etiam at ultrices mauris

                </p>



            </div>
        </div>

    </div>


@endsection