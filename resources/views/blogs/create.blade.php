<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Create Article</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">




    <link rel="stylesheet" href="../resources/assets/css/layouts/blog.css">
    <link rel="stylesheet" href="../resources/assets/css/createStyles.css">

</head>
<body>


<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Creating Article...</h1>
        </div>
    </div>
    <div class="content pure-u-1 pure-u-md-3-4">
        <div>

            <form enctype="multipart/form-data" class="pure-form" method="POST" action="{{action ('ArticlesController@store')}}">
                <input type="hidden" name="_token"
                       value="{{ csrf_token() }}">
                <fieldset class="pure-group">
                    <input name="title" type="text" class="pure-input-1" placeholder="Blog Title">
                    <input name="author" type="text" class="pure-input-1" placeholder="Your name">
                    <input name="catId" type="text" class="pure-input-1" placeholder="category (1 = physical, 2 = Mental, 3 = Spiritual, 4 = Life tips and advice)">
                    <input name="pinned" type="text" class="pure-input-1" placeholder="is it pinned? yes/no">
                    Upload Side bar picture:<input name="sidePic" type="file" class="pure-input-1" placeholder="Your name">
                    Upload opening picture/video:<input name="openingPic" type="file" class="pure-input-1" placeholder="Your name">
                    Upload Closing picture/video:<input name="closingPic" type="file" class="pure-input-1" placeholder="Your name">
                    <textarea name="body" class="pure-input-1" placeholder="Description"></textarea>
                </fieldset>

                <button type="submit" class="pure-button pure-input-1 pure-button-primary">Create</button>
            </form>






        </div>
    </div>
</div>




</body>
</html>