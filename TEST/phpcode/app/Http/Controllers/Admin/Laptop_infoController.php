<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Laptop_info;
use Illuminate\Http\Request;

class Laptop_infoController extends Controller
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
            $laptop_info = Laptop_info::where('pid', 'LIKE', "%$keyword%")
                ->orWhere('tid', 'LIKE', "%$keyword%")
                ->orWhere('processor', 'LIKE', "%$keyword%")
                ->orWhere('operating_system', 'LIKE', "%$keyword%")
                ->orWhere('memory', 'LIKE', "%$keyword%")
                ->orWhere('storage', 'LIKE', "%$keyword%")
                ->orWhere('display_resolution_width', 'LIKE', "%$keyword%")
                ->orWhere('display_resolution_length', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $laptop_info = Laptop_info::latest()->paginate($perPage);
        }

        return view('admin.laptop_info.index', compact('laptop_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.laptop_info.create');
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
			'processor' => 'required|min:1|max:50',
			'operating_system' => 'required|min:10|max:50',
			'memory' => 'required|min:1|max:100',
			'storage' => 'required|min:1|max:100'
		]);
        $requestData = $request->all();
        
        Laptop_info::create($requestData);

        return redirect('admin/laptop_info')->with('flash_message', 'Laptop_info added!');
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
        $laptop_info = Laptop_info::findOrFail($id);

        return view('admin.laptop_info.show', compact('laptop_info'));
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
        $laptop_info = Laptop_info::findOrFail($id);

        return view('admin.laptop_info.edit', compact('laptop_info'));
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
			'processor' => 'required|min:1|max:50',
			'operating_system' => 'required|min:10|max:50',
			'memory' => 'required|min:1|max:100',
			'storage' => 'required|min:1|max:100'
		]);
        $requestData = $request->all();
        
        $laptop_info = Laptop_info::findOrFail($id);
        $laptop_info->update($requestData);

        return redirect('admin/laptop_info')->with('flash_message', 'Laptop_info updated!');
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
        Laptop_info::destroy($id);

        return redirect('admin/laptop_info')->with('flash_message', 'Laptop_info deleted!');
    }
}
