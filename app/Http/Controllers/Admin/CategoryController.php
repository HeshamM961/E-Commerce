<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        try {
            if ($request->has('image')){
                $path = 'uploads/category/';
                $image = $request->image;
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $fileName = time() . uniqid() . '.png';

                Storage::disk('public')->put($path . $fileName, base64_decode($image));
            }

            $category = new Category;
            $category->name = $validatedData['name'];
            $category->slug = Str::slug($validatedData['slug']);
            $category->description = $validatedData['description'];

            $category->meta_title = $validatedData['meta_title'];
            $category->meta_description = $validatedData['meta_description'];
            $category->meta_keyword = $validatedData['meta_keyword'];
            $category->image = $fileName;

            $category->status = $request->status == 1 ? '1' : '0';

            $category->save();

            return response()->json(['success' => 'Category Created Successfully']);

        }catch (\Exception $e){
            return response()->json(['error ' => 'Ops! Something Went Wrong']);
        }

//        return redirect()->route('admin.category.index')->with('success', 'Category Saved Successfully');


    }

    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {

        $validatedData = $request->validated();

        try
        {
            $category = Category::findOrFail($category);

            if ($request->has('image')){

                $url = storage_path('app/public/uploads/category/' . $category->image);
                if (File::exists($url)){
                    File::delete($url);
                }
                $path = 'uploads/category/';
                $image = $request->image;
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $fileName = time() . uniqid() . '.png';

                Storage::disk('public')->put($path . $fileName, base64_decode($image));
            }

            $category->name = $validatedData['name'];
            $category->slug = Str::slug($validatedData['slug']);
            $category->description = $validatedData['description'];

            $category->meta_title = $validatedData['meta_title'];
            $category->meta_description = $validatedData['meta_description'];
            //$category->meta_keyword = $validatedData['meta_keyword'];
            $category->image = $fileName;

            $category->status = $request->status == 1 ? '1' : '0';

            $category->update();

            return response()->json(['success' => 'Category Updated Successfully']);

        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }

    }

    public function destroy(Category $category){
        try {
            $category->delete();
            $url = asset('storage/uploads/category/' . $category->image);
            if (File::exists($url)){
                File::delete($url);
            }
            return response()->json(['success' => 'Category Updated Successfully']);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }


    }
}
