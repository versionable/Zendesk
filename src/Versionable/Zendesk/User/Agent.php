<?php

namespace Versionable\Zendesk\User;

class Agent extends User
{
    public function __construct()
    {
        $this->role = 4;
    }
}