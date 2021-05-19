<?php
include_once("../DAO/TopicDao.php");

class TopicService
{
    public function addTopic(Topic $topic): void {
        (new TopicDAO())->addTopic($topic);
    }
}