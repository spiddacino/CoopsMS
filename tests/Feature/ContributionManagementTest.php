<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Contribution;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContributionManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function contribution_can_be_added()
    {

       $this->withoutExceptionHandling();

       $response = $this->post('/contributions', [
            'contribution' => '10',
        ]);

        //  assertions
        $response->assertOk();
        $this->assertCount(1, Contribution::all());
    }
    
}
