<?php

namespace Tests\Feature;

use App\Models\Milestone;
use App\Models\SubMilestone;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class subMilestoneTest extends TestCase
{

    public function testSuccessPOst()
    {
        $milestone = Milestone::first()->id;
//        dd($milestone);
        $response = $this->post(route('sub_milestone.store'), [
            'milestone_id' => $milestone,
            'bobot' => '1',
            'start_date' => '2021-08-01',
            'due_date' => '2021-08-01',
            'description' => 'description',
            'progress' => 'Done',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Sub Milestone berhasil ditambahkan',
            'sub_milestone' => [
                'milestone_id' => $milestone,
                'bobot' => '1',
                'start_date' => '2021-08-01',
                'due_date' => '2021-08-01',
                'description' => 'description',
            ]
        ]);
    }

    public function testSuccessWithFile()
    {
        $file = UploadedFile::fake()->image('avatar.jpg');
        $milestone = Milestone::first()->id;
//        dd($milestone);
        $response = $this->post(route('sub_milestone.store'), [
            'milestone_id' => $milestone,
            'bobot' => '1',
            'start_date' => '2021-08-01',
            'due_date' => '2021-08-01',
            'description' => 'description',
            'file' => $file,
            'progress' => 'Done',
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'Sub Milestone berhasil ditambahkan',
            'sub_milestone' => [
                'milestone_id' => $milestone,
                'bobot' => '1',
                'start_date' => '2021-08-01',
                'due_date' => '2021-08-01',
                'description' => 'description',
            ]
        ]);
        //check file
        $this->assertFileExists(public_path('storage/' . $response->json()['sub_milestone']['file']));
    }

    public function testSuccessUpdate()
    {
        $file = UploadedFile::fake()->image('avatar.jpg');
        $milestone = SubMilestone::first();
        $milestone_id = $milestone->id;

        $response = $this->put(route('sub_milestone.update'), [
            'id' => $milestone_id,
            'bobot' => '1',
            'start_date' => '2021-08-01',
            'due_date' => '2021-08-01',
            'description' => 'description',
            'file' => $file,
            'progress' => 'Done',
        ]);
        $response->assertStatus(200);
    }

    public function testSuccessDelete()
    {
        $milestone = SubMilestone::first();
        $milestone_id = $milestone->id;

        $response = $this->delete(route('sub_milestone.delete'), [
            'id' => $milestone_id,
        ]);
        $response->assertStatus(200);
        self::assertFileDoesNotExist(public_path('storage/' . $milestone->file));
    }
}
