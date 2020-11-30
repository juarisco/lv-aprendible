<?php

namespace Tests\Feature;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects()
    {
        $this->withoutExceptionHandling();

        $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url' => 'mi-nuevo-proyecto',
            'description' => 'Descripción de mi nuevo proyecto',
        ]);

        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url' => 'mi-segundo-proyecto',
            'description' => 'Descripción de mi segundo proyecto',
        ]);

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
        $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url' => 'mi-nuevo-proyecto',
            'description' => 'Descripción de mi nuevo proyecto',
        ]);

        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url' => 'mi-segundo-proyecto',
            'description' => 'Descripción de mi segundo proyecto',
        ]);

        $response = $this->get(route('projects.show', $project));

        $response->assertSee($project->title);
        $response->assertDontSee($project2->title);
    }
}
