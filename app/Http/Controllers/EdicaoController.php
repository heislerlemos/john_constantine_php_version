<?php


namespace App\Http\Controllers;
use App\Models\Centro_de_formacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Centros_De_FormacoesController;

class EdicaoController extends Controller
{

public function estudanteid(Centro_de_formacao $centros_de_formaco) {
        if (url()->current() == 'http://localhost:8080/centros_de_formacoes/1/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Website"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>Access denied. You did not enter a password.</p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ula' && $_SERVER['PHP_AUTH_USER'] == 'ula') {
            echo '<p>Access granted. You know the password!</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>Access denied! You do not know the password.</p>';
        } 
      }




         if (url()->current() == 'http://localhost:8080/centros_de_formacoes/2/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Website"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>Access denied. You did not enter a password.</p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ugs' && $_SERVER['PHP_AUTH_USER'] == 'ugs') {
            echo '<p>Access granted. You know the password!</p>';
        return view('centros_de_formacoes.edit',
            compact('centros_de_formaco'));
        } else {
            echo '<p>Access denied! You do not know the password.</p>';
        } 
      }
}
}
