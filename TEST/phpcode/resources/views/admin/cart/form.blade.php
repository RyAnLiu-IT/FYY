<div class="form-group {{ $errors->has('uid') ? 'has-error' : ''}}">
    <label for="uid" class="col-md-4 control-label">{{ 'Uid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="uid" type="number" id="uid" value="{{ $cart->uid or ''}}" required>
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="text" id="pid" value="{{ $cart->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
    <label for="qty" class="col-md-4 control-label">{{ 'Qty' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="qty" type="number" id="qty" value="{{ $cart->qty or ''}}" required>
        {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promotional_code') ? 'has-error' : ''}}">
    <label for="promotional_code" class="col-md-4 control-label">{{ 'Promotional Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="promotional_code" type="text" id="promotional_code" value="{{ $cart->promotional_code or ''}}" >
        {!! $errors->first('promotional_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
