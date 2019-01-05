<div class="form-group {{ $errors->has('shop_address') ? 'has-error' : ''}}">
    <label for="shop_address" class="col-md-4 control-label">{{ 'Shop Address' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="shop_address" type="text" id="shop_address" value="{{ $shop_address->shop_address or ''}}" required>
        {!! $errors->first('shop_address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="number" id="phone" value="{{ $shop_address->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('business_hours') ? 'has-error' : ''}}">
    <label for="business_hours" class="col-md-4 control-label">{{ 'Business Hours' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="business_hours" type="text" id="business_hours" value="{{ $shop_address->business_hours or ''}}" >
        {!! $errors->first('business_hours', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mtr_station') ? 'has-error' : ''}}">
    <label for="mtr_station" class="col-md-4 control-label">{{ 'Mtr Station' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mtr_station" type="text" id="mtr_station" value="{{ $shop_address->mtr_station or ''}}" required>
        {!! $errors->first('mtr_station', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paid') ? 'has-error' : ''}}">
    <label for="paid" class="col-md-4 control-label">{{ 'Paid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="paid" type="number" id="paid" value="{{ $shop_address->paid or ''}}" required>
        {!! $errors->first('paid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
