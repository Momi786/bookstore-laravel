<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\BookCategoryModel;
use App\Models\UserModel;

class BookController extends Controller
{

    public function Index(Request $request){
        $value = $request->session()->get('onlineuser');
        if($value['usertype'] == 4){
            $id = $value['id'];
            $totalData = BookModel::where('authorId',$id)->get();
        }else{
            $totalData = BookModel::all();
        }
        return view('admin.book.index',compact('totalData'));
    }

    public function GetALLFeatureDelete(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = BookModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }else{
                $data->feature = 1;
                $data->save();
            }
        }
        return back();
    }
    public function Add(){
        $BookCategory = BookCategoryModel::all();
        $Author = UserModel::where('usertype',2)->get();
        return view('admin.book.add',compact('BookCategory','Author'));
    }
    public function AddProcess(Request $request){
        $data = $request->all();
        $value = $request->session()->get('onlineuser');
        if($value['usertype'] == 4){
            $data['authorId'] = $value['id'];
        }
        if ($request->file("cover_image") != null) {
            $path = $request->file("cover_image")->store("Book_Images");
            $data["cover_image"] = $path;
        }
        $data["editor1"] = htmlentities($data["editor1"]);
        $data["detailDescription"] = $data["editor1"];
        unset($data["editor1"]);

        $Book = new BookModel;
        $Book->fill($data);
        $Book->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }

    public function Delete(Request $request,$id){
        $data = BookModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function Edit(Request $request,$id){
        $data = BookModel::find($id);
        $BookCategory = BookCategoryModel::all();
        $Author = UserModel::where('usertype',2)->get();
        return view('admin.book.edit',compact('data','Author','BookCategory'));
    }

    public function EditProcess(Request $request,$id){
        $data = $request->all();
        if ($request->file("cover_image") != null) {
            $path = $request->file("cover_image")->store("Book_Images");
            $data["cover_image"] = $path;
        }
        $value = $request->session()->get('onlineuser');
        if($value['usertype'] == 4){
            $data['authorId'] = $value['id'];
        }
        $data["editor1"] = htmlentities($data["editor1"]);
        $data["detailDescription"] = $data["editor1"];
        unset($data["editor1"]);

        $vendor = BookModel::find($id);
        $vendor->fill($data);
        $vendor->save();

        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function FeatureProcess(Request $request,$id){
        $data = BookModel::find($id);
        if($request->feature){
            $data->feature = 1;
        }else{
            $data->feature = 0;
        }
        $data->save();
        return back();
    }

    // Book Category Functions

    public function ViewCategory(){
        $totalCategory = BookCategoryModel::all();
        return view('admin.book.category.index',compact('totalCategory'));
    }
    public function GetALLFeatureDeleteCategory(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = BookCategoryModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }
        }
        return back();
    }

    public function AddCategory(){
        return view('admin.book.category.add');
    }
    public function AddCategoryProcess(Request $request){
        $data = $request->all();
        $Category = new BookCategoryModel;
        $Category->fill($data);
        $Category->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function DeleteCategory(Request $request,$id){
        $data = BookCategoryModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function EditCategory(Request $request, $id){
        $data = BookCategoryModel::find($id);
        return view('admin.book.category.edit',compact('data'));
    }
    public function EditCategoryProcess(Request $request, $id){
        $data = $request->all();
        $Category = BookCategoryModel::find($id);
        $Category->fill($data);
        $Category->save();
        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }

}
