<div class="m-3">
    @can('datefacturare_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.datefacturares.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.datefacturare.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.datefacturare.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-userDatefacturares">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.nume') }}
                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.cui') }}
                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.numar_inregistrare') }}
                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.adresa') }}
                            </th>
                            <th>
                                {{ trans('cruds.datefacturare.fields.user') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datefacturares as $key => $datefacturare)
                            <tr data-entry-id="{{ $datefacturare->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $datefacturare->id ?? '' }}
                                </td>
                                <td>
                                    {{ $datefacturare->nume ?? '' }}
                                </td>
                                <td>
                                    {{ $datefacturare->cui ?? '' }}
                                </td>
                                <td>
                                    {{ $datefacturare->numar_inregistrare ?? '' }}
                                </td>
                                <td>
                                    {{ $datefacturare->adresa ?? '' }}
                                </td>
                                <td>
                                    {{ $datefacturare->user->name ?? '' }}
                                </td>
                                <td>
                                    @can('datefacturare_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.datefacturares.show', $datefacturare->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('datefacturare_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.datefacturares.edit', $datefacturare->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan


                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-userDatefacturares:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection