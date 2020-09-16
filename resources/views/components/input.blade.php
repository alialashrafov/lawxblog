<div id="{{ $id }}6" class="form-group">
    <label id="{{ $id }}5" for="exampleTextInput2"
           class="col-sm-1 control-label">{{ $title }}</label>
    <div id="{{ $id }}7" class="col-sm-11">
        <input type="{{ $type }}" name="{{ $name }}"
               value="{{ old($name, $value) }}"
               class="form-control" id="{{ $id }}"
               placeholder="{{ $title }}">
    </div>
</div>
