@extends('layouts.main')

@section('container')
 

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h2 class="mb-3">{{ $post["title"] }}</h2>  

                    <p>By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ !empty($post->author) ? $post->author->name : "kosong" }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }} " class="img-fluid">

                                     
                    {{-- <h5>{{ $post["author"] }}</h5> --}}
                    <article class="my-3 fs-5">
                        <p> {!! $post["body"] !!}</p>
                    </article>
                    
                    {{-- <p> {!! $post->body !!}</p> --}} 
               
                    <a href="/blog" class="d-block mt-3">Back to Posts</a>
                </div>
            </div>
        </div>
        
            
@endsection