@extends('layouts.master')

@section('contingut')

<form action="" method="GET">
    <select name="apis" id="apis">
        <option value="http://api.adrianarbosnavas.com;nacimientos;entero">Adrian</option>
        <option value="http://api.dmojoneromoya.xyz;birth;entero">Daniel</option>
        <option value="naixements">Marc</option>
    </select>
    <!-- <input id="any" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>Inserta un año </input> -->
    <input id="any" type="text">Inserta un barrio</input>
    <button class="btn" id="1">boton</button>
</form>

<div id="info"></div>

<script type="text/javascript">
$(document).ready(function(){
    $("#1").click(function(event) {
        event.preventDefault(); //evita que recargue la página
        var resultado = $("#apis").val().split(";");
        $.getJSON(resultado[0]+"/api/"+resultado[1]+"/"+$("#any").val()+"?callback=?", function(result){
            alert(JSON.stringify(result));
            $.each(result, function(i, field){
                $("#info").append(field['total'] + " ");
            });
        });
    });
}); 
</script>

@endsection
