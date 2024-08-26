<?php 

use Codecourse\Repositories\UserRepository as UserRepository;
use Codecourse\Filters\TestFilter as TestFilter;
use Codecourse\Middleware\AuthMiddleware as AuthMiddleware;

require_once "app/start.php";

$AuthMiddleware = new AuthMiddleware(
    new TestFilter(
        new UserRepository(
            "Shubham", 
            "https://www.geeksforgeeks.org/how-to-create-an-object-without-class-in-php/"
        ), 
        "MailFilter"
    ), 
    "AuthMiddleware",
    new UserRepository(
        "Aman", 
        "https://www.youtube.com/results?search_query=psr+4+autoloading"
    )
);

//echo "<pre>";
echo json_encode($AuthMiddleware);

?>