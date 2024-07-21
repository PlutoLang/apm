<?php
header("Refresh: 0; url=https://github.com/agnostic-pm/use.agnostic.pm#readme");
header("Content-Type: text/pluto-lang.org");
?>
package.preload["gitwit"] = function()
	<?php require "gitwit.pluto"; ?>
end
<?php require "apm.pluto"; ?>
