<div class="header-action-box">
    @if($nav=="cours")
        <a href="{!! URL::action('Www\CoursController@create') !!}" class="btn btn--blue-svg"
           data-toggle="tooltip" title="Créer un cours">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-create"></use>
            </svg>
            <span>Créer un cours</span>
        </a>
    @endif
    @if($nav=='students')
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
    @endif
    @if($nav=='classes')
        <a href="{!! URL::action('Www\ClassController@create') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-create"></use>
            </svg>
            <span>Créer une classe</span>
        </a>
    @endif
    @if($nav=='schools')
        <a href="{!! URL::action('Www\SchoolController@create') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-create"></use>
                <span>Créer une école</span>
            </svg>
        </a>
    @endif
    @if(!empty(Auth::user()->cours->toArray()))
        <a href="{!! URL::action('Www\PresentController@getPlanificateFull') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-calendar"></use>
            </svg>
            <span>Planifier une séance de cours </span>
        </a>
    @endif
    @if(Auth::user()->hasOccurrence)
        <a href="{!! URL::action('Www\PresentController@index') !!}" class="btn btn--blue-svg">
            <svg class="svg-basic svg--white">
                <use xlink:href="#shape-to-do"></use>
                <span>Prendre les présences</span>
            </svg>
        </a>
    @endif
</div>