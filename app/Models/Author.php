<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * @property int $id
     * @property string $name_at
     */
    public $table = "Authors";
    public $timestamps = false;
    protected $fillable = [
        'name_at'
    ];    

}
