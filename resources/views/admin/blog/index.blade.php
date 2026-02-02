@extends('admin.layout.master')

@push('plugin-styles')
    <link href="{{asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/switchery/css/switchery.min.css"')}} rel=" stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custombox/css/custombox.cs')}}s" rel="stylesheet" type="text/css">
@endpush
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Total Post On Your Website:<span class="label label-pink"
                                        id="t_users">{{ count($blogs) }}</span></b></h4>
                            <h3 id="status_response"></h3>

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Short Description</th>
                                        <th>Trending</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $key => $blog)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>{{ $blog->name }}</td>

                                            <td>{{ Str::limit($blog->short_des, 50) }}</td>

                                            <td>
                                                @if($blog->featured == 1)
                                                    <span class="badge bg-success text-white">Enabled</span>
                                                @else
                                                    <span class="badge bg-danger text-white">Disabled</span>
                                                @endif
                                            </td>

                                            <td>
                                                {{-- <img src="{{ asset('images/blog/' . $blog->image) }}" width="50" height="50"
                                                    alt="{{ $blog->name }}"> --}}
                                            </td>

                                            <td>
                                                <button type="button" data-id="{{ $blog->id }}" class="btn btn-danger waves-effect waves-light delete-blog">
                                                    Delete
                                                </button>

                                                <a href="{{ route('revounts_cms.blog-edit', $blog->id) }}" class="btn btn-primary waves-effect">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                </div><!-- /.modal -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
@push('custom-scripts')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.delete-blog').on('click', function () {

                let blogId = $(this).data('id');

                if (!confirm('Are you sure you want to delete this blog?')) {
                    return;
                }

                $.ajax({
                    url: '/revounts_cms/blogs/' + blogId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert('Blog deleted successfully');
                        location.reload();
                    },
                    error: function () {
                        alert('Something went wrong!');
                    }
                });
            });

        });
    </script>

@endpush

@push('plugin-scripts')

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.colVis.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>
    <script src="{{asset('assets/pages/datatables.init.js')}}"></script>
    <script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>
    <script src="{{asset('assets/plugins/notifyjs/js/notify.js')}}"></script>
    <script src="{{asset('assets/plugins/notifications/notify-metro.js')}}"></script>
    <script src="{{asset('assets/js/ajax_request.js" type="text/javascript')}}"></script>
    <script src="{{asset('assets/plugins/custombox/js/custombox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/custombox/js/legacy.min.js')}}"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({ keys: true });
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "assets/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({ fixedHeader: true });
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
        </script>
@endpush