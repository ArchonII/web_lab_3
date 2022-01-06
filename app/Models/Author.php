<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * @property int $id
     * @property string $name
     */
    protected $fillable = [
        'name'
    ];    

}
