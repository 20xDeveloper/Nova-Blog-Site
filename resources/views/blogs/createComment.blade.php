<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Creating Comment</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">



    @if($article->catId == 1)
        <link rel="stylesheet" href="../../../resources/assets/css/physicalBlogStyles.css">
    @elseif($article->catId == 2)
        <link rel="stylesheet" href="../../../resources/assets/css/mentalBlogStyles.css">
    @elseif($article->catId == 3)
        <link rel="stylesheet" href="../../../resources/assets/css/spiritualBlogStyles.css">
    @elseif($article->catId == 4)
        <link rel="stylesheet" href="../../../resources/assets/css/lifeTipsBlogStyles.css">
    @endif
    <link rel="stylesheet" href="../../../resources/assets/css/layouts/blog.css">
    <!--<link rel="stylesheet" href="../../../resources/assets/css/createStyles.css">-->

</head>
<body>


<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Creating...</h1>
            <h2 class="brand-tagline">Discover all the secrets</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="back/physical">Physical Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="back/mental">Mental Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="back/spiritual">Spiritual Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="back/lifetips">Life tip and advice</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content pure-u-1 pure-u-md-3-4">
        <div>

            <form class="pure-form" method="POST" action="{{ url('/blog/displayArticle/addComment/' . $article->id ) }}">
                <input type="hidden" name="_token"
                       value="{{ csrf_token() }}">
                <fieldset class="pure-group">
                    <input name="name" type="text" class="pure-input-1" placeholder="Your name">
                    <textarea name="body" class="pure-input-1" placeholder=""></textarea>

                    <input type="hidden" value="{{ $timestamp }}" name="created_at">
                    <input type="hidden" value="{{ $timestamp }}" name="updated_at">
                    <input type="hidden" value="{{ $id }}" name="post_id">
                </fieldset>

                <button type="submit" class="pure-button pure-input-1 pure-button-primary">Create</button>
            </form>





            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="" class="pure-menu-link">Contact us</a></li>
                        <li class="pure-menu-item"><a href="" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="" class="pure-menu-link">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>