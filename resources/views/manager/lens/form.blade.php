<div class="form-group {{ $errors->has('lensID') ? 'has-error' : ''}}">
    <label for="lensID" class="control-label">{{ 'Lensid' }}</label>
    <input class="form-control" name="lensID" type="number" id="lensID" value="{{ isset($lens->lensID) ? $lens->lensID : ''}}" >
    {!! $errors->first('lensID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lenstype') ? 'has-error' : ''}}">
    <label for="lenstype" class="control-label">{{ 'Lenstype' }}</label>
    <input class="form-control" name="lenstype" type="text" id="lenstype" value="{{ isset($lens->lenstype) ? $lens->lenstype : ''}}" >
    {!! $errors->first('lenstype', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lensprice') ? 'has-error' : ''}}">
    <label for="lensprice" class="control-label">{{ 'Lensprice' }}</label>
    <input class="form-control" name="lensprice" type="number" id="lensprice" value="{{ isset($lens->lensprice) ? $lens->lensprice : ''}}" >
    {!! $errors->first('lensprice', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
