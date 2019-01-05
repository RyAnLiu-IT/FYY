<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Main_region;
use Illuminate\Http\Request;

class Main_regionController extends Controller
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
            $main_region = Main_region::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $main_region = Main_region::latest()->paginate($perPage);
        }

        return view('admin.main_region.index', compact('main_region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.main_region.create');
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
			'name' => 'required|min:1|max:50'
		]);
        $requestData = $request->all();
        
        Main_region::create($requestData);

        return redirect('admin/main_region')->with('flash_message', 'Main_region added!');
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
        $main_region = Main_region::findOrFail($id);

        return view('admin.main_region.show', compact('main_region'));
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
        $main_region = Main_region::findOrFail($id);

        return view('admin.main_region.edit', compact('main_region'));
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
			'name' => 'required|min:1|max:50'
		]);
        $requestData = $request->all();
        
        $main_region = Main_region::findOrFail($id);
        $main_region->update($requestData);

        return redirect('admin/main_region')->with('flash_message', 'Main_region updated!');
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
        Main_region::destroy($id);

        return redirect('admin/main_region')->with('flash_message', 'Main_region deleted!');
    }
}
