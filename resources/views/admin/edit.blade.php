@extends('layouts.master')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Menu (nama menu)</h6>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <div class="p-1">
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Nama Menu">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control form-control-user" placeholder="Harga Menu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Deskripsi Menu">
                            </div>
                            <div class="col-sm-6">
                                <input type="Number" class="form-control form-control-user" placeholder="Jumlah Stok">
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-user btn-block">
                            Edit Data Menu
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection