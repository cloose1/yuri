@extends('user.layout')
@section('css')
@endsection

@section('main')
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th class="text-center">Preço</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                          <div class="media">
                            <div class="">
                              <a class="thumbnail pull-left" href="#">
                                <img class="media-object" src="{{ asset('assets/global/img/product-icon.png') }}" style="width: 72px; height: 72px;">
                              </a>
                            </div>
                            <div class="media-body" style="padding-left: 6px">
                              <h4 class="media-heading"><a href="#">Produto 1</a></h4>
                              <h5 class="media-heading"> Nome da Loja: <a href="http://www.puzzlelab.com.br/lancadora-startup">Puzzle.lab</a></h5>
                              <span>Data e Hora do Pedido:</span><span class="text-success"><strong> 27/08/2017 - 07:21 </strong></span>
                            </div>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$4,87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$14,61</strong></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                          <div class="media">
                            <div class="">
                              <a class="thumbnail pull-left" href="#">
                                <img class="media-object" src="{{ asset('assets/global/img/product-icon.png') }}" style="width: 72px; height: 72px;">
                              </a>
                            </div>
                            <div class="media-body" style="padding-left: 6px">
                              <h4 class="media-heading"><a href="#">Produto 2</a></h4>
                              <h5 class="media-heading"> Nome da Loja: <a href="http://www.puzzlelab.com.br/lancadora-startup">Puzzle.lab</a></h5>
                              <span>Data e Hora do Pedido:</span><span class="text-success"><strong> 27/08/2017 - 07:21 </strong></span>
                            </div>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$4,87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$14,61</strong></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                          <div class="media">
                            <div class="">
                              <a class="thumbnail pull-left" href="#">
                                <img class="media-object" src="{{ asset('assets/global/img/product-icon.png') }}" style="width: 72px; height: 72px;">
                              </a>
                            </div>
                            <div class="media-body" style="padding-left: 6px">
                              <h4 class="media-heading"><a href="#">Produto 3</a></h4>
                              <h5 class="media-heading"> Nome da Loja: <a href="http://www.puzzlelab.com.br/lancadora-startup">Puzzle.lab</a></h5>
                              <span>Data e Hora do Pedido:</span><span class="text-success"><strong> 27/08/2017 - 07:21 </strong></span>
                            </div>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$4,87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$14,61</strong></td>
                    </tr>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                          <div class="media">
                            <div class="">
                              <a class="thumbnail pull-left" href="#">
                                <img class="media-object" src="{{ asset('assets/global/img/product-icon.png') }}" style="width: 72px; height: 72px;">
                              </a>
                            </div>
                            <div class="media-body" style="padding-left: 6px">
                              <h4 class="media-heading"><a href="#">Produto 4</a></h4>
                              <h5 class="media-heading"> Nome da Loja: <a href="http://www.puzzlelab.com.br/lancadora-startup">Puzzle.lab</a></h5>
                              <span>Data e Hora do Pedido:</span><span class="text-success"><strong> 27/08/2017 - 07:21 </strong></span>
                            </div>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$4,87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$14,61</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
@endsection
