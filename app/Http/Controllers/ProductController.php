<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required|unique:products|max:50',
            'image' => 'nullable|image',
            'price' => 'required|numeric',
            'description' => 'required|max:255',
        ], [
            'title.required' => 'Yeu cau nhap tieu de!',
            'title.unique' => 'Nhap tieu de khac!',
        ]);
        $product = new Product();
        $product->category_id = $data['category_id'];
        $product->title = $data['title'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $get_image = $request->file('image');
            $path = 'up/prod';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0, 999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->image = $new_image;
        }

        $product->image = $data['title'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->slug = Str::slug($data['title']);
        $product->save();
        return redirect()->route('product.index');
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
        $product = Product::find($id);
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:50',
            'image' => 'nullable|image',
            'price' => 'required|numeric',
            'description' => 'required|max:255',
        ], [
            'title.required' => 'Yeu cau nhap tieu de!',
        ]);
        $product = Product::find($id);
        $product->category_id = $data['category_id'];
        $product->title = $data['title'];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $get_image = $request->file('image');
            $path = 'up/prod';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0, 999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->image = $new_image;
        }

        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->slug = Str::slug($data['title']);
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
