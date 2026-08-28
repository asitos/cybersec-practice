# dvwa security progression

## file upload

### low security
- uploaded a basic php web shell (shell.php).
- upload succeeded without any restrictions.
- code review: the php source code performs zero checks on the uploaded file extension or content type. it just moves the file directly to the uploads directory.

### medium security
- attempted to upload shell.php again.
- upload failed. the application returned an error stating it only accepts jpeg or png images.
- code review: the php source code was updated to check the mime type (content-type) of the uploaded file. it explicitly checks if the type is image/jpeg or image/png.
- bypass: intercepted the request with burp suite and modified the content-type header from application/x-php to image/jpeg. the upload succeeded.

### high security
- attempted the medium bypass technique.
- upload failed.
- code review: the php source code now checks the actual file extension against a strict whitelist (must end in .jpg or .png) and uses the getimagesize() function to verify the file actually contains valid image data.
- bypass: requires advanced techniques like polyglots or combining with local file inclusion to execute an image file as php.
