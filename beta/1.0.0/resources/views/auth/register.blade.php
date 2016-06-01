@extends('layouts.master_layout')
@section('title', 'S’inscrire')
@section('content')
    <h1 class="visuallyhidden">Présent | Un outil de gestion de présences (gratuit)</h1>
    @include('partials.nav.visitors_nav')
    <div class="wrapper">
        @if (Session::has('flash_notification.message'))
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_notification.message') }}
            </div>
        @endif
        <div class="svg-register-heros">
            <svg version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                 x="0px" y="0px" width="965.3px" height="329.6px" viewBox="0 0 965.3 329.6"
                 style="enable-background:new 0 0 965.3 329.6;"
                 xml:space="preserve">

                <defs>
                </defs>
                <path class="st0" d="M170.4,50.1c-2.6,0-5,0.6-7.3,1.6c0.1-0.7,0.1-1.4,0.1-2.1c0-13.2-10.7-23.9-23.9-23.9c-3.1,0-6.1,0.6-8.8,1.7
	C123.3,9.9,103.5,0,79.9,0c-28.3,0-50,17.9-50,36c0,1.3,0.1,2.6,0.4,3.8c-2-0.6-4.2-0.9-6.4-0.9C10.7,39,0,49.7,0,62.9
	c0,12.5,9.6,22.7,21.7,23.8c0,0,0,0.1,0,0.1h2.2c0,0,0,0,0,0c0,0,0,0,0,0h143.7c0,0,22.5,1.2,22.2-18.2
	C189.7,58.8,180.2,50.1,170.4,50.1z"/>
                <g>
                    <path class="st1" d="M692.9,329.5c0.3-0.1,0.1-0.3-0.7-0.3l-0.6,0.3L692.9,329.5z"/>
                    <path class="st1" d="M687.4,328.8c-1,0.1-2.1,0.4-1.5,0.7c1-0.3,1.2-0.2,2.2-0.5c0.8,0,1.4,0.1,1.3,0.3c0.3-0.1,1.3,0.1,1.7-0.1
		c-1.1-0.3-2.4-0.3-3.8-0.2C687,328.9,687.3,328.8,687.4,328.8z"/>
                    <path class="st1" d="M607.5,326.3l0.5,0C607.9,326.4,607.7,326.3,607.5,326.3z"/>
                    <path class="st1" d="M558,325.2c0.4,0,0.5,0,0.6-0.1C558.2,325.2,557.9,325.2,558,325.2z"/>
                    <path class="st1" d="M549.6,324.7c0.2,0,0.3,0,0.5,0C549.9,324.7,549.7,324.7,549.6,324.7z"/>
                    <path class="st1" d="M607.5,326.3l-1.3-0.1C606.1,326.3,606.9,326.3,607.5,326.3z"/>
                    <path class="st1"
                          d="M676.3,329.3c0.3,0,0.5,0,0.7-0.1C676.8,329.2,676.6,329.2,676.3,329.3C676.4,329.2,676.4,329.2,676.3,329.3z"
                    />
                    <path class="st1" d="M629.3,326.5l0.4,0c0.1,0,0.2-0.1,0.3-0.1L629.3,326.5z"/>
                    <path class="st1"
                          d="M646.1,326.9c-0.4,0-0.5,0.3-0.7,0.4c0.2-0.1,0.5-0.2,0.8-0.2C646.3,327,646.2,326.9,646.1,326.9z"/>
                    <path class="st1" d="M672.6,328l0.5,0C673,328,672.8,328,672.6,328z"/>
                    <path class="st1" d="M617.4,326.2c0,0-0.1-0.1-0.2-0.1C617.2,326.1,617.3,326.2,617.4,326.2z"/>
                    <path class="st1" d="M149,327.6C149,327.6,149,327.5,149,327.6C148.9,327.6,148.9,327.6,149,327.6z"/>
                    <path class="st1" d="M129.6,326.5l0.3,0c0-0.1,0.1-0.1,0.1-0.2L129.6,326.5z"/>
                    <path class="st1"
                          d="M534.1,324.1C534.2,324.1,534.2,324.1,534.1,324.1C534.6,324.1,534.4,324.1,534.1,324.1z"/>
                    <path class="st1" d="M392.1,323.2c1.6,0.3-2.6,0.3-0.2,0.6C391.7,323.7,394.1,323.3,392.1,323.2z"/>
                    <path class="st1" d="M675.9,329.2c-0.2,0-0.5,0-0.7,0C675.5,329.2,675.7,329.2,675.9,329.2z"/>
                    <path class="st1" d="M391.9,323.8L391.9,323.8l0.2,0C392.1,323.8,392,323.8,391.9,323.8z"/>
                    <path class="st1" d="M498.5,323.9c0.1,0.1,0.2,0.1,0.4,0.1C498.8,323.9,498.8,323.9,498.5,323.9z"/>
                    <path class="st1" d="M525,324.6l-0.7,0C524.6,324.6,524.8,324.6,525,324.6z"/>
                    <path class="st1"
                          d="M484.7,324.1c-0.4,0-0.5-0.1-1,0c0,0,0.1,0,0.1,0C484.1,324.1,484.3,324,484.7,324.1z"/>
                    <path class="st1" d="M470.3,324c0.1,0,0.2,0,0.3,0.1c0.1,0,0.3,0,0.5,0L470.3,324z"/>
                    <path class="st1" d="M192.6,326.7c-0.3-0.1-0.5-0.2-0.7-0.2C192.2,326.7,190.1,326.8,192.6,326.7z"/>
                    <path class="st1"
                          d="M676.3,329.1c-0.1,0.1-0.2,0.1-0.4,0.1c0.2,0,0.3,0,0.5,0C676.4,329.2,676.4,329.1,676.3,329.1z"/>
                    <path class="st1" d="M484.1,326.3l-2.3-0.1C482.4,326.3,483.3,326.3,484.1,326.3z"/>
                    <path class="st1" d="M295.5,325.6l-0.5,0C295.2,325.7,295.4,325.7,295.5,325.6z"/>
                    <path class="st1" d="M475,326.2c-0.4-0.1-0.8-0.2-1.3-0.2c-0.1,0-0.2,0-0.3,0.1L475,326.2z"/>
                    <path class="st1"
                          d="M191.9,326.5C191.9,326.5,191.9,326.5,191.9,326.5C191.9,326.5,191.9,326.5,191.9,326.5z"/>
                    <path class="st1" d="M176.9,327.4c2.2,0,1-0.4,1.5-0.6c2.6-0.1,1.2,0.3,2.1,0.4c1.6-0.1,2.9-0.5,4.1-0.5c0.1,0.1,0.3,0.1,0.1,0.2
		c1.7-0.3,5.1-0.1,7.1-0.5c0.1,0,0.2,0.1,0.3,0.1c-0.3-0.2-0.4-0.4-0.3-0.5c1,0,1.8-0.3,2.2,0c-0.6,0-0.6,0.1-0.9,0.2l1-0.1
		c0.9,0.3-1.4,0.1-1.4,0.4c2-0.1,4.3-0.5,5.8-0.4c0.3,0.3-3.6,0.2-1.5,0.4l-2.4-0.1c1.8,0.5-1.4,0,0.2,0.5c3.1,0.1,3.5-0.2,6.6-0.2
		c0.7-0.2-0.2-0.3,0.5-0.5c4.4-0.4,3.5,0.8,6.7,0.3c0.8-0.2,1.2-0.7,3.5-0.5l-0.8,0.4c3,0,1.7-0.6,4.9-0.4c-0.6,0.2-2.4,0.2-1.9,0.2
		c2,0.3,1.4-0.2,3-0.3l0.3,0.3c3.2-0.1,6.7-0.4,10.3-0.5c-0.2,0.1-0.8,0.2,0,0.3c4.5-0.2,9.5-0.1,13.9,0.1l1.6-0.3
		c0.4,0,0.7,0.1,0.3,0.2c1.7,0.1,0.1-0.2,0.9-0.3c1,0,1.3,0.2,0.7,0.3c3-0.3,8.4-0.6,11.6-0.3l-0.6,0.1c2.4,0.1,2.7-0.6,5-0.4
		l-0.4,0.1c5.3,0.1,11.1-0.2,15.1,0.2c0.8-0.4,5.2,0.2,5.6-0.4c3,0.3,2.2,0.4,6.4,0.6c1.1,0,1.7-0.4,3.1-0.4l0,0.3l1.9-0.3l1,0.4
		l1.3-0.1c-0.5,0-1.1-0.1-1-0.2c2.1-0.2,5,0.2,5.1,0.3l4.9-0.3c-0.1,0.1-0.9,0.2-1.6,0.3c2.6-0.3,0.5,0.3,2.8,0
		c-0.3-0.1,0.2-0.2,0.2-0.2c1.2,0.2,3.9,0.2,5.9,0.1l-0.4,0.2c3.6,0,7.6-0.1,11.6-0.1c-1.5-0.1-1.1-0.5,0.1-0.5l0.5,0.3
		c0.8-0.2-1.2-0.1,0.3-0.4c1.5,0,1,0.4,0.1,0.5l1.8-0.1c0.1,0.1-0.3,0.1-0.4,0.3c0.8-0.2,3.2,0.3,4.3,0l0.1,0.1c4,0,5.9-0.1,9.2-0.2
		c0.1-0.3,1.4-0.2,2.3-0.5c2.4,0.1,5.1,0.3,8,0.3c2-0.1,0.6-0.2,1.5-0.4c0.2,0.3,3.1,0.2,1.6,0.4c3.5,0,4.5-0.1,8.9-0.3
		c-0.5-0.1-1-0.1-0.7-0.2c0.8,0,1.8,0.1,1.7,0.2l-0.2,0c5-0.4,11.5,0.7,15.4,0.2l-0.2,0l4.1-0.3c1.9,0-1.1,0.2,0.3,0.4
		c4.4-0.4,7,0.1,10.6-0.2c2.8,0.8,10,0,13.8,0.5l-0.2-0.2c1-0.2,1.2,0.1,1.9,0.1c-0.1-0.1-1.1-0.2-0.5-0.3
		c8.3-0.2,17.2,0.3,25.8,0.5c3.1,0.1,1.8-0.9,5.7-0.5l-1.1,0.3c6.3-0.4,12.9,0.1,19.1-0.2c-0.4,0.1-0.4,0.2-1,0.2
		c1.3,0.3,4.8,0.1,4.8-0.1c1,0,0.2,0.2,0.8,0.3c1.3,0.2,3.3-0.3,4,0c0.1,0-0.4,0.1-0.6,0.1c0.9-0.1,4,0.1,3.2-0.2
		c2.3,0.2,4.4-0.1,6.3,0.1c1.2-0.3,4,0.2,4.4-0.3c-0.2,0.5,4.1,0.4,5.5,0.2c-0.5,0.1,1.3,0.2,0.7,0.3c1.7,0,3.2-0.1,2.9-0.3
		c3.1,0.6,6.2-0.4,7.9,0.3c5-0.2,9.6-0.3,14-0.4c-0.2,0.4-4.9,0-4.8,0.5c4.2-0.1,6.7-0.5,10.9-0.3c1.1,0.1-0.6,0.2-1,0.3
		c4.2-0.1,8.2,0.2,12,0c0,0-0.4,0.1-0.8,0.1c0.7,0,1.7,0.1,1.6-0.1l-0.7,0c-1.2-0.3,3-0.6,3.1-0.7c-1.3,0.6,3.7,0.2,1.7,0.9
		c0.5,0,1.1-0.1,1-0.3c0.7,0.1,1,0.1,0.2,0.3c2.7-0.1,1.7-0.3,4.1-0.3c0,0.1-0.5,0.1-0.7,0.2c1.2-0.2,2.5-0.4,4.5-0.2
		c-0.1,0.1,0.1,0.1-0.5,0.1c3.5,0,6-0.4,9.8-0.2c-1.1,0.4,1.3,0.2,1.5,0.5l2.1-0.1l-0.8-0.2c1.8,0,3.4-0.2,5-0.1l-1.3,0.1l3.4,0
		l-1.9-0.2c1.8-0.2-0.2-0.4,2.2-0.3c-0.5,0,1.8,0.3,2.7,0.3h0c0.9,0,1.8-0.2,3.2-0.1c0.3,0.1-0.3,0.4-0.1,0.5c0.9-0.3,4.2,0,5.4-0.3
		c-0.4,0.1-0.4,0.3-0.3,0.3l0.7-0.2c0.8,0.1,1,0.1,0.8,0.3c2.5,0.1-0.8-0.5,2.2-0.2c-0.2,0-0.1,0.1-0.6,0.1c3,0.2,5.8-0.1,8.6,0.1
		c0.8,0.4-2.4,0.1-1.5,0.4c4,0,8.2-0.3,12.1-0.1l-0.7-0.1c0.5-0.5,2.9,0.3,4.8,0.1c-0.5,0-0.6,0.3-0.5,0.2c2.6,0.1,5.4,0,9.4-0.1
		l-0.5,0.1c1.6,0.2,4.1,0.2,5.8,0.2c0.5-0.1,1.5-0.1,0.9-0.3c5.2,0.9,9.9-0.2,14.5,0.5c-0.5,0-1.3,0.1-0.9,0.1l3.9,0
		c-0.3-0.2-0.5-0.2-1.3-0.4c0.5-0.1,1.6-0.2,2.6-0.2c-1.8,0.1,0,0.4,0.8,0.5c-0.1-0.1,0.1-0.1,0.1-0.2c2,0.5,0.4-0.5,3.1-0.1
		l-0.2,0.1c1,0,2-0.2,3.1-0.1c0.5,0.3-1.1,0.1-1.2,0.3c1.6,0,3.1-0.4,4.6-0.1c-0.7,0.1-1.6,0-2.3,0.1c1.6,0.4,1.7,0.3,2.9,0.4
		l-0.1,0l2.7,0.2l-0.7-0.1c2-0.7,4,0,6.7-0.4c-2.6,0.4-0.4,0.2-0.6,0.5c0.7,0.1,1.7,0.2,1.4,0.3c1.3-0.2,2.1,0.2,3.9-0.1
		c0.1,0.1,1.3,0,1.1,0.3c1.6,0-0.4-0.2-0.2-0.3c2.5-0.3,5.9,0.6,9.6,0.2c3.1-0.1,3.7-0.4,6.6-0.5c1,0.2-0.8,0.3-0.8,0.3
		c1.6,0.2,2.8,0.2,4.3,0.1c-0.3,0.1,0,0.2,0.5,0.3c1.2,0,0.8-0.3,2.4-0.1c-0.3,0.1-0.6,0.3-1.2,0.4c1.4-0.1,2.8-0.2,4.3-0.2
		c0.4,0.2-0.9,0.2-1.4,0.3c1.6,0,4.3,0,4.8-0.3l-1-0.1c0.6,0,0.3,0.2-0.1,0.3c-1.4,0.2-2-0.1-2.1-0.2l1,0c-1.1-0.6-4.2,0-6.3-0.1
		l0.9-0.4l-2.2,0.3c-0.5-0.1-0.8-0.4,0.3-0.4c-1.5-0.2-1.3,0.1-2.6-0.2c-0.1,0-0.1-0.1,0.1-0.1l-1.5,0.1c0.3-0.1-0.2-0.3,0.7-0.2
		c-2.6-0.3-4.3,0.2-5.2-0.1l0.2,0c-3.7,0-0.4,0.3-3.1,0.6l-1.8-0.8l-0.4,0.3c-0.4,0-1.1-0.1-1-0.2c-1.4,0.2,0.2,0.1-0.6,0.3
		c-1.8-0.3-5,0-5.4-0.5c-0.7,0.2,1.7,0.2-0.2,0.3c-0.5-0.5-2.2,0-3.9-0.2c0.5-0.3,2.1-0.1,0.4-0.4c-1,0.4-3.2-0.2-4.6-0.1
		c-0.1,0.4-3,0.1-5.4,0.1c0.2-0.1-4.4-0.3-6.6-0.5l0.1-0.1c-0.4,0.4-2.7,0.2-4.3,0.3c0.1-0.2,0.4-0.3,1.3-0.4l-1.5,0
		c-0.4,0.1-0.8,0.2-1.8,0.2l0.4-0.3c-2,0-4.1,0.2-6.8,0c-0.2,0.3,2.1,0.8-0.7,0.9c-0.1-0.1-0.2-0.4,0.5-0.4c-0.2,0-0.9,0.1-1.3,0
		l1.1-0.2c-1.2-0.1-0.6,0.2-1.6,0.1c0-0.2-0.7-0.2-0.6-0.3c0.2,0,0.8,0.1,1.2,0c-1.1-0.1-2.4-0.2-2.8-0.4c0.1,0.1,0,0.3-0.8,0.3
		c-2,0-0.7-0.3-1.9-0.4c-0.5,0.1-1.8,0-1.8,0.3c-0.6,0-0.7-0.2-0.9-0.2c-1.1,0.1-5-0.1-3.8,0.3l0.3,0c-0.1,0-0.1,0-0.2,0
		c0,0,0,0,0,0h0c-3.5,0-7.2-0.3-10.7-0.3l0-0.1c-2.1,0.1-4.6,0-6.1,0.2c-0.6,0-1.4-0.2-1.2-0.3c-1.6,0-1.8,0.1-4-0.1
		c1.6-0.1-0.5-0.2,1.6-0.1c-2-0.1-2.5-0.3-4.7-0.1c0.8-0.2-1.5-0.3-2.5-0.3l1.4,0.2c-1.1,0-2,0-3-0.1l0.5-0.3
		c-4.2-0.5-7.6,0.6-10.7-0.2c-1.1,0.2,2.3,0.2,1.3,0.5c-1.9-0.1-3.9-0.6-4.5-0.6c-2.6-0.2-2.5,0.4-5.2,0.3c0.4,0.1,0.7,0.4-1.4,0.5
		c-1.9-0.1-2.4-0.5-1.1-0.6c0.5,0,0.7,0,0.7,0.1c0.6,0,1.4-0.1,0.7-0.2l-0.3,0.1c-1-0.1-3.6-0.2-3-0.4c-1.5,0.1-0.6,0.2,0.5,0.3
		c-2.5-0.2-3.9-0.1-6.4-0.2c0.4,0.1,0.8,0.2,0.4,0.2c-3.7-0.2-1.6,0.2-4.2,0.2c-1.4-0.2,0.5-0.4-2-0.3c-1.6-0.1-0.3-0.3,0.3-0.4
		c-2.3,0.2-4.3-0.2-5.7-0.3l1.2-0.1c-0.7,0-1.3,0-1.9,0l0.7,0.2c-0.7-0.1-1.3-0.1-1.3-0.2c-0.7,0.1,0.6,0.4-0.9,0.6
		c-1-0.1-2.9,0.1-3.2-0.2c3,0.2-0.3-0.3,2.2-0.3c-0.5,0-1.1,0-1.8,0c-0.1,0,0.1-0.1,0.3-0.1c-2.9-0.3-1.3,0.3-4.3,0.3
		c0.4-0.2-0.7-0.3-1.2-0.3c1.2,0,0.6,0.3-0.5,0.4c-1.9-0.2-2.1,0.1-3.1,0l1.1,0.1c-0.4,0.2-1.3,0.1-2.7,0.2
		c-0.1-0.1,1.2-0.1,0.7-0.1c-1.5,0.3-3.3-0.4-5.4-0.2c-1-0.1-0.1-0.3-0.9-0.4c-2.3,0.2-2.5-0.3-4.9-0.1c0.7,0.2,0.8,0.2-0.9,0.4
		l4-0.1l-2.6,0.3c1.2,0,2.5-0.1,3.3-0.1c-1.2,0.2-1.1,0.1-0.5,0.3c-1.6-0.4-3.3,0.2-5.2-0.1l0.1-0.6c-2.9-0.3-5.1,0.2-8.8,0.1
		l1.2,0.1c-0.5,0.2-2.3,0-3.5,0.1c0.1-0.2-0.6-0.3-1.2-0.4c0.1,0.1-2.7,0-3.1,0.3l-1.7-0.3c-3-0.1-3.4,0.5-6.3,0.4
		c0.9-0.2-0.4-0.4,1.5-0.5c-1,0-1.8-0.1-1.8,0.1c-0.6-0.1-2.7,0.2-3.6,0c-0.4,0.1-0.5,0.3-1.6,0.3c-0.1,0,0-0.1,0-0.1
		c0,0.1-1.7,0.1-0.8,0.3c-3-0.6-8.3,0-10.9-0.6c-2.1,0-4.6,0.1-6.6,0.1c0.1-0.1,0-0.1,0.4-0.1c-2.6-0.2-1.6,0.6-4.6,0.3
		c-1.5-0.3,1.6-0.2,0.6-0.3c-0.4-0.7-3.6,0.1-5.6-0.3l0.5,0c-1.5-0.2-3.8,0.2-6.3,0.1c0,0,0.1-0.1,0-0.1c-1.7,0.3-5,0.4-7.4,0.5
		c0.8-0.2,1.1-0.1,0.6-0.4c-1.1,0,0.3,0.4-1.9,0.5c-0.7-0.1-2.3-0.3-2.5-0.5l2,0c-1-0.4-2.7,0-3.7-0.1l0.1-0.2
		c-3.1,0-3.2,0.4-6.6,0.4l0.3,0.1c-1.8,0.4-1.5-0.2-3.4,0.1l-0.6-0.4c-1.2,0.1-4.3,0.4-6.4,0.4c1.2-0.3,3.8-0.4,5.4-0.6
		c-1.2,0-4.1,0-4.7,0.2c0.5,0,1.1-0.1,1.6-0.1c-1.5,0.3-3.4,0.4-5.8,0.4c0.4-0.8-6.3-0.2-8-0.8c-4.3,0.3-8.4-0.1-13.4-0.1
		c1.8,0.6-1.4,0-1.1,0.6c-1.2,0-1.6,0-1.7,0l-3.5-0.4c-0.8-0.2,1.1-0.1,1-0.3c-2.5-0.1-1.1-0.3-2.7-0.4c0.3,0.2-0.9,0.3-2.3,0.2
		l2,0.3c-3.5,0.3-3-0.5-6.6-0.2l1.1-0.2c-1.8,0.1-6.7,0-8.5,0.5c-0.3-0.1-0.7-0.2,0.1-0.3c-4.4-0.1-9.7,0.5-13.1,0.2l0.3-0.1
		c-0.8,0-1.4,0.3-2.4,0.1c0.1-0.1,0.3-0.1,0-0.2c-0.4,0.1-2.2,0.3-3.2,0.2l0.9-0.2c-4.3-0.2-6.5,0.4-10.1,0.5c0-0.4-3.3-0.6-5-0.6
		l0.1-0.1c-5,0-8.4,0.4-13,0.6c-2.8-0.5-9.6-0.2-14.2-0.4c0.7,0.1-0.1,0.3-0.9,0.4c-1.1-0.1-3,0.3-2.8-0.1l0.4,0
		c-0.8-0.4-3-0.3-4.7-0.3l-0.3,0.5c-4.5-0.7-11.8,0.4-14.3-0.3c-1.1,0.1-2.4,0.1-3.5,0.3l0.1-0.3c-3-0.1-4.5-0.1-8.2,0l0.8-0.2
		c-2.1,0-2.6,0.8-4.6,0.9l-0.6-0.4c-3.7,0-7.4-0.3-11,0.1c0.1-0.1,0.2-0.2,0.8-0.2c-1.7,0-6.7-0.2-6,0.4c0-0.4-3.8,0-5.8,0.2
		l0.3-0.3c-1.7,0.4-1.7,0.5-4.1,0.6c-0.6,0-0.5-0.2,0.2-0.2c-1.8-0.1-1.4,0.3-3.7,0.2l0.8-0.2c-1.9,0-1.7,0.1-2.8,0.3
		c-1.2,0.1-3.6,0-3.9-0.3c-0.3,0.2-1.3,0.4-2.4,0.3c-0.2-0.1,0.3-0.2,0.5-0.2c-3.2-0.2-4.7,0.4-6.9,0.1c0-0.1-0.2-0.1-0.4-0.2
		c2.5,0,4.5,0,4.4,0c0-0.3-2-0.3-0.4-0.7c-1.6,0.2-4.4,0.7-6.4,0.6c-0.1,0-0.2,0-0.3-0.1l0.2,0c-0.5,0-0.9,0-1.3,0.1
		c-0.6,0-1-0.1-1.6-0.1c-0.2-0.2-2.3-0.1-3.3-0.1c0.1,0.3-1.2,0.3,0,0.5c-0.2,0,0.2,0,0.9-0.1c0.2,0,0.3,0,0.4,0c0,0,0,0-0.1,0
		c0.7,0,1.5,0,2.5-0.1c-0.8,0.2-1.6,0.3-2.8,0.1c-0.5,0.2-1.1,0.4-1.4,0.5c-1.4-0.4-4.1-0.6-4.4-0.8c-3.1,0.2-7.3,0.2-9.2,0.7
		c-0.9,0.1-1-0.1-1.3-0.2c0.5-0.1,1.1-0.1,1.4-0.1c-1.8,0.2-5.2,0.1-5.6,0.5c-2.2-0.1,1.2-0.4-1.8-0.3l0.4-0.1
		c-6-0.5-9.7,1.1-16.4,0.4c0.5,0,0.7,0.1,0.8,0.1c-7.6-0.2-15.6,0.5-23.1,0.2c-2.1-0.1-2.4,0.2-3.7,0.4l-0.5-0.3l-2.2,0.4
		c-3.1,0.3-5.5-0.6-9.4-0.1l0.5,0.2c-1.4,0-4.5,0.2-4.3,0c-0.1,0-0.5,0.2-1,0.1l0-0.2l-3.5,0.3c-2.7-0.1,0.4-0.6-3.6-0.6
		c-1.5,0.1-4.2,0.5-3.6,0.6c0.6,0,1.5,0.1,1.6,0.2l-1.4,0.1c-0.2,0.5-1.3,1,2.1,1.2l2.3-0.3l0.7,0.2l-1.9,0c1.1,0.2,1.8,0,2.6-0.2
		c0.2,0.1,0.5,0.2,1,0.2l2.3-0.5c0.3,0.2-1,0.4,0.5,0.5c1.1-0.2-1-0.4,0.7-0.6c1.1,0.2,0.8,0.4,2.1,0.2c0.2,0.1-0.1,0.2-0.6,0.3
		c1.2-0.2,3.1-0.1,3.6-0.4c1.2,0.2,3.9-0.1,3.8,0.3c0.4-0.1,2-0.4,3.1-0.4c-1.9,0.6,4,0,3.5,0.5c1.4-0.5,5.2-0.3,7.7-0.6
		c-0.1,0-0.4,0.1-0.6,0.1c1.4,0,1.9,0.1,2.8,0.2c0.2-0.4,2.4-0.5,3.6-0.8c1.8,0.4-1.1,0.5-0.5,0.8c-0.1-0.3,3-0.4,2.4-0.6
		c1.3,0.2,1.2,0.1,1.9,0.4c0.2-0.5,1.2-0.1,2.4-0.4c1.9,0.2,0.5,0.5,2.6,0.3C178.8,327.2,176.9,327.4,176.9,327.4z M227.6,325.8
		L227.6,325.8c-0.4,0-0.8,0-1,0C226.8,325.9,227.1,325.8,227.6,325.8z M231.9,325.8c-0.5,0-1.2,0-1.8,0c-0.2-0.1,0-0.2,0.4-0.2
		C230.3,325.7,231.3,325.7,231.9,325.8z M222.9,323.9c0.7,0,0.9,0,1,0.1c-0.3,0-0.7,0-1.2,0c0,0-0.1,0-0.1,0
		C222.7,324,222.7,324,222.9,323.9z"/>
                    <path class="st1" d="M221.7,324.3c-0.1,0-0.2,0-0.3,0c0.1,0,0.3,0,0.4,0.1c0.1,0,0.2-0.1,0.2-0.1
		C221.9,324.3,221.8,324.3,221.7,324.3z"/>
                    <path class="st1"
                          d="M608.1,326.4L608.1,326.4C608.1,326.4,608.2,326.4,608.1,326.4C608.2,326.4,608.2,326.4,608.1,326.4z"/>
                    <polygon class="st1" points="290.8,325.8 290.8,325.7 290.4,325.8 	"/>
                    <path class="st1" d="M631.6,327.9c0,0,0.1,0.1,0.3,0.1C631.9,327.9,631.7,327.9,631.6,327.9z"/>
                    <path class="st1" d="M641.7,328.2l1.4,0.1C642.5,328.2,642.1,328.2,641.7,328.2z"/>
                    <path class="st1" d="M649.5,328.5c0.1,0,0.1-0.1,0.2-0.1l0,0L649.5,328.5z"/>
                    <path class="st1" d="M525.5,326.5c-0.1,0-0.2,0-0.3,0C524.5,326.5,525,326.5,525.5,326.5z"/>
                    <path class="st1" d="M562.4,326.4c-0.4,0-0.8,0.1-1.2,0.1C561.9,326.5,562.4,326.5,562.4,326.4z"/>
                    <path class="st1" d="M484.3,326.3L484.3,326.3c-0.1,0-0.2,0-0.2,0L484.3,326.3z"/>
                    <path class="st1" d="M559.5,326.4c0.7,0.1,1.2,0.1,1.7,0C560.7,326.5,560.1,326.4,559.5,326.4z"/>
                    <path class="st1" d="M683.3,329.5l0.4,0c0,0,0,0,0,0L683.3,329.5z"/>
                    <path class="st1" d="M683.7,329.4l0.4,0C683.9,329.4,683.8,329.4,683.7,329.4z"/>
                    <path class="st1" d="M685,329.4l-0.9,0C684.4,329.4,684.8,329.5,685,329.4z"/>
                    <path class="st1" d="M673,329.1l-0.1,0.1C672.9,329.1,673,329.1,673,329.1z"/>
                    <path class="st1" d="M669.8,329c0.7,0,1.9,0.3,2.9,0.2l0.1-0.1C672.4,329.3,670.6,328.9,669.8,329z"/>
                    <path class="st1"
                          d="M656.8,327.4l2.6,0.1c-0.5-0.1-1.1-0.3,0.1-0.3C656.2,326.9,660.2,327.5,656.8,327.4z"/>
                    <path class="st1" d="M648.6,327.1c1.4,0,0-0.2,0.1-0.2C647.8,326.9,647.6,326.9,648.6,327.1z"/>
                    <path class="st1" d="M589.7,325.8l0.1-0.3C588.8,325.5,589.9,325.6,589.7,325.8z"/>
                    <polygon class="st1" points="578.5,326.9 579.5,327.1 580,326.9 	"/>
                    <polygon class="st1" points="571.8,325 572.3,324.9 570.5,325 	"/>
                    <path class="st1" d="M472.9,323.7l0.3,0.3C474,324,474.1,323.7,472.9,323.7z"/>
                    <path class="st1" d="M430.2,323.7c-0.5-0.2-1.7-0.3-2.4-0.1C428.7,323.7,429.7,323.8,430.2,323.7z"/>
                    <polygon class="st1" points="302.1,323.2 302.9,323.1 301.3,323.2 	"/>
                </g>
                <g>
                    <g id="IPAD_1_" transform="translate(681.000000, 55.000000)" sketch:type="MSLayerGroup">
                        <path id="bezel_3_" sketch:type="MSShapeGroup" class="st2" d="M-187.9,245V129.2c0-4,3.3-7.3,7.3-7.3H-2.9c4,0,7.3,3.3,7.3,7.3
			V245c0,4-3.3,7.3-7.3,7.3h-177.7C-184.7,252.3-187.9,249-187.9,245z"/>
                        <path id="bezel-2_1_" sketch:type="MSShapeGroup" class="st2" d="M-187.9,245V129.2c0-4,3.3-7.3,7.3-7.3H-2.9c4,0,7.3,3.3,7.3,7.3
			V245c0,4-3.3,7.3-7.3,7.3h-177.7C-184.7,252.3-187.9,249-187.9,245z"/>
                        <rect id="screen_3_" x="-168.5" y="132.2" sketch:type="MSShapeGroup" class="st2" width="153.5"
                              height="110.4">
                        </rect>
                        <circle id="lock_1_" sketch:type="MSShapeGroup" class="st2" cx="-177.6" cy="187.4" r="4.9">
                        </circle>
                        <circle id="camera_1_" sketch:type="MSShapeGroup" class="st2" cx="-5.9" cy="186.8" r="1.8">
                        </circle>
                    </g>
                    <path id="bezel_2_" sketch:type="MSShapeGroup" class="st2" d="M497.6,75.3h-301c-8.2,0-15.2,6.7-15.2,15v198h331.3v-198
		C512.7,82,505.8,75.3,497.6,75.3z"/>
                    <circle id="webcam_1_" sketch:type="MSShapeGroup" class="st3" cx="347.7" cy="86.8" r="2.4">
                    </circle>
                    <g id="bottom_1_" transform="translate(0.000000, 351.000000)" sketch:type="MSShapeGroup">
                        <path id="Shape_1_" class="st2" d="M526-43.9H168.3c-18.6,0-31.1-6.4-31.1-9.1v-8.2c0-0.8,0.8-1.5,1.8-1.5h416.3
			c1,0,1.8,0.7,1.8,1.5v8.6C557.1-50.5,547.4-43.9,526-43.9z"/>
                        <path id="Line_1_" class="st2" d="M137.4-53.9H556"/>
                    </g>
                    <rect id="screen_2_" x="194.8" y="98.9" sketch:type="MSShapeGroup" class="st3" width="304"
                          height="177.2">
                    </rect>
                    <path id="touchpad_1_" sketch:type="MSShapeGroup" class="st3" d="M392.6,288.9v1.9c0,1.3-2.6,1.7-4.6,1.7h-81.7
		c-2.1,0-4.7-0.4-4.7-1.7v-1.9"/>
                    <path class="st0" d="M620.9,130.3c-1.1,0-2.1,0.2-3.1,0.7c0-0.3,0-0.6,0-0.9c0-5.6-4.5-10.1-10.1-10.1c-1.3,0-2.6,0.3-3.7,0.7
		c-3-7.4-11.4-11.5-21.3-11.5c-11.9,0-21,7.5-21,15.1c0,0.5,0.1,1.1,0.2,1.6c-0.9-0.2-1.8-0.4-2.7-0.4c-5.6,0-10.1,4.5-10.1,10.1
		c0,5.2,4,9.5,9.1,10c0,0,0,0,0,0h0.9c0,0,0,0,0,0c0,0,0,0,0,0h60.4c0,0,9.5,0.5,9.3-7.7C629.1,133.9,625,130.3,620.9,130.3z"/>
                    <g>
                        <g>
                            <g>
                                <path class="st4" d="M347.7,150.7c-20.1,0-36.5,16.4-36.5,36.5s16.4,36.5,36.5,36.5c20.1,0,36.5-16.4,36.5-36.5
					S367.8,150.7,347.7,150.7z M337.7,180.2L337.7,180.2c0.4-0.3,0.5-0.6,0.5-1c-0.7-4.4-0.3-6.3-0.1-6.7c1.3-3.9,5.3-5.8,6.1-6.1
					c0.2-0.1,0.5-0.2,0.8-0.2l0.1,0l0.6,0l0,0l0.2,0c0.1,0,0.3,0,0.4-0.1l0.1,0c0.1,0,1.7,0.2,4,0.9l1.6,0.6c3,0.9,4.3,2.5,4.6,2.8
					c2.4,2.7,1.7,6.7,1.1,8.9c-0.1,0.3,0,0.5,0.1,0.7l0.1,0.2c0.2,0.2,0.3,1.1-0.2,3c-0.1,0.6-0.3,1.1-0.6,1.4
					c-0.1,0.1-0.2,0.3-0.2,0.5c-0.8,4.7-5,10-9.5,10c-3.8,0-8.1-4.8-8.8-10c0-0.2-0.1-0.4-0.2-0.5c-0.3-0.3-0.5-0.8-0.7-1.5
					C337.5,181.7,337.4,180.7,337.7,180.2z M329.3,200.6c0.2-0.2,1.1-1.3,2.9-2c1.6-0.5,5.6-1.8,7.8-3.4c0.1-0.1,0.2-0.2,0.3-0.2
					c0.2-0.2,0.5-0.6,0.9-0.9l0.2-0.2l0.2,0.2c1.9,1.8,4.1,2.8,6,2.8c2,0,4.2-0.9,6.1-2.6l0.2-0.1l0.4,0.2c0.4,0.3,1,0.8,1.3,0.9
					l0.4,0.2l0,0l0.2,0.1c0.4,0.2,0.8,0.4,1.2,0.7c0.5,0.2,0.9,0.4,1.3,0.5c0.3,0.1,2.1,0.7,4.2,1.7l0.4,0.1c2,0.8,2.9,1.8,3,1.9
					c2.4,3.5,3.3,10.1,3.6,13.8c-6.2,5-14,7.8-22,7.8c-8,0-15.8-2.8-22-7.8C326,210.7,326.9,204.1,329.3,200.6z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st5" d="M393.2,207.6l-3.9-3.9c-0.5-0.5-1.2-0.5-1.7,0L371.3,220l-6.9-6.9c-0.5-0.5-1.2-0.5-1.7,0l-3.9,3.9
				c-0.5,0.5-0.5,1.2,0,1.7l11.7,11.7c0.2,0.2,0.5,0.3,0.8,0.3c0.3,0,0.6-0.1,0.8-0.3l21.1-21.1c0.2-0.2,0.3-0.5,0.3-0.8
				C393.6,208.1,393.5,207.8,393.2,207.6z"/>
                        </g>
                        <g>
                            <g>
                                <path class="st6" d="M579.9,223c-10.3,0-18.7,8.4-18.7,18.7c0,10.3,8.4,18.7,18.7,18.7c10.3,0,18.7-8.4,18.7-18.7
					C598.7,231.4,590.3,223,579.9,223z M574.8,238.2L574.8,238.2c0.2-0.2,0.3-0.3,0.2-0.5c-0.4-2.3-0.1-3.2,0-3.5
					c0.7-2,2.7-3,3.1-3.1c0.1,0,0.2-0.1,0.4-0.1l0,0l0.3,0l0,0l0.1,0c0.1,0,0.1,0,0.2,0l0.1,0c0.1,0,0.9,0.1,2.1,0.5l0.8,0.3
					c1.5,0.4,2.2,1.3,2.4,1.5c1.2,1.4,0.9,3.5,0.6,4.6c0,0.1,0,0.3,0.1,0.4l0.1,0.1c0.1,0.1,0.2,0.6-0.1,1.6
					c-0.1,0.3-0.2,0.5-0.3,0.7c-0.1,0.1-0.1,0.2-0.1,0.2c-0.4,2.4-2.6,5.1-4.9,5.1c-1.9,0-4.1-2.5-4.5-5.1c0-0.1-0.1-0.2-0.1-0.3
					c-0.2-0.2-0.3-0.4-0.3-0.8C574.7,239,574.7,238.4,574.8,238.2z M570.5,248.7c0.1-0.1,0.6-0.7,1.5-1c0.8-0.3,2.9-0.9,4-1.8
					c0.1,0,0.1-0.1,0.1-0.1c0.1-0.1,0.3-0.3,0.5-0.5l0.1-0.1l0.1,0.1c1,0.9,2.1,1.4,3.1,1.4c1.1,0,2.1-0.5,3.1-1.3l0.1-0.1l0.2,0.1
					c0.2,0.2,0.5,0.4,0.7,0.5l0.2,0.1l0,0l0.1,0.1c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,1.1,0.4,2.2,0.9
					l0.2,0.1c1,0.4,1.5,0.9,1.5,1c1.2,1.8,1.7,5.2,1.9,7.1c-3.2,2.6-7.2,4-11.3,4c-4.1,0-8.1-1.4-11.3-4
					C568.8,253.8,569.3,250.5,570.5,248.7z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st5" d="M603.3,252.2l-2-2c-0.2-0.2-0.6-0.2-0.9,0l-8.4,8.4l-3.6-3.6c-0.2-0.2-0.6-0.2-0.9,0l-2,2
				c-0.2,0.2-0.2,0.6,0,0.9l6,6c0.1,0.1,0.3,0.2,0.4,0.2c0.2,0,0.3-0.1,0.4-0.2l10.8-10.8c0.1-0.1,0.2-0.3,0.2-0.4
				C603.5,252.5,603.4,252.4,603.3,252.2z"/>
                        </g>
                    </g>
                    <path class="st7" d="M207,245.4c8.2-7.5,11.4,0.4,14.5-3.2C221.5,242.3,215.9,251.8,207,245.4z M207.2,245.6c0,0,0.1,0.4,6.1,0
		c6-0.4,8.2-3.3,8.2-3.3c-2.5,2.7-8.3,3.6-14.3,2.9l-0.2,0.2L207.2,245.6z"/>
                </g>
                <path class="st0" d="M952.5,150.1c-1.7,0-3.3,0.4-4.8,1c0-0.5,0.1-0.9,0.1-1.4c0-8.7-7-15.7-15.7-15.7c-2,0-4,0.4-5.8,1.1
	c-4.7-11.5-17.7-18-33.2-18c-18.6,0-32.8,11.8-32.8,23.6c0,0.9,0.1,1.7,0.2,2.5c-1.3-0.4-2.7-0.6-4.2-0.6c-8.7,0-15.7,7-15.7,15.7
	c0,8.2,6.3,14.9,14.3,15.6c0,0,0,0,0,0.1h1.4c0,0,0,0,0,0c0,0,0,0,0,0h94.4c0,0,14.8,0.8,14.6-12
	C965.2,155.8,958.9,150.1,952.5,150.1z"/>
                <path class="st7" d="M141.3,207.7c5.1-15.1,18.1-8.3,19.2-14.8C160.6,193,161.3,208.2,141.3,207.7z M141.9,207.7
	c0,0,0.5,0.4,9.3-4.6c8.9-5.1,9.4-10,9.4-10c-1,5.1-9.3,10.5-19.2,14.4v0.3H141.9z"/>
                <path class="st7" d="M108.5,179.8c3.6,5.8,13.4-4.1,24.1,8.7C113.8,194.3,108.5,179.8,108.5,179.8z M132.6,188.4l-0.2-0.2
	c-10.9-1-20.9-3.8-23.8-8.4c0,0,2.6,4.6,12.8,7c10.3,2.4,10.7,1.9,10.7,1.9L132.6,188.4z"/>
                <path class="st7" d="M122.2,154c5.8-13.8,17.5-7,19-13C141.2,141,140.9,155.4,122.2,154z M122.7,154c0,0,0.5,0.4,9.1-3.9
	c8.6-4.3,9.5-9,9.5-9c-1.4,4.8-9.5,9.4-19,12.6l-0.1,0.3H122.7z"/>
                <path class="st7" d="M96.2,140.2c3.8,5.2,12.2-4.5,23.2,7C102.3,153.5,96.2,140.2,96.2,140.2z M119.4,147.1l-0.2-0.3
	c-10.3-0.3-19.8-2.4-22.9-6.7c0,0,2.7,4.2,12.5,5.9c9.7,1.7,10.1,1.2,10.1,1.2L119.4,147.1z"/>
