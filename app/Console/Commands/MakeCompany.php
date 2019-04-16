<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;

class MakeCompany extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'contact:company {name}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Adds a new comapany';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$company = Company::create([
			'name'=> $this->argument('name'),
		]);
$this->info('Added Company:'.$company->name);
		$this->warn("made by DR.H2SO4 Doctype Nepal");
	}
}
