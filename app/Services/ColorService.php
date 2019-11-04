<?php


namespace App\Services;
use App\Models\Color;

class ColorService
{
    public function getColor()
    {
        $colors = Color::all();
        return $colors;
    }
}