</svg>
        </div>
        <article class="layout article-container">
            <div class="layout__item article article--small--right u-6/12-desk">
                <div class="article__header article__header--logo article__header--main">
                    <svg class="svg-basic svg-blue">
                        <use xlink:href="#shape-logo"></use>
                    </svg>Présent</div>
                <p class="article__body">Un outil de gestion de présences. Présent, vous permet de gérer de manière simple et efficace la prise des
                    présences et vous offre un retour riche sur celles-ci.</p>
                <p class="article__body">Il vous suffit de vous inscrire. Les données restent confidentielles et ne seront pas revendues à des
                    tiers.</p>
            </div>
            <div class="layout__item u-6/12-desk">
                <div class="">
                    @if(isset($request[0]))
                        <h2 class="article__header">Terminer l’inscription</h2>
                        {!! Form::open( ['action'=>'Auth\AuthController@postRegister','class'=>'welcome-form welcome-form--small pos-rel','method'=>'POST']) !!}
                        @include('forms.users.auth.finalRegister',['submit'=>'Terminer l’inscription'])
                        {!! Form::close() !!}
                    @else
                        <h2 class="article__header article__header">S’inscrire <i class="article__header__meta"> ou
                                S’identifier</i></h2>
                        {!! Form::open( ['action'=>'Auth\AuthController@getLastRegisterFormOrLoginUser','class'=>'welcome-form welcome-form--small pos-rel','method'=>'POST']) !!}
                        @include('forms.users.auth.registerOrLogin',['submit'=>'S’inscrire'])
                        {!! Form::close() !!}
                    @endif
                    @include('forms.partials.social-link')
                    {{--<p class="welkcome-caption">Vous êtes déjà
                        membre&nbsp;? {!! Html::linkAction('Auth\AuthController@getLogin','Identifiez-vous',[],['class'=>'']) !!}</p>--}}
                </div>
            </div>
        </article>
        <article class="layout article-container">
            <div class="layout__item article u-6/12-desk">
                <h2 class="article__header">Un outil de gestion de présences</h2>
                <p class="article__body">Depuis trop longtemps, vous prenez les présences sur papier ? Depuis trop
                    longtemps, vous transcrivez les présences dans des logiciels douteux ? Cela fait bien trop longtemps
                    que vous avez abandonné l’idée de présenter des statistiques de qualité aux parents ?
                </p>
            </div>
            <div class="layout__item article u-6/12-desk">
                <h2 class="article__header">Pour vous&nbsp;!</h2>
                <p class="article__body">Sans aucun doute l’outil de gestion de présences le plus prometteur de l’année.
                    Présent, changera la manière dont vous envisagez les présences. À votre service, il vous permet
                    depuis une interface agréable ergonomique de prendre les présences. Ici une première version bêta,
                    afin de vous donner un avant-goût. Mais surtout une chouette occasion pour moi de récupérer vos
                    retours.
                </p>
            </div>
        </article>
    </div>
    <section class="wrapper">
        <h2 class="visuallyhidden">Mais encore</h2>
        <div class="layout article-container"><!--
            --><article class="layout__item u-6/12-desk article media">
                <svg class="svg--blue svg--medium media__img visuallyhidden--lap visuallyhidden--palm">
                    <use xlink:href="#shape-graphics"></use>
                </svg>
                <div class="media__body article__body">
                    <h3 class="article__header">Des graphiques&nbsp;?</h3>
                    <p class="">Mais oui ! Des graphiques dynamiques qui se construisent sans même devoir faire quelque
                        chose. Finis les logiciels Mi… pour gérer vos graphiques depuis des données complexes. Laissez
                        vous emporter par la simplicité de Présent qui instantanément affiche des graphiques afin
                        d’avoir un retour riche sur la prise de présences.</p>
                </div>
            </article><!--
            --><article class="layout__item article u-6/12-desk">
                <svg class="svg--blue svg--medium media__img visuallyhidden--lap visuallyhidden--palm">
                    <use xlink:href="#shape-import"></use>
                </svg>
                <div class="media__body article__body">
                    <h3 class="article__header">Importez vos élèves</h3>
                    <p class="">Pour prendre des présences, vous devrez au préalable enregistrer les élèves auxquelles
                        vous donnez cours. Mais ne pensez pas que vous devrez enregistrer manuellement chacun de vos
                        élèves. Présent, vous permet d’importer très facilement tous vos élèves depuis un seul fichier
                        .csv. </p>
                </div>
            </article><!--
            --><article class="layout__item article u-6/12-desk">
                <svg class="svg--blue svg--medium media__img visuallyhidden--lap visuallyhidden--palm">
                    <use xlink:href="#shape-students"></use>
                </svg>
                <div class="media__body article__body">
                    <h3 class="article__header">Des statuts</h3>
                    <p class="">Mais oui ! Enfin, on peut parler de prendre les présences avec des statuts que VOUS
                        définissez depuis une page de configuration. Vous pouvez modifier, supprimer, mais surtout créer
                        vos propres statuts que vous retrouverez lors de la prise des présences et dans de nombreux
                        graphiques avec un code couleur personnalisable.</p>
                </div>
            </article><!--
            --><article class="layout__item article u-6/12-desk">
                <svg class="svg--blue svg--medium media__img visuallyhidden--lap visuallyhidden--palm">
                    <use xlink:href="#shape-calendar"></use>
                </svg>
                <div class="media__body article__body">
                    <h3 class="article__header">Planifiez vos séances</h3>
                    <p class="">Plus facile que ne jamais créer en seulement quelques clicks vos séances de cours depuis
                        des formulaires agréables. </p>
                </div>
            </article><!----></div>
    </section>
    @include('partials.visitors_footer')
@endsection