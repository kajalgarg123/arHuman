@extends('layouts.admin')

@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Team Members
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{url('admin/team/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($teammembers as $teammember)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $teammember->name }}</td>
                  <td>{{ $teammember->description }}</td>
                  <td>{{ $teammember->created_at->format('Y-m-d') }}</td>
                  <td> <a class="btn btn-success btn-xs" href="{{ url('admin/team/show/'.$teammember->id) }}"><i class="fa fa-eye"></i></a>

                   <a class="btn btn-info btn-xs" href="{{ url('admin/team/edit/'.$teammember->id) }}"><i class="fa fa-edit"></i></a>

                   <form action="{{ url('/admin/team/delete/'.$teammember->id) }}" method="POST" onsubmit="deleteTeam('{{ $teammember->id }}', '{{ $teammember->name }}', event,this)">
                    @csrf
                    <button class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></button>
                   </form>
                 </td>
                </tr>
                @endforeach
                </tbody>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
  
    function deleteTeam(id, name, event,form)
    { 
        event.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You want to delete this team member",
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: true,
            },
            closeModal: false,
            closeModal: false,
            closeOnEsc: false,
        })
       .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                url: $(form).attr('action'),
                data: $(form).serialize(),
                type: 'DELETE',
                success: function(data) {
                    data = JSON.parse(data);
                    if(data['status']) {
                        swal({
                            title: data['message'],
                            text: "Press ok to continue",
                            icon: "success",
                            buttons: {
                                cancel: true,
                                confirm: true,
                            },
                            closeOnConfirm: false,
                            closeOnEsc: false,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.reload();
                            }
                            });
                        } else {
                             swal("Error", data['message'], "error");
                        }
                    }
                });
            } else {
                swal("Cancelled", "This team member will not be deleted.", "error");
            }
        });
    }
</script>
@endsection
