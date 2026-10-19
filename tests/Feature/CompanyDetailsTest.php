<?php

declare(strict_types=1);

test('every page identifies the company as registered', function (string $path): void {
    $response = $this->get($path);

    $response->assertSuccessful()
        ->assertSee('NewTech Builders, s.r.o.')
        ->assertSee('IČO 21811911')
        ->assertSee('Příčná 1892/4, Nové Město, 110 00 Praha 1')
        ->assertSee('Registered with the Municipal Court in Prague, section C, file 406331')
        ->assertDontSee('New Tech Builders');
})->with(['/', '/privacy', '/terms']);

test('homepage presents web platform work and the team', function (): void {
    $response = $this->get('/');

    $response->assertSuccessful()
        ->assertSee('Web Platforms &amp; Data Migration', escape: false)
        ->assertSee('Five things, done properly')
        ->assertSee('Anton Loginov')
        ->assertSee('Nadežda Jakúbková');
});

test('legal pages name the company with its identification number', function (string $path): void {
    $response = $this->get($path);

    $response->assertSuccessful()
        ->assertSee('NewTech Builders, s.r.o.')
        ->assertSee('Id. No. 21811911');
})->with(['/privacy', '/terms']);
