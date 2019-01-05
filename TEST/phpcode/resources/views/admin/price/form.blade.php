<div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="number" id="pid" value="{{ $price->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-4 control-label">{{ 'Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="price" type="number" step="any" id="price" value="{{ $price->price or ''}}" required>
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('special') ? 'has-error' : ''}}">
    <label for="special" class="col-md-4 control-label">{{ 'Special' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="special" type="number" step="any" id="special" value="{{ $price->special or ''}}" >
        {!! $errors->first('special', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
