<?php
namespace App\Interfaces;

use Illuminate\Database\Eloquent\Colletion;
use Illuminate\Database\Elquent\Model;

interface CarroRepositoryInterface
{
    public function findAll(): Collection;
    public function paginate(int $number_item);
    public function findOrFail(int $id): Model;
    public function store(array $data): Model;
    public function update(array $data, int $id): void;
    public function delete(int $id): void;
    public function updateWhere(array $data_where, array $data_update): void;
    public function deleteWhere(array $data_where): void;
}
