<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    public function index ()
    {

        $container = Product::paginate(2);


        return view ('Products.index',

        [
            'Products' => $container ,
        ]);


    }

    public function take ($id)
    {

        $item = Product::findorfail($id);
        return view ('Products/item', compact('item'));

    }

    public function last ()
    {
        $lastProducts = Product::select('id','name')->orderby('id','desc')->take(2)->get();

        return view ('Products\last', compact('lastProducts'));
    }

    public function search($searchword)
    {
        $search = Product::where('name','like',$searchword)->get();

        return view('Products/search' , compact('search', 'searchword' ));
    }

    public function create ()
    {
        return view ('create');
    }


    public function store (Request $request)
    {
        $request->validate([

            'name'=>'required|string| max:100',
            'image'=>'required|image|mimes:png,jpg',
            'description'=>'required|string| max:100',

        ]);


        if($request->hasFile('image')){
            $image=time() . '.' .$request->image->getClientOriginalExtension();
            $request->image->move('uploads/products', $image );

        }

        Product::create ([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
            'votes'=>$request->votes,

        ]);
    }


    public function edit ($id)
    {
        $arrange = Product::paginate(1);
        $e2f4 = Product::findorfail($id);
        return view('edit', compact ('e2f4' , 'arrange' ) );
    }

    public function update(Request $request , $id)
    {
        $e2f4 = Product::findorfail($id);
        $e2f4->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$request->image,
            'votes'=>$request->votes,
        ]);

        return back();

    }


    public function delete($id)
    {
        $e2f4 = Product::findorfail($id);
        $e2f4->delete();

        return redirect (url("project"));

    }









}


