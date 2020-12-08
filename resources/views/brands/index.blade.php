@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг') }}
                    <a href="/brands/create" style="float: right;"class="btn btn-primary text-right">Добавить...</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Бренды</h2>
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Название</td>
                                  <td>Описание</td>
                                  <td>Производитель</td>
                                  <td colspan = 2>Действия</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->name}} {{$brand->last_name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td>
                                        @if ($brand->manufacturer->name)
                                        {{$brand->manufacturer->name}}
                                        @else
                                        {{$brand->manufacturer_id}}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('brands.edit',$brand->id)}}" class="btn btn-primary">Ред.</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('brands.destroy', $brand->id)}}" method="post">
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


