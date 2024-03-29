@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Мониторинг торговых точек') }} <span class="badge bg-warning text-dark">Старт</span>
                </div>
                <div class="card-body">
                    <h2>Вход в магазин</h2> 
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
                    <form method="post" action="{{ route('shopmonitorings.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="shop_id">Торговые точки:</label>
                            <select type="text" class="form-control" id="shop_id" name="shop_id"/>
                                <option disabled selected>--Выберите торговую точку--</option>
                                @foreach($shops as $shop)            
                                <option value="{{$shop->id}}">{{$shop->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Добавить фото витрины</label>
                            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                        <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Создать мониторинг</button> 
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



