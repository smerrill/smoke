<?php

header('Content-Type: text/plain');

echo "Welcome to the OpenShift 3 Roadshow Smoke Test Application.\n\n";

echo "This is running on " . gethostname(). "!\n\n";

print_r($_SERVER);

