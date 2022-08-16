<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashbord\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Categories = Category::without('addedBy')
            ->with('translations')
            ->ListsTranslations("name")
            ->addSelect('Categories.created_at', 'Categories.added_by_id')
            ->paginate(10);


        return view('dashboard.Categories.index', compact('Categories'));
    }

    public function create()
    {
        $locales = config('translatable.locales');
        return view('dashboard.Categories.create', compact('locales'));
    }

    public function store(CategoryRequest $request, Category $cat)
    {

        $cat->fill($request->validated() + ['added_by_id' => auth()->id()])->save();
        return redirect()->route('categories.index')->withSuccess('success_add');
    }



    public function edit($id)
    {

        $category = Category::with('translations')->findOrFail($id);

        $locales = config('translatable.locales');
        return view('dashboard.Categories.edit', compact('category', 'locales'));
    }


    public function update(CategoryRequest $request, $category)
    {


        $cat = Category::findOrFail($category);
        $cat->fill($request->validated() + ['updated_at' => now()])->save();
        return redirect()->route('categories.index')->withSuccess('success_update');
    }


    public function destroy($id)
    {

        Category::findOrFail($id)->delete();
        session()->flash('success', ('deleted_successfully'));
        return redirect()->route('categories.index');
    }
}
