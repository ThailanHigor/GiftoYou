@extends('layouts.app')

<style>
    .box-card-categorias{
        height: 128px;
        width: 26%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        flex-direction: column;
        box-shadow: 0px 0px 5px -1px rgba(0,0,0,0.75);
        border-radius: 2px;
        background: white;
    }

    .box-container-categorias{
        justify-content: flex-start;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        margin-left: 10px;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                    <div class="box-img-text">
                        <img src="images/icons/psyduck.svg" alt="" class="img-box-mensagem-start">
                        <div class="box-mensagem-start">
                            
                                <p class="msg-start">Aqui estão algumas categorias de presentes
                                    que talvez você goste. <br>
                                    Que tal escolher algumas dessas?<br>
                                    Em seguida, clique em <b>Avançar</b>...
                                </p>  
                        </div>
    
                    </div>
  
                    {!! Form::open(['route' => 'start.categorias','id' => 'categoriasform']) !!}
                    <div class="box-container-categorias">
                        @foreach($categorias as $categoria)
                                <div class="box-card-categorias" style="display:none">
                                
                                        <img src="/images/icons/categorias/{{ $categoria['Imagem_Thumb'] }}" alt="img" class="box-img">
                                        <input type="checkbox" name="categorias[]" class="check-lojas" value="{{$categoria['Id'] }}">
                                        <div class="box-title">{{ $categoria['Nome']  }}</div>
                                
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
        $(".box-card-categorias").click(function(){
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
            $("#categoriasform").submit();
        })

        $('.box-img-text').each(function(index){
            $(this).hide().delay(2000 * index).slideDown(400);
        });

       
        setTimeout(function(){
            $('.box-card-categorias').each(function(index){
                $(this).hide().delay(500 * index).fadeIn(400);
                console.log(index);
                setTimeout(function(){
                    $('.box-button').fadeIn();
                },7500);
               
            });    
        },700)
    })


</script>

@endsection

