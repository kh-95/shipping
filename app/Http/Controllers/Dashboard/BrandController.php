<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Dashbord\BrandRequest;

class BrandController extends Controller
{

    public function index()
    {
        $Brands = Brand::without('addedBy')
        ->with('translations')
        ->ListsTranslations("name")
        ->addSelect('Brands.created_at', 'Brands.added_by_id','Brands.type')
        ->paginate(10);


    return view('dashboard.Brands.index', compact('Brands'));
    }

    public function create()
    {

        $locales = config('translatable.locales');
        return view('dashboard.Brands.create', compact('locales'));
    }


    public function store(BrandRequest $request, Brand $brand)
    {

        $brand->fill($request->validated() + ['added_by_id' => auth()->id()])->save();
        return redirect()->route('brands.index')->withSuccess('success_add');
    }


    public function edit($id)
    {

        $brand = Brand::with('translations')->findOrFail($id);

        $locales = config('translatable.locales');
        return view('dashboard.Brands.edit', compact('brand', 'locales'));
    }


    public function update(BrandRequest $request, $brand)
    {


        $brandx = Brand::findOrFail($brand);
        $brandx->fill($request->validated() + ['updated_at' => now()])->save();
        return redirect()->route('brands.index')->withSuccess('success_update');
    }

    public function destroy($id)
    {

        Brand::findOrFail($id)->delete();
        session()->flash('success', ('deleted_successfully'));
        return redirect()->route('brands.index');
    }
}
