@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг') }}

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <h1 class="display-3">Изменить</h1>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br />
                            @endif
                            <form method="post" action="{{ route('prices.update', $price->id) }}">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название:</label>
                                    <input type="text" class="form-control" value="{{$price->name}}" name="name"/>
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание:</label>
                                    <input type="text" class="form-control" value="{{$price->description}}" name="description"/>
                                </div>
                                <div class="form-group">
                                    <label for="sity">Город:</label>
                                    <input type="text" class="form-control" value="{{$price->sity}}" name="sity"/>
                                </div>
                                <div class="form-group">
                                    <label for="adress">Адрес:</label>
                                    <input type="text" class="form-control" value="{{$price->adress}}" name="adress"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Обновить магазин</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
