<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Repositories\CompanyRepository;
use App\Repositories\PersonCompanyRepository;
use App\Repositories\PersonRepository;

class PersonCompanySeeder extends Seeder
{
    /** @var PersonRepository */
    protected $personRepository;

    /** @var PersonCompanyRepository */
    protected $personCompanyRepository;

    /** @var CompanyRepository */
    protected $companyRepository;

    public function __construct(
        PersonCompanyRepository $personCompanyRepository,
        PersonRepository $personRepository,
        CompanyRepository $companyRepository
    ) {
        $this->personCompanyRepository = $personCompanyRepository;
        $this->personRepository = $personRepository;
        $this->companyRepository = $companyRepository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = $this->companyRepository->all();

        $this->personRepository->all()->map(function ($person) use ($companies) {
            $randomNumber = rand(1, 3);

            do {
                $randomCompany = $companies->random(1)->first();
                $this->personCompanyRepository->createFactory(1, [
                    'person_id' => $person->id,
                    'company_id' => $randomCompany->id,
                    'in_working' => false
                ]);

                $randomNumber--;
            } while ($randomNumber > 0);

            $this->personCompanyRepository->createFactory(1, [
                'person_id' => $person->id,
                'company_id' => $companies->random(1)->first()->id,
                'in_working' => true
            ]);
        });
    }
}