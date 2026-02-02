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
    </script>

    <script>
        function nametourl() {
            var text = document.getElementById("slugText").value;

            var url = ToSeoUrl(text);

            document.getElementById("slugText").value = url;


        }

        function ToSeoUrl(url) {

            // make the url lowercase
            var encodedUrl = url.toString().toLowerCase();

            // replace & with and
            encodedUrl = encodedUrl.split(/\&+/).join("-and-")

            // remove invalid characters
            encodedUrl = encodedUrl.split(/[^a-z0-9]/).join("-");

            // remove duplicates
            encodedUrl = encodedUrl.split(/-+/).join("-");

            // trim leading & trailing characters
            encodedUrl = encodedUrl.trim('-');

            return encodedUrl;
        }
    </script>
@endpush

@section('content')
@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
@if (session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Edit Blog Post</b></h4>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" role="form" action="{{ route('revounts_cms.update-blog') }}"  method="POST" enctype="multipart/form-data" id="blogform" name="blog_form">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <input type="hidden" name="publish_date" value="{{ $blog->publish_date }}">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="{{ old('b_title', $blog->name) }}" name="b_title">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Slug</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="{{ old('b_slug', $blog->url) }}" name="b_slug"
                                                oncontextmenu="return false;" onkeyup="nametourl();" id="slugText">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description</label>
                                        <div class="col-md-10">
                                            <textarea id="sum" class="summernote" name="b_short_description">{{ old('b_short_description', $blog->short_des) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Long Description</label>
                                        <div class="col-md-10">
                                            <textarea class="summernote" name="b_long_description">{{ old('b_long_description', $blog->long_des) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="filestyle" name="b_image" data-iconname="fa fa-cloud-upload">
                                            @if($blog->image)
                                                <br>
                                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}" width="100">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Image Alt</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="img_alt" value="{{ old('img_alt', $blog->image_alt) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tags</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="tags" value="{{ old('tags', $blog->tags) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="b_meta_title" value="{{ old('b_meta_title', $blog->meta_title) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="b_meta_desc" value="{{ old('b_meta_desc', $blog->meta_des) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="b_meta_key" value="{{ old('b_meta_key', $blog->meta_key) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Select Category</label>
                                        <div class="col-md-10">
                                            <select class="form-control select2" id="cat" name="b_category">
                                                <option>Select</option>
                                                @foreach ($categories as $cat)
                                                    <option value="{{ $cat->id }}" {{ $blog->category == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Select Store</label>
                                        <div class="col-md-10">
                                            <select class="form-control multi-select select2" id="store" name="r_store">
                                                <option>Select</option>
                                                @foreach ($stores as $store)
                                                    <option value="{{ $store->id }}" {{ $blog->r_store == $store->id ? 'selected' : '' }}>{{ $store->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Trending</label>
                                        <div class="col-md-10">
                                            <input type="checkbox" name="b_feature" id="feature" value="1"
                                                data-plugin="switchery" data-color="#81c868" {{ $blog->featured == 1 ? 'checked' : '' }}>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Draft</label>
                                        <div class="col-md-10">
                                            <input type="checkbox" name="is_draft" id="is_draft" value="1"
                                                data-plugin="switchery" data-color="#81c868" {{ $blog->is_draft == 1 ? 'checked' : '' }}>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Save Your Blog</label>
                                        <div class="col-md-10">
                                            <button type="submit" onclick="document.getElementById('loader').style.display = 'block'" class="btn btn-purple waves-effect waves-light">Update</button>
                                            <img src="{{ asset('assets/images/sp-loading.gif') }}" style="no-repeat center center;width:32px;height:32px; display:none;" id="loader">
                                        </div>
                                    </div>

                                    <p id="response"></p>

                                </form>
                            </div>
                            <div id="custom-modal" class="modal-demo">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection