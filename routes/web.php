<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\companyReviewController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\TwoFAController;
use App\Http\Middleware\Check2fa;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\TypePersonController;
use App\Http\Controllers\TypologiesController;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Departments;
use App\Models\Typologies;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use App\Mail\ComunicadoEmail;
use App\Mail\infoAdminCustomerEmail;
use App\Models\companyReview;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/reviewRegister', [AuthController::class, 'reviewRegister'])->name('reviewRegister')->middleware('role:admin');

Route::get('/email/verify', function () {
   return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/enviarEmailUsuario', function(Request $request){
    try{
        $email = $request->input('companyEmail');
        $message = $request->input('descriptionEmail');
        Mail::to($email)->send(new infoAdminCustomerEmail());
        return response()->json(['message' => 'Email enviado']);
    }catch(\Exception $eExeption){
        return response()->json(['message' => $eExeption->getMessage() ], 500);
    }

})->name('enviarEmailUsuario');

Route::post('/enviar-comunicado', function(Request $request) {
    $asunto = $request->input('asunto');
    $mensaje = $request->input('mensaje');
    $email = $request->input('email');
    $nombre = $request->input('nombre');

    try {
        Mail::to($email)->send(new ComunicadoEmail($asunto, $mensaje, $nombre));
        return response()->json(['message' => 'Correo enviado con éxito']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al enviar el correo', 'error' => $e->getMessage()], 500);
    }
})->middleware('role:admin');


Route::controller(TwoFAController::class)->group(function(){
    Route::get('two-factor-authentication', 'index')->name('2fa.index')->middleware(['auth','Check2Fa']);
    Route::post('two-factor-authentication/store', 'store')->name('2fa.store')->middleware(['auth','Check2Fa']);
    Route::get('two-factor-authentication/resend', 'resend')->name('2fa.resend')->middleware(['auth','Check2Fa']);
});

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::middleware(['auth','role:admin'])->group(function() {
    Route::put('/actualizacion/{id}', [AuthController::class, 'update'])->name('actualizacion.update');
});

Route::get('/user', function(){
   $id = Session::get('idUser');
   $Company = DB::table('companies')
   ->where('userId',$id)
   ->first();
   $Departments = Departments::all();
   $Typologies = Typologies::all();
   return view('auth.user', compact('Company','Departments','Typologies'));
})->middleware(['auth'])->name('user');

Route::get('/review', function(){
    return view('auth.review');
})->middleware(['auth'])->name('review');

Route::get('/admin', function(){
    $Companies = Company::all();
    $Typologies = Typologies::all();
    $Departments = Departments::all();
    $Reviews = User::whereIn('position',['administrador','revisor'])->get();
    $CompanyReviews = companyReview::all();
    return view('auth.admin', compact('Companies', 'Typologies', 'Departments', 'Reviews','CompanyReviews'));
})->middleware(['auth'])->name('admin');


Route::middleware(['auth'])->group(function () {  // falta auth:api
    Route::get('/compañias',[CompanyController::class, 'index'])->name('compañias.index');
    Route::post('/compañias',[CompanyController::class,'store'])->name('compañias.store');
    Route::get('/compañias/{id}',[CompanyController::class, 'show'])->name('compañias.show');
    Route::put('/compañias/{id}',[CompanyController::class, 'update'])->name('compañias.update');
    Route::delete('/compañias/{id}',[CompanyController::class , 'destroy'])->name('compañias.destroy');
});

//Route::resource('/department', DepartmentsController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/departamentos',[DepartmentsController::class, 'index'])->name('departamentos.index');
    Route::post('/departamentos', [DepartmentsController::class, 'store'])->name('departamentos.store');
    Route::get('/departamentos/{id}',[DepartmentsController::class, 'show'])->name('departamentos.show');
    Route::put('/departamentos/{id}', [DepartmentsController::class , 'update'])->name('departamentos.update');
    Route::delete('/departamentos/{id}',[CompanyController::class , 'destroy'])->name('departamentos.delete');
});
//Route::resource('/sector', SectorController::class);
Route::middleware(['auth'])->group(function(){
    Route::get('/sectores', [SectorController::class , 'index'])->name('sectores.index');
    Route::post('/sectores', [SectorController::class, 'store'])->name('sectores.store');
    Route::get('/sectores/{id}', [SectorController::class, 'show'])->name('sectores.show');
    Route::put('/sectores/{id}', [SectorController::class, 'update'])->name('sectores.update');
    Route::delete('/sectores/{id}', [SectorController::class , 'destroy'])->name('sectores.destroy');
});
//Route::resource('/typePerson', TypePersonController::class);
Route::middleware(['auth'])->group(function(){
    Route::get('/personas', [TypePersonController::class, 'index'])->name('personas.index');
    Route::post('/personas', [TypePersonController::class, 'store'])->name('personas.store');
    Route::get('/personas/{id}', [TypePersonController::class, 'show'])->name('personas.show');
    Route::put('/personas/{id}', [TypePersonController::class, 'update'])->name('personas.update');
    Route::delete('/personas/{id}', [TypePersonController::class, 'destroy'])->name('personas.destroy');
});
//Route::resource('/typology', TypologiesController::class);
Route::middleware(['auth'])->group(function(){
    Route::get('/topologia' , [TypologiesController::class , 'index'])->name('topologia.index');
    Route::post('/topologia', [TypologiesController::class , 'store'])->name('topologia.store');
    Route::get('/topologia/{id}', [TypologiesController::class , 'show'])->name('topologia.show');
    Route::put('/topologia/{id}', [TypologiesController::class, 'update'])->name('topologia.update');
    Route::delete('/topologia/{id}', [TypologiesController::class , 'destroy'])->name('topologia.destroy');
});

Route::middleware(['auth'])->group(function(){
    Route::put('/revisorCompania/{id}', [companyReviewController::class, 'update'])->name('revisorCompania.update');
    Route::put('/updateReviewForCompany/{id}',[companyReviewController::class,'updateReviewForCompany'])->name('updateReviewForCompany.update');
});
