<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateCategoryRequest;
use Exception;
use App\Models\Category;
use Auth;
use Uuid;
use Session;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with('parentCategory')->orderBy('name')->get();
        return view('categories/list',[
            'categories' => $categories
        ]);
    }

    public function create(){
        $categories = Category::pluck('name','id');
        $categories[0] = 'No parent';
        return view('categories/create',[
            'categories' => $categories
        ]);
    }

    public function store(CreateCategoryRequest $request){
        try{

            $category = new Category;
            $category->uuid = Uuid::generate(4);
            $category->parent_category = $request->parent_category;
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->created_by = Auth::id();
            $category->updated_by = Auth::id();
            $category->save();

            Session::flash('success','New category has been successfully created!');
            return redirect('categories');

        }catch(Exception $e){
           dd($e->getMessage());
        }
    }
}
