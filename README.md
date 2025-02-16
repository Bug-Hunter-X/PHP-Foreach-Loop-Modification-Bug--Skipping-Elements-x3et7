# PHP Foreach Loop Modification Bug

This repository demonstrates a common error in PHP when modifying an array while iterating over it using a `foreach` loop.  Directly removing elements within the loop can lead to unexpected behavior, specifically skipping elements.

The `bug.php` file shows the problematic code. The `bugSolution.php` file provides corrected versions, illustrating several ways to avoid the issue.

This example highlights the importance of understanding how `foreach` loops handle array modifications and offers solutions for safer array manipulation.