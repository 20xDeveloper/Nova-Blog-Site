@extends('template.blogLayout')

@section('certainBlogCSS')
physicalBlogStyles.css
    @endSection

@section('blogCategoryHeader')
    <h1 class="brand-title">Physical Health</h1>
    @endsection

@section('pinnedPost')
    @foreach($articles as $article)
        @if($article->catId == 1)
            @if($article->pinned == "yes")
                <a href="{{"displayArticle/" . $article->id}}">
                    <section class="post">
                        <header class="post-header">

                            <h2 class="post-title">{{$article->title}}</h2>

                            <p class="post-meta">
                                By {{$article->author}}
                            </p>
                            <p class="post-meta">
                                {{ $article->created_at->toDayDateTimeString() }}
                            </p>
                        </header>

                        <div class="post-description">
                            <p>
                                {{$article->body}}
                            </p>
                        </div>
                    </section>
                </a>
                @endif
        @endif
    @endforeach
@endsection

@section('recentPost')
    @foreach($articles as $article)
        @if($article->catId == 1)
            @if($article->pinned == "no")
                <a href="{{"displayArticle/" . $article->id}}">
                    <section class="post">
                        <header class="post-header">

                            <h2 class="post-title">{{$article->title}}</h2>

                            <p class="post-meta">
                                By {{$article->author}}
                            </p>
                            <p class="post-meta">
                                {{ $article->created_at->toDayDateTimeString() }}
                            </p>
                        </header>

                        <div class="post-description">
                            <p>
                                {{$article->body}}
                            </p>
                        </div>
                    </section>
                </a>
            @endif
        @endif


    @endforeach
@endsection