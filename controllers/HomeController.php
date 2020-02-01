<?php

require_once (__DIR__.'/../model/UsersModelRepository.php');

class HomeController
{
    public function Display ()
    {
        $usersModelRepository = new UsersModelRepository();
        $user = $usersModelRepository->findOneById(1);

        return $user->getFirstName(); 
    }
} 