<?php

use App\Repositories\StaffRespository;
use Database\Seeders\UserSeeder;

test('test service container not null', function(){
    $userRepository = app(StaffRespository::class);
    $this->assertNotNull($userRepository);
});

it('test get users', function(){
    $this->seed([UserSeeder::class]);
    $userRepository = app(StaffRespository::class);
    $users = $userRepository->getUsers();
    $this->assertNotNull($users);
    $this->assertNotEmpty($users);
    $this->assertEquals(4, $users->count());
});



