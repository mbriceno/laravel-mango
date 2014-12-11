Mango for Laravel
=================

http://getmango.com API wrapper for Laravel.

## Installation
#### Composer

	composer required maurocasas/laravel-mango

#### Manual

1. Download the zip or clone this repo to vendor/ in your Laravel install
2. Run `composer dump-autoload` in your Laravel dir

Finally add `MauroCasas\Mango\MangoServiceProvider` to your $providers under `app/config/app.php` 

You can now use the **Mango** facade

--------------

## Configuration

Run the following command

	php artisan config:publish maurocasas/laravel-mango

If not, try the following
	
	php artisan config:publish --path="dir/to/maurocasas/laravel-mango" laravel-mango

You'll be able to edit your API config from `app/packages/maurocasas/laravel-mango/config.php`

---------------

## Usage

* [Mango API Reference](https://developers.getmango.com/)
* Requires [Guzzle 4+](http://docs.guzzlephp.org/en/guzzle4/)

All responses are JSON decoded, and if you want to catch exceptions, you need to 
catch the [Guzzle Exceptions](http://docs.guzzlephp.org/en/guzzle4/) for all status codes.

All "create" methods will define the current ID to the related object, so you could for example do

	Mango::cards()->create(array('foo' => 'bar'))->update(array('foo' => 'bar2'))->delete();

#### [Charges](https://developers.getmango.com/en/api/charges/)

**List all charges**
	
	Mango::charges()->all();

**Find a charge**
	
	Mango::charges()->find('XYZ');

**Create a charge**
	
	Mango::charges()->create(array('foo' => 'bar'))

#### [Refunds](https://developers.getmango.com/en/api/refunds/)

**List all refunds**
	
	Mango::refunds()->all();

**Find a refund**
	
	Mango::refunds()->find('XYZ');

**Generate a refund**
	
	Mango::refunds()->create(array('foo' => 'bar'));

#### [Customers](https://developers.getmango.com/en/api/customers/)

**List all customers**

	Mango::customers()->all();

**Find a customer**

	Mango::customers()->find('xyz');

**Create a customer**

	Mango::customers()->create(array('param1' => 'value1', 'param2' => 'value2'));

**Update a customer**

	Mango::customers()->find('xyz')->update(array('param1' => 'value1', 'param2' => 'value2'));

**Delete a customer**

	Mango::customers()->find('xyz')->delete();

#### [Cards](https://developers.getmango.com/en/api/cards/)

**List all cards**

	Mango::cards()->all();

**Find a card**

	Mango::cards()->find('xyz');

**Create a card**

	Mango::cards()->create(array('param1' => 'value1', 'param2' => 'value2'));

**Update a card**

	Mango::cards()->find('xyz')->update(array('param1' => 'value1', 'param2' => 'value2'));

**Delete a card**

	Mango::cards()->find('xyz')->delete();

**Generate a CCV token** [API Reference](https://developers.getmango.com/en/api/ccvs/)

	Mango::cards()->ccv(123);

**Generate a card token based on it's info** [API Reference](https://developers.getmango.com/en/api/tokens/)
	
	Mango::cards()->token(array(
		'number' => '4507990000000010',
		'exp_month' => '3',
		'exp_year' => ' 2015',
		'holdername' => 'Test Visa',
		'type' => 'visa'
		));

#### [Queue](https://developers.getmango.com/en/api/queue/)

**Get all that sexy queue**

	Mango::queue()->all();

**Find an item from the queue**

	Mango::queue()->find('xyz');

**Delete an specific item from the queue**

	Mango::queue()->find('xyz')->delete();

**Clear the queue**

	Mango::queue()->clear();

#### [Installments](https://developers.getmango.com/en/api/installments/)

	Mango::installments()->all();

---------------------------

* **BTC:** 1NrXMzNjd2PebgP54xoQk6ujMquwXp3SpA
* **Twitter:** @m__casas