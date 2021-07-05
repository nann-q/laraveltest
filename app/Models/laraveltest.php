<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laraveltest extends Model
{
    public function getData()
    {
        $txt = $this->id . ':' . $this->name . '(' . $this->email . ')';
        return $txt;
    }
}
