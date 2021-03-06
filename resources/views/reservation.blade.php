@extends('adminlte::page')

@section('title', 'Pemesanan | Flicker')

@section('content_header')
<h1>Pesanan</h1>
@stop

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">Cari Data Pemesanan</h1>
        <div class="box-tools pull-right">
            <!-- <a href="{{url('admin/route/new')}}"><button class="btn btn-success">Tambah</button></a> -->
        </div>
    </div>
    <div class="box-body">
        <table id="table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kode Pemesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Rute</th>
                    <th>Nama Pemesan</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservation as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->res_code}}</td>
                    <td>{{$a->res_date}}</td>
                    <td>{{$a->res_loc}} - {{$a->destination->name}}</td>
                    <td>{{$a->customer->name}} ({{$a->name}})</td>
                    <td>{{$a->cost}}</td>
                    <td>{{$a->status->name}}</td>
                    <td>
                        <a href="{{url('admin/reservation/'.$a->id)}}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <a href="{{url('admin/reservation/'.$a->id.'/delete')}}">
                            <i class="fa fa-trash"></i>
                        </a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
        The footer of the box
    </div><!-- box-footer -->
</div><!-- /.box -->
@stop

@section('js')
<script>
    $(document).ready(function () {
        $('#table').dataTable();
    });

</script>
@stop
