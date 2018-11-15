@extends('layouts.app')

<style>

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="box-container-start">
                    <div class="box-img-text" style="height:60px">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start" style="height: 56px">
                                
                                <p class="msg-start" >Tudo pronto {{ Auth::user()->name}}!</p>
                        </div>
                    </div>
                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            <p class="msg-start">Suas escolhas foram armazenadas e as usaremos para
                                tornar sua experiência aqui no <b>GiftYou</b> incrível...</p>
                        </div>
                    </div>
                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            <p class="msg-start"><b>Agora é com você!</b></p>
                        </div>
                    </div>
                    <div class="box-img-text" style="justify-content:center">
                        <a class="button-avancar-red" href="javascript:void(0)">Começar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>  
    $(document).ready(function(){
        $('.box-img-text').each(function(index){
            $(this).hide().delay(2000 * index).slideDown("fast");
        });
    })
</script>

@endsection

