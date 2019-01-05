<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $political_area->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mgid') ? 'has-error' : ''}}">
    <label for="mgid" class="col-md-4 control-label">{{ 'Mgid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mgid" type="number" id="mgid" value="{{ $political_area->mgid or ''}}" required>
        {!! $errors->first('mgid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
