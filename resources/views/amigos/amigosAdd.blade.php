<style> 

        .nome-amigo{
            width: 50%;
            display: flex;
            align-items: center;
        }
        
        .text-nome-amigo{
            font-size: 18px;
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
        .Adicionar{
            align-items: center;
            justify-content: center;
            width: 30%;
            display: flex;
        }
        .add-btn{
            border-bottom-right-radius: 7px;
            border-top-left-radius: 7px;
            background: #f09601;
            padding: 4px;
            color: white;
        }
        .add-btn-adicionado{
            background: #115006 !important;
            border-bottom-right-radius: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 7px;
            border-bottom-left-radius: 7px;
        }
        </style>
@foreach ($amigos as $amigo)
<div data-id="{{ $amigo["id"]}}" class="box-amigo" >
    <div class="foto-box-amigos" style="width: 20%;">
        <img src="images/fotoperfil/{{ $amigo['FotoPerfil']}}" alt="">
    </div>
    <div class="nome-amigo"> 
        <span class="text-nome-amigo">{{ $amigo["name"]}}</span>
    </div>
    <div class="Adicionar" data-id="{{ $amigo["id"]}}" click="on" >
        <span class="add-btn" >Adicionar </span>
    </div>

    
</div>
@endforeach

<script>    
    $(".Adicionar").click(function(){
        var status = $(this).attr("click");
        var el = $(this);
        var id_friend = $(this).attr("data-id");    
        var id_user = {{ Auth::user()->id}};
        var data = {
            "id_user" : id_user,
            "id_friend": id_friend,
        }
        if(status == "on"){
            $.ajax({
                url: '/add-amigo',
                dataType: 'html',
                data: data,
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                method: 'post'
                }).done(function(msg){ 
                    if(msg){
                        el.find(".add-btn").text("Adicionado");
                        el.find(".add-btn").addClass("add-btn-adicionado");
                        el.attr("click","off");
                    }
            });   
        }


        

    })

</script>