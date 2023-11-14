@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PPPoe коммутаторы</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('pppoe.create')}}" class="btn btn primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Описание</th>
                                    <th>Цена</th>
                                    <th>Старая цена</th>
                                    <th>Количество</th>
                                    <th>Пропусная способность</th>
                                    <th>Порты</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pppoes as $pppoe)
                                    <tr>
                                        <td>{{$pppoe->id}}</td>
                                        <td><a href="{{route('pppoe.show', $pppoe->id)}}">{{$pppoe->title}}</a></td>
                                        <td>{{$pppoe->description}}</td>
                                        <td>{{$pppoe->price}}</td>
                                        <td>{{$pppoe->old_price}}</td>
                                        <td>{{$pppoe->count}}</td>
                                        <td>{{$pppoe->capacity}}</td>
                                        <td>{{$pppoe->port}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
