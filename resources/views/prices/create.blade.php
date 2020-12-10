@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг цен') }}

                </div>

                <div class="card-body">
                    <h2 >Добавить ценник</h2>
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
                            <select type="text" class="form-control" name="manufacturer_id"/>
                                <option disabled selected>Выберите производителя</option>
                                @foreach($manufacturers as $manufacturer)
                                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="adress">Бренд:</label>
                            <select type="text" class="form-control" name="manufacturer_id"/>
                                <option disabled selected>Выберите бренд</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="adress">Товар:</label>
                            <select type="text" class="form-control" name="manufacturer_id"/>
                                <option disabled selected>Выберите товар</option>
                                @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
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
@endsection



