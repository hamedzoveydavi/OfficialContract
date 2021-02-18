<div  class="input-group" style="top: 5px;padding-bottom: 10px">
    

        @if(@$is_require)
            <input  style="text-align: center" type="text" class="form-control @error('{{$name}}') is-invalid @enderror" name="{{$name}}" placeholder="1399/01/01" {{--value="{{$value}}"--}} required autofocus>
        @else
            <input  style="text-align: center" type="text" class="form-control @error('{{$name}}') is-invalid @enderror" name="{{$name}}" placeholder="1399/01/01" {{--value="{{$value}}"--}}>
        @endif
        <div  class="input-group-prepend">
        <label style="border-radius:0 5px 5px 0px;height: 41px;border: 1px solid #DCDCDC" class="input-group-text" style="height: 37px">{{$Subject}}</label>
    </div>
        @error('{{ $name }}')
        <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>

@enderror
</div>
