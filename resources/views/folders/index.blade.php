@extends('layout.master')
@section('content')

{{--    <nav class="navbar bg-light">--}}
{{--        <form class="container-fluid justify-content-start">--}}
{{--            <button class="btn btn-outline-success me-2" type="button"><a href="{{route('folders.index')}}"> Folder section</a></button>--}}
{{--            <button class="btn btn-sm btn-outline-secondary" type="button"><a href="{{route('file.create')}}"> File section</a></button>--}}
{{--        </form>--}}
{{--    </nav>--}}
<br><br>
    <h1 style="text-align: center; color: #984c0c"> صفحة خاصة بإدارة الدورات التدريبية </h1>
    <div class="row">
        <div class="card col-12">
            <div class="card-body" style="text-align: center"><br>
                <a href="{{route('folders.create')}}" class="btn btn-primary">إضافة دورة تدريبية</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-12">
            <div class="card-body">
                {{--                {{$folders}}--}}
{{--                <h5 class="card-title">Table Of Folder</h5>--}}
                @csrf
                <div class="mb-3">
                    <div >
                        <table class="table table-striped"><br>
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">اسم الدورة</th>
                                <th scope="col">عنوان الدورة</th>
                                <th scope="col">تصنيفات الدورة</th>
                                <th scope="col">تفاصيل الدورة</th>
                                <th scope="col">عدد ساعات الدورة</th>
                                <th scope="col">تاريخ بدء الدورة</th>
                                <th scope="col">اسم مدرب الدورة</th>
                                <th scope="col">عمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($folders as $folder)

                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$folder->name}}</td>
                                    <td> {{$folder->add_course}} </td>
                                    <td> {{$folder->category}} </td>
                                    <td> {{$folder->detailes_course}} </td>
                                    <td> {{$folder->num_hours}} </td>
                                    <td> {{$folder->start_date}} </td>
                                    <td> {{$folder->coach}} </td>
                                    <td>
                                        <a href="{{route('folders.edit',$folder->id)}}" class="btn btn-success"> تعديل دورة</a>
                                            <form method="post" action="{{route('folders.delete',$folder->id)}}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="حذف دورة">
                                        </form>
{{--                                    <a href="{{route('folders.delete',$folder->id)}}" class="btn btn-danger"> حذف الدورة </a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
@endsection

