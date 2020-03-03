@props(['message', 'type'])
<div>
    <h3>{{$type}}</h3>
    <p>{{$message}}
</div>

<!--
    Componentes padrão: PHP e view separadamente
    | Componente Inline: tudo dentro do PHP
    | Componente anônimo: apenas a parte html ou de exibição

