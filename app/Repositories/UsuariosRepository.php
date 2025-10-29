<?php
    namespace App\Repositories;

    use App\Interfaces\CRUDInterface;
    use App\Models\Usuarios;

    class UsuariosRepository implements CRUDInterface
    {
        protected $model;

        public function __construct(Usuarios $usuarios)
        {
            $this->model = $usuarios;
        }

        public function findAll()
        {
            return $this->model->all();
        }

        public function findOrFail(string $id)
        {
            return $this->model->findOrFail($id);
        }

        public function create(array $data)
        {
            return $this->model->create($data);
        }

        public function update(array $data, string $id)
        {
            $this->model->findOrFail($id)->update($data);
        }

        public function delete(string $id)
        {
            $this->model->findOrFail($id)->delete();
        }
    }

?>
