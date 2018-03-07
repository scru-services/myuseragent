<?php

		// include the domain information from the root dir
		require '../../inc/browscap.php';
		require '../../inc/domain.php';
		require '../../inc/projects.php';

		// include the project_data from the project dir
		// check this data if you setup a new project
		require 'inc/project_data.php';

		// include the header from the root dir
		require '../../inc/header.php';

?>

	<!-- scru-service start -->

	<?php

		// get visitory user agent
		$user_agent = (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : false;

	?>

	<?php if ($user_agent): ?>

		<div class="result-container success">
			<h4>User-Agent</h4>
			<div class="result small align-left" contenteditable="true" onclick="document.execCommand('selectAll',false,null)"><?php echo $user_agent; ?></div>
		</div>

	<?php else: ?>

		<div class="result-container error">
			<h4>Error</h4>
			<div class="result" contenteditable="true" onclick="document.execCommand('selectAll',false,null)">No User-Agent available</div>
		</div>

	<?php endif; ?>

	<!-- scru-service end -->

<?php

	// include the domain information from the root dir
	require '../../inc/footer.php';

?>
