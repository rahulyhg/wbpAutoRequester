## wbpAutoRequester v1.0
Add a task to a controlable webpanel that use Basic Realm Authentication with cURL in PHP.

## Deployment:
Simply modify the script for your likings and upload it to your webserver and run it like a API. 
idea, localhost/api/modified.php?request=1&filename=svc.txt&content=blablabla

## Proof of Concept:
Let's imagine that John wont let you access his server with files that contain code for a controlable webpanel that performs actions but you somehow still need to be able to add a task without having to login via Basic Realm Authentication and manually add the task or task(s) then wbpAutoRequester does the job with cURL.
