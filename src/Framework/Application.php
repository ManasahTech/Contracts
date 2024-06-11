<?php

namespace ManasahTech\Contracts\Framework;


interface Application
{
    public static function create();
    public function run();
}