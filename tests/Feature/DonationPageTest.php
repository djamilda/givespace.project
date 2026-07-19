<?php

namespace Tests\Feature;

use Tests\TestCase;

class DonationPageTest extends TestCase
{
    public function test_donasi_page_loads_successfully(): void
    {
        $response = $this->get('/donasi');

        $response->assertStatus(200);
        $response->assertSeeText('Donasi Sekarang');
    }
}
