<?php

namespace Versionable\Zendesk\Tag;

interface TagInterface
{
    public function __construct($name);

    public function setName($name);

    public function getName();

    public function setId($id);

    public function getId();

    public function setCount($count);

    public function getCount();
}