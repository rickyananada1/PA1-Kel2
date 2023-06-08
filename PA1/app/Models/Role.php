<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    // Hubungan dengan tabel permission_role
    

    // Hubungan dengan tabel users
    public function users()
{
    return $this->hasMany(User::class);
}

}