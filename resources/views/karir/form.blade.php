@extends('layouts.admin')
@section('konten')
{{-- headertitle, headerDescription , brandUrl , mapUrl , webUrl , about --}}
<div class="row">
    <div class="col-lg-8 mx-auto py-3">
        <h4 class="text-center py-3">Informasi Karir</h4>
        @if ($mode == 'append' )
            <form action="{{ url('Admin/karir/store') }}" method="post" class='p-3'>
        @else
            <form action="{{ url('Admin/karir/update',$data['id']) }}" method="post" class='p-3'>
            @method('PUT')
        @endif
            @csrf
            {{-- id , posisi , deskripsi , iconurl --}}
            <input type="hidden" name="id" value="{{ $data['id'] == NULL ? NULL : $data['id']}}">
            <div class="form-group mb-3">
                <label for="posisi">Posisi Jabatan</label>
                <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $data['posisi'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" style="resize:none;" class="form-control">{{ $data['deskripsi'] }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="iconurl">URL Icon</label>
                <input type="text" name="iconurl" id="iconurl" class="form-control" value="{{ $data['iconurl'] }}">
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