<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Página Principal";
        $viewData['img'] = 'bemvindo.jpg';
        return view('home.index')->with("viewData", $viewData);
    }

    public function about(){
        $viewData['title'] = "Sobre a Loja";
        $viewData['subtitle'] = "Informações gerais";
        $viewData['description'] = "Esta loja tem como objetivo..";
        $viewData['author'] = "Desenvolvido por: e-nayR";
        return view('home.about')->with("viewData", $viewData);
    }

}
