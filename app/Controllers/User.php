<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
	private $user;
	public function __construct()
	{	
		$this->user = new ModelUser();
		
	}      
	public function index()
	{
		return view('listUser', [
			'users'=>$this->user->paginate(5),
		'pager'=>$this->user->pager]);
	}
	public function create(){
		return view('form');
	}

	public function store(){
		if($this->user->save($this->request->getPost())){
			return view('sucess_page',['sms'=>'created']);
		}else{
			return view('sucess_page',['sms'=>'error']);	
		}
	}
	public function edit($id){
		
		
	}
	public function delete($id){
		if($this->user->delete($id)){
			return view('sucess_page',['sms'=>'deleted']);
		}else{
			return view('sucess_page',['sms'=>'error']);
		}
	}
}
