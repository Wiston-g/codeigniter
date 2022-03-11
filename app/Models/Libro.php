<?php 
namespace App\Models;

use CodeIgniter\Model;

class libro extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ID';
    protected $allowedFileds = ['NOMBRE', 'IMAGEN'];
}