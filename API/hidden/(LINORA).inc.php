<?php	// LINORA.INC.PHP - Application-specific INCLUDE	(c) C Lester
	// ==============   file for Linora.php				2013


// Manana: perhaps it would be prettier to replace this file with a JSON
// constant (somewhere well-protected!), to be passed to DB_easy's
// instantiation??



DEFINE("_db_host_","localhost");	/* = XAMPP default host,user,pw */
DEFINE("_db_user_","rjb");
DEFINE("_db_pw_","rjb");

DEFINE("_db_name_","Linora");		/* Database name for this aplication */


    // Initialize_myDatabase does what it's header suggests - it takes a
    // recently-created, connected, and SELECTed database $_DB and sets up
    // tables and anything else that are needed in it before first use. So
    // it's highly application-specific.

function Initialize_myDatabase($_DB,$EZ) // Note: these queries ar all true/false
  { try { $_DB->exec("CREATE TABLE entries
		(cat VARCHAR(100),url VARCHAR(200), cap VARCHAR (305))"); }
	catch ( PDOException $failure )
	  { $EZ->Failure($_DB,"ENTRIES table creation and initialization",
			__file__,__line__);  }
  }

?>