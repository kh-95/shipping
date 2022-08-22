<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashbord\ProductRequest;
use App\Models\Category\Category;
use App\Models\Brand\Brand;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Products = Product::without('addedBy')
            ->with('translations')
            ->ListsTranslations("name")
            ->addSelect('Products.created_at', 'Products.added_by_id', 'Products.size', 'Products.brand_id', 'Products.category_id')
            ->paginate(10);


        return view('dashboard.Products.index', compact('Products'));
    }

    public function create()
    {
        $locales = config('translatable.locales');
        $categories = Category::get();
        $brands = Brand::get();
        return view('dashboard.Products.create', compact('locales', 'categories', 'brands'));
    }

    public function store(ProductRequest $request, Product $pro)
    {
        // dd($request->all());
        $pro->fill($request->validated() + ['added_by_id' => auth()->id()])->save();
        return redirect()->route('products.index')->withSuccess('success_add');
    }



    public function edit($id)
    {

        $product = Product::with('translations')->findOrFail($id);

        $locales = config('translatable.locales');
        $categories = Category::get();
        $brands = Brand::get();
        return view('dashboard.Products.edit', compact('product', 'locales','categories','brands'));
    }


    public function update(ProductRequest $request,$product)
    {
        $pro = Product::findOrFail($product);
        $pro->fill($request->validated() + ['updated_at' => now()])->save();
        return redirect()->route('products.index')->withSuccess('success_update');
    }


    public function destroy($id)
    {

        Product::findOrFail($id)->delete();
        session()->flash('success', ('deleted_successfully'));
        return redirect()->route('products.index');
    }
}
