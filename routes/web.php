<?php

declare(strict_types=1);

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): Factory|View => view('home'))->name('home');
Route::get('/privacy', fn (): Factory|View => view('privacy'))->name('privacy');
Route::get('/terms', fn (): Factory|View => view('terms'))->name('terms');
