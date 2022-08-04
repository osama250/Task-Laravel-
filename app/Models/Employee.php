<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'password','image', 'company_id' , 'adress' , 'logo'];

    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
