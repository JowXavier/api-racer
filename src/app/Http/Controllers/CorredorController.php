<?php

namespace ApiRacer\Http\Controllers;

use Illuminate\Http\Request;
use ApiRacer\Models\Corredor;
use ApiRacer\Http\Resources\CorredorResource;
use Symfony\Component\HttpFoundation\Response;

class CorredorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CorredorResource::collection(Corredor::orderBy('data_nascimento')->get())
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = Corredor::create($request->all());
        return (new CorredorResource($dados))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $corredor = Corredor::find($id);
        return (new CorredorResource($corredor))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $corredor = Corredor::find($id);
        if($corredor) {
            $corredor->update($request->all());
            return (new CorredorResource($corredor))
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $corredor = Corredor::find($id);
        if($corredor) {
            $corredor->delete();
            return (new CorredorResource($corredor))
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function provas(Request $request)
    {
        $corredor = Corredor::find($request->id_corredor);
        $dados = $corredor->provas();
        $dados->attach($request->provas);

        return (new CorredorResource($dados->get()))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resultados(Request $request)
    {
        $corredor = Corredor::find($request->id_corredor);
        $dados = $corredor->resultados();
        $dados->attach($request->id_prova, [
            'hora_inicio' => $request->hora_inicio,
            'hora_fim' => $request->hora_fim
        ]);

        return (new CorredorResource($dados->get()))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }
}
