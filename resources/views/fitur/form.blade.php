@extends('layouts.admin')
@section('konten')
{{-- headertitle, headerDescription , brandUrl , mapUrl , webUrl , about --}}
<div class="row">
    <div class="col-lg-8 mx-auto py-3">
        <h4 class="text-center py-3">Informasi Fitur</h4>
        @if ($mode == 'append' )
            <form action="{{ url('Admin/fitur/store') }}" method="post" class='p-3'>
        @else
            <form action="{{ url('Admin/fitur/update',$data['id']) }}" method="post" class='p-3'>
            @method('PUT')
        @endif
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] == NULL ? NULL : $data['id']}}">
            <div class="form-group mb-3">
                <label for="namaFitur">Nama Fitur</label>
                <input type="text" name="namaFitur" id="namaFitur" class="form-control" value="{{ $data['namaFitur'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="iconUrl">URL Icon</label>
                <input type="text" name="iconUrl" id="iconUrl" class="form-control" value="{{ $data['iconUrl'] }}">
            </div>
            <div class="form-group mb-3">
                <label for="tampil">Tampil</label>
                <select name="tampil" id="tampil" class="form-control">
                    <option value="tidak">Tidak</option>
                    <option value="ya">Ya</option>
                </select>
                {{-- <input type="text" name="tampil" id="tampil" class="form-control" value="{{ $data['tampil'] }}"> --}}
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