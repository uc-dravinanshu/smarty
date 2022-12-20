<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Upload An Image</label>
                        <input class="form-control mb-3" type="file" name="image" required>
                        <input type="submit" name="upload"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {if $success == '1'}
         <img src="upload/{$fn}" alt="error">
    {/if}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>