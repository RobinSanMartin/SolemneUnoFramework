<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignProductRequest;
use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('products.index')->with(compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nombre = 'PRODUCTO 1';
        $codigo = 'CODIGO 1';
        $precioventa = '$200.00';
        $cantidad = '150';
        $descripcion = 'DESCRIPCION 1';
        $sucursal = 'SUCURSAL VICTORIA';
        $categoria = 'CATEGORIA 1';
        return view('products.show')->with(compact('nombre','codigo','precioventa','cantidad','descripcion','sucursal','categoria'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nombre = 'PRODUCTO 1';
        $codigo = 'CODIGO 1';
        $precioventa = '$200.00';
        $cantidad = '150';
        $descripcion = 'DESCRIPCION 1';
        $sucursal = 'SUCURSAL VICTORIA';
        $categoria = 'CATEGORIA 1';
        return view('products.edit')->with(compact('nombre','codigo','precioventa','cantidad','descripcion','sucursal','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssignProductRequest $request, $id)
    {
        $input = $request->all();
        dd($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Registro Eliminado' , 'El registro ' . $id . ' fue eliminado exitosamente');
        return redirect('/products');
    }
}
