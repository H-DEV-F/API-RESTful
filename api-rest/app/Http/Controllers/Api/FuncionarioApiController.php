<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use phpDocumentor\Reflection\Types\Null_;

class FuncionarioApiController extends Controller
{
    public function __construct(Funcionario $funcionario, Request $request)
    {
        $this->funcionario = $funcionario;
        $this->request = $request;
    }

    public function get($id=null){
        if($id){
            if(!$data = $this->funcionario->find($id)){
                return response()->json(['error' => 'Não há nenhum resultado'],
                404);
            }else{
                return response()->json($data);
            }
        }else{
            $data = $this->funcionario->all();
            return response()->json($data);
        }
    }

    public function insert(Request $request)
    {
        $this->validate($request, $this->funcionario->rules());

        $dataform = $request->all();

        $data = $this->funcionario->create($dataform);
        
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        if(!$data = $this->funcionario->find($id))
            return response()->json(['error' => 'Houve um erro!'],
            404);

        $dataform = $request->all();

        $data->update($dataform);
        return response()->json(['success' => 'Os dados do usuário '. $data->nome . ' foram atualizados com sucesso!']);
    }

    public function delete($id)
    {
        if(!$data = $this->funcionario->find($id))
            return response()->json(['error' => 'Houve um erro!'],
            404);
        $data->delete();
        return response()->json(['success' => 'O funcionário ' . $data->nome . ' foi excluido com sucesso!']);
    }

    public function relatorio(){
        $quantidade_total = $this->funcionario->count();
        $soma_idade = $this->funcionario->sum('idade');
        $quantidade_masc = $this->funcionario->where('sexo', 'M')->count();
        $quantidade_fem = $this->funcionario->where('sexo', 'F')->count();
        $media_idade = $soma_idade / $quantidade_total;
        $min_idade = $this->funcionario->min('idade');
        $max_idade = $this->funcionario->max('idade');
        return response()->json(['Total de homens' => $quantidade_masc, 
                                'Total de mulher' => $quantidade_fem,
                                'Media de idade' => round($media_idade),
                                'Idade do funcionário mais novo' => $min_idade,
                                'Idade do funcionário mais velho' => $max_idade]);

    }
}
