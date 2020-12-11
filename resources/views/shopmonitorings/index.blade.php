@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Мониторинг торговых точек') }}
                    <a href="/shopmonitorings/create" style="float: right;"class="btn btn-primary text-right">Добавить...</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Походы в торговые точки (ТТ)</h2>
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Название ТТ</td>
                                  <td>Дата</td>
                                  <td>Кол-во товаров</td>
                                  <td colspan = 2>Действия</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shopmonitorings ?? '' as $shopmonitoring)
                                <tr>
                                    <td>{{$shopmonitoring->id}}</td>
                                    <td>{{$shopmonitoring->shop->name}}</td>
                                    <td>{{$shopmonitoring->created_at}}</td>
                                    <td>0</td>

                                    <td>
                                        <a href="{{ route('shopmonitorings.edit',$shopmonitoring->id)}}" class="btn btn-sm btn-primary">Ред.</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('shopmonitorings.destroy', $shopmonitoring->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-sm btn-danger" type="submit">
                                            X
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