<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:categories|max:50',
            'description' => 'required|max:255',
            // 'image' => 'required',
            'status' => 'required',
        ], [
            'title.required' => 'Yeu cau nhap tieu de!',
            'title.unique' => 'Nhap tieu de khac!',
        ]);
        $category = new Category();
        $category->title = $data['title'];
        $category->description = $data['description'];

        $get_image = $request->image;
        $path = 'up/cate';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image.rand(0, 999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $category->image = $new_image;

        $category->status = $data['status'];
        $category->slug = Str::slug($data['title']);
        // $category->timestamps();
        $category->save();
        return redirect()->route('categories.index');
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
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:255',
        ], [
            'title.required' => 'Yeu cau nhap tieu de!',
        ]);
        $category = Category::find($id);
        $category->title = $data['title'];
        $category->description = $data['description'];

        if($request->image) {
            $get_image = $request->image;
            $path = 'up/cate';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0, 999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $category->image = $new_image;
        }

        // $category->status = $data['status'];
        $category->slug = Str::slug($data['title']);
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
