# Laravel 5 Simple CMS
Laravel 5.4 content management system for starters. 
For 5.1, 5.2 and 5.3 check the [releases](https://github.com/ozdemirburak/laravel-5-simple-cms/releases).

-----
##Table of Contents

* [Features](#item1)
* [Quick Start](#item3)
* [Installation Guide](#item4)
* [User Guide](#item5)
* [Screenshots](#item6)
* [Türkçe](#item7)
* [License](#item8)

-----
<a name="item1"></a>
##Features:
* Admin Panel
    * Based on AdminLTE theme
    * Statistics fetched by Google Analytics API integrated dashboard
	* Language management.
	* Category and article management
	* Page management with nested sets
	* Server side oriented datatables
	* TinyMCE WYSIWYG editor with photo uploading features
* Front-end
	* View articles, categories, pages
    * Multi-language support

-----
<a name="item3"></a>
##Quick Start:

    $ git clone https://github.com/ozdemirburak/laravel-5-simple-cms.git CUSTOM_DIRECTORY && cd CUSTOM_DIRECTORY
    $ composer install

Create a database and configure the `.env` file.

    $ php artisan key:generate
    $ php artisan migrate
    $ php artisan db:seed

Install node and npm following one of the techniques explained within 
this [link](https://gist.github.com/isaacs/579814).
    
    $ npm install
    $ npm run production
    $ php artisan serve

Open [http://localhost:8000](http://localhost:8000) from your browser. 
To access the admin panel, hit the link 
[http://localhost:8000/admin](http://localhost:8000/admin) from your browser.
The application comes with default user with email address `admin@admin.com` and `123456`.

-----
<a name="item4"></a>
##Installation Guide:

* [Step 1: Download the Repository](#step1)
* [Step 2: Install Dependencies](#step2)
* [Step 3: Create database](#step3)
* [Step 4: Set Configuration](#step4)
* [Step 5: Migrate and Seed](#step5)
* [Step 6: Serve](#step6)

-----
<a name="step1"></a>
### Step 1: Download the Repository

Either Clone the repository using git clone: `git clone https://github.com/ozdemirburak/laravel-5-simple-cms.git CUSTOM_DIRECTORY` or install via <a target="_blank" href="https://github.com/ozdemirburak/laravel-5-simple-cms/archive/master.zip">zip</a> and extract to any of your folders you wish.

-----
<a name="step2"></a>
### Step 2: Install Dependencies

To install the composer dependencies you need to have composer installed, 
if you don't have composer installed, then [follow these instructions](https://getcomposer.org/download/). Then run,
`composer install` within your `CUSTOM_DIRECTORY`.

To install node and npm follow one of the techniques explained within this [link](https://gist.github.com/isaacs/579814).
Then, to install Laravel project dependencies, run `npm install`. Finally to combine the javascript and style files run 
`npm run dev`.

Rename your `.env.example` file as `.env` and change the variables as your own. If you have any variables with
 any spaces, double quote them, for instance, if you have a variable that equals to John Doe,
use "John Doe" instead.

Finally, to generate a unique application key, run `php artisan key:generate`.

-----
<a name="step3"></a>
### Step 3: Create database

-----
<a name="step4"></a>
### Step 4: Set Configuration

Open your `.env` file and change the fields corresponding to your own configurations.

All variables with `DB_` prefixes relates to your database configuration.

If you want to use the Gmail client to send emails, you need to change the `MAIL_USERNAME` variable as your 
Gmail username without `@gmail.com` and password as your Gmail password, `MAIL_FROM_ADDRESS` is your 
Gmail account with `@gmail.com` and `MAIL_FROM_NAME` is your name that is registered to that Gmail account.

To use the Analytics API, follow the instructions explained in detail [here](https://github.com/spatie/laravel-analytics#how-to-obtain-the-credentials-to-communicate-with-google-analytics).

-----
<a name="step5"></a>
### Step 5: Migrate and Seed

To migrate the database tables, run `php artisan migrate` and to seed the database with some data, 
run `php artisan db:seed`.

-----
<a name="step6"></a>
### Step 6: Serve

To serve the application, you can use `php artisan serve`, then open [http://localhost:8000](http://localhost:8000) 
from your browser. To access the admin panel, hit the link [http://localhost:8000/admin](http://localhost:8000/admin) 
from your browser. The application comes with default user with email address `admin@admin.com` and `123456`.

-----
<a name="item5"></a>
## User Guide

* [How to Create a New Resource](#u1)
* [How to Deploy](#u2)

-----
<a name="u1"></a>
### How to Create a New Resource

Lets assume we want to create a new resource for fruits where we'd like to manage our fruits with multi-language support, 
from our admin panel where will provide its' title and content.

    $ php artisan make:controller Admin/FruitController
    $ php artisan make:migration:schema create_fruits_table --schema="language_id:unsignedInteger:foreign, title:string, slug:string:unique, content:text"
    $ php artisan make:request Admin/FruitRequest
    $ php artisan make:form Forms/Admin/FruitsForm
    $ php artisan migrate

This will create everything that we need to manage our Fruits.

Afterwards, check your `resources/lang` folders' `admin.php` files, for the `/en` folder's `admin.php` file add the menu translations to `menu` array first.

```php
"fruit" => [
    "add"        => "Add a Fruit",
    "all"        => "All Fruits",
    "root"       => "Fruits"
],
 ```

Then to the `fields` array, add the translations for the form that will be generated for it again.

```php
"fruit" => [
    "content"     => "Content",
    "language_id" => "Language"
    "title"       => "Title"
],
```  

Finally for the breadcrumbs generation add the `fruit` translations like below.

```php
"fruit" => [
    "create"       => "Create fruit",
    "edit"         => "Edit fruit",
    "index"        => "Fruits",
    "show"         => "Show fruit"
],
```

After finishing the language parts, check the Fruit model, which is located in `app` folder as `Fruit.php`. 
As we are using slugs, configure the model as below.

```php
<?php namespace App;

use App\Base\SluggableModel;

class Fruit extends SluggableModel {

    protected $fillable = ['content', 'language_id', 'title'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
```

Hence add the relation to Language model that references our fruits.

```php
public function fruits()
{
    return $this->hasMany(Fruit::class);
}
```

Create new FruitDataTable controller for datatables within Http/Controllers/Api/DataTables folder and edit it.

```php
<?php

namespace App\Http\Controllers\Api\DataTables;

use App\Http\Controllers\Api\DataTableController;
use App\Fruit;

class FruitDataTable extends DataTableController
{
    protected $model = Fruit::class;

    protected $columns = ['title'];
    
    protected $common_columns = ['created_at', 'updated_at'];
    
    public function query()
    {
        $fruits = Fruit::whereLanguageId(session('current_lang')->id);
        return $this->applyScopes($fruits);
    }
}
```

Then configure the controller `FruitController.php` file located in Controllers folder's Admin sub-folder as below:

```php
<?php 

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Fruit;
use App\Http\Controllers\Api\DataTables\FruitDataTable;
use App\Http\Requests\Admin\FruitRequest;

class FruitController extends AdminController
{
    public function index(FruitDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath());
    }

    public function store(FruitRequest $request)
    {
        return $this->createFlashRedirect(Fruit::class, $request);
    }

    public function show(Fruit $fruit)
    {
        return $this->viewPath("show", $fruit);
    }

    public function edit(Fruit $fruit)
    {
        return $this->getForm($fruit);
    }

    public function update(Fruit $fruit, FruitRequest $request)
    {
        return $this->saveFlashRedirect($fruit, $request);
    }

    public function destroy(Fruit $fruit)
    {
        return $this->destroyFlashRedirect($fruit);
    }
}
```

Open your `FruitRequest.php` file within `Requests/Admin` folder and configure it as below or how you wish, 
put some validation.

```php
<?php 

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class FruitRequest extends Request {
    public function rules()
    {
        return [
            'content' => 'required',
            'language_id' => 'required|integer',
            'title' => 'required|min:3'
        ];
    }
}
```

Then open your `FruitsForm.php` file located in `app/Forms` folder and configure it.

```php
<?php 

namespace App\Forms\Admin;

use App\Base\Forms\AdminForm;

class FruitsForm extends AdminForm
{
    public function buildForm()
    {
        $this
            ->add('language_id', 'choice', [
                'choices' => $this->data,
                'label' => trans('admin.fields.fruit.language_id')
            ])
            ->add('title', 'text', [
                'label' => trans('admin.fields.fruit.title')
            ])
            ->add('content', 'textarea', [
                'label' => trans('admin.fields.fruit.content')
            ]);
        $this->addButtons();
    }
}
```

Finally, create the fruits folder within `resources/views/admin` and create the views.

`create.blade.php` and `edit.blade.php` file as below:

```php
@extends('layouts.admin')

@section('content')
    {!! form($form) !!}
@endsection
```

`index.blade.php` file as below:

```php
@extends('layouts.admin')

@section('content')
    @include('partials.admin.datatable', ['dataTable' => $dataTable, 'buttons' => true])
@endsection
```

`show.blade.php` file as below:

```php
@extends('layouts.admin')
@section('content')
    <div class="col-xs-12 no-padding">
        <div class="post-title pull-left">
            <h1> {{ $object->title }} </h1>
        </div>
    </div>
    <p>{!! $object->content !!}</p>
@endsection
```

Add the fruit routes, to `routes/admin.php` file.

```php
Route::resource('fruit', 'FruitController');
```

Open the `RouteServiceProvider.php` file located in `Providers` folder and bind the fruit model.

```php
Route::model('fruit', \App\Fruit::class);
```

Finally, add the Fruit resource to our menu. To do that, open the `MakeMenu` middleware located in `Http/Middleware` 
folder and configure it as below.

```php  
$fruits = $menu->add($this->translate('fruit.root'), '#')
    ->icon('apple')
    ->prependIcon();

$fruits->add($this->translate('fruit.add'), ['route' => 'admin.fruit.create'])
    ->icon('circle-o')
    ->prependIcon();

$fruits->add($this->translate('fruit.all'), ['route' => 'admin.fruit.index'])
    ->icon('circle-o')
    ->prependIcon();
```

Now you have your fruit resource that can be manageable within your admin panel.

-----
<a name="u2"></a>
### How to Deploy 

I have showed all the required steps in detail for a deployment with Git and Capistrano from scratch on my blog.
You can check it on: [http://burakozdemir.co.uk/article/deploying-laravel-projects-with-git-and-capistrano-to-nginx-server](http://burakozdemir.co.uk/article/deploying-laravel-projects-with-git-and-capistrano-to-nginx-server)

-----
<a name="item6"></a>
## Screenshots

![Index](https://i.imgur.com/tWeEAtp.png)
![Single post](https://i.imgur.com/RUnpPgh.png)
![Admin login](https://i.imgur.com/UtNKKcA.png)
![Admin dashboard](https://i.imgur.com/Tv9il5u.png)
![Admin dashboard worldmap](https://i.imgur.com/RqKodcK.png)
![Admin datatables](https://i.imgur.com/IxZggki.png)
![Admin nested sets](https://i.imgur.com/4bZA94c.png)
![Admin settings](https://i.imgur.com/gkFO9x4.png)

-----

<a name="item7"></a>
## Türkçe

Kendi blogumda detaylı olarak bu uygulamayı kurulumundan, sunucuya aktarımına kadar, baştan sona nasıl geliştirdiğimi 
detaylı olarak anlattım, alttaki linklerden sırasıyla bunlara ulaşabilirsiniz.

1. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-kurulum">Laravel 5 ile CMS - Kurulum</a>
2. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-migration-seed-middleware-elixir-bower-gulp-blade">Laravel 5 ile CMS - Migration, Seed, Middleware, Elixir, Bower, Gulp, Blade</a>
3. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-controller-model-request-provider-form"> Laravel 5 ile CMS - Controller, Model, Request, Provider, Form</a>
4. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-wysiwyg-filemanager-coklu-dil-google-analitik-api">Laravel 5 ile CMS - WYSIWYG Filemanager, Çoklu Dil, Google Analitik API</a>
5. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-events-email-ve-frontend">Laravel 5 ile CMS - Events, Email ve Frontend</a>
6. <a target="_blank" href="http://burakozdemir.co.uk/article/laravel-5-ile-cms-ftp-veya-ssh-ile-aktarim-deployment">Laravel 5 ile CMS - FTP veya SSH ile Aktarım (Deployment)</a>

-----

<a name="item8"></a>
## License

This is free software distributed under the terms of the MIT license

-----
