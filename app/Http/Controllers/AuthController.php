<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function me(){
	return [
		 	"nis" => 3103118088,
            "name" => "Mirza Syahir Nur Ramadhan",
            "gender" => "Laki-laki",
            "phone" => 6281393933995,
            "class" => "XII RPL 3"];
    }
    
}
