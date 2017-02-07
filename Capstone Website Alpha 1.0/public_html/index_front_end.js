function loadIndex()
{
	var display_Index_Table =  "<tr><td class=""color_1""><a href=""index.php"">Index</a></td><td ""color_2"">Index Page For Magic-Forum.cards</td>";
        for (var i = 0; i < display_Index_Table.length(); i++) {
            var fieldDataGet = $('#index_links_table').val();
            var fieldDataDisplay = display_Index_Table; 
            $("#index_links_table tbody").append(fieldDataDisplay);

}