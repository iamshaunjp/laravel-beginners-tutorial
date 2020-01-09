<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

  public function index() {

    $pizzas = Pizza::latest()->get();      

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    
    $pizza = Pizza::findOrFail($id);

    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create() {
    return view('pizzas.create');
  }

  public function store() {

    error_log(request('name'));
    error_log(request('type'));
    error_log(request('base'));

    return redirect('/');

  }

}
