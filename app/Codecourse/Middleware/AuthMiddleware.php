<?php

namespace Codecourse\Middleware;

use Codecourse\Filters\TestFilter;
use Codecourse\Repositories\UserRepository;

class AuthMiddleware {

    public TestFilter $filter;
    public UserRepository $repository;
    public $middleware;
    
    public function __construct(TestFilter $TestFilter, $middleware, UserRepository $repository) {
        $this->filter = $TestFilter;
        $this->middleware = $middleware;
        $this->repository = $repository;
    }
}

?>