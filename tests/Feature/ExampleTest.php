<?php

declare(strict_types=1);

test('homepage returns a successful response', function (): void {
    $response = $this->get('/');

    $response->assertOk();
});

test('privacy page returns a successful response', function (): void {
    $response = $this->get('/privacy');

    $response->assertOk();
});

test('terms page returns a successful response', function (): void {
    $response = $this->get('/terms');

    $response->assertOk();
});
