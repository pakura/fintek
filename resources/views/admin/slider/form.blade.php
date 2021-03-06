<div class="col-md-12">
    <div class="form-group">
        <label class="control-label">Title:</label>
        {!! Form::text('title', null, [
            'id' => 'title' . $current->language,
            'class' => 'title form-control',
            'autofocus'
        ]) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="control-label">Short description:</label>
        {!! Form::textarea('description', null, [
            'id' => 'description' . $current->language,
            'class' => 'form-control',
            'rows' => '2'
        ]) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="control-label">Image:</label>
        <div class="input-group">
            {!! Form::text('file', null, [
                'id' => 'file' . $current->language,
                'class' => 'file form-control',
                'data-lang' => 1,
            ]) !!}
            <div class="input-group-btn popup" data-browse="file{{$current->language}}">
                <span class="btn btn-info">Browse</span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="control-label">Visible:</label>
        {!! Form::checkbox('visible', null, null, [
            'id' => 'visible' . $current->language,
            'class' => 'iswitch iswitch-secondary',
            'data-lang' => 1
        ]) !!}
    </div>
</div>
<button type="button" class="btn btn-md btn-white" data-dismiss="modal">{{trans('general.close')}}</button>
<button type="submit" class="btn btn-md btn-secondary">{{trans('general.save')}}</button>