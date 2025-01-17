@extends('layouts.app')


@section('conteudo')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 corpoRequisicao shadow pb-3">
                <div class="row mx-1" style="border-bottom: var(--textcolor) 2px solid">
                    <div class="col-md-12 tituoRequisicao mt-3 p-0">
                        Cadastro de Campus
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form action="{{  route('criar-campus')  }}" method="POST">
                            @csrf
                            <div class="row justify-content-center py-2 mt-2">
                                <div class="form-group col-md-12">
                                    <label class="textoFicha" for="name">Nome</label>
                                    <input id="nomeServidor" type="name"
                                           class="form-control @error('name') is-invalid @enderror backgroundGray"
                                           name="name" value="{{ old('name') }}" required autocomplete="name"
                                           autofocus placeholder="Digite o Nome Do Campus">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row justify-content-center py-2">
                                <div class="form-group col-md-12">
                                    <!-- Bibliotecas-->
                                    <label class="textoFicha" for="intituicoes">Instituições</label>
                                    <select name="instituicao" id="instituicoes"
                                            class="form-control @error('instituição') is-invalid @enderror backgroundGray" required>
                                        <option value="" disable selected hidden>Selecionar Instituição</option>
                                        @foreach($instituicoes as $instituicao)
                                            <option value="{{$instituicao->id}}">{{$instituicao->nome}}</option>
                                        @endforeach
                                        @error('bibliotecas')
                                        <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <!-- Botões -->
                            <div class="row justify-content-between my-2">
                                <div class="col-md-6">
                                    <a style="background-color: var(--padrao); border-radius: 0.5rem; color: white; font-size: 17px" class="btn" href="{{  route('home')}}">{{ __('Voltar') }}</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button style="background-color: var(--confirmar); border-radius: 0.5rem; color: white; font-size: 17px" type="submit" class="btn"
                                            onclick="confirmacaoCadastro();">
                                        {{ __('Salvar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
