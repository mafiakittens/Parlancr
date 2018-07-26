## Run a simple html/css/js webserver locally
Run with python 3.+
```
python -m http.server 8000
```
For python 2.
```
python -m SimpleHttpServer 8000
```
Run a php sebserver locally
```
php -S localhost:8000
```

## Instructions for uploading to iSchool Using an FTP client
(such as FileZilla on Windows or Cyberduck on Mac)

1. Connect to the iSchool via the following credentials:
    host: ischool.berkeley.edu
    username: your iSchool username
    password: your iSchool passwordport: 22

2. Once you’re connected, you’ll see your pre-configured directories. Go into the folder called “public_html.”

3. Upload all files/folders necessary for your webpage in this folder, ensuring that “index.html” is placed just inside “public_html” (i.e. not buried in another folder within “public_html”)

4. After you’re done, your web page is publicly visible at the url: http://people.ischool.berkeley.edu/~your-username/ (be sure to include the “~” before your username.
