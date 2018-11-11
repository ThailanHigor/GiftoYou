@extends('layouts.app')

<style>

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Para uma melhor experiência, selecione algumas lojas que você curte.</div>

                    @if(Auth::check())
                    {!! Form::open(['route' => 'start.finish']) !!}
                    <div class="box-container">
                    
                        @foreach($lojas as $loja)
                                <div class="box-card">
                                
                                        <img src="/images/{{ $loja['Imagem_Thumb'] }}" alt="img" class="box-img">
                                        <input type="checkbox" name="lojas[]" class="check-lojas" value="{{$loja['Slug'] }}">
                                        <div class="box-title">{{ $loja['Nome']  }}</div>
                                
                                </div>

                        @endforeach
                    </div>
                    <button type="submit">Terminar</button>
                    {!! Form::close() !!}
                    @endif
            </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
            @endif
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
            

        })
    })
</script>

@endsection

