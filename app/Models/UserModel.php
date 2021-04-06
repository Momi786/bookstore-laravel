<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\UserInformationModel;
use App\Models\UserTypeModel;

class UserModel extends Model
{
    protected $table = "users";
    protected $fillable = ["username","password","usertype"];

    public function GetUserInfo(){
        $data = UserInformationModel::where('userId',$this->id)->first();
        return $data;
    }
    public function GetUserType(){
        $data = UserTypeModel::where('id',$this->usertype)->first();
        return $data;
    }

}
