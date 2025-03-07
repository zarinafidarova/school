<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
}
?>