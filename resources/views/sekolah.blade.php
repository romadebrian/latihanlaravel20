@extends('kasper')
@section('kaspermain')
    <div class="row">
        @foreach ($data as $item)
            <div class="col-md-3">
                <div style="display: flex; flex-wrap: wrap;">
                    <div style="display: flex; flex-direction: column; align-items: center; background-color: aqua; ">
                        <img src="{{ asset('img/tutwuri.png') }}" alt="...">
                        <div style="padding: 20px 0px 20px 0px">
                            <p class="" style="color: black; font-weight: bold; font-size: 20px">
                                {{ $item->nama_sekolah }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
