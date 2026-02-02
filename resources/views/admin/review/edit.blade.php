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

            <!-- Page-Title -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Edit Review</b></h4>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="{{ route('revounts_cms.update-review') }}" method="POST" role="form" enctype="multipart/form-data" id="reviewform"  name="review_form">
                                    @csrf
                                    <input type="hidden" name="review_id" value="{{ $review->id }}">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Product Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="{{ $review->product }}" name="r_product">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Select Store</label>
                                        <div class="col-md-10">
                                            <select class="form-control multi-select select2" id="store" name="r_store">
                                                <option>Select</option>

                                                @foreach ($stores as $store)
                                                    <option value="{{ $store->id }}"
                                                        {{ $review->store_id == $store->id ? 'selected' : '' }}>
                                                        {{ $store->name }}
                                                    </option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Slug</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="{{ $review->slug }}" name="r_slug" oncontextmenu="return false;" onkeyup="nametourl();" id="slugText" readonly/>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Short Description</label>
                                        <div class="col-md-10">

                                                <textarea type="text" id="sum" class="summernote" name="r_short_description" >{!! $review->short_desc !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Review</label>
                                        <div class="col-md-10">
                                            <textarea type="text" class="summernote" name="r_description" >{!! $review->long_desc !!}</textarea>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="filestyle" name="r_image" data-iconname="fa fa-cloud-upload">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Image Alt</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="img_alt" value="{{ $review->img_alt }}">
                                        </div>
                                    </div>


                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="r_meta_title" value="{{ $review->meta_title }}">
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="r_meta_desc" value="{{ $review->meta_desc }}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Date</label>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" name="date" value="{{ $review->date }}">
                                        </div>
                                    </div>



                                    <hr>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Featured Check</label>
                                        <div class="col-md-10">
                                            <input type="checkbox"
                                                name="r_feature"
                                                value="1"
                                                {{ $review->featured == 1 ? 'checked' : '' }}
                                                data-plugin="switchery"
                                                data-color="#81c868">
                                            <input type="hidden" name="r_feature" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Product Check</label>
                                        <div class="col-md-10">
                                            <input type="checkbox"
                                                name="product_review"
                                                value="1"
                                                {{ $review->product_review == 1 ? 'checked' : '' }}
                                                data-plugin="switchery"
                                                data-color="#81c868">
                                            <input type="hidden" name="product_review" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Editor Choice</label>
                                        <div class="col-md-10">
                                            <input type="checkbox"
                                                name="editor_choice"
                                                value="1"
                                                {{ $review->editor_choice == 1 ? 'checked' : '' }}
                                                data-plugin="switchery"
                                                data-color="#81c868">
                                            <input type="hidden" name="editor_choice" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Draft</label>
                                        <div class="col-md-10">
                                            <input type="checkbox" name="is_draft" id="is_draft"  value="1"  data-plugin="switchery"  data-color="#81c868">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Update Review</label>
                                        <div class="col-md-10">
                                            <button type="submit" id="save_btn" class="btn btn-purple waves-effect waves-light">Submit</button>
                                            <img src="images/spinner.gif" style="no-repeat center center;width:32px;height:32px; display:none;" id="loader">
                                        </div>
                                    </div>

                                    <p id="response"></p>

                                </form>
                            </div>
                            <div id="custom-modal" class="modal-demo">
                            </div>


                <a href="#custom-modal"  id="review_response" data-animation="door" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"></a>
                        <!--	<div class="col-md-6">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Readonly</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Disabled</label>
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
                                            <h6>Multiple select</h6>
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
@endsection

@push('plugin-scripts')
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>




		<!-- Modal-Effect -->
        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<script src="assets/plugins/summernote/summernote.min.js"></script>
		 <script type="text/javascript" src="assets/js/imagealt.js"></script>
		 <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
					fontNames: ['Century Gothic', 'Verdana', 'Arial', 'Arial Black', 'Roboto','Montserrat','Lato','Helvetica','Droid Sans','Noto Sans','Fira Sans'],
					 imageTitle: {
          specificAltField: true,
        },
        lang: 'en',
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageTitle','imageAlt']],
            ],
        },
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,
					dialogsFade: true	// set focus to editable area after initializing summernote
                });

                $('.inline-editor').summernote({
                    airMode: true
                });

            });


        </script>
        <script>

			function nametourl()
			{
				var text=document.getElementById("slugText").value;

				var url=ToSeoUrl(text);

				document.getElementById("slugText").value=url;


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