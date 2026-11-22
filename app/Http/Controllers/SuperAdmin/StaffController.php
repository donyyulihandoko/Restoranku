<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Services\StaffService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaffController extends Controller
{
    public function __construct(private StaffService $staffService)
    {
        // 
    }

    public function index(): Response
    {
        return response()->view('super-admin.staff.index', [
            'staff' => $this->staffService->getAllStaff()
        ]);
    }
}
