<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\validator;
use App\Models\Catergory;

class Catergorycontroller extends Controller
{
    public function index()
    {
        $catergories = Catergory::all();
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
           return redirect('/catergory')
                       ->withErrors($validator)
                       ->withInput();
       }
       try{
           $category = Catergory::create([
               "CategoryName" => $request->categoryName
           ]);
           return redirect('/catergory');
       }catch(QueryException $error){
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

