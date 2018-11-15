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
                                
                                <p class="msg-start" >Olá {{ Auth::user()->name}}.</p>  
                        </div>
                    </div>
                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            
                                <p class="msg-start">Seja muito bem vindo ao <b>GiftoYou!</b><br>
                                    Aqui você poderá compartilhar e descobrir os <b>presentes ideais</b>
                                    para seus melhores amigos!
                                </p>  
                        </div>

                    </div>
                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            <p class="msg-start">Meu nome é <b>Gifty</b>, e estou muito feliz por você estar aqui!</p>  
                        </div>

                    </div>


                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            <p class="msg-start">Meu objetivo é tornar sua experiência incrível.
                                Então, vamos começar... </p>   
                         </div>
                    </div>

                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            <p class="msg-start">Clique em <b>Avançar</b>, para ir a próxima etapa. </p>  
                            
                        </div>
                    </div>
                    <div class="box-img-text" style="justify-content:center">
                        <a class=" button-avancar" href="/startcategorias">Avançar</a>
                    </div>
                </div>


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

        $('.box-img-text').each(function(index){
            $(this).hide().delay(3000 * index).slideDown("fast");
        });
    })
</script>

@endsection

