$.extend(true,$.fn.dataTable.defaults,{
    'responsive':true,
    'stateSave':false,
    'pagingType':'first_last_numbers',
    'lengthMenu':[[5, 10, 25, 50, 100,-1],[5, 10, 25, 50, 100,'****']],
    'pageLength':5,
    'order':[],
    'language':{
    'url':'../Recursos/datatables/language/spanish.json',
    }
});