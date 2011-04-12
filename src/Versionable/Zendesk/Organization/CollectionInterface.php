<?php

namespace Versionable\Zendesk\Organization;

interface CollectionInterface
{
    public function add(OrganizationInterface $tag);

    public function remove($name);

    public function get($name);

    public function has($name);

    public function toArray();
}