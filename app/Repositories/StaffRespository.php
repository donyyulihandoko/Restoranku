<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface StaffRespository
{
    public function getUsers(): Collection;
}
