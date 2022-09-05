@extends('layout.master')
@section('content')

    <div class="row">
        <div class="card col-12">

            <div class="card-body"><br>
                <h5 class="card-title" style="text-align: center; color: #6f183f">إنشاء/إضافة دورة تدريبية</h5>
               <form method="post" action="{{route('folders.store')}}">
                   @csrf
                   <div class="mb-3">
                       <label for="name" class="form-label">اسم الدورة</label>
                       <input type="text" class="form-control" id="name" name="name" placeholder="أنشئ/أضف دورة جديدة" required>
                       <br><br>

                       <lable for="name" class="form-label"> عنوان الدورة </lable>
                       <input type="text" class="form-control" id="address" name="add" placeholder="عنوان الدورة" required>
                       <br><br>

                       <select class="form-select" id="category" name="category" aria-label="Default select example">
                           <option selected>اختر أحد التصنيفات التالية</option>
                           <option value="1">جيد</option>
                           <option value="2">جيد جدا</option>
                           <option value="3">ممتاز</option>
                       </select>
                       <br><br>
                       <textarea id="description" cols="30" rows="3" class="form-control" name="description" placeholder="تفاصيل الدورة"></textarea>
                       <br><br>
                       <label for="name" class="form-label">عدد ساعات الدورة</label>
                       <input type="number" class="form-control" id="num_hours" name="num_hours" placeholder="عدد ساعات الدورة" required>
                       <br><br>
                       <div class = "row">
                           <div class="col-md-4">
                               <label for="start_date">تاريخ البدء</label>
                               <input type="date" class="form-control" name="start_date" id="start_date">
                               <br><br>
                           </div>
                           <select class="form-select" id="coach" name="coach" aria-label="Default select example">
                               <option selected>اختر المدرب</option>
                               <option value="1">أحمد</option>
                               <option value="2">رامي</option>
                               <option value="3">عبد الله</option>
                           </select>
                       </div>
                   </div>
                   <br><br>
                   <div style="text-align: center">
                   <button type="submit" class="btn btn-outline-primary">إضافة دورة جديدة</button>
                   </div>
               </form>
            </div>
        </div>
    </div>
@endsection
