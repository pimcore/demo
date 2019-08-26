<?php 

return [
    1 => [
        "id" => 1,
        "name" => "Standard-Teaser",
        "group" => NULL,
        "module" => NULL,
        "controller" => NULL,
        "action" => NULL,
        "template" => "snippets/standard-teaser.html.twig",
        "type" => "snippet",
        "priority" => 0,
        "creationDate" => 1564046858,
        "modificationDate" => 1564046887
    ],
    2 => [
        "id" => 2,
        "name" => "Portal-Page",
        "group" => NULL,
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\ContentController",
        "action" => "portal",
        "template" => NULL,
        "type" => "page",
        "priority" => 0,
        "creationDate" => 1564393927,
        "modificationDate" => 1565780075
    ],
    3 => [
        "id" => 3,
        "name" => "Content-Page",
        "group" => NULL,
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\ContentController",
        "action" => "default",
        "template" => NULL,
        "type" => "page",
        "priority" => 0,
        "creationDate" => 1564393950,
        "modificationDate" => 1564393995
    ],
    4 => [
        "id" => 4,
        "name" => "Sidebar",
        "group" => NULL,
        "module" => NULL,
        "controller" => NULL,
        "action" => NULL,
        "template" => "includes/sidebar.html.twig",
        "type" => "snippet",
        "priority" => 0,
        "creationDate" => 1564394007,
        "modificationDate" => 1564394051
    ],
    5 => [
        "id" => 5,
        "name" => "Default Mail",
        "group" => "",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\DefaultController",
        "action" => "genericMail",
        "template" => NULL,
        "type" => "email",
        "priority" => 0,
        "creationDate" => 1564393950,
        "modificationDate" => 1566813069
    ],
    6 => [
        "id" => 6,
        "name" => "Newsletter",
        "group" => "",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\DefaultController",
        "action" => "genericMail",
        "template" => NULL,
        "type" => "newsletter",
        "priority" => 0,
        "creationDate" => 1566819624,
        "modificationDate" => 1566819657
    ]
];
