{* Smarty *}

<table>
	<tr>
		<td>
			<form method='post' action=''>
				{html_options name=language options=$languages selected=$selectedLanguage}
				 <input type="submit" value="Load language">
				</form>
			</td>
		</tr>
	<tr>
		<td>{$text}
			</td>
		</tr>
</table>
