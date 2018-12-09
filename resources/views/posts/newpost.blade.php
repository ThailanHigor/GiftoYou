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
        font-size: 22px;
        font-family: 'Acme', sans-serif;
    }
    .box-inputs{
        background: #FFF;
    }
    .input-field{
        display: flex;
        flex-direction: column;
       
    }
    .label-legenda{
        margin-left: 10px;
        margin-top: 2px;
    }
    .input-legenda{
        margin-left: 10px;
    height: 100px;
    margin-right: 10px;
    border-radius: 5px;
    resize: none;
    font-size: 13px;
    margin-bottom: 19px;
    }

    .input-foto{
        height: 240px;
        padding: 14px;
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
</style>

@section('content')
<div class="container">
    <div class="row" style="width:100%">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="box-container-start">
                    <div class="back-grad box-txt-newpost" style="height:60px">
                        <span class="txt-newpost">Nova Postagem</span>  
                    </div>
                    {!! Form::open(['route' => 'createpost','id' => 'formpost','files'=>true]) !!}
                        <div class="box-inputs">
                            <div class="input-field input-foto">
                                <div class="btn-input-foto">
                                    <div class="img-input">
                                        <img style="height: 76px;" src="images/icons/photo.svg" class="btn-img-input"  alt="">
                                        <span >Clique para adicionar uma foto</span>
                                        <input type="file" class="file-foto" name="foto">
                                    </div>
                                    <div class="show-img" style="width: 100%;display:none" >
                                        <img style="height:100%;width:100%; image-orientation: from-image;" src="" class="img-to-show"  alt="">
                                    </div>
                                </div>
                                
                            </div>
                            <div  class="box-alterar-foto" style="  display:none;"> 
                                <span class="alterar-foto">Alterar Foto</span>
                            </div>
                            <div class="input-field " style="">
                                <label for="" class="label-legenda">Legenda</label>
                                <textarea type="text"  class="input-legenda"  name="legenda"></textarea>
                            </div>
                            <div class="error-msg" style="display: none;">
                                <p style="margin-left: 10px;
                                color: red;">Por favor, preencha todos os campos corretamente.</p>
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
    $(document).ready(function(){
        $(".file-foto").change(function () {
        if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(".img-input").hide();
                    $(".show-img").hide();
                    $(".show-img").fadeIn(600);
                    $(".box-alterar-foto").show();
                    $('.img-to-show').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $(function(){
            $('.btn-img-input').click(function(){
                $(".file-foto").click();
            })

            $('.alterar-foto').click(function(){
                $(".file-foto").click();
            })
        })


          $('.button-avancar').click(function(){
              if($(".file-foto").val() != "" &&  $(".input-legenda").val() != ""){
                $("#formpost").submit();
              }else{
                $(".error-msg").show();
              }
             
            

        })

    })


</script>

@endsection

