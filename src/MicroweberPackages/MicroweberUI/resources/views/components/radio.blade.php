@props(['options'=>[]])

<div class="form-control-live-edit-label-wrapper">

    @if(!empty($options))
        @foreach($options as $key => $option)
            <label class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{$key}}">
                <span class="form-check-label">{{$option}}</span>
            </label>
        @endforeach
    @endif

</div>