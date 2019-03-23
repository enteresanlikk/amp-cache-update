# AMP CACHE UPDATE SYSTEM
<p align="center" style="margin: 50px 0;">
    <img src="amp-logo.svg" />
</p>

> You can use this system if you still have old AMP content after changing the AMP content. With this system, you can update the cache of your AMP pages.

## How to use it?

#### The system is currently in full use. What you need to do;

1. Take the project to your computer.

    `git clone https://github.com/enteresanlikk/ivs-amp-cache-update.git`

    or

    > You can download the project directly.

2. Import the Private.pem file (RSA). **If this file does not exist, the system will not work!**
    > You can visit the link [https://developers.google.com/amp/cache/update-cache](https://developers.google.com/amp/cache/update-cache#rsa-keys) to create an RSA key.

3. Move the project to the place where you will run it. (Example: htdocs, etc.)
4. Enter the necessary information in the project. You can update information from [this file](index.php).

        $domain = "https://example.com"; //Your domain.

        $urls = [
            "https://example.com/category/example-url/amp",
            "https://example.com/category/example-1-url/amp",
            "https://example.com/category/example-2-url/amp"
        ]; //Links pages to be updated in the AMP cache. Pages must be AMP. This variable must be sent as an array.

        $pemFileName = "website"; //Your private.pem filename that belongs to your site. If you want, you can write the file with the extension (.pem).
        
5. Run the project. Just start your Apache server.
6. Go to your project from the browser. For the links you enter, you will be generated AMP cache update links. Go to these links one by one.
7. The AMP cache update link you went to should return the result **OK**. Otherwise, the problem has occurred, and the page you are going to will have a problem.(Usually ***private key error***.)
