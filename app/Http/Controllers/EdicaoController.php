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
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ula' && $_SERVER['PHP_AUTH_USER'] == 'ula') {
            echo '<p>Access granted. You know the password!</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
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

        if (url()->current() == 'http://localhost:8080/centros_de_formacoes/3/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'oscar' && $_SERVER['PHP_AUTH_USER'] == 'oscar') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }

        if (url()->current() == 'http://localhost:8080/centros_de_formacoes/4/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'unia' && $_SERVER['PHP_AUTH_USER'] == 'unia') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }

      if (url()->current() == 'http://localhost:8080/centros_de_formacoes/5/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ugs' && $_SERVER['PHP_AUTH_USER'] == 'ugs') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }

      if (url()->current() == 'http://localhost:8080/centros_de_formacoes/6/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'meto' && $_SERVER['PHP_AUTH_USER'] == 'meto') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }


      if (url()->current() == 'http://localhost:8080/centros_de_formacoes/7/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'lusiada' && $_SERVER['PHP_AUTH_USER'] == 'lusiada') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }


      if (url()->current() == 'http://localhost:8080/centros_de_formacoes/8/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'jean' && $_SERVER['PHP_AUTH_USER'] == 'jean') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }

      if (url()->current() == 'http://localhost:8080/centros_de_formacoes/9/edit') {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Constantine Universidades"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'upra' && $_SERVER['PHP_AUTH_USER'] == 'upra') {
            echo '<p>Pode aceder ao menu edit</p>';
        return view('centros_de_formacoes.edit', compact('centros_de_formaco'));
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 
      }
  }
}
