<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailCode;
use App\Models\UserEmailCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\HasOne;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position',
        'IdUser',
        'professionalCard',
        'address',
        'cellphone',
        'whatsapp',
        'state'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userEmailCode(): HasOne{
        return $this->hasOne(UserEmailCode::class);
    }

    public function company() : HasOne{
        return $this->hasOne(Company::class);
    }

    public function generateCode(){
        try{
            $code = rand(100000, 999999);
            $sendEmail = UserEmailCode::updateOrCreate(
                ['user_id' => Auth::id()],
                ['code' => $code]
            );
            User::where(['id'=> Auth::id()])->update(['user_code'=> $sendEmail['id']]);
            Mail::to(Auth::user()['email'])->send(new SendEmailCode($sendEmail));
            return $this->hasOne(User::class, 'user_code', 'id');;  
        }catch(Exception $e){
            info ('Error : '. $e->getMessage());
        }
    }
}
