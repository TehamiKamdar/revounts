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
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>ADD CATEGORY</b></h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-horizontal" role="form" name="add_cat_form" method="POST" action="{{ route('revounts_cms.store-category') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{-- Hidden field --}}
                                        <input type="hidden" name="add_cat" value="1">

                                        {{-- Category Type --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Category Type</label>
                                            <div class="col-md-10">
                                                <label class="radio-inline" for="catType1">
                                                    <input type="radio" checked onchange="setCatType(this.value)"
                                                        name="type_radio" id="catType1" value="0">
                                                    Parent Category
                                                </label>
                                                <label class="radio-inline" for="catType2">
                                                    <input type="radio" onchange="setCatType(this.value)"
                                                        name="type_radio" id="catType2" value="1">
                                                    Sub Category
                                                </label>
                                            </div>
                                        </div>

                                        {{-- Sub-category dropdown --}}
                                        <div class="form-group" id="subBox" style="display: none;">
                                            <label class="col-md-2 control-label">Select Parent Category</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="parent">
                                                    <option value="">Please Select</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Category Name --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Name*</label>
                                            <div class="col-md-10">
                                                <input type="text" name="cat_name" class="form-control"
                                                    value="{{ old('cat_name') }}">
                                            </div>
                                        </div>

                                        {{-- Slug --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Slug*</label>
                                            <div class="col-md-10">
                                                <input type="text" name="cat_slug" class="form-control"
                                                    value="{{ old('cat_slug') }}">
                                            </div>
                                        </div>

                                        {{-- Meta Title --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Meta Title</label>
                                            <div class="col-md-10">
                                                <input type="text" name="cat_title" class="form-control"
                                                    value="{{ old('cat_title') }}">
                                            </div>
                                        </div>

                                        {{-- Meta Description --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Meta Description</label>
                                            <div class="col-md-10">
                                                <input type="text" name="cat_meta_desc" class="form-control"
                                                    value="{{ old('cat_meta_desc') }}">
                                            </div>
                                        </div>

                                        {{-- Description --}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Description</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="cat_desc">{{ old('cat_desc') }}</textarea>
                                            </div>
                                        </div>

                                        {{-- Image Upload --}}
                                        <div class="form-group" id="img_id">
                                            <label class="col-md-2 control-label">Image</label>
                                            <div class="col-md-10">
                                                <input type="file" class="filestyle" name="image"
                                                    data-iconname="fa fa-cloud-upload">
                                            </div>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="submit" id="save_btn" class="btn btn-purple">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div> <!-- row -->

                        </div> <!-- card-box -->
                    </div> <!-- col-sm-12 -->
                </div> <!-- row -->

            </div> <!-- container -->
        </div> <!-- content -->
    </div> <!-- content-page -->


    <script>
        function setCatType(val) {
            var box = document.getElementById('subBox');

            var img = document.getElementById('img_id');

            if (val == '0') {
                box.style.display = "none";
                img.style.display = "block";
            } else if (val == '1') {
                box.style.display = "block";
                img.style.display = "none";
            }
        }
    </script>
@endsection
@push('plugin-scripts')
    <script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript">
    </script>

    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript">
    </script>

    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/autocomplete.js') }}"></script>



    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>




    <script src="{{ asset('assets/plugins/custombox/js/custombox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/custombox/js/legacy.min.js') }}"></script>


    <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        $(document).on('click', '#save_btn', function(e){
            e.preventDefault();

            let btn = $(this);
            
        })
    </script>
@endpush