@extends('user.layout')

@section('css')
@endsection

@section('main')
  <!-- BEGIN : USER CARDS -->
  <div class="row">
      <div class="col-md-12">
          <div class="portlet light portlet-fit bordered">
              <div class="portlet-title">
                  <div class="caption">
                      <span class="caption-subject font-green bold uppercase">Cadastros</span>
                  </div>
              </div>
              <div class="portlet-body">
                  <div class="mt-element-card mt-element-overlay">
                      <div class="row">
                        <!-- GOOGLE -->
                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/google_logo.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="http://www.google.com.br">
                                                      Google
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">Google</h3>
                                      <p class="mt-card-desc font-grey-mint">Sistema Google</p>
                                  </div>
                              </div>
                          </div>
                          <!-- END GOOGLE -->
                          <!-- FACEBOOK -->
                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/facebook_logo.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="http://www.facebook.com">
                                                      Facebook
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">Facebook</h3>
                                      <p class="mt-card-desc font-grey-mint">Rede Social</p>
                                  </div>
                              </div>
                          </div>
                          <!-- END FACEBOOK -->
                          <!-- MINDMEISTER -->
                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/mindmeister_logo.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="https://www.mindmeister.com/pt/">
                                                      Mindmeister
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">Mindmeister</h3>
                                      <p class="mt-card-desc font-grey-mint">Framework de Gestão</p>
                                  </div>
                              </div>
                          </div>
                          <!-- END MINDMEISTER -->
                          <!-- TWITTER -->
                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/twitter_logo.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="http://www.twitter.com">
                                                      Twitter
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">Twitter</h3>
                                      <p class="mt-card-desc font-grey-mint">Rede Social</p>
                                  </div>
                              </div>
                          </div>
                          <!-- END TWITTER -->
                          <!-- YOUTUBE -->
                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/youtube_icon.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="https://www.youtube.com">
                                                      You Tube
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">You Tube</h3>
                                      <p class="mt-card-desc font-grey-mint">Videos Diversos</p>
                                  </div>
                              </div>
                          </div>
                          <!-- END YOUTUBE -->

                          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                              <div class="mt-card-item">
                                  <div class="mt-card-avatar mt-overlay-1">
                                      <img src="{{asset('/assets/pages/img/redes/netflix_icon.png')}}" />
                                      <div class="mt-overlay">
                                          <ul class="mt-info">
                                              <li>
                                                  <a class="btn default btn-outline" href="https://www.netflix.com">
                                                      Netflix
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mt-card-content">
                                      <h3 class="mt-card-name">Netflix</h3>
                                      <p class="mt-card-desc font-grey-mint">Filmes e Séries</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection

  @section('js')
  @endsection
