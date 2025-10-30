<?php

namespace App\Http\Controllers;
use App\Services\UsuariosService;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
    private $usuariosService;

    public function __construct(UsuariosService $usuariosService){
        $this -> usuariosService = $usuariosService;
    }

    public function index()
    {
        $infoForView = $this -> usuariosService - getInfoForIndexView();

        return view('usuarios.index', $infoForView);
    }

    public function create()
    {
        $infoForView = $this -> usuariosService -> getInfoForCreate();
    }

    public function store(UsuariosService $usuariosService)
    {
        $response = $this -> usuariosService -> store($usuariosService);
        if($response){
            return back() -> with('success', 'feito com sucesso');
        }
        return back()->with('error', 'falha ao salvar');
    }

    public function show(string $id)
    {
        $infoForView = $this -> usuariosService -> getInfoForShowView($id);

        return view('usuarios.show', $infoForView);
    }

    public function edit()
    {
        $infoForView = $this->usuariosService->getInfoForShowView($id);

        return view('usuarios.edit', $infoForView);
    }

    public function update(usuariosService $usuariosService)
    {
        $response = $this -> usuariosService -> update($usuariosService -> all(), $id);
        if($response){
            return back()->with('success', 'feito com sucesso');
        }
        return back()->with('error', 'nao foi possivel');
    }

    public function destroy(string $id)
    {
        $response = $this -> usuariosService -> destroy($id);
        if($response){
            return back() -> with('sucess', 'feito com sucesso');
        }
        return back()->with('error', 'nao foi possivel');
    }
}
