
<style>
.tblwidth{
    padding:5px 5px 5px 550px;
}

.btnstyle{
    width: 200px;
    height: 40px;
    border-radius: 5px;
    font-family:b nazanin;
    fornt-size:1em; 
}

#headerdiv{
    padding-top:10px;
    height: 40px;
    background-color: #1E90FF ;
    text-align: center;
    font: 2em;
    font-family:b nazanin;
    color:#ffffff 
}
</style>

<input type="text" name="{{$PerCode}}" desplay="none">

<div style=" width:100%;border: 1px #1E90FF solid;border-radius: 5px;margin:0 5px 10px 5px">
        <div id="headerdiv"><b>حکم کارگزینی</b></div>
        <div >

<div class="divTable tblwidth">
    <div class="divTableBody">
        <div class="divTableRow ">
            <div class="divTableCell ">
            @component('components.FA.InputNumeric',[
                                    'Subject'=>'حقوق پایه',
                                    'name'=>'BasicSalary',
                                    'value'=>'',
                                    'placeholder'=>''                                    
                                    
                                        ])
                                        @endcomponent
            </div>
        </div>
       
       <div class="divTableRow">
            <div class="divTableCell">
                            @component('components.FA.InputNumeric',[
                                    'Subject'=>'فوق العاده شغل',
                                    'name'=>'FantasticJob ',
                                    'value'=>'',
                                    'placeholder'=>''                              
                                    
                                        ])
                                        @endcomponent
            </div>   
        </div>
           
            <div class="divTableRow">
                <div class="divTableCell">
                @component('components.FA.InputNumeric',[
                                    'Subject'=>'کمک هزینه اقلام مصرفی',
                                    'name'=>'ConsumptionAllowance',
                                    'value'=>'',
                                    'placeholder'=>''                                        
                                    
                                        ])
                                        @endcomponent
                </div>    
            </div>

        <div class="divTableRow">
            <div class="divTableCell">
                                @component('components.FA.InputNumeric',[
                                        'Subject'=>'کمک هزینه مسکن',
                                        'name'=>'HousingAllowance',
                                        'value'=>'',
                                        'placeholder'=>''                            
                                        
                                            ])
                                            @endcomponent
            </div>             
        </div>
        <div class="divTableRow">
            <div class="divTableCell">
                             @component('components.FA.InputNumeric',[
                                    'Subject'=>'حق اولاد',
                                    'name'=>'ChildExpenses',
                                    'value'=>'',
                                    'placeholder'=>''                                 
                                    
                                        ])
                                        @endcomponent
            </div>
        </div>
      </div>
    </div>
</div>

<div style="padding-left:40%;margin-bottom:15px">
                                <button class="btn btn-primary btnstyle" type="submit" name="save" >
                                 <i class="fa fa-save fa-lorg"></i>&nbsp; <b>ذخیره</b></button>
                                </div>


                                </div>


