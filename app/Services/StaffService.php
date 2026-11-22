<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface StaffService
{
    public function getAllStaff(): Collection;
}
