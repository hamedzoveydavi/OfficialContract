<style>
.headerfont{
    font:1.5em black bold;
    font-family:b nazanin;
    text-align:center;
}
tbody{
    text-align:center;
    font: font:1em black bold;
    font-family:b nazanin;
}

</style>

     <table id="PersonelTbl" class="table table-striped table-bordered" style="width:100%">
        <thead class="headerfont">
            <tr>
                <th>حقوق و مزایا</th>
                <th>محل خدمت</th>
                <th>واحد سازمانی</th>
                <th>شغل</th>
                <th>نام و نام خانوادگی</th>
                <th>کد پرسنلی</th>
            </tr>
        </thead>
        <tbody>
        
        @if(!empty($tbl))
            @foreach($tbl as $list)
            <tr>
                <td>
                @component('components.personnel.EmploymentHokmList',[
                                                      'per'=>$list->PersonnelCode
                                         ])
                                         @endcomponent
                </td>
              
               <td>{{$list->Placeofwork}}</td>
               <td>{{$list->Unit}}</td>
               <td>{{$list->JobTitle}}</td>
               <td>{{$list->Name}} {{$list->Family}}</td>
               <td>{{$list->PersonnelCode}}</td>
            </tr>
            @endforeach
        @endif
       
        </tbody>
        
    </table>




<script>
$(document).ready( function () {
    $('#PersonelTbl').DataTable();
} );

</script>
