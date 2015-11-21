<?php

return array(

    'multi' => array(
        'user' => array(
            'driver' => 'eloquent',
            'model' => 'Tbl_user'
        ),
        'admin' => array(
            'driver' => 'eloquent',
            'model' => 'Tbl_user'
        )
    ),

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	)

);
