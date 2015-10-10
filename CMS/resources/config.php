<?php
$config = array(
    "db" => array(
            "dbname" => "todo_list",
            "username" => "root",
            "password" => "root",
            "host" => "localhost"
    ),
    "urls" => array(
        "baseUrl" => "http://example.com"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
