@extends('admin.layout.master')
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Create User</b></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" role="form" id="addUserForm">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="uname" id="name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" name="pwd" id="pass" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">USER TYPE</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" name="type" id="acc_type">
                                                <option>Select</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">CHOOSE NETWORK</label>
                                        <div class="col-md-10">
                                            <select name="network" class="{{ count($networks) == 0 ? 'form-control' : '' }} select2 {{ count($networks) > 0 ? 'select2-multiple' : '' }} "
                                                {{ count($networks) > 0 ? 'multiple' : '' }} id="network"
                                                name="network[]" data-placeholder="Choose ...">
                                                @if (count($networks) > 0)
                                                    @foreach ($networks as $network)
                                                        <option value="{{ $network->id }}">{{ $network->Network }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="-" selected disabled>No Networks is available to select
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <button type="button" class="btn btn-purple waves-effect waves-light" id="addUserBtn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- content -->
</div>

@endsection

@push('custom-scripts')
<script>
    $(document).on('click', '#addUserBtn', function (e) {
        e.preventDefault();

        let btn = $(this);
        let form = $('#addUserForm');

        $.ajax({
            url: "{{ route('revounts_cms.store-users') }}",
            type: "POST",
            headers:{
                "X-CSRF-TOKEN":"{{ csrf_token() }}"
            },
            data: form.serialize(),
            beforeSend: function () {
                btn.prop('disabled', true);
                btn.html('<i class="fa fa-spinner fa-spin"></i> Saving...');
            },
            success: function (res) {
                alert(res.message);
                location.reload(); // ya table append karwa lo
            },
            error: function (xhr) {
                btn.prop('disabled', false);
                btn.html('Save');

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    console.error('Validation Errors:', errors);

                    // clean readable format
                    Object.keys(errors).forEach(function (field) {
                        console.error(field + ': ' + errors[field][0]);
                    });

                    // UI display (already working)
                    let errorHtml = '';
                    $.each(errors, function (key, value) {
                        errorHtml += `<p>${value[0]}</p>`;
                    });

                    $('#validation').html(errorHtml);
                    $('#error_box').show();
                }
            }
        });
    });
</script>
@endpush