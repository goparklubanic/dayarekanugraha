@extends('layouts.admin')
@section('konten')
    <div class="row">
        <div class="col">
            <p class="display-6 mt-5">Informasi Umum</p>
            <div class="table-responsive">
                {{-- @dd($info); --}}
                <table class="table table-sm">
                    
                    <tbody>
                        <tr>
                            <td class='wdaParam'>Judul Header</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['headerTitle'] }}</td>
                        </tr>
                        <tr>
                            <td class='wdaParam'>Deskripsi Header</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['headerDescription'] }}</td>
                        </tr>
                        <tr>
                            <td class='wdaParam'>URL Logo Brand</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['brandUrl'] }}</td>
                        </tr>
                        <tr>
                            <td class='wdaParam'>URL Peta Lokasi</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['mapUrl'] }}</td>
                        </tr>
                        <tr>
                            <td class='wdaParam'>URL Website</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['webUrl'] }}</td>
                        </tr>
                        <tr>
                            <td class='wdaParam'>Tentang</td>
                            <td class='wdaValue'>{{ $info['umum'] == null ? '' : $info['umum']['about'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    @if ($info['umum'] == NULL )
                        <a href="{{ url('/Admin/umum/formtbh') }}" class="btn btn-primary btn-sm btn-wande">Tambahkan Informasi</a>
                        @else
                        <a href="{{ url('/Admin/umum/formupd',1) }}" class="btn btn-success btn-sm btn-wande">Edit Informasi</a>                        
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="display-6 mt-5">Informasi Fitur</p>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Nama Fitur</th>
                            <th>Icon</th>
                            <th>Tampil</th>
                            <th>Kendali</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        @foreach ( $info['fitur'] as $fitur )
                            <tr>
                                <td>{{ $fitur->namaFitur }}</td>
                                <td>
                                    <img src="{{ $fitur->iconUrl }}" alt="{{ $fitur->namaFitur }}" height="40px">
                                </td>
                                <td>
                                    {{ $fitur->tampil }}
                                </td>
                                <td class='d-flex justify-content-center'>
                                    <a href="{{ url('/Admin/fitur/formupd',$fitur->id) }}" class="btn btn-sm btn-warning btn-wande me-2">Edit</a>
                                    <form action="{{ url('Admin/fitur/remove') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $fitur->id }}">
                                    <button type="submit" class="btn btn-sm btn-danger btn-wande">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
            {{-- @dd($info) --}}
            <div class="text-center">
                <a href="{{ url('/Admin/fitur/formtbh') }}" class="btn btn-primary btn-sm btn-wande">Tambahkan Informasi</a>                     

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="display-6 mt-5">Informasi Kedai</p>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Jenis Kedai</th>
                            <th>Icon</th>
                            <th>Tampil</th>
                            <th>Kendali</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        @foreach ( $info['kedai'] as $kedai )
                            <tr>
                                <td>{{ $kedai->jenisoutlet }}</td>
                                <td>
                                    <img src="{{ $kedai->iconUrl }}" alt="{{ $kedai->jenisoutlet }}" height="40px">
                                </td>
                                <td>
                                    {{ $kedai->tampil }}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ url('/Admin/kedai/formupd',$kedai->id) }}" class="btn btn-sm btn-warning btn-wande me-2">Edit</a>
                                    <form action="{{ url('/Admin/kedai/remove') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $kedai->id }}">
                                    <button type="submit" class="btn btn-sm btn-danger btn-wande">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
            {{-- @dd($info) --}}
            <div class="text-center">
                <a href="{{ url('/Admin/kedai/formtbh') }}" class="btn btn-primary btn-sm btn-wande">Tambahkan Kedai</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="display-6 mt-5">Informasi Karir</p>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Posisi</th>
                            <th>Deskripsi</th>
                            <th>Icon</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $info['karir'] as $karir )
                            <tr>
                                <td>{{ $karir->posisi }}</td>
                                <td>{{ $karir->deskripsi }}</td>
                                <td>
                                    <img src="{{ $karir->iconurl }}" alt="{{ $karir->posisi }}" style="height:40px;">
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ url('/Admin/karir/formupd',$karir->id) }}" class="btn btn-sm btn-warning btn-wande me-2">Edit</a>
                                    <span>
                                        <form action="{{ url('/Admin/karir/buang') }}" method="post">
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $karir->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger btn-wande">Hapus</button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="{{ url('/Admin/karir/formtbh') }}" class="btn btn-primary btn-sm btn-wande">Tambahkan Karir</a>
            </div>
        </div>
    </div>
@endsection

@section('skripsi')
    
@endsection