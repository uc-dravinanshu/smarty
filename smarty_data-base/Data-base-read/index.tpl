<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 tabindex="0" class="bg-secondary p-4 text-center text-white mb-3 mt-2">Data Read, Update, Delete</h1>
     <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <tr>
                        <th tabindex="0" width="20%">Number</th>
                        <th tabindex="0">Name</th>
                        <th tabindex="0">Course</th>
                        <th tabindex="0">College</th>
                        <th colspan="2" tabindex="0">Action</th>
                    </tr>
                    {section name=ct loop=$data}
                      <tr>
                        <td tabindex="0">
                            {$data[ct].no}
                        </td>
                        <td tabindex="0">
                            {$data[ct].name}
                        </td>
                        <td tabindex="0">
                            {$data[ct].course}
                        </td>
                        <td tabindex="0">
                            {$data[ct].college}
                        </td>
                        <td>
                           <a href="edit.php?id={$data[ct].id}">edit</a> | <a href="delete.php?id={$data[ct].id}">delete</a> 
                        </td>
                      </tr>
                    {/section}
                </table>
            </div>
            <div class="col-lg-4">
                <img src="" alt=""/>
            </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>