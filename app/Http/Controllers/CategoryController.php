<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\MajorCategory;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /* CATEGORY 
    ******/
    public function createCategory(){
        $major_categories = MajorCategory::all();
        return view('category.create_category', [
            'major_categories' => $major_categories,
        ]);
    }

    public function createMajorCategory(Request $request){        
        //Validate the inputs
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,jpg,bmp,png|max:2048',
            'main_category_name' => 'required',
        ]);
        $picture = $request->file('picture');
        $path =  public_path(). '/images/category/';
        $filename = time() . '.' . $picture->getClientOriginalExtension();
        $picture->move($path, $filename);

        $major_categories = new MajorCategory();
        $major_categories->picture = $filename;
        $major_categories->main_category_name = $request->main_category_name;
        $major_categories->description = $request->description;
        $major_categories->save();

        Session::flash('success', 'Category Inserted Successfully');
        return back();
          
    }

    public function createMinorCategory(Request $request){
        //Validate the inputs
        $request->validate([
            'sub_category_name' => 'required',
        ]);
        $minor_category = DB::table('minor_categories')->insert([
            'sub_category_name' =>$request->sub_category_name,
            'description' =>$request->description,
            'major_category_id' =>$request->major_category_id,
        ]);
        Session::flash('success', 'Category Inserted Successfully');
        return back();      
    }
    public function showCategory(){
        $tests = MajorCategory::all();

        $categories = DB::select("SELECT mj.main_category_name,mn.sub_category_name from major_categories mj 
        LEFT JOIN minor_categories mn ON mj.id = mn.major_category_id");
        return view('category.show_category', [
            'categories' => $categories,
            'tests' => $tests,
        ]);
    }
    
}
