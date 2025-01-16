<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('nameCompany');
            $table->string('nit');
            $table->string('numberEmployees');
            $table->string('address');
            $table->string('cellphone');
            $table->string('whatsapp');
            $table->string('legalRepresentative');
            $table->string('webSite');
            $table->bigInteger('typology_foreigner'); // este toca mirar lo
            $table->text('companyDescription');
            $table->string('contactEmail');
            $table->bigInteger('typePerson_foreigner'); // este toca mirar lo
            $table->bigInteger('sector_foreigner'); // este toca mirar lo
            $table->bigInteger('department_foreigner'); // este toca mirar lo
            $table->string('percent');
            $table->boolean('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_companies');
    }
};
