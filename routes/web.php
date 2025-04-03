<?php

use App\Livewire\Administrador\Create\Administrador as CreateAdministrador;
use App\Livewire\Auth\Login;
use App\Livewire\Cliente;
use App\Livewire\Funcionario;
use App\Livewire\Funcionario\Create\Funcionario as CreateFuncionario;
use App\Livewire\Produto;
use App\Models\Administrador;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);



Route::get('/user', Login::class)->name('login');

Route::get('/cliente', Cliente::class);

Route::get('/produto', Produto::class);

Route::get('/funcionario', CreateFuncionario::class)-> middleware(['auth', 'role:funcionario'])->name('funcionario.deshboard');;

Route::get('/admin', CreateAdministrador::class) -> middleware(['auth', 'role:admin'])->name('admin.deshboard');