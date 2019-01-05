@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Printer_info {{ $printer_info->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/printer_info') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/printer_info/' . $printer_info->id . '/edit') }}" title="Edit Printer_info"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/printer_info' . '/' . $printer_info->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Printer_info" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $printer_info->id }}</td>
                                    </tr>
                                    <tr><th> Pid </th><td> {{ $printer_info->pid }} </td></tr><tr><th> Tid </th><td> {{ $printer_info->tid }} </td></tr><tr><th> Screen Display </th><td> {{ $printer_info->screen_display }} </td></tr>
                                    <tr><th> Auto Duplex Printing </th><td> {{ $printer_info->auto_duplex_printing }} </td></tr><tr><th> Print Resolution Length </th><td> {{ $printer_info->print_resolution_length }} </td></tr><tr><th> Print Resolution Width </th><td> {{ $printer_info->print_resolution_width }} </td></tr>
                                    <tr><th> Max Number Of Copies </th><td> {{ $printer_info->max_number_of_copies }} </td></tr><tr><th> Scanning Speed Sec </th><td> {{ $printer_info->scanning_speed_sec }} </td></tr><tr><th> Scan Resolution Dpi </th><td> {{ $printer_info->scan_resolution_dpi }} </td></tr>
                                    <tr><th> Main Feature </th><td> {{ $printer_info->main_feature }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
