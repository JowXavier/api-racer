<?php

namespace ApiRacer\Http\Controllers;

use ApiRacer\Models\Corredor;
use ApiRacer\Http\Resources\ListagemResource;
use Symfony\Component\HttpFoundation\Response;

class ListagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provasIdade()
    {
        $corredores = Corredor::with('resultados')->get();
        return (new ListagemResource($corredores))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provasGerais()
    {
        $corredores = Corredor::with('resultados')->get();
        return (new ListagemResource($corredores))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }
}
