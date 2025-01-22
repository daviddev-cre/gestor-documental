<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Document;

class Module extends Model
{
    use HasFactory;

    protected $fillable= [
        'colorModule',
        'moduleName',
        'description',
        'icon'
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class, 'idModule');
    }
}
