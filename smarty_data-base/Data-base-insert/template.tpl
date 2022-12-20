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
    {if $success eq '1'}
     <p>Data is saved</p>
    {/if}
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <form action="#" method="post">
               <input type="hidden" name="id" id="id"/>
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">User Course</label>
                  <input type="text" name="course" id="course" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">User Collegee</label>
                  <input type="text" name="college" id="college" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary" name="done" value="save">Submit</button>
            </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>