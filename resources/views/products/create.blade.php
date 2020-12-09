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

                    {{ __('Мониторинг: конфигурация') }}

                </div>

                <div class="card-body">
                    <h2 >Добавить продукт</h2>
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
                    <form method="post" action="{{ route('products.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="manufacturer_id">Производитель:</label>
                            <select type="text" class="form-control" id="manufacturer_id" name="manufacturer_id"/>
                                <option disabled selected>--Выберите производителя--</option>
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
                            <label for="name">Название:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить продукт</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #loader {
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
        brand = $('select[name="brand_id"]');       
        brand.attr('disabled','disabled');
        loader.hide();
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
                $.each(data, function(key, value){
                    $("#brand_id").append('<option value="'+ key +'">'+ value +'</option>');
                });
                brand.removeAttr('disabled');
                loader.hide();
            }else{
               $("#brand_id").empty();
            }
           }
           error: function (req, status, err) {
                console.log('Something went wrong', status, err);
            }
        });
    } 
   });

</script>
@endsection



