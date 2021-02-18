@extends('layouts.app')

    @section('content')

<style>
.btnstyle{
    width: 200px;
    height: 40px;
    border-radius: 5px;
}
</style>

<div style=" width:100%;border: 1px #1E90FF solid;border-radius: 5px;margin:0 5px 10px 5px">
        <div style="padding-top:10px;height: 40px;background-color: #1E90FF ;text-align: center;font: 2em;font-family:b nazanin;color:#ffffff "><b> مشخصات شرکت</b></div>
        <div>
            <div class="divTable">
                        <div class="divTableBody">
                            <div class="divTableRow">
                            
                                <div class="divTableCell" style="padding-top:15px">
                                <form method="post" action="{{route('CompanyInfo')}}" >
                                @csrf
                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'نام شرکت فارسی',
                                    'name'=>'CompanyNameFA',
                                    'value'=>''{{--{{$info->CompanyNameFA}}--}},
                                    'placeholder'=>'نام شرکت را به فارسی وارد نمایید'                                    
                                    
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'نام شرکت انگلیسی',
                                    'name'=>'CompanyNameEN',
                                    'value'=>'',
                                    'placeholder'=>'نام شرکت را به انگلیسی وارد نمایید' 
                                   
                                    
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'وب سایت',
                                    'name'=>'Companyurl',
                                    'value'=>'',
                                    'placeholder'=>'www.Example.com  : مثال '
                                    
                                    
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'پست الکترونیک',
                                    'name'=>'CompanyEmail',
                                    'value'=>'',
                                    'placeholder'=>'Company@domain.com  : مثال '
                                    
                                    
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'آدرس',
                                    'name'=>'CompanyAddress',
                                    'value'=>'',
                                    'placeholder'=>'آدرس پستی شرکت را وارد نمایید'
                                                                         
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'مدیر عامل',
                                    'name'=>'CompanyManager',
                                    'value'=>'',
                                    'placeholder'=>'نام مدیرعامل را وارد کنید'
                                 
                                        
                                        ])
                                        @endcomponent

                                    @component('components.FA.InputTextRequire',[
                                    'Subject'=>'کد پرسنلی مدیرعامل',
                                    'name'=>'CompanyManagerPerCode',
                                    'value'=>'',
                                    'placeholder'=>'کدپرسنلی مدیرعامل را وارد کنید'
                                 
                                        
                                        ])
                                        @endcomponent
                                       

                              {{--  <div id="wrapper" style="margin-top: 20px;">
                                <input type="file" name="AttachFile" multiple="multiple" style="border-radius:5px;width:95%;direction:rtl"
                                     id="file-upload" class="btn btn-primary " >
                                    
                                     <span id="file-upload-btn" class="btn btn-primary">لوگوی شرکت را انتخاب کنید</span>
                                        <?php $destinationPath = 'logo/'?>
                                        <div id="start" >                                      
                                            <span class="text-danger">{{ $errors->first('fileUpload') }}</span>
                                        </div>
                                       
                                 </div>--}}
                                <br>
                                <div style="text-align: center">
                                <button class="btn btn-success btnstyle" type="submit" name="save" >
                                 <i class="fa fa-save icon-2x"></i>&nbsp; <b>ذخیره</b></button>
                                </div>
                             </form>

                                        

                                </div>         
                        </div>
                    </div>
            </div>
        </div>
    </div>  

    @include('layouts.flash-message')



    <script>
        $(document).ready(function() {
            $("#file-upload").on('change', function() {
                //Get count of selected files
                var countFiles = $(this)[0].files.length;
                var imgPath = $(this)[0].value;
                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                var image_holder = $("#image-holder");
                var image_down = $("#image-down");
                var txt_select = $("#txt-select");
                image_holder.empty();
                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                    if (typeof(FileReader) != "undefined") {
                        //loop for each file selected for uploaded.
                        for (var i = 0; i < countFiles; i++)
                        {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<img />", {
                                    "src": e.target.result,
                                    "class": "thumb-image"
                                }).appendTo(image_holder);
                            }
                            image_holder.show();
                            image_down.hide();
                            txt_select.hide();
                            reader.readAsDataURL($(this)[0].files[i]);
                        }
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                } else {
                    alert("Pls select only images");
                }
            });
        });
    </script>
        
    @endsection

