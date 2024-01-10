@extends('layouts.index')
@push('style')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Penghasilan Ortu</h1>
    <p class="mb-4">
        List data Penghasilan Ortu 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Penghasilan Ortu</h6>
        </div>
        <div class="card-body">
            <a href="{{route('penghasilan_ortu.create')}}" class="btn btn-primary mb-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penghasilan Ortu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Penghasilan Ortu</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->penghasilan_ortu}}</td>
                            <td>
                                <a href="{{route('penghasilan_ortu.edit', $item->id)}}" class="btn btn-success mr-2">
                                    Edit
                                </a>
                                <form method="post" class="d-inline-block" action="{{route('penghasilan_ortu.destroy', $item->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mr-2">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
@push('script')
<!-- Page level plugins -->
<script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush