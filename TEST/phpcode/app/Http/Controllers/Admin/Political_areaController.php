<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Political_area;
use Illuminate\Http\Request;

class Political_areaController extends Controller
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
            $political_area = Political_area::where('name', 'LIKE', "%$keyword%")
                ->orWhere('mgid', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $political_area = Political_area::latest()->paginate($perPage);
        }

        return view('admin.political_area.index', compact('political_area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.political_area.create');
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
			'mgid' => 'required',
			'name' => 'required|min:1|max:20'
		]);
        $requestData = $request->all();
        
        Political_area::create($requestData);

        return redirect('admin/political_area')->with('flash_message', 'Political_area added!');
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
        $political_area = Political_area::findOrFail($id);

        return view('admin.political_area.show', compact('political_area'));
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
        $political_area = Political_area::findOrFail($id);

        return view('admin.political_area.edit', compact('political_area'));
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
			'mgid' => 'required',
			'name' => 'required|min:1|max:20'
		]);
        $requestData = $request->all();
        
        $political_area = Political_area::findOrFail($id);
        $political_area->update($requestData);

        return redirect('admin/political_area')->with('flash_message', 'Political_area updated!');
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
        Political_area::destroy($id);

        return redirect('admin/political_area')->with('flash_message', 'Political_area deleted!');
    }
}
