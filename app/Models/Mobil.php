<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Mobil extends Model
{

    public $timestamps = false;
    protected $table = "mobil";

    protected $fillable = [
        'id',
        'nama',
        'image',
    ];

}