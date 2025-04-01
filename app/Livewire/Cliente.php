<?php

namespace App\Livewire;

use App\Models\Cliente as ModelsCliente;
use Database\Seeders\ClienteSeeder;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class Cliente extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $password;

    protected $rules = [
        'nome'=> 'required',
        'endereco'=> 'required',
        'telefone' => 'required|max:11',
        'CPF' => 'required|max:12',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'email obrigatorio',
        'endereco.required' => 'endereco obrigatorio',
        'telefone.required' => 'telefone obrigatorio',
        'telefone.max' => 'telefone deve conter no maximo 11 caracteres',
        'CPF.required' => 'CPF obrigatorio',
        'CPF.max' => 'o CPF deve conter no maximo 12 caracteres',
        'email.required' => 'email obrigatório',
        'email.email' => 'formato de email invalido',
        'password.required' => 'password obrigatório',
        'password.min' => 'senha deve conter no minimo 6 caracteres'
    ];

    
    public function render()
    {
        return view('livewire.cliente');
    }
    public function store(){
        ModelsCliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'password' => Hash::make($this->password),

        ]); 
        session()->flash('success', 'Cadastro Realizado');
        $this->validate();
    }



}
