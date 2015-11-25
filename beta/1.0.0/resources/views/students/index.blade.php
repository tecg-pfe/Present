@extends('layouts.teacher_layout')
@section('teacher_content')
@if(empty($students))
    <div class="informative-box">
        <p class="informative-box__text">Pas encore de <b>d’élève </b>? {!! link_to_action('Www\StudentController@create','Créer un élève',[],['class'=>'']) !!}</p>
    </div>
@else
    <div>
        <h1 class="big-page-header">Mes élèves</h1>
        {!! link_to_action('Www\StudentController@create','Créer un élève',[],['class'=>'btn btn--soft']) !!}
    </div>
    @foreach($students as $student)
            @include('partials.students.students',['name'=>$student->first_name.' '.$student->last_name,'slug'=>$student->slug])
    @endforeach
@endif
@stop