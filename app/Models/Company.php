<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'boss_full_name',
        'addres',
        'email',
        'company_site',
        'phone_number',
    ];


    public function companyUsers(){
        return $this->hasMany(CompanyUser::class);
    }
}