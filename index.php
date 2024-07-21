<?php
header("Refresh: 0; url=https://agnostic.pm");
header("Content-Type: text/pluto-lang.org");
?>
package.preload["gitwit"] = function()
	<?php require "gitwit.pluto"; ?>
end
<?php require "apm.pluto"; ?>
