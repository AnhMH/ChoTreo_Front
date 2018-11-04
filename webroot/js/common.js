jQuery(document).ready(function(){
    $('#sortBy').on('change', function(){
        var val = $(this).val();
        var url = $('#sortByParam').val();
        location.href = url + '&sort=' + val;
    });
    
    $('#limitData').on('change', function(){
        var val = $(this).val();
        var url = $('#limiDataParam').val();
        location.href = url + '&limit=' + val;
    });
});