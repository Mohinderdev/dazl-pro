<?php

namespace App\Core\Repositories\Interfaces;

interface BaseRepositoryInterface
{
  public function create(array $attributes);

  public function update(array $attributes): bool;

  public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');

  public function find($id);

  public function findOrFail($id);

  public function findOneByOrFail(array $data);

  public function delete(): bool;
}
