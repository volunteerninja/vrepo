      <div id="footer">
        Volunteer Ninjas &copy; 2013. All rights reserved. <a href="admin.php">Site Admin</a>
        <?php	
		include_once "fbaccess.php";
		if ($user) echo '<a href="' . $logoutUrl . '">Logout</a>';
		else echo '<a href="' . $loginUrl . '">Login</a>';
		if ($user){
			echo($user);
			echo($user_info['email']);
		}
	?>
      </div>

    </div>
  </body>
</html>

