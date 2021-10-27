@extends('layout.template')
@section('title', 'Add Kelompok Penjual')
@section('content')
    <form action="/kelompokpenjual/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Id KP</label>
                        <input name="id_kp" class="form-control" value="{{ old('id_kp')  }}">
                            <div class="text-danger">
                                @error('id_kp')
                                    {{  $message  }}
                                @enderror
                            </div>
                        </div>

                    <div class="form-group">
                    <label>Nama Kelompok</label>
                    <input name="nama_kelompokpenjual" class="form-control" value="{{ old('nama_kelompokpenjual')  }}">
                        <div class="text-danger">
                            @error('nama_kelompokpenjual')
                                {{  $message  }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>

                </div>
            </div>
        </form>
@endsection