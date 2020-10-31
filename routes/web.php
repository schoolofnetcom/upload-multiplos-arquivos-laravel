<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload', 'upload');
Route::post('upload/store', function(Request $request){
    // dd($request->allFiles()['arquivo']);

    // for($i = 0; $i < count($request->allFiles()['arquivo']); $i++) {
    //     $request->allFiles()['arquivo'][$i]->store('uploads');
    // }

    for($i = 0; $i < count($request->file('arquivo')); $i++) {
        $request->file('arquivo')[$i]->store('upload-multiple');
    }
    // $request->file('arquivo')->store('uploads');
    return "arquivo enviado com sucesso";
})->name('upload');

Route::view('galleries/create', 'gallery.upload');
Route::post('galleries', [GalleryController::class, 'upload'])->name('gallery-upload');
Route::get('galleries', [GalleryController::class, 'index'])->name('galleries-list');
Route::get('galleries/{gallery}', [GalleryController::class, 'show'])->name('gallery-show');
