<div class="form-group {{ $errors->has('broadway_code') ? 'has-error' : ''}}">
    <label for="broadway_code" class="col-md-4 control-label">{{ 'Broadway Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="broadway_code" type="text" id="broadway_code" value="{{ $product->broadway_code or ''}}" required>
        {!! $errors->first('broadway_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bid') ? 'has-error' : ''}}">
    <label for="bid" class="col-md-4 control-label">{{ 'Bid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="bid" type="number" id="bid" value="{{ $product->bid or ''}}" required>
        {!! $errors->first('bid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tid') ? 'has-error' : ''}}">
    <label for="tid" class="col-md-4 control-label">{{ 'Tid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tid" type="number" id="tid" value="{{ $product->tid or ''}}" required>
        {!! $errors->first('tid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $product->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('model') ? 'has-error' : ''}}">
    <label for="model" class="col-md-4 control-label">{{ 'Model' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="model" type="text" id="model" value="{{ $product->model or ''}}" required>
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dimensions_W_mm') ? 'has-error' : ''}}">
    <label for="dimensions_W_mm" class="col-md-4 control-label">{{ 'Dimensions W Mm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dimensions_W_mm" type="number" id="dimensions_W_mm" value="{{ $product->dimensions_W_mm or ''}}" >
        {!! $errors->first('dimensions_W_mm', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dimensions_H_mm') ? 'has-error' : ''}}">
    <label for="dimensions_H_mm" class="col-md-4 control-label">{{ 'Dimensions H Mm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dimensions_H_mm" type="number" id="dimensions_H_mm" value="{{ $product->dimensions_H_mm or ''}}" >
        {!! $errors->first('dimensions_H_mm', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dimensions_D_mm') ? 'has-error' : ''}}">
    <label for="dimensions_D_mm" class="col-md-4 control-label">{{ 'Dimensions D Mm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dimensions_D_mm" type="number" id="dimensions_D_mm" value="{{ $product->dimensions_D_mm or ''}}" >
        {!! $errors->first('dimensions_D_mm', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('net_weight') ? 'has-error' : ''}}">
    <label for="net_weight" class="col-md-4 control-label">{{ 'Net Weight' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="net_weight" type="number" step="any" id="net_weight" value="{{ $product->net_weight or ''}}" required>
        {!! $errors->first('net_weight', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="description" type="text" id="description" value="{{ $product->description or ''}}" >
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('keywords') ? 'has-error' : ''}}">
    <label for="keywords" class="col-md-4 control-label">{{ 'Keywords' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="keywords" type="text" id="keywords" value="{{ $product->keywords or ''}}" >
        {!! $errors->first('keywords', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('place_of_origin') ? 'has-error' : ''}}">
    <label for="place_of_origin" class="col-md-4 control-label">{{ 'Place Of Origin' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="place_of_origin" type="text" id="place_of_origin" value="{{ $product->place_of_origin or ''}}" required>
        {!! $errors->first('place_of_origin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sales_territory') ? 'has-error' : ''}}">
    <label for="sales_territory" class="col-md-4 control-label">{{ 'Sales Territory' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sales_territory" type="text" id="sales_territory" value="{{ $product->sales_territory or ''}}" required>
        {!! $errors->first('sales_territory', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('warranty_m') ? 'has-error' : ''}}">
    <label for="warranty_m" class="col-md-4 control-label">{{ 'Warranty M' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="warranty_m" type="number" id="warranty_m" value="{{ $product->warranty_m or ''}}" >
        {!! $errors->first('warranty_m', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('special_feature') ? 'has-error' : ''}}">
    <label for="special_feature" class="col-md-4 control-label">{{ 'Special Feature' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="special_feature" type="text" id="special_feature" value="{{ $product->special_feature or ''}}" >
        {!! $errors->first('special_feature', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('special_feature2') ? 'has-error' : ''}}">
    <label for="special_feature2" class="col-md-4 control-label">{{ 'Special Feature2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="special_feature2" type="text" id="special_feature2" value="{{ $product->special_feature2 or ''}}" >
        {!! $errors->first('special_feature2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('accessory') ? 'has-error' : ''}}">
    <label for="accessory" class="col-md-4 control-label">{{ 'Accessory' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="accessory" type="text" id="accessory" value="{{ $product->accessory or ''}}" >
        {!! $errors->first('accessory', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
