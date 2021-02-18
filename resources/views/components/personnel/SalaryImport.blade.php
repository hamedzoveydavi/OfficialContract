
<style>
      .btnstyle{
    width: 200px;
    height: 40px;
    border-radius: 5px;
    font-family:arial;
    fornt-size:1em; 
}



.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.RightSide{
    text-align:right;
}
</style>



<form action="{{ route('Salary-import') }}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="RightSide">
    <a>حذف لیست حکم کارگزینی قبلی</a>
    <label class="switch">
        <input type="checkbox" name="CleareList" >
        <span class="slider round"></span>
    </label>
</div>
<hr>
    <div class="container mt-5 text-center">
             
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                </div>
            </div>

            
            <button class="btn btn-success btnstyle">
            <i class="fa fa-file-excel-o icon-2x"></i>&nbsp; <b>ImportExcel</b></button>
            </button>
          
        
    </div>
    </form>
