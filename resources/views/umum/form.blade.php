@extends('layouts.admin')
@section('konten')
{{-- headertitle, headerDescription , brandUrl , mapUrl , webUrl , about --}}
<div class="row">
    <div class="col-lg-8 mx-auto py-3">
        <h4 class="text-center py-3">Informasi Umum</h4>
        @if ($mode == 'append' )
            <form action="{{ url('Admin/umum/store') }}" method="post" class='p-3'>
        @else
            <form action="{{ url('Admin/umum/update') }}" method="post" class='p-3'>
            @method('PUT')
        @endif
            @csrf
            <div class="form-group mb-3">
                <label for="headerTitle">Judul Header</label>
                <input type="text" name="headerTitle" id="headerTitle" class="form-control" value="{{ $data['headerTitle'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="headerDescription">Deskripsi Singkat</label>
                <input type="text" name="headerDescription" id="headerDescription" class="form-control" value="{{ $data['headerDescription'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="brandUrl">URL Logo Brand</label>
                <input type="text" name="brandUrl" id="brandUrl" class="form-control" value="{{ $data['brandUrl'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="mapUrl">URL Peta Lokasi</label>
                <input type="text" name="mapUrl" id="mapUrl" class="form-control" value="{{ $data['mapUrl'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="webUrl">URL Website</label>
                <input type="text" name="webUrl" id="webUrl" class="form-control" value="{{ $data['webUrl'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="about">Tentang</label>
                <textarea name="about" id="about" class='form-control' rows="4" style="resize: none;">{{ $data['about'] }}</textarea>
            </div>
            <div class="form-group text-end">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>    
@endsection

@section('skripsi')
    
@endsection