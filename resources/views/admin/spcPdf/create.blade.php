@extends('layouts.admin')

@section('content')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Upload PDF for Spc-Language Page
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
           @if(Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
           @endif
           <form  action="{{url('admin/spc')}}" method="POST" enctype="multipart/form-data">  
            @csrf
               <div class="box-body">
                <div class="form-group">
                  <label for="file">Import PDF</label>
                   <input type="file" name="spc_pdf" id="spc_pdf">
                  @if ($errors->has('spc_pdf'))
                    <div class="text-danger">{{ $errors->first('spc_pdf') }}</div>
                  @endif
                </div>
              </div>
             
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  
</div>

@endsection