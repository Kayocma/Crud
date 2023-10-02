<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index() {
        return view('index', ['clientes'=> Cliente::get()]);
    }

    public function create() {
        return  view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'cpf_cnpj' => 'required|string|unique:clientes',
            'nome' => 'required|string|max:255',
            'nome_social' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000'
        ]);
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('clientes'), $imageName);

        $cliente = new Cliente;
        $cliente->image = $imageName;
        $cliente->cpf_cnpj = $request->cpf_cnpj;
        $cliente->nome = $request->nome;
        $cliente->nome_social = $request->nome_social;
        $cliente->data_nascimento = $request->data_nascimento;

        $cliente->save();

        return back()->withSuccess('Cliente Cadastrado!');
    }

    public function show($id) {
        $cliente = Cliente::where('id', $id)->first();

        return view('show', ['cliente'=>$cliente]);
    }

    public function edit($id) {
        $cliente = Cliente::where('id', $id)->first();
        return view('edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'cpf_cnpj' => 'required',
            'nome' => 'required',
            'nome_social' => 'required',
            'data_nascimento' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000'
        ]);

        $cliente = Cliente::where('id', $id)->first();

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('clientes'), $imageName);
            $cliente->image = $imageName;
        }

        $cliente->cpf_cnpj = $request->cpf_cnpj;
        $cliente->nome = $request->nome;
        $cliente->nome_social = $request->nome_social;
        $cliente->data_nascimento = $request->data_nascimento;

        $cliente->save();

        return back()->withSuccess('Cliente Atualizado!');
    }

    public function destroy($id) {
        $cliente = Cliente::where('id', $id)->first();
        $cliente->delete();

        return back()->withSuccess('Cliente Excluido!');
    }
}
