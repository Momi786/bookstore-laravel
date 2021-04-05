<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthurModel;

class AuthorController extends Controller
{

    // Author Functions

    public function ViewAuthor(){
        $totalAuthor = AuthurModel::all();
        return view('admin.author.index',compact('totalAuthor'));
    }
    public function GetALLFeatureDeleteAuthor(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = AuthurModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }
        }
        return back();
    }

    public function AddAuthor(){
        return view('admin.author.add');
    }
    public function AddAuthorProcess(Request $request){
        $data = $request->all();
        $Author = new AuthurModel;
        $Author->fill($data);
        $Author->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function DeleteAuthor(Request $request,$id){
        $data = AuthurModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function EditAuthor(Request $request, $id){
        $data = AuthurModel::find($id);
        return view('admin.author.edit',compact('data'));
    }
    public function EditAuthorProcess(Request $request, $id){
        $data = $request->all();
        $Author = AuthurModel::find($id);
        $Author->fill($data);
        $Author->save();
        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }
}
