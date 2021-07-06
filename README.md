# Introduction:
The main purpose of this package is to return the response in the desired way as the frontend development team requested.

# Setup:
This is a private package. So, the installation process is completely different. For this purpose, we recorded 2 videos which you can watch for the installation of this package.

 1. Installation
	 - [x] Video 01: [https://drive.google.com/file/d/1Bic6tk3b5cjQp3rQM3DS_Nj94O2qb77V/view](https://drive.google.com/file/d/1Bic6tk3b5cjQp3rQM3DS_Nj94O2qb77V/view)
	 - [x] Video 02: [https://drive.google.com/file/d/1yOJwaOvs9MKukk-Hh1NA_DG2ZITM8zBr/view](https://drive.google.com/file/d/1yOJwaOvs9MKukk-Hh1NA_DG2ZITM8zBr/view)
	 - [x] Auth URL: [https://packagist.com/profile/auth](https://packagist.com/profile/auth)
	 - [x] Private Package Setup Guide: [https://packagist.com/docs/setup#basic-setup](https://packagist.com/docs/setup#basic-setup)
 2. After installation, register the package service provider in `app.php` file like other packages.
	 - [x] `\ResponseTransformerServiceProvider::class`
 3. Register the package façade alias in `app.php` file:
	 - [x] `'RTransformer' => ResponseTransformer\Facades\API::class`
 4. Finally you can publish the config file:
	 - [x] `php artisan vendor:publish --tag=transformer-response`

# Usage:
You can using this package as façade as well as a helper function.

**01. Helper Function:**

    public function index()
    {
        $user = User::first();
        return api()->response(200, 'The very first user in the database', $user);
    }
     
**02. Facade:**

    use RTransformer;
    public function index()
    {
        $user = User::first();
        return RTransformer->response(200, 'The very first user in the database', $user);
    }
    
**Response**

    {
          "status": 200,
          "message": "The very first user in the database",
          "data": [
               {"name": "Hamid Noruzi"}
           ]
    }
