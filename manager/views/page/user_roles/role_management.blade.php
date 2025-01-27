<?php

use EvolutionCMS\Facades\ManagerTheme;

?>
<div class="tab-page {{ $tabPageName }}" id="{{ $tabIndexPageName }}">
    <h2 class="tab">
        <a href="?a=86&tab={{ $tab->getIndex() }}">
            <i class="{{ ManagerTheme::getStyle('icon_role') }}"></i>{{ __('global.role_management_title') }}
        </a>
    </h2>
    <script>tpResources.addTabPage(document.getElementById('{{ $tabIndexPageName }}'))</script>

    <div class="">
        <div class="form-group">
            {!! __('global.role_management_msg') !!}
            <a class="btn btn-secondary btn-sm" href="{{ (new EvolutionCMS\Models\UserRole)->makeUrl('actions.new') }}">
                <i class="{{ ManagerTheme::getStyle('icon_add') }} hide4desktop"></i> {{ __('global.new_role') }}
            </a>
        </div>
        <div class="form-group">
            @if($roles->count() === 0)
                <p>{{ __('global.no_records_found') }}</p>
            @else
                <div class="row">
                    <div class="table-responsive">
                        <table class="table data">
                            <thead>
                            <tr>
                                <td>{{ __('global.role') }}</td>
                                <td>{{ __('global.description') }}</td>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                /** @var EvolutionCMS\Models\UserRole $role */ ?>
                            @foreach($roles as $role)
                                @if($role->getKey() === 1)
                                    <tr class="text-muted disabled">
                                        <td>
                                            <b>{{ $role->name }}</b>
                                        </td>
                                        <td>
                                            <span>{{ __('global.administrator_role_message') }}</span>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>
                                            <a class="text-primary" href="{{ $role->makeUrl('actions.edit') }}">
                                                {{ $role->name }}
                                            </a>
                                        </td>
                                        <td>{{ $role->description }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="clearfix"></div>
</div>

@push('scripts.bot')
    <script>
      initQuicksearch('{{ $tabIndexPageName }}_search', '{{ $tabIndexPageName }}_content')
      initViews('ch', '{{ $tabIndexPageName }}', '{{ $tabIndexPageName }}_content')
    </script>
@endpush
