@extends('layouts.teacher_layout')
@section('title', 'Modifier une classe')
@section('teacher_content')
    <p>Vous êtes sur le point d'effectuer des changements sur la classe <i>{!! $classe->name !!}.</i></p>
    <div class="layout">
        {!! Form::model($classe,['action' => ['Www\ClassController@update','id'=>$classe->id],'class'=>'layout__item u-6/12-desk u-12/12-lap u-12/12-palm','enctype'=>'multipart/form-data','method'=>'patch']) !!}
                @include('forms.class.edit',['submit'=>'Modifier la classe'])
        {!! Form::close() !!}
        @if(empty(Auth::user()->students->toArray()))
        {!! Form::open(['action' => ['Www\ClassController@importStudentToClasse','classe_slug'=>$classe->slug],'class'=>'layout__item u-6/12-desk u-12/12-lap u-12/12-palm','enctype'=>'multipart/form-data']) !!}
                @include('forms.class.import_student_to_school',['submit'=>'Ajouter ces élèves à la classe'])
        {!! Form::close() !!}
        @else
            {!! Form::open(['action' => ['Www\ClassController@addStudentToClasse','classe_slug'=>$classe->slug],'class'=>'layout__item u-6/12-desk u-12/12-lap u-12/12-palm','enctype'=>'multipart/form-data']) !!}
                @include('forms.class.add_student_to_school',['submit'=>'Ajouter ces élèves à la classe'])
            {!! Form::close() !!}
        @endif
    </div>
@stop