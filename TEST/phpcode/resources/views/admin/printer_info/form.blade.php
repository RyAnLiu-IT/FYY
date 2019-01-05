<div class="form-group {{ $errors->has('pid') ? 'has-error' : ''}}">
    <label for="pid" class="col-md-4 control-label">{{ 'Pid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="pid" type="number" id="pid" value="{{ $printer_info->pid or ''}}" required>
        {!! $errors->first('pid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tid') ? 'has-error' : ''}}">
    <label for="tid" class="col-md-4 control-label">{{ 'Tid' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tid" type="number" id="tid" value="{{ $printer_info->tid or ''}}" required>
        {!! $errors->first('tid', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('screen_display') ? 'has-error' : ''}}">
    <label for="screen_display" class="col-md-4 control-label">{{ 'Screen Display' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="screen_display" type="radio" value="1" {{ (isset($printer_info) && 1 == $printer_info->screen_display) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="screen_display" type="radio" value="0" @if (isset($printer_info)) {{ (0 == $printer_info->screen_display) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('screen_display', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('auto_duplex_printing') ? 'has-error' : ''}}">
    <label for="auto_duplex_printing" class="col-md-4 control-label">{{ 'Auto Duplex Printing' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="auto_duplex_printing" type="radio" value="1" {{ (isset($printer_info) && 1 == $printer_info->auto_duplex_printing) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="auto_duplex_printing" type="radio" value="0" @if (isset($printer_info)) {{ (0 == $printer_info->auto_duplex_printing) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('auto_duplex_printing', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('print_resolution_length') ? 'has-error' : ''}}">
    <label for="print_resolution_length" class="col-md-4 control-label">{{ 'Print Resolution Length' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="print_resolution_length" type="number" id="print_resolution_length" value="{{ $printer_info->print_resolution_length or ''}}" required>
        {!! $errors->first('print_resolution_length', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('print_resolution_width') ? 'has-error' : ''}}">
    <label for="print_resolution_width" class="col-md-4 control-label">{{ 'Print Resolution Width' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="print_resolution_width" type="number" id="print_resolution_width" value="{{ $printer_info->print_resolution_width or ''}}" required>
        {!! $errors->first('print_resolution_width', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('max_number_of_copies') ? 'has-error' : ''}}">
    <label for="max_number_of_copies" class="col-md-4 control-label">{{ 'Max Number Of Copies' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="max_number_of_copies" type="number" id="max_number_of_copies" value="{{ $printer_info->max_number_of_copies or ''}}" required>
        {!! $errors->first('max_number_of_copies', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('scanning_speed_sec') ? 'has-error' : ''}}">
    <label for="scanning_speed_sec" class="col-md-4 control-label">{{ 'Scanning Speed Sec' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="scanning_speed_sec" type="number" id="scanning_speed_sec" value="{{ $printer_info->scanning_speed_sec or ''}}" required>
        {!! $errors->first('scanning_speed_sec', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('scan_resolution_dpi') ? 'has-error' : ''}}">
    <label for="scan_resolution_dpi" class="col-md-4 control-label">{{ 'Scan Resolution Dpi' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="scan_resolution_dpi" type="number" id="scan_resolution_dpi" value="{{ $printer_info->scan_resolution_dpi or ''}}" required>
        {!! $errors->first('scan_resolution_dpi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('main_feature') ? 'has-error' : ''}}">
    <label for="main_feature" class="col-md-4 control-label">{{ 'Main Feature' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="main_feature" type="text" id="main_feature" value="{{ $printer_info->main_feature or ''}}" required>
        {!! $errors->first('main_feature', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
