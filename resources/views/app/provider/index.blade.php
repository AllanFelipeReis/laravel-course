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

@unless ($providers[0]['status'] == 'S') {{-- Executa se a condição for falsa --}}
    <h4>Fornecedor Inativo</h4>
@endunless

@dd($providers)