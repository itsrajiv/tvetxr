<?php

use App\Http\Livewire\MyClassWire;
use App\Http\Livewire\User\UserWire;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Course\CourseWire;

use App\Http\Controllers\SearchController;
use App\Http\Livewire\ClassRoom\ClassRoomWire;
use App\Http\Livewire\CourseFile\CourseFileWire;


use App\Http\Livewire\ClassCourse\ClassCourseWire;
use App\Http\Livewire\UploadServer\UploadServerWire;
use App\Http\Livewire\PaidResources\PaidResourcesWire;
use App\Http\Livewire\ClassRoomResources\ClassRoomResourcesWire;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(auth()->user()){
        return redirect('home');
    }
    else{
        return view('landing');
    }
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Laravel Livewire Route
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware('auth')->group(function () {
	
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    
    Route::get('/user',	UserWire::class);

    Route::get('/course',	CourseWire::class);
    Route::get('/coursefile',	CourseFileWire::class);
    
    Route::get('/class',	ClassRoomWire::class);
    Route::get('/classcourse',	ClassCourseWire::class);

    Route::get('/myclass',	MyClassWire::class);

    Route::get('/classresources', ClassRoomResourcesWire::class);

    Route::get('/uploadserver', UploadServerWire::class);

    Route::get('/paidresources', PaidResourcesWire::class);
    
    // Route::get('/','App\Http\Controllers\SearchController@index');
    // Route::get('/search','App\Http\Controllers\SearchController@search');
       
    // Route::get('search', [App\Http\Controllers\AutoCompleteController::class, 'index'])->name('search');
    // Route::get('autocomplete', [App\Http\Controllers\AutoCompleteController::class, 'autocomplete'])->name('autocomplete');

});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Video 360 and 3D Model route
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware('auth')->group(function () {

    Route::get('/minecraft', function() {
        return view('minecraft_demo.index');
    })->name('minecraft_demo');

    Route::get('/video_360/{videoId}', function($videoId) {
        $video = App\Models\CourseFile::find($videoId);

        return view('video_360.index', [
            'videoSrc' => $video,
            'type' => 'local'
        ]);
    })->name('video_360');

    Route::get('/3d_model_view/{modelId}', function($modelId) {
        $model = App\Models\CourseFile::find($modelId);

        return view('3d_model_view.index', [
            'modelSrc' => $model ,
            // 'type' => 'local'
        ]);

    })->name('3d_model_view');

    Route::get('/ar_view/{modelId}', function($modelId) {
        $model = App\Models\CourseFile::find($modelId);

        return view('ar_view.index', [
            'modelSrc' => $model ,
            // 'type' => 'local'
        ]);

    })->name('ar_view');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Video 360 and 3D Model IPFS route
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/video_360_ipfs/{videoId}', function($videoId) {
        $video = App\Models\IpfsResources::find($videoId);

        return view('video_360.index', [
            'videoSrc' => $video,
            'type' => 'ipfs'
        ]);
    })->name('video_360_ipfs');

    Route::get('/3d_model_view_ipfs/{modelId}', function($modelId) {
        $model = App\Models\IpfsResources::find($modelId);

        return view('3d_model_view_ipfs.index', [
            'modelSrc' => $model ,
            // 'type' => 'ipfs'
        ]);

    })->name('3d_model_view_ipfs');

    Route::get('/ar_view_ipfs/{modelId}', function($modelId) {
        $model = App\Models\IpfsResources::find($modelId);

        return view('ar_view_ipfs.index', [
            'modelSrc' => $model ,
            // 'type' => 'ipfs'
        ]);

    })->name('ar_view_ipfs');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/changeclassto/{classId}', function($classId) {
        $class = App\Models\Team::find($classId);

        $user = App\Models\User::find(auth()->user()->id);
        $user->current_team_id = $class->id;
        $user->save();

        return redirect('dashboard');

    });


});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
