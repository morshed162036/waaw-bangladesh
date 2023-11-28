<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Stock;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('catalogue','category','brand','unit')->get()->all();
        return view('server.product.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::where('status','Active')->get()->toArray();
        $categories = Catalogue::with('category')->get()->toArray();
        $brands = Brand::where('status','Active')->get()->all();
        $units = Unit::get()->all();
        return view('server.product.create')->with(compact('categories','brands','units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required',
            'category_id' =>'required',
            'brand_id' =>'required',
            'unit_id' =>'required',
            'code' =>'required',
            'has_stock' =>'required',
            'cost' =>'required',
            'mrp' =>'required',
        ];
        $this->validate($request,$rules);
        $categoryDetails = Category::find($request->category_id);
        $product = new Product();
        $product->catalogue_id = $categoryDetails['catalogue_id'];
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->code = $request->code;
        $product->weight = $request->weight;
        $product->has_stock = $request->has_stock;
        $product->discount_type = $request->discount_type;
        if($request->discount_amount)
        {
            $product->discount_amount = $request->discount_amount;
        }
        
        $product->cost = $request->cost;
        $product->mrp = $request->mrp;
        $product->alert_stock = $request->alert_stock;
        $product->tags = $request->tags;
        $product->view_section = $request->view_section;
        $product->description = $request->description;

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/product_image/'.$imageName;
                Image::make($image_temp)->resize(1040,1300)->save($imagePath);
                $product->image = $imageName;
            }
        }

        $product->save();
        $last = $product->id;
        if($last)
        {
            $product_stock = new Stock();
            if($request->stock)
            {
                $product_stock->quantity = $request->stock;
            }    
            $product_stock->product_id = $last;
            $product_stock->alert_stock = $request->alert_stock;;
            $product_stock->save();
        }
        return redirect(route('product.index'))->with('success','Product Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findorFail($id);
        $exists = 'images/product_image/'.$product->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        $product->delete();
        Stock::where('product_id',$id)->delete();
        return redirect(route('product.index'))->with('success','Product Delete Successfully!');
    }

    public function updateProductStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=> $data['product_id']]);
        }
    }
}
