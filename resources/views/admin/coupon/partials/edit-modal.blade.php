<form id="updateCouponForm" class="form-horizontal">
    @csrf
    <input type="hidden" name="coupon_id" value="{{ $coupon->id }}">

    {{-- BODY --}}
    <div class="row">

        {{-- Offer --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Offer</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="update_offer" value="{{ $coupon->name }}">
                </div>
            </div>
        </div>

        {{-- Offer Details --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Offer Details</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="update_offer_details" value="{{ $coupon->offer }}">
                </div>
            </div>
        </div>

        {{-- Store --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Select Store</label>
                <div class="col-sm-9">
                    <select name="store" class="form-control">
                        @foreach($stores as $store)
                            <option value="{{ $store->id }}" {{ $coupon->store == $store->id ? 'selected' : '' }}>
                                {{ $store->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{-- Category --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Select Category</label>
                <div class="col-sm-9">
                    <select name="category" class="form-control">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $coupon->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{-- Image --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Image URL</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="coupon_image_update" value="{{ $coupon->img }}">
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="update_offer_desc">{{ $coupon->offer_desc }}</textarea>
                </div>
            </div>
        </div>

        {{-- Tracking URL --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Tracking URL</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="update_tracking_url" value="{{ $coupon->tracking_url }}">
                </div>
            </div>
        </div>

        {{-- Expiry --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Expiry</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="update_expiry_date" value="{{ $coupon->expdate }}">
                </div>
            </div>
        </div>

        {{-- Code Toggle --}}
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <label class="control-label col-sm-3">Coupon Type</label>
                <div class="col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="update_code_type" value="false" {{ $coupon->chk_active == 'false' ? 'checked' : '' }}> Code
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="update_code_type" value="true" {{ $coupon->chk_active == 'true' ? 'checked' : '' }}> Active
                    </label>
                </div>
            </div>
        </div>

        {{-- Enter Code (Initially hidden) --}}
        <div class="col-sm-12 col-md-12" id="couponCodeRow" style="{{ $coupon->chk_active == 'false' ? '' : 'display:none;' }}">
            <div class="form-group">
                <label class="control-label col-sm-3">Enter Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="update_code" value="{{ $coupon->coupon_code }}">
                </div>
            </div>
        </div>

        {{-- Coupon Code --}}
        @if($coupon->chk_active == 'false')
            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                    <label class="control-label col-sm-3">Coupon Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="update_code" value="{{ $coupon->coupon_code }}">
                    </div>
                </div>
            </div>
        @endif

        {{-- Checkboxes --}}
        @php
            $checks = [
                'featured' => 'Featured For Home',
                'popular' => 'Popular',
                'store_feature' => 'Store Feature',
                'exp_chk' => 'Expired'
            ];
        @endphp

        @foreach($checks as $field => $label)
            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                    <label class="control-label col-sm-3">{{ $label }}</label>
                    <div class="col-sm-9">
                        <input type="checkbox" name="{{ $field }}" value="1" {{ $coupon->$field ? 'checked' : '' }}>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{-- FOOTER --}}
    <div class="form-group">
        <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-info" onclick="updateCoupon()">Save Changes</button>
        </div>
    </div>

</form>
