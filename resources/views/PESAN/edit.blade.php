@extends('one')
@section('content')
<div class="container mx-auto mt-10 max-w-xl">
    <h2 class="text-3xl font-semibold text-center">Edit Pesanan</h2>
    <form action="{{ route('postpesan.update', $postpesan->id) }}" method="POST" class="mt-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold">Nama</label>
            <input type="text" name="name" id="name" value="{{ $postpesan->name }}" class="w-full rounded-md border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="No_barang" class="block text-sm font-semibold">Nomor Barang</label>
            <input type="text" name="No_barang" id="No_barang" value="{{ $postpesan->No_barang }}" class="w-full rounded-md border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-sm font-semibold">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{ $postpesan->alamat }}" class="w-full rounded-md border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ $postpesan->email }}" class="w-full rounded-md border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="No_HP" class="block text-sm font-semibold">Nomor HP</label>
            <input type="text" name="No_HP" id="No_HP" value="{{ $postpesan->No_HP }}" class="w-full rounded-md border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="Request" class="block text-sm font-semibold">Permintaan Khusus</label>
            <textarea name="Request" id="Request" rows="4" class="w-full rounded-md border px-3 py-2">{{ $postpesan->Request }}</textarea>
        </div>
        <a href="{{url('pesanpesan')}}"> <button type="submit" class="w-full rounded-md bg-blue-600 text-white py-2">Update</button></a>
       
    </form>
</div>
@endsection
