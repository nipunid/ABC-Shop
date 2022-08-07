<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Queryexception;
use Illuminate\Support\Facades\validator;
use App\Models\Catergory;

class Catergorycontroller extends Controller
{
    public function index()
    {
        $catergories = Category::all();
        return view('catergories');
    }

    public function create()
   {
    
   }

   public function store(Request $request)
   {
       $validator = validator::make($request->all(),[
           "categoryName" => "required|unique:catergories"
       ]);
   
       if($validator->fails()){
           return redirect('/category')
                       ->withErrors($validator)
                       ->withInput();
       }
       try{
           $category = Category::create([
               "CategoryName" => $request->categoryName
           ]);
           return redirect('/category');
       }catch(Queryexception $error){
           error_log($error->getMessage());
          // handle error from cient side
       }
      
   }

   public function show($id)
   {
       //
   }

   public function edit($id)
   {
       //
   }

   public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

