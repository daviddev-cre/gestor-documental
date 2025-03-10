<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sector extends Model
{
    use HasFactory;

    protected $fillable=[
        'sectorName',
        'ModulesSector'
    ];

    public function company() : BelongsTo{
        return $this->belongsTo(Company::class);
    }
}
