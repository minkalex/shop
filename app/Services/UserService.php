<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function foo($bar)
    {
        dump($bar);
    }
}
