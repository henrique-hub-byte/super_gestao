<h3>fornecedor</h3>
    
{{-- @php>


@endphp> --}}
{{-- @dd($fornecedores) --}}

@if(!isset($fornecedoress))
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)    
    <h3>Existem varios fornecedores cadastrados</h3>
@else    
    <h3>ainda não existem fornecedores cadastrados</h3>
@endif    