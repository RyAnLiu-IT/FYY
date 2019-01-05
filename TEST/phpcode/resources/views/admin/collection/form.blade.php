<div class="form-group {{ $errors->has('uid') ? 'has-error' : ''}}">
    <label for="uid" class="col-md-4 control-label">{{ 'Uid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="uid" type="number" id="uid" value="{{ $collection->uid or ''}}" required>
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="text" id="pid" value="{{ $collection->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="col-md-4 control-label">{{ 'Note' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="note" type="text" id="note" value="{{ $collection->note or ''}}" >
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
