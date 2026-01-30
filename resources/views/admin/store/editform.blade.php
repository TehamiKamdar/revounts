<form class="form-horizontal" method="POST" enctype="multipart/form-data" id="store_edit_form">

    @csrf

    <input type="hidden" name="store_id" value="{{ $store->id }}">
    <input type="hidden" name="username" value="admin">

    {{-- Store Name --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Store Name *</label>
        <div class="col-md-10">
            <input type="text" name="store_name" id="s_name" class="form-control" value="{{ $store->name }}">
        </div>
    </div>

    {{-- Store URL --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Store Url *</label>
        <div class="col-md-10">
            <input type="text" name="store_url" id="s_slug" class="form-control" value="{{ $store->store_url }}" readonly>
        </div>
    </div>

    {{-- Heading --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Heading *</label>
        <div class="col-md-10">
            <input type="text" name="heading" class="form-control" value="{{ $store->heading }}">
        </div>
    </div>

    {{-- Category --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Choose Category</label>
        <div class="col-md-10">
            <select class="form-control" name="category_store[]">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ in_array($cat->id, explode(',', $store->Category)) ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Season --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Choose Season</label>
        <div class="col-md-10">
            {{-- <select class="form-control select2"
                    name="season_store[]" multiple>
                @foreach($seasons as $season)
                    <option value="{{ $season->id }}"
                        {{ in_array($season->id, explode(',', $store->season)) ? 'selected' : '' }}>
                        {{ $season->name }}
                    </option>
                @endforeach
            </select> --}}
        </div>
    </div>

    {{-- Short Description --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Short Description</label>
        <div class="col-md-10">
            <textarea class="summernote" name="store_short_description">
                {{ $store->short_desc }}
            </textarea>
        </div>
    </div>

    {{-- Long Description --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Long Description</label>
        <div class="col-md-10">
            <textarea class="summernote" name="store_long_description">
                {{ $store->long_desc }}
            </textarea>
        </div>
    </div>

    {{-- Image --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Image</label>
        <div class="col-md-10">
            <input type="file" name="store_image_update" class="form-control">
        </div>
    </div>

    {{-- Image Alt --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Image Alt</label>
        <div class="col-md-10">
            <input type="text" name="image_alt"
                   class="form-control"
                   value="{{ $store->img_alt }}">
        </div>
    </div>

    {{-- Banner Image --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Banner Image</label>
        <div class="col-md-10">
            <input type="text" name="banner_image"
                   class="form-control"
                   value="{{ $store->banner_img }}">
        </div>
    </div>

    {{-- Direct URL --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Direct URL</label>
        <div class="col-md-10">
            <input type="url" name="direct_url"
                   class="form-control"
                   value="{{ $store->direct_url }}">
        </div>
    </div>

    {{-- Tracking URL --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Tracking URL</label>
        <div class="col-md-10">
            <input type="url" name="store_tracking_url"
                   class="form-control"
                   value="{{ $store->tracking_url }}">
        </div>
    </div>

    {{-- Meta --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Meta Title</label>
        <div class="col-md-10">
            <input type="text" name="meta_title"
                   class="form-control"
                   value="{{ $store->meta }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 control-label">Meta Description</label>
        <div class="col-md-10">
            <input type="text" name="meta_desc"
                   class="form-control"
                   value="{{ $store->meta_des }}">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 control-label">AMP Meta Description</label>
        <div class="col-md-10">
            <input type="text" name="meta_desc_amp"
                   class="form-control"
                   value="{{ $store->amp_meta_desc }}">
        </div>
    </div>

    <hr>
    <center><strong>Helpful Links</strong></center>

    @php
        $links = [
            'facebook','pinterest','twitter','instagram',
            'youtube','google_plus','android','ios'
        ];
    @endphp

    @foreach($links as $link)
        <div class="form-group row">
            <label class="col-md-2 control-label">{{ ucfirst(str_replace('_',' ', $link)) }}</label>
            <div class="col-md-10">
                <input type="url"
                       name="{{ $link }}"
                       class="form-control"
                       value="{{ $store->$link ?? '' }}">
            </div>
        </div>
    @endforeach

    {{-- Switches --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Top Store</label>
        <div class="col-md-10">
            <input type="checkbox" name="top" value="1"
                   {{ $store->top ? 'checked' : '' }}>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 control-label">Exclude Title Date</label>
        <div class="col-md-10">
            <input type="checkbox" name="meta_date" value="1"
                   {{ $store->meta_date ? 'checked' : '' }}>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 control-label">For Sitemap</label>
        <div class="col-md-10">
            <input type="checkbox" name="for_sitemap" value="1"
                   {{ $store->for_sitemap ? 'checked' : '' }}>
        </div>
    </div>

    {{-- Submit --}}
    <div class="form-group row">
        <label class="col-md-2 control-label">Save Store</label>
        <div class="col-md-10">
            <button type="button" onclick="updateStore()" class="btn btn-primary">
                Save
            </button>
            <span id="status"></span>
        </div>
    </div>

</form>
