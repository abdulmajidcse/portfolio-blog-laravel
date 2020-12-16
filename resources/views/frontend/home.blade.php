@extends('layouts.frontend_app')

@section('frontend_meta_tags')
    @include('layouts.templates.frontend.default_meta_tags')
@endsection

@section('frontend_title')
    {{ 'Home' }}
@endsection

@section('blog_content')
    <!-- Post -->
    <div class="post">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
            <a href="#">Jonathan Burke Jr.</a>
            </span>
            <span class="description">Shared publicly - 7:30 PM today</span>
        </div>
        <!-- /.user-block -->
        <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore the hate as they create awesome
            tools to help create filler text for everyone from bacon lovers
            to Charlie Sheen fans.
        </p>

        <p>
            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
            <span class="float-right">
            <a href="#" class="link-black text-sm">
                <i class="far fa-comments mr-1"></i> Comments (5)
            </a>
            </span>
        </p>

        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
    </div>
    <!-- /.post -->

    <!-- Post -->
    <div class="post">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
            <span class="username">
            <a href="#">Sarah Ross</a>
            </span>
            <span class="description">Sent you a message - 3 days ago</span>
        </div>
        <!-- /.user-block -->
        <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore the hate as they create awesome
            tools to help create filler text for everyone from bacon lovers
            to Charlie Sheen fans.
        </p>

        <form class="form-horizontal">
            <div class="input-group input-group-sm mb-0">
            <input class="form-control form-control-sm" placeholder="Response">
            <div class="input-group-append">
                <button type="submit" class="btn btn-danger">Comment</button>
            </div>
            </div>
        </form>
    </div>
    <!-- /.post -->
@endsection