@extends('layouts.app')

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
                            <select type="text" class="form-control" name="manufacturer_id"/>
                                <option disabled selected>Выберите производителя</option>
                                @foreach($manufacturers as $manufacturer)
                                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Бренд:</label>
                            <select type="text" class="form-control" name="brand_id"/>
                                <option disabled selected>Выберите бренд</option>
                                <img id="loader" src="{{url('/images/ajax-loader-nbg.gif')}}" alt="loader">
                            </select>
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
        position: absolute;
        right: 18px;
        top: 30px;
        width: 20px;
    }
</style>
<script>
    $(function () {
        var loader = $('#loader'),
            manufacturer = $('select[name="manufacturer_id"]'),
            brand = $('select[name="brand_id"]');

        loader.hide();
        brand.attr('disabled','disabled')

        brand.change(function(){
            var id = $(this).val();
            if(!id){
                brand.attr('disabled','disabled')
            }
        })

        manufacturer.change(function() {
            var id= $(this).val();
            if(id){
                loader.show();
                brand.attr('disabled','disabled')

                $.get('{{url('/product-data?manufacturer_id=')}}'+id)
                    .success(function(data){
                        var s='<option value="">---select--</option>';
                        data.forEach(function(row){
                            s +='<option value="'+row.id+'">'+row.name+'</option>'
                        })
                        brand.removeAttr('disabled')
                        brand.html(s);
                        loader.hide();
                    })
            }

        })
    })
</script>
@endsection



