@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг цен') }}
                    <a href="/prices/create" style="float: right;"class="btn btn-primary text-right">Добавить...</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Отчёты</h2>
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Название</td>
                                  <td>Описание</td>
                                  <td>Производитель</td>
                                  <td>Бренд</td>
                                  <td>Цена</td>
                                  <td>Цена со скидкой</td>
                                  <td colspan = 2>Действия</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prices as $price)
                                <tr>
                                    <td>{{$price->id}}</td>
                                    <td>{{$price->name}} {{$price->last_name}}</td>
                                    <td>{{$price->description}}</td>
                                    <td>{{$price->sity}}</td>
                                    <td>{{$price->adress}}</td>
                                    <td>
                                        <a href="{{ route('prices.edit',$price->id)}}" class="btn btn-primary">Ред.</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('prices.destroy', $price->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">
                                            Del
                                          </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        <div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


