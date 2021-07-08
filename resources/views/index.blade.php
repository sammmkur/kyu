
@extends('layouts.app1',['active' => 'notulensi'])
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header"> --}}

    @section('header')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Notulensi KYU</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">KYU Notulensi</li>
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
            <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Rapat 3 bulan pertama
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="edit" contenteditable="true">
                            Edit Here...
                        </div>
                        <div id="update"></div>
                    </div>
                    <div class="card-footer">
                        <input type="button" value="SAVE" onclick="saveEdits()"/>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Rapat 3 bulan kedua
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="edit" contenteditable="true">
                            Edit Here...
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Rapat 3 bulan ketiga
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <div id="edit" contenteditable="true">
                            Edit Here...
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Rapat 3 bulan keempat
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <div id="edit" contenteditable="true">
                            Edit Here...
                        </div>
                      </div>
                    </div>
                  </div>
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
  <script>
    function checkEdits() {

//find out if the user has previously saved edits
if(localStorage.userEdits!=null)
document.getElementById("edit").innerHTML = localStorage.userEdits;
}
    function saveEdits() {

//get the editable element
var editElem = document.getElementById("edit");

//get the edited element content
var userVersion = editElem.innerHTML;

//save the content to local storage
localStorage.userEdits = userVersion;

//write a confirmation to the user
document.getElementById("update").innerHTML="Edits saved!";

}
</script>
@endsection




