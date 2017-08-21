<?php
declare(strict_types=1);

use Illuminate\Database\Seeder;
use IntelliHR\Domain\Person\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * @var int
     */
    protected $count = 50;

    /**
     * @var \Faker\Generator
     */
    protected $faker;

    public function run()
    {
        $this->faker = Faker\Factory::create();

        for ($i = 1; $i <= $this->count; $i++) {
            $this->createNewPerson($i);
        }
    }

    private function createNewPerson(int $i)
    {
        $deletedAt = $this->faker->optional(0.1, null)->dateTimeBetween();
        Person::create([
            'id' => $i,
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'deleted_at' => $deletedAt,
        ]);
    }
}
