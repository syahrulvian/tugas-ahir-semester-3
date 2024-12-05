@extends('one')
@section('content')
<h1 style="text-align: center;">Semua Post</h1>

<div class="    container center card " style="width: 43rem; height:20rem;">
    <div class="wrapper">
<br>
@if (session('success'))
<div class="alert-success">
<p>{{ session('success') }}</p>
</div>
@endif
<table style="width:100%" class="">
<thead>
<tr>
<th>   NAME</th>
<th>EMAIL</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($posts as $post)
<tr>
<td style="width: 200px" >{{ $post->title}}</td>
<td style="width: 500px" >{{ $post->body }}</td>

<td><button type="button" class="btn btn-primary ">  <a href="{{ route('posts.edit', $post->id)}} "  class="text-light">Edit  </a>  </button></td>
<form method="POST" action="{{ url('posts', $post->id ) }}">
@csrf
@method('DELETE')
<td><button type="submit" class="btn btn-danger">HAPUS</button></td>
</form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@endsection