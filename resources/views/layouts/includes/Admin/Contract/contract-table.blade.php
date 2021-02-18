
<?php
use App\Models\contractPriodOfdat;
 $tbl = contractPriodOfdat::OrderBy('CounterOfPriod','desc')->get();
 //return view('layouts.includes.Admin.Contract.contract-table',['tbl'=>$q]);
?>
   <style>
   table{
    font-family:b nazanin;
    width:95%;
    border:1px solid black;
    border-radius:5px;
    text-align:center;
    
   }
   th{
    height:33px;
    border:1px solid black;
    text-align:center;
    background-color:silver;
   

   }

   td{
    border:1px solid black;
    text-align:center;
   
   }

   #content{
     width:100%;
    text-align:center;
    margin:20px 5px 10px 5px;
    margin-left:2.5%;
   }

   .circelbtn{
    border-radius:35px;
    padding:10px 10px 10px 10px;
   }
   
   </style>

<?php use App\Models\PersonnelContract;?>
 



<div id="content" >

        <table >
            <thead>
                <tr >
                    <th style="width:20%">وضعیت</th>
                    <th style="width:20%">ویرایش</th>
                    <th style="width:10%">وضعیت</th>
                    <th style="width:10%">تعداد قرارداد</th>
                    <th style="width:35%">بازه زمانی</th>
                    <th style="width:10%">ردیف</th>
                </tr>
            </thead>
            <tbody>
            
       @foreach($tbl as $list)
           
            <tr>
               <td style="width:80px">
                    <a class="btn btn-secondary circelbtn" href="{{Route('CreatePersonelContract')}}">
                        <i class="fa fa-folder-open-o fa-2x" aria-hidden="true"> </i>
                    </a>
                    <a class="btn btn-danger circelbtn">
                        <i class="fa fa-expeditedssl fa-2x" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a class="btn btn-danger circelbtn">
                        <i class="fa fa fa-trash-o fa-2x" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-warning circelbtn">
                        <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    </a>
                </td>
                <td>@if($list->StatusPriod == 1) Open @elseif($list->StatusPriod == 0) Closed @endif</td>
                <td>
                        <?php
                            $qq = PersonnelContract::where('ContractId',$list->id)->count();
                            echo $qq;                         
                        ?>
                  </td>
                <td>{{$list->StartDateFa}} - {{$list->EndDateFa}}</td>
                <td>{{$list->id}}</td>
                    
        </tr>
             
        @endforeach
            
                               
            </tbody>
            
        </table>

  </div>

  {{--<script src="{{asset('vendor/global/global.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
	<script src="{{asset('js/deznav-init.js')}}"></script>
	
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>--}}