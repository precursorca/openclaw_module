<div id="openclaw-tab"></div>
<h2 data-i18n="openclaw.title"></h2>

<table id="openclaw-tab-table"></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/openclaw/get_data/' + serialNumber, function(data){
        var table = $('#openclaw-tab-table');
        $.each(data, function(key,val){
            var th = $('<th>').text(i18n.t('openclaw.column.' + key));
            var td = $('<td>').text(val);
            table.append($('<tr>').append(th, td));
        });
    });
});
</script>
