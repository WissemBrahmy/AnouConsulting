@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.candidatures.title')</h3>
    @can('candidature_create')
    <p>
        <a href="{{ route('admin.candidatures.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('candidature_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.candidatures.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.candidatures.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($candidatures) > 0 ? 'datatable' : '' }} @can('candidature_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('candidature_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.candidatures.fields.nom')</th>
                        <th>@lang('quickadmin.candidatures.fields.adresse')</th>
                        <th>@lang('quickadmin.candidatures.fields.diplome')</th>
                        <th>@lang('quickadmin.candidatures.fields.email')</th>
                        <th>@lang('quickadmin.candidatures.fields.domaine')</th>
                        <th>@lang('quickadmin.candidatures.fields.niveau')</th>
                        <th>@lang('quickadmin.candidatures.fields.cv')</th>
                        <th>@lang('quickadmin.candidatures.fields.lm')</th>
                        <th>@lang('quickadmin.candidatures.fields.disponibilite')</th>
                        <th>@lang('quickadmin.candidatures.fields.contrat')</th>
                        <th>@lang('quickadmin.candidatures.fields.commentaire')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($candidatures) > 0)
                        @foreach ($candidatures as $candidature)
                            <tr data-entry-id="{{ $candidature->id }}">
                                @can('candidature_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='nom'>{{ $candidature->nom }}</td>
                                <td field-key='adresse'>{{ $candidature->adresse }}</td>
                                <td field-key='diplome'>{{ $candidature->diplome }}</td>
                                <td field-key='email'>{{ $candidature->email }}</td>
                                <td field-key='domaine'>{{ $candidature->domaine }}</td>
                                <td field-key='niveau'>{{ $candidature->niveau }}</td>
                                <td field-key='cv'>{{ $candidature->cv }}</td>
                                <td field-key='lm'>{{ $candidature->lm }}</td>
                                <td field-key='disponibilite'>{{ $candidature->disponibilite }}</td>
                                <td field-key='contrat'>{{ $candidature->contrat }}</td>
                                <td field-key='commentaire'>{{ $candidature->commentaire }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('candidature_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidatures.restore', $candidature->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('candidature_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidatures.perma_del', $candidature->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('candidature_view')
                                    <a href="{{ route('admin.candidatures.show',[$candidature->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('candidature_edit')
                                    <a href="{{ route('admin.candidatures.edit',[$candidature->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('candidature_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.candidatures.destroy', $candidature->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('candidature_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.candidatures.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection