<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Articles</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">




    <link rel="stylesheet" href="../resources/assets/css/layouts/blog.css">
    <link rel="stylesheet" href="../resources/assets/css/@yield('certainBlogCSS')">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../resources/assets/js/home.js"></script>
</head>
<body onload="myFunction()">







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">@yield('blogCategoryHeader')</h1>
            <h2 class="brand-tagline">Discover all the secrets</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="physical">Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="mental">Psychology</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="spiritual">Life Hacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="lifetips">Resources</a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="pure-button" href="create">Create new blog</a>
                    </li>-->
                </ul>
            </nav>
        </div>
    </div>

    <div style="display:none;" class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                @yield('pinnedPost')

            </div>

            <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>

                @yield('recentPost')


            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="back/contact" class="pure-menu-link">Contact us</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
