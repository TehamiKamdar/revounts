@extends('admin.layout.master')

@push('plugin-styles')
    <link href="{{asset('assets/plugins/datatables/jquery.datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedheader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/datatables.colVis.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/datatables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedColumns.datatables.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />

    <!--Modal Css-->
    <link href="{{asset('assets/plugins/custombox/css/custombox.css')}}" rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
@endpush

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                {{-- <?php include('includes/brdcrmb_settings.php'); ?> --}}

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Total Stores On Your Website:<span class="label label-pink"
                                        id="t_users">{{ count($stores) }}</span></b></h4>
                            <h3 id="status_response"></h3>

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Slug</th>

                                        <th>Featured</th>
                                        <th>Image</th>
                                        <th>Short Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="update_table_category">
                                    @foreach ($stores as $key => $store)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $store->name }}</td>
                                            <td>{{ $store->url }}</td>
                                            <td>
                                                @if($store->featured == 1)

                                                    <span class="label label-table label-success">Featured</span>

                                                @else

                                                    <span class="label label-table label-inverse">Disabled</span>

                                                @endif
                                            </td>
                                            <td></td>
                                            <td style="word-wrap: normal;">{{ \Illuminate\Support\Str::limit($store->short_desc, 100 ) }}</td>
                                            <td>
                                                <form action="{{ route('revounts_cms.store-destroy', [$store->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-purple waves-effect waves-light">Delete</button>
                                                </form>
									        <a href="{{ route('revounts_cms.store-edit-form') }}" class="btn btn-primary waves-effect">Edit</button>	</td>
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


            </div>

        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{asset('assets/plugins/datatables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.fixedheader.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.keytable.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.colvis.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/datatables.fixedcolumns.min.js')}}"></script>
    <script src="{{asset('assets/pages/datatables.init.js')}}"></script>
    <script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>
    <script src="{{asset('assets/plugins/notifyjs/js/notify.js')}}"></script>
    <script src="{{asset('assets/plugins/notifications/notify-metro.js')}}"></script>

    <script src="{{asset('assets/js/ajax_request.js" type="text/javascript')}}"></script>

    <script src="{{asset('assets/plugins/custombox/js/custombox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/custombox/js/legacy.min.js')}}"></script>
@endpush

@push('custom-scripts')
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