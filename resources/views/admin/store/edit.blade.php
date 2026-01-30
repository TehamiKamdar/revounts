@extends('admin.layout.master')

@push('plugin-styles')
    <link href="{{asset('assets/plugins/summernote/summernote.css')}}" />
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" />
    <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" />

@endpush

@push('plugin-scripts')
    <script src="{{asset('assets/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets/plugins/autocomplete/jquery.mockjax.js')}}"></script>
    <script src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
    <script src="{{asset('assets/plugins/autocomplete/countries.js')}}"></script>
    <script src="{{asset('assets/pages/autocomplete.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.form-advanced.init.js')}}"></script>
    <script src="{{asset('assets/plugins/custombox/js/custombox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/custombox/js/legacy.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/ajax_request.js')}}"></script>
    <script>
        function loadEditStore(id) {
            if (!id) return;

            fetch(`/revounts_cms/store/${id}/edit`)
                .then(res => res.text())
                .then(html => {
                    document.getElementById('custom-modal').innerHTML = html;
                });
        }
        $('.summernote').summernote({
            height: 250,
            placeholder: 'Write content here...',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ],
            disableDragAndDrop: true
        });
    </script>
    <script>
        function updateStore() {
            var form = document.getElementById('store_edit_form');
            var data = new FormData(form);

            // Loader / status
            var status = document.getElementById('status');
            status.innerHTML = "Saving, please wait...";

            fetch("{{ route('revounts_cms.store-update') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: data
            })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        status.innerHTML = '<span style="color:green">Store updated successfully!</span>';
                    } else {
                        status.innerHTML = '<span style="color:red">' + res.message + '</span>';
                    }
                })
                .catch(err => {
                    status.innerHTML = '<span style="color:red">An error occurred</span>';
                    console.error(err);
                });
        }
    </script>
@endpush

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->


                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" onchange="loadEditStore(this.value)">
                            <option value="">Select Store</option>
                            @foreach($stores as $store)
                                <option value="{{ $store->id }}">
                                    {{ $store->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Edit Store</b></h4>
                            <div class="row" id="edit_store_response">
                                <div class="col-md-12 text-center">
                                    <h2>Please Select A Store</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="custom-modal" class="modal-demo">
            </div>


            <a href="#custom-modal" id="store_edit_response" data-animation="door" data-plugin="custommodal"
                data-overlaySpeed="100" data-overlayColor="#36404a"></a>

        </div> <!-- content -->

    </div>
@endsection