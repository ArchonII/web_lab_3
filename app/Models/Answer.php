<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * @property int $id
     * @property int $id_at
     * @property int $id_qt
     * @property string $text
     */
    public $table = "Answers";
    public $timestamps = false;
    protected $fillable = [
        'id_at',
        'id_qt',
        'text'
    ];    

}
