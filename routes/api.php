<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardsController;
use App\Http\Controllers\ThreadsController;
use App\Http\Controllers\ThreadsDetailsController;
use App\Http\Controllers\UpdatesArchiveController;
use App\Http\Controllers\RandomImageController;
use App\Http\Controllers\ThreadsTypesController;
/*
|----------------------------------------------------------------------------------
| API Routes
|----------------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* ---------------------------------- Method GET/POST/DELETE STATUS : NOT_USED -------------------------------------- */

/*------------API SHOW DATA-OUTPUT------------------------------------------------*/
/*Route::post('/register',[AuthController::class,'register']);*/  /*-!Register!-*/ 

/*Route::get('/name', [UserController::class,'index']);
Route::get('/name/{id}', [UserController::class,'show']);

Route::get('/boards', [BoardsController::class,'index']);
Route::get('/boards/{id}', [BoardsController::class,'show']);

Route::get('/threads', [ThreadsController::class,'index']);
Route::get('/threads/{id}', [ThreadsController::class,'show']);

Route::get('/threadsdetails', [ThreadsDetailsController::class,'index']);
Route::get('/threadsdetails/{id}', [ThreadsDetailsController::class,'show']);

Route::get('/threadstypes', [ThreadsTypesController::class,'index']);
Route::get('/threadstypes/{id}', [ThreadsTypesController::class,'show']);
Route::post('/boards',[BoardsController::class,'store']);  */

/* ------------API-CURD Routes ----------------------------------------------------*/
/*Route::group(['middleware' => ['auth:sanctum']],function (){ /*-!CURD Group Middleware!-*/ 
//});

/*
    Route::post('/boards',[BoardsController::class,'store']);
    Route::put('/boards/{id}',[BoardsController::class,'update']);
    Route::delete('/boards/{id}',[BoardsController::class,'destroy']);

    Route::post('/threads',[ThreadsController::class,'store']);
    Route::put('/threads/{id}',[ThreadsController::class,'update']);
    Route::delete('/threads/{id}',[ThreadsController::class,'destroy']);

    Route::post('/threadsdetails',[ThreadsDetailsController::class,'store']);
    Route::put('/threadsdetails/{id}',[ThreadsDetailsController::class,'update']);
    Route::delete('/threadsdetails/{id}',[ThreadsDetailsController::class,'destroy']);

    Route::post('/threadstypes',[ThreadsTypesController::class,'store']);
    Route::put('/threadstypes/{id}',[ThreadsTypesController::class,'update']);
    Route::delete('/threadstypes/{id}',[ThreadsTypesController::class,'destroy']);

    Route::post('/name',[UserController::class,'store']);
    Route::put('/name/{id}',[UserController::class,'update']);
    Route::delete('/name/{id}',[UserController::class,'destroy']);
    
    Route::post('/logout',[AuthController::class,'logout']); */ /*-Logout!-*/ 
/*---------------------------------------------------------------------------------*/ 

/*---------------------------------------------------------------------------------*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
/*---------------------------------------------------------------------------------*/ 

/* ---------------------------------- Method GET/POST/DELETE STATUS : NOT_USED -------------------------------------- */

/* ---------------------------------- Method Resource STATUS : USED ------------------------------------------------- */

Route::resource('/register', AuthController::class);
Route::resource('/boards', BoardsController::class);
Route::resource('/threads', ThreadsController::class);
Route::resource('/threadsdetails', ThreadsDetailsController::class);
Route::resource('/threadstypes', ThreadsTypesController::class);
Route::resource('/randomsimages', RandomImageController::class);
Route::resource('/updatesarchives', UpdatesArchiveController::class);
Route::get('/updatesindex', [UpdatesArchiveController::class,'showInHome']);
Route::get('/randomsindex', [RandomImageController::class,'showRandom']);


Route::get('/bugs', [ThreadsController::class,'showB']);
Route::get('/creatives', [ThreadsController::class,'showCR']);
Route::get('/generals', [ThreadsController::class,'showGD']);
Route::get('/ideas', [ThreadsController::class,'showI']);
Route::get('/mods', [ThreadsController::class,'showM']);
Route::get('/offtopics', [ThreadsController::class,'showO']);
Route::get('/stories', [ThreadsController::class,'showS']);
Route::get('/supoorts', [ThreadsController::class,'showSP']);
Route::get('/videos', [ThreadsController::class,'showV']);


Route::get('/d/bugs', [ThreadsDetailsController::class,'showDB']);
Route::get('/d/creatives', [ThreadsDetailsController::class,'showDCR']);
Route::get('/d/generals', [ThreadsDetailsController::class,'showDGD']);
Route::get('/d/ideas', [ThreadsDetailsController::class,'showDI']);
Route::get('/d/Mods', [ThreadsDetailsController::class,'showDM']);
Route::get('/d/offtopics', [ThreadsDetailsController::class,'showDO']);
Route::get('/d/stories', [ThreadsDetailsController::class,'showDS']);
Route::get('/d/supoorts', [ThreadsDetailsController::class,'showDSP']);
Route::get('/d/videos', [ThreadsDetailsController::class,'showDV']);

/* ---------------------------------- Method Resource STATUS : USED ------------------------------------------------- */