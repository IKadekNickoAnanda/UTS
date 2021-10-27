@extends('layout.template')
@section('title', 'Kelompok Penjual')
@section('content')
<a href="/kelompokpenjual/add" class="btn btn-primary btn-sm">Add</a><br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success </h4>
    {{ session('pesan')  }}.
  </div>
@endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Id KP</th>
                <th>Nama Kelompok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($kelompokpenjual as $data)
                <tr>
                    <td>{{$no++  }}</td>
                    <td>{{ $data->id_kp  }}</td>
                    <td>{{ $data->nama_kelompokpenjual  }}</td>
                    <td>
                        <a href="/kelompokpenjual/detail/{{ $data->id_kelompokpenjual  }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="/kelompokpenjual/edit/{{ $data->id_kelompokpenjual  }}" class="btn btn-sm btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_kelompokpenjual  }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($kelompokpenjual as $data)
        
            <div class="modal modal-danger fade" id="delete{{ $data->id_kelompokpenjual  }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->nama_kelompokpenjual  }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/kelompokpenjual/delete/{{ $data->id_kelompokpenjual }}"type="button" class="btn btn-outline">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach
@endsection
