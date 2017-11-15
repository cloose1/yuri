<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginUsuarioController extends Controller
{
  public function login()
  {
    return view('login');
  }

  public function logar(Request $request)
  {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.home');
        }else{
            return redirect()->back()->with('falha','Usuário ou senha inválido!');
        }
  }

  public function cadastrar()
  {
    return view('cadastrar');
  }

  public function register(Request $request)
  {
    $this->validate($request,[
      'name' => 'required',
      'email' => 'required',
      'password' => 'required|min:6',
      'conf_password' => 'required'
    ]);

    if($request->password != $request->conf_password) {
        return redirect()->back()->with('falha','Senhas não conferem!');
    }

    $usuarioExiste = User::where('email',$request->email)->first();

    if($usuarioExiste){
      return redirect()->back()->with('fail','Email existente!');
    }

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->type = 'CLIENTE';
    $user->status = 1;
    $user->password = bcrypt($request->password);
    $user->save();

      Auth::attempt(['email' => $request->email, 'password' => $request->password]);
      return redirect()->route('user.home');
    }


  public function userUpdateEssencial(Request $request)
  {
    $usuario = User::find(Auth::user()->id);
    $usuario->name = $request->name;
    $usuario->birth = $request->birth;
    $usuario->birthplace = $request->birthplace;
    $usuario->maritalStatus = $request->maritalStatus;
    $usuario->email = $request->email;
    $usuario->address = $request->address;
    $usuarioExiste = User::where('email',$request->email)->first();

    if($usuarioExiste AND $usuarioExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Email existente!');
    }else if(!$usuario->email or $usuario->email == ''){
      return redirect()->back()->with('fail','O campo email é obrigatório!');
    }

    $usuario->update();

    return redirect()->back()->with('success','Perfil alterado com sucesso!');
  }

  public function userUpdateFinanceiro(Request $request)
  {

    $usuario = User::find(Auth::user()->id);
    $usuario->bank = $request->bank;
    $usuario->agency = $request->agency;
    $usuario->accountType = $request->accountType;
    $usuario->cardDigit = $request->cardDigit;
    $usuario->cardNumber = $request->cardNumber;
    $usuario->cardName = $request->cardName;
    $usuario->cardExpiringDate = $request->cardExpiringDate;
    $usuario->cardCvc = $request->cardCvc;
    $usuario->cardBanner = $request->cardBanner;

    $usuarioCartaoExiste = User::where('cardNumber',$request->cardNumber)->first();
    if($usuarioCartaoExiste AND $usuarioCartaoExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Dados bancários inccorretos!');
    }

    $usuario->update();
    return redirect()->back()->with('success','Perfil alterado com sucesso!');
  }

  public function userUpdateRedesSociais(Request $request)
  {
    $usuario = User::find(Auth::user()->id);
    $usuario->userFacebook = $request->userFacebook;
    $usuario->userGooglePlus = $request->userGooglePlus;
    $usuario->userTwitter = $request->userTwitter;
    $usuario->userLinkedin = $request->userLinkedin;

    $usuarioFacebookExiste = User::where('userFacebook', $request->userFacebook)->first();
    $usuarioGoogleExiste = User::where('userGooglePlus', $request->userGooglePlus)->first();
    $usuarioTwitterExiste = User::where('userTwitter', $request->userTwitter)->first();
    $usuarioLinkedinExiste = User::where('userLinkedin', $request->userLinkedin)->first();

    if($usuarioFacebookExiste AND $usuario->userFacebook != '' AND  $usuarioFacebookExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Facebook já cadastrado!');
    }else if($usuarioGoogleExiste AND $usuario->userGooglePlus != '' AND  $usuarioGoogleExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Google+ já cadastrado!');
    }else if($usuarioTwitterExiste AND $usuario->userTwitter != '' AND  $usuarioTwitterExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Twitter já cadastrado!');
    }else if($usuarioLinkedinExiste AND $usuario->userLinkedin != '' AND  $usuarioLinkedinExiste->id != Auth::user()->id){
      return redirect()->back()->with('fail','Linkedin já cadastrado!');
    }

    $usuario->update();
    return redirect()->back()->with('success','Perfil alterado com sucesso!');
  }

  public function userUpdatePessoais(Request $request)
  {
    $usuario = User::find(Auth::user()->id);
    $usuario->cpf = $request->cpf;
    $usuario->tituloEleitor = $request->tituloEleitor;
    $usuario->rg = $request->rg;
    $usuario->cnh = $request->cnh;

    $usuario->update();
    return redirect()->back()->with('success','Perfil alterado com sucesso!');
  }

  public function userUpdateTrabalho(Request $request)
  {
    $usuario = User::find(Auth::user()->id);
    $usuario->company = $request->company;
    $usuario->companyAddress = $request->companyAddress;
    $usuario->admission = $request->admission;

    $usuario->update();
    return redirect()->back()->with('success','Perfil alterado com sucesso!');
  }

  public function userHome()
  {
    return view('user.home');
  }

  public function userCompras()
  {
    return view('user.compras');
  }

  public function userRedes()
  {
    return view('user.redes');
  }

  public function userUpdateAvatar(Request $request)
  {
    //dd($request);
    if ($request->hasFile('picture')) {
      $usuario = User::find(Auth::user()->id);
      $usuario->picture = $request->file('picture')->store('public');
      $usuario->update();
    }
      return redirect()->route('user.home');
  }

  public function userLogout() {
  	Auth::logout();
  	return redirect()->route('login');
  }



}
