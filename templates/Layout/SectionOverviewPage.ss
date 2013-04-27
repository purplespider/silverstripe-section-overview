<h1>$Title</h1>

$Content

<% loop Children %>
	<h2>&raquo; <a href="$Link">$Title</a></h2>
	
	<% if SummaryText %>
		<p>$SummaryText &nbsp; <a href="$Link"><strong>Read&nbsp;more</strong></a></p>
	<% else_if Content %>
		<p>$Content.Summary &nbsp; <a href="$Link"><strong>Read&nbsp;more</strong></a></p>
	<% end_if %>
	
<% end_loop %>

$Form
$PageComments