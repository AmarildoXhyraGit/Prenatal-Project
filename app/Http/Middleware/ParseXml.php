<?php
$xmlfile = 'storage\xml\dentsu-feed.xml';
$item = simplexml_load_file($xmlfile) or die("Error: Cannot create XML object");
$ItemList = '<h2 align="center">Items List from XML Document</h2>';
$ItemList .= '<table border="1" align="center" cellpadding="5">
<tr>
<th>#</th>
<th>price</th>
</tr>';
$key = 1;
foreach ($items as $iteminfo):
$itemsList .= "<tr>
<td>".$iteminfo->id."</td>
<td>".$iteminfo->price."</td>
</tr>";
endforeach;
$itemsList .= '</table>';

echo $itemsList;