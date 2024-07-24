@extends('template')
@section('main')
    <h2>Data Siswa</h2>
    {{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary"> </a> --}}
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
