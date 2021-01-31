<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class PostModel extends Model
{
    protected $table = 'posts';
 
    protected $allowedFields = ['title', 'description'];
    //protected $allowedFields = ['name', 'username','password','email'];
}