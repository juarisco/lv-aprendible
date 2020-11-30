<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_see_all_projects()
    {
        // $user = factory('App\User')->create();
        // dd($user->toArray());
        $project = factory(Project::class)->create();
        // dd($project->toArray());
        $project2 = factory(Project::class)->create();

        $response = $this->get(route('projects.index'));

        $response->assertStatus(200);

        $response->assertViewIs('projects.index');

        $response->assertViewHas('projects');

        $response->assertSee($project->title);
        $response->assertSee($project2->title);
    }

    /** @test */
    function it_can_see_individual_projects()
    {
        $project = factory(Project::class)->create();
        $project2 = factory(Project::class)->create();

        $response = $this->get(route('projects.show', $project));

        $response->assertSee($project->title);
        $response->assertDontSee($project2->title);
    }
}
