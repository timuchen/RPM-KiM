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
                            <h2>Изменить</h2>
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
                            <form method="post" action="{{ route('brands.update', $brand->id) }}">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название:</label>
                                    <input type="text" class="form-control" value="{{$brand->name}}" name="name"/>
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание:</label>
                                    <input type="text" class="form-control" value="{{$brand->description}}" name="description"/>
                                </div>
                                <div class="form-group">
                                    <label for="sity">Производитель:</label>
                                <select type="text" class="form-control" name="manufacturer_id"/>
                                    @foreach($manufacturers as $manufacturer)
                                        @if ($brand->manufacturer->id = !$manufacturer->id)
                                            <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                        @else
                                            <option value="{{$manufacturer->id}}" selected>{{$manufacturer->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Обновить бренд</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
