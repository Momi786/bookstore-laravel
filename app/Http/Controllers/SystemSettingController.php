<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMediaModel;
use App\Models\MainMenuModel;
use App\Models\MainSliderModel;

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

    // Main Menu Functions

    public function ViewMenu(){
        $totalSocial = MainMenuModel::all();
        return view('admin.system_settings.menu.index',compact('totalSocial'));
    }
    public function GetALLFeatureDeleteMenu(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = MainMenuModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }
        }
        return back();
    }
    public function AddMenu(){
        return view('admin.system_settings.menu.add');
    }
    public function AddMenuProcess(Request $request){
        $data = $request->all();
        $Menu = new MainMenuModel;
        $Menu->fill($data);
        $Menu->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function DeleteMenu(Request $request,$id){
        $data = MainMenuModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function EditMenu(Request $request, $id){
        $data = MainMenuModel::find($id);
        return view('admin.system_settings.menu.edit',compact('data'));
    }
    public function EditMenuProcess(Request $request, $id){
        $data = $request->all();
        $Menu = MainMenuModel::find($id);
        $Menu->fill($data);
        $Menu->save();
        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }

    // Main Slider Functions

    public function ViewSlider(){
        $totalSocial = MainSliderModel::all();
        return view('admin.system_settings.slider.index',compact('totalSocial'));
    }
    public function GetALLFeatureDeleteSlider(Request $request){
        for ($i = 0; $i < count($request->feature); $i++) {
            $data = MainSliderModel::where('id',$request->feature[$i])->first();
            if($request->submit == "delete"){
                $data->delete();
            }
        }
        return back();
    }
    public function AddSlider(){
        return view('admin.system_settings.slider.add');
    }
    public function AddSliderProcess(Request $request){
        $data = $request->all();
        if ($request->file("image") != null) {
            $path = $request->file("image")->store("Slider_Images");
            $data["image"] = $path;
        }
        $Slider = new MainSliderModel;
        $Slider->fill($data);
        $Slider->save();
        $success = "Your Data has Saved successfully.";
        $request->session()->put("success",$success);
        return back();
    }
    public function DeleteSlider(Request $request,$id){
        $data = MainSliderModel::find($id);
        $data->delete();
        $danger = "Your Data has been Delete successfully.";
        $request->session()->put("danger",$danger);
        return back();
    }
    public function EditSlider(Request $request, $id){
        $data = MainSliderModel::find($id);
        return view('admin.system_settings.slider.edit',compact('data'));
    }
    public function EditSliderProcess(Request $request, $id){
        $data = $request->all();
        if ($request->file("image") != null) {
            $path = $request->file("image")->store("Slider_Images");
            $data["image"] = $path;
        }
        $Slider = MainSliderModel::find($id);
        $Slider->fill($data);
        $Slider->save();
        $success = "Your Data has been Updated successfully.";
        $request->session()->put("success",$success);
        return back();
    }

}
