@extends('one')
@section('content')
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Pesan Barang</h2>
    <p class="mt-2 text-lg text-gray-600">Isi formulir berikut untuk memesan barang.</p>
  </div>
  <form action="{{ url('postpesan') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="name" class="block text-sm font-semibold text-gray-900">Nama</label>
        <div class="mt-2.5">
          <input type="text" name="name" id="name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600" required>
        </div>
      </div>
      <div>
        <label for="No_barang" class="block text-sm font-semibold text-gray-900">Nomor Barang</label>
        <div class="mt-2.5">
          <input type="text" name="No_barang" id="No_barang" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600" required>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="alamat" class="block text-sm font-semibold text-gray-900">Alamat</label>
        <div class="mt-2.5">
          <input type="text" name="alamat" id="alamat" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600" required>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600" required>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="No_HP" class="block text-sm font-semibold text-gray-900">Nomor HP</label>
        <div class="mt-2.5">
          <input type="text" name="No_HP" id="No_HP" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600" required>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="Request" class="block text-sm font-semibold text-gray-900">Permintaan Khusus</label>
        <div class="mt-2.5">
          <textarea name="Request" id="Request" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600"></textarea>
        </div>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-indigo-600">Kirim Pesan</button>
    </div>
  </form>
</div>
</div>
@endsection
