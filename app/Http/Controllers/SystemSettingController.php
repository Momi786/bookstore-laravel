<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMediaModel;

class SystemSettingController extends Controller
{
    // Social Media Functions

    public function ViewSocial(){
        $totalSocial = SocialMediaModel::all();
        return view('admin.system_settings.social.index',compact('totalSocial'));
    }
    public function GetALLFeatureDeleteSocial(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = SocialMediaModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }
        }
        return back();
    }
    public function AddSocial(){
        return view('admin.system_settings.social.add');
    }
    public function AddSocialProcess(Request $request){
        $data = $request->all();
        $Social = new SocialMediaModel;
        $Social->fill($data);
        $Social->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function DeleteSocial(Request $request,$id){
        $data = SocialMediaModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function EditSocial(Request $request, $id){
        $data = SocialMediaModel::find($id);
        return view('admin.system_settings.social.edit',compact('data'));
    }
    public function EditSocialProcess(Request $request, $id){
        $data = $request->all();
        $Social = SocialMediaModel::find($id);
        $Social->fill($data);
        $Social->save();
        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }

}
