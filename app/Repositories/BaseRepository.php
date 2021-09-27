<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function getByFilter(array $filter): Collection
    {
        return $this->model->where($filter)->get();
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }
}
