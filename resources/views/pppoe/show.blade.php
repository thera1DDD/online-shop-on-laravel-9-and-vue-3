@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать PPPoe коммутатор</h1>
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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('pppoe.edit',$pppoe->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('pppoe.delete',$pppoe->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$pppoe->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{$pppoe->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{$pppoe->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена</td>
                                        <td>{{$pppoe->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Старая цена</td>
                                        <td>{{$pppoe->old_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество</td>
                                        <td>{{$pppoe->count}}</td>
                                    </tr>
                                    <tr>
                                        <td>Пропускная спосоность</td>
                                        <td>{{$pppoe->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Порты</td>
                                        <td>{{$pppoe->port}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
