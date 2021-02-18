@extends('layouts.app')

    @section('content')
<style>
.col{
  width:40%;
  text-align:right;
  border:1px black;
  padding-bottom:15px;
}

.btnstyle{
   
    border-radius: 5px;
    font-family:b nazanin;
    fornt-size:1em; 
}
</style>

    <div class="divTable ">
      <div class="divTableBody">
          <div class="divTableRow">
              <div class="divTableCell col">
              </div>
              
              <div class="divTableCell col">
                    <button class="btn btn-success btnstyle" data-toggle="modal" data-target="#ImporSalarytForm" >
                  <i class="fa fa-file-excel-o icon-2x"></i>&nbsp; <b>Import salary </b></button>
              </div>
              <div class="divTableCell col" >
                    <button class="btn btn-success btnstyle" data-toggle="modal" data-target="#ImportForm" >
                  <i class="fa fa-user-circle fa-1x"></i>&nbsp; <b>Import Personel </b></button>
              </div>

          </div>
      </div>
    </div>

        @component('components.personnel.PersonnelListTable',[
                                          'tbl'=>$PerList
                                          ])                                                        
                                            @endcomponent


<!-- Modal PersonelImport -->
<div class="modal fade" id="ImportForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
          @component('components.personnel.PersonelImport',[])                                                                                                                      
                                            @endcomponent
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal SalaryImport -->
<div class="modal fade" id="ImporSalarytForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
         

      @component('components.personnel.SalaryImport',[])                                                                                                                      
                                            @endcomponent


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal SalaryForm -->
<div class="modal fade" id="SalarytForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-body">


          @if(!empty($per))
       
       @component('components.personnel.EmploymentHokmList',[
                                                      'per'=>$per
                                         ])
                                         @endcomponent
 
 
           @endif



    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    @endsection