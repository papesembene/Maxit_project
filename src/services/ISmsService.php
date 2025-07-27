<?php

namespace App\Services;
interface ISmsService
{
    public function sendCode(string $to, string $code): bool;
}