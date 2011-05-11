<?php

namespace Versionable\Zendesk\Forum\Entry\Post;

interface PostInterface
{
    public function __construct($body);

    public function getId();

    public function setId($id);

    public function getForumId();

    public function setForumId($forum_id);

    public function getAccountId();

    public function setAccountId($account_id);

    public function getBody();

    public function setBody($body);
    
    public function getCreatedAt();

    public function setCreatedAt($created_at);

    public function getUpdatedAt();

    public function setUpdatedAt($updated_at);

    public function getEntryId();

    public function setEntryId($entry_id);

    public function getIsInformative();

    public function setIsInformative($informative);

    public function getUserId();

    public function setUserId($user_id);
}