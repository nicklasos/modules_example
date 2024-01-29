<?php

use function Pest\Laravel\expectsEvents;

test('that true is true', function () {
    expect(true)->toBeTrue();
});
