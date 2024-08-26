<?php

namespace Codecourse\Repositories;

class UserRepository {

    public $repo;
    public $repoUrl;
    
    public function __construct($repo, $repoUrl) {
        $this->repo =  $repo;
        $this->repoUrl = $repoUrl;
    }
}

?>