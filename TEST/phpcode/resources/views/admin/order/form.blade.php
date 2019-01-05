<div class="form-group {{ $errors->has('uid') ? 'has-error' : ''}}">
    <label for="uid" class="col-md-4 control-label">{{ 'Uid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="uid" type="number" id="uid" value="{{ $order->uid or ''}}" required>
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="text" id="pid" value="{{ $order->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('aid') ? 'has-error' : ''}}">
    <label for="aid" class="col-md-4 control-label">{{ 'Aid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="aid" type="number" id="aid" value="{{ $order->aid or ''}}" required>
        {!! $errors->first('aid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
    <label for="qty" class="col-md-4 control-label">{{ 'Qty' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="qty" type="number" id="qty" value="{{ $order->qty or ''}}" required>
        {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promotional_code') ? 'has-error' : ''}}">
    <label for="promotional_code" class="col-md-4 control-label">{{ 'Promotional Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="promotional_code" type="text" id="promotional_code" value="{{ $order->promotional_code or ''}}" >
        {!! $errors->first('promotional_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('shipping_methods') ? 'has-error' : ''}}">
    <label for="shipping_methods" class="col-md-4 control-label">{{ 'Shipping Methods' }}</label>
    <div class="col-md-6">
        <select name="shipping_methods" class="form-control" id="shipping_methods" required>
    @foreach (json_decode('{"delivery":"Delivery","shop":"Shop Pickup"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($order->shipping_methods) && $order->shipping_methods == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('shipping_methods', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('delivery_time_1') ? 'has-error' : ''}}">
    <label for="delivery_time_1" class="col-md-4 control-label">{{ 'Delivery Time 1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="delivery_time_1" type="date" id="delivery_time_1" value="{{ $order->delivery_time_1 or ''}}" required>
        {!! $errors->first('delivery_time_1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('delivery_time_2') ? 'has-error' : ''}}">
    <label for="delivery_time_2" class="col-md-4 control-label">{{ 'Delivery Time 2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="delivery_time_2" type="date" id="delivery_time_2" value="{{ $order->delivery_time_2 or ''}}" required>
        {!! $errors->first('delivery_time_2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sid') ? 'has-error' : ''}}">
    <label for="sid" class="col-md-4 control-label">{{ 'Sid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sid" type="text" id="sid" value="{{ $order->sid or ''}}" >
        {!! $errors->first('sid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
