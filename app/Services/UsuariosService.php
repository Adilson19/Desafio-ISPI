<?php
    namespace App\Service;

    use App\Repositories\UsuariosRepository;
    use Illuminate\Support\Facades\DB;

    class UsuariosService
    {
        protected $usuariosRepository;

        public function __construct(
            UsuariosRepository $usuariosRepository
        ){
            $this->usuariosRepository = $usuariosRepository;
        }

        public function getInfoForIndexView()
        {
            $usuarios = $this->usuariosRepository->findAll();

            $title = "";
            $menu = "";

        }
    }
?>
