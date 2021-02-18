

<div style="padding-bottom:8px;" class="input-group">
            <div   class="input-group-prepend">
              <span style="background-color: #95999c;height: 37px;" class="input-group-text">{{$Subject}}</span>
            </div>
             <input type="text" class="input input__icon  form-control  @error('{{$name}}') is-invalid @enderror"
             value="{{$value}}"   name="{{$name}}" required>
</div>
            @error('{{$name}}')
            <span class="invalid-feedback" role="alert">
            <strong>{{ message }}</strong>
            </span>
            @enderror

