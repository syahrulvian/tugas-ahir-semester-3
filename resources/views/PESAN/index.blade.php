@extends('one')
@section('content')
<br><br>
<h4 style="text-align: center;">Pesanan Diproses</h4>
<br>

<div class="container center card" style="width: 70rem; height:auto;">
    <div class="wrapper">
        <br>
        @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        <table class="table-auto w-full border-collapse border table table-striped-columns">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">No Barang</th>
                    <th class="border border-gray-300 px-4 py-2">Alamat</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">No HP</th>
                    <th class="border border-gray-300 px-4 py-2">Request</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postpesan as $postpesan)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->No_barang }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->alamat }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->No_HP }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $postpesan->Request }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('pesan.edit', $postpesan->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        |
                        <form action="{{ route('postpesan.destroy', $postpesan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
