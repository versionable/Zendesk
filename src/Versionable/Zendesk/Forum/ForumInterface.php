<?php

namespace Versionable\Zendesk\Forum;

use Versionable\Zendesk\Forum\Entry\CollectionInterface as EntryCollectionInterface;

interface ForumInterface
{
    public function __construct($name);

    public function setName($name);

    public function getName();

    public function setId($id);

    public function getId();

    public function setDescription($description);

    public function getDescription();

    public function setIsLocked($status);

    public function getIsLocked();

    public function setIsPublic($status);

    public function getIsPublic();

    public function setEntries(EntryCollectionInterface $entries);

    public function getEntries();

    public function setVisibility($visibility);

    public function getVisibility();
}