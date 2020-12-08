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
                    <h2>Добавить бренды</h2>
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
                    <form method="post" action="{{ route('brands.store') }}">
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
                            <label for="name">Название:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Добавить бренд</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



