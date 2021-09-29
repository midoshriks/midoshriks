@extends('layouts.app')

@section('content')
<style>
    .img {

        width: 25%;
        border-radius: 50%;
    }

    @media screen and (max-width: 600px) {
        .img {
            width: 90%;
            border-radius: 50%;
        }

    }
</style>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a class="btn btn-success" href="/posts/create">Create Post</a>
                    <h3>You Blog Postst</h3>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @if(count($posts) > 0 )
    <!-- <table class="table table-striped table-hover "> -->
    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">email</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $k => $post)
            <tr>
                <td scope="row">{{$k + 1}}</td>
                <td><a href="posts/{{$post->id}}">{{$post->title}}</a></td>
                <td>
                    <p>{{$post->email}}</p>
                </td>
                <td>
                    <span class="cat_circle">
                        <div class="cat_icon">
                            <img src="/storage/cover_image/{{$post->cover_image}}" alt="img=post" class="img">
                        </div>
                    </span>
                </td>
                <td>
                    {!! Form::open(['action' =>['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
                    <!-- btn Edit -->
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                    <!-- btn Edit -->

                    {{ Form::hidden('_method','DELETE') }}
                    <br><br>
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h3>You have no Posts</h3>
    @endif

</div>


@endsection
