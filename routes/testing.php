<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\TransactionController;
use App\Models\User;

Route::get('/create_user', function () {
    $payload = [
        'name' => 'John Doe',
        'email' => 'johndoe@gmail.com',
        'password' => 'password',
        'email_verified_at' => now(),
    ];
    User::create($payload);
});

Route::get('/json', function () {
    $json_students = file_get_contents(storage_path('data/students.json'));
    $array_students = json_decode($json_students,true);
    $students = collect($array_students);


    $students = $students->groupBy('gender')->map(function ($group) {
        return $group->count();
    });
    

    return [
        'group_by' => $students,
        
    ];    
});

