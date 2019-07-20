<?php

namespace ApiRacer\Http\Controllers;

use Illuminate\Http\Request;
use ApiRacer\Models\Prova;
use ApiRacer\Http\Resources\ProvaResource;
use Symfony\Component\HttpFoundation\Response;

class ProvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProvaResource::collection(Prova::all())
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
        $dados = Prova::create($request->all());
        return (new ProvaResource($dados))
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
        $prova = Prova::find($id);
        return (new ProvaResource($prova))
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
        $prova = Prova::find($id);
        if($prova) {
            $prova->update($request->all());
            return (new ProvaResource($prova))
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
        $prova = Prova::find($id);
        if($prova) {
            $prova->delete();
            return (new ProvaResource($prova))
                ->response()
                ->setStatusCode(Response::HTTP_OK);
        }
    }
}
