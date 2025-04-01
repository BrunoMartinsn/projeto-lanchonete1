<?php

namespace App\Livewire\Funcionario\Create;

use App\Models\Funcionario as ModelsFuncionario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Funcionario extends Component
{
    public $nome;
    public $CPF;
    public $email;
    public $password;

    protected $rules = [
        'nome'=> 'required',
        'CPF' => 'required|max:12',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'email obrigatorio',
        'CPF.required' => 'CPF obrigatorio',
        'CPF.max' => 'o CPF deve conter no maximo 12 caracteres',
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email invalido',
        'password.required' => 'password obrigatório',
        'password.min' => 'senha deve conter no minimo 6 caracteres'
    ];
    

    public function store(){
        ModelsFuncionario::create([
            'nome' => $this->nome,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'password' => Hash::make($this->password),

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        $this->validate();
    }

    public function render()
    {
        return view('livewire.funcionario.create.funcionario');
    }
}
