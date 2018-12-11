@extends('layouts.app')

@section('content')

<style> 
.row{
    width: 100%;
}
label{
    font-size: 19px;
   
}
p{
    margin-bottom: 5px;
}

.card-labels{
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    padding-bottom: 1.25rem;
    padding-top: 10px;
    display: flex; 
    justify-content: center;
    flex-direction: column;
    align-items: center

}

hr{
    width: 100%;
    margin-top: 0; 
    margin-bottom: 5px;
    border: 5;
    border-top: 1px solid rgb(246, 134, 0);
}
.btn-entrar{
    width: 100%;    
    font-family: 'Merienda One', cursive;
    font-size: 17px;
}
.card-body{
    text-align: center;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <img src="/images/fotoperfil/{{$user['FotoPerfil']}}" alt="" style="    width: 195px;">
                
                </div>
                <div class="card-labels">
                    <hr>
                    <label style=" text-transform: capitalize;"> {{$user['name']}} </label>
                    <hr>
                    <label>{{$user['email']}} </label>
                    <hr>
                    @if($user['DataAniversario'])
                    <label>{{$user['DataAniversario']}} </label>
                    <hr>
                    @endif
                    
                </div>
                <div class="card-labels">
                    <a href="/amigos" class="btn btn-primary btn-entrar">Voltar</a>  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
