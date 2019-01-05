<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Link_p_col;
use Illuminate\Http\Request;

class Link_p_colController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $link_p_col = Link_p_col::where('pid', 'LIKE', "%$keyword%")
                ->orWhere('col_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $link_p_col = Link_p_col::latest()->paginate($perPage);
        }

        return view('admin.link_p_col.index', compact('link_p_col'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.link_p_col.create');
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
			'col_id' => 'required'
		]);
        $requestData = $request->all();
        
        Link_p_col::create($requestData);

        return redirect('admin/link_p_col')->with('flash_message', 'Link_p_col added!');
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
        $link_p_col = Link_p_col::findOrFail($id);

        return view('admin.link_p_col.show', compact('link_p_col'));
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
        $link_p_col = Link_p_col::findOrFail($id);

        return view('admin.link_p_col.edit', compact('link_p_col'));
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
			'col_id' => 'required'
		]);
        $requestData = $request->all();
        
        $link_p_col = Link_p_col::findOrFail($id);
        $link_p_col->update($requestData);

        return redirect('admin/link_p_col')->with('flash_message', 'Link_p_col updated!');
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
        Link_p_col::destroy($id);

        return redirect('admin/link_p_col')->with('flash_message', 'Link_p_col deleted!');
    }
}
