<?php

namespace App\Controllers;

use App\Models\PeliculaModel;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Pelicula extends BaseController
{
    public function show($id)
    {
        $peliculaModel = new PeliculaModel();
         
        
        echo view('dashboard/pelicula/show',[
            'peliculas'=>$peliculaModel->find($id)
        ]);
    } 
    public function new()
    {
       echo view('dashboard/pelicula/new',[
         'pelicula'=>[
            'titulo'=>'',
        'descripcion'=>''
         ]
       ]);
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->insert([
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);
        echo 'creado';
    }
    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        
        echo view('dashboard/pelicula/edit',[
            'pelicula'=>$peliculaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->update($id,[
           'titulo'=> $this->request->getPost('titulo'),
           'descripcion'=>$this->request->getPost('descripcion')
        ]);

        echo 'Actualizado';       

    }
    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        echo 'eliminado';
    }
    
    public function index(): string
    {
        $peliculaModel= new PeliculaModel();
        
        return view('dashboard/pelicula/index',[
            'peliculas'=> $peliculaModel->findAll()
        ]);
    }
}