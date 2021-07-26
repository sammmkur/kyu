
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
                <div class="card-header">
                    <h3 class="card-title">
                        <button type="button" class="btn btn-block btn-outline-primary" id="add_program">

                            <i class="fas fa-edit"></i>
                            Add
                        </button>
                    </h3>
                  </div>
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
                                          <th>Action</th>

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
  {{-- modal --}}
  {{-- <div id="ajaxModal" class="modal fade" role="dialog"> --}}
    <div id="ajaxModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading">Tambah Program Kerja</h4>
            </div>
            <div class="modal-body">

                 {{-- <form id="ProkerForm" name="ProkerForm" class="form-horizontal"> --}}

                  <div class="row">
                      <div class="col-lg-12">
                          <label for="NomorProgram" class="col-lg-3 control-label">Nomor Program</label>
                          <input type="text" name="NomorProgram" id="NomorProgram" class="col-lg-4 form-control" >
                      </div>

                  </div>
                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <label for="NamaProker" class="col-lg-3 control-label">Nama Program Kerja</label>
                      <input type="text" name="NamaProgram" id="NamaProgram" class="col-lg-6">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <label for="Tujuan" class="col-lg-3 control-label">Tujuan</label>
                      <textarea class="col-lg-8" name="comment" form="usrform" id="tujuan"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <label for="Sasaran" class="col-lg-3 control-label">Sasaran</label>
                      <input type="text" name="Sasaran" id="Sasaran" class="col-lg-6" id="sasaran">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                        <label for="Kegiatan" class="col-lg-3 control-label">Kegiatan</label>
                        <textarea class="col-lg-8" name="comment" form="usrform" id="kegiatan"></textarea>
                    </div>

                </div>

                <div class="row">
                  <div class="col-lg-12">
                      <label for="Tempat" class="col-lg-3 control-label">Tempat</label>
                      <input type="text" name="Tempat" id="Tempat" class="col-lg-6" >
                  </div>

              </div>

              <div class="row">
                <div class="col-lg-12">
                    <label for="Pelaksana" class="col-lg-3 control-label">Pelaksana</label>
                    <input type="text" name="Pelaksana" id="Pelaksana" class="col-lg-6" >
                </div>

            </div>
            <div class="row">
              <div class="col-lg-12">
                  <label for="Penanggungjawab" class="col-lg-3 control-label">Penanggungjawab</label>
                  <input type="text" name="Penanggungjawab" id="Penanggungjawab" class="col-lg-6" >
              </div>

          </div>
          <div class="row">
            <div class="col-lg-12">
                <label for="Total Anggaran" class="col-lg-3 control-label">Total Anggaran</label>
                <input type="text" name="Total Anggaran" id="Total_Anggaran" class="col-lg-6" >
            </div>

        </div>




                  <div class="col-sm-offset-2 col-sm-10">
                    <button id="SavePage" name="SavePage" class="btn btn-primary col-lg-4">Save <i class="icon-floppy-disk"></i></button>
                    {{-- <button id="EditPage" name="EditPage" class="btn btn-primary col-lg-4">Ubah <i class="icon-floppy-disk"></i></button> --}}
                  </div>

                  </div>




                {{-- </form> --}}
            </div>
        </div>
    </div>
    <div id="ajaxModall" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading">Ubah Program Kerja</h4>
                </div>
                <div class="modal-body">

                     {{-- <form id="ProkerForm" name="ProkerForm" class="form-horizontal"> --}}

                      <div class="row">
                          <div class="col-lg-12">
                              <label for="NomorProgram" class="col-lg-3 control-label">Nomor Program</label>
                              <input type="text" name="NomorProgram" id="NomorProgramm" class="col-lg-4 form-control" >
                          </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <label for="NamaProker" class="col-lg-3 control-label">Nama Program Kerja</label>
                          <input type="text" name="NamaProgram" id="NamaProgramm" class="col-lg-6">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <label for="Tujuan" class="col-lg-3 control-label">Tujuan</label>
                          <textarea class="col-lg-8" name="comment" form="usrform" id="tujuann"></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                          <label for="Sasaran" class="col-lg-3 control-label">Sasaran</label>
                          <input type="text" name="Sasaran" id="Sasarann" class="col-lg-6" id="sasaran">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-12">
                            <label for="Kegiatan" class="col-lg-3 control-label">Kegiatan</label>
                            <textarea class="col-lg-8" name="comment" form="usrform" id="kegiatann"></textarea>
                        </div>

                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                          <label for="Tempat" class="col-lg-3 control-label">Tempat</label>
                          <input type="text" name="Tempat" id="Tempatt" class="col-lg-6" >
                      </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                        <label for="Pelaksana" class="col-lg-3 control-label">Pelaksana</label>
                        <input type="text" name="Pelaksana" id="Pelaksanaa" class="col-lg-6" >
                    </div>

                </div>
                <div class="row">
                  <div class="col-lg-12">
                      <label for="Penanggungjawab" class="col-lg-3 control-label">Penanggungjawab</label>
                      <input type="text" name="Penanggungjawab" id="Penanggungjawabb" class="col-lg-6" >
                  </div>

              </div>
              <div class="row">
                <div class="col-lg-12">
                    <label for="Total Anggaran" class="col-lg-3 control-label">Total Anggaran</label>
                    <input type="text" name="Total Anggaran" id="Total_Anggarann" class="col-lg-6" >
                </div>

            </div>




                      <div class="col-sm-offset-2 col-sm-10">
                        {{-- <button id="SavePage" name="SavePage" class="btn btn-primary col-lg-4">Save <i class="icon-floppy-disk"></i></button> --}}
                        <button id="EditPage" name="EditPage" class="btn btn-primary col-lg-4">Ubah <i class="icon-floppy-disk"></i></button>
                      </div>

                      </div>




                    {{-- </form> --}}
                </div>
            </div>
        </div>
