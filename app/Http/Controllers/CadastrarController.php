<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lutador;

class CadastrarController extends Controller
{
    //regra de negócio: validar e persistir dados
    public function salvar (Request $request){
        
        $request->validate([

            "nome" => "required|string",
            "nascimento" => "required|date",
            "peso" => "required|decimal:2|min:0",
            "nacionalidade" => "required|string",
            "arte_marcial" => "required|string",
        ]
        ,[
            "nome.required" => "O campo 'Nome' deve ser preenchido",
            "nome.string" => "O campo 'Nome' deve conter letras",
            "nascimento.required" => "O campo 'Nascimento' deve ser preenchido",
            "nascimento.date" => "A data de nascimento deve ser válida",
            "peso.required" => "O campo 'Peso' deve ser preenchido",
            "peso.decimal" => "O campo 'Peso' deve ser válido",
            "peso.min" => "O peso deve ser positivo",
            "nacionalidade.required" => "O campo 'Nacionalidade' deve ser preenchido",
            "nacionalidade.string" => "O campo 'Nacionalidade' deve ser válido",
            "arte_marcial.required" => "O campo 'Arte Marcial' deve ser preenchido",
            "arte_marcial.string" => "O campo 'Arte Marcial' deve conter letras"
        ]    
    
        );

        $lutadorFutebol = new Lutador();
        $lutadorFutebol->fill($request->all());
        $lutadorFutebol->save();
        
        // dd($request);

        return view('cadastroSalvo');

    }

}
