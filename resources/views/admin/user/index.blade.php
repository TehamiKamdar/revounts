@extends('admin.layout.master')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Total Users On Your Website:<span class="label label-success"
                                        id="t_users">{{ count($users) }}</span></b></h4>
                            <h3 id="status_response"></h3>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>User Name</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Network</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="response">
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$key }}</td>

                                            <td>{{ $user->uname }}</td>

                                            <td>{{ $user->pwd }}</td>

                                            <td>
                                                @if ($user->status == 1)
                                                    <span class="label label-table label-success">Active</span>
                                                @else
                                                    <span class="label label-table label-danger">Disabled</span>
                                                @endif
                                            </td>

                                            <td>
                                                {{ $user->network ?? '' }}
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-purple waves-effect waves-light" onclick="delete_user({{ $user->id }})">
                                                    Delete
                                                </button>

                                                <button class="btn btn-primary waves-effect waves-light" onclick="edit_user({{ $user->id }})" data-toggle="modal" data-target="#con-close-modal">
                                                    Edit
                                                </button>

                                                @if ($user->status == 1)
                                                    <a href="#" class="btn btn-inverse waves-effect waves-light" onclick="user_status_switch(this, {{ $user->id }}, 0)">
                                                        Disable
                                                    </a>
                                                @else
                                                    <a href="#" class="btn btn-success waves-effect waves-light" onclick="user_status_switch(this, {{ $user->id }}, 1)">
                                                        Enable
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
<script>
function user_status_switch(el, userId, status) {
    let btn = $(el);

    $.ajax({
        url: "{{ route('revounts_cms.users.status.change') }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            id: userId,
            status: status
        },
        beforeSend: function(){
            btn.prop('disabled', true);
            btn.html(`<i class="fa fa-spinner fa-spin"></i> Saving...`);
        },
        success: function () {
            location.reload();
        }
    });
}
</script>
@endsection