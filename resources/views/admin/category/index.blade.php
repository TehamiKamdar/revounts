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

        textarea.form-control{
            resize: vertical;
            height: 8rem !important;
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
                <div class="col-sm-12">

                    <form class="form-horizontal" role="form" id="editCat_form" name="editCat_form" method="post">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Choose Category</label>
                            <div class="col-md-10">
                                <select class="form-control select2" id="category" name="catid">
                                    <option>Select Category..</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name*</label>
                            <div class="col-md-10">
                                <input type="text" name="cat_name" class="form-control" value="">
                            </div>
                        </div>

                        {{-- Slug --}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">Slug*</label>
                            <div class="col-md-10">
                                <input type="text" name="cat_slug" class="form-control" value="">
                            </div>
                        </div>

                        {{-- Meta Title --}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">Meta Title</label>
                            <div class="col-md-10">
                                <input type="text" name="cat_title" class="form-control" value="">
                            </div>
                        </div>

                        {{-- Meta Description --}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">Meta Description</label>
                            <div class="col-md-10">
                                <input type="text" name="cat_meta_desc" class="form-control" value="">
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="cat_desc" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" id="save_btn" class="btn btn-purple">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('plugin-scripts')
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
@endpush
@push('custom-scripts')
<script>
$('#category').on('change', function () {
    let catId = $(this).val();

    if (!catId) {
        // clear form if no category selected
        $('input[name="cat_name"]').val('');
        $('input[name="cat_slug"]').val('');
        $('input[name="cat_title"]').val('');
        $('input[name="cat_meta_desc"]').val('');
        $('textarea[name="cat_desc"]').val('');
        return;
    }

    $.ajax({
        url: '/revounts_cms/category/' + catId,
        type: 'GET',
        success: function (res) {
            // populate fields
            $('input[name="cat_name"]').val(res.name);
            $('input[name="cat_slug"]').val(res.slug);
            $('input[name="cat_title"]').val(res.title);
            $('input[name="cat_meta_desc"]').val(res.meta_desc);
            $('textarea[name="cat_desc"]').val(res.description);
        },
        error: function () {
            alert('Failed to load category data');
        }
    });
});

$('#save_btn').on('click', function(){
    let btn = $(this);
    let form = $('#editCat_form');

    $.ajax({
        url: "/revounts_cms/category/update",
        method: "POST",
        data: form.serialize(),
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        beforeSend:function(){
            btn.prop('disabled', true)
               .html('<i class="fa fa-spinner fa-spin"></i> Updating...');
        },
        success: function(res){
            alert(res.message);
            btn.prop('disabled', false).html('Update');
        },
        error: function(){
            btn.prop('disabled', false).html('Update');

            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                Object.keys(errors).forEach(field => {
                    console.error(field + ': ' + errors[field][0]);
                });
            }
        }
    })
})
</script>
@endpush