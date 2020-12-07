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
                            <h2>Изменить производителя</h2>

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
                            
                            <form method="post" action="{{ route('manufacturers.update', $manufacturer->id) }}">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название:</label>
                                    <input type="text" class="form-control" value="{{$manufacturer->name}}" name="name"/>
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание:</label>
                                    <input type="text" class="form-control" value="{{$manufacturer->description}}" name="description"/>
                                </div>

                                <button type="submit" class="btn btn-primary">Обновить производителя</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
