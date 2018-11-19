@section('titulo')
<h2 class="bg-dark">
    Empresas
</h2>
@endsection
<div class="container">
    <div class="col-md-12">
        <table id="persons">
            <caption>
                table title and/or explanatory text
            </caption>
            <thead>
                <tr class="bg-info text-white">
                    <th>
                        Nit
                    </th>
                    <th>
                        Correo
                    </th>
                    <th>
                        Razon Social
                    </th>
                    <th>
                        Opciones
                    </th>
                </tr>
            </thead>
            <tbody id="table_vue">
                <tr v-for="person in persons">
                    <td>
                        @{{ person.nit }}
                    </td>
                    <td>
                        @{{ person.user.email }}
                    </td>
                    <td>
                        @{{ person.business_name }}
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