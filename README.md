Mango for Laravel
=================

http://getmango.com

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

You'll be able to edit your API config from `app/packages/maurocasas/laravel-mango`

---------------

## Usage

* [API Reference](https://developers.getmango.com/)
* Requires Guzzle 4+

#### Charges

	Mango::charges();

	Mango::findCharge('ID HERE');

	Mango::charge(array('param1' => 'value1', 'param2' => 'value2'));

#### Refunds

	Mango::refunds();

	Mango::findRefund('ID HERE');

	Mango::refund(array('param1' => 'value1', 'param2' => 'value2'));

#### Customers

	Mango::customers();

	Mango::findCustomer('ID HERE');

	Mango::createCustomer(array('param1' => 'value1', 'param2' => 'value2'));

	Mango::updateCustomer('ID HERE', array('param1' => 'value1', 'param2' => 'value2'));

	Mango::deleteCustomer('ID HERE');

#### Cards

	Mango::cards();

	Mango::findCard('ID HERE');

	Mango::createCard(array('param1' => 'value1', 'param2' => 'value2'));

	Mango::updateCard('ID HERE', array('param1' => 'value1', 'param2' => 'value2'));

	Mango::deleteCard('ID HERE');

#### Queue

	Mango::queue();

	Mango::findQueueItem('ID HERE');

	Mango::deleteQueueItem('ID HERE');

	Mango::emptyQueue();

#### Installments

	Mango::installments()



---------------------------

BTC: 1NrXMzNjd2PebgP54xoQk6ujMquwXp3SpA
Twitter: @m__casas