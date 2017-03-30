@extends('layouts.master')

@section('contingut')

<form action="" method="GET">
    <select name="apis" id="apis">
        <option value="http://api.heasheartfire.com;barri;string">Guillemmmmm</option>
    </select>
    <input id="any" type="text">Inserta un barrio</input>
    <button class="btn" id="1">boton</button>
</form>

<div id="info"></div>

<script type="text/javascript">
$(document).ready(function(){
    $("#1").click(function(event) {
        event.preventDefault();
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
