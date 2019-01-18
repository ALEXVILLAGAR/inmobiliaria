@extends('layouts.app')

@push('styles')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css" rel="stylesheet">
            @endpush



@section('content')
            <div class="col-md-10 col-md-offset-1">
                <br>
                    <br>
                        <br>
                            <br>
                                <br>
                                    <br>
                                        <br>
                                            <br>
                                                <hr class="mi_hr">
                                                </hr>
                                            </br>
                                        </br>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </br>
                </br>
            </div>
            <a class="btn btn-info col-md-offset-1" href="{{ route('Person.index') }}">
                Personas
            </a>
            <a class="btn btn-info" href="{{ route('Company.index') }}">
                Empresas
            </a>
            <br>
                <br>
                    @if (isset($company))
    @include('admin.company')
@else
    @include('admin.persons')
@endif
                    <script src="https://unpkg.com/vue">
                    </script>
                    <script src="https://unpkg.com/vue-toasted">
                    </script>
                    <script>
                        Vue.use(Toasted)
                    </script>
                    <script>
                        var app = new Vue({
        el: '#table_vue',
        data:{
            persons: {!! $persons->toJSON() !!}
        },

        methods:{
            activarUser: function(active){
                $.ajax({
                    url:'/Person/Active/'+user,
                    type:'get',
                    success: function(response){
                        console.log(response['data']);
                         Vue.toasted.show("usuario activado", { 
     theme: "bubble", 
     position: "top-right", 
     duration : 30000
});
                    }
                })
            },
            eliminarUser(user){
                if(confirm('Eliminar este usuario')){
                    $.ajax({
                        url:'/User/destroy/'+user,
                        success: function(response){
                            location.reload(true);
                           Vue.toasted.show("usuario eliminado", { 
     theme: "bubble", 
     position: "top-right", 
     duration : 30000
});
                           
                        }           
                    })
                }
            }
        }
    })
                    </script>
                    @endsection


    {{-- expr --}}
                    <script crossorigin="anonymous" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
                    </script>
                    <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
                    </script>
                    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                    </script>
                    <script charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js" type="text/javascript">
                    </script>
                    <script>
                        function activar(user){
        $.ajax({
            url:'/Person/Active/'+user,
            type:'get',
            success: function(response){
                console.log(response['data']);
            }
        })
    }

    $(document).ready(function(){
        $("#persons").DataTable({
            "processing":true,
            "lenghtMenu":[[10,25,50,-1],[10,25,50,"ALL"]],
            "language":{"url":"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
        });
    });
                    </script>
                </br>
            </br>
        </link>
    </link>
</link>