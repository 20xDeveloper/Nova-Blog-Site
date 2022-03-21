<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Article</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">




    <link rel="stylesheet" href="../../resources/assets/css/layouts/blog.css">

    @if($article->catId == 1)
        <link rel="stylesheet" href="../../resources/assets/css/physicalBlogStyles.css">
    @elseif($article->catId == 2)
        <link rel="stylesheet" href="../../resources/assets/css/mentalBlogStyles.css">
    @elseif($article->catId == 3)
        <link rel="stylesheet" href="../../resources/assets/css/spiritualBlogStyles.css">
    @elseif($article->catId == 4)
        <link rel="stylesheet" href="../../resources/assets/css/lifeTipsBlogStyles.css">
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../resources/assets/js/home.js"></script>


    <style type="text/css">

        .sidebar{
            background-image: url('../../../Nova/storage/app/{{$article->sidePic}}') !important;
        }

    </style>
</head>
<body onload="myFunction()">







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">{{$article->title}}</h1>
            <header class="post-header">
                <p class="post-meta">
                    By {{$article->author}}
                </p>
                <p class="post-meta">
                    {{ $article->created_at->toDayDateTimeString() }}
                </p>
            </header>
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
                    <li class="nav-item">
                        <a class="pure-button" href="addComment/{{$article->id}}">Add Comment</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div style="display:none;" class="content pure-u-1 pure-u-md-3-4">
        <div>
            <section class="">
                <div class="post-description">
                    @if(strpos($article->openingPic, ".mp4") !== false)
                        <video style="display: block !important; margin:auto;" width="320" height="240" controls>
                            <source src="../../../Nova/storage/app/{{$article->closingPic}}" type="video/mp4">
                        </video>
                    @else
                        <img style="width: 75%; display:block; margin:auto;" src="../../../Nova/storage/app/{{$article->openingPic}}">
                    @endif

                    <p>
                        {{$article->body}}
                    </p>

                    @if(strpos($article->closingPic, ".mp4") !== false)
                        <video style="display: block !important; margin:auto;" width="75%" height="" controls>
                            <source src="../../../Nova/storage/app/{{$article->closingPic}}" type="video/mp4">
                        </video>
                    @else
                    <img style="width: 75%; display:block; margin:auto;" src="../../../Nova/storage/app/{{$article->closingPic}}">
                    @endif
                </div>
            </section>





            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="contact" class="pure-menu-link">Contact us</a></li>
                        <li class="pure-menu-item"><a href="" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="" class="pure-menu-link">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <h4>{{count($article->comments)}} Comments:</h4>
        @foreach ($article->comments as $comment)
               <b>{{ $comment->name }}</b>  <p class="post-meta">on {{ $comment->created_at->toDayDateTimeString() }}</p>
                <div id="border">
                    &nbsp;&nbsp;&nbsp;{{ $comment->body }}
                </div><br>
            @endforeach
            <br/>
        </div>
    </div>
</div>




</body>
</html>