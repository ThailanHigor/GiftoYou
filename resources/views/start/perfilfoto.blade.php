@extends('layouts.app')

<style>
    .container{
        padding: 0px !important;
    }
    .box-txt-newpost{
        height: 60px;
        display: flex;
        align-items: center;
        padding: 16px;
        border-bottom: 2px solid #FFF;
    }
    .txt-newpost{
        font-size: 19px;
    }
    .box-inputs{
        background: #FFF;
    }
    .input-field{
        display: flex;
        flex-direction: column;

        justify-content: center;
        width: 100%;
        align-items: center;


       
    }
    .label-legenda{

        margin-top: 15px;
    }
    .input-legenda{
        width: 36%;
    height: 35px;
    font-size: 17px;
    margin-bottom: 19px;
    margin-top: 2px;
    border: 1px solid #a81d04;
    }

    .input-foto{
        padding: 14px;
        box-shadow: 0px 0px 7px -2px rgba(0,0,0,1);
        display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .file-foto{
        display: none;
    }
    .btn-input-foto{
        border: 1px solid;
        background: #efebeb;
        height: 100%;
        border-radius: 4px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img-input{
        height: 62%;
    display: flex;
    flex-direction: column;
    }
    .alterar-foto{
        border-radius: 5px;
        background: #ffb000;
        color: white;
        padding: 3px;
    }
    .box-alterar-foto{
        display: flex ;
        justify-content: flex-end;
        margin-right: 15px;
      
    }
    .box-card-avatar{
        width: 74px;
    height: 76px;
    border-radius: 67px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 7px;
    }
    .box-img-avatar{
        width: 85%;
    }
    .box-active{
        border-radius: 35px !important;
    }
    
</style>

@section('content')
<div class="container">
    <div class="row" style="width:100%">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="box-container-start">
                    <div class="back-grad box-txt-newpost" style="height:60px">
                        <span class="txt-newpost">Escolha seu avatar</span>  
                    </div>
                    {!! Form::open(['route' => 'selectavatar','id' => 'formpost']) !!}
                        <div class="box-inputs">
                            <div class="input-field input-foto">
                                <div class="box-card-avatar">
                                    <img src="/images/fotoperfil/morena.svg" alt="img" class="box-img-avatar" >
                                    <input type="radio" name="avatar" class="check-lojas" value="morena.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/cabelo-escuro.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="cabelo-escuro.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/man.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="man.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/girl.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="girl.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/camisa-red.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="camisa-red.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/student.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="student.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/topete.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="topete.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/mocinha.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="mocinha.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/tranca.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="tranca.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/negro.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="negro.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/negra.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="negra.svg">
                                </div>
                                <div class="box-card-avatar">
                                        <img src="/images/fotoperfil/amarela.svg" alt="img" class="box-img-avatar" >
                                        <input type="radio" name="avatar" class="check-lojas" value="amarela.svg">
                                </div>
                                
                                <div class="input-field " style=" border-top: 2px solid;
                                border-top-color: #a81d04;">
                                 
                                        <label for="" class="label-legenda">Informe sua <b>Data de Nascimento:</b></label>
                                        <input type="text" class="input-legenda" required  name="data">
                                </div>
                                    
                                    
                                
                            </div>


                        </div>
                        <div class="box-img-text" style="justify-content:center">
                            <a class=" button-avancar" href="javascript:void(0)">Salvar</a>
                        </div>
                    {!! Form::close() !!}
                </div>


            </div>
        </div>
    </div>
</div>

<script>  
  $(".input-legenda").mask("00/00/0000");
  $(".box-card-avatar").click(function(){
        $(".box-card-avatar").removeClass("box-active");
        $(".check-lojas").attr("checked",false);

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
        if($(".check-lojas").val() != "" &&  $(".input-legenda").val() != ""){
            $("#formpost").submit();
        }
        })
</script>

@endsection

