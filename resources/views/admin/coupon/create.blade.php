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
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!--Modal Css-->
    <link href="{{ asset('assets/plugins/custombox/css/custombox.css') }}" rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                    <![endif]-->

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax_request.js') }}"></script>
    <style>
        .form-control {
            display: block !important;
            width: 80% !important;
            height: 34px !important;
            padding: 6px 12px !important;
            font-size: 14px !important;
            line-height: 1.42857143 !important;
            color: #555 !important;
            background-color: #fff !important;
            background-image: none !important;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s !important;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
        }

        .input-group-btn {
            width: 69% !important;
        }

        .input-group {
            width: 80% !important;
        }
    </style>
@endpush
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Add Coupon</b></h4>

                        <form id="addCouponForm" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            {{-- Offer --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Offer Box</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="offer" required>
                                </div>
                            </div>

                            {{-- Offer Details --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Offer Details</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="offer_details" required>
                                </div>
                            </div>

                            {{-- Offer Description --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Offer Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="offer_description" required></textarea>
                                </div>
                            </div>

                            {{-- Tracking URL --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Tracking Link</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="tracking_url">
                                </div>
                            </div>

                            {{-- Expiry --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Expiry Date</label>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" name="expiry_date">
                                </div>
                            </div>

                            {{-- Code Type --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Type</label>
                                <div class="col-md-2">
                                    <input type="radio" name="code_type" value="false" onclick="showCodeField()"> Code
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="code_type" value="true" checked onclick="hideCodeField()"> Active
                                </div>
                            </div>

                            {{-- Enter Code --}}
                            <div class="form-group" id="codeField" style="display:none;">
                                <label class="col-md-2 control-label">Enter Code</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="code">
                                </div>
                            </div>

                            {{-- Store --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Choose Store</label>
                                <div class="col-md-10">
                                    <select class="form-control select2" id="store" name="store" required>
                                        <option value="">Select</option>
                                        @foreach($stores as $store)
                                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Category --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Choose Category</label>
                                <div class="col-md-10">
                                    <select class="form-control select2" name="category">
                                        <option value="">Select</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Image --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Image URL</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="coupon_image">
                                </div>
                            </div>

                            {{-- Checkboxes --}}
                            @php
                                $checks = [
                                    'featured' => 'Featured For Home',
                                    'popular' => 'Popular',
                                    'store_feature' => 'Featured For Store',
                                    'expired_cpn' => 'Expired',
                                    'addbyuser_cpn' => 'Added by User'
                                ];
                            @endphp

                            @foreach($checks as $field => $label)
                                <div class="form-group">
                                    <label class="col-md-2 control-label">{{ $label }}</label>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="{{ $field }}" value="1" data-plugin="switchery">
                                    </div>
                                </div>
                            @endforeach

                            {{-- Submit --}}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Save Coupon</label>
                                <div class="col-md-10">
                                    <button type="button" class="btn btn-primary" id="saveBtn" onclick="addCoupon()">Save</button>
                                </div>
                            </div>
                        </form>

                        {{-- Error box --}}
                        <div id="error_box" class="col-md-6" style="display:none; margin:auto; margin-left:20%; text-align:center; border:2px solid red;">
                            <fieldset>
                                <legend>Errors</legend>
                                <p id="validation" style="color:black; font-weight:600;"></p>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
function showCodeField() {
    document.getElementById('codeField').style.display = 'block';
}

function hideCodeField() {
    document.getElementById('codeField').style.display = 'none';
}
function addCoupon(){
    let form = $('#addCouponForm');
    $.ajax({
        url: '/revounts_cms/coupons',
        method: 'POST',
        data: form.serialize(),
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        beforeSend: function(){
            $('#saveBtn').prop('disabled', true)
            $('#saveBtn').html(`<i class="fa fa-spinner fa-spin"></i> Saving...`)
        },
        success: function(res){
            alert(res.message);
            window.location.reload();
        },
        error: function(xhr){
            console.error(xhr.response);
            $('#saveBtn').prop('disabled', false)
            $('#saveBtn').html(`Save`)
        }
    })
}
</script>
@endsection

@push('plugin-scripts')
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script>

    $('#store').select2({
        placeholder: "Select Store",
        allowClear: true,
        width: '100%'
    });
@endpush