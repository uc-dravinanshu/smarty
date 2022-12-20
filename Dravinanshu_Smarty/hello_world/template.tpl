


<!-- Hello {$firstname} {$lastname}, glad to see you can make it.
<br />
{* this will not work as $variables are case sensitive *}
This weeks meeting is in {$meetingplace}.
{* this will work *}
This weeks meeting is in {$meetingPlace}. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{$var}</h1>
   <h5>
    <table border='1' cellpadding='0' cellspacing='0' bgcolor='silver'>
        <tr>
           <th>First Name &nbsp; Last name &nbsp; MeetingPlace</th>
        </tr>
        <tr>
            <td>{$firstname} &nbsp; {$lastname} &nbsp; {$meetingPlace}</td>
        </tr>
    </table>
   </h5>
</body>
</html>