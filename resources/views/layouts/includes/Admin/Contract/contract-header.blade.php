
<div style="margin-left:85%">


    <button  
        style="width: 160px;
        height: 40px;
        border-radius: 5px;
        margin-top: 10px" 
            type="submit" 
            class="btn btn-success" data-toggle="modal" data-target="#Contract">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>

            &nbsp;   New Contract</button>
</div>




<!-- Modal -->
<div class="modal fade" id="Contract" role="dialog">
 <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">

     <div class="modal-body" >
    
     {{---------------border-----------}}
   
    <form method="POST" action="{{route('ContractOfPriod')}}" accept-charset="utf-8" enctype="multipart/form-data">
             @csrf
           

{{--------------------------------------------------------------------}}



<div style=" width:100%;border: 1px #1E90FF solid;border-radius: 5px;margin:0 5px 10px 5px">
        <div style="padding-top:10px;height: 40px;background-color: #1E90FF ;text-align: center;font:2em;font-family:b nazanin;color:#ffffff "> ایجاد بازه زمانی قرارداد</div>
        <div>
            <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">
                            
                                <div class="divTableCell" >
                             
                                @component('components.DateFa',[
                                    'Subject'=>'از',
                                    'name'=>'FromDate',
                                    'is_require'=>'true'
                                    
                                        ])
                                        @endcomponent

                                    @component('components.DateFa',[
                                    'Subject'=>'الی',
                                    'name'=>'ToDate',
                                    'is_require'=>'true'
                                    
                                        ])
                                        @endcomponent
                                                                      
                                </div>         
                        </div>
                    </div>
            </div>
        </div>
    </div>  


{{----------------------------------------------------------------------}}

    <div style="text-align:center;">
    <button  style="width: 120px;height: 40px;border-radius: 5px;margin-top: 10px" type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp;   ایجاد</button>
                         
                         </div>
                  </form>
                         <br>
                         {{---------------border-----------}}
                         </div>
                         {{---------------border-----------}}
                 <br>
                 <br>

            
                 <div class="modal-footer">
                     <button style="border-radius:5px" type="button" class="btn btn-primary" data-dismiss="modal">بستن</button>
                 </div>
                 </div>

   </div>

 </div>
 </div>



