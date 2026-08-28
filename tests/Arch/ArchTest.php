<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

arch('app code declares strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('app code leaves no debugging statements behind')
    ->expect(['dd', 'ddd', 'dump', 'var_dump', 'print_r', 'ray', 'die', 'exit'])
    ->not->toBeUsed();

arch('flux and livewire stay removed')
    ->expect(['Livewire', 'Flux'])
    ->not->toBeUsed();

arch('models extend eloquent')
    ->expect('App\Models')
    ->toExtend(Model::class);

arch('providers extend the service provider')
    ->expect('App\Providers')
    ->toExtend(ServiceProvider::class);

arch('controllers live in the controller namespace')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller');
