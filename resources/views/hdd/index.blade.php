@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">HDD</h1>
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
                            <a href="{{route('hdd.create')}}" class="btn btn primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Размер</th>
                                    <th>Описание</th>
                                    <th>Цена</th>
                                    <th>Старая цена</th>
                                    <th>Количество</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hdds as $hdd)
                                    <tr>
                                        <td>{{$hdd->id}}</td>
                                        <td><a href="{{route('hdd.show', $hdd->id)}}">{{$hdd->title}}</a></td>
                                        <td>{{$hdd->size}}</td>
                                        <td>{{$hdd->description}}</td>
                                        <td>{{$hdd->price}}</td>
                                        <td>{{$hdd->old_price}}</td>
                                        <td>{{$hdd->count}}</td>
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
