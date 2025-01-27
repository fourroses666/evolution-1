<?php

use EvolutionCMS\Facades\ManagerTheme;

/********************************************************************/
/* default action: show not implemented message                     */
/********************************************************************/
// say that what was requested doesn't do anything yet
?>
@extends('manager::template.page')
@section('content')
    <div class='sectionHeader'>{{ __('global.functionnotimpl') }}</div>
    <div class='sectionBody'>
        <p>{{ __('global.functionnotimpl_message')  }}</p>
    </div>
@endsection
