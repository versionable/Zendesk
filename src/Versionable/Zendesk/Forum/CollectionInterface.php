<?php

namespace Versionable\Zendesk\Forum;

interface CollectionInterface
{
    public function add(ForumInterface $forum);

    public function remove($name);

    public function get($name);

    public function has($name);

    public function toArray();
}