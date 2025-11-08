<?php
namespace App\Http\Controllers;
use App\Services\FuncionarioService;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    private $funcionarioService;
    public function __construct(FuncionarioService $funcionarioService){
        $this -> funcionarioService = $funcionarioServie;
    }
}
