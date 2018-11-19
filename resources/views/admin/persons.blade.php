@section('titulo')
<h2 class="bg-dark col-md-12">
    Usuarios
</h2>
@endsection
<div class="container">
    <div class="col-md-12">
        <table id="persons">
            <thead>
                <tr class="bg-info text-white">
                    <th>
                        Cedula
                    </th>
                    <th>
                        Correo
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody id="table_vue">
                <tr v-for="person in persons">
                    <td>
                        @{{ person.identification }}
                    </td>
                    <td>
                        @{{ person.user.email }}
                    </td>
                    <td>
                        @{{ person.name }}
                    </td>
                    <td>
                        @{{ person.lastname }}
                    </td>
                    <td>
                        <button @click="activarUser(person.user.active)" class="btn btn-info" type="button" v-if="person.user.active">
                            <i class="fas fa-toggle-on">
                            </i>
                        </button>
                        <button @click="activarUser(person.user.active)" class="btn btn-info" type="button" v-else="">
                            <i class="fas fa-toggle-off">
                            </i>
                        </button>
                        <button @click="eliminarUser(person.user.id)" class="btn btn-danger" type="button">
                            <i class="fas fa-trash-alt">
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
