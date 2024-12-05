@extends('one')

@section('title', 'Edit Post')

@section('content')
<br>
<div class="wrapper container text-center card "  style="width: 15rem; height:15rem;">
    <h2>Edit Post</h2>

    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
<br>
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <input name="title" value="{{ $post->title }}" type="text" placeholder="Title...">
    <br> <br>
    <input name="body" value="{{ $post->body }}" type="text" placeholder="Body...">
    <br><br>
    <button class="btn-blue">Submit</button>
</form>

</div>
@endsection
