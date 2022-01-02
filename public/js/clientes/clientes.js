var token = $("#token").val();
var form_create = $("#form_create");
var form_edit = $("#form_edit");
var table = $("#table_data");
var table_data = [  {data: 'Nombre'},
                    {data: 'Apellidos'},
                    {data: 'fecha_naci'},
                    {data: 'nro_carnet'},
                    {data: 'direccion'},
                    {data: 'telefono'},
                    {data: 'estado'},
                    {data: 'options', 'class': 'dt-body-center'}   ];
var colum_options = 7;
var route_resource = "/registrar_cliente";
var id_cliente = $("#id_cliente").val();

$(document).ready(function () {
   // alert("Hola")
// load_table();

});
function load_table() {
    table.DataTable({
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': false,
        'ajax': {
            url: route_resource + "/create",
            type: "get",
            dataSrc: ''
        },
        'columns': table_data,
        "columnDefs": [
            {
                //en la posicion 6 se mostrara el estado del cliente
                targets: 6,
                searchable: false,
                orderable: false,
                render: function (data, type, row) {
                    if (row.estado == 0){
                        return '<div style="font-size: 10pt" class="chip orange white-text">'+data+'</div>'
                    }
                    if (row.estado == 1){
                        return '<div style="font-size: 10pt" class="chip green white-text">'+data+'</div>'
                    }
                    // if (row.estado == 2){
                    //     return '<div style="font-size: 10pt" class="chip red white-text">'+data+'</div>'
                    // }
                }
            },
            {
                targets: colum_options,
                searchable: false,
                orderable:false,
                render: function (data, type, row) {
                    var edit = "<button value=" + row.id + " OnClick='edit(this);' class='waves-effect waves-light btn btn-floating' title='Editar'>" +
                        "<i class='material-icons'>mode_edit</i></button>";
                    var destroy = "<button class='btn btn-danger btn-floating' value=" + row.id + " OnClick='destroy(this);' title='Eliminar'>" +
                        "<i class='material-icons'>delete</i></button>";
                    var print = "";
                    if(row.estado != 0){ //no esta en estado revision
                        edit = "";
                        print = "<button class='btn btn-danger btn-floating' value=" + row.id + " OnClick='print_doc(this);' title='Imprimir'>" +
                        "<i class='material-icons'>print</i></button>";
                    }
                    if(row.estado == 2){ //esta anulada
                        destroy = "";
                    }
                    return  print + "&nbsp;" + edit + "&nbsp;" + destroy;
                }
            }
        ],
        "order": [[ 1, "desc" ]],
    });
}
