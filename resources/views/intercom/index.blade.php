@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Домофоны</h1>
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
                            <a href="{{route('intercom.create')}}" class="btn btn primary">Добавить</a>
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
                                    <th>Разрешение экрана</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($intercoms as $intercom)
                                    <tr>
                                        <td>{{$intercom->id}}</td>
                                        <td><a href="{{route('intercom.show', $intercom->id)}}">{{$intercom->title}}</a></td>
                                        <td>{{$intercom->description}}</td>
                                        <td>{{$intercom->price}}</td>
                                        <td>{{$intercom->old_price}}</td>
                                        <td>{{$intercom->resolution}}</td>
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
