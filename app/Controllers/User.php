<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

	public function __construct()
	{		
		helper(['form','url']);
	}

	public function index()
	{
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();               
		return view('Users/index', $data);
	}
	
    //add user form
    public function create(){

        return view('Users/create');
    }
 
    public function save()
	{	  
        $userModel = new UserModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
        ];

        $userModel->insert($data);

        return $this->response->redirect(site_url('/'));
	}

    //Not working
    public function edit($id = null){

        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();                
        return view('Users/edit', $data);

    }

    //Not working
    public function update($id = null){

        $userModel = new UserModel();
        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
        ];

        $userModel->update($id, $data);

        return $this->response->redirect(site_url('/'));
    }

    //Not working
    public function delete($id = null){

        $userModel = new UserModel();

        $data['user'] = $userModel->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/'));
    }        
}
