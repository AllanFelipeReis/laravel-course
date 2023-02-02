@extends('site.layouts.base')

@section('title', $title)

@section('content')
    <div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            <form action="{{ route("site.contact") }}" method="GET">
                <input type="text" placeholder="Nome" name="name" class="borda-preta">
                <br>
                <input type="text" placeholder="Telefone" name="phone" class="borda-preta">
                <br>
                <input type="text" placeholder="E-mail" name="email" class="borda-preta">
                <br>
                <select class="borda-preta" name="reason">
                    <option value="1">Qual o motivo do contato?</option>
                    <option value="2">Dúvida</option>
                    <option value="3">Elogio</option>
                    <option value="4">Reclamação</option>
                </select>
                <br>
                <textarea class="borda-preta" name="message" placeholder="Preencha aqui a sua mensagem"></textarea>
                <br>
                <button type="submit" class="borda-preta">ENVIAR</button>
            </form>
        </div>
    </div>  
    </div>

    @include('site.layouts._partials.foot')
@endsection