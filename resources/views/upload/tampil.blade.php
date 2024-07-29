@extends('template')
@section('main')
    <form action="{{ route('upload.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
            {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
            <button type="submit" class="input-group-text" for="inputGroupFile02">Upload</button>
        </div>
        <button type="submit" class="btn btn-success mx-3">Simpan</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/' . $item->image) }}" width="300" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
