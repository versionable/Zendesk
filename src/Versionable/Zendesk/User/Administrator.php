<?php

namespace Versionable\Zendesk\User;

class Administrator extends User
{
    public function __construct()
    {
        $this->role = 2;
    }
}