<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductSale;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = Sale::get();
        return view('page.sale.index', compact('sql'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        return view('page.sale.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required', 'string', 'max:255'],
        ]);

        $request['date'] = date('Y-m-d');
        $request['total_amount'] = 0;
        $request['user_id'] = auth()->user()->id;
        $sale = Sale::create($request->all());
        $suma = 0;
        foreach ($request->product_id as $key => $item) {
            if(trim($request->quantity[$key]) != null) {
                ProductSale::create([
                    'product_id' => $request->product_id[$key],
                    'sale_id' => $sale->id,
                    'quantity' => $request->quantity[$key],
                    'price' => $request->price[$key],
                ]);
                $suma = $suma+($request->quantity[$key]*$request->price[$key]);
            }
        }

        $sale->update([
            'total_amount'  => $suma
        ]);

        return redirect('/sale')->with('success', 'Se actualizo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sql = Sale::find($id);
        return view('page.sale.show', compact('sql'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductSale::where('sale_id', $id)->delete();

        Sale::destroy($id);
        return redirect('/sale')->with('success', 'Se elimino exitosamente!');
    }
}
