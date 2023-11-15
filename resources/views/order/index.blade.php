@extends('layouts/main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказы</h1>
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
                            <a href="{{route('order.create')}}" class="btn-btn primary">Добавить</a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table   class="table table-hover text-wrap">
                                <thead>
                                    <tr style="font-size: 12px">
                                        <th>ID</th>
                                        <th>Клиент</th>
                                        <th>Номер</th>
                                        <th>Сумма</th>
                                        <th>Дата создания</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $ord)
                                    <tr style="font-size: 13px">
                                        <td style="width: 70px;">{{$ord->id}}</td>
                                        <td style="width: 100px;"><a href="{{route('order.show', $ord->id)}}">{{$ord->username}}</a></td>
                                        <td style="width: 100px;"> {{$ord->phone_number}}</td>
                                        <td >{{$ord->total}}₽</td>
                                        <td >{{$ord->created_at}}</td>
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
