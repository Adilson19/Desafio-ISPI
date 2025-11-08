<?php
    namespace App\Http\Controllers;
    use App\Services\CidadeService;
    use Illuminate\Http\Request;

    class ProdutoController extends Controller
    {
        private $cidadeService;
        public function __construct(CidadeService $cidadeService)
        {
            $this -> cidadeService = $cidadeService;
        }
    }
