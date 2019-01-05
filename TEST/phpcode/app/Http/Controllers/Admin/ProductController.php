<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
            $product = Product::where('broadway_code', 'LIKE', "%$keyword%")
                ->orWhere('bid', 'LIKE', "%$keyword%")
                ->orWhere('tid', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('model', 'LIKE', "%$keyword%")
                ->orWhere('dimensions_W_mm', 'LIKE', "%$keyword%")
                ->orWhere('dimensions_H_mm', 'LIKE', "%$keyword%")
                ->orWhere('dimensions_D_mm', 'LIKE', "%$keyword%")
                ->orWhere('net_weight', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('keywords', 'LIKE', "%$keyword%")
                ->orWhere('place_of_origin', 'LIKE', "%$keyword%")
                ->orWhere('sales_territory', 'LIKE', "%$keyword%")
                ->orWhere('warranty_m', 'LIKE', "%$keyword%")
                ->orWhere('special_feature', 'LIKE', "%$keyword%")
                ->orWhere('special_feature2', 'LIKE', "%$keyword%")
                ->orWhere('accessory', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product.create');
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
			'name' => 'required',
			'bid' => 'required',
			'tid' => 'required',
			'broadway_code' => 'required',
			'model' => 'required',
			'net_weight' => 'required',
			'place_of_origin' => 'required',
			'sales_territory' => 'required'
		]);
        $requestData = $request->all();
        
        Product::create($requestData);

        return redirect('admin/product')->with('flash_message', 'Product added!');
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
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
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
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact('product'));
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
			'name' => 'required',
			'bid' => 'required',
			'tid' => 'required',
			'broadway_code' => 'required',
			'model' => 'required',
			'net_weight' => 'required',
			'place_of_origin' => 'required',
			'sales_territory' => 'required'
		]);
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('admin/product')->with('flash_message', 'Product updated!');
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
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }
}
