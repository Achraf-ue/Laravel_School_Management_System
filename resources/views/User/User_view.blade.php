@extends('admin.admin_master')
@section('admin')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    
                    <div class="col-sm-6">
                        <h4 class="page-title">Data Table</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                            <li class="breadcrumb-item active">View</li>
                        </ol>

                    </div>
                    <div class="col-sm-6">
                    
                        <div class="float-right d-none d-md-block">
                            <button type="button" class="btn btn-success waves-effect waves-light">Add User</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach ($Users as $User)
                                <tr>
                                    <td>{{$User->name}}</td>
                                    <td>{{$User->email}}</td>
                                    <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Modifier</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                                    </td>
                                   
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->

    <footer class="footer">
        © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
    </footer>

</div>
@endsection