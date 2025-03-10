<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class Students extends Authenticatable
{
    protected $table = 'students'; // Указываем, что модель использует таблицу `students`

    protected $fillable = [
        'first_name', 'last_name', 'birth_date', 'email', 'login', 'password'
    ];

    protected $hidden = [
        'password', // Скрываем пароль
    ];

    // Указываем, что для аутентификации используется столбец `login`
    public function username()
    {
        return 'login';
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public $timestamps = false;
}
?>