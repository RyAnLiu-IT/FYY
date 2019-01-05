<div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="number" id="pid" value="{{ $link_p_col->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('col_id') ? 'has-error' : ''}}">
    <label for="col_id" class="col-md-4 control-label">{{ 'Col Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="col_id" type="number" id="col_id" value="{{ $link_p_col->col_id or ''}}" required>
        {!! $errors->first('col_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
