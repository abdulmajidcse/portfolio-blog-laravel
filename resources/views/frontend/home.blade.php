@extends('layouts.frontend_app')

@section('frontend_meta_tags')
    @include('layouts.templates.frontend.default_meta_tags')
@endsection

@section('frontend_title')
    {{ 'Home' }}
@endsection

@section('blog_content')

    <div class="row">
        @foreach ($blogPosts as $blogPost)
            <div class="col-md-6">
                <!-- Post -->
                <div class="post">

                    {{-- post thumbnail --}}
                    @if ($blogPost->image)
                        <a href="{{ route('frontend.blog.post', $blogPost->slug) }}"><img src="{{ asset('assets/uploads/'.$blogPost->image) }}" alt="{{ $blogPost->name }}" class="img w-100"></a>
                    @endif

                    <div class="user-block">
                        <h4 class="font-weight-bold mb-0"><a href="{{ route('frontend.blog.post', $blogPost->slug) }}"> {{ Str::title($blogPost->name) }} </a></h4>
                    </div>

                    <!-- /.user-block -->
                    <div>
                        <p>{!! Str::words($blogPost->content, 20) !!}</p>
                    </div>

                    {{-- read more --}}
                    <div>
                        <p><a href="{{ route('frontend.blog.post', $blogPost->slug) }}" class="btn btn-sm btn-success btn-flat font-weight-bold">Read More</a></p>
                    </div>

                </div>
                <!-- /.post -->
            </div>
        @endforeach
    </div>

    {{-- See More --}}
    <div class="float-right">
        {{ $blogPosts->links('vendor.pagination.bootstrap-4') }}
    </div>

@endsection