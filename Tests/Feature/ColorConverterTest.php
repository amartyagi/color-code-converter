<?php

namespace AmarTyagi\ColorCodeConverter\Tests\Feature;

use AmarTyagi\ColorCodeConverter\Services\ColorCodeConverter;
use AmarTyagi\ColorCodeConverter\Tests\TestCase;

class ColorConverterTest extends TestCase
{
    public function test_a_basic_request()
    {
        $color_code = new ColorCodeConverter();
        $rgb_color = $color_code->convertHexToRgba('#d43533', .15);

        $this->assertEquals('rgba(37, 188, 241, 0.15)', $rgb_color);
    }
}