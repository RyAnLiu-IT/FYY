<div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="number" id="pid" value="{{ $laptop_info->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tid') ? 'has-error' : ''}}">
    <label for="tid" class="col-md-4 control-label">{{ 'Tid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tid" type="number" id="tid" value="{{ $laptop_info->tid or ''}}" required>
        {!! $errors->first('tid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('processor') ? 'has-error' : ''}}">
    <label for="processor" class="col-md-4 control-label">{{ 'Processor' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="processor" type="text" id="processor" value="{{ $laptop_info->processor or ''}}" required>
        {!! $errors->first('processor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('operating_system') ? 'has-error' : ''}}">
    <label for="operating_system" class="col-md-4 control-label">{{ 'Operating System' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="operating_system" type="text" id="operating_system" value="{{ $laptop_info->operating_system or ''}}" required>
        {!! $errors->first('operating_system', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('memory') ? 'has-error' : ''}}">
    <label for="memory" class="col-md-4 control-label">{{ 'Memory' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="memory" type="text" id="memory" value="{{ $laptop_info->memory or ''}}" required>
        {!! $errors->first('memory', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('storage') ? 'has-error' : ''}}">
    <label for="storage" class="col-md-4 control-label">{{ 'Storage' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="storage" type="text" id="storage" value="{{ $laptop_info->storage or ''}}" required>
        {!! $errors->first('storage', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('display_resolution_width') ? 'has-error' : ''}}">
    <label for="display_resolution_width" class="col-md-4 control-label">{{ 'Display Resolution Width' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="display_resolution_width" type="number" id="display_resolution_width" value="{{ $laptop_info->display_resolution_width or ''}}" >
        {!! $errors->first('display_resolution_width', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('display_resolution_length') ? 'has-error' : ''}}">
    <label for="display_resolution_length" class="col-md-4 control-label">{{ 'Display Resolution Length' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="display_resolution_length" type="number" id="display_resolution_length" value="{{ $laptop_info->display_resolution_length or ''}}" >
        {!! $errors->first('display_resolution_length', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
