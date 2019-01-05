@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Laptop_info {{ $laptop_info->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/laptop_info') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/laptop_info/' . $laptop_info->id . '/edit') }}" title="Edit Laptop_info"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/laptop_info' . '/' . $laptop_info->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Laptop_info" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $laptop_info->id }}</td>
                                    </tr>
                                    <tr><th> Pid </th><td> {{ $laptop_info->pid }} </td></tr><tr><th> Tid </th><td> {{ $laptop_info->tid }} </td></tr><tr><th> Processor </th><td> {{ $laptop_info->processor }} </td></tr>
                                    <tr><th> Operating System </th><td> {{ $laptop_info->operating_system }} </td></tr><tr><th> Memory </th><td> {{ $laptop_info->memory }} </td></tr><tr><th> Storage </th><td> {{ $laptop_info->storage }} </td></tr>
                                    <tr><th> Display Resolution Width </th><td> {{ $laptop_info->display_resolution_width }} </td></tr><tr><th> Display Resolution Length </th><td> {{ $laptop_info->display_resolution_length }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
