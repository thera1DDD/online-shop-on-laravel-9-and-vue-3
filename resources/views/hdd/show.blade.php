@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать HDD</h1>
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
                                <a href="{{route('hdd.edit',$hdd->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('hdd.delete',$hdd->id) }}" method="post">
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
                                        <td>{{$hdd->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{$hdd->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Размер</td>
                                        <td>{{$hdd->size}}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{$hdd->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Цена</td>
                                        <td>{{$hdd->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Старая цена</td>
                                        <td>{{$hdd->old_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество</td>
                                        <td>{{$hdd->count}}</td>
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
