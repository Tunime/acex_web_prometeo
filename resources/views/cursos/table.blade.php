<table class="table table-responsive" id="cursos-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Carrera Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Icono</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cursos as $curso)
        <tr>
            <td>{!! $curso->user_id !!}</td>
            <td>{!! $curso->carrera_id !!}</td>
            <td>{!! $curso->nombre !!}</td>
            <td>{!! $curso->descripcion !!}</td>
            <td>{!! $curso->icono !!}</td>
            <td>
                {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cursos.show', [$curso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cursos.edit', [$curso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>