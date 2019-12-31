$(document).ready(function() {
        $('.tx_extbookdatabase').DataTable( {
        "paging":   true,
        "ordering": true,
        "order": [[ 6, "desc" ]],
        "info":     true,
        "responsive": false,
        "language": {
         info:   "_END_ / _TOTAL_",
         search:         "Suche:"
       },
    } );
    
} );