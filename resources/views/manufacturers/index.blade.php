@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    {{ __('Мониторинг') }}
                    <a href="/manufacturers/create" style="float: right;"class="btn btn-primary text-right">Добавить...</a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Производители</h2>
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                  <td>Название</td>
                                  <td>Описание</td>
                                  <td colspan = 2>Действия</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($manufacturers ?? '' as $manufacturer)
                                <tr>
                                    <td>{{$manufacturer->id}}</td>
                                    <td>{{$manufacturer->name}}</td>
                                    <td>{{$manufacturer->description}}</td>
                                    <td>
                                        <a href="{{ route('manufacturers.edit',$manufacturer->id)}}" class="btn btn-primary">Ред.</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('manufacturers.destroy', $manufacturer->id)}}" method="post">
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


