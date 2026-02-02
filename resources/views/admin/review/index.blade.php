@extends('admin.layout.master')

@section('content')
<div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h3 id="status_response"></h3>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
									<th>Sr</th>
                                    <th>Store</th>
                                    <th>Heading</th>
                                    <th>Published On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="update_table_blog">
                                    @foreach ($reviews as $key => $review)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $review->storeRelation->name ?? '' }}</td>
                                            <td>{{ $review->product }}</td>
                                            <td>{{ $review->date }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" onclick="deleteReview({{ $review->id }})">
                                                    Delete
                                                </button>
                                                <a href="{{ route('revounts_cms.review-edit', $review->id) }}"
                                                class="btn btn-primary">
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


<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
</div><!-- /.modal -->



            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection

@push('custom-scripts')
<script>
    function deleteReview(id) {
        if(!confirm('Are you sure?')) return;

        fetch(`/revounts_cms/reviews/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if(data.success){
                alert(data.message);
                location.reload(); // or remove row dynamically
            } else {
                alert('Failed to delete!');
            }
        });
    }
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