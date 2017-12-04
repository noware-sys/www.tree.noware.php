<ul>
	<script type="text/javascript">
		var url = new URL (window.location.href);
		var suburl = new URL (url.searchParams.get ('src'));
		//var path = suburl.searchParams.get ('path');
		var path = '<?php echo $ntt -> path; ?>';
		
		if (path != '')
			path += '/';
		
		//console.log (url.href);
	</script>
	
	<?php
		foreach ($ntt -> ls () as $row)
		{
			?><li><?php
				if ($row [1]/* value.type*/ == 0)
				//if (false)
				{
					?><a target="_blank" href="/contnt.tree.noware.php/?root=<?php echo urlencode ($ntt -> root); ?>&path=<?php echo urlencode ($ntt -> path); ?>&key=<?php echo urlencode ($row [0]); ?>"><?php echo $row [0]; ?></a><script type="text/javascript">
						//console.log (url.href);
					</script><?php
				}
				else //if ($row [1] == 1)
				{
					?><a id="_href_<?php echo $row [0]; ?>" href=""><?php echo $row [0]; ?></a><script type="text/javascript">
						//var url = new URL (window.location.href);
						//var suburl = new URL (url.searchParams.get ('src'));
						//var path = suburl.searchParams.get ('path');
						suburl.searchParams.set ('path', (path + '<?php echo $row [0]; ?>'));
						url.searchParams.set ('src', suburl.href);
						document.getElementById ('_href_<?php echo $row [0]; ?>').href = url.href;
						//console.log (url.href);
					</script><?php
				}
			?></li><?php
		}
	?>
</ul>
