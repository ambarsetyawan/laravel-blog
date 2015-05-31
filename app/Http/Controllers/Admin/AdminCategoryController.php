<?php namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class AdminCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @return Response
     */
    public function index(Category $category)
    {
        $categories = $category->all();
//
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());

        Flash::success('Category created!');

        return redirect('admin/category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  CategoryRequest $request
     * @return Response
     */
    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        Flash::success('Category updated!');

        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        Flash::success('Category deleted!');

        return redirect('admin/category');
    }

}
