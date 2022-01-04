<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    /**
     * @property int $id
     * @property string $name
     * @property int $id_at
     * @property string $desc
     */
    protected $fillable = [
        'name',
        'id_at',
        'desc'
    ];    

}
