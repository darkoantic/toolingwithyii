<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{

	function amInAddCustomerUi ()
	{
		$I = $this;
		$I->amOnPage('/customers/add');
	}

	public function imagineCustomer()
	{
		$faker = \Faker\Factory::create();
		return [
			'CustomerRecord[name]' => $faker->name,
			'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
			'CustomerRecord[notes]' => $faker->sentence(8),
			'CustomerRecord[number]' => $faker->phoneNumber
		];
	}

	function fillCustomerDataForm($fieldsData)
	{
		$I = $this;
		foreach ($$fieldsData as $key => $value) {
			$I->fillField($key, $value);
		}
	}

	function submitCustomerDataForm()
	{
		$I = $this;
		$I->click('Submit');
	}

	public function seeIAmInListCustomersUi()
	{
		$ = $this;
		$I->seeCurrentUrlMatches('/customers');
	}

	function amInListCustomersUi()
	{
		$T = $this;
		$I->amOnPage('/customers');
	}


}