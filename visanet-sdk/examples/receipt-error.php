<?php
require_once '../vendor/autoload.php';
?>
<!DOCTYPE html>

<html>
  <head>
    <title>Simple Payment Example</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>

  <body>
    <div class="container">
      <h1>Payment Receipt</h1>

      <p class="alert alert-danger">
        Payment Error
      </p>

      <pre><code class="php"><?php var_export($error); ?></code></pre>
      <pre><code class="php"><?php var_export($_REQUEST); ?></code></pre>
    </div>
  </body>
</html>
