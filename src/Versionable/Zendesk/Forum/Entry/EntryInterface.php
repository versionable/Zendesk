<?php

namespace Versionable\Zendesk\Forum\Entry;

use Versionable\Zendesk\Forum\Entry\Post\CollectionInterface as PostCollectionInterface;

interface EntryInterface
{
    public function __construct($title);

    public function getId();

    public function setId($id);

    public function getForumId();

    public function setForumId($forum_id);

    public function getTitle();

    public function setTitle($title);

    public function getBody();

    public function setBody($body);
    
    public function getCreatedAt();

    public function setCreatedAt($created_at);

    public function getUpdatedAt();

    public function setUpdatedAt($updated_at);

    public function getHits();

    public function setHits($hits);

    public function getPosts();

    public function setPosts(PostCollectionInterface $posts);

    public function getIsLocked();

    public function setIsLocked($locked);

    public function getIsPinned();

    public function setIsPinned($pinned);

    public function getIsPublic();

    public function setIsPublic($public);

    public function getSubmitterId();

    public function setSubmitterId($submitter_id);
}