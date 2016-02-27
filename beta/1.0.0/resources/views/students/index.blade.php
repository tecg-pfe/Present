@extends('layouts.teacher_layout')
@section('title', 'Mes élèves')
@section('teacher_content')
@if(empty($students))
    <div class="informative-box">
        <p class="informative-box__text">Pas encore de <b>d’élève </b>? {!! link_to_action('Www\StudentController@create','Créer un élève',[],['class'=>'']) !!}</p>
    </div>
@else
    <div>
        <a href="{!! URL::action('Www\StudentController@create') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-create"></use>
                <span>Créer un élève</span>
            </svg>
        </a>
        <a href="{!! URL::action('Www\StudentController@getImportStudentsList') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-import"></use>
                <span>Importer une liste d’élève</span>
            </svg>
        </a>
    </div>
    @foreach($students as $student)
        <li class="profile-container layout__item u-2/12 u-2/12-desk u-3/12-lap u-6/12-palm">
            <a href="{!! URL::action('Www\StudentController@show',['slug'=>$student->slug]) !!}" title="Renvoie vers la fiche de l’élèves">
                <img class="profile-picture user-image profile-picture--present"
                     src="{!! asset('./img/default_profile_picture.jpg') !!}" alt="">
                <span class="profile-name">{!! $student->fullname !!}</span>
            </a>
        </li>
    @endforeach
    {!! $students->render() !!}
@endif
@stop