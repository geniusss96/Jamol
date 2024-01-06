<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //table companies
    protected $table = 'my_companies';

    //id
    protected $primaryKey = 'company_id';

    //incrementing
    public $incrementing = false;

    //timestamps
    public $timestamps = false;

    //default values
    protected $attributes = [
        'active' => true
    ];
}
