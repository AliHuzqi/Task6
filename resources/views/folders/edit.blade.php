@extends('layout.master')
@section('content')

    <div class="row">
        <div class="card col-12">

            <div class="card-body"><br>
                <h5 class="card-title" style="color:red; text-align: center">تعديل الدورة</h5>
                <form method="POST" action="{{route('folders.update',['id'=>$folder->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">اسم الدورة</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$folder->name}}" placeholder="أضف دورة جديدة" required>
                        <div class="form-check form-switch">
                            <br>
                            <div class="form-check">
{{--                                <input class="form-check-input" type="radio" name="status" value="1" {{ $folder->status == 1 ? "checked":"" }} id="flexRadioDefault1">--}}
{{--                                <label class="form-check-label" for="flexRadioDefault1">--}}
{{--                                    active--}}
{{--                                </label>--}}
                            </div>
                            <div class="form-check">
{{--                                <input class="form-check-input" type="radio" name="status" value="0" {{ $folder->status == 0 ? "checked":"" }} id="flexRadioDefault2" >--}}
{{--                                <label class="form-check-label" for="flexRadioDefault2">--}}
{{--                                    enactive--}}
{{--                                </label>--}}
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-outline-primary">تعديل دورة</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
