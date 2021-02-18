<div style="padding-bottom:8px;" class="input-group">
            <div   class="input-group-prepend">
              <span style="background-color: #95999c;height: 37px;" class="input-group-text">{{$Subject}}</span>
            </div>
             <input type="text" onkeyup="separateNum(this.value,this);" class="input input__icon  form-control  @error('{{$name}}') is-invalid @enderror"
             value="{{$value}}"   name="{{$name}}" required>
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