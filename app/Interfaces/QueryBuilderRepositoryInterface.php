<?php

namespace App\Interfaces;

interface QueryBuilderRepositoryInterface
{
    public function paginateWhere(array $data, int $numberItem);
    public function findWhere(array $data);
}
