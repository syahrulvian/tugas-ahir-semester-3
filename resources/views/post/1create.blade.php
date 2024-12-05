@extends('one')
@section('content')
<br>
<div class="wrapper container text-center card "  style="width: 15rem; height:15rem;">
<div class="wrapper">
<h2>Buat Pesanan Baru</h2>
<br>
@if (session('success'))
<div class="alert-success">
<p>{{ session('success') }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert-danger">
<ul>

@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="POST" action="{{ url('posts') }}">
@csrf
<input name="title" type="text" placeholder="ALAMAT">
<br><br>
<input name="body" type="text" placeholder="NO BARANG">
<br><br>
<button class="btn-blue">Submit</button>
</form>
</div>
</div>
@endsection