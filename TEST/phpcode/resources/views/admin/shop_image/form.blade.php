<div class="form-group {{ $errors->has('sid') ? 'has-error' : ''}}">
    <label for="sid" class="col-md-4 control-label">{{ 'Sid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sid" type="number" id="sid" value="{{ $shop_image->sid or ''}}" >
        {!! $errors->first('sid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-md-4 control-label">{{ 'Image' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="image" type="file" id="image" value="{{ $shop_image->image or ''}}" >
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
