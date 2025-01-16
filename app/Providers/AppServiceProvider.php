<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Laravel\Passport\Passport;
use App\Models\Company;
use App\Models\companyReview;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            $id = $notifiable['id'];
            $company = new Company();
            $company['userId'] = $id;
            $company['nameCompany'] = 'Nombre de la empresa';
            $company['nit'] = 'Nit de la empresa';
            $company['numberEmployees'] = 0;
            $company['address'] = 'Dirección de tu empresa';
            $company['cellphone'] = 0000000000;
            $company['whatsapp'] = 0000000000;
            $company['legalRepresentative'] = 'Representante legal';
            $company['webSite'] = 'Url de tu sitio web';
            $company['typology_foreigner'] = 1;
            $company['companyDescription'] = 'Descripción pequeña de tu empresa';
            $company['contactEmail'] = 'Email de tu empresa';
            $company['typePerson_foreigner'] = 1;
            $company['sector_foreigner'] = 1;
            $company['department_foreigner'] = 1;
            $company['percent'] = 0;
            $company['state'] = 1;
            $company->save();
            $idCompany = $company->id;
            $CompanyReview = new companyReview();
            $CompanyReview['idReview'] = 1;
            $CompanyReview['idCompany'] = $idCompany;
            $CompanyReview->save();
            return (new MailMessage)->view('Mail.Auth2FEmailVerify',['url' => $url]);
        });

        Passport::enablePasswordGrant();
        passport::tokensExpireIn(now()->addDays(15));
    }
}
