<?php

declare(strict_types=1);

use ewebsolutions\ManageTranslation\ManageTranslation;

it('resolves the singleton', function () {
    expect(app(ManageTranslation::class))->toBeInstanceOf(ManageTranslation::class);
});

it('returns the same instance from the container', function () {
    expect(app(ManageTranslation::class))->toBe(app(ManageTranslation::class));
});

it('merges the package config', function () {
    expect(config('manage-translation.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('manage-translation::messages.placeholder'))->toBe('ManageTranslation placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('manage-translation::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('manage-translation:placeholder')
        ->expectsOutputToContain('ManageTranslation placeholder command executed.')
        ->assertSuccessful();
});
