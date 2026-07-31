<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class advertisements_model extends Model
{
    //Указываем точное имя таблицы и ключ доступа из базы
    protected $table = 'advertisements';
    protected $primaryKey = 'advertisements_id';

    //Разрешаем изменять только эти поля
    protected $fillable = ['user_id', 'category_id', 'title', 'description', 'price', 'status', 'address', 'number'];

    //Так как в таблице нет колонки updated_at, отключаем ее
    public $timestamps = false;

    // Связь с таблицей картинок (hasMany — у одного объявления много картинок)
    public function images()
    {
        return $this->hasMany(advertisements_images_model::class, 'advertisements_id', 'advertisements_id');
    }
}
