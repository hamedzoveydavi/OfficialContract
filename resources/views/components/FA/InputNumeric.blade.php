<div style="padding-bottom:8px;" class="input-group">
           
             <input type="text" onkeyup="separateNum(this.value,this);" style="text-align:right" class="input input__icon  form-control  @error('{{$name}}') is-invalid @enderror"
             value="{{$value}}" placeholder="{{$placeholder}}"   name="{{$name}}" >
             <div   class="input-group-prepend">
              <span style="background-color: #95999c;height: 40px;" class="input-group-text">{{$Subject}}</span>
            </div>
</div>
            @error('{{$name}}')
            <span class="invalid-feedback" role="alert">
            <strong>{{ message }}</strong>
            </span>
            @enderror



            <script>
                function separateNum(value, input) {
                    /* seprate number input 3 number */
                    var nStr = value + '';
                    nStr = nStr.replace(/\,/g, "");
                    x = nStr.split('.');
                    x1 = x[0];
                    x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    if (input !== undefined) {

                        input.value = x1 + x2;
                    } else {
                        return x1 + x2;
                    }
                }
            </script>