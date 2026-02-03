<form id="updateUserForm">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user->id }}">

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="uname" class="form-control"
               value="{{ $user->uname }}">
    </div>

    <div class="form-group">
        <label>Password (leave blank if unchanged)</label>
        <input type="text" name="pwd" value="{{ $user->pwd }}" class="form-control">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    {{-- <div class="form-group">
        <label>Network</label>
        <select name="status" class="form-control">
            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div> --}}

    <div class="text-right">
        <button type="submit" class="btn btn-purple" id="updateUserBtn">
            Update
        </button>
    </div>

    <div id="error_box" style="display:none" class="alert alert-danger mt-2">
        <div id="validation"></div>
    </div>
</form>
