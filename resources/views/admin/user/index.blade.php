@extends('admin.layout.master')
@push('plugin-styles')
<link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />




    <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!--Modal Css-->
    <link href="{{ asset('assets/plugins/custombox/css/custombox.css') }}" rel="stylesheet">

    <style>
        .modal-header .close {
            padding: 0rem 0rem !important;
            margin: 0px 0px 0px auto !important;
        }
    </style>
@endpush
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
                                                <button type="button" class="btn btn-purple waves-effect waves-light"
                                                    onclick="delete_user(this, {{ $user->id }})">
                                                    Delete
                                                </button>

                                                <button class="btn btn-primary waves-effect waves-light editUserBtn"
                                                    onclick="edit_user({{ $user->id }})" data-target="#userEditModal" data-toggle="modal">
                                                    Edit
                                                </button>

                                                @if ($user->status == 1)
                                                    <button type="button" class="btn btn-inverse waves-effect waves-light"
                                                        onclick="user_status_switch(this, {{ $user->id }}, 0)">
                                                        Disable
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-success waves-effect waves-light"
                                                        onclick="user_status_switch(this, {{ $user->id }}, 1)">
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

            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    <div id="userEditModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body" id="userEditModalBody">
                    <div class="text-center">
                        <i class="fa fa-spinner fa-spin fa-2x"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script>
    function edit_user(userId) {

        $('#userEditModal').modal('show');

        $('#userEditModalBody').html(`
                <div class="text-center p-4">
                    <i class="fa fa-spinner fa-spin fa-2x"></i>
                    </div>
            `);

        $.ajax({
            url: "/revounts_cms/users/" + userId + "/edit",
            type: "GET",
            success: function (res) {
                $('#userEditModalBody').html(res);
            },
            error: function () {
                $('#userEditModalBody').html(`
                        <div class="alert alert-danger text-center">
                            Failed to load user
                            </div>
                            `);
            }
        });
    }

    function delete_user(el, userId) {
        let btn = $(el);

        $.ajax({
            url: "/revounts_cms/user/" + userId,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            beforeSend: function () {
                btn.removeClass('btn-purple');
                btn.addClass('btn-danger');
                btn.prop('disabled', true);
                btn.html(`<i class="fa fa-spinner fa-spin"></i> Deleting...`);
            },
            success: function (res) {
                btn.closest("tr").fadeOut(300, function () {
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
            beforeSend: function () {
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

@push('plugin-scripts')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

@endpush

@push('custom-scripts')
<script>
    $(document).on('submit', '#updateUserForm', function (e) {
    e.preventDefault();

    let form = $(this);
    let btn = $('#updateUserBtn');

    $.ajax({
        url: "{{ route('revounts_cms.update-user') }}",
        type: "POST",
        data: form.serialize(),
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        beforeSend: function () {
            btn.prop('disabled', true)
               .html('<i class="fa fa-spinner fa-spin"></i> Updating...');
        },
        success: function (res) {
            console.log(res.message);
        },
        error: function (xhr) {
            console.error(xhr.responseText);
            btn.prop('disabled', false).text('Update');
        }
    });
});
</script>
@endpush