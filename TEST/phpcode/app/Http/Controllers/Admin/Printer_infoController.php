<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Printer_info;
use Illuminate\Http\Request;

class Printer_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $printer_info = Printer_info::where('pid', 'LIKE', "%$keyword%")
                ->orWhere('tid', 'LIKE', "%$keyword%")
                ->orWhere('screen_display', 'LIKE', "%$keyword%")
                ->orWhere('auto_duplex_printing', 'LIKE', "%$keyword%")
                ->orWhere('print_resolution_length', 'LIKE', "%$keyword%")
                ->orWhere('print_resolution_width', 'LIKE', "%$keyword%")
                ->orWhere('max_number_of_copies', 'LIKE', "%$keyword%")
                ->orWhere('scanning_speed_sec', 'LIKE', "%$keyword%")
                ->orWhere('scan_resolution_dpi', 'LIKE', "%$keyword%")
                ->orWhere('main_feature', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $printer_info = Printer_info::latest()->paginate($perPage);
        }

        return view('admin.printer_info.index', compact('printer_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.printer_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'pid' => 'required',
			'tid' => 'required',
			'screen_display' => 'required',
			'auto_duplex_printing' => 'required',
			'print_resolution_length' => 'required',
			'print_resolution_width' => 'required',
			'print_resolution_length' => 'required',
			'max_number_of_copies' => 'required|min:1|max:10000',
			'scanning_speed_sec' => 'required',
			'scan_resolution_dpi' => 'required',
			'main_feature' => 'required|min:10|max:100'
		]);
        $requestData = $request->all();
        
        Printer_info::create($requestData);

        return redirect('admin/printer_info')->with('flash_message', 'Printer_info added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $printer_info = Printer_info::findOrFail($id);

        return view('admin.printer_info.show', compact('printer_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $printer_info = Printer_info::findOrFail($id);

        return view('admin.printer_info.edit', compact('printer_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'pid' => 'required',
			'tid' => 'required',
			'screen_display' => 'required',
			'auto_duplex_printing' => 'required',
			'print_resolution_length' => 'required',
			'print_resolution_width' => 'required',
			'print_resolution_length' => 'required',
			'max_number_of_copies' => 'required|min:1|max:10000',
			'scanning_speed_sec' => 'required',
			'scan_resolution_dpi' => 'required',
			'main_feature' => 'required|min:10|max:100'
		]);
        $requestData = $request->all();
        
        $printer_info = Printer_info::findOrFail($id);
        $printer_info->update($requestData);

        return redirect('admin/printer_info')->with('flash_message', 'Printer_info updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Printer_info::destroy($id);

        return redirect('admin/printer_info')->with('flash_message', 'Printer_info deleted!');
    }
}
