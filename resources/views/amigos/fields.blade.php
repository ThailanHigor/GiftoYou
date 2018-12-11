@foreach ($amigos as $amigo)
<a href="perfil/{{$amigo['id']}}">
<div data-id="{{ $amigo["id"]}}" class="box-amigo" >
    <div class="foto-box-amigos" style="width: 20%;">
        <img src="images/fotoperfil/{{ $amigo['FotoPerfil']}}" alt="">
    </div>
    <div class="nome-amigo"> 
        <span class="text-nome-amigo">{{ $amigo["name"]}}</span>
    </div>

    
</div>
</a>
@endforeach