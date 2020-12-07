@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг') }}
                    <a href="/shops/create" style="float: right;"class="btn btn-primary text-right">Добавить...</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Магазины</h2>
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Название</td>
                                  <td>Описание</td>
                                  <td>Город</td>
                                  <td>Адрес</td>
                                  <td colspan = 2>Действия</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shops as $shop)
                                <tr>
                                    <td>{{$shop->id}}</td>
                                    <td>{{$shop->name}} {{$shop->last_name}}</td>
                                    <td>{{$shop->description}}</td>
                                    <td>{{$shop->sity}}</td>
                                    <td>{{$shop->adress}}</td>
                                    <td>
                                        <a href="{{ route('shops.edit',$shop->id)}}" class="btn btn-primary">Ред.</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('shops.destroy', $shop->id)}}" method="post">
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


