<?php


namespace App\Services;
use App\Models\Color;

class ColorService
{
    public function getColor()
    {
        $colors = Color::where('status', '0')->get();
        return $colors;
    }
}
