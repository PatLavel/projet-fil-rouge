<?php
session_start();
include_once("../Service/TopicService.php");
include_once("../View/CreationSujetView.php");

if (isset($_POST["poster"])) {
    $topic = (new Topic())->setTitre($_POST["title"])->setMessage($_POST["message"]);
    (new TopicService())->addTopic($topic);
}

displayTopicCreation();
