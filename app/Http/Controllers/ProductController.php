<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
class ProductController extends Controller
{

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Cows - Ganaderapp";
        $viewData["subtitle"] =  "List of Cows";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        if($id > 0){
            $product = Product::findOrFail($id);
            $viewData["title"] = $product->getTitle()." - Ganaderapp";
            $viewData["subtitle"] =  $product->getTitle()." - Cow information";
            $viewData["product"] = $product;
            return view('product.show')->with("viewData", $viewData);
        }else{
            return view('home.index')->with("viewData", $viewData);
        }

    }
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Add Cow";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        Product::validate($request);
        //here will be the code to call the model and save it to the database
        Product::create($request->only(["title","price","image","description","rating","category","supplier"]));
        return back();
    }

    public function delete(Request $request):View{
        Product::destroy($request->id);
        return $this->index();
    }
}


