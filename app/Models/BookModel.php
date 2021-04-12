<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BookCategoryModel;
use App\Models\UserInformationModel;

class BookModel extends Model
{
    protected $table = "book";
    protected $fillable = ["name","categoryId","authorId","feature","description","detailDescription","cover_image","pending","price","recommded_only","recommded_all"];

    public function GetCategory(){
        $data = BookCategoryModel::where('id',$this->categoryId)->first();
        return $data;
    }
    public function GetAuthor(){
        $data = UserInformationModel::where('userId',$this->authorId)->first();
        return $data;
    }
}
