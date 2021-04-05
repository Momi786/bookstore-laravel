<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BookCategoryModel;
use App\Models\AuthurModel;

class BookModel extends Model
{
    protected $table = "book";
    protected $fillable = ["name","categoryId","authorId","feature","description","detailDescription"];

    public function GetCategory(){
        $data = BookCategoryModel::where('id',$this->categoryId)->first();
        return $data;
    }
    public function GetAuthor(){
        $data = AuthurModel::where('id',$this->authorId)->first();
        return $data;
    }
}
