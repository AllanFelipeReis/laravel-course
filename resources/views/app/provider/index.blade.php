<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{ 'Txt de test' }}
<?= 'Txt de teste' ?>

@php
    // Comentário nativo do PHP

    /*
        Comentário de múltiplas linhas
    */

    echo 'Olá';
@endphp

@if (count($providers) > 0 && count($providers) < 10)
    <h3>Existem algums fornecedores cadastrados</h3>
    
@elseif(count($providers) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
    
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>

@endif

@isset($providers)
    <h4>Há fornecedores</h4>

    @unless ($providers[0]['status'] == 'S') {{-- Executa se a condição for falsa --}}
        <h4>Fornecedor Inativo</h4>
    @endunless

    @isset($providers[0]['document'])
        <h3>Documento {{ $providers[0]['document'] }}</h3>
    @endisset

    <h3>Documento {{ $providers[1]['document'] ?? "CNPJ não informado" }}</h3>

@endisset

@empty($providers[1]['document'])
    - Vazio
@endempty

@switch($providers[2]["ddd"])
    @case("11")
        São Paulo - SP
        @break
    @case("19")
        Rio Claro - SP
        @break
    @case("32")
        Juiz de Fora - MG
        @break
    @default
        Cidade não localizada
@endswitch

@dd($providers)
