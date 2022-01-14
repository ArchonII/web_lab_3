<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    /**
     * @property int $id
     * @property string $name_q
     * @property int $id_at
     * @property string $desc
     */
    public $table = "Quests";
    public $timestamps = false;
    protected $fillable = [
        'name_q',
        'id_at',
        'desc'
    ];    

}
