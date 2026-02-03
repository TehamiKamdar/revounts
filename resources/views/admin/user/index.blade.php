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
                                        <td class="sr-no">{{ ++$key }}</td>

                                        <td>{{ $user->uname }}</td>

                                        <td>{{ $user->pwd }}</td>

                                        <td>
                                            @if ($user->status == 1)
                                                <span class="label label-table label-success">Active</span>
                                            @else
                                                <span class="label label-table label-danger">Inactive</span>
                                            @endif
                                        </td>

                                        <td>
                                            {{ $user->network ?? '' }}
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-purple waves-effect waves-light" onclick="delete_user(this, {{ $user->id }})">
                                                Delete
                                            </button>

                                            <button class="btn btn-primary waves-effect waves-light" onclick="edit_user({{ $user->id }})" data-toggle="modal" data-target="#con-close-modal">
                                                Edit
                                            </button>

                                            @if ($user->status == 1)
                                                <button type="button" class="btn btn-inverse waves-effect waves-light" onclick="user_status_switch(this, {{ $user->id }}, 0)">
                                                    Disable
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-success waves-effect waves-light" onclick="user_status_switch(this, {{ $user->id }}, 1)">
                                                    Enable
                                                </button>
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
function delete_user(el, userId){
    let btn = $(el);

    $.ajax({
        url: "/revounts_cms/user/"+userId,
        type: "POST",
        data:{
            _token: "{{ csrf_token() }}"
        },
        beforeSend: function(){
            btn.removeClass('btn-purple');
            btn.addClass('btn-danger');
            btn.prop('disabled', true);
            btn.html(`<i class="fa fa-spinner fa-spin"></i> Deleting...`);
        },
        success: function (res) {
            btn.closest("tr").fadeOut(300, function(){
                $(this).remove();
                reindexSerials()
            });
        }
    })
}

function reindexSerials() {
    $('td.sr-no').each(function (index) {
        $(this).text(index + 1);
    });
}

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
            btn.html(`<i class="fa fa-spinner fa-spin"></i> Saving...`);
            btn.prop('disabled', true);
        },
        success: function (res) {
            alert(res.message);
            location.reload();
        }
    });
}
</script>
@endsection