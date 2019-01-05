<div class="form-group {{ $errors->has('uid') ? 'has-error' : ''}}">
    <label for="uid" class="col-md-4 control-label">{{ 'Uid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="uid" type="number" id="uid" value="{{ $address->uid or ''}}" required>
        {!! $errors->first('uid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    <label for="first_name" class="col-md-4 control-label">{{ 'First Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="first_name" type="text" id="first_name" value="{{ $address->first_name or ''}}" required>
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
    <label for="surname" class="col-md-4 control-label">{{ 'Surname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="surname" type="text" id="surname" value="{{ $address->surname or ''}}" required>
        {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="number" id="phone" value="{{ $address->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <select name="title" class="form-control" id="title" >
    @foreach (json_decode('{"mr":"Mr","miss":"Miss","ms":"Ms"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($address->title) && $address->title == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('street_address_1') ? 'has-error' : ''}}">
    <label for="street_address_1" class="col-md-4 control-label">{{ 'Street Address 1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="street_address_1" type="text" id="street_address_1" value="{{ $address->street_address_1 or ''}}" required>
        {!! $errors->first('street_address_1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('street_address_2') ? 'has-error' : ''}}">
    <label for="street_address_2" class="col-md-4 control-label">{{ 'Street Address 2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="street_address_2" type="text" id="street_address_2" value="{{ $address->street_address_2 or ''}}" >
        {!! $errors->first('street_address_2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="col-md-4 control-label">{{ 'City' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="city" type="text" id="city" value="{{ $address->city or ''}}" required>
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="col-md-4 control-label">{{ 'State' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="state" type="text" id="state" value="{{ $address->state or ''}}" >
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('zip_code') ? 'has-error' : ''}}">
    <label for="zip_code" class="col-md-4 control-label">{{ 'Zip Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="zip_code" type="text" id="zip_code" value="{{ $address->zip_code or ''}}" >
        {!! $errors->first('zip_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="col-md-4 control-label">{{ 'Country' }}</label>
    <div class="col-md-6">
        <select name="country" class="form-control" id="country" required>
    @foreach (json_decode('{"hk":"Hong Kong","mu":"Macau"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($address->country) && $address->country == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
