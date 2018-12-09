@extends('layouts.app')

<style>
    .button-meus-amigos{
        height: 45px;
    color: white;
    background: #ffb000;
    border-bottom-left-radius: 7px;
    border-top-left-radius: 7px;
    font-size: 19px;
    width: 148px;
    text-align: center;
    line-height: 44px;
    margin-top: 4%;
    margin-right:  3px;
    text-decoration: none;
    box-shadow: 0px 0px 7px -2px rgba(0,0,0,1);
    background: linear-gradient(135deg, #9a0505 0%,#ffb000 100%);
    font-family: 'Acme', sans-serif;
    }

    .button-novo-amigo{
        height: 45px;
    color: white;
    background: #ffb000;
    border-bottom-right-radius: 7px;
    border-top-right-radius: 7px;
    font-size: 19px;
    width: 148px;
    text-align: center;
    line-height: 44px;
    margin-top: 4%;
    box-shadow: 0px 0px 7px -2px rgba(0,0,0,1);
    background: linear-gradient(135deg, #ffb000 0%,#9a0505  100%);
    font-family: 'Acme', sans-serif;
    text-decoration: none;
    }


.nome-amigo{
    width: 80%;
    display: flex;
    color:black;
    align-items: center;
}

.text-nome-amigo{
    font-size: 18px;
    font-family: 'Acme', sans-serif;
    margin-left: 14px;
}
.box-amigo{
    box-shadow: 0px 2px 0px 1px rgba(0, 0, 0, 0.34);
    display: flex;
    height: 65px;
    margin-top: 12px;
    background: white;
}
.foto-box-amigos{
    padding: 5px;
}
.btn-ative-friend{
    border: 2px solid #fff;
}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="box-container-start">
                    

                    <div class="box-img-text" style="justify-content:center">
                        <a class="button-meus-amigos" href="javascript:void(0)" click="on">Meus amigos</a>
                        <a class="button-novo-amigo" href="javascript:void(0)" click="on">Novo amigo</a>
                    </div>
                    <div class="box-info-amigos textos-soltos" >   


                    </div>
                    
                </div>


            </div>
        </div>
    </div>
</div>


<script>  
    $(document).ready(function(){
        $(".button-meus-amigos").click();
    })

    $(".button-meus-amigos").click(function(){
        $(".button-novo-amigo").attr("click","on");
        $(".button-novo-amigo").removeClass("btn-ative-friend");
        $(this).addClass("btn-ative-friend");
        var status = $(".button-meus-amigos").attr("click");
        var id_user = {{ Auth::user()->id}};
        var data = {
            "id_user" : id_user,
        }

        if(status == "on"){
            $.ajax({
            url: '/meus-amigos',
            dataType: 'html',
            data: data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: 'post'
            }).done(function(msg){
                if(msg == ""){
                   msg="<p style='text-align:center;margin-top: 30px;'>Você ainda não tem amigos.</p>"+
                   "<p style='text-align:center'>Clique em <b>Novo amigo</b> para adicionar mais.</p>";
                }
                $('.box-info-amigos').html(msg);
                $(".button-meus-amigos").attr("click","off");
            });   

        }

    })

    $(".button-novo-amigo").click(function(){
        $(".button-meus-amigos").attr("click","on");
        $(".button-meus-amigos").removeClass("btn-ative-friend");
        $(this).addClass("btn-ative-friend");
        var status = $(".button-novo-amigo").attr("click");
        
        var id_user = {{ Auth::user()->id}};
        var data = {
            "id_user" : id_user,
        }

        if(status == "on"){
            $.ajax({
            url: '/novo-amigo',
            dataType: 'html',
            data: data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: 'post'
            }).done(function(msg){

                $('.box-info-amigos').html(msg);
                $(".button-novo-amigo").attr("click","off");
            });   

        }

    })

    $(".button-novo-amigo").click(function(){
        $(".button-meus-amigos").attr("click","on");
        var status = $(".button-novo-amigo").attr("click");
        
        var id_user = {{ Auth::user()->id}};
        var data = {
            "id_user" : id_user,
        }

        if(status == "on"){
            $.ajax({
            url: '/novo-amigo',
            dataType: 'html',
            data: data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            method: 'post'
            }).done(function(msg){

                $('.box-info-amigos').html(msg);
                $(".button-novo-amigo").attr("click","off");
            });   

        }

    })
    
</script>

@endsection

