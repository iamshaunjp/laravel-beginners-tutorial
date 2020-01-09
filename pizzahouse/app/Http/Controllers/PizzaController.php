<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    $pizzas = [
      ['type' => 'hawaiian', 'base' => 'cheesy crust'],
      ['type' => 'volcano', 'base' => 'garlic crust'],
      ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
  }

}
