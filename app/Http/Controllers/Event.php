<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;
use App\Models\Proprietarios;
use App\Models\Imoveis;
use App\Models\Contratos;
use App\Models\Pays;

class Event extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $clientes = Clientes::where('name', 'like', '%'.$search.'%')->get();

        } else {

            $clientes = Clientes::all();

        }

        return view('clientes', ['clientes'=>$clientes, 'search'=>$search]);
    }

    public function create() {
        return view('Clientes.clientes');
    }

    public function store(Request $request) {

        $cliente = new Clientes;

        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;

        $cliente->save();

        return redirect('/');
    }

    public function destroy($id) {

        Clientes::findOrFail($id)->delete();

        return redirect('/');
    }

    public function edit($id){

        $clientes = Clientes::findOrFail($id); // Pega os Ids ja prontos no banco

        return view('Clientes.edit', ['clientes'=> $clientes]);
    }

    public function update(Request $request) {

        Clientes::findOrFail($request->id)->update($request->all());

        return redirect('/');
    }

    public function Proprietario() {

        $search = request('search');

        if($search) {

            $proprietarios = Proprietarios::where('name', 'like', '%'.$search.'%')->get();

        } else {

            $proprietarios = Proprietarios::all();

        }

        return view('proprietarios', ['proprietarios'=>$proprietarios]);
    }

    public function createProprietario() {
        return view('Proprietarios.proprietarios');
    }

    public function storeProprietario( Request $request) {

        $proprietario = new Proprietarios;

        $proprietario->name = $request->name;
        $proprietario->email = $request->email;
        $proprietario->telefone = $request->telefone;

        $proprietario->save();

        return redirect('/Proprietarios');
    }

    public function destroyProprietario($id) {

        Proprietarios::findOrFail($id)->delete();

        return redirect('/Proprietarios');
    }

    public function editProprietario($id) {

        $proprietarios = Proprietarios::findOrFail($id);

        return view('Proprietarios.editPropri', ['proprietarios'=>$proprietarios]);
    }

    public function updateProprietario(Request $request) {

        Proprietarios::findOrFail($request->id)->update($request->all());

        return redirect('/Proprietarios');
    }

    public function Imoveis() {

        $search = request('search');

        if($search) {

            $imoveis = Imoveis::where('endereco', 'like', '%'.$search.'%')->get();

        } else {

            $imoveis = Imoveis::all();

        }

        return view('imoveis', ['imoveis'=>$imoveis]);
    }

    public function createImovel() {

        $proprietarios = Proprietarios::all();

        return view('Imoveis.imoveis', ['proprietarios'=>$proprietarios]);
    }

    public function storeImovel(Request $request) {

        $imovel = new Imoveis;

        $imovel->endereco = $request->endereco;
        $imovel->proprietario = $request->proprietario;

        $imovel->save();

        return redirect('/Imoveis');

    }

    public function destroyImovel($id) {

        Imoveis::findOrFail($id)->delete();

        return redirect('/Imoveis');
    }

    public function editImovel($id) {

        $imoveis = Imoveis::findOrFail($id);
        $proprietarios = Proprietarios::all();

        return view('Imoveis.editImovel', ['imoveis'=>$imoveis, 'proprietarios'=>$proprietarios]);
    }

    public function updateImovel(Request $request) {

        Imoveis::findOrFail($request->id)->update($request->all());

        return redirect('/Imoveis');
    }

    public function Contratos() {

        $search = request('search');

        if($search) {

            $contratos = Contratos::where('cliente', 'like', '%'.$search.'%')->get();

        } else {

            $contratos = Contratos::all();

        }

        return view('contratos', ['contratos'=>$contratos]);
    }

    public function createContrato() {

        $imoveis = Imoveis::all();
        $clientes = Clientes::all();

        return view('Contratos.contratos', ['imoveis'=>$imoveis, 'clientes'=>$clientes]);
    }

    public function storeContrato(Request $request) {

        $contratos = new Contratos;
        $pagamento = new Pays;

        function DateDiff($tes1, $tes2, $differenceFormat = '%Y%m') {

            $datetime1 = date_create($tes1);
            $datetime2 = date_create($tes2);

            $interval = date_diff($datetime1, $datetime2);

            return $interval->format($differenceFormat);

        }

        $teste1 = $request->data_inicio;
        $teste2 = $request->data_final;

        $pagamento->diff = DateDiff($teste1, $teste2);

        $contratos->id_imovel = $request->id_imovel;
        $contratos->cliente = $request->cliente;
        $contratos->data_inicio = $request->data_inicio;
        $contratos->data_final = $request->data_final;
        $contratos->taxa = $request->taxa;
        $contratos->aluguel = $request->aluguel;
        $contratos->condominio = $request->condominio;
        $contratos->iptu = $request->iptu;


        $contratos->save();
        $pagamento->save();

        return redirect('/Contratos');
    }

    public function destroyContrato($id) {

        Contratos::findOrFail($id)->delete();

        return redirect('/Contratos');
    }

    public function editContrato($id) {

        $contratos = Contratos::findOrFail($id);
        $imoveis = Imoveis::all();
        $clientes = Clientes::all();

        return view('Contratos.editContrato', ['contratos'=>$contratos, 'imoveis'=>$imoveis, 'clientes'=>$clientes]);
    }

    public function updateContrato(Request $request) {

        Contratos::findOrFail($request->id)->update($request->all());

        return redirect('/Contratos');
    }

    public function Pagar($id) {
        $pagar = Pays::findOrFail($id);

        $pagar = Pays::all();
        $contratos = Contratos::all();

        return view('Contratos.pagamentos', ['pagar'=>$pagar, 'contratos'=>$contratos]);
    }

    public function Pagar2(Request $request) {

        Pays::findOrFail($request->id)->update($request->all());

        if($request->diff == 0) {
            Pays::findOrFail($request->id)->delete();
            Contratos::findOrFail($request->id)->delete();
        }

        return redirect('/Contratos');
    }
}
