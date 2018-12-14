<?php
namespace LeoGalleguillos\Video\Model\Entity;

use DateTime;
use LeoGalleguillos\Video\Model\Entity as VideoEntity;
use LeoGalleguillos\User\Model\Entity as UserEntity;

class Video
{
    protected $businessId;
    protected $created;
    protected $rru;
    protected $taskStatusEntity;
    protected $title;
    protected $userId;
    protected $views;

    public function getBusinessId() : int
    {
        return $this->businessId;
    }

    public function getCreated() : DateTime
    {
        return $this->created;
    }

    public function getRootRelativeUrl(): string
    {
        return $this->rootRelativeUrl;
    }

    public function getVideoId() : int
    {
        return $this->taskId;
    }

    public function getVideoStatusEntity() : VideoEntity\VideoStatus
    {
        return $this->taskStatusEntity;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getUserEntity() : UserEntity\User
    {
        return $this->userEntity;
    }

    public function getUserId() : int
    {
        return $this->userId;
    }

    public function getViews() : int
    {
        return $this->views;
    }

    public function setBusinessId(int $businessId) : VideoEntity\Video
    {
        $this->businessId = $businessId;
        return $this;
    }

    public function setCreated(DateTime $created) : VideoEntity\Video
    {
        $this->created = $created;
        return $this;
    }

    public function setName(string $name) : VideoEntity\Video
    {
        $this->name = $name;
        return $this;
    }

    public function setRootRelativeUrl(string $rootRelativeUrl): VideoEntity\Video
    {
        $this->rootRelativeUrl = $rootRelativeUrl;
        return $this;
    }

    public function setVideoId(int $taskId) : VideoEntity\Video
    {
        $this->taskId = $taskId;
        return $this;
    }

    public function setVideoStatusEntity(
        VideoEntity\VideoStatus $taskStatusEntity
    ) : VideoEntity\Video {
        $this->taskStatusEntity = $taskStatusEntity;
        return $this;
    }

    public function setTitle(string $title): VideoEntity\Video
    {
        $this->title = $title;
        return $this;
    }

    public function setUserEntity(UserEntity\User $userEntity) : VideoEntity\Video
    {
        $this->userEntity = $userEntity;
        return $this;
    }

    public function setUserId(int $userId) : VideoEntity\Video
    {
        $this->userId = $userId;
        return $this;
    }

    public function setViews(int $views) : VideoEntity\Video
    {
        $this->views = $views;
        return $this;
    }
}
