<?php

namespace Versionable\Zendesk\Forum\Entry\Post;

interface CollectionInterface
{
    public function add(PostInterface $post);

    public function remove($name);

    public function get($name);

    public function has($name);

    public function toArray();
}