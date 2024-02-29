<div>
    <div>
        <input name="{{$name}}" type="{{$type}}" placeholder="{{$placeholder}}" class="form-control" value="{{old('name')}}">
        <!-- {{{$demo}}} -->
            <span class="text-danger">
                @error($name)
                {{$message}}
                @enderror</span>
    </div>
</div>