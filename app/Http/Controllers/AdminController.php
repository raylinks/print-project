<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\traits\ImageUpload;
use App\Image;

class AdminController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin')->with('products', $products);
        // return view('admin');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'title' => 'required|string',
            'image[]' => 'image|nullable|mimes:jpeg,jpg,png,gif',
            'description' => 'required|string'

        ]);
        $product =  Product::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $fileNameToStore = $this->uploadImages($file);
                // dd($fileNameToStore);
                Image::create([
                    'name' => $fileNameToStore,
                    'product_id' => $product->id,
                ]);
            }
        } else {
            $fileNameToStore = 'noImage.jpg';
            Image::create([
                'name' => $fileNameToStore,
                'product_id' => $product->id,
            ]);
        }



        return redirect('/admin')->with('success', ' Product Saved');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $product = Product::findorfail($id);

    //     $this->validate($request, [
    //         'title' => 'required|string',
    //         'image' => 'image|nullable|max:1999',
    //         'description' => 'required|string'

    //     ]);


    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin')->with('success', ' Product deleted');
    }
}
