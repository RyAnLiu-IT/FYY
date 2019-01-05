<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Shop_image;
use Illuminate\Http\Request;

class Shop_imageController extends Controller
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
            $shop_image = Shop_image::where('sid', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $shop_image = Shop_image::latest()->paginate($perPage);
        }

        return view('admin.shop_image.index', compact('shop_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.shop_image.create');
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
        
        $requestData = $request->all();
        

        if ($request->hasFile('image')) {
            foreach($request['image'] as $file){
                $uploadPath = public_path('/uploads/image');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['image'] = $fileName;
            }
        }

        Shop_image::create($requestData);

        return redirect('admin/shop_image')->with('flash_message', 'Shop_image added!');
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
        $shop_image = Shop_image::findOrFail($id);

        return view('admin.shop_image.show', compact('shop_image'));
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
        $shop_image = Shop_image::findOrFail($id);

        return view('admin.shop_image.edit', compact('shop_image'));
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
        
        $requestData = $request->all();
        

        if ($request->hasFile('image')) {
            foreach($request['image'] as $file){
                $uploadPath = public_path('/uploads/image');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['image'] = $fileName;
            }
        }

        $shop_image = Shop_image::findOrFail($id);
        $shop_image->update($requestData);

        return redirect('admin/shop_image')->with('flash_message', 'Shop_image updated!');
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
        Shop_image::destroy($id);

        return redirect('admin/shop_image')->with('flash_message', 'Shop_image deleted!');
    }
}
