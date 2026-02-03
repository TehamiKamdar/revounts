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
@endpush

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                {{-- COL 3 : STORE SELECT --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Select Store</label>
                        <select id="store" class="form-control select2">
                            <option value="">Select Store</option>
                            <option value="Select">No Store</option>

                            @foreach($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- COL 9 : COUPONS --}}
                <div class="col-md-9">
                    <div class="card-box table-responsive">
                        <h4>
                            Total Coupons:
                            <span class="badge bg-success" id="t_users">{{ $totalCoupons }}</span>
                        </h4>

                        <table class="table table-bordered table-hover table-light">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>About</th>
                                    <th>Offer</th>
                                    <th>Store</th>
                                    <th>Details</th>
                                    <th>Feature</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="coupon_list"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
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
{{--
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script> --}}
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>

$('#store').select2({
    placeholder: "Select Store",
    allowClear: true,
    width: '100%'
});

    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
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
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
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
<script src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
@endpush

@push('custom-scripts')
<script>
$('#store').on('change', function () {
    let storeId = $(this).val();

    $('#coupon_list').html('<tr><td colspan="7">Loading...</td></tr>');

    $.get("{{ url('revounts_cms/coupons/by-store') }}/" + storeId, function (data) {

        let rows = '';
        let i = 1;

        if (data.length === 0) {
            rows = '<tr><td colspan="7">No coupons found</td></tr>';
        }

        data.forEach(coupon => {
            rows += `
                <tr>
                    <td>${i++}</td>
                    <td>${coupon.about ?? ''}</td>
                    <td>${coupon.offer ?? ''}</td>
                    <td>${coupon.store?.name ?? 'No Store'}</td>
                    <td>${coupon.details ?? ''}</td>
                    <td>
                        ${coupon.featured == 1
                            ? '<span class="label label-success">Enabled</span>'
                            : '<span class="label label-danger">Disabled</span>'}
                    </td>
                    <td>
                        <a href="/coupons/edit/${coupon.id}" class="btn btn-sm btn-primary">Edit</a>
                        <button type="button" data-id="${coupon.id}" class="btn btn-sm btn-danger deleteCouponBtn">Delete</button>
                    </td>
                </tr>`;
        });

        $('#coupon_list').html(rows);
        $('#t_users').text(data.length);
    });
});
$(document).on('click', '.deleteCouponBtn', function(e){
    e.preventDefault();

    let btn = $(this);
    let couponId = btn.data('id');

    $.ajax({
        url: '/revounts_cms/coupons/'+couponId,
        method: "POST",
        headers:{
            "X-CSRF-TOKEN" : "{{ csrf_token() }}"
        },
        beforeSend: function(){
            btn.attr('disabled', true);
            btn.html('<i class="fa fa-spinner fa-spin"></i> Deleting...');
        },
        success: function(){
            btn.closest('tr').fadeOut(300, function () {
                // 🔽 update counter after row removed
                let total = parseInt($('#t_users').text());
                $('#t_users').text(total - 1);
            });
        },
        error: function(){
            btn.prop('disabled', false);
            btn.text('Delete');
        }
    })
})
</script>

@endpush