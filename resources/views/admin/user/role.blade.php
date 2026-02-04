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
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!--Modal Css-->
    <link href="{{ asset('assets/plugins/custombox/css/custombox.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Assign Role</b></h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" id="assignRoleForm">
                                        @csrf

                                        {{-- User Select --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Select User</label>
                                            <div class="col-md-10">
                                                <select class="form-control select2" id="user_id" name="userid">
                                                    <option value="">Choose user...</option>
                                                    @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->uname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Roles --}}
                                        @php
                                            $roles = [
                                                'settings' => 'General Settings',
                                                'add_user' => 'Add User',
                                                'edit_user' => 'Edit User',
                                                'add_network' => 'Add Network',
                                                'edit_network' => 'Edit Network',
                                                'add_categories' => 'Add Category',
                                                'edit_categories' => 'Edit Category',
                                                'add_stores' => 'Add Stores',
                                                'edit_stores' => 'Edit Stores',
                                                'add_coupons' => 'Add Coupons',
                                                'edit_coupons' => 'Edit Coupons',
                                                'add_deals' => 'Add Deals',
                                                'edit_deals' => 'Edit Deals',
                                                'add_blog' => 'Add Blog',
                                                'edit_blog' => 'Edit Blog',
                                            ];
                                        @endphp

                                        @foreach($roles as $key => $label)
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">{{ $label }}</label>
                                                <div class="col-md-10">
                                                    <input type="hidden" name="{{ $key }}" value="0">
                                                    <input type="checkbox" name="{{ $key }}" value="1" data-plugin="switchery"
                                                        data-color="#f05050">
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Save</label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('plugin-scripts')
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>


    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}"></script>
@endpush
@push('custom-scripts')
    <script>
        $('#user_id').on('change', function () {
            let userId = $(this).val();

            if (!userId) return;

            $.get('/revounts_cms/user/' + userId + '/roles', function (res) {

                // reset all
                $('#assignRoleForm input[type="checkbox"]').prop('checked', false);

                // loop roles
                Object.keys(res).forEach(function (key) {
                    if (res[key] == 1) {
                        $('input[name="' + key + '"]').prop('checked', true);
                    }
                });
            });
        });

        $('#assignRoleForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: "/revounts_cms/user/assign-roles",
                type: "POST",
                data: $(this).serialize(),
                success: function (res) {
                    alert(res.message);
                }
            });
        });
    </script>
@endpush