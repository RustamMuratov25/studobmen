<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class advertisements_images_model extends Model
{
    protected $table = 'advertisements_images';
    protected $primaryKey = 'image_id';

    protected $fillable = ['advertisements_id', 'category_id', 'image_url', 'is_main'];

    public $timestamps = false;

}
