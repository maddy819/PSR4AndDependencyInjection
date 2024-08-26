<?php

namespace Codecourse\Filters;

use Codecourse\Repositories\UserRepository;

class TestFilter {

    public UserRepository $repository;
    public $filter;
    
    public function __construct(UserRepository $repository, $filter) {
        $this->repository = $repository;
        $this->filter = $filter;
    }
}

?>