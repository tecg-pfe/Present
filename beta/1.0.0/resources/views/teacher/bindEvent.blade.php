@extends('layouts.teacher_layout')
@section('teacher_content')
<h1 class="big-page-header">Créer son horaire</h1>
{!! Form::open(array('action' => 'Www\UserController@storeBindEvent')) !!}
        @include('forms.teachers.bindEvent')
{!! Form::close() !!}
@stop