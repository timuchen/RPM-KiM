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
                    <h2 >Добавить магазин</h2>
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
                            <label for="name">Название:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <div class="form-group">
                            <label for="sity">Город:</label>
                            <input type="text" class="form-control" name="sity"/>
                        </div>
                        <div class="form-group">
                            <label for="adress">Адрес:</label>
                            <input type="text" class="form-control" name="adress"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить магазин</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



