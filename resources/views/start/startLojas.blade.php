@extends('layouts.app')

<style>

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                @if( $categoria != null)
                <div class="box-img-text">
                    <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                    <div class="box-mensagem-start">
                            <p class="msg-start">Percebi que você gosta de <b>{{ $categoria['Nome']}}</b>!<br>
                                Que legal, eu também gosto!
                            </p>  
                    </div>
                </div>
                @endif
                <div class="box-img-text">
                    <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                    <div class="box-mensagem-start">
                            <p class="msg-start">Baseado em seu gosto, aqui estão algumas lojas que 
                               possuem produtos com seu estilo!<br>
                               Gosta de alguma?
                            </p>  
                    </div>

                </div>


                {!! Form::open(['route' => 'lojas.store', 'id' =>'lojasform']) !!}
                <div class="box-container">
                
                    @foreach($lojas as $loja)
                            <div class="box-card" style="display:none">
                        
                                <img src="/images/{{ $loja['Imagem_Thumb'] }}" alt="img" class="box-img">
                                <input type="checkbox" name="lojas[]" class="check-lojas" value="{{$loja['Id'] }}">
                                <div class="box-title">{{ $loja['Nome']  }}</div>
                        
                            </div>

                    @endforeach
                </div>
                <div class="box-button" style="justify-content:center;display:none">
                    <a class="button-avancar" href="javascript:void(0)">Avançar</a>
                </div>
                {!! Form::close() !!}
              
            </div>
        </div>
    </div>
</div>


<script>  
    $(document).ready(function(){
        $(".box-card").click(function(){
            input = $(this).find(".check-lojas");

            if(input.prop("checked")){
                input.attr("checked",false);
                $(this).removeClass("box-active");
                
            }else{
                input.attr("checked",true);
                $(this).addClass("box-active");
            }
            

        });

        $('.button-avancar').click(function(){
            $("#lojasform").submit();
        });
        $('.box-img-text').each(function(index){
            $(this).hide().delay(1500 * index).slideDown(500);
        });

         setTimeout(function(){
            $('.box-card').each(function(index){
                $(this).hide().delay(500 * index).fadeIn(400);
                console.log(index);
                setTimeout(function(){
                    $('.box-button').fadeIn();
                },2200);
               
            });    
        },3000)
    })
</script>

@endsection

