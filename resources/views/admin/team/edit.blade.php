@extends('layouts.admin')

@section('content')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Edit Team Member
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <form  action="{{route('update.team',$teammember->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" value="{{ old('name') ? old('name') : $teammember->name }}" name="name" placeholder="Name">
                  @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Description">{{ old('description') ? old('description') : $teammember->description }}</textarea>
                  @if ($errors->has('description'))
                    <div class="text-danger">{{ $errors->first('description') }}</div>
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