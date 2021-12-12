<?php
namespace App\Repositories;

use Illuminate\Http\Request;

interface IStudent{
   function show();
   function create();
   function store();
   function edit($id);
   function update();
   function delete($id);
}