<?php

include __DIR__.'/io.php';

// io include needs to have happened for debug fn to exist.
if(!file_exists(__DIR__.'/config.php')) {
    fail("<b>Hold on Sparky!</b> You need to copy the
        contents of the <code>config_sample.php</code>
        file into a new <code>config.php</code> file and fill in the database
        details, or Linora can't store and retrieve your links.");
}

include __DIR__.'/config.php';
include __DIR__.'/db.php';
