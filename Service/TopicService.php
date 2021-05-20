<?php
include_once("../DAO/TopicDao.php");

class TopicService
{
    public function addTopic(Topic $topic): void
    {
        (new TopicDAO())->addTopic($topic);
    }

    public function displayTopic(): array
    {
        $data = (new TopicDAO())->displayTopic();
        return $data;
    }
}
