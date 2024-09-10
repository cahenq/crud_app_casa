<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products         = Product::orderBy('created_at', 'desc')->get();
        return view('ListarProdutos')
                ->with('products', $products);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna apenas a minha view
        return view('CadastrarProduto');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui é que a mágica acontece!!😎😎

        $request->validate([
            'nome_produto'          => 'required',
            'marca'                 => 'required',
            'categoria'             => 'required',
            'valor_compra'          => 'required|numeric',
            'valor_venda'           => 'required|numeric',
            'qtd_estoque'           => 'required|integer',
        ]);
        // Conecta com a Model e leva as informações para o Banco de Dados
        Product::create($request->all());
        // Por fim, retorna e ou redireciona para a rota (GET) que eu quiser!!
        return redirect('/products')->with('message', 'Produto Criado com Sucesso👌👌😎');


    }

    /**
     * Display the specified resource.
     */
    public function show(Request $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $id)
    {
        //
        $product = Product::find($id);
        return view('EditProduct')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Aqui os dados são inseridos no banco, após serem editados
        $product = Product::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return 'O método destroy funciona!!';
    }
}
