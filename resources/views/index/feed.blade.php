@extends('layouts.app')

<style>
.box-feed{
    width: 100%;
    /*box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.15);*/
    padding: 7px;
    background: white;
    border-radius: 8px;
    border: 1px solid rgba(0,0,0,.29);
}

.box-image-feed{
    height:57%;
}
.box-info-feed{
    margin-top: 8px;
    padding: 3px;
}
.image-post{
    width: 100%;
    height: 100%;
    border-radius: 3px;
}

.box-feed-post{

    flex-direction: column;
}

.box-photo{
    width: 24%;
    margin: 2px 5px 0px 0px;
}
.box-info-photo{
    display: flex;
}

.box-legenda{
    border-radius: 5px;
    width: 81%;
    height: 102px;
    box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.1);
    padding: 6px;
    color: black;
}

.box-buttons-feed{
    margin-top: 8px;
    width: 100%;
    height: 34px;
    display: flex;
    justify-content: space-between;
}
.btn-feed{
    width: 48%;
    color: black;
}
.box-tags-feed{
    margin-top: 5px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

}

.tag{
    padding: 2px;
    border-radius: 3px;
    color: #FFF;
    height: 26px;
    margin: 2px;
    border: 1px solid #d6cbcb;
    color: #9c9c9c;
}
a{
    text-decoration: none;
    color:white;
}

.img-btn-feed{
    width: 23PX;
    margin-right: 10px;
}

