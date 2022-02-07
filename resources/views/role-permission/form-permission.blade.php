{{ Form::open(['url' => '#','method' => 'post']) }}
    <div class="form-group">
        <label class="form-label">permission title</label>
        {{ Form::text('title', old('title'), ['class' => 'form-control','id' => 'permission-title', 'placeholder' => 'Permission Title', 'required']) }}
    </div>
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
{{ Form::close() }}