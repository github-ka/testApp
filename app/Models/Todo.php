<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
      'title',
      'user_id'//追記
    ];
    // ここから
    public function getAll($id)
    {
        return $this->where('user_id', $id)->get();
    }
    // ここまで追記

}
