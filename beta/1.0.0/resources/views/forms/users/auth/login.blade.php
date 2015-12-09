<div class="floating-placeholder form-group floating-placeholder-float--blue floating-placeholder-float--huge">
    {!! Form::label('email','Votre adresse email',['class'=>'floating-placeholder__label floating-placeholder__label--blue']) !!}
    {!! Form::input('email','email',old('email'),['class'=>'floating-placeholder__input--huge floating-placeholder__input']) !!}
    @include('errors.error_field',['field'=>'email'])
</div>

<div class="floating-placeholder form-group floating-placeholder-float--blue floating-placeholder-float--huge">
    {!! Form::label('password','Votre mot de passe',['class'=>'floating-placeholder__label floating-placeholder__label--blue']) !!}
    {!! Form::input('password','password','',['class'=>'floating-placeholder__input--huge floating-placeholder__input']) !!}
    <a href="#" class="form-group__svg" id="oLinkPassword">
        <svg class="svg-basic svg--blue">
            <use xlink:href="#shape-edit"></use>
        </svg>
    </a>
    @include('errors.error_field',['field'=>'password'])
</div>
<div class="form-group">
    {!! Form::label('remember','Se souvenir de moi',['class'=>'']) !!}
    {!! Form::checkbox('remember',old('remember'),['class'=>'']) !!}
</div>
<div class="form-group">
    {!! Form::submit('S’identifier',['class'=>'btn']) !!}
</div>
<div class="form-group">
    {!! Html::link('auth/register', 'S’enregistrer',['class'=>'btn-link']) !!}
    {!! Html::link('#','J’ai oubié mon mot de passe.',['class'=>'btn-link']) !!}
</div>
