@extends('admin.layout.master')

@push('plugin-styles')

@endpush

@push('plugin-scripts')

@endpush

@section('content')
<div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
				<div class="col-md-3">
						<div class="form-group">
							<label for="store">Select Store</label>
							<select id="store" onchange="store_coupons(this.value)" class="form-control multi-select select2">
								<option>Select Store</option>
								<option value="Select">No Store</option>
								<?php list_stores(); ?>
							</select>
						</div>
				</div>

                    <div class="col-sm-9">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Total Coupons On Your Website:<span class="label label-pink" id="t_users"><?php echo total_coupon(); ?></span></b></h4>
                            <h3 id="status_response"></h3>

                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sr</th>
									<th>About</th>
                                    <th>Offer</th>
                                    <th>Store</th>
                                    <th>Offer Details</th>
                                    <th>Feature</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="coupon_list">

                                </tbody>
                            </table>

							</div>
                    </div>
                </div>

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                </div>


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection