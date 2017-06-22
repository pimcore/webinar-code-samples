<?php

return [
    1 => [
        "id" => 1,
        "name" => "staticroute_info",
        "pattern" => "@^/staticroute/info$@",
        "reverse" => "/staticroute/info",
        "module" => "AppBundle",
        "controller" => "Demo",
        "action" => "info",
        "variables" => NULL,
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1498108399,
        "modificationDate" => 1498109742
    ],
    2 => [
        "id" => 2,
        "name" => "staticroute_hello",
        "pattern" => "@^/staticroute/hello/(.*)$@",
        "reverse" => "/staticroute/hello/%name",
        "module" => "AppBundle",
        "controller" => "Demo",
        "action" => "hello",
        "variables" => "name",
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1498108399,
        "modificationDate" => 1498109722
    ],
    3 => [
        "id" => 3,
        "name" => "staticroute_request_info",
        "pattern" => "@^/staticroute/request-info$@",
        "reverse" => "/staticroute/request-info",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\DemoServiceController",
        "action" => "requestInfo",
        "variables" => NULL,
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1498111659,
        "modificationDate" => 1498111759
    ]
];
