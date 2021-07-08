
@extends('layouts.app1', ['active' => 'dashboard'])
<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
  <!-- Content Header (Page header) -->
  {{-- <div class="content-header"> --}}

  @section('header')
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">KYU Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">KYU Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  {{-- </div> --}}
  <!-- /.content-header -->
  @endsection

  <!-- Main content -->
  {{-- <section class="content"> --}}
  @section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Dashboard</h5>


            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <!-- /.row -->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
                              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- /.row -->
    </div><!--/. container-fluid -->
  {{-- </section> --}}
  @endsection
  <!-- /.content -->
{{-- </div> --}}
<!-- /.content-wrapper -->





