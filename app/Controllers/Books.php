<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\libro;


class Books extends Controller{
    public function index()
    {

        $libro= new libro();
        $datos['libros'] = $libro->orderBy('ID','ASC')->findAll();
        $datos['header'] = view('template/header.php');
        $datos['footer'] = view('template/footer.php');
        return view('libros/lista.php', $datos);
    }

    public function create()
    {
        $datos['header'] = view('template/header.php');
        $datos['footer'] = view('template/footer.php');
        // $libro = new libro();
        return view('libros/create.php', $datos);
    }

    public function store()
    {
        $libro= new libro();

        if($imagen = $this->request->getFile('imagen')){
            $newName = $imagen->getRandomName();
            $imagen->move('../public/uploads/',$newName);

            $datos = [
                'nombre'=> $this->request->getVar('nombre'),
                'imagen'=> $newName,
            ];
            
            $libro->insert($datos);
        };
        
        echo"ok";
    }
}