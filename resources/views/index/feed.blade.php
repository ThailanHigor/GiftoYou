@extends('layouts.app')

<style>
.box-feed{
    width: 100%;
    box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.15);
    padding: 7px;
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
    display: flex;
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
    border-radius: 41px;
}
.btn-feed:hover{
    border: 1px solid white;
    background: linear-gradient(135deg, #9a0505 0%,#ffb000 100%);
    color: white;
    
}


}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="box-feed">
                
                    <div class="box-feed-post">
                        <div class="box-image-feed">
                            <img class="image-post" src="https://picsum.photos/276/270" alt="">
                        </div>

                        <div class="box-tags-feed">
                            <a href="javascrpit:void(0)" class="tag">LojasAmericanas</a>
                            <a href="javascrpit:void(0)" class="tag">QueroMuito</a>
                            <a href="javascrpit:void(0)" class="tag">NatalChega</a>
    
                        </div>  

                        <div class="box-info-feed"> 
                            <div class="box-info-photo">
                                <div class="box-photo">
                                    <img src="images/icons/avatar.svg" alt="">
                                </div>
                                <div class="box-legenda">
                                    <div><b>Thailan Higor</b></div>
                                    <div>Testando apenas o box de legenda de uma foto</div>
                                </div>
                            </div>
                            <div class="box-buttons-feed">
                                <span class="btn-feed btn-gift">  <img src="images/icons/gift.svg" class="img-btn-feed" alt="">Curtir</span>
                                <span class="btn-feed btn-comentar"><img src="images/icons/chat.svg" class="img-btn-feed" alt="">Comentar</span>
                            </div>
                        </div>
                    </div> 

                </div>
                <div class="box-feed">
                
                        <div class="box-feed-post">
                            <div class="box-image-feed">
                                <img class="image-post" src="https://picsum.photos/276/270?random" alt="">
                            </div>
    
                            <div class="box-tags-feed">
                                <a href="javascrpit:void(0)" class="tag">LojasAmericanas</a>
                                <a href="javascrpit:void(0)" class="tag">QueroMuito</a>
                                <a href="javascrpit:void(0)" class="tag">NatalChega</a>
        
                            </div>  
    
                            <div class="box-info-feed"> 
                                <div class="box-info-photo">
                                    <div class="box-photo">
                                        <img src="images/icons/avatar.svg" alt="">
                                    </div>
                                    <div class="box-legenda">
                                        <div><b>Thailan Higor</b></div>
                                        <div>Testando apenas o box de legenda de uma foto</div>
                                    </div>
                                </div>
                                <div class="box-buttons-feed">
                                    <span class="btn-feed btn-gift">  <img src="images/icons/gift.svg" class="img-btn-feed" alt="">Curtir</span>
                                    <span class="btn-feed btn-comentar"><img src="images/icons/chat.svg" class="img-btn-feed" alt="">Comentar</span>
                                </div>
                            </div>
                        </div> 
    
                    </div
            </div>
        </div>
    </div>
</div>

<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
<script src="/js/slick.js" ></script>


<script>  
    $('.panel-success').slick({
        slidesToShow: 1,
         arrows: true,
    });
 </script>
@endsection

