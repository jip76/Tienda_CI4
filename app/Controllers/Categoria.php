<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Categoria extends BaseController
{
    public function show($id)
    {
        $categoriaModel = new categoriaModel();
         
        
        echo view('dashboard/categoria/show',[
            'categoria'=>$categoriaModel->find($id)
        ]);
    } 
    public function new()
    {
       echo view('dashboard/categoria/new',[
         'categoria'=>[
            'titulo'=>''
        ]
       ]);
    }

    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo'=> $this->request->getPost('titulo'),
        ]);
        echo 'creado';
    }
    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        
        echo view('dashboard/categoria/edit',[
            'categoria'=>$categoriaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id,[
           'titulo'=> $this->request->getPost('titulo'),
        ]);

        echo 'Actualizado';       

    }
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        echo 'eliminado';
    }
    
    public function index(): string
    {
        $categoriaModel= new CategoriaModel();
        
        return view('dashboard/categoria/index',[
            'categorias'=> $categoriaModel->findAll()
        ]);
    }
}