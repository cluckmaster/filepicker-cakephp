# CakePHP Filepicker Plugin

This plugin is to help make using filepicker.io even easier with cakePHP.
Link to see it in action [somewhere](somewhere)

## Installation

#### 1. Requirements
- Cake 2.0+
- PHP 5.3+

#### 2. Including the Plugin
- [Download the latest version](https://github.com/Filepicker/filepicker-cakephp/zipball/master), extract/uncompress it, and move the `/Filepicker` directory to `app/Plugin/`

#### 3. Load the plugin in your `app/Config/bootstrap.php` file:

    //app/Config/bootstrap.php
    CakePlugin::load('Filepicker');

#### 4. Set up your configuration file

- Create an account at [Filepicker.io](https://www.filepicker.io) and get an apikey.
- Copy the example file from `app/Plugin/Filepicker/Config/filepicker.php.example` to `app/Config/filepicker.php`

        $config = array(
            'Filepicker' => array(
                 'apikey' => 'YOUR_API_KEY',
            )
        );

#### 5. Adding it into your app controller

Add the Filepicker helper to your app controller.

    <?php
    class AppController extends Controller {
        public $helpers = array('Filepicker.Filepicker');
    }

#### 6. Install the script tag

Insert the script tag into your view. For best performance, you should insert it at the end of the body, before the `</body>` tag.

     <?php
     echo $this->filepicker->scriptTag();

#### 7. Use it.

Where ever you have your form, you can insert a filepicker type tag.

    echo $this->Form->input('attachment', array(
        'type' => 'filepicker', 
        'data-fp-mimetypes' => "*/*",
    ));

For more options to put into the array, [look at the filepicker documentation on the open widget](https://developers.filepicker.io/docs/web/#widgets-open)

It will put a url into your form, which you can store into your database.

## Demo Application
