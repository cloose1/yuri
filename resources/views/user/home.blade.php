@extends('user.layout')

@section('css')
@endsection

@section('main')

@if(session('success'))
  <div class="alert alert-success">
      {{session('success')}}
  </div>
@endif
@if(session('fail'))
  <div class="alert alert-danger" role="alert">
      {{session('fail')}}
  </div>
@endif

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->

              <div class="portlet light profile-sidebar-portlet ">
                  <div class="profile-userpic">
                      <img src="{{ Auth::user()->picture != '' ? asset('storage/'.substr(Auth::user()->picture, 7)) : asset('assets/global/img/avatar-defalt.png') }}" class="img-responsive" alt=""> </div>
                  <div class="profile-usertitle">
                      <div class="profile-usertitle-name"> {{Auth::user()->name}} </div>
                  </div>
                  <div class="profile-userbuttons">
                      <button class="btn btn-circle green btn-sm" data-toggle="modal" data-target="#favoritesModal">EDITAR</button>
                  </div>
                  <br>
              </div>
                <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="favoritesModalLabel">Alterar Avatar</h4>
                      </div>
                      <div class="modal-body">
                        {{Form::open(['method'=>'put', 'role'=>'form', 'route'=>'user.update.avatar', 'files'=>'true'])}}
                          {{Form::file('picture')}}

                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>&#160;
                              <span class="pull-right">
                                <button type="submit" class="btn btn-primary"> Confirmar</button>
                              </span>
                            </div>
                        {{Form::close()}}

                      </div>
                    </div>
                  </div>
                </div>

            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="uppercase profile-stat-title"> 6 </div>
                        <div class="uppercase profile-stat-text"> Cadastros </div>
                    </div>

                </div>
                <!-- END STAT -->
                <div>
                   <h4 class="profile-desc-title">Sobre o Usuário</h4>
                   <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                   <div class="margin-top-20 profile-desc-link">
                     <i class="fa fa-facebook"></i>
                     <a href="http://www.facebook.com">Facebook</a>
                   </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="http://www.google.com.br">Google</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-twitter"></i>
                        <a href="http://www.twitter.com">Twitter</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-linkedin"></i>
                        <a href="http://www.linkedin.com.br">Linkedin</a>
                    </div>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Perfil da Conta</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Essencial</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Financeiro</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Redes Sociais</a>
                                </li>
                                <li>
                                    <a href="#tab_1_4" data-toggle="tab">Pessoais</a>
                                </li>
                                <li>
                                    <a href="#tab_1_5" data-toggle="tab">Trabalho</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- Aba Essencial -->
                                <div class="tab-pane active" id="tab_1_1">
                                      {{Form::model(Auth::user(), ['method'=>'put', 'role'=>'form', 'route'=>'user.update.essencial'])}}
                                        <div class="form-group">
                                            <label class="control-label">Nome Completo</label>
                                              {{Form::text('name', Auth::user()->name,['placeholder'=> 'Nome Completo', 'class'=>'form-control'])}}
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label">Email</label>
                                              {{Form::email('email', null,['placeholder'=>'Email', 'class'=>'form-control'])}}
                                            </div>
                                          <div class="form-group">
                                              <label class="control-label">Endereço</label>
                                              {{Form::text('address', null,['placeholder'=>'Endereço', 'class'=>'form-control'])}}
                                            </div>
                                        <div class="form-group">
                                            <label class="control-label">Data de Nascimento</label>
                                            {{Form::date('birth', null,['placeholder'=> 'Data de Nascimento', 'class'=>'form-control'])}}
                                          </div>
                                        <div class="form-group">
                                            <label class="control-label">Naturalidade</label>
                                            {{Form::text('birthplace', null,['placeholder'=>'Naturalidade', 'class'=>'form-control'])}}
                                          </div>
                                        <div class="form-group">
                                            <label class="control-label">Estado Civil</label>
                                            {{Form::text('maritalStatus', null,['placeholder'=>'Estado Civil', 'class'=>'form-control'])}}
                                          </div>

                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green">Salvar</button>
                                        </div>
                                    {{Form::close()}}
                                </div>
                                <!-- END Aba Essencial -->

                                <!-- Aba Financeiro -->
                                <div class="tab-pane" id="tab_1_2">
                                      {{Form::model(Auth::user(), ['method'=>'put', 'role'=>'form', 'route'=>'user.update.financeiro'])}}
                                        <div class="form-group">
                                            <label class="control-label">Banco</label>
                                            {{Form::text('bank', null,['placeholder'=>'Banco', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Agência</label>
                                                {{Form::text('agency', null,['placeholder'=>'Agencia', 'class'=>'form-control'])}}
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Tipo de Conta</label>
                                                {{Form::text('accountType', null,['placeholder'=>'Tipo de Conta', 'class'=>'form-control'])}}
                                            </div>
                                          </div>
                                          <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Dígito</label>
                                                {{Form::text('cardDigit', null,['placeholder'=>'Dígito', 'class'=>'form-control'])}}
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Número do Cartão</label>
                                            {{Form::text('cardNumber', null,['placeholder'=>'Número do Cartão', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Nome Impresso no Cartão</label>
                                            {{Form::text('cardName', null,['placeholder'=>'Nome Impresso no Cartão', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Vencimento</label>
                                                {{Form::text('cardExpiringDate', null,['placeholder'=>'Vencimento', 'class'=>'form-control'])}}
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Código de Segurança</label>
                                                {{Form::text('cardCvc', null,['placeholder'=>'Código de Segurança', 'class'=>'form-control'])}}
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Bandeira</label>
                                            {{Form::text('cardBanner', null,['placeholder'=>'Bandeira', 'class'=>'form-control'])}}
                                        </div>

                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green">Salvar</button>
                                            <!--<a href="javascript:;" class="btn default"></a>-->
                                        </div>
                                    {{Form::close()}}
                                </div>
                                <!-- END Aba Financeiro -->

                                <!-- Aba Redes Sociais -->
                                <div class="tab-pane" id="tab_1_3">
                                  {{Form::model(Auth::user(), ['method'=>'put', 'role'=>'form', 'route'=>'user.update.redessociais'])}}

                                  <div class="form-group">
                                    <label class="control-label">Facebook</label>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                      {{Form::text('userFacebook', null,['placeholder'=>'Facebook', 'class'=>'form-control'])}}
                                    </div>
                                   </div>
                                   <div class="form-group">
                                     <label class="control-label">Google+</label>
                                       <div class="input-group">
                                       <span class="input-group-addon"><i class="fa  fa-google-plus"></i></span>
                                      {{Form::text('userGooglePlus', null,['placeholder'=>'Google+', 'class'=>'form-control'])}}
                                    </div>
                                   </div>
                                   <div class="form-group">
                                     <label class="control-label">Twitter</label>
                                     <div class="input-group">
                                       <span class="input-group-addon"><i class="fa  fa-twitter"></i></span>
                                       {{Form::text('userTwitter', null,['placeholder'=>'Twitter', 'class'=>'form-control'])}}
                                     </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Linkedin</label>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                      {{Form::text('userLinkedin', null,['placeholder'=>'Linkedin', 'class'=>'form-control'])}}
                                    </div>
                                  </div>

                                  <div class="margin-top-10">
                                      <button type="submit" class="btn green">Salvar</button>
                                      <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                                  </div>
                                  {{Form::close()}}
                                </div>
                                <!-- END Aba Redes Sociais -->
                                <!-- Aba Pessoais -->
                                <div class="tab-pane" id="tab_1_4">
                                  {{Form::model(Auth::user(), ['method'=>'put', 'role'=>'form', 'route'=>'user.update.pessoais'])}}

                                      <div class="form-group">
                                        <label class="control-label">CPF</label>
                                        {{Form::text('cpf', null,['placeholder'=>'CPF', 'class'=>'form-control'])}}
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Título de Eleitor</label>
                                        {{Form::text('tituloEleitor', null,['placeholder'=>'Título de Eleitor', 'class'=>'form-control'])}}
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">RG</label>
                                        {{Form::text('rg', null,['placeholder'=>'RG', 'class'=>'form-control'])}}
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Carteira de Motorista</label>
                                        {{Form::text('cnh', null,['placeholder'=>'Carteira de Motorista', 'class'=>'form-control'])}}
                                      </div>
                                        <!--end profile-settings-->
                                        <div class="margin-top-10">
                                          <button type="submit" class="btn green">Salvar</button>
                                            <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                                        </div>
                                        {{Form::close()}}
                                </div>
                                <!-- END Aba Pessoais -->
                                <!-- Aba Trabalho -->
                                <div class="tab-pane" id="tab_1_5">
                                  {{Form::model(Auth::user(), ['method'=>'put', 'role'=>'form', 'route'=>'user.update.trabalho'])}}
                                      <div class="form-group">
                                          <label class="control-label">Empresa</label>
                                          {{Form::text('company', null,['placeholder'=>'Nome da Empresa', 'class'=>'form-control'])}}
                                        </div>
                                      <div class="form-group">
                                          <label class="control-label">Endereço</label>
                                          {{Form::text('companyAdress', null,['placeholder'=>'Endereço da Empresa', 'class'=>'form-control'])}}
                                          </div>
                                      <div class="form-group">
                                          <label class="control-label">Data de Admissão</label>
                                          {{Form::text('admission', null,['placeholder'=>'Data de Adimissão', 'class'=>'form-control'])}}
                                          </div>
                                        <!--end profile-settings-->
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green">Salvar</button>
                                            <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                                        </div>

                                        {{Form::close()}}
                                </div>
                                <!-- END Aba Trabalho -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection

@section('js')
@endsection
