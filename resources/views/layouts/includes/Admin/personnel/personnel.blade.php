@extends('layouts.app')

    @section('content')

    <style>
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

<div style=" width:100%;border: 1px #1E90FF solid;border-radius: 5px;margin:0 5px 10px 5px">
        <div id="headerdiv"><b>مشخصات پرسنل</b></div>
        <div>

<form method="POST" action="{{route('personnelStore')}}">
@csrf
<div class="divTable ">
    <div class="divTableBody">
        <div class="divTableRow">
            <div class="divTableCell">

            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'نام خانوادگی',
                                    'name'=>'Family',
                                    'value'=>'',
                                    'placeholder'=>'مثال: زویداوی'                                    
                                    
                                        ])
                                        @endcomponent

                              </div>
            <div class="divTableCell">
                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'نام‍',
                                    'name'=>'ٔName',
                                    'value'=>'',
                                    'placeholder'=>'مثال: حامد'                                       
                                    
                                        ])
                                        @endcomponent
            </div>
            <div class="divTableCell">
            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'کدپرسنلی',
                                    'name'=>'PersonnelCode',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 960144'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
        </div>

        <div class="divTableRow">
            <div class="divTableCell">
                                @component('components.FA.InputTextRequire',[
                                        'Subject'=>'نام پدر',
                                        'name'=>'FatherName',
                                        'value'=>'',
                                        'placeholder'=>'مثال: عباس'                                    
                                        
                                            ])
                                            @endcomponent
                </div>

            <div class="divTableCell">
                             @component('components.FA.InputTextRequire',[
                                    'Subject'=>'شماره شناسنامه',
                                    'name'=>'IdCode',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 0014554878'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
            <div class="divTableCell">
                             @component('components.FA.InputTextRequire',[
                                    'Subject'=>'کد ملی',
                                    'name'=>'NatinalCode',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 0014554878'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
          </div>

          <div class="divTableRow">
             <div class="divTableCell">
                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'مدرک تحصیلی',
                                    'name'=>'EdCertificate',
                                    'value'=>'',
                                    'placeholder'=>'مثال: لیسانس'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
          <div class="divTableCell">
                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'تاریخ تولد',
                                    'name'=>'Dateofbirth',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 1399/01/01'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
            <div class="divTableCell">
                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'محل تولد',
                                    'name'=>'BornPlace',
                                    'value'=>'',
                                    'placeholder'=>'مثال: آبادان'                                    
                                    
                                        ])
                                        @endcomponent
            </div>
        </div>

        <div class="divTableRow">
             <div class="divTableCell">

                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'همراه',
                                    'name'=>'Mobile',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 09123333333'                                    
                                    
                                        ])
                                        @endcomponent

            </div>
            <div class="divTableCell">

                @component('components.FA.InputTextRequire',[
                        'Subject'=>'تلفن ثابت',
                        'name'=>'Phone',
                        'value'=>'',
                        'placeholder'=>'مثال: 0214280789'                                    
                        
                            ])
                            @endcomponent
            </div>
            <div class="divTableCell">
                                @component('components.FA.InputTextRequire',[
                                        'Subject'=>'ایمیل',
                                        'name'=>'Email',
                                        'value'=>'',
                                        'placeholder'=>'Example@domain.com'                                    
                                        
                                            ])
                                            @endcomponent
                </div>

          </div>

          <div class="divTableRow">
               <div class="divTableCell">

            @component('components.FA.InputTextRequire',[
                    'Subject'=>'محل خدمت',
                    'name'=>'Placeofwork',
                    'value'=>'',
                    'placeholder'=>'مثال: مهرآباد'                                    
                    
                        ])
                        @endcomponent

            </div>
            <div class="divTableCell">

                            @component('components.FA.InputTextRequire',[
                                    'Subject'=>'واحد سازمانی',
                                    'name'=>'Unit',
                                    'value'=>'',
                                    'placeholder'=>'مثال: ترافیک'                                    
                                    
                                        ])
                                        @endcomponent

            </div>
            <div class="divTableCell">

                @component('components.FA.InputTextRequire',[
                        'Subject'=>'عنوان شغلی',
                        'name'=>'JobTitle',
                        'value'=>'',
                        'placeholder'=>'مثال: کانترمن'                                    
                        
                            ])
                            @endcomponent
            </div>
          </div>

          <div class="divTableRow">

                 <div class="divTableCell">
                </div>
                <div class="divTableCell">
                </div>

            <div class="divTableCell">

                             @component('components.FA.InputTextRequire',[
                                    'Subject'=>'کد پرسنلی مدیر',
                                    'name'=>'ManagerId',
                                    'value'=>'',
                                    'placeholder'=>'مثال: 960144'                                    
                                    
                                        ])
                                        @endcomponent
                </div>
            </div>
    </div>
</div>

<div class="divTable">
    <div class="divTableBody">
        <div class="divTableRow">
            <div class="divTableCell">

                        @component('components.FA.InputTextRequire',[
                        'Subject'=>'آدرس محل سکونت',
                        'name'=>'Address',
                        'value'=>'',
                        'placeholder'=>'15مثال: تهران -سعادت آباد -میدان کاج - خ 112 -پ 20 -و'                                    
                        
                            ])
                            @endcomponent
                </div>
            </div>
        </div>
    </div>
                             <div style="padding-left:40%;margin-bottom:15px">
                                <button class="btn btn-primary btnstyle" type="submit" name="save" >
                                 <i class="fa fa-save fa-lorg"></i>&nbsp; <b>ذخیره</b></button>
                                </div>
    </form>
</div>
</div>

@include('layouts.flash-message')
    
@component('components.personnel.EmploymentHokm',[
                        'PerCode'=>'960144'                                    
                        
                            ])
                            @endcomponent

    @endsection