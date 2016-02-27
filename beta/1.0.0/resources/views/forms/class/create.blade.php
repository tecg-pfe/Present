<div class="floating-placeholder form-group floating-placeholder-float--blue floating-placeholder-float--huge">
    <label for="create-classe-name" class="floating-placeholder__label">Le nom de la classe</label>
    {!! Form::input('text','name',old('name'),['class'=>'floating-placeholder__input--huge floating-placeholder__input','placeholder'=>'ex : 2F','id'=>'create-classe-name']) !!}
    @include('forms.partials.base-info',['message'=>'Donnez un nom à votre classe.'])
    @include('errors.error_field',['field'=>'name'])
</div>
@if(!empty($schools->toArray()))
    <div class="floating-placeholder form-group floating-placeholder-float--blue floating-placeholder-float--huge form-group--select">
        {!! Form::label('schools_id','Le nom des écoles',['class'=>'floating-placeholder__label']) !!}
        {!! Form::select('schools_id[]',$schools,old('schools_id'),['class'=>'chosen-select floating-placeholder__input--huge floating-placeholder__input','multiple','id'=>'schools_id']) !!}
        @include('errors.error_field',['field'=>'schools_id'])
    </div>
@else
    <p>Vous n’avez pas encore d’école ? Si vous voulez, vous pouvez&nbsp;
        {!! Html::linkAction('Www\SchoolController@create', ' créer une écoles',
            [ 'memory-route' => \Request::route()->getName() ]) !!}
    </p>
@endif
<div class="form-group">
    {!! Form::submit($submit,['class'=>'btn']) !!}
</div>

