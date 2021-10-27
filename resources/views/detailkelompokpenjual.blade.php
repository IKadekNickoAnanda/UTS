@extends('layout.template')
@section('title', 'Detail Kelompok Penjual')
@section('content')

<table class="table">
<tr>
    <th width="100px">Id KP</th>
    <th width="30px">:</th>
    <th>{{ $kelompokpenjual->id_kp  }}</th>
</tr>
<tr>
    <th width="100px">Nama</th>
    <th width="30px">:</th>
    <th>{{ $kelompokpenjual->nama_kelompokpenjual  }}</th>
</tr>
<tr>
    <th><a href="/kelompokpenjual" class="btn btn-success tbn-sm">Kembali</a></th>
</tr>
</table>
@endsection