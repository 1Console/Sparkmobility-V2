<?php

use function Pest\Laravel\get;
it('returns a successful response', function () {
    //method 1
    // $response = $this->get('/');
    // $response->assertStatus(200);

    //method 2
    //Act & Assert
    get('/')
    ->assertOk();

});