</div>

  @endsection
  <!-- /.content -->
{{-- </div> --}}
<!-- /.content-wrapper -->
@section('js')
<script type="text/javascript">

$(document).ready(function(){

    $('#add_program').click(function () {
        // $('#saveBtn').val("create-product");
        // $('#product_id').val('');
        // $('#productForm').trigger("reset");
        // $('#modelHeading').html("Create New Product");
     $('#NomorProgram').empty();
  $('#NamaProgram').empty();
     $('#tujuan').empty();
   $('#Sasaran').empty();
     $('#kegiatan').empty();
   $('#Tempat').empty();
     $('#Pelaksana').empty();
   $('#Penanggungjawab').empty();
    $('#Total_Anggaran').empty();
        $('#ajaxModal').modal('show');
        $('#SavePage').show();

    });

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
        {data: 'action', name: 'action'}

        ]
	});

    $('body').on('click', '.editProgram', function () {
      var NomorProgram = $(this).data('id');
      console.log(NomorProgram);
      $('#ajaxModall').modal('show');
    $('#EditPage').show();
      $.ajax({
        type: 'get',
        url : "{{ route('input.editProgram') }}",
            data: {
                NomorProgram:NomorProgram,
            },

        success: function(data) {

            console.log(data);
            $('#NomorProgramm').val(data[0].Nomor_Program);
            $('#NamaProgramm').val(data[0].Nama_Program);
            $('#tujuann').val(data[0].Tujuan);
            $('#Sasarann').val(data[0].Sasaran);
            $('#kegiatann').val(data[0].Kegiatan);
            $('#Tempatt').val(data[0].Tempat);
            $('#Pelaksanaa').val(data[0].Pelaksana);
            $('#Penanggungjawabb').val(data[0].Penanggungjawab);
            $('#Total_Anggarann').val(data[0].Total_Anggaran);



        },
        error: function(response) {
                console.log(response);
        }
    });


   });

   $('#EditPage').click(function() {
    var Nomorprogram = $('#NomorProgramm').val();
    var NamaProgram = $('#NamaProgramm').val();
    var Tujuan = $('#tujuann').val();
    var Sasaran = $('#Sasarann').val();
    var Kegiatan = $('#kegiatann').val();
    var Tempat = $('#Tempatt').val();
    var Pelaksana = $('#Pelaksanaa').val();
    var Penanggungjawab = $('#Penanggungjawabb').val();
    var TotalAnggaran = $('#Total_Anggarann').val();

//    console.log(Nomorprogram);
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url : "{{ route('input.ProsesEditProgram') }}",
            data: {
                Nomorprogram:Nomorprogram,
                NamaProgram:NamaProgram,
                Tujuan:Tujuan,
                Sasaran:Sasaran,
                Kegiatan:Kegiatan,
                Tempat:Tempat,
                Pelaksana:Pelaksana,
                Penanggungjawab:Penanggungjawab,
                TotalAnggaran:TotalAnggaran
            },

        success: function(data) {

            console.log(data);
            $('#ajaxModall').modal('hide');
            table.draw();



        },
        error: function(response) {
                console.log(response);
        }
    });




	});

  $('#SavePage').click(function() {
    var Nomorprogram = $('#NomorProgram').val();
    var NamaProgram = $('#NamaProgram').val();
    var Tujuan = $('#tujuan').val();
    var Sasaran = $('#Sasaran').val();
    var Kegiatan = $('#kegiatan').val();
    var Tempat = $('#Tempat').val();
    var Pelaksana = $('#Pelaksana').val();
    var Penanggungjawab = $('#Penanggungjawab').val();
    var TotalAnggaran = $('#Total_Anggaran').val();

//    console.log(Nomorprogram);
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'get',
        url : "{{ route('input.masterProgram') }}",
            data: {
                Nomorprogram:Nomorprogram,
                NamaProgram:NamaProgram,
                Tujuan:Tujuan,
                Sasaran:Sasaran,
                Kegiatan:Kegiatan,
                Tempat:Tempat,
                Pelaksana:Pelaksana,
                Penanggungjawab:Penanggungjawab,
                TotalAnggaran:TotalAnggaran
            },

        success: function(data) {

            console.log(data);
            $('#ajaxModal').modal('hide');
            table.draw();



        },
        error: function(response) {
                console.log(response);
        }
    });




	});

    $('body').on('click', '.deleteProgram', function () {
      var NomorProgram = $(this).data('id');
      console.log(NomorProgram);
    //   $('#ajaxModall').modal('show');
    // $('#EditPage').show();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
        type: 'get',
        url : "{{ route('input.deleteProgram') }}",
            data: {
                NomorProgram:NomorProgram,
            },

        success: function(data) {
            table.draw();
            console.log(data);




        },
        error: function(response) {
                console.log(response);
        }
    });


   });


});




</script>
@endsection




