@extends('layouts.app')
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг цен') }}

                </div>
                <div class="card-body">
                    <h2 >Добавить цену</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                    <form method="post" action="{{ route('shops.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="sity">Производитель:</label>
                            <select type="text" class="form-control" id="manufacturer_id" name="manufacturer_id"/>
                                <option disabled selected>Выберите производителя</option>
                                @foreach($manufacturers as $manufacturer)
                                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Бренд:</label>
                            <select type="text" class="form-control" id="brand_id" name="brand_id"/>
                                <option disabled selected>Выберите бренд</option>
                                
                            </select>
                            <img id="loader" src="{{url('/images/ajax-loader-nbg.gif')}}" alt="loader">
                        </div>
                        <div class="form-group">
                            <label for="product_id">Товар:</label>
                            <select type="text" class="form-control" id="product_id" name="product_id"/>
                                <option disabled selected>Выберите товар</option>
                                
                            </select>
                            <img id="loader-a" src="{{url('/images/ajax-loader-nbg.gif')}}" alt="loader">
                        </div>

                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="description">Цена:</label>
                               <input type="text" class="form-control" name="description"/>
                           </div>
                        </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="description">Цена со скидкой:</label>
                                    <input type="text" class="form-control" name="description"/>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить продукт</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #loader, #loader-a {
        position: relative;
        right: 18px;
        top: -30px;
        width: 20px;
        float: right;
    }
</style>
<script type="text/javascript">
    $(function () {
        var loader = $('#loader');
        var loadera = $('#loader-a');
        brand = $('select[name="brand_id"]');  
        product = $('select[name="product_id"]');     
        brand.attr('disabled','disabled');
        product.attr('disabled','disabled');
        loader.hide();
        loadera.hide();
        
    });
    $('#manufacturer_id').change(function(){
    var manufacturerID = $(this).val();    
    if(manufacturerID){
        var loader = $('#loader');
        brand.attr('disabled','disabled');
        
        loader.show();
        $.ajax({
           type:"GET",
           dataType: "json",
           url:"{{url('products-data')}}?manufacturer_id="+manufacturerID,
           success:function(data){               
            if(data){
                $("#brand_id").empty();
                $("#brand_id").append('<option>--Выберите бренд--</option>');
                $.each(data.data, function(key, value){
                    $("#brand_id").append('<option value="'+ value.id +'">'+ value.name +'</option>');
                });
                brand.removeAttr('disabled');
                loader.hide();
            }else{
               $("#brand_id").empty();
            }
           }
        });
    } else{
            $("#brand_id").empty();
            $("#product_id").empty();
        } 
   });
   $('#brand_id').on('change',function(){
        var brandID = $(this).val();    
        console.log(brandID);
        if(brandID){
            $.ajax({
               type:"GET",
               dataType: "json",
               url:"{{url('products-data')}}?brand_id="+brandID,
               success:function(res){     
                if(res){
                    $("#product_id").empty();
                    $.each(res.data, function(key,value){
                        $("#product_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    product.removeAttr('disabled');
                    //loadera.hide();
                }else{
                   $("#product_id").empty();
                }
               }
            });
        }else{
            $("#product_id").empty();
        }

       });
</script>
@endsection



