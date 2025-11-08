<?php
    namespace App\Http\Controllers;
    use App\Services\CarroService;
    use Illuminate\Http\Request;
    class CarroController extends Controller
    {
        private $carroService;
        public function __construct(CarroService $carroService)
        {
            $this -> carroService = $carroService;
        }
    }
