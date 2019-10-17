<?php

namespace App\Http\Controllers;

use App\Article;
use App\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $sql = Product::get();
        return view('page.product.index', compact('sql'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::get();
        return view('page.product.create', compact('articles'));
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
            'article_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'quantity' => ['required'],
            'price' => ['required'],
        ]);

        if ($request->file('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('/images'), $imageName );
            $request['photo'] = '/images/'.$imageName;
        }else{
            $request['photo'] = '/images/no-product.png';
        }

        Product::create($request->all());

        return redirect('/product')->with('success', 'Se guardo exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sql = Product::find($id);
        return view('page.product.show', compact('sql'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sql = Product::find($id);
        $articles = Article::get();
        return view('page.product.edit', compact('sql', 'articles'));
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
        $request->validate([
            'article_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'quantity' => ['required'],
            'price' => ['required'],
        ]);

        $sql = Product::find($id);

        if ($request->file('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move( public_path('/images'), $imageName );
            $request['photo'] = '/images/'.$imageName;
        }else{
            $request['photo'] = $sql->photo;
        }


        $sql->update($request->all());

        return redirect('/product')->with('success', 'Se actualizo exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product')->with('success', 'Se elimino exitosamente!');
    }
}
