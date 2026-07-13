<?php

namespace Tests\Feature;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CampaignTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that an authenticated user can view the campaign creation form.
     */
    public function test_authenticated_user_can_view_create_form(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('campaigns.create'));

        $response->assertStatus(200);
        $response->assertSee('Buat Kampanye');
        $response->assertSee('Judul Kampanye');
    }

    /**
     * Test that an unauthenticated user cannot view the campaign creation form.
     */
    public function test_unauthenticated_user_cannot_view_create_form(): void
    {
        $response = $this->get(route('campaigns.create'));

        $response->assertRedirect(route('login'));
    }

    /**
     * Test that an authenticated user can create a campaign.
     */
    public function test_authenticated_user_can_create_campaign(): void
    {
        $user = User::factory()->create();

        $campaignData = [
            'title' => 'Bantuan Korban Bencana Banjir',
            'description' => 'Kampanye penggalangan dana untuk korban banjir di daerah X.',
            'target_amount' => 50000000,
            'is_active' => '1',
        ];

        $response = $this->actingAs($user)->post(route('campaigns.store'), $campaignData);

        $response->assertRedirect(route('campaigns.index'));
        $response->assertSessionHas('success', 'Kampanye berhasil dibuat.');

        $this->assertDatabaseHas('campaigns', [
            'title' => 'Bantuan Korban Bencana Banjir',
            'description' => 'Kampanye penggalangan dana untuk korban banjir di daerah X.',
            'target_amount' => 50000000,
            'is_active' => true,
        ]);
    }

    /**
     * Test that campaign creation validation works.
     */
    public function test_campaign_creation_validation(): void
    {
        $user = User::factory()->create();

        // Send empty data
        $response = $this->actingAs($user)->post(route('campaigns.store'), []);

        $response->assertSessionHasErrors(['title', 'target_amount']);
    }

    /**
     * Test that an authenticated user can delete a campaign.
     */
    public function test_authenticated_user_can_delete_campaign(): void
    {
        $user = User::factory()->create();
        $campaign = Campaign::create([
            'title' => 'Kampanye Untuk Dihapus',
            'description' => 'Untuk dihapus.',
            'target_amount' => 1000000,
            'is_active' => true,
        ]);

        $response = $this->actingAs($user)->delete(route('campaigns.destroy', $campaign));

        $response->assertRedirect(route('campaigns.index'));
        $response->assertSessionHas('success', 'Kampanye berhasil dihapus.');

        $this->assertDatabaseMissing('campaigns', [
            'id' => $campaign->id,
        ]);
    }

    /**
     * Test that an unauthenticated user cannot delete a campaign.
     */
    public function test_unauthenticated_user_cannot_delete_campaign(): void
    {
        $campaign = Campaign::create([
            'title' => 'Kampanye Untuk Dihapus',
            'description' => 'Untuk dihapus.',
            'target_amount' => 1000000,
            'is_active' => true,
        ]);

        $response = $this->delete(route('campaigns.destroy', $campaign));

        $response->assertRedirect(route('login'));

        $this->assertDatabaseHas('campaigns', [
            'id' => $campaign->id,
        ]);
    }

    /**
     * Test that an authenticated user can view the edit form.
     */
    public function test_authenticated_user_can_view_edit_form(): void
    {
        $user = User::factory()->create();
        $campaign = Campaign::create([
            'title' => 'Kampanye Lama',
            'description' => 'Lama.',
            'target_amount' => 5000000,
            'is_active' => true,
        ]);

        $response = $this->actingAs($user)->get(route('campaigns.edit', $campaign));

        $response->assertStatus(200);
        $response->assertSee('Edit Kampanye');
        $response->assertSee('Kampanye Lama');
    }

    /**
     * Test that an authenticated user can update a campaign.
     */
    public function test_authenticated_user_can_update_campaign(): void
    {
        $user = User::factory()->create();
        $campaign = Campaign::create([
            'title' => 'Kampanye Sebelum Update',
            'description' => 'Lama.',
            'target_amount' => 5000000,
            'is_active' => true,
        ]);

        $updatedData = [
            'title' => 'Kampanye Setelah Update',
            'description' => 'Baru.',
            'target_amount' => 10000000,
            'is_active' => '1',
        ];

        $response = $this->actingAs($user)->put(route('campaigns.update', $campaign), $updatedData);

        $response->assertRedirect(route('campaigns.index'));
        $response->assertSessionHas('success', 'Kampanye berhasil diperbarui.');

        $this->assertDatabaseHas('campaigns', [
            'id' => $campaign->id,
            'title' => 'Kampanye Setelah Update',
            'description' => 'Baru.',
            'target_amount' => 10000000,
            'is_active' => true,
        ]);
    }
}
