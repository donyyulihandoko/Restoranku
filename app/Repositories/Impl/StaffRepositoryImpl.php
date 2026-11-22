<?php

namespace App\Repositories\Impl;

use App\Models\User;
use App\Repositories\StaffRespository;
use Illuminate\Database\Eloquent\Collection;
use Override;

class StaffRepositoryImpl implements StaffRespository
{
    #[Override]
    public function getUsers(): Collection
    {
        return User::all();
    }
}
