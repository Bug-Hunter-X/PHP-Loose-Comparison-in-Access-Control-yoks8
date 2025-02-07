# PHP Loose Comparison Vulnerability

This repository demonstrates a common yet subtle bug in PHP related to loose comparison (`==`) in access control functions.  Loose comparison can lead to unexpected authorization results due to PHP's type juggling behavior.  This can create a security vulnerability if not carefully addressed.

The `bug.php` file showcases the problematic code. The `bugSolution.php` file provides a solution to mitigate this issue.