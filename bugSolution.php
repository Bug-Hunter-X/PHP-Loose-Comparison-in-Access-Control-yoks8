The solution is to use strict comparison (`===`) to prevent type juggling and ensure that the user role matches both in value and type.

```php
<?php

function checkPermissions($userRole) {
  if ($userRole === 1 || $userRole === 'admin') {
    // Grant access
    return true;
  } else {
    // Deny access
    return false;
  }
}

// Example usage (with strict comparison):
$userRole = 1; // Numeric user role
$authorized = checkPermissions($userRole); // Authorized

$userRole = 'admin'; // String user role
$authorized = checkPermissions($userRole); // Authorized

$userRole = '1'; // String representation of a number
$authorized = checkPermissions($userRole); // Not authorized

$userRole = '0'; // String representation of a number
$authorized = checkPermissions($userRole); //Not authorized

$userRole = 0; // Numeric user role
$authorized = checkPermissions($userRole); // Not authorized

$userRole = false; // Boolean user role
$authorized = checkPermissions($userRole); // Not authorized

?>
```

By using strict comparison, the code becomes more robust and less susceptible to unexpected behavior caused by type juggling.  Always prioritize strict comparison (`===`) in security-sensitive contexts to avoid vulnerabilities.