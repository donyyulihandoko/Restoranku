<?php

namespace App\Services\Impl;

use App\Repositories\StaffRespository;
use App\Services\StaffService;
use Illuminate\Database\Eloquent\Collection;
use Override;

class StaffServiceImpl implements StaffService
{
    public function __construct(private StaffRespository $staffRespository)
    {
        // 
    }

    #[Override]
    public function getAllStaff(): Collection
    {
        return $this->staffRespository->getUsers();
    }


}
