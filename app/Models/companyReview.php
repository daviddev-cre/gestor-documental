<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'idReview',
        'idCompany'
    ];
}
