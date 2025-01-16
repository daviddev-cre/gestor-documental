<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'nameCompany',
        'nit',
        'numberEmployees',
        'address',
        'cellphone',
        'whatsapp',
        'legalRepresentative',
        'webSite',
        'typology_foreigner',
        'companyDescription',
        'contactEmail',
        'typePerson_foreigner',
        'sector_foreigner',
        'department_foreigner',
        'percent',
        'state'
    ];

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function department() : BelongsTo{
        return $this->belongsTo(Departments::class);
    }

    public function sector() : BelongsTo{
        return $this->belongsTo(Sector::class);
    }

    public function typology() : BelongsTo{
        return $this->belongsTo(Typologies::class);
    }

    public function pay() : HasMany{
        return $this->hasMany(Payment::class);
    }
}
