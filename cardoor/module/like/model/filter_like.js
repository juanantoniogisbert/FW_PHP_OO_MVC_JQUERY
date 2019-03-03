$(document).ready(function () {
    var url = "module/like/controller/controller_like.php?op=datatable";  
    // prepare the data
    var source =
    {
        dataType: "json",
        dataFields: [
            { name: 'matricula', type: 'string' },
            { name: 'marca', type: 'string' },
            { name: 'modelo', type: 'string' }
        ],
        id: 'id',
        url: url
    };
    
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#dataTable").jqxDataTable(
        {
            pageable: true,
            pagerButtonsCount: 10,
            source: dataAdapter,
            sortable: true,
            pageable: true,
            altRows: true,
            filterable: true,
            columnsResize: true,
            pagerMode: 'advanced',
            columns: [
            { text: 'Matriucla', dataField: 'matricula'},
            { text: 'Marca', dataField: 'marca' },
            { text: 'Modelo', dataField: 'modelo'}
        ]
        });  
});
