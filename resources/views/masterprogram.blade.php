
@extends('layouts.app1',['active' => 'masterprogram'])
<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
  <!-- Content Header (Page header) -->
  {{-- <div class="content-header"> --}}

  @section('header')
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Master Program</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Master Program</li>
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
          <div class="panel panel-flat" >

            <div class="card">
              {{-- <div class="row form-group"> --}}
                <div class="table-responsive">
                  <table id="table-master" class ="table table-basic table-condensed" >
                    <thead>
                      <tr>

                                          <th>Nomor Program</th>
                                          <th>Nama Program</th>
                                          <th>Tujuan</th>
                                          <th>Sasaran</th>
                                          <th>Kegiatan</th>
                                          <th>Tanggal Pelaksanaan</th>
                                          <th>Tempat Pelaksana</th>
                                          <th>Pelaksana</th>
                                          <th>Penanggungjawab</th>
                                          <th>Total Anggaran</th>
                                          {{-- <th>Action</th> --}}

                      </tr>
                    </thead>
                  </table>
                </div>
              {{-- </div> --}}
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
@section('js')
<script type="text/javascript">

$(document).ready(function(){

    // $.ajax({
    //                 url: "{{ route('master.getDataMaster') }}",
    //                 type: "get",

    //                 success: function (data) {


    //                  console.log(data);



    //                 },

    //             });
    var table = $('#table-master').DataTable({
		processing:true,
		serverSide:true,
		deferRender:true,
		dom:'<"datatable-header"fBl><t><"datatable-footer"ip>',
		language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        ajax: {
            type: 'GET',
            url: "{{ route('master.getDataMaster') }}"
        },
        // fnCreatedRow: function (row, data, index) {
        //     var info = table.page.info();
        //     var value = index+1+info.start;
        //     $('td', row).eq(0).html(value);
        // },
        columns: [
        // {data: null, sortable: false, orderable: false, searchable: false},
        {data: 'Nomor_Program', name: 'Nomor_Program'},
        {data: 'Nama_Program', name: 'Nama_Program'},
        {data: 'Tujuan', name: 'Tujuan'},
        {data: 'Sasaran', name: 'Sasaran'},
        {data: 'Kegiatan', name: 'Kegiatan'},
        {data: 'Tanggal_Pelaksanaan', name: 'Tanggal_Pelaksanaan'},
        {data: 'Tempat', name: 'Tempat'},
        {data: 'Pelaksana', name: 'Pelaksana'},
        {data: 'Penanggungjawab', name: 'Penanggungjawab'},
        {data: 'Total_Anggaran', name: 'Total_Anggaran'},
        // {data: 'action', name: 'action'}

        ]
	});


});




</script>
@endsection




