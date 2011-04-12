<?php

namespace Versionable\Zendesk\Organization;

interface OrganizationInterface
{
    public function __construct($name = null);
    
    public function getName();

    public function setName($name);
}