.btn-feed{
    align-items: center;
    width: 48%;
    justify-content: center;
    display: flex;
    border-radius: 6px;
}
.btn-feed:hover{
    border: 1px solid white;
    background: linear-gradient(135deg, #9a0505 0%,#ffb000 100%);
    color: white;
    
}
.btn-active{
    border: 1px solid white;
    background: linear-gradient(135deg, #9a0505 0%,#ffb000 100%);
    color: white;
}

.panel{
    width:330px !important;
}
.btn-img-text-curtir{
    
}
.ver-comentarios{
    padding: 3px;
    border-radius: 2px;
    position: relative;
    left: 597px;
    top: -356px;
    color: white;
}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 textos-soltos" >
            <div class="panel panel-success">

            @if($posts == [])
            <div >
                <p style="text-align: center;font-size:17px;">Seus amigos não postaram nada ainda!</p>
                <p style="text-align: center;font-size:17px">Mas, experimente adicionar novos amigos, no icone de navegação do menu acima.</p>
            </div>
            @else
                @foreach($posts as $post)
               
                    <?php $curtiu = false ?>
                    <div class="box-feed">
                        <div class="box-feed-post">
                            <div class="box-image-feed">
                                <a href="images/fotos/{{ $post['Foto'] }}" data-fancybox="images" data-caption="{{ $post['Legenda'] }}">
                                    <img  class="image-post"  src="images/fotos/{{ $post['Foto'] }}" alt="" />
                                </a>
                                @if(!$post['comentarios']->isEmpty())
                                <span  class="ver-comentarios" data-id="{{$post['id']}}"> 
                                    <img  class="image-post"  src="images/icons/comments.svg" alt=""  style="    height: 35px;
                                    width: 41px;"/>
                                </span>
                                @endif
                                            
                            </div>

                            <div class="box-tags-feed">
                                @if($post != null)
                                    @foreach ($post['tagsposts'] as $tag)
                                        <a href="javascrpit:void(0)" class="tag"> {{$tag['NomeTag']}}</a>
                                    @endforeach
                                @endif
                              
                            </div>  

                            <div class="box-info-feed"> 
                                <div class="box-info-photo">
                                    <div class="box-photo">
                                      
                                        <img src="images/fotoperfil/{{ $post['users']['FotoPerfil']}}" alt="">
                                    </div>
                                    <div class="box-legenda">
                                        <div><b>{{ $post['users']['name']}}</b></div>
                                        <div>{{ $post['Legenda'] }}</div>
                                    </div>
                                </div>
                                @if($post['likes']  != null)   
                                <div class="box-buttons-feed">
                                    @foreach ($post['likes'] as $like)
                                    @if($like->PostId == $post['id'] && $like->User_id == Auth::user()->id )
                                        <span class="btn-feed btn-gift btn-active" data-id="{{$post['id']}}"> 
                                        <img src="images/icons/gift.svg" class="img-btn-feed"  alt="">
                                            <span class="btn-img-text-curtir">Curtiu</span> </span>
                                        <?php $curtiu = true ?>
                                    @endif
                                    @endforeach
                                    
                                    @if(!$curtiu)
                                    <span class="btn-feed btn-gift" data-id="{{$post['id']}}"> 
                                            <img src="images/icons/gift.svg" class="img-btn-feed"  alt="">
                                            <span class="btn-img-text-curtir ">Curtir</span>
                                    </span>
                                    @endif
                                
                                <span class="btn-feed btn-comentar {{$post['comentarios']->isEmpty() ? "" : "btn-active"}}" >
                                        <img src="images/icons/chat.svg" class="img-btn-feed" alt="">
                                        <span class="comment" data-id="{{$post['id']}}">
                                            {{$post['comentarios']->isEmpty() ? "Comentar" : "Comentou"}}
                                        </span>
                                    </span>
                                </div>
                                @endif

                            </div>
                        </div> 
                    </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>

<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
<script src="/js/slick.js" ></script>

<style> 

.comment-container{
    display: flex;
    flex-direction: column;
}

.box-comentario{
    border: 1px solid #0000009c;
    height: 116px;
    font-size: 18px;
}
.btn-enviar-comment{
    font-size: 19px;
    margin-top: 20px;
    border: 1px solid white;
    background: linear-gradient(135deg, #9a0505 0%,#ffb000 100%);
    color: white;
    height: 37px;
    border-radius: 6px;
}

</style>

<script>  
  

    $(document).ready(function() {
        
        $('.panel-success').slick({
        slidesToShow: 1,
         arrows: false,
        });

    });

    $(".btn-gift").click(function(){
        var el = $(this);
        var id_post = $(this).attr('data-id');
        var id_user = {{ Auth::user()->id}};
        var data = {
            "id_post" : id_post,
            "id_user" : id_user,
        }
        $.ajax({
        url: '/feed/likePost',
        dataType: 'html',
        data: data,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: 'post'
        }).done(function(msg){
            if(msg){
                el.find('.btn-img-text-curtir').text("Curtiu");
                el.addClass("btn-active");
 
            }
        });
    })

    
$(".comment").on('click', function() {
  var idpost = $(this).attr('data-id');
  $.fancybox.open({
    src : '<div class="message"><h3>Novo comentário</h3>'+
            '<form method="post" action="/post-comentar">'+
            '<div class="comment-container">'+
                '<input type="hidden" name="_token" class="idpostcomment"  value ="{{ csrf_token() }}"/>'+
                '<input type="hidden" name="id_post" class="idpostcomment"  value ="'+idpost+'"/>'+
                '<input type="hidden" name="id_user" class="idpostcomment"  value ="{{Auth::user()->id}}"/>'+
                
                '<textarea class="box-comentario" name="comment"/></textarea>'+
                '<button class="btn-enviar-comment btn-comentar btn-finalizar" >Finalizar</button> ' +
            '</div>'+  
            '</form>'+ 
           '</div>',

    type : 'html',
    smallBtn : false
  });
  
});

$(".ver-comentarios").on('click', function() {
        var idpost = $(this).attr('data-id');
        var data = {
            "id_post" : idpost,
        }
        $.ajax({
        url: '/getPostsById',
        dataType: 'html',
        data: data,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: 'get'
        }).done(function(msg){
            $.fancybox.open({
            src : msg,

            type : 'html',
            smallBtn : false
        }   );

       
        });
  
});


 </script>
@endsection

