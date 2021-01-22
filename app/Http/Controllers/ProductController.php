<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //collections da passare alla view
        $data = [
            'products' => Product::all(),
        ];
        //pagina da mostrare
        return view('products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        // dd($data);
        $product_add = new Product;
        $product_add->fill($data);
        // $product_add->gender = $data['gender'];
        // $product_add->type = $data['type'];
        // $product_add->size = $data['size'];
        // $product_add->color = $data['color'];
        // $product_add->price = $data['price'];
        $product_add->save();
        //bottone1
        if ($data['submit'] == 'index_view') {
            return redirect()->route('products.index')->withSuccess('Store ha funzionato con successo per il prodotto con ID: '.$product_add->id);
        //bottone2
        }else if ($data['submit'] == 'create_view') {
            return redirect()->route('products.create')->withSuccess('Store ha funzionato con successo per il prodotto con ID: '.$product_add->id);
        }else{
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            //collections da passare alla view
            $data = [
                'product' => $product,
            ];
            //pagina da mostrare
            return view('products.show',$data);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        if($product) {
            $data = [
                'product' => $product
            ];
            return view('products.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $data = $request->all();
        $product->update($data);
        return redirect()->route('products.index')->withSuccess('Update ha funzionato con successo per il prodotto con ID: '.$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $tmp_id = $product->id;
        $product->delete();
        return redirect()->route('products.index')->withSuccess('Distrutto il prodotto con ID: '.$tmp_id);
    }
}
