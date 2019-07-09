@extends('layouts.admin')

@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Team Member Details
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-9">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <a class="btn btn-success pull-right" href="{{url('/admin/team/index')}}">Back</a>
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <td>{{$teammember->name}}</td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td>{{$teammember->description}}</td>
                </tr>
                <tr>
                  <th>Created At</th>
                  <td>{{$teammember->created_at}}</td>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
@endsection
