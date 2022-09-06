<?php

$url = 'https://github.com/login/oauth/authorize';
$params = [
   'client_id' => 'a369fba81f12d2a6577f',
   'redirect_url' => 'https://test.agile24.net/github_oauth.php',
   'scope' => 'repo read:org read:user user:email read:project',
   'state' => '134567'
];

$url .= "?" . http_build_query($params);

echo '<a href="'.$url.'">Connect with GitHub</a>';
