<?php

use App\Models\User;
use App\Models\Rider;
use App\Models\Partner;

test('login screen can be rendered', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();
    // $user = User::create([
    //     'name' => 'Samuel',
    //     'email' => 'adebsholey4real@gmail.com',
    //     'userable_id' => 1,
    //     'userable_type' => Rider::class,
    //     'partner_id' => collect(Partner::all()->modelKeys())->random(),
    //     'email_verified_at' => now(),
    //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    //     'remember_token' => Str::random(10),
    // ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
});
