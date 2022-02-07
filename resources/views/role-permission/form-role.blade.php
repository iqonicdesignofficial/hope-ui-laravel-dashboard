{{ Form::open(['url' => '#','method' => 'post']) }}
    <div class="form-group">
        <label class="form-label">role title</label>
        {{ Form::text('title', old('title'), ['class' => 'form-control','id' => 'role-title', 'placeholder' => 'Role Title', 'required']) }}
    </div>
    <label class="form-label">Status</label>
    <div class="form-check">
        {{ Form::radio('status', '1',old('status'), ['class' => 'form-check-input', 'id' => 'roleassigned']); }}
        <label class="form-check-label" for="roleassigned">yes</label>
    </div>
    <div class="mb-3 form-check">
        {{ Form::radio('status', '0',old('status'), ['class' => 'form-check-input', 'id' => 'rolenotassigned']); }}
        <label class="form-check-label" for="rolenotassigned">no</label>
    </div>
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
{{ Form::close() }}