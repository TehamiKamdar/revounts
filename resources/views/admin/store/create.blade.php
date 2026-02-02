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
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Create Store</b></h4>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            <div class="row">
                                <div class="col-md-12">

                                    <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                        action={{ route('revounts_cms.stores.store') }} name="store_form">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Store Name*</label>
                                            <div class="col-md-10">
                                                <input type="text" name="store_name" id="s_name" class="form-control"
                                                    value="{{ old('store_name') }}">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Store Slug* (URL For Your Store)</label>
                                            <div class="col-md-10 slug-box">
                                                <input type="text" name="store_slug" id="slugText" class="form-control"
                                                    value="{{ old('store_slug') }}" oncontextmenu="return false;"
                                                    onkeyup="nametourl();">

                                                <p id='error_message'>Dot Not Use <b>Space</b></p>
                                                <div class="result"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Heading*</label>
                                            <div class="col-md-10">

                                                <input type="text" id="heading" name="store_heading"
                                                    class="form-control" value="{{ old('store_heading') }}">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Choose Categories</label>
                                            <div class="col-md-10">
                                                <select class="form-control multi-select select2" id="cat"
                                                    name="store_category[]">
                                                    <option value="Please Select">Please Select</option>
                                                    @foreach ($category as $c)
                                                        <option value="{{ $c->id }}"
                                                            {{ in_array($c->id, old('store_category', [])) ? 'selected' : '' }}>
                                                            {{ $c->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Short Description</label>
                                            <div class="col-md-10">
                                                <textarea type="text" class="summernote" value="" id="shrt_desc" name="store_short_description">{{ old('store_short_description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Long Description</label>
                                            <div class="col-md-10">
                                                <textarea type="text" class="summernote" value="" id="lng_desc" name="store_long_description">{{ old('store_long_description') }}</textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Image</label>
                                            <div class="col-md-10">
                                                <input type="file" class="filestyle form-control" name="store_image"
                                                    id="s_image" data-iconname="fa fa-cloud-upload">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Image Alt</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="alt"
                                                    name="image_alt" value="{{ old('image_alt') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Banner Image</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="alt"
                                                    name="banner_image" value="{{ old('banner_image') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Direct URL</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="direct_url"
                                                    name="direct_url"  value="{{ old('direct_url') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tracking URL</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="tracking_url"
                                                    name="store_tracking_url" value="{{ old('store_tracking_url') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Meta Title</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="title"
                                                    name="meta_title" value="{{ old('meta_title') }}" maxlength="60">
                                                <span style="font-size: 10px;"><i>* <b>60</b> characters
                                                        allowed.</i></span>
                                            </div>
                                            <!--Number of chars: <span id="sessionNum_counter">5</span>-->
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Meta Description</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="desc"
                                                    name="meta_desc" value="{{ old('meta_desc') }}" maxlength="160">
                                                <span style="font-size: 10px;"><i>* <b>160</b> characters
                                                        allowed.</i></span>
                                            </div>
                                        </div>

                                        <center><label>HelpFull Links</label></center>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Facebook</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="facebook" value="{{ old('facebook') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Pinterest</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="pinterest" value="{{ old('pinterest') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Twitter</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords" name="twitter"
                                                    value="{{ old('twitter') }}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Instagram</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="instagram" value="{{ old('instagram') }}">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Youtube</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords" name="youtube"
                                                    value="{{ old('youtube') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords"
                                                    name="google_plus" value="{{ old('google_plus') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Phone#</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords" name="android"
                                                    value="{{ old('android') }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Address</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="keywords" name="ios"
                                                    value="{{ old('ios') }}">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Top Store</label>
                                            <div class="col-md-10">
                                                <input type="checkbox" name="top" id="feature" value="1"
                                                    {{ old('top', 1) ? 'checked' : '' }} data-plugin="switchery" data-color="blue">

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Exclude Title Date</label>
                                            <div class="col-md-10">
                                                <input type="checkbox" name="meta_date" id="feature" value="1"
                                                    {{ old('meta_date', 1) ? 'checked' : '' }} data-plugin="switchery" data-color="blue">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">For Sitemap</label>
                                            <div class="col-md-10">
                                                <input type="checkbox" name="for_sitemap" id="for_sitemap"
                                                    value="1" {{ old('for_sitemap', 1) ? 'checked' : '' }} data-plugin="switchery" data-color="blue">

                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Save Your Store</label>
                                            <div class="col-md-10">
                                                <center>
                                                    <button type="submit"
                                                        class="btn btn-purple waves-effect waves-light">Save</button>
                                                    <img src="{{ asset('assets/images/spinner.gif') }}"
                                                        style="no-repeat center center;width:32px;height:32px; display:none;"
                                                        id="loader">
                                                </center>
                                            </div>
                                        </div>


                                    </form>
                                </div>

                                <div class="col-md-6" id="error_box"
                                    style="display:none; margin:auto;  margin-left:20%; text-align:center; border:2px solid red; ">
                                    <fieldset>
                                        <legend>Errors</legend>
                                        <p id="validation" style="color:black; font-weight:600;"></p>
                                    </fieldset>

                                </div>


                                <div id="custom-modal" class="modal-demo">
                                </div>


                                <a href="#custom-modal" id="store_response" data-animation="door"
                                    data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
                                <!--	<div class="col-md-6">
                                    <form class="form-horizontal" role="form">

             <div class="form-group">
             <label class="col-md-2 control-label">Readonly</label>
             <div class="col-md-10">
             <input type="text" class="form-control" readonly="" value="Readonly value">
             </div>
             </div>
             <div class="form-group">
             <label class="col-md-2 control-label"             >Disabled</label>
             <div class="col-md-10">
             <input type="text" class="form-control" disabled="" value="Disabled value">
             </div>
             </div>


             <div class="form-group">
             <label class="col-sm-2 control-label">Static control</label>
             <div class="col-sm-10">
             <p class="form-control-static">email@example.com</p>
             </div>
             </div>
             <div class="form-group">
             <label class="col-sm-2 control-label">Helping text</label>
                                       <div class="col-sm-10">
             <input type="text" class="form-control" placeholder="Helping text">
             <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
             </div>
             </div>

             <div class="form-group">
             <label class="col-sm-2 control-label">Input Select</label>
             <div class="col-sm-10">
             <select class="form-control">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
             </select>
             <h             6>Multiple select</h6>
             <select multiple="" class="form-control">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
             </select>
             </div>
             </div> -->

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div> <!-- content -->



    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
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

        /         / $(document).ready(function(){
        // var maxChars = $("#title");
        // var max_length            = maxChars.attr('maxlength');
        // if (max_length > 0) {
        //     maxChars.on('keyup', function( e){
        //         length = new Number(maxChars.val().length);
        //         counter = max_len gth-length;
        //         $("#sessionNum_counter").text(counter);
        //     });
        // }
        //  });


        function edit_store_form(id) {
            document.getElementById('edit_store_response').innerHTML = '<center><img src="images/spinner.gif"></center>';
            var timestamp = new Date().getTime();
            // Return Request
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById('edit_store_response').innerHTML = this.responseText;
                    $('.summernote').summernote({
                        height: 350, // set editor height
                        minHeight: null, // set minimum height of editor
                        maxHeight: null, // set maximum height of editor
                        focus: false // set focus to editable area after initializing summernote
                    });
                }
            };
            //Make Request
            xhttp.open("GET", "php_scripts/ajax_data.php?edit_store_form=" + id + "&timeuniq=" + timestamp, true);
            xhttp.send();
        }
    </script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
@endpush
