{{-- <style> 
        .fancybox-content{
            width: 95% !important;
            padding: 18px !important;
            margin-right: 41px;
            margin-left: 43px;
            height: 380px;
        }
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
        
        .box-comentario2{
            padding: 12px;
        display: flex;
        flex-direction: row;
        margin-top: 10px;
        border: 1px solid #0000002e;
        }
        
        .comment-img{
            background: red;
            width: 29%;
        }
        .fancybox-content{
            width: 95% !important;
            padding: 18px !important;
        }
        .comment-text{
            margin-left: 18px;
            display: flex;
            font-size: 16px;
            flex-direction: column;
        }
        .comment-data{
            text-align: right;
        }
        p { word-break: break-all } --}}
        
 
<div class="message">
    <h3>Comentários<h3>
@foreach ($posts['comentarios'] as $c)

        <div class="box-comentario2">
            <div class="comment-text"><p>{{$c['Comentario']}}</p>
               
             </div>
             <p>{{$posts['created_at']->format('d/m/Y')}}</p>
        </div>
    
@endforeach
    </div>