  

<div style="padding-bottom:8px;" class="input-group">
           
             <input type="text" style="text-align:right" class="input input__icon  form-control  @error('{{$name}}') is-invalid @enderror"
             value="{{$value}}" placeholder="{{$placeholder}}"   name="{{$name}}" required>
             <div   class="input-group-prepend">
              <span style="background-color: #95999c;height: 40px;" class="input-group-text">{{$Subject}}</span>
            </div>
</div>
            @error('{{$name}}')
            <span class="invalid-feedback" role="alert">
            <strong>{{ message }}</strong>
            </span>
            @enderror


