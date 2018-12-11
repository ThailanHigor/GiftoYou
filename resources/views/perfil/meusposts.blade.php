@extends('layouts.app')

@section('content')

<style> 
.row{
    width: 100%;
}
label{
    font-size: 19px;
   
}
p{
    margin-bottom: 5px;
}

.card-labels{
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    padding-bottom: 1.25rem;
    padding-top: 10px;
    display: flex; 
    justify-content: center;
    flex-direction: column;
    align-items: center

}

hr{
    width: 100%;
    margin-top: 0; 
    margin-bottom: 5px;
    border: 5;
    border-top: 1px solid rgb(246, 134, 0);
}
.btn-entrar{
    width: 100%;    
    font-family: 'Merienda One', cursive;
    font-size: 17px;
}
.card .card-body img{
    height:100px;
    width: 100px;
}
.card{
    margin-top: 10px
}

.card .card-body{
    display: flex;
    flex-direction: row;
}
.legenda-meus-posts{
    font-size: 18px;
    margin-left: 14px;
    width: 100%;
    width: 152px;

}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         
                @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        
                        
                        <a href="images/fotos/{{ $post['Foto'] }}" data-fancybox="images" data-caption="{{ $post['Legenda'] }}">
                                <img src="images/fotos/{{ $post['Foto'] }}" alt="" />
                        </a>
                            
                        <div class="legenda-meus-posts">   
                            <p style="height:60px">{{ $post['Legenda'] }}</p>
                            <p>{{ $post['created_at']->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
      
        </div>
    </div>
</div>
@endsection
