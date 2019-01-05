<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Shop_address;
use Illuminate\Http\Request;

class Shop_addressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $shop_address = Shop_address::where('shop_address', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('business_hours', 'LIKE', "%$keyword%")
                ->orWhere('mtr_station', 'LIKE', "%$keyword%")
                ->orWhere('paid', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $shop_address = Shop_address::latest()->paginate($perPage);
        }

        return view('admin.shop_address.index', compact('shop_address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.shop_address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
			'shop_address' => 'required',
			'phone' => 'required|min:8',
			'business_hours' => 'required',
			'mtr_station' => 'required|min:1|max:10',
			'paid' => 'required'
		]);
        $requestData = $request->all();
        
        Shop_address::create($requestData);

        return redirect('admin/shop_address')->with('flash_message', 'Shop_address added!');
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
        $shop_address = Shop_address::findOrFail($id);

        return view('admin.shop_address.show', compact('shop_address'));
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
        $shop_address = Shop_address::findOrFail($id);

        return view('admin.shop_address.edit', compact('shop_address'));
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
			'shop_address' => 'required',
			'phone' => 'required|limited:8',
			'business_hour' => 'required',
			'mtr_station' => 'required|min:1|max:10',
			'paid' => 'required|'
		]);
        $requestData = $request->all();
        
        $shop_address = Shop_address::findOrFail($id);
        $shop_address->update($requestData);

        return redirect('admin/shop_address')->with('flash_message', 'Shop_address updated!');
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
        Shop_address::destroy($id);

        return redirect('admin/shop_address')->with('flash_message', 'Shop_address deleted!');
    }
}
