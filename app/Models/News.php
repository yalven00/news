<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
   
    protected $table = 'news';
    
   
    public $primaryKey = 'id';
    
 
    public $timestamps = true;
    
   
    protected $fillable = array('title', 'slug', 'description', 'content', 'author', 'category', 'created_at', 'updated_at');

}